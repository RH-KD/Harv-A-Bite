<div class="bg-white shadow-md p-6 border rounded-lg">
    <h2 class="mb-4 font-bold text-xl">Quick Actions</h2>
    <div class="flex flex-row flex-wrap gap-3">
        <?= view('components/buttons/button_primary', ["href" => "/dashboard", "lbl" => "Dashboard"]) ?>
        <?= view('components/buttons/button_primary', ["href" => "/menuPage", "lbl" => "Menu page"]) ?>
        <?= view('components/buttons/button_primary', ["href" => "/orderPage", "lbl" => "Order page"]) ?>
    </div>
</div>