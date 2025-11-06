<?php
?>
<!-- Quick Actions -->
<!-- Head -->
<?= view("components/head") ?>

<body class="flex flex-col bg-white min-h-screen">
<!-- Header -->
    <?= view("components/header") ?>
    <div class="gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-6 pt-6">
        <!-- Quick Actions -->
        <div class="bg-white shadow-md p-6 border rounded-lg">
            <h2 class="mb-4 font-bold text-xl">Quick Actions</h2>
            <div class="flex flex-col gap-3">
                <?= view('components/buttons/button_primary', ["href" => "/dashboard", "lbl" => "Dashboard"]) ?>
                <?= view('components/buttons/button_primary', ["href" => "/menuPage", "lbl" => "Menu page"]) ?>
                <?= view('components/buttons/button_primary', ["href" => "#", "lbl" => "Requests page"]) ?>
            </div>
        </div>

                <!-- Statistics -->
        <div class="bg-white shadow-md p-6 border rounded-lg">
            <h2 class="mb-4 font-bold text-xl">Today's Statistics</h2>
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <span>Active Orders:</span>
                    <span class="font-bold">0</span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Available Tables:</span>
                    <span class="font-bold">0</span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Today's Revenue:</span>
                    <span class="font-bold">$0</span>
                </div>
            </div>
        </div>

                <!-- Recent Activity -->
        <div class="bg-white shadow-md p-6 border rounded-lg">
            <h2 class="mb-4 font-bold text-xl">Recent Activity</h2>
            <div class="space-y-2">
                <p class="text-gray-600">No recent activity</p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?= view("components/footer") ?>
</body>

</html>