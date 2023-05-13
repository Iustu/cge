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
        TELA DE PESSOAS
    </h1>
    <?php echo anchor('home','Voltar') ?>
    <h3>Cadastrar Pessoas</h3>
    <p>
        <?php echo anchor("pessoa/create",'Novo usuário') ?>
    </p>
    <h3>Pessoas Cadastradas</h3>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php foreach($pessoas as $pessoa): ?>
            <tr>
                <td><?php echo $pessoa['pessoaId']  ?></td>
                <td><?php echo $pessoa['nome']  ?></td>
                <td>
                    <?php echo anchor("pessoa/edit/".$pessoa['pessoaId'],"E")?>
                    <?php echo anchor("pessoa/remove/".$pessoa['pessoaId'],"R", 'onclick="return confirma()"')?>
                    <?php echo anchor("pessoa/atributos/".$pessoa['pessoaId'],"A")?>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>