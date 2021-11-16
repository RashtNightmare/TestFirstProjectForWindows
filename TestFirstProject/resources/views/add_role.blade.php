<!-- <html>
   <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">     
   </head>

   <body>
       add_role
       <form method="get" action="/role">
    {{ csrf_field() }} -->
       <!-- <input name="name"/>
          <button type="submit">save</button>
       </form>
   </body> -->

<!-- </html> --> 
<html>
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">     
   </head> 
   <body>
    <div class="w-full max-w-xs" style="text-align: left;">
   <form method="get" action="/role" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
   {{ csrf_field() }}      
     <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
         Name
        </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
    </div>
      <div class="flex items-center justify-between">

    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        State
      </label>
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>User</option>
          <option>Role</option>
        </select>
        </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>

 
</div>
</body>
</html>