    <?php require 'includes/headtwo.php'; ?>
	<script src="/js/angular.min.js"></script>
<script src="/js/angular-sanitize.js"></script>
  <script>
var app = angular.module('myApp', ['ngSanitize']);
app.controller('myCtrl', function($scope, $http) {
  $http({
    method : "GET",
    url : "https://admin.torquealto.com/herramientanombre/<?php echo $producto; ?>"
  }).then(function mySucces(response) {
      $scope.item = response.data;
    }, function myError(response) {
      $scope.item = response.statusText;
  });
});
</script>
	<?php require 'includes/head.php'; ?>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
<title>{{item.nombre}} - Airon tools</title>

<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
    	
	
                    
       <?php require 'includes/header.php'; ?>
        
		<!-- **Main - Starts** --> 
		<div id="main">
           <div class="parallax full-width-bg">
                <div class="container">
                    <div class="main-title">
                        <h1>{{item.nombre}}</h1>
                        <div class="breadcrumb">
                            <a href="/">Home</a>
                            <span class="fa fa-angle-right"></span>
                            <a href="/productos">Productos</a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current"> {{item.nombre}} </span>
                        </div>
                    </div>
                </div>
            </div>
        	
           
            <div class="container">
            <div class="dt-sc-margin65"></div>
                 <?php require 'includes/categorias.php'; ?>
                  <section id="primary" class="with-left-sidebar page-with-sidebar">
                    <!-- **Woocommerce - Starts** -->
                    <div class="woocommerce">
                        <!-- **product - Starts** --> 
                        <div class="product single-product">
                            <!-- **images - Starts** -->
                            <div class="images">
                                <div class="yith_magnifier_zoom_wrap">
                                    <a href="#" class="yith_magnifier_zoom woocommerce-main-image" > 
                                        <img src="{{item.url_image}}" title="{{item.nombre}}" alt="{{item.nombre}}"/>
                                    </a>
                                </div>
                            </div> <!-- **images - Ends** -->
                            <!-- **summary - Starts** -->

                                <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{item.nombre}} </h1>
                                <div class="description">
                                    <div ng-bind-html="item.descripcion"></div>
                                </div>
                       
                            </div> <!-- **summary - Ends** -->
                                                     </div> <!-- **product - Ends** -->
                    </div> <!-- **Woocommerce - Ends** -->
                     <div class="dt-sc-tabs-container type2 woocommerce-tabs">
                         <!-- **dt-sc-tabs-frame - Starts** -->
                        <ul class="dt-sc-tabs-frame">
                            <li> <a href="#" class="current">Ventajas y Beneficios</a> </li>
                            <li> <a href="#" class="">Especificaciones Técnicas</a> </li>
                            <li> <a href="#" class="">Cotización</a> </li>
                        </ul>  <!-- **dt-sc-tabs-frame - Ends** -->
                        
                        <!-- **dt-sc-tabs-frame-content - Starts** -->
                        <div class="dt-sc-tabs-frame-content" style="display: block;">
                            <div ng-bind-html="item.ventajas"></div>
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->
                        
                        <!-- **dt-sc-tabs-frame-content - Starts** -->
                        <div class="dt-sc-tabs-frame-content" style="display: none;">
                           <div ng-bind-html="item.especificaciones"></div>
                            
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->   
                        <div class="dt-sc-tabs-frame-content" style="display: none;">
                            <h6> <strong>Cotización </strong></h6>
                             <form method="post" class="dt-sc-contact-form" action="/cotizacion" name="frmcontact">
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span> <label>Asunto:</label> <select required name="cotizacion">
                                                    <option value="Cotización">Cotización</option>
                                                          <option value="Solicitud de distribución">Solicitud de distribución</option><option value="Visita Técnica">Visita Técnica</option><option value="Solicitar información">Solicitar información</option><option value="Otro">Otro</option>
                                                        </select>  </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p><label>Herramienta:</label> <span> <input type="text" placeholder="Nombre de Herramienta" name="txtherramienta" value="{{item.nombre}}"  /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p><label>Cantidad:</label> <span> <input type="number" placeholder="Cantidad" name="txtcantidad" value="1"  /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span> <input type="text" placeholder="Nombre*" name="txtname" value="" required /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Nombre de la empresa*" name="txtempresa" value="" required /> </span> </p>
                                                </div>
                                                 <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Dirección*" name="txtdireccion" value="" required /> </span> </p>
                                                </div>
                                                                                            
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span> <input type="email" placeholder="Email*" name="txtemail" value="" required /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Teléfono" name="txtphone" value="" /> </span> </p>
                                                </div>
                                                <p> <textarea placeholder="Mensaje*" name="txtmessage" required ></textarea> </p>
                                                <p> <input type="submit" value="Enviar Mensaje" name="submit" /> </p>
                                            </form>
                                            <div id="ajax_contact_msg">
                                                
                                                
                                            

                                            </div>
                                            
                                                <i class="fa fa-times cerrarmodal" aria-hidden="true"></i></p>
                                            
                                              
  
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->

                    
                    <div class="dt-sc-margin30"></div>
                    <!-- **hr-title - Starts** -->
                   
                    
                </section> <!-- **primary - Ends** --> 
            </div>
			   

			

			
            
           
            
          

			       
        </div> <!-- **Main - Ends** --> 
       
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <!-- **Footer** -->
       <?php require 'includes/footer.php'; ?>
        
	</div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->

	<?php require 'includes/js.php'; ?>
    
          

</body>
</html>