<?php

namespace Rii\SecurityBundle\Entity;

use Exception;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

/**
 * Description of Context
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class Context {

    protected $container;
    protected $config;

    function __construct(Application $container) {
        $this->container = $container;
    }

    public function startUp() {

        $profileFile = $this->container['rii_config_path'];
        $this->container['monolog']->addInfo('Loading rii config path from:' . $profileFile);

        /* try to parse config */
        $ini_array = parse_ini_file($profileFile);

        $this->container['monolog']->addInfo('Rii config path loaded.');

        $configPath = $ini_array["config_path"];

        $profilesPath = $configPath . DIRECTORY_SEPARATOR . "profiles.ini";
        $this->container['monolog']->addInfo('Loading profiles from: ' . $profilesPath);

        /* open resource */
        $stream = fopen($profilesPath, "r");
        if ($stream) {
            $stringfile = stream_get_contents($stream);
            $this->config = parse_ini_string($stringfile, true);
            fclose($stream);
        } else {
            throw new Exception("No se puede leer el archivo en:" . $profilesPath);
        }
    }

    /**
     * Loggin user.
     * 
     * @param type $context
     * @param type $session
     * @param type $settings
     */
    public function logInUser($context, $session, $settings) {
        $this->container['monolog']->addInfo('Loggin user:' . $settings["NOMBRE"]);

        $session->set('profile_settings', $settings);
        $session->set('username', $settings["NOMBRE"]);
    }

    public function getConfig() {
        return $this->config;
    }

    public function setConfig($config) {
        $this->config = $config;
    }

    function getContainer() {
        return $this->container;
    }

    function setContainer($container) {
        $this->container = $container;
    }

}
