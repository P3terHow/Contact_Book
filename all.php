<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "software_dev";
    $conn = mysqli_connect($servername, $username, $password, $database_name);

    $sql = "SELECT * FROM phone";

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

        <h3><a href="create.php" class="link-2"> Create a new profile </a><h3/>

        <?php while($array = mysqli_fetch_assoc($results)): ?>
            <a href ="read.php?id=<?php echo $array['id'];?>"><?php echo $array['id'] . ":" . $array['first'] . " " . $array['last'];?></a>
            <p><a href="delete.php?id=<?php echo $array['id'];?>">Delete</a></p>
            <p><a href="edit.php?id=<?php echo $array['id'];?> ">Edit</a></p>
            <br>
            <hr>
        <?php endwhile; ?>
    </body>
</html>