<?php

    include 'connection.php';

    $conn = OpenCon();

    $sql = "SELECT * FROM common_number ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    $img = "SELECT * FROM images WHERE `page`='common_number'";
    $img = $conn->query($img);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Teer | Teer Results Online | Common Numbers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="title" content="lucky teer common number">
    <meta name="description" content="Check out common numbers in lucky teer, result at luckyteer.online">
    <meta name="keyword" content="luckyteeronline, lucky teer online, dream numbers, online, common numbers, previous result, lucky teer online today">

    <link href="css/style1.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/teer.css">
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
                      <span></span>
                <h3>Disclaimer : These common numbers are purely based on certain calculations done using past results.
                    There is no guarantee of the accuracy of these numbers.</h3>
            </div>
            
        </div>
    </div>
    
    <div class=work id=work>
                <div>
                    <div class=container style=background-color:#fff>

                        <div class=work style=background-color:#fff id=work>
                            <div class=container style=background-color:#fff>
                                <div class="head-one team-head text-center"></div>
                            </div>
                        </div>
                        <div class=container style=background-color:#fff id=work1>
                            <div class=works>
                                <div class="col-md-45 work-grid">
                                    <div class=item1><a href=common-numbers.php><img alt="Teer Common Numbers"
                                                src=images/Common-Numbers.png title="Common Number"></a></div>
                                </div>


                                <div class="col-md-45 work-grid">
                                    <div class=item1><a href=previous-result.php><img alt="Teer Previous Results"
                                                src=images/Previous-Result.png title="Previous Result"></a>
                                        <div class=caption style=display:none></div>
                                    </div>
                                </div>

                                <div class="col-md-45 work-grid">
                                    <div class=item1><a href=dream-numbers.php><img alt="Teer Previous Results"
                                                src=images/Dream-Number.png title="Dream Number "></a>
                                        <div class=caption style=display:none></div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class=clear></div>
                        </div>


                    </div>
                </div>
            </div>

            <div class=work id=work>
                <div>
                    <div class=container style=background-color:#fff>

                        <div class=work style=background-color:#fff id=work>
                            <div class=container style=background-color:#fff>
                                <div class="head-one team-head text-center"></div>
                            </div>
                        </div>
                        <div class=container style=background-color:#fff id=work1>
                            <div class=works>
                                
                                <?php
                                    if ($img->num_rows > 0) {
                                        // output data of each row
                                        $text = '';
                                        while($row = $img->fetch_assoc()) {
                                            $text = $text . '<div class="col-md-45 work-grid">
                                                            <div class="item1"> 
                                                                    <img src="upload/'.$row["image_url"].'" title="Win Prizes" alt="Lucky Teer" />
                                                                    <div class=caption style=display:none></div>
                                                            </div>
                                                            </div>';
                                        }
                                        echo $text;
                                    }
                                ?>
                            </div>

                            <div class=clear></div>
                        </div>


                    </div>
                </div>
            </div>
    <script src="js/my_script.js"></script>
</body>

</html>