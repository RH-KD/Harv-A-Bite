<!-- app/Views/user/landingPage.php -->
<?php
// Data contract: none required for static landing page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Harv-a-bite | Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-orange: #ff7f2a;
            --accent-blue: #2563eb;
            --white: #fff;
        }
    </style>
</head>

<body class="flex flex-col bg-white min-h-screen">
    <!-- Header -->
    <header class="flex justify-between items-center bg-[var(--primary-orange)] shadow px-6 py-4 text-white">
        <div class="flex items-center gap-2">
            <span class="font-bold text-2xl tracking-wide">Harv-a-bite</span>
        </div>
        <nav class="flex gap-4">
            <a href="/login"
                class="bg-white px-4 py-2 rounded font-semibold hover:text-white transition-colors duration-200 text-[var(--accent-blue)] hover:bg-[var(--accent-blue)]">
                Login
            </a>
            <a href="/signup"
                class="bg-white px-4 py-2 rounded font-semibold hover:text-white transition-colors duration-200 text-[var(--accent-blue)] hover:bg-[var(--accent-blue)]">
                Sign Up
            </a>
            <a href="/moodBoard"
                class="bg-white px-4 py-2 rounded font-semibold hover:text-white transition-colors duration-200 text-[var(--accent-blue)] hover:bg-[var(--accent-blue)]">
                Mood Board
            </a>
            <a href="/roadMap"
                class="bg-white px-4 py-2 rounded font-semibold hover:text-white transition-colors duration-200 text-[var(--accent-blue)] hover:bg-[var(--accent-blue)]">
                Road Map
            </a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex flex-col flex-1 justify-center items-center px-4 text-center">
        <h1 class="mb-4 font-extrabold text-[var(--primary-orange)] text-4xl md:text-5xl">Welcome to Harv-a-bite</h1>
        <p class="mb-8 max-w-xl text-gray-700 text-lg md:text-xl">
            Discover delicious flavors, vibrant ambiance, and a taste of home. Join us for a memorable dining experience!
        </p>
        <div class="flex gap-4">
            <a href="/menu" class="hover:bg-blue-700 shadow px-6 py-3 rounded font-bold text-white transition bg-[var(--accent-blue)]">View Menu</a>
            <a href="/reservation" class="bg-[var(--primary-orange)] hover:bg-orange-600 shadow px-6 py-3 rounded font-bold text-white transition">Book a Table</a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white mt-12 py-4 border-t text-gray-500 text-sm text-center">
        &copy; <?= date('Y') ?> Harv-a-bite. All rights reserved.
    </footer>
</body>

</html>