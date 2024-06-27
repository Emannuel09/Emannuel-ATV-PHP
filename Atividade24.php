<!DOCTYPE html>
<html>
    <body>
        <?php
        $nome = 'Fulano';

        switch($nome) {
            case 'Fulano';
            echo 'E ai Fulano!';
            break;

            case 'Sicrano';
            echo 'E ai Sicrano!';
            break;

            case 'beltrano';
            echo ' E ai Beltrano!';

            default:
            echo 'Qual é o seu nome?';
            break;
            
        }

    // Resultado é: E ai fulano!
    ?>
    </body>
</html>