<?php
?>
<!-- Quick Actions -->
<!-- Head -->
<?= view("components/head") ?>

<body class="flex flex-col bg-white min-h-screen">
<!-- Header -->
    <?= view("components/header") ?>
    <div class="bg-white shadow-md p-6 border rounded-lg">
        <h2 class="mb-4 font-bold text-xl">Quick Actions</h2>
        <div class="flex flex-col gap-3">
            <?= view('components/buttons/button_primary', ["href" => "/dashboard", "lbl" => "Dashboard"]) ?>
            <?= view('components/buttons/button_primary', ["href" => "/menuPage", "lbl" => "Menu page"]) ?>
            <?= view('components/buttons/button_primary', ["href" => "#", "lbl" => "Requests page"]) ?>
        </div>
    </div>

    <main class="mx-auto mt-6 px-4 sm:px-6 lg:px-8 pb-12 w-full max-w-7xl">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="font-bold text-gray-900 text-2xl">Admin Menu</h1>
                <p class="text-gray-600 text-sm">Quick access to admin sections and management tools.</p>
            </div>

            <div class="flex items-center gap-3">
                <input
                    type="search"
                    placeholder="Search menu..."
                    class="px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 w-52 text-sm"
                />
                <a href="/admin/new" class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 shadow-sm px-4 py-2 rounded-md text-white text-sm">New</a>
            </div>
        </div>

        <section>
            <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <?= view("components/cards/card_primary", [
                    "name" => "Dashboard",
                    "desc" => "Overview of orders, revenue, and system health.",
                    "itemLink" => "/admin/dashboard",
                    "img" => "/assets/images/cards/dashboard.jpg"
                ]) ?>

                <?= view("components/cards/card_primary", [
                    "name" => "Services",
                    "desc" => "Manage service menu, categories and pricing.",
                    "itemLink" => "/admin/services",
                    "img" => "/assets/images/cards/services.jpg"
                ]) ?>

                <?= view("components/cards/card_primary", [
                    "name" => "Requests",
                    "desc" => "View and respond to incoming customer requests.",
                    "itemLink" => "/admin/requests",
                    "img" => "/assets/images/cards/requests.jpg"
                ]) ?>

                <?= view("components/cards/card_primary", [
                    "name" => "Orders",
                    "desc" => "Manage active and archived orders.",
                    "itemLink" => "/admin/orders",
                    "img" => "/assets/images/cards/orders.jpg"
                ]) ?>

                <?= view("components/cards/card_primary", [
                    "name" => "Users",
                    "desc" => "Manage staff accounts, roles and permissions.",
                    "itemLink" => "/admin/users",
                    "img" => "/assets/images/cards/users.jpg"
                ]) ?>

                <?= view("components/cards/card_primary", [
                    "name" => "Settings",
                    "desc" => "Configure system settings and integrations.",
                    "itemLink" => "/admin/settings",
                    "img" => "/assets/images/cards/settings.jpg"
                ]) ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?= view("components/footer") ?>
</body>

</html>