<div><h4>Application Type  :  <?=$apply_details[0]->app_type;?></h4>
                                        <h4>Application NO : <?=strtoupper($this->session->userdata('application_id'));?></h4>
</div>
<div class="p10">
    <form method="post" class="form-horizontal" action=""  enctype="multipart/form-data">
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Details of Visa Sought </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-4 require">Type of visa*</label>
            <div class="col-sm-6">
                 e-Tourist Visa
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Duration of Visa (in Days) *</label>
            <div class="col-sm-6">
                <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?=$this->session->userdata('application_id');?>" >
                <input type="text" class="form-control" name="visa_day" id="inputEmail3" value="30" readonly >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">No. of Entries *</label>
            <div class="col-sm-6">
                <select name="passportType" name="entries_no" class="form-control" id="entries_no">
                    <option value=" Single" title="Single"> Single  </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Purpose of Visit*</label>
            <div class="col-sm-6">
                <select name="PurposeVisit" name="passportno" class="form-control" id="passportType">
                    <option value="" selected="selected">Select......</option>
                                            <option value="Business" title="Business"> Business</option>
                                            <option value="Medical Treatement of Self" title="Medical Treatement of Self"> Medical Treatement of Self
                                            </option>
                                            <option value="Meeting friends/relatives" title="Meeting friends/relatives">
                                                Meeting friends/relatives
                                            </option>
                                            <option value="Tourism" title="Tourism" selected=""> Tourism</option>
                </select>
            </div>
        </div>
         <div class="form-group">
            <label for="visaType" class="col-sm-4 require">Application Type </label>
            <div class="col-sm-6">
                <select name="visaType" id="visaType" class="form-control">
                    <option value="">Select</option>
                    <option value="normal" selected="">Normal Processing (Visa Delivery Time 4 to 5 Business Days)</option>
                    <option value="urgent">Urgent Processing (Visa Delivery Time 12 To 16 Business Hours)</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 control-label">Expected Date journey *</label>
            <div class="col-sm-6">
                <input type="text" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="dateofjourney" id="dob" placeholder="Date of Birth" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Port of Arrival in India *</label>
            <div class="col-sm-6">
                 <?=$apply_details[0]->portofarrival;?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Expected Port of Exit from India *</label>
            <div class="col-sm-6">
                <select name="portofexit" class="form-control" id="passportType">
                    <option value="" selected="selected">Select ...</option>
                    <option value="AHMEDABAD">AHMEDABAD</option>
                    <option value="AMRITSAR">AMRITSAR</option>
                    <option value="BENGALURU AIRPORT">BENGALURU AIRPORT</option>
                    <option value="CHENNAI AIRPORT">CHENNAI AIRPORT</option>
                    <option value="COCHIN AIRPORT">COCHIN AIRPORT</option>
                    <option value="DELHI AIRPORT">DELHI AIRPORT</option>
                    <option value="GAYA">GAYA</option>
                    <option value="GOA AIRPORT">GOA AIRPORT</option>
                    <option value="HYDERABAD AIRPORT">HYDERABAD AIRPORT</option>
                    <option value="JAIPUR">JAIPUR</option>
                    <option value="KOLKATA AIRPORT">KOLKATA AIRPORT</option>
                    <option value="LUCKNOW">LUCKNOW</option>
                    <option value="MUMBAI AIRPORT">MUMBAI AIRPORT</option>
                    <option value="TIRCHY">TIRCHY</option>
                    <option value="TRIVANDRUM AIRPORT">TRIVANDRUM AIRPORT</option>
                    <option value="VARANASI">VARANASI</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Places likely to be visited *</label>
            <div class="col-sm-6">
                <input type="text" name="visitedplace" class="form-control" id="inputEmail3" placeholder="visited Place">
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;" >Previous Visa/Currently valid Visa Details </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 control-label">Have you ever visited India before?</label>
            <div class="col-sm-7">
               <label class="radio-inline">
                  <input type="radio" name="visitedbefore" id="inlineRadio1" value="yes"> YES
                </label>
                <label class="radio-inline">
                  <input type="radio" name="visitedbefore" id="inlineRadio2" checked="checked" value="no"> NO
                </label>
      </div>
        </div>
        <!--------------------visitedbefore Form ------------------------------------>				
	<div id="visitedbefore_form" style="display: none;">
		<div class="form-group row">
		  <label for="inputPassword3" class="col-sm-4 col-form-label">Address *</label>
		  <div class="col-sm-7">
              <textarea class="form-control" name="visitedaddress"></textarea>
		  </div>
		</div>				
		<div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Cities previously visited in India *</label>
		  <div class="col-sm-7">
			<textarea class="form-control" name="visitedcities"></textarea>
		  </div>
        </div>
		<div class="form-group">
			<label for="dtp_input2" class="col-md-4 control-label">Last Indian Visa No/Currently valid Indian Visa No. *</label>
			<div class="col-sm-6">
                <input type="text" name="visitedvisano" class="form-control" id="inputEmail3" >
            </div>
    	</div>
		
		<div class="form-group row">
		  <label for="inputPassword3" class="col-sm-4 col-form-label">Type of Visa *</label>
		  <div class="col-sm-7">
			<select name="visitedvisatype" class="form-control" id="visitedvisatype" data-parsley-required="" >
				<option value="" selected="selected">Select......</option>

                                            <option value="ART SURROGACY VISA"> ART SURROGACY VISA</option>
                                            <option value="BUSINESS VISA"> BUSINESS VISA</option>
                                            <option value="BUSINESS VISA DEPENDENTS"> BUSINESS VISA DEPENDENTS</option>
                                            <option value="BUSINESS VISA TRANSFER"> BUSINESS VISA TRANSFER</option>
                                            <option value="CONFERENCE/SEMINARS VISA"> CONFERENCE/SEMINARS VISA</option>
                                            <option value="DIPLOMATIC DEPENDENT VISA"> DIPLOMATIC DEPENDENT VISA
                                            </option>
                                            <option value="DIPLOMATIC VISA"> DIPLOMATIC VISA</option>
                                            <option value="EMPLOYMENT  VISA"> EMPLOYMENT VISA</option>
                                            <option value="EMPLOYMENT VISA DEPENDENTS"> EMPLOYMENT VISA DEPENDENTS
                                            </option>
                                            <option value="EMPLOYMENT VISA TRANSFER"> EMPLOYMENT VISA TRANSFER</option>
                                            <option value="ENTRY VISA"> ENTRY VISA</option>
                                            <option value="ENTRY VISA TRANSFER"> ENTRY VISA TRANSFER</option>
                                            <option value="JOURNALIST VISA"> JOURNALIST VISA</option>
                                            <option value="MEDICAL ATTENDANT"> MEDICAL ATTENDANT</option>
                                            <option value="MEDICAL  VISA"> MEDICAL VISA</option>
                                            <option value="MEDICAL VISA TRANSFER"> MEDICAL VISA TRANSFER</option>
                                            <option value="MISSIONARY VISA"> MISSIONARY VISA</option>
                                            <option value="MOUNTAINEERING VISA"> MOUNTAINEERING VISA</option>
                                            <option value="OFFICIAL DEPENDENT VISA"> OFFICIAL DEPENDENT VISA</option>
                                            <option value="OFFICIAL VISA"> OFFICIAL VISA</option>
                                            <option value="PILGRIMES VISA"> PILGRIMES VISA</option>
                                            <option value="PROJECT VISA"> PROJECT VISA</option>
                                            <option value="RESEARCH VISA"> RESEARCH VISA</option>
                                            <option value="RESEARCH VISA DEPENDENTS"> RESEARCH VISA DEPENDENTS</option>
                                            <option value="RESEARCH VISA TRANSFER"> RESEARCH VISA TRANSFER</option>
                                            <option value="SOUTH ASIAN UNIVERSITY"> SOUTH ASIAN UNIVERSITY</option>
                                            <option value="SPORTS"> SPORTS</option>
                                            <option value="STUDENT VISA"> STUDENT VISA</option>
                                            <option value="STUDENT VISA DEPENDENTS"> STUDENT VISA DEPENDENTS</option>
                                            <option value="STUDENT VISA TRANSFER"> STUDENT VISA TRANSFER</option>
                                            <option value="TOURIST VISA"> TOURIST VISA</option>
                                            <option value="TOURIST VISA TRANSFER"> TOURIST VISA TRANSFER</option>
                                            <option value="TRANSIT VISA"> TRANSIT VISA</option>
                                            <option value="UN OFFICIAL"> UN OFFICIAL</option>
                                            <option value="VISIT VISA"> VISIT VISA</option>
		   </select>
		  </div>
		</div>
        <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Place of Issue * </label>
		  <div class="col-sm-7">
			<input type="text" class="form-control" id="inputEmail3" name="visitedplaceissue" >
		  </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 control-label">Date of Issue * *</label>
            <div class="col-sm-6">
                <input type="text" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="visitedissuedate" id="dob" placeholder="Date of Birth" >
            </div>
        </div>
	</div>
	<!--------------------visitedbefore Form END------------------------------------>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-5 col-form-label">Has permission to visit or to extend stay in India previously been refused? </label>
            <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="extendstay" id="inlineRadio1" value="yes"> YES
                </label>
                <label class="radio-inline">
                  <input type="radio" name="extendstay" id="inlineRadio2" checked="checked" value="no"> NO
                </label>
            </div>
        </div>
        <div class="form-group row" id="extendstaydetails" style="display: none;">
            <label for="inputEmail3" class="col-sm-5 col-form-label">If so, when and by whom (Mention Control No. and date also) </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="extendstaydetails" id="inputEmail3" >
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Other Information </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Countries Visited in Last 10 years </label>
             <div class="col-sm-7">
			<textarea class="form-control" name="visited10Countries"></textarea>
		  </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Other Information </div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Reference Name in India* </label>
		  <div class="col-sm-7">
			<input type="text" class="form-control" id="inputEmail3" name="refindia" >
		  </div>
        </div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Address * </label>
		  <div class="col-sm-7">
			<textarea class="form-control" name="refaddress"></textarea>
		  </div>
        </div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Phone * </label>
		  <div class="col-sm-7">
			<input type="number" min="0" class="form-control" id="inputEmail3" name="ref_phone" >
		  </div>
        </div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Reference Name in Home Country * </label>
		  <div class="col-sm-7">
			<input type="text" class="form-control" id="inputEmail3" name="ref_home" >
		  </div>
        </div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Address * </label>
		  <div class="col-sm-7">
			<input type="text" class="form-control" id="inputEmail3" name="ref_homeaddress" >
		  </div>
        </div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Phone * </label>
		  <div class="col-sm-7">
			<input type="text" class="form-control" id="inputEmail3" name="ref_homephone" >
		  </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Image Upload</div>
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Image * </label>
		  <div class="col-sm-7">
			<input type="file" class="form-control view_photo" id="inputEmail3" name="image" >
		  </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-8 col-sm-4 text-right">
                <input type="submit" class="btn btn-primary" name="step4" value="Continue" />
            </div>
        </div>
    </form>
</div>
 