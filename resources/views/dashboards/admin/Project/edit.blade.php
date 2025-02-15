<style>
    .property {
        background-color: white;
        border-radius: 24px;
        box-shadow: 0px 0px 28px rgba(0, 0, 0, 0.205);
    }

    .ipdfv {
        display: flex;
        flex-wrap: wrap;
    }

    .wrapper {
        background-color: white;
    }

    .mainCard {
        background-color: whitesmoke;
    }

    .secCard {
        box-shadow: 0px 0px 17px rgba(0, 0, 0, 0.226);
    }

    input .image {
        height: 20rem;
    }

    input::file-selector-button {
        background-color: black;
        font-weight: 600;
        background-position-x: 0%;
        background-size: 200%;
        border: 0;
        border-radius: 8px;
        color: #fff;
        /* margin-top: 12px; */
        margin-bottom: 12px;
        /* padding: 1rem 1.25rem; */
        text-shadow: 0 1px 1px #333;
        transition: all 0.25s;
    }

    .imageDiv {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 2px solid black;
        padding: 15px;
        margin-bottom: 12px;
        border-style: dotted;
    }

    .imageDiv img {
        width: 10rem;
    }

    input::file-selector-button:hover {
        cursor: pointer;
    }

    .imagesDivPDF {

        display: flex;
        flex-wrap: wrap;
    }
</style>
@extends('layouts.adminlayout')
@section('container')
    @include('admin.include.side-bar')
@section('title', 'Update Project')


<div class="wrapper">

    @include('admin.include.side-bar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->


        <div class="mainCard pl-5 pr-5">
            <div class="ml-2"> <a href="{{ route('project.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">

                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('Error') }}</div>
                @endif
                <div class="card-header">
                    <h3 class="text-lg font-sans">Update Projects</h3>
                </div>
                <div class="card-body p-4">

                    <div class="basic-form">

                        <form action="{{ route('project.update', $project->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="imageDiv">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                        <input type="file" name="image"
                                            class="image @error('image') is-invalid @enderror" accept="image/*"
                                            onchange="loadFile(event)">
                                        <img id="output" src="{{ asset('Image/project/' . $project->image) }}"
                                            width="80px" class="mt-1 text-center">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>

                                <label for="project_category_id"
                                    class="block mb-2  text-sm pr-4 ml-2 font-medium text-gray-900 dark:text-white">Project
                                    Categories:</label>
                                <select name="project_category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="project_category_id">
                                    @if ($project->project_category_id === 'Luxury Apartment')
                                        <option value="Luxury Apartment" selected>Luxury Apartment</option>
                                        <option value="Corporate Office">Corporate Office</option>
                                        <option value="Commercial Shops">Commercial Shops</option>
                                        <option value="Food Courts">Food Courts</option>
                                        <option value="Farm Houses">Farm Houses</option>
                                    @elseif ($project->project_category_id === 'Corporate Office')
                                        <option value="Corporate Office" selected>Corporate Office</option>
                                        <option value="Luxury Apartment">Luxury Apartment</option>
                                        <option value="Commercial Shops">Commercial Shops</option>
                                        <option value="Food Courts">Food Courts</option>
                                        <option value="Farm Houses">Farm Houses</option>
                                    @elseif ($project->project_category_id === 'Commercial Shops')
                                        <option value="Commercial Shops" selected>Commercial Shops</option>
                                        <option value="Luxury Apartment">Luxury Apartment</option>
                                        <option value="Corporate Office">Corporate Office</option>
                                        <option value="Food Courts">Food Courts</option>
                                        <option value="Farm Houses">Farm Houses</option>
                                    @elseif ($project->project_category_id === 'Food Courts')
                                        <option value="Food Courts" selected>Food Courts</option>
                                        <option value="Luxury Apartment">Luxury Apartment</option>
                                        <option value="Corporate Office">Corporate Office</option>
                                        <option value="Commercial Shops">Commercial Shops</option>
                                        <option value="Farm Houses">Farm Houses</option>
                                    @else
                                        <option value="Farm Houses" selected>Farm Houses</option>
                                        <option value="Luxury Apartment">Luxury Apartment</option>
                                        <option value="Corporate Office">Corporate Office</option>
                                        <option value="Commercial Shops">Commercial Shops</option>
                                        <option value="Food Courts">Food Courts</option>
                                    @endif
                                </select>

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            type="text" name="name" value="{{ $project->name }}"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                        <textarea placeholder="Address"
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('address') is-invalid @enderror""
                                            name="address" id="" cols="10" rows="5">{{ $project->address }}

                                            </textarea>

                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-4">
                                    <div class="">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time
                                            Period</label>
                                        <input value="{{ $project->time_period }}" type="text" name="time_period"
                                            value="{{ old('time_period') }}"
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('time_period') is-invalid @enderror"
                                            placeholder="Time Period">
                                        @error('time_period')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Downpayment</label>
                                        <input value="{{ $project->downpayment }}" type="text" name="downpayment"
                                            value="{{ old('downpayment') }}"
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('downpayment') is-invalid @enderror"
                                            placeholder="Downpayment">
                                        @error('downpayment')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input value="{{ $project->price }}" type="text" name="price"
                                            value="{{ old('price') }}"
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('price') is-invalid @enderror"
                                            placeholder="Price">
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                            From</label>
                                        <input value="{{ $project->start_from }}" type="text" name="start_from"
                                            value="{{ old('start_from') }}"
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('start_from') is-invalid @enderror"
                                            placeholder="Start From">
                                        @error('start_from')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                                            Time</label>
                                        <input value="{{ $project->end_time }}" type="text" name="end_time"
                                            value="{{ old('end_time') }}"
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('end_time') is-invalid @enderror"
                                            placeholder="Start From">
                                        @error('end_time')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-4">
                                    <div class="">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bedrooms</label>
                                        <input
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            type="number" step="0.01" name="number_of_bed"
                                            value="{{ $project->number_of_bed }}"
                                            class="form-control @error('number_of_bed') is-invalid @enderror"
                                            placeholder="Bedrooms">
                                        @error('number_of_bed')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bathrooms</label>
                                        <input
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            type="number" step="0.01" name="number_of_bath"
                                            value="{{ $project->number_of_bath }}"
                                            class="form-control @error('number_of_bath') is-invalid @enderror"
                                            placeholder="Bathrooms">
                                        @error('number_of_bath')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garage</label>
                                        <input
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            type="text" name="garage" value="{{ $project->garage }}"
                                            class="form-control @error('garage') is-invalid @enderror"
                                            placeholder="Number of Garage">
                                        @error('garage')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garage
                                            Size</label>
                                        <input
                                            class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            type="text" name="garage_size" value="{{ $project->garage_size }}"
                                            class="form-control @error('garage_size') is-invalid @enderror"
                                            placeholder="Garage Size">
                                        @error('garage')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                            <div class="d-flex flex-row mb-3">
                                <h5 class="border p-3 property">Location Details</h5>
                            </div>

                            <div class="d-flex flex-row mb-4">
                                <div class="">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State/Country</label>
                                    <input value="{{ $project->state_country }}" type="text" name="state_country"
                                        value="{{ old('state_country') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('state_country') is-invalid @enderror"
                                        placeholder="State/Country">
                                    @error('state_country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                    <input value="{{ $project->city }}" type="text" name="city"
                                        value="{{ old('city') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('city') is-invalid @enderror"
                                        placeholder="City">
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip</label>
                                    <input value="{{ $project->zip }}" type="text" name="zip"
                                        value="{{ old('Zip') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('Zip') is-invalid @enderror"
                                        placeholder="Zip">
                                    @error('Zip')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area</label>
                                    <input value="{{ $project->area }}" type="text" name="area"
                                        value="{{ old('area') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('area') is-invalid @enderror"
                                        placeholder="Area">
                                    @error('area')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                    <input value="{{ $project->country }}" type="text" name="country"
                                        value="{{ old('country') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('country') is-invalid @enderror"
                                        placeholder="Country">
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="d-flex flex-row mb-3">
                        <h5 class="border p-3 property">Property Details</h5>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div class="">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property
                                ID</label>
                            <input value="{{ $project->property_id }}" type="text" name="property_id"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('property_id') is-invalid @enderror">
                            @error('property_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property
                                Size</label>
                            <input value="{{ $project->property_size }}" type="text" name="property_size"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('property_size') is-invalid @enderror"
                                placeholder="Property Size">
                            @error('property_size')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                            <input value="{{ $project->duration }}" type="text" name="duration"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('duration') is-invalid @enderror"
                                placeholder="Property Size">
                            @error('duration')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year
                                Built</label>
                            <input value="{{ $project->year_built }}" type="text" name="year_built"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('year_built') is-invalid @enderror"
                                placeholder="Year Built">
                            @error('year_built')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select name="status" id="status"
                                class="form-control block w-full text-sm @error('status') is-invalid @enderror">
                                @if ($project->status === 'Rent')
                                    <option value="Rent" selected>For Rent</option>
                                    <option value="Sell">For Sell</option>
                                @else
                                    <option value="Sell" selected>For Sell</option>
                                    <option value="Rent">For Rent</option>
                                @endif
                            </select>
                            @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-3">
                        <h5 class="border p-3 property">Property Features</h5>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="">
                            @if ($project->air_conditioning)
                                <input type="checkbox" id="air_conditioning" name="air_conditioning" value="1"
                                    class="" checked>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="air_conditioning">Air Conditioning</label>
                            @else
                                <input type="checkbox" id="air_conditioning" name="air_conditioning" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="air_conditioning">Air Conditioning</label>
                            @endif
                        </div>

                        <div class="ml-4">
                            @if ($project->heater)
                                <input checked type="checkbox" id="heater" name="heater" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="heater">Heater</label>
                            @else
                                <input type="checkbox" id="heater" name="heater" value="1" class="">
                                <label for="heater">Heater</label>
                            @endif
                        </div>

                        <div class="ml-4">
                            @if ($project->lawndry_room)
                                <input checked type="checkbox" id="lawndry_room" name="lawndry_room" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="lawndry_room">Lawndry Room</label>
                            @else
                                <input type="checkbox" id="lawndry_room" name="lawndry_room" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="lawndry_room">Lawndry Room</label><br>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div class="">
                            @if ($project->lawn)
                                <input checked type="checkbox" id="lawn" name="lawn" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="lawn">Lawn</label>
                            @else
                                <input type="checkbox" id="lawn" name="lawn" value="1" class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="lawn">Lawn</label>
                            @endif
                        </div>


                        <div class="ml-4">
                            @if ($project->swimming_pool)
                                <input checked type="checkbox" id="swimming_pool" name="swimming_pool"
                                    value="1" class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="swimming_pool">Swimming Pool</label>
                            @else
                                <input type="checkbox" id="swimming_pool" name="swimming_pool" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="swimming_pool">Swimming Pool</label>
                            @endif
                        </div>

                        <div class="ml-4">
                            @if ($project->dining_room)
                                <input type="checkbox" id="dining_room" name="dining_room" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="dining_room">Dining Room</label> <br>
                            @else
                                <input checked type="checkbox" id="dining_room" name="dining_room" value="1"
                                    class="">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="dining_room">Dining Room</label> <br>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex imagesDivPDF ipdfv">
                        <div class="imageDiv">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Floor
                                Plan Image</label>
                            <input class="image" type="file" name="floor_plan_img"
                                class=" border form-control @error('floor_plans') is-invalid @enderror"
                                accept="image/*" onchange="loadFile(event)">
                            <img id="output"
                                src="{{ asset('Image/project/floorplan/' . $project->floor_plan_img) }}"
                                width="80px" class="mt-1">
                            @error('floor_plans')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="imageDiv ml-1">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Company Profile PDF</label>
                            <input type="file" name="company_profile_pdf"
                                class="image @error('company_profile_pdf') is-invalid @enderror" accept="image/*"
                                onchange="loadFile(event)">
                            <img id="output" placeholder="PDF" width="80px" class="mt-1">
                            @error('company_profile_pdf')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="imageDiv ml-1">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Floor Plan Details PDF</label>
                            <input type="file" name="floor_plan_details_pdf"
                                class="image @error('floor_plan_details_pdf') is-invalid @enderror" accept="image/*"
                                onchange="loadFile(event)">
                            <img id="output" width="80px" class="mt-1">
                            @error('floor_plan_details_pdf')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="imageDiv ml-1">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Property Details PDF</label>
                            <input type="file" name="property_details_pdf"
                                class="image @error('property_details_pdf') is-invalid @enderror" accept="image/*"
                                onchange="loadFile(event)">
                            <img id="output" width="80px" class="mt-1">
                            @error('property_details_pdf')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="imageDiv ml-1">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Property Video</label>
                            <input type="file" name="property_video"
                                class="image @error('property_video') is-invalid @enderror" accept="video/*"
                                onchange="loadFile(event)">
                            <video id="output"
                                src="{{ asset('Video/propertyVideos/' . $project->property_video) }}" width="80px"
                                class="mt-1"></video>
                            @error('property_video')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" cols="30" rows="10"
                            class="form-control @error('description') is-invalid @enderror">{{ $project->description }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <input type="submit" name="submit" id="submit" value="Update Project" class="btn btn-primary">
            </div>
            </form>
        </div>


    </div>
</div>
<!-- /.card -->


</div>
<!-- /.row -->

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->
@endsection
