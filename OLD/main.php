<?php
include 'conecta_sql.php';

//////////////////////////////////////////////////
$arq_caminho = getcwd() . "\\URLS\\";
if (!(is_dir($arq_caminho)))
{
    (mkdir($arq_caminho,0777));// 0777 é o modo padrao, que é o mais abrangente possível. tem todas as autorizacoes
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
            echo "deu certo";
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

// // Leitura de arquivo TXT
// $caminho = getcwd();
// echo "Arquivo processado..." . $arquivo;
// $arquivo_entrada = $arquivo;
// echo "<br>Caminho: " . $caminho;
// echo "<br>Arquivo: " . $arquivo_entrada;