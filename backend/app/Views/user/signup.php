<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= view("components/head") ?>
</head>

<body class="flex flex-col bg-white min-h-screen">
    <!-- Header -->
    <?php
        $errors = $errors ?? [];
        $old = $old ?? [];
    ?>
    <?= view("components/header") ?>


    <div class="flex justify-center items-center bg-gray-50 min-h-screen">
        <div class="bg-white shadow-lg p-8 rounded-lg w-full max-w-md">
            <h1 class="mb-6 font-bold text-[color:var(--primary-orange)] text-2xl text-center">Create Account</h1>
            <form method="post" action="/signup" class="space-y-5" novalidate>
                <div>
                    <label for="username" class="block mb-1 font-medium text-gray-700 text-sm">Username</label>
                    <input type="text" id="username" name="username" required
                        class="px-4 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[color:var(--accent-blue)]">
                </div>
                <div>
                    <label for="email" class="block mb-1 font-medium text-gray-700 text-sm">Email</label>
                    <input type="email" id="email" name="email" required
                        class="px-4 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[color:var(--accent-blue)]">
                </div>
                <div>
                    <label for="password" class="block mb-1 font-medium text-gray-700 text-sm">Password</label>
                    <input type="password" id="password" name="password" required
                        class="px-4 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[color:var(--accent-blue)]">
                </div>
                <div>
                    <label for="confirmPassword" class="block mb-1 font-medium text-gray-700 text-sm">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required
                        class="px-4 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[color:var(--accent-blue)]">
                </div>
                <div>
                    <label for="type" class="block mb-1 font-medium text-gray-700 text-sm">Type</label>
                    <select name="type" id="type" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 w-full focus:ring-[color:var(--accent-blue)]">
                        <option value="vip">vip</option>
                        <option value="regular">regular</option>
                        <option value="basic">basic</option>
                    </select>
                </div>  
                <button type="submit"
                    class="bg-[color:var(--primary-orange)] hover:bg-orange-500 px-4 py-2 rounded w-full font-semibold text-white transition">
                    Sign Up
                </button>
            </form>
            <p class="mt-6 text-gray-600 text-sm text-center">
                Already have an account?
                <a href="/login" class="font-medium hover:underline text-[color:var(--accent-blue)]">Log in</a>
            </p>
        </div>
    </div>
</body>

</html>