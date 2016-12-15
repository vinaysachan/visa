<?php

class Operation_model extends CORE_Model {

    public function __construct() {
        parent::__construct();
    }

    public function do_Login($data) {
        try {
            $encrypt_pass = $this->util->hash_create('sha256', $data['password'], HASH_PASSWORD_KEY);
            $key = HASH_MYSQL_KEY;
            $sql = 'SELECT au.id,au.name,au.username,au.img,au.designation FROM ' . TBL_ADMIN_USER . ' au WHERE au.username = "' . $data['username'] . '" AND au.pass = AES_ENCRYPT("' . $encrypt_pass . '","' . $key . '")';
            if ($query = $this->db->query($sql)) {
                if (!empty($u = $query->result())) {
                    $this->session->set_userdata(SESSION_ADMIN, [
                        'id' => $u[0]->id,
                        'name' => $u[0]->name,
                        'username' => $u[0]->username,
                        'designation' => $u[0]->designation,
                        'img' => $u[0]->img,
                    ]);
                    return TRUE;
                }
                return FALSE;
            } else {
                throw new Exception($this->db->error()['message']);
            }
        } catch (Exception $e) {
            $this->global_model->saveErrorLogs($e);
            return FALSE;
        }
    }

    function app_step1() {
        $application = $this->input->post('nationality') . rand(1, 999999);
        $data = array(
            'app_id' => $application,
            'app_type' => $this->input->post('visaType'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'passport_type' => $this->input->post('passportType'),
            'nationality' => $this->input->post('nationality'),
            'portofarrival' => $this->input->post('portofarrival'),
            'passport_no' => $this->input->post('passportno'),
            'dob' => get_date($this->input->post('dob')),
            'email' => $this->input->post('email')
        );
        $this->db->insert('applicatrion_details', $data);
        return $application;
    }

    function get_application_details() {
        $application_id = $this->session->userdata('application_id');
        $this->db->where('app_id', $application_id);
        $query = $this->db->get('applicatrion_details');
        return $result = $query->result();
    }

    function set_visa_reg() {
        $curdate = date('Y-m-d');
        $identity_certificate = $this->input->post('ic');
        $acquire_nationality = $this->input->post('acquire_nationality');
        $applicationid = $this->input->post('applicationid');
        $data = array(
            'fname' => $this->input->post('surname'),
            'lname' => $this->input->post('fname'),
            'passport_no' => $this->input->post('passportno'),
            'sex' => $this->input->post('sex'),
            'birth_city' => $this->input->post('birthofcity'),
            'birth_country' => $this->input->post('birthofcountry'),
            'national_id' => $this->input->post('natinalid'),
            'religion' => $this->input->post('religion'),
            'visible_identification_marks' => $this->input->post('identification'),
            'qualification' => $this->input->post('qualification'),
            'acquire_nationality' => $acquire_nationality,
            'pass_place_of_Issue' => $this->input->post('placeofissue'),
            'pass_date_of_Issue' => $this->input->post('dateofissue'),
            'pass_date_of_expiry' => $this->input->post('dateofexpiry'),
            'ldentity_certificate' => $identity_certificate,
            'last_update' => $curdate
        );
        if ($identity_certificate == 'yes') {
            $data['ic_country_of_Issue'] = $this->input->post('issueofcountry');
            $data['ic_passport_no'] = $this->input->post('icdateofexpiry');
            $data['ic_date_of_Issue'] = $this->input->post('icdateofexpiry');
            $data['ic_place_of_Issue'] = $this->input->post('icplaceofissue');
            $data['ic_nationality'] = $this->input->post('icnatinality');
        }
        if ($acquire_nationality == 'Naturalization') {
            $data['pre_nationality'] = $this->input->post('prev_nationality');
        }

        $this->db->where('app_id', $applicationid);
        $this->db->update('applicatrion_details', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        }
    }

    function set_visareg3() {
        $curdate = date('Y-m-d');
        $grand_pak = $this->input->post('grand_pak');
        $maritalstatus = $this->input->post('maritalstatus');
        $military = $this->input->post('military');
        $applicationid = $this->input->post('applicationid');
        $data = array(
            'houseno' => $this->input->post('houseno'),
            'city' => $this->input->post('city'),
            'district' => $this->input->post('district'),
            'zipcode' => $this->input->post('zipcode'),
            'mobileno' => $this->input->post('mobileno'),
            'adress_country' => $this->input->post('Addresscountry'),
            'perma_houseno' => $this->input->post('phouseno'),
            'perma_district' => $this->input->post('pdistrict'),
            'father_nationality' => $this->input->post('fathernationality'),
            'father_name' => $this->input->post('fathername'),
            'father_birth_place' => $this->input->post('fatherbirthplace'),
            'father_country' => $this->input->post('fathercountry'),
            'father_prenationality' => $this->input->post('fatherprenationality'),
            'mother_name' => $this->input->post('mothername'),
            'mother_nationality' => $this->input->post('mothernationality'),
            'mother_prenationality' => $this->input->post('motherprenationality'),
            'mother_birth_place' => $this->input->post('motherbirthplace'),
            'mother_country' => $this->input->post('mothercountry'),
            'present_occupation' => $this->input->post('occupation'),
            'Employer_or_business' => $this->input->post('Employer_or_business'),
            'designation' => $this->input->post('designation'),
            'address' => $this->input->post('baddress'),
            'prof_phone' => $this->input->post('bPhone'),
            'past_occupation' => $this->input->post('poccupation'),
            'marital_status' => $maritalstatus,
            'grand_parent_pakistan' => $grand_pak,
            'last_update' => $curdate
        );
        if ($military == 'yes') {
            $data['mil_organisation'] = $this->input->post('morganisation');
            $data['mil_designation'] = $this->input->post('mdesignation');
            $data['mil_rank'] = $this->input->post('rank');
            $data['mil_place_of_posting'] = $this->input->post('posting');
        }
        if ($maritalstatus == 'Married') {
            $data['spouse_name'] = $this->input->post('spousename');
            $data['spouse_nationlity'] = $this->input->post('spousenationality');
            $data['spouse_prenationality'] = $this->input->post('spouseprenationality');
            $data['spouse_birth_place'] = $this->input->post('spousebirthplace');
            $data['spouse_birth_country'] = $this->input->post('spousecountry');
        }
        if ($grand_pak == 'yes') {
            $data['pakistan_nationality_detail'] = $this->input->post('pakistan_nationality_detail');
        }

        $this->db->where('app_id', $applicationid);
        $this->db->update('applicatrion_details', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        }
    }
    
    public function getCounrty() {

        $query = $this->db->get('country');
        return $result = $query->result();
    }
  
     function app_step4($img)
    {
        $curdate=date('Y-m-d');
        $visitedbefore= $this->input->post('visitedbefore');
        $extendstay=$this->input->post('extendstay');
        
        $applicationid=$this->input->post('applicationid');
        $data = array(
            'durationofvisa' => $this->input->post('visa_day'),
            'No_ofentries' => $this->input->post('entries_no'),
            'purpose_of_visit' => $this->input->post('PurposeVisit'),
            'port_of_exit' => $this->input->post('portofexit'),
            'places_likely_to_visit' => $this->input->post('visitedplace'),
            'visited_India' => $visitedbefore,
             
            'ref_name' => $this->input->post('refindia'),
            'ref_address' => $this->input->post('refaddress'),
            'ref_phone' => $this->input->post('ref_phone'),
            
            'ref_home_name' => $this->input->post('ref_home'),
            'ref_home_address' => $this->input->post('ref_homeaddress'),
            'ref_home_phone' => $this->input->post('ref_homephone'),
            'image' => $img,
                  
            'last_update' => $curdate
        );
        if($visitedbefore=='yes') {
             
            $data['visited_address']=$this->input->post('visitedaddress');
            $data['previously_visited_city']=$this->input->post('visitedcities');
            $data['last_Indian_visa_no']=$this->input->post('visitedvisano');
            $data['visited_type_Visa']=$this->input->post('visitedvisatype');
            $data['visited_visa_issue_place']=$this->input->post('visitedplaceissue');
            $data['visited_visa_issue_date']=$this->input->post('visitedissuedate');
            
        }
        if($extendstay=='yes') {
            $data['extend_visa_details']=$this->input->post('extendstaydetails');
            
            
            }
         

        $this->db->where('app_id', $applicationid);
        $this->db->update('applicatrion_details', $data);
        if($this->db->affected_rows() > 0) {
         return 1;   
        }
    }
	  
    public function getAdminById($id) {
        $sql = 'SELECT * FROM ' . TBL_ADMIN_USER . ' au  WHERE au.id ="' . $id . '"';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_account($data, $uid) {
        $update_arr = [
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'designation' => $data['designation'],
            'email' => $data['email'],
        ];
        $photo = $this->util->fileUpload(ADMIN_PHOTO_PATH, 'photo', $data['name'], 'jpeg|jpg|png');
        if ($photo) {
            $update_arr['img'] = $photo;
            //unlink old photo
            $old_img_path = ADMIN_PHOTO_PATH . $data['old_photo'];
            if (file_exists($old_img_path))
                @unlink($old_img_path);
        }
        if ($this->db->update(TBL_ADMIN_USER, $update_arr, ['id' => $uid])) {
            //Update Session
            $sdata = $this->session->userdata(SESSION_ADMIN);
            $this->session->unset_userdata(SESSION_ADMIN);
            $this->session->set_userdata(SESSION_ADMIN, [
                'id' => $sdata['id'],
                'name' => $data['name'],
                'username' => $sdata['username'],
                'designation' => $data['designation'],
                'img' => ($photo) ? $photo : $data['old_photo'],
            ]);
            return TRUE;
        }
    }

    public function update_account_password($data, $id) {
        if ($data['old_password'] == $data['new_password']) {
            return ['sts' => STATUS_ERROR, 'msg' => 'New password can not be same as old password'];
        } else {
            $sql = 'SELECT u.name, AES_DECRYPT(u.pass,"' . HASH_MYSQL_KEY . '") as decrypt_password FROM ' . TBL_ADMIN_USER . ' u WHERE u.id = "' . $id . '" ';
            $query = $this->db->query($sql);
            $u = $query->result();
            if (empty($u)) {
                return ['sts' => STATUS_ERROR, 'msg' => 'No Account found.'];
            }
            if ($u[0]->decrypt_password == $this->util->hash_create('sha256', $data['old_password'], HASH_PASSWORD_KEY)) {
                $encrypt_pass = $this->util->hash_create('sha256', $data['new_password'], HASH_PASSWORD_KEY);
                $sql = 'UPDATE ' . TBL_ADMIN_USER . ' SET pass = AES_ENCRYPT("' . $encrypt_pass . '","' . HASH_MYSQL_KEY . '") WHERE id = "' . $id . '"';
                if ($this->db->query($sql)) {
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulations!', 'You have successfully changed your password.']);
                    return ['sts' => STATUS_SUCCESS, 'msg' => 'You have successfully changed your password.'];
                }
                return ['sts' => STATUS_ERROR, 'msg' => 'OK WE WILL CHNAGE PASSWORD'];
            } else {
                return ['sts' => STATUS_ERROR, 'msg' => 'Unable to change password, the old password is not correct.'];
            }
        }
    }
    function payment_status($status)
    {
        $application_id=$this->session->userdata('application_id');
        $curdate=date('Y-m-d');
        $data = array(
			'app_id' => $application_id,
			'payment_status' => $status,
			 
			);
		$result=$this->db->insert('payment', $data);
        if($result) 
        {
            $data = array(
            'payment_status' => $status,
                           
            'last_update' => $curdate
        );
        $this->db->where('app_id', $application_id);
        $this->db->update('applicatrion_details', $data);
        }
    }
}
