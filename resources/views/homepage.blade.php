@extends('layouts.apps')
@section('content')

<div class="container">
    <div class="row">

    <div class="col-md-4 col-sm-10" style="margin-top: 10%;text-align: center;">
        <div class="login" >

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
              
                   <h2> <img src="images/echaseLogo.png" width="60px" alt="ECHASE" style="border-radius:40px "> EOMS </h2> <br>
             <h5 > ECHASE Online Management System </h5>

                   <br>
                         <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Your E-Mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div style="text-align: right;border-top: solid;margin-top: 10px">
                              <br>
                                <p class="change_link">Don't have EOMS Account?
                                    <a href="{{ route('register') }}" class="to_register"> <b>Student Signup/Register Here</b> </a>
                                </p>
                                <p class="change_link">Don't have EOMS Account?
                                    <a href="{{ route('register') }}" class="to_register"> <b>Staff Signup/Register Here</b> </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                            </div>
                        </form>
                    </section>
                </div>
            </div>
    </div>
</div>

 <div class="col-md-2 col-sm-1"></div>
 <div class="col-md-6 col-sm-10">
    <div class="" style="margin-top:40px;padding:0px auto 20px auto;width: 100%;font-size:14px;text-align: left;">

                    <a style="color:#d6e3ef" href="/apply">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp; Want to Join ECHASE ? <b style="font-size:18px;color:orange "> Apply Here!!.</b>
                    </a><br>
                    <br>
                   
                    <a style="color:#d6e3ef" href="">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Student &amp; Don't have EOMS Account? Click here to Sign Up
                    </a>
                    <br>
                    <br>
                    <a style="color:#d6e3ef" href="">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Staff &amp; Don't have EOMS Account? Click here to Sign Up
                    </a>
                    <br>
                    <br>

            <div style="background-color:#31708f;border-radius: 5px;padding: 1.5em">
                  
                    <h6>Students Registrations Instructions &amp; Signup Instructions</h6>       
                        <br>  
                                                   
        <!-- Start HELP -->
        <div class="row">
        <div class="col-md-4">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="true">
              <p></span>Step: 1&nbsp; Create Account</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
              aria-controls="pills-profile" aria-selected="false">
              <p><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Step: 2&nbsp; Personal Background Information</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab"
              aria-controls="pills-login" aria-selected="false">
                  <p ><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> Step: 3&nbsp; Login</p>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-registration-tab" data-toggle="pill" href="#pills-registration" role="tab"
              aria-controls="pills-registration" aria-selected="false">
                  <p></span>Step: 4&nbsp; Registration Instructions &amp; T/Fee Payments -:</p>
              </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" id="pills-help-tab" data-toggle="pill" href="#pills-help" role="tab"
              aria-controls="pills-help" aria-selected="false">
                  <p><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>NB: Help and Support Instructions</p>
              </a>
          </li>
        </ul>
    </div>

    <div class="col-md-8" style="background-color:#41687b;border-radius: 4px ">
        <br>
       <div class="tab-content pt-2 pl-1" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
           <p><em>Use the ECHASE registration Number to sign up</em><br><br>
                                        
                       <b> Password Instructions:</b></p>

                        <p>You are required to use Strong Passwords. Password must contain atleast one Uppercase letter,atleast one lowercase letter,atleast one Numeric Digit and atleast one Special Symbol like ($,%,*,-,+,=,! ..).<br>
                        e.g <strong> "eThaN**2018" </strong> is a strong password commbination and is accepted by system.</p>
        </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <p>Complete your Background Profile Information <em>You will be required to provide your Form IV Index Number, Mobile phone contacts and other details as directed. Please Provide correct Information. Invalid Information will not be accepted by the University and your registration status may become invalid.</em></p>
        </div>
          <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
         <p><em>Use your registration number and Password to login and check your registration status,Balance and More..</em></p>
        </div>
        <div class="tab-pane fade" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
         <p>After you have logged in Please Make sure your fee payments is balanced. and your status is marked as registered.<br>
                        
            &nbsp;&nbsp; Payinslip Instructions
                        <ul>
                         <li>Save your payinslip transaction Number as soon as posible in the system
                         </li>
                         <li>The System may take 0 to 24 hours to receive and process your payinslip transaction Numbers from Bank
                         </li>
                         <li>The transaction number in your payinslip to be used in the system is as shown on the image below
                            <br>
                         <img src="/themes/img/crdb_sample.jpg"> <em> Select the characters from Your Payinslip Transaction Number as highlighted with grey color in this Sample Image. Skip all the first four characters<br>
                         starting with BRFO </em>
                          </li>
                         <li>-----------</li>
                         <li>The payinslip slip must be submited to the institute to get a receipt, after the payinslip has a receipt it will be added to the system by accounts
                         </li>
                         <li>NBPlease make sure you skip the first four characters in the pay in slip in order for the system to recognize it.
                         </li>
                        </ul>            
        </div>

        <div class="tab-pane fade" id="pills-help" role="tabpanel" aria-labelledby="pills-help-tab">
         <p><em>In case you face any problems. Please report to the institute for assistance with the registration process</em></p>
        </div>

        </div>  

            </div>

        </div>
        
     </div>   
<!-- END TEST -->

     <div style="margin-top: 100px; align-content: center;">
       <p>Copyright © 2019<b> EOMS</b> Ver 1.0</p>
     </div>
</div>

</div>
</div>

@endsection
