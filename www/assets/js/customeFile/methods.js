define(['ajaxJquery'],function ($){

    let methods = {};
    methods.changeHTML = function(args) {
      $('body').html(args);
    }
    methods.showAlert = function (args) {
        alert(args);
    }

    return methods;
});