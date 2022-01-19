<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Mode</title>
</head>
<body>
    Select mode that will be obeyed on this computer until further closing of the browser
    <form action="changemode.php" method="post">
        <select name="mode" id="">
            <option value="light" default>Light Mode</option>
            <option value="dark" default>Dark Mode</option>
        </select>
        <button>Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['mode'])){
    $mode = $_POST['mode'];
    $_SESSION['mode'] = $mode;
    echo"<script>location.href='index.php'</script>";
}
?>