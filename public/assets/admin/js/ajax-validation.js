let CLICK = 0;
$(document).ready(function () {
    $.validator.setDefaults({
        ignore: ":hidden:not(.not-ignore)"
        // validate all hidden select elements
    });
    // category add
    $("#loginAdminForm").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true,
                minlength: 8,
            }
        },
        submitHandler: function (form) {
            if (CLICK === 0) {
                CLICK = 1;
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                    success: function (response) {
                        if (response.status === true) {
                            window.location.href = response.redirect;
                        } else {
                            toastr.error(response.message);
                            CLICK = 0;
                        }
                    }, error: function (jqXHR, textStatus, errorThrown) {
                        toastr.error(errorThrown);
                        CLICK = 0;
                    }
                });
            }
            return false;
        }
    });
});


