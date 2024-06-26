<?php if (!empty($viewData['character'])) : ?>
  <main>
    <div>
      <section class="main__section">
        <div class="picture">
          <img src="<?= $absoluteUrl ?>/images/image.png" alt="WuWa logo" class="character__picture" />
        </div>
        <article>
          <section class="character__section">
            <div>
              <h2><?= $viewData['character']['name'] ?></h2>
              <div class="stars__section">
                <?php for ($i = 0; $i < $viewData['character']['rarity']; $i++) : ?>
                  <img src="<?= $absoluteUrl ?>/images/star.svg" alt="Star Icon" class="stars">
                <?php endfor ?>
                <?php if ($viewData['character']['rarity'] < 5) : ?>
                  <?php for ($i = $viewData['character']['rarity']; $i < 5; $i++) : ?>
                    <img src="<?= $absoluteUrl ?>/images/starLight.svg" alt="Star Light Icon" class="stars">
                  <?php endfor ?>
                <?php endif; ?>
              </div>
            </div>
            <p><span class="strong">Attribute:</span> <?= $viewData['character']['attribute'] ?></p>
            <p><span class="strong">Class:</span> <?= $viewData['character']['class'] ?></p>
            <p><span class="strong">Weapon:</span> <?= $viewData['character']['weapon'] ?></p>
            <p><span class="strong">Birthplace:</span> <?= $viewData['character']['birthplace'] ?></p>
            <p><span class="strong">Quote:</span> <span><?= $viewData['character']['quote'] ?></span></p>
          </section>
        </article>
      </section>
    </div>
  </main>
<?php endif; ?>