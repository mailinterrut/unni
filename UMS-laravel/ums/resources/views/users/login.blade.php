@include('layouts.header');

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                <form class="mx-1 mx-md-4 login_form_data"  method="GET" action="{{ route('login') }}" >

                   

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control login_user_email" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control login_user_passwd" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div> 

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg login_to_dashboard">Login</button>
                  </div>

                </form>
                <label class="form-check-label" >  Don't having account <a href="{{ url('register') }}">Register</a></label>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    $('body').on('click' , '.login_to_dashboard' , function() {
 
        let th = $(this);
        let login_user_email = th.parents('.login_form_data').find('.login_user_email').val().trim();
        let login_user_passwd = th.parents('.login_form_data').find('.login_user_passwd').val().trim();

        if(login_user_email.length === 0 || typeof login_user_email === 'undefined'){
            alert('emial is null');
            return;
        }else if(!validateEmail(login_user_email)){
            alert('invalid email');
            return;
        }

        if(login_user_passwd.length === 0 || typeof login_user_passwd === 'undefined'){
            alert('assword is null');
            return;
        }


    });
</script>