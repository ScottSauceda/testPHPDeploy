<?php
    require_once("conn/connSocial.php");


$firstName = $_GET['firstName'];



$query = "SELECT * FROM blogs ORDER BY blogDateTime";

$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM members ORDER BY joinTime";

$result2 = mysqli_query($conn, $query2);



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
                    echo '<p>' . $row['blogTitle'] . ' : ' . $row['blogEntry'] . ' : ' . $row['mbrID'] . '</p>';
                }
        ?>
    </div>

    <br>
    <br>
    
    <div>
        <?php
            while($row2=mysqli_fetch_array($result2)) {
                echo '<p>' . $row2['IDmbr'] . ' : ' . $row2['lastName'] . ' : ' . $row2['firstName'] . '  : ' . $row2['user'] . '</p>';
            }
        ?>
    </div>
</body>
</html>