<div>
    <p>The applicant is requested to verify the particulars filled in the application Form.The applicant may face legal action(including refusal to enter India or deportation) in case of provision of wrong information.
        Please verify your Registration Details.   If all details are correct please Press "Verified and Continue".
        For any corrections press "Modify/Edit"</p><?= $apply_details[0]->image; ?>
    <h4>Application Type  :  <?= $apply_details[0]->app_type; ?></h4>
    <h4>Application NO : <?= strtoupper($this->session->userdata('application_id')); ?></h4>
    <img id="userPhoto" src="<?= base_url() . APPLICATION_IMG ?>/<?= $apply_details[0]->image; ?>" border="1" width="120px;" height="120px;" style="margin-left:40%">
</div>
<div class="p10">
    <form method="post" class="form-horizontal" action=""  enctype="multipart/form-data">
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Applicant Details</div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Surname</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->lname; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Name</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->fname; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Previous Surname</label>
            <div class="col-sm-6">

            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Previous Name</label>
            <div class="col-sm-6">

            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Sex</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->sex; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Marital Status</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->marital_status; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Birthdate</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->dob; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Religion</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->religion; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Place of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->birth_city; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Country of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->birth_country; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Citizenship/National Id No.</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->national_id; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Educational Qualification</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->qualification; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Visible Identification Marks</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->visible_identification_marks; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->nationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Nationality by</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->acquire_nationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 "> Previous Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->pre_nationality; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Passport Details</div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 "> Passport No</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->passport_no; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 "> Issue Date</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->pass_date_of_Issue; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Expiry Date</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->pass_date_of_expiry; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Issue Place</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->pass_place_of_Issue; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Issue of Other Passport</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ic_passport_no; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Country of Issue of Other Passport</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ic_country_of_Issue; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 "> Other Passport Issue Place</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ic_place_of_Issue; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Issue Date of Other Passport</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ic_passport_no; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Nationality Described Therein</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ic_nationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 "> Previous Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->pre_nationality; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Applicant's Address Details </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Present Address</label>
            <div class="col-sm-6">
                <p><?= $apply_details[0]->houseno; ?></p>
                <p><?= $apply_details[0]->city; ?></p>
                <p><?= $apply_details[0]->district; ?></p>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Postal/Zip Code</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->zipcode; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Mobile</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mobileno; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Email</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->email; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Family Details</div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Father Name</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->father_name; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Father Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->father_nationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Father Previous Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->father_prenationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Father Place of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->father_birth_place; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Father Country of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->father_country; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Mother Name</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mother_name; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Mother Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mother_nationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Mother Previous Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mother_prenationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Mother Place of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mother_birth_place; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Mother Country</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mother_country; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Spouse Name</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->spouse_name; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Spouse Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->spouse_nationlity; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Father Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->father_nationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Spouse Previous Nationality</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->spouse_prenationality; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Spouse Place of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->spouse_birth_place; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Spouse Country of Birth</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->spouse_birth_country; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Grandparent details yes/no</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->grand_parent_pakistan; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">If Yes, give details</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->pakistan_nationality_detail; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Profession / Occupation Details of Applicant </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Occupation</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->present_occupation; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Employee Designation</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->Employer_or_business; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Employer Name</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->designation; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Employer Address</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->address; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Employer Phone</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->prof_phone; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Previous Occupation</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->past_occupation; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Security Agency/Organisation</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->military; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Designation</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mil_designation; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Posting</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mil_place_of_posting; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Rank</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->mil_rank; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Details of Visa Sought </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Visa Type</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->app_type; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">No of Entries</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->No_ofentries; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Duration</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->durationofvisa; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Journey Date</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->expected_date_arrival; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Entry Point</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->portofarrival; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Exit Point</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->port_of_exit; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Purpose</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->purpose_of_visit; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;">Previous Visit Details </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Old Visa Issue</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->visited_India; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Old Visa Type</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->visited_type_Visa; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Old Visa No</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->last_Indian_visa_no; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Old Visa Issue Place</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->visited_visa_issue_place; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Old Visa Issue Date</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->visited_visa_issue_date; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Previous Visit Address</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->visited_address; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Visited Cities Details</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->previously_visited_city; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Countries Visited Last 10 year</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->countries_visitedlast; ?>
            </div>
        </div>
        <div class="col-md-12" style="background-color: #337ab7; color:white;"> Reference </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Name of Sponsor in India</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ref_name; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Address of Sponsor in India</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ref_address; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Phone of Sponsor in India</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ref_phone; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Name of Sponsor in Home Country</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ref_home_phone; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Address of Sponsor in Home Country</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ref_home_address; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="visaType" class="col-sm-6 ">Phone of Sponsor in Home Country</label>
            <div class="col-sm-6">
                <?= $apply_details[0]->ref_phone; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-8 col-sm-4 text-right">
                <a href="<?= base_url('main/visa_reg') ?>" class="btn btn-primary">Modify/Edit</a>
                <a href="<?= base_url('main/feepay') ?>" class="btn btn-primary">Verify/Continue</a>
            </div>
        </div>
    </form>
</div>
<style>
    .form-group label {
        text-align: left !important;
    }
</style>