<form action="./?classe=Comentario&acao=create&idArtigo=<?php echo (isset($_GET["idArtigo"]) ? $_GET["idArtigo"] : 1);?> " method="post">
<label for="comment">Escreva aqui seu comentario:</label>s
<textarea class="form-control" rows="5" id="descricao" name="descricao"></textarea>
<button type="submit" class="btn btn-primary">Enviar</button>

<form>