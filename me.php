<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/script.js"></script>
    <?php
    if(isset($_SESSION['mode'])){
        $mode = $_SESSION['mode'];
        if($mode == 'light'){
            echo'<div id ="stylearea"><link rel="stylesheet" href="assets/style.css"></div>';
        }else{
            echo'<div id ="stylearea"><link rel="stylesheet" href="assets/style-night.css"></div>';
        }
    }
    ?>
</head>
<body>
    <button class="lmode" onclick="lightmode()">Light Mode</button>
    <button class="dmode" onclick="darkmode()">Dark Mode</button><br><br>
    <div class='post'>
    <div class="post-title">About Me</div>
    <article>
        <center class="image">
            <img src="images/favicon.jpg" width="70" alt="">
        </center>
        <div class="post-details">About me</div>
        Hi 👋👋👋. I am Dhirodatto Biswas hailing from Berhampore, Murshidabad, West Bengal, India. I am a student of class 8 (as of January 2022) and am an aspiring web developer. I also develop certain OpenGL programs and solve <a href="https://codeforces.com/problemset?order=BY_RATING_ASC">Codeforces problem</a> in Java.<br><br>
        I was insipired by computers and their functioning when I was introduced to computers back in 2015. Neither did I know the thing very well, nor I ha any knowledge of programming. Anyways, in 2018, when I was in grade 5, BASIC was introduced to me in our school. It was a turning point in my life. I began to learn the language thoroughly. Till date, I dont know the graphic functions of BASIC though 😜. But my actual programming started when the Coronavirus outbreak began. I had nothing to do, so, I started to code. And could not refarin from doing it. I remember my first work with PHP was a login form back in 2020. I was a noob back then ( and I am still a noob 🤦‍♀️). I learnt PHP and fell in love with it.<br>
        The past year I also learnt some sytem-end languages like Java, C++, Go and etc due to the advise of <a href="https://thearitroshomeblog.blogspot.com" title="Go visit his blog!!">b4apple</a> and truly, I think it was important. building OpenGL images using C++ is the most fun. While solving problems in Java is also interesting. <br><br>
        Also, I must add that I ❤ FOSS.
    <div class="post-details">Hey Noob! Who wants to know about you ? Just speak up why have you made this blog.</div>
    Alright! This blog is a medium for me to put forward my programming and other ideas to the whole world. You can use materials or quote lines from my blog but, please make sure that you mention the link where from you got the thing. IF you don't, well, I cannot be mad at you ( 'cos I believe in Open Source ).<br><br>
    <div class="post-details">Alright Noob! Tell me where to contact you.</div>
    You may use my email to contact me :- <br>
    <a href='mailto:admin@blogofdhiro.gq'>admin@blogofdhiro.gq</a>
    <div class="post-details">Are you on the web?</div>
    Yes! I am on :- <br><br>
    <a href="https://stackoverflow.com/users/16704582/vardhiro" title="where I ask my stupid questions">StackOverflow</a><br><br>
    <a href="https://github.com/vardhiro" title="where I keep my nonsense code">GitHub</a><br><br>
    <a href="https://replit.com/@vardhiro" title="where I write my more nonsense code">...and Replit</a><br>
    <div class="post-details">Happy Reading 😃😊</div>
    </article>
</div>
</body>
<footer>
<a href='changemode.php'>Change to light/dark mode permanently |</a>
<a href='index.php'>Return to Home | </a>
</html>