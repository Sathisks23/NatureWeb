


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='./src/register.css' rel='stylesheet'>
</head>
<body>
    <div class="register_form">
        <h1>Welcome you for Explore Nature </h1>
        <form action="/controller/registration.php" method='POST'>
            <div class="uname_input">
              <label for="">Name</label>   <br><br> <input required type="text" name='name'>
            </div>
            <div class="eamil_input">
            <label for="">Email</label> <br><br> <input required type="email" name='email'>
            </div>
            <div class="password_input">
            <label for="">Password</label> <br><br> <input required type="password" name='password'>
            </div>
            <div class="cpassword_input">
            <label for="">Confirm Password</label> <br><br>  <input required type="password" name='cpassword'>
            </div>
            <div class="div_btn">
                          <input type="submit" value='Sign UP' name="submit">
            </div>
        </form>
        <small>  Already have an account  <a href="/view/login.php">login</a></small>
    </div>
</body>
</html>