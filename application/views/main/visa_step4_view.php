<div><h4>Application Type  :  <?= $apply_details[0]->app_type; ?></h4>
    <h4>Application NO : <?= strtoupper($this->session->userdata('application_id')); ?></h4>
</div>
<div class="p10">
    <form method="post" class="form-horizontal" action="" name="step4Form" id="step4Form" enctype="multipart/form-data">
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Details of Visa Sought </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-4 require">Type of visa*</label>
            <div class="col-sm-6">e-Tourist Visa</div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4">Duration of Visa (in Days)</label>
            <div class="col-sm-6">
                <input type="hidden" class="form-control" name="applicationid" id="applicationid" value="<?= $this->session->userdata('application_id'); ?>" >
                <input type="text" class="form-control" name="visa_day" id="" value="30" readonly >
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">No. of Entries</label>
            <div class="col-sm-6">
                <select required="" name="passportType" name="entries_no" class="form-control" id="entries_no"><option value=" Single" title="Single">Single</option></select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Purpose of Visit</label>
            <div class="col-sm-6">
                <select name="PurposeVisit" required="" class="form-control" id="passportType">
                    <option value="">Select</option>
                    <option <?= ($apply_details[0]->purpose_of_visit == 'Business') ? 'selected=""' : '' ?> value="Business" title="Business"> Business</option>
                    <option <?= ($apply_details[0]->purpose_of_visit == 'Medical Treatement of Self') ? 'selected=""' : '' ?> value="Medical Treatement of Self" title="Medical Treatement of Self"> Medical Treatement of Self </option>
                    <option <?= ($apply_details[0]->purpose_of_visit == 'Meeting friends/relatives') ? 'selected=""' : '' ?> value="Meeting friends/relatives" title="Meeting friends/relatives"> Meeting friends/relatives </option>
                    <option <?= ($apply_details[0]->purpose_of_visit == 'Tourism') ? 'selected=""' : '' ?> value="Tourism" title="Tourism"> Tourism</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="visa_type" class="col-sm-4 require">Application Type</label>
            <div class="col-sm-6">
                <select name="visa_type" required="" label-name="Application Type" id="visa_type" class="form-control">
                    <option value="">Select</option>
                    <option <?= ($apply_details[0]->visa_type == 'normal') ? 'selected=""' : '' ?> value="normal">Normal Processing (Visa Delivery Time 4 to 5 Business Days)</option>
                    <option <?= ($apply_details[0]->visa_type == 'urgent') ? 'selected=""' : '' ?> value="urgent">Urgent Processing (Visa Delivery Time 12 To 16 Business Hours)</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 require">Expected Date journey</label>
            <div class="col-sm-6">
                <input type="text" required="" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="dateofjourney" id="dob" placeholder="Expected Date journey" value="<?= get_date($apply_details[0]->dateofjourney, 'Y-m-d', 'd/m/Y') ?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4">Port of Arrival in India</label>
            <div class="col-sm-6"><?= $apply_details[0]->portofarrival; ?></div>
        </div>
        <div class="form-group row">
            <label for="port_of_exit" class="col-sm-4 require">Expected Port of Exit from India</label>
            <div class="col-sm-6">
                <select name="port_of_exit" required="" label-name="Expected Port of Exit from India" class="form-control" id="passportType">
                    <option value="">Select</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'AHMEDABAD') ? 'selected=""' : '' ?> value="AHMEDABAD">AHMEDABAD</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'AMRITSAR') ? 'selected=""' : '' ?> value="AMRITSAR">AMRITSAR</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'BENGALURU AIRPORT') ? 'selected=""' : '' ?> value="BENGALURU AIRPORT">BENGALURU AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'CHENNAI AIRPORT') ? 'selected=""' : '' ?> value="CHENNAI AIRPORT">CHENNAI AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'COCHIN AIRPORT') ? 'selected=""' : '' ?> value="COCHIN AIRPORT">COCHIN AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'DELHI AIRPORT') ? 'selected=""' : '' ?> value="DELHI AIRPORT">DELHI AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'GAYA') ? 'selected=""' : '' ?> value="GAYA">GAYA</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'GOA AIRPORT') ? 'selected=""' : '' ?> value="GOA AIRPORT">GOA AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'HYDERABAD AIRPORT') ? 'selected=""' : '' ?> value="HYDERABAD AIRPORT">HYDERABAD AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'JAIPUR') ? 'selected=""' : '' ?> value="JAIPUR">JAIPUR</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'KOLKATA AIRPORT') ? 'selected=""' : '' ?> value="KOLKATA AIRPORT">KOLKATA AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'LUCKNOW') ? 'selected=""' : '' ?> value="LUCKNOW">LUCKNOW</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'MUMBAI AIRPORT') ? 'selected=""' : '' ?> value="MUMBAI AIRPORT">MUMBAI AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'TIRCHY') ? 'selected=""' : '' ?> value="TIRCHY">TIRCHY</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'TRIVANDRUM AIRPORT') ? 'selected=""' : '' ?> value="TRIVANDRUM AIRPORT">TRIVANDRUM AIRPORT</option>
                    <option <?= ($apply_details[0]->port_of_exit == 'VARANASI') ? 'selected=""' : '' ?> value="VARANASI">VARANASI</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Places likely to be visited</label>
            <div class="col-sm-6">
                <input type="text" name="visitedplace" value="<?= $apply_details[0]->places_likely_to_visit; ?>" required="" class="form-control" id="" placeholder="visited Place">
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;" >Previous Visa/Currently valid Visa Details </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4">Have you ever visited India before?</label>
            <div class="col-sm-7">
                <label class="radio-inline">
                    <input type="radio" <?= ($apply_details[0]->visited_India == 'yes') ? 'checked=""' : '' ?> name="visitedbefore" id="inlineRadio1" value="yes"> YES
                </label>
                <label class="radio-inline">
                    <input type="radio" name="visitedbefore" id="inlineRadio2" <?= (($apply_details[0]->visited_India == 'no') || (empty($apply_details[0]->visited_India))) ? 'checked=""' : '' ?>  value="no"> NO
                </label>
            </div>
        </div>
        <div id="visitedbefore_form" style="display: <?= (($apply_details[0]->visited_India == 'no') || (empty($apply_details[0]->visited_India))) ? 'none' : 'block' ?>;">
            <div class="form-group row">
                <label for="" class="col-sm-4 ">Address </label>
                <div class="col-sm-7">
                    <textarea class="form-control" name="visitedaddress"><?= $apply_details[0]->visited_address ?></textarea>
                </div>
            </div>				
            <div class="form-group row">
                <label for="" class="col-sm-4 require">Cities previously visited in India</label>
                <div class="col-sm-7">
                    <textarea class="form-control" required="" name="visitedcities"><?= $apply_details[0]->previously_visited_city ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="dtp_input2" class="col-md-4 require">Last Indian Visa No/Currently valid Indian Visa No.</label>
                <div class="col-sm-6">
                    <input type="text" name="visitedvisano" required="" class="form-control" value="<?= $apply_details[0]->last_Indian_visa_no ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-4 require">Type of Visa</label>
                <div class="col-sm-7">
                    <?php
                    $visitedvisatype = array(
                        '' => 'Select Type of Visa',
                        'ART SURROGACY VISA' => 'ART SURROGACY VISA',
                        'BUSINESS VISA' => 'BUSINESS VISA',
                        'BUSINESS VISA DEPENDENTS' => 'BUSINESS VISA DEPENDENTS',
                        'BUSINESS VISA TRANSFER' => 'BUSINESS VISA TRANSFER',
                        'CONFERENCE/SEMINARS VISA' => 'CONFERENCE/SEMINARS VISA',
                        'DIPLOMATIC DEPENDENT VISA' => 'DIPLOMATIC DEPENDENT VISA',
                        'DIPLOMATIC VISA' => 'DIPLOMATIC VISA',
                        'EMPLOYMENT VISA' => 'EMPLOYMENT VISA',
                        'EMPLOYMENT VISA DEPENDENTS' => 'EMPLOYMENT VISA DEPENDENTS',
                        'EMPLOYMENT VISA TRANSFER' => 'EMPLOYMENT VISA TRANSFER',
                        'ENTRY VISA' => 'ENTRY VISA',
                        'ENTRY VISA TRANSFER' => 'ENTRY VISA TRANSFER',
                        'JOURNALIST VISA' => 'JOURNALIST VISA',
                        'MEDICAL ATTENDANT' => 'MEDICAL ATTENDANT',
                        'MEDICAL  VISA' => 'MEDICAL  VISA',
                        'MEDICAL VISA TRANSFER' => 'MEDICAL VISA TRANSFER',
                        'MISSIONARY VISA' => 'MISSIONARY VISA',
                        'MOUNTAINEERING VISA' => 'MOUNTAINEERING VISA',
                        'OFFICIAL DEPENDENT VISA' => 'OFFICIAL DEPENDENT VISA',
                        'OFFICIAL VISA' => 'OFFICIAL VISA',
                        'PILGRIMES VISA' => 'PILGRIMES VISA',
                        'PROJECT VISA' => 'PROJECT VISA',
                        'RESEARCH VISA' => 'RESEARCH VISA',
                        'RESEARCH VISA DEPENDENTS' => 'RESEARCH VISA DEPENDENTS',
                        'RESEARCH VISA TRANSFER' => 'RESEARCH VISA TRANSFER',
                        'SOUTH ASIAN UNIVERSITY' => 'SOUTH ASIAN UNIVERSITY',
                        'SPORTS' => 'SPORTS',
                        'STUDENT VISA' => 'STUDENT VISA',
                        'STUDENT VISA DEPENDENTS' => 'STUDENT VISA DEPENDENTS',
                        'STUDENT VISA TRANSFER' => 'STUDENT VISA TRANSFER',
                        'TOURIST VISA' => 'TOURIST VISA',
                        'TOURIST VISA TRANSFER' => 'TOURIST VISA TRANSFER',
                        'TRANSIT VISA' => 'TRANSIT VISA',
                        'UN OFFICIAL' => 'UN OFFICIAL',
                        'VISIT VISA' => 'VISIT VISA'
                    );
                    echo form_dropdown('visitedvisatype', $visitedvisatype, $apply_details[0]->visited_type_Visa, ['id' => 'occupation', 'class' => 'form-control', 'required' => 'required', 'label-name' => 'Type of Visa']);
                    ?>  
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 require">Place of Issue</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?= $apply_details[0]->visited_visa_issue_place ?>" name="visitedplaceissue" >
                </div>
            </div>
            <div class="form-group">
                <label for="dtp_input2" class="col-md-4 require">Date of Issue</label>
                <div class="col-sm-6">
                    <input type="text" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" value="<?= get_date($apply_details[0]->visited_visa_issue_date, 'Y-m-d', 'd/m/Y') ?>" name="visitedissuedate" id="visitedissuedate" placeholder="Date of Birth" >
                </div>
            </div>
        </div> 

        <div class="form-group row">
            <label for="" class="col-sm-5 ">Has permission to visit or to extend stay in India previously been refused? </label>
            <div class="col-sm-4">
                <label class="radio-inline">
                    <input type="radio" name="extendstay" <?= (!empty($apply_details[0]->extend_visa_details)) ? 'checked=""' : '' ?> value="yes"> YES
                </label>
                <label class="radio-inline">
                    <input type="radio" name="extendstay" id="inlineRadio2" <?= (empty($apply_details[0]->extend_visa_details)) ? 'checked=""' : '' ?> value="no"> NO
                </label>
            </div>
        </div>
        <div class="form-group row" id="extendstaydetails" style="display: <?= (!empty($apply_details[0]->extend_visa_details)) ? 'block' : 'none' ?>;">
            <label for="" class="col-sm-5 ">If so, when and by whom (Mention Control No. and date also) </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $apply_details[0]->extend_visa_details ?>" name="extendstaydetails" id="" >
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Other Information </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 ">Countries Visited in Last 10 years </label>
            <div class="col-sm-7">
                <textarea class="form-control" name="visited10Countries"><?= $apply_details[0]->visited10Countries ?></textarea>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Other Information </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Reference Name in India</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" value="<?= $apply_details[0]->ref_name ?>" required="" id="" name="refindia" >
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Address</label>
            <div class="col-sm-7">
                <textarea class="form-control" required="" name="refaddress"><?= $apply_details[0]->ref_address ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Phone </label>
            <div class="col-sm-7">
                <input type="number" min="0" required="" value="<?= $apply_details[0]->ref_phone ?>" class="form-control" id="" name="ref_phone" >
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Reference Name in Home Country</label>
            <div class="col-sm-7">
                <input type="text" required="" value="<?= $apply_details[0]->ref_home_name ?>" class="form-control" id="" name="ref_home" >
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Address</label>
            <div class="col-sm-7">
                <input type="text" required="" value="<?= $apply_details[0]->ref_home_address ?>" class="form-control" id="" name="ref_homeaddress" >
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Phone</label>
            <div class="col-sm-7">
                <input type="text" required="" value="<?= $apply_details[0]->ref_home_phone ?>" class="form-control" id="" name="ref_homephone" >
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Image Upload</div>
        <div class="form-group row">
            <label for="" class="col-sm-4 require">Image</label>
            <div class="col-sm-7">
                <?= $apply_details[0]->image ?>
                <!--$img = $this->util->fileUpload(APPLICATION_IMG, 'image', $app_id, 'jpeg|jpg|png');-->

                <?php if (!empty($apply_details[0]->image)) : ?>

                    <div class="show_images">

                    </div>
                <?php else : ?>
                    <input type="file" required="" class="form-control view_photo" id="file" name="image" >
                <?php endif; ?>



            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-8 col-sm-4 text-right">
                <input type="submit" class="btn btn-primary" name="step4" value="Continue" />
            </div>
        </div>
    </form>
</div>
