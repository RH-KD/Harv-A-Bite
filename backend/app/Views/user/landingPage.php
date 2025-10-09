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

    <?= view("components/head") ?>
</head>

<body class="flex flex-col bg-white min-h-screen">
    <!-- Header -->
    <?= view("components/header") ?>

    <!-- Main Content -->
    <main class="flex flex-col flex-1 justify-center items-center px-4 text-center">
        <h1 class="mb-4 font-extrabold text-[var(--primary-orange)] text-4xl md:text-5xl">Welcome to Harv-a-bite</h1>
        <p class="mb-8 max-w-xl text-gray-700 text-lg md:text-xl">
            Discover delicious flavors, vibrant ambiance, and a taste of home. Join us for a memorable dining experience!
        </p>
        <div class="flex gap-4">
            <a href="/menu" class="hover:bg-blue-700 shadow px-6 py-3 rounded font-bold text-white transition bg-[var(--accent-blue)]">View Menu</a>
            <?= view("components/buttons/button_primary", ["href" => "#", "lbl" => "Book Tables"]) ?>
        </div>
    </main>

    <!-- Footer -->
    <?= view("components/footer") ?>
</body>

</html>