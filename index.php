<? $db = 'model/casino.sqlite';
//include_once('model/migration.php');
include_once('controller/function.php');
?>
<? include_once('view/header.php'); ?>

<form method="post">
    <input type="submit" name="bet" value="Start">
    <input type="submit" name="reset" value="Restart">
</form>

<div><? echo $sector?></div>
<? statistic($db); ?>
<? include_once('view/footer.php'); ?>