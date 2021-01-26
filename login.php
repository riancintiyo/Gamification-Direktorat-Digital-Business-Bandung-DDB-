<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="Images/Bdv.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="normailize.css" />
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <title>Sign in</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="/Images/DDB_Logo.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
          </form>

            <div class="btn-group" role="group text-center">
                <button type="button" class="btn2" href="dashboard.php">Login</button>
            </div>
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Belum Punya Akunf ? Daftar</a>
          </div>
      
        </div>
      </div>
</body>
</html>