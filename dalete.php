<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\Service;
    use models\User;

    if (isset($_POST['dalete'])):
    $prodToDel = Product::findById($_POST['dalete']);
?>
    <form class="" action="" method="post">
      <input type="hidden" name="id" value="<?php echo $prodToDel[0]->id; ?>">
      <button type="submit" name="buttonDel">Редагувати</button>
    </form>
<?php
    endif;
    if (isset($_POST['buttonDel'])) {
      $prodToDel = Product::findById($_POST['id']);
      $prodToDel[0]->delete();
      header("Location: admin.php");
    }
?>
