$(document).ready(function () {
		    $.getJSON('https://trello.com/b/RLauQ0uq/airontools.json', function (data) {
		      console.log(data);
		      var cabezeras = [];
		      var cards = [];
		      var lists = data.lists.map(function (list) {
		      		if (list.closed == false) {
   						 cabezeras.push(list.id+':'+list.name);
   						 return list.id;
					}
				
		      });

		      var items = data.cards.map(function (item) {
		      		if (item.closed == false) {
		      			cards.push(item.idList+':'+item.name+'->'+item.closed);
		      			 return item.name + ': ' + item.closed + ': ' + item.idList;
					}
				
		      });
	
		      for (var i = 0; i < cabezeras.length; i++) {
		      	var str = cabezeras[i];
		      	var n = str.indexOf(":");
		      	var lista = str.substr(n+1, str.length);
		      	var idlista=str.substr(0, n);

		      	$( ".container" ).append( "<div class='col-md-"+12/cabezeras.length+ "'><h2>"+lista +"</h2><ul class='"+idlista +"'></ul></div>");
		      	}
		    	for (var j = 0; j < cards.length; j++) {
		    	var str2=cards[j];
		    	var m = str2.indexOf(":");
		    	var idlista2=str2.substr(0, m); 
		    	var lista2 = str2.substr(m+1, str2.length);
		    	var p = lista2.indexOf("->");
		    	var final = lista2.substr(0, p);
		    	console.log(idlista2);
		    	if ( $("."+idlista2+"").length > 0 ) {
  					$( "."+idlista2+"").append( "<li>"+final+"</li>" );
				}
		      	
		      	}
		    });

		    
});

