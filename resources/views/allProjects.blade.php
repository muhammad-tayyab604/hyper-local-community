@extends('layouts.app')
@section('content')
@section('title', 'All Projects')

<style>
    a {
        text-decoration: none;
    }
</style>


<div class="container">
    <img src="{{ asset('images/main.svg') }}" class="img-fluid">
    <p class="gray-color mt-4 sub-cat">Home / <span style="color: black;"><b>Our Projects</b></span> </p>
    <div class="row">
        <div class="col-md-12">
            <p class="interested">Our Projects</p>
        </div>

    </div>

    <div class="row">
        <div class=" col-md-9 col-lg-9">


            <div id="projectCarousel1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($projects->where('project_category_id', 'Luxury Apartment') as $project)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                            <div class="row gx-0">
                                <div class="col-md-6 col-lg-5 col-sm-6">
                                    <div class="my-green px-sm-2 p-sm-1 p-lg-3 p-md-1 p-3 p-xl-3 h-100 rounded-start-4">
                                        <p class="white-text f-size32 mt-sm-1 mt-lg-3 mt-md-1 mt-xl-3 mt-3">
                                            {{ $project->name }}</p>
                                        <p class="white-text f-size22 mb-sm-0 mb-3 mb-lg-3 mb-xl-3 mb-md-3">
                                            {{ $project->description }}</p>
                                        <a href="{{ route('insideProject', $project) }}" class="btn">
                                            <button
                                                class="btn yellow-color rounded-4 sub-cat p-sm-1">{{ $project->project_category_id }}</button></a>
                                        <div class="d-flex mt-3 mt-md-3 mt-lg-3 mt-xl-3 mt-sm-0">
                                            <img src="{{ asset('/images/local.svg') }}"
                                                class="img-fluid localimage me-3">
                                            <p class="white-text my-1 sub-cat">{{ $project->address }}</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-7 col-sm-6">
                                    <img src="{{ asset('/images/project1.svg') }}" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="carousel-indicators">
                    @foreach ($projects->where('project_category_id', 'Luxury Apartment') as $project)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                            class="active" aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
                    @endforeach
                </div>



            </div>



            <div id="projectCarousel2" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($projects->where('project_category_id', 'Corporate Office') as $project)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                            <div class="row gx-0">


                                <div class="col-md-6 col-lg-7 col-sm-6">
                                    <img src="images/project2.svg" class="img-fluid">
                                </div>

                                <div class="col-md-6 col-lg-5 col-sm-6">
                                    <div class="my-yellow px-sm-2 p-sm-1 p-lg-3 p-md-1 p-3 p-xl-3 h-100 rounded-end-4">
                                        <p class=" f-size32 mt-sm-1 mt-lg-3 mt-md-1 mt-xl-3 mt-3">{{ $project->name }}
                                        </p>
                                        <p class=" f-size22 mb-sm-0 mb-3 mb-lg-3 mb-xl-3 mb-md-3">
                                            {{ $project->description }}</p>
                                        <a href="{{ route('insideProject', $project) }}" class="btn"><button
                                                class="btn my-green color-yellow rounded-4 sub-cat p-sm-1">{{ $project->project_category_id }}</button></a>
                                        <div class="d-flex mt-3 mt-md-3 mt-lg-3 mt-xl-3 mt-sm-0">
                                            <img src="images/greenlocation.svg" class="img-fluid  me-3 localimage">
                                            <p class=" my-1 sub-cat">{{ $project->address }}</p>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach

                    <div class="carousel-indicators">
                        @foreach ($projects->where('project_category_id', 'Corporate Office') as $project)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                                class="active" aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>



                </div>
            </div>


            <div id="projectCarousel3" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($projects->where('project_category_id', 'Commercial Shops') as $project)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">


                            <div class="row gx-0">
                                <div class="col-md-6 col-lg-5 col-sm-6">
                                    <div class="my-green px-sm-2 p-sm-1 p-lg-3 p-md-1 p-3 p-xl-3 h-100 rounded-start-4">
                                        <p class="white-text f-size32 mt-sm-1 mt-lg-3 mt-md-1 mt-xl-3 mt-3">
                                            {{ $project->name }}</p>
                                        <p class="white-text f-size22 mb-sm-0 mb-3 mb-lg-3 mb-xl-3 mb-md-3">
                                            {{ $project->description }}</p>
                                        <a href="{{ route('insideProject', $project) }}" class="btn"><button
                                                class="btn yellow-color rounded-4 sub-cat p-sm-1">{{ $project->project_category_id }}</button></a>
                                        <div class="d-flex mt-3 mt-md-3 mt-lg-3 mt-xl-3 mt-sm-0">
                                            <img src="images/local.svg" class="img-fluid  me-3 localimage">
                                            <p class="white-text my-1 sub-cat">{{ $project->address }}</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-7 col-sm-6">
                                    <img src="images/project1.svg" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <div class="carousel-indicators">
                        @foreach ($projects->where('project_category_id', 'Commercial Shops') as $project)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                                class="active" aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>



                </div>
            </div>



            <div id="projectCarousel4" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($projects->where('project_category_id', 'Food Courts') as $project)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">


                            <div class="row gx-0">


                                <div class="col-md-6 col-lg-7 col-sm-6">
                                    <img src="images/project2.svg" class="img-fluid">
                                </div>

                                <div class="col-md-6 col-lg-5 col-sm-6">
                                    <div class="my-yellow px-sm-2 p-sm-1 p-lg-3 p-md-1 p-3 p-xl-3 h-100 rounded-end-4">
                                        <p class=" f-size32 mt-sm-1 mt-lg-3 mt-md-1 mt-xl-3 mt-3">{{ $project->name }}
                                        </p>
                                        <p class=" f-size22 mb-sm-0 mb-3 mb-lg-3 mb-xl-3 mb-md-3">
                                            {{ $project->description }}</p>
                                        <a href="{{ route('insideProject', $project) }}" class="btn"><button
                                                class="btn my-green color-yellow rounded-4 sub-cat p-sm-1">{{ $project->project_category_id }}</button></a>
                                        <div class="d-flex mt-3 mt-md-3 mt-lg-3 mt-xl-3 mt-sm-0">
                                            <img src="images/greenlocation.svg" class="img-fluid  me-3 localimage">
                                            <p class=" my-1 sub-cat">{{ $project->address }}</p>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach

                    <div class="carousel-indicators">
                        @foreach ($projects->where('project_category_id', 'Food Courts') as $project)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                                class="active" aria-current="true"
                                aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>



                </div>
            </div>
            <div id="projectCarousel4" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($projects->where('project_category_id', 'Farm Houses') as $project)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">


                            <div class="row gx-0">


                                <div class="col-md-6 col-lg-7 col-sm-6">
                                    <img src="images/project2.svg" class="img-fluid">
                                </div>

                                <div class="col-md-6 col-lg-5 col-sm-6">
                                    <div class="my-yellow px-sm-2 p-sm-1 p-lg-3 p-md-1 p-3 p-xl-3 h-100 rounded-end-4">
                                        <p class=" f-size32 mt-sm-1 mt-lg-3 mt-md-1 mt-xl-3 mt-3">{{ $project->name }}
                                        </p>
                                        <p class=" f-size22 mb-sm-0 mb-3 mb-lg-3 mb-xl-3 mb-md-3">
                                            {{ $project->description }}</p>
                                        <a href="{{ route('insideProject', $project) }}" class="btn"><button
                                                class="btn my-green color-yellow rounded-4 sub-cat p-sm-1">{{ $project->project_category_id }}</button></a>
                                        <div class="d-flex mt-3 mt-md-3 mt-lg-3 mt-xl-3 mt-sm-0">
                                            <img src="images/greenlocation.svg" class="img-fluid  me-3 localimage">
                                            <p class=" my-1 sub-cat">{{ $project->address }}</p>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach

                    <div class="carousel-indicators">
                        @foreach ($projects->where('project_category_id', 'Farm Houses') as $project)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                                class="active" aria-current="true"
                                aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>

        <div class=" col-md-3 col-lg-3">
            <img src="images/downloadprofile.svg" class="img-fluid">
            <img src="images/customer.svg" class="img-fluid mt-5">
            <img src="images/Price.svg" class="img-fluid mt-5">
            <div class="card mt-5 p-1 p-md-3 p-xl-3 p-lg-3 border-0 shadow pt-3">
                <p class="text-center mb-0 sub-cat">Schedule a Visit
                </p>
                <p class="text-center info">For More Information</p>



                <form action="{{ route('form.submit') }}" method="POST">
                    @csrf
                    <label class="sub-cat">Date</label>
                    <div class="input-group" id="datepicker">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <label class="sub-cat">Time</label>
                    <input type="text" name="time" class="form-control">

                    <p class="text-center mt-3 f-600 sub-cat">Your Information</p>

                    <label class="sub-cat">Name</label>
                    <input type="text" name="name" class="form-control">

                    <label class="sub-cat">Phone</label>
                    <input type="text" name="phone" class="form-control">

                    <label class="sub-cat">Email</label>
                    <input type="text" name="email" class="form-control">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                            <textarea name="message" cols="10" rows="10"
                                class="form-control block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    @if (session('success'))
                        <p class="alert alert-success mt-4">{{ session('success') }}</p>
                    @endif
                    @if (session('Error'))
                        <p class="alert alert-danger mt-4">{{ session('Error') }}</p>
                    @endif
                    <button type="submit" class="btn my-green white-text mt-2 sub-cat">Submit a tour request</button>
                </form>

            </div>
        </div>
    </div>


</div>

<section>
    <div class="mt-5 mb-5">
        <p class="partner mb-5 text-center">Our Collaborative Partner</p>
        <div class="" style="background-color: rgb(250,250 ,250 );">
            <div class="container">
                <img src="images/partner.svg" class="img-fluid">
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container mt-lg-5 pt-lg-5 mt-2 pt-2">
        <img src="images/backimage.svg" class="img-fluid mb-0">

        <div class="row dream-home">
            <div class="col-2"></div>
            <div class="col-8 back-image">
                <div class="d-flex justify-content-center">
                    <div class="col-8 mt-4">
                        <p class="mt-5 mx-lg-5 dream-house pt-5 text-center">Let’s Find Your Dream House with
                            Monarch International !</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-light">Book your dream home</button>
                </div>

            </div>
            <div class="col-2">

            </div>
        </div>

    </div>
</section>

<section class="blogs pb-5">
    <div class="d-flex justify-content-center pt-5">
        <p class="news">Blog & News from </p>
        <img src="{{ asset('/images/monarch.svg') }}" class="img-fluid monar">
    </div>
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 blogg">
                    <a href="{{ route('insideBlog', $blog) }}">
                        <div class="card blog-card shadow border-0 rounded-4">
                            <img src="{{ asset('/Image/blog/' . $blog->image) }}" class="img-fluid">
                            <p class="invest p-3 mb-0">{{ $blog->title }}</p>
                            <div class="row px-3">
                                <div class="col-1 mb-0">
                                    <img src="{{ asset('/images/1.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="mb-0 text-nowrap">Dreamwell Team</p>
                                </div>
                                <div class="col-1">
                                    <img src="{{ asset('/images/2.svg') }}" class="ms-5">
                                </div>
                                <div class="col-5">
                                    <p class="mb-0 ms-5">{{ $blog->created_at->format('F d') }}</p>
                                </div>

                            </div>
                            <p class="p-3 green-text mb-0">Read More</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>


</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollToTopButton = document.getElementById("scrollToTopButton");

        window.addEventListener("scroll", function() {
            if (window.scrollY >= 300) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        });

        scrollToTopButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
</script>

@endsection
