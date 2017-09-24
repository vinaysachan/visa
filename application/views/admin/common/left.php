<?php list($class, $method) = [$this->router->fetch_class(), $this->router->fetch_method()]; ?>
<aside class="main-sidebar">		
    <section class="sidebar">		   
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url(ADMIN_PHOTO_PATH . $this->session->userdata(SESSION_ADMIN)['img']) ?>" class="img-circle">
            </div>
            <div class="pull-left info">
                <p> <?= $this->session->userdata(SESSION_ADMIN)['name'] ?></p>
                <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu mt25">
            <li class="<?= ($class == 'home' && $method == 'index') ? 'active' : '' ?>">
                <?= anchor(base_url('admin'), '<i class="fa fa-dashboard"></i> <span>Dashboard</span>') ?>
            </li>
            <li class="<?= ($class == 'home' && $method == 'enquiry') ? 'active' : '' ?>">
                <?= anchor(base_url('admin/home/enquiry/' . STATUS_IN_ACTIVE), '<i class="fa fa-envelope"></i> <span>Enquiry</span>') ?>
            </li>
			<li class="<?= ($class == 'home' && $method == 'applicationDetails') ? 'active' : '' ?>">
                <?= anchor(base_url('admin/home/applicationDetails/'), '<i class="fa fa-envelope"></i> <span>Application Details</span>') ?>
            </li>
            <li class="treeview <?= ((in_array($class, ['setting'])) && (in_array($method, ['index', 'banner', 'banner_ae','page', 'page_ae']))) ? 'active' : '' ?>">  
                <a href="javascript:void(0)">
                    <i class="fa fa-internet-explorer"></i>
                    <span>Website Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                
                
                
                
                <ul class="treeview-menu">
                    <li class="<?= ((in_array($class, ['setting'])) && (in_array($method, ['banner', 'banner_ae']))) ? 'active' : '' ?>">
                        <?= anchor(base_url('admin/setting/banner'), '<i class="fa fa-image"></i> <span>Manage Banner</span>') ?>
                    </li>
                    <li class="<?= ((in_array($class, ['setting'])) && (in_array($method, ['page', 'page_ae']))) ? 'active' : '' ?>">
                        <?= anchor(base_url('admin/setting/page'), '<i class="fa fa-television"></i> <span>Manage Pages</span>') ?>
                    </li>
                    <li class="<?= ((in_array($class, ['setting'])) && (in_array($method, ['application_type']))) ? 'active' : '' ?>">
                        <?= anchor(base_url('admin/setting/application_type'), '<i class="fa fa-television"></i> <span>Application Types</span>') ?>
                    </li>
                </ul>
            </li>
        </ul>
    </section>		
</aside>