<?php 
require_once "./controller/ComentarioController.php";
?>
<h2> Comentarios <h2>

<div class ="list-group">

<?php foreach($comentarios as $comentario) { ?>
<a href="#" class="list-group-item list-group-item-action">
<?php echo $comentario->Autor_idAutor; ?>    
<?php echo $comentario->descricao; ?>
<?php echo $comentario->datapost; ?></a>
<?php } ?>