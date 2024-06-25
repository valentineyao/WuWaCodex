<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" href="/WuWaCodex/pictures/image.png" type="image/x-icon" />
  <title>WuWa Codex</title>
</head>

<body>
  <div id="container">
    <header>
      <nav id="header__nav">
        <a class="button" href="#">Home</a>
        <a class="button" href="#">Characters</a>
        <a class="button" href="#">Attributes</a>
        <a class="button" href="#">Weapons</a>
        <a class="button" href="#">Echoes</a>
      </nav>
    </header>

    <main>
      <section class="main__section">
        <div class="picture">
          <img src="/WuWaCodex/pictures/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="stars__section">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <img src="/WuWaCodex/pictures/star.svg" alt="Star Icon" class="stars">
            <?php endfor ?>
          </section>
          <section class="character__section">
            <h2>Jiyan</h2>
            <p>Attribute: Aero</p>
            <p>Class: Mutant</p>
            <p>Weapon: Broadblade</p>
            <p>Birthplace: Huanglong</p>
            <p>Quote: I have never regretted to brave the long night.</p>
          </section>
        </article>
      </section>

      <section class="main__section">
        <div class="picture">
          <img src="/WuWaCodex/pictures/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="stars__section">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <img src="/WuWaCodex/pictures/star.svg" alt="Star Icon" class="stars">
            <?php endfor ?>
          </section>
          <section class="character__section">
            <h2>Verina</h2>
            <p>Attribute: Spectro</p>
            <p>Class: Congenital</p>
            <p>Weapon: Rectifier</p>
            <p>Birthplace: New Federation</p>
            <p>Quote: Plants talk in a silent and sincere language. I can translate their talk for you, if you want.</p>
          </section>
        </article>
      </section>

      <section class="main__section">
        <div class="picture">
          <img src="/WuWaCodex/pictures/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="stars__section">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <img src="/WuWaCodex/pictures/star.svg" alt="Star Icon" class="stars">
            <?php endfor ?>
          </section>
          <section class="character__section">
            <h2>Yinlin</h2>
            <p>Attribute: Electro</p>
            <p>Class: Congenital</p>
            <p>Weapon: Rectifier</p>
            <p>Birthplace: Huanglong</p>
            <p>Quote: Name's Yinlin. As for what I do... Shhh, we don't talk about that in public.</p>
          </section>
        </article>
      </section>
    </main>

    <footer>
      <p>&copy; Copyright 2024 - Valentine YAO</p>
      <nav>
        <a href="#">Legal Notice</a>
        <a href="#">Terms and conditions</a>
        <a href="#">Contact</a>
      </nav>
    </footer>
  </div>
</body>

</html>