<style>
    .interestedTo {
        text-decoration: none;
        color: black;
    }

    label {
        cursor: pointer;
        color: black;

    }

    .btnForPrice {
        outline: none;
        border: none;
        background-color: transparent;
        padding: 12px;
    }
</style>

@extends('layouts.app')
@section('content')
@section('title', 'Property Rent')
<section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-3 ol-sm-3 col-lg-3">


                <div class="card gray-back">

                    <div class="ms-4 mt-3 me-3">

                        <p class="fw-bold">Type</p>

                        @if (count($categories) > 0)
                            <div class="form-check mt-2">
                                <a href="{{ route('rent') }}">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label ">
                                        All
                                    </label>
                                </a>
                            </div>
                            @foreach ($categories as $category)
                                <div class="form-check mt-2">
                                    <input class="form-check-input category-checkbox" type="checkbox"
                                        value="{{ $category['id'] }}" id="category{{ $category->category_name }}"
                                        data-name="{{ $category->category_name }}">
                                    <label class="form-check-label" for="category{{ $category->category_name }}">
                                        {{ $category->category_name }}
                                    </label>
                                </div>
                            @endforeach
                        @endif
                        <hr>


                        <p class="fw-bold">Status</p>

                        <div class="form-check mt-2">
                            <a href="{{ route('rent') }}">
                                <input class="form-check-input" type="checkbox" checked>
                                <label class="form-check-label ">
                                    All
                                </label>
                            </a>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input status-checkbox" type="checkbox" value="Rent"
                                id="status-rent">
                            <label class="form-check-label" for="status-rent">
                                Rent
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input status-checkbox" type="checkbox" value="Sell"
                                id="status-sell">
                            <label class="form-check-label" for="status-sell">
                                Sell
                            </label>
                        </div>

                        <hr>

                        <p class="fw-bold">Location</p>

                        <form action="{{ route('searchProducts') }}" method="GET">
                            @csrf
                            <div class="row mt-3">
                                <div class="input-group col-md-4">
                                    <input class="form-control border border-end-0 rounded-0" type="search"
                                        name="search" id="example-search-input" placeholder="Search"
                                        value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary border border-start-0 rounded-0"
                                            type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>

                        @foreach ($rentProducts as $index => $rentProduct)
                            @if ($index < 5)
                                <div class="form-check mt-3">
                                    <input class="form-check-input location-checkbox" type="checkbox"
                                        value="{{ $rentProduct->area }}" id="area{{ $rentProduct->area }}">
                                    <label class="form-check-label" for="area{{ $rentProduct->area }}">
                                        {{ $rentProduct->area }}
                                    </label>
                                </div>
                            @endif
                        @endforeach



                        <hr>

                        <p class="fw-bold">Bedroom</p>

                        <div class="form-check mt-3">
                            <input class="form-check-input bedroom-checkbox" type="checkbox" value="1"
                                id="bedroom-1">
                            <label class="form-check-label" for="bedroom-1">
                                1
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input bedroom-checkbox" type="checkbox" value="2"
                                id="bedroom-2">
                            <label class="form-check-label" for="bedroom-2">
                                2
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input bedroom-checkbox" type="checkbox" value="3"
                                id="bedroom-3">
                            <label class="form-check-label" for="bedroom-3">
                                3
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input bedroom-checkbox" type="checkbox" value="4"
                                id="bedroom-4">
                            <label class="form-check-label" for="bedroom-4">
                                4
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input bedroom-checkbox" type="checkbox" value="5-more"
                                id="bedreem-5-more">
                            <label class="form-check-label" for="bedreem-5-more">
                                More Than 4
                            </label>
                        </div>

                        <hr>

                        <p class="fw-bold">Price</p>

                        <form action="{{ route('searchProducts') }}" method="GET">
                            <div class="d-flex">

                                <div class="mb-3 me-3">
                                    <label for="minPrice" class="form-label">Min Price</label>
                                    <input type="number" name="minPrice" step="0.01" class="form-control"
                                        id="minPrice" placeholder="$20">
                                </div>

                                <div class="mb-3">
                                    <label for="maxPrice" class="form-label">Max Price</label>
                                    <input type="number" name="maxPrice" step="0.01" class="form-control"
                                        id="maxPrice" placeholder="$100">
                                </div>
                                <button class="btnForPrice" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>

                            </div>
                        </form>



                    </div>

                </div>



            </div>

            <div class="col-md-9 ol-sm-9 col-lg-9">
                <p class="gray-color text-end">Home / <span style="color: black;"><b>Rent</b></span> </p>
                <div class="row">
                    {{-- <div class="col-md-1 col-sm-1 col-lg-1">
                        <p class="my-size my-2">Sort by</p>
                    </div>
                    <div class="col-md-2 col-sm-2 col-lg-2">
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

                    <div class="col-md-2 col-sm-2 col-lg-2">
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

                    <div class="col-md-2 col-sm-2 col-lg-2">
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

                    <div class="col-md-2 col-sm-2 col-lg-2">
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
                    </div>
                    <div class="col-1"></div> --}}
                    <div class="col-md-2 justify-content-center col-sm-2 col-lg-12">
                        <div class="d-flex justify-content-end">
                            <img src="images/myrent1.svg" class="img-fluid me-2">
                            <img src="images/myrent2.svg" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    @foreach ($rentProducts as $rentProduct)
                        <div class="col-md-4 col-sm-4 col-lg-4 property-card"
                            data-category="{{ $rentProduct->category_id }}" data-status="{{ $rentProduct->status }}"
                            data-location = "{{ $rentProduct->area }}"
                            data-bedroom="{{ $rentProduct->number_of_bed }}">
                            <div class="card p-1 shadow border-0 rounded-3">
                                <a href="{{ route('insideListing', $rentProduct) }}">
                                    <img src="{{ asset('Image/product/' . $rentProduct->image) }}" class="img-fluid">

                                </a>
                                <div class="card-body">
                                    <p class="text-start beach mb-0">{{ $rentProduct->name }}</p>

                                    <div class="d-flex mt-0">
                                        <img src="images/clip.svg" class="img-fluid">
                                        <p class="small-text gray-color my-2 ms-1">{{ $rentProduct->address }}</p>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed1.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $rentProduct->number_of_bed }} Beds</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed2.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $rentProduct->garadge }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed3.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $rentProduct->number_of_bath }} Baths</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="images/bed4.svg" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $rentProduct->squar_feet }} sqft</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-8 col-lg-8 col-sm-8">
                                            <div class="card p-1">
                                                <p class="mb-0 text-start">{{ $rentProduct->status }}</p>
                                                <p class="text-start mb-0"><b>${{ $rentProduct->price }}</b><span
                                                        class="small-text">/month</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4">
                                            <a href="{{ route('insideListing', $rentProduct) }}"><img
                                                    src="{{ asset('/images/whitearrow.svg') }}"
                                                    class="img-fluid"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-4 col-lg-4"></div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <nav class="mt-4" aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link border-0" href="#" aria-label="Previous">
                                        <img src="images/leftarr.svg" class="img-fluid ">
                                    </a>

                                </li>
                                <li class="page-item active"><a class="page-link rounded" href="#">1</a></li>
                                <li class="page-item" aria-current="page">
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





    <section class="services mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <p class="size20">Our Services</p>
                    <p class="size40">Why Choose Monarch ?</p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <p class="size16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus velit morbi
                        consectetur ipsum commodo vulputate ultrices. Magna habitant enim non gravida mi sapien
                        viverra .Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus velit morbi
                        consectetur ipsum commodo vulputate ultrices. Magna habitant enim non gravida mi sapien
                        viverra .</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
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

                <div class="col-md-4 col-sm-4 col-lg-4">
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

                <div class="col-md-4 col-sm-4 col-lg-4">
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

