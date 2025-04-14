<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de Conhecimento Automotivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <h2 class="mb-4">Cadastro de Habilidades Automotivas</h2>
        <form action="/troca-de-conhecimento/src/controller/habilidadeController.php" method="post">
            <div class="mb-3">
                <label for="area_conhecimento" class="form-label">Área de Conhecimento</label>
                <select name="area_conhecimento" class="form-select" required>
                    <option value="">Selecione uma área</option>
                    <option value="motor">Motor</option>
                    <option value="eletrica">Elétrica Automotiva</option>
                    <option value="suspensao">Suspensão</option>
                    <option value="freios">Sistema de Freios</option>
                    <option value="transmissao">Transmissão</option>
                    <option value="diagnostico">Diagnóstico Eletrônico</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="especialidade" class="form-label">Especialidade</label>
                <input name="especialidade" class="form-control" type="text" placeholder="Ex: Injeção eletrônica, Turbo, ABS" required>
            </div>

            <div class="mb-3">
                <label for="nivel_experiencia" class="form-label">Nível de Experiência</label>
                <select name="nivel_experiencia" class="form-select" required>
                    <option value="">Selecione um nível</option>
                    <option value="iniciante">Iniciante</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="avancado">Avançado</option>
                    <option value="profissional">Profissional</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control" rows="3" placeholder="Descreva sua habilidade em detalhes"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo de Registro</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo_registro" id="ofertar" value="ofertar" checked>
                    <label class="form-check-label" for="ofertar">
                        Quero ofertar este conhecimento
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo_registro" id="aprender" value="aprender">
                    <label class="form-check-label" for="aprender">
                        Quero aprender sobre este tópico
                    </label>
                </div>
            </div>

            <div class="text-end mb-3">
                <a href="../controller/logoutController.php" class="btn btn-outline-danger">Sair</a>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>