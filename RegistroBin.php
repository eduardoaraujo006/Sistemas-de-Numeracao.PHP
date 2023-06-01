<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="css/estilosys.css"/>
    <meta charset="UTF-8"/>
    <title>Sistema de Numeração</title>
</head>

<body>
<div>
    <?php
    include ("IncludeBin.php");
    if (isset($_POST["bnt"])){

        $converter = $_REQUEST['converter'];
        $sys = null;

        if (isset($_POST['sys'])){
            $sys = $_POST['sys'];

            switch ($sys){

                #LAÇO CHECKBOX
                case 'B':

                    #LAÇO BINÁRIO
                    switch ($converter) {
                        case '0': print_r (f_bindec_excep0()); break;
                        case '1': print_r (f_bindec_excep1()); break;
                        default:  print_r (f_bindec($converter));
                    }break;
                case 'O': 

                    #LAÇO OCTAL
                    echo 'teste octal'; break;

                    
                case 'H'; 
                    #LAÇO HEXADECIMAL
                    echo 'teste hexadecimal'; break;
            }
        }
    }
    ?>
    <p><a href="index.html" class="botao">Voltar ao registro</a></p>
</div>
</body>
</html>