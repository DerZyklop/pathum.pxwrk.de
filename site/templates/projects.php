<?php 
  snippet('header');
  if ( $page->children()->visible()->count() ) :
  $articles = $page->children()->visible(); 
  foreach ( $articles->flip() as $item ) :
?>

<article>
  <div class="main-width-wrap">
    <h2><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2>
    <?php if($item->hasImages()): ?>
      <?php foreach ($item->images() as $image ) : ?>
        <a href="<?php echo $item->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></a>
      <?php endforeach; ?>
    <?php endif; ?>
    <p><?php echo excerpt($item->text(), 390) ?> <a href="<?php echo $item->url() ?>">weiterlesen</a></p>
  </div>
</article>

<?php 
endforeach;
else :
?>

<article>
  <div class="main-width-wrap">
    <h2>Oh no!</h2>
    <p>There is no article jet. I'm sorry!</p>
  </div>
</article>

<?php 
endif;
?>
<?php snippet('footer') ?>
