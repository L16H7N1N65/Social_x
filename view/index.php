<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialX Dashboard</title>
    <link rel="stylesheet" href="<?php echo '../tailwind.css'; ?>">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-semibold">Social Network</h1>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white">Home</a></li>
                <li><a href="#" class="text-white">Profile</a></li>
                <li><a href="#" class="text-white">Messages</a></li>
                <li><a href="#" class="text-white">Notifications</a></li>
                <li><a href="#" class="text-white">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-4 flex">

        <!-- Sidebar Profile Info -->

        <div class="w-1/4 bg-white p-4 rounded-lg shadow-lg mr-4">
            <h2 class="text-lg font-semibold text-gray-700">User Profile</h2>
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-24 h-24 rounded-full mx-auto my-4">
            <p class="text-gray-700 text-center"><?= htmlspecialchars($infoUser['email'])  ?></p>
            <p class="text-gray-500 text-center">Date de création: <?= htmlspecialchars($infoUser['created_at']) ?> </p>
            <button class="bg-blue-600 text-white w-full mt-4 py-2 rounded-lg">Edit Profile</button>
        </div>

        <!-- Main Feed -->
        <div class="w-3/4">

            <!-- Create Post Form -->
            <div class="bg-white p-4 rounded-lg shadow-lg mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Create Post</h2>
                <form class="mt-4" method="POST">
                    <textarea rows="4" name="message_content" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="What's on your mind?"></textarea>
                    <div class="flex items-center mt-4">
                        <div class="ml-auto">
                            <button type="submit" name="submit_message" class="ml-4 bg-blue-600 text-white px-4 py-2 rounded-lg">Post</button>
                            <?php if(isset($final_message_action)){echo '<p>'.$final_message_action.'</p>';}  ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- News Feed -->
            <div>
                <h1 class="text-2xl font-semibold text-gray-700 mb-4">News Feed</h1>
                
                <!-- Example Post -->
                <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                        <?php 

                        while($messages_info = $reqLastMessages->fetch()){
                            ?>  

                        <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="User Image" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <h3 class="text-gray-700 font-semibold">XXXX</h3>
                            <p class="text-gray-500 text-sm"><?= htmlspecialchars($messages_info['sent_at']) ?></p>
                        </div>
                        </div>
                        <p class="mt-2 text-gray-700"><?= htmlspecialchars($messages_info['content']) ?></p>
                        <div class="mt-4">
                            <button class="text-blue-600 hover:underline">Like</button>
                            <button class="ml-4 text-blue-600 hover:underline">Comment</button>
                        </div>    


                            <?php
                        }


                        ?>
                    
                </div>

                <!-- Repeat Post Blocks as Needed -->
                
            </div>
        </div>
    </div>

</body>
</html>
