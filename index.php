<?php
include 'connection.php';

$conn = OpenCon();

$sql = "SELECT * FROM house_entry ORDER BY id DESC LIMIT 1";
$marqu = "SELECT * FROM marquee ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$result1 = $conn->query($marqu);

$rows=$result->fetch_assoc();
$next_row=$result1->fetch_assoc();
$conn->close(); 
?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml xmlns:fb=http://ogp.me/ns/fb#>

<head>
    <title>Teer | Tir  | Lucky Teer Online: </title>
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
            <img src="./images/Lucky-Teer-Logo.png" alt="">
        </div>
        <div class="date">
            <p id="date"></p>
        </div>
        </div>
        <div class="news">
        <marquee behavior="" direction="">
            <p><?php echo $next_row['msg'] ?></p>
        </marquee>
    </div>
    </header>

    <section class="dream-numbers">
        
        <div class="btn-container">
            <a href="common-numbers.php" class="btn blue">Common Numbers</a>
            <a href="previous-result.php" class="btn blue">Previous Results</a>
            <a href="dream-numbers.php" class="btn blue">Dream Numbers</a>
        </div>
        
        <h1>Today's Super Lucky Teer Result</h1>
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
    

    

<script src="js/my_script.js"></script>
<script src="js/fr_countdown.js"></script>
</body>

</html>

