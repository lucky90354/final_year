<?php
require './include/header.php';
?>
<div class="container">
<?php
include_once('./AES.class.php');

$Cipher = new AES(AES::AES128);
$Cipher->selfTest();

?>
</div><br><br>
<?php
require './include/footer.php';
?>


