@extends('layouts.app')
@section('content')
    <section>
        <div class="container">

            <div class="row">
                <div class="col-md-2 col-sm-2 col-lg-2"></div>
                <div class="col-md-9 col-sm-9 col-lg-9">

                    <p class="gray-color mt-5 pt-5 mb-0">Home / <span style="color: black;"><b>Careers</b></span> </p>
                    <p class="interested">Career</p>
                    <p class="mt-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                        piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                        literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    </p>
                    <div class="d-flex justify-content-center">
                        <button class="btn yellow-back rounded-4 px-5">Open Positions</button>

                    </div>

                </div>
            </div>

        </div>

        <div class="container-fluid gx-0">
            <div class="row mt-5 pt-5">
                <div class="col-md-5 col-sm-5 col-lg-5">
                    <img src="images/career.svg" class="img-fluid">
                </div>
                <div class="col-1"></div>
                <div class="col-md-5 col-sm-5 col-lg-5 mt-2">
                    <p class="apply">How Can I Apply?</p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                        literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                    <div
                        class="d-flex justify-content-center justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                        <button class="btn yellow-back rounded-4 px-5">Contact Us</button>
                    </div>

                </div>

            </div>
        </div>

        <div class="container-fluid mt-4 pt-4">

            <div class="row">
                <div class="col-md-2 col-sm-2 col-lg-2 col-2"></div>
                <div class="col-md-8 col-sm-8 col-lg-8 col-8">
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3 col-sm-3 col-lg-3 mt-2">
                            <div class="dropdown">
                                <button class="btn btn-outline-success btn-sm dropdown-toggle rounded-4 px-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    All Departments
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-lg-3 mt-2">
                            <div class="dropdown">
                                <button
                                    class="btn btn-outline-success btn-sm dropdown-toggle rounded-4 px-4 px-sm-4 px-lg-5"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Cities
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-lg-3 mt-2">
                            <div class="dropdown">
                                <button class="btn btn-outline-success btn-sm dropdown-toggle rounded-4 px-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    All Companies
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="card career-card border-0 rounded-3 mt-5 p-3">
                        <p class="finance mb-1">Finance <span class="budget">( AM Budgeting and Planning )</span></p>

                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-lg-10">
                                <p class="cont">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College..</p>
                            </div>
                            <div class="col-md-2 col-sm-12 col-lg-2 isb">
                                <div class="d-flex">
                                    <img src="images/mdi.svg" class="img-fluid">
                                    <p class="my-1 islb">Islamabad</p>
                                </div>
                                <button class="btn btn-outline-dark rounded-4 apply-now">Apply Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="card career-card border-0 rounded-3 mt-2 p-3">
                        <p class="finance mb-1">Marketing <span class="budget">( AM Budgeting and Planning )</span></p>

                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-lg-10">
                                <p class="cont">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College..</p>
                            </div>
                            <div class="col-md-2 col-sm-12 col-lg-2 isb">
                                <div class="d-flex">
                                    <img src="images/mdi.svg" class="img-fluid">
                                    <p class="my-1 islb">Islamabad</p>
                                </div>
                                <button class="btn btn-outline-dark rounded-4 apply-now">Apply Now</button>
                            </div>
                        </div>
                    </div>


                    <div class="card career-card border-0 rounded-3 mt-2 p-3">
                        <p class="finance mb-1">Graphic Designer <span class="budget">( AM Budgeting and Planning )</span>
                        </p>

                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-lg-10">
                                <p class="cont">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College..</p>
                            </div>
                            <div class="col-md-2 col-sm-12 col-lg-2 isb">
                                <div class="d-flex">
                                    <img src="images/mdi.svg" class="img-fluid">
                                    <p class="my-1 islb">Islamabad</p>
                                </div>
                                <button class="btn btn-outline-dark rounded-4 apply-now">Apply Now</button>
                            </div>
                        </div>
                    </div>


                    <div class="card career-card border-0 rounded-3 mt-2 p-3">
                        <p class="finance mb-1">Marketing <span class="budget">( AM Budgeting and Planning )</span></p>

                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-lg-10">
                                <p class="cont">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College..</p>
                            </div>
                            <div class="col-md-2 col-sm-12 col-lg-2 isb">
                                <div class="d-flex">
                                    <img src="images/mdi.svg" class="img-fluid">
                                    <p class="my-1 islb">Islamabad</p>
                                </div>
                                <button class="btn btn-outline-dark rounded-4 apply-now">Apply Now</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="row mt-5 pt-5 text-center">
                <div class="col-md-2 col-sm-2 col-lg-2"></div>
                <div class="col-md-8 col-sm-8 col-lg-8">
                    <p class="apply">Don’t see the right role for you?</p>
                    <p class="submit">Please submit your resume and tell us how you would like to contribute and why you
                        are a good fit. We’ll keep your resume and reach out if any opportunities arise in the future.</p>
                    <button class="btn yellow-back px-5 rounded-4">Submit Your Resume</button>
                </div>

            </div>


        </div>


        <section class="footer mt-5 pt-5">
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
                        <a href="blog.html">
                            <p class="text">Blog</p>
                        </a>
                        <a href="contact.html">
                            <p class="quick">Contact </p>
                        </a>
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

                        <p class="text latest">Get the Latest Information about properties from <span
                                class="quick">MONARCH INTERNATIONAL</span></p>

                        <div class="input-group mb-3">
                            <input type="text" style="color: white;" class="form-control bg-transparent"
                                placeholder="Enter your email here" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
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






        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @endsection
