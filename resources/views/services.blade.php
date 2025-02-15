<style>
    .ourserviesUnderline {
        text-decoration: none;
    }

    .ourserviesUnderline p {
        color: black;
    }
</style>

@extends('layouts.app')
@section('content')
@section('title', 'Our Services')
<section>
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 col-sm-5 col-md-7 col-lg-7">
                <p class="gray-color mt-5 mb-0 sub-cat">Home / Our <span style="color: black;"><b>Services</b></span> </p>
                <a class="ourserviesUnderline" href="{{ route('contact') }}">
                    <p class="interested mb-0">Our Services</p>
                </a>
                <p class="navigate sub-cat">Navigate through the landscape of some of our most well-received campaigns!
                </p>
            </div>
            <div class="col-1"></div>
            <div class="col-6 col-sm-5 col-md-3 col-lg-3">
                <img src="{{ asset('/images/element.svg') }}" class="img-fluid">
            </div>
        </div>

        <div class="row second-row">
            <div class="col-1"></div>
            <div class="col-4 col-sm-4 col-md-5 col-lg-5 mt-5">
                <p class="interested">INVESTMENT
                    CONSULTANCY</p>
                <p class="newaddition gray-color">At Monarch International, we take pride in offering a premier
                    investment consulting service that
                    is tailored to meet your unique financial goals. Our team of highly skilled and experienced
                    advisors understands the intricacies of the ever-changing market landscape and knows how to
                    craft an ideal approach for you.
                    Using our advanced knowledge of the most current markets, we effortlessly navigate through
                    investment opportunities to create customized strategies that align perfectly with your
                    objectives and budget. Our deep understanding of industry trends ensures that we stay ahead
                    of the curve, giving you a competitive edge in your investment journey. Transparency is a
                    cornerstone of our services. As your investment partner, we will keep you well-informed and
                    engaged throughout the entire process. With Monarch International, you can rest assured that
                    your financial well-being is in expert hands.</p>
                <button class="btn new-color px-3 mt-lg-3 mt-xl-3 mt-md-3 mt-1 sub-cat">More</button>
            </div>
            <div class="col-6 col-sm-6 col-md-5 col-lg-5">
                <img src="images/building.svg" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-lg-7 col-sm-7 col-6"></div>
            <div class="col-1"></div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-4">
                <img src="images/Element (1).svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row third-row">
            <div class="col-1"></div>
            <div class="col-md-5 col-lg-5 col-sm-5 col-5 mt-5 mt-sm-5 pt-4 pt-sm-4 mt-lg-0">
                <img src="images/building1.svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
            <div class="col-md-5 col-sm-5 col-lg-4 col-5 mt-lg-2 mt-xl-2 mt-5 mt-sm-5 mt-md-5 pt-md-4 pt-sm-4 pt-4">
                <p class="big-asset">ASSET
                    MANAGEMENT</p>
                <p class="gray-color newaddition">Monarch International's asset management experts, with extensive
                    experience in organizationalasset management and investment policy, excel at navigating a dynamic
                    environment. Our goal
                    is to empower you to make the most of your wealth and live a fulfilling life. Our dedicated team
                    members are passionate about helping you achieve your financial goals and providing
                    exceptional advice, planning, and service.
                    We work closely with our clients, taking the time to understand their individual circumstances,
                    and then implementing innovative and long-term asset management solutions. Keeping your
                    investment goals at the forefront, we keep you informed about new opportunities that can
                    increase the value of your assets.</p>

                <button class="btn new-color px-3 mt-lg-3 mt-xl-3 mt-md-3 mt-1 sub-cat">More</button>

            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 col-md-7 col-sm-7 col-lg-7">
            </div>
            <div class="col-1"></div>
            <div class=" col-6 col-md-3 col-sm-3 col-lg-3">
                <img src="images/element.svg" class="img-fluid">
            </div>
        </div>

        <div class="row four-row">
            <div class="col-1"></div>
            <div class="col-4 col-sm-4 col-md-5 col-lg-5 mt-5">
                <p class="interested">PROFESSIONAL
                    CONSULTATION</p>
                <p class="newaddition gray-color">At Monarch International, our professional consultation is founded on
                    years of experience and a
                    comprehensive understanding of the market. With our extensive industry knowledge,
                    long-standing expertise, and up-to-date awareness of market trends, we offer personalized
                    solutions to meet our clients' property needs.
                    Each team member is a distinguished leader in their respective fields, providing dedicated and
                    unparalleled knowledge to address every requirement. Leveraging Monarch International's
                    broader research, expertise, and resources, we collaboratively curate solutions that prioritize
                    innovation, quality, flexibility, and value for money.
                    From strategy to implementation, we support our clients successfully in every market they
                    operate in, ensuring their goals are achieved with confidence and efficiency.</p>
                <button class="btn new-color px-3 mt-3 sub-cat">More</button>
            </div>
            <div class="col-6 col-md-5 col-sm-6 col-lg-5 mt-5 mt-sm-5 pt-5 pt-sm-5">
                <img src="images/building.svg" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-7 col-lg-7 col-sm-7"></div>
            <div class="col-1"></div>
            <div class="col-4 col-md-3 col-lg-3 col-sm-3">
                <img src="images/Element (1).svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row third-row">
            <div class="col-1"></div>
            <div class="col-6 col-md-5 col-lg-5 col-sm-5 mt-5 mt-sm-5 pt-4 pt-sm-4 mt-lg-0">
                <img src="images/building1.svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
            <div class="col-4 col-md-4 col-sm-4 col-lg-4 mt-5 mt-sm-5 mt-md-5 pt-md-4 pt-sm-4 pt-4">
                <p class="sales">MARKETING AND SALES</p>
                <p class="gray-color newaddition">At Monarch International, our dedicated specialists are determined to
                    lead the market by
                    executing proven sales approaches and effective marketing solutions that consistently boost
                    sales. We understand the crucial link between marketing and sales, and our experts are here to
                    demonstrate its significance. By engaging and nurturing customers throughout the marketing,
                    sales, and service cycles, we foster advocacy and loyalty, driving long-term success.
                    Our goal-oriented, data-driven programs will take your sales and marketing efforts to new
                    heights, reflected in your bottom line. With years of experience and a track record of success in
                    diverse industries, our digital marketing consultants bring a wealth of expertise to the table.
                    They are adept at highlighting issues, breaking through obstacles, and offering fresh
                    perspectives on old problems, ultimately adding significant value to your business and
                    generating great returns and rewards.At Monarch International, we are committed to propelling your
                    business growth through
                    strategic marketing and sales initiatives.</p>

                <button class="btn new-color px-3 mt-3 sub-cat">More</button>

            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 col-md-7 col-sm-7 col-lg-7">
            </div>
            <div class="col-1"></div>
            <div class="col-6 col-md-3 col-sm-3 col-lg-3">
                <img src="images/element.svg" class="img-fluid">
            </div>
        </div>

        <div class="row four-row">
            <div class="col-1"></div>
            <div class="col-4 col-md-5 col-sm-5 col-lg-5 mt-5">
                <p class="interested">PROJECT
                    MANAGEMENT</p>
                <p class="newaddition gray-color">Monarch International's project management team is highly skilled and
                    dedicated to overseeing
                    every aspect of a project, from the broad 50,000-foot perspective to the finest details. With
                    their extensive expertise, knowledge, and skills, they excel at providing comprehensive and
                    lifelong project management services.
                    From project inception to construction and renovation, our team ensures seamless execution. They
                    also
                    handle all rental contracts, sales, and purchases with the utmost professionalism and efficiency,
                    ensuring
                    the success and smooth progression of every project they undertake.</p>
                <button class="btn new-color px-3 mt-3 sub-cat">More</button>
            </div>
            <div class="col-6 col-md-5 col-sm-5 col-lg-5 mt-5 mt-sm-5 pt-5 pt-sm-5">
                <img src="images/building.svg" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-7 col-lg-7 col-sm-7"></div>
            <div class="col-1"></div>
            <div class="col-4 col-md-3 col-lg-3 col-sm-3">
                <img src="images/Element (1).svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row third-row">
            <div class="col-1"></div>
            <div class="col-5 col-md-5 col-lg-5 col-sm-5 mt-5 mt-sm-5 pt-4 pt-sm-4 mt-lg-0">
                <img src="images/building1.svg" class="img-fluid">
            </div>
            <div class="col-1"></div>
            <div class="col-4 col-md-4 col-sm-4 col-lg-4 mt-lg-2 mt-5 mt-sm-5 mt-md-5 pt-md-4 pt-sm-4 pt-5">
                <p class="big-asset1">AN OVERVIEW
                    OF MARKET</p>
                <p class="gray-color newaddition">Our expert market research consultants excel at analyzing the
                    external factors influencing real
                    estate market growth. They compile this data into easily understandable research reports,
                    aiding our clients in making informed decisions. We delve into various aspects, including real
                    estate end-markets, dynamics, competition mapping, and customer requirements, providing a
                    holistic perspective.
                    Backed by a team of experienced real estate analysts and research specialists, we thoroughly
                    evaluate properties of interest, assessing their financial viability and ensuring thorough
                    preparation for your endeavors.
                    Our commitment to transparency means you will always receive an honest and forthright
                    market analysis tailored to your specific needs and budgetary requirements.</p>

                <button class="btn new-color px-3 mt-3 sub-cat">More</button>

            </div>
        </div>

    </div>

