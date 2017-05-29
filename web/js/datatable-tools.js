function resetFilters() {
    $("#rii_reportbundle_report_dateTo").val("");
    $('table.disponibilidad-table').datatable("reset-filters");
    setTimeout(function() {
        $('table.disponibilidad-table').datatable("reset-filters");
    }, 800);
}

function reloadPage() {
    window.location.reload(false);
}


