<?php 
    require_once '../config.php';
    require_once '../process.php'; 
?>

<?php include(HEADER_TEMPLATE); ?>

<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'royal-test') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT p.id, p.name, p.cnpj, p.cpf, p.comercial_name, p.city, p.rg, p.birthday, c.contactName, c.phones FROM people p LEFT JOIN contacts c on c.peopleId = p.id") or die($mysqli->error);
?>

<div class="container mt-3">
    <form class="form-inline my-2 my-lg-0 mb-3" role="search">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table mt-3" style="font-size: 12px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>CPF</th>
                <th>Nome Fantasia</th>
                <th>Municipio</th>
                <th>RG</th>
                <th>Aniversário</th>
                <th>Contato</th>
                <th>Fone</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <?php while($row = $result->fetch_assoc()): ?>
    
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['cnpj']; ?></td>
                <td><?php echo $row['cpf']; ?></td>
                <td><?php echo $row['comercial_name']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['rg']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['contactName']; ?></td>
                <td><?php echo $row['phones']; ?></td>
                <td>
                    <a href="list.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Editar</a>
                    <a href="<?php echo BASEURL; ?>process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php include(FOOTER_TEMPLATE); ?>