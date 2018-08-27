
@extends('layout.index')

@section('content')
	
	<div class="page-head"> 
      <div class="container">
          <div class="row">
              <div class="page-head-content">
                  <h1 class="page-title">List real estate</h1>               
              </div>
          </div>
      </div>
  </div>
  <!-- End page header -->

  <!-- property area -->
  <div class="properties-area recent-property" style="background-color: #FFF;">
      <div class="container">  
          <div class="row">
               
          <div class="col-md-3 p0 padding-top-40">
              <div class="blog-asside-right pr0">
                  <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                      <div class="panel-heading">
                          <h3 class="panel-title">real estate search</h3>
                      </div>
                      <div class="panel-body search-widget">
                          <form action="" class=" form-inline"> 
                              <fieldset>
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <input type="text" class="form-control" placeholder="Key word">
                                      </div>
                                  </div>
                              </fieldset>

                              <fieldset>
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                              <option>District 1</option>
								                              <option>District 5</option>
								                              <option>Thu Duc</option>
								                              <option>Binh Duong</option>
								                              <option>Dong Nai</option>
								                              <option>Cu Chi</option>
                                          </select>
                                      </div>
                                  </div>
                              </fieldset>

                              <fieldset >
                                  <div class="row">
                                      <div class="col-xs-12">  
                                          <input class="button btn largesearch-btn" value="Search" type="submit">
                                      </div>  
                                  </div>
                              </fieldset>                                     
                          </form>
                      </div>
                  </div>

                  <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                      <div class="panel-heading">
                          <h3 class="panel-title">Recommended</h3>
                      </div>
                      <div class="panel-body recent-property-widget">
                                  <ul>
                                  <li>
                                      <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                          <a href="detail"><img src="admin_assets/assets/img/demo/small-property-2.jpg"></a>
                                          <span class="property-seeker">
                                              <b class="b-1">A</b>
                                              <b class="b-2">S</b>
                                          </span>
                                      </div>
                                      <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                          <h6> <a href="detail">Super nice villa </a></h6>
                                          <span class="property-price">3000000$</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                          <a href="detail"><img src="admin_assets/assets/img/demo/small-property-1.jpg"></a>
                                          <span class="property-seeker">
                                              <b class="b-1">A</b>
                                              <b class="b-2">S</b>
                                          </span>
                                      </div>
                                      <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                          <h6> <a href="detail">Super nice villa </a></h6>
                                          <span class="property-price">3000000$</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                          <a href="detail"><img src="admin_assets/assets/img/demo/small-property-3.jpg"></a>
                                          <span class="property-seeker">
                                              <b class="b-1">A</b>
                                              <b class="b-2">S</b>
                                          </span>
                                      </div>
                                      <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                          <h6> <a href="detail">Super nice villa </a></h6>
                                          <span class="property-price">3000000$</span>
                                      </div>
                                  </li>

                                  <li>
                                      <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                          <a href="detail"><img src="admin_assets/assets/img/demo/small-property-2.jpg"></a>
                                          <span class="property-seeker">
                                              <b class="b-1">A</b>
                                              <b class="b-2">S</b>
                                          </span>
                                      </div>
                                      <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                          <h6> <a href="detail">Super nice villa </a></h6>
                                          <span class="property-price">3000000$</span>
                                      </div>
                                  </li>

                              </ul>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-9  pr0 padding-top-40 properties-page">
              <div class="col-md-12 clear"> 
                  <div class="col-xs-10 page-subheader sorting pl0">
                      
                  </div>

                  <div class="col-xs-2 layout-switcher">
                      <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                      <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                  </div><!--/ .layout-switcher-->
              </div>

              <div class="col-md-12 clear"> 
                  <div id="list-type" class="proerty-th">
                      <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-3.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div>


                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-2.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-1.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-3.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-1.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div>

                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-2.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-3.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-2.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 

                          <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detail" ><img src="admin_assets/assets/img/demo/property-1.jpg"></a>
                                  </div>

                                  <div class="item-entry overflow">
                                      <h5><a href="detail"> Super nice villa </a></h5>
                                      <div class="dot-hr"></div>
                                      <span class="pull-left"><b> Area :</b> 120m </span>
                                      <span class="proerty-price pull-right"> $ 300,000</span>
                                      <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                      <div class="property-icon">
                                          <img src="admin_assets/assets/img/icon/bed.png">(5)|
                                          <img src="admin_assets/assets/img/icon/shawer.png">(2)|
                                          <img src="admin_assets/assets/img/icon/cars.png">(1)  
                                      </div>
                                  </div> 
                              </div>
                          </div> 
                  </div>
              </div>
              
              <div class="col-md-12"> 
                  <div class="pull-right">
                      <div class="pagination">
                          <ul>
                              <li><a href="#">Prev</a></li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">Next</a></li>
                          </ul>
                      </div>
                  </div>                
              </div>
          </div>  
          </div>              
      </div>
  </div>

@endsection