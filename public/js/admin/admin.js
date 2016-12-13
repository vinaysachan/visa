$(function () {
    $(".enq_sts").click(function () {
        var th = $(this);
        var sts = (th.prop('checked')) ? 1 : 0;
        $.post(base_url + 'admin/home/change_sts', {sts: sts, id: th.attr('data-enq_id')}, function (o) {
            if (o.sts == 'success') {
                $.alert({
                    title: 'Congratulations!',
                    content: o.msg,
                    confirm: function () {
                        window.location.reload();
                    }
                });
            } else {
                $.alert({title: 'Sorry!', content: o.msg});
            }
        }, 'json');


//        (emp_arrest_val == 'Y') ? $(".emp_arrest_more").show() : $(".emp_arrest_more").hide();
//        $("#add_more_convitions").parent().children('div').remove();
//        $("#add_more_convitions").before(html_arrest(0));
    });


});



