<nav>
  <ul id="nav">
    <?php foreach($pages->visible() AS $p): ?>
    <li<?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>