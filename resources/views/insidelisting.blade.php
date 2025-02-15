<style>
    .pdf {
        text-decoration: none;
        color: black;
    }

    .propertyVideo {
        width: 47rem;
    }

    .sharebody {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 13px;
    }

    .spdl {
        cursor: pointer;
    }

    .featured {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: contain;
        height: 100vh;
        background-image: url('{{ asset('/images/featured.svg') }}');

    }

    .SPBtns {
        cursor: pointer;
        transition: all .2s ease;
    }

    .SPBtns:hover {
        background-color: #e4b850;
    }
</style>
@extends('layouts.app')
@section('content')
@section('title', 'Property Inside Listing')
<section>

    <div class="duplicated-content-container">
        <div class="container mt-5">


            <img src="{{ asset('Image/product/' . $insideListing->image) }}" class="img-fluid w-100">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('/images/listing2.svg') }}" class="img-fluid mt-3">
                </div>
                <div class="col-2">
                    <img src="{{ asset('/images/listing3.svg') }}" class="img-fluid mt-3">
                </div>
                <div class="col-2">
                    <img src="{{ asset('/images/listing4.svg') }}" class="img-fluid mt-3">
                </div>
                <div class="col-2">
                    <img src="{{ asset('/images/listing5.svg') }}" class="img-fluid mt-3">
                </div>
                <div class="col-2">
                    <img src="{{ asset('/images/listing6.svg') }}" class="img-fluid mt-3">
                </div>
                <div class="col-2">
                    <img src="{{ asset('/images/listing7.svg') }}" class="img-fluid mt-3">
                </div>
            </div>


            <p class="gray-color mb-0 mt-4 text-end sub-cat">Home / Listing / House /<span style="color: black;"><b>
                        {{ $insideListing->name }}</b></span> </p>


            <div class="row">
                <div class="col-5 col-sm-7 col-md-8 col-lg-10 col-xl-10">
                    <p class="interested mb-0">{{ $insideListing->name }}</p>



                </div>
                <div class="col-7 col-sm-5 col-md-4 col-lg-2 col-xl-2 mb-0 mt-4">

                    <div class="d-flex mb-0">

                        <!-- Button trigger modal -->

                        {{-- <a href="#" id="share-button"> --}}


                        <img src="{{ asset('/images/Share.svg') }}" class="img-fluid me-2 SPBtns"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">

                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Share Monarch on social
                                            media
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body sharebody">
                                        <!-- Facebook -->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://property.pixelcare.agency/public/insidelisting/{{ $insideListing->id }}"
                                            target="_blank">
                                            <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>
                                        </a>


                                        {{-- Twitter --}}
                                        <a href="https://twitter.com/intent/tweet?url=https://property.pixelcare.agency/public/insidelisting/{{ $insideListing->id }}"
                                            target="_blank">
                                            <i class="fab fa-twitter fa-2x" style="color: #55acee;"></i>
                                        </a>

                                        <!-- Instagram -->
                                        <a href="https://www.instagram.com/share?url=https://property.pixelcare.agency/public/insidelisting/{{ $insideListing->id }}"
                                            target="_blank">
                                            <i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i>
                                        </a>


                                        <!-- Linkedin -->
                                        <a href="https://www.linkedin.com/shareArticle?url=https://property.pixelcare.agency/public/insidelisting/{{ $insideListing->id }}"
                                            target="_blank">
                                            <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i>
                                        </a>


                                        <!-- Whatsapp -->
                                        <a href="whatsapp://send?text=Check out Monarch property: https://property.pixelcare.agency/public/insidelisting/{{ $insideListing->id }}"
                                            target="_blank">
                                            <i class="fab fa-whatsapp fa-2x" style="color: #25d366;"></i>
                                        </a>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </a> --}}

                        {{-- <a href=""> --}}
                        <img value="Print" onclick="handlePrint()" src="{{ asset('/images/Print.svg') }}"
                            class="img-fluid me-2 SPBtns">
                        {{-- </a> --}}

                    </div>


                </div>

            </div>


            <div class="row">

                <div class="col-6 col-md-9 col-sm-6 col-lg-9 col-xl-9">

                    <p class="gray-color my-2 ms-1 sub-cat">{{ $insideListing->address }}</p>

                    <div class=" mt-3">

                        <div class="row">

                            <div class="col-4 col-md-2 col-sm-4 col-lg-2 col-xl-2">


                                <div class="d-flex">
                                    <img src="{{ asset('/images/green1.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">{{ $insideListing->number_of_bed }} Beds</p>
                                </div>

                            </div>

                            <div class="col-4 col-md-2 col-sm-4 col-lg-2 col-xl-2">


                                <div class="d-flex">
                                    <img src="{{ asset('/images/green3.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">{{ $insideListing->number_of_bath }} Baths</p>
                                </div>

                            </div>

                            <div class="col-4 col-md-2 col-sm-4 col-lg-2 col-xl-2">


                                <div class="d-flex">
                                    <img src="{{ asset('/images/green2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">{{ $insideListing->garadge }}</p>
                                </div>

                            </div>




                        </div>

                    </div>


                </div>
                <div class="col-6 col-md-3 col-sm-6 col-lg-3 col-xl-3 text-end">
                    <p class="my-price mb-0">${{ $insideListing->price }}</p>

                    <p class="sqft">{{ $insideListing->square_feet }} sqft</p>

                </div>

            </div>

            <div class="row mt-4">

                <div class="col-8">

                    <div class="card rounded-4 mt-2 p-4 shadow-sm border-0">
                        <div class="ms-4 me-4">

                            <p class="mt-3 desc">Description</p>
                            <p class="mt-3 sub-cat">

                                <span
                                    class="partial-description">{{ substr($insideListing->description, 0, 100) }}</span>
                                <span class="full-description"
                                    style="display: none;">{{ $insideListing->description }}</span>

                            </p>

                            @if (strlen($insideListing->description) > 100)
                                <p class="read-more sub-cat">Read More</p>
                            @endif

                            <p class="mt-5 desc">Documents</p>

                            <div class="row mb-5">

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                                    <div class="d-flex">

                                        <img src="{{ asset('/images/pdfimage.svg') }}" class="img-fluid me-3">
                                        <p class="me-3 my-1 sub-cat">propertydetails.pdf</p>
                                        <p class="downimage my-1">
                                            @if ($insideListing->property_details_pdf)
                                                <a class="pdf"
                                                    href="{{ route('pdf.download', ['filename' => $insideListing->property_details_pdf]) }}"
                                                    class="text-blue-500">Download </a>
                                            @else
                                                <a href="">Not Pdf Available</a>
                                            @endif
                                        </p>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                                    <div class="d-flex">

                                        <img src="{{ asset('/images/pdfimage.svg') }}" class="img-fluid me-3">
                                        <p class="me-3 my-1 sub-cat">floorplandetails.pdf</p>
                                        <p class="downimage my-1">
                                            @if ($insideListing->floor_plan_details_pdf)
                                                <a class="pdf"
                                                    href="{{ route('pdf.download', ['filename' => $insideListing->floor_plan_details_pdf]) }}"
                                                    class="text-blue-500">Download </a>
                                            @else
                                                <a href="">Not Pdf Available</a>
                                            @endif
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        {{-- <img src="{{ asset('/images/mymap.svg') }}" class="img-fluid mt-5 mb-5"> --}}
                        <div class="map-location d-flex justify-content-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.256882266985!2d73.11318133435114!3d33.56098946100269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfece2410eb449%3A0x3d828c0b5b3b7da8!2sPhase%202%20Bahria%20Town%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696844915449!5m2!1sen!2s"
                                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="ms-4 mt-4 desc">Location Details</p>

                        <div
                            class="row mt-4 ms-md-3 ms-sm-3 ms-lg-3 ms-xl-3 ms-1 me-md-3 me-sm-3 me-lg-3 me-xl-3 me-1">

                            <div class="col-12 col-md-5 col-sm-12 col-lg-5 col-xl-5">

                                <div class="row">

                                    <div class="col-6">
                                        <p class="school sub-cat">Address:</p>
                                        <p class="school sub-cat">State/Country:</p>
                                        <p class="school sub-cat">City:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="sub-cat">{{ $insideListing->address }}</p>
                                        <p class="sub-cat">{{ $insideListing->state_country }}</p>
                                        <p class="sub-cat">{{ $insideListing->city }}</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-2"></div>
                            <div class="col-12 col-md-5 col-sm-12 col-lg-5 col-xl-5">

                                <div class="row">

                                    <div class="col-6">
                                        <p class="school sub-cat">Zip:</p>
                                        <p class="school sub-cat">Area:</p>
                                        <p class="school sub-cat">Country:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="sub-cat">{{ $insideListing->zip }}</p>
                                        <p class="sub-cat">{{ $insideListing->area }}</p>
                                        <p class="sub-cat">{{ $insideListing->country }}</p>
                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <p class="mt-5 ms-4 desc">Property Details</p>
                        <div
                            class="row mt-4 ms-md-3 ms-sm-3 ms-lg-3 ms-xl-3 ms-1 me-md-3 me-sm-3 me-lg-3 me-xl-3 me-1">

                            <div class="col-12 col-md-5 col-sm-12 col-lg-5 col-xl-5">

                                <div class="row">

                                    <div class="col-6">
                                        <p class="school sub-cat">Property ID:</p>
                                        <p class="school sub-cat">Price:</p>
                                        <p class="school sub-cat">Property Size:</p>
                                        <p class="school sub-cat">Year Built:</p>
                                        <p class="school sub-cat">Bedrooms:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="sub-cat">{{ $insideListing->property_id }}</p>
                                        <p class="sub-cat">${{ $insideListing->price }}</p>
                                        <p class="sub-cat">{{ $insideListing->square_feet }} sqft</p>
                                        <p class="sub-cat">{{ $insideListing->year_build }}</p>
                                        <p class="sub-cat">{{ $insideListing->number_of_bed }}</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-2"></div>
                            <div class="col-12 col-md-5 col-sm-12 col-lg-5 col-xl-5">

                                <div class="row">

                                    <div class="col-6">
                                        <p class="school sub-cat">Bathrooms:</p>
                                        <p class="school sub-cat">Garage:</p>
                                        <p class="school sub-cat">Garage Size:</p>
                                        <p class="school sub-cat">Property Size:</p>
                                        <p class="school sub-cat">Status:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="sub-cat">{{ $insideListing->number_of_bath }}</p>
                                        <p class="sub-cat">{{ $insideListing->garadge }}</p>
                                        <p class="sub-cat">{{ $insideListing->square_feet }} sqft</p>
                                        <p class="sub-cat">{{ $insideListing->property_size }}</p>
                                        <p class="sub-cat">{{ $insideListing->status }}</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <p class="mt-5 ms-4 desc">Property Features</p>
                        <div class="row mt-5 mb-5">

                            <div class="col-5">

                                @if ($insideListing->air_conditioning)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature1.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Air Conditioning</p>

                                    </div>
                                @endif

                                @if ($insideListing->heater)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature2.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Heater</p>

                                    </div>
                                @endif

                                @if ($insideListing->lawn)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature3.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Lawn</p>

                                    </div>
                                @endif

                            </div>
                            <div class="col-2"></div>
                            <div class="col-5">

                                @if ($insideListing->lawndry_room)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature4.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Lawndry Room</p>

                                    </div>
                                @endif

                                @if ($insideListing->swimming_pool)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature5.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Swimming Pool</p>

                                    </div>
                                @endif

                                @if ($insideListing->dining_room)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature6.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Dining Room</p>

                                    </div>
                                @endif

                            </div>

                        </div>

                    </div>


                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <p class="mt-5 ms-4 desc">Floor Plans</p>
                        <div class="mb-5 me-3 ms-3">
                            <div class="d-flex ms-5">
                                <p class="me-auto">First Floor</p>

                                <div class="">
                                    <img src="{{ asset('images/downarrow.svg') }}"
                                        class="img-fluid downarrow cursor-pointer">
                                    <img src="{{ asset('images/uparrow.svg') }}"
                                        class="img-fluid uparrow cursor-pointer" style="display: none;">

                                </div>



                            </div>

                            <hr class="me-3 ms-5">

                            <div class="showimage" style="display: none;">
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                        <img src="{{ asset('/images/floor2.svg') }}" class="img-fluid mt-5">
                                    </div>
                                    <div class="col-1"></div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <p class="mt-5 ms-4 desc">Property Video</p>
                        <div
                            class=" mt-3 mb-5 ms-md-3 ms-sm-3 ms-lg-3 ms-xl-3 ms-1 me-md-3 me-sm-3 me-lg-3 me-xl-3 me-1">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <p class="border-bottom border-secondary border-3 d-inline p-2 sub-cat">Property
                                        Video
                                    </p>
                                </div>
                                <div
                                    class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-sm-2 mt-md-2 mt-lg-0 mt-xl-0 mt-3">
                                    <p class="gray-color sub-cat">360째 Virtual Video</p>
                                </div>
                            </div>

                            <video controls class="propertyVideo mt-4 img-fluid rounded">
                                <source class="img-fluid mt-4"
                                    src="{{ asset('Video/propertyVideos/' . $insideListing->property_video) }}"
                                    type='video/mp4'>
                            </video>
                        </div>

                    </div>

                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <p class="mt-5 ms-4 desc">Walkscore</p>
                        <p class="walkscore ms-4">1010 Greenland Avenue</p>

                        <div
                            class="mt-4 mb-5 ms-md-3 ms-sm-3 ms-lg-3 ms-xl-3 ms-1 me-md-3 me-sm-3 me-lg-3 me-xl-3 me-1">

                            <div class="d-flex">

                                <img src="{{ asset('/images/walkscore4.svg') }}" class="img-fluid me-4">
                                <div class="d-flex flex-column">
                                    <p class="mb-0 my-2 ">Walk Score</p>
                                    <p class="walk">46/100 <span class="walk1">(somewhat walkable)</span></p>
                                </div>

                            </div>

                            <div class="d-flex mt-2">

                                <img src="{{ asset('/images/walkscore5.svg') }}" class="img-fluid me-4">
                                <div class="d-flex flex-column">
                                    <p class="mb-0 my-2 ">Transit Score</p>
                                    <p class="walk">46/100 <span class="walk1">(some transit)</span></p>
                                </div>

                            </div>

                            <div class="d-flex mt-2">

                                <img src="{{ asset('/images/walkscore6.svg') }}" class="img-fluid me-4">
                                <div class="d-flex flex-column">
                                    <p class="mb-0 my-2 ">Bike Score</p>
                                    <p class="walk">46/100 <span class="walk1">(somewhat bikeable)</span></p>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <p class="mt-5 ms-3 desc">What's Nearby</p>
                        <div class="mb-5 ms-md-3 ms-sm-3 ms-lg-3 ms-xl-3 ms-1 me-md-3 me-sm-3 me-lg-3 me-xl-3 me-1">

                            <p class="fw-bold mt-3">Education</p>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex">

                                            <img src="{{ asset('/images/listedu1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 school sub-cat">St. Mary Elementary School</p>
                                        </div>
                                        <p class="ms-5 sub-cat">1.4 miles</p>



                                    </div>

                                </div>
                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                    <p class="sub-cat">1,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/listedu1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 my-2 school sub-cat">Burtenby Education Center</p>
                                        </div>
                                        <p class="ms-5 sub-cat">1.4 miles</p>


                                    </div>

                                </div>
                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p class="sub-cat">1,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/listedu1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 my-2 school sub-cat">Jungle Bugs Playgroup</p>
                                        </div>
                                        <p class="ms-5 sub-cat">1.4 miles</p>
                                    </div>

                                </div>


                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p class="sub-cat">1,645 reviews</p>


                                </div>

                            </div>



                        </div>

                        <div class="mb-5 me-3 ms-3">

                            <p class="fw-bold mt-3">Store</p>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex">

                                            <img src="{{ asset('/images/liststore1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 school sub-cat">Grocery Store</p>
                                        </div>
                                        <p class="ms-5 sub-cat">0.7 miles</p>



                                    </div>

                                </div>
                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('images/Rating1.svg') }}" class="img-fluid">
                                    <p class="sub-cat">2,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/liststore1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 my-2 school sub-cat">Fashion Store</p>
                                        </div>
                                        <p class="ms-5 sub-cat">1.4 miles</p>


                                    </div>

                                </div>
                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p class="sub-cat">3,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/liststore1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 my-2 school sub-cat">City Mall</p>
                                        </div>
                                        <p class="ms-5 sub-cat">1.4 miles</p>
                                    </div>

                                </div>


                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p class="sub-cat">1,745 reviews</p>


                                </div>

                            </div>



                        </div>

                        <div class="mb-5 me-3 ms-3">

                            <p class="fw-bold mt-3">Health & Medical</p>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex">

                                            <img src="{{ asset('/images/listhealth1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 school sub-cat">St. Joseph Hospital</p>
                                        </div>
                                        <p class="ms-5 sub-cat">3.7 miles</p>



                                    </div>

                                </div>
                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                    <p class="sub-cat">4,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/listhealth1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 my-2 school sub-cat">Dentist Clinic</p>
                                        </div>
                                        <p class="ms-5 sub-cat">0.4 miles</p>


                                    </div>

                                </div>
                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p class="sub-cat">2,115 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/listhealth1.svg') }}" class="img-fluid me-4">
                                            <p class="mb-0 my-2 school sub-cat">City Drug Store</p>
                                        </div>
                                        <p class="ms-5 sub-cat">4.4 miles</p>
                                    </div>

                                </div>


                                <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p class="sub-cat">2,345 reviews</p>


                                </div>

                            </div>



                        </div>


                    </div>

                    <div class="card p-4 mt-3 rounded-4 border-0 shadow-sm">

                        <div class="ms-md-4 ms-sm-4 ms-lg-4 ms-xl-4 ms-1 me-md-4 me-sm-4 me-lg-4 me-xl-4 me-1">

                            <p class="mt-5 desc">Reviewes</p>

                            <div class="card rounded-4 p-3">

                                <div class="row mt-2">
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                                        <div class="d-flex">

                                            <img src="{{ asset('/images/harper.svg') }}" class="img-fluid me-3">

                                            <div class="d-flex flex-column">

                                                <p class="my-2 mb-0 ms-2 fw-bold sub-cat">Diane Harper</p>
                                                <div class="d-flex">

                                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                                    <p class="my-1 sub-cat">February 12, 2023</p>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                    </div>
                                </div>

                                <p class="mt-3 sub-cat">I have lived in this house for five years, but due to work
                                    reasons,
                                    I had to leave. However, I feel comfortable living here because of the friendly
                                    environment.</p>
                                <div class="row">

                                    <div class="col-6 col-md-3 col-sm-6 col-lg-3 col-xl-3">
                                        <div class="d-flex">
                                            <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                            <p class="my-1 sub-cat">11 Likes</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 col-sm-6 col-lg-3 col-xl-3">
                                        <div class="d-flex">
                                            <img src="{{ asset('/images/dislike1.svg') }}" class="img-fluid me-2">
                                            <p class="my-1 sub-cat">0 dislike</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="card rounded-4 p-3 mt-2">

                                <div class="row mt-2">
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                                        <div class="d-flex">

                                            <img src="{{ asset('/images/harper.svg') }}" class="img-fluid me-3">

                                            <div class="d-flex flex-column">

                                                <p class="my-2 mb-0 ms-2 fw-bold sub-cat">Ernest Phill</p>
                                                <div class="d-flex">

                                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                                    <p class="my-1 sub-cat">February 12, 2023</p>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                    </div>
                                </div>

                                <p class="mt-3 sub-cat">The environment around this house is perfect for families with
                                    small children because it is close to various educational and health facilities.</p>
                                <div class="row">

                                    <div class="col-6 col-md-3 col-sm-6 col-lg-3 col-xl-3">
                                        <div class="d-flex">
                                            <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                            <p class="my-1 sub-cat">11 Likes</p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 col-sm-6 col-lg-3 col-xl-3">
                                        <div class="d-flex">
                                            <img src="{{ asset('/images/dislike1.svg') }}" class="img-fluid me-2">
                                            <p class="my-1 sub-cat">0 dislike</p>
                                        </div>
                                    </div>

                                </div>

                            </div>



                            <button class="btn my-green white-text mt-5 px-5 sub-cat">More Reviews</button>


                        </div>

                    </div>




                </div>
                <div class="col-4">


                    <div class="card mt-2 p-1 p-md-3 p-xl-3 p-lg-3 border-0 shadow pt-3">
                        <p class="text-center mb-0 sub-cat">Schedule a Visit
                        </p>
                        <p class="text-center info">For More Information</p>

                        <form action="{{ route('form.submit') }}" method="POST">
                            @csrf
                            <label class="sub-cat">Date</label>
                            <div class="input-group" id="datepicker">
                                <input type="text" name="date" class="form-control">
                            </div>

                            <label class="sub-cat">Time</label>
                            <input type="text" name="time" class="form-control">

                            <p class="text-center mt-3 f-600 sub-cat">Your Information</p>

                            <label class="sub-cat">Name</label>
                            <input type="text" name="name" class="form-control">

                            <label class="sub-cat">Phone</label>
                            <input type="text" name="phone" class="form-control">

                            <label class="sub-cat">Email</label>
                            <input type="text" name="email" class="form-control">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                                    <textarea name="message" cols="10" rows="10"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('description') is-invalid @enderror"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            @if (session('success'))
                                <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            @if (session('Error'))
                                <p class="alert alert-danger">{{ session('Error') }}</p>
                            @endif
                            <button type="submit" class="btn my-green white-text mt-2 sub-cat">Submit a tour
                                request</button>

                    </div>
                    </form>

                    <a href="{{ route('pdf.download', ['filename' => $insideListing->company_profile_pdf]) }}">
                        <img src="{{ asset('/images/Rectanglecard.svg') }}" class="img-fluid">
                        <img src="{{ asset('/images/down.svg') }}" class="img-fluid">
                    </a>

                    <img src="{{ asset('/images/video.svg') }}" class="img-fluid mt-4">



                </div>

            </div>





        </div>

