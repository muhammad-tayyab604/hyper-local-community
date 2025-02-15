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
@section('title', 'Add Agent')

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
            <div class="ml-2"> <a href="{{ route('agent.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">
                <div class="card-header">
                    <h3 class="card-title text-lg font-sans">Add Agent</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('Error') }}</div>
                @endif

                <div class="card-body p-4">

                    <div class="basic-form p-12">

                        <form action="{{ route('agent.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="imageDiv">
                                    <label class="mb-2 text-sm font-medium text-gray-900" for="file_input">
                                        Agent's Image
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


                            <div class="d-flex flex-row mb-4">
                                <div class="">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('time_period') is-invalid @enderror"
                                        placeholder="EX@gmail.com">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook</label>
                                    <input type="text" name="facebook" value="{{ old('facebook') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('downpayment') is-invalid @enderror"
                                        placeholder="https://www.facebook.com">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                                    <input type="text" name="phone_number" value="{{ old('phone') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('price') is-invalid @enderror"
                                        placeholder="0300-1234567">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Linkedin</label>
                                    <input type="text" name="linkedin" value="{{ old('linkedin') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('start_from') is-invalid @enderror"
                                        placeholder="https://www.linkedin.com">
                                    @error('start_from')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whatsapp</label>
                                    <input type="text" name="whatsapp" value="{{ old('whatsapp') }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('end_time') is-invalid @enderror"
                                        placeholder="0300-12345678">
                                    @error('whatsapp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                    </div>
                    <div class="col-sm-10 ml-3 mb-4">
                        <input type="submit" name="submit" id="submit" value="Add Agent" class="btn btn-primary">
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