</section>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add a custom script to filter properties -->
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').on('change', function() {
            var selectedCategories = [];
            var selectedStatus = [];
            var selectedBedrooms = [];
            var selectedLocations = [];


            // Get all selected category values (category_id)
            $('.category-checkbox:checked').each(function() {
                selectedCategories.push($(this).val());
            });

            // Get all selected status values
            $('.status-checkbox:checked').each(function() {
                selectedStatus.push($(this).val());
            });

            // Get all selected bedroom values
            $('.bedroom-checkbox:checked').each(function() {
                var bedroomValue = $(this).val();
                if (bedroomValue === '5-more') {
                    // Handle "More Than 4" separately
                    $('.property-card').each(function() {
                        var propertyCategory = $(this).data('category');
                        var propertyStatus = $(this).data('status');
                        var propertyBedrooms = $(this).data('bedrooms');
                        var propertyLocation = $(this).data('location')

                        if ((selectedCategories.length === 0 || selectedCategories
                                .includes(propertyCategory.toString())) &&
                            (selectedStatus.length === 0 || selectedStatus.includes(
                                propertyStatus)) &&
                            propertyBedrooms > 4) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                } else {
                    selectedBedrooms.push(bedroomValue);
                }
            });

            // Get all selected location values
            $('.location-checkbox:checked').each(function() {
                selectedLocations.push($(this).val());
            });

            // Show or hide property cards based on selected categories, status, bedrooms, and locations
            $('.property-card').each(function() {
                var propertyCategory = $(this).data('category');
                var propertyStatus = $(this).data('status');
                var propertyBedrooms = $(this).data('bedrooms');
                var propertyLocation = $(this).data('location');

                var showProperty =
                    (selectedCategories.length === 0 || selectedCategories.includes(
                        propertyCategory.toString())) &&
                    (selectedStatus.length === 0 || selectedStatus.includes(propertyStatus)) &&
                    (selectedBedrooms.length === 0 || selectedBedrooms.includes(
                        propertyBedrooms)) &&
                    (selectedLocations.length === 0 || selectedLocations.includes(
                        propertyLocation));

                if (showProperty) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

@endsection
