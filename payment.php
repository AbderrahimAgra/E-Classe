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

    <title>payment</title>
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
              <h3> Payment details</h3>
              <div class="btns">
                <img src="images/Sorte.svg" alt="logo" class="btn ">
              </div>
            </div>
          </div>
          <!-- tabl -->
          <div class="row ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nam</th>
                  <th scope="col">Payment schedule</th>
                  <th scope="col">Bill number</th>
                  <th scope="col">Amount paid</th>
                  <th scope="col">Balance amount</th>
                  <th scope="col">Date</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Karthi</td>
                  <td>First</td>
                  <td>00012223</td>
                  <td>DHS 100,000</td>
                  <td>DHS 500,000</td>
                  <td>05-jan-2022</td>
                  <td><img src="images/showDetails.svg" alt=""></td>
                </tr>
              </tbody>
              <tbody>
                <tbody>
                  <tr>
                    <td>Karthi</td>
                    <td>First</td>
                    <td>00012223</td>
                    <td>DHS 100,000</td>
                    <td>DHS 500,000</td>
                    <td>05-jan-2022</td>
                    <td><img src="images/showDetails.svg" alt=""></td>
                  </tr>
                </tbody>
                <tbody>
                  <tbody>
                    <tr>
                      <td>Karthi</td>
                      <td>First</td>
                      <td>00012223</td>
                      <td>DHS 100,000</td>
                      <td>DHS 500,000</td>
                      <td>05-jan-2022</td>
                      <td><img src="images/showDetails.svg" alt=""></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tbody>
                      <tr>
                        <td>Karthi</td>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-jan-2022</td>
                        <td><img src="images/showDetails.svg" alt=""></td>
                      </tr>
                    </tbody>
                    <tbody>
                         
              
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