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
        <?php echo $body?>
    </h1>
    <?php echo anchor('home','Voltar') ?>

    <h3>Cadastrar relacao</h3>
    <?php echo anchor("relacao/create","Criar nova relacao") ?>

    <h3>Relações cadastradas</h3>
    <table>
        <tr>
            <th>Id</th>
            <th>Pessoa</th>
            <th>Atributo</th>
            <th>ação</th>
        </tr>
        <?php foreach($dados as $dado): ?>
            <tr>
                <td><?php echo $dado[0]  ?></td>
                <td><?php echo $dado[1]  ?></td>
                <td><?php echo $dado[2]  ?></td>
                <td>
                    <?php echo anchor("relacao/remove/".$dado[0],"Remover", 'onclick="return confirma()"')?>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>