<input type="text" id="myInput" class="input-search" alt="lista-clientes"   placeholder="Qual assunto procura" /> 
<table id= "table" class="lista-clientes" >

<?php foreach ($artigos as $artigo ){ ?>
<tr>
<li class = "nav-item">
<td><a class="nav-link" href="./?idArtigo=<?php echo $artigo->idArtigo ?>"> <?php echo $artigo->nome ?></a></td>
</li>
</tr>
<?php } ?>

</table>