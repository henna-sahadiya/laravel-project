$(document).ready(function() {
    $('#sort-options').on('change', function() {
        var sortBy = $(this).val();
        var rows = $('#results-table tbody tr').get();

        rows.sort(function(a, b) {
            var keyA = $(a).find('.' + sortBy).text().toUpperCase();
            var keyB = $(b).find('.' + sortBy).text().toUpperCase();

            if (keyA < keyB) return -1;
            if (keyA > keyB) return 1;
            return 0;
        });

        $.each(rows, function(index, row) {
            $('#results-table').children('tbody').append(row);
        });
    });
});
