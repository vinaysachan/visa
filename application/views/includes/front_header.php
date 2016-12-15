<?php list($class, $method) = [$this->router->fetch_class(), $this->router->fetch_method()]; ?>
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
                    <a title="<?= SITE_NAME ?>" href="<?= base_url() ?>" class="navbar-brand">
                        <img alt="<?= SITE_NAME ?>" class="img-responsive" style="max-height: 60px;" src="<?= base_url('public/img/logo.png') ?>">
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
                        <li class="<?= ($class == 'main' && $method == 'index') ? 'active' : '' ?>"> 
                            <a title="<?= SITE_NAME ?>" href="<?= base_url() ?>">Home</a>
                        </li>
                        <?php
                        foreach ($page_list as $pl) :
                            if (($pl['slug'] != 'home') && (in_array('top', $pl['menu_location']))) :
                                ?>
                                <li  class="<?= (($class == 'main') && ($method == 'page') && (!empty($slug)) && ($slug == $pl['slug'])) ? 'active' : '' ?>"><a href="<?= base_url($pl['slug']) ?>"><?= $this->setting_model->page_name_by_slug($pl['slug']) ?></a></li>
                                <?php
                            endif;
                        endforeach;
                        ?>
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
    <div id="application_btn" class="container text-center">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange">
                    <span class="step">Step 1</span>
                    <a href="<?= base_url('apply_visa') ?>">
                        <div class="mt5">Click Here to</div>
                        <h4 class="fs18 m0 p0 mt5">Apply for Visa</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green">
                    <span class="step">Step 2</span>
                    <a href="<?= base_url('visa_reg') ?>">
                        <div class="mt5">Complete Partially</div>
                        <h4 class="fs18 m0 p0 mt5">Filled Form</h4>
                    </a>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red">
                    <span class="step">Step 3</span>
                    <a href="">
                        <div class="mt5">Make Payment For</div>
                        <h4 class="fs18 m0 p0 mt5">Completed Form</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue">
                    <span class="step">Step 4</span>
                    <a href="">
                        <div class="mt5">Check Applications</div>
                        <h4 class="fs18 m0 p0 mt5">Status</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>