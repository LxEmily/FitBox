	var bgSelection = ["url('media/sports/back_criscross.jpg')", 
						"url('media/sports/back_yoga.jpg')", 
						"url('media/sports/spring_sneakers.jpg')",	  
						"url('media/food/pizza.jpg')",   	  
						"url('media/food/salad.jpg')",   	  
						"url('media/food/yoghurt.jpg')",			  
					  ];		

	var random = Math.floor(Math.random() * bgSelection.length);			  
				  
	document.getElementsByClassName('header')[0].style.backgroundImage = bgSelection[random];