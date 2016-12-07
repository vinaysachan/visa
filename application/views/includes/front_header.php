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
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" style="height: 300px; width: 100% " title="" alt="" src="https://www.dewionline.com/uploads/banner/home_slider/slide_2_1458914526home-banner3.jpg">
        </div>
        <div class="item">
            <img class="img-responsive" style="height: 300px; width: 100%" title="" alt="" src="http://localhost/visa/public/themes/images/banner4.jpg">
        </div>
        <div class="item">
            <img class="img-responsive" style="height: 300px; width: 100%" title="" alt="" src="http://localhost/visa/public/themes/images/banner5.jpg">
        </div>
        
        
    </div>
</div>



<?php /*if (!empty($page_name) && $page_name == 'home' && !empty($banners)) : ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($banners as $key => $val) : ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>" class="<?= ($key == 0) ? 'active' : '' ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php foreach ($banners as $key => $val) : ?>
                <div class="item <?= ($key == 0) ? 'active' : '' ?>">
                    <img title="<?= $val['banner_desc'] ?>" alt="<?= $val['title'] ?>" src="<?= base_url(BANNER_PHOTO_PATH . $val['image']) ?>" />
                </div>
            <?php endforeach; ?>
        </div>  
    </div>
<?php endif; */?>






<div class="brred"></div>
