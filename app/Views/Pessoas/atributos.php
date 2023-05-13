<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo 'Atributos de Pessoa'; ?></title>
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
    <?php echo ("Atributos de ".$nome) ?>
</h1>
<?php echo anchor('pessoa','Voltar') ?>
<h3>Atribuir atributos</h3>
<p>
    <?php echo anchor("relacao/create/".$id,'Relacionar') ?>
</p>
<h3>Atributos encontrados</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php foreach($dados as $dado): ?>
        <tr>
            <td><?php echo $dado[1]  ?></td>
            <td><?php echo $dado[2]  ?></td>
            <td>
                <?php echo anchor("relacao/remove2/".$dado[0]."/".$id,"Remover", 'onclick="return confirma()"')?>
            </td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>