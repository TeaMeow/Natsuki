<meta charset="utf-8">
<?php include '../src/natsuki.php'; 

$natsuki = new Natsuki();


echo $natsuki->now(time())
             ->relative(time() + 300000002, true);
?>