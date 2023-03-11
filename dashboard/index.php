<?php 
    include_once("../partials/header.php");
    include_once("../partials/connection.php");
?>

<div class="container-fluid">
    <div id="loading" class="loading">
        <div class="loader" ></div>
    </div>
    <div class="main">
        <div id="animated_background"></div>
        <div id="home" class="home-section">
            <div class="nav-main">
                <nav class="navbar navbar-expand-lg fixed-top navbarDark navbar-dark">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img src="../image/home-logo.png" alt="home-logo" width="70" srcset=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item active" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="1500">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                <li class="nav-item" data-aos="fade-down" data-aos-delay="1500" data-aos-duration="1500">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item" data-aos="fade-down" data-aos-delay="2000" data-aos-duration="1500">
                                    <a class="nav-link" href="#skill">Skills</a>
                                </li>
                                <li class="nav-item" data-aos="fade-down" data-aos-delay="2500" data-aos-duration="1500">
                                    <a class="nav-link" href="#project">Project</a>
                                </li>
                                <li class="nav-item" data-aos="fade-down" data-aos-delay="3000" data-aos-duration="1500">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div  class="hero-main">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="hero-text">
                            <p>Hello there,</p>
                            <h1>I'm Homer Salazar</h1>
                            <h2 class="hero_desc"> <span class="auto-type"></span></h2>
                            <a type="button" class="btn dlr" href="../cv/homer_salazar.pdf" download="Homer Salazar CV">Download Resume</a>
                            <div class="mt-2">
                                <a type="button" class="btn btn-secondary shadow-none btn-github" href="https://github.com/homersalazar" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>
                                <a type="button" class="btn btn-secondary shadow-none btn-facebook" href="https://www.facebook.com/homer.salazar.5" target="_blank"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                <a type="button" class="btn btn-secondary shadow-none btn-linkedin" href="https://www.linkedin.com/in/homer-salazar-4055a11b9/" target="_blank"><i class="fa-brands fa-linkedin fa-lg" target="_blank"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-5 pt-5 pb-5 mb-5">
                        <img src="../image/homer-picture.png" class="img-fluid mt-5" alt="Your image alt text here">
                    </div>
                    <div class="col-lg-3"></div>
                </div>                
            </div>
        </div>
        <div class="service-section">
            <div class="row pb-5">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 p-4">
                    <div class="card" data-aos="fade-up">
                        <div class="card-body border-shadow">
                            <h1 class="text-center">What I can provide?</h1>
                            <div class="row mt-3">
                                <div class="col-lg-4 text-center">
                                    <i class="fa-solid fa-globe fa-3x"></i>                                  
                                    <p class="mt-3">Web Development</p>
                                    <label for="">Using HTML, CSS, JavaScript, Jquery, and PHP together allows for the creation of modern, interactive websites with advanced features and functionality.</label>                                    
                                </div>
                                <div class="col-lg-4 text-center mt-3">
                                    <i class="fa-solid fa-laptop-code fa-3x"></i>
                                    <p class="mt-3">Web Design</p>
                                    <label for="">I have the skills to develop contemporary static websites using HTML, CSS, JavaScript, and Jquery.</label>
                                </div>
                                <div class="col-lg-4 text-center mt-3">
                                    <i class="fa-solid fa-mobile-screen-button fa-3x"></i> 
                                    <p class="mt-3">Responsive Design</p>     
                                    <label for="">Capble to develop a website that adapts to various screen sizes and devices.</label>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="about-section">
            <div class="row bg-about">
                <div class="col-1"></div>
                <div class="col-lg-3 mt-4">
                    <div class="about-image-section" data-aos="zoom-in"  data-aos-duration="1500">
                        <div class="card-image"> 
                            <img src="../image/home-homer-photo.png" class="imageAboutPage" alt="">
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-lg-6">
                    <div class="about-text-section" data-aos="fade-up">
                        <h4>ABOUT ME</h4>
                        <h1>PERSONAL DETAILS</h1>
                        <p>“I am Homer! Junior web developer, I am passionately learning HTML, CSS, JavaScript, jQuery, and PHP to create dynamic and interactive websites that not only look visually appealing but also provide seamless user experience.”</p>
                        <p>I believe that being a web developer not only requires technical skills but also creativity, problem-solving abilities, and attention to detail. I am committed to honing these skills to create websites that are not only visually stunning but also user-friendly and accessible.</p>
                        <p>I am enthusiastic about the endless possibilities that web development offers and I am eager to contribute my skills to create innovative web solutions that can make a positive impact on people's lives.</p>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row bg-about">
                <div class="col-1"></div>
                <div class="col-lg-7">
                    <div class="about-goals-section" data-aos="fade-up">
                        <h1>ABOUT MY GOALS</h1>
                        <p>As a junior web developer, my goals are to gain experience building and deploying web applications; participate in code reviews and bug hunting; optimize and refactor code; collaborate with project managers, designers, and other developers; stay knowledgeable of project stakeholders' needs; and stay up-to-date with the latest web technologies and trends.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="skill" class="skill-section">
            <div class="skill-set">
                <div class="row">
                    <h1 class="text-center">MY SKILLS</h1>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mt-3 pb-5">
                        <div class="card" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row mt-4">
                                            <h5 class="card-title">Framework</h5>
                                            <div class="col mt-2">
                                                <div class="btn-group"  role="group">
                                                    <button type="button" data-image="../image/skill-laravel.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-laravel.png" alt="" width="30"></i></button>
                                                    <button type="button" data-image="../image/skill-laravel.png" class="btn button-title shadow-none">LARAVEL</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <h5 class="card-title">Front end</h5>
                                            <div class="col-lg-12">
                                                <div class="btn-group mt-2 me-2" role="group">
                                                    <button type="button" data-image="../image/skill-html.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-html.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-html.png" class="btn button-title shadow-none">HTML</button>
                                                </div>
                                                <div class="btn-group mt-2 me-2" role="group">
                                                    <button type="button" data-image="../image/skill-css.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-css.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-css.png" class="btn button-title shadow-none">CSS</button>
                                                </div>
                                                <div class="btn-group mt-2" role="group">
                                                    <button type="button" data-image="../image/skill-js.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-js.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-js.png" class="btn button-title shadow-none">JavaScript</button>
                                                </div>
                                            </div>             
                                        </div>
                                        <div class="row mt-4">
                                            <h5 class="card-title">Back end</h5>
                                            <div class="col-lg-12">
                                                <div class="btn-group mt-2 me-2" role="group">
                                                    <button type="button" data-image="../image/skill-php.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-php.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-php.png" class="btn button-title shadow-none">PHP</button>
                                                </div>
                                                <div class="btn-group mt-2" role="group">
                                                    <button type="button" data-image="../image/skill-sql.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-sql.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-sql.png" class="btn button-title shadow-none">MySQL</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <h5 class="card-title">OTHERS</h5>
                                            <div class="col-lg-12 pb-5">
                                                <div class="btn-group mt-2 me-2" role="group">
                                                    <button type="button" data-image="../image/skill-github.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-github.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-github.png" class="btn button-title shadow-none">GITHUB</button>
                                                </div>
                                                <div class="btn-group mt-2 me-2" role="group">
                                                    <button type="button" data-image="../image/skill-git.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-git.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-git.png" class="btn button-title shadow-none">GIT</button>
                                                </div>
                                                <div class="btn-group mt-2" role="group">
                                                    <button type="button" data-image="../image/skill-ps.png" class="btn btn-light text-dark shadow-none"><img src="../image/skill-ps.png" alt="" width="30"></button>
                                                    <button type="button" data-image="../image/skill-ps.png" class="btn button-title shadow-none">Photoshop</button>
                                                </div>
                                            </div>                                  
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-lg-12 mt-5">
                                                <div class="image-container">
                                                    <img src="" alt="" id="image">
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
        </div>
        <div id="project" class="project-section">
            <div class="row bg">
                <div class="col-lg-12">
                    <h1> MY PROJECTS</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-lg-3" data-aos="zoom-in-up">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/project-dts.png" alt="dts" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-3" data-aos="zoom-in-up">
                    <h5> Document Tracking System</h5>
                    <label for="">"This software that enables users to efficiently and accurately monitor the progress of documents within an organization, from creation to distribution and final approval, ensuring accountability, transparency, and compliance with established procedures."</label>
                    <a type="button" class="btn btn-primary shadow-none mt-4" href="404_page.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                    <a type="button" class="btn btn-primary shadow-none  mt-4" href="https://github.com/homersalazar/dts" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-lg-3" data-aos="zoom-in-up">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/project-sms.png" alt="supplies management system" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-3" data-aos="zoom-in-up">
                    <h5> Supplies Management System</h5>
                    <label for="">Office supplies management system streamlines the process of ordering and tracking supplies, ensuring that your workplace always has the necessary items on hand to keep your team productive and efficient.</label>
                    <a type="button" class="btn btn-primary shadow-none mt-4" href="404_page.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                    <a type="button" class="btn btn-primary shadow-none  mt-4" href="https://github.com/homersalazar/office-supply" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-lg-3" data-aos="zoom-in-up">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/project-wis.png" alt="warehouse inventory system" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-3" data-aos="zoom-in-up">
                    <h5> Warehouse Inventory System</h5>
                    <label for="">Warehouse inventory system provides real-time visibility into your inventory levels, allowing you to easily track stock levels, monitor stock movements, and optimize your warehouse operations for maximum efficiency and profitability.</label>
                    <a type="button" class="btn btn-primary shadow-none mt-4" href="404_page.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                    <a type="button" class="btn btn-primary shadow-none  mt-4" href="https://github.com/homersalazar/warehouse" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                </div>
            </div>
            <div class="row mt-5 pb-5">
                <div class="col-1"></div>
                <div class="col-lg-3" data-aos="zoom-in-up">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/project-osis.png" alt="office supplies inventory system" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-3" data-aos="zoom-in-up">
                    <h5> Office Supplies Inventory System</h5>
                    <label for="">Office supplies inventory system simplifies the process of managing your office inventory, providing you with a centralized database where you can easily track stock levels, monitor usage, and generate reports to help you make informed purchasing decisions.</label>
                    <a type="button" class="btn btn-primary shadow-none mt-4" href="http://global-store.infinityfreeapp.com/global-store/dashboard/index.php" target="_blank"><i class="fa-solid fa-eye"></i> View Site</a>
                    <a type="button" class="btn btn-primary shadow-none  mt-4" href="https://github.com/homersalazar/Global-store-php" target="_blank"><i class="fa-solid fa-code"></i> View Code</a>
                </div>
            </div>
        </div>
        <div id="contact" class="contact-section">
            <div class="row contact-bg">
                <div class="col-lg-12">
                    <h1> Contact Me</h1>
                </div>
                <div class="row pt-5">
                    <div class="col-2"></div>
                    <div class="col-lg-3 mt-4">
                        <h5>Gen T. De leon, Valenzuela City</h5>
                        <p> Philippines, 1440</p>
                        <h5>0915 504 1069</h5>
                        <p> Get in touch</p>
                        <h5>salazarhomer1@gmail.com</h5>
                        <p> Send me your email</p>
                    </div>
                    <div class="col-lg-6 ">
                        <form action="" method="POST" id="contact_me">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12 mt-4">
                                        <p class="myResult"></p>
                                        <input type="text" name="fname" id="fname" class="form-control shadow-none" placeholder="Enter your name">
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <input type="email" name="address" id="address" class="form-control shadow-none" placeholder="Enter email address">
                                    </div>
                                    <div class="col-lg-12 mt-4 ">
                                        <input type="text" name="subject" id="subject" class="form-control shadow-none" placeholder="Enter your subject (Optional)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-10 mt-4 ">
                                        <div class="form-floating">
                                            <textarea id="msg" name="msg" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 162px"></textarea>
                                            <label for="floatingTextarea2">Enter a message</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-5">
                                <div class="col-lg-8 mt-4">
                                    <a type="button" class="btn btn-secondary shadow-none me-2 social" href="https://www.facebook.com/homer.salazar.5" target="_blank"><i class="fa-brands fa-facebook fa-lg"></i></a>
                                    <a type="button" class="btn btn-secondary shadow-none me-2 social" href="https://www.instagram.com/homer.salazar.5/" target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    <a type="button" class="btn btn-secondary shadow-none  social" href="https://www.linkedin.com/in/homer-salazar-4055a11b9/" target="_blank"><i class="fa-brands fa-linkedin fa-lg" target="_blank"></i></a>
                                </div>
                                <div class="col-lg-3 mt-4 text-end">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
        </div>
        <div class="footer-section">
            <div class="row bg-dark pt-4 pb-4">
                <div class="col-lg-12 text-light text-center">
                    <img src="../image/home-logo.png" alt="Image" width="60" class="img-fluid"><span> &nbsp;Homer Salazar &#169; 2023</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include_once("../partials/footer.php");
?>

