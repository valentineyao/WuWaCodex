<?php d($viewData['characters']) ?>
<?php if (!empty($viewData['characters'])) : ?>
  <main>
    <ul class="list">
      <?php foreach ($viewData['characters'] as $character) : ?>
        <a href="<?= $router->generate('character-read', ['name' => strtolower($character)]) ?>">
          <li class="list-item">
            <img src="<?= $absoluteUrl ?>/images/image.png" alt="WuWa logo" />
            <?= htmlspecialchars($character); ?>
          </li>
        </a>
      <?php endforeach; ?>
    </ul>
  </main>
<?php endif; ?>