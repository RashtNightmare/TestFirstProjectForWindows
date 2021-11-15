<html>
   <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">     
   </head>

   <body>
       add_role
       <form method="get" action="/role">
        <!-- {{ csrf_field() }} -->
       <input name="name"/>
          <button type="submit">save</button>
       </form>
   </body>

</html>