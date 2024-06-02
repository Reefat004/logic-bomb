<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SDMTF - Logic Bomb" />
	<meta name="author" content="Md Reefat Jalil" />
    <title>SDMTF - Logic Bomb</title>

   <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>

    <div id="all">
    <!--loader-->
        <div id="loader">Logic
            <span class="color">Bomb</span> 
        </div>

    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>


        <div id="navigation-bar">
            <img src="images/sdmtf_logo.png" alt="logo">
        </div>


        <div id="header">
            <div id="particles"></div>
             
            <div class="header-content">
                <div class="header-content-box">

                <div class="firstline">Logic<span class="color">Bomb </span></div>
                <div class="secondline">

                Target:
                <span class="txt-rotate color" padding-left="200px" data-period="1200"data-rotate='[ "Paris, France", "Madrid, Spain", "Beijing, China", "Baghdad, Iraq", "New Delhi, India", "Damascus, Syria", "Shanghai, China", "Tokyo, Japan", "New York, USA", "Brisbane, Australia" ]'></span>
                <span class="slash">|</span> ?

                </div>
 
                </div>


                <div class="container">
                    <div class="row">

                            <div class="col-lg-6 col-md-8">
                                <div class="col-lg-12 login-form">


                                        <form method="POST">
                                            <div class="form-group">
                                                <label class="form-control-label">USERNAME</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">PASSWORD</label>
                                                <input type="password" name="password" class="form-control" i>
                                            </div>

                                            <div class="col-lg-12">
                                                
                                                <div class="col-lg-6 login-btm">
                                                    <button type="submit" class="btn btn-outline-primary">CRACK</button>
                                                </div>

                                            </div>
                                        </form>


                                </div>
                        </div>
                    </div>
                </div>


                <?php
                $mssg_pass = array("The world is safe... for now", "Good Job");
                $mssg_false = array("You are the downfall of mankind", "Millions of people's fate lie in your hands", "Find God");
                $random_mssg = "";
                if ( isset($_POST['password']) ) {
                    $pass = $_POST['password'];
                    if($pass == "osamabinladen") {
                        $random_mssg = $mssg_pass[array_rand($mssg_pass)];
                    } else {
                        $random_mssg = $mssg_false[array_rand($mssg_false)];
                    }
                }
                ?>


            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="col-lg-12">
                            <div class="col-lg-12 message">
                                <span class="txt-rotate color" padding-left="200px" data-period="1000000000" data-rotate='[ "<?= htmlentities($random_mssg); ?>"]'></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/hacker.png" alt="logo">
            </div>
    </div>

    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>
    <!--particles script-->
    <script>
    particlesJS("particles", {"particles":{"number":{"value":40,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
    </script>

</body>
</html>