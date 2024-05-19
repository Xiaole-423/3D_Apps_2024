<!doctype html>
<html lang="en">
  <head>
    <title>Coca Cola 3D App</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body id="bodyColor" class="body-color">

    <!--  header  -->
    <nav id="headerColor" class="navbar navbar-expand-sm navbar_cola">
        <div class="container-fluid">
            <!--  logo  -->
             <div class="logo">
                <a class="navbar-brand" href="https://users.sussex.ac.uk/~xl423/labs/lab9/index.php">
                    <h1>L</h1>
                    <h2>ocaCola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
             </div>
            
            <!--  navbar-folding  -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--  navbar  -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title data-content="Homepage of the Website" data-original-title>Home</a>
                    </li>

                    <!--
                    <li class="nav-item">
                        <a id="navAbout" class="nav-link" href="javascript:swap('about')" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="" data-content="3D Apps is a final year and postgraduate module ..." data-original-title="About Web 3D Applications">About</a>
                    </li>
                    -->

                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3d Models" data-content="There are three X3d models" data-original-title>Models</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>

                </ul>
            </div> 
        </div>
    </nav>

    <!--  multipage  -->
    <div class="container">

        <!--  home page  -->
        <div id="home">
            <!--  home page-title  -->
            <div class="row2" id="rowColor1">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="main_content1">
                            <p class="logo_h4">CocaCola</p>
                            <p class="logo_h4">Journey</p>
                        </div> 
                    </div>
                        
                    <div class="col-sm-7">
                        <div class="main_content2 ">
                            <div id="title_home" class="main_text_h1"></div>
                            <div id="subTitle_home" class="main_text_h2"></div>
                            <div id="description_home" class="main_text_p"></div>
                        </div> 
                    </div>    
                </div>
            </div>       
            
            <!--  home page-content-cola  -->
            <div class="row1" id="rowColor2">
                <div class="row">
                    <!--  home page-content-cola-description  -->
                    <div class="col-sm-5">
                        <div id="description_left" class="card_text_h2"></div>
                    </div>

                    <!--  home page-content-cola-img  -->
                    <div class="col-sm-4">
                        <div class="main_3d_image"></div>
                    </div>

                    <!--  home page-content-cola-btn  -->
                    <div class="col-sm-3">
                        <p class="card_text_h1">
                            <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" data-toggle="popover" data-trigger="hover" data-placement="bottom" title data-content="Find out more..." data-original-title>
                                <img class="img-btn" src="application/assets/images/coca_cola.jpg">
                            </a>
                            Co-Co</p>
                    </div>
                </div>
            </div>
            

            <br><br><br><br>

            <!--  home page-content-sprite  -->
            <div class="row1" id="rowColor3">
                <div class="row">
                    <!--  home page-content-sprite-description  -->
                    <div class="col-sm-3">
                        <p class="card_text_h11">
                            <a href="https://www.coca-cola.com/gb/en/brands/sprite" data-toggle="popover" data-trigger="hover" data-placement="bottom" title data-content="Find out more..." data-original-title>
                                <img class="img-btn" src="application/assets/images/sprite.jpg">
                            </a>
                            Sprite</p>
                    </div>
                    
                    <!--  home page-content-sprite-img  -->
                    <div class="col-sm-4">
                        <div class="main_3d_image22"></div>
                    </div>

                    <!--  home page-content-sprite-btn  -->
                    <div class="col-sm-5">
                        <div id="description_centre" class="card_text_h22"></div>
                    </div>
                </div>
            </div>
            

            <br><br><br><br>

            <!--  home page-content-pepper  -->
            <div class="row1" id="rowColor4">
                <div class="row">
                    <!--  home page-content-pepper-description  -->
                    <div class="col-sm-5">
                        <div id="description_right" class="card_text_h2"></div>
                    </div>

                    <!--  home page-content-pepper-img  -->
                    <div class="col-sm-4">
                        <div class="main_3d_image3"></div>
                    </div>

                    <!--  home page-content-pepper-btn  -->
                    <div class="col-sm-3">
                        <p class="card_text_h1">
                            <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" data-toggle="popover" data-trigger="hover" data-placement="bottom" title data-content="Find out more..." data-original-title>
                                <img class="img-btn" src="application/assets/images/dr_pepper.jpg">
                            </a>
                            Dr.Pep</p>
                    </div>
                </div>
            </div>
            

            <br><br><br><br><br><br>
        </div>

        <!--
        <div id="about" style="display: none;">

        </div>
        -->

        <!--  models page  -->
        <div id="models">
            <div class="row">
                <!--  models page-model card  -->
                <div class="col-sm-7">
                    <div class="card-text-left">
                        <!--  models page-model card-model select btn  -->
                        <div id="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navCoke" class="nav-link" href="#">Coke</a>
                                </li>

								<li class="nav-item">
                                    <a id="navSprite" class="nav-link" href="#">Sprite</a>
                                </li>
                                    
                                <li class="nav-item">
                                    <a id="navPepper" class="nav-link" href="#">Pepper</a>
                                </li>
                            </ul>
                        </div>

                        <!--  models page-model card-x3d  -->
                        <div class="card-body">
                            <!--  models page-model card-x3d-cola  -->
                            <div id="coke">
                                <div id="x3dModelTitle_coke" class="card-title"></div>

                                <div class="model3D">
                                    <x3d id="ColaModel"> 
                                        <scene>
                                             
                                            <inline nameSpaceName="ColaID" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/Cola.x3d"> </inline> 
                                            <!--
                                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/Cola.x3d"> </inline> 
                                            -->
                                        </scene> 
                                    </x3d>
                                </div>

                                <div id="description_coke" class="card-text"></div>
                            </div>

                            <!--  models page-model card-x3d-sprite  -->
							<div id="sprite">
                                <div id="x3dModelTitle_sprite" class="card-title"></div>

                                <div class="model3D">
                                    <x3d id="SpriteModel"> 
                                        <scene>
                                             
                                            <inline nameSpaceName="SpriteID" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/Sprite.x3d"> </inline> 
                                            <!--
                                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/Sprite.x3d"> </inline>
                                            -->    
                                        </scene> 
                                    </x3d>
                                </div>

                                <div id="description_sprite" class="card-text"></div>
                            </div>
                                
                            <!--  models page-model card-x3d-pepper  -->
                            <div id="pepper">
                                <div id="x3dModelTitle_pepper" class="card-title"></div>

                                <div class="model3D">
                                    <x3d id="PepperModel"> 
                                        <scene>
                                             
                                            <inline nameSpaceName="PepperID" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/Dr Pepper.x3d"> </inline> 
                                            <!--
                                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/Dr Pepper.x3d"> </inline> 
                                            -->
                                        </scene> 
                                    </x3d>
                                </div>

                                <div id="description_pepper" class="card-text"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  models page-interaction card  -->
                <div class="col-sm-5">
                    <div class="row">
                        <!--  models page-interaction card-Camera  -->
                        <div class="card-text-right">
                            <!--  models page-interaction card-Camera header  -->
                            <div id="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
            
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick="cameraFront();">Default</a>
                                            <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                            <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                            <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--  models page-interaction card-Camera body  -->
                            <div class="card-body">
                                <div id="x3dCameraTitle" class="card-title"></div>
                                    
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="cameraFront();">Default</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="cameraLeft();">Left</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="cameraBack();">Back</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="cameraTop();">Top</a>
            
                                <div id="x3dCameraSubtitle" class="card-text"></div>
                            </div>
                        </div>     

                        <!--  models page-interaction card-Animation  -->
                        <div class="card-text-right">
                            <!--  models page-interaction card-Animation header  -->
                            <div id="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active">Animation</a>
                                    </li>
                                </ul>
                            </div>

                            <!--  models page-interaction card-Animation body  -->
                            <div class="card-body">
                                <div id="x3dAnimationTitle" class="card-title"></div>
                                        
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Start</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="stopRotation();">Stop</a>
            
                                <div id="x3dAnimationSubtitle" class="card-text"></div>
                            </div>
                        </div>

                        <!--  models page-interaction card-Light & Render -->
                        <div class="card-text-right">
                            <!--  models page-interaction card-Light & Render header  -->
                            <div id="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <!-- models page-interaction card-Render-dropdown menu -->
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                                        
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="#" onclick="polygon();">Polygon</a>
                                            <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                        </div>
                                    </li>
                                    

                                    <!-- models page-interaction card-Light -->
                                    <li class="nav-item">
                                        <a class="nav-link active">Light</a>
                                    </li>
                                </ul>
                            </div>

                            <!--  models page-interaction card-Light body  -->
                            <div class="card-body">
                                <div id="x3dLightTitle" class="card-title"></div>
                                
                                <!-- models page-interaction card-Render-btn -->
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="polygon();">Polygon</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="wireframe();">Wireframe</a>
                                
                                <!-- models page-interaction card-Light-btn -->
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="headlight();">Headlight</a>
            
                                <div id="x3dLightSubtitle" class="card-text"></div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            
            <!--  models page-gallery card  -->
            <div class="row3">
                <div class="col-sm-12">
                    <div class="card-text-middle">
                        <!--  models page-gallery card header  -->
                        <div id="card-header">
                            <h5 class="gallery-header">Gallery</h5>
                        </div>

                        <!--  models page-gallery card body  -->
                        <div class="card-body">
                            <div id="title_gallery" class="card-title"></div>

                            <div class="gallery" id="gallery">
                                <a id="gallery"></a>
                            </div>

                            <div id="description_gallery" class="card-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--  models page-Description card-coke  -->
        <div id="cokeDescription">
            <div class="row3">
                <div class="col-sm-12">
                    <div class="card-text-middle">
                        <!--  models page-Description card-coke header  -->
                        <div class="card-header">
                            <div id="title_coke" class="card-title"></div>
                            <div id="subTitle_coke" class="card-title"></div>
                        </div>

                        <!--  models page-Description card-coke body  -->
                        <div class="card-body">
                            <div id="cardDescription_coke" class="card-text"></div>
                        </div>

                        <div id="description_gallery" class="card-text"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--  models page-Description card-sprite  -->
        <div id="spriteDescription">
            <div class="row3">
                <div class="col-sm-12">
                    <div class="card-text-middle">
                        <!--  models page-Description card-sprite header  -->
                        <div class="card-header">
                            <div id="title_sprite" class="card-title"></div>
                            <div id="subTitle_sprite" class="card-title"></div>
                        </div>

                        <!--  models page-Description card-sprite body  -->
                        <div class="card-body">
                            <div id="cardDescription_sprite" class="card-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  models page-Description card-pepper  -->
        <div id="pepperDescription">
            <div class="row3">
                <div class="col-sm-12">
                    <div class="card-text-middle">
                        <!--  models page-Description card-pepper header  -->
                        <div class="card-header">
                            <div id="title_pepper" class="card-title"></div>
                            <div id="subTitle_pepper" class="card-title"></div>
                        </div>

                        <!--  models page-Description card-pepper body  -->
                        <div class="card-body">
                            <div id="cardDescription_pepper" class="card-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm">
        <!-- footer-restyle -->
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <p>
                    <span class="align-baseline">&copy 2024 Mobile Web 3D Applications |
                        <a href="javascript:changeLook()">Restyle</a>
                        |
                        <a href="javascript:changeBack()">Reset</a>
                    </span>
                </p> 
            </div>
        </div>

        <!-- footer-social -->
        <div class="social">
            <a href="https://www.facebook.com/"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
            <a href="https://x.com/"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
            <a href="https://www.google.com/"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
            <a href="https://github.com/"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
          </div>
    </nav>

    <!-- modal dialog -->
    <div class="modal fade" id="contactModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <p>Xiaole Lai, Email: xl423@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
                
                </div>
            </div>
        </div>

    <!--  js path  -->
    <script src="application/scripts/js/jquery-3.4.1.js"></script>
    <script src="application/scripts/js/popper.min.js"></script>
    <script src="application/scripts/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/5f811d0233.js" crossorigin="anonymous"></script>

    <script src="application/scripts/js/swap_restyle.js"></script>
    <script src="application/scripts/js/gallery_generator.js"></script>
    <script src="application/scripts/js/getJsonData.js"></script>
    <script src="application/scripts/js/custom.js"></script>
    <script src="application/scripts/js/x3dom.js"></script>
    <script src="application/scripts/js/modelInteractions.js"></script>
    <script src="application/scripts/js/jquery.fancybox.min.js"></script>
    
    <!--  css path  -->
   <link href="application/css/custom.css" rel="stylesheet"> 
   <link href="application/css/bootstrap.css" rel="stylesheet">
   <link href="application/css/x3dom.css" rel="stylesheet">
   <link href="application/css/jquery.fancybox.min.css" rel="stylesheet">
  </body>
</html>