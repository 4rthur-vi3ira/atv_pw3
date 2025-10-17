<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="css_js/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css_js/css/estilo_form_cadastro_aluno.css">

    <title>Cadastro do aluno</title>
</head>

<body>
    <header>
        <h1 class="alert alert-secondary" role="alert"
            style="margin: 0px; text-align: center; padding: 13px; top: 10px;">Cadastro de alunos
        </h1>

        <nav style="margin: 0px; padding: 5px; position: relative; top:-60px;">
            <a href="pg_principal.php" class="btn btn-outline-secondary" title="Voltar">
                <img src="../img/icones_sra/voltar.png" style="width: 40px; height: 40px;">
            </a>
        </nav>
    </header>


    <div id="div_form" style="position: relative; top:-50px;">

        <fieldset style="width: 650px;height: 580px;">

            <form method="POST" action="salvar_cadastro_aluno_bd.php" style="width: 650px; padding: 20px;"
				enctype="multipart/form-data">
				<div class="dados">
					<h5>DADOS</h5>
                    <div class="col-md-6">
						<label class="form-label">NOME COMPLETO</label> <br>
					<input type="text" name="txt_nome" placeholder="Nome completo" autofocus="" required size="80px" class="form-control"> <br>
                    </div>
                    <div>
						<label class="form-label">DATA DE NASCIMENTO</label> <br>
					<input type="date" name="txt_data_nascimento" class="form-control">
                    </div>
                    <div>
						<label class="form-label">CPF</label> <br>
					<input type="text" name="txt_cpf" placeholder="00000-000" class="form-control"> <br>
                    </div>
				</div>

				<div class="endereco">
					<h5>ENDEREÇO</h5>
                    <div class="col-md-6">
						<label class="form-label">LOGRADOURO</label> <br>
					<input type="text" name="txt_endereco" placeholder="Rua / Av: Tal, 000" size="80px" class="form-control"> <br>
                    </div>
                    <div>
						<label class="form-label">CIDADE</label> <br>
					<input type="text" name="txt_cidade" placeholder="0000" class="form-control">
                    </div>
                    <div>
						<label class="form-label">CEP</label> <br>
					<input type="text" name="txt_cep" placeholder="0000" class="form-control">
                    </div>
                    <div class="col-md-4">
						<label class="form-label">UF</label> <br>
					<input type="text" name="txt_uf" placeholder="0000" class="form-control">
                    </div>
                    <div>
						<label class="form-label">COMPLEMENTO</label> <br>
					<input type="text" name="txt_complemento" placeholder="0000" class="form-control">
                    </div>
                    <div>
						<label class="form-label">NUMERO</label> <br>
					<input type="number" name="txt_numero" class="form-control"> <br>
                    </div>
				</div>

					<h5>CONTATO</h5>
                    <div>
						<label class="form-label">Telefone</label> <br>
					<input type="text" name="txt_telefone" placeholder="Telefone Ex:(00) 0000-0000" class="form-control">
                    </div>
                    <div>
						<label class="form-label">Celular</label> <br>
					<input type="text" name="txt_celular" placeholder="Celular Ex:(00) 00000-0000" class="form-control"> <br>
                    </div>
                    <div>
						<label class="form-label">E-mail</label> <br>
					<input type="text" name="txt_email" placeholder="emailteste@gmail.com" size="80px" class="form-control"> <br>
                    </div>
				</div>
			</form>
		</fieldset>
	</div>
</body>

</html>