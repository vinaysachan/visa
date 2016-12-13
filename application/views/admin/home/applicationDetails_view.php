<div class="box-header with-border">
    <h3 class="box-title"></h3>
     
</div>
<div class = "box-body">
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
            $i = 0 + 1;
            if (!empty($application)) : foreach ($application as $app) :
                    ?>
                    <tr>
                        <td><?= $i ?></td>
						<td><a href="<?=base_url();?>admin/home/appDetails/<?= $app->app_id ?>" ><?= $app->app_id ?></a></td>
                             
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
                             <div class="checkbox">
                                <label>
                                    <?php if ($app->status ==0) : ?>
                                        <input data-enq_id="<?=$app->app_id?>" class="enq_sts" name="status" value="1" checked="" type="checkbox"> Open
                                    <?php else : ?>
                                        <input data-enq_id="<?=$app->app_id?>" class="enq_sts" name="status" value="1" type="checkbox"> Closed
                                    <?php endif; ?>
                                </label>
                            </div>
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
 