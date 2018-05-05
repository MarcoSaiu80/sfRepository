<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01/05/2018
 * Time: 14:11
 */

//abbiamo articoli
?>
<table>
<?php foreach ($articoli as $articolo): ?>
    <tr>
        <td><?php echo $articolo->getId()?></td>
        <td><?php echo $articolo->getContent()?></td>
        <td><?php echo $articolo->__toString()?></td>
    </tr>
<?php endforeach; ?>
</table>