
@extends('layout.index')

@section('content')
	
 	<div class="page-head"> 
      <div class="container">
          <div class="row">
              <div class="page-head-content">
                  <h1 class="page-title">get in touch</h1>               
              </div>
          </div>
      </div>
  </div>
  <!-- End page header -->

  <!-- property area -->
  <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
      <div class="container">  
          <div class="row">
              <div class="col-md-8 col-md-offset-2"> 
                  <div class="" id="contact1">                        
                      <div class="row">
                          <div class="col-sm-4">
                              <h3><i class="fa fa-map-marker"></i> Address</h3>
                              <p>147-149 Vo Van Tan
                                  <br>Ward 6, District 3 
                                  <br>Ho Chi Minh City
                                  <br>
                                  <strong>Viet Nam</strong>
                              </p>
                          </div>
                          <!-- /.col-sm-4 -->
                          <div class="col-sm-4">
                              <h3><i class="fa fa-phone"></i> Call center</h3>
                              <p class="text-muted">Please call us at the following.</p>
                              <p><strong>+84 987 6543</strong></p>
                              <p><strong>+84 987 3456</strong></p>
                          </div>
                          <!-- /.col-sm-4 -->
                          <div class="col-sm-4">
                              <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                              <p class="text-muted">Please feel free to write an email to us.</p>
                              <ul>
                              	<li><strong><a href="#"> Admin@hoangtri.me</a></strong>   </li>
                              </ul>
                          </div>
                          <!-- /.col-sm-4 -->
                      </div>
                      <!-- /.row -->
                      <hr>
                      <h2>Contact form</h2>
                      <form>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="firstname">Firstname</label>
                                      <input type="text" class="form-control" id="firstname">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="lastname">Lastname</label>
                                      <input type="text" class="form-control" id="lastname">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" class="form-control" id="email">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="subject">Subject</label>
                                      <input type="text" class="form-control" id="subject">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="message">Message</label>
                                      <textarea id="message" class="form-control" rows="4"></textarea>
                                  </div>
                              </div>
                              <div class="col-sm-12 text-center">
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                              </div>
                          </div>
                          <!-- /.row -->
                      </form>
                  </div>
              </div>    
          </div>
      </div>
  </div>

@endsection