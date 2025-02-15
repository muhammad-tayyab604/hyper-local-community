@extends('layouts.app')
@section('content')
@section('title', 'All Location')

<section class="location">

    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-10 col-lg-10">
                <p class="interested mt-5 mb-0">Our Locations</p>
                <p class="gray-color mb-0">Home /<span style="color: black;"><b> Our Locations</b></span> </p>

                <div class="row mt-4">
                    <div class="col-md-2 col-lg-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle w-100" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Property Types
                            </button>
                            <ul class="dropdown-menu" id="categoryList">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item category-link" data-category="{{ $category['id'] }}"
                                            data-name="{{ $category->category_name }}">{{ $category->category_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle w-100" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                All Status
                            </button>
                            <ul class="dropdown-menu" id="statusList">
                                <li><a class="dropdown-item status-link" data-status="Rent" href="#">Rent</a></li>
                                <li><a class="dropdown-item status-link" data-status="Sell" href="#">Sell</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-1 col-lg-1 mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle bedroombutton" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Bedroom
                            </button>
                            <ul class="dropdown-menu" id="bedroomList">
                                <li><a class="dropdown-item bedroom-link" data-bedroom="1" href="#">1</a></li>
                                <li><a class="dropdown-item bedroom-link" data-bedroom="2" href="#">2</a></li>
                                <li><a class="dropdown-item bedroom-link" data-bedroom="3" href="#">3</a></li>
                                <li><a class= 'dropdown-item bedroom-link' data-bedroom="4" href="#">4</a></li>
                                <li><a class="dropdown-item bedroom-link" data-bedroom="5-more" href="#">More Than
                                        4</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-4">
                        <form action="{{ route('location', ['location' => $location]) }}" method="GET">
                            <div id="priceSlider"></div>
                            <div class="range-values">
                                <label for="minPrice">Min Price:</label>
                                <input type="text" name="minPrice" value="{{ request('minPrice') }}"
                                    class="form-control" id="minPrice" aria-label="Min Price">
                                <label for ="maxPrice">Max Price:</label>
                                <input type="text" name="maxPrice" value="{{ request('maxPrice') }}"
                                    class="form-control" id="maxPrice" aria-label="Max Price">
                            </div>
                    </div>


                    <div class="col-md-3 col-lg-3">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 mt-5 mt-sm-5 mt-md-0 mt-lg-0 mt-xl-0">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    value="{{ request('search') }}" name="search">

                            </div>
                            <div class="col-lg-6 col-md-6 mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0">
                                <button class="btn filter w-100" type="submit">Filters <img
                                        src="{{ asset('/images/menuoptions.svg') }}" class="img-fluid"></button>

                            </div>
                        </div>


                    </div>


                </div>
                </form>

                <div class="row mt-5">

                    <div class="col-md-6 col-lg-6">

                        <div class="">

                            <div class="row " id="scrollableRow">
                                @if ($properties->count() > 0)
                                    @foreach ($properties as $property)
                                        <div class="col-md-6 col-lg-6 property-card"
                                            data-category="{{ $property->category_id }}"
                                            data-status="{{ $property->status }}"
                                            data-bedroom="{{ $property->number_of_bed }}"
                                            data-price="{{ $property->price }}">
                                            <div
                                                class="card
                                            p-2 border-0 rounded-3 location-card">
                                                <a href="{{ route('insideListing', $property->id) }}">
                                                    <img src="{{ asset('/Image/product/' . $property->image) }}"
                                                        class="img-fluid">

                                                </a>
                                                <div class="card-body">
                                                    <p class="text-start beach mb-0">{{ $property->name }}</p>

                                                    <div class="d-flex mt-0">
                                                        <img src="{{ asset('/images/clip.svg') }}" class="img-fluid">
                                                        <p class="small-text gray-color my-2 ms-1">
                                                            {{ $property->area }}
                                                        </p>

                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-md-6 col-lg-6">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('/images/green1.svg') }}"
                                                                    class="img-fluid">
                                                                <p class="bed my-1 ms-1">
                                                                    {{ $property->number_of_bed }}
                                                                    Beds</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 col-lg-6">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('/images/green3.svg') }}"
                                                                    class="img-fluid">
                                                                <p class="bed my-1 ms-1">{{ $property->garadge }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-md-6 col-lg-6">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('/images/green2.svg') }}"
                                                                    class="img-fluid">
                                                                <p class="bed my-1 ms-1">
                                                                    {{ $property->number_of_bath }} Baths</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 col-lg-6">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('/images/green4.svg') }}"
                                                                    class="img-fluid">
                                                                <p class="bed my-1 ms-1">{{ $property->square_feet }}
                                                                    sqft</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-8 col-lg-8 col-sm-8 col-9">
                                                            <div class="card p-1 location-card">
                                                                <p class="mb-0 text-start">{{ $property->status }}</p>
                                                                <p class="text-start mb-0">
                                                                    <b>${{ $property->price }}</b><span
                                                                        class="small-text">/month</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-4 col-sm-4 col-3 py-1">
                                                            <a href="{{ route('insideListing', $property->id) }}"><img
                                                                    src="{{ asset('/images/greenarrow.svg') }}"
                                                                    class="img-fluid"></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                        </div>


                        <div class="row mb-5 pb-5">
                            <div class="col-2"></div>
                            <div class="col-md-10 col-sm-10 col-lg-10">
                                <nav class="mt-4" aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link border-0 bg-transparent" href="#"
                                                aria-label="Previous">
                                                <img src="{{ asset('/images/leftarr.svg') }}" class="img-fluid ">
                                            </a>

                                        </li>
                                        <li class="page-item active"><a class="page-link rounded"
                                                href="#">1</a>
                                        </li>
                                        <li class="page-item" aria-current="page">
                                            <a class="page-link rounded" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link rounded" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link border-0 bg-transparent" href="#"
                                                aria-label="Next">
                                                <img src="{{ asset('/images/rightarr.svg') }}" class="img-fluid">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>


                        </div>


                    </div>


                    <div class="col-md-6 col-lg-6">

                        <div class="map-location d-flex justify-content-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.256882266985!2d73.11318133435114!3d33.56098946100269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfece2410eb449%3A0x3d828c0b5b3b7da8!2sPhase%202%20Bahria%20Town%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696844915449!5m2!1sen!2s"
                                width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <!-- <img src="images/map.svg" class="img-fluid"> -->
                    </div>

                </div>


            </div>

        </div>

    </div>

</section>

<section class="new-location pb-5">

    <div class="row">
        <div class="col-1"></div>

        <div class="col-10">

            <div class="row">
                @if ($properties->count() > 0)
                    @foreach ($properties as $property)
                        <div class="col-md-3 col-lg-3 propertySeconCard property-card"
                            data-category="{{ $property->category_id }}" data-status="{{ $property->status }}"
                            data-bedroom="{{ $property->number_of_bed }}" data-price="{{ $property->price }}">

                            <div class="card p-1 shadow border-0 rounded-3">
                                <a href="{{ route('insideListing', $property->id) }}">
                                    <img src="{{ asset('images/location9.svg') }}" class="img-fluid">
                                </a>
                                <div class="card-body">
                                    <p class="text-start beach mb-0">{{ $property->name }}</p>

                                    <div class="d-flex mt-0">
                                        <img src="{{ asset('images/clip.svg') }}" class="img-fluid">
                                        <p class="small-text gray-color my-2 ms-1">
                                            {{ $property->area }}</p>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="{{ asset('images/bed1.svg') }}" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $property->number_of_bed }} Beds</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="{{ asset('images/bed2.svg') }}" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $property->garadge }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="{{ asset('images/bed3.svg') }}" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $property->number_of_bath }} Baths</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="d-flex">
                                                <img src="{{ asset('images/bed4.svg') }}" class="img-fluid">
                                                <p class="bed my-1 ms-1">{{ $property->square_feet }} sqft</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-8 col-lg-8 col-sm-8 col-9">
                                            <div class="card p-1">
                                                <p class="mb-0 text-start">{{ $property->status }}</p>
                                                <p class="text-start mb-0"><b>${{ $property->price }}</b><span
                                                        class="small-text">/month</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-3">
                                            <a href="{{ route('insideListing', $property->id) }}"><img
                                                    src="{{ asset('images/whitearrow.svg') }}" class="img-fluid"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

</section>


<section>
    <div class="mt-5 mb-5">
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
                        <p class="mt-5 mx-lg-5 dream-house pt-5 text-center">Let’s Find Your Dream House with Monarch
                            International !</p>
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
            <div class="col-lg-4 blogg">
                <a href="insideblog.html">
                    <div class="card blog-card shadow border-0 rounded-4">
                        <img src="{{ asset('/images/blog1.svg') }}" class="img-fluid">
                        <p class="invest p-3 mb-0">Investment on Property, Profitable or Detrimental?</p>
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
                        <img src="{{ asset('/images/blog2.svg') }}" class="img-fluid">
                        <p class="invest p-3 mb-0">5 Tips on Choosing Comfortable Housing for Families</p>
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
                        <img src="{{ asset('/images/blog3.svg') }}" class="img-fluid">
                        <p class="invest p-3 mb-0">5 Most Comfortable Areas for Living Space in London</p>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        var priceSlider = $("#priceSlider").slider({
            range: true,
            min: 0,
            max: 1000,
            step: 10,
            values: [200, 800],
            slide: function(event, ui) {
                $("#minPrice").val(ui.values[0]);
                $("#maxPrice").val(ui.values[1]);
            }
        });
        $("#minPrice").val(priceSlider.slider("values", 0));
        $("#maxPrice").val(priceSlider.slider("values", 1));
    });
</script>
<script>
    $(document).ready(function() {
        // Filter based on category
        $('.category-link').on('click', function() {
            var selectedCategoryId = $(this).data('category');
            filterProperties(selectedCategoryId);
        });

        // Filter based on status
        $('.status-link').on('click', function() {
            var selectedStatus = $(this).data('status');
            filterPropertiesByStatus(selectedStatus);
        });

        // Filter based on bedroom
        $('.bedroom-link').on('click', function() {
            var selectedBedroom = $(this).data('bedroom');
            filterPropertiesByBedroom(selectedBedroom);
        });

        function filterProperties(selectedCategoryId) {
            // Show or hide property cards based on the selected category
            $('.property-card').each(function() {
                var propertyCategory = $(this).data('category');
                if (selectedCategoryId === propertyCategory) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        function filterPropertiesByStatus(selectedStatus) {
            // Show or hide property cards based on the selected status
            $('.property-card').each(function() {
                var propertyStatus = $(this).data('status');
                if (selectedStatus === propertyStatus) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        function filterPropertiesByBedroom(selectedBedroom) {
            // Show or hide property cards based on the selected number of bedrooms
            $('.property-card').each(function() {
                var propertyBedrooms = $(this).data('bedroom');
                if (selectedBedroom === propertyBedrooms || (selectedBedroom === '5-more' &&
                        propertyBedrooms > 4)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
</script>



@endsection
