<h1>Usuários</h1>
<a href="?controller=usuario&action=create">Novo Usuário</a>
<table border="1">
    <tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>
    <?php foreach ($usuarios as $u): ?>
    <tr>
        <td><?= $u->id ?></td>
        <td><?= $u->nome ?></td>
        <td><?= $u->email ?></td>
        <td>
            <a href="?controller=usuario&action=edit&id=<?= $u->id ?>">Editar</a>
            <a href="?controller=usuario&action=delete&id=<?= $u->id ?>" onclick="return confirm('Confirmar?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
