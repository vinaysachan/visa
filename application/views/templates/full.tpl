<!DOCTYPE html>
<html lang="en">
    <head>
        <?php /* Meta Header */ $this->load->view('includes/meta_header'); ?>
    </head>
    <body>
        <?php /* Google Analytics */ $this->load->view('analyticstracking'); ?>
        <?php /* Top Menu */ $this->load->view('includes/front_header'); ?>
        <div class="container  ">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="page_content">
                        <?php if (empty($banners)) : ?>
                            <div class="banner_top">
                                <img src="<?= base_url('public/img/mumbai1.jpg') ?>">
                            </div>
                        <?php endif; ?>
                        <h1><?= $heading ?></h1>
                        <?= $this->util->show_flash_message() ?>
                        <?php (!empty($view)) ? $this->load->view($view) : $this->load->view($this->router->fetch_class() . '/' . $this->router->fetch_method() . '_view'); ?>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript"> base_url = '<?= base_url() ?>';</script>
        <?php /* Footer */ $this->load->view('includes/front_footer_bottom'); ?>
    </body>
</html>