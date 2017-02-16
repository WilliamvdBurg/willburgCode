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
    <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
        <style>
            body {
                background: url("/willburgCode/assets/css/newbg.png"), url("/willburgCode/assets/css/newbg2.png") no-repeat center center;                background-right
            -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                width: auto;
                height: auto;
            }
        </style>


        <header class="wrap">

            <b> <h1><?= $page->title()->html() ?></h1></b>
            <div class="intro text">
                <?= $page->year() ?>
            </div>
            <hr />
        </header>

        <div class="text wrap">
        <?= $page->text()->kirbytext() ?>
            <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.

            foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                <figure>
                    <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
                </figure>
            <?php endforeach ?>
        </div>
        <?php snippet('prevnext') ?>

    </div>
        <?php snippet('footer') ?>

    </main>
    </div>
