<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body  style="background-image: url(img.jpg);">
  <div class="container-fluid">
    <div class="row newth">
      <div class="col-md-4 col-md-offset-2">
        <div class="bg-clr">
            <form action="session.php" method="post" class="box">
              <div class="card">
                <div class="card-header bg-dark">
                  <h1 class="text-white text-center">LOGIN</h1>
                </div>
                <p class="text-muted"> Please enter your username and password!</p>
                <div class="form-group"> 
                  <input type="text" class="form-control" name="name" id="name" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="" value="Login">
                </div>
              </div>
            </form>
        </div>
</body>
</html>
