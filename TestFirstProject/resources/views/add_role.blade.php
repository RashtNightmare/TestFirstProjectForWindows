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
<!doctype html>
<html>
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">     
   </head> 
   <body>
    <div class="w-full max-w-xs" style="text-align: left;">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
Role </label>   
   <form method="get" action="/role" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
   {{ csrf_field() }}      
     <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
         Name
        </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>
  </form>
</div>
<!-- //name	mobile	role_id	email password -->
<div class="w-full max-w-xs" style="text-align: left;">
   <form method="get" action="/user" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
   {{ csrf_field() }}      
<div class="mb-6">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
User </label>     
<div class="mb-4">

<label class="block text-gray-700 text-sm font-bold mb-2" for="name">
         Name
        </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name">
    </div>
    <div class="mb-4">

<label class="block text-gray-700 text-sm font-bold mb-2" for="name">
         Email
        </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="smth@gmail.com">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
    </div>

    <div class="mb-4">
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">
      mobile
    </label>
    <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mobile" name="mobile" type="mobile" placeholder="0000-000-00-00">
  </div>

      <div class="flex items-center justify-between">

    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Role_id
      </label>
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="role_id" id="grid-state">
          <!-- <option>User</option>
          <option>Role</option> -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testfirstproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM roles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<option>'.$row["id"].'</option>';
  }
} else {
  echo '<option>NO DATA WAS FOUND 500</option>';
}
$conn->close();
?>
      
         </select>
        </div>

        <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>

        </form>
</div>

</body>
</html>