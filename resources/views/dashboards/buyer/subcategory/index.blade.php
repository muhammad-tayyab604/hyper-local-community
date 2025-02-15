<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: rgb(10, 184, 10);
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

@extends('layouts.adminlayout')
@section('container')
@section('title', 'Sub Categories')

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


        {{-- delete Coache --}}

        <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <form action="{{ route('delete.category') }}" method="POST">
                        @csrf
                        <div class="modal-header flex-column">

                            <div class="icon-box">
                                <i class="material-icons">&#xE5CD;</i>
                            </div>

                            <h4 class="modal-title w-100">Are you sure?</h4>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        </div>
                        <div class="modal-body">
                            <p>Do you really want to update these records? This process cannot be undone.</p>
                        </div>
                        <input type="hidden" name="deleted_id" id="deleted_id">
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    @if (session('status'))
                        <div class="alert alert-success w-100">{{ session('status') }}</div>
                    @endif

                    <div class="col-12">
                        <div class="card">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h3 class="card-title">All Sub Categories</h3>
                                        <div><a href="{{ route('create.subcategory') }}"
                                                class="btn btn-success text-white"
                                                style="float:right; margin:10px;">Create</a> </div>

                                    </div>
                                </div>

                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th> Sub Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($category as $category)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $category->category_name }}</td>
                                                <td>{{ $category->sub_category }}</td>



                                                <td>
                                                    <a href="{{ route('view.subcategory', $category->id) }}"><i
                                                            class="fas fa-eye"></i></a>
                                                    <a href="{{ route('edit.subcategory', $category->id) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a data-target="#DeleteModal" data-toggle="modal" class="cancel"
                                                        data-id="{{ $category->id }}"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- ./wrapper -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script>
            $(document).on('click', '.cancel', function(e) {

                $('#deleted_id').val($(this).data('id'));

            });
        </script>

    @endsection
