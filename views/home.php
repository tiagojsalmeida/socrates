<h2>Is portuguese ex-Prime Minister <a href="http://en.wikipedia.org/wiki/Jos%C3%A9_S%C3%B3crates" target="_blank">José Sócrates</a> in jail?</h2>
<h1>
    <?php echo $history->isStillInJail() ? 'Yes!' : 'Unfortunately not.'; ?>
</h1>

<h3>Total time spent in jail</h3>

<p>
    <?php echo $history->getTotalTimeInJail(); ?>
</p>

<?php $items = $history->getItems(); ?>

<?php foreach ($items as $item): ?>

<?php if (!empty($item->dateIn)): ?>

        <div><?php echo $item->dateIn ?> - <?php echo $item->textIn ?> (<a href="<?php echo $item->sourceIn ?>" target="_blank">source</a>)</div>

    <?php endif; ?>

    <?php if (!empty($item->dateOut)): ?>

        <div><?php echo $item->dateOut ?> - <?php echo $item->textOut ?> (<a href="<?php echo $item->sourceOut ?>" target="_blank">source</a>)</div>

    <?php endif; ?>

<?php endforeach; ?>



