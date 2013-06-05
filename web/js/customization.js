function createRequestObject() 
{
 var obj;
 var browser = navigator.appName;
     if(browser == "Microsoft Internet Explorer"){
    obj = new ActiveXObject("Microsoft.XMLHTTP");
 }else{
     obj = new XMLHttpRequest();
 }
 return obj;
}

function sendReq(req) 
{    
http.open('get', req);
http.onreadystatechange = handleResponse;
http.send(null);
}

function handleResponse() 
{    
 if (http.readyState == 4)
 {
     var response = http.responseText;
     document.getElementById('shop').innerHTML=response;
 }
}

$('#startDemo').click(function(){
	 $.blockUI.defaults.css.cursor = 'default';
	 $.blockUI.defaults.css.top = '50px';
	 $.blockUI.defaults.css.left = '50px';
	 $.blockUI.defaults.css.width = '964px';
	 $.blockUI.defaults.css.height = '90%';
	 $.blockUI({ message: $('#shop')}); 
	 $.ajax({
      url: "http://localhost/app_dev.php/shop/demo",
      context: document.body,
      success: function(response){
        $('#shop').html(response);
      }
    });
});