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

    .MainImg {
        width: 50vw
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
@section('title', 'Property inside projects')

<section>

    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-10">
                <p class="interested mb-0">{{ $project->name }}</p>



            </div>
            <div class="col-lg-2 mb-0 mt-4">

                <div class="d-flex mb-0">

                    <img src="{{ asset('/images/Share.svg') }}" class="img-fluid me-2 cursor-pointer SPBtns"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">

                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Share Monarch on social media
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body sharebody">
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://property.pixelcare.agency/public/insidelisting/{{ $project->id }}"
                                        target="_blank">
                                        <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>
                                    </a>


                                    {{-- Twitter --}}
                                    <a href="https://twitter.com/intent/tweet?url=https://property.pixelcare.agency/public/insidelisting/{{ $project->id }}"
                                        target="_blank">
                                        <i class="fab fa-twitter fa-2x" style="color: #55acee;"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="https://www.instagram.com/share?url=https://property.pixelcare.agency/public/insidelisting/{{ $project->id }}"
                                        target="_blank">
                                        <i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i>
                                    </a>


                                    <!-- Linkedin -->
                                    <a href="https://www.linkedin.com/shareArticle?url=https://property.pixelcare.agency/public/insidelisting/{{ $project->id }}"
                                        target="_blank">
                                        <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i>
                                    </a>


                                    <!-- Whatsapp -->
                                    <a href="whatsapp://send?text=Check out Monarch property: https://property.pixelcare.agency/public/insidelisting/{{ $project->id }}"
                                        target="_blank">
                                        <i class="fab fa-whatsapp fa-2x" style="color: #25d366;"></i>
                                    </a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img value="Print" onclick="handlePrint()" src="{{ asset('/images/Print.svg') }}"
                        class="img-fluid me-2 SPBtns">


                </div>


            </div>

        </div>

        <div class="row">

            <div class="col-lg-9">
                <div class="d-flex mt-0">
                    <img src="{{ asset('/images/clip.svg') }}" class="img-fluid">
                    <p class="gray-color my-2 ms-1">{{ $project->address }}</p>

                </div>

            </div>
            <div class="col-lg-3 text-end">
                <p class="gray-color mb-0 mt-2">Home / Projects/ <span
                        style="color: black;"><b>{{ $project->name }}</b></span>
                </p>


            </div>

        </div>

        <div class="row mt-4">

            <div class="col-lg-8">
                <img src="{{ asset('/Image/project/' . $project->image) }}" class="MainImg img-fluid">

                <div class="card rounded p-3 mt-3">

                    <div class="row ms-4">

                        <div class="col-3">

                            <p>Bedrooms</p>
                            <div class="d-flex">
                                <img src="{{ asset('/images/bed1.svg') }}" class="img-fluid me-1">
                                <p class="my-1">{{ $project->number_of_bed }} Beds</p>
                            </div>

                        </div>

                        <div class="col-3">

                            <p>Bathrooms</p>
                            <div class="d-flex">
                                <img src="{{ asset('/images/bed3.svg') }}" class="img-fluid me-1">
                                <p class="my-1">{{ $project->number_of_bath }} Baths</p>
                            </div>

                        </div>

                        <div class="col-3">

                            <p>Garage</p>
                            <div class="d-flex">
                                <img src="{{ asset('/images/bed2.svg') }}" class="img-fluid me-1">
                                <p class="my-1">{{ $project->garage }} Garage</p>
                            </div>

                        </div>


                        <div class="col-3">

                            <p>Garage Size</p>
                            <div class="d-flex">
                                <img src="{{ asset('/images/bed4.svg') }}" class="img-fluid me-1">
                                <p class="my-1">{{ $project->garage_size }} sqft</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="card rounded mt-5 p-4">
                    <div class="ms-4 me-4">

                        <p class="mt-3 desc">Description</p>
                        <p class="mt-3 sub-cat">

                            <span class="partial-description">{{ substr($project->description, 0, 100) }}</span>
                            <span class="full-description" style="display: none;">{{ $project->description }}</span>


                        </p>

                        @if (strlen($project->description) > 100)
                            <p class="read-more sub-cat">Read More</p>
                        @endif

                        <p class="mt-5 desc">Documents</p>

                        <div class="row mb-5">

                            <div class="col-lg-6">

                                <div class="d-flex">

                                    <img src="{{ asset('/images/pdfimage.svg') }}" class="img-fluid me-3">
                                    <p class="me-3 my-1">propertydetails.pdf</p>

                                    <p class="downimage my-1">
                                        @if ($project->property_details_pdf)
                                            <a class="pdf"
                                                href="{{ route('pdf.download', ['filename' => $project->property_details_pdf]) }}"
                                                class="text-blue-500">Download </a>
                                        @else
                                            <a href="">Not Pdf Available</a>
                                        @endif
                                    </p>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="d-flex">

                                    <img src="{{ asset('/images/pdfimage.svg') }}" class="img-fluid me-3">
                                    <p class="me-3 my-1">floorplandetails.pdf</p>
                                    <p class="downimage my-1">
                                        @if ($project->floor_plan_details_pdf)
                                            <a class="pdf"
                                                href="{{ route('pdf.download', ['filename' => $project->floor_plan_details_pdf]) }}"
                                                class="text-blue-500">Download </a>
                                        @endif
                                    </p>

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
                                        <p class="">{{ $project->address }}</p>
                                        <p class="">{{ $project->state_country }}</p>
                                        <p class="">{{ $project->city }}</p>
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
                                        <p class="">{{ $project->zip }}</p>
                                        <p class="">{{ $project->area }}</p>
                                        <p class="">{{ $project->country }}</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- <img src="{{ asset('/images/mymap.svg') }}" class="img-fluid mt-5 mb-5"> --}}
                        <div class="map-location d-flex justify-content-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.256882266985!2d73.11318133435114!3d33.56098946100269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfece2410eb449%3A0x3d828c0b5b3b7da8!2sPhase%202%20Bahria%20Town%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696844915449!5m2!1sen!2s"
                                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                        <p class="">RH{{ $project->property_id }}</p>
                                        <p class="">${{ $project->price }}</p>
                                        <p class="">{{ $project->property_size }} sqft</p>
                                        <p class="">{{ $project->year_built }}</p>
                                        <p class="">{{ $project->number_of_bed }}</p>
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
                                        <p class="">{{ $project->number_of_bath }}</p>
                                        <p class="">{{ $project->garage }}</p>
                                        <p class="">{{ $project->garage_size }} sqft</p>
                                        <p class="">{{ $project->property_size }}</p>
                                        <p class="">{{ $project->status }}</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <hr>

                        <p class="mt-5 desc">Property Features</p>
                        <div class="row mt-5 mb-5">

                            <div class="col-5">

                                @if ($project->air_conditioning)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature1.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Air Conditioning</p>

                                    </div>
                                @endif

                                @if ($project->heater)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature2.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Heater</p>

                                    </div>
                                @endif

                                @if ($project->lawn)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature3.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Lawn</p>

                                    </div>
                                @endif

                            </div>
                            <div class="col-2"></div>
                            <div class="col-5">

                                @if ($project->lawndry_room)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature4.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Lawndry Room</p>

                                    </div>
                                @endif

                                @if ($project->swimming_pool)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature5.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Swimming Pool</p>

                                    </div>
                                @endif

                                @if ($project->dining_room)
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/feature6.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">Dining Room</p>

                                    </div>
                                @endif

                            </div>

                        </div>

                        <hr>

                        <p class="mt-5 desc">Floor Plans</p>
                        <div class="mb-5">
                            <div class="d-flex ms-5">
                                <p class="me-auto">First Floor</p>
                                <div class="">
                                    <img src="{{ asset('/images/downarrow.svg') }}" class="img-fluid downarrow">
                                    <img src="{{ asset('/images/uparrow.svg') }}" class="img-fluid uparrow"
                                        style="display: none;">

                                </div>

                            </div>

                            <div class="showimage" style="display: none;">

                                <img src="{{ asset('Image/project/floorplan/' . $project->floor_plan_img) }}"
                                    class="img-fluid">

                            </div>
                        </div>
                        <hr>

                        <p class="mt-5 desc">Property Video</p>
                        <div class="mb-5">
                            <div class="d-flex">
                                <button class="btn btn-light me-3 ">Play Video</button>
                                <button class="btn btn-secondary">360째 Virtual Video</button>
                            </div>
                            <video controls class="propertyVideo mt-4 img-fluid">
                                <source class="img-fluid mt-4"
                                    src="{{ asset('Video/propertyVideos/' . $project->property_video) }}"
                                    type='video/mp4'>
                            </video>
                        </div>

                        <hr>

                        <p class="mt-5 desc">Walkscore</p>
                        <p class="walkscore">1010 Greenland Avenue</p>

                        <div class="mt-4 mb-5">

                            <div class="d-flex">

                                <img src="{{ asset('/images/walkscore1.svg') }}" class="img-fluid me-4">
                                <div class="d-flex flex-column">
                                    <p class="mb-0 my-2 ">Walk Score</p>
                                    <p class="walk">46/100 <span class="walk1">(somewhat walkable)</span></p>
                                </div>

                            </div>

                            <div class="d-flex mt-2">

                                <img src="{{ asset('/images/walkscore2.svg') }}" class="img-fluid me-4">
                                <div class="d-flex flex-column">
                                    <p class="mb-0 my-2 ">Transit Score</p>
                                    <p class="walk">46/100 <span class="walk1">(some transit)</span></p>
                                </div>

                            </div>

                            <div class="d-flex mt-2">

                                <img src="{{ asset('/images/walkscore3.svg') }}" class="img-fluid me-4">
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

                                            <img src="{{ asset('/images/edu.svg') }}" class="img-fluid me-4">
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 my-2 ">St. Mary Elementary School</p>
                                                <p class="">1.4 miles</p>
                                            </div>

                                        </div>



                                    </div>

                                </div>
                                <div class="col-4 mt-4">

                                    <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                    <p>1,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-8">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/edu.svg') }}" class="img-fluid me-4">
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 my-2 ">Burtenby Education Center</p>
                                                <p class="">1.4 miles</p>
                                            </div>

                                        </div>



                                    </div>

                                </div>
                                <div class="col-4 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p>1,645 reviews</p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-8">

                                    <div class="mt-4">

                                        <div class="d-flex mt-2">

                                            <img src="{{ asset('/images/edu.svg') }}" class="img-fluid me-4">
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 my-2 ">Jungle Bugs Playgroup</p>
                                                <p class="">1.4 miles</p>
                                            </div>

                                        </div>



                                    </div>

                                </div>
                                <div class="col-4 mt-4">

                                    <img src="{{ asset('/images/Rating2.svg') }}" class="img-fluid">
                                    <p>1,645 reviews</p>


                                </div>

                            </div>



                        </div>

                        <hr>


                        <p class="mt-5 desc">ROI Calculator</p>
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4">
                                <div class="card p-3 rounded text-center border-0 shadow">
                                    <p class="mb-0">Total Returns</p>
                                    <p id="totalReturns" class="mb-0">$ 00</p>
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
                                    <p id="investment" class="mb-0">$ 00</p>
                                </div>
                            </div>
                            <div class="col-4  offset-md-4">
                                <div class="card p-3 rounded text-center border-0 shadow">
                                    <p class="mb-0">Capital Amount</p>
                                    <p id="capitalAmount" class="mb-0">$ 00</p>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-4 mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="totalAmount" class="form-label">Total Amount</label>
                                        <input type="text" class="form-control" id="totalAmount">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for = "downPayment" class="form-label">Down Payment</label>
                                        <input type="text" class="form-control" id="downPayment">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Property Tax</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Investment Terms
                                            (Year)</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>

                            <button id="calculateButton" class="btn my-green white-text mt-5 px-5">Calculate</button>
                        </div>



                        <hr>


                        <div class="mt-5">

                            <div class="d-flex justify-content-end">

                                <p class="my-1 me-2 gray-color">Sort By</p>
                                <div class="dropdown">
                                    <button class="btn btn-light border-0 dropdown-toggle" type="button"
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

                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="d-flex">

                                        <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                                        <div class="d-flex flex-column">

                                            <p class="my-2 mb-0 ms-2 fw-bold">Diane Harper</p>
                                            <div class="d-flex">

                                                <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                                <p class="my-1">February 12, 2023</p>

                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                </div>
                            </div>

                            <p class="mt-3">I have lived in this house for five years, but due to work reasons, I had
                                to leave. However, I feel comfortable living here because of the friendly environment.
                            </p>
                            <div class="row">

                                <div class="col-3">
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">11 Likes</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/dislike1.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">0 dislike</p>
                                    </div>
                                </div>

                            </div>


                            <div class="row mt-5">
                                <div class="col-10">
                                    <div class="d-flex">

                                        <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                                        <div class="d-flex flex-column">

                                            <p class="my-2 mb-0 ms-2 fw-bold">Ernest Phill</p>
                                            <div class="d-flex">

                                                <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                                <p class="my-1">February 12, 2023</p>

                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <img src="{{ asset('/images/Rating1.svg') }}" class="img-fluid">
                                </div>
                            </div>

                            <p class="mt-3">I have lived in this house for five years, but due to work reasons, I had
                                to leave. However, I feel comfortable living here because of the friendly environment.
                            </p>
                            <div class="row">

                                <div class="col-3">
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">11 Likes</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <img src="{{ asset('/images/dislike1.svg') }}" class="img-fluid me-2">
                                        <p class="my-1">0 dislike</p>
                                    </div>
                                </div>

                            </div>

                            <button class="btn my-green white-text mt-5 px-5">More Reviews</button>


                        </div>

                    </div>

                </div>


            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/images/projimage2.svg') }}" class="img-fluid">
                <div class="card border-0 mt-3">
                    <img src="{{ asset('/images/projimage3.svg') }}" class="img-fluid">

                    <div class="card-img-overlay d-flex align-items-end justify-content-end">
                        <a href="">
                            <button class="btn white-text yellow-color"><img src="{{ asset('/images/update1.svg') }}"
                                    class="img-fluid me-1">Construction Updates</button>
                        </a>
                    </div>
                </div>

                <div class="card rounded p-3 mt-3">

                    <div class="row gx-0">

                        <div class="col-3">
                            <img src="{{ asset('/images/tag.svg') }}" class="img-fluid">

                        </div>
                        <div class="col-6">
                            <p class="mb-0">{{ $project->status }}</p>
                            <p class="mb-0 my-price">${{ $project->price }}</p>
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('/images/whitearrow.svg') }}" class="img-fluid">

                        </div>

                    </div>



                </div>


                <div class="d-flex pt-4 justify-content-center align-item-center">
                    <img class="" style="" src="{{ asset('/Image/agent/' . $project->agent->image) }}"
                        class="img-fluid mt-5">
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <p class="me-3">Presented By </p>
                    <a target="__blank" href="{{ $project->agent->facebook }}"><img class="img-fluid me-2"
                            src="{{ asset('/images/agentfb.svg') }}" alt=""></a>
                    <a target="__blank" href="{{ 'tel:' . $project->agent->phone_number }}"><img
                            class="img-fluid me-2" src="{{ asset('/images/agenttel.svg') }}" alt=""></a>
                    <a target="__blank" href="{{ $project->agent->linkedin }}"><img class="img-fluid me-2"
                            src="{{ asset('/images/agentin.svg') }}" alt=""></a>
                    <a target="__blank" href="{{ $project->agent->whatsapp }}"><img class="img-fluid"
                            src="{{ asset('/images/agentwapp.svg') }}" alt=""></a>
                </div>
                {{-- <img src="{{ asset('images/alexa.svg') }}" alt=""> --}}
                <p class="f-size32 text-center">{{ $project->agent->name }}</p>

                <img src="{{ asset('/images/Price.svg') }}" class="img-fluid mt-5">



                <form action="{{ route('form.submit') }}" method="post">
                    @csrf
                    <div class="card mt-5 p-3 border-0 shadow-sm">
                        <p class="text-center mb-0">Schedule a Visit
                        </p>
                        <p class="text-center info">For More Information</p>
                        <label>Date</label>
                        <div class="input-group" id="datepicker">
                            <input type="date" name="date" class="form-control">
                        </div>

                        <label>Time</label>
                        <input type="text" name="time" class="form-control">

                        <p class="text-center mt-3 f-600">Your Information</p>

                        <label>Name</label>
                        <input type="text" name="name" class="form-control">

                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">

                        <label>Email</label>
                        <input type="text" name="email" class="form-control">

                        {{-- <input type="text" name="message" class="form-control"> --}}
                        {{-- <textarea class="form-cotrol" name="message" id="" cols="30" rows="10"></textarea> --}}
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
                            <p class="alert alert-success mt-4">{{ session('success') }}</p>
                        @endif
                        @if (session('Error'))
                            <p class="alert alert-danger mt-4">{{ session('Error') }}</p>
                        @endif
                        <button class="btn my-green white-text mt-2">Submit a tour request</button>
                    </div>
                </form>

                <a href="{{ route('pdf.download', ['filename' => $project->company_profile_pdf]) }}">
                    <img src="{{ asset('/images/Rectanglecard.svg') }}" class="img-fluid">
                    <img src="{{ asset('/images/down.svg') }}" class="img-fluid">
                </a>

                <img src="{{ asset('/images/video.svg') }}" class="img-fluid mt-4">
            </div>




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



<section class="blogs pb-5 mt-5">

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


<script>
    // Wrap the JavaScript code in a function
    function setupROI() {
        // Get the input elements and the result elements
        const totalAmountInput = document.getElementById("totalAmount");
        const downPaymentInput = document.getElementById("downPayment");
        const totalReturns = document.getElementById("totalReturns");
        const capitalAmount = document.getElementById("capitalAmount");
        const investment = document.getElementById("investment");
        const calculateButton = document.getElementById("calculateButton");

        // Calculate and update the elements when the "Calculate" button is clicked
        calculateButton.addEventListener("click", function() {
            const totalAmount = parseFloat(totalAmountInput.value) || 0;
            const downPayment = parseFloat(downPaymentInput.value) || 0;

            // Calculate the total returns by subtracting down payment from total amount
            const returns = totalAmount - downPayment;

            // Update the "Total Returns" element
            totalReturns.textContent = `$ ${returns.toFixed(2)}`;

            // Update the "Capital Amount" and "Investment" elements
            capitalAmount.textContent = `$ ${totalAmount.toFixed(2)}`;
            investment.textContent = `$ ${downPayment.toFixed(2)}`;
        });
    }

    // Call the setupROI function when the document is fully loaded
    document.addEventListener("DOMContentLoaded", setupROI);
</script>





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
</script>

<script type="text/javascript">
    const handlePrint = () => {
        var actContents = document.body.innerHTML;
        document.body.innerHTML = actContents;
        window.print();
    }
</script>
@endsection
