<?php if (!empty($viewData['weapons'])) : ?>
  <main>
    <ul class="list list-weapon">
      <?php foreach ($viewData['weapons'] as $weapon) : ?>
        <li class="list-item">
          <?= htmlspecialchars($weapon); ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>
<?php endif; ?>