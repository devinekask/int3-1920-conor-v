<p>Dit is een 2de test</p>

<ul>
  <?php foreach ($items as $item): ?>
    <li>
      <p><?php echo $item['name']?></p>
      <p><?php echo '$' . $item['prijs']?></p>
      <p>category:
        <?php if($item['cat'] == '2') {
          echo 'accesaris';
        } else {
          echo 'boek';
        } ?>
      </p>
    </li>
  <?php endforeach; ?>
</ul>
