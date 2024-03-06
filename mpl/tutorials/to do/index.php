<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>.mpl Tutorials</title>
</head>
<body>
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Home";
    include("../assets/includes/sidebar.php"); ?>
        
        <!--Header cutoff-->

    
    <div class="mainBody">

        <div id="tutorial_bubble" class="bubble"> <!-- will become the bubble element thingy -->

                <!-- links to tutorials will go here -->
                <h1>Unix file structure</h1>
                    <ul>
                        <li><a href="">List files</a></li>
                        <li><a href="">Change directories</a></li>
                        <li><a href="">Show current directory</a></li>
                    </ul>


                <h1>User settings</h1>
                    <ul>
                        <li><a href="">Show username</a></li>
                        <li><a href="">Change password</a></li>
                        <li><a href="">List processes</a></li>
                        <li><a href="">Terminate process</a></li>
                    </ul>


                <h1>Connecting to a server</h1>
                    <ul>
                        <li><a href="ssh.php">Connecting using SSH</a></li>
                        <li><a href="">Connecting using FTP</a></li>
                        <li><a href="">Connecting using SFTP</a></li>

                    </ul>

                <h1>Creating, moving, copying files</h1>
                    <ul>
                        <li><a href="">Display part of a file</a></li>
                        <li><a href="">Moving files</a></li>
                        <li><a href="">Copying files</a></li>
                        <li><a href="">Deleting files</a></li>
                        <li><a href="">Comparing files</a></li>
                        <li><a href="">Word count</a></li>

                    </ul>

                <h1>File permissions</h1>
                    <ul>
                        <li><a href="">Changing permissions</a></li>
                    </ul>

                <h1>Editing files with vim</h1>
                    <ul>
                        <li><a href="">Entering vim</a></li>
                        <li><a href="">Moving the cursor</a></li>
                        <li><a href="">Editing the file</a></li>
                        <li><a href="">Copy and paste</a></li>
                        <li><a href="">Find and replace</a></li>
                        <li><a href="">Exiting and saving the file</a></li>
                    </ul>

                <h1>Uploading files</h1>
                    <ul>
                        <li><a href="">Copying a file with SSH</a></li>
                        <li><a href="">Downloading files with FTP and SFTP</a></li>
                        <li><a href="">Uploading files with FTP and SFTP</a></li>
                    </ul>

        </div> 
    </div>
</body>
</html>