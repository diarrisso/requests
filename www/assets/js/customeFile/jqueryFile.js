define(['ajaxJquery', 'datatables', 'methods'],function () {
    jQuery(document).ready(function($){
        $('#example').DataTable({
            ajax: 'data/arrays.txt',
        });
    });
});