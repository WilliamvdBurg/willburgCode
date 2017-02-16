
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

        <div id="tekstvak" class="wrap wide">


            <?= $page->intro()->kirbytext() ?>
        </div>

    </section>

        <div class="contact-section1">

                        <div id="left">
                            <h4><b>Bedrijf:</b></h4>
                                <p>Blekerstraat 5 <br/>
                                2222 AN Katwijk<br/>
                                T: +31 (0)71 408 83 26<br/>
                                F: +31 (0)71 408 64 91<br/>
                                <a href="mailto:info@willburgprojecten.nl">E info@willburgprojecten.nl</a></p>

                        </div>

                        <div id="right">
                            <h4><b>Verkoop:</b></h4>

                            <p>Blekerstraat 5 <br/>
                                2222 AN Katwijk<br/>
                                Paul Rademaker<br/>
                                    T: 06 - 27 09 06 17<br/>

                                <a href="mailto:paul@willburgprojecten.nl">E: paul@willburgprojecten.nl</a></p>
                            </p>
                        </div>

                        <div id="center">
                            <h4><b>Verkoop:</b></h4>

                            <p>Blekerstraat 5 <br/>
                                2222 AN Katwijk<br/>
                                Adrie van Diemen<br/>
                                    M: 06 - 51 68 02 81<br/>

                            <a href="mailto:adrie@willburgprojecten.nl">E: adrie@willburgprojecten.nl</a></p>
                        </div>



        </div>

        <div class="contact-section">

            <div class="wrap wide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.298957817025!2d4.431348316033447!3d52.201614467527584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c0b04f2abe35%3A0xad447797ade2acc9!2sBlekerstraat+5%2C+2222+AN+Katwijk+aan+Zee%2C+Nederland!5e0!3m2!1snl!2sca!4v1486635531088" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>

        </div>

            <section class="footer2"

            </section>

        </div>



<?php snippet('footer') ?>
    </div>
</div>


<!--Blekerstraat 5-->
<!--2222 AN Katwijk-->
<!--T  +31 (0)71 408 83 26-->
<!--F  +31 (0)71 408 64 91-->
<!--E    info@willburgprojecten.nl-->
<!---->
<!--VERKOOP-->
<!--Paul Rademaker-->
<!--M  06 - 27 09 06 17-->
<!--E   paul  @willburgprojecten.nl-->
<!---->
<!--VERKOOP-->
<!--Adrie van Diemen-->
<!--M  06 - 51 68 02 81-->
<!--E   adrie@willburgprojecten.nl-->
