<style>
    .alert {
        padding: 0px !important;
    }

</style>

<div><h4>Application Type  :  <?= $apply_details[0]->app_type; ?></h4>
    <h4>Application NO : <?= strtoupper($this->session->userdata('application_id')); ?></h4>
</div>
<div class="p10">
    <form name="step3" id="step3" method="POST" >
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Applicant's Address Details </div>			
        <h2>Present Address</h2>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">House No./Street</label>
            <div class="col-sm-7">
                <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?= $this->session->userdata('application_id'); ?>" >
                <input type="text" class="form-control" required="" label-name="House No./Street" name="houseno" id="houseno" value="<?= $apply_details[0]->houseno; ?>" placeholder="House No./Street">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">Village/Town/City</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" required="" label-name="Village/Town/City" value="<?= $apply_details[0]->city; ?>"  name="city" id="city"  placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 require">State/Province/District</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" required="" label-name="Village/Town/City" value="<?= $apply_details[0]->district; ?>" name="district" id="district"  placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="zipcode" class="col-sm-4 require">Postal/Zip Code</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" required="" label-name="Postal/Zip Code" value="<?= $apply_details[0]->zipcode; ?>" name="zipcode" id="zipcode"  placeholder="zipcode">
            </div>
        </div>
        <div class="form-group row">
            <label for="adress_country" class="col-sm-4 require">Country</label>
            <div class="col-sm-7">
                <select name="adress_country" required="" label-name="Country" class="form-control" id="adress_country" data-parsley-required="" >
                    <option value="">Select Country</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option <?= ($counrty->code == $apply_details[0]->adress_country) ? 'selected=""' : '' ?> value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div> 
        <div class="form-group row">
            <label for="mobileno" class="col-sm-4 require">Mobile No.</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" required="" label-name="Mobile No." value="<?= $apply_details[0]->mobileno; ?>" name="mobileno" id="mobileno" placeholder="mobile no">
            </div>
        </div>	
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4">Email</label>
            <div class="col-sm-7">
                <?= $apply_details[0]->email; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-6">Click Here for Same Address</label>
            <div class="col-sm-4">
                <label class="radio-inline">
                    <input type="checkbox" name="sameAddress" id="sameAddress" value="yes" onclick="sameaddress(this.form)"> 
                </label>
            </div>
        </div>	
        <h2>Permanent Address</h2>
        <div class="form-group row">
            <label for="phouseno" class="col-sm-4 require">House No./Street</label>
            <div class="col-sm-7">
                <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?= $this->session->userdata('application_id'); ?>" >
                <input type="text" class="form-control" required="" label-name="House No./Street" value="<?= $apply_details[0]->perma_houseno; ?>" name="phouseno" id="phouseno" value="" placeholder="House No">
            </div>
        </div>
        <div class="form-group row">
            <label for="pcity" class="col-sm-4 require">Village/Town/City</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" required="" label-name="Village/Town/City" value="<?= $apply_details[0]->perma_city; ?>" name="pcity" id="pcity" placeholder="Village/Town/City">
            </div>
        </div>
        <div class="form-group row">
            <label for="pdistrict" class="col-sm-4 require">State/Province/District</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="pdistrict" required="" label-name="Village/Town/City" value="<?= $apply_details[0]->perma_district; ?>" id="pdistrict" placeholder="State/Province/District">
            </div>
        </div>
        <div class="col-md-12 box_heading">Family Details</div>
        <h2>Father's Details</h2>				
        <div class="form-group row">
            <label for="father_name" class="col-sm-4 require">Father Name</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" required="" label-name="Father Name" value="<?= $apply_details[0]->father_name; ?>" name="father_name" id="father_name" placeholder="father Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="father_nationality" class="col-sm-4 require">Father Nationality</label>
            <div class="col-sm-7">
                <select name="father_nationality" class="form-control" required="" label-name="Father Nationality"  id="father_nationality" >
                    <option value="">Select Country</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option <?= ($counrty->code == $apply_details[0]->father_nationality) ? 'selected=""' : '' ?> value="<?= $counrty->code ?>" title="<?= $counrty->name ?>"> <?= $counrty->name ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="father_prenationality" class="col-sm-4">Father Pre Nationality</label>
            <div class="col-sm-7">
                <select name="father_prenationality" class="form-control" id="father_prenationality" >
                    <option value="">Select Country</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option <?= ($counrty->code == $apply_details[0]->father_prenationality) ? 'selected=""' : '' ?> value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fatherbirthplace" class="col-sm-4 require">Father Birth Place</label>
            <div class="col-sm-7">
                <input type="text" value="<?= $apply_details[0]->father_name; ?>" class="form-control" name="fatherbirthplace" id="fatherbirthplace" placeholder="Father Birth Place">
            </div>
        </div>
        <div class="form-group row">
            <label for="father_country" class="col-sm-4">Father Country</label>
            <div class="col-sm-7">
                <select name="father_country" class="form-control" id="father_country" data-parsley-required="" >
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option <?= ($counrty->code == $apply_details[0]->father_country) ? 'selected=""' : '' ?> value="<?= $counrty->code ?>" title="<?= $counrty->name ?>"><?= $counrty->name ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>	
        <h2>Mother's Details</h2>				
        <div class="form-group row">
            <label for="mother_name" class="col-sm-4 require">Mother Name</label>
            <div class="col-sm-7">
                <input type="text" required="" label-name="Mother Name" value="<?= $apply_details[0]->father_name; ?>" class="form-control" name="mother_name" id="mother_name" placeholder="Mother Name">
            </div>
        </div>				
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Mother Nationality</label>
            <div class="col-sm-7">
                <select name="mothernationality" class="form-control" id="mothernationality" data-parsley-required="" >
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Mother Pre Nationality</label>
            <div class="col-sm-7">
                <select name="motherprenationality" class="form-control" id="motherprenationality" data-parsley-required="" >
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Mother Birth Place*</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="motherbirthplace" id="inputEmail3" placeholder="Father Birth Place">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Mother Country</label>
            <div class="col-sm-7">
                <select name="mothercountry" class="form-control" id="mothercountry" data-parsley-required="" >
                    <option value="">Select Country...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>	
        <hr>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Applicant's Marital Status *</label>
            <div class="col-sm-7">
                <select name="maritalstatus" class="form-control" id="maritalstatus" onchange="maritalStatus(this.value)">
                    <option value="">Select One</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried" selected="selected">Single</option>

                </select>
            </div>
        </div>
        <!--------------------spouse Form ------------------------------------>	
        <div id="spouse_form" style="display: none;">
            <h2>Spouse's Details</h2>				
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Spouse Name*</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="spousename" id="inputEmail3" placeholder="Spouse Name">
                </div>
            </div>				

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Spouse Nationality</label>
                <div class="col-sm-7">
                    <select name="spousenationality" class="form-control" id="spousenationality" data-parsley-required="" >
                        <option value="">Select Country...</option>
                        <?php foreach ($getCounrty as $counrty) { ?>
                            <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Spouse Pre Nationality</label>
                <div class="col-sm-7">
                    <select name="spouseprenationality" class="form-control" id="spouseprenationality" data-parsley-required="" >
                        <option value="">Select Country...</option>
                        <?php foreach ($getCounrty as $counrty) { ?>
                            <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Spouse Birth Place*</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="spousebirthplace" id="inputEmail3" placeholder="Father Birth Place">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Spouse Country</label>
                <div class="col-sm-7">
                    <select name="spousecountry" class="form-control" id="spousecountry" data-parsley-required="" >
                        <option value="">Select Country...</option>
                        <?php foreach ($getCounrty as $counrty) { ?>
                            <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>	
        </div>
        <!--------------------spouse Form END------------------------------------>					
        <div class="form-group row" >
            <label for="inputPassword3" class="col-sm-12 col-form-label">Were your Grandfather/ Grandmother (paternal/maternal) Pakistan Nationals or Belong to Pakistan held area.</label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="grand_pak" id="grand_pak" checked="checked" value="yes"> YES
                </label>
                <label class="radio-inline">
                    <input type="radio" name="grand_pak" id="grand_pak"  value="no"> NO
                </label>
            </div>
        </div>

        <div class="form-group row" id="pak_details">
            <label for="inputEmail3" class="col-sm-4 col-form-label">If Yes, give details</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="passportno" name="pakistan_nationality_detail"  >
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Profession / Occupation Details of Applicant </div>				
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Present Occupation *</label>
            <div class="col-sm-7">
                <select name="acquire_nationality" class="form-control" id="passportType" onchange="maritalStatus(this.value)">
                    <option value="" selected="selected">Select......</option>

                    <option value="AIR FORCE"> AIR FORCE</option>
                    <option value="BUSINESS PERSON"> BUSINESS PERSON</option>
                    <option value="CAMERAMAN"> CAMERAMAN</option>
                    <option value="CHARITY/SOCIAL WORKER"> CHARITY/SOCIAL WORKER</option>
                    <option value="CHARTERED ACCOUNTANT"> CHARTERED ACCOUNTANT</option>
                    <option value="COLLEGE/UNIVERSITY TEACHER"> COLLEGE/UNIVERSITY TEACHER
                    </option>
                    <option value="DIPLOMAT"> DIPLOMAT</option>
                    <option value="DOCTOR"> DOCTOR</option>
                    <option value="ENGINEER"> ENGINEER</option>
                    <option value="FILM PRODUCER"> FILM PRODUCER</option>
                    <option value="GOVERNMENT SERVICE"> GOVERNMENT SERVICE</option>
                    <option value="HOUSE WIFE"> HOUSE WIFE</option>
                    <option value="JOURNALIST"> JOURNALIST</option>
                    <option value="LABOUR"> LABOUR</option>
                    <option value="LAWYER"> LAWYER</option>
                    <option value="MEDIA"> MEDIA</option>
                    <option value="MILITARY "> MILITARY</option>
                    <option value="MISSIONARY"> MISSIONARY</option>
                    <option value="NAVY"> NAVY</option>
                    <option value="NEWS BROADCASTER"> NEWS BROADCASTER</option>
                    <option value="OFFICIAL"> OFFICIAL</option>
                    <option value="POLICE"> POLICE</option>
                    <option value="PRESS"> PRESS</option>
                    <option value="PRIVATE SERVICE"> PRIVATE SERVICE</option>
                    <option value="PUBLISHER"> PUBLISHER</option>
                    <option value="REPORTER"> REPORTER</option>
                    <option value="RESEARCHER"> RESEARCHER</option>
                    <option value="RETIRED"> RETIRED</option>
                    <option value="SEA MAN"> SEA MAN</option>
                    <option value="SELF EMPLOYED/ FREELANCER"> SELF EMPLOYED/ FREELANCER
                    </option>
                    <option value="STUDENT"> STUDENT</option>
                    <option value="TRADER"> TRADER</option>
                    <option value="TV PRODUCER"> TV PRODUCER</option>
                    <option value="UN-EMPLOYED"> UN-EMPLOYED</option>
                    <option value="UN OFFICIAL"> UN OFFICIAL</option>
                    <option value="WORKER"> WORKER</option>
                    <option value="WRITER"> WRITER</option>
                    <option value="OTHERS" id="otherOccuText"> OTHERS</option>

                </select>
            </div>
        </div>				
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Employer Name/business*</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="Employer_or_business" name="Employer_or_business" placeholder="Employer Name/business">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Designation *</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Place of Issue">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Address*</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="baddress" name="baddress*" placeholder="Place of Issue">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Phone*</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="bPhone" name="bPhone" placeholder="Phone">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Past Occupation, if any</label>
            <div class="col-sm-7">
                <select name="poccupation" class="form-control" id="poccupation" >
                    <option value="" selected="selected">Select......</option>

                    <option value="AIR FORCE"> AIR FORCE</option>
                    <option value="BUSINESS PERSON"> BUSINESS PERSON</option>
                    <option value="CAMERAMAN"> CAMERAMAN</option>
                    <option value="CHARITY/SOCIAL WORKER"> CHARITY/SOCIAL WORKER</option>
                    <option value="CHARTERED ACCOUNTANT"> CHARTERED ACCOUNTANT</option>
                    <option value="COLLEGE/UNIVERSITY TEACHER"> COLLEGE/UNIVERSITY TEACHER
                    </option>
                    <option value="DIPLOMAT"> DIPLOMAT</option>
                    <option value="DOCTOR"> DOCTOR</option>
                    <option value="ENGINEER"> ENGINEER</option>
                    <option value="FILM PRODUCER"> FILM PRODUCER</option>
                    <option value="GOVERNMENT SERVICE"> GOVERNMENT SERVICE</option>
                    <option value="HOUSE WIFE"> HOUSE WIFE</option>
                    <option value="JOURNALIST"> JOURNALIST</option>
                    <option value="LABOUR"> LABOUR</option>
                    <option value="LAWYER"> LAWYER</option>
                    <option value="MEDIA"> MEDIA</option>
                    <option value="MILITARY "> MILITARY</option>
                    <option value="MISSIONARY"> MISSIONARY</option>
                    <option value="NAVY"> NAVY</option>
                    <option value="NEWS BROADCASTER"> NEWS BROADCASTER</option>
                    <option value="OFFICIAL"> OFFICIAL</option>
                    <option value="POLICE"> POLICE</option>
                    <option value="PRESS"> PRESS</option>
                    <option value="PRIVATE SERVICE"> PRIVATE SERVICE</option>
                    <option value="PUBLISHER"> PUBLISHER</option>
                    <option value="REPORTER"> REPORTER</option>
                    <option value="RESEARCHER"> RESEARCHER</option>
                    <option value="RETIRED"> RETIRED</option>
                    <option value="SEA MAN"> SEA MAN</option>
                    <option value="SELF EMPLOYED/ FREELANCER"> SELF EMPLOYED/ FREELANCER
                    </option>
                    <option value="STUDENT"> STUDENT</option>
                    <option value="TRADER"> TRADER</option>
                    <option value="TV PRODUCER"> TV PRODUCER</option>
                    <option value="UN-EMPLOYED"> UN-EMPLOYED</option>
                    <option value="UN OFFICIAL"> UN OFFICIAL</option>
                    <option value="WORKER"> WORKER</option>
                    <option value="WRITER"> WRITER</option>
                    <option value="OTHERS" id="otherOccuText"> OTHERS</option>

                </select>
            </div>
        </div>
        <div class="form-group row">				
            <label for="inputEmail3" class="col-sm-7 col-form-label">Are/were you in a Military/Semi-Military/Police/Security. Organization? Yes / No </label>
            <div class="col-sm-4">
                <label class="radio-inline">
                    <input type="radio" name="military" id="inlineRadio1" value="yes"> YES
                </label>
                <label class="radio-inline">
                    <input type="radio" name="military" id="inlineRadio2" checked="checked" value="no"> NO
                </label>
            </div>
        </div>
        <!--------------------Military Form ------------------------------------>	
        <div id="military_form" style="display: none;">

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Organisation*</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="morganisation" id="morganisation" placeholder="">
                </div>
            </div>				

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Designation</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="mdesignation" id="mdesignation" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Rank</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="rank" id="rank" >
                </div>
            </div>				

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Place of Posting</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="posting" id="posting" >
                </div>
            </div>
        </div>
        <!--------------------Military Form END------------------------------------>	 		



        <div class="form-group row">
            <div class="offset-sm-2 col-sm-5">
                <input type="submit" class="btn btn-primary" name="visa_step3" value="Save and Continue" />
            </div>
            <div class="offset-sm-2 col-sm-5">
                <input type="submit" class="btn btn-primary" name="visa_step3_exit" value="Save and Temporarily Exit" />
            </div>
        </div>
    </form>
</div>


<script>



</script>

