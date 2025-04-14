<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
      <h2 class="text-center mb-4">Sign-in</h2>
      
      <?php if (isset($_GET['erro'])): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['erro']); ?></div>
      <?php endif; ?>
      
      <form action="../controller/loginController.php" method="post">
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <div class="mt-3 text-center">
          <p>Não possui uma conta?</p><a href="/troca-de-conhecimento/src/public/signup.php">Cadastre-se</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>