<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, contact, form, icons" />
    <link rel="stylesheet" href="/willburgCode/assets/css/footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<?php snippet('header') ?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="custom-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">
                <img src="/willburgCode/assets/images/logo_1.png" style= "width: 140px;height:60px;">
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <?php foreach($pages->visible() as $p): ?>
                    <li><a class="mdl-navigation__link" <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
                <?php endforeach ?>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">
                <img src="/willburgCode/assets/images/logo_1.png" style= "background: white;width:200px;height:70px;padding-right:35px;">
            </span>
        <nav class="mdl-navigation">
            <?php foreach($pages->visible() as $p): ?>
                <li><a class="mdl-navigation__link" <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
            <?php endforeach ?>
        </nav>
    </div>
    <div class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here -->



      <section class="intro-projects" >

      </section>

      <section class ="infoprojecten">
          <div id="tekstvak1" class="wrap wide">
              <h2><?= $page->title()->html() ?></h2>
              <?= $page->text()->kirbytext() ?>
          </div>

      </section>

      <section class ="projectshowcasebg">
    <div class="showcase1">
      <?php snippet('showcase') ?>
    </div>

      </section>
  </div>

<?php snippet('footer') ?>

        </div>
    </div>
