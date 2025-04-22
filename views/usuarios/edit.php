<h1>Editar Usuário</h1>
<form method="post" action="?controller=usuario&action=update">
    <input type="hidden" name="id" value="<?= $usuario->id ?>">
    <input type="text" name="nome" value="<?= $usuario->nome ?>" required><br>
    <input type="email" name="email" value="<?= $usuario->email ?>" required><br>
    <button type="submit">Atualizar</button>
</form>
