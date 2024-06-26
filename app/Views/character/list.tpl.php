<main>
  <?php if (!empty($viewData['characters'])) : ?>
    <ul class="character__list">
      <?php foreach ($viewData['characters'] as $character) : ?>
        <a href="<?= $router->generate('character-read', ['name' => strtolower($character)]) ?>">
          <li class="character__list-item">
            <img src="<?= $absoluteUrl ?>/images/image.png" alt="WuWa logo" />
            <?= htmlspecialchars($character); ?>
          </li>
        </a>
      <?php endforeach; ?>
    </ul>
  <?php else : ?>
    <p>No characters found.</p>
  <?php endif; ?>
</main>