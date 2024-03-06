<?php
include("../adminer/dbCON.php");
                
                //determine if there are values to insert
                if(!empty( $_GET['terminal']  )){
                    $terminal=$_GET['terminal'];
                
                    //get correct answer from the DB based on which tutorial page we're on
                    $sql = "SELECT correctAnswer FROM `.mplTerminal` WHERE `tutorial` = ";
                    $sql = $sql . $page;
                    $results = $conn->query($sql);
                
                    if($results->num_rows > 0) {
                        while($row = $results->fetch_assoc()) {
                            $messages[] = $row;
                        }
                    }
                
                    //string check
                    foreach ($messages as $message) {
                        foreach ($message as $correctAnswer) {
                            if ($terminal == $correctAnswer) {
                                echo '<script>playAnimation();</script>';
                            }else{
                                echo '<script>indicateFailure();</script>';
                            }
                        }
                    }
                }
?>