<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <script>
        function confirma(){
            if (!confirm("Confirma exclusão do resgistro?")){
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>
        TELA DE ATRIBUTOS
    </h1>
    <?php echo anchor('home','Voltar') ?>
    <h3>Cadastrar ATRIBUTOS</h3>
    <p>
        <?php echo anchor("atributo/create",'Novo Atributo') ?>
    </p>
    <h3>Atributos Cadastrados</h3>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php foreach($atributos as $atributo): ?>
            <tr>
                <td><?php echo $atributo['atributoId']  ?></td>
                <td><?php echo $atributo['nome']  ?></td>
                <td>
                    <?php echo anchor("atributo/edit/".$atributo['atributoId'],"E")?>
                    <?php echo anchor("atributo/remove/".$atributo['atributoId'],"R", 'onclick="return confirma()"')?>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>