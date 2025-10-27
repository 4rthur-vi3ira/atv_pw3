<!-- Salvar cadastro de alunos no BD - Outubro/2025 -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css_js/bootstrap/css/bootstrap.min.css">
    <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css_js/css/estilo_form_cad_aluno_bd.css">

    <title>Salvamento dos dados do cadastro</title>
</head>

<body>

    <?php

include("../conexao_bd_mysql/conexao_bd_mysql.php");

//Recebendo dados digitados da página index.php (Via POST)
$nome_dg = $_POST['txt_nome'];
$data_nascimento_dg = $_POST['txt_data_nascimento'];
$cpf_dg = $_POST['txt_cpf'];
$endereco_dg = $_POST['txt_endereco'];
$numero_dg = $_POST['txt_numero'];
$cep_dg = $_POST['txt_cep'];
$cidade_dg = $_POST['txt_cidade'];
$uf_dg = $_POST['txt_uf'];
$complemento_dg = $_POST['txt_complemento'];
$telefone_dg = $_POST['txt_telefone'];
$celular_dg = $_POST['txt_celular'];
$email_dg = $_POST['txt_email'];

// Script em SQL para inserir os dados na tabela
$script_sql_cadastrar_cliente = 
"insert into tb_usuario (usu_nome, usu_data_nascimento, usu_cpf, usu_logradouro, usu_numero, usu_cep, usu_cidade, usu_uf, usu_complemento, usu_telefone, usu_celular, usu_email)
values 
('$nome_dg','$data_nascimento_dg', '$cpf_dg', '$endereco_dg', '$numero_dg', 
'$cep_dg', '$cidade_dg', '$uf_dg', '$complemento_dg', '$telefone_img',
'$celular_dg', '$email_dg'); ";

// Executa o cadastro no BD
 if(mysqli_query($conexao_servidor_bd, $script_sql_cadastrar_cliente))
    {   
        echo "<h1 class='alert alert-secondary' role='alert'
        style='text-align: center; padding: 50px;'>
        Cadastro de cliente realizado com sucesso..</h1>"; 

    // A página fica parada por 3 segundos depois volta para o cadastro de alunos
    echo "<meta http-equiv='refresh' content='3;url=index.php'>";                
    } 
    else
    {
        echo"<div class='alert alert-danger' role='alert'
        style='text-align: center; padding: 50px; color:#fff;'>
		<h1 align='center'>Falha no cadastro do cliente</h1><hr><p>";

        $erro = mysqli_error($conexao_servidor_bd);
        
        echo "<b>Descrição do erro:
        </b> Houve um erro na gravação de dados na tabela com a seguinte descrição: $erro </div>" ;

        // A página fica parada por 10 segundos depois volta para o cadastro de alunos
        echo "<meta http-equiv='refresh' content='10;url=index.php'>";
    }  

?>

</body>

</html>