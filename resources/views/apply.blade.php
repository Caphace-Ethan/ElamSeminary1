@extends('layouts.apps')
@section('content')

<div class="container-fluid">
    <div class="row"style="text-align: center;color: whitesmoke;padding-top:20px; padding-bottom:20px;background-color:#41687b; ">
       <div class="col-md-2">
         
       </div>
        <div class="col-md-6">
          <h5>ELAM CHRISTIAN HARVEST SEMINARY - ECHASE - 2019/2020 </h5>
        </div>
        <div class="col-md-4">
          <h6><a href="/homepage"><i class="fas fa-home"></i> Return To Homepage </a></h6>
        </div>

    </div>
<br>
   <div class="row">
     <div class="col-1"></div>
    <div class="col-5"style="text-align: left;color: darkblue">
      <div class="card">
      <div class="card-header">
       <h6><i class="fas fa-caret-right"></i> SELECT THE PROGRAMME YOU WANT TO APPLY FOR</h6>
       </div>
       <div class="card-body">

          <h6><a href="apply/certificate" style="color: darkblue;"><i class="fa fa-link" ></i>  CLICK HERE TO APPLY FOR CERTIFICATE PROGRAMME </a></h6>
          <p><i class="fas fa-door-open"></i> Application Opens Until 9th November</p>
           <br>       
          <h6><a href="apply/diploma" style="color: darkblue;"><i class="fa fa-link" ></i>  CLICK HERE TO APPLY FOR ORDINARY DIPLOMA </a></h6>
          <p><i class="fas fa-door-open"></i> Application Opens Until 9th November</p>
            <br>
          <h6><a href="apply/bachelor" style="color: darkblue;"><i class="fa fa-link" ></i> CLICK HERE TO APPLY FOR BACHELOR DEGREE </a></h6>
          <p style="color:red"><i class="fas fa-exclamation-triangle"></i> Application Closed!</p>
           <br> 
          <h6><a href="apply/masters" style="color: darkblue;"><i class="fa fa-link" ></i>  CLICK HERE TO APPLY FOR MASTERS PROGRAMME </a></h6>
          <p style="color:red"><i class="fas fa-exclamation-triangle"></i> Application Closed!</p>
          


             <br>
             <br>

</div>
</div>
</div>
 <div class="col-md-1 col-sm-1"></div>
 <div class="col-md-5 col-sm-10">
    <div class="" style="margin-top:5px;padding:0px auto 20px auto;width: 100%;font-size:14px;text-align: left;">

                    <a style="color:#d6e3ef" href="/homepage">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp; Already Registered ? 
                        <b>LOGIN Here!</b>
                    </a>
                    <br>
                   
                    <br>

            <div style="background-color:#31708f;border-radius: 5px;padding: 1.5em">
                  
                    <h6>Students Application Instructions</h6>       
                        <br>  
                                                   
        <!-- Start HELP -->
        <div class="row">
        <div class="col-md-4">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="true">
              <p></span>Step: 1&nbsp; Select Programme </p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-continue-tab" data-toggle="pill" href="#pills-continue" role="tab"
              aria-controls="pills-continue" aria-selected="false">
              <p><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Step: 2&nbsp; Continuing With Application</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab"
              aria-controls="pills-login" aria-selected="false">
                  <p ><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> Step: 3&nbsp; Already Registered</p>
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
           <p><b>Select the Programme You want to Apply for</b><br><br>
                                        
                         <p>Click the Link of the Programme You want to Apply for And then Follow Instructions that will follow</p>
        </div>
          <div class="tab-pane fade" id="pills-continue" role="tabpanel" aria-labelledby="pills-continue-tab">
            <p>If You have already started the Application: <em><br><br>
             Go to Login Page or Click this Link <br><a href="/homepage"> <h6> Here </h6>  </a> <br> To Login to Your Account and Continue with Your Application or Setting Up our Account.
            </em></p>
        </div>
          <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
         <p>If You have been Registered in Our System: <em><br><br>
             Go to Login Page or Click this Link <br><a href="/homepage"> <h6> Here </h6>  </a> <br> To Login to Your Account and Continue with Your Application or Setting Up our Account.</em></p>
        </div>
        
        <div class="tab-pane fade" id="pills-help" role="tabpanel" aria-labelledby="pills-help-tab">
         <p><b>In case you face any problems.<br><br> Please report to the University for assistance with the Application or Registration process</b></p>
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
