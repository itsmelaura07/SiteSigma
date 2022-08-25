<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_banco.php';

if (isset($_POST['txtNome'])) {
    $nome = ($_POST['txtNome']);
}
if (isset($_POST['txtemail'])) {
    $email = ($_POST['txtemail']);
}
if (isset($_POST['txtfone'])) {
    $tel = ($_POST['txtfone']);
}
if (isset($_POST['txtmsg'])) {
    $msg = ($_POST['txtmsg']);
}
?>

<div  class="prod">
<h1 id='subtitulo' class="clear">Id</h1>
    <div class="row mt-5">

<form action="./contato.php" method="post">
<div class="container">
<ul class="cadastro">
    <li>
    <label for="txtNome">Nome</label>
<input type="text" name="txtNome" id="txtNome">
    </li>
    <li>
    <label for="txtemail">Ações</label>
<input type="text" name="txtemail" id="txtemail">
    </li>
    <li>

</div>


</form>
<?php
echo "$nome <br> $email <br> $tel <br> $msg";
?>
<?php
// include do footer
include_once './includes/_footer.php';
?>