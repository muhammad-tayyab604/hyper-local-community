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

    .backgroundColorForComments {
        background-color: rgb(223, 223, 223);
        padding: 24px;
    }
</style>

@extends('layouts.adminlayout')
@section('container')
@section('title', 'View Blog')
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
        <div id="DeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <form action="{{ route('comment.delete') }}" method="POST">
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

        <div class="mainCard pl-5 pr-5 pb-4">
            <div class="ml-2"> <a href="{{ route('blog.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">

                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('error') }}</div>
                @endif
                <div class="card-header">
                    <h3 class="card-title">View Blog</h3>
                </div>
                <div class="card-body">

                    <div class="basic-form">

                        <form action="{{ route('blog.update', $blog->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="imageDiv">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Image</label>
                                        <input type="file" name="image" disabled readonly
                                            class=" image @error('image') is-invalid @enderror" accept="image/*"
                                            onchange="loadFile(event)">
                                        <img id="output" src="{{ asset('Image/blog/' . $blog->image) }}"
                                            width="80px" class="mt-1">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" readonly value="{{ $blog->title }}"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="name">
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" readonly cols="30" rows="10"
                                        class="form-control @error('content') is-invalid @enderror" value="">{{ $blog->content }}</textarea>
                                    @error('content')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div id="dynamic-content-container">
                        <!-- Dynamic content will be added here -->
                    </div>
                    <div class="col-sm-10">
                    </div>
                    </form>
                </div>
                <hr class="mt-5">
                <div class="row ml-4">

                    <div class="col-lg-8 col-md-8 col-xl-8 col-6">
                        <p class="fw-bold sub-cat">Comments <span class="gray-color">({{ $totalComments }})</span></p>
                    </div>

                </div>

                <div class="my-comment mt-5 backgroundColorForComments">

                    @foreach ($comments as $comment)
                        <div class="d-flex">
                            <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                            <div class="d-flex justify-content-center flex-column">
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

                            <div class="col-lg-5 col-md-5 col-xl-5 col-9">
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
                            <a href="{{ route('comment.delete') }}"><i class="fas fa-trash"></i></a>

                        </div>
                    @endforeach

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


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function() {
        let contentCounter = 1;

        // Function to add dynamic content
        function addDynamicContent() {
            const dynamicContent = `
            @foreach ($subBlogs as $subBlog)

            <form>
                 <div class="dynamic-content" data-content-id="${contentCounter}">
                    <hr>
                    <h5>Additional Content ${contentCounter} (Optional)</h5>
                    <div class="imageDiv">
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Image</label>
                        <input readonly disabled type="file" name="sub_image[]" class="image" accept="image/*">
                        <img id="output" src="{{ asset('Image/blog/' . $subBlog->sub_image) }}"
                            width="80px" class="mt-1">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input readonly type="text" value="{{ $subBlog->sub_title }}" name="sub_title[]" class="form-control" placeholder="Sub Title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea readonly name="sub_description[]" value="{{ $subBlog->sub_description }}" cols="30" rows="10"
                            class="form-control @error('description') is-invalid @enderror">{{ $subBlog->sub_description }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                </form>
            @endforeach

                `;

            $('#dynamic-content-container').append(dynamicContent);
            contentCounter++;
        }

        // Function to remove dynamic content
        function removeDynamicContent(contentId) {
            $(`[data-content-id="${contentId}"]`).remove();
        }

        // Handle "Add More Content" button click
        $('#add-more-content').on('click', function() {
            addDynamicContent();
        });

        // Handle "Remove Content" button click
        $('#dynamic-content-container').on('click', '.remove-content', function() {
            const contentId = $(this).data('content-id');
            removeDynamicContent(contentId);
        });

        // Initial addition of dynamic content
        addDynamicContent();
    });
</script>
