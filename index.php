<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db) or ("Couldn't Connect to Database!");


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
        ?>

    <div>
        <?php
            while($row=mysqli_fetch_array($result)) {
                    echo '<div>' . $row['blogTitle'] . ', ' . $row['blogEntry'] . ' (' . $row['mbrID'] . ')</div>';
                }
        ?>
    </div>
</body>
</html>