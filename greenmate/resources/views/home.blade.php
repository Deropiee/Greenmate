<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900 antialiased">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-20 py-4 bg-white shadow">
        <div class="text-xl font-bold text-green-600">Green Mate</div>
        <div>
            <a href="#" class="text-gray-700 hover:text-indigo-600 mx-4">Home</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600 mx-4">Features</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600 mx-4">Contact</a>
        </div>
    </nav>

    <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
</body>
</html>