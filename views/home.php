<?php $interval = $history->getTotalTimeInJail(); ?>
        <a href="https://github.com/nsimaria/socrates"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/121cd7cbdc3e4855075ea8b558508b91ac463ac2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png"></a>        <br />
        <br />
        <br />
        <br />
        <br />
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <h1>
            Is portuguese ex-Prime Minister <a href="http://en.wikipedia.org/wiki/Jos%C3%A9_S%C3%B3crates" target="_blank">José Sócrates</a> in jail?
          </h1>
        </div>
      </div>

        <br />

      <h2 class="big-yes" data-in-jail="<?php echo $history->isStillInJail() ?>">
        <?php echo $history->isStillInJail() ? 'Yes!' : 'No.'; ?>
      </h2>
        <br />
        <br />

      <section class="timer">
        <h3>Time spent in jail</h3>
          <div class="timer-item <?php  echo ($interval->format('%Y') > 0)? '' : 'hide' ?>"><span class="timer-value years"><?php echo $interval->format('%Y') ?></span>  <span class="timer-label">years</span></div>
          <div class="timer-item <?php  echo ($interval->format('%M') > 0)? '' : 'hide' ?>"><span class="timer-value months"><?php echo $interval->format('%M') ?></span>  <span class="timer-label">months</span></div>
          <div class="timer-item"><span class="timer-value days"><?php echo $interval->format('%D') ?></span>  <span class="timer-label">days</span></div>
          <div class="timer-item"><span class="timer-value hours"><?php echo $interval->format('%H') ?></span>  <span class="timer-label">hours</span></div>
          <div class="timer-item"><span class="timer-value minutes"><?php echo $interval->format('%I') ?></span>  <span class="timer-label">min</span></div>
          <div class="timer-item"><span class="timer-value seconds"><?php echo $interval->format('%S') ?></span>  <span class="timer-label">sec</span></div>
          <div id="jailTimer"></div>
      </section>

        <br />
        <br />
        <div class="row">
          <div class="col-sm-12 text-right">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div class="fb-like" style="top: -5px; position: relative" data-href="http://www.issocratesinjail.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div><!-- Place this tag in your head or just before your close body tag. -->

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.issocratesinjail.com">Tweet</a>
          </div>
        </div>

<br />


        <br />
        <br />
        <br />


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <img src="img/socrates.jpg" class="img-responsive" />
            </div>
            <div class="col-md-2"></div>


        </div>


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


                <br />
        <br />
        <br />
        <br />
        <br />
