define(['ajaxJquery', 'datatables', 'methods'], function (method) {
    jQuery(document).ready(function($, method){
        $('#clickMe').click(function () {
           method.changeHTML('I WAS CLICKEDT');
        });
        //$('#onTouchCarrier').DataTable();
        $('#example').DataTable({
            ajax: 'data/arrays.txt',
        });
    });
});