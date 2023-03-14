<table border = 2px>
  <tr>
    <th>Posição</th>
    <th>Nome do Usuário</th>
    <th>Pontuação</th>
  </tr>
  <?php
    // matriz de exemplo contendo informações do ranking
    $ranking = array(
      array("João", 500),
      array("Maria", 750),
      array("Pedro", 250)
    );
    
    // ordena a matriz por pontuação, em ordem decrescente
    usort($ranking, function($a, $b) {
      return $b[1] - $a[1];
    });
    
    // exibe os usuários no ranking
    foreach($ranking as $posicao => $usuario) {
      echo "<tr>";
      echo "<td>" . ($posicao + 1) . "</td>";
      echo "<td>" . $usuario[0] . "</td>";
      echo "<td>" . $usuario[1] . "</td>";
      echo "</tr>";
    }
  ?>
</table>