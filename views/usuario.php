<html>
<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
body {
    font-family: 'Josefin Sans', sans-serif;
}
#bttn_voltar {
    transition: 0.5s;
}
    
#bttn_voltar:hover {
    transform: scale(0.9);
}
</style>
</html>
<?php
if ($_REQUEST) {
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$name = $_REQUEST['name'];
$cpf = $_REQUEST['cpf'];
$datanasc = $_REQUEST['datanasc'];
$telefone = $_REQUEST['telefone'];

include_once "../classes/Usuario.class.php";
$usuario = new Usuario();

//Setters
$usuario->setEmail($email);
$usuario->setSenha($pass);
$usuario->setNome($name);
$usuario->setCpf($cpf);
$usuario->setDatanasc($datanasc);
$usuario->setTelefone($telefone);

//Inserção no Banco de dados
$resultSet  = $DBConn->query($usuario->saveUser());

if (!$resultSet) {
echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Não foi possível registrar o usuário, tente novamente.</div>
<button style='background-color: #3CB371;' id='bttn_voltar' onclick='voltarHome()' class='btn btn-primary'>Voltar</button>
</center>
";
}
else {
echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Usuário registrado com sucesso!</div>
<button style='background-color: #3CB371;' id='bttn_voltar' onclick='voltarHome()' class='btn btn-primary'>Voltar</button>
<center>
";

}
}
else {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div>
    <button style='background-color: #3CB371;' id='bttn_voltar' onclick='voltarHome()' class='btn btn-primary'>Voltar</button>
    <center>";
}
?>

<script>
    function voltarHome() {
        window.location = "../index.php";
    }
</script>