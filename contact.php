<?php 
    $title = 'Contact';
require_once  'include_require/header.php' ;
 require_once  'dbase/conn.php' ;

 $result=$crud->getProgrammes();

?>
<br>
<br>
<br>




         <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
              <div class="row">
                  <div class="col-lg-12 col-12 p-0 contact-us">
                    <h4 class="">CONTACT US</h4><hr>
                  </div>
              </div>
              <div class="row bg-light pt-3 pb-3 mb-4">
                  <div class="col-lg-12">
                    <h6>ADDRESS :</h6>
                  </div>
                  <div class="col-lg-4 col-4">
                        Gordon Town, <br/>
                        Kingston 6.
                                                  
                  </div>
                  <div class="col-lg-4 col-4">
                  <p class="m-0 text-danger"><i class="fa fa-phone-square" aria-hidden="true"></i>
                      +1 876-977-1700-5
                  </p>
                  <p class="m-0 text-info"><i class="fa fa-envelope" aria-hidden="true"></i>
                      vtdi.heart-nta.org
                  </p>
                  </div>
                  <div class="col-lg-4 col-4 address-icon text-center text-danger">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
              </div>
              <div class="row bg-light pt-3 pb-3 mb-4">
                  <div class="col-lg-6 col-12">
                    <form>
                      <div class="form-row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Name :">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Subject :">
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Email :">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Mobile :">
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message :"></textarea>
                      </div>
                      <button type="submit" class="btn btn-danger mb-4">Send Message</button>
                    </form>
                  </div>
                  <div class="col-lg-6 col-12">
                  
                  <div style="width: 100%"><iframe width="100%" height="300px"
                   src="https://vtdi.heart-nta.org/&ie=UTF8&t=&z=14&iwloc=A&output=embed" 
                   frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://vtdi.heart-nta.org/">Create Google Map</a> by
                   <a href="https://vtdi.heart-nta.org/">Measure area on map</a></iframe></div>
                      <div class="icons">
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-linkedin"></i></a>
                          <a href=""><i class="fa fa-github"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    </body>


<br>
<br>
<br>
<br>

    <?php require_once  'include_require/footer.php' ;?>