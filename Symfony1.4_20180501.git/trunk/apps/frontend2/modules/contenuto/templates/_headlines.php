<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01/05/2018
 * Time: 09:21
 */
?>
<div>
  <h1>Latest news</h1>
  <ul>
  <?php foreach($news as $headline): ?>
    <li>
        <?php echo $headline->getPublishedAt() ?>
        <?php echo link_to($headline->getTitle(),'news/show?id='.$headline->getId()) ?>
    </li>
<?php endforeach ?>
</ul>
</div>