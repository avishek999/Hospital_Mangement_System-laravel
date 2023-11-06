
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
     
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
<div class="container-fluid page-body-wrapper">
  <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
    @csrf

  <div class="container">
    <section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4 h-100">
          <div class="row g-0">
          <div class="col-xl-6 d-none d-xl-block">
              <img src="https://img.freepik.com/free-photo/beautiful-young-female-doctor-looking-camera-office_1301-7807.jpg?w=740&t=st=1699247779~exp=1699248379~hmac=cded330acb9650003ca12011f8f0014f775e4649bd58a0dd49e91111bc4a82e2"
                alt="Sample photo" class="img.fluid  "
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; width:4rem; height:45rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black bg-light">
                <h3 class="mb-5 text-uppercase">Doctors registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" style="color:black" placeholder="Write Doctor's Name" class="form-control form-control-lg bg-light" name="name" />
                      <label class="form-label" for="form3Example1m" >Doctors name</label>
                    </div>
                    </div>

                
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="number" id="form3Example1m1"placeholder="Write Your's Phone Number" class="form-control form-control-lg bg-light" name="phone" />
                      <label class="form-label" for="form3Example1m1">phone number</label>
                    </div>
                    </div>
                  </div>

            
               

                <div class="row">
                  <div class="col mb-4">

                    <select class="select" name="Speaciality">
                      <option value="1">Speaciality</option>
                      <option value="skin">skin</option>
                      <option value="heart">heart</option>
                      <option value="eye">eye</option>
                      <option value="nose">nose</option>

                    </select>

                  </div>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" class="form-control form-control-lg bg-light" placeholder="Enter Room number" name="room" />
                  <label class="form-label"  for="form3Example9">Room No</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="file" id="form3Example90" class="form-control form-control-lg " name="file" />
                  <label class="form-label" for="form3Example90">Profile Picture</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="email" id="form3Example97" class="form-control form-control-lg" name="email"/>
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button  class="btn btn-warning btn-lg ms-2" name="submit">SUBMIT FORM</button>
                  <!-- <button  class="btn btn-warning btn-lg ms-2" name="submit">Submit form</button> -->
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
