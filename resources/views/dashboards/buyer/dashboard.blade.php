<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        /* background-color: #2d3748; */
    }

    .mainChart {
        margin-left: 37px;
        margin-bottom: 40px;
    }

    .card {
        box-shadow: 0px 8px 20px black;
        width: 77vw;

    }

    .small-box-footer {
        margin-top: 150px;
    }

    .inner h3 {
        font-size: 24px;
    }

    .max-w-sm {
        background-image: url('/images/bglines.png'), linear-gradient(232deg, rgba(209, 165, 69, 1) 0%, rgba(244, 232, 135, 1) 53%, rgba(237, 212, 112, 1) 100%);
        ;
        /* linear-gradient(232deg, rgba(209, 165, 69, 1) 0%, rgba(244, 232, 135, 1) 53%, rgba(209, 165, 69, 1) 100%); */
        background-blend-mode: screen;
        width: 28rem;
        height: 15rem;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-left: 40px;
        text-align: center;
        margin-bottom: 35px;
        box-shadow: 0 0.50rem 0.5rem rgba(0, 0, 0, 0.12);
        padding: 30px;
        border-radius: 8px;
        /* background-color: #d1a545 !important; */
        /* background-color: #f4e887 !important; */
        /* background-color: #edd470 !important; */
        transition: all .2s cubic-bezier(0.55, 0.085, 0.68, 0.53);
    }

    .max-w-sm:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .max-w-sm p {
        font-size: 20px;
        color: black;
        font-weight: 600;
        /* text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.178); */
    }

    .max-w-sm h5 {
        color: black;
        font-size: 30px;
        /* text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.178); */

    }


    .max-w-sm i {
        font-size: 70px;
        color: white !important;
        text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.178);

    }

    .chartSection {
        padding-bottom: 50px;
    }

    .max-w-sm a {
        padding-left: 95px;
        padding-right: 95px;
        transition: all .3s ease-in-out;
    }

    .max-w-sm a:hover {
        background-color: #edd470 !important;
        border-radius: 12px;

    }

    .p-6 {
        padding: 1.5rem;
    }

    .bg-white {
        background-color: #ffffff;
    }

    .border {
        border-width: 1px;
        border-style: solid;
    }

    .border-gray-200 {
        border-color: #e2e8f0;
    }

    .shadow {
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.12);
    }

    .text-gray-500 {
        color: #718096;
    }

    .row {
        padding: 12px;
    }

    .text-gray-900 {
        color: #2d3748;
    }

    .text-2xl {
        font-size: 1.5rem;
    }

    .font-semibold {
        font-weight: 600;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
        margin-top: 1rem;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }

    .w-7 {
        width: 1.75rem;
    }

    .h-7 {
        height: 1rem;
    }

    .ml-2.5 {
        margin-left: 0.625rem;
    }

    .text-blue-600 {
        color: #3182ce;
    }

    .hover\:underline:hover {
        text-decoration: underline;
    }

    .dark\:bg-gray-800 {
        background-color: #2d3748;
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
    }

    .dark\:text-gray-900 {
        color: #ffffff;
    }

    svg {
        width: 12px
    }
</style>

@extends('layouts.adminlayout')
@section('container')
@section('title', 'Dashboard')
        <div class="wrapper">

            @include('dashboards.buyer.include.side-bar')

            <!-- Content Wrapper. Contains page content -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard of ()</h1>
        <h1>Welcome,
            {{ auth()->user()->name }}
            !</h1>
    <p>Your Role:
        <strong>{{ $role }}</strong>
    </p>




                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid bg-light">
                        <!-- Small boxes (Stat box) -->



                        <div class="row">
                            <div class="col-lg-4">

                                <div class="max-w-sm ">
                                    <i class="fa fa-house"></i>
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Properties
                                    </h5>
                                    {{-- <p class="mb-3 font-normal text-gray-500">Explore the Properties:</p> --}}
                                    <p class="mb-3 font-normal text-gray-500">Total Properties {{ $product }}</p>
                                    <a href="{{ route('product.index') }}" style="color: black;">
                                        See all Properties
                                        <svg class="w-3 h-3 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="max-w-sm ">
                                    <i class="fa fa-gear"></i>
                                    {{-- <a href="#"> --}}
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Categories
                                    </h5>
                                    {{-- </a> --}}
                                    <p class="mb-3 font-normal text-gray-500">Total Categories {{ $category }}</p>
                                    <a href="{{ route('show.category') }}" style="color: black;">
                                        See all Categories
                                        <svg class="w-3 h-3 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="max-w-sm ">
                                    <i class="fa fa-gears"></i>
                                    {{-- <a href="#"> --}}
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Sub Categories
                                    </h5>
                                    {{-- </a> --}}
                                    <p class="mb-3 font-normal text-gray-500">Total Sub Categories {{ $subCategory }}</p>
                                    <a href="{{ route('show.subcategory') }}" style="color: black;">
                                        See all Sub Categories
                                        <svg class="w-3 h-3 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="max-w-sm text-light ">
                                    <i class="fa fa-comments" style="color: black;"></i>
                                    {{-- <a href="#"> --}}
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Testimonials
                                    </h5>
                                    {{-- </a> --}}
                                    <p class="mb-3 font-normal text-gray-500">Total Testimonial {{ $testimonial }}</p>
                                    <a href="{{ route('index.testimonials') }}" class="testi" style="color: black;">
                                        See all Testimonial
                                        <svg class="w-3 h-3 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="max-w-sm ">
                                    <i class="fa fa-building"></i>
                                    {{-- <a href="#"> --}}
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Projects
                                    </h5>
                                    {{-- </a> --}}
                                    <p class="mb-3 font-normal text-gray-500">Total Projects {{ $project }}</p>
                                    <a href="{{ route('project.index') }}" style="color: black;">
                                        See all Projects
                                        <svg class="w-3 h-3 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 ">

                                <div class="max-w-sm">
                                    <i class="fa fa-blog"></i>
                                    {{-- <a href="#"> --}}
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Blogs
                                    </h5>
                                    {{-- </a> --}}
                                    <p class="mb-3 font-normal text-gray-500">Total Blogs {{ $blog }}</p>
                                    <a href="{{ route('blog.index') }}" style="color: black;">
                                        See all Blogs
                                        <svg class="w-3 h-3 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="container"> --}}
                        <section class="chartSection">
                            <div class="mainChart">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">Tour Form Submissions</div>
                                        <div class="card-body">
                                            {!! $chart->container() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- </div> --}}

                        {{-- <script src="{{ $chart->cdn() }}"></script> --}}

                        {{ $chart->script() }}

@endsection
