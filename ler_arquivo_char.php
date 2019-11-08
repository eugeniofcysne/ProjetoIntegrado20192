<?php
include 'conecta_sql.php';

$sql = "SELECT chave, valor from tabela_char;";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);
if ($num_reg > 0) {
    foreach ($rows as $percent) {
        $tabelaTemp[$percent['chave']] = $percent['valor'];
    }
}

$texto_char = $_POST['texto_char'];
$tamanho_total = strlen($texto_char);
$texto_array = str_split($texto_char);
$texto_final = array();
$teste = false;
$posicao = 0;
while ($teste == false) {

    //ler posiçao [0]
    if ($texto_array[$posicao] == "char(") {
        //    ler posição [1];
        if ($texto_array[$posicao + 1] >= 32 && $texto_array[$posicao + 1] <= 126) {
            if ($texto_array[$posicao + 2] == ")") {
                //   traduz da tabela
                $texto3pos = "{$texto_array[$posicao]}{$texto_array[$posicao + 1]}{$texto_array[$posicao + 2]}";

                foreach ($tabelaTemp as $key => $value) {

                    if ($key == $texto3pos) {

                        array_push($texto_final, $value);
                        $posicao = $posicao + 3;
                        break;
                    }
                }
            } else {
                array_push($texto_final, $texto_array[$posicao]);
                $posicao++;
            }
        } else {
            array_push($texto_final, $texto_array[$posicao]);
            $posicao++;
        }
    } else {
        array_push($texto_final, $texto_array[$posicao]);
        $posicao++;
    }

    if ($posicao >= $tamanho_total) {
        $teste = true;
    }
}
$str = implode("", $texto_final);

echo '{"sucesso":"true", "novo_texto_char":"' . $str . '"}';