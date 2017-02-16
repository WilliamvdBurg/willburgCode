<?php

$projects = page('products')->children()->visible();
if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase2 grid gutter-1">

    <?php foreach($projects as $project): ?>

        <li class="showcase2-item column">
            <h5> <?= $project->title()->html() ?>:</h5>
            <a href="<?= $project->url() ?>" class="showcase2-link">

                <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
                    <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase2-image" />
                <?php endif ?>
                <div class="showcase2-caption">
                    <h3 class="showcase2-title"><?= $project->title()->html() ?></h3>
                </div>
            </a>
        </li>

    <?php endforeach ?>

</ul>



