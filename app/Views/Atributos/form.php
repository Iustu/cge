<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de atributo</title>
</head>
<body>
    <h1>Novo Atributo</h1>
    <?php echo anchor("atributo","voltar") ?>
    <?php echo form_open('atributo/store') ?>
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo isset($atributo['nome'])? $atributo['nome']: '' ?>">
        </p>
        <p>
            <input type="submit" value="Salvar">
        </p>
        <input type="hidden" name="atributoId" value="<?php echo isset($atributo['atributoId'])? $atributo['atributoId']: '' ?>">
    </form>
</body>
</html>
