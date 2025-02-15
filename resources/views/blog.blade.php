@extends('layouts.app')
@section('content')
@section('title', 'Blog')
<style>
    .latestPosts {
        text-decoration: none;
        color: black;
    }
</style>
<section>

    <div class="container mt-5">
        <img src="{{ asset('/images/blog.svg') }}" class="img-fluid">
    </div>
    <div class="back250">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4">

                    <div class="row">
                        <form action="{{ route('blog-search') }}" method="GET">
                            @csrf
                            <div class="input-group col-md-4">
                                <input name="search" class="form-control border border-end-0 rounded-0" type="search"
                                    placeholder="Search" id="example-search-input" value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-outline-secondary border border-start-0 rounded-0"
                                        type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="card p-4 mt-4">

                        <p class="category">Categories</p>
                        <p class="mb-0">Tips</p>
                        <hr>
                        <p class="mb-0">Management</p>
                        <hr>
                        <p class="mb-0">Property</p>
                        <hr>
                        <p class="mb-0">Finance</p>
                        <hr>
                        <p class="mb-0">Finance</p>
                        <hr class="mb-0">


                    </div>

                    <div class="card p-4 mt-4">
                        <p class="category">Recommendation</p>
                        <p class="fw-bold">Latest posts</p>

                        @foreach ($blogs as $index => $blog)
                            @if ($index < 2)
                                <a class="latestPosts" href="{{ route('insideBlog', $blog) }}">
                                    <div class="row mt-3">
                                        <div class="col-12 col-md-4 col-lg-4">

                                            <img src="{{ asset('Image/blog/' . $blog->image) }}" class="img-fluid">
                                        </div>
                                        <div class="col-12 col-lg-8 col-sm-8">
                                            <p class="fw-bold mb-0">{{ $blog->title }}</p>
                                            <div class="d-flex flex-wrap align-items-center">
                                                <img src="{{ asset('/images/1.svg') }}" class="img-fluid me-1">
                                                <p class="my-1 fw-bold">Dreamwell Team</p>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center">
                                                <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                                <p class="my-1">{{ $blog->created_at->format('F d') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach

                        <hr>

                        <p class="fw-bold ">Popular Tags</p>
                        <div class="row">
                            <div class=" col-lg-6 col-xl-4 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 ">House</p>
                                </div>

                            </div>




                            <div class=" col-lg-6 col-xl-4 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0">tips</p>
                                </div>

                            </div>

                            <div class=" col-lg-6 col-xl-4 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0">apartment</p>
                                </div>

                            </div>

                            <div class=" col-lg-6 col-xl-4 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0">design</p>
                                </div>

                            </div>

                            <div class=" col-lg-6 col-xl-4 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0">property</p>
                                </div>

                            </div>

                            <div class=" col-lg-6 col-xl-4 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0">house style</p>
                                </div>

                            </div>


                        </div>

                    </div>

                    <img src="{{ asset('/images/Rectanglecard.svg') }}" class="img-fluid">
                    <img src="{{ asset('/images/down.svg') }}" class="img-fluid">
                    <img src="{{ asset('/images/video.svg') }}" class="img-fluid mt-4">

                </div>

                <div class="col-lg-8">
                    <div class="row ">
                        @foreach ($blogs as $blog)
                            <div class="col-12 col-md-6 col-lg-6 mt-2">
                                <div class="card shadow border-0 rounded-4">
                                    <img src="{{ asset('Image/blog/' . $blog->image) }}" class="img-fluid">
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
                                    <a href="{{ route('insideBlog', $blog) }}">
                                        <p class="p-3 green-text mb-0">Read More</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="row mt-5 pb-5">
                        <div class="col-2"></div>
                        <div class="col-md-8 col-sm-8 col-lg-8">
                            <nav class="mt-4" aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link border-0 bg-transparent" href="#"
                                            aria-label="Previous">
                                            <img src="{{ asset('/images/leftarr.svg') }}" class="img-fluid ">
                                        </a>

                                    </li>
                                    <li class="page-item active"><a class="page-link rounded" href="#">1</a>
                                    </li>
                                    <li class="page-item" aria-current="page">
                                        <a class="page-link rounded" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link rounded" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link border-0 bg-transparent" href="#"
                                            aria-label="Next">
                                            <img src="{{ asset('/images/rightarr.svg') }}" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-2"></div>


                    </div>

                </div>
            </div>
        </div>

        <section>
            <div class="mt-3 pb-5">
                <p class="partner mb-5 text-center">Our Collaborative Partner</p>
                <div class="" style="background-color: rgb(250,250 ,250 );">
                    <div class="container">
                        <img src="{{ asset('/images/partner.svg') }}" class="img-fluid">
                    </div>
                </div>


            </div>
        </section>


    </div>

</section>

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
