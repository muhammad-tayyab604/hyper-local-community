<style>
    .custom-border {
        border: 2px solid #ff0000;
        /* Set border color to red (#ff0000) */
    }

    .ipdfv {
        display: flex;
        flex-wrap: wrap;
    }

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

    .propertyFeatures {
        display: flex;
        flex-direction: column;
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
</style>

@extends('layouts.adminlayout')
@section('container')
@section('title', 'Update Property')
@include('admin.include.side-bar')

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
            <div class="ml-2"> <a href="{{ route('product.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">

                @if (session('status'))
                    <div class="alert alert-success ">{{ session('status') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('Error') }}</div>
                @endif
                <div class="card-header">
                    <h3 class="card-title text-lg">Update Property</h3>
                </div>
                <div class="card-body p-4">

                    <div class="basic-form">

                        <form action="{{ route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="imageDiv">
                                        <label class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                                        <input type="file" name="image"
                                            class="image @error('image') is-invalid @enderror" accept="image/*"
                                            onchange="loadFile(event)">
                                        <img id="output" src="{{ asset('Image/product/' . $product->image) }}"
                                            width="80px" class="mt-1">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="name" value="{{ $product->name }}"
                                            class=" form-control block w-full text-sm  @error('name') is-invalid @enderror"
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
                                        <textarea placeholder="Address" class="form-control block w-full text-sm  @error('address') is-invalid @enderror""
                                            name="address" id="" cols="10" rows="5">{{ $product->address }}

                                            </textarea>

                                    </div>
                                </div>
                                {{-- State --}}
                                <div class="d-flex flex-row mb-4">
                                    <div class="">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                                        <input type="text" name="state" value="{{ $product->state }}"
                                            class="form-control block w-full text-sm  @error('state') is-invalid @enderror"
                                            placeholder="State">
                                        @error('state')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                        <input type="text" name="city" value="{{ $product->city }}"
                                            class="form-control block w-full text-sm  @error('city') is-invalid @enderror"
                                            placeholder="City">
                                        @error('city')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip</label>
                                        <input type="text" name="zip" value="{{ $product->zip }}"
                                            class="form-control block w-full text-sm  @error('zip') is-invalid @enderror"
                                            placeholder="Zip code">
                                        @error('zip')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area</label>
                                        <input type="text" name="area" value="{{ $product->area }}"
                                            class="form-control block w-full text-sm  @error('area') is-invalid @enderror"
                                            placeholder="Area">
                                        @error('area')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                        <input type="text" name="country" value="{{ $product->country }}"
                                            class="form-control block w-full text-sm  @error('country') is-invalid @enderror"
                                            placeholder="Country">
                                        @error('country')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Year Built --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year
                                            Build</label>
                                        <input type="number" step="0.01" name="year_build"
                                            value="{{ $product->year_build }}"
                                            class="form-control block w-full text-sm  @error('year_build') is-invalid @enderror"
                                            placeholder="Ex. 1989">
                                        @error('year_build')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                {{-- Year Built ends --}}

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number
                                            of Beds</label>
                                        <input type="numebr" step="0.01" name="number_of_bed"
                                            value="{{ $product->number_of_bed }}"
                                            class="form-control block w-full text-sm  @error('number_of_bed') is-invalid @enderror"
                                            placeholder="Number of beds">
                                        @error('number_of_bed')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property
                                            ID</label>
                                        <input type="text" name="property_id" value="{{ $product->property_id }}"
                                            class="form-control block w-full text-sm  @error('property_id') is-invalid @enderror"
                                            placeholder="Property ID">
                                        @error('property_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number
                                            of Bath</label>
                                        <input type="number" step="0.01" name="number_of_bath"
                                            value="{{ $product->number_of_bath }}"
                                            class="form-control block w-full text-sm  @error('number_of_bath') is-invalid @enderror"
                                            placeholder="Number of Bath">
                                        @error('number_of_bath')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property
                                            Size</label>
                                        <input type="text" name="property_size"
                                            value="{{ $product->property_size }}"
                                            class="form-control block w-full text-sm  @error('property_size') is-invalid @enderror"
                                            placeholder="Size of property">
                                        @error('property_size')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-4">
                                    <div class="">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garage</label>
                                        <input type="text" name="garadge" value="{{ $product->garadge }}"
                                            class="form-control block w-full text-sm  @error('garadge') is-invalid @enderror"
                                            placeholder="Number of Garadge">
                                        @error('garadge')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Garage
                                            Size</label>
                                        <input type="text" name="garage_size" value="{{ $product->garage_size }}"
                                            class="form-control block w-full text-sm  @error('garage_size') is-invalid @enderror"
                                            placeholder="Size of Garadge in sqft">
                                        @error('garadge')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Square
                                            Feet</label>
                                        <input type="text" name="square_feet" value="{{ $product->square_feet }}"
                                            class="form-control block w-full text-sm  @error('square_feet') is-invalid @enderror"
                                            placeholder="Number of Square feet">
                                        @error('square_feet')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="ml-4">
                                        <label for="status"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                        <select name="status" id="status"
                                            class="form-control block w-full text-sm @error('status') is-invalid @enderror">
                                            @if ($product->status === 'Rent')
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
                                    <div class="ml-4">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input type="text" name="price" value="{{ $product->price }}"
                                            class="form-control block w-full text-sm  @error('price') is-invalid @enderror"
                                            placeholder="Price">
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="propertyFeatures">
                                    <div class=" p-3">
                                        <h5 class="border p-3 property">Property Features</h5>
                                    </div>
                                    <div class="ml-4">
                                        @if ($product->air_conditioning)
                                            <input type="checkbox" id="air_conditioning" name="air_conditioning"
                                                value="1" class="" checked>
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="air_conditioning">Air Conditioning</label>
                                        @else
                                            <input type="checkbox" id="air_conditioning" name="air_conditioning"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="air_conditioning">Air Conditioning</label>
                                        @endif
                                    </div>

                                    <div class="ml-4">
                                        @if ($product->heater)
                                            <input checked type="checkbox" id="heater" name="heater"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="heater">Heater</label>
                                        @else
                                            <input type="checkbox" id="heater" name="heater" value="1"
                                                class="">
                                            <label for="heater">Heater</label>
                                        @endif
                                    </div>

                                    <div class="ml-4">
                                        @if ($product->lawndry_room)
                                            <input checked type="checkbox" id="lawndry_room" name="lawndry_room"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="lawndry_room">Lawndry Room</label>
                                        @else
                                            <input type="checkbox" id="lawndry_room" name="lawndry_room"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="lawndry_room">Lawndry Room</label><br>
                                        @endif
                                    </div>

                                    <div class="ml-4">
                                        @if ($product->lawn)
                                            <input checked type="checkbox" id="lawn" name="lawn"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="lawn">Lawn</label>
                                        @else
                                            <input type="checkbox" id="lawn" name="lawn" value="1"
                                                class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="lawn">Lawn</label>
                                        @endif
                                    </div>


                                    <div class="ml-4">
                                        @if ($product->swimming_pool)
                                            <input checked type="checkbox" id="swimming_pool" name="swimming_pool"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="swimming_pool">Swimming Pool</label>
                                        @else
                                            <input type="checkbox" id="swimming_pool" name="swimming_pool"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="swimming_pool">Swimming Pool</label>
                                        @endif
                                    </div>

                                    <div class="ml-4">
                                        @if ($product->dining_room)
                                            <input type="checkbox" id="dining_room" name="dining_room"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="dining_room">Dining Room</label> <br>
                                        @else
                                            <input checked type="checkbox" id="dining_room" name="dining_room"
                                                value="1" class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="dining_room">Dining Room</label> <br>
                                        @endif
                                    </div>
                                </div>


                                <div class="d-flex ipdfv">
                                    <div class="imageDiv">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Floor
                                            Plan Image</label>
                                        <input type="file" name="floor_plan_img"
                                            class="image @error('floor_plans') is-invalid @enderror" accept="image/*"
                                            onchange="loadFile(event)">
                                        <img id="output" width="80px" class="mt-1"
                                            src="{{ asset('Image/product/floorplan/' . $product->floor_plan_img) }}">
                                        @error('floor_plans')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="imageDiv ml-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Company Profile PDF</label>
                                        <input type="file" name="company_profile_pdf"
                                            class="image @error('company_profile_pdf') is-invalid @enderror"
                                            accept="image/*" onchange="loadFile(event)">
                                        <img id="output" width="80px" class="mt-1">
                                        @error('company_profile_pdf')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="imageDiv ml-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Floor Plan Details PDF</label>
                                        <input type="file" name="floor_plan_details_pdf"
                                            class="image @error('floor_plan_details_pdf') is-invalid @enderror"
                                            accept="image/*" onchange="loadFile(event)">
                                        <img id="output" width="80px" class="mt-1">
                                        @error('floor_plan_details_pdf')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="imageDiv ml-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Property Details PDF</label>
                                        <input type="file" name="property_details_pdf"
                                            class="image @error('property_details_pdf') is-invalid @enderror"
                                            accept="image/*" onchange="loadFile(event)">
                                        <img id="output" width="80px" class="mt-1">
                                        @error('property_details_pdf')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="imageDiv ml-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Property Video</label>
                                        <input type="file" name="property_video"
                                            class="image @error('property_video') is-invalid @enderror"
                                            accept="video/*" onchange="loadFile(event)"
                                            src="{{ asset('Video/propertyVideos/' . $product->property_video) }}">
                                        <video id="output" width="80px" class="mt-1"
                                            src="{{ asset('Video/propertyVideos/' . $product->property_video) }}"></video>
                                        @error('property_video')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>






                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                        <textarea name="description" cols="30" rows="10"
                                            class="form-control block w-full text-sm  @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <select name="category_id" id=""
                                            class="form-control block w-full text-sm  @error('category_name') is-invalid @enderror"
                                            style="border: 1px solid #ced4da;; width:100%; height:37px; border-radius:3px;">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('category_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <input type="submit" name="submit" id="submit" value="Update Property"
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
