<style>
    .property {
        background-color: white;
        border-radius: 24px;
        box-shadow: 0px 0px 28px rgba(0, 0, 0, 0.205);
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
        flex-wrap: wrap;
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
@section('title', 'Add Project')

@include('admin.include.side-bar')

<div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

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


        <div class="mainCard pl-5 pr-5 p-12">
            <div class="ml-2"> <a href="{{ route('project.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">
                <div class="card-header">
                    <h3 class="card-title text-lg font-sans">Create Projects</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('Error') }}</div>
                @endif

                <div class="card-body p-4">

                    <div class="basic-form p-12">

                        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="imageDiv">
                                    <label class="mb-2 text-sm font-medium text-gray-900" for="file_input">
                                        Upload Image
                                    </label>
                                    {{-- <div class="position-relative w-100"> --}}
                                    <input type="file" name="image"
                                        class="image @error('image') is-invalid @enderror" accept="image/*"
                                        onchange="loadFile(event)">
                                    <div
                                        class="w-100 h-60 border-dashed border-2 border-gray-300 rounded-lg mt-2 d-flex justify-content-center align-items-center">
                                        <img id="output" width="80px" class="mt-1 d-none" src="#"
                                            alt="Image Preview">
                                        <p class="text-sm text-gray-600">
                                            Drag and drop or click here to upload an image
                                        </p>
                                    </div>
                                    {{-- </div> --}}
                                    @error('image')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <label for="project_category_id"
                                class="block mb-2  text-sm pr-4 ml-2 font-medium text-gray-900 dark:text-white">Project
                                Categories:</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="project_category_id" id="project_category_id">
                                <option value="Luxury Apartment">Luxury Apartment</option>
                                <option value="Corporate Office">Corporate Office</option>
                                <option value="Commercial Shops">Commercial Shops</option>
                                <option value="Food Courts">Food Courts</option>
                                <option value="Farm Houses">Farm Houses</option>
                            </select>
                            <div class="form-group">
                                <label for="agent_id"
                                    class="block mb-2  text-sm pr-4 ml-2 font-medium text-gray-900 dark:text-white">Select
                                    Agent:</label>
                                <select name="agent_id" class="form-control">
                                    @foreach ($agents as $agent)
                                        <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('name') is-invalid @enderror"
                                        placeholder="name">
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
                                        name="address" id="" cols="10" rows="5">

                                            </textarea>

                                </div>
                            </div>
                            <div class="d-flex flex-row mb-4">
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time
                                        Period</label>
                                    <input type="text" name="time_period" value="{{ old('time_period') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('time_period') is-invalid @enderror"
                                        placeholder="Time Period">
                                    @error('time_period')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Downpayment</label>
                                    <input type="text" name="downpayment" value="{{ old('downpayment') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('downpayment') is-invalid @enderror"
                                        placeholder="Downpayment">
                                    @error('downpayment')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="text" name="price" value="{{ old('price') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('price') is-invalid @enderror"
                                        placeholder="Price">
                                    @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                        From</label>
                                    <input type="text" name="start_from" value="{{ old('start_from') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('start_from') is-invalid @enderror"
                                        placeholder="Start From">
                                    @error('start_from')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                                        Time</label>
                                    <input type="text" name="end_time" value="{{ old('end_time') }}"
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
                                    <input type="number" step="0.01" name="number_of_bed"
                                        value="{{ old('number_of_bed') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('number_of_bed') is-invalid @enderror"
                                        placeholder="Bedrooms">
                                    @error('number_of_bed')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bathrooms</label>
                                    <input type="number" step="0.01" name="number_of_bath"
                                        value="{{ old('number_of_bath') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('number_of_bath') is-invalid @enderror"
                                        placeholder="Bathrooms">
                                    @error('number_of_bath')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garage</label>
                                    <input type="text" name="garage" value="{{ old('garage') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('garage') is-invalid @enderror"
                                        placeholder="Number of Garage">
                                    @error('garage')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="ml-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garage
                                        Size</label>
                                    <input type="text" name="garage_size" value="{{ old('garage_size') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('garage_size') is-invalid @enderror"
                                        placeholder="Garage Size">
                                    @error('garage_size')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">


                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <h5 class="border p-3 property">Location Details</h5>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-4">
                                <div class="">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State/Country</label>
                                    <input type="text" name="state_country" value="{{ old('state_country') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('state_country') is-invalid @enderror"
                                        placeholder="State/Country">
                                    @error('state_country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                    <input type="text" name="city" value="{{ old('city') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('city') is-invalid @enderror"
                                        placeholder="City">
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip</label>
                                    <input type="text" name="zip" value="{{ old('Zip') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('Zip') is-invalid @enderror"
                                        placeholder="Zip">
                                    @error('Zip')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area</label>
                                    <input type="text" name="area" value="{{ old('area') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('area') is-invalid @enderror"
                                        placeholder="Area">
                                    @error('area')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                    <input type="text" name="country" value="{{ old('country') }}"
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
                            <input type="text" name="property_id" value="{{ old('property_id') }}"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('property_id') is-invalid @enderror"
                                placeholder="Property ID">
                            @error('property_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property
                                Size</label>
                            <input type="text" name="property_size" value="{{ old('property_size') }}"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('property_size') is-invalid @enderror"
                                placeholder="Property Size">
                            @error('property_size')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                            <input type="text" name="duration" value="{{ old('duration') }}"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('duration') is-invalid @enderror"
                                placeholder="Property Size">
                            @error('duration')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ml-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year
                                Built</label>
                            <input type="text" name="year_built" value="{{ old('year_built') }}"
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
                                <option value="Rent">For Rent</option>
                                <option value="Sell">For Sell</option>
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
                            <input class="" type="checkbox" id="air_conditioning" name="air_conditioning"
                                value="1" class="">
                            <label for="air_conditioning"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Air
                                Conditioning</label>
                        </div>

                        <div class="ml-4">
                            <input type="checkbox" id="heater" name="heater" value="1" class="">
                            <label for="heater"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heater</label>

                        </div>
                        <div class="ml-4">
                            <input type="checkbox" id="lawndry_room" name="lawndry_room" value="1"
                                class="">
                            <label for="lawndry_room"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lawndry
                                Room</label>
                        </div>

                    </div> <br>
                    <div class="d-flex flex-row mb-4">
                        <div class="">
                            <input type="checkbox" id="lawn" name="lawn" value="1" class="">
                            <label for="lawn"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lawn</label>

                        </div>
                        <div class="ml-4">
                            <input type="checkbox" id="swimming_pool" name="swimming_pool" value="1"
                                class="">
                            <label for="swimming_pool"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Swimming
                                Pool</label>
                        </div>

                        <div class="ml-4">
                            <input type="checkbox" id="dining_room" name="dining_room" value="1"
                                class="">
                            <label for="dining_room"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dining
                                Room</label>
                        </div>
                    </div>

                    <div class="d-flex imagesDivPDF">
                        <div class="imageDiv">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Floor
                                Plan Image</label>
                            <input type="file" name="floor_plan_img"
                                class="image @error('floor_plans') is-invalid @enderror" accept="image/*"
                                onchange="loadFile(event)">
                            <img id="output" width="80px" class="mt-1">
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
                            <img id="output" width="80px" class="mt-1">
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
                            <img id="output" width="80px" class="mt-1">
                            @error('property_video')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea name="description" cols="10" rows="10" placeholder="Description"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 ml-3 mb-4">
                    <input type="submit" name="submit" id="submit" value="Add Project"
                        class="btn btn-primary">
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
