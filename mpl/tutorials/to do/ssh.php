

<?php
        $path = "../";
        $logo = "../assets/images/logo_with_text.png";
        $name = "Tutorials";
        $title = ".mpl Tutorial: SSH";
        include("../assets/includes/header.php");
    ?>




    <div class="mainBody">


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Secure Shell (SSH)</h1>    

            <p> SSH stands for "Secure Shell," and it is a network protocol and 
                command-line tool used for secure remote access and secure data communication 
                between two systems over an unsecured network. SSH provides strong encryption and 
                authentication mechanisms, making it a secure way to access and manage remote servers 
                and devices. You use the ssh command followed by the username (<user>) and the 
                IP address or server address to establish a secure shell session with a 
                remote server. After entering the command, you'll be prompted to enter the 
                password.
            </p>

            <h3>Example Syntax</h3>
            <p>
                localuser > ssh <user>@example.server.com </br>
                localuser > Password:    </br>
                [user@example.server.com ~]$
            </p>

            <div class="snipit">
                interactive element here
            </div>

            <p>You've completed this turorial successfully! Remember to keep in mind:</p>
                <ul>
                    <li>This command allows you to securly connect to another system </li>
                    <li>You need to know the ip or web address for the system you are trying to connect to</li>
                    <li>You must use the command ssh before typing in the user and address</li>
                </ul>

            <p>Now you're ready to go on to the next tutorial!</p>
            

            <h3><a href="">Tutorial 2: Connecting using FTP </a></h3>

        </div>
    </div>

</body>
</html>