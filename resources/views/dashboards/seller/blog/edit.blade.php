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
</style>

@extends('layouts.adminlayout')
@section('container')
@section('title', 'Update Blog')
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


        <div class="mainCard pl-5 pr-5">
            <div class="ml-2"> <a href="{{ route('blog.index') }}"><i class="fa-solid fa-arrow-left mb-4"></i></a>
            </div>
            <div class="secCard bg-white rounded-lg drop-shadow-xl">

                @if (session('success'))
                    <div class="alert alert-success ">{{ session('success') }}</div>
                @endif
                @if (session('Error'))
                    <div class="alert alert-danger ">{{ session('Error') }}</div>
                @endif
                <div class="card-header">
                    <h3 class="card-title">Update Blog</h3>
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
                                        <input type="file" name="image"
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
                                        <input type="text" name="title" value="{{ $blog->title }}"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="name">
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content" id="summernote" cols="30" rows="10"
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
                                <div class="flex">
                                    <input type="submit" name="submit" id="submit" value="Update Blog"
                                        class="btn btn-primary">
                                    <button type="button" id="add-more-content" class="btn btn-outline-success">Add
                                        More
                                        Content</button>
                                </div>
                                {{-- <p>OR</p> --}}

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
                        <input type="file" name="sub_image[]" class="image" accept="image/*">
                        <img id="output" src="{{ asset('Image/blog/' . $subBlog->sub_image) }}"
                            width="80px" class="mt-1">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" value="{{ $subBlog->sub_title }}" name="sub_title[]" class="form-control" placeholder="Sub Title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="sub_description[]" value="{{ $subBlog->sub_description }}" id="summernote" cols="30" rows="10"
                            class="form-control @error('description') is-invalid @enderror">{{ $subBlog->sub_description }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger mb-3 ml-2 remove-content" data-content-id="${contentCounter}">Remove Content</button>
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
