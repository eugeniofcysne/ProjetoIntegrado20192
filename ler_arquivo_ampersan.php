<?php
include 'conecta_sql.php';

$sql = "SELECT chave, valor from ampersan;";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);
if ($num_reg > 0) {
    foreach ($rows as $ampersan) {
        $tabelaTemp[$ampersan['chave']] = $ampersan['valor'];
    }
}

$texto_ampersan = $_POST['texto_ampersan'];
$tamanho_total = strlen($texto_ampersan); //retorna tamanho da string
$texto_array = str_split($texto_ampersan); //converter string em array
$texto_final = array();
$texto_traduzir = array();
$posicao = 0;
$estado = 0;
$texto3pos = '';
$i = 0;
$tamanho_traduzir = 0;

while ($posicao < $tamanho_total) {

    if ($estado == 0) {
        if ($texto_array[$posicao] == "&") {
            $estado = 1;
            array_push($texto_traduzir, $texto_array[$posicao]);
            echo "chegou aqui 1";
            echo " \n";
            while ($estado == 1) {
                $posicao++;

                echo "chegou aqui 2";
                echo " \n";
                if ($texto_array[$posicao] == ";") {
                    echo "chegou aqui 4";
                    echo " \n";
                    $estado = 0;
                    array_push($texto_traduzir, $texto_array[$posicao]);
                    //TRADUZIR
                    $tamanho_traduzir = count($texto_traduzir);
                    var_dump($texto_traduzir);
                    $posicao++;
                    //ver se este for funciona
                    for ($i = 0; $i < $tamanho_traduzir; $i++) {
                        echo 
                        $texto3pos = $texto3pos . "{$texto_traduzir[$i]}";


                        echo $texto3pos;
                        echo " \n";
                    }

                    foreach ($tabelaTemp as $key => $value) {

                        if ($key == $texto3pos) {

                            array_push($texto_final, $value);

                            break;
                        }
                    }
                } else {
                    echo "chegou aqui 3";
                    echo " \n";
                    array_push($texto_traduzir, $texto_array[$posicao]);
                }
            }
        } else{
            array_push($texto_final, $texto_array[$posicao]);
            $posicao++;
        }
    }
}
var_dump($texto_final);
$str = implode("", $texto_final);


echo '{"sucesso":"true", "novo_texto":"' . $str . '"}';
