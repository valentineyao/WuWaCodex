<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $absoluteUrl ?>/css/reset.css" />
  <link rel="stylesheet" href="<?= $absoluteUrl ?>/css/styles.css" />
  <link rel="shortcut icon" href="<?= $absoluteUrl ?>/images/image.png" type="image/x-icon" />
  <title>WuWa Codex</title>
</head>

<body>
  <div id="container">
    <header>
      <nav id="header__nav">
        <a class="button" href="<?= $router->generate('main-home') ?>">Home</a>
        <a class=" button" href="#">Characters</a>
        <a class="button" href="#">Weapons</a>
      </nav>
    </header>