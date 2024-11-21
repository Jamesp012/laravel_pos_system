


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Styles / Scripts --> 
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="../resources/css/index.css">
        @vite(['resources/css/index.css'])
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    @vite(['resources/css/custom.css'])
    <!-- --------------- -->

</head>
<body class="max-h-screen overflow-y-hidden">
  <nav class=" h-16 w-full bg-gray-800">
    <div class=>
      
    </div>
  </nav>  
  <div class="grid grid-flow-col min-w-screen h-screen overflow-hidden">
    <aside class="h-screen grid-cols-[min-content_1fr] bg-gray-500">
      <h1 class="m-2.5">MENU</h1>
      <div class="m-2.5 ">
        <ul class="list-none ml-2.5">
          <li>item1</li>
          <li>item2asadasdas</li>
          <li>item3</li>
          <li>item4</li>
          <li>
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">Logout</button>
          </form>
          </li>
        </ul>
      </div>
    </aside>
    <main class="p-6 mb-10 overflow-auto bg-gray-200">
      <div class="table-responsive m-5">
        <table id="users-table" class=" table table-bordered table-striped min-w-full">
          <thead>
            <tr>
              <th style="text-align:center;">id</th>
              <th style="text-align:center;">name</th>
              <th>email</th>
              <th>password</th>
              <th>email verified at</th>
              <th>created at</th>
              <th style="text-align:center;">updated at</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody class="max-h-min"></tbody>
        </table>
      </div>
    </main>
  </div>
  <script>  
    
  </script>
</body>

</html>