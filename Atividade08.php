<!DOCTYPE html>
    <body>
        <?php
        $idade = 17;
        if($idade <18) {
            echo 'você não pode entrar aqui!';
        } else {
            echo 'seja bem - vindo';
        }
        ?>

        <?php
        $idade = 21;
        $identidade = true;

        if($idade > 18 && $identidade == true) {
            echo 'seja bem-vindo';
        }
        ?>
    </body>
</html>    
