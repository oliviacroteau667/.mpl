<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Put File";
$name = "Tutorials";
$page = " 'put' "; /*command name here*/


include("../assets/includes/header.php");
?>

<style>

    /*style*/

</style>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>put <i>filename</i> </h1>
            <p>This command is used to upload the specified file from your local machine to 
                the remote server.
            </p>

            <h1>mput <i>filenames</i> </h1>
            <p> Similar to put, this command allows you to upload multiple specified 
                files from your local machine to the remote server.

            </p>


                

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > put heyy.txt <br>

            </p>

            
            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself!<!--try it yourself label--></label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>


            <div id="snipit" class="snipit">
                interactive element here
            </div>


            <p> Congratulations, you've finished all the tutorials! </p>
            

            <?php include("../assets/includes/dbStringCheck.php"); ?>


            <h3><a href="https://solace.ist.rit.edu/~iste240t08/tutorials/index.php">Tutorials home </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>