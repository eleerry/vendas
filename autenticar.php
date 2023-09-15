<?php
@session_start();
require_once("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

// realizar a consulta no banco, para saber se tem usuário adm;
$query = $pdo->prepare(" SELECT * FROM usuarios WHERE (email = :usuario OR cpf = :usuario) AND senha_crip = :senha ");
$query->bindValue(":usuario", $usuario);
$query->bindValue(":senha", $senha_crip);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if($res[0]['ativo'] != 'sim'){
    echo "<script>alert('Usuário inativo, contate o administrador!')</script>";
    echo "<script>window.location='/'</script>";
    exit();
}

if($total_reg > 0){
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['nivel'] = $res[0]['nivel'];
    $_SESSION['empresa'] = $res[0]['empresa'];

    $id = $res[0]['id'];

    // armazenar no storage o id
    echo "<script>localStorage.setItem('id', '$id')</script>";

    if($_SESSION['nivel'] == 'SAS'){
        echo "<script>window.location='sas'</script>";
    }else{
        echo "<script>window.location='sistema'</script>";
    }

}else{
    echo "<script>alert('Usuário ou senha incorretos!')</script>";
    echo "<script>window.location='/'</script>";
    exit();
}

?>
