<table border = 2px>
<tr>
    <th>Posição</th>
    <th>Nome</th>
    <th>Pontuação</th>

<?php

$pontos = ['Matheus' => 210, 'João' => 120, 'Felipe' => 88, 'Marcos' => 190];
arsort($pontos);
$posição = 1;
foreach($pontos as $nome => $pontuação){
    echo "<tr>";
    echo "<td> $posição </td>";
    echo "<td> $nome </td>";
    echo "<td> $pontuação </td>";
    echo "</tr>";
    $posição ++;
}
?>

</table>