<style>
.alert {
	padding: 0px !important;
	}
	
</style>
	
<div><h4>Application Type  :  <?=$apply_details[0]->app_type;?></h4>
                                        <h4>Application NO : <?=strtoupper($this->session->userdata('application_id'));?></h4>
</div>
				<div class="p10">
                <form method="POST" >
		<div class="col-md-12" style="background-color: #337ab7; color:white;">Applicant's Address Details </div>			
					<h2>Present Address</h2>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">House No./Street*</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?=$this->session->userdata('application_id');?>" >
        <input type="text" class="form-control" name="houseno" id="houseno" value="" placeholder="House No./Street">
      </div>
    </div>
	 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Village/Town/City *</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="city" id="city"  placeholder="Name">
      </div>
    </div>
	 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">State/Province/District *</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="district" id="district"  placeholder="Name">
      </div>
    </div>
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Postal/Zip Code*</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="zipcode" id="zipcode"  placeholder="zipcode">
      </div>
    </div>
	<div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">Country</label>
      <div class="col-sm-7">
        <select name="birthofcountry" class="form-control" id="Addresscountry" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
                <?php } ?>
       </select>
      </div>
    </div> 
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Mobile No.</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="mobileno" id="inputEmail3" placeholder="mobile no">
      </div>
    </div>	
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
      <div class="col-sm-7">
       <?=$apply_details[0]->email;?>
      </div>
    </div>
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-6 col-form-label">Click Here for Same Address *</label>
      <div class="col-sm-4">
       <label class="radio-inline">
		  <input type="checkbox" name="sameAddress" id="sameAddress" value="yes" onclick="sameaddress(this.form)"> 
		  </label>
      </div>
    </div>	
	<h2>Permanent Address</h2>
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">House No./Street*</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?=$this->session->userdata('application_id');?>" >
        <input type="text" class="form-control" name="phouseno" id="phouseno" value="" placeholder="House No">
      </div>
    </div>
	 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Village/Town/City *</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="pcity" id="pcity"  placeholder="Village/Town/City">
      </div>
    </div>
	 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">State/Province/District *</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="pdistrict" id="pdistrict"  placeholder="State/Province/District">
      </div>
    </div>	
	<div class="col-md-12" style="background-color: #337ab7; color:white;">Family Details  </div>				
	<h2>Father's Details</h2>				
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">father Name*</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="fathername" id="inputEmail3" placeholder="father Name">
      </div>
    </div>				
     
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">father Nationality</label>
      <div class="col-sm-7">
        <select name="fathernationality" class="form-control" id="fathernationality" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
                <?php } ?>
       </select>
      </div>
    </div>
	<div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">father Pre Nationality</label>
      <div class="col-sm-7">
        <select name="fatherprenationality" class="form-control" id="fatherprenationality" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
                <?php } ?>
       </select>
      </div>
    </div>
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Father Birth Place*</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="fatherbirthplace" id="inputEmail3" placeholder="Father Birth Place">
      </div>
    </div>
	<div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">father Country</label>
      <div class="col-sm-7">
        <select name="fathercountry" class="form-control" id="fathercountry" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
                <?php } ?>
       </select>
      </div>
    </div>	
	<h2>Mother's Details</h2>				
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">Mother Name*</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="mothername" id="inputEmail3" placeholder="father Name">
      </div>
    </div>				
     
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">Mother Nationality</label>
      <div class="col-sm-7">
        <select name="mothernationality" class="form-control" id="mothernationality" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
                <?php } ?>
       </select>
      </div>
    </div>
	<div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">Mother Pre Nationality</label>
      <div class="col-sm-7">
        <select name="motherprenationality" class="form-control" id="motherprenationality" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
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
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
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
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
                <?php } ?>
       </select>
      </div>
    </div>
	<div class="form-group row">
      <label for="inputPassword3" class="col-sm-4 col-form-label">Spouse Pre Nationality</label>
      <div class="col-sm-7">
        <select name="spouseprenationality" class="form-control" id="spouseprenationality" data-parsley-required="" >
             <option value="">Select Country...</option>
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
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
			<?php foreach($getCounrty as $counrty) { ?>
              <option value="<?=$counrty->code;?>" title="<?=$counrty->name;?>"> <?=$counrty->name;?></option>
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
        
