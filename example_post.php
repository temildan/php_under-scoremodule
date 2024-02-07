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
            <label for="last_name">last name</label>
            <input type="text" name="last_name" id="last_name">
        </p>
        <input type="submit" value="subscribe" name="submitsubscribe">
    </form>
    <?php
    if(isset($_POST["last_name"])) {
        ?>
        <?php if($_POST["last_name"] != "") { ?>
            <h2>thank you for your subcription</h2>
        <?php } else { ?>
            <p>the last name is required</p>
        <?php } ?>
    <?php } ?>
</body>

</html>