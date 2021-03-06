

<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="css/sign_in.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
 </head>
    
<body>
  <main>
     <div class="login d-flex justify-content-center align-items-center">
      <div class="bg-white p-4 rounded-3 login_content ">
       
          <div class=" mb-4">
            <h1 class="border-start px-2 m-3 border-info border-5 fw-bold fs-3">
               E-classe
            </h1>
          </div>
          <div class=" text-center ">
            <h2 class="text-uppercase fs-5">sign in </h2>
            <p class=" text-muted "> Enter your credentials to access your account</p>
          </div>
           <form  action="login.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Entre your email">
            <span class="validation-msg"></span>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control mb-4" name="password" placeholder="Entre your password" id="exampleInputPassword1">
            <span class="validation-msg"></span>
          </div>
          <button type="submit" name="submit" class="btn  btn-info w-100 text-white text-uppercase  "> 
            sign in
          </button>
          <div class="mt-3 text-center">
            <span class="text-muted">
               New to E-Classe ? 
            </span>
             <a class="text-info text-decoration-underline" href="signUp.php"> <span>creat My Account</span></a> 
          </div>
        </form>
      </div>
    </div>
  </main>
  <script src="./js/validation.js"></script>
</body>

</html>