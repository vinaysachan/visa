$("#enqFrm").validate({
    rules: {email: {require_from_group: [1, ".cntgrp"]},
        mobile: {
            require_from_group: [1, ".cntgrp"]
        }
    },
    messages: {
        email: {
            require_from_group: "Either Mobile or Email Id"
        },
        mobile: {
            require_from_group: "Either Mobile or Email Id"
        }
    },
    submitHandler: function (form) {
        var btn = $("#enqFrm button[type='submit']").loading('set');
        $.post($(form).attr('action'), $(form).serialize(), function (o) {
            if (o.sts == 'success') {
                $.alert({title: o.title, content: o.msg, confirm: function () {
                        window.location.reload();
                    }});
            } else
                $.alert({title: 'Sorry!', content: o.msg});
        }, 'json').always(function () {
            btn.loading('reset');
        });
        return false;
    }
});
 $(document).ready(function() {
	$('input:radio[name=visitedbefore]').change(function() {
        
        if (this.value == 'yes') {
            
            $('#visitedbefore_form').show();
        }
        else if (this.value == 'no') {
             
            $('#visitedbefore_form').hide();
        }
    });
$('input:radio[name=extendstay]').change(function() {
        
        if (this.value == 'yes') {
            
            $('#extendstaydetails').show();
        }
        else if (this.value == 'no') {
             
            $('#extendstaydetails').hide();
        }
    });

		 });
function sameaddress(f) {
		 
  if(f.sameAddress.checked == true) {
	  
    f.phouseno.value = f.houseno.value;
    f.pcity.value = f.city.value;
	f.pdistrict.value = f.district.value;
  }
}
	function maritalStatus(val)
	{
		if (val == 'Married') {
            
            $('#spouse_form').show();
        }
        else if (val == 'Unmarried') {
             
            $('#spouse_form').hide();
        }
	}
	$(document).ready(function() {
	$('input:radio[name=grand_pak]').change(function() {
        if (this.value == 'yes') {
            
            $('#pak_details').show();
        }
        else if (this.value == 'no') {
             
            $('#pak_details').hide();
        }
    });
		$('input:radio[name=military]').change(function() {
        if (this.value == 'yes') {
            
            $('#military_form').show();
        }
        else if (this.value == 'no') {
             
            $('#military_form').hide();
        }
    });
		 });


