<?php
//connect to data base
$db = mysqli_connect("localhost", "root", "", "manish");
// insert part
if (isset($_POST['submit'])) {

    extract($_POST);
//insert query
    $sql = "INSERT INTO `crud`(`id`, `name`, `email`, `mobile`,`city`) VALUES (NULL,'$name','$email','$mobile','$city')";
    $res = mysqli_query($db, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bootstrap Template -One</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles.css" rel="stylesheet" />
    <style>
        #click1:hover {
            color: blue;
            border: 1px solid #751fff;
            background-color: rgb(0, 0, 0);
            box-shadow: 1px 0px 15px 6px blue;
            transition: 0.50s;

        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="#page-top">Web Developer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Welcome to my website</h1>
                <h2 class="masthead-subheading mb-0">I am Manish Srivas</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll" id="click1">Learn More</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="01.svg" alt="manishdeveloper" /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">THE WEB DEVELOPER
                        </h2>
                        <p>Designing user interfaces and navigation menus. <br> Writing and reviewing code for sites,
                            typically HTML,or JavaScript.<br>
                            Integrating multimedia content onto a site.<br> Testing web applications.<br>
                            Troubleshooting problems with performance or user experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid " src="02.svg" alt="manishdeveloper" /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">We work for you</h2>
                        <p>A Web Developer is a professional who is responsible for the design and construction of
                            websites. They ensure that sites meet user expectations by ensuring they look good, run
                            smoothly and offer easy access points with no loading issues between pages or error
                            messages.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="03.svg" alt="manishdeveloper" /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4"> source of knowledge</h2>
                        <p>Albert Einstein saying that all of our knowledge comes from experiences that we have thought
                            out our entire life, and we learn from these experiences to shape our decisions and
                            actions..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <div class="container p-3 mt-5  text-center text-white" style="background-color:#f13775;">

        <h1 data-aos="fade-right">Our Projects&nbsp;&nbsp;<i class="fas fa-folder-open"></i></h1>

    </div>

    <div class="container mt-5">

        <div class="row text-center  ">
            <div class="col shadow p-3 mb-5 bg-body rounded" style="margin-right:10px;"><i
                    class="fas fa-folder-open fa-3x text-primary"></i>
                <h3>HTML</h3>
                <p>The HyperText Markup Language or HTML is the standard markup language for documents designed to be
                    displayed in a web browser</p>

            </div>
            <div class="col   shadow p-3 mb-5 bg-body rounded style=" margin-right:10px;"><i
                    class="fas fa-folder-open fa-3x text-info"></i>
                <h3>CSS</h3>
                <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document
                    written in a markup language such as HTML or XML..</p>
            </div>
            <div class="col   shadow p-3 mb-5 bg-body rounded" style="margin-right:10px;"><i
                    class="fas fa-folder-open fa-3x text-success"></i>
                <h3>Javascript</h3>
                <p>JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies
                    of the World Wide Web, alongside HTML and CSS. </p>
            </div>
            <div class="col   shadow p-3 mb-5 bg-body rounded" style="margin-right:10px;"><i
                    class="fas fa-folder-open fa-3x text-warning"></i>
                <h3>Jquery</h3>
                <p>jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as
                    well as event handling, CSS animation, and Ajax. It is free, open-source software</p>
            </div>
            
    

        <!-- 2nd -->
</div>
        <div class="col text-center mt-3" style="color:#f13775;"><h1 data-aos="fade-right">Contact As <i class="fas fa-comment-dots"></i></h1>
            <hr></div>


<form class="row g-3 my-3" method="POST">
  <div class="col-md-6 ">
    <label for="inputName4" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control"  name="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputNumber=" class="form-label">Number</label>
    <input type="number" class="form-control"  name="mobile" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control"  name="city" required>
  </div>
  <div class="col text-center mt-3" style="color:#3c37f1;"><button type="submit" name="submit"
      class="btn btn-outline-primary">Submit</button>
      


      <!-- <div class="col">
                <input type="submit" name="submit" class="btn btn-primary">
            </div> -->


</form>
<br>
<div class="col text-center mt-3" style="color:#f13775;"><h1 data-aos="fade-right">Github Profile <i class="fa-brands fa-github"></i></h1>
            <hr></div>
            <div class="card" style="width: 18rem;">
  <img src="https://avatars.githubusercontent.com/u/76111668?v=4" class="card-img-top" alt="https://avatars.githubusercontent.com/u/76111668?v=4">
  <div class="card-body">
  <a href="https://github.com/manishdeveloper333"  class="stretched-link" style="text-decoration:none;">Connect With Github Profile</a>

  </div>
</div>
<br>


<!-- end -->

        <!-- Footer-->
        <footer class="py-5 bg-black my-5">
            <div class="container px-5">
                <p class="m-0 text-center ">
                    <br>
                    <a href="##"><i class="fab fa-whatsapp  text-white"></i></a>&nbsp;&nbsp;
                    <a href="##"><i class="fab fa-facebook-f  text-white"></i></a>&nbsp;&nbsp;
                    <a href="##"><i class="fab fa-instagram  text-white"></i></a>&nbsp;&nbsp;
                    <a href="##"><i class="fab fa-youtube text-white"></i></a>&nbsp;&nbsp;
                    <a href="##"><i class="fab fa-github text-white"></i></a>&nbsp;&nbsp;
                    <a href="##"><i class="fab fa-twitter  text-white"></i></a>&nbsp;&nbsp;
            </div>
            <br>
            <div class="container px-5">
                <p class="m-0 text-center text-white small">Copyright &copy; manishdeveloper333.github.io 2022</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>
