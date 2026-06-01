<!-- Linha horizontal para separar seções da página -->
<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
// Consulta SQL para buscar os usuários cadastrados
    $sqlUsuarios = "SELECT * FROM users";

    $resultadoUsuarios = $conn -> query($sqlUsuarios);

// Percorre cada registro retornado pela consulta
    while($linha = $resultadoUsuarios->fetch_assoc()){
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        
        </tr>";
    }
    
    ?>

</table>