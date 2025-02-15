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
            {{-- <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row"> --}}

            <div class="mainCard pl-5 pr-5">
                <div class="ml-2"> <a href="{{ route('show.subcategory') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
                </div>
                <div class="secCard bg-white rounded-lg drop-shadow-xl">

                    @if (session('status'))
                        <div class="alert alert-success ">{{ session('status') }}</div>
                    @endif

                    <div class="card-header">
                        <h3 class="card-title">Create Sub Category</h3>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">

                            <form action="{{ route('create.subcategory') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- id (Hidden for Edit Purpose)-->
                                {{-- <input type="hidden" name="id" class="form-control" value="{{ isset($level)? $level[0]->level_id: '' }}" id="exampleInputTitle"> --}}
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <select name="category" id=""
                                                style="border: 1px solid #ced4da;; width:100%; height:37px; border-radius:3px;">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach ($category as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" placeholder="Category Name"> --}}
                                            @error('category')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sub Category Name</label>
                                            <input type="text" name="sub_category"
                                                class="form-control @error('sub_category') is-invalid @enderror"
                                                placeholder="Category Name">
                                            @error('sub_category')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" name="submit" id="submit" value="Add Category"
                                        class="btn btn-outline-success">
                                </div>
                            </form>
                        </div>
                        {{-- <hr> --}}

                    </div>
                </div>
                <!-- /.card -->
                {{-- </div>

              </div>
            </div> --}}

            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{-- <footer class="main-footer">
      <strong>Copyright &copy; 2023</strong>
      All rights reserved.

    </footer> --}}

    </div>
    <!-- ./wrapper -->
@endsection
