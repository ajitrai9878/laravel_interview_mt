window._ = require('lodash');

try {
    require('bootstrap');
    window.$ = window.jQuery = require('jquery');
    require('select2');
    require("jquery-confirm");
    window.Popper = require('popper.js').default;
    window.toastr = require('toastr');
    require('jquery-validation');
    require('jquery-ui');
    // custom work for api or url use
    window.host = "http://localhost/interview/laravel_interview_mt/";
    if (window.location.host === "localhost") {
        host = 'http://localhost/interview/laravel_interview_mt/';
        /* let isNS = (navigator.appName === "Netscape") ? 1 : 0;
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
         document.onmouseup = mousehandler; */
    } else if (window.location.host === "anydomain.com") {
        host = 'https://anydomain.com/';
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


