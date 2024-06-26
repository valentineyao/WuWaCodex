<?php if (!empty($viewData['weapons'])) : ?>
  <main>
    <ul class="list">
      <?php foreach ($viewData['weapons'] as $weapon) : ?>
        <a href="<?= $router->generate('weapon-read', ['name' => strtolower($weapon)]) ?>">
          <li class="list-item">
            <img src="<?= $absoluteUrl ?>/images/image.png" alt="WuWa logo" />
            <?= htmlspecialchars($weapon); ?>
          </li>
        </a>
      <?php endforeach; ?>
    </ul>
  </main>
<?php endif; ?>