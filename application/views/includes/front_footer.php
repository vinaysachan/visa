<div class="footer-content">
    <div class="container">
        <div class="row">
            <div class="footer-col col-md-2 col-sm-4 about">
                <div class="footer-col-inner">
                    <h3>About</h3>
                    <ul>
                        <?php
                        foreach ($page_list as $pl) :
                            if (($pl['slug'] != 'home')) :
                                ?>
                                <li><a href="<?= base_url($pl['slug']) ?>"><i class="fa fa-caret-right"></i> <?= $this->setting_model->page_name_by_slug($pl['slug']) ?></a></li>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="footer-col col-md-6 col-sm-8 newsletter">
                <div class="footer-col-inner">
                    <h3>Disclaimers:</h3>
                    <p>
                        <a href="http://www.e-touristvisa.com">www.E-Touristvisa.com</a> is in charge of full visa administrations to India. This is a business site to apply eVisa to India through Indian Government Website, you will be charged an expense for utilizing our administrations. Our expense will be higher than Indian Government on the off chance that you apply through the Indian Embassy or site on the web. Read all our Terms and Conditions carefully before using our services.
                    </p>
                </div>
            </div>
            <div class="footer-col col-md-4 col-sm-12 text-right">
                <div class="footer-col-inner">
                    <div class="row">
                        <p class="adr clearfix col-md-12 col-sm-4">
                            <a href="<?= base_url('serach_app') ?>" class="btn btn-warning pl30 pr30" style="color: #FFF;">Pay Now</a>
                        </p>
                        <p class="tel col-md-12 col-sm-4">
                            <img src="<?= base_url('public/img/secure.jpg') ?>" alt="Secure" style="width: 233px">
                        </p>
                        <p class="email col-md-12 col-sm-4">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:<?= CONTACT_EMAIL1 ?>"><?= CONTACT_EMAIL1 ?></a>
                        </p>
                        <p class="tel col-md-12 col-sm-4">
                            <i class="fa fa-phone"></i>
                            <a href="tel:<?= CONTACT_NO1 ?>"><?= CONTACT_NO1 ?></a>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>