<div class="p10">
    <form name="applyVisaSerachFrm" id="applyVisaSerachFrm" method="post" class="form-horizontal" action="<?= base_url('main/serach_app') ?>" >
        <div class="form-group">
            <label for="visaType" class="col-sm-4 require">Temporary Application ID</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" name="appID" required=""/>
            </div>
        </div>
         
        <div class="form-group row">
            <div class="col-sm-offset-8 col-sm-4 text-right">
                <button type="submit" class="btn btn-primary" name="search" value="Continue">Continue</button>
            </div>
        </div>
    </form>
</div>