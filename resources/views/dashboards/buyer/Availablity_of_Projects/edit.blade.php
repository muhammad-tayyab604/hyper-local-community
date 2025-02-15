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
        border: 2px solid black;
        padding: 20px;
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
@section('title', 'Update Available Projects')

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
            <div class="ml-2"> <a href="{{ route('availability.index') }}"><i
                        class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">
                <div class="card-header">
                    <h3 class="card-title text-lg font-sans">Add Availability of Space in Projects</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('Error') }}</div>
                @endif

                <div class="card-body p-4">

                    <div class="basic-form p-12">

                        <form action="{{ route('availability.update', $availableProject->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="project_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                        Project</label>
                                    <select name="project_name" id="project_name" class="form-control">
                                        <option value="" disabled>Select a Project</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->name }}" selected>{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit
                                        Type</label>
                                    <input type="text" name="unit_type" value="{{ $availableProject->unit_type }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('name') is-invalid @enderror"
                                        placeholder="Unity Type e.g. Shop/Apartment">
                                    @error('unit_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>


                            <div class="d-flex flex-row mb-4">
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Floor
                                        Number</label>
                                    <input type="text" name="floor" value="{{ $availableProject->floor }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('time_period') is-invalid @enderror"
                                        placeholder="Floor Number e.g. 1st, 2nd">
                                    @error('floor')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size/sqt</label>
                                    <input type="text" name="size" value="{{ $availableProject->size }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('downpayment') is-invalid @enderror"
                                        placeholder="Size per Sqt">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price/sqt</label>
                                    <input type="text" name="price_sqt" value="{{ $availableProject->price_sqt }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('price') is-invalid @enderror"
                                        placeholder="Price per Sqt">
                                    @error('price_sqt')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Availability</label>
                                    <input type="text" name="availability"
                                        value="{{ $availableProject->availability }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('start_from') is-invalid @enderror"
                                        placeholder="Yes/No">
                                    @error('availability')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                    </div>
                    <div class="col-sm-10 ml-3 mb-4">
                        <input type="submit" name="submit" id="submit" value="Add Available Project"
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
