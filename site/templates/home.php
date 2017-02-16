
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



      <section class="intro-text" >



      </section>
    <section class="homeinfo">

        <div id="tekstvak" class="wrap wide">
            <h2>Willburg Projecten BV</h2>

            <?= $page->intro()->kirbytext() ?>
        </div>
    </section>


<div class="laatsteProject">
          <div class="wrap wide2">
              <?= $page->text()->kirbytext() ?>
              <?php snippet('showcase', ['limit' => 3]) ?>
              <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
          </div>
</div>

      <section class="<?= $page->type() ?> blur-koppeling-bg small">
          <div class="container">
              <div class="text center-align">
                  <h4><b>Onze Partners:</b></h4>
              </div>

              <ul class="row2">
                  <li class="col">
                      <div class="logo-wrapper valign-wrapper">
                          <img class="v-align" src="/willburgCode/assets/images/new1.png">
                      </div>
                  </li>
                  <li class="col">
                      <div class="logo-wrapper valign-wrapper">
                          <img class="v-align" src="/willburgCode/assets/images/new2.png" >
                      </div>
                  </li>
                  <li class="col">
                      <div class="logo-wrapper valign-wrapper">
                          <img class="v-align" src="/willburgCode/assets/images/new3.png">
                      </div>
                  </li>
                  <li class="col">
                      <div class="logo-wrapper valign-wrapper">
                          <img class="v-align" src="/willburgCode/assets/images/new4.png">
                      </div>
              </ul>
          </div>
      </section>

                <section class="footer2"

                </section>




            </div>


<?php snippet('footer') ?>

        </div>
    </div>


