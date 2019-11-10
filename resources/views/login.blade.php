<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">

    <style>
      .login-logo {
        height: 90px;
      }

      .login-topnav {
        box-shadow: 0 4px 2px -2px gray;
      }
      .form-title h3{
        font-size: 30px;
        font-weight: bold;
      }

      .login-wrapper {
        background: url('{{asset("img/login-bg.png")}}');
        height: 100vh;
        width: 100%;
        background-size: 100%;
        background-repeat: no-repeat;
      }

      .card-login {
        background-color: black;
        color: white;
        margin-top: 50px;
      }

      .card-login-info{
        margin-top: 50px;
        margin-bottom: 20px;
      }

      .tab-info{
        margin-top: 20px;
      }
      .footer {
        /*position: absolute;*/
        bottom: 0;
        width: 100%;
        height: 50px; /* Set the fixed height of the footer here */
        line-height: 50px; /* Vertically center the text there */
        box-shadow: 0 -4px 2px -2px gray;
        background-color: white;
        flex-shrink: 0;
        margin-top: 140px;
      }
      .footer-copyright{
        color: black;
      }

    </style>
  </head>
  <body class="login-wrapper">
    <div class="container-fluid bg-white login-topnav">
      <img class="login-logo" src="{{asset('img/login-logo.png')}}">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        <div class="card card-login">
        <div class="card-body">
          <form id="form-login" method="post" action="/login">
            <div class="form-title"><h4>Login</h4></div>
            <div class="form-group mt-3">
              <div class="form-label-group">
                <input type="text" id="username" name="email" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
              </div>
            </div>
            <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
            <!-- <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember_me" name="remember_me">
                  Remember me
                </label>
              </div>
            </div> -->
