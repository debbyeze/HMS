
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap"
      rel="stylesheet"
    />

    <title>Dora Hospital</title>
  </head>
  <body>
    <main>
      <section class="container">
        <div class="banner">
          <h2 class="container text-white">Dora hospital</h2>
        </div>
        <form action="login.php" method="get" class="mx-auto">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input
              type="text" name="username"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp container-sm"
              required 
            />
            <img src="images/icons8-male-user-24.png" alt="username icon" class="user-img" width="20px" height="20px">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password" name="pass"
              class="form-control"
              id="exampleInputPassword1"
              required
            />
            <img src="images/icons8-sign-in-form-password-32.png" alt="signin-icon" class="pw-img" width="20px" height="20px">
          </div>
          
            <div id="emailHelp" class="form-text text-muted small mb-3">
              Do not share your login details.
            </div>
          
          <button type="submit" name="login" class="btn btn-primary ">Submit</button>
          <?php 
if(isset($_REQUEST["err"]))
	$msg="Invalid username or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>
        </form>
      </section>
    </main>
    <footer class="container-fluid p-2">
     <p class="small text-center">&copy;Copyright <span id="copyright-date"></span> Deborah Ezenwankwo</p>
    </footer>
    <script src="/index.js"></script>
   
  </body>
</html>
