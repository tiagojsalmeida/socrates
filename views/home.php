<?php $interval = $history->getTotalTimeInJail(); ?>
<a href="https://github.com/nsimaria/socrates"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <h1>
            Is portuguese ex-Prime Minister <a href="http://en.wikipedia.org/wiki/Jos%C3%A9_S%C3%B3crates" target="_blank">José Sócrates</a> in jail?
          </h1>
        </div>
      </div>

        <br />

      <h2 class="big-yes">
        <?php echo $history->isStillInJail() ? 'Yes! :)' : 'No. :('; ?>
      </h2>
        <br />
        <br />

      <section class="timer">
        <h3>Time spent in jail</h3>
          <div class="timer-item"><span class="timer-value"><?php echo $interval->format('%D') ?></span>  <span class="timer-label">days</span></div>
          <div class="timer-item"><span class="timer-value"><?php echo $interval->format('%H') ?></span>  <span class="timer-label">hours</span></div>
          <div class="timer-item"><span class="timer-value"><?php echo $interval->format('%I') ?></span>  <span class="timer-label">min</span></div>
          <div class="timer-item"><span class="timer-value"><?php echo $interval->format('%S') ?></span>  <span class="timer-label">sec</span></div>
      </section>




      <section class="history">
        <br />
        <br />
        <br />
        <br />
        <br />
        <h3>Timeline</h3>
<?php $items = $history->getItems(); ?>

<?php foreach ($items as $item): ?>

    <?php if (!empty($item->dateIn)): ?>

        <div><?php echo $item->dateIn ?> - <?php echo $item->textIn ?> (<a href="<?php echo $item->sourceIn ?>" target="_blank">source</a>)</div>

    <?php endif; ?>

    <?php if (!empty($item->dateOut)): ?>

        <div><?php echo $item->dateOut ?> - <?php echo $item->textOut ?> (<a href="<?php echo $item->sourceOut ?>" target="_blank">source</a>)</div>

    <?php endif; ?>

<?php endforeach; ?>



    <section>