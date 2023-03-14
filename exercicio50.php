<?php

$pessoas = ['matheus' => 27, 'joao' => 22, 'carlos' => 12];
?>

<table border = 2px>
    <tr>
    <th>Nome</th>
    <th>Idade</th>
    </tr>    
    <?php foreach($pessoas as $pessoa => $idade):?> 
    <tr>
        <td><?=$pessoa; ?></td>
        <td><?=$idade; ?></td>
    </tr>
    <?php endforeach; ?>




</table>
