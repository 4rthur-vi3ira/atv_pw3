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
        <nav style="margin: 0px; padding: 5px; position: relative; top:-60px;">
            <a href="pg_principal.php" class="btn btn-outline-secondary" title="Voltar">
                <img src="../img/icones_sra/voltar.png" style="width: 40px; height: 40px;">
            </a>
        </nav>
    </header>


    <div id="div_form" style="position: relative; top:-50px; background-color: rgb(236, 143, 112);">

        <fieldset style="width: 685px;height: 680px; background-color: rgb(236, 143, 112);">

            <form method="POST" action="salvar_cadastro_aluno_bd.php"
                style="width: 660px; padding: 20px; background-color: rgb(236, 143, 112);"
                enctype="multipart/form-data">
                <h3 style="margin: 0px; text-align: center; padding: 6px; top: 10px;">CADASTRO DE CLIENTE
                </h3>
                <div class="dados" style="background-color: rgb(235, 168, 146)">
                    <h5>DADOS</h5>
                    <div class="col-12">
                        <label class="form-label">NOME COMPLETO</label> <br>
                        <input type="text" name="txt_nome" placeholder="Nome completo" autofocus="" required size="80px"
                            class="form-control"> <br>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label class="form-label">DATA DE NASCIMENTO</label> <br>
                            <input type="date" name="txt_data_nascimento" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">CPF</label> <br>
                            <input type="text" name="txt_cpf" placeholder="00000-000" class="form-control"> <br>
                        </div>
                    </div>
                </div>

                <div class="endereco" style="background-color: rgb(235, 168, 146)">
                    <h5>ENDEREÇO</h5>
                    <div class="row g-3">
                        <div class="col">
                            <label class="form-label">LOGRADOURO</label> <br>
                            <input type="text" name="txt_endereco" placeholder="Rua / Av: Tal, 000" size="80px"
                                style="width: 364px;" class="form-control"> <br>
                        </div>
                        <div class="col">
                            <label class="form-label">NUMERO</label> <br>
                            <input type="number" name="txt_numero" style="width: 240px;" class="form-control"> <br>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label class="form-label">CEP</label> <br>
                            <input type="text" name="txt_cep" placeholder="0000" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">CIDADE</label> <br>
                            <input type="text" name="txt_cidade" placeholder="" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">UF</label> <br>
                            <input type="text" name="txt_uf" placeholder="0000" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">COMPLEMENTO</label> <br>
                            <input type="text" name="txt_complemento" placeholder="0000" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="contato" style="background-color: rgb(235, 168, 146)">
                    <h5>CONTATO</h5>
                    <div class="row g-3">
                        <div class="col1" style="width: 159px;">
                            <label class="form-label">Telefone</label> <br>
                            <input type="text" name="txt_telefone" placeholder="(00) 0000-0000" style="width: 140px;"
                                class="form-control">
                        </div>
                        <div class="col1" style="width: 159px;">
                            <label class="form-label">Celular</label> <br>
                            <input type="text" name="txt_celular" placeholder="(00) 00000-0000" style="width: 140px;"
                                class="form-control"> <br>
                        </div>
                        <div class="col">
                            <label class="form-label">E-mail</label> <br>
                            <input type="text" name="txt_email" placeholder="emailteste@gmail.com" size="80px"
                                style="width: 300spx;" class="form-control"> <br>
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
    <div class="button" style="display: flex; justify-content: center;">
        <button type="submit" style="width: 300px; margin-right: 10px;" class="btn btn-success">SALVAR CADASTRO</button>
        <button type="reset" style="width: 300px; margin-right: 10px;" class="btn btn-light">LIMPAR CAMPOS</button>
    </div>
</body>

</html>