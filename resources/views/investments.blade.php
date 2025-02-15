<style>
    .interestedTo {
        text-decoration: none;
        color: black;
    }
</style>

@extends('layouts.app')
@section('content')
@section('title', 'Investments')
<section class="mt-5 pt-5">

    <div class="container">
        <div class="row">
            <div class="col-8 col-md-8 col-lg-8 col-sm-8">
                <img src="images/building3.svg" class="img-fluid">
            </div>
            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                <img src="images/building4.svg" class="img-fluid">
                <img src="images/building5.svg" class="img-fluid mt-3">

            </div>
        </div>

        <p class="gray-color mt-4">Home / <span style="color: black;"><b>Investments</b></span> </p>

        <div class="row text-center">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <p class="interested">Discover the Property Types</p>
            </div>
            <div class="col-xl-3"></div>
        </div>

        <div class="row">
            @foreach ($investmentCategories as $investmentCategory)
                <div class="col-xl-3 col-lg-3">
                    <div class="card border-0">
                        <img src="{{ asset('Image/category/' . $investmentCategory->image) }}"
                            class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">

                            <p class="card-text white-text mb-3">{{ $investmentCategory->category_name }} </p>
                        </div>
                    </div>
                </div>
            @endforeach



            {{-- <div class="col-xl-3 col-lg-3">
                <div class="card border-0">
                    <img src="images/house7.svg" class="card-img img-fluid" alt="...">
                    <div class="card-img-overlay d-flex align-items-end justify-content-center">

                        <p class="card-text white-text mb-3"></p>
                    </div>
                </div>
            </div> --}}


        </div>

        <div class="row text-center">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <p class="interested">Explore the Featured Properties</p>
            </div>
            <div class="col-xl-3"></div>
        </div>


        <div class="row pb-5">
            @foreach ($investmentProducts as $index => $investmentProduct)
                @if ($index < 4)
                    <div class="col-md-6 col-lg-3">
                        <a href="{{ route('insideListing', $investmentProduct) }}">
                            <div class="card border-0  shadow rounded-4">
                                <img src="{{ asset('Image/product/' . $investmentProduct->image) }}"
                                    class="img-fluid card-img-top">
                                <div class="card-body">
                                    <p class="text-start beach mb-0">{{ $investmentProduct->name }}</p>

                                    <div class="d-flex mt-0">
                                        <img src="images/clip.svg" class="img-fluid">
                                        <p class="small-text gray-color my-2 ms-1">{{ $investmentProduct->address }}</p>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed1.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $investmentProduct->number_of_bed }} Beds
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed2.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $investmentProduct->garadge }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed3.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $investmentProduct->number_of_bath }} Baths
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed4.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $investmentProduct->square_feet }} sqft</p>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <p class="text-start mb-0"><b>${{ $investmentProduct->price }}</b><span>/</span>
                                    </p>
                                    <p class="mb-0">month</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>

    </div>


    <!-- I'm Interested To -->
    <section class="inte pb-5">
        <div class="container-fluid text-center">
            <p class="mt-lg-5 pt-lg-5 mt-2 pt-2 interested">I'm Interested To</p>

            <div class="row box-icon d-flex justify-content-center align-content-center mt-5">
                <div class="col-lg-1 d-flex align-items-center">
                    <img src="images/Line.svg" class="img-fluid lineimage">
                </div>
                <div class="col-lg-2">
                    <a class="interestedTo" href="{{ route('buy') }}">
                        <img class="bottom img-fluid" src="images/Number.svg">
                        <div class="card shadow p-1 bg-body rounded my-card">
                            <div class="">
                                <img class="mt-5 img-fluid interested-shape" src="images/shape1.svg">

                            </div>

                            <p class="icon-p mt-3">Buy a Home</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <img src="images/Line.svg" class="img-fluid lineimage">
                </div>
                <div class="col-lg-2">
                    <a class="interestedTo" href="{{ route('rent') }}">
                        <img class="bottom img-fluid" src="images/Number1.svg">
                        <div class="card shadow p-1 bg-body rounded my-card">
                            <div class="">
                                <img class="mt-5 img-fluid interested-shape" src="images/shape2.svg">

                            </div>

                            <p class="icon-p mt-3">Rent</p>
                        </div>
                    </a>

                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <img src="images/Line.svg" class="img-fluid lineimage">
                </div>
                <div class="col-lg-2">
                    <a class="interestedTo" href="{{ route('allProjects') }}">
                        <img class="bottom img-fluid" src="images/Number2.svg">
                        <div class="card p-1 shadow bg-body rounded my-card">
                            <div class="">
                                <img class="mt-5 img-fluid interested-shape" src="images/shape3.svg">

                            </div>

                            <p class="icon-p mt-3">Sell</p>
                        </div>
                    </a>

                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <img src="images/Line.svg" class="img-fluid lineimage">
                </div>
            </div>
            <button class="btn btn-outline-success mt-5"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                Talk to an Expert</button>
        </div>
    </section>


</section>


<section>
    <div class="container-fluid">

        <div class="row">
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="col-7 col-md-7 col-sm-7 col-lg-7">
            </div>
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class=" col-md-3 col-sm-3 col-lg-3">
                <img src="images/element.svg" class="img-fluid firstelement">
            </div>
        </div>

        <div class="row four-row ">
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div
                class="col-10 col-md-5 col-sm-12 col-lg-5 mt-5 pt-sm-0 pt-md-0 pt-lg-0 pt-xl-0 pt-5 ms-2 ms-sm-2 ms-md-0 ms-lg-0 ms-xl-0">
                <p class="ramada mt-5 mt-sm-5 mt-lg-0 mt-md-0 mt-xl-0">Welcome To RAMADA !</p>
                <p class="navigate gray-color">We are a real estate company that provides the convenience of
                    searching for properties in various regions and countries. Together with professional agents,
                    there is no house that you can't get.</p>
                <button class="btn new-color px-3 mt-3 ">More</button>
            </div>
            <div
                class="col-12 col-md-5 col-sm-5 col-lg-5 pt-sm-5 pt-md-5 pt-lg-0 pt-xl-0 mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0 pt-5 mt-5 ">
                <img src="images/building.svg" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-7 col-md-7 col-lg-7 col-sm-7"></div>
            <div class="col-1"></div>
            <div class=" col-md-3 col-lg-3 col-sm-3">
                <img src="images/Element (1).svg" class="img-fluid firstelement">
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row third-row">
            <div class="col-1"></div>
            <div
                class="col-12 col-md-5 col-lg-5 col-sm-10 pt-sm-5 pt-md-5 pt-lg-0 pt-xl-0 mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0 pt-5 mt-5">
                <img src="images/building1.svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
            <div
                class="col-10 col-md-4 col-sm-10 col-lg-4 mt-5 pt-sm-3 pt-md-3 pt-lg-0 pt-xl-0 pt-5 ms-2 ms-sm-2 ms-md-0 ms-lg-0 ms-xl-0">
                <p class="big-asset1">MONARCH ONE 1</p>
                <p class="gray-color asset">We are a real estate company that provides the convenience of searching
                    for properties in various regions and countries. Together with professional agents, there is no
                    house that you can't get.</p>

                <button class="btn new-color px-3 mt-3">More</button>

            </div>
        </div>

    </div>




</section>


<section>
    <div class="mt-5 mb-5">
        <p class="partner mb-5 text-center">Our Collaborative Partner</p>
        <div class="" style="background-color: rgb(250,250 ,250 );">
            <div class="container">
                <img src="images/partner.svg" class="img-fluid">
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container mt-lg-5 pt-lg-5 mt-2 pt-2">
        <img src="images/backimage.svg" class="img-fluid mb-0">

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
                                    <p class="mb-0 ms-5">{{ $blog->created_at }}</p>
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
                    <img src="images/group1.svg" class="img-fluid mt-3 img-size">
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


                    <p class="mt-4 learn-color">Learn More</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                    <img src="images/group2.svg" class="img-fluid mt-3 img-size">
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


                    <p class="mt-4 learn-color">Learn More</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                    <img src="images/group3.svg" class="img-fluid mt-3 img-size">
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


                    <p class="mt-4 learn-color">Learn More</p>
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

@endsection
