<!DOCTYPE html>
<html lang="en">
    <head>
        <?php /* Meta Header */ $this->load->view('includes/meta_header'); ?>
    </head>
    <body>
        <?php /* Top Menu */ $this->load->view('includes/front_header'); ?>
        <div class="container  ">
            <div class="row">
                <div class="col-sm-9">
                    <div class="page_content">
                        <h1><?= $heading ?></h1>
                        <?= $this->util->show_flash_message() ?>
                        <?php (!empty($view)) ? $this->load->view($view) : $this->load->view($this->router->fetch_class() . '/' . $this->router->fetch_method() . '_view'); ?>
                    </div>
                </div>
                <div class="col-sm-3 p0">
                    <?php /* enquiry_form */ $this->load->view('web_parts/right_links'); ?>
                    <?php /* enquiry_form */ $this->load->view('web_parts/enquiry_form'); ?>
                </div>
            </div>
        </div>
        <?php /* Footer */ $this->load->view('includes/front_footer'); ?>
    </body>
</html>