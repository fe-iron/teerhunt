<div>
            <div class="table">
                <div class="table-content">
                <div class="round-result">1<sup>st</sup> Round Result (04:15 PM)</div>
                <div class="responsive-table">
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        
                        $text_city = '';
                        $text_num = '';
                        $text_house = '';
                        $text_date = '';
                        $i = 0;
                        while($row = $result->fetch_assoc()) {
                            $i += 1;
                            // echo "id: " . $row["id"]. " - 1st: " . $row["round_first"]. " 2nd " . $row["round_second"]. " num ".$row["num"]. " amount ".$row["amount"]. " date ".$row["date"]. "<br>";
                        
                            if(!$count){
                                $text_city =  $text_city. '<section class="day-section-sunday"><h2 class="day-content head">City</h2>';
                                $text_date =  $text_date. '<section class="day-section-sunday"><h2 class="day-content head">Date</h2>';
                                $text_house =  $text_house. '<section class="day-section-tuesday"><h2 class="day-content head">House No.</h2>';
                                $text_num =  $text_num. '<section class="day-section-monday"><h2 class="day-content head">1<sup>st</sup> Round</h2>';
                                $count = 1;
                            }

                            $dat = strval($row["date"]);
                            $dat = substr($dat, 0, 10);
                            $text_city = $text_city. '<p class="day-content recipe">'.$row["city"].'</p>';
                            $text_date = $text_date. '<p class="day-content recipe">'.$dat.'</p>';
                            $text_house = $text_house. '<p class="day-content recipe">'.$row["house_num"].'</p>';
                            $text_num =$text_num. '<p class="day-content recipe">'.$row["num"].'</p>';

                            if($i == $no_of_rows){
                                $text_city = $text_city .'</section>';
                                $text_date = $text_date .'</section>';
                                $text_house = $text_house .'</section>';
                                $text_num = $text_num .'</section>';
                            }
                        }
                        echo $text_city;
                        echo $text_date;
                        echo $text_house;
                        echo $text_num;
                    }
                    ?>
                    </div>
                </div>
                <div class="table-content">
                    <div class="round-result">2<sup>nd</sup> Round Result (05:15 PM)</div>
                    <div class="responsive-table">

                    <?php
                    if ($result1->num_rows > 0) {
                        // output data of each row
                        
                        $text_city = '';
                        $text_num = '';
                        $text_house = '';
                        $text_date = '';
                        $i = 0;
                        while($row = $result1->fetch_assoc()) {
                            $i += 1;
                            // echo "id: " . $row["id"]. " - 1st: " . $row["round_first"]. " 2nd " . $row["round_second"]. " num ".$row["num"]. " amount ".$row["amount"]. " date ".$row["date"]. "<br>";
                        
                            if($count){
                                $text_city =  $text_city. '<section class="day-section-sunday"><h2 class="day-content head">City</h2>';
                                $text_date =  $text_date. '<section class="day-section-sunday"><h2 class="day-content head">Date</h2>';
                                $text_house =  $text_house. '<section class="day-section-tuesday"><h2 class="day-content head">House No.</h2>';
                                $text_num =  $text_num. '<section class="day-section-monday"><h2 class="day-content head">2<sup>nd</sup> Round</h2>';
                                $count = 0;
                            }

                            $dat = strval($row["date"]);
                            $dat = substr($dat, 0, 10);
                            $text_city = $text_city. '<p class="day-content recipe">'.$row["city"].'</p>';
                            $text_date = $text_date. '<p class="day-content recipe">'.$dat.'</p>';
                            $text_house = $text_house. '<p class="day-content recipe">'.$row["house_num"].'</p>';
                            $text_num =$text_num. '<p class="day-content recipe">'.$row["num"].'</p>';

                            if($i == $no_of_rows1){
                                $text_city = $text_city .'</section>';
                                $text_date = $text_date .'</section>';
                                $text_house = $text_house .'</section>';
                                $text_num = $text_num .'</section>';
                            }
                        }
                        echo $text_city;
                        echo $text_date;
                        echo $text_house;
                        echo $text_num;
                    }
                    ?>

                    </div>
                </div>
            </div>
            </div>
