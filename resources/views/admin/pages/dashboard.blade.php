@extends('admin.master')
@section('title')
    {{__('Dashboard')}}
@endsection
@section('css')

@endsection
@section('content')
    <div class="container-fluid p-0">
        <form method="post" action="{{route('cmsUpdate')}}"
              id="cmsUpdate"
              autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Header Section</h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website header. )')}}
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Header Logo</h5>
                        </div>
                        <div class="card-body">
                            @if(@$cms->header_logo)
                                <div style="background: #070F22;padding: 20px 0;border-bottom: 1px solid #0D386B;">
                                    <img src="{{asset('uploads/logos/'.@$cms->header_logo)}}" width="400px"
                                         height="200px" alt=""/>
                                </div>
                            @endif
                            <input type="file" class="form-control" name="header_logo" id="header_logo"
                                   accept="image/*"
                                   autocomplete="off">
                        </div>
                        <label id="header_logo-error" class="error" for="header_logo"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Header Home Button Name</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="header_home_button_name"
                                   id="header_home_button_name" placeholder="Home" required
                                   value="{{@$cms->header_home_button_name}}" autocomplete="off">
                        </div>
                        <label id="header_home_button_name-error" class="error" for="header_home_button_name"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Header Contact Us Button Name</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="header_contact_us_button_name"
                                   id="header_contact_us_button_name" placeholder="Contact Us" required
                                   value="{{@$cms->header_contact_us_button_name}}" autocomplete="off">
                        </div>
                        <label id="header_contact_us_button_name-error" class="error"
                               for="header_contact_us_button_name"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Banner Text</h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Banner Text. )')}}
                </a>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Text 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="banner_text_1"
                                   id="header_home_button_name" placeholder="INCREASE REVENUE" required
                                   value="{{@$cms->banner_text_1}}" autocomplete="off">
                        </div>
                        <label id="header_home_button_name-error" class="error" for="header_home_button_name"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Text 2</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="banner_text_2"
                                   id="banner_text_2" placeholder="Spend Less To Get More Leads" required
                                   value="{{@$cms->banner_text_2}}" autocomplete="off">
                        </div>
                        <label id="banner_text_2-error" class="error" for="banner_text_2"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Text 3</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="banner_text_3"
                                   id="banner_text_3"
                                   placeholder="We help advertisers increase revenue through pay-per-call marketing"
                                   required
                                   value="{{@$cms->banner_text_3}}" autocomplete="off">
                        </div>
                        <label id="banner_text_3-error" class="error" for="banner_text_3"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Contact Us Button Name</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="banner_contact_us_button_name"
                                   id="banner_contact_us_button_name" placeholder="Contact Us" required
                                   value="{{@$cms->banner_contact_us_button_name}}" autocomplete="off">
                        </div>
                        <label id="banner_contact_us_button_name-error" class="error"
                               for="banner_contact_us_button_name"
                               style="display: none"></label>
                    </div>
                </div>
            </div>

            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Welcome Section</h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Welcome Section. )')}}
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Section Text 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="welcome_section_text_1"
                                   id="welcome_section_text_1" placeholder="WELCOME TO ATHENS" required
                                   value="{{@$cms->welcome_section_text_1}}" autocomplete="off">
                        </div>
                        <label id="welcome_section_text_1-error" class="error" for="welcome_section_text_1"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Section Text 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="welcome_section_text_2"
                                      id="welcome_section_text_2"
                                      placeholder="Sit nulla eu magnis amet aliquam habitant ut mi magnis. Faucibus felis proin eget sed purus volutpat. A diam viverra tincidunt"
                                      required
                                      autocomplete="off">{{@$cms->welcome_section_text_2}}</textarea>
                        </div>
                        <label id="welcome_section_text_2-error" class="error" for="welcome_section_text_2"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Sub Section Title 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="welcome_sub_section_title_1"
                                   id="welcome_sub_section_title_1" placeholder="Quis tellus in id sem nam" required
                                   value="{{@$cms->welcome_sub_section_title_1}}" autocomplete="off">
                        </div>
                        <label id="welcome_sub_section_title_1-error" class="error" for="welcome_sub_section_title_1"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Sub Section Description 1</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="welcome_sub_section_description_1"
                                      id="welcome_sub_section_description_1"
                                      placeholder="Ligula dui sed ipsum tempus natoque urna. Eget lacus vitae turpis rhoncus consectetur sit auctor nunc orci."
                                      required
                                      autocomplete="off">{{@$cms->welcome_sub_section_description_1}}</textarea>
                        </div>
                        <label id="welcome_sub_section_description_1-error" class="error"
                               for="welcome_sub_section_description_1"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Sub Section Title 2</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="welcome_sub_section_title_2"
                                   id="welcome_sub_section_title_2" placeholder="Dictum odio malesuada" required
                                   value="{{@$cms->welcome_sub_section_title_2}}" autocomplete="off">
                        </div>
                        <label id="welcome_sub_section_title_2-error" class="error" for="welcome_sub_section_title_2"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Sub Section Description 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="welcome_sub_section_description_2"
                                      id="welcome_sub_section_description_2"
                                      placeholder="Mi at gravida eget nec feugiat. Posuere gravida vitae elit libero. Sed diam faucibus eget gravida massa vel sed massa."
                                      required
                                      autocomplete="off">{{@$cms->welcome_sub_section_description_2}}</textarea>
                        </div>
                        <label id="welcome_sub_section_description_2-error" class="error"
                               for="welcome_sub_section_description_2"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Sub Section Title 3</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="welcome_sub_section_title_3"
                                   id="welcome_sub_section_title_3" placeholder="Nunc vivamus nec" required
                                   value="{{@$cms->welcome_sub_section_title_3}}" autocomplete="off">
                        </div>
                        <label id="welcome_sub_section_title_3-error" class="error" for="welcome_sub_section_title_3"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Welcome Sub Section Description 3</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="welcome_sub_section_description_3"
                                      id="welcome_sub_section_description_3"
                                      placeholder="Vitae vel sed pretium diam nibh. Curabitur nunc nec enim mi malesuada molestie scelerisque nascetur auctor."
                                      required
                                      autocomplete="off">{{@$cms->welcome_sub_section_description_3}}</textarea>
                        </div>
                        <label id="welcome_sub_section_description_3-error" class="error"
                               for="welcome_sub_section_description_3"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Banner Section 2 </h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Banner Section 2. )')}}
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Section 2 Text 1</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="banner_section_2_text_1"
                                      id="banner_section_2_text_1"
                                      placeholder="Cold Calling Is Exhausting faucibus felis proin eget."
                                      required
                                      autocomplete="off">{{@$cms->banner_section_2_text_1}}</textarea>
                        </div>
                        <label id="banner_section_2_text_1-error" class="error"
                               for="banner_section_2_text_1"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Section 2 Text 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="banner_section_2_text_2"
                                      id="banner_section_2_text_2"
                                      placeholder="Dialing out to customers wears down your agents and takes a massive toll on human resources — not to mention the low response rates that can make you LOSE money on a call."
                                      required
                                      autocomplete="off">{{@$cms->banner_section_2_text_2}}</textarea>
                        </div>
                        <label id="banner_section_2_text_2-error" class="error"
                               for="banner_section_2_text_2"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Section 2 Text 3</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="banner_section_2_text_3"
                                      id="banner_section_2_text_3"
                                      placeholder="Dialing out to customers wears down your agents and takes a massive toll on human resources — not to mention the low response rates that can make you LOSE money on a call."
                                      required
                                      autocomplete="off">{{@$cms->banner_section_2_text_3}}</textarea>
                        </div>
                        <label id="banner_section_2_text_3-error" class="error"
                               for="banner_section_2_text_3"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Banner Section 2 Contact US Button Name</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="banner_section_2_contact_us_button_name"
                                   id="banner_section_2_contact_us_button_name"
                                   placeholder="Contact Us"
                                   required value="{{@$cms->banner_section_2_contact_us_button_name}}"
                                   autocomplete="off">
                        </div>
                        <label id="banner_section_2_contact_us_button_name-error" class="error"
                               for="banner_section_2_contact_us_button_name"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">What You Get Area </h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website What You Get Area. )')}}
                </a>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Text</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="what_you_get_area_text"
                                   id="what_you_get_area_text" placeholder="Here’s What You’ll Get" required
                                   value="{{@$cms->what_you_get_area_text}}" autocomplete="off">
                        </div>
                        <label id="what_you_get_area_text-error" class="error" for="what_you_get_area_text"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Sub Section Title 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="what_you_get_area_sub_section_title_1"
                                   id="what_you_get_area_sub_section_title_1" placeholder="Reduce Operating Costs"
                                   required
                                   value="{{@$cms->what_you_get_area_sub_section_title_1}}" autocomplete="off">
                        </div>
                        <label id="what_you_get_area_sub_section_title_1-error" class="error"
                               for="what_you_get_area_sub_section_title_1"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Sub Section Description 1</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="what_you_get_area_sub_section_description_1"
                                      id="what_you_get_area_sub_section_description_1"
                                      placeholder="When you’re losing 10 cents on the dollar, getting leads quickly becomes a race to the bottom. With WeCall, you only pay for the calls you receive."
                                      required
                                      autocomplete="off">{{@$cms->what_you_get_area_sub_section_description_1}}</textarea>
                        </div>
                        <label id="what_you_get_area_sub_section_description_1-error" class="error"
                               for="what_you_get_area_sub_section_description_1"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Sub Section Title 2</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="what_you_get_area_sub_section_title_2"
                                   id="what_you_get_area_sub_section_title_2" placeholder="High-Converting Calls"
                                   required
                                   value="{{@$cms->what_you_get_area_sub_section_title_2}}" autocomplete="off">
                        </div>
                        <label id="what_you_get_area_sub_section_title_2-error" class="error"
                               for="what_you_get_area_sub_section_title_2"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Sub Section Description 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="what_you_get_area_sub_section_description_2"
                                      id="what_you_get_area_sub_section_description_2"
                                      placeholder="Say goodbye to low response rates. Through hyperlocal targeting + custom ad campaigns, we send you high-intent calls from qualified leads."
                                      required
                                      autocomplete="off">{{@$cms->what_you_get_area_sub_section_description_2}}</textarea>
                        </div>
                        <label id="what_you_get_area_sub_section_description_2-error" class="error"
                               for="what_you_get_area_sub_section_description_2"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Sub Section Title 3</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="what_you_get_area_sub_section_title_3"
                                   id="what_you_get_area_sub_section_title_3" placeholder="Tracking + Analytics"
                                   required
                                   value="{{@$cms->what_you_get_area_sub_section_title_3}}" autocomplete="off">
                        </div>
                        <label id="what_you_get_area_sub_section_title_3-error" class="error"
                               for="what_you_get_area_sub_section_title_3"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">What You Get Area Sub Section Description 3</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="what_you_get_area_sub_section_description_3"
                                      id="what_you_get_area_sub_section_description_3"
                                      placeholder="Our performance-based marketers live and die by cost-per-acquisition (CPA). We make it easy to see the data in real time in order to monitor + improve performance"
                                      required
                                      autocomplete="off">{{@$cms->what_you_get_area_sub_section_description_3}}</textarea>
                        </div>
                        <label id="what_you_get_area_sub_section_description_3-error" class="error"
                               for="what_you_get_area_sub_section_description_3"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">How It Works </h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website How It Works. )')}}
                </a>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Text</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="how_it_works_area_text"
                                   id="how_it_works_area_text" placeholder="How It Works" required
                                   value="{{@$cms->how_it_works_area_text}}" autocomplete="off">
                        </div>
                        <label id="how_it_works_area_text-error" class="error" for="how_it_works_area_text"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Sub Section Title 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="how_it_works_area_sub_section_title_1"
                                   id="how_it_works_area_sub_section_title_1" placeholder="1. Traffic"
                                   required
                                   value="{{@$cms->how_it_works_area_sub_section_title_1}}" autocomplete="off">
                        </div>
                        <label id="how_it_works_area_sub_section_title_1-error" class="error"
                               for="how_it_works_area_sub_section_title_1"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Sub Section Description 1</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="how_it_works_area_sub_section_description_1"
                                      id="how_it_works_area_sub_section_description_1"
                                      placeholder="We generate mobile-first traffic through custom ad campaigns for your business."
                                      required
                                      autocomplete="off">{{@$cms->how_it_works_area_sub_section_description_1}}</textarea>
                        </div>
                        <label id="how_it_works_area_sub_section_description_1-error" class="error"
                               for="how_it_works_area_sub_section_description_1"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Sub Section Title 2</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="how_it_works_area_sub_section_title_2"
                                   id="how_it_works_area_sub_section_title_2" placeholder="2. Calls"
                                   required
                                   value="{{@$cms->how_it_works_area_sub_section_title_2}}" autocomplete="off">
                        </div>
                        <label id="how_it_works_area_sub_section_title_2-error" class="error"
                               for="how_it_works_area_sub_section_title_2"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Sub Section Description 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="how_it_works_area_sub_section_description_2"
                                      id="how_it_works_area_sub_section_description_2"
                                      placeholder="We generate mobile-first traffic through custom ad campaigns for your business."
                                      required
                                      autocomplete="off">{{@$cms->how_it_works_area_sub_section_description_2}}</textarea>
                        </div>
                        <label id="how_it_works_area_sub_section_description_2-error" class="error"
                               for="how_it_works_area_sub_section_description_2"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Sub Section Title 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="how_it_works_area_sub_section_title_3"
                                   id="how_it_works_area_sub_section_title_3" placeholder="3. Customers"
                                   required
                                   value="{{@$cms->how_it_works_area_sub_section_title_3}}" autocomplete="off">
                        </div>
                        <label id="how_it_works_area_sub_section_title_3-error" class="error"
                               for="how_it_works_area_sub_section_title_3"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">How It Works Area Sub Section Description 3</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="how_it_works_area_sub_section_description_3"
                                      id="how_it_works_area_sub_section_description_3"
                                      placeholder="You only pay for the calls you receive. We handle the rest so you can focus on turning leads into customers."
                                      required
                                      autocomplete="off">{{@$cms->how_it_works_area_sub_section_description_3}}</textarea>
                        </div>
                        <label id="how_it_works_area_sub_section_description_3-error" class="error"
                               for="how_it_works_area_sub_section_description_3"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Join Our Network </h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Join Our Network. )')}}
                </a>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Join Our Network Area Text</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="join_our_network_area_text"
                                   id="join_our_network_area_text"
                                   placeholder="Join Our Network Of Advertisers + Publishers" required
                                   value="{{@$cms->join_our_network_area_text}}" autocomplete="off">
                        </div>
                        <label id="join_our_network_area_text-error" class="error" for="join_our_network_area_text"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Join Our Network Area Sub Section Title 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="join_our_network_area_sub_section_title_1"
                                   id="join_our_network_area_sub_section_title_1"
                                   placeholder="Athens Marketing for Advertisers"
                                   required
                                   value="{{@$cms->join_our_network_area_sub_section_title_1}}" autocomplete="off">
                        </div>
                        <label id="join_our_network_area_sub_section_title_1-error" class="error"
                               for="join_our_network_area_sub_section_title_1"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Join Our Network Area Sub Section Description 1</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="join_our_network_area_sub_section_description_1"
                                      id="join_our_network_area_sub_section_description_1"
                                      placeholder="Increase sales by getting thousands of inbound phone calls that directly connect you to highly-qualified prospects"
                                      required
                                      autocomplete="off">{{@$cms->join_our_network_area_sub_section_description_1}}</textarea>
                        </div>
                        <label id="join_our_network_area_sub_section_description_1-error" class="error"
                               for="join_our_network_area_sub_section_description_1"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Join Our Network Area Sub Section Title 2</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="join_our_network_area_sub_section_title_2"
                                   id="join_our_network_area_sub_section_title_2"
                                   placeholder="Athens Marketing for Publishers"
                                   required
                                   value="{{@$cms->join_our_network_area_sub_section_title_2}}" autocomplete="off">
                        </div>
                        <label id="join_our_network_area_sub_section_title_2-error" class="error"
                               for="join_our_network_area_sub_section_title_2"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Join Our Network Area Sub Section Description 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="join_our_network_area_sub_section_description_2"
                                      id="join_our_network_area_sub_section_description_2"
                                      placeholder="Increase revenue through selective offers that connect you to the world's top performing brands"
                                      required
                                      autocomplete="off">{{@$cms->join_our_network_area_sub_section_description_2}}</textarea>
                        </div>
                        <label id="join_our_network_area_sub_section_description_2-error" class="error"
                               for="join_our_network_area_sub_section_description_2"
                               style="display: none"></label>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Last Section</h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Last Section. )')}}
                </a>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Last Section Text 1</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="last_section_text_1"
                                   id="last_section_text_1" placeholder="Start Working Faster" required
                                   value="{{@$cms->last_section_text_1}}" autocomplete="off">
                        </div>
                        <label id="last_section_text_1-error" class="error" for="last_section_text_1"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Last Section Text 2</h5>
                        </div>
                        <div class="card-body">
                            <textarea type="text" class="form-control" name="last_section_text_2"
                                      id="last_section_text_2"
                                      placeholder="A porttitor quisque quis vivamus. Quisque odio odio malesuada dignissim."
                                      required
                                      autocomplete="off">{{@$cms->last_section_text_2}}</textarea>
                        </div>
                        <label id="last_section_text_2-error" class="error" for="last_section_text_2"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Last Section Text 3</h5>
                        </div>
                        <div class="card-body">
                            <textarea type="text" class="form-control" name="last_section_text_3"
                                      id="last_section_text_3"
                                      placeholder="Lectus a suspendisse euismod nibh eget viverra. Ultrices praesent orci at et felis. Consequat nunc iaculis sit consectetur. Accumsan magna in metus ut quam eleifend morbi. Egestas neque nisl eu sem a est id pharetra tellus. Neque quam hac pulvinar enim phasellus dolor sed."
                                      required
                                      autocomplete="off">{{@$cms->last_section_text_3}}</textarea>
                        </div>
                        <label id="last_section_text_3-error" class="error" for="last_section_text_3"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Last Section Contact Us Button Name</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="last_section_contact_us_button_name"
                                   id="last_section_contact_us_button_name" placeholder="Contact Us" required
                                   value="{{@$cms->last_section_contact_us_button_name}}" autocomplete="off">
                        </div>
                        <label id="last_section_contact_us_button_name-error" class="error"
                               for="last_section_contact_us_button_name"
                               style="display: none"></label>
                    </div>
                </div>
            </div>

            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Footer Section</h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Footer Section. )')}}
                </a>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Footer Logo</h5>
                        </div>
                        <div class="card-body">
                            @if(@$cms->footer_logo)
                                <div style="background: #070F22;padding: 20px 0;border-bottom: 1px solid #0D386B;">
                                    <img src="{{asset('uploads/logos/'.@$cms->footer_logo)}}" width="400px"
                                         height="200px" alt=""/>
                                </div>
                            @endif
                            <input type="file" class="form-control" accept="image/*" name="footer_logo"
                                   id="footer_logo"
                                   autocomplete="off">
                        </div>
                        <label id="footer_logo-error" class="error" for="footer_logo"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Footer Section Home Text</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="footer_section_home_text"
                                   id="footer_section_home_text" placeholder="Home" required
                                   autocomplete="off" value="{{@$cms->footer_section_home_text}}">
                        </div>
                        <label id="footer_section_home_text-error" class="error" for="footer_section_home_text"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Footer Section Contact Us Text</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="footer_section_contact_us_text"
                                   id="footer_section_contact_us_text"
                                   placeholder="Contact Us"
                                   required
                                   autocomplete="off" value="{{@$cms->footer_section_contact_us_text}}">
                        </div>
                        <label id="footer_section_contact_us_text-error" class="error"
                               for="footer_section_contact_us_text"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Last Section Rights Text</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="last_section_rights_text"
                                   id="last_section_rights_text"
                                   placeholder="© 2022 Athens Marketing. All rights reserved." required
                                   value="{{@$cms->last_section_rights_text}}" autocomplete="off">
                        </div>
                        <label id="last_section_rights_text-error" class="error"
                               for="last_section_rights_text"
                               style="display: none"></label>
                    </div>
                </div>
            </div>

            <br>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Social Link</h1>
                <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                    {{__('( All changes are reflect in website Social Link. )')}}
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Twitter Url</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="twitter"
                                   id="twitter" placeholder="" required value="{{@$cms->twitter}}"
                                   autocomplete="off">
                        </div>
                        <label id="twitter-error" class="error" for="twitter"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Facebook Url</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="facebook"
                                   id="facebook"
                                   placeholder=""
                                   value="{{@$cms->facebook}}"
                                   required
                                   autocomplete="off">
                        </div>
                        <label id="facebook-error" class="error"
                               for="facebook"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Google Url</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="google"
                                   id="google"
                                   placeholder="" required
                                   value="{{@$cms->google}}" autocomplete="off">
                        </div>
                        <label id="google-error" class="error"
                               for="google"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12" style="padding:20px;justify-content:center;display: flex;">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')

@endsection
