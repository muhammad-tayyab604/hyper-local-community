<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', '')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Include Social Share Kit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/social-share-kit/2.0.15/css/social-share-kit.css" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <!-- Include Social Share Kit JavaScript -->
    <script src="https://cdn.jsdelivr.net/social-share-kit/2.0.15/js/social-share-kit.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <script src="https://kit.fontawesome.com/2117a980e4.js" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/slick-1.8.1/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/slick-1.8.1/slick/slick-theme.css') }}" />
    <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&display=swap" rel="stylesheet">
</head>

<style>
    .iconBox {
        color: white;
        font-size: 40px;
        background-color: green;
        border: 1px solid green;
        border-radius: 50%;
        padding: 24px;
        text-align: center;
    }

    .modalBodyForSuccess {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .socialIconsLinks {
        text-decoration: none;
    }

    .footerLinks {
        text-decoration: none;
    }

    .whatsappLogo img {
        width: 80px;
        position: fixed;
        bottom: 100px;
        /* Adjust the distance from the bottom as needed */
        right: 1px;
        /* Adjust the distance from the right as needed */
        z-index: 999;
        filter: drop-shadow(1px 1px 4px rgba(0, 0, 0, 0.5));
    }
</style>

<nav class="navbar navbar-expand-lg mt-5 mb-4">
    <div class="container-fluid gx-5">
        <a class="navbar-brand me-5" href="#">
            <img src="{{ asset('images/whitelogo.svg') }}" class="img-fluid toplogo"></a>
        <button class="navbar-toggler ml-auto float-xs-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rent') }}">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buy') }}">Buy</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Commercial
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($insideProjects as $insideProject)
                            <li><a class="dropdown-item"
                                    href="{{ route('insideProject', $insideProject) }}">{{ $insideProject->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('investments') }}">Investment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

            </ul>
            <button class="btn new-color text-wrap p-0 m-0 px-3 py-1" type="submit" data-bs-toggle="modal"
                data-bs-target="#EnquiryModal">
                <div class="d-flex">
                    <img src="{{ asset('images/call.svg') }}" class="img-fluid me-2">
                    <div class="d-flex flex-column">
                        <p class="mb-0 instant">INSTANT</p>
                        <p class="mb-0">Enquiry</p>
                    </div>

                </div>
            </button>
            <button class="btn btn-outline-success py-2 ms-3" data-bs-toggle="modal" data-bs-target="#ValuationModal"
                type="submit">
                <img src="{{ asset('images/bar.svg') }}" class="img-fluid">
                Valuation</button>

        </div>
    </div>
</nav>

<div class="whatsappLogo">

    <a href="https://wa.me/+923323333111" target="__blank">
        <img src="{{ asset('/images/WhatsApp-logo.png') }}" alt="">
    </a>
</div>
<div id="scrollToTopButton" class="scroll-to-top-button">
    <i class="fas fa-arrow-up"></i>
</div>
<!-- nquiry Modal code  -->

<form action="{{ route('enqValuationForm.submit') }}" method="post">
    @csrf
    <div class="modal fade" id="EnquiryModal" tabindex="-1" aria-labelledby="#EnquiryModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="mt-4 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="John Dowe">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="number" step="0.01" name="phone_number" class="form-control"
                            id="exampleFormControlInput1" placeholder="+3131312">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light closebtn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn submitbtn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>






<!-- Valuation Modal code  -->

<form action="{{ route('enqValuationForm.submit') }}" method="post">
    @csrf
    <div class="modal fade" id="ValuationModal" tabindex="-1" aria-labelledby="#ValuationModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="mt-4 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="John Dowe">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="number" step="0.01" name="phone_number" class="form-control"
                            id="exampleFormControlInput1" placeholder="+3131312">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light closebtn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn submitbtn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>



{{-- Success Modal --}}
<!-- Modal -->
<div class="modal fade" id="formSubmitSuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Submitted Successfully</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalBodyForSuccess">
                {{-- <div class="icon-box"> --}}
                <i class="iconBox fa-solid fa-check-double"></i>
                {{-- </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK!</button>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <script>
        $(document).ready(function() {
            $('#formSubmitSuccessModal').modal('show'); // Show the modal
        });
    </script>
@endif

@yield('content')



<section class="footer pt-5">
    <div class="container">


        <div class="row">
            <div class="col-lg-4">

                <img src="{{ asset('/images/logo.svg') }}" class="img-fluid footerlogo">
                <div class="d-flex mt-5">
                    <img src="{{ asset('/images/Vector1.svg') }}" class="me-2">
                    <p class=" my-1 text">Realtor Office Building 5F</p>
                </div>
                <p class="text ms-3">123 Anywhere St., Any City, 12345 Any State</p>
                <div class="d-flex">
                    <img src="{{ asset('/images/Vector2.svg') }}" class="me-2">
                    <p class=" my-1 text">123-456-7890</p>
                </div>
                <div class="d-flex">
                    <img src="{{ asset('/images/Vector3.svg') }}" class="me-2">
                    <p class=" my-1 text">support@dreamwell.com</p>
                </div>

            </div>

            <div class="col-lg-2 mt-lg-5 pt-lg-5 mt-2 pt-2 mt-sm-2 pt-sm-2 footlink">
                <p class="quick">Quick Links</p>
                <a href="{{ route('about') }}">
                    <p class="text">About Us</p>
                </a>
                <a href="{{ url('/terms-conditions') }}">
                    <p class="text">Terms & Conditions</p>
                </a>
                <a href="{{ url('/guide') }}">
                    <p class="text">Guide</p>
                </a>
                <a href="{{ url('/support-center') }}">
                    <p class="text">Support Center</p>
                </a>
                <a href="{{ route('blog') }}">
                    <p class="text">Blog</p>
                </a>
                <a href="{{ route('contact') }}">
                    <p class="quick">Contact </p>
                </a>
                <a href="{{ url('/privacy-policy') }}">
                    <p class="text">Privacy Policy</p>
                </a>
            </div>

            <div class="col-lg-2 mt-lg-5 pt-lg-5 mt-2 pt-2 mt-sm-2 pt-sm-2">
                <a class="footerLinks" href="{{ route('location', 'DHA Rawalpindi') }}">
                    <p class="quick">Discover</p>
                </a>
                <a class="footerLinks" href="{{ route('location', 'Rawalpindi') }}">
                    <p class="text">Rawalpindi</p>
                </a>
                <a class="footerLinks" href="{{ route('location', 'Islamabad') }}">
                    <p class="text">Islamabad</p>
                </a>
                <a class="footerLinks" href="{{ route('location', 'Pakistan') }}">
                    <p class="text">Pakistan</p>
                </a>
                <a class="footerLinks" href="{{ route('location', 'Bahria Town') }}">
                    <p class="text">Bahria Town</p>
                </a>
                <a class="footerLinks" href="{{ route('location', 'DHA Islamabad') }}">
                    <p class="text">DHA islamabad</p>
                </a>
                <a class="footerLinks" href="{{ route('location', 'PC') }}">
                    <p class="text">PC</p>
                </a>
            </div>

            <div class="col-lg-4 mt-lg-5 pt-lg-4 mt-2 pt-2 mt-sm-2 pt-sm-2">

                <p class="text latest">Get the Latest Information about properties from <span class="quick">MONARCH
                        INTERNATIONAL</span></p>

                <div class="input-group mb-3">
                    <input type="text" style="color: white;" class="form-control bg-transparent"
                        placeholder="Enter your email here" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn yellow-color" type="button" id="button-addon2">Subscribe</button>
                </div>

                <p class="text need">Need any Help!</p>
                <p class="text">Chat with our live agent</p>
                <p class="quick num">+92-332-3333111</p>

            </div>


        </div>


        <hr class="hr-white">

        <div class="row d-flex justify-content-between">
            <div class="col-lg-4">
                <ul class="list-unstyled white-text pb-lg-5">
                    <li class="d-inline me-2">Follow us</li>
                    <a class="socialIconsLinks" href="https://web.facebook.com/monarchinternational.official/"
                        target="__blank">
                        <li class="d-inline"><img src="{{ asset('/images/facebook.svg') }}" class="img-fluid"></li>
                    </a>
                    <a class="socialIconsLinks" href="https://www.youtube.com/channel/UCjX1vcxq0jwCsHnCX8HqkZA"
                        target="__blank">
                        <li class="d-inline"><img src="{{ asset('/images/Youtube.svg') }}" class="img-fluid"></li>
                    </a>
                    <a class="socialIconsLinks"
                        href="https://www.linkedin.com/company/monarchinternational/?viewAsMember=true"
                        target="__blank">
                        <li class="d-inline"><img src="{{ asset('/images/Linkedin.svg') }}" class="img-fluid"></li>
                    </a>
                    <a class="socialIconsLinks" href="https://twitter.com/monarch_pak" target="__blank">
                        <li class="d-inline"><img src="{{ asset('/images/twitter.svg') }}" class="img-fluid"></li>
                    </a>
                    <a class="socialIconsLinks" href="https://www.instagram.com/monarchinternational.official/"
                        target="__blank">
                        <li class="d-inline"><img src="{{ asset('/images/Instagram.svg') }}" class="img-fluid"></li>
                    </a>

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
<script>
    function prevSlide() {
        $('#teamCarousel').carousel('prev');
    }

    function nextSlide() {
        $('#teamCarousel').carousel('next');
    }

    function prevvSlide() {
        $('#featureCarousel').carousel('prev');
    }

    function nexttSlide() {
        $('#featureCarousel').carousel('next');
    }

    function prevvvSlide() {
        $('#serviceCarousel').carousel('prev');
    }

    function nextttSlide() {
        $('#serviceCarousel').carousel('next');
    }

    function prevsatisSlide() {
        $('#clientsCarousel').carousel('prev');
    }

    function nextsatisSlide() {
        $('#clientsCarousel').carousel('next');
    }


    var carousel = new bootstrap.Carousel(document.getElementById('teamCarousel'));

    function goToSlide(slideIndex) {
        carousel.to(slideIndex);
    }


    var indicators = document.querySelectorAll('.iconic');
    indicators.forEach(function(icon) {
        icon.style.color = 'lightgray';
    });


    carousel._element.addEventListener('slide.bs.carousel', function(event) {

        indicators.forEach(function(icon) {
            icon.style.color = 'lightgray';
        });


        indicators[event.to].style.color = 'darkgreen';
    });
</script>

<body>
</body>

</html>
