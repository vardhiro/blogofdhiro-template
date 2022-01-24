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
    <link rel="stylesheet" href="assets/style-night.css">
    <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
    </style>
    <title>Home | blogofdhiro.gq</title>
</head>
<body>
    <center><a href="me.php" title='About me'><h1 style="font-family: 'Ubuntu';border-bottom: 1px solid yellow">THE DHIRO'S BLOG</h1></a> </center>
    <?php
    $conn = mysqli_connect("localhost", "root","", "alldb");
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