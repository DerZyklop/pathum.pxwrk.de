<!DOCTYPE HTML>
<html lang="de-DE">
<head>
  <meta charset="UTF-8">
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>

  <link href='http://fonts.googleapis.com/css?family=Inika:400,700' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
  <div id="body-inner">
    <header>
      <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo html($site->title()) ?>" /></a></h1>
      <?php snippet('menu') ?>

      <!-- Don't forget to set the correct height and with, like this: -->
      <!--
        <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" height="86" width="240" alt="<?php echo html($site->title()) ?>" /></a></h1>
      -->

    </header>
    <section id="main">