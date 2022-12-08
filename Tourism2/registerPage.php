<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="login2-form-container active">

<i class="fas fa-times" id="form-close"></i>

<form action="register.php" method="post">
    <h3>Register</h3>
    <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
    <input type="text" class="box" name="f_name" placeholder="enter your first name">
    <input type="text" class="box" name="l_name" placeholder="enter your last name">
    <input type="email" class="box" name="email" placeholder="enter your email">
    <input type="tel" class="box" name="mobile" placeholder="enter your mobile number" maxlength="10" >
    <input type="password" class="box" name="password" placeholder="enter your password" >
    <input type="submit" value="Register now" class="btn">
</form>
</div>

</body>

</html>
