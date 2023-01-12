<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="{{asset('assets/frontend')}}/css/select2.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/style.css" rel="stylesheet">
    <style>
        .error {
            color: white;
        }
    </style>
</head>

<body>
<header class="header-part">
    <div class="container">
        <div class="flex-header">
            <div class="header-ico">
                <div class="header-logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('uploads/logos/'.@$cms->header_logo)}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="{{route('index')}}">{{@$cms->header_home_button_name}}</a></li>
                    <li><a href="{{route('contactUs')}}"
                           class="contact-tab">{{@$cms->header_contact_us_button_name}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<section class="mid-part">
    <div class="container">
        <div class="">
            <div id="" class="hide-show-yes">
                <div class="publisher-form">
                    <div class="form-area">
                        <div class="form-inner">
                            <form id="contactForm" action="{{route('contactUsSave')}}" method="post">
                                @csrf
                                <div class="row hide-show">
                                    <div class="col-md-6">
                                        <div class="radio-buttons">
                                            <div class="form-group">
                                                <input type="radio" id="Register" name="publisher" value="yes" checked/>
                                                <label for="Register">I'm an Publisher</label>
                                                <p>I’m looking to sell leads</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-buttons">
                                            <div class="form-group">
                                                <input type="radio" id="Register1" name="publisher" value="no"/>
                                                <label for="Register1">I'm an Advertiser</label>
                                                <p>I'm looking to buy leads</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group floating-group">
                                            <label class="floating-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control floating-control"
                                                   autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group floating-group">
                                            <label class="floating-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control floating-control"
                                                   autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group floating-group">
                                            <label class="floating-label">Company</label>
                                            <input type="text" name="company" class="form-control floating-control"
                                                   autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group floating-group">
                                            <label class="floating-label">Email</label>
                                            <input type="email" name="email" class="form-control floating-control"
                                                   autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pn-select form-group" id="js_pn-select" style="--prefix-length: 2">
                                            <!-- Selected prefix -->
                                            <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                                    id="js_trigger-dropdown" tabindex="1">
                                                <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                                     src="https://flagpedia.net/data/flags/icon/36x27/us.png"/>
                                                <!-- prettier-ignore -->
                                                <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                                     width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     stroke="#fff" stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9"/>
                                                </svg>
                                            </button>
                                            <!-- Phone number input -->
                                            <div class="pn-input">
                                                <label class="pn-input__label">Phone Number*</label>
                                                <div class="pn-input__container">
                                                    <input class="pn-input__prefix" value="+1" type="text"
                                                           name="phonenumber_prefix" id="js_number-prefix"
                                                           tabindex="-1"/>
                                                    <input class="pn-input__phonenumber" id="js_input-phonenumber"
                                                           type="tel" name="phonenumber" pattern="\d*" value=""
                                                           placeholder=" " autocomplete="nope"
                                                           tabindex="0" autocomplete="off"/>
                                                </div>
                                            </div>
                                            <!-- Dropdown -->
                                            <div class="pn-dropdown" id="js_dropdown">
                                                <div class="pn-search">
                                                    <!-- prettier-ignore -->
                                                    <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg"
                                                         width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="#103155" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <input placeholder="Search for countries"
                                                           class="pn-search__input search" type="search"
                                                           id="js_search-input" autocomplete="nope"/>
                                                </div>
                                                <!-- Country list -->
                                                <ul class="pn-list list" id="js_list"></ul>
                                                <div class="pn-list-item pn-list-item--no-results" style="display: none"
                                                     id="js_no-results-found">
                                                    No results found
                                                </div>
                                            </div>
                                        </div>
                                        <label id="js_input-phonenumber-error" class="error" for="js_input-phonenumber"
                                               style="display: none;"></label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group select2Part select2multiple w-100 floating-group">
                                            <label class="floating-label">Verticals That You Operate In</label>
                                            <select name="select_fields[]"
                                                    class="form-control customSelectMultiple floating-control" multiple>
                                                <option value="Health Insurance">Health Insurance</option>
                                                <option value="Medicare">Medicare</option>
                                                <option value="Final Expense">Final Expense</option>
                                                <option value="Term Insurance">Term Insurance</option>
                                                <option value="Auto Insurance">Auto Insurance</option>
                                                <option value="Pest Control">Pest Control</option>
                                                <option value="Plumbing">Plumbing</option>
                                                <option value="Electrician">Electrician</option>
                                                <option value="HVAC Services">HVAC Services</option>
                                                <option value="Home Security">Home Security</option>
                                                <option value="Home Services">Home Services</option>
                                                <option value="Debt Consolidation">Debt Consolidation</option>
                                                <option value="Credit Repair">Credit Repair</option>
                                                <option value="Legal Services">Legal Services</option>
                                            </select>
                                            <label id="select_fields-error" class="error" for="select_fields"
                                                   style="display: none;"></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary form-submit" data-toggle="modal"
                                            data-target="#myModal">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-part contact-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-logo"><img src="{{asset('uploads/logos/'.@$cms->footer_logo)}}" alt=""></div>
                </div>
                <!--<div class="col-md-6">-->
                <!--    <div class="footer-link">-->
                <!--        <ul>-->
                <!--            <li>-->
            <!--                <a href="{{@$cms->twitter}}">-->
            <!--                    <img src="{{asset('assets/frontend')}}/images/fa-twitter.svg">-->
                <!--                </a></li>-->
                <!--            <li>-->
            <!--                <a href="{{@$cms->facebook}}">-->
            <!--                    <img src="{{asset('assets/frontend')}}/images/fa-facebook-square.svg">-->
                <!--                </a>-->
                <!--            </li>-->
                <!--            <li>-->
            <!--                <a href="{{@$cms->google}}">-->
            <!--                    <img src="{{asset('assets/frontend')}}/images/fa-google-plus.svg">-->
                <!--                </a>-->
                <!--            </li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-breadcumb">
                        <ul>
                            <li><a href="{{route('index')}}">{{@$cms->footer_section_home_text}}</a></li>
                            <li><span>/</span></li>
                            <li><a href="{{route('contactUs')}}">{{@$cms->footer_section_contact_us_text}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-copy">
                        <p>{{@$cms->last_section_rights_text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- thank you popup start -->
<div id="contactUsModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="popup-logo"><img src="{{asset('assets/frontend')}}/images/logo.png"></div>
                <div class="popup-content">
                    <h3 id="contactUsModalText">Thanks for contacting us! We will be in touch with you shortly.</h3>
                    <a href="{{route('index')}}" class="form-submit" id="contactUsModalButton" style="display: none;">Go
                        To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>  <!-- end the thank you popup -->
<script src="{{asset('assets/frontend')}}/js/jquery-2.2.4.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/select2.full.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/select.js"></script>
<script src="{{asset('assets/frontend')}}/js/list.js"></script>
<script src="{{asset('assets/frontend')}}/js/phone.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/frontend.js"></script>
<script>
    let CLICK = 0;
    $("#emergency").hide();
    $(document).on("click", "input[name='publisher']", function (event) {
        let data = $(this).val();
        if (data === 'yes') {
            $(".operateIn").show();
            $(".emergency").hide();
        } else {
            $(".emergency").show();
            $(".operateIn").hide();
        }
    });

    $("#contactForm").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            publisher: {
                required: true
            },
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            company: {
                required: true
            },
            email: {
                required: true,
                email: true,
            },
            "phonenumber-prefix": {
                required: true
            },
            phonenumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            select_fields: {
                required: true
            }
        },
        submitHandler: function (form) {
            if (CLICK === 0) {
                CLICK = 1;
                $('#contactUsModal').modal({backdrop: 'static', keyboard: false});
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                    success: function (response) {
                        if (response.status === true) {
                            $("#contactUsModalText").html(response.message);
                            $("#contactUsModalButton").show();
                        } else {
                            alert(response.message);
                            CLICK = 0;
                        }
                    }, error: function (jqXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                        CLICK = 0;
                    }
                });
            }
            return false;
        }
    });
</script>
</body>
</html>
