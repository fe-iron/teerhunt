<?php
include 'connection.php';
include 'auth.php';
$conn = OpenCon();
if(empty($_GET)) {
    $msg = " ";
}else{
    $msg = $_GET['result'];
}



    
   

?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml xmlns:fb=http://ogp.me/ns/fb#>

<head>
    <title>Teer | Tir | Teer Results Online: </title>
    <meta content="text/html" charset="utf-8" http-equiv=Content-Type>
    <meta content="We provide teer results online everyday" name=description>
    <meta content="teer,teer counter,teercounter,teer countar,tir,lottery result" name=keyword>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href='css/style1.css?v=1.0' rel=stylesheet media=all>
    <link href='images/16.ico' rel="shortcut icon" type=image/x-icon>
    <link rel="stylesheet" href="./css/teer.css">
    <script src="js/registration.js"></script>
    <link rel="stylesheet" href="css/registration.css" />
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
            <a href="index.php"><img src="./images/Lucky-Teer-Logo.png" alt=""></a>
            </div>
            <div class="date">
                <p id="date"></p>
            </div>
        </div>

    </header>

        <div style="text-align: center; margin: 20px 0;"><h1 >Teer Result</h1></div>
        <h3 style="text-align: center; margin: 20px 0;"><?php echo $msg; ?></h3>
            <form action="show_result.php" method="post">
                <label>
                    <p class="label-txt">ENTER THE FIRST ROUND RESULT</p>
                    <input type="text" class="input" name="fr">
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <label>
                    <p class="label-txt">ENTER THE SECOND ROUND RESULT</p>
                    <input type="text" class="input" name="sr">
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>

                <label>
                    <p class="label-txt">ENTER THE DATE</p>
                    <input type="date" class="input" name="date" required>
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <br>
                <button type="submit">Submit</button>
                <p style="padding-top: 10px;">You can only give First Round result too. <br>Just leave the second
                    input blank</p>
            </form>


            <div style="text-align: center; margin: 2em 0;"><h1 >Teer Entry</h1></div>
        
            <form action="house_entry.php" method="post">
                <label>
                    <p class="label-txt">SELECT NUMBER</p>
                    <select name="number" id="" class="input" style="padding-top: 1em;">
                        <option value="0" selected>00</option>
                        <option value="1" >01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                        <option value="71">71</option>
                        <option value="72">72</option>
                        <option value="73">73</option>
                        <option value="74">74</option>
                        <option value="75">75</option>
                        <option value="76">76</option>
                        <option value="77">77</option>
                        <option value="78">78</option>
                        <option value="79">79</option>
                        <option value="80">80</option>
                        <option value="81">81</option>
                        <option value="82">82</option>
                        <option value="83">83</option>
                        <option value="84">84</option>
                        <option value="85">85</option>
                        <option value="86">86</option>
                        <option value="87">87</option>
                        <option value="88">88</option>
                        <option value="89">89</option>
                        <option value="90">90</option>
                        <option value="91">91</option>
                        <option value="92">92</option>
                        <option value="93">93</option>
                        <option value="94">94</option>
                        <option value="95">95</option>
                        <option value="96">96</option>
                        <option value="97">97</option>
                        <option value="98">98</option>
                        <option value="99">99</option>
                    </select>
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <label>
                    <p class="label-txt">SELECT THE HOUSE</p>
                    <select name="house" id="" class="input" style="padding-top: 1em;">
                        <option value="0" selected>House no. 00-09</option>
                        <option value="1">House no. 10-19</option>
                        <option value="2">House no. 20-29</option>
                        <option value="3">House no. 30-39</option>
                        <option value="4">House no. 40-49</option>
                        <option value="5">House no. 50-59</option>
                        <option value="6">House no. 60-69</option>
                        <option value="7">House no. 70-79</option>
                        <option value="8">House no. 80-89</option>
                        <option value="9">House no. 90-99</option>
                    </select>
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>

                <label>
                    <p class="label-txt">SELECT ROUND</p>
                    <select name="round" id="" class="input" style="padding-top: 1em;">
                        <option value="1" selected>Round no. 01</option>
                        <option value="2">Round no. 02</option>

                    </select>
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <br>
                <label>
                    <p class="label-txt">Amount</p>
                    <input type="text" class="input" name="amount">
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>

                <label>
                    <p class="label-txt">City</p>
                    <input type="text" class="input" name="city">
                    <div class="line-box">
                        <div class="line"></div>
                    </div>
                </label>
                <br>
                <button type="submit">Submit</button>
               
            </form>



    <div style="text-align: center; margin: 2em 0;"><h1 >Assistant Admin Registration</h1></div>
    <form name="registration" action="registration.php" method="post">
        <label>
            <p class="label-txt">ENTER EMAIL</p>
            <input type="text" class="input" name="email">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">ENTER NUMBER</p>
            <input type="tel" class="input" name="username" required>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">ENTER PASSWORD</p>
            <input type="password" class="input" name="password">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <br>
        <button type="submit" value="Register">submit</button>
    </form>


    <div style="text-align: center; margin: 2em 0;"><h1 >Marquee</h1></div>
    <form name="registration" action="marquee.php" method="post">
        <label>
            <p class="label-txt">ENTER MESSAGE</p>
            <input type="text" class="input" name="msg">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
       
        <br>
        <button type="submit" value="Register">submit</button>
    </form>




    <script src="js/my_script.js"></script>

</body>

</html>