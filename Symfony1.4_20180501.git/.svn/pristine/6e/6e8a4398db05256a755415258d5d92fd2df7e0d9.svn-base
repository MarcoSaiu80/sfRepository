<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29/04/2018
 * Time: 16:37
 */
?>
<?php use_helper('Text'); ?>
<?php use_helper('Saiu'); ?>
<p>Buongiorno, mondo!</p>
<?php if ($hour >= 12): ?>
    <p>O dovrei dire buona sera? Sono già le <?php echo $hour ?>.</p>
<?php endif; ?>
<form method="post" action="<?php echo url_for('contenuto/update') ?>">
    <label for="name">Qual è il tuo nome de calloi?</label>
    <input type="text" name="nome" id="nome" value="" />
    <input type="submit" value="Ok" />
    <?php echo link_to('Non dirò mai il mio nome', 'contenuto/update?nome=anonymous') ?>

</form>

<p>chi è l'amore mio del cuore, ma chi vuoi che sia è <b>Alessandra Melis</b></p>
<?php echo auto_link_text("www.marcosaiu.it"); ?>
<?php echo saiu_tag(); ?>
