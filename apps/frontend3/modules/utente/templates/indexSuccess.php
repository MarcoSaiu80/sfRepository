<h1>Utentis List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Cognome</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($utentis as $utenti): ?>
    <tr>
      <td><a href="<?php echo url_for('utente/show?id='.$utenti->getId()) ?>"><?php echo $utenti->getId() ?></a></td>
      <td><?php echo $utenti->getNome() ?></td>
      <td><?php echo $utenti->getCognome() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('utente/new') ?>">New</a>
