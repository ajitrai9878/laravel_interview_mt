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

    $(document).on("click", ".change-user-status", function () {
        let type = $(this).attr('type');
        let dataRoute = $(this).attr('data-route');
        let typeMessage, status;
        if (type === 'blocked-user') {
            typeMessage = 'This user is blocked this user can login eligibly on  after this action';
            status = '0';
        } else {
            typeMessage = 'This user is unblocked this user can login eligibly off  after this action';
            status = '1';
        }
        $.confirm({
            icon: 'fas fa-exclamation',
            theme: 'modern',
            closeIcon: true,
            animation: 'zoom',
            type: 'blue',
            title: 'Confirm',
            escapeKey: true,
            content: 'Are you sure? <br> ' + typeMessage + '!',
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
                            data: {status: status},
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
