<!--MOD2 -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

       <!-- Styles / Scripts -->

       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link rel="stylesheet" href="../resources/css/index.css">
        @endif

        <!-- --------------- -->

</head>
<body class="min-h-screen flex justify-center item-center">  
    <div class="mt-40">
        <form action="{{ route('register') }}" method="POST" class="p-10 border rounded-xl flex-row w-fit bg-gray-500" >
            @csrf
            <div class="mb-4">
                <input  class="p-2 text-sm h-8 w-48 rounded-lg font-medium text-gray-700 "
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="Enter Name" 
                        value="{{ old('name') }}" required >
            </div>
            <div class="mb-4">
                <input  class="p-2 text-sm h-8 w-48 rounded-lg font-medium text-gray-700 "
                        type="email" 
                        name="email" 
                        id="email" 
                        placeholder="Enter Email" 
                        value="{{ old('email') }}" required >
            </div>
            <div class="mb-4">
                <input  class="p-2 text-sm h-8 w-48 rounded-lg font-medium text-gray-700"
                        type="password" 
                        name="password" 
                        placeholder="Enter Password"
                        id="password" required > 
            </div>
            <div class="mb-4">
                <input  class="p-2 text-sm h-8 w-48 rounded-lg font-medium text-gray-700"
                        type="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Confirm Password"
                        id="password_confirmation" required > 
            </div>
            <div class="flex justify-end">
                <button class="bg-blue-500 text-sm text-black px-6 py-2  font-bold rounded-3xl" 
                        type="submit">
                            REGISTER
                </button>
            </div>
            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
    </div>
</body>
</html>