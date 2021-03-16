<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Registro</title>
</head>

<body>
    <div class="user">
    <center>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "rober123";
        $dbname = "registros";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $sql = "INSERT INTO usuarios (username, password)
        VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </center>
    </div>
</body>

</html>