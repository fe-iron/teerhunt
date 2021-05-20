<?php
include 'connection.php';

$conn = OpenCon();

// SQL query to select data from database
$sql = "SELECT * FROM bhutan_teer ORDER BY 'date' ASC ";
$result = $conn->query($sql);
$conn->close(); 

$rows=$result->fetch_assoc()
?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml xmlns:fb=http://ogp.me/ns/fb#>

<head>
    <title>Teer | Tir  | Teer Results Online: </title>
    <meta content="text/html" charset="utf-8" http-equiv=Content-Type>
    <meta content="We provide teer results online everyday" name=description>
    <meta content="teer,teer counter,teercounter,teer countar,tir,lottery result" name=keyword>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href='css/style1.css?v=1.0' rel=stylesheet media=all>
    <link href='images/16.ico' rel="shortcut icon" type=image/x-icon>
    <link rel="stylesheet" href="./css/teer.css">
</head>

<body>
    <header class="header">
        <div class="header-content">
        <div class="logo">
            <img src="./images/teer.jpg" alt="">
        </div>
        <div class="date">
            <p id="date"></p>
        </div>
        </div>
        <div class="news">
        <marquee behavior="" direction="">
            <p>Running Admin News</p>
        </marquee>
    </div>
    </header>

    <section class="dream-numbers">
        <h1>Today's Super Luck Teer Result</h1>
        <div class="scores">
            <div class="score">
                <div class="score-title">
                <p>1st Round (04:15 PM)</p>
                </div>

                <div class="score-card">
                    <p><?php echo $rows['F/R'] ?></p>
                </div>
            </div>
            <div class="timers">
                <div class="timer">
                    <p>1st Round Result Time</p> <p><b class="timer-time" id="fr_timer">(04:20 PM)</b></p>
                </div>
                <div class="timer">
                    <p>2nd Round Result Time </p> <p><b class="timer-time" id="sr_timer">(04:20 PM)</b></p>
                </div>
            </div>
            <div class="score">
            <div class="score-title">
                <p>2nd Round (05:15 PM)</p>
            </div>
            <div class="score-card">
                <p><?php echo $rows['S/R'] ?></p>
                </div>
            </div>
        </div>
    </section>

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
                                        src=images/teer-common-numbers.jpg title="Common Number"></a></div>
                        </div>
                        
                        <div class="col-md-45 work-grid">
                            <div class=item1><a href=dream-numbers.php><img alt="Teer Dream Numbers"
                                        src=images/teer-dream-numbers.jpg title="Dream Number"></a>
                                <div class=caption style=display:none></div>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class=item1><a href=previous-result.php><img alt="Teer Previous Results"
                                        src=images/teer-previous-numbers.jpg title="Previous Result"></a>
                                <div class=caption style=display:none></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class=clear></div>
                </div>



                
                <div class=footer-left1><a href=termsofuse.php>Terms</a></div>
                <div class=footer-center1><a href="#">&nbsp;
                    </a></div>
                <div class=footer-right1><a href=privacypolicy.php>Privacy Policy</a></div>
            </div>
        </div>
    </div>
    

    

<script src="js/my_script.js"></script>
<script src="js/fr_countdown.js"></script>
</body>

</html>

