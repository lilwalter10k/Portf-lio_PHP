<?php 
// Dados dos projetos (Simulando um banco de dados)
$meusProjetos = [
    [
        "nome" => "Sistema de Gestão",
        "desc" => "Um painel administrativo completo em PHP.",
        "tags" => ["PHP", "MySQL", "Bootstrap"]
    ],
    [
        "nome" => "App de Finanças",
        "desc" => "Controle de gastos com gráficos dinâmicos.",
        "tags" => ["JavaScript", "PHP", "CSS"]
    ],
    [
        "nome" => "E-commerce de Plantas",
        "desc" => "Loja virtual com carrinho de compras.",
        "tags" => ["HTML", "Sass", "PHP"]
    ]
];

$nomeUsuario = "Seja Bem Vindo ao Meu Portfólio";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de <?php echo $nomeUsuario; ?></title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<header>
    <h1><?php echo $nomeUsuario; ?></h1>
    <p>Desenvolvedor Web Full Stack</p>
</header>

<main class="container">
    <section class="perfil">
        <div class="perfil-card">
            <img src="istockphoto-157608854-612x612.jpg" alt="Foto de perfil de <?php echo $nomeUsuario; ?>" class="perfil-foto">
            <div class="perfil-texto">
                <h2>Sobre mim</h2>
                <p>Olá, Como está! sou o Walter Damião, <?php echo $nomeUsuario; ?>, desenvolvedor web Full Stack. Aqui você encontra meus projetos, contatos e meu trabalho com PHP, JavaScript e design moderno.</p>
            </div>
        </div>
    </section>

    <h2>Meus Projetos</h2>
    <div class="grid-projetos">
        <?php foreach ($meusProjetos as $projeto): ?>
            <div class="card">
                <h3><?php echo $projeto['nome']; ?></h3>
                <p><?php echo $projeto['desc']; ?></p>
                <div class="tags">
                    <?php foreach ($projeto['tags'] as $tag): ?>
                        <span><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <hr>

    <section id="contato">
        <h2>Fale Comigo</h2>
        <form action="Contacto.php" method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <textarea name="mensagem" placeholder="Sua mensagem"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> - Criado por <?php echo("Dev_Walter Damião"); ?></p>
</footer>

</body>
</html>