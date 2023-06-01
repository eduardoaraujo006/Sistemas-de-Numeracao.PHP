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

# CASO OCTAL
function f_binoct($converter){

}

# CASO HEXADECIMAL
function f_binhexa($converter){
    
}
?>