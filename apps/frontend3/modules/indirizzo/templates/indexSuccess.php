<h1>Indirizzos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Via</th>
      <th>Indirizzo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($indirizzos as $indirizzo): ?>
    <tr>
      <td><a href="<?php echo url_for('indirizzo/show?id='.$indirizzo->getId()) ?>"><?php echo $indirizzo->getId() ?></a></td>
      <td><?php echo $indirizzo->getVia() ?></td>
      <td><?php echo $indirizzo->getIndirizzoId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('indirizzo/new') ?>">New</a>
