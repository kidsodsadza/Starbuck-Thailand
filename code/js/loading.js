var wait_time=1;  // กำหนดเวลาให้รอ เป็นวินาที  
		var vela; // กำหนด ตัวแปรเก็บ inteval
		window.onload=function(){  
    		vela=setInterval("decrease_num()",1000);  
		} 
	
	function decrease_num(){ 
		 if(wait_time>0){  
   			 wait_time--;  
    	}else{  
        if(wait_time==0){  
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
		
       }     
    }  
}