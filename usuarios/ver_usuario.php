<?php

include "../adm/conexao.php";
include "../adm/topo.php";

if (isset($_GET['id'])) {
    // Entrada
    $id = $_GET['id'];

    // Processamento
    $sql = "SELECT * FROM usuario WHERE login = '$id'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

    $nome = $exibe['nome'];
    $senha = $exibe['senha'];
    $email = $exibe['email'];
    $foto = $exibe['foto'];
    $nivel = $exibe['nivel'];
    $login = $exibe['login']; 
?>

<div class="container">
    <h1 class="mt-3 text-center text-danger"> Usuário: <?php echo $nome ?></h1>
    <hr>
    <p> <strong>Login:</strong> <?php echo $login ?> </p>
    <p> <strong>Senha:</strong> <?php echo $senha ?> </p>
    <p> <strong>Email:</strong> <?php echo $email ?> </p>
    <p> <strong>Nível:</strong> <?php echo $nivel ?> </p>
    <p> <strong>Foto:</strong> <?php if ($foto): ?> <img src="<?=$foto?>" alt="Foto do usuário" width="100"> <?php else: ?> Não há foto cadastrada. <?php endif; ?> </p>
        
        <hr>
        
        <div class="row">
            <div class="col text-start">
                <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-danger" onclick="location.href='editar_usuario.php?id=<?php echo $id ?>'">Editar</button>
            </div>
        </div>
</div>

<?php
} else { // Tratamento de erro e redirecionamento
    echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listar_usuarios.php'> aqui </a> para acessar a lista de usuários cadastrados. </p>
    ";
}

include "../adm/rodape.php";
?>
