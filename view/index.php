<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network Dashboard</title>
    <link rel="stylesheet" href="<?php echo '../tailwind.css'; ?>">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar in index.php -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-semibold">Social Network</h1>
            <ul class="flex space-x-4">
                <li><a href="login.php" class="text-white">Login</a></li>
                <li><a href="signin.php" class="text-white">Sign Up</a></li>
                <li><a href="forgot_password.php" class="text-white">Forgot Password</a></li>
                <li><a href="message.php" class="text-white">Messages</a></li>
                <li><a href="index.php" class="text-white">Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-4 flex">

        <!-- Sidebar Profile Info -->
        <div class="w-1/4 bg-white p-4 rounded-lg shadow-lg mr-4">
            <h2 class="text-lg font-semibold text-gray-700">User Profile</h2>
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-24 h-24 rounded-full mx-auto my-4">
            <p class="text-gray-700 text-center">John Doe</p>
            <p class="text-gray-500 text-center">Joined: January 2023</p>
            <button class="bg-blue-600 text-white w-full mt-4 py-2 rounded-lg">Edit Profile</button>
        </div>

        <!-- Main Feed -->
        <div class="w-3/4">

            <!-- Create Post Form -->
            <div class="bg-white p-4 rounded-lg shadow-lg mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Create Post</h2>
                <form class="mt-4">
                    <textarea rows="4" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="What's on your mind?"></textarea>
                    <div class="flex items-center mt-4">
                        <label class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-lg">
                            <span>Upload Image</span>
                            <input type="file" class="hidden" name="fileUpload">
                        </label>
                        <div class="ml-auto">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" name="public" id="public">
                                <span class="ml-2 text-gray-700">Public</span>
                            </label>
                            <button type="submit" class="ml-4 bg-blue-600 text-white px-4 py-2 rounded-lg">Post</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- News Feed -->
            <div>
                <h1 class="text-2xl font-semibold text-gray-700 mb-4">News Feed</h1>
                
                <!-- Example Post -->
                <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="User Image" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h3 class="text-gray-700 font-semibold">Jane Smith</h3>
                            <p class="text-gray-500 text-sm">2 hours ago</p>
                        </div>
                    </div>
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet sagittis dolor.</p>
                    <div class="mt-4">
                        <button class="text-blue-600 hover:underline">Like</button>
                        <button class="ml-4 text-blue-600 hover:underline">Comment</button>
                    </div>
                </div>

                <!-- Repeat Post Blocks as Needed -->
                
            </div>
        </div>
    </div>

</body>
</html>
