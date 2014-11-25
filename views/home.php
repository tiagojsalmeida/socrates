<?php $interval = $history->getTotalTimeInJail(); ?>
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