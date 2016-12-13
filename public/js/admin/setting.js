$(function () {
    if ($('#page_content').length) {
        CKEDITOR.replace('page_content', {
            height: '410px'
        });
    }



    $("#banner_aeFrm").validate({
    });

    $("#pageForm").validate({
        ignore: [],
        rules: {
            page_content: {
                required: function () {
                    CKEDITOR.instances.page_content.updateElement();
                }
            }
        },
        messages: {
            page_content: {required: "Please enter Page Content"}
        },
    });


});