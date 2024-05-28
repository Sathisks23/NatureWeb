





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
        <h1>Get Ready...</h1>
        <form action="../controller/login.php" method='POST'>
            
            <div class="eamil_input">
            <label for="">Email</label> <br><br> <input type="email" name='email'>
            </div>
            <div class="password_input">
            <label for="">Password</label> <br><br> <input type="password" name='password'>
            </div>
           
            <div class="div_btn">
              <input type="submit" value='login' name="submit">
            </div>
        </form>

                  


        <small>Don't  have an account  <a href="/view/register.php">Sign Up</a></small>
    </div>
</body>
</html>