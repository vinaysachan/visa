<header id="header">
    <div class="header-nav-bar">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?= base_url() ?>" class="navbar-brand">
                        <img alt="" class="img-responsive" style="max-height: 60px;" src="<?= base_url('public/img/logo.png') ?>">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <div class="text-right">
                        <span>
                            <i class="fa fa-phone fs20 mr10"></i>
                            <img src="http://e-indianvisa.com/assets/images/uk.png" style="margin-bottom: 5px;" width="20px">
                            02036033930
                        </span>
                        <span class="ml25">
                            <i class="fa fa-phone fs20 mr10"></i>
                            <img src="http://e-indianvisa.com/assets/images/us.png" style="margin-bottom: 5px;" width="20px">
                            12483852014
                        </span>                         
                    </div>
                    <ul class="nav navbar-nav navbar-right primary-nav">
                        <li class="active"> <a href="">Home</a> </li>
                        <li class=""> <a href="">Apply Visa</a> </li>
                        <li class=""> <a href="">Urgent Visa </a> </li>
                        <li class=""> <a href="">Documents </a> </li>
                        <li class=""> <a href="">T&C</a> </li>
                        <li class=""> <a href="">Privacy</a> </li>
                        <li class=""> <a href="">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<?php if (!empty($banners)) : ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($banners as $k => $b) : ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $k ?>" class="<?= ($k == 0) ? 'active' : '' ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php foreach ($banners as $k => $b) : ?>
                <div class="item <?= ($k == 0) ? 'active' : '' ?>">
                    <img  class="img-responsive" style="height: 300px; width: 100% " title="<?= $b->title ?>" alt="<?= $b->title ?>" src="<?= base_url(BANNER_PATH . $b->img) ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>