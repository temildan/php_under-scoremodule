<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <p>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="pasword">pasword</label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="login">
    </form>
    <?php
    if(isset($_POST["email"])) {
        if($_POST["email"] === "test@gmail.com" && $_POST["password"] === "abc123") {

            echo "you are allowed";
        } else {
            echo "not allowed";
        }

        ?>

    <?php } ?>

</body>

</html>