<?php
    require_once("conn/connSocial.php");


$firstName = $_GET['firstName'];



$query = "SELECT * FROM blogs ORDER BY blogDateTime";

$result = mysqli_query($conn, $query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first web page</title>
</head>
<body>
    <p>
        <?php echo date("F jS, Y"); ?>
        <br/>
        You have successfully reached Index.php in test folder of HTDOCS
    </p>

    <div>
        <?php
            while($row=mysqli_fetch_array($result)) {
                    echo '<div>' . $row['blogTitle'] . ', ' . $row['blogEntry'] . ' (' . $row['mbrID'] . ')</div>';
                }
        ?>
    </div>
</body>
</html>