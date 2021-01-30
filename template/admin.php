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
    <section>
      <a class="btn btn-warning nav-link" href="add.php" >Додати товар</a>
    </section>
    <main class="container bg-light d-flex justify-content-around">
      <div class="">
        <h1>Всі товари</h1>
        <div class="d-flex flex-row flex-wrap align-items-center justify-content-around border-end border-4" style="padding:10px;">
          <?php
          foreach ($this->product as $prod):?>
            <div class="card" style="width: 18rem; margin-bottom:15px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $prod->title;?></h5>
                <p class="card-text"><?php echo $prod->price;?></p>
                <div class="d-flex justify-content-around">
                  <form class="" action="update.php" method="post">
                    <button type="submit" class="btn btn-secondary" name="update" value="<?php echo $prod->id;?>">Редагувати</button>
                  </form>
                  <form class="" action="dalete.php" method="post">
                      <button type="submit" class="btn btn-danger" name="dalete" value="<?php echo $prod->id;?>">Видалити</button>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="">
        <h1>Всі послуги</h1>
        <div class="d-flex flex-row flex-wrap align-items-center justify-content-around" style="padding:10px;">
          <?php
          foreach ($this->service as $servic):?>
            <div class="card" style="width: 18rem; margin-bottom:15px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $servic->service_name;?></h5>
                <p class="card-text"><?php echo $servic->price;?></p>
                <div class="d-flex justify-content-around">
                  <form class="" action="update.php" method="post">
                    <button type="submit" class="btn btn-secondary" name="update" value="<?php echo $prod->id;?>">Редагувати</button>
                  </form>
                  <form class="" action="dalete.php" method="post">
                      <button type="submit" class="btn btn-danger" name="dalete" value="<?php echo $prod->id;?>">Видалити</button>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