<!--           <div class="text-right my-3">
            <a class="forgot-password" href="forgot-password.php">Forgot Password?</a>
          </div> -->
            <button type="submit" class="btn btn-primary btn-block" name="btn-submit">Login</button>
          </form>
        </div>
        <div class="card-footer" style="background-color: gray; padding: 20px 20px 40px; ">
          <div class="card-footer-info">
          <b>Contact us:</b>
          <p>Rm. 212 UST Tan Yan Kee Student Center
          University of Santo Tomas, España Bldvd.,
          Manila, 1015 PHILIPPINES </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 offset-md-1">
      <div class="card card-login-info">
        <div class="card-body">
       
    <!-- <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
            <div class="tab-info"> -->
              <h4><u>About</u></h4>
              <h6 class="text-justify">
              The Student Activities Records stores all student participants in the university-wide student organizations seminars/workshops and can generate a summary of participation of a student during their stay in the university for future reference.</h6>
              
              <h6 class="text-justify">
              To acquire a certificate, the student / alumni should go to the Office for Student Affairs to file a request.
              </h6>
            </div>
            </div>
            </div>
            </div>
           
    <!-- <div class="col-md-7 offset-md-1">
      <div class="card card-login-info">
        <div class="card-body">
          <h4>What is Student Activities Records System?</h4>
        <nav class="mt-3">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="true">About</a>
            <a class="nav-item nav-link" id="nav-so-tab" data-toggle="tab" href="#nav-so" role="tab" aria-controls="nav-so" aria-selected="true">Student Organization</a>
            <a class="nav-item nav-link" id="nav-socc-tab" data-toggle="tab" href="#nav-socc" role="tab" aria-controls="nav-socc" aria-selected="false">SOCC</a>
            <a class="nav-item nav-link" id="nav-osa-tab" data-toggle="tab" href="#nav-osa" role="tab" aria-controls="nav-osa" aria-selected="false">OSA</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
            <div class="tab-info">
              <h5>About</h5>
              <p>
              The Student Activities Records stores all student participants in the university-wide student organizations seminars/workshops and can generate a summary of participation of a student during their stay in the university for future reference.</p>
              
              <p>
              To acquire a certificate, the student / alumni should go to the Office for Student Affairs to file a request.
              </p>
            </div>
          </div>


          <div class="tab-pane fade" id="nav-so" role="tabpanel" aria-labelledby="nav-so-tab">
            <div class="tab-info">
              <h5>Student Organization</h5>
              <p>
              1. How do I register for a Student Activities Records System account? </p>
              <p> The secretary of the student organization will have to go to the Office for Student Affairs to request for an account to be used in the system. Only one (1) account can be registered per organization. Should they wish to change their password, users can do it after logging in. Minimum of six (6) alphanumeric characters must be used for the password. 
              </p>

              <p>
              2. What if I forgot my password?</p>
              <p>In case a user forgets their password, the secretary or a representative must go to the Office for Student Affairs to request to reset their password.
              </p>

              <p>
              3. What do I need to do in the Student Activities Records System? </p>
              <p>After a seminar/workshop is concluded, the student organization must fill up the post-event form that includes details such as the event title, date, eReserve number, academic year and semester etc. The student organization should also submit the list of student participants and other needed hard copy of documents to the SOCC.
              </p>

              <p>
              4. What do I need to do if my account has been disabled? </p>
              <p>User must go to the Office for Student Affairs for clarification and further details in regards with the disabled account.
              </p>
            </div>
          </div>

          
          <div class="tab-pane fade" id="nav-socc" role="tabpanel" aria-labelledby="nav-socc-tab">
            <div class="tab-info">
              <h5>Student Organization Coordinating Council</h5>
              <p>
              1. How do I register for a Student Activities Records System account? </p>
              <p> A representative from the SOCC will have to go to the Office for Student Affairs to request for an account to be used in the system. The number of accounts that can be registered for the SOCC would be under the discretion of OSA, the system administrator. Should they wish to change their password, users can do it after logging in. Minimum of six (6) alphanumeric characters must be used for the password.  
              </p>

              <p>
              2. What if I forgot my password?</p>
              <p>In case a user forgets their password, the secretary or a representative must go to the Office for Student Affairs to request to reset their password.
              </p>

              <p>
              3. What do I need to do in the Student Activities Records System? </p>
              <p>The post-event report submitted by the student organization must be evaluated by the officer-in-charge from SOCC. The officer-in-charge should corroborate the submitted documents to the ones they checked on the checklist. After which, it can be endorsed to OSA. In the case of failing the requirements, SOCC can deny the endorsement of the event and return it to the SO user, appended with the requirements they are lacking for compliance. Corrections can be put in the remarks.
              </p>

              <p>
              4. What do I need to do if my account has been disabled? </p>
              <p>User must go to the Office for Student Affairs for clarification and further details in regards with the disabled account.
              </p>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-osa" role="tabpanel" aria-labelledby="nav-osa-tab">
            <div class="tab-info">
              <h5>Office for Student Affairs</h5>

              <p>
             The OSA will be able to approve endorsed events by the SOCC. Approving an endorsed event will insert the said report into the database and will appear as searchable for certifications of students. In the case of OSA denying an event, the endorsed event will be sent back to SOCC administrator for review, appended with the reason of its denial.
              </p>

              <p>
              The Office for Student Affairs can only print a certification if the following conditions are met:
              <ol> 
              <li>The student has attended an event (workshop/seminar) that has been cleared by OSA.
              <li>The requestor is a student or alumnus of the University of Santo Tomas
                  Printing of certification can only be done upon student’s request.
              </ol>
              </p>

            </div>
          </div>
        </div>
        </div>
      </div>
      
    </div>
  </div>
    </div> -->
    
 
  <!-- <footer class="footer">
      <div class="container text-center">
        <span class="footer-copyright">Copyright</span>
      </div>
    </footer> -->

  </body>
  </html>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script>
      $(document).ready(function() {

        $(document).on('submit', '#form-login', function() {

          $.ajax({
            url: "login",
            type: "POST",
            beforeSend: function(request) {
              request.setRequestHeader("Authority", $('#token').val());
            },
            data: $(this).serialize(),
            processData: false,
            success: function(data) {
              if (data.success === true)  {
                localStorage.setItem('token', data.token);
                window.location.href = data.url;
              }
              else {
                alert(data.error);
              } 
                
             
            }
          });
          return false;
        });
      });
    </script>
  </body>

</html>
