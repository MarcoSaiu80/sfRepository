<?php slot('sidebar') ?>
<!-- codice per la barra laterale personalizzata per il template corrente -->
<h1>Dettagli dell'utente</h1>
<p>nome:  <?php echo "marco" ?></p>
<p>email: <?php echo "saiu80@gmail.com" ?></p>
<?php end_slot() ?>


<div id="sidebar">
    <?php if (has_slot('sidebar')): ?>
        <?php include_slot('sidebar') ?>
    <?php else: ?>
        <!-- codice predefinito della barra laterale -->
        <h1>Zona contestuale</h1>
        <p>Questa zona contiene link e informazioni
            relative al contenuto principale della pagina.</p>
    <?php endif; ?>
</div>