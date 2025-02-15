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
                <div class="ml-2"> <a href="{{ route('information.form.index') }}"><i
                            class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="card">

                    @if (session('status'))
                        <div class="alert alert-success ">{{ session('status') }}</div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success ">{{ session('success') }}</div>
                    @endif

                    <div class="card-header">
                        <h3 class="card-title">View Tour Requests</h3>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">



                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" name="date" value="{{ $showForm->date }}"
                                            class="form-control @error('showForm') is-invalid @enderror" placeholder="name"
                                            disabled>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <input type="text" name="name" value="{{ $showForm->time }}"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="name"
                                            disabled>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $showForm->name }}"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="name"
                                            disabled>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $showForm->phone }}"
                                            class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Address" disabled>
                                        @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ $showForm->email }}"
                                            class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Address" disabled>
                                        @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="description" id="summernote" cols="30" rows="10"
                                            class="form-control @error('description') is-invalid @enderror" disabled>{{ $showForm->message }}</textarea>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>



                            </div>


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
