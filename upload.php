<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
?>

<html lang="en">
    <head>

        <?php
        include "head.inc.php";
        ?>
        
    </head>
    <body>

        <?php
        include "css.php";
        session_start();
        ?>

        <?php
        include "sidemenu.php";
        ?>

        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <!--side button-->
        <div class="w3-main" style="margin-left:300px">
            <div class="w3-container w3-padding-88 center " id="us">
                <link rel="stylesheet" href="css/UploadPic.css">
                <main class="di" >
                    <style>
                          di {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 40%;
        height: 50%;
        padding: 20px;
        background: red;
        color: white;
        text-align: center;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
      }
             </style>
             <div>
                   
                        <?php
                        if (isset($_SESSION['acc_id'])) {
                            echo '<form action="process/process_upload.php" class="sign-in-form" method="POST">';
                            echo '<label for="uploader">Select a file:</label>';
                            echo '<input type="file" id="uploader" accept=".jpg, .png, .jpeg">';
                            echo '<img id="image">';
                            echo '<input type="hidden" id="b64" name="b64" value=""/>';
                            echo '<button class="btn solid" type="submit">Upload</button>';
                            echo '</form>';
                        } else {
                            echo "<h2>This page is not meant to be run directly.</h2>";
                            echo "<p>You can login at the link below:</p>";
                            echo "<a href='index.php'>Go to Login page...</a>";
                        }
                        ?>
                            
                   
                </main>
</div>
                <?php
                include "foot.inc.php";
                ?>

                </body>
                </html>
