<?php 
    require_once '../config.php';
    require_once '../process.php'; 
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome Fantasia</th>
                <th>Municipio</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($users) : ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['comercial_name']; ?></td>
                <td><?php echo $user['city']; ?></td>
                <td class="actions text-right">
                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                    <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $contact['contactId']; ?>">
                        <i class="fa fa-trash"></i> Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include(FOOTER_TEMPLATE); ?>
