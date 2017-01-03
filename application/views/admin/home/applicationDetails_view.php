<div class="box-header with-border">
    <h3 class="box-title"></h3>

</div>
<div class = "box-body">
    <?= $this->paginator->dispaly_page_record_ipp() ?> 
    <div class="table-responsive">
        <table class="table pt10 table-bordered responsive-table">
            <thead>
                <tr>
                    <th >#</th>
                    <th >Application ID</th>
                    <th >Application Type</th>
                    <th >First name</th>
                    <th >Last Name</th>
                    <th >Passport Type</th>
                    <th >Nationality</th>
                    <th >Port Of Arrival</th>
                    <th >Passport No</th>
                    <th >Date of Birth</th>
                    <th >Email Id</th>
                    <th >Sex</th>

                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = $page + 1;
                if (!empty($application)) : foreach ($application as $app) :
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <th><a href="<?= base_url(); ?>admin/home/appDetails/<?= $app->app_id ?>" ><?= $app->app_id ?></a></th>
                            <td> <?= $app->app_type ?></td>
                            <td><?= $app->fname ?></td> 
                            <td><?= $app->lname ?></td> 
                            <td><?= $app->passport_type ?></td> 
                            <td><?= $app->nationality ?></td> 
                            <td><?= $app->portofarrival ?></td> 
                            <td><?= $app->passport_no ?></td> 
                            <td><?= $app->dob ?></td> 
                            <td><?= $app->email ?></td> 
                            <td><?= $app->sex ?></td> 
                            <td class="text-right">
                                <?php
                                if ($app->application_status == 1) {
                                    echo 'Payment Pending';
                                }
                                if ($app->application_status == 2) :
                                    ?>
                                    <div class="checkbox">
                                        <label><input data-app_id="<?= $app->app_id ?>" id="app_status" name="app_status" value="1" type="checkbox"> Close Application</label>
                                    </div>
                                    <?php
                                endif;
                                if ($app->application_status == 3) : echo 'Closed';
                                endif;
                                ?>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    endforeach;
                endif;
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="box-footer clearfix">
    <?= $this->paginator->display_jump_menu_pages() ?>
</div>
