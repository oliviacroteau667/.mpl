<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Listing Files";
    $page = " 'ls' "; /*command name here*/
    
    include("../assets/includes/header.php");
?>
<style>

    /*style*/

</style>

        <div class="bubble">
            
            <!--written content-->



            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                <!--example syntax text-->
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal"><!--try it yourself label--></label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <!--animation stuff-->
                <!--NOTE: the thing actually being animated needs to have an id of "animateMe"-->
            </div>

            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <h3><a> <!--linke to next page--></a></h3>

        </div>

</body>
</html>