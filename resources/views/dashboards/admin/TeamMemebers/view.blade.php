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
@section('title', 'Add Team Member')

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
            <div class="ml-2"> <a href="{{ route('team.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">
                <div class="card-header">
                    <h3 class="card-title text-lg font-sans">Add Team Memeber</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger ">{{ session('error') }}</div>
                @endif

                <div class="card-body p-4">

                    <div class="basic-form p-12">

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="imageDiv">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                    <input type="file" name="image" disabled readonly
                                        class="image @error('image') is-invalid @enderror" accept="image/*"
                                        onchange="loadFile(event)">
                                    <img id="output" src="{{ asset('Image/team/' . $team->image) }}" width="80px"
                                        class="mt-1 text-center">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" value="{{ $team->name }}" readonly
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('name') is-invalid @enderror"
                                        placeholder="name">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <div class="">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team</label>
                                        <select name="team" disabled
                                            class="form-control block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                            <option value="" disabled>Select Team</option>
                                            <option value="Executive Members"
                                                {{ $team->team === 'Executive Members' ? 'selected' : '' }}>Executive
                                                Members</option>
                                            <option value="Sale Champions"
                                                {{ $team->team === 'Sale Champions' ? 'selected' : '' }}>Sale Champions
                                            </option>
                                            <option value="Sales Team"
                                                {{ $team->team === 'Sales Team' ? 'selected' : '' }}>Sales Team</option>
                                            <option value="Operation Team"
                                                {{ $team->team === 'Operation Team' ? 'selected' : '' }}>Operation Team
                                            </option>
                                            <option value="Design Team"
                                                {{ $team->team === 'Design Team' ? 'selected' : '' }}>Design Team
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                        <select name="position" disabled
                                            class="form-control block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                            <option value="ceo" {{ $team->position === 'ceo' ? 'selected' : '' }}>
                                                CEO</option>
                                            <option value="cmo" {{ $team->position === 'cmo' ? 'selected' : '' }}>
                                                CMO</option>
                                            <option value="Real State Agent"
                                                {{ $team->position === 'Real State Agent' ? 'selected' : '' }}>Real
                                                State Agent</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex flex-row mb-4">

                                <div class="">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook</label>
                                    <input type="text" name="facebook" value="{{ $team->facebook }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('downpayment') is-invalid @enderror"
                                        placeholder="https://www.facebook.com">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                                    <input type="text" name="instagram" value="{{ $team->instagram }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('price') is-invalid @enderror"
                                        placeholder="https://www.instagram.com">
                                    @error('instagram')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Linkedin</label>
                                    <input type="text" name="linkedin" value="{{ $team->linkedin }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('start_from') is-invalid @enderror"
                                        placeholder="https://www.linkedin.com">
                                    @error('start_from')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="ml-4">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whatsapp</label>
                                    <input type="text" name="whatsapp" value="{{ $team->whatsapp }}"
                                        class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('end_time') is-invalid @enderror"
                                        placeholder="0300-12345678">
                                    @error('whatsapp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


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
