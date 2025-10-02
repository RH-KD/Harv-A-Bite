<!-- Mood Board Page -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Add Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
<style>
    :root {
        --primary-orange: #ff7f2a;
        --accent-blue: #2563eb;
        --white: #fff;
    }

    .font-inter {
        font-family: 'Inter', sans-serif;
    }

    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    .font-pacifico {
        font-family: 'Pacifico', cursive;
    }
</style>

<div class="bg-white px-4 py-10 min-h-screen font-inter">
    <!-- Title -->
    <h1 class="mb-6 font-montserrat font-bold text-gray-900 text-3xl">Mood Board</h1>

    <!-- Color Palette Section -->
    <section class="mb-10">
        <h2 class="mb-4 font-montserrat font-semibold text-xl">Color Palette</h2>
        <div class="flex gap-6 mb-4">
            <div class="flex flex-col items-center">
                <div class="shadow border-4 border-orange-300 rounded-lg w-16 h-16" style="background: var(--primary-orange);"></div>
                <span class="mt-2 font-inter font-medium text-gray-700 text-sm">Primary Orange<br>#ff7f2a</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="shadow border-4 border-blue-300 rounded-lg w-16 h-16" style="background: var(--accent-blue);"></div>
                <span class="mt-2 font-inter font-medium text-gray-700 text-sm">Accent Blue<br>#2563eb</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="shadow border-4 border-gray-300 rounded-lg w-16 h-16" style="background: var(--white);"></div>
                <span class="mt-2 font-inter font-medium text-gray-700 text-sm">White<br>#fff</span>
            </div>
        </div>
    </section>

    <!-- Font Styles Section -->
    <section class="mb-10">
        <h2 class="mb-4 font-montserrat font-semibold text-xl">Font Styles</h2>
        <div class="flex gap-8">
            <div class="flex flex-col items-center">
                <span class="font-inter text-gray-900 text-2xl">Inter Example</span>
                <span class="mt-2 text-gray-700 text-sm">Inter</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-montserrat text-gray-900 text-2xl">Montserrat Example</span>
                <span class="mt-2 text-gray-700 text-sm">Montserrat</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-pacifico text-gray-900 text-2xl">Pacifico Example</span>
                <span class="mt-2 text-gray-700 text-sm">Pacifico</span>
            </div>
        </div>
    </section>

    <!-- Logo Styles Section -->
    <section class="mb-10">
        <h2 class="mb-4 font-montserrat font-semibold text-xl">Logo Styles</h2>
        <div class="flex gap-8">
            <!-- Square Logo -->
            <div class="flex flex-col items-center">
                <div class="flex justify-center items-center bg-[var(--primary-orange)] shadow rounded-lg w-20 h-20">
                    <span class="font-montserrat font-bold text-white text-3xl">HB</span>
                </div>
                <span class="mt-2 text-gray-700 text-sm">Square</span>
            </div>
            <!-- Circle Logo -->
            <div class="flex flex-col items-center">
                <div class="flex justify-center items-center shadow rounded-full w-20 h-20 bg-[var(--accent-blue)]">
                    <span class="font-pacifico font-bold text-white text-3xl">HB</span>
                </div>
                <span class="mt-2 text-gray-700 text-sm">Circle</span>
            </div>
        </div>
    </section>

    <!-- Button Styles Section -->
    <section class="mb-10">
        <h2 class="mb-4 font-montserrat font-semibold text-xl">Button Styles</h2>
        <div class="flex gap-6">
            <button class="bg-[var(--primary-orange)] hover:bg-orange-500 shadow px-6 py-2 rounded-lg font-inter font-semibold text-white transition">Primary</button>
            <button class="px-6 py-2 border-[var(--accent-blue)] border-2 rounded-lg font-montserrat font-semibold hover:text-white transition text-[var(--accent-blue)] hover:bg-[var(--accent-blue)]">Accent Outline</button>
            <button class="bg-gray-100 hover:bg-gray-200 shadow px-6 py-2 rounded-full font-pacifico font-semibold text-gray-700 transition">Neutral Pill</button>
        </div>
    </section>

    <!-- Card Example Section -->
    <section>
        <h2 class="mb-4 font-montserrat font-semibold text-xl">Card Example</h2>
        <div class="bg-white shadow-lg border border-gray-100 rounded-lg max-w-sm overflow-hidden">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=400&q=80" alt="Sample Item" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="mb-2 font-montserrat font-bold text-gray-900 text-lg">Pangalan</h3>
                <p class="mb-4 font-inter text-gray-700">FOod description po ito</p>
                <button class="bg-[var(--primary-orange)] hover:bg-orange-500 px-4 py-2 rounded font-inter font-semibold text-white transition">View Details</button>
            </div>
        </div>
    </section>
</div>