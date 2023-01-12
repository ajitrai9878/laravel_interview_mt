let CLICK = 0;
$(document).ready(function () {
    /*Validation for file size in MB*/
    jQuery.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param * 1000000)
    }, 'File size must be less than {0} MB');
    jQuery.validator.addMethod("extension", function (value, element, param) {
        param = typeof param === "string" ? param.replace(/,/g, '|') : "png|jpe?g|gif";
        return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
    }, 'Please select valid file.');
    $.validator.setDefaults({
        ignore: ":hidden:not(.not-ignore)"
        // validate all hidden select elements
    });
    // loginForm auth
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

    // dashboard content
    $("#cmsUpdate").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            header_logo: {
                extension: "jpg|jpeg|png|gif"
            },
            header_home_button_name: {
                required: true
            },
            header_contact_us_button_name: {
                required: true
            },
            banner_text_1: {
                required: true
            },
            banner_text_2: {
                required: true
            },
            banner_text_3: {
                required: true
            },
            banner_contact_us_button_name: {
                required: true
            },
            welcome_section_text_1: {
                required: true
            },
            welcome_section_text_2: {
                required: true
            },
            welcome_sub_section_title_1: {
                required: true
            },
            welcome_sub_section_description_1: {
                required: true
            },
            welcome_sub_section_title_2: {
                required: true
            },
            welcome_sub_section_description_2: {
                required: true
            },
            welcome_sub_section_title_3: {
                required: true
            },
            welcome_sub_section_description_3: {
                required: true
            },
            banner_section_2_text_1: {
                required: true
            },
            banner_section_2_text_2: {
                required: true
            },
            banner_section_2_text_3: {
                required: true
            },
            banner_section_2_contact_us_button_name: {
                required: true
            },
            what_you_get_area_text: {
                required: true
            },
            what_you_get_area_sub_section_title_1: {
                required: true
            },
            what_you_get_area_sub_section_description_1: {
                required: true
            },
            what_you_get_area_sub_section_title_2: {
                required: true
            },
            what_you_get_area_sub_section_description_2: {
                required: true
            },
            what_you_get_area_sub_section_title_3: {
                required: true
            },
            what_you_get_area_sub_section_description_3: {
                required: true
            },
            how_it_works_area_text: {
                required: true
            },
            how_it_works_area_sub_section_title_1: {
                required: true
            },
            how_it_works_area_sub_section_description_1: {
                required: true
            },
            how_it_works_area_sub_section_title_2: {
                required: true
            },
            how_it_works_area_sub_section_description_2: {
                required: true
            },
            how_it_works_area_sub_section_title_3: {
                required: true
            },
            how_it_works_area_sub_section_description_3: {
                required: true
            },
            join_our_network_area_text: {
                required: true
            },
            join_our_network_area_sub_section_title_1: {
                required: true
            },
            join_our_network_area_sub_section_description_1: {
                required: true
            },
            join_our_network_area_sub_section_title_2: {
                required: true
            },
            join_our_network_area_sub_section_description_2: {
                required: true
            },
            last_section_text_1: {
                required: true
            },
            last_section_text_2: {
                required: true
            },
            last_section_text_3: {
                required: true
            },
            last_section_contact_us_button_name: {
                required: true
            },
            footer_logo: {
                extension: "jpg|jpeg|png|gif"
            },
            footer_section_home_text: {
                required: true
            },
            footer_section_contact_us_text: {
                required: true
            },
            last_section_rights_text: {
                required: true
            },
            twitter: {
                required: true
            },
            facebook: {
                required: true
            },
            google: {
                required: true
            }
        },
        submitHandler: function (form) {
            if (CLICK === 0) {
                CLICK = 1;
                let formData = new FormData(jQuery('form#cmsUpdate')[0]);
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.status === true) {
                            toastr.success(response.message);
                            setTimeout(function () {
                                window.location.href = response.redirect;
                            }, 3000);
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

    $("#usersPasswordChange").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            password: {
                required: true,
                minlength: 8,
            },
            c_password: {
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
                            toastr.success(response.message);
                            setTimeout(function () {
                                window.location.href = response.redirect;
                            }, 3000);
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


