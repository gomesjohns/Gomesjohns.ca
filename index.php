    <?php include('nav.php');?>

    <!--Header -->
    <div id="scene" class="header">
        <!-- Parallax layer 1 -->
        <div class="layer" data-depth="0.02" >
            <!-- Background div -->
            <div class="headerBg js-fullheight" style="background-image: url(assets/images/Header_BG.jpg);"
            data-stellar-background-ratio="0.9"></div>
        </div>
        <!-- Background overlay -->
        <div class="overlay"></div>
        <!-- Parallax layer 2 -->
        <div class="layer headerTitle" data-depth="0.05">
            <!-- Text animation -->
            <h1 class="text-wrap">
                <a class="typewrite" data-period="5000" data-type='[ "Full Stack Developer", "Android Programmer", "UI Designer", "3D Artist"]'></a>
            </h1>
        </div>
        <!-- Parallax layer 3-->
        <div class="layer headerSubject" data-depth="0.1"><img class="" src="assets/images/Header_Subject.png"></div>
        
    </div>

    <!-- Featured Projects -->
    <div class="pt-5 container">
        <div class="row pt-2 justify-content-center">
            <div class="col-lg heading-section text-center">
                <h1>Featured Projects</h1>
                <div class="hr"></div>
            </div>
        </div>
       
        <!-- Row 1 -->
        <div class="row py-5 no-gutters">
            <div class="col-md-4 ftco-animate p-2 ">    
                <div class="project-block img d-flex align-items-end bgPos-top" style="background-image: url(assets/images/Trip_Android/TripApp_SC6.jpg);">
                    <div class="project-overlay"></div>
                        <a href="project-trip_android.php" class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-external-link-alt fa-2x"></i>
                        </a>
                    
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Android Development</span>
                            <h2><a href="work-single.html">Trip Planner App</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate p-2">
                <div class="project-block img d-flex align-items-end" style="background-image: url(assets/images/CFMS_Angular/CFMS_SC1.JPG);">
                    <div class="project-overlay"></div>
                    <a href="project-CFMS.php" class="icon d-flex justify-content-center align-items-center">
                        <i class="fas fa-external-link-alt fa-2x"></i>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Web App Development</span>
                            <h2><a href="work-single.html">Customer Feedback System</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate p-2 ">
                <div class="project-block img d-flex align-items-end bgSize-auto bgPos-right" style="background-image: url(assets/images/Invasion_WebGame/Invasion_SC2.JPG);">
                    <div class="project-overlay"></div>
                    <a href="project-invasion.php" class="icon d-flex justify-content-center align-items-center">
                        <i class="fas fa-external-link-alt fa-2x"></i>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>Web Game Development</span>
                            <h2><a href="work-single.html">Invasion</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate p-2 ">    
                <div class="project-block img d-flex align-items-end bgPos-top" style="background-image: url(assets/images/UI_Design_Appliance_Android/UI_Design_Appliance_SC4.jpg);">
                    <div class="project-overlay"></div>
                    
                        <a href="project-UI_Design_Appliance.php" class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-external-link-alt fa-2x"></i>
                            <div class=""></div>
                        </a>
                    
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>UI Design</span>
                            <h2><a href="work-single.html">Appliance Management App</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate p-2">
                <div class="project-block img d-flex align-items-end bgPos-left" style="background-image: url(assets/images/CableUnravel_3DAnimation/CableUnravel_SC1.jpg);">
                    <div class="project-overlay"></div>
                    <a href="project-cableUnravel_3DAnimation.php" class="icon d-flex justify-content-center align-items-center">
                        <i class="fas fa-external-link-alt fa-2x"></i>
                    </a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            <span>3D Animation</span>
                            <h2><a href="work-single.html">Centennial College Tedx 2018</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </div>
    
    <?php include('footer.php');?>