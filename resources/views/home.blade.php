<style>
    .interestedTo {
        text-decoration: none;
        color: black;
    }

    .CollaborativeSection {
        padding-top: 25px;
    }
</style>

@extends('layouts.app')
@section('content')
@section('title', 'Home')


    <div class="text-center mt-5" id="pageContent">
        <div class="image-container" id="imageContainer">
            <img class="image img-fluid" src="images/frame.png" alt="Your Image" />

            <div class="form-container">
                <!-- Your form content goes here -->
                <p class="heading-p">
                    We provide the best house to be <br />
                    your home
                </p>
    <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>


                <ul class=" mt-lg-5 me-auto mb-2 mb-lg-0 text-center list-unstyled">
                    <li class="nav-item smallul">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        <div class="my-class d-flex align-items-center justify-content-center">
                            <span class="bg-light rounded-start-4 p-lg-4 p-md-3 p-1 me-1 me-md-3 me-lg-4">Buy</span>

                            <span class="project rounded-end p-lg-4 p-md-3 p-1">Rent</span>
                            <span class="project1 rounded-end-4 p-lg-4 p-md-3 p-1">New Project</span>
                        </div>
                </ul>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card rounded-3 p-lg-4 p-1">
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <li class="nav-item dropdown list-unstyled sub-ca5">
                                        <a class="nav-link dropdown-toggle " href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Type</span><br>
                                            Houses
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </li>

                                </div>
                                <div class="col-lg-4 col-4">
                                    <li class="nav-item dropdown list-unstyled sub-ca5">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Location</span><br>
                                            DHA Phase-ll
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="sub-ca5">
                                        <button
                                            class="search border-0 shadow rounded-3 px-lg-5 py-lg-2 white-text px-1 py-1">
                                            <img class="img-fluid" src="images/search.svg">Search</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Hidden description -->
            <div class="description">
                <p>This is a hidden description that appears when scrolling over the image.</p>
            </div>
        </div>
    </div>


    <div class="container">
        {{-- <img src="{{ asset('/images/frame.png') }}" width="100%" alt="" /> --}}

        <div class="heading">
            {{-- <p class="heading-p">
                We provide the best house to be <br />
                your home
            </p> --}}

            {{-- <ul class="navbar-small me-auto mb-2 mb-lg-0 text-center mt-lg-5 list-unstyled">
                <li class="nav-item smallul">
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    <div class="my-class d-flex align-items-center justify-content-center">
                        <span class="bg-light rounded-start-4 p-4 me-4">Buy</span>

                        <span class="project rounded-end p-4">Rent</span>
                        <span class="project1 rounded-end-4 p-4">New Project</span>
                    </div>
                </li>
            </ul> --}}
            <div class="box">
                <div class="row">
                    <!-- <div class="col-12"> -->
                    {{-- <div class="d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="card rounded-3 p-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span>Type</span><br>
                                                Houses
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </div>
                                    <div class="col-lg-4">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span>Location</span><br>
                                                DHA Phase-ll
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="">
                                            <button class="search border-0 shadow rounded-3 w-100">
                                                <img class="" src="{{ asset('/images/search.svg') }}">Search</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}


                    <section class="homeservices mt-lg-5 pt-lg-5 mt-2 pt-2">
                        <div class="row text-center">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <p class="interested">Our Services</p>
                            </div>

                            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage2.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage3.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage4.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="carousel-item">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage2.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage3.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card border-0">
                                                    <img src="{{ asset('/images/roomimage4.jpg') }}"
                                                        class="img-fluid rounded-3">
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-2 col-lg-2 col-sm-2">
                                            <div class="card border-0">
                                              <img src="{{ asset('/images/Image4.svg') }}" class="img-fluid">
                                            </div>
                                          </div>

                                          <div class="col-md-2 col-lg-2 col-sm-2">
                                            <div class="card border-0">
                                              <img src="{{ asset('/images/Image5.svg') }}" class="img-fluid">
                                            </div>
                                          </div> -->

                                        </div>

                                    </div>



                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 col-md-4 col-sm-4 col-lg-4">
                                    <div class="row">

                                        <div class="col-6 col-md-3 col-sm-4 col-lg-3 mt-5 pt-5">

                                            <img src="{{ asset('/images/left.svg') }}" class="img-fluid"
                                                onclick="prevvvSlide()" style="cursor: pointer;">
                                        </div>
                                        <div class="col-6 col-md-3 col-sm-4 col-lg-3 mt-5 pt-5">
                                            <img src="{{ asset('/images/right.svg') }}" class="img-fluid"
                                                onclick="nextttSlide()" style="cursor: pointer;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4 col-md-4 col-sm-4 col-lg-4 mt-5 pt-5">
                                    <i id="iconicc0" class="fa-solid fa-circle iconicc" onclick="goToSlidee(0)"
                                        style="cursor: pointer;"></i>
                                    <i id="iconicc1" class="fa-solid fa-circle iconicc" onclick="goToSlidee(1)"
                                        style="cursor: pointer;"></i>
                                    <i id="iconicc2" class="fa-solid fa-circle iconicc" onclick="goToSlidee(2)"></i>
                                    <i id="iconicc3" class="fa-solid fa-circle iconicc" onclick="goToSlidee(3)"></i>

                                </div>
                            </div>



                        </div>
                    </section>

                    <section class="mt-lg-5 pt-lg-5 mt-sm-2 pt-sm-2">
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

                                            <img src="{{ asset('/images/left.svg') }}" class="img-fluid"
                                                onclick="prevvSlide()" style="cursor: pointer;">
                                        </div>
                                        <div class="col-3 col-lg-3 mt-lg-5 pt-lg-5">
                                            <img src="{{ asset('/images/right.svg') }}" class="img-fluid"
                                                class="img-fluid" onclick="nexttSlide()" style="cursor: pointer;">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-9">
                                    <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner p-1">

                                            <div class="carousel-item active">

                                                <div class="row justify-content-around">
                                                    @foreach ($firstThreeHomeProducts as $firstThreeHomeProduct)
                                                        <div class="col-lg-4">
                                                            <div class="card p-2 shadow-sm border-0 rounded-3">
                                                                <a
                                                                    href="{{ route('insideListing', $firstThreeHomeProduct) }}">
                                                                    <img src="{{ asset('Image/product/' . $firstThreeHomeProduct->image) }}"
                                                                        class="img-fluid">
                                                                </a>

                                                                <div class="card-body">
                                                                    <p class="text-start beach mb-0">
                                                                        {{ $firstThreeHomeProduct->name }}</p>

                                                                    <div class="d-flex mt-0">
                                                                        <img src="{{ asset('/images/clip.svg') }}"
                                                                            class="img-fluid">
                                                                        <p class="small-text gray-color my-2 ms-1">
                                                                            {{ $firstThreeHomeProduct->address }}</p>

                                                                    </div>

                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed1.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $firstThreeHomeProduct->number_of_bed }}
                                                                                    Beds</p>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed2.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $firstThreeHomeProduct->garadge }}
                                                                                    garage</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-1">
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed3.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $firstThreeHomeProduct->number_of_bath }}
                                                                                    Baths</p>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed4.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $firstThreeHomeProduct->square_feet }}
                                                                                    sqft</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                                                                            <div class="card p-1">
                                                                                <p class="mb-0 text-start">
                                                                                    {{ $firstThreeHomeProduct->status }}
                                                                                </p>
                                                                                <p class="text-start mb-0">
                                                                                    <b>${{ $firstThreeHomeProduct->price }}</b><span
                                                                                        class="small-text">/month</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                                                                            <a
                                                                                href="{{ route('insideListing', $firstThreeHomeProduct) }}"><img
                                                                                    src="{{ asset('/images/arrowbut.svg') }}"
                                                                                    class="img-fluid arrow-image"></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                            <!-- second-slide -->

                                            <div class="carousel-item">
                                                <div class="row justify-content-around">
                                                    @foreach ($nextThreeHomeProducts as $nextThreeHomeProduct)
                                                        <div class="col-lg-4">
                                                            <div class="card p-2 shadow-sm border-0 rounded-3">
                                                                <a
                                                                    href="{{ route('insideListing', $nextThreeHomeProduct) }}">
                                                                    <img src="{{ asset('Image/product/' . $nextThreeHomeProduct->image) }}"
                                                                        class="img-fluid">
                                                                </a>
                                                                <div class="card-body">
                                                                    <p class="text-start beach mb-0">
                                                                        {{ $nextThreeHomeProduct->name }}</p>

                                                                    <div class="d-flex mt-0">
                                                                        <img src="{{ asset('/images/clip.svg') }}"
                                                                            class="img-fluid">
                                                                        <p class="small-text gray-color my-2 ms-1">
                                                                            {{ $nextThreeHomeProduct->address }}</p>

                                                                    </div>

                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed1.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $nextThreeHomeProduct->number_of_bed }}
                                                                                    Beds</p>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed2.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $nextThreeHomeProduct->garadge }}
                                                                                    garage</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-1">
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed3.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $nextThreeHomeProduct->number_of_bath }}
                                                                                    Baths</p>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="d-flex">
                                                                                <img src="{{ asset('/images/bed4.svg') }}"
                                                                                    class="img-fluid">
                                                                                <p class="bed my-1 ms-1">
                                                                                    {{ $nextThreeHomeProduct->square_feet }}
                                                                                    sqft</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-8 col-lg-8 col-sm-8 col-8">
                                                                            <div class="card p-1">
                                                                                <p class="mb-0 text-start">
                                                                                    {{ $nextThreeHomeProduct->status }}</p>
                                                                                <p class="text-start mb-0">
                                                                                    <b>${{ $nextThreeHomeProduct->price }}</b><span
                                                                                        class="small-text">/month</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                                                                            <a
                                                                                href="{{ route('insideListing', $nextThreeHomeProduct) }}"><img
                                                                                    src="{{ asset('images/arrowbut.svg') }}"
                                                                                    class="img-fluid arrow-image"></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </section>





                    <!-- I'm Interested To -->


                    <section>
                        <div class="container-fluid mt-5">
                            <p class="team">I'm Interested To</p>

                            <div class="row justify-content-center align-content-center">
                                <nav class="navbar navbar-expand-lg m-lg-3">
                                    <div class="container">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mb-2 mb-lg-0">
                                                <li class="nav-item our-team">
                                                    <a class="nav-link active bottom-border" aria-current="page"
                                                        href="#tab1" data-bs-toggle="tab"
                                                        onclick="showTab('tab1')">Commercial</a>
                                                </li>
                                                <li class="nav-item our-team">
                                                    <a class="nav-link bottom-border" aria-current="page" href="#tab2"
                                                        data-bs-toggle="tab" onclick="showTab('tab2')">Residence</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="">
                                    <hr class="line">
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-2">
                                                <a class="interestedTo" href="{{ route('buy') }}">
                                                    <img class="bottom img-fluid" src="{{ asset('images/Number.svg') }}">
                                                    <div class="card shadow p-1 bg-body rounded my-card">
                                                        <div class="">
                                                            <img class="mt-5 img-fluid interested-shape"
                                                                src="images/shape1.svg">
                                                        </div>
                                                        <p class="icon-p mt-3">Buy a Home</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <a class="interestedTo" href="{{ route('rent') }}">
                                                    <img class="bottom img-fluid"
                                                        src="{{ asset('images/Number1.svg') }}">
                                                    <div class="card shadow p-1 bg-body rounded my-card">
                                                        <div class="">
                                                            <img class="mt-5 img-fluid interested-shape"
                                                                src="images/shape2.svg">
                                                        </div>
                                                        <p class="icon-p mt-3">Rent</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <a class="interestedTo" href="{{ route('allProjects') }}">
                                                    <img class="bottom img-fluid" src="images/Number2.svg">
                                                    <div class="card p-1 shadow bg-body rounded my-card">
                                                        <div class="">
                                                            <img class="mt-5 img-fluid interested-shape"
                                                                src="images/shape3.svg">
                                                        </div>
                                                        <p class="icon-p mt-3">Sell</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-2">
                                                <a class="interestedTo" href="{{ route('buy') }}">
                                                    <img class="bottom img-fluid" src="{{ asset('images/Number.svg') }}">
                                                    <div class="card shadow p-1 bg-body rounded my-card">
                                                        <div class="">
                                                            <img class="mt-5 img-fluid interested-shape"
                                                                src="images/shape1.svg">
                                                        </div>
                                                        <p class="icon-p mt-3">Buy a Home</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <a class="interestedTo" href="{{ route('rent') }}">
                                                    <img class="bottom img-fluid"
                                                        src="{{ asset('images/Number1.svg') }}">
                                                    <div class="card shadow p-1 bg-body rounded my-card">
                                                        <div class="">
                                                            <img class="mt-5 img-fluid interested-shape"
                                                                src="images/shape2.svg">
                                                        </div>
                                                        <p class="icon-p mt-3">Rent</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <a class="interestedTo" href="{{ route('allProjects') }}">
                                                    <img class="bottom img-fluid" src="images/Number2.svg">
                                                    <div class="card p-1 shadow bg-body rounded my-card">
                                                        <div class="">
                                                            <img class="mt-5 img-fluid interested-shape"
                                                                src="images/shape3.svg">
                                                        </div>
                                                        <p class="icon-p mt-3">Sell</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-success mt-5"><i class="fa fa-plus-circle"
                                    aria-hidden="true"></i>
                                Talk to an Expert</button>
                        </div>
                    </section>


                </div>
            </div>

            <!-- Our Teams -->

            <section>
                <div class="container-fluid mt-5">
                    <p class="team">Our Teams</p>

                    <div class="row justify-content-center align-content-center">
                        <nav class="navbar navbar-expand-lg m-lg-3">
                            <div class="container">

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 mb-lg-0">

                                        <li class="nav-item our-team">
                                            <a class="nav-link active bottom-border" aria-current="page"
                                                href="#executiveteam" data-bs-target="#executiveteam"
                                                onclick="showImageBox('executiveteam')">Executive Members</a>

                                        </li>
                                        <li class="nav-item our-team">
                                            <a class="nav-link bottom-border" aria-current="page" href="#champions"
                                                data-bs-target="#champions" onclick="showImageBox('champions')">Sale
                                                Champions</a>

                                        </li>

                                        <li class="nav-item our-team">
                                            <a class="nav-link " aria-current="page" href="#salesteam"
                                                data-bs-target="#salesteam" onclick="showImageBox('salesteam')">Sales
                                                Team</a>
                                        </li>

                                        <li class="nav-item our-team">
                                            <a class="nav-link " aria-current="page" href="#operationteam"
                                                data-bs-target="#operationteam"
                                                onclick="showImageBox('operationteam')">Operation Team</a>
                                        </li>
                                        <li class="nav-item our-team">
                                            <a class="nav-link " aria-current="page" href="#designteam"
                                                data-bs-target="#designteam" onclick="showImageBox('designteam')">Design
                                                Team</a>
                                        </li>
                                        <!--<li class="nav-item our-team">-->
                                        <!--    <a class="nav-link " aria-current="page" href="#mediateam"-->
                                        <!--        data-bs-target="#mediateam" onclick="showImageBox('mediateam')">Media-->
                                        <!--        Team</a>-->
                                        <!--</li>-->
                                        <li class="nav-item our-team">
                                            <a class="nav-link " aria-current="page" href="#">More</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="">
                            <hr class="line">

                        </div>

                        <div class="image-box" id="executiveteam">
                            <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($executiveMembers->chunk(4) as $key => $chunk)
                                        <div class="carousel-item  {{ $key === 0 ? 'active' : '' }}">
                                            <div class="row">
                                                @foreach ($chunk as $executiveMember)
                                                    <div class="col-lg-3">
                                                        <div class="card rounded-4 shadow-sm mt-5">
                                                            <img src="{{ asset('/Image/team/' . $executiveMember->image) }}"
                                                                class="img-fluid " alt="">

                                                            <p class="team-name mt-3">{{ $executiveMember->name }}</p>
                                                            <p class="team-prof">{{ $executiveMember->position }}</p>

                                                            <div class="d-flex justify-content-center mb-3">
                                                                <a target="__blank"
                                                                    href="{{ $executiveMember->facebook }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentfb.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $executiveMember->instagram }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentInsta.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $executiveMember->linkedin }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentin.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $executiveMember->whatsapp }}"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('/images/agentwapp.svg') }}"
                                                                        alt=""></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>

                        </div>

                        <div class="image-box" id="champions" style="display: none;">
                            <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($saleChampions->chunk(4) as $key => $chunk)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <div class="row">
                                                @foreach ($chunk as $saleChampion)
                                                    <div class="col-lg-3">
                                                        <div class="card rounded-4 shadow-sm mt-5">
                                                            <img src="{{ asset('/Image/team/' . $saleChampion->image) }}"
                                                                class="img-fluid " alt="">

                                                            <p class="team-name mt-3">{{ $saleChampion->name }}</p>
                                                            <p class="team-prof">{{ $saleChampion->position }}</p>

                                                            <div class="d-flex justify-content-center mb-3">
                                                                <a target="__blank"
                                                                    href="{{ $saleChampion->facebook }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentfb.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $saleChampion->instagram }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentInsta.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $saleChampion->linkedin }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentin.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $saleChampion->whatsapp }}"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('/images/agentwapp.svg') }}"
                                                                        alt=""></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>


                            </div>

                        </div>

                        <div class="image-box" id="salesteam" style="display: none;">
                            <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($salesTeams->chunk(4) as $key => $chunk)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <div class="row">

                                                @foreach ($chunk as $salesteam)
                                                    <div class="col-lg-3">
                                                        <div class="card rounded-4 shadow-sm mt-5">
                                                            <img src="{{ asset('/Image/team/' . $salesteam->image) }}"
                                                                class="img-fluid " alt="">

                                                            <p class="team-name mt-3">{{ $salesteam->name }}</p>
                                                            <p class="team-prof">{{ $salesteam->position }}</p>

                                                            <div class="d-flex justify-content-center mb-3">
                                                                <a target="__blank"
                                                                    href="{{ $salesteam->facebook }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentfb.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $salesteam->instagram }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentInsta.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $salesteam->linkedin }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentin.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $salesteam->whatsapp }}"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('/images/agentwapp.svg') }}"
                                                                        alt=""></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>

                        </div>


                        <div class="image-box" id="operationteam" style="display: none;">
                            <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach ($operationTeams->chunk(4) as $key => $chunk)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <div class="row">

                                                @foreach ($chunk as $operationTeam)
                                                    <div class="col-lg-3">
                                                        <div class="card rounded-4 shadow-sm mt-5">
                                                            <img src="{{ asset('/Image/team/' . $operationTeam->image) }}"
                                                                class="img-fluid " alt="">

                                                            <p class="team-name mt-3">{{ $operationTeam->name }}</p>
                                                            <p class="team-prof">{{ $operationTeam->position }}</p>

                                                            <div class="d-flex justify-content-center mb-3">
                                                                <a target="__blank"
                                                                    href="{{ $operationTeam->facebook }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentfb.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $operationTeam->instagram }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentInsta.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $operationTeam->linkedin }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentin.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $operationTeam->whatsapp }}"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('/images/agentwapp.svg') }}"
                                                                        alt=""></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>

                        </div>


                        <div class="image-box" id="designteam" style="display: none;">
                            <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach ($designTeams->chunk(4) as $key => $chunk)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <div class="row">

                                                @foreach ($chunk as $designTeam)
                                                    <div class="col-lg-3">
                                                        <div class="card rounded-4 shadow-sm mt-5">
                                                            <img src="{{ asset('/Image/team/' . $designTeam->image) }}"
                                                                class="img-fluid " alt="">

                                                            <p class="team-name mt-3">{{ $designTeam->name }}</p>
                                                            <p class="team-prof">{{ $designTeam->position }}</p>

                                                            <div class="d-flex justify-content-center mb-3">
                                                                <a target="__blank"
                                                                    href="{{ $designTeam->facebook }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentfb.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $designTeam->instagram }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentInsta.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $designTeam->linkedin }}"><img
                                                                        class="img-fluid me-2"
                                                                        src="{{ asset('/images/agentin.svg') }}"
                                                                        alt=""></a>
                                                                <a target="__blank"
                                                                    href="{{ $designTeam->whatsapp }}"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('/images/agentwapp.svg') }}"
                                                                        alt=""></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>

                        </div>


                        <!--<div class="image-box" id="mediateam" style="display: none;">-->
                        <!--    <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">-->
                        <!--        <div class="carousel-inner">-->

                        <!--            <div class="carousel-item active">-->
                        <!--                <div class="row">-->

                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3">SOHAIL AZAM4</p>-->
                        <!--                            <p class="team-prof">CEO4</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->


                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3"> MUDDASSIR AZAD</p>-->
                        <!--                            <p class="team-prof">CMO</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->


                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3">ABDUL WASIF</p>-->
                        <!--                            <p class="team-prof">COO</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->

                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3">Damian Angelo</p>-->
                        <!--                            <p class="team-prof">Real Estate Agent</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->

                        <!--                </div>-->
                        <!--            </div>-->

                        <!--            <div class="carousel-item">-->
                        <!--                <div class="row">-->

                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3">SOHAIL AZAM</p>-->
                        <!--                            <p class="team-prof">CEO</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->


                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3"> MUDDASSIR AZAD</p>-->
                        <!--                            <p class="team-prof">CMO</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->


                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3">ABDUL WASIF</p>-->
                        <!--                            <p class="team-prof">COO</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->

                        <!--                    <div class="col-lg-3">-->
                        <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                        <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                        <!--                                alt="">-->

                        <!--                            <p class="team-name mt-3">Damian Angelo</p>-->
                        <!--                            <p class="team-prof">Real Estate Agent</p>-->

                        <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                        <!--                        </div>-->

                        <!--                    </div>-->

                        <!--                </div>-->
                        <!--            </div>-->


                        <!--        </div>-->


                        <!--    </div>-->

                        <!--</div>-->


                    </div>

                    <div class="avail text-center" style="background-color: rgb(250,250,250);">
                        <div class="d-flex justify-content-center">
                            <div class="row available">
                                <div class="col-lg-2">
                                    <div class="row mt-5 pt-5">
                                        <div class=" col-6 col-md-6 col-sm-6 col-lg-6 mt-lg-5 pt-lg-5">

                                            <img src="{{ asset('/images/left.svg') }}" class="img-fluid"
                                                onclick="prevSlide()" style="cursor: pointer;">
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 mt-lg-5 pt-lg-5">
                                            <img src="{{ asset('/images/right.svg') }}" class="img-fluid"
                                                class="img-fluid" onclick="nextSlide()" style="cursor: pointer;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-lg-5 pt-lg-5">
                                    <p class="for-avail">Availability of Space in
                                        Our Project</p>
                                </div>
                                <div class="col-lg-2 indi">
                                    <i id="iconic0" class="fa-solid fa-circle iconic" onclick="goToSlide(0)"
                                        style="cursor: pointer;"></i>
                                    <i id="iconic1" class="fa-solid fa-circle iconic" onclick="goToSlide(1)"
                                        style="cursor: pointer;"></i>
                                    <i id="iconic2" class="fa-solid fa-circle iconic" onclick="goToSlide(2)"></i>
                                    <i id="iconic3" class="fa-solid fa-circle iconic" onclick="goToSlide(3)"></i>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </section>



            <section>

                <div class="my-table container">
                    <div class="d-flex justify-content-center">

                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border-bottom: 5px solid rgb(57,66,68);">
                                                Project</th>
                                            <th scope="col">Unit Type</th>
                                            <th scope="col">Floor</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Price/sqt</th>
                                            <th scope="col">Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($availabilityOfProjects as $availabilityOfProject)
                                            <tr>
                                                <td>{{ $availabilityOfProject->project_name }}</td>
                                                <td>{{ $availabilityOfProject->unit_type }}</td>
                                                <td>{{ $availabilityOfProject->floor }} floor</td>
                                                <td>{{ $availabilityOfProject->size }}Sq/Ft</td>
                                                <td>{{ $availabilityOfProject->price_sqt }}/sqft</td>
                                                <td>{{ $availabilityOfProject->availability }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-outline-success mt-5"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Talk to an Expert</button>

                </div>

            </section>


            <section class="trending-projects mt-lg-5 pt-lg-5 mt-2 pt-2">

                <div class="container-fluid mt-lg-5">
                    <p class="team">Most Trending Projects</p>

                    <div class="row justify-content-center align-content-center">
                        <nav class="navbar navbar-expand-lg m-lg-3">
                            <div class="container">

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 mb-lg-0">
                                        <li class="nav-item our-project">
                                            <a class="nav-link active bottom-border" aria-current="page" href="#luxury"
                                                data-bs-target="#luxury" onclick="showCard('luxury')">Luxury Apartment</a>

                                        </li>

                                        <li class="nav-item our-project">
                                            <a class="nav-link bottom-border" aria-current="page" href="#corporate"
                                                data-bs-target="#corporate" onclick="showCard('corporate')">Corporate
                                                Office</a>
                                        </li>

                                        <li class="nav-item our-project">
                                            <a class="nav-link bottom-border" aria-current="page" href="#commercial"
                                                data-bs-target="#commercial" onclick="showCard('commercial')">Commerical
                                                Shops</a>
                                        </li>
                                        <li class="nav-item our-project">
                                            <a class="nav-link bottom-border" aria-current="page" href="#foodcourt"
                                                data-bs-target="#foodcourt" onclick="showCard('foodcourt')">Food
                                                Courts</a>
                                        </li>
                                        <li class="nav-item our-project">
                                            <a class="nav-link bottom-border" aria-current="page" href="#farmhouse"
                                                data-bs-target="#farmhouse" onclick="showCard('farmhouse')">Farm Houses
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="">
                            <hr class="line">

                        </div>

                    </div>
                    <div class="apcards" id="luxury">
                        <div class="row">
                            @foreach ($luxuryApartmentProjects as $luxuryApartmentProject)
                                <div class="col-lg-4">
                                    <a href="{{ route('insideProject', $luxuryApartmentProject) }}">
                                        <div class="card border-0 shadow rounded p-3 mt-3">
                                            <img src="{{ asset('/Image/project/' . $luxuryApartmentProject->image) }}"
                                                class="img-fluid">

                                        </div>
                                    </a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon1.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-lg-4 ms-4 ms-sm-5 mb-0"><span
                                                            class="small-text">Duration of
                                                            Project</span><br>{{ $luxuryApartmentProject->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon2.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-sm-5 ms-lg-0 mb-0"><span
                                                            class="small-text ms-lg-2">Down Payment Start
                                                            From</span><br>${{ $luxuryApartmentProject->downpayment }}/
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <img class="me-lg-2 img-fluid" src="images/location.svg">
                                            <p class="mid-text my-1 ms-sm-3">{{ $luxuryApartmentProject->address }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-4">
                                <a href="{{ route('allProjects') }}">
                                    <div class="card border-0 shadow rounded p-3 mt-3">
                                        <img src="{{ asset('/images/seemoregroup.svg') }}">

                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>

                    <div class="apcards" id="corporate" style="display: none;">
                        <div class="row ">
                            @foreach ($corporateOfficeProjects as $corporateOfficeProject)
                                <div class="col-lg-4">
                                    <a href="{{ route('insideProject', $corporateOfficeProject) }}">
                                        <div class="card border-0 shadow rounded p-3 mt-3">
                                            <img src="{{ asset('/Image/project/' . $corporateOfficeProject->image) }}"
                                                class="img-fluid">

                                        </div>
                                    </a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon1.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-lg-4 mb-0 ms-4 ms-sm-5"><span
                                                            class="small-text">Duration of
                                                            Project1</span><br>{{ $corporateOfficeProject->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon2.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-sm-5 ms-lg-0 mb-0"><span
                                                            class="small-text ms-lg-2">Down Payment Start
                                                            From</span><br>${{ $corporateOfficeProject->downpayment }}/
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <img class="me-2 img-fluid" src="images/location.svg">
                                            <p class="mid-text my-1 ms-sm-3">{{ $corporateOfficeProject->address }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-4">
                                <a href="{{ route('allProjects') }}">
                                    <div class="card border-0 shadow rounded p-3 mt-3">
                                        <img src="{{ asset('/images/seemoregroup.svg') }}">

                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>


                    <div class="apcards" id="commercial" style="display: none;">
                        <div class="row ">
                            @foreach ($commericalShopsProjects as $commericalShopsProject)
                                <div class="col-lg-4">
                                    <a href="{{ route('insideProject', $commericalShopsProject) }}">
                                        <div class="card border-0 shadow rounded p-3 mt-3">
                                            <img src="{{ asset('/Image/project/' . $commericalShopsProject->image) }}"
                                                class="img-fluid">

                                        </div>
                                    </a>

                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon1.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-lg-4 mb-0 ms-4 ms-sm-5"><span
                                                            class="small-text">Duration of
                                                            Project0</span><br>{{ $commericalShopsProject->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon2.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-sm-5 ms-lg-0 mb-0"><span
                                                            class="small-text ms-lg-2">Down Payment Start
                                                            From</span><br>${{ $commericalShopsProject->downpayment }}/
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <img class="me-2 img-fluid" src="images/location.svg">
                                            <p class="mid-text ms-sm-3 my-1">{{ $commericalShopsProject->address }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-4">
                                <a href="{{ route('allProjects') }}">
                                    <div class="card border-0 shadow rounded p-3 mt-3">
                                        <img src="{{ asset('/images/seemoregroup.svg') }}">

                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>


                    <div class="apcards" id="foodcourt" style="display: none;">
                        <div class="row ">
                            @foreach ($foodCourtsProjects as $foodCourtsProject)
                                <div class="col-lg-4">
                                    <a href="{{ route('insideProject', $foodCourtsProject) }}">
                                        <div class="card border-0 shadow rounded p-3 mt-3">
                                            <img src="{{ asset('/Image/project/' . $foodCourtsProject->image) }}"
                                                class="img-fluid">

                                        </div>

                                    </a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon1.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-lg-4 mb-0 ms-4 ms-sm-5"><span
                                                            class="small-text">Duration of
                                                            Project2</span><br>{{ $foodCourtsProject->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon2.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-sm-5 ms-lg-0 mb-0"><span
                                                            class="small-text ms-lg-2">Down Payment Start
                                                            From</span><br>${{ $foodCourtsProject->downpayment }}/</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <img class="me-2 img-fluid" src="images/location.svg">
                                            <p class="mid-text my-1 ms-sm-3">{{ $foodCourtsProject->address }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-4">
                                <a href="{{ route('allProjects') }}">
                                    <div class="card border-0 shadow rounded p-3 mt-3">
                                        <img src="{{ asset('/images/seemoregroup.svg') }}">

                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>


                    <div class="apcards" id="farmhouse" style="display: none;">
                        <div class="row ">
                            @foreach ($farmHouseProjects as $farmHouseProject)
                                <div class="col-lg-4">
                                    <a href="{{ route('insideProject', $farmHouseProject) }}">
                                        <div class="card border-0 shadow rounded p-3 mt-3">
                                            <img src="{{ asset('/Image/project/' . $farmHouseProject->image) }}"
                                                class="img-fluid">

                                        </div>
                                    </a>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon1.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-lg-4 mb-0 ms-4 ms-sm-5"><span
                                                            class="small-text">Duration of
                                                            Project3</span><br>{{ $farmHouseProject->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card p-1 rounded-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('/images/icon2.svg') }}" class="img-fluid">
                                                    <p class="dark-text ms-sm-5 ms-lg-0 mb-0"><span
                                                            class="small-text ms-lg-2">Down Payment Start
                                                            From</span><br>${{ $farmHouseProject->downpayment }}/</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <img class="me-2 img-fluid" src="images/location.svg">
                                            <p class="mid-text my-1 ms-sm-3">{{ $farmHouseProject->address }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-4">
                                <a href="{{ route('allProjects') }}">
                                    <div class="card border-0 shadow rounded p-3 mt-3">
                                        <img src="{{ asset('/images/seemoregroup.svg') }}">

                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>


                </div>

            </section>


        </div>

    </div>


    <section>
        <div class="container clients">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('/images/quotation.svg') }}" class="img-fluid">

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="green-back rounded-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/images/dots.svg') }}" class="ms-5 img-fluid" style="z-index: 5;">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid dreamwell mb-5 pb-5">
            <div class="row mb-5 pb-5">
                <div class="col-lg-4">
                    <p class="satis">Satisfied Dreamwell’s Clients</p>

                </div>
                <div class="col-lg-8">
                    <div id="clientsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($testimonials->chunk(3) as $key => $chunk)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">

                                    <div class="row">
                                        @foreach ($chunk as $testimonial)
                                            <div class="col-lg-4">
                                                <div class="card rounded-4  border-1">
                                                    <div class="p-3">
                                                        <div class="row mt-3">
                                                            <div class="col-4">
                                                                <img src="{{ asset('/Image/testimonial/' . $testimonial->image) }}"
                                                                    class="img-fluid">

                                                            </div>
                                                            <div class="col-8">
                                                                <p class="mb-0 f-600">{{ $testimonial->name }}</p>
                                                                <p class="mt-0 f-400">{{ $testimonial->address }}</p>
                                                            </div>
                                                        </div>
                                                        <p class="mt-3 f-400">{{ $testimonial->description }}</p>
                                                        <img src="{{ asset('/images/stars.svg') }}" class="img-fluid">
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach


                                    </div>

                                </div>
                            @endforeach


                        </div>
                    </div>

                </div>



            </div>
            <div class="row">
                <div class="col-3 col-md-1 col-sm-3 col-lg-1 me-0">
                    <img src="{{ asset('/images/left.svg') }}" class="img-fluid" onclick="prevsatisSlide()"
                        style="cursor: pointer;">

                </div>
                <div class="col-3 col-md-1 col-sm-3 col-lg-1 me-5">
                    <img src="{{ asset('/images/right.svg') }}" class="img-fluid" onclick="nextsatisSlide()"
                        style="cursor: pointer;">

                </div>
            </div>
        </div>

    </section>


    <section class="CollaborativeSection">
        <div class="mt-lg-5 mb-lg-5">
            <p class="partner mb-5 text-center">Our Collaborative Partner</p>
            <div class="" style="background-color: rgb(250,250 ,250 );">
                <div class="container">
                    <img src="{{ asset('/images/partner.svg') }}" class="img-fluid">
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container mt-lg-5 pt-lg-5 mt-2 pt-2">
            <img src="{{ asset('/images/backimage.svg') }}" class="img-fluid mb-0">

            <div class="row dream-home">
                <div class="col-2"></div>
                <div class="col-8 back-image">
                    <div class="d-flex justify-content-center">
                        <div class="col-8 mt-4">
                            <p class="mt-5 mx-lg-5 dream-house pt-5 text-center">Let’s Find Your Dream House with
                                Monarch International !</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-light">Book your dream home</button>
                    </div>

                </div>
                <div class="col-2">

                </div>
            </div>

        </div>
    </section>

    <section class="blogs pb-5">
        <div class="d-flex justify-content-center pt-5">
            <p class="news">Blog & News from </p>
            <img src="{{ asset('/images/monarch.svg') }}" class="img-fluid monar">
        </div>
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 blogg">
                        <a href="{{ route('insideBlog', $blog) }}">
                            <div class="card blog-card shadow border-0 rounded-4">
                                <img src="{{ asset('/Image/blog/' . $blog->image) }}" class="img-fluid">
                                <p class="invest p-3 mb-0">{{ $blog->title }}</p>
                                <div class="row px-3">
                                    <div class="col-1 mb-0">
                                        <img src="{{ asset('/images/1.svg') }}">
                                    </div>
                                    <div class="col-5">
                                        <p class="mb-0 text-nowrap">Dreamwell Team</p>
                                    </div>
                                    <div class="col-1">
                                        <img src="{{ asset('/images/2.svg') }}" class="ms-5">
                                    </div>
                                    <div class="col-5">
                                        <p class="mb-0 ms-5">{{ $blog->created_at->format('F d') }}</p>
                                    </div>

                                </div>
                                <p class="p-3 green-text mb-0">Read More</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>


    </section>

    </section>

    <section class="services mt-lg-5 pt-lg-5 mt-2 pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <p class="size20">Our Services</p>
                    <p class="size40">Why Choose Monarch ?</p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <p class="size16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus velit morbi
                        consectetur ipsum commodo vulputate ultrices. Magna habitant enim non gravida mi sapien viverra
                        .Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus velit morbi consectetur ipsum
                        commodo vulputate ultrices. Magna habitant enim non gravida mi sapien viverra .</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                        <img src="{{ asset('/images/group1.svg') }}" class="img-fluid mt-3 img-size">
                        <p class="better mt-2">Better Values</p>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">

                                <p class="mt-3 gray-color">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Rhoncus
                                    velit morbi consectetur</p>


                            </div>
                            <div class="col-2"></div>
                        </div>


                        <a href="{{ route('about') }}" class="text-decoration-none learnmore">
                            <p class="mt-4 learn-color">Learn More</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                        <img src="{{ asset('/images/group2.svg') }}" class="img-fluid mt-3 img-size">
                        <p class="better mt-2">Better Values</p>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">

                                <p class="mt-3 gray-color">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Rhoncus
                                    velit morbi consectetur</p>


                            </div>
                            <div class="col-2"></div>
                        </div>


                        <a href="{{ route('about') }}" class="text-decoration-none learnmore">
                            <p class="mt-4 learn-color">Learn More</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                        <img src="{{ asset('/images/group3.svg') }}" class="img-fluid mt-3 img-size">
                        <p class="better mt-2">Better Values</p>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">

                                <p class="mt-3 gray-color">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Rhoncus
                                    velit morbi consectetur</p>


                            </div>
                            <div class="col-2"></div>
                        </div>


                        <a href="{{ route('about') }}" class="text-decoration-none learnmore">
                            <p class="mt-4 learn-color">Learn More</p>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="mt-5 pt-5">

        <div class="container">
            <div class="text-center">
                <p class="size40">Looking for popular cities to get properties in?</p>
                <p>Here's a list of houses flats plots and rooms in all bustling metropolitan cities.</p>
            </div>

            <div class="row mt-5">
                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <a class="interestedTo" href="{{ route('location', 'DHA Islamabad') }}">
                        <p>Property in DHA Islamabad</p>
                    </a>
                    <a class="interestedTo" href="{{ route('location', 'DHA Rawalpindi') }}">
                        <p>Property in DHA Rawalpindi</p>
                    </a>
                    <a class="interestedTo" href="{{ route('location', 'DHA PWD') }}">
                        <p>Property in DHA PWD</p>
                    </a>
                </div>

                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>

                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>

                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>

                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>

                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>

                <div class="col-lg-3">
                    <p class="property">Islamabad Properties</p>
                    <p>Property in DHA Islamabad</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA PWD</p>
                    <p>Property in DHA Rawalpindi</p>
                    <p>Property in DHA Islamabad</p>
                </div>
            </div>

        </div>

    </section>






    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            const slider = $('#card-slider');

            slider.slick({
                dots: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                infinite: true,
                autoplaySpeed: 3000,
            });

            $('#prevSlideBtn').click(function() {
                slider.slick('slickPrev');
            });

            $('#nextSlideBtn').click(function() {
                slider.slick('slickNext');
            });
        });
    </script>


    <!-- dropdown -->



    <script>
        function showImageBox(imageBoxId) {
            const imageBoxes = document.querySelectorAll(".image-box");
            const navLinks = document.querySelectorAll(".nav-link");

            imageBoxes.forEach((box) => {
                box.style.display = "none";
            });

            navLinks.forEach((navLink) => {
                navLink.classList.remove("active");
            });

            document.getElementById(imageBoxId).style.display = "block";

            const clickedNavLink = document.querySelector(`[data-bs-target="#${imageBoxId}"]`);
            if (clickedNavLink) {
                clickedNavLink.classList.add("active");
            }
        }
    </script>
    <script>
        function showInterestedBox(interestedBoxId) {
            const imageBoxes = document.querySelectorAll(".interested-box");
            const navLinks = document.querySelectorAll(".interested-nav-link");

            imageBoxes.forEach((box) => {
                box.style.display = "none";
            });

            navLinks.forEach((navLink) => {
                navLink.classList.remove("active");
            });

            document.getElementById(interestedBoxId).style.display = "block";

            const clickedNavLink = document.querySelector(`[data-bs-target="#${interestedBoxId}"]`);
            if (clickedNavLink) {
                clickedNavLink.classList.add("active");
            }
        }
    </script>

    <script>
        function showCard(cardId) {
            var allCards = document.querySelectorAll('.apcards');
            for (var i = 0; i < allCards.length; i++) {
                allCards[i].style.display = 'none';
            }

            var cardToShow = document.getElementById(cardId);
            if (cardToShow) {
                cardToShow.style.display = 'block';
            }

            var allLinks = document.querySelectorAll('.bottom-border');
            for (var i = 0; i < allLinks.length; i++) {
                allLinks[i].classList.remove('active');
            }

            var clickedLink = document.querySelector('[data-bs-target="#' + cardId + '"]');
            if (clickedLink) {
                clickedLink.classList.add('active');
            }
        }
    </script>


    <!-- scroll btn code -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.getElementById("scrollToTopButton");

            window.addEventListener("scroll", function() {
                if (window.scrollY >= 300) {
                    scrollToTopButton.style.display = "block";
                } else {
                    scrollToTopButton.style.display = "none";
                }
            });

            scrollToTopButton.addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>


    <script>
        const imageContainer = document.getElementById('imageContainer');
        const image = imageContainer.querySelector('.image');
        const formContainer = imageContainer.querySelector('.form-container');
        const description = imageContainer.querySelector('.description');
        let isHovering = false;
        let isDescriptionVisible = false;

        // Function to handle image size change on scroll when hovering
        function handleScroll(event) {
            if (isHovering) {
                if (!isDescriptionVisible) {
                    event.preventDefault(); // Prevent scroll until description is visible
                }
                const scrollTop = window.scrollY;
                if (scrollTop > 0) {
                    imageContainer.style.width = '100%';
                    formContainer.style.top = '-100%'; // Move the form up
                    description.style.bottom = '50%'; // Show the hidden description
                    isDescriptionVisible = true;
                } else {
                    if (isExtraSmallDevice()) {
                        imageContainer.style.width = '100%';
                        formContainer.style.top = '50%'; // Bring the form back to its original position
                        description.style.bottom = '-100%'; // Hide the hidden description
                        isDescriptionVisible = false;
                    } else {
                        imageContainer.style.width = '80%';
                        formContainer.style.top = '50%'; // Bring the form back to its original position
                        description.style.bottom = '-100%'; // Hide the hidden description
                        isDescriptionVisible = false;
                    }

                }
            }
        }

        // Function to handle mouse enter on the image
        function handleMouseEnter() {
            isHovering = true;
        }

        // Function to handle mouse leave from the image
        function handleMouseLeave() {
            isHovering = false;
        }

        // Add scroll event listener to the window
        window.addEventListener('scroll', handleScroll, {
            passive: false
        });

        // Add mouse enter event listener to the image
        imageContainer.addEventListener('mouseenter', handleMouseEnter);

        // Add mouse leave event listener to the image
        imageContainer.addEventListener('mouseleave', handleMouseLeave);

        function isExtraSmallDevice() {
            return window.innerWidth <= 576;
        }

        // Adjust image-container width for extra smaller devices
        function adjustImageContainerWidth() {
            if (isExtraSmallDevice()) {
                imageContainer.style.width = '100%';
            }
        }

        // Initially set image-container width based on device size
        adjustImageContainerWidth();

        // Listen for window resize events and adjust the image-container width
        window.addEventListener('resize', adjustImageContainerWidth);
    </script>
    <script>
        function showCard(cardId) {
            var allCards = document.querySelectorAll('.apcards');
            for (var i = 0; i < allCards.length; i++) {
                allCards[i].style.display = 'none';
            }

            var cardToShow = document.getElementById(cardId);
            if (cardToShow) {
                cardToShow.style.display = 'block';
            }

            var allLinks = document.querySelectorAll('.bottom-border');
            for (var i = 0; i < allLinks.length; i++) {
                allLinks[i].classList.remove('active');
            }

            var clickedLink = document.querySelector('[href="#' + cardId + '"]');
            if (clickedLink) {
                clickedLink.classList.add('active');
            }
        }
    </script>
    <script>
        function showTab(tabId) {
            var tabContent = document.querySelectorAll('.tab-pane');
            for (var i = 0; i < tabContent.length; i++) {
                tabContent[i].classList.remove('active');
            }

            var tabToShow = document.getElementById(tabId);
            if (tabToShow) {
                tabToShow.classList.add('active');
            }

            var allLinks = document.querySelectorAll('.nav-link');
            for (var i = 0; i < allLinks.length; i++) {
                allLinks[i].classList.remove('active');
            }

            var clickedLink = document.querySelector('[href="#' + tabId + '"]');
            if (clickedLink) {
                clickedLink.classList.add('active');
            }
        }
    </script>
@endsection
