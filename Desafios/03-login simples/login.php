<?php
session_start();

if (isset($_POST['btn'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];

    if (isset($_SESSION['usuario'],$_SESSION['senha']) && trim($_SESSION['usuario']) != "" && trim($_SESSION['senha']) != "") {
        if ($_SESSION['usuario'] == "admin" && $_SESSION['senha'] == 1234) {
            header("Location: painel.php");
        }else {
            echo"Usuário ou senha inválidos";
        }
    } else{
        echo "O Usuário e a Senha não podem estar vazios!"; 
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="" method="post" class="p-4 border rounded shadow bg-white" style="min-width: 350px;">
            
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="usuario" name="usuario">
            </div>
    
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Senha</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="senha" name="senha">
            </div>
    
            <button type="submit" name="btn" class="btn btn-primary w-100">Entrar</button>
    
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
