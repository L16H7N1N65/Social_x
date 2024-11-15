<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="<?php echo '../tailwind.css'; ?>">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-semibold">Social Network</h1>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="text-white">Dashboard</a></li>
                <li><a href="login.php" class="text-white">Login</a></li>
                <li><a href="signin.php" class="text-white">Sign Up</a></li>
                <li><a href="forgot_password.php" class="text-white">Forgot Password</a></li>
                <li><a href="message.php" class="text-white">Messages</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Messaging Dashboard Layout -->
    <div class="container mx-auto mt-6 flex space-x-4 h-[80vh]">

        <!-- Contacts Sidebar -->
        <div class="w-1/4 bg-white rounded-lg shadow-lg p-4 overflow-y-auto">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Contacts</h2>
            <ul class="space-y-3">
                <!-- Repeat this block for each contact -->
                <li class="flex items-center justify-between cursor-pointer hover:bg-gray-100 p-2 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="User Image" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="text-gray-700 font-semibold">Alice</p>
                            <p class="text-sm text-gray-500">Online</p>
                        </div>
                    </div>
                    <span class="text-green-400 text-xs">&#9679;</span> <!-- Online indicator -->
                </li>
                <li class="flex items-center justify-between cursor-pointer hover:bg-gray-100 p-2 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="User Image" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <p class="text-gray-700 font-semibold">Bob</p>
                            <p class="text-sm text-gray-500">Offline</p>
                        </div>
                    </div>
                    <span class="text-red-400 text-xs">&#9679;</span> <!-- Offline indicator -->
                </li>
                <!-- Repeat block ends -->
            </ul>
        </div>

        <!-- Chat Section -->
        <div class="flex-1 bg-white rounded-lg shadow-lg flex flex-col p-4">
            <div class="flex items-center space-x-3 border-b pb-4">
                <img src="https://via.placeholder.com/40" alt="Friend Image" class="w-10 h-10 rounded-full">
                <h2 class="text-xl font-semibold text-gray-700">Chat with Alice</h2>
            </div>

            <!-- Chat Messages -->
            <div class="flex-1 overflow-y-scroll space-y-4 p-4">
                <!-- Chat message bubbles -->
                <div class="flex items-start space-x-2">
                    <img src="https://via.placeholder.com/40" alt="Friend Image" class="w-8 h-8 rounded-full">
                    <div class="bg-gray-200 p-3 rounded-lg max-w-xs">
                        <p class="text-gray-700">Hey, how are you?</p>
                    </div>
                </div>
                <div class="flex items-start space-x-2 justify-end">
                    <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs">
                        <p class="text-gray-100">I'm good! How about you?</p>
                    </div>
                    <img src="https://via.placeholder.com/40" alt="Your Image" class="w-8 h-8 rounded-full">
                </div>
                <!-- Repeat chat bubble blocks as needed -->
            </div>

            <!-- Message Input -->
            <form class="flex items-center border-t p-4 space-x-3">
                <input type="text" name="message" placeholder="Type a message..." class="flex-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Send</button>
            </form>
        </div>
    </div>

</body>
</html>

