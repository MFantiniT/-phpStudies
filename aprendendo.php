<table border = 2px;  >

    <tr>
        <th>Posição</th>
        <th>Nome</th>
        <th>Pontuação</th>
    </tr>
    <?php
        $classificacao = ['Matheus F.'=> 127, 'João S.' => 97, 'Julia K.' => 89, 'Fernando P.' => 87, 'Amanda R.'=> 101, 'Renanta A.' => 84, 'Priscila F.' => 103];
        $posicao = 1;
        arsort($classificacao);
        foreach($classificacao as $nome => $pontuacao){
            echo "<tr>";
            echo "<td> $posicao </td>";
            echo "<td> $nome </td>";
            echo "<td> $pontuacao </td>";
            echo "<tr>";
            $posicao ++;
        }


    ?>






</table>