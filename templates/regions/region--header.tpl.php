<?php
$menu = menu_navigation_links('main-menu');
?>
<header class="l-header" role="banner">
    <div class="grid-container top-bar">
        <div class="top-bar-left">

        <h1><a href="/"><span class="cbu">Island </span>
<span class="scholar">Futures</span>
</a></h1>

            <?php print theme('links__main-menu', array('links' => $menu, 'attributes' => array('class'=> 'main-menu button-group menu'))); ?>
        </div>
        <div class="top-bar-right">
            <?php if ($content): ?>
            <div>
                <?php print $content; ?>
            </div>
            <?php endif; ?>
        <!-- <button class="mobile-menu__button button" data-toggle="offCanvas" type="button">Open Menu</button> -->
<span class="hamburger mobile-menu__button" data-toggle="offCanvas"></span>
        </div>
    </div>
</header>

