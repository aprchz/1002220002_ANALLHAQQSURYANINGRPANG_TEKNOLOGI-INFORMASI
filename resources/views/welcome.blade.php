
<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Galeri Berkembang</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Galeri Berkembang</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Galeri Berkembang</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Isinya impruvisasi master GUWEIZ setiap tahun.</h2>
                        <a class="btn btn-primary" href="#about">Mulai Tur</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">GUWEIZ</h2>
                        <p class="text-white-50">
                            The Singapore-born artist Zheng Wei Gu, better known as Guweiz, has only been in the art scene for a few years. His fascination with art came at the age of 16 when he started watching YouTube tutorials on anime drawings. Over the next few years, Guweiz honed his skills and eventually started landing more professional gigs. His digital paintings and illustrations have now exploded all over the internet as he takes on video games and anime characters. His captivating digital paintings and illustrations have even been featured in a card game and for promotional art for the Hollywood movie Ghost in a Shell. Looking at his artwork, it is no surprise why his captivating art has become so popular.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-midhead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>GUWEIZ</h4>
                            <p class="text-black-50 mb-0">Previously, the work he created was more realistic and had a fantasy impression with various pop colors. As time went on, he began to delve into the anime drawing style with a Japanese influence.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">The Beginning</h4>
                                    <p class="mb-0 text-white-50">In the early years of working, GUWEIZ struggled to find the right style to patent, so he kept switching between rough anime and pop styles. Only at the end of 2020 did he find joy in the anime-realism style.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Present</h4>
                                    <p class="mb-0 text-white-50">Now, GUWEIZ is more confident with his anime-realism style, as evidenced by the release of two books that tell the story of how he struggled to find a style for his painting style.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Free Consultation!</h2>
                        <form id="contactForm" action='{{url('feedback')}}' method='post'>
                         @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" type="text" value = '{{ Session::get('name')}}' id = "name" placeholder="Enter your name..." required />
                                <label for="name">Full name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" type="email"  value = '{{ Session::get('email')}}' id = "email" placeholder="name@example.com" required />
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone" type="tel" value = '{{ Session::get('phone')}}' id = "phone" placeholder="(+62)82324113156)" required />
                                <label for="phone">Phone number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" type="text" value = '{{ Session::get('message')}}'' id = "message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Kudus, Jawa Tengah</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">anallhaqqsuryaningprang@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+62 823 2411 5674</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Makasih Tomodachi Reviewer ! Widagdo Alsawi Ezha Udins</div></footer>
        <script src="{{ URL::asset('assets/js/app.js') }}" ></script>
        <script src="{{ URL::asset('assets/js/bootstrap.js') }}" ></script>
        <script src="{{ URL::asset('assets/js/scripts.js') }}" ></script>
    </body>
</html>
