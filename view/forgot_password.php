<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="<?php echo '../tailwind.css'; ?>">
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center h-screen">

    <!-- Forgot Password Form -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Forgot Password</h2>
        <p class="text-gray-600 text-center mb-4">Enter your email address and we’ll send you a link to reset your password.</p>
        <form method="POST" action="forgot_password.php">
            <div class="mb-6">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="bg-blue-600 text-white w-full py-2 rounded-lg">Send Reset Link</button>
        </form>
        <p class="text-center mt-4">
            Remembered your password? <a href="login.php" class="text-blue-600 hover:underline">Login here</a>
        </p>
    </div>

</body>
</html>
