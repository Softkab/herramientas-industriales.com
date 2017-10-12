    <?php require 'includes/headone.php'; ?>
	
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
                      <table class="table table-condensed tablaproductos">
                        <thead>
                          <tr>
                            <th><strong>Imagen</strong></th>
                            <th><strong>Nombre</strong> </th>
                        
                          </tr>
                        </thead>
                        <tbody>
                        <?php  $json=file_get_contents('http://admin.torquealto.com/categorias.json'); 
                           $array =(json_decode($json, true));
                            $temporal="";
                        ?>
                       <?php foreach($array as $key=>$val){
                        echo "<tr>";
                        echo "<td>";
                        echo '<a href="/productos/'.$val['url'].'">';
                        echo '<img src="'.$val['url_image'].'" width="75">';
                        echo "</a>";
                        echo "</td>";
                        echo "<td>";
                        echo '<a href="/productos/'.$val['url'].'">';
                        echo $val['nombre'];
                        echo "</a>";
                        echo "</td>";
                        echo "</tr>";
                        
                          }
                        ?>
                          
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