function carregaAjax(){
	var xmlhttp;
	try{
		xmlhttp = new XMLHttpRequest ( ) ;
	}catch( ee ){
		try{
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(E){
				xmlhttp = false;
			}	
		}	
	}	
	return xmlhttp;
}
function carregar(url){
	var ajax = carregaAjax();	
	document.getElementById('id_cidade').innerHTML = "";	
	if(ajax){
		var url;
		var hora = new Date().getTime();
		if(url.indexOf("?") >= 0){
			url = url+'&hora='+hora;
		}else{
			url = url+'?hora='+hora;
		}
		//alert (url)			
		ajax.open( 'GET', url, true);		
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){							
				if (ajax.status == 200){					
					document.getElementById('id_cidade').innerHTML = ajax.responseText;
					
				}
			}
		}
		ajax.send(null);		
	}	
}
function carregar2(url, objForm){
	var ajax = carregaAjax();	
	document.getElementById('formulario_assinatura').innerHTML = "<div style='text-align:center'><img style='' src='files_index/imagens/elementos/ajax-loader.gif'></div>";
	if(ajax){
		var url;
		var hora = new Date().getTime();
		if(url.indexOf("?") >= 0){
			url = url+'&hora='+hora;
		}else{
			url = url+'?hora='+hora;
		}
		//alert (url)
		var parametros = mountParameters(objForm); // MONTANDO OS PARAMETROS UTILIZANDO A FUNÇÃO CRIADA ABAIXO			
		ajax.open( 'POST', url, true);		
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){					
				if (ajax.status == 200){					
					document.getElementById('formulario_assinatura').innerHTML = ajax.responseText;
				}
			}
		}
//		alert(parametros)		
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
     	ajax.setRequestHeader("Connection", "close"); 
		ajax.send(parametros);
		//ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");	// Setando Content-type
		//ajax.send("null");
		//ajax.send(null);		
	}	
}
function mountParameters(objForm){

        var strReturn = "";

        if(objForm){

                var y = objForm.length-1;
                for(x = 0; x < objForm.length; x++){
                        if(objForm[x].value && !objForm[x].disabled && objForm[x].style.display != "none" && objForm[x].type != "button" && objForm[x].type != "reset" && objForm[x].type != "submit"){
                                if(strReturn){
                                        strReturn = strReturn + "&";
                                }
                                strReturn = strReturn + objForm[x].name + "=" + encodeURI(objForm[x].value);
                        }
                }

        }

        return strReturn;
}