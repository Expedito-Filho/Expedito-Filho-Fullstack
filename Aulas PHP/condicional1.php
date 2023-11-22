<?php
//Juvêncio decidiu que dependendo do clima do dia seguinte ele decidiria o que fazer.
//Se o clima estiver ensolarado, então ele vai parra a praia.
//Se o clima estiver chuvoso, então ele vai para a casa da mãe dele.

//$clima = "ensolarado";
$clima = "chuvoso";

if ($clima == "chuvoso") {
    echo "Juvêncio irá para a casa da mãe.";
} else if ($clima == "ensolarado") {
    echo "Juvêncio irá para a praia.";
} else {
    echo "Juvêncio irá para a casa da mãe.";
}

?>
