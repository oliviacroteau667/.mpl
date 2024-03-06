<?php
include("../adminer/dbCON.php");

echo('<script type="text/javascript" src="../assets/includes/animationControl.js"></script>');
//determine if there are values to insert
if(!empty( $_GET['terminal']  )){
    $terminal=$_GET['terminal'];

    //get correct answer from the DB based on which tutorial page we're on
    $sql = "SELECT correctAnswer FROM `.mplTerminal` WHERE `tutorial` = 'filesystem' ";
    $results = $conn->query($sql);

    if($results->num_rows > 0) {
        while($row = $results->fetch_assoc()) {
            $messages[] = $row;
        }
    }

    //string check
    foreach ($messages as $message) {
        foreach ($message as $correctAnswer) {
            if ($correctAnswer = $terminal) {
                /*echo('Yay');*/
                echo('<script>document.getElementById("user").animationPlayState="running"</script>');
            }
        }
    }
}

?>

<!DOCTYPE html>
<script>
    
</script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://kit.fontawesome.com/9d2ace7861.js" crossorigin="anonymous"></script>
    <!--<script src="../assets/includes/animationControl.js"></script>-->
    <title>.mpl Tutorial: File System</title>
</head>
<body>
    <!-- Will contian commands for all the commands in this section with maybe a naviagtion helper at the top for each section?
        actually, i think i might want to do each command as a sepertate page ?
        idk
    -->

    <?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    
    //include("../assets/includes/sidebar.php"); ?>
    <!-- include navigation bar-->


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>File System</h1>    

            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Reprehenderit iusto minima eligendi earum est doloribus assumenda, 
                atque non labore odit ad. Sunt laboriosam praesentium incidunt itaque, 
                perferendis expedita laudantium velit.
            </p>

            <h3>Example Syntax</h3>
            <p>
                
            </p>

            <form action="filesystem.php" method="get">
                <label for="terminal">Try it yourself! Navigate to the directory “defg”, a subdirectory of “abc”, from “abc”.</label>
                <textarea id="terminal" name="terminal" rows=5 cols=33></textarea> <!--needs to be styled-->
                <input type="submit"  name="check"  value="Check"/>
            </form>

            <div class="snipit">
                <div id="cdAnimation" class="animationbox">
                    <div id="abc">
                        <i id="abc" class="fa-solid fa-folder fa-6x"></i>
                        <h3>abc</h3>
                    </div>
                    <div id="defg">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>defg</h3>
                    </div>
                    <div id="hijk">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>hijk</h3>
                    </div>
                    
                    <i id="file" class="fa-solid fa-file fa-4x"></i>
                    <i id="user" class="fa-solid fa-user fa-3x"></i>
                </div>
            </div>

            <h3><a href="">Tutorial 2: Connecting using FTP </a></h3>

        </div>

<?php
include("../assets/includes/footer.php");
?>