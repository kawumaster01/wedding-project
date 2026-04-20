<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

<form method="POST" class="bg-white p-6 rounded shadow w-80">
    @csrf

    <h2 class="text-xl mb-4 text-center">Admin Access 🔐</h2>

    <input type="password" name="password"
        placeholder="Enter password"
        class="w-full p-3 border rounded mb-3">

    <button class="bg-black text-white w-full p-3 rounded">
        Enter
    </button>
</form>

</body>
</html>