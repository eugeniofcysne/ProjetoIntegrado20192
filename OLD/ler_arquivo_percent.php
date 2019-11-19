<?php
include 'conecta_sql.php';

//////////////////////////////////////////////////
$arq_caminho = getcwd();
if (!(is_dir($arq_caminho)))
{
    (mkdir($arq_caminho,0777));
}
chdir($arq_caminho);
if(isset($_FILES))
{
    $i = 0;
    //$msg = array( );
    $arquivos = array( array( ) );
    foreach(  $_FILES as $key=>$info ) {
        foreach( $info as $key=>$dados ) {
            for( $i = 0; $i < sizeof( $dados ); $i++ ) {
                $arquivos[$i][$key] = $info[$key][$i];
            }
        }
    }
    foreach( $arquivos as $file ) {
        if( $file['name'] != '')
        {
            $arquivoTmp = $file['tmp_name'];
            $arquivo = $file['name'];
            move_uploaded_file( $arquivoTmp, $arq_caminho. $arquivo ); 
        }
        else{
            echo "Arquivo vazio ou não informado.";
        }
    }
    
}
else
{
    echo "Problemas na carga dos arquivos.\n";
}

// Leitura de arquivo TXT
$caminho = getcwd();
echo "Arquivo processado..." . $arquivo;
$arquivo_entrada = $arquivo;
echo "<br>Caminho: " . $caminho;
echo "<br>Arquivo: " . $arquivo_entrada;

$array_arq = array();
	$arq = fopen($caminho . "\\" . $arquivo_entrada,"r");
	while(!feof($arq)){
		$linha = fgets($arq);
		array_push($array_arq,$linha);
		echo "<br>" . $linha;
	}
    fclose($arq);

