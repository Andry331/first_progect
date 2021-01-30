<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\Service;
    use models\User;

    if (isset($_POST['update'])):
    $prodToRed = Product::findById($_POST['update']);
?>
    <form class="" action="" method="post">
      <label for="">Назва товару</label>
      <input type="text" name="title" value="<?php echo $prodToRed[0]->title; ?>">
      <label for="">Ціна</label>
      <input type="number" name="price" value="<?php echo $prodToRed[0]->price; ?>">
      <input type="hidden" name="id" value="<?php echo $prodToRed[0]->id; ?>">
      <button type="submit" name="buttonRed">Редагувати</button>
    </form>
<?php
    endif;
    if (isset($_POST['buttonRed'])) {
      $prodToRed = Product::findById($_POST['id']);
      $prodToRed[0]->title = $_POST['title'];
      $prodToRed[0]->price = $_POST['price'];
      $prodToRed[0]->save();
      header("Location: admin.php");
    }
?>