</section>

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
    <div class="container mt-1 mt-lg-5 mt-md-5 pt-lg-5 pt-md-5 pt-2">
        <img src="images/backimage.svg" class="img-fluid mb-0">

        <div class="row dream-home">
            <div class="col-1 col-lg-2 col-md-2"></div>
            <div class="col-10 col-lg-8 col-md-8 back-image">
                <div class="d-flex justify-content-center">
                    <div class="col-12 col-lg-8 col-md-8">
                        <p class="mt-5 -5 mx-5 dream-house pt-5">Let’s Find Your Dream House with Monarch International
                            !</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-light btn-sm dream-home-btn">Book your dream home</button>
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
                                    <p class="mb-0 ms-5">{{ $blog->created_at }}</p>
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

<section class="services mt-lg-5 pt-lg-5 mt-2 pt-2 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
                <p class="size20">Our Services</p>
                <p class="size40">Why Choose Monarch ?</p>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
                <p class="size16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus velit morbi
                    consectetur ipsum commodo vulputate ultrices. Magna habitant enim non gravida mi sapien viverra
                    .Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus velit morbi consectetur ipsum
                    commodo vulputate ultrices. Magna habitant enim non gravida mi sapien viverra .</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                    <img src="{{ asset('/images/group1.svg') }}" class="img-fluid mt-3 img-size">
                    <p class="better mt-2">Better Values</p>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">

                            <p class="mt-3 gray-color">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Rhoncus
                                velit morbi consectetur</p>


                        </div>
                        <div class="col-2"></div>
                    </div>


                    <a href="{{ route('about') }}" class="text-decoration-none learnmore">
                        <p class="mt-4 learn-color">Learn More</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                    <img src="{{ asset('/images/group2.svg') }}" class="img-fluid mt-3 img-size">
                    <p class="better mt-2">Better Values</p>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">

                            <p class="mt-3 gray-color">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Rhoncus
                                velit morbi consectetur</p>


                        </div>
                        <div class="col-2"></div>
                    </div>


                    <a href="{{ route('about') }}" class="text-decoration-none learnmore">
                        <p class="mt-4 learn-color">Learn More</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mt-5 pt-5 rounded border-0 shadow text-center">
                    <img src="{{ asset('/images/group3.svg') }}" class="img-fluid mt-3 img-size">
                    <p class="better mt-2">Better Values</p>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">

                            <p class="mt-3 gray-color">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Rhoncus
                                velit morbi consectetur</p>


                        </div>
                        <div class="col-2"></div>
                    </div>


                    <a href="{{ route('about') }}" class="text-decoration-none learnmore">
                        <p class="mt-4 learn-color">Learn More</p>
                    </a>
                </div>
            </div>

        </div>

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
