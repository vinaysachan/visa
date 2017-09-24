<div class="box-header with-border">
    <h3 class="box-title">
        Manage Application type and Their Price
    </h3>
    <div class="box-tools">
        <a class="btn bg-blue btn-flat btn-sm" href="javascript:void(0)" data-toggle="modal" data-target="#update_app_type"><i class="fa fa-image mr10" aria-hidden="true"></i> Update Application Type</a>
    </div>
</div>
<div class = "box-body">
    <table class="table pt10 table-bordered responsive-table">
        <thead>
            <tr>
                <th style="width:10%">#</th>
                <th style="width:60%">Application Type</th>
                <th style="width:20%">Application Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            if (!empty($application_type->mata_value)) :
                $m = json_decode($application_type->mata_value);
                foreach ($m as $a) :
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $a->text ?></td>
                        <td><i class = "fa fa-dollar"></i> <?= $a->price ?></td>
                    </tr>
                    <?php
                    $i++;
                endforeach;
            endif;
            ?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="update_app_type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url('admin/setting/edit_application_type') ?>" name="appTypeFrm" id="appTypeFrm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Update Application Type</h4>
                </div> 
                <div class="modal-body">
                    <?php
                    $i = 1;
                    if (!empty($application_type->mata_value)) :
                        $m = json_decode($application_type->mata_value);
                        foreach ($m as $a) :
                            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Application Type</label>
                                        <div class="col-sm-8">
                                            <input name="app_type_key[]" class="form-control" placeholder="Application Type" type="hidden" value="<?= $a->type ?>">
                                            <textarea name="app_type[]" maxlength="300" rows="2" class="form-control" aria-required="true"><?= $a->text ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb10 mt10">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Application Price</label>
                                        <div class="col-sm-8">
                                            <input name="app_price[]" class="form-control onlyNumeric" placeholder="Application Type Price" type="text" value="<?= $a->price ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix mb10"><hr/></div> 
                            <?php
                            $i++;
                        endforeach;
                    endif;
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>