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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class=header id=home>
        <div class=top-header>
            <a href=index.php><img alt=Teer src=images/teer.jpg title=Teer></a>
            <p id="date"></p>
        </div>
        <div>
            <marquee behavior="" direction="left">Text from admin site</marquee>
        </div>
    </div>

    <!-- <div class=work id=work>
        <div>
            <div class=container style=background-color:#fff>
                <div class="">
                    <h2 ></h2>
                    <table class=table>
                        <tr>
                            <th colspan=2>BHUTAN TEER</th>
                        </tr>
                        <tr style=background-color:#3fd5ba>
                            <td align=center>F/R(4:20PM)
                            <td align=center>S/R(5:10PM)
                        </tr>
                        <tr style="background-color:cream;border:1px solid #000">
                            <td><?php echo $rows['F/R'] ?></td>
							<td><?php echo $rows['S/R'] ?></td>
                    </table>
                </div>
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
                    </div>

                    <div class=works>
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
    </div> -->

    <div class="container">
        <div class="row" style="justify-content: center;">
            <p class="h1"> Today's Super lucky Teer Result</p>
        </div>
        <div class="row py-3">
            <div class="col-md-3">
                <p class="info">1 <sup>st</sup> Round (4:15 PM)</p>
                <div class="show">
                    <p><?php echo $rows['F/R'] ?></p>
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-3">
                <p class="info">2 <sup>nd</sup> Round (5:15 PM)</p>
                <div class="show">
                    <p><?php echo $rows['F/R'] ?></p>
                </div>
            </div>
        </div>
    </div>
<script src="js/my_script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

