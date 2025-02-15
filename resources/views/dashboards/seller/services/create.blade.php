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
@section('title', 'Add Service')
    @include('dashboards.seller.include.side-bar')

    <div class="wrapper">

    {{-- @include('dashboards.seller.admin.include.side-bar') --}}

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

            @include('dashboards.seller.include.nav-bar')
            <div class="mainCard pl-5 pr-5 mt-5 mb-5">
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
                        <h3 class="card-title text-lg">Add Service</h3>
                    </div>
                    <div class="card-body p-4">

                        <div class="basic-form">

                            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="imageDiv">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 ">Image</label>
                                            <input type="file" name="image"
                                                class="image @error('image') is-invalid @enderror" accept="image/*"
                                                onchange="loadFile(event)">
                                            <img id="output" width="80px" class="mt-1">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label
                                                class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
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
                                                class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                                            <input type="text" name="slug" value="{{ old('slug') }}"
                                                class=" form-control block w-full text-sm  @error('slug') is-invalid @enderror"
                                                placeholder="Slug">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                     </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="summernote" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>





                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Categories</label>
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
                                    <input type="submit" name="submit" id="submit" value="Add Property"
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
