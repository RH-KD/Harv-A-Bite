<header class="flex justify-between items-center bg-[var(--primary-orange)] shadow px-6 py-4 text-white">
    <div class="flex items-center gap-2">
        <a href="/" class="font-bold text-2xl tracking-wide">Harv-a-bite</a>
    </div>
    <?php 
        $session = session();
        $user = $session->get('user');
    ?>
    <nav class="flex gap-4">
        <?php if ($session->has('user')): ?>
            <button
                onclick="confirmLogout(event)"
                class="bg-white px-6 py-2 border-[var(--accent-blue)] border-2 rounded-lg font-montserrat font-semibold hover:text-white transition text-[var(--accent-blue)] hover:bg-[var(--accent-blue)]"
            >
                Logout
            </button>
        <?php else: ?>
            <?= view('components/buttons/button_secondary', ['href' => '/login', 'lbl' => 'Login']) ?>
            <?= view('components/buttons/button_secondary', ['href' => '/signup', 'lbl' => 'Sign Up']) ?>
        <?php endif; ?>

        <?php if (strtolower($user['type'] ?? '') === 'admin'): ?>
            <?= view("components/adminQuick") ?>
        <?php else : ?>
            <?= view("components/buttons/button_secondary", ["href" => "/moodBoard", "lbl" => "Mood Board"]) ?>
            <?= view("components/buttons/button_secondary", ["href" => "/roadMap", "lbl" => "RoadMap"]) ?>
        <?php endif; ?>
    </nav>
</header>

<script>
function confirmLogout(event) {
    event.preventDefault();
    if (confirm("Are you sure you want to log out?")) {
        // use location.href so it behaves like a normal link (GET /logout)
        window.location.href = "<?= site_url('/logout') ?>";
    }
}
</script>