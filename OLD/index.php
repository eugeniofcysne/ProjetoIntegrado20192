<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mineração de emoções</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
	iframe{
		width: 100%;
		height: 100px;
	}
	.jumbotron{
		padding: 0px;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
	// Funções executadas no momento da carga da página
	//atualiza_arq();




    $('#btn_novo_texto').click(function(){
		var novo_texto = $('#ins_texto').val();
		if(novo_texto.length>0){
			fn_desofusca_texto(novo_texto);
			$('#result').html("");
		}else{
			$('#result').html("Insira um texto válido"); //
		}
	});

    function fn_desofusca_texto(novo_texto){
		$('#dv_original').html("");
		$.ajax({
			url: 'desofusca_texto.php',
			data: {texto: novo_texto},
			timeout: 1200000,
			async: false,
			type: 'POST',
			dataType: 'json',
			success: function(retorno) {
				if(retorno.sucesso == 'true'){
					$('#dv_original').html("Novo texto " + retorno.novo_texto + " processado");
				}else {
					$('#dv_original').html("deu errado");
				}
			}
		});
	}


});
</script>
</head>

<body>
<div class="jumbotron text-center">
  <h1>DESOFUSCAMENTO</h1>
</div>
<div class="container">
	<div class="row">		
		<div class="col">
			<div class="card">
				<div class="card-header">Leitura de campo input</div>
				<div class="card-body">
					<form>
					
						<div class="form-group mb-3 input-group-sm">
							<label for="arq">Input texto: </label>
							<input type="text" name="ins_texto" class="form-control" id="ins_texto" placeholder="Input texto">
							<br>
							<button type="button" id="btn_novo_texto" class="btn">Carregar</button>
							<span id="result"></span>
						</div>
						</form>
						<div class="row">
						<div class="col" >
							<div class="card">
								<div class="card-header">Texto desofuscado</div>
								<div class="card-body">
									<div id="dv_original"></div>
								</div>
							</div>
						</div>
					</div>
						
					<form action="desofusca_arquivo.php" method="post" name="enviar" id="enviar" enctype="multipart/form-data" target="iframeUpload">
						<div class="form-group">
							<label for="arq">Arquivo:</label>
							<input type="file" name="arquivos[]" class="form-control" id="arq">
						</div>
						<button type="submit" id="bt_carregar" class="btn">Carregar</button>
						<button type="reset" class="btn">Limpar</button>
					</form>
					<iframe name="iframeUpload" id="iframeUpload"></iframe>

				</div>
			</div>
		</div>
    </div>
	<br>
</div>
</body>
</html>
