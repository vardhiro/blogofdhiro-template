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
    <style>
        p, h1, h2, h3, em, h4, iframe{
            background-color: black;
        }
        
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
    </style>
    <link rel="stylesheet" href="assets/style-night.css">
</head>
<body>
    <div class='post'>
    <center>
        <a href="."><h1 style="border-bottom: 1px solid yellow">THE DHIRO'S BLOG</h1></a>
    </center>
    <?php
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root","", "alldb");
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
<script src="https://utteranc.es/client.js"
        repo="vardhiro/blogofdhiro-template"
        issue-term="pathname"
        label="Comments "
        theme="icy-dark"
        crossorigin="anonymous"
        async>
</script>
</div>
</body>
</html>