'use strict';
// Class definition

var KTDatatableHtmlTableDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {

        var datatable = $('#kt_datatable_med_records').KTDatatable({
            data: {
                saveState: {cookie: false},
            },
            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch',
            },
            layout: {
                class: 'datatable-bordered',
            },
            columns: [
                {
                    field: 'Grupo Sanguineo',
                    width: 90,
                },
                {
                    field: 'Diabetes',
                    width: 60,
                },
                {
                    field: 'Hipertension',
                    width: 90,
                },
                {
                    field: 'Epilepsia',
                    width: 70,
                },
                {
                    field: 'Asma',
                    width: 60,
                },
                {
                    field: 'Embarazos',
                    width: 80,
                },
            ],
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

    };

    return {
        // Public functions
        init: function() {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableHtmlTableDemo.init();
});
