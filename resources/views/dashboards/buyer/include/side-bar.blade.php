<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    li a p {
        font-weight: 800;
        font-size: 100px !important;
    }

    .logoutBTN {
        /* margin-top: 26rem; */
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-color: rgba(128, 128, 128, 0.541); */
        /* padding-top: 12px; */
        /* border-radius: 15px; */
        /* transition: all .2s ease; */
    }

    .logoutBTN button {
        margin-top: 18rem;
        background-color: rgba(128, 128, 128, 0.445);
        padding-left: 50px;
        padding-right: 50px;
        font-weight: 600;
        transition: all .2s ease;
    }

    .logoutBTN button:hover {
        background-color: rgba(128, 128, 128, 0.692);

    }


    .lgoout:hover {
        background-color: none !important;
    }

    .lgoout a:hover {
        /* background-color: none !important; */
        font-weight: 600;
    }



    #log:hover {
        background-color: #b8b8b84b !important;
        border-radius: 3px !important;
        color: #ffffff;
        /* margin-top: -1px !important; */
    }

    #log {
        margin: 4px 0px !important;
        color: #ffffff;

    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4 w-full">
    <!-- Brand Logo -->
    {{-- <a href="{{ route('dashboard') }}" class="brand-link"> --}}
        <img src="{{ asset('logo/logo.svg') }}" alt="Property logo" height="30px" class="">
        <span class="brand-text font-weight-light text-white mr-3 p-1"></span>
    {{-- </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column flex justify-center items-center" data-widget="treeview"
                role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item">

                        <i class="fa fa-gauge text-lg"></i>
                        <p class="text-lg  text-white ml-3">
                            Dashboard

                        </p>
                </li>


                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">

                        <i class="fa fa-house text-lg"></i>
                        <p class="text-lg  text-white ml-3">
                            Property

                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('show.category') }}" class="nav-link">

                        <i class="fa-solid fa-gear text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-3">
                            Category

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('show.subcategory') }}" class="nav-link ">

                        <i class="fa-solid fa-gears text-lg" aria-hidden="true"></i>
                        <p class="font-bold text-lg  text-white ml-2">
                            Sub Category

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.testimonials') }}" class="nav-link">

                        <i class="fa-solid fa-comments text-lg" aria-hidden="true"></i>
                        <p class="text-lg text-white ml-2">
                            Testimonials

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('information.form.index') }}" class="nav-link }}">

                        <i class="fa-solid fa-code-pull-request text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-2">
                            Tour Forms

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('project.index') }}" class="nav-link">

                        <i class="fa-solid fa-building text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-3">
                            Projects

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('availability.index') }}" class="nav-link">

                        <i class="fa-solid fa-building-circle-check text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-2">
                            Availability
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('availability.index') }}" class="nav-link">

                        <i class="fa-solid fa-location-dot text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-3">
                            Locations
                        </p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="{{ route('team.index') }}" class="nav-link">

                        <i class="fa-solid fa-people-group text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-3">
                            Team

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('agent.index') }}" class="nav-link">

                        <i class="fa-solid fa-user-tie text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-3">
                            Agents

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.enquiryForm') }}" class="nav-link">

                        <i class="fa-solid fa-question text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-3">
                            Enquiry

                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('blog.index') }}" class="nav-link">

                        <i class="fa-solid fa-blog text-lg" aria-hidden="true"></i>
                        <p class="text-lg  text-white ml-2">
                            Blogs

                        </p>
                    </a>
                </li>
                <ul class="nav flex-column mt-8">
                    <li class="nav-item logoutBTN">
                        <form method="POST" action="{{ route('logout') }}" id="logout">
                            @csrf
                            <button type="submit" class="btn btn-link text-white">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <span class="text-lg">Log Out</span>
                            </button>
                        </form>
                    </li>
                </ul>



            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
