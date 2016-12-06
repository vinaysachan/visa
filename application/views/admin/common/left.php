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
<!--            <li class="<?= ($class == 'home' && $method == 'index1') ? 'active' : '' ?>">
                <?= anchor(base_url('admin'), '<i class="fa fa-dashboard"></i> <span>Dashboard wqewqe</span>') ?>
            </li>
            <li class="treeview active">
                <a href="javascript:void(0)">
                    <i class="fa fa-book"></i>
                    <span>Interview Question Answer</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href=""><i class="fa fa-rss-square"></i> <span>Interview QA Category</span></a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-circle-o"></i> <span>Manage Interview QA</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class="fa fa-book"></i>
                    <span>Blogs</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href=""><i class="fa fa-rss-square"></i> <span>Blog Category</span></a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-circle-o"></i> <span>Manage Blog</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="javascript:void(0)">
                    <i class="fa fa-book"></i>
                    <span>Interview Question Answer</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href=""><i class="fa fa-rss-square"></i> <span>Interview QA Category</span></a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-circle-o"></i> <span>Manage Interview QA</span></a>
                    </li>
                </ul>
            </li>
            <li class="<?= ($class == 'home' && $method == 'index2') ? 'active' : '' ?>">
                <?= anchor(base_url('admin'), '<i class="fa fa-dashboard"></i> <span>Dashboard we</span>') ?>
            </li>
            <li class="<?= ($class == 'home' && $method == 'index3') ? 'active' : '' ?>">
                <?= anchor(base_url('admin'), '<i class="fa fa-dashboard"></i> <span> er dfgd</span>') ?>
            </li>
            <li class="<?= ($class == 'home' && $method == 'index4') ? 'active' : '' ?>">
                <?= anchor(base_url('admin'), '<i class="fa fa-dashboard"></i> <span>dfgdfg fd</span>') ?>
            </li>-->
        </ul>
    </section>		
</aside>