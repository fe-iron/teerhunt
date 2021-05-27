<?php

    include 'connection.php';

    $conn = OpenCon();

    $sql = "SELECT * FROM common_number";
    $result = $conn->query($sql);

    $img = "SELECT * FROM images WHERE `page`='common_number' LIMIT 6";
    $img = $conn->query($img);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Teer | Teer Results Online | Common Numbers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="title" content="teer common number">

    <link href="css/style1.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/16.ico" type="image/x-icon" />
</head>

<body>
    <!----- start-header---->
    <div id="home" class="header">
        <div class="top-header" style="background-color:#95CFFD;"> <a href="index.php"><img
                    src="images/Lucky-Teer-Logo.png" title="Teer" Alt="Teer"></a> </div>
    </div>
    <div id="work" class="work" style="background-color:white;">


        <div class="btn-container">
            <a href="common-numbers.php" class="btn blue">Common Numbers</a>
            <a href="previous-result.php" class="btn blue">Previous Results</a>
            <a href="dream-numbers.php" class="btn blue">Dream Numbers</a>
        </div>
        <div class="container" style="background-color:white;">
            <div class="head-one text-center team-head">
                <h2 id="date" style="margin-top: 1em;">18-05-2021</h2>
                
                <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $text = '';
                        while($row = $result->fetch_assoc()) {
                          $text = $text . "<table class='table'>
                                          <tr>
                                              <th colspan='3' style='color: white'>".$row['state']."</th>
                                          </tr>
                                          <tr style='background-color:#3FD5BA; color: white;'>
                                              <td>Direct</td>
                                              <td>House</td>
                                              <td>Ending</td>
                                          </tr>
                                          <tr style='background-color:cream; border: 1px solid black;'>
                                              <td>".$row['direct']."</td>
                                              <td>".$row['house']."</td>
                                              <td>".$row['ending']."</td>
                                          </tr><span> </span>
                                          </table>";
                          }
                          print $text;
                      }
                      ?>
                <h3>Disclaimer : These common numbers are purely based on certain calculations done using past results.
                    There is no guarantee of the accuracy of these numbers.</h3>
            </div>
            <div id="work1" class="container" style="background-color:white;">
                <!---works--->
                <div class="works">
                    <div id="whatever"  style="padding: 1em 0;">
                        <div class="col-md-50 work-grid">
                            <div class="item1"> <a href="common-numbers.php"><img src="images/Common-Numbers.png"
                                        title="Home" alt="Online Teer Result" /></a> </div>
                        </div>
                        <div class="col-md-50 work-grid">
                            <div class="item1"> <a href="dream-numbers.php"><img src="images/Dream-Number.png"
                                        title="teercounterSocial" alt="TeerCounter Social Network" /></a> </div>
                        </div>

                        <div class="col-md-50 work-grid">
                            <div class="item1"> <a href="previous-result.php"><img src="images/Previous-Result.png"
                                        title="Win Prizes" alt="TeerCounter Win Prizes" /></a> </div>
                        </div>

                        <?php
                        if ($img->num_rows > 0) {
                            // output data of each row
                            $text = '';
                            while($row = $img->fetch_assoc()) {
                                $text = $text . '<div class="col-md-50 work-grid">
                                                <div class="item1"> 
                                                    <a href="#">
                                                        <img src="upload/'.$row["image_url"].'" title="Win Prizes" alt="TeerCounter Win Prizes" />
                                                    </a> 
                                                </div>
                                                </div>';
                            }
                            echo $text;
                        }
                        ?>
                        
                    </div>
                </div>
                <script src="js/my_script.js"></script>
</body>

</html>