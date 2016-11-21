<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
	$db = open_database();

	if ($db) {
		echo '<h1>Banco de Dados Conectado!</h1>';
	} else {
		echo '<h1>ERRO: Não foi possível Conectar!</h1>';
	}
?>

<a id="linkConstrutores" href="#" onClick="abrir('Construtores')">Construtores</a>
<a id="linkConstrutores2" href="./itens.php?tipo=Construtores" >Construtores 2</a>
<a id="linkEnergeticos" href="#" onClick="abrir('Energetico')">Energeticos</a>

<div id="resultado" style="border:1px solid green;">
</div>

<script src="./jquery/jquery-3.1.1.min.js" ></script>
<script type="text/javascript">
function abrir(tipo){
	$.ajax({
		url: './itens.php?tipo=' + tipo,
		beforeSend: function(){
			$('#resultado').html('Carregando...');
		},
		success: function(respostaServidor){
			$('#resultado').html(respostaServidor);
		}
	});
}
</script>
