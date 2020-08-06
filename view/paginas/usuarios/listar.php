
<main>
    <?php
        if ($_SESSION['user']->admin==2){
            echo '<a href="'.HOME_URI.'usuario/criar" class="btn btn-primary">ADICIONAR USUÁRIO</a>';
        }
    ?>
<table class="table">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Função</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $conexao = Conexao::getInstance();
        $resultado = $conexao->query('SELECT * FROM usuario');
        while($usuarios = $resultado->fetch(PDO::FETCH_OBJ)){
            switch ($usuarios->admin){
                case 0:
                    $funcao = 'Aluno';
                    break;
                case 1:
                    $funcao = 'Professor';
                    break;
                case 2:
                    $funcao = 'Administrador';
                    break;
            }
            if ($usuarios->id_usuario == $_SESSION['user']->id_usuario||$_SESSION['user']->admin!=2){
                $botoes = '';
            }
            else{
               $botoes =
                   '
                   <a href="'.HOME_URI.'usuario/deletar/'.$usuarios->id_usuario.'" class="btn-danger">
                        <span class = "glyphicon glyphicon-trash">
                    </a>
                   ';
            }
            echo
            '
            <tr>
                <td>'.$usuarios->id_usuario.'</td>
                <td>'.$usuarios->nome.'</td>
                <td>'.$usuarios->email.'</td>
                <td>'.$funcao.'</td>
                <td>
                    '.$botoes.'
				</td>

            </tr>
            ';
        }
    ?>
    </tbody>
</table>
</main>