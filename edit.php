<?php
if(isset($_POST['submit-btn'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "software_dev";
    $conn = mysqli_connect($servername, $username, $password, $database_name);


    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $email = $_POST['email'];
    $phone_id = $_POST['phone_id'];

    $sql = "UPDATE phone SET first = '{$firstname}', last = '{$lastname}', email = '{$email}' WHERE id='{$phone_id}'";

    mysqli_query($conn, $sql);
}


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
<form action="edit.php" method="POST">
    <input type="text" placeholder="first-name" name="first" class="input-text">
    <input type="text" placeholder="last-name" name="last" class="input-text">
    <input type="text" placeholder="email" name="email" class="input-text">
    <input type="hidden" name="phone_id" value="<?php echo $_GET['id']?>">
    <input type="submit" name="submit-btn" class="submit-button">
    <br>
    <a href="all.php" CLASS="link">All Contacts</a>

</form>
</body>
</html>
