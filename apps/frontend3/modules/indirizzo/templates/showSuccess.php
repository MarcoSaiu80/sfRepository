<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $indirizzo->getId() ?></td>
    </tr>
    <tr>
      <th>Via:</th>
      <td><?php echo $indirizzo->getVia() ?></td>
    </tr>
    <tr>
      <th>Indirizzo:</th>
      <td><?php echo $indirizzo->getIndirizzoId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('indirizzo/edit?id='.$indirizzo->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('indirizzo/index') ?>">List</a>
