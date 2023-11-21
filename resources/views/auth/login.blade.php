<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"
          rel="stylesheet"
        />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
      </head>
<body class=" bg-gray-100 flex items-center justify-center m-0 backdrop-blur-md relative h-screen">
    <div class="min-h-screen flex items-center justify-center shadow-xl">
        <div class="bg-white p-8 rounded shadow-2xl w-96">
            <h2 class="text-3xl font-semibold mb-6 text-center">Sign in to your account</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email or Phone Number</label>
                    <input type="text" id="email" name="email" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2" />
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 w-full">Log In</button>
            </form>
            <hr class="my-6 border-t border-gray-300" />
            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? <a href="{{ route('register') }}" class="text-green-600">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
