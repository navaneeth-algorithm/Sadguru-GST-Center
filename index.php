<?php
    $fileName = 'home.php';
    if(isset($_GET['page']))
    {
        $pageName = $_GET['page'];
        $fileName = $pageName .'.php';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>SadhGuru WebPage</title>
    <style>
        .w3-myfontCambria {
            font-family:Cambria,Georgia,serif; 
            }
        .w3-text-darkblue{
            color:#000080;
        }
    </style>
</head>
<body class="w3-display-container w3-light-gray ">

        <div id="WebContent"  style="width:70%;margin-left:210px;margin-bottom:15px;" class="w3-white w3-myfontCambria">


            <?php include('include/header.php'); ?>


                <div class="w3-row w3-padding w3-white" style="width:97%;margin-left:15px;">
                    <!-- Here Goes Middle Content of web   -->

                    <!-- Banner Include -->
                    <?php  include('include/banner.php'); ?>

                    <div class="w3-row">
                        <div class="w3-col s9">
                            <!-- Here Goes Content Excludeing banner & right bar Con-->

                            <svg viewBox="0,0,700,100">
                                <text x="" y="50">
                                    <a href="#">Welcome to Sadhguru Souharda Sahakari Limited </a>
                                    <animate attributeName="x" from="-100" to="400" dur="9s" 
                                    repeatCount="indefinite">
                                </text>
                            </svg>

                            <?php
                                include($fileName);
                            ?>
                        </div>
                        <div class="w3-col s3">
                            <!-- Here Goes Right bar -->
                            <?php include('include/rightbar.php');  ?>
                            
                        </div>
                    </div>

                </div>

            
            <?php include('include/footer.php');  ?>


        </div>


</body>
</html>