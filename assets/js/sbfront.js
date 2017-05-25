$(document).ready(function(){
    $("#sign-up-btn").click(function(){
        $("#signup-box").fadeIn();
    });
    $("#reg-top").click(function(){
        $("#signup-box").hide();
        $(".reg-top-content").fadeIn();
    });
});

$(document).ready(function() {
    $(".email-signup").click(function(event) {
        $(".error").html('');
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/user/signUp",
            dataType: 'json',
            async:false,
            data:  $(this).closest("form").serializeArray(),
            success: function(result) {
                if (result) {
                    $(".error").html(result.msg);
                    if (result.status == 'OK') {
                        setTimeout(function () {
                            window.location.href = result.redirect;
                        }, 3000);
                    }
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $(".error").html('Please try later.');
                return false;
            }
        });
    });
});
