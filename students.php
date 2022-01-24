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

    <title>students</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
      <!-- sidebar -->
      <?php include("sidebare.php"); ?>
        <!-- zone de la droite-->
        <!-- navebare -->
        <?php include("navebare.php"); ?>
          <!-- barre de comande -->
          <div class="row  ">
            <div class="col  d-flex justify-content-between">
              <h3> Students list</h3>
              <div class="btns">
                <img src="images/Sorte.svg" alt="logo" class="btn ">
                <button class="btn btn-info text-light"> ADD NEW STUDENTS</button>
              </div>
            </div>
          </div>
          <!-- tabl -->
          <div class="row ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nam</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Enroll number</th>
                  <th scope="col">date of admission</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><img src="images/user-students.svg"  alt="logo"></th>
                  <td>username</td>
                  <td>user@email.com</td>
                  <td>7305734777293</td>
                  <td>234777592340980</td>
                  <td>19-janv-2022</td>
                  <td><img src="images/edit.svg" alt=""></td>
                  <td><img src="images/delet.svg" alt=""></td>
                </tr>
              
              </tbody>
              <tbody>
                <tr>
                  <th scope="row"><img src="images/user-students.svg"  alt="logo"></th>
                  <td>username</td>
                  <td>user@email.com</td>
                  <td>7305734777293</td>
                  <td>234777592340980</td>
                  <td>19-janv-2022</td>
                  <td><img src="images/edit.svg" alt=""></td>
                  <td><img src="images/delet.svg" alt=""></td>
                </tr>
              
              </tbody>
              <tbody>
                <tr>
                  <th scope="row"><img src="images/user-students.svg"  alt="logo"></th>
                  <td>username</td>
                  <td>user@email.com</td>
                  <td>7305734777293</td>
                  <td>234777592340980</td>
                  <td>19-janv-2022</td>
                  <td><img src="images/edit.svg" alt=""></td>
                  <td><img src="images/delet.svg" alt=""></td>
                </tr>
              
              </tbody>
              <tbody>
                <tr>
                  <th scope="row"><img src="images/user-students.svg"  alt="logo"></th>
                  <td>username</td>
                  <td>user@email.com</td>
                  <td>7305734777293</td>
                  <td>234777592340980</td>
                  <td>19-janv-2022</td>
                  <td><img src="images/edit.svg" alt=""></td>
                  <td><img src="images/delet.svg" alt=""></td>
                </tr>
              
              </tbody>
              <tbody>
                <tr>
                  <th scope="row"><img src="images/user-students.svg"  alt="logo"></th>
                  <td>username</td>
                  <td>user@email.com</td>
                  <td>7305734777293</td>
                  <td>234777592340980</td>
                  <td>19-janv-2022</td>
                  <td><img src="images/edit.svg" alt=""></td>
                  <td><img src="images/delet.svg" alt=""></td>
                </tr>
              
              </tbody>
              
            </table>

          </div>
        </div>
    </div>

    <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    </body>

    </html>