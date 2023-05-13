<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de pessoas</title>
</head>
<body>
    <h1>Nova relacao</h1>
    <?php echo anchor("relacao","voltar") ?>
    <?php echo form_open('relacao/store') ?>
        <p>
            <label for="pessoaId">Id de pessoa</label>
            <input type="text" name="pessoaId" id="pessoaId">
        </p>
        <p>
            <label for="atributoId">Id de atributo</label>
            <input type="text" name="atributoId" id="atributoId">
        </p>
        <p>
            <input type="submit" value="Salvar">
        </p>
    </form>
</body>
</html>
