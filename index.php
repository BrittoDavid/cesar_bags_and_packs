<!doctype html>
<?php session_start(); ?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Home</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-ebook-landing.css" rel="stylesheet">
<!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="http://localhost/cesar_bags_and_packs/index.html">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>Cesar B&P</span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="productos/shop.html">Productos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="product/product.php">Productos 2</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Info</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>
                        </ul>

                        <!-- Declaración de datos -->
                        <?php

                            // Simulación de datos de inicio de sesión
                            if (!isset($_SESSION['nombre'])) {
                                $_SESSION['nombre'] = ''; // Nombre vacío si no está registrado
                            }
                            if (!isset($_SESSION['correo'])) {
                                $_SESSION['correo'] = ''; // Correo vacío si no está registrado
                            }
                            if (!isset($_SESSION['imagen'])) {
                                $_SESSION['imagen'] = 'Images/predeterminada.png'; // Imagen predeterminada si no se ha subido una
                            }

                            ?>

                        <!-- Botón de registro a foto de perfil -->

                        <div class="d-flex">
                            <a href="perfil.php">
                                <img src="<?php echo $_SESSION['imagen']; ?>" alt="Perfil" style="
                                        width: 90px; 
                                        height: 90px; 
                                        object-fit: cover; 
                                        border-radius: 50%; 
                                        border: 2px solid #ccc; 
                                        box-shadow: 0 0 5px rgba(0,0,0,0.1);
                                        cursor: pointer;
                                        transition: transform 0.3s ease;
                                    "
                                    onmouseover="this.style.transform='scale(1.1)';" 
                                    onmouseout="this.style.transform='scale(1)';">
                            </a>
                        </div>
                </div>
        </nav>
            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                            <h6>Introducing product</h6>

                            <h1 class="text-white mb-4"> C B&P Productos garantizados</h1>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3" > Discover More </a>

                            <a href="#section_3" class="link link--kale smoothscroll"> Conoce a David </a>
                        </div>
                    
                        <div class="hero-image-right col-lg-2  col-lg-0 mt-3 mt-lg-0">
                            <img src="images/education-online.books.png" class="hero-image" alt="education online books">
                        </div>

                    </div>
                </div>
                

               <?php if (isset($_SESSION['nombre']) && isset($_SESSION['correo'])): ?>
                    <div style="background:#e0f7fa; padding:10px; border-radius:5px; margin-bottom:15px;">
                        <strong>¡Hola, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</strong><br>
                        Tu correo es: <em><?php echo htmlspecialchars($_SESSION['correo']); ?></em>
                    </div>
                <?php endif; ?>



            </section>
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">


        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">

                                <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>

    </div>

    <!-- End Banner Hero -->

            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">2,564 reviews</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-2"></section>


            <section class="book-section section-padding d-flex justify-content-center align-items-center" id="section_2">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center text-center">
            
                        <div class="col-lg-6 col-12 d-flex justify-content-center">
                            <img src="images/tablet-screen-contents.png" class="img-fluid mx-auto d-block" style="max-width: 80%;" alt="Bolso">
                        </div>
            
                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>Moderno &amp; Creativo</h6>
                                <h2 class="mb-4">Acerca de la tienda</h2>
            
                                <p class="text-justify">
                                    Credit goes to <a rel="nofollow" href="https://freepik.com" target="_blank">FreePik</a>. 
                                    Te damos la bienvenida a este mundo donde la atención al cliente y la felicidad de una sonrisa genuina 
                                    son lo que nos motiva a mejorar cada día.
                                </p>
            
                                <p class="text-justify">
                                    Este es un emprendimiento creado hace más de 10 años con el propósito de vender productos de calidad 
                                    pensando en la necesidad común de las personas que transitan por la zona durante todo el año.
                                </p>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>                       


            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h6>Bienvenidos</h6>

                            <h2 class="mb-5">Tu destino para morrales, bolsos y maletines de calidad</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link smoothscroll" href="#item-1">Introduction</a>

                                    <a class="nav-link smoothscroll" href="#item-2">Chapter 1: <strong>El éxito</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-3">Chapter 2: <strong>La perseverancia</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-4">Chapter 3: <strong>El miedo es el enemigo </strong></a>

                                    <a class="nav-link smoothscroll" href="#item-5">Chapter 4: <strong>No es cuestión de suerte</strong></a>
                                </nav>
                            </nav>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                                <div class="scrollspy-example-item" id="item-1">
                                    <h5> Cesar Bags and Packs</h5>

                                    <p>Creemos que cada aventura comienza con el accesorio adecuado. Ya sea para el colegio, el trabajo o tus viajes, tenemos el bolso perfecto para ti. Diseños modernos, materiales resistentes y comodidad garantizada, todo en un solo lugar.</p>

                                    <p><strong>Nuestra misión es</strong> inspirar y acompañar cada paso de tu camino con productos funcionales, duraderos y con estilo. Porque un buen bolso no solo lleva tus cosas, también refleja tu personalidad.</p>

                                    <blockquote class="blockquote">Como siempre he dicho, hoy y siempre quiero ser mi propio jefe</blockquote>

                                    <p>Apoyamos el talento local y fomentamos el espíritu emprendedor. Cada compra contribuye al crecimiento de una iniciativa joven, hecha con pasión y dedicación.</p>
                                </div>

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>El motor del éxito</h5>

                                    <p>Todo gran emprendimiento comienza con una pasión. Las personas exitosas no ven su trabajo como una obligación, sino como una oportunidad para crear, innovar y dejar su huella en el mundo. </p>

                                    <p>Si amas lo que haces, cada reto se convierte en una nueva posibilidad de crecimiento y cada obstáculo, en un aprendizaje valioso.</p>

                                    <div class="row">
                                        <div class="col-lg-6 col-10 mb-4">
                                            <img src="images/Businessman.jpg" class="scrollspy-example-item-image img-fluid" style="max-width: 80%;" alt="">
                                        </div>

                                        <div class="col-lg-6 col-10 mb-4">
                                            <img src="images/Success.jpg" class="scrollspy-example-item-image img-fluid" style="max-width: 96%" alt="">
                                        </div>
                                    </div>

                                    <p>El único obstáculo que tienes para llegar al éxito es tu propia mentalidad: solo lo que eres capaz de imginar, serás capaz de lorar.</p>
                                </div>

                                <div class="scrollspy-example-item" id="item-3">
                                    <h5>La perseverancia vence cualquier barrera</h5>

                                    <p>El camino del emprendimiento no siempre es fácil, pero quienes triunfan entienden que el fracaso no es el final, sino una lección para mejorar.</p>
                                    <p>La clave está en aprender de cada caída, ajustar la estrategia y <strong>seguir adelante con determinación</strong>.</p>

                                    <p>Los emprendedores exitosos no se conforman con lo tradicional; buscan nuevas soluciones, piensan diferente y se atreven a romper esquemas. La creatividad y la capacidad de adaptación permiten evolucionar constantemente, encontrando oportunidades donde otros solo ven limitaciones.</p>

                                    <div class="row align-items-center margin-left-10">
                                        <div class="col-lg-6 col-12">
                                            <img src="images/LogoSuccess.png" class="img-fluid" Style="max-width: 90%; margin-left:20% ;" alt="">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <p>El camino hacia el éxito <strong>no se construye de la noche a la mañana</strong>, sino con constancia y determinación. Como decía Henry Ford:</p>

                                            <p><strong>“El fracaso es simplemente la oportunidad de comenzar de nuevo, esta vez de manera más inteligente.”</strong></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="scrollspy-example-item" id="item-4">
                                    <h5>El miedo es el mayor enemigo de los sueños</h5>

                                    <p>Emprender es como lanzarse en paracaídas: al principio sientes vértigo, pero una vez que saltas, descubres un mundo lleno de posibilidades.</p>

                                    <p>Steve Jobs lo expresó claramente: "Recordar que vas a morir es la mejor manera de evitar la trampa de pensar que tienes algo que perder".</p>

                                    <p>No dejes que el miedo te paralice, atrévete a intentarlo y confía en tu capacidad de aprender y adaptarte.</p>

                                    <img src="images/Cesar.jpg" class="scrollspy-example-item-image img-fluid mb-3" style="width: 750px;" alt="">
                                </div>

                                <div class="scrollspy-example-item" id="item-5">
                                    <h5>El éxito no es cuestión de suerte, sino de preparación</h5>

                                    <p>Muchos ven el éxito de los demás y lo llaman suerte, pero en realidad es el resultado de años de esfuerzo, sacrificio y aprendizaje.</p>

                                    <p>Como decía Seneca: “La suerte es lo que sucede cuando la preparación se encuentra con la oportunidad.”</p>

                                    <p><strong>Emprender es como sembrar un árbol:</strong> si cuidas la semilla con paciencia y dedicación, un día cosecharás sus frutos.</p>

                                    <blockquote class="blockquote">"No fracasé, solo descubrí 10,000 maneras que no funcionaban."</blockquote>

                                    <p>Dijo Thomas Edison, tras miles de intentos fallidos para inventar la bombilla</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="author-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/portrait-mature-smiling-authoress-sitting-desk.jpg" class="author-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h6> Conoce a David </h6>

                            <h2 class="mb-4"> Nuestro emprendedor </h2>

                            <p> Esta es la persona que ha logrado hacer de un pequeño negocio, una experiencia increible en la comercialización de Bolsos y Mochilas.</p>

                            <p>"David", como le conocen en todas partes, es quien se hace cargo del local y la mercancia, pero quien también te recibirá con una sonrisa, amabilidad y además, una sed por cumplir tus expectativas que hacen de él, la persona más confiable.</p>
                        </div>

                    </div>
                </div>
            </section>


            <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>Reviews</h6>

                            <h2>Lo que las perosnas están diciendo...</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Sandy</span>

                                        <strong class="d-block text-white">Costumer</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>4.5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="mb-0">No solo encontré el producto que deseaba, sino que fueron tan amables y pacientes conmigo, como en ningún otro local.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-5 my-lg-0">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">John</span>

                                        <strong class="d-block text-white">Producer</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>4.8</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="mb-0">Valió la pena un poco de espera, David recorrió muchos lugares hasta dar con la maleta que necesitaba. Muchas gracias!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Candy</span>

                                        <strong class="d-block text-white">VP, Design</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="mb-0">Mi favorito. Atención super amable, quien me recomendó los productos, hizo el domicilio y fue muy paciente, muy respetuoso.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                    <div class="col-lg-5 col-12 mx-auto">
                    
                        <script>
                            const params = new URLSearchParams(window.location.search);
                            if (params.get('exito')) {
                              document.write('<div class="alert alert-success text-center">✅ ¡Tu mensaje fue enviado con éxito!</div>');
                            } else if (params.get('error')) {
                              document.write('<div class="alert alert-danger text-center">❌ Hubo un problema. Intenta de nuevo.</div>');
                            }
                          </script>                          

                        <form class="custom-form ebook-download-form bg-white shadow"
                        action="products/guardar.php"
                        method="post"
                        role="form">
                      <div class="text-center mb-5">
                          <h2 class="mb-1">Contacto</h2>
                      </div>
                  
                      <div class="ebook-download-form-body">
                          <div class="input-group mb-4">
                              <input type="text" name="ebook_form_name" class="form-control" placeholder="Your Name" required>
                              <span class="input-group-text">
                                  <i class="custom-form-icon bi-person"></i>
                              </span>
                          </div>
                  
                          <div class="input-group mb-4">
                              <input type="email" name="ebook_email" class="form-control" placeholder="your@company.com" required>
                              <span class="input-group-text">
                                  <i class="custom-form-icon bi-phone"></i>
                              </span>
                          </div>

                          <div class="ebook-download-form-body">
                            <div class="input-group mb-4">
                                <input type="text" name="ebook_phone" class="form-control" placeholder="Número de teléfono" required>
                                <span class="input-group-text">
                                    <i class="custom-form-icon bi-phone"></i>
                                </span>
                            </div>

                          <div class="col-lg-8 col-md-10 col-8 mx-auto">
                              <button type="submit" class="form-control">Solicitar</button>
                          </div>
                      </div>
                  </form>
        
                    </div>  
                                
                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5"> No dudes en escribirnos </h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                Cali, Colombia
                            </p>

                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    010-020-0340
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    cesar@gmail.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Copyright © 2048 ebook company
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by C B&P</a></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
