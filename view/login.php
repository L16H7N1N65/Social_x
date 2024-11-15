<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo '../tailwind.css'; ?>">
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center h-screen">

    <!-- Login Form -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Login</h2>
        <form method="POST" action="login.php">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="bg-blue-600 text-white w-full py-2 rounded-lg">Login</button>
        </form>
        <p class="text-center mt-4">
            <a href="forgot_password.php" class="text-blue-600 hover:underline">Forgot Password?</a> | 
            <a href="signin.php" class="text-blue-600 hover:underline">Sign Up</a>
        </p>
    </div>

</body>
</html>

