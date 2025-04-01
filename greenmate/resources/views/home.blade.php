<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Green Mate</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-900 antialiased">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-20 py-4 bg-white shadow">
        <div class="text-xl font-bold text-green-600">Green Mate</div>
        <div>
            <a href="#" class="text-gray-700 hover:text-green-600 mx-4">Spelen</a>
            <a href="#" class="text-gray-700 hover:text-green-600 mx-4">Over ons</a>
            <a href="#" class="text-gray-700 hover:text-green-600 mx-4">Contact</a>
        </div>
    </nav>

    <!-- Green City Header -->
    <header class="bg-green-400 text-white py-48 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide">Green City</h1>
        <p class="mt-4 text-lg md:text-xl text-green-100">asdgasdgasdgk;asdmgksadg</p>
    </header>

    <!-- Game Section -->
    <section class="bg-white py-32 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-green-600 mb-10">Speel Green City</h2>

            <!-- Game Placeholder -->
            <div class="w-full aspect-video bg-gray-200 rounded-xl flex items-center justify-center text-gray-500 text-xl shadow-inner">
                <!-- Replace this with an iframe or canvas later -->
                Clash of Clans sim city builder, green city oh hell yeah les go
            </div>
        </div>
    </section>

    <!-- Comment Section -->
    <section class="py-20 px-6 mt-px50 bg-gray-50">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-green-600 mb-6">Laat een reactie achter</h2>
            <form action="#" method="POST" class="bg-white shadow-md rounded-lg p-8 space-y-6">
                <div>
                    <label for="name" class="block text-left text-sm font-semibold text-gray-700">Naam</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required>
                </div>
                <div>
                    <label for="message" class="block text-left text-sm font-semibold text-gray-700">Bericht</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" required></textarea>
                </div>
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-600 transition">Verstuur</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-12">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h3 class="text-2xl font-bold">Green Mate</h3>
                <p class="text-green-100 mt-2">Samen voor een duurzamere toekomst.</p>
            </div>
            <div>
                <p class="text-sm">📍 Amsterdam, Nederland</p>
                <p class="text-sm">📞 +31 6 1234 5678</p>
                <p class="text-sm">✉️ info@greenmate.nl</p>
            </div>
        </div>
        <div class="text-center text-sm mt-8 text-green-200">
            &copy; {{ date('Y') }} Green Mate. Alle rechten voorbehouden.
        </div>
    </footer>

    <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
</body>

</html>