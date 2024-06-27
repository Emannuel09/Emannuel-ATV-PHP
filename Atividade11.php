<!DOCYPE html>
    <html>
        <body>
            <?php
                $temp = array('outubro' => 27, 'Novembro'=> 28, 'Dezembro'=> 19);
                foreach($temp as $$chave => $valor) {
                    echo "A temperatura mèdia de $chavefoi de $valor graus<br />";
                }
            ?>
        </body> 
    </html>        