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
                    Left Part 
                </div>
                <div class="col-sm-3 p0">
                    <?php /* enquiry_form */ $this->load->view('web_parts/enquiry_form'); ?> 
                </div>
            </div>
        </div>
        <?php /* Footer */ $this->load->view('includes/front_footer'); ?>
    </body>
</html>