<header class="flex justify-between items-center bg-[var(--primary-orange)] shadow px-6 py-4 text-white">
    <div class="flex items-center gap-2">
        <a href="/" class="font-bold text-2xl tracking-wide">Harv-a-bite</a>
    </div>
    <nav class="flex gap-4">
        <?= view("components/buttons/button_secondary", ["href" => "/login", "lbl" => "Login"]) ?>
        <?= view("components/buttons/button_secondary", ["href" => "/signup", "lbl" => "Sign Up"]) ?>
        <?= view("components/buttons/button_secondary", ["href" => "/moodBoard", "lbl" => "Mood Board"]) ?>
        <?= view("components/buttons/button_secondary", ["href" => "/roadMap", "lbl" => "RoadMap"]) ?>
    </nav>
</header>