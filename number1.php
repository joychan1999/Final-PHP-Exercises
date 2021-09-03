<!--  Create a simple HTML form and accept the user name and display the name through PHP echo statement. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method='POST'>
        <h1>Please input a name:</h1>
        <input type="text" name="name">
        <input type="submit" name="submit" value="Okay">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        echo " Hello " . $name;
    }

    ?>
</body>

</html>