<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sign_in.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Signe up</title>
</head>    
    <body>
      <main>
        <div class="login d-flex justify-content-center align-items-center ">
          <div class="bg-white p-4 rounded-3 login_content w-75 ">          
            <div class=" mb-4">
                <h1 class="border-start px-2 m-3 border-info border-5 fw-bold fs-3">
                  E-classe
                </h1>
            </div>
            <div class=" text-center ">
                <h2 class="text-uppercase fs-5 "> sign Up </h2>
                <p class=" text-muted "> </p>
            </div>
            <form  action="addUser.php" method="POST">
              <div>
                <label for="exampleInputPassword1" class="form-label">Full name</label>
              <input required type="text" class="form-control mb-2 w-75" name="fName">
              <span class="validation-msg"></span>
              </div>
              <div>                
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input required type="email" class="form-control mb-2 w-75" name="email">
                <span class="validation-msg"></span>
              </div>
              <div>                
                <label for="exampleInputPassword1" class="form-label">mobile number</label>
                <input required type="phone" class="form-control mb-2 w-75" name="phoneNumber">
                <span class="validation-msg"></span>
              </div>
              <div>                
                <label for="exampleInputPassword1" class="form-label">New password</label>
                <input required type="password" class="form-control mb-2 w-75 " name="password">
                <span class="validation-msg"></span>
              </div>

              <button type="submit" name="submit" class="btn  btn-info w-50 text-white text-uppercase  "> sign up </button>
            </form>
            <div>
          <a href="index.php" class="btn btn-outline-info w-50 mt-4 "> LOGIN </a>
            </div>
            
          </div>
        </div>
      </main>
      <script src="./js/validation.js"></script>
    </body>

</html>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>