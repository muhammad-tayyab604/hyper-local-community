@extends('layouts.app')
@section('content')
@section('title', 'Contact Us')
<section>
    <div class="container-fluid">
        <div class="row">

            <div class="map-location d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.256882266985!2d73.11318133435114!3d33.56098946100269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfece2410eb449%3A0x3d828c0b5b3b7da8!2sPhase%202%20Bahria%20Town%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696844915449!5m2!1sen!2s"
                    width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- <img src="images/eager.svg" class="img-fluid"> -->

            <div class="row">
                <div class="col-lg-2"></div>
                <div class=" col-lg-8">
                    <div class="card p-4 rounded-4 contact border-0">
                        <p class="interested text-center">Contact Us</p>
                        <div class="row">
                            <div class="col-sm-6 col-12 contactusform">
                                <div class="mb-3">
                                    <label class="form-label">Your Name*</label>
                                    <input type="text" class="form-control" placeholder="Write your name here"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Email*</label>
                                    <input type="text" class="form-control" placeholder="Write your email here"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone*</label>
                                    <input type="text" class="form-control" placeholder="Write your phone here"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Message*</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid gap-2 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                    <button class="btn new-color px-5 rounded-4">Submit</button>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="row mt-3">

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-2">
                            <div class="card border-0 p-1 p-sm-3 p-md-3 p-lg-3 rounded-3 address">
                                <img src="images/cont1.svg" class="img-fluid call mb-2">
                                <p class="">Our Address</p>
                                <p class="address-text mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                    random text.</p>
                                <p class="address-text mb-lg-4">Contrary to popular belief, Lorem Ipsum is not
                                    simply random text.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-2">
                            <div class="card border-0 p-1 p-sm-3 p-md-3 p-lg-3 rounded-3 address">
                                <img src="images/cont2.svg" class="img-fluid call mb-2">
                                <p class="">Email Us</p>
                                <p class=" mb-1">Info@abc.com.pk</p>
                                <p class=" mb-1">Info@abc.com.pk</p>
                                <p class=" mb-1">Info@abc.com.pk</p>
                                <p class=" mb-1">Info@abc.com.pk</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-2">
                            <div class="card border-0 p-1 p-sm-3 p-md-3 p-lg-3 rounded-3 address">
                                <img src="images/cont3.svg" class="img-fluid call mb-2">
                                <p class=" mb-0">Call Us</p>
                                <div class="d-flex">
                                    <img src="images/call2.svg" class="img-fluid call2 me-1">
                                    <p class="my-1">0314 1234567</p>

                                </div>
                                <div class="d-flex">
                                    <img src="images/call2.svg" class="img-fluid call2 me-1">
                                    <p class="my-1">0314 1234567</p>

                                </div>
                                <div class="d-flex">
                                    <img src="images/call2.svg" class="img-fluid call2 me-1">
                                    <p class="my-1">0314 1234567</p>

                                </div>
                                <div class="d-flex">
                                    <img src="images/call3.svg" class="img-fluid call2 me-1">
                                    <p class="my-1">0314 1234567</p>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-lg-2"></div>

            </div>
        </div>
    </div>


</section>


<section>
    <div class="container mt-5">
        <div class="row">
            <div class=" col-lg-6">
                <div class="d-flex justify-content-center">
                    <img src="images/quotation.svg" class="img-fluid">

                </div>
            </div>
            <div class=" col-lg-5">
                <div class="green-back rounded-4">
                    <div class="d-flex justify-content-center">
                        <img src="images/dots.svg" class="ms-5 img-fluid" style="z-index: 5;">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid dreamwell mb-5 pb-5">
        <div class="row mb-5 pb-5">
            <div class="col-4 col-md-4 col-sm-4 col-lg-4">
                <p class="satis">Satisfied Dreamwell’s Clients</p>

            </div>
            <div class="col-md-8 col-sm-8 col-lg-8">
                <div id="clientsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="card rounded-4  border-1 p-3">

                                        <p class="blue-area">Blue Area -Office</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/time.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Businnes Hour</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/email.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Email</p><br>
                                                <p class="up-text">ourstudio@hello.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/call5.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Phone</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/loca.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Location</p><br>
                                                <p class="up-text">8819 Ohio St. South Gate, California 90280</p>
                                            </div>
                                        </div>




                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="card rounded-4  border-1 p-3">

                                        <p class="blue-area">Bahira Town Phase-7</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/time.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Business Hour</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/email.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Email</p><br>
                                                <p class="up-text">ourstudio@hello.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/call5.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Phone</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/loca.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Location</p><br>
                                                <p class="up-text">8819 Ohio St. South Gate, California 90280</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="card rounded-4  border-1 p-3">

                                        <p class="blue-area">DHA-Phase-2</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/time.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Businnes Hour</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/email.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Email</p><br>
                                                <p class="up-text">ourstudio@hello.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/call5.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Phone</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/loca.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Location</p><br>
                                                <p class="up-text">8819 Ohio St. South Gate, California 90280</p>
                                            </div>
                                        </div>




                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="card rounded-4  border-1 p-3">

                                        <p class="blue-area">Blue Area -Office</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/time.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Businnes Hour</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/email.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Email</p><br>
                                                <p class="up-text">ourstudio@hello.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/call5.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Phone</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/loca.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Location</p><br>
                                                <p class="up-text">8819 Ohio St. South Gate, California 90280</p>
                                            </div>
                                        </div>




                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="card rounded-4  border-1 p-3">

                                        <p class="blue-area">Bahira Town Phase-7</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/time.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Business Hour</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/email.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Email</p><br>
                                                <p class="up-text">ourstudio@hello.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/call5.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Phone</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/loca.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Location</p><br>
                                                <p class="up-text">8819 Ohio St. South Gate, California 90280</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="card rounded-4  border-1 p-3">

                                        <p class="blue-area">DHA-Phase-2</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/time.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Businnes Hour</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/email.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Email</p><br>
                                                <p class="up-text">ourstudio@hello.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/call5.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Phone</p><br>
                                                <p class="up-text">+271 386-647-3637</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/loca.svg" class="img-fluid me-1 my-3">

                                            </div>
                                            <div class="col-10">
                                                <p class="hour">Location</p><br>
                                                <p class="up-text">8819 Ohio St. South Gate, California 90280</p>
                                            </div>
                                        </div>




                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>



        </div>
        <div class="row">
            <div class="col-3 col-md-1 col-sm-1 col-lg-1 me-0">
                <img src="images/left.svg" class="img-fluid" onclick="prevsatisSlide()" style="cursor: pointer;">

            </div>
            <div class="col-3 col-md-1 col-sm-1 col-lg-1 me-5">
                <img src="images/right.svg" class="img-fluid" onclick="nextsatisSlide()" style="cursor: pointer;">

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
