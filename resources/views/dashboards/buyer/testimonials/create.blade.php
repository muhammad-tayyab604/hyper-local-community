<style>
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


            <div class="mainCard pl-5 pr-5 p-12">
                <div class="ml-2"> <a href="{{ route('index.testimonials') }}"><i
                            class="fa-solid fa-arrow-left mb-4"></i></a>
                </div>
                <div class="secCard bg-white rounded-lg drop-shadow-xl">

                    @if (session('success'))
                        <div class="alert alert-success ">{{ session('success') }}</div>
                    @endif
                    @if (session('Error'))
                        <div class="alert alert-danger ">{{ session('Error') }}</div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Create Testimonial</h3>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">

                            <form action="{{ route('store.form.testimonials') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="imageDiv">
                                            <label>Image</label>
                                            <input type="file" name="image"
                                                class=" image @error('image') is-invalid @enderror" accept="image/*"
                                                onchange="loadFile(event)">
                                            <img id="output" width="80px" class="mt-1">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control @error('name') is-invalid @enderror" placeholder="name">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" value="{{ old('address') }}"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Address">
                                            @error('address')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" cols="30" rows="10"
                                                class="form-control @error('description') is-invalid @enderror"></textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" name="submit" id="submit" value="Add Testimonial"
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
