<?php

# CASO BINÁRIO
# CASO EXCEPCIONAL 0
function f_bindec_excep0(){
    echo "O número 0 em binário é: 0";
}

# CASO EXCEPCIONAL 1
function f_bindec_excep1(){
    echo "O número 1 em binário é: 1";
}

# CASO REGULAR
function f_bindec($converter){
        $contador = 0;
        $retorno = $converter;
        $convertido = [];

        #LAÇO CONVERSOR BINÁRIO
        while ($converter >= 2){
            array_push($convertido, $converter % 2);
            $converter = intdiv($converter, 2);

            if ($converter == 1){
                array_push($convertido, $converter);
            }
        }

        #BLOCO EXIBIÇÃO
        $reverso = array_reverse($convertido);
        $tam = sizeof($reverso, 0);
        echo "O número: ".$retorno." em binário é: ";
        while($contador < $tam){
            echo $reverso[$contador];
            $contador = ++$contador;
        }
    }

# -------------------------------------------------------------------------

# CASO OCTAL
# CASO EXCEPCIONAL 0
function f_binoct_excep0(){
    echo "O número 0 em octal é: 0";
}

# CASO EXCEPCIONAL 1
function f_binoct_excep1(){
    echo "O número 1 em octal é: 1";
}

# CASO OCTAL
function f_binoct($converter){
    $contador = 0;
    $retorno = $converter;
    $convertido = [];

    #LAÇO CONVERSOR OCTAL
    while ($converter >= 2){
        array_push($convertido, $converter % 8);
        $converter = intdiv($converter, 8);

        if ($converter == 1){
            array_push($convertido, $converter);
        }
    }

    #BLOCO EXIBIÇÃO
    $reverso = array_reverse($convertido);
    $tam = sizeof($reverso, 0);
    echo "O número: ".$retorno." em octal é: ";
    while($contador < $tam){
        echo $reverso[$contador];
        $contador = ++$contador;
    }
}

# -------------------------------------------------------------------------

# CASO EXCEPCIONAL 0
function f_binhexa_excep0(){
    echo "O número 0 em binário é: 0";
}

# CASO EXCEPCIONAL 1
function f_binhexa_excep1(){
    echo "O número 1 em binário é: 1";
}

# CASO HEXADECIMAL
function f_binhexa($converter){
    $contador = 0;
    $retorno = $converter;
    $convertido = [];

    #LAÇO CONVERSOR HEXADECIMAL
    while ($converter >= 1){
        $result = $converter % 16;
        switch ($result){
            case $result < 10 and $result >= 1: array_push($convertido, $result); break;
            case '10': array_push($convertido, 'A'); break;
            case '11': array_push($convertido, 'B'); break;
            case '12': array_push($convertido, 'C'); break;
            case '13': array_push($convertido, 'D'); break;
            case '14': array_push($convertido, 'E'); break;
            case '15': array_push($convertido, 'F'); break;
        }
        $converter = intdiv($converter, 16);
    }

    #BLOCO EXIBIÇÃO
    $reverso = array_reverse($convertido);
    $tam = sizeof($reverso, 0);
    echo "O número: ".$retorno." em hexadecimal é: ";
    while($contador < $tam){
        echo $reverso[$contador];
        $contador = ++$contador;
    }
}
?>
