<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-orange: #ff7f2a;
            --accent-blue: #2563eb;
            --white: #fff;
        }
    </style>
</head>

<body class="flex justify-center items-center bg-gray-50 min-h-screen">
    <div class="bg-white shadow-lg p-8 rounded-lg w-full max-w-md">
        <h1 class="mb-6 font-bold text-2xl text-center" style="color:var(--primary-orange)">Login</h1>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-4 text-red-600 text-sm">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= site_url('login') ?>">
            <?= csrf_field() ?>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="px-3 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[var(--accent-blue)]"
                    value="<?= old('email') ?>">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="px-3 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[var(--accent-blue)]">
            </div>
            <button type="submit"
                class="bg-[var(--primary-orange)] hover:bg-orange-500 px-4 py-2 rounded w-full font-semibold text-white transition">
                Sign In
            </button>
        </form>
        <div class="mt-6 text-center">
            <a href="<?= site_url('register') ?>" class="hover:underline text-[var(--accent-blue)]">Create an account</a>
        </div>
    </div>
</body>

</html>