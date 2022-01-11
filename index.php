<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="../static/style.css">
</head>
<body bgcolor='black'>
    <?php
    $conn = new mysqli("localhost","root","","alldb");
    if(isset($_SERVER['PATH_INFO'])){
        $request = $_SERVER['PATH_INFO'];
        $string = str_replace("/", "", str_replace("-"," ",$request));
        $s = "SELECT * FROM articles WHERE article_title = '$string'";
        $q = mysqli_query($conn,$s);
        $num = mysqli_num_rows($q);
        if ($num > 0){
            echo "<title>$string | Dhiro Codes</title>";
            echo "<article>";
            while ($row = mysqli_fetch_array($q)) {
                $content = $row['article_content'];
                $time = $row['article_timestamp'];
                $date = date('d', $time);
                if((int)$date%10 == 2){
                    $date .= "<sup>nd</sup>";
                }elseif ((int)$date%10 == 1) {
                    $date .= "<sup>st</sup>";
                }else{
                    $date .= "<sup>th</sup>";
                }
                $date .= " ".date('M Y', $time);
                echo "<span class='name' style='color: white; font-size: 2rem;'>$string</span><br>";
                echo "<span class='post-details'>Written By <a class='author' href='./'>Dhirodatto Biswas</a> on <span class='date'>$date </span></span>";
                echo"<div class='article-content'>$content</div>";
            }
            echo "</article>";
        }else{
            http_response_code(404);
            require_once('./static/404.html');
        }
    }else{
        require_once('./static/about.html');
    }
    ?>
</body>
</html>