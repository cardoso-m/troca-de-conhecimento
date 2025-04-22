<h1>Habilidades</h1>
<a href="/habilidades/create">Nova Habilidade</a>
<ul>
    <?php foreach ($habilidades as $h): ?>
        <li><?= $h->descricao ?> (Usuário: <?= $h->usuario_id ?>)</li>
    <?php endforeach; ?>
</ul>

// views/habilidades/create.php
<h1>Nova Habilidade</h1>
<form method="POST">
    ID do Usuário: <input type="number" name="usuario_id"><br>
    Descrição: <input type="text" name="descricao"><br>
    <button type="submit">Salvar</button>
</form>