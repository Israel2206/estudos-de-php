<?php   
//conexão
include_once 'php_action/db_connect.php'; 
//footer
include_once 'includes/footer.php';
//Select
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados =  mysqli_fetch_array($resultado);
}
?>

<?php
//header
include_once 'includes/header.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Clinte</h3>    
        <form action="php_action/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" id="nome" >
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" value="<?php echo $dados['sobrenome']; ?>" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="email" value="<?php echo $dados['email']; ?>" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" value="<?php echo $dados['idade']; ?>" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>    
    
<?php    
//footer
include_once 'includes/footer.php';
?>