</section>


<section>
    <div class="mt-5">
        <p class="partner mb-5 text-center">Our Collaborative Partner</p>
        <div class="" style="background-color: rgb(250,250 ,250 );">
            <div class="container">
                <img src="{{ asset('/images/partner.svg') }}" class="img-fluid">
            </div>
        </div>

    </div>
</section>


<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="featured mt-5 pt-5">
                    <p class="feature mt-5 pt-5">Explore the Featured
                        Properties</p>
                </div>
            </div>
        </div>

        <div class="row featureslide">
            <div class="col-md-3 col-sm-3 col-lg-3 mt-5 pt-5">

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-md-3 col-sm-3 col-lg-3 mt-5 pt-5">

                        <img src="{{ asset('/images/left.svg') }}" class="img-fluid" onclick="prevvSlide()"
                            style="cursor: pointer;">
                    </div>
                    <div class="col-md-3 col-sm-3 col-lg-3 mt-5 pt-5">
                        <img src="{{ asset('/images/right.svg') }}" class="img-fluid" class="img-fluid"
                            onclick="nexttSlide()" style="cursor: pointer;">
                    </div>
                </div>

            </div>
            <div class="col-md-9 col-sm-9 col-lg-9">
                <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner p-1">

                        <div class="carousel-item active">

                            <div class="row justify-content-around">
                                @foreach ($firstThreeHomeProducts as $firstThreeHomeProduct)
                                    <div class="col-lg-4">
                                        <div class="card p-2 shadow-sm border-0 rounded-3">
                                            <a href="{{ route('insideListing', $firstThreeHomeProduct) }}">
                                                <img src="{{ asset('Image/product/' . $firstThreeHomeProduct->image) }}"
                                                    class="img-fluid">
                                            </a>
                                            <div class="card-body">
                                                <p class="text-start beach mb-0">
                                                    {{ $firstThreeHomeProduct->name }}</p>

                                                <div class="d-flex mt-0">
                                                    <img src="{{ asset('/images/clip.svg') }}" class="img-fluid">
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
                                            <a href="{{ route('insideListing', $nextThreeHomeProduct) }}">
                                                <img src="{{ asset('Image/product/' . $nextThreeHomeProduct->image) }}"
                                                    class="img-fluid">
                                            </a>
                                            <div class="card-body">
                                                <p class="text-start beach mb-0">
                                                    {{ $nextThreeHomeProduct->name }}</p>

                                                <div class="d-flex mt-0">
                                                    <img src="{{ asset('/images/clip.svg') }}" class="img-fluid">
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

<section class="blogs mt-5 pb-5">

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
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function() {
        $(".read-more").click(function() {
            var partialDescription = $(this).siblings(".sub-cat").find(".partial-description");
            var fullDescription = $(this).siblings(".sub-cat").find(".full-description");

            if (partialDescription.is(":visible")) {
                partialDescription.hide();
                fullDescription.show();
                $(this).text("Read Less");
            } else {
                fullDescription.hide();
                partialDescription.show();
                $(this).text("Read More");
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('.downarrow').click(function() {
            $('.showimage').show();
            $(this).hide();
            $('.uparrow').show();
        });

        $('.uparrow').click(function() {
            $('.showimage').hide();
            $(this).hide();
            $('.downarrow').show();
        });
    });
</script>
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
    // Get a reference to the duplicate button and the content container
</script>
<script>
    const duplicateButton = document.getElementById('duplicate-button');
    const duplicatedContentContainer = document.getElementById('duplicated-content-container');

    // Add a click event listener to the duplicate button
    duplicateButton.addEventListener('click', function() {
        // Clone the content of the current page
        const originalPageContent = document.body.cloneNode(true);

        // Clear the duplicated content container
        duplicatedContentContainer.innerHTML = '';

        // Append the cloned content to the duplicated content container
        duplicatedContentContainer.appendChild(originalPageContent);
    });
</script>
<script type="text/javascript">
    const handlePrint = () => {
        var actContents = document.body.innerHTML;
        document.body.innerHTML = actContents;
        window.print();
    }
</script>

@endsection
