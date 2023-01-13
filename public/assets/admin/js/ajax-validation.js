let CLICK = 0;
$(document).ready(function () {
    $.validator.setDefaults({
        ignore: ":hidden:not(.not-ignore)"
        // validate all hidden select elements
    });
    // category add
    $("#categoryAddEdit").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            name: {
                required: true
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
                            toastr.success(response.message);
                            setTimeout(function () {
                                window.location.href = response.redirect;
                            }, 2000);
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


