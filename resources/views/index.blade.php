<!--MOD2 -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
        <form class="p-10 border rounded-xl flex-row w-fit bg-gray-500" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4 ">
                <input id="email" class="p-2 text-sm h-8 w-56 rounded-lg font-medium text-gray-700 " type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
            </div>
            <div class="mb-4 ">
                <input id="password" class="p-2 text-sm h-8 w-56 rounded-lg font-medium text-gray-700" type="password" name="password" placeholder="Password" required autocomplete="current-password">
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex justify-end w-full">
                <button type="submit" class="bg-green-500 text-sm text-black px-6 py-2  font-bold rounded-3xl" >LOGIN</button>
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