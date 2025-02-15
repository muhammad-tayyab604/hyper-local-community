<style>
    .interestedTo {
        text-decoration: none;
        color: black;
    }
</style>

@extends('layouts.app')
@section('content')
@section('title', 'buy')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-lg-3"></div>

            <div class="col-md-9 col-sm-9 col-lg-9">
                <p class="buy">Buy a Dream Home</p>
                <p class="gray-color">Home / <span style="color: black;"><b>Buy</b></span> </p>
                <div class="row">
                    {{-- <div class="col-4 col-md-4 col-sm-4 col-lg-2">
                        <p>Sort by</p>
                    </div>
                    <div class="col-4 col-md-4 col-sm-4 col-lg-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Newest
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-4 col-md-4 col-sm-4 col-lg-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Popular
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-4 col-md-4 col-sm-4 col-lg-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Featured
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-4 col-md-4 col-sm-4 col-lg-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Other
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-4 col-md-4 col-sm-4 col-lg-12 justify-content-center">
                        <div class="d-flex justify-content-end">
                            <img src="images/Menu.svg" class="img-fluid">
                        </div>
                    </div>
                </div>
                @foreach ($buyProducts as $buyProduct)
                    <div class="card p-2 rounded-3 border-0 shadow mt-3">
                        <div class="row">
                            <div class="col-12 col-md-4 col-sm-12 col-lg-4">
                                <a href="{{ route('insideListing', $buyProduct) }}">
                                    <img src="{{ asset('Image/product/' . $buyProduct->image) }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12 col-lg-8">
                                <p class="mb-0">{{ $buyProduct->name }}</p>
                                <div class="d-flex mt-0">
                                    <img src="images/clip.svg" class="img-fluid">
                                    <p class="small-text gray-color my-2 ms-1">{{ $buyProduct->address }}</p>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                                        <div class="d-flex">
                                            <img src="images/green1.svg" class="img-fluid">
                                            <p class="bed my-1 ms-1">{{ $buyProduct->number_of_bed }} Beds</p>
                                        </div>
                                        <div class="d-flex">
                                            <img src="images/green3.svg" class="img-fluid">
                                            <p class="bed my-1 ms-1">{{ $buyProduct->number_of_bath }} Baths</p>
                                        </div>

                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                                        <div class="d-flex">
                                            <img src="images/green2.svg" class="img-fluid">
                                            <p class="bed my-1 ms-1">{{ $buyProduct->garadge }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <img src="images/green4.svg" class="img-fluid">
                                            <p class="bed my-1 ms-1">{{ $buyProduct->square_feet }} sqft</p>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-8 col-sm-8 col-lg-4">
                                        <div class="card p-1">
                                            <p class="mb-0 text-start">{{ $buyProduct->status }}</p>
                                            <p class="text-start mb-0"><b>${{ $buyProduct->price }}</b><span
                                                    class="small-text">/month</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4 col-sm-4 col-lg-2">
                                        <a href="{{ route('insideListing', $buyProduct) }}"><img
                                                src="images/greenarrow.svg" class="img-fluid"
                                                style="height: 3.5rem;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4"></div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <nav class="mt-4" aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link border-0" href="#" aria-label="Previous">
                                        <img src="images/leftarr.svg" class="img-fluid ">
                                    </a>

                                </li>
                                <li class="page-item"><a class="page-link rounded" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link rounded" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link rounded" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link border-0" href="#" aria-label="Next">
                                        <img src="images/rightarr.svg" class="img-fluid ">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                </div>



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
