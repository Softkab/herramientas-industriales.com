    <?php require 'includes/headone.php'; ?>
	<script src="/js/angular.min.js"></script>
<script src="/js/angular-sanitize.js"></script>
     <script>
    // Code goes here
var app = angular.module('list', ['ngSanitize']);
app.controller("ListCtrl", function($scope, $http) {
    $http({
    method: 'GET',
    url: 'http://admin.torquealto.com/herramientas/<?php echo $categoria; ?>'
  }).success(function(data) {
    $scope.items = [];
    angular.forEach(data, function(item, index) {
        $scope.items.push(item);
    
    });
  });
});
 </script>
	<?php require 'includes/head.php'; ?>
</head>
<body>

<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
    	
	
                    
       <?php require 'includes/header.php'; ?>
        
		<!-- **Main - Starts** --> 
		<div id="main">
            <?php require 'includes/parallax.php'; ?>
        	
           
             <div class="full-width-section">
                <div class="dt-sc-margin65"></div>
                <div class="container">
                      <table class="table table-condensed tablaproductos" ng-app="list">
                        <thead>
                          <tr>
                            <th><strong>Imagen</strong></th>
                            <th><strong>Nombre</strong> </th>
                        
                          </tr>
                        </thead>
                        <tbody ng-controller="ListCtrl" >
                          <tr ng-repeat="item in items" ng-bind-html-unsafe =" item">
                            <td ><a href="{{item.url_image}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
</a></td>
                            <td><a href="{{item.url_image}}" target="_blank">{{item.nombre}}</a></td>                            
                          </tr>
                  
                        </tbody>
                      </table>
                </div>
                </div>
                
         
        	
        	
			   

			

			
            
           
            
          

			       
        </div> <!-- **Main - Ends** --> 
       
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <!-- **Footer** -->
       <?php require 'includes/footer.php'; ?>
        
	</div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->

	<?php require 'includes/js.php'; ?>
    
          

</body>
</html>