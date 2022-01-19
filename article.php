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
    <?php
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conn = new mysqli("localhost","root","","alldb");
    $s = "SELECT * FROM articles WHERE article_id = '$id'";
    $q = mysqli_query($conn,$s);
    while ($row = mysqli_fetch_array($q)) {
        $title = $row['article_title'];
        $article = "<article>".$row['article_content']."</article>";
        $time = $row['article_timestamp'];
        $last = date('d',$time);
        if($last%10 == 1&& $last != 11){
            $date = $last."st";
        }elseif($last%10 == 2&& $last != 12){
            $date = $last."nd";
        }elseif($last%10 == 3&& $last != 13){
            $date = $last."rd";
        }else{
            $date = $last."th";
        }
        $date .=  date(' M y', $time);
        echo"<title>$title</title>";
        echo"<span class='post-title'>$title</span><br>";
        echo"<span class='post-details'>Posted on $date by <a href='me.php' title='About Me' class='author'>Dhirodatto Biswas</a></span></span><br>";
        echo $article;
    }
}
?>
</div>
</body>
<footer>
<a href='changemode.php'>Change to light/dark mode permanently |</a>
<a href='index.php'>Return to Home | </a>
<a href='me.php'>About me</a>
</footer>
</html>