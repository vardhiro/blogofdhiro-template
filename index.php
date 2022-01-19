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
    <title>Home | blogofdhiro.gq</title>
</head>
<body>
    <nav>
        <button class="lmode" onclick="lightmode()">Light Mode</button>
        <button class="dmode" onclick="darkmode()">Dark Mode</button><br><br>
    </nav>
    <?php
    $conn = new mysqli("localhost","root","","alldb");
    $s = "SELECT article_title,article_id FROM articles ORDER BY article_timestamp DESC";
    $q = mysqli_query($conn,$s);
    while($row = mysqli_fetch_array($q)){
    ?>
    <div id="post">
        <span id='title' style='background-color:black;'><?php echo $row['article_title']; ?></span><br><br>
        <a href='article.php?id=<?php echo $row['article_id']; ?>' id='postview'>View More</a>
    </div><br><br>
    <?php
    }
    ?>
</body>
</html>