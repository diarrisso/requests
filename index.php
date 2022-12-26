<!DOCTYPTE <html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>requestjs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>
 <body>

 <table id="example" class="display" style="width:100%">
     <thead>
     <tr>
         <th>Name</th>
         <th>Position</th>
         <th>Office</th>
         <th>Extn.</th>
         <th>Start date</th>
         <th>Salary</th>
     </tr>
     </thead>
     <tfoot>
     <tr>
         <th>Name</th>
         <th>Position</th>
         <th>Office</th>
         <th>Extn.</th>
         <th>Start date</th>
         <th>Salary</th>
     </tr>
     </tfoot>
 </table>

 <button id="clickMe">clickMe</button>
 <script  data-main="config"   src="require.js%202.3.6.js"></script>
 <script>
     require(['config'], function () {
         // alle code hier
         require(['customeFile/jqueryFile'])
     });
 </script>
 </body>
</html>















