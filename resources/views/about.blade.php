@extends('layouts.app')
@section('content')
@section('title', 'Property About')

<section>

    <div class="container">
        <img src="{{ asset('/images/main.svg') }}" class="img-fluid">
        <p class="gray-color mt-4">Home / <span style="color: black;"><b>About Us</b></span> </p>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="interested">Our Mission</p>
                <p>Our mission is to create long-term value for our investors through the careful stewardship of their
                    real
                    estate investments. We will take the lead in revolutionizing Pakistan's real estate industry to the
                    highest
                    standards of transparency, professionalism, and customer service.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class=" col-lg-5">
                <img src="{{ asset('/images/about.svg') }}" class="img-fluid">
            </div>
            <div class="col-1"></div>

            <div class=" col-lg-6 mt-5">
                <p class="mission">Our mission is to provide a dream home with the best possible facilities.</p>
                <p class="gray-color">Monarch International is a comprehensive Real Estate investment and brokerage firm
                    that
                    provides tailored and innovative solutions to meet the diverse needs of our esteemed clients.
                    Our research-driven approach enables us to offer a wide range of high-quality Real Estate
                    investment opportunities that deliver robust income-based returns and strong growth potential.
                    At Monarch International, we are deeply committed to providing our clients with exceptional
                    customer service, and we hold ourselves to the highest standards in this regard.</p>


            </div>

        </div>

        <div class="row gray-back mt-5 text-center p-3 rounded-3">
            <div class="col-md-3 col-lg-3 col-sm-3">
                <p class="interested mb-0">5,635</p>
                <p class="gray-color">HOUSES FOR SALE</p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-3">
                <p class="interested mb-0">234</p>
                <p class="gray-color">OPEN HOUSES</p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-3">
                <p class="interested mb-0">105</p>
                <p class="gray-color">HOUSES RECENTLY SOLD</p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-3">
                <p class="interested mb-0">301</p>
                <p class="gray-color">PRICE REDUCED</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p class="interested">Our Vision</p>
                <p>Our vision is to be the “Premier Choice Real Estate Firm” around the globe.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class=" col-lg-6 mt-5">
                <p class="mission1">A GLANCE</p>
                <p class="gray-color">Monarch International has a solid and well-established culture that is based on
                    our core values,
                    entrepreneurial approach, and operational standards. Our company’s sustainable growth is supported
                    by
                    a robust and disciplined approach to high standards of accountability in everything we do.
                    We have a defined methodology for evaluating and managing financial, operational, and strategic
                    risk.
                    Our risk identification and mitigation procedures are created to be compatible with the dynamic
                    environment of the market in which we operate.</p>
                <p class="gray-color">Our competitive advantage emanates from our culture of teamwork and our common
                    pursuit of
                    excellence. The more competent and experienced our people are, the finer the solutions for valued
                    clients become.</p>


            </div>

            <div class="col-1"></div>
            <div class=" col-lg-5">
                <img src="{{ asset('/images/about2.svg') }}" class="img-fluid">
            </div>

        </div>



        <section class="text-center">
            <div class="container-fluid mt-5">
                <p class="team">Our Teams</p>

                <div class="row justify-content-center align-content-center">
                    <nav class="navbar navbar-expand-lg m-lg-3">
                        <div class="container">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0">

                                    <li class="nav-item our-team">
                                        <a class="nav-link active bottom-border" aria-current="page"
                                            href="#executiveteam" data-bs-target="#executiveteam"
                                            onclick="showImageBox('executiveteam')">Executive Members</a>

                                    </li>
                                    <li class="nav-item our-team">
                                        <a class="nav-link bottom-border" aria-current="page" href="#champions"
                                            data-bs-target="#champions" onclick="showImageBox('champions')">Sale
                                            Champions</a>

                                    </li>

                                    <li class="nav-item our-team">
                                        <a class="nav-link " aria-current="page" href="#salesteam"
                                            data-bs-target="#salesteam" onclick="showImageBox('salesteam')">Sales
                                            Team</a>
                                    </li>

                                    <li class="nav-item our-team">
                                        <a class="nav-link " aria-current="page" href="#operationteam"
                                            data-bs-target="#operationteam"
                                            onclick="showImageBox('operationteam')">Operation Team</a>
                                    </li>
                                    <li class="nav-item our-team">
                                        <a class="nav-link " aria-current="page" href="#designteam"
                                            data-bs-target="#designteam" onclick="showImageBox('designteam')">Design
                                            Team</a>
                                    </li>
                                    <!--<li class="nav-item our-team">-->
                                    <!--    <a class="nav-link " aria-current="page" href="#mediateam"-->
                                    <!--        data-bs-target="#mediateam" onclick="showImageBox('mediateam')">Media-->
                                    <!--        Team</a>-->
                                    <!--</li>-->
                                    <li class="nav-item our-team">
                                        <a class="nav-link " aria-current="page" href="#">More</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="">
                        <hr class="line">

                    </div>

                    <div class="image-box" id="executiveteam">
                        <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM</p>
                                                <p class="team-prof">CEO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM</p>
                                                <p class="team-prof">CEO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size"
                                                    src="{{ asset('/images/icons.svg') }}">

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                    <div class="image-box" id="champions" style="display: none;">
                        <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL Champ</p>
                                                <p class="team-prof">CEO1</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM</p>
                                                <p class="team-prof">CEO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                    <div class="image-box" id="salesteam" style="display: none;">
                        <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM1</p>
                                                <p class="team-prof">CEO1</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM</p>
                                                <p class="team-prof">CEO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>


                    <div class="image-box" id="operationteam" style="display: none;">
                        <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM2</p>
                                                <p class="team-prof">CEO2</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM</p>
                                                <p class="team-prof">CEO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>


                    <div class="image-box" id="designteam" style="display: none;">
                        <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM3</p>
                                                <p class="team-prof">CEO3</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">SOHAIL AZAM</p>
                                                <p class="team-prof">CEO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3"> MUDDASSIR AZAD</p>
                                                <p class="team-prof">CMO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>


                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">ABDUL WASIF</p>
                                                <p class="team-prof">COO</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card rounded-4 shadow-sm mt-5">
                                                <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "
                                                    alt="">

                                                <p class="team-name mt-3">Damian Angelo</p>
                                                <p class="team-prof">Real Estate Agent</p>

                                                <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>


                    <!--<div class="image-box" id="mediateam" style="display: none;">-->
                    <!--    <div id="teamCarousel" class="carousel slide active" data-bs-ride="carousel">-->
                    <!--        <div class="carousel-inner">-->

                    <!--            <div class="carousel-item active">-->
                    <!--                <div class="row">-->

                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3">SOHAIL AZAM4</p>-->
                    <!--                            <p class="team-prof">CEO4</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->


                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3"> MUDDASSIR AZAD</p>-->
                    <!--                            <p class="team-prof">CMO</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->


                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3">ABDUL WASIF</p>-->
                    <!--                            <p class="team-prof">COO</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->

                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3">Damian Angelo</p>-->
                    <!--                            <p class="team-prof">Real Estate Agent</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->

                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="carousel-item">-->
                    <!--                <div class="row">-->

                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3">SOHAIL AZAM</p>-->
                    <!--                            <p class="team-prof">CEO</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->


                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3"> MUDDASSIR AZAD</p>-->
                    <!--                            <p class="team-prof">CMO</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->


                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent2.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3">ABDUL WASIF</p>-->
                    <!--                            <p class="team-prof">COO</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->

                    <!--                    <div class="col-lg-3">-->
                    <!--                        <div class="card rounded-4 shadow-sm mt-5">-->
                    <!--                            <img src="{{ asset('/images/agent1.svg') }}" class="img-fluid "-->
                    <!--                                alt="">-->

                    <!--                            <p class="team-name mt-3">Damian Angelo</p>-->
                    <!--                            <p class="team-prof">Real Estate Agent</p>-->

                    <!--                            <img class="mx-4 mb-3 img-fluid agent-size" src="images/icons.svg">-->

                    <!--                        </div>-->

                    <!--                    </div>-->

                    <!--                </div>-->
                    <!--            </div>-->


                    <!--        </div>-->


                    <!--    </div>-->

                    <!--</div>-->


                </div>

                <div class="avail text-center" style="background-color: rgb(250,250,250);">
                    <div class="d-flex justify-content-center">
                        <div class="row available">
                            <div class="col-lg-2">
                                <div class="row mt-5 pt-5">
                                    <div class=" col-6 col-md-6 col-sm-6 col-lg-6 mt-lg-5 pt-lg-5">

                                        <img src="{{ asset('/images/left.svg') }}" class="img-fluid"
                                            onclick="prevSlide()" style="cursor: pointer;">
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-6 mt-lg-5 pt-lg-5">
                                        <img src="{{ asset('/images/right.svg') }}" class="img-fluid"
                                            class="img-fluid" onclick="nextSlide()" style="cursor: pointer;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-lg-5 pt-lg-5">
                                <p class="for-avail">Availability of Space in
                                    Our Project</p>
                            </div>
                            <div class="col-lg-2 indi">
                                <i id="iconic0" class="fa-solid fa-circle iconic" onclick="goToSlide(0)"
                                    style="cursor: pointer;"></i>
                                <i id="iconic1" class="fa-solid fa-circle iconic" onclick="goToSlide(1)"
                                    style="cursor: pointer;"></i>
                                <i id="iconic2" class="fa-solid fa-circle iconic" onclick="goToSlide(2)"></i>
                                <i id="iconic3" class="fa-solid fa-circle iconic" onclick="goToSlide(3)"></i>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>


        <section class=" mt-lg-5 pt-lg-5 mt-2 pt-2">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <p class="interested">Our Services</p>
                </div>

                <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage2.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage3.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage4.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <!-- <div class="col-md-2 col-lg-2 col-sm-2">
                            <div class="card border-0">
                              <img src="images/Image4.svg" class="img-fluid">
                            </div>
                          </div>

                          <div class="col-md-2 col-lg-2 col-sm-2">
                            <div class="card border-0">
                              <img src="images/Image5.svg" class="img-fluid">
                            </div>
                          </div> -->

                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage2.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage3.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card border-0">
                                        <img src="images/roomimage4.jpg" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <!-- <div class="col-md-2 col-lg-2 col-sm-2">
                              <div class="card border-0">
                                <img src="images/Image4.svg" class="img-fluid">
                              </div>
                            </div>

                            <div class="col-md-2 col-lg-2 col-sm-2">
                              <div class="card border-0">
                                <img src="images/Image5.svg" class="img-fluid">
                              </div>
                            </div> -->

                            </div>

                        </div>



                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-md-4 col-sm-4 col-lg-4">
                        <div class="row">

                            <div class="col-6 col-md-3 col-sm-4 col-lg-3 mt-5 pt-5">

                                <img src="images/left.svg" class="img-fluid" onclick="prevvvSlide()"
                                    style="cursor: pointer;">
                            </div>
                            <div class="col-6 col-md-3 col-sm-4 col-lg-3 mt-5 pt-5">
                                <img src="images/right.svg" class="img-fluid" onclick="nextttSlide()"
                                    style="cursor: pointer;">
                            </div>
                        </div>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4 col-md-4 col-sm-4 col-lg-4 mt-5 pt-5">
                        <i id="iconicc0" class="fa-solid fa-circle iconicc" onclick="goToSlidee(0)"
                            style="cursor: pointer;"></i>
                        <i id="iconicc1" class="fa-solid fa-circle iconicc" onclick="goToSlidee(1)"
                            style="cursor: pointer;"></i>
                        <i id="iconicc2" class="fa-solid fa-circle iconicc" onclick="goToSlidee(2)"></i>
                        <i id="iconicc3" class="fa-solid fa-circle iconicc" onclick="goToSlidee(3)"></i>

                    </div>
                </div>



            </div>
        </section>

    </div>

    <section>
        <div class="mt-lg-5 mb-lg-5">
            <p class="partner mb-5 text-center">Our Collaborative Partner</p>
            <div class="" style="background-color: rgb(250,250 ,250 );">
                <div class="container">
                    <img src="{{ asset('/images/partner.svg') }}" class="img-fluid">
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container mt-lg-5 pt-lg-5 mt-2 pt-2">
            <img src="{{ asset('images/backimage.svg') }}" class="img-fluid mb-0">

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
        function prevSlide() {
            $('#teamCarousel').carousel('prev');
        }

        function nextSlide() {
            $('#teamCarousel').carousel('next');
        }

        function prevvSlide() {
            $('#featureCarousel').carousel('prev');
        }

        function nexttSlide() {
            $('#featureCarousel').carousel('next');
        }

        function prevvvSlide() {
            $('#serviceCarousel').carousel('prev');
        }

        function nextttSlide() {
            $('#serviceCarousel').carousel('next');
        }

        function prevsatisSlide() {
            $('#clientsCarousel').carousel('prev');
        }

        function nextsatisSlide() {
            $('#clientsCarousel').carousel('next');
        }


        var carousel = new bootstrap.Carousel(document.getElementById('teamCarousel'));

        function goToSlide(slideIndex) {
            carousel.to(slideIndex);
        }


        var indicators = document.querySelectorAll('.iconic');
        indicators.forEach(function(icon) {
            icon.style.color = 'lightgray';
        });


        carousel._element.addEventListener('slide.bs.carousel', function(event) {

            indicators.forEach(function(icon) {
                icon.style.color = 'lightgray';
            });


            indicators[event.to].style.color = 'darkgreen';
        });
    </script>

    <script>
        function showImageBox(imageBoxId) {
            const imageBoxes = document.querySelectorAll(".image-box");
            const navLinks = document.querySelectorAll(".nav-link");

            imageBoxes.forEach((box) => {
                box.style.display = "none";
            });

            navLinks.forEach((navLink) => {
                navLink.classList.remove("active");
            });

            document.getElementById(imageBoxId).style.display = "block";

            const clickedNavLink = document.querySelector(`[data-bs-target="#${imageBoxId}"]`);
            if (clickedNavLink) {
                clickedNavLink.classList.add("active");
            }
        }
    </script>


    <script>
        var carousell = new bootstrap.Carousel(document.getElementById('serviceCarousel'));

        function goToSlidee(index) {
            carousell.to(index);
        }


        var indicatorss = document.querySelectorAll('.iconicc');
        indicatorss.forEach(function(iconn) {
            iconn.style.color = 'lightgray';
        });


        carousell._element.addEventListener('slide.bs.carousel', function(event) {

            indicatorss.forEach(function(iconn) {
                iconn.style.color = 'lightgray';
            });


            indicatorss[event.to].style.color = 'darkgreen';
        });
    </script>
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
