<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Наш маркет</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Головна</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Товари</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Послуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php" tabindex="-1" >Адміністрування</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container bg-light">
      <h1>Всі послуги</h1>
      <div class="" >
        <table class="table">
          <thead>
            <tr>
              <th scope="col">№</th>
              <th scope="col">Назва</th>
              <th scope="col">Ціна</th>
            </tr>
          </thead>
          <tbody>
        <?php
        $num = 1;
        foreach ($this->service as $servic):
          ?>
            <tr>
              <th scope="row"><?php echo $num++ ?></th>
              <td><?php echo $servic->service_name;?> грн</td>
              <td><?php echo $servic->price;?> грн</td>
            </tr>
        <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
