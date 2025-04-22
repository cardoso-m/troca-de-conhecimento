<h1>Trocas</h1>
<a href="/trocas/create">Nova Troca</a>
<ul>
    <?php foreach ($trocas as $t): ?>
        <li>Oferta de <?= $t->ofertante_id ?> para <?= $t->interessado_id ?> (Habilidade <?= $t->habilidade_id ?>) - Status: <?= $t->status ?></li>
    <?php endforeach; ?>
</ul>

// views/trocas/create.php
<h1>Nova Troca</h1>
<form method="POST">
    ID Ofertante: <input type="number" name="ofertante_id"><br>
    ID Interessado: <input type="number" name="interessado_id"><br>
    ID Habilidade: <input type="number" name="habilidade_id"><br>
    Status: <input type="text" name="status"><br>
    <button type="submit">Salvar</button>
</form>