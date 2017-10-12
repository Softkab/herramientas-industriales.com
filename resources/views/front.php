    <?php require 'includes/headone.php'; ?>


    

<?php require 'includes/head.php'; ?>
 
</head>

<body>
<!-- **Wrapper** -->
<div class="wrapper"> 
    <?php require 'includes/header.php'; ?>
   
        <div id="main">
<!-- **banner - Starts** -->
    <?php require 'includes/banner.php'; ?>
          

            <div class="dt-sc-margin100"></div>    
            <!-- Container starts-->
            <div class="container">
                <!-- **secondary - starts** --> 
                <?php require 'includes/categorias.php'; ?>
                
             
                <section id="primary" class="with-left-sidebar page-with-sidebar">
                    <div class="dt-sc-margin30"></div>
                    <?php 
                $json=file_get_contents('https://admin.torquealto.com/herramientas/destacados-herramientas-industriales');           
                  $i=0;
                  $array =(json_decode($json, true));     
               ?>
          
                    <ul class="products">
                     <?php
                     $i=0;
                    $array =(json_decode($json, true));
                    foreach($array as $key=>$val)
                         {
                            $i=$i+1;
                ?>
                    <li <?php if ($i==3 or $i==6 or $i==9  or $i==12 or $i==15 or $i==18 ) {
                        echo 'class="last"';
                    } ?>>
                        <div class="product-wrapper product-three-column">
                            <div class="product-container">
                                <a href="/producto/<?php echo $val['url'];  ?>"><img src="<?php echo $val['url_image'];  ?>"></a>
                            </div>
                            <div class="product-details">
                                <h5><a href="/producto/<?php echo $val['url'];  ?>"><?php echo $val['nombre'];  ?></a></h5>
                            </div>
                        </div>    
                    </li>
                      <?php      } ?>   
                    </ul>
                    
             


                </section>

                
              
                
                               
                               
                  
                    

                    <div class="dt-sc-margin30"></div>
                    <!-- **product - Starts** -->
                
                </section> <!-- **primary - Ends** --> 
                <div class="dt-sc-margin80"></div>
            </div> <!-- **container - Ends** --> 
        
        </div> <!-- **Main - Ends** --> 
        
        <!-- **Footer** -->
        <footer id="footer">
            <div class="footer-widgets-wrapper">
                <div class="container">
                
                    <div class="column dt-sc-one-third first">
                        <aside class="widget widget_text">
                            <h3 class="widget-title"><span class="wlast"> Ciudad de México </span></h3> 
                            <p> <i class="fa fa-phone"></i> <span>Teléfono:</span> (55) 8589 7373  </p>
                            <p> <i class="fa fa-print"></i> <span>Fax:</span> (55) 8589 7373 </p>
                            <p> <i class="fa fa-envelope"></i> <span> Email:</span> <a href="mailto:ventas1@herramientas-industriales.com">ventas1@herramientas-industriales.com</a> </p>
                            <p> <i class="fa fa-location-arrow" style="padding-bottom: 43px;"></i> <span>Calzada de Guadalupe #572 <br>Col Industrial Del. Gustavo A. <br>Madero México, D.F. CP 07800</span> </p>
                                                
                        </aside>
                    </div>
                    
                   <div class="column dt-sc-one-third">
                        <aside class="widget widget_text">
                            <h3 class="widget-title"><span class="wlast"> Monterrey </span></h3> 
                            <p> <i class="fa fa-phone"></i> <span>Teléfono:</span> (01-81) 2091 0778 </p>
                            <p> <i class="fa fa-envelope"></i> <span> Email:</span> <a href="mailto:airon.mty@airontools.com">airon.mty@airontools.com</a> </p>
                            <p> <i class="fa fa-location-arrow" style="padding-bottom: 43px;"></i> <span>Malva #130 <br>Col. Residencial Enrramada 3ra Sección <br>C.P. 66635 Apodaca NL</span> </p>
                                                
                        </aside>
                    </div>                
                    <div class="column dt-sc-one-third">
                        <aside class="widget mailchimp">
                            <h3 class="widget-title">Síguenos</h3>
                            <ul class="dt-sc-social-icons">
                                <li><a class="dt-sc-tooltip-top youtube" href='https://www.youtube.com/user/Airontoolsmx' target="_blank" title="Youtube"> <i class="fa fa-youtube"></i> </a></li>
                                <li><a class="dt-sc-tooltip-top facebook" href='https://www.facebook.com/AIRONTOOLS?fref=ts' target="_blank" title="Facebook"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="dt-sc-tooltip-top google-plus" href='https://plus.google.com/114918548522634737041' target="_blank" title="Google-plus"> <i class="fa fa-google-plus"></i> </a></li>

                            </ul>
                        </aside>
                    </div>
                    
                </div>
            </div><!-- **footer-widgets-wrapper - End** -->
            
            <div class="copyright">
                <div class="container">
                    <p>Herramientas Industriales by Softkab.com. © 2017 <a href="http://softkab.com/">http://softkab.com/</a></p>
                    <ul class="footer-links">
                        <li><a href="/">Incio</a>/</li>
                        <li><a href="/productos/">Productos</a>/</li>
                        <li><a href="/servicios/">Servicios</a>/</li>
                        <li><a href="/quienes-somos/">¿Quienes Somos?</a>/</li>
                        <li><a href="/contacto/">Contacto</a></li>
                    </ul>
                </div>
            </div>
            
        </footer> <!-- **Footer - End** -->
        
    </div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->
        
  

<?php require 'includes/js.php'; ?>
</body>
</html>
