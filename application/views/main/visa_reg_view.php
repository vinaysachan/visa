<div class="box box-theme">
    <div>Please note down the Temporary Application ID : <span class="text-uppercase fs17 ml15"><?= $this->session->userdata('application_id'); ?></span></div>
    <div>Your Information will be saved if you click save button or continue to next page. If you exit without doing either of that, your information will be lost. </div>
    <div>Application Type : <span class="fs17 ml15 text-uppercase"><?= $apply_details[0]->app_type; ?></span></div>
</div>
<div class="p10">
    <form name="visa_regFrm" id="visa_regFrm" method="post" class="form-horizontal" action="" >
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Surname</label>
            <div class="col-sm-7">
                <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?= $this->session->userdata('application_id') ?>" >
                <input type="text" class="form-control" name="surname" id="surname" value="<?= $apply_details[0]->lname; ?>" placeholder="Surname" required="" label-name="Surname">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Given Name/s</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="fname" id="fname" value="<?= $apply_details[0]->fname; ?>" placeholder="Name" required="" label-name="Given Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Sex </label>
            <div class="col-sm-7">
                <select name="sex" id="visaType" class="form-control" data-parsley-required="">
                    <option value="">Select</option>
                    <option value="M" selected="">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
        </div>	 
        <div class="form-group row">
            <label class="col-sm-4 require">Date of Birth</label>
            <div class="col-sm-7">
                <input disabled="" value="<?= get_date($apply_details[0]->dob, 'Y-m-d', 'd/m/Y') ?>" type="text" class="form-control" placeholder="Date of Birth" >
            </div>
        </div>
        <div class="form-group row">
            <label for="birthofcity" class="col-sm-4 require">Town/City of birth</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="birthofcity" id="birthofcity" placeholder="Town/City of birth" required="" label-name="Town/City of Birth">
            </div>
        </div>				

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 require">Country of birth </label>
            <div class="col-sm-7">
                <select name="birthofcountry" class="form-control" id="nationality" required="" label-name="Country of birth">
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Citizenship/National Id No.</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="natinalid" id="inputEmail3" placeholder="Citizenship/National Id No" required="" label-name="Citizenship/National Id No">
            </div>
        </div>				
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 require">Religion</label>
            <div class="col-sm-7">
                <select name="religion" class="form-control" required="" label-name="Religion">
                    <option value="" selected="selected">Select Religion</option>
                    <option value="BAHAI">BAHAI</option>
                    <option value="BUDDHISM">BUDDHISM</option>
                    <option value="CHRISTIAN">CHRISTIAN</option>
                    <option value="HINDU">HINDU</option>
                    <option value="ISLAM">ISLAM</option>
                    <option value="JUDAISM">JUDAISM</option>
                    <option value="PARSI">PARSI</option>
                    <option value="SIKH">SIKH</option>
                    <option value="ZOROASTRIAN">ZOROASTRIAN</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Visible identification marks</label>
            <div class="col-sm-7">
                <input type="text" name="identification" class="form-control" id="inputEmail3" placeholder="Visible identification marks" required="" label-name="Visible identification marks">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 require">Educational Qualification</label>
            <div class="col-sm-7">
                <select name="qualification" class="form-control" id="passportType" required="" label-name="Educational Qualification">
                    <option value="" selected="selected">Select Educational Qualification</option>
                    <option value="BELOW MATRICULATION"> BELOW MATRICULATION</option>
                    <option value="GRADUATE"> GRADUATE</option>
                    <option value="HIGHER SECONDARY"> HIGHER SECONDARY</option>
                    <option value="ILLITERATE"> ILLITERATE</option>
                    <option value="MATRICULATION"> MATRICULATION</option>
                    <option value="NA BEING MINOR"> NA BEING MINOR</option>
                    <option value="OTHERS"> OTHERS</option>
                    <option value="POST GRADUATE"> POST GRADUATE</option>
                    <option value="PROFESSIONAL"> PROFESSIONAL</option>
                </select>
            </div>
        </div>				
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4">Nationality</label>
            <div class="col-sm-7"><?= country_name($apply_details[0]->nationality) ?></div> 
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 require">Did you acquire Nationality by birth or by Naturalization?</label>
            <div class="col-sm-7">
                <select name="acquire_nationality" class="form-control" id="passportType" onchange="acquire_naturalization(this.value)" required="" label-name="">
                    <option value="">Select One</option>
                    <option value="By Birth">By Birth</option>
                    <option value="Naturalization">Naturalization</option>
                </select>
            </div>
        </div>
        <div class="form-group row" id="prev_nationality" style="display:none">
            <label for="prev_nationality" class="col-sm-4 col-form-label">Prev. Nationality </label>
            <div class="col-sm-7">
                <select name="prev_nationality" class="form-control" id="nationality" >
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div> 
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Passport NO</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="passportno" name="passportno" value="<?= $apply_details[0]->passport_no; ?>" placeholder="Passport No" required="" label-name="Passport No">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-require">Place of Issue</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="placeofissue" name="placeofissue" placeholder="Place of Issue" required="">
            </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 require">Date of Issue</label>
            <div class="col-md-7"> 
                <input type="text" required="" label-name="Date of Issue" data-max_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="dateofissue" id="dateofissue" placeholder="Date of Issue" value="<?= get_date($apply_details[0]->pass_date_of_Issue, 'Y-m-d', 'd/m/Y') ?>" >
            </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 require">Date of Expiry</label>
            <div class="col-md-7"> 
                <input type="text" required="" label-name="Date of Expiry" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="dateofexpiry" id="dateofexpiry" placeholder="Date of Expiry" value="<?= get_date($apply_details[0]->pass_date_of_expiry, 'Y-m-d', 'd/m/Y') ?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Any other valid Passport/Identity Certificate(IC) held *</label>
            <div class="col-sm-7">
                <label class="radio-inline">
                    <input type="radio" name="ic" id="inlineRadio1" value="yes"> YES
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ic" id="inlineRadio2" checked="checked" value="no"> NO
                </label>
            </div>
        </div>

        <!--------------------IC Form ------------------------------------>				
        <div id="ic_form" style="display: none;">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Country of Issue  </label>
                <div class="col-sm-7">
                    <select name="nationality" class="form-control" id="issueofcountry" data-parsley-required="" >
                        <option value="">Select Country...</option>
                        <?php foreach ($getCounrty as $counrty) { ?>
                            <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>				
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Passport/IC No. </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputEmail3" name="icpassportno" placeholder="Passport/IC No">
                </div>
            </div> 
            <div class="form-group">
                <label for="dtp_input2" class="col-md-4 require">Date of Expiry</label>
                <div class="col-md-7"> 
                    <input type="text" required="" label-name="Date of Expiry" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="icdateofexpiry" id="icdateofexpiry" placeholder="Date of Expiry" value="<?= get_date($apply_details[0]->ic_date_of_Issue, 'Y-m-d', 'd/m/Y') ?>" >
                </div>
            </div> 
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Place of Issue </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputEmail3" name="icplaceofissue" placeholder="Place of Issue ">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Nationality mentioned therein  </label>
                <div class="col-sm-7">
                    <select name="icnatinality" class="form-control" id="nationality" data-parsley-required="" >
                        <option value="">Select Country...</option>
                        <?php foreach ($getCounrty as $counrty) { ?>
                            <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-4 col-sm-3">
                <input type="submit" class="btn btn-primary" name="step1" value="Save and Continue" />
            </div>
            <!--            <div class="col-sm-offset-2 col-sm-3">
                            <input type="submit" class="btn btn-primary" name="step1" value="Save and Temporarily Exit" />
                        </div>-->
        </div>
    </form>
</div>