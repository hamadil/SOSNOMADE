<?php require "config/config.php"; ?>
<?php require "libs/App.php"; ?>
<?php require "includes/header.php"; ?>
<?php 


    $query = "SELECT * FROM foods WHERE meal_id=1";
    $app = new App;
    $meals_1 = $app->selectAll($query);


    $query = "SELECT * FROM foods WHERE meal_id=2";
    $app = new App;
    $meals_2 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id=3";
    $app = new App;
    $meals_3 = $app->selectAll($query);


    $query = "SELECT * FROM reviews";
    $app = new App;
    $reviews = $app->selectAll($query);

?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Bienvenue sur notre <br>Association SOS NOMADE</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">NOUS SOMMES UNE ASSOCIATION QUI OEUVRE POUR L'EDUCATION ET LA PROTECTION DES ENFANTS NOMADES DU CAMP DE REFUGIER MBERRA</p>
                            <a href="<?php echo APPURL; ?>/contact.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Rejoignez-nous </a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Educations des Enfants Nomades</h5>
                                <p>L'éducation représente un pilier fondamental dans la mission de S.O.S NOMADE. En offrant un accès équitable à l'éducation, l'association s'engage à briser les barrières qui limitent souvent les opportunités d'apprentissage pour les enfants nomades. À travers des salles de classe adaptées, des programmes pédagogiques innovants et un environnement propice à l'épanouissement</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Protection des Enfants </h5>
                                <p>L'association S.O.S NOMADE veille à fournir un environnement sûr et sécurisé aux enfants nomades en mettant en place des protocoles de protection stricts pour prévenir toute forme d'abus ou d'exploitation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Accompagnement Sociale</h5>
                                <p> S.O.S NOMADE s'engage à fournir un soutien psychosocial essentiel aux enfants nomades et à leurs familles, en mettant en place des activités et des services qui favorisent le bien-être émotionnel et social. Des séances de groupe, des conseils individuels et des activités ludiques sont proposés pour aider les enfants à surmonter les traumatismes liés à la vie en camp de réfugiés.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/2.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/6.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/7.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/5.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Bienvenue a </i>Sos Nomade</h1>
                        <p class="mb-4">S.O.S NOMADE, une association dédiée à soutenir et protéger les enfants nomades, en les intégrant dans le système éducatif et en veillant à leur bien-être. Notre engagement envers l’éducation, l’hygiène et la sécurité des enfants nomades au camp de réfugiés de M’Berra est au cœur de notre mission.  »</p>
                        <p class="mb-4">Chaque action que nous entreprenons vise à créer un impact positif et durable dans la vie de ces enfants, en leur offrant un avenir meilleur et des conditions de vie décentes. Rejoignez-nous dans cette noble cause et ensemble, construisons un avenir prometteur pour les générations futures des communautés nomades.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">12</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">ans d'</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Abdallah Ag Mohamed</p>
                                        <h6 class="text-uppercase mb-0">Responsable de L'association</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">lire plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Notre Blog</h5>
                    <h1 class="mb-5">Les Articles les plus populaires</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                
                                <div class="ps-3">
                                    <small class="text-body">2024</small>
                                    <h6 class="mt-n1 mb-0">Articles</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                             
                                <div class="ps-3">
                                    <small class="text-body">2023</small>
                                    <h6 class="mt-n1 mb-0">Articles</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                
                                <div class="ps-3">
                                    <small class="text-body">2022</small>
                                    <h6 class="mt-n1 mb-0">Articles</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach($meals_1 as $meal_1) : ?>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_1->image; ?>" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?php echo $meal_1->name; ?> </span>
                                                   
                                                </h5>
                                                <small class="fst-italic"><?php echo $meal_1->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_1->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                             
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($meals_2 as $meal_2) : ?>

                                <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_2->image; ?>" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span><?php echo $meal_2->name; ?></span>
                                                       
                                                    </h5>
                                                    <small class="fst-italic"><?php echo $meal_2->description; ?></small>
                                                    <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_2->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                                </div>
                                        </div>
                                </div>
                                <?php endforeach; ?>
                            </div>    
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php foreach($meals_3 as $meal_3) : ?>

                                        <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_3->image; ?>" alt="" style="width: 80px;">
                                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                                <span><?php echo $meal_3->name; ?></span>
                                                                
                                                            </h5>
                                                            <small class="fst-italic"><?php echo $meal_3->description; ?></small>
                                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_3->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                                        </div>
                                                </div>
                                        </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->

        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Notre Equipe</h5>
                    <h1 class="mb-5">Les Acteurs membres de L'association </h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Abdallah Ag Mohamed</h5>
                            <small>President  de L'Association .</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/me.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mohamed Ag Bakrene</h5>
                            <small>Membre </small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/me.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Hamadile Ag Bakrene</h5>
                            <small>Membre</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/me.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ousmane Ag Oumar</h5>
                            <small>Membre</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Temoignage</h5>
                    <h1 class="mb-5">Les Differentes Temoignages des personnes sur notre Association!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php foreach($reviews as $review) : ?>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            <?php echo $review->review; ?>
                        </p>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;"> -->
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $review->username; ?></h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

 <?php require "includes/footer.php"; ?>    