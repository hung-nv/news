const ui = {
    tableCategory: '#datatable-category'
};

$(function () {
    if ($(ui.tableCategory).length) {
        $(ui.tableCategory).dataTable({
            ordering: false,
            order: [[0, 'desc']],
            bLengthChange: true,
            bFilter: true
        });
    }
});