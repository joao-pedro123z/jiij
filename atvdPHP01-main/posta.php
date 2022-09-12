<?php
extract($_POST);
if (!file_exists("Funcionarios/$id.txt")) {
    $files = fopen("Funcionarios/$id.txt",'w');
    fwrite($files, "ID: $id\nNome: $nome\nCargo: $cargo\n");
    fwrite($files, "Salário: $slr\n");
    fwrite($files, "Dependentes: $depend\n");
    fclose($files);  
} else {
    echo "<script>
            alert('este ID ja foi usado\ntente novamente');
          </script>";
}
$lista = scandir('Funcionarios');
array_shift($lista);
array_shift($lista);
foreach($lista as $links) {
    echo "<a href=\"LinkOpen.php?id=$links\">Arquivos: $links</a><br>";
}
?>
