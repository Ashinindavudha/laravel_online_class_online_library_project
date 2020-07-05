<!DOCTYPE html>
<html>
  <head>
    <title>Make Autocomplete search using jQuery UI in Laravel</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('jquery_ui_js/jquery-ui.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery_ui_js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('jquery_ui_js/jquery-ui.min.js')}}" type="text/javascript"></script>

  </head>
  <body>

    <!-- For defining autocomplete -->
    <input type="text" id='employee_search'>

    <!-- For displaying selected option value from autocomplete suggestion -->
    <input type="text" id='employeeid' readonly>

    <!-- Script -->
    <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#employee_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('searches.ebook')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search').val(ui.item.label); // display the selected text
           $('#employeeid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });
    </script>
  </body>
</html>
