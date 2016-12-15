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


$("#applyVisaFrm").validate({
    onkeyup: function (element) {
        if ((element.name == 'v_code'))
            return false;
        else
            $(element).valid();
    },
    rules: {
        re_email: {equalTo: "#email"},
    },
    messages: {
        re_email: {equalTo: "Please enter the same Email as above"},
    },
    submitHandler: function (form) {
        var btn = $("#applyVisaFrm button[type='submit']").loading('set');
        $.post($(form).attr('action'), $(form).serialize(), function (o) {
            if (o.sts == 'success') {
                $.alert({title: o.title, content: o.msg, confirm: function () {
                        window.location.href = o.url;
                    }});
            } else
                $.alert({title: 'Sorry!', content: o.msg});
        }, 'json').always(function () {
            btn.loading('reset');
        });
        return false;
    }
});























function acquire_naturalization(val) {
    if (val == 'Naturalization') {
        $('#prev_nationality').show();
    } else {
        $('#prev_nationality').hide();
    }
}
$(document).ready(function () {
    $('input:radio[name=ic]').change(function () {
        if (this.value == 'yes') {
            $('#ic_form').show();
        } else if (this.value == 'no') {
            $('#ic_form').hide();
        }
    });
});