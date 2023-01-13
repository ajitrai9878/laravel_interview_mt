$(function () {
    let CLICK = 0;
    $(document).on("click", ".permanent_delete", function () {
        let dataRoute = $(this).attr('data-route');
        $.confirm({
            icon: 'fas fa-exclamation',
            theme: 'modern',
            closeIcon: true,
            animation: 'zoom',
            type: 'blue',
            title: 'Confirm',
            escapeKey: true,
            content: 'Are you sure? <br> This action is permanent!',
            backgroundDismiss: true,
            buttons: {
                cancel: {
                    keys: [
                        'esc',
                    ],
                    action: function () {
                        this.setCloseAnimation('zoom');
                    }
                },
                okay: {
                    keys: [
                        'enter'
                    ],
                    action: function () {
                        $.ajax({
                            type: 'get',
                            url: dataRoute,
                            success: function (response) {
                                if (response.status === true) {
                                    toastr.success(response.message);
                                    setTimeout(function () {
                                        window.location.reload();
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
                },
            },
        });
    });
});
