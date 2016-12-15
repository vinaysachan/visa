<div class="box box-theme">
    <div>Please note down the Temporary Application ID : <span class="text-uppercase fs17 ml15"><?= $this->session->userdata('application_id'); ?></span></div>
    <div>Your Information will be saved if you click save button or continue to next page. If you exit without doing either of that, your information will be lost. </div>
    <div>Application Type : <span class="fs17 ml15 text-uppercase"><?= $apply_details[0]->app_type; ?></span></div>
</div>
<div class="p10">
    <form method="post" class="form-horizontal" action="" >
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Surname</label>
            <div class="col-sm-7">
                <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?= $this->session->userdata('application_id'); ?>" >
                <input type="text" class="form-control" name="surname" id="surname" value="<?= $apply_details[0]->lname; ?>" placeholder="Surname">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Given Name/s *</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="fname" id="fname" value="<?= $apply_details[0]->fname; ?>" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Sex </label>
            <div class="col-sm-7">
                <select name="sex" id="visaType" class="form-control"   data-parsley-required="">
                    <option value="">Select</option>
                    <option value="M" selected="">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
        </div>	 
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Date of Birth</label>
            <div class="col-sm-7">
                <?= $apply_details[0]->dob; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Town/City of birth*</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="birthofcity" id="inputEmail3" placeholder="Last Name">
            </div>
        </div>				

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Country of birth </label>
            <div class="col-sm-7">
                <select name="birthofcountry" class="form-control" id="nationality" data-parsley-required="" onchange="ukSelect(value)">
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Citizenship/National Id No. *</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="natinalid" id="inputEmail3" placeholder="itizenship/National Id No">
            </div>
        </div>				
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Religion *</label>
            <div class="col-sm-7">
                <select name="religion" class="form-control" id="passportType">
                    <option value="" selected="selected">Select......</option>
                    <option value="BAHAI"> BAHAI</option>
                    <option value="BUDDHISM"> BUDDHISM</option>
                    <option value="CHRISTIAN"> CHRISTIAN</option>
                    <option value="HINDU"> HINDU</option>
                    <option value="ISLAM"> ISLAM</option>
                    <option value="JUDAISM"> JUDAISM</option>
                    <option value="PARSI"> PARSI</option>
                    <option value="SIKH"> SIKH</option>
                    <option value="ZOROASTRIAN"> ZOROASTRIAN</option>
                    <option value="Others"> Others</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Visible identification marks *</label>
            <div class="col-sm-7">
                <input type="text" name="identification" class="form-control" id="inputEmail3" placeholder="Visible identification marks">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Educational Qualification *</label>
            <div class="col-sm-7">
                <select name="qualification" class="form-control" id="passportType">
                    <option value="" selected="selected">Select......</option>
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
            <label for="inputEmail3" class="col-sm-4 col-form-label">Nationality *</label>
            <div class="col-sm-7">
                <?= $apply_details[0]->nationality; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Did you acquire Nationality by birth or by naturalization? *</label>
            <div class="col-sm-7">
                <select name="acquire_nationality" class="form-control" id="passportType" onchange="acquire_naturalization(this.value)">
                    <option value="">Select One</option>
                    <option value="By Birth">By Birth</option>
                    <option value="Naturalization">Naturalization</option>

                </select>
            </div>
        </div>
        <div class="form-group row" id="prev_nationality" style="display:none">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Prev. Nationality </label>
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
            <label for="inputEmail3" class="col-sm-4 col-form-label">Passport NO</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="passportno" name="passportno" value="<?= $apply_details[0]->passport_no; ?>" placeholder="Passport No">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Place of Issue *</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="placeofissue" name="placeofissue" placeholder="Place of Issue">
            </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 control-label">Date of Issue *</label>
            <div class="input-group date form_date col-md-7" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" value="" readonly>

                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            <input type="hidden" id="dtp_input2" name="dateofissue" value="" /><br/>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 control-label">Date of Expiry *</label>
            <div class="input-group date form_date col-md-7" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input3" data-link-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" value="" readonly>

                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            <input type="hidden" id="dtp_input3" name="dateofexpiry" value="" /><br/>
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
                <label for="dtp_input2" class="col-md-4 control-label">Date of Expiry *</label>
                <div class="input-group date form_date col-md-7" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input4" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>

                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <input type="hidden" id="dtp_input4" name="icdateofexpiry" value="" /><br/>
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
        <!--------------------IC Form END------------------------------------>					


        <div class="form-group row">
            <div class="col-sm-offset-4 col-sm-3">
                <input type="submit" class="btn btn-primary" name="step1" value="Save and Continue" />
            </div>
            <div class="col-sm-offset-2 col-sm-3">
                <input type="submit" class="btn btn-primary" name="step1" value="Save and Temporarily Exit" />
            </div>
        </div>
    </form>
</div>