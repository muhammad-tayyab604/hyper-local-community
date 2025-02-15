@extends('layouts.app')
@section('content')



    <section>

        <div class="container mt-5">

            <div class="row">
                <div class="col-10">
                    <p class="interested mb-0">Construction updates of Our Project</p>



                </div>
                <div class="col-2 mb-0 mt-4">

                        <div class="d-flex mb-0">

                            <img src="images/Like.svg" class="img-fluid me-2">
                            <img src="images/Duplicate.svg" class="img-fluid me-2">
                            <img src="images/Share.svg" class="img-fluid me-2">
                            <img src="images/Print.svg" class="img-fluid me-2">

                        </div>


                </div>

            </div>

            <div class="row">

                <div class="col-9">
                    <div class="d-flex mt-0">
                        <img src="images/clip.svg" class="img-fluid">
                        <p class="gray-color my-2 ms-1">Brooklyn, New York, USA</p>

                      </div>

                </div>
                <div class="col-3 text-end">
                    <p class="gray-color mb-0 mt-2">Home / Projects/ <span style="color: black;"><b>Monarch One-1</b></span> </p>


                </div>

            </div>

            <div class="row mt-4">

                <div class="col-8">
                    <img src="images/projimage1.svg" class="img-fluid">

                    <div class="card rounded p-3 mt-3">

                        <div class="row ms-4">

                            <div class="col-3">

                                <p>Bedrooms</p>
                                <div class="d-flex">
                                    <img src="images/bed1.svg" class="img-fluid me-1">
                                    <p class="my-1">3 Beds</p>
                                </div>

                            </div>

                            <div class="col-3">

                                <p>Bathrooms</p>
                                <div class="d-flex">
                                    <img src="images/bed3.svg" class="img-fluid me-1">
                                    <p class="my-1">2 Baths</p>
                                </div>

                            </div>

                            <div class="col-3">

                                <p>Garage</p>
                                <div class="d-flex">
                                    <img src="images/bed2.svg" class="img-fluid me-1">
                                    <p class="my-1">1 Garage</p>
                                </div>

                            </div>


                            <div class="col-3">

                                <p>Garage</p>
                                <div class="d-flex">
                                    <img src="images/bed4.svg" class="img-fluid me-1">
                                    <p class="my-1">1,567 sqft</p>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card rounded mt-5 p-4">
                        <div class="ms-4 me-4">

                            <p class="mt-3 desc">Description</p>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit augue, hendrerit et tempor ac, rutrum in diam. Mauris semper augue nec gravida aliquam. Duis ut arcu et ante tincidunt bibendum nec ut nisl. Ut bibendum, justo sed vestibulum malesuada, sapien metus pharetra nunc, nec vulputate ipsum tellus id erat. Nullam augue metus, accumsan a justo eget, rutrum accumsan orci. Mauris libero mi, laoreet a viverra vitae, sagittis eget eros. Integer vel quam interdum, condimentum orci eget, sodales sem.</p>

                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit augue, hendrerit et tempor ac, rutrum in diam. Mauris semper augue nec gravida aliquam. Duis ut arcu et ante tincidunt bibendum nec ut nisl. Ut bibendum, justo sed vestibulum malesuada, sapien metus pharetra nunc, nec vulputate ipsum tellus id erat. Nullam augue metus, accumsan a justo eget, rutrum accumsan orci. Mauris libero mi, laoreet a viverra vitae, sagittis eget eros. Integer vel quam interdum, condimentum orci eget, sodales sem.
                        </p>

                        <p class="read-more">Read More</p>

                        <p class="mt-5 desc">Documents</p>

                            <div class="row mb-5">

                                <div class="col-6">

                                    <div class="d-flex">

                                        <img src="images/pdfimage.svg" class="img-fluid me-3">
                                        <p class="me-3 my-1">propertydetails.pdf</p>
                                        <p class="downimage my-1">Download</p>

                                    </div>

                                </div>

                                <div class="col-6">

                                    <div class="d-flex">

                                        <img src="images/pdfimage.svg" class="img-fluid me-3">
                                        <p class="me-3 my-1">floorplandetails.pdf</p>
                                        <p class="downimage my-1">Download</p>

                                    </div>

                                </div>

                            </div>

                            <hr>

                            <p class="mt-5 desc">Location Details</p>
                            <div class="row mt-5">

                                <div class="col-5">

                                    <div class="row">

                                        <div class="col-6">
                                            <p class="fw-bold">Address:</p>
                                            <p class="fw-bold">State/Country:</p>
                                            <p class="fw-bold">City:</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="">123 West Road</p>
                                            <p class="">New York</p>
                                            <p class="">Brooklyn</p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-2"></div>
                                <div class="col-5">

                                    <div class="row">

                                        <div class="col-6">
                                            <p class="fw-bold">Zip:</p>
                                            <p class="fw-bold">Area:</p>
                                            <p class="fw-bold">Country:</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="">12345</p>
                                            <p class="">Brook hill</p>
                                            <p class="">United States</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="map-location d-flex justify-content-center mb-5 mt-5">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.256882266985!2d73.11318133435114!3d33.56098946100269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfece2410eb449%3A0x3d828c0b5b3b7da8!2sPhase%202%20Bahria%20Town%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696844915449!5m2!1sen!2s"
                             width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>


                            <hr>

                            <p class="mt-5 desc">Property Details</p>
                            <div class="row mt-5 mb-5">

                                <div class="col-5">

                                    <div class="row">

                                        <div class="col-6">
                                            <p class="fw-bold">Property ID:</p>
                                            <p class="fw-bold">Price:</p>
                                            <p class="fw-bold">Property Size:</p>
                                            <p class="fw-bold">Year Built:</p>
                                            <p class="fw-bold">Bedrooms:</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="">RH09876</p>
                                            <p class="">$985,000</p>
                                            <p class="">1567 sqft</p>
                                            <p class="">1989</p>
                                            <p class="">3</p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-2"></div>
                                <div class="col-5">

                                    <div class="row">

                                        <div class="col-6">
                                            <p class="fw-bold">Bathrooms:</p>
                                            <p class="fw-bold">Garage:</p>
                                            <p class="fw-bold">Garage Size:</p>
                                            <p class="fw-bold">Property Size:</p>
                                            <p class="fw-bold">Status:</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="">2</p>
                                            <p class="">1</p>
                                            <p class="">285 sqft</p>
                                            <p class="">House</p>
                                            <p class="">For Sale</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <hr>

                            <p class="mt-5 desc">Property Features</p>
                            <div class="row mt-5 mb-5">

                                <div class="col-5">

                                    <div class="d-flex">
                                            <img src="images/feature1.svg" class="img-fluid me-2">
                                            <p class="my-1">Air Conditioning</p>

                                    </div>

                                    <div class="d-flex">
                                        <img src="images/feature2.svg" class="img-fluid me-2">
                                        <p class="my-1">Heater</p>

                                </div>

                                <div class="d-flex">
                                    <img src="images/feature3.svg" class="img-fluid me-2">
                                    <p class="my-1">Lawn</p>

                            </div>

                                </div>
                                <div class="col-2"></div>
                                <div class="col-5">

                                    <div class="d-flex">
                                        <img src="images/feature4.svg" class="img-fluid me-2">
                                        <p class="my-1">Lawndry Room</p>

                                </div>

                                <div class="d-flex">
                                    <img src="images/feature5.svg" class="img-fluid me-2">
                                    <p class="my-1">Swimming Pool</p>

                            </div>

                            <div class="d-flex">
                                <img src="images/feature6.svg" class="img-fluid me-2">
                                <p class="my-1">Dining Room</p>

                        </div>

                                </div>

                            </div>

                            <hr>

                            <p class="mt-5 desc">Floor Plans</p>
                            <div class="mb-5">
                            <div class="d-flex ms-5">
                                <p class="me-auto">First Floor</p>
                                <div class="">
                                    <img src="images/downarrow.svg" class="img-fluid downarrow">
                                    <img src="images/uparrow.svg" class="img-fluid uparrow" style="display: none;">

                                </div>

                            </div>

                            <div class="showimage" style="display: none;" >

                                <img src="images/ship.svg" class="img-fluid">

                            </div>
                            </div>
                            <hr>

                            <p class="mt-5 desc">Property Video</p>
                            <div class="mb-5">
                            <div class="d-flex">
                                <button class="btn btn-light me-3 ">Play Video</button>
                                <button class="btn btn-secondary">360° Virtual Video</button>
                            </div>

                            <img src="images/playvideo.svg" class="img-fluid mt-4">
                            </div>

                            <hr>

                            <p class="mt-5 desc">Walkscore</p>
                            <p class="walkscore">1010 Greenland Avenue</p>

                            <div class="mt-4 mb-5">

                                <div class="d-flex">

                                    <img src="images/walkscore1.svg" class="img-fluid me-4">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 my-2 ">Walk Score</p>
                                        <p class="walk">46/100 <span class="walk1">(somewhat walkable)</span></p>
                                    </div>

                                </div>

                                <div class="d-flex mt-2">

                                    <img src="images/walkscore2.svg" class="img-fluid me-4">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 my-2 ">Transit Score</p>
                                        <p class="walk">46/100 <span class="walk1">(some transit)</span></p>
                                    </div>

                                </div>

                                <div class="d-flex mt-2">

                                    <img src="images/walkscore3.svg" class="img-fluid me-4">
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 my-2 ">Bike Score</p>
                                        <p class="walk">46/100 <span class="walk1">(somewhat bikeable)</span></p>
                                    </div>

                                </div>

                            </div>

                            <hr>

                            <p class="mt-5 desc">What's Nearby</p>
                            <div class="mb-5">
                                <div class="d-flex">
                                    <button class="btn btn-light me-3 ">Education</button>
                                    <button class="btn btn-secondary me-3">Store</button>
                                    <button class="btn btn-secondary">Health & Medical</button>

                                </div>

                                <div class="row">

                                    <div class="col-8">

                                        <div class="mt-4">

                                            <div class="d-flex">

                                                <img src="images/edu.svg" class="img-fluid me-4">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 my-2 ">St. Mary Elementary School</p>
                                                    <p class="">1.4 miles</p>
                                                </div>

                                            </div>



                                        </div>

                                    </div>
                                    <div class="col-4 mt-4">

                                        <img src="images/Rating1.svg" class="img-fluid">
                                        <p>1,645 reviews</p>



                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-8">

                                        <div class="mt-4">

                                            <div class="d-flex mt-2">

                                                <img src="images/edu.svg" class="img-fluid me-4">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 my-2 ">Burtenby Education Center</p>
                                                    <p class="">1.4 miles</p>
                                                </div>

                                            </div>



                                        </div>

                                    </div>
                                    <div class="col-4 mt-4">

                                        <img src="images/Rating2.svg" class="img-fluid">
                                        <p>1,645 reviews</p>



                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-8">

                                        <div class="mt-4">

                                            <div class="d-flex mt-2">

                                                <img src="images/edu.svg" class="img-fluid me-4">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 my-2 ">Jungle Bugs Playgroup</p>
                                                    <p class="">1.4 miles</p>
                                                </div>

                                            </div>



                                        </div>

                                    </div>
                                    <div class="col-4 mt-4">

                                        <img src="images/Rating2.svg" class="img-fluid">
                                        <p>1,645 reviews</p>


                                    </div>

                                </div>



                                </div>

                                <hr>


                                <p class="mt-5 desc">ROI Calculator</p>
                                <div class="d-flex justify-content-center">
                                <div class="col-4">
                                    <div class="card p-3 rounded text-center border-0 shadow">
                                        <p class="mb-0">Totals  Returns</p>
                                        <p class="mb-0">$ 1,500</p>
                                    </div>

                                </div>
                                </div>

                                <div class="color-bar mt-4">
                                    <div class="green"></div>
                                    <div class="yellow"></div>
                                    <div class="blue"></div>
                                  </div>

                                  <div class="row mt-4">
                                    <div class="col-4">
                                        <div class="card p-3 rounded text-center border-0 shadow">
                                            <p class="mb-0">Investment</p>
                                            <p class="mb-0">$ 1,500</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 offset-md-4">
                                        <div class="card p-3 rounded text-center border-0 shadow">
                                            <p class="mb-0">Capital Amount</p>
                                            <p class="mb-0">$ 1,500</p>
                                        </div>
                                    </div>
                                </div>



                                <div class=" mt-4 mb-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Total Amount</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Down Payment</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                              </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Property Tax</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Investment Terms (Year)</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                              </div>

                                        </div>
                                    </div>

                                    <button class="btn my-green white-text mt-5 px-5">Calculate</button>
                                </div>



                                <hr>


                                <div class="mt-5">

                                    <div class="d-flex justify-content-end">

                                        <p class="my-1 me-2 gray-color">Sort By</p>
                                        <div class="dropdown">
                                            <button class="btn btn-light border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Newest
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#">Action</a></li>
                                              <li><a class="dropdown-item" href="#">Another action</a></li>
                                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                          </div>

                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-10">
                                            <div class="d-flex">

                                                <img src="images/circle1.svg" class="img-fluid me-3">

                                                <div class="d-flex flex-column">

                                                    <p class="my-2 mb-0 ms-2 fw-bold">Diane Harper</p>
                                                    <div class="d-flex">

                                                        <img src="images/2.svg" class="img-fluid me-1">
                                                        <p class="my-1">February 12, 2023</p>

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <img src="images/Rating1.svg" class="img-fluid">
                                        </div>
                                    </div>

                                    <p class="mt-3">I have lived in this house for five years, but due to work reasons, I had to leave. However, I feel comfortable living here because of the friendly environment.</p>
                                    <div class="row">

                                        <div class="col-3">
                                            <div class="d-flex">
                                                <img src="images/thumb1.svg" class="img-fluid me-2">
                                                <p class="my-1">11 Likes</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex">
                                                <img src="images/dislike1.svg" class="img-fluid me-2">
                                                <p class="my-1">0 dislike</p>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mt-5">
                                        <div class="col-10">
                                            <div class="d-flex">

                                                <img src="images/circle1.svg" class="img-fluid me-3">

                                                <div class="d-flex flex-column">

                                                    <p class="my-2 mb-0 ms-2 fw-bold">Ernest Phill</p>
                                                    <div class="d-flex">

                                                        <img src="images/2.svg" class="img-fluid me-1">
                                                        <p class="my-1">February 12, 2023</p>

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <img src="images/Rating1.svg" class="img-fluid">
                                        </div>
                                    </div>

                                    <p class="mt-3">I have lived in this house for five years, but due to work reasons, I had to leave. However, I feel comfortable living here because of the friendly environment.</p>
                                    <div class="row">

                                        <div class="col-3">
                                            <div class="d-flex">
                                                <img src="images/thumb1.svg" class="img-fluid me-2">
                                                <p class="my-1">11 Likes</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex">
                                                <img src="images/dislike1.svg" class="img-fluid me-2">
                                                <p class="my-1">0 dislike</p>
                                            </div>
                                        </div>

                                    </div>

                                    <button class="btn my-green white-text mt-5 px-5">More Reviews</button>


                                </div>

                        </div>

                    </div>


                </div>
                <div class="col-4">
                    <img src="images/projimage2.svg" class="img-fluid">
                    <div class="card border-0 mt-3">
                        <img src="images/projimage3.svg" class="img-fluid">

                        <div class="card-img-overlay d-flex align-items-end justify-content-end">
                            <button class="btn white-text yellow-color"><img src="images/update1.svg" class="img-fluid me-1">Construction Updates</button>
                          </div>
                    </div>

                    <div class="card rounded p-3 mt-3">

                        <div class="row gx-0">

                            <div class="col-3">
                                <img src="images/tag.svg" class="img-fluid">

                            </div>
                            <div class="col-6">
                                <p class="mb-0">For Sale</p>
                                <p class="mb-0 my-price">$985,000</p>
                            </div>
                            <div class="col-3">
                                <img src="images/whitearrow.svg" class="img-fluid">

                            </div>

                        </div>



                      </div>


                      <img src="images/alexa.svg" class="img-fluid mt-5">

                      <p class="f-size32 text-center">Miss Alexa Jhons</p>

                      <img src="images/Price.svg" class="img-fluid mt-5">

                      <div class="card mt-5 p-3 border-0 shadow-sm">
                        <p class="text-center mb-0">Schedule a Visit
                          </p>
                          <p class="text-center info">For More Information</p>

                          <label>Date</label>
                          <div class="input-group" id="datepicker">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>

                        <label>Time</label>
                        <input type="text" class="form-control">

                        <p class="text-center mt-3 f-600">Your Information</p>

                        <label>Name</label>
                        <input type="text" class="form-control">

                        <label>Phone</label>
                        <input type="text" class="form-control">

                        <label>Email</label>
                        <input type="text" class="form-control">

                        <label>Message</label>
                        <input type="text" class="form-control">

                        <button class="btn my-green white-text mt-2">Submit a tour request</button>

                      </div>

                      <img src="images/Rectanglecard.svg" class="img-fluid">
                    <img src="images/down.svg" class="img-fluid">

                      <img src="images/video.svg" class="img-fluid mt-4">



                </div>

            </div>





        </div>

    </section>

    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="featured mt-lg-5 pt-lg-5">
              <p class="feature mt-lg-5 pt-lg-5">Explore the Featured
                Properties</p>
            </div>
          </div>
        </div>

        <div class="row featureslide">
          <div class="col-lg-3 mt-lg-5 pt-lg-5">

            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-3 col-lg-3 mt-lg-5 pt-lg-5">

                <img src="images/left.svg" class="img-fluid" onclick="prevvSlide()" style="cursor: pointer;">
              </div>
              <div class="col-3 col-lg-3 mt-lg-5 pt-lg-5">
                <img src="images/right.svg" class="img-fluid" class="img-fluid" onclick="nexttSlide()" style="cursor: pointer;">
              </div>
            </div>

          </div>
          <div class="col-lg-9">
            <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner p-1">

                <div class="carousel-item active">

                  <div class="row justify-content-around">
                    <div class="col-lg-4">
                      <div class="card p-2 shadow-sm border-0 rounded-3">
                        <img src="images/love1.svg" class="img-fluid">
                        <div class="card-body">
                          <p class="text-start beach mb-0">Beach View Villa</p>

                          <div class="d-flex mt-0">
                            <img src="images/clip.svg" class="img-fluid">
                            <p class="small-text gray-color my-2 ms-1">Denpasar, Bali, Indonesia</p>

                          </div>

                          <div class="row mt-2">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed1.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">3 Beds</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed2.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">no garage</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed3.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">2 Baths</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed4.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">1,235 sqft</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                              <div class="card p-1">
                                <p class="mb-0 text-start">For Rent</p>
                                <p class="text-start mb-0"><b>$1,900</b><span class="small-text">/month</span></p>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                              <a href="insidelisting.html"><img src="images/arrowbut.svg" class="img-fluid arrow-image"></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="card p-2 shadow-sm border-0 rounded-3">
                        <img src="images/love2.svg" class="img-fluid">
                        <div class="card-body">
                          <p class="text-start beach mb-0">Single Family Ranch House</p>

                          <div class="d-flex mt-0">
                            <img src="images/clip.svg" class="img-fluid">
                            <p class="small-text gray-color my-2 ms-1">Denpasar, Bali, Indonesia</p>

                          </div>

                          <div class="row mt-2">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed1.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">3 Beds</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed2.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">no garage</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed3.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">2 Baths</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed4.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">1,235 sqft</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                              <div class="card p-1">
                                <p class="mb-0 text-start">For Rent</p>
                                <p class="text-start mb-0"><b>$1,900</b><span class="small-text">/month</span></p>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                              <a href="insidelisting.html"><img src="images/arrowbut.svg" class="img-fluid arrow-image"></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="col-lg-4">
                      <div class="card p-2 shadow-sm border-0 rounded-3">
                        <img src="images/love3.svg" class="img-fluid">
                        <div class="card-body">
                          <p class="text-start beach mb-0">Northern Apartment</p>

                          <div class="d-flex mt-0">
                            <img src="images/clip.svg" class="img-fluid">
                            <p class="small-text gray-color my-2 ms-1">Denpasar, Bali, Indonesia</p>

                          </div>

                          <div class="row mt-2">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed1.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">3 Beds</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed2.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">no garage</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed3.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">2 Baths</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed4.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">1,235 sqft</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                              <div class="card p-1">
                                <p class="mb-0 text-start">For Rent</p>
                                <p class="text-start mb-0"><b>$1,900</b><span class="small-text">/month</span></p>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                              <a href="insidelisting.html"><img src="images/arrowbut.svg" class="img-fluid arrow-image"></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                  </div>


                  </div>

                  <!-- second-slide -->

                  <div class="carousel-item">
                    <div class="row justify-content-around">
                    <div class="col-lg-4">
                      <div class="card p-2 shadow-sm border-0 rounded-3">
                        <img src="images/love1.svg" class="img-fluid">
                        <div class="card-body">
                          <p class="text-start beach mb-0">Shangri la</p>

                          <div class="d-flex mt-0">
                            <img src="images/clip.svg" class="img-fluid">
                            <p class="small-text gray-color my-2 ms-1">Denpasar, Bali, Indonesia</p>

                          </div>

                          <div class="row mt-2">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed1.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">3 Beds</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed2.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">no garage</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed3.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">2 Baths</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed4.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">1,235 sqft</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                              <div class="card p-1">
                                <p class="mb-0 text-start">For Rent</p>
                                <p class="text-start mb-0"><b>$1,900</b><span class="small-text">/month</span></p>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                              <a href="insidelisting.html"><img src="images/arrowbut.svg" class="img-fluid arrow-image"></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="card p-2 shadow-sm border-0 rounded-3">
                        <img src="images/love2.svg" class="img-fluid">
                        <div class="card-body">
                          <p class="text-start beach mb-0">Single Family Ranch House</p>

                          <div class="d-flex mt-0">
                            <img src="images/clip.svg" class="img-fluid">
                            <p class="small-text gray-color my-2 ms-1">Denpasar, Bali, Indonesia</p>

                          </div>

                          <div class="row mt-2">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed1.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">3 Beds</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed2.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">no garage</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed3.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">2 Baths</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed4.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">1,235 sqft</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                              <div class="card p-1">
                                <p class="mb-0 text-start">For Rent</p>
                                <p class="text-start mb-0"><b>$1,900</b><span class="small-text">/month</span></p>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                              <a href="insidelisting.html"><img src="images/arrowbut.svg" class="img-fluid arrow-image"></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="col-lg-4">
                      <div class="card p-2 shadow-sm border-0 rounded-3">
                        <img src="images/love3.svg" class="img-fluid">
                        <div class="card-body">
                          <p class="text-start beach mb-0">Northern Apartment</p>

                          <div class="d-flex mt-0">
                            <img src="images/clip.svg" class="img-fluid">
                            <p class="small-text gray-color my-2 ms-1">Denpasar, Bali, Indonesia</p>

                          </div>

                          <div class="row mt-2">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed1.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">3 Beds</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed2.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">no garage</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <div class="d-flex">
                                <img src="images/bed3.svg" class="img-fluid">
                                <p class="bed my-1 ms-1">2 Baths</p>
                              </div>

                            </div>
                            <div class="col-lg-6">
                             <div class="d-flex">
                              <img src="images/bed4.svg" class="img-fluid">
                              <p class="bed my-1 ms-1">1,235 sqft</p>
                             </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                              <div class="card p-1">
                                <p class="mb-0 text-start">For Rent</p>
                                <p class="text-start mb-0"><b>$1,900</b><span class="small-text">/month</span></p>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                              <a href="insidelisting.html"><img src="images/arrowbut.svg" class="img-fluid arrow-image"></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    </div>

                  </div>

                  </div>
                  </div>

          </div>
        </div>

      </div>

    </section>


    <section class="blogs mt-5 pb-5">
      <div class="d-flex justify-content-center pt-5">
        <p class="news">Blog & News from </p>
        <img src="images/monarch.svg" class="img-fluid monar">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 blogg">
            <a href="insideblog.html">
            <div class="card blog-card shadow border-0 rounded-4">
              <img src="images/blog1.svg" class="img-fluid">
              <p class="invest p-3 mb-0">Investment on Property, Profitable or Detrimental?</p>
              <div class="row px-3">
                <div class="col-1 mb-0">
                  <img src="images/1.svg">
                </div>
               <div class="col-5">
                <p class="mb-0 text-nowrap">Dreamwell Team</p>
               </div>
               <div class="col-1">
                <img src="images/2.svg" class="ms-5">
              </div>
             <div class="col-5">
              <p class="mb-0 ms-5">10 March</p>
             </div>

              </div>
              <p class="p-3 green-text mb-0">Read More</p>
            </div>
          </a>
          </div>

          <div class="col-lg-4 blogg">
            <a href="insideblog.html">
            <div class="card blog-card shadow border-0 rounded-4">
              <img src="images/blog2.svg" class="img-fluid">
              <p class="invest p-3 mb-0">5 Tips on Choosing Comfortable Housing for Families</p>
              <div class="row px-3">
                <div class="col-1 mb-0">
                  <img src="images/1.svg">
                </div>
               <div class="col-5">
                <p class="mb-0 text-nowrap">Dreamwell Team</p>
               </div>
               <div class="col-1">
                <img src="images/2.svg" class="ms-5">
              </div>
             <div class="col-5">
              <p class="mb-0 ms-5">10 March</p>
             </div>

              </div>
              <p class="p-3 green-text mb-0">Read More</p>
            </div>
            </a>
          </div>

          <div class="col-lg-4 blogg">
            <a href="insideblog.html">
            <div class="card blog-card shadow border-0 rounded-4">
              <img src="images/blog3.svg" class="img-fluid">
              <p class="invest p-3 mb-0">5 Most Comfortable Areas for Living Space in London</p>
              <div class="row px-3">
                <div class="col-1 mb-0">
                  <img src="images/1.svg">
                </div>
               <div class="col-5">
                <p class="mb-0 text-nowrap">Dreamwell Team</p>
               </div>
               <div class="col-1">
                <img src="images/2.svg" class="ms-5">
              </div>
             <div class="col-5">
              <p class="mb-0 ms-5">10 March</p>
             </div>

              </div>
              <p class="p-3 green-text mb-0">Read More</p>
            </div>
            </a>
          </div>

        </div>
      </div>


      </section>


      <section class="footer pt-5">
        <div class="container">


          <div class="row">
            <div class="col-lg-4">

              <img src="images/logo.svg" class="img-fluid footerlogo">
              <div class="d-flex mt-5">
                <img src="images/Vector1.svg" class="me-2">
                <p class=" my-1 text">Realtor Office Building 5F</p>
              </div>
              <p class="text ms-3">123 Anywhere St., Any City, 12345 Any State</p>
              <div class="d-flex">
                <img src="images/Vector2.svg" class="me-2">
                <p class=" my-1 text">123-456-7890</p>
              </div>
              <div class="d-flex">
                <img src="images/Vector3.svg" class="me-2">
                <p class=" my-1 text">support@dreamwell.com</p>
              </div>

            </div>

            <div class="col-lg-2 mt-lg-5 pt-lg-5 mt-2 pt-2 mt-sm-2 pt-sm-2 footlink">
              <p class="quick">Quick Links</p>
              <a href="about.html">
                <p class="text">About Us</p>
              </a>
              <p class="text">Terms & Conditions</p>
              <p class="text">Guide</p>
              <p class="text">Support Center</p>
              <a href="blog.html"><p class="text">Blog</p></a>
              <a href="contact.html"><p class="quick">Contact </p></a>
              <p class="text">Privacy Policy</p>
            </div>

            <div class="col-lg-2 mt-lg-5 pt-lg-5 mt-2 pt-2 mt-sm-2 pt-sm-2">
              <p class="quick">Discover</p>
              <p class="text">Rawalpindi
                </p>
              <p class="text">Islamabad</p>
              <p class="text">Pakistan</p>
              <p class="text">Bahria Town</p>
              <p class="text">DHA islamabad</p>
              <p class="text">PC</p>
            </div>

            <div class="col-lg-4 mt-lg-5 pt-lg-4 mt-2 pt-2 mt-sm-2 pt-sm-2">

              <p class="text latest">Get the Latest Information about properties from <span class="quick">MONARCH INTERNATIONAL</span></p>

              <div class="input-group mb-3">
                <input type="text" style="color: white;" class="form-control bg-transparent" placeholder="Enter your email here" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn yellow-color" type="button" id="button-addon2">Subscribe</button>
              </div>

              <p class="text need">Need any Help!</p>
              <p class="text">Chat with our live agent</p>
              <p class="quick num">+92-311-000-22-33</p>

            </div>


          </div>


            <hr class="hr-white">

            <div class="row d-flex justify-content-between">
              <div class="col-lg-4">
                <ul class="list-unstyled white-text pb-lg-5">
                  <li class="d-inline me-2">Follow us</li>
                  <li class="d-inline"><img src="images/facebook.svg" class="img-fluid"></li>
                  <li class="d-inline"><img src="images/Youtube.svg" class="img-fluid"></li>
                  <li class="d-inline"><img src="images/Linkedin.svg" class="img-fluid"></li>
                  <li class="d-inline"><img src="images/twitter.svg" class="img-fluid"></li>
                  <li class="d-inline"><img src="images/Instagram.svg" class="img-fluid"></li>

              </ul>
              </div>

            <div class="col-lg-5">
              <ul class="list-unstyled white-text pb-lg-5">
                <li class="d-inline">Privacy Policy</li>
                <li class="d-inline">|</li>
                <li class="d-inline">Term & Conditions</li>
                <li class="d-inline">|</li>
                <li class="d-inline">Cookie Policy</li>

            </ul>
            </div>

            </div>





        </div>
        </section>




                                      <!-- nquiry Modal code  -->


                                      <div class="modal fade" id="EnquiryModal" tabindex="-1" aria-labelledby="#EnquiryModal" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">

                                            <div class="modal-body">

                                              <div class="mt-4 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Dowe">
          </div>

                                              <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                          </div>

                                          <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+3131312">
                                          </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-light closebtn" data-bs-dismiss="modal">Close</button>
                                              <button type="button" class="btn submitbtn">Submit</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>




                                        <!-- Valuation Modal code  -->


                                        <div class="modal fade" id="ValuationModal" tabindex="-1" aria-labelledby="#ValuationModal" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                              <div class="modal-body">

                                                <div class="mt-4 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Dowe">
            </div>

                                                <div class="mb-3">
                                              <label for="exampleFormControlInput1" class="form-label">Email</label>
                                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>

                                            <div class="mb-3">
                                              <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+3131312">
                                            </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-light closebtn" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn submitbtn">Submit</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.read-more').click(function() {
                var content = $(this).prev('.content');
                content.toggleClass('expanded');
                if (content.hasClass('expanded')) {
                    $(this).text('Read Less');
                } else {
                    $(this).text('Read More');
                }
            });
        });
    </script>

<script>
    $(document).ready(function () {
        $('.downarrow').click(function () {
            $('.showimage').show();
            $(this).hide();
            $('.uparrow').show();
        });

        $('.uparrow').click(function () {
            $('.showimage').hide();
            $(this).hide();
            $('.downarrow').show();
        });
    });
    </script>

@endsection
