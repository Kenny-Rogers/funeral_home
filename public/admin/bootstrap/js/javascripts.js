function  load_content(str,page,vDiv){
  	//alert("function called");
  	if (window.XMLHttpRequest) {
    		// code for IE7+, Firefox, Chrome, Opera, Safari
    		xmlhttp=new XMLHttpRequest();
  	} else { // code for IE6, IE5
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  	xmlhttp.onreadystatechange=function() {
    		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      			document.getElementById(vDiv).innerHTML=xmlhttp.responseText;
    		}
	}
  	xmlhttp.open("GET",page+"?q="+str,true);
  	xmlhttp.send();
}

function showHint(str) {
         if (str.length==0) {
           document.getElementById("txtHint").innerHTML = "";
           return;
       }

      if (window.XMLHttpRequest) {
        		// code for IE7+, Firefox, Chrome, Opera, Safari
        		xmlhttp=new XMLHttpRequest();
      	} else { // code for IE6, IE5
        		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      	}
      	xmlhttp.onreadystatechange=function() {
        		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        		}
          }
           xmlhttp.open("GET", "../../includes/admin/action/get_hint.php?q="+str, true);
           xmlhttp.send();
    }
