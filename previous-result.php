<?php
include 'connection.php';

$conn = OpenCon();

$sql = "SELECT * FROM house_entry WHERE round_first=1";
$sql1 = "SELECT * FROM house_entry WHERE round_second=1";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);

$conn->close(); 
?>
<!doctype html>
    <title>Teer | Super  | Lucky Teer Online: </title>
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta content="width=device-width,initial-scale=1,maximum-scale=1" name=viewport>
    <meta content="Check out previous results for BHUTAN teer at teerbhutan.com" name=description>
    <meta content="teer,BHUTAN,teer result,lottery result,previous results" name=keyword>
    <link href=css/style1.css rel=stylesheet media=all>
    <link href=images/16.ico rel="shortcut icon" type=image/x-icon>
    <link rel="stylesheet" href="css/previous-result.css">
    
    <div class=header id=home>
        <div class=top-header><a href=index.php><img src="./images/Lucky-Teer-Logo.png" alt=""></a></div>
    </div>

    <div class="btn-container">
            <a href="common-numbers.php" class="btn blue">Common Numbers</a>
            <a href="previous-result.php" class="btn blue">Previous Results</a>
            <a href="dream-numbers.php" class="btn blue">Dream Numbers</a>
        </div>

     <div class=work id=work style=background-color:#fff>
        <div class=container style=background-color:#fff>
            <h3 id="date" style="text-align: center;margin-bottom: 0.6em;">21-05-2021</h3>
            <!-- <div class="head-one team-head text-center">
                <h2>Previous Results</h2>
                <p>
                <form action="./previous-result.php" method=POST>
                    <select id=selectmonth name=selectmonth>
                        <option value=0>Select Month
                        <option value=1>JANUARY
                        <option value=2>FEBUARY
                        <option value=3>MARCH
                        <option value=4>APRIL
                        <option value=5>MAY
                        <option value=6>JUNE
                        <option value=7>JULY
                        <option value=8>AUGUST
                        <option value=9>SEPTEMBER
                        <option value=10>OCTOBER
                        <option value=11>NOVEMBER
                        <option value=12>DECEMBER

                    </select> <select id=selectyear name=selectyear>
                        <option value=2021>2021</option>
                        <option value=2020>2020</option>
                    </select> <input name=submit style=margin-left:10px;padding:.5em;background-color:#3fd5ba
                        type=submit value=SUBMIT>
                    <p>
                </form>
            </div> -->

        <!-- table here --> 

        <div>
        

        <div class="table">
        
        <div class="table-content">
        <div class="round-result">1<sup>st</sup> Round Result (04:15 PM)</div>
        <div class="responsive-table">
        
                <section class="day-section-sunday">
                    <h2 class="day-content head">City</h2>
                    <p class="day-content recipe">Gonda</p>
                    
                </section>

                <section class="day-section-monday">
                    <h2 class="day-content head">1<sup>st</sup> Round</h2>
                    <p class="day-content recipe">04</p>
                    
                </section>

                <section class="day-section-tuesday">
                    <h2 class="day-content head">House No.</h2>
                    <p class="day-content recipe">00-09</p>
                    
                </section>
       
    </div> 
        </div>
        <div class="table-content">
        <div class="round-result">2<sup>nd</sup>  Round Result (05:15 PM)</div>
        <div class="responsive-table">
        
        <section class="day-section-sunday">
            <h2 class="day-content head">City</h2>
            <p class="day-content recipe">Gonda</p>
            
        </section>

        <section class="day-section-monday">
            <h2 class="day-content head">2<sup>nd</sup> Round</h2>
            <p class="day-content recipe">13</p>
            
        </section>

        <section class="day-section-tuesday">
            <h2 class="day-content head">House No.</h2>
            <p class="day-content recipe">10-19</p>
            
        </section>


       
    </div>
        </div>
        </div>
        
        <!-- End of .responsive-table -->

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
                </body>

                </html>