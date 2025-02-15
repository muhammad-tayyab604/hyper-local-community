@extends('layouts.app')
@section('content')
@section('title', 'Blog Details')
<style>
    .latestPosts {
        text-decoration: none;
        color: black;
    }
</style>
<section>

    <div class="container">

        <div class="row">
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 mt-5">


                <div class="row">
                    <form action="{{ route('inside-blog', ['id' => $blog]) }}" method="GET">
                        @csrf
                        <div class="input-group col-md-4">
                            <input name="search" class="form-control border border-end-0 rounded-0" type="search"
                                placeholder="Search" value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary border border-start-0 rounded-0"
                                    type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>


                <div class="card p-2 p-md-4 p-lg-4 p-xl-4 mt-4">

                    <p class="category">Categories</p>
                    <p class="mb-0 sub-cat">Tips</p>
                    <hr>
                    <p class="mb-0 sub-cat">Management</p>
                    <hr>
                    <p class="mb-0 sub-cat">Property</p>
                    <hr>
                    <p class="mb-0 sub-cat">Finance</p>
                    <hr>
                    <p class="mb-0 sub-cat">Finance</p>
                    <hr class="mb-0">


                </div>


                <div class="card p-2 p-md-4 p-lg-4 p-xl-4 mt-4">
                    <p class="category">Recommendation</p>
                    <p class="fw-bold sub-cat">Latest posts</p>
                    @foreach ($latestBlogs as $index => $blog)
                        @if ($index < 2)
                            <a class="latestPosts" href="{{ route('insideBlog', $blog) }}">
                                <div class="row mt-3">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <img src="{{ asset('Image/blog/' . $blog->image) }}" class="img-fluid">
                                    </div>
                                    <div class="col-12 col-lg-8 col-sm-8">
                                        <p class="fw-bold mb-0 sub-cat">{{ $blog->title }}</p>
                                        <div class="d-flex">
                                            <img src="{{ asset('/images/1.svg') }}" class="img-fluid me-1">
                                            <p class="my-1 fw-bold sub-cat">Dreamwell Team</p>
                                        </div>
                                        <div class="d-flex">
                                            <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                            <p class="my-1 sub-cat">{{ $blog->created_at->format('F d') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach

                    <hr>

                    <p class="fw-bold sub-cat">Popular Tags</p>
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                            <div class="card text-center m-0 py-1">
                                <p class="m-0 p-0 sub-cat">House</p>
                            </div>

                        </div>




                        <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                            <div class="card text-center m-0 py-1">
                                <p class="m-0 p-0 sub-cat">tips</p>
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                            <div class="card text-center m-0 py-1">
                                <p class="m-0 p-0 sub-cat">apartment</p>
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                            <div class="card text-center m-0 py-1">
                                <p class="m-0 p-0 sub-cat">design</p>
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                            <div class="card text-center m-0 py-1">
                                <p class="m-0 p-0 sub-cat">property</p>
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                            <div class="card text-center m-0 py-1">
                                <p class="m-0 p-0 sub-cat">style</p>
                            </div>

                        </div>


                    </div>

                </div>

                <a href="">
                    <img src="{{ asset('/images/Rectanglecard.svg') }}" class="img-fluid">
                    <img src="{{ asset('/images/down.svg') }}" class="img-fluid">

                </a>
                <img src="{{ asset('/images/customer.svg') }}" class="img-fluid mt-5">
                <img src="{{ asset('/images/Price.svg') }}" class="img-fluid mt-5">
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

                        <label class="sub-cat">Message</label>
                        <input type="text" name="message" class="form-control">
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('Error'))
                            <p class="alert alert-danger">{{ session('Error') }}</p>
                        @endif
                        <button type="submit" class="btn my-green white-text mt-2 sub-cat">Submit a tour
                            request</button>

                </div>
                </form>

                <img src="{{ asset('/images/video.svg') }}" class="img-fluid mt-4">


            </div>

            <div class="col-8 col-sm-8 col-md-9 col-lg-9">

                <p class="gray-color mt-5 mb-0 sub-cat">Home / Blog/ <span style="color: black;"><b>Most
                            {{ $blog->title }}</b></span> </p>
                <p class="interested mb-0">{{ $blog->title }}</p>

                <div class="row">

                    <div class="col-4 col-lg-3 col-xl-3">
                        <div class="d-flex">
                            <img src="{{ asset('/images/1.svg') }}" class="img-fluid me-1">
                            <p class="my-1 sub-cat">Dreamwell Team</p>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3 col-xl-3">
                        <div class="d-flex">
                            <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                            <p class="my-1 sub-cat">{{ $blog->created_at->format('d F') }}</p>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3 col-xl-3">
                        <div class="d-flex">
                            <img src="{{ asset('/images/comment.svg') }}" class="img-fluid me-1">
                            <p class="my-1 sub-cat">{{ $totalComments }} Comments</p>
                        </div>
                    </div>

                </div>

                <img src="{{ asset('Image/blog/' . $blog->image) }}" class="img-fluid mt-2">

                <p class="mt-4 gray-color sub-cat">{{ $blog->content }}</p>

                @php
                    $i = 0;
                @endphp
                @foreach ($sub_blogs as $sub_blog)
                    @php
                        $i++;
                    @endphp
                    <p class="my-head">{{ $i }} {{ $sub_blog->sub_title }} </p>

                    <p class="gray-color sub-cat">{{ $sub_blog->sub_description }}</p>

                    <img src="{{ asset('Image/blog/' . $sub_blog->sub_image) }}" class="img-fluid">
                @endforeach

                <p class="sub-cat">Article Tags</p>

                <div class="row">

                    <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                        <div class="border rounded text-center">
                            <p class="my-1 sub-cat">house</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                        <div class="border rounded text-center">
                            <p class="my-1 sub-cat">living space</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                        <div class="border rounded text-center">
                            <p class="my-1 sub-cat">london</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                        <div class="border rounded text-center">
                            <p class="my-1 sub-cat">apartment</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                        <div class="border rounded text-center">
                            <p class="my-1 sub-cat">property</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                        <div class="border rounded text-center">
                            <p class="my-1 sub-cat">living area</p>
                        </div>
                    </div>

                </div>


                <div class="row mt-4">

                    <div class="col-6 col-md-3 col-lg-3 col-sm-3">
                        <img src="{{ asset('/images/Facebook1.svg') }}" class="img-fluid">
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 col-sm-3">
                        <img src="{{ asset('/images/Twitter1.svg') }}" class="img-fluid">
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 col-sm-3 mt-1 mt-sm-0">
                        <img src="{{ asset('/images/Linkedin1.svg') }}" class="img-fluid">
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 col-sm-3 mt-1 mt-sm-0">
                        <img src="{{ asset('/images/Pinterest1.svg') }}" class="img-fluid">
                    </div>

                </div>

                <hr class="mt-5">

                <div class="row">

                    <div class="col-lg-8 col-md-8 col-xl-8 col-6">
                        <p class="fw-bold sub-cat">Comments <span class="gray-color">({{ $totalComments }})</span>
                        </p>
                    </div>

                    <div class="col-lg-4 col-xl-4 col-md-4 col-6">
                        <div class="d-flex">

                            <p class="me-2 my-1 sub-cat">Sort By</p>
                            <div class="dropdown ms-2">
                                <button class="btn btn-light dropdown-toggle sub-cat" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Top Categories
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="my-comment mt-5">
                    @foreach ($comments as $comment)
                        <div class="d-flex mt-5">
                            <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                            <div class="d-flex flex-column">

                                <p class="my-2 mb-0 ms-lg-2 ms-xl-2 ms-md-2 ms-3 fw-bold sub-cat">{{ $comment->name }}
                                </p>
                                <div class="d-flex">

                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">{{ $comment->created_at->format('F d, Y') }}</p>

                                </div>


                            </div>

                        </div>
                        <p class="mt-3 sub-cat">{{ $comment->comment }}
                        </p>
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">11 Likes</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/comment.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">2 replies</p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <div class="row mt-5">

                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="btn my-green white-text rounded sub-cat">More Comments</button>
                        </div>

                    </div>
                    <form action="{{ route('submit.comment') }}" method="POST">
                        @csrf
                        <div class="card border-0 rounded-4 gray-back p-md-3 p-lg-3 p-xl-3 p-2 mt-2">
                            <div class="ms-lg-5 mt-lg-5 me-lg-5 ms-2 me-2 mt-3">

                                <p class="fw-bold sub-cat">Your Comment</p>

                                <p class="sub-cat">Your email address will not be published. Required fields are marked
                                    *
                                </p>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-xl-6 col-12">
                                        <div class="mb-3">
                                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                            <label for="exampleFormControlInput1" class="form-label sub-cat">Your
                                                Name*</label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xl-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label sub-cat">Email*</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label sub-cat">Comment*</label>
                                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label sub-cat" for="flexCheckDefault">
                                        Save my name and email in this browser for the next time I comment.
                                    </label>
                                </div>
                                @if (session('commentSubmit'))
                                    <p class="alert alert-success">{{ session('commentSubmit') }}</p>
                                @endif
                                @if (session('commentNotSubmit'))
                                    <p class="alert alert-danger">{{ session('commentNotSubmit') }}</p>
                                @endif
                                <button class="btn my-green white-text mt-3 px-5 sub-cat">Submit</button>

                            </div>
                        </div>
                    </form>


                </div>

            </div>

        </div>



        <section class="blogs mt-5 pb-5">
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
                                            <p class="mb-0 ms-5">{{ $blog->created_at->format('d F') }}</p>
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
