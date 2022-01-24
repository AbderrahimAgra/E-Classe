<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="styl__dashboard.css">
      <link rel="stylesheet" href="comun.css">

    <title>dashboard</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- sidebar -->
       <?php include("sidebare.php"); ?>
        <!-- zone de la droite-->
        <div class="col-10 col-md-9 ">
          <div class="row navbar-con">
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
              <div class="navbar-brand">
                <img src="images/ic-arrow.svg" alt="">
              </div>
              <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                  <form action="#" class="d-flex align-items-center">
                    <input type="search" class="form-control" placeholder="search ...">
                    <img alt="search btn" class="search-btn" src="images/ic-search.svg">
                  </form>
                </li>
                <li class="nav-item">
                  <img class="btn btn-notif" src="images/ic-notif.svg"></img>
                </li>
              </ul>
            </nav>

          </div>
          <div class="row cards">
            <div class="col-12 col-md-6 col-lg-3 ">
              <div class="card student__card">
                <div class="card-body d-flex flex-column align-items-start">
                  <img src="images/ic-big-students.svg" alt="logo">
                  <p> students</p>
                  <h3 class="align-self-end">243</h3>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 ">
              <div class="card course__card">
                <div class="card-body d-flex flex-column align-items-start">
                  <img src="images/ic-big-course.svg" alt="logo">
                  <p> course</p>
                  <h3 class="align-self-end">13</h3>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 ">
              <div class="card payments__card">
                <div class="card-body d-flex flex-column align-items-start">
                  <img src="images/ic-big-payments.svg" alt="logo">
                  <p> payments</p>
                  <h3 class="align-self-end"> DHS 556,000</h3>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 ">
              <div class="card Users__card">
                <div class="card-body d-flex flex-column align-items-start">
                  <img src="images/ic-big-users.svg" alt="logo">
                  <p class="text-light"> Users </p>
                  <h3 class="align-self-end">3</h3>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    </body>

    </html>