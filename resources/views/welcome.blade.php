@extends("template.default")


@section("title")
    Wap ERP Solutions
@endsection


@section("custom-css")
    <link rel="stylesheet" href="lang/css/welcome.css?cache=<?php echo time();?>">
@endsection


@section("custom-js")
    <script src="lang/js/welcome.js?cache=<?php echo time();?>"></script>
@endsection


@section("content")

    <div class="container bg-white shadow-lg my-4">
        <div class="row">
            <div class="col-md-6 p-0 welcome-image"></div>

            <div class="col-md-6 py-5 overflow-hidden">
                <div class="branding">
                    <h1>WES</h1>
                    <p>WAP ERP SOLUTIONS</p>
                </div>
                <div class="welcome-form p-4">
                    <form class="signup-form" autocomplete="off" action="/api/company" method="post">
                        @csrf
                        <!--Start Step-1-->
                        <div class="step-1">
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Company Name</label>
                                <input type="text" name="company_name" value="Komal Chemiequip" class="form-control welcome-form-input rounded-0 required company-name" placeholder="COMPANY NAME" maxlength="80">
                            </div>
                            <div class="form-group mb-4 overflow-hidden d-none">
                                <label class="d-none">ERP url</label>
                                <input type="url" name="erp_url" class="form-control welcome-form-input rounded-0 erp-url" placeholder="ERP URL">
                            </div>
                            <div class="form-group mb-4 overflow-hidden d-none">
                                <label class="d-none">Password</label>
                                <input type="password" name="password" class="form-control welcome-form-input rounded-0 password" placeholder="PASSWORD" maxlength="9">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Tagline</label>
                                <input type="text" name="tagline" value="Manufacturer" class="form-control welcome-form-input rounded-0" placeholder="TAGLINE" maxlength="95">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Website</label>
                                <input type="website" name="website" value="http://komalchemiequip.com" class="form-control welcome-form-input rounded-0 url" placeholder="WEBSITE" maxlength="95">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Email</label>
                                <input type="email" name="company_email" value="info@komalchemiequip.com" class="form-control welcome-form-input rounded-0 required" placeholder="EMAIL ID" maxlength="80">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Founder</label>
                                <input type="text" name="founder" value="Shukund Gupta" class="form-control welcome-form-input rounded-0 required" placeholder="FOUNDER" maxlength="80">
                            </div>
                            <div class="form-group mb-5 overflow-hidden">
                                <label class="d-none">Founder email</label>
                                <input type="email" name="founder_email" value="shukundgupta@gmail.com" class="form-control welcome-form-input rounded-0 required" placeholder="FOUNDER EMAIL ID" maxlength="95">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn float-right next-btn step-1-next-btn">
                                    NEXT <i class="fa fa-angle-double-right"></i>
                                </button>
                            </div>

                        </div>
                        <!--End Step-1-->

                        <!-- Start Step-2-->
                         <div class="step-2 d-none">
                         <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Contact number</label>
                                <input type="number" name="contact_number" value="7666510624" class="form-control welcome-form-input rounded-0 required" placeholder="CONTACT NUMBER" maxlength="15">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Street address</label>
                                <input type="text" name="street_address" value="Andheri east, Mumbai" class="form-control welcome-form-input rounded-0 required" placeholder="STREET ADDRESS">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">City</label>
                                <input type="text" name="city" value="Mumbai" class="form-control welcome-form-input rounded-0 required" placeholder="CITY" maxlength="80">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">State</label>
                                <input type="text" name="state" value="Maharashtra" class="form-control welcome-form-input rounded-0 required" placeholder="STATE" maxlength="80">
                            </div>
                            <div class="form-group mb-4 overflow-hidden">
                                <label class="d-none">Country</label>
                                <input type="text" name="country" value="India" class="form-control welcome-form-input rounded-0 required" placeholder="COUNTRY">
                            </div>
                            <div class="form-group mb-5 overflow-hidden">
                                <label class="d-none">Pincode</label>
                                <input type="number" name="pincode" value="400099" class="form-control welcome-form-input rounded-0 required" placeholder="PIN CODE" maxlength="8">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn float-left back-btn step-2-back-btn">
                                <i class="fa fa-angle-double-left"></i> BACK 
                                </button>
                                <button type="submit" class="btn float-right next-btn step-2-next-btn">
                                    NEXT <i class="fa fa-angle-double-right"></i>
                                </button>
                            </div>                            
                         </div>
                        <!-- End Step-2-->

                        <!--Start Step-3-->
                        <div class="step-3 d-none">
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">GSTIN</label>
                                <input type="text" name="gstin" value="27AABCK5013D1Z2" placeholder="GSTIN" class="form-control welcome-form-input rounded-0" maxlength="20">
                            </div>
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">Office Starts at</label>
                                <input type="time" name="office_starts_at" value="10.00" class="form-control welcome-form-input rounded-0 required">
                            </div>
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">Office ends at</label>
                                <input type="time" name="office_ends_at" value="16.00" class="form-control welcome-form-input rounded-0 required">
                            </div>
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">Established in</label>
                                <input type="date" name="company_estd" value="1989" class="form-control welcome-form-input rounded-0 required" maxlength="20">
                            </div>
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">Facebook page url</label>
                                <input type="url" name="facebook_url" placeholder="FACEBOOK PAGE URL" class="form-control welcome-form-input rounded-0 url">
                            </div>
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">Twitter page url</label>
                                <input type="url" name="twitter_url" placeholder="TWITTER PAGE URL" class="form-control welcome-form-input rounded-0 url">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn float-left back-btn step-3-back-btn">
                                <i class="fa fa-angle-double-left"></i> BACK 
                                </button>
                                <button type="submit" class="btn float-right next-btn step-3-next-btn">
                                    NEXT <i class="fa fa-angle-double-right"></i>
                                </button>
                            </div>

                        </div>
                        <!--End Step-3-->

                        <!--Start Step-4-->
                        <div class="step-4 d-none">
                            <div class="form-group overflow-hidden mb-4">
                                <label class="d-none">WhatsApp Number</label>
                                <input type="number" name="whats_app" value="7738819993" placeholder="WHATSAPP NUMBER" class="form-control welcome-form-input rounded-0">
                            </div>
                            <div class="form-group overflow-hidden mb-5">
                                <label>Category</label>
                                <select name="category" class="form-control required">
                                    <option>Education</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn float-left back-btn step-4-back-btn">
                                <i class="fa fa-angle-double-left"></i> BACK 
                                </button>
                                <button type="submit" class="btn float-right submit-btn rounded-0">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                        <!--End Step-4-->

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

<!--start from 25.50 of CH-14-->