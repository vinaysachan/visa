<div class="p10">
    <form method="post" class="form-horizontal" action="" >
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
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="fname" id="inputEmail3" placeholder="First Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="lname" id="inputEmail3" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Passport Type</label>
            <div class="col-sm-6">
                <select name="passportType" name="passportno" class="form-control" id="passportType">
                    <option value="Ordinary Passport" title="Ordinary Passport"> Ordinary
                        Passport
                    </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Nationality</label>
            <div class="col-sm-6">
                <select name="nationality" class="form-control" id="nationality" data-parsley-required="" onchange="ukSelect(value)">
                    <option value="">Select Nationality...</option>
                    <?php foreach ($getCounrty as $counrty) { ?>
                        <option value="<?= $counrty->code; ?>" title="<?= $counrty->name; ?>"> <?= $counrty->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Port Of Arrival*</label>
            <div class="col-sm-6">
                <select name="portofarrival" class="form-control" id="passportType">
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
            <label for="inputEmail3" class="col-sm-4 col-form-label">Passport No</label>
            <div class="col-sm-6">
                <input type="text" name="passportno" class="form-control" id="inputEmail3" placeholder="First Name">
            </div>
        </div>
        <div class="form-group">
            <label for="dtp_input2" class="col-md-4 control-label">Date of Birth</label>
            <div class="col-sm-6">
                <input type="text" data-max_date="<?= date('Y,m,d', strtotime("-0 year")) ?>" readonly="" class="form-control date_picker" name="dob" id="dob" placeholder="Date of Birth" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="First Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Re-email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputEmail3" placeholder="First Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Captcha</label>

        </div>
        <div class="form-group row">
            <div class="col-sm-offset-8 col-sm-4 text-right">
                <input type="submit" class="btn btn-primary" name="step1" value="Continue" />
            </div>
        </div>
    </form>
</div>