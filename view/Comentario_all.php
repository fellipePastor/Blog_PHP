<h2> Comentarios <h2>

<div class ="list-group">

<?php foreach($comentarios as $comentario) { ?>
<a href="#" class="list-group-item list-group-item-action">
<?php echo $comentario->descricao ;?>
<?php echo " <h5>" .$comentario->datapost ." </h5>"?> </a>
<?php } ?>