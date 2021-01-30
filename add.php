<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\Service;
    use models\User;
    if (isset($_POST['add'])) {
      $prodToAdd = new Product();
      $prodToAdd->title = $_POST['title'];
      $prodToAdd->price = $_POST['price'];
      $prodToAdd->save();
      header("Location: admin.php");
    }
?>
<form class="" action="" method="post">
  <label for="">Назва</label>
  <input type="text" name="title" value="">
  <label for="">Ціна</label>
  <input type="text" name="price" value="">
  <button type="submit" name="add">Додати</button>
</form>
