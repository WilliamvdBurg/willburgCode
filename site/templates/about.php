
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


            <div class="wrap">
      
      <header>
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </div>
    
    <section class="team wrap wide">
      
      <h2>Our Purring Team</h2>

      <ul class="team-list grid gutter-1">
        <?php foreach($page->children()->visible() as $member): ?>
          <li class="team-item column">
            
            <figure class="team-portrait">
              <img src="<?= $member->image()->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
            </figure>
            
            <div class="team-info">
              <h3 class="team-name"><?= $member->title()->html() ?></h3>
              <p class="team-position"><?= $member->position()->html() ?></p>
              <div class="team-about text">
                <?= $member->about()->kirbytext() ?>
              </div>
            </div>
            
            <div class="team-contact text">
              <i>Phone:</i><br />
              <?= kirbytag(['tel' => $member->phone()->html()]) ?><br />
              <i>Email:</i><br />
              <a href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a><br />
            </div>
          </li>
        <?php endforeach ?>
      </ul>
      
    </section>
            <section class="footer2"

            </section>

        </div>

<?php snippet('footer') ?>
        </div>

    </div>
