<?php
    include "../adm/topo.php";
?>
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="form-box p-5 shadow-lg rounded" style="max-width: 800px; width: 100%; background-color: #fff;">
        <h2 class="text-center text-danger mb-4">Cadastro de Usuários</h2>
        <form name="cadastro" method="post" action="cadastrar_usuarios.php" enctype="multipart/form-data">
            
            <!-- Campo de Login -->
            <div class="mb-4">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control border-danger" id="login" name="login" required placeholder="Digite o login">
            </div>

            <!-- Campo de Senha -->
            <div class="mb-4">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control border-danger" id="senha" name="senha" required placeholder="Digite a senha">
            </div>

            <!-- Campo de Nome -->
            <div class="mb-4">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control border-danger" id="nome" name="nome" required placeholder="Digite seu nome completo">
            </div>

            <!-- Campo de E-mail -->
            <div class="mb-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control border-danger" id="email" name="email" required placeholder="Digite seu e-mail">
            </div> 

            <!-- Botões -->
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-danger">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

<?php
    include "../adm/rodape.php";
?>
