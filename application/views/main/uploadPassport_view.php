<div class="box box-theme">
        <div><h2>Please upload a scanned copy of your original passport on this page. Please do not upload your digital picture on this page which you uploaded on the last page. </h2></div>
     <div>Please note down the Temporary Application ID : <span class="text-uppercase fs17 ml15"><?= $this->session->userdata('application_id'); ?></span></div>
</div>
<div class="p10">
    <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
          
         <div class="form-group row">
		  <label for="inputEmail3" class="col-sm-4 col-form-label">Image * </label>
		  <div class="col-sm-7">
			<input type="file" class="form-control view_photo" id="passport" name="passport" >
		  </div>
        </div>		


        <div class="form-group row">
            <div class="col-sm-offset-4 col-sm-3">
                <input type="submit" class="btn btn-primary" name="uploadpassport" value="Save and Continue" />
            </div>
<!--            <div class="col-sm-offset-2 col-sm-3">
                <input type="submit" class="btn btn-primary" name="step1" value="Save and Temporarily Exit" />
            </div>-->
        </div>
    </form>
	<div class="p10">
		<p>Kindly ensure that the document is as per specifications mentioned below.</p>
		<span class="red_heading text_bold" style="margin-left:24px">Document Specifications</span>
		<ul class="instructions_ul text_bold">
						 <li>

                                    - Passport Upload- Photo page of Passport containing personal details like name,date of birth, nationality , expiry date etc. to be uploaded by the applicant.

                                </li>

                                <li>

                                    - Photo page of Passport uploaded should be of the same passport whose details are provided in Passport Details section.

                                </li>

                                <li>

                                    - The application is liable to be rejected if the uploaded document is not clear and as per specification.

                                </li>

                            </ul>
	</div>
</div>