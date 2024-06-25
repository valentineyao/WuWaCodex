<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/WuWaCodex/css/reset.css" />
  <link rel="stylesheet" href="/WuWaCodex/css/styles.css" />
  <link rel="shortcut icon" href="/WuWaCodex/pictures/image.png" type="image/x-icon" />
  <title>WuWa Codex</title>
</head>

<body>
  <div id="container">
    <header>
      <nav id="header__nav">
        <a class="button" href="#">Home</a>
        <a class="button" href="#">Characters</a>
        <a class="button" href="#">Weapons</a>
      </nav>
    </header>

    <main>
      <section class="main__section">
        <div class="picture">
          <img src="/WuWaCodex/pictures/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="character__section">
            <div>
              <h2>Jiyan</h2>
              <div class="stars__section">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                  <img src="/WuWaCodex/pictures/star.svg" alt="Star Icon" class="stars">
                <?php endfor ?>
              </div>
            </div>
            <p><span class="strong">Attribute:</span> Aero</p>
            <p><span class="strong">Class:</span> Mutant</p>
            <p><span class="strong">Weapon:</span> Broadblade</p>
            <p><span class="strong">Birthplace:</span> Huanglong</p>
            <p><span class="strong">Quote:</span> <span>I have never regretted to brave the long night.</span></p>
          </section>
        </article>
      </section>

      <section class="main__section">
        <div class="picture">
          <img src="/WuWaCodex/pictures/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="character__section">
            <div>
              <h2>Verina</h2>
              <div class="stars__section">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                  <img src="/WuWaCodex/pictures/star.svg" alt="Star Icon" class="stars">
                <?php endfor ?>
              </div>
            </div>
            <p><span class="strong">Attribute:</span> Spectro</p>
            <p><span class="strong">Class:</span> Congenital</p>
            <p><span class="strong">Weapon:</span> Rectifier</p>
            <p><span class="strong">Birthplace:</span> New Federation</p>
            <p><span class="strong">Quote:</span> <span>Plants talk in a silent and sincere language. I can translate their talk for you, if you want.</span></p>
          </section>
        </article>
      </section>

      <section class="main__section">
        <div class="picture">
          <img src="/WuWaCodex/pictures/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="character__section">
            <div>
              <h2>Yinlin</h2>
              <div class="stars__section">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                  <img src="/WuWaCodex/pictures/star.svg" alt="Star Icon" class="stars">
                <?php endfor ?>
              </div>
            </div>
            <p><span class="strong">Attribute:</span> Electro</p>
            <p><span class="strong">Class:</span> Congenital</p>
            <p><span class="strong">Weapon:</span> Rectifier</p>
            <p><span class="strong">Birthplace:</span> Huanglong</p>
            <p><span class="strong">Quote:</span> <span>Name's Yinlin. As for what I do... Shhh, we don't talk about that in public.</span></p>
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