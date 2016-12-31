<div class="p10">
    <form name="applyVisaFrm" id="applyVisaFrm" method="post" class="form-horizontal" action="<?= base_url('apply_visa') ?>" >
        <div class="form-group">
            <label for="visaType" class="col-sm-4 require">Application Type </label>
            <div class="col-sm-6">
                <select name="visaType" id="visaType" required="" label-name="Application Type" class="form-control">
                    <option value="">Select</option>
                    <option value="normal" selected="">Normal Processing (Visa Delivery Time 4 to 5 Business Days)</option>
                    <option value="urgent">Urgent Processing (Visa Delivery Time 12 To 16 Business Hours)</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-4 require">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="fname" required="" label-name="First Name" placeholder="First Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="mname" class="col-sm-4">Middle Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="mname" placeholder="Middle Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-4 require">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="lname" required="Last Name" label-name="Last Name" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="passportType" class="col-sm-4 require">Passport Type</label>
            <div class="col-sm-6">
                <select name="passportType" required="" label-name="Passport Type" name="passportno" class="form-control" id="passportType">
                    <option value="Ordinary Passport" title="Ordinary Passport">Ordinary Passport</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nationality" class="col-sm-4 require">Nationality</label>
            <div class="col-sm-6">
                <select name="nationality" required="" label-name="Nationality" class="form-control" id="nationality">
                    <option value="">Select Nationality...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="portofarrival" class="col-sm-4 require">Port Of Arrival</label>
            <div class="col-sm-6">
                <select name="portofarrival" required="" label-name="Port Of Arrival" class="form-control" id="portofarrival">
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
            <label for="passportno" class="col-sm-4 require">Passport No</label>
            <div class="col-sm-6">
                <input type="text" name="passportno" required="" label-name="Passport No" class="form-control" id="passportno" placeholder="Passport No">
            </div>
        </div>
        <div class="form-group">
            <label for="dob" class="col-sm-4 require">Date of Birth</label>
            <div class="col-sm-6">
                <input type="text" required="" label-name="Date of Birth" data-max_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="dob" id="dob" placeholder="Date of Birth" >
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 require">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" required="" label-name="Email" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="re_email" class="col-sm-4 require">Re-enter Email ID </label>
            <div class="col-sm-6">
                <input name="re_email" type="text" required="" label-name="Email" class="form-control" placeholder="Re-Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-4 require">Telephone Number</label>
            <div class="col-sm-6">
                <input name="phone" type="text" required="" label-name="Telephone Number" class="form-control" placeholder="Telephone Number">
            </div>
        </div>
        <div class="form-group">
            <label for="dob" class="col-sm-4 require">Expected Date of Arrival</label>
            <div class="col-sm-6">
                <input type="text" required="" label-name="Expected Date of Arrival" data-min_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="date_of_arrival" id="date_of_arrival" placeholder="Expected Date of Arrival" >
            </div>
        </div>
        <div class="form-group row">
            <label for="v_code" class="col-sm-4 col-form-label">Verification Code</label>
            <div class="col-sm-6">
                <input required="" name="v_code" id="v_code" minlength="4" type="text" maxlength="4" class="form-control" label-name="Please enter Verification Code" placeholder="Please enter Verification Code"><br/>
                <span class="captcha"></span>
                <a href="javascript:void(0)" class="captcha_new"><i class="fa fa-refresh mr10"></i>Not readable? Change text.</a>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-8 col-sm-4 text-right">
                <button type="submit" class="btn btn-primary" name="step1" value="Continue">Continue</button>
            </div>
        </div>
    </form>
</div>