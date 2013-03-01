<?php 
  snippet('header');
  $item = $page;
?>
<article>
  <div class="main-width-wrap">
    <h1><?php echo html($item->title()) ?></h1>
    <?php if($item->hasImages()): ?>
      <?php foreach ($item->images() as $image ) : ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
      <?php endforeach; ?>
    <?php endif; ?>
    <?php echo kirbytext($item->text()) ?>
    <?php if ( $item->autor() != '' || $item->date() ) : ?>
      <aside>
        <?php if ( $item->autor() != '' ) : ?>
          <span class="left">Autor: <?php echo html($item->autor()) ?></span>
        <?php endif; ?>
        <?php if ( $item->date() ) : ?>
          <span class="right"><?php echo html($item->date('d. m. Y')) ?></span>
        <?php endif; ?>
        <div class="clearit"></div>
      </aside>
    <?php endif; ?>
  </div>
</article>

<?php snippet('footer') ?>
