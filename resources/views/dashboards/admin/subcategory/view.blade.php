@extends('layouts.adminlayout')
@section('container')

@include('admin.include.side-bar')

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
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
      {{-- <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row"> --}}

            <div class="col-12">
                <div class="ml-2" > <a href="{{ route('show.subcategory') }}" ><i class="fa-solid fa-arrow-left"></i></a> </div>
                <div class="card">

                    @if(session('status'))
                    <div class="alert alert-success ">{{ session('status') }}</div>
                    @endif

                    <div class="card-header">
                        <h3 class="card-title">View Category</h3>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">

                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- id (Hidden for Edit Purpose)-->
                                {{-- <input type="hidden" name="id" class="form-control" value="{{ isset($level)? $level[0]->level_id: '' }}" id="exampleInputTitle"> --}}
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input type="text" name="name" value="{{ $category[0]->category_name }}" class="form-control" disabled>
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <input type="text" name="name" value="{{ $category[0]->sub_category }}" class="form-control" disabled>
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>

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
    <footer class="main-footer">
      <strong>Copyright &copy; 2023</strong>
      All rights reserved.

    </footer>

  </div>
  <!-- ./wrapper -->

@endsection
