// config request
requirejs.config({
    baseUrl: 'www/assets/js/',
    paths:  {
        ajaxJquery: ['https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min', 'ajaxJquery'],
        datatables: ['https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min','datatables'],
        bootstrapBundle:['https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min','bootstrap.bundle'],
        JquerySlim: ['https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min', 'jquery.slim'],
        methods: 'customeFile/methods'
    }
});