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

                #LAÇO CHECKBOX B
                case 'B':

                    #LAÇO BINÁRIO
                    switch ($converter) {
                        case '0': print_r (f_bindec_excep0()); break;
                        case '1': print_r (f_bindec_excep1()); break;
                        default:  print_r (f_bindec($converter));
                    }break;

                #LAÇO CHECKBOX O
                case 'O': 

                    #LAÇO OCTAL
                    switch ($converter) {
                        case '0': print_r (f_binoct_excep0()); break;
                        case '1': print_r (f_binoct_excep1()); break;
                        default:  print_r (f_binoct($converter));
                    }break;
                    
                #LAÇO CHECKBOX H
                case 'H'; 
                    #LAÇO HEXADECIMAL
                    switch ($converter) {
                        case '0': print_r (f_binhexa_excep0()); break;
                        case '1': print_r (f_binhexa_excep1()); break;
                        default:  print_r (f_binhexa($converter));
                    }break;
            }
        }
    }
    ?>
    <p><a href="index.html" class="botao">Voltar ao registro</a></p>
</div>
</body>
</html>
