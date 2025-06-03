<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaboom</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imagens/logo.png" alt="Kaboom">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre">Sobre a Kaboom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="kaboom.zip">Download</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>  
    
    <main>
        <?php
        echo $pagina = $_GET ['param'] ?? 'home';

        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include 'erro.php';
        }
        ?>
        
    </main>
    <footer>
        Kaboom todos os direitos reservados | desenvolvido por - Nicolas
    </footer>
    <script src ="js/bootstrap.bundle.min.js">
    </script>
</body>
</html>