<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>E-classe</title>
</head>

<body>
  <main class="container-fluid h-100 ">
    <div class="row h-100">
      <div class="col-12 col-md-4 offset-md-4 col d-flex align-items-center">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="border-start border-primary border-5 ps-2 ">
              E-classe
            </h1>
            <h4 class="text-center">SIGN IN</h4>
            <p class="text-center">Enter your credentials to access your account</p>
            <form>
              <div class="form-group">
                <label for="Email">Email</label>
                <input class="form-control" type="email" name="email" id="Email">
              </div>
              <div class="form-group">
                <label for="pw">Password</label>
                <input class="form-control" type="password" name="password" id="pw">
              </div>
              <input type="submit" value="SIGN IN " class="btn btn-primary w-100 my-4">
            </form>
            <p class="text-center">Forgot you password? <a href="#">Reset password</a></p>
          </div>

        </div>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>