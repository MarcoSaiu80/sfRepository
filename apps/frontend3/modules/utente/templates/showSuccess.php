<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $utenti->getId() ?></td>
    </tr>
    <tr>
      <th>Nome:</th>
      <td><?php echo $utenti->getNome() ?></td>
    </tr>
    <tr>
      <th>Cognome:</th>
      <td><?php echo $utenti->getCognome() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('utente/edit?id='.$utenti->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('utente/index') ?>">List</a>
