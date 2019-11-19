<?php
include 'conecta_sql.php';

$arq_caminho = getcwd();
chdir($arq_caminho);
if (isset($_FILES)) {
    $i = 0;
    //$msg = array( );
    $arquivos = array(array());
    foreach ($_FILES as $key => $info) {
        foreach ($info as $key => $dados) {
            for ($i = 0; $i < sizeof($dados); $i++) {
                $arquivos[$i][$key] = $info[$key][$i];
            }
        }
    }
    foreach ($arquivos as $file) {
        if ($file['name'] != '') {
            $arquivoTmp = $file['tmp_name'];
            $arquivo = $file['name'];
            move_uploaded_file($arquivoTmp, $arq_caminho . $arquivo);
        } else {
            echo "Arquivo vazio ou não informado.";
        }
    }
} else {
    echo "Problemas na carga dos arquivos.\n";
}

// Leitura de arquivo TXT

echo "Arquivo processado..." . $arquivo;
$arquivo_entrada = $arquivo;
echo "<br>Caminho: " . $arq_caminho;
echo "<br>Arquivo: " . $arquivo_entrada;


$array_arq = array();
$arq = fopen($arq_caminho . "\\" . $arquivo_entrada, "r");
while(!feof($arq)){
	$linha = fgets($arq);
	$new_array = explode(chr(10),$linha);
	$array_arq[$new_array[1]] = $new_array[2];
}
fclose($arq);


$quant_linhas = count($array_arq);

foreach ($array_arq as $key => $frase) {
    //aqui vai a lógica de traduzir cada linha
    //perguntar para professor como mandar isso aqui para a página de desofusca_texto
}


