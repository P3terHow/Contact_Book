<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "software_dev";
$conn = mysqli_connect($servername, $username, $password, $database_name);

$task_id = $_GET['id'];
$sql = "SELECT * FROM phone WHERE id='{$task_id}'";

$results = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php while($array = mysqli_fetch_assoc($results)) : ?>
            <p>ID: <?php echo $array['id']; ?></p>
            <h2>TITLE: <?php echo $array['first'] . $array['last'];?></h2>
            <h3>DETAILS: <?php echo $array['email'];?></h3>
        <?php endwhile;?>

    <a href="all.php" CLASS="link">All Contacts</a>
    </body>
</html>