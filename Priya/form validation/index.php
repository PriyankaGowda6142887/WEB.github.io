<?php
    if(!isset($username)) {
        $username = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eqiv="X-UA-Comatible" content="ie=edge">
    <link rel="stylesheet" href=""https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>PHP Form Validation</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="img_container"><img src="https://d2w9rnfcy7mm78.cloudfront.net/1616404/display_ce645ebfe2895f7717f066ab3f8dc496.png?1516357045" alt=""/>
        </div>
        <form action="results.php" method="POST">
            <input placeholder="username" type="text" name="user_name" value="<?php echo htmlspecialchars($username) ?>"> <br />
                <?php if(isset($name_error)) { ?>
                    <p><?php echo $name_error ?></p>
                <?php } ?>
            <input placeholder="password" type="password" name="user_password"> <br />
                <?php if(isset($password_error)) { ?>
                    <p><?php echo $password_error ?></p>
                <?php } ?>
            <input class="register_button" type="submit" value="REGISTER">
        </form>
    </div>
</body>
</html>