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
    <h1>Nova Pessoa</h1>
    <?php echo anchor("pessoa","voltar") ?>
    <?php echo form_open('pessoa/store') ?>
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo isset($pessoa['nome'])? $pessoa['nome']: '' ?>">
        </p>
        <p>
            <input type="submit" value="Salvar">
        </p>
        <input type="hidden" name="pessoaId" value="<?php echo isset($pessoa['pessoaId'])? $pessoa['pessoaId']: '' ?>">
    </form>
</body>
</html>
