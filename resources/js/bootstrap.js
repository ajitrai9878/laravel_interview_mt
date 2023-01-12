window._ = require('lodash');

try {
    require('bootstrap');
    window.$ = window.jQuery = require('jquery');
    require('select2');
    require("jquery-confirm");
    window.Popper = require('popper.js').default;
    window.toastr = require('toastr');
    require('jquery-validation');
    require('datatables');
    require('datatables.net');
    require('jquery-datetimepicker');
    require('jquery-ui');
    // custom work for api or url use
    window.host = "https://athensmarketing.io/";
    if (window.location.host === "localhost") {
        host = 'http://localhost/freelance/projects/athens/';
    } else if (window.location.host === "athensmarketing.io") {
        host = 'https://athensmarketing.io/';
        let isNS = (navigator.appName === "Netscape") ? 1 : 0;
        if (navigator.appName === "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

        function mischandler() {
            return false;
        }

        function mousehandler(e) {
            let myevent = (isNS) ? e : event;
            let eventbutton = (isNS) ? myevent.which : myevent.button;
            if ((eventbutton === 2) || (eventbutton === 3) || (eventbutton === 12)) return false;
        }

        document.oncontextmenu = mischandler;
        document.onmousedown = mousehandler;
        document.onmouseup = mousehandler;
    }
    window.HOST = host;
} catch (e) {
    console.error(e);
}


