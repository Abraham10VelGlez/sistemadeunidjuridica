  $(document).ready(function(){        
   /*http://jquery-manual.blogspot.mx/2012/05/expresiones-regulares-con-jquery-match.html*/

	  $('#name').blur(function(){
		  if ($('#name').val().match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/)) {
			   //alert("Bien");			   
			   }else {
				   //alert("Esto no son números");
				   $('#rorre').html('');
				   $('#rorre').html('caracter invalido');
				   $('#rorre').css('display','block').fadeOut(5000);
				   }
			   return false;
	   });
	  $('#name').on('input', function (e) {
		  if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]*$/i.test(this.value)) {
		    this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+/ig,"");
		  }
		  });
	  
	  $('#password').blur(function(){
		  if ($('#password').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/)) {
			   //alert("Bien");			   
			   }else {
				   //alert("Esto no son números");
				   $('#rorre2').html('');
				   $('#rorre2').html('caracter invalido');
				   $('#rorre2').css('display','block').fadeOut(5000);
				   }
			   return false;
	   });
	  $('#password').on('input', function (e) {
		  if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]*$/i.test(this.value)) {
		    this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+/ig,"");
		  }
		  });
	  
	  
	  /*metodo para dividir delegaciones x municipios y filtreo*/
	  $('li.classsd').click(function(){
		  $('#pnm').val('');
		  $('#pcg').val('');
		  $('#pga').val('');
		  $('#pd').val('');
		  $('#pt').val('');
		  $('#pce').val('');

		  $('#snm').val('');
		  $('#scg').val('');
		  $('#sga').val('');
		  $('#sd').val('');
		  $('#st').val('');
		  $('#sce').val('');

		  $('#tnm').val('');
		  $('#tcg').val('');
		  $('#tga').val('');
		  $('#td').val('');
		  $('#tt').val('');
		  $('#tce').val('');

		  $('#cnm').val('');
		  $('#ccg').val('');
		  $('#cga').val('');
		  $('#cd').val('');
		  $('#ct').val('');
		  $('#cce').val('');

		  $('#uinm').val('');
		  $('#uicg').val('');
		  $('#uiga').val('');		  
		  $('#uid').val('');
		  $('#uit').val('');
		  $('#uice').val('');
		  var rich =$(this).data('dato');
		  var oil = $(this).data('datos');
		  $('#munm').html(oil);
		  $('#hiddenigcm').html('<input id="hiddenigcmavg" name="hiddenigcmavg" type="hidden" value="'+rich+'" />');
		});
	     
   /* MOSTRAR DATOS.... DE CAPTURADOS*/
   $('li.classsd').click(function (){
       var clavemunic =$(this).data('dato');
       /*ACTUALIZACION CON AJAX*/
       var tok = $('#token').val();                
         $.ajax({
            url:"/renderigcm",
            headers: {'X-CSRF-TOKEN': tok},
            type: 'POST',
            dataType: 'json',
            data: {xx:clavemunic},            
            success:function(w){
                $(w).each(function(key,valuee){                     
                
                   $('#pnm').val(valuee.nombrep);
                   $('#pcg').val(valuee.cargop);
                   $('#pga').val(valuee.gradoacdp);
                   $('#pd').val(valuee.domiciliop);
                   $('#pt').val(valuee.telefonop);
                   $('#pce').val(valuee.emailp);
                });                   
            }            
         });
         $.ajax({
            url:"/renderigcm2",
            headers: {'X-CSRF-TOKEN': tok},
            type: 'POST',
            dataType: 'json',
            data: {xx:clavemunic},            
            success:function(w){
                $(w).each(function(key,valuee){                     
                 
$('#snm').val(valuee.nombres);
$('#scg').val(valuee.cargos);
$('#sga').val(valuee.gradoacds);
$('#sd').val(valuee.domicilios);
$('#st').val(valuee.telefonos);
$('#sce').val(valuee.emails);
                   
                });                   
            }            
         });
         $.ajax({
            url:"/renderigcm3",
            headers: {'X-CSRF-TOKEN': tok},
            type: 'POST',
            dataType: 'json',
            data: {xx:clavemunic},            
            success:function(w){
                $(w).each(function(key,valuee){                     

$('#tnm').val(valuee.nombret);
$('#tcg').val(valuee.cargot);
$('#tga').val(valuee.gradoacdt);
$('#td').val(valuee.domiciliot);
$('#tt').val(valuee.telefonot);
$('#tce').val(valuee.emailt);
                });                   
            }            
         });
         $.ajax({
            url:"/renderigcm4",
            headers: {'X-CSRF-TOKEN': tok},
            type: 'POST',
            dataType: 'json',
            data: {xx:clavemunic},            
            success:function(w){
                $(w).each(function(key,valuee){                     
                 
$('#cnm').val(valuee.nombrec);
$('#ccg').val(valuee.cargoc);
$('#cga').val(valuee.gradoacdc);
$('#cd').val(valuee.domicilioc);
$('#ct').val(valuee.telefonoc);
$('#cce').val(valuee.emailc);
                });                   
            }            
         });
         $.ajax({
            url:"/renderigcm5",
            headers: {'X-CSRF-TOKEN': tok},
            type: 'POST',
            dataType: 'json',
            data: {xx:clavemunic},            
            success:function(w){
                $(w).each(function(key,valuee){                     
                 
$('#uinm').val(valuee.nombreu);
$('#uicg').val(valuee.cargou);
$('#uiga').val(valuee.gradoacdu);
$('#uid').val(valuee.domiciliou);
$('#uit').val(valuee.telefonou);
$('#uice').val(valuee.emailu);
                });                   
            }            
         });
               
   });
   
   
   
   /*VALIDACIONES PARA EL FORMULARIO*/
   
   $('#pnm').blur(function(){
		  if ($('#pnm').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
			   //alert("Bien");			   
			   }else {
				   //alert("Esto no son números");
				   $('#errorformulario').html('');
				   $('#errorformulario').html('caracter invalido');
				   $('#errorformulario').css('display','block').fadeOut(5000);
				   
				   }
			   return false;
	   });
   $('#pnm').on('input', function (e) {
	    if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
	        this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
	    }
	});
   
   $('#pcg').blur(function(){
		  if ($('#pcg').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
			   //alert("Bien");			   
			   }else {
				   //alert("Esto no son números");
				   $('#errorformulario2').html('');
				   $('#errorformulario2').html('caracter invalido');
				   $('#errorformulario2').css('display','block').fadeOut(5000);
				   
				   }
			   return false;
	   });
$('#pcg').on('input', function (e) {
	    if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
	        this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
	    }
	});

$('#pga').blur(function(){
	  if ($('#pga').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario3').html('');
			   $('#errorformulario3').html('caracter invalido');
			   $('#errorformulario3').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
 });
$('#pga').on('input', function (e) {
  if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
      this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
  }
});
   

$('#pd').blur(function(){
	  if ($('#pd').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario4').html('');
			   $('#errorformulario4').html('caracter invalido');
			   $('#errorformulario4').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
});
$('#pd').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
    this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});


$('#pt').blur(function(){
	  if ($('#pt').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario5').html('');
			   $('#errorformulario5').html('caracter invalido');
			   $('#errorformulario5').css('display','block').fadeOut(5000);
			   
			   }
		   return false;
});
$('#pt').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]*$/i.test(this.value)) {
  this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+/ig,"");
}
});

$('#pce').blur(function(){
	  if ($('#pce').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_@_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario6').html('');
			   $('#errorformulario6').html('caracter invalido');
			   $('#errorformulario6').css('display','block').fadeOut(5000);
			   
			   }
	  
		   return false;
});
$('#pce').on('input', function (e) {
if (!/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/i.test(this.value)) {
this.value = this.value.replace(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,"");
}
});










$('#snm').blur(function(){
	  if ($('#snm').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario11').html('');
			   $('#errorformulario11').html('caracter invalido');
			   $('#errorformulario11').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
 });
$('#snm').on('input', function (e) {
  if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
      this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
  }
});

$('#scg').blur(function(){
	  if ($('#scg').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario12').html('');
			   $('#errorformulario12').html('caracter invalido');
			   $('#errorformulario12').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
 });
$('#scg').on('input', function (e) {
  if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
      this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
  }
});

$('#sga').blur(function(){
	  if ($('#sga').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario13').html('');
			   $('#errorformulario13').html('caracter invalido');
			   $('#errorformulario13').css('display','block').fadeOut(5000);
			   
			   }
		   return false;
});
$('#sga').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
    this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#sd').blur(function(){
	  if ($('#sd').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario14').html('');
			   $('#errorformulario14').html('caracter invalido');
			   $('#errorformulario14').css('display','block').fadeOut(5000);
			 
			   }
		   return false;
});
$('#sd').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
  this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#st').blur(function(){
	  if ($('#st').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario15').html('');
			   $('#errorformulario15').html('caracter invalido');
			   $('#errorformulario15').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
});
$('#st').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+/ig,"");
}
});

$('#sce').blur(function(){
	  if ($('#sce').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_@_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario16').html('');
			   $('#errorformulario16').html('caracter invalido');
			   $('#errorformulario16').css('display','block').fadeOut(5000);
			 
			   }
	  
		   return false;
});
$('#sce').on('input', function (e) {
if (!/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/i.test(this.value)) {
this.value = this.value.replace(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,"");
}
});









$('#tnm').blur(function(){
	  if ($('#tnm').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario21').html('');
			   $('#errorformulario21').html('caracter invalido');
			   $('#errorformulario21').css('display','block').fadeOut(5000);
			   
			   }
		   return false;
});
$('#tnm').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
    this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#tcg').blur(function(){
	  if ($('#tcg').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario22').html('');
			   $('#errorformulario22').html('caracter invalido');
			   $('#errorformulario22').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
});
$('#tcg').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
    this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#tga').blur(function(){
	  if ($('#tga').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario23').html('');
			   $('#errorformulario23').html('caracter invalido');
			   $('#errorformulario23').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
});
$('#tga').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
  this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#td').blur(function(){
	  if ($('#td').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario24').html('');
			   $('#errorformulario24').html('caracter invalido');
			   $('#errorformulario24').css('display','block').fadeOut(5000);
			  
			   }
		   return false;
});
$('#td').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#tt').blur(function(){
	  if ($('#tt').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario25').html('');
			   $('#errorformulario25').html('caracter invalido');
			   $('#errorformulario25').css('display','block').fadeOut(5000);
			 
			   }
		   return false;
});
$('#tt').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+/ig,"");
}
});

$('#tce').blur(function(){
	  if ($('#tce').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_@_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario26').html('');
			   $('#errorformulario26').html('caracter invalido');
			   $('#errorformulario26').css('display','block').fadeOut(5000);
			
			   }
	  
		   return false;
});
$('#tce').on('input', function (e) {
if (!/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/i.test(this.value)) {
this.value = this.value.replace(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,"");
}
});









$('#cnm').blur(function(){
	  if ($('#cnm').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario31').html('');
			   $('#errorformulario31').html('caracter invalido');
			   $('#errorformulario31').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#cnm').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
  this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#ccg').blur(function(){
	  if ($('#ccg').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario32').html('');
			   $('#errorformulario32').html('caracter invalido');
			   $('#errorformulario32').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#ccg').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
  this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#cga').blur(function(){
	  if ($('#cga').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario33').html('');
			   $('#errorformulario33').html('caracter invalido');
			   $('#errorformulario33').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#cga').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#cd').blur(function(){
	  if ($('#cd').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario34').html('');
			   $('#errorformulario34').html('caracter invalido');
			   $('#errorformulario34').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#cd').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#ct').blur(function(){
	  if ($('#ct').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario35').html('');
			   $('#errorformulario35').html('caracter invalido');
			   $('#errorformulario35').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#ct').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+/ig,"");
}
});

$('#cce').blur(function(){
	  if ($('#cce').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_@_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario36').html('');
			   $('#errorformulario36').html('caracter invalido');
			   $('#errorformulario36').css('display','block').fadeOut(5000);
			
			   }
	  
		   return false;
});
$('#cce').on('input', function (e) {
if (!/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/i.test(this.value)) {
this.value = this.value.replace(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,"");
}
});









$('#uinm').blur(function(){
	  if ($('#uinm').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario41').html('');
			   $('#errorformulario41').html('caracter invalido');
			   $('#errorformulario41').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#uinm').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#uicg').blur(function(){
	  if ($('#uicg').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario42').html('');
			   $('#errorformulario42').html('caracter invalido');
			   $('#errorformulario42').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#uicg').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#uiga').blur(function(){
	  if ($('#uiga').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario43').html('');
			   $('#errorformulario43').html('caracter invalido');
			   $('#errorformulario43').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#uiga').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#uid').blur(function(){
	  if ($('#uid').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario44').html('');
			   $('#errorformulario44').html('caracter invalido');
			   $('#errorformulario44').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#uid').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s]+/ig,"");
}
});

$('#uit').blur(function(){
	  if ($('#uit').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario45').html('');
			   $('#errorformulario45').html('caracter invalido');
			   $('#errorformulario45').css('display','block').fadeOut(5000);
			
			   }
		   return false;
});
$('#uit').on('input', function (e) {
if (!/^[ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]*$/i.test(this.value)) {
this.value = this.value.replace(/[^ a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_-]+/ig,"");
}
});

$('#uice').blur(function(){
	  if ($('#uice').val().match(/^[a-zA-Z0-9áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ.,/_\s_@_-]+$/)) {
		   //alert("Bien");			   
		   }else {
			   //alert("Esto no son números");
			   $('#errorformulario46').html('');
			   $('#errorformulario46').html('caracter invalido');
			   $('#errorformulario46').css('display','block').fadeOut(5000);
			 
			   }
	  
		   return false;
});
$('#uice').on('input', function (e) {
if (!/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/i.test(this.value)) {
this.value = this.value.replace(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/,"");
}
});
   
/*metodo para dividir delegaciones x municipios y filtreo PARA MOSTRAR TODOS LOS MUNICIPIOS*/
$('li.listtaclasssd').click(function(){
	  
	  var identytinum =$(this).data('dato');
	  var namenum = $(this).data('datos');	  
	  var tok = $('#token').val();
	  $('#jz').html("<h4><strong>" +"de"+" "+namenum + "</strong></h4>");	
	   $.ajax({
           url:"/redfilter",
           headers: {'X-CSRF-TOKEN': tok},
           type: 'POST',
           dataType: 'json',
           data: {credencialclv:identytinum},
           
           success:function(e){
               //alert(w);        
              
        	   $('#jz').append("<ul>");
               $(e).each(function(key,valuee){
                  //alert(valuee.nommun);             	              	
            	   /*FORMA SIMPLE DE AGREGAR CEROS DE LADO DERECHO*/
            		var length=3;
            		var  n = valuee.clv.toString();
            		while(n.length < length)
            		n = "0" + n;
            		/*FORMA SIMPLE DE AGREGAR CEROS DE LADO DERECHO*/   
            		
                  $('#jz').append('<li class="listdetttav" data-datom="'+ valuee.nommun +'" data-datonm="'+valuee.clv+'" ><a data-toggle="modal" data-target="#mg" onclick="detalles('+valuee.clv+')" href="#mg">'+n+ " " + valuee.nommun+'</a></li>');	
               });
               $('#jz').append("</ul>");
       
           }
           
        });
	});
 

$('#filtrar').keydown(function(){
	var tok = $('#token').val();  
	var filter=$('#filtrar').val();
	
		$.ajax({
	        url:"/datafilter",
	        headers: {'X-CSRF-TOKEN': tok},
	        type: 'POST',
	        dataType: 'json',
	        data: {filter:filter},        
	        success:function(w){
	        	/*
	        	for(var i in data.artists.items) {
	        	    console.log(data.artists.items[i].href);  // (o el campo que necesites)
	        	    $('#alldata').html(data.artists.items[i].href);
	        	}*/
	        	$('#alldata').html('');
	        	$('#alldata').append(''+
	        			'<tr>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>No. OFICIO</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>TIPO</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>ASUNTO</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>FECHA DE INGRESO</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>FECHA LIMITE</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>JUSGADO DE PROCEDENCIA</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>VISTA PREVIA</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>SCANEO</strong></td>'+
	        			'<td style="border: black 1px solid;text-align: center;"><strong>ESTATUS</strong></td>'+
	        			'</tr>');
	        	
	        	//var fechanow = Date.now();
	            $(w).each(function(key,valuee){                     
	            	
	            	
	            	/*
$valor1= date("d", strtotime($munx->fechalimit))-1
@if(date('d-m-Y')==date("d-m-Y", strtotime($munx->feche)))
Ingreso Hoy
{{$date = strtotime(date('d-m-Y', strtotime($munx->fechalimit)))}}
{{$valoresul= $valor1.'-'.date('m', $date).'-'.date('Y', $date)}}
@elseif(date('d-m-Y')==date("d-m-Y", strtotime($munx->fechalimit)))
En Tramite 
@elseif(date("d-m-Y", strtotime($munx->fechanex)) <= $valoresul)
Vencida
@else
	            	
	            	
	  */          	
	            		
	            /*	
	            	var fechalimite =new Date(valuee.fechalimit);           	             
	            	var fechatramite =new Date(valuee.fechanex);
	            	var f = new Date();
	            	//alert(f);
	            	var fechalimite2 = fechalimite.getDate();
	            	var fechalimite22 = fechalimite.getMonth()+1;
	            	var fechalimite222 = fechalimite.getFullYear();
	            	var fechatramite2 = fechatramite.getDate();
	            	var fechatramite22 = fechalimite.getMonth()+1;
	            	var fechatramite222 = fechalimite.getFullYear();
	            	
	            	var valor1 = fechalimite2-1;
	            	var valoresul = valor1+'-'+fechalimite22+'-'+fechalimite222;
	            	var fechadigitalizada=fechalimite2+'-'+fechalimite22+'-'+fechalimite222;
	            	var fechadigitalizadatramite=fechatramite2+'-'+fechatramite22+'-'+fechatramite222;
	            	var result = fechalimite2 - fechatramite2;
	            	*/
	            	
	            	if(valuee.status=="I"){
	            		var estatus = '<td style="background-color: #ead4ff;border: black 1px solid;text-align: center;" >Ingreso Hoy</td>';
	            	}else if(valuee.status=="V"){
	            		var estatus = '<td style="background-color: #f29f9f;border: black 1px solid;text-align: center;" >Vencida</td>';	            	    
	            	}else if(valuee.status=="T"){
	            		var estatus = '<td style="background-color: #d9ffda;border: black 1px solid;text-align: center;" >En Tramite</td>';
	            	}else{
	            		var estatus = '<td  ></td>';
	            	}

	            	
	            	 var fechatramite =new Date(valuee.fechanex);   
	     	         var fechalimite =new Date(valuee.fechalimit);           	             
	       	       
	       		
	       		    var dd =fechatramite.getDate();
	       		  	var mm = fechatramite.getMonth()+1; 
	       		  	var anio =fechatramite.getFullYear();
	       		  	
	       		    var ddlm =fechalimite.getDate();
	       	  	    var mmlm = fechalimite.getMonth()+1; 
	       	  	    var aniolm =fechalimite.getFullYear();
	            	
	            	var fechasegment=dd+'-'+mm+'-'+anio;
	            	var fechasegment2=ddlm+'-'+mmlm+'-'+aniolm;
	            	
	            	//$('#alldata').append(valuee.id + '____' + valuee.oficio);
	            	$('#alldata').append(
	            			'<tr>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+valuee.oficio+'/'+valuee.oficiopartdos+'</strong></td>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+valuee.tipodocumento+'</strong></td>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+valuee.asunto+'</strong></td>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+fechasegment+'</strong></td>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+fechasegment2+'</strong></td>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+valuee.emitidopor+'</strong></td>'+
	            			'<td style="border: black 1px solid;text-align: center;">'+            			
	            			'<input type="hidden" name="_token" value=" {{csrf_token()}}" id="token">'+
	            			'<input type="hidden" id="dato" name="dato" value="'+valuee.id+'" id="token">'+ 
	            			'<input type="hidden" id="datos" name="datos" value="'+valuee.oficio+'" id="token">'+ 
	            			'<li style="display: -webkit-inline-box;">'+
	            			'<a   href="#" data-toggle="modal" data-target="#miModal" onclick="functionalter_modal()">'+
	            			'<strong>'+
	            			'oficio'+
	            			'</strong>'+
	            			'</a>'+
	            			'</td>'+
	            			'<td style="border: black 1px solid;text-align: center;"><strong>'+'<a href="/oficios/'+valuee.scanoffice+'">'+valuee.scanoffice+'</a></strong></td>'+
	            			//'<td><strong>'+
	            			estatus+
	            			//'</strong></td>'+
	            			'</tr>');   
	            	//$('#alldata').append('</table>');
	            }); 
	            
	   
	        }
	        
	     });
	
	
	
	
});



/*metodo para dividir filtreo para oficios*/
$('li.listoficess').click(function(){
	  
	  var clv =$(this).data('dato');
	  var noofiic = $(this).data('datos');	  
	  var tok = $('#token').val();
	 	
	  
	  $('#part1').html('');
      $('#part2').html('');
      $('#part3').html('');
      $('#part4').html('');
      $('#part5').html('');
      $('#part6').html('');
      $('#part7').html('');
      $('#part8').html('');
      $('#part9').html('');
      $('#part10').html('');
      var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	   $.ajax({
           url:"/detailsof",
           headers: {'X-CSRF-TOKEN': tok},
           type: 'POST',
           dataType: 'json',
           data: {clvof:clv,numof:noofiic},           
           success:function(e){
              
        	   
        	   $('#detailsoffice').html('');
        		//$('#detailsoffice').html(e);
            
        	   //$('#jz').append("<ul>");
               $(e).each(function(key,valuee){
                  //$('#detailsoffice').html(valuee.oficio);
            	   
            	  var f1=new Date(valuee.feche);
            	  var f2=new Date(valuee.fechanex);
            	  var f3=new Date(valuee.fechalimit);
             	  var fechaestandar1 = f1.getDate() + " de " + meses[f1.getMonth()] + " de " + f1.getFullYear();
             	  var fechaestandar2 = f2.getDate() + " de " + meses[f2.getMonth()] + " de " + f2.getFullYear();
              	  var fechaestandar3 = f3.getDate() + " de " + meses[f3.getMonth()] + " de " + f3.getFullYear();
                     
                  $('#part1').html(valuee.oficio + '/' + valuee.oficiopartdos);
                  $('#part2').html(valuee.tipodocumento);
                  $('#part3').html(valuee.xhorto+ '/' + valuee.xhortopartdos);
                  $('#part4').html(valuee.asunto);
                  $('#part5').html('Toluca de Lerdo, México, '+fechaestandar1);
                  $('#part6').html(valuee.paradigido+'<br>'+valuee.cargo +'<br>'+'P  R  E  S  E  N  T E<br>');
                  $('#part7').html('Anexo copia del auto de '+ fechaestandar2 +', emitido por el '+valuee.emitidopor+' , por el cual se solicita a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, lo siguiente:');
                  $('#part8').html(valuee.motivossol);
                  $('#part9').html('Lo anterior, se hace de su conocimiento por ser un asunto de su competencia de conformidad con el artículo 16 fracción I del Reglamento Interior del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México y numerales '+ valuee.numerales +' del Manual General de Organización del Instituto; por lo que, se solicita gire sus apreciables órdenes a quien corresponda, para que se proporcione a la brevedad posible por escrito a esta Unidad Jurídica, la información solicitada, a fin de cumplimentar el requerimiento formulado a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México.');
                  $('#part10').html('No se omite manifestar, que el término para proporcionar la información solicitada por el Juzgado referido, fenece de manera fatal el '+ fechaestandar3 +' en caso contrario, se impondrá una multa a la autoridad requerida -Director General-.');
                  
                
                  var marcadores_bd= [];
                  var mapa = null;
                  var x=valuee.lng
                  var y=valuee.lat
                 // alert(valuee.);
                  var punto = new google.maps.LatLng(x,y);
                  //var punto = new google.maps.LatLng(19.597959, -99.052797);
                  var config = {
                      zoom:15,
                      center:punto,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  };
                  mapa = new google.maps.Map( $("#mapa")[0], config );
                  //listar(,);
                  
                  
                  var posi = new google.maps.LatLng(x, y);//bien
                  //CARGAR LAS PROPIEDADES AL MARCADOR                  
                  var marca = new google.maps.Marker({
                      idMarcador:'item.IdPunto',
                      position:posi,
                      titulo: 'Ubicacion',
                      cx:x,
                      cy:y
                  });
                  //AGREGAR EVENTO CLICK AL MARCADOR
                  google.maps.event.addListener(marca, "click", function(){
                  
                      //limpiar_marcadores(nuevos_marcadores);
                  });
                  //AGREGAR EL MARCADOR A LA VARIABLE MARCADORES_BD
                  marcadores_bd.push(marca);
                  //UBICAR EL MARCADOR EN EL MAPA
                  marca.setMap(mapa);
                  
                        //MANERA DE HACER UNA FECHA ESTANDAR                
                	    // var date = new Date(valuee.feche),
                	    //   mnth = ("0" + (date.getMonth()+1)).slice(-2),
                	    // day  = ("0" + date.getDate()).slice(-2);
                	    //var fecha_fase1=[ date.getFullYear(), mnth, day ].join("-");
                        //alert(fecha_fase1);
                	    
                  
                  });
               
           }
        });
	});






$('li.listoficessz').click(function(){
	  var tok = $('#tokenx').val();  
	  var filesx=$('#upfiles').val();
	  var clv =$(this).data('dato');
	  var noofiic = $(this).data('datos');	  
	  //alert(filesx+'---------'+clv);
	  $('#d').html('');
	  $('#d').html('<input type="hidden" id="val" name="val" value="'+clv+'" /><input type="hidden" id="val2" name="val2" value="'+noofiic+'" />');
	  /*
		$.ajax({
	        url:"/savecomplements",
	        headers: {'X-CSRF-TOKEN': tok},
	        type: 'POST',
	        dataType: 'json',
	        data: {filesx:filesx,clv:clv},        
	        success:function(w){	        	
	        	
	        	
	           // $(w).each(function(key,valuee){                     

	          //  }); 
	            
	   
	        }
	        
	     });*/
	
	
	
	
});
 
$('#ubicacion').change(function(){
	var tok = $('#token').val(); 
	  //alert($(this).val());
	  $('#emitidopor').val('');
	  $('#emitidopor').val($(this).val());	
});


$('#nojuicio').change(function() {
	var nojicio=$(this).val();
	
	if(nojicio==0){
		$('#oficio').val('');
    	$('#oficiopartdos').val('');
    	$('#tipodocumento').val('');
    	$('#xhorto').val('');
    	$('#xhortopartdos').val('');
    	$('#asunto').val('');
    	$('#fechanex').val('');
    	$('#paradigido').val('');
    	$('#cargo').val('');    
    	$('#emitidopor').val('');
    	$('#fechalimit').val('');
    	$('#numerales').val('');
    	$('#motivossol').val('');
    	$('#filesmore').html('');
    	//$('#filesmore').html(' <input  type="file" id="scan" name="scan" required  autofocus >');
    	
	}else{
		$('#xhorto').val('');
		$('#xhorto').val($(this).val());
		var nojicio=$(this).val();
		var tok= $('#token').val();
		$.ajax({
	        url:"/pertj",
	        headers: {'X-CSRF-TOKEN': tok},
	        type: 'POST',
	        dataType: 'json',
	        data: {clv:nojicio},        
	        success:function(b){	        	
	        	//alert(b);
	        	
	            $(b).each(function(key,valuee){   
	            	
	            	
	            	  //var f2=new Date(valuee.fechanex);
	            	  
	            	  
	            	$('#oficio').val(valuee.oficio);
	            	$('#oficiopartdos').val(valuee.oficiopartdos);
	            	$('#tipodocumento').val(valuee.tipodocumento);
	            	$('#xhorto').val(valuee.xhorto);
	            	$('#xhortopartdos').val(valuee.xhortopartdos);
	            	$('#asunto').val(valuee.asunto);
	            	$('#fechanex').val(valuee.fechanex);
	            	$('#paradigido').val(valuee.paradigido);
	            	$('#cargo').val(valuee.cargo);
	            	//$('#ubicacion').val(valuee.ubicacion);
	            	$('#emitidopor').val(valuee.emitidopor);
	            	$('#fechalimit').val(valuee.fechalimit);
	            	$('#numerales').val(valuee.numerales);
	            	$('#motivossol').val(valuee.motivossol);
	            	$('#filesmore').html('');
	            	$('#filesmore').html('<br>Archivos Guardados anteriormente:<br><a   id="scan" name="scan" href="'+valuee.scanoffice+'" >'+valuee.scanoffice+'</a>');
	            	
	            	
	            	

	            }); 
	            
	   
	        }
	        
	     });
	}
	 	
});




$('#prerg').change(function() {
	var nojicio=$(this).val();
	
	if(nojicio==0){
		$('#expediente').val('');
    	$('#quejoso').val('');
    	$('#nojuicio').val('');    	
    	$('#asunto').val('');
    	$('#fechanex').val('');
    	$('#fechalimit').val('');
    	$('#emitidopor').val('');    	
    	$('#filesmore').html('');
    	//$('#filesmore').html(' <input  type="file" id="scan" name="scan" required  autofocus >');
    	
	}else{
		$('#expediente').val('');
		$('#expediente').val($(this).val());
		var nojicio=$(this).val();
		var tok= $('#token').val();
		$.ajax({
	        url:"/juxi",
	        headers: {'X-CSRF-TOKEN': tok},
	        type: 'POST',
	        dataType: 'json',
	        data: {clv:nojicio},        
	        success:function(b){	        	
	        	//alert(b);
	        	
	            $(b).each(function(key,valuee){   
	            	
	            	
	            	  //var f2=new Date(valuee.fechanex);
	            	  
	            	  
	            	$('#expediente').val(valuee.expediente);
	            	$('#quejoso').val(valuee.quejoso);
	            	$('#nojuicio').val(valuee.nojuicio);    	
	            	$('#asunto').val(valuee.asunto);
	            	$('#fechanex').val(valuee.fechanex);
	            	$('#fechalimit').val(valuee.fechalimit);
	            	$('#emitidopor').val(valuee.emitidopor);    	
	            	$('#filesmore').html('');	            	
	            	$('#filesmore').html('<br>Archivos Guardados anteriormente:<br><a   id="scan" name="scan" href="'+valuee.scan+'" >'+valuee.scan+'</a>');
	            	
	            	
	            	

	            }); 
	            
	   
	        }
	        
	     });
	}
	 	
});



 /*  ACTIVADOR DE CLIK DERECHO PARA SISTEMA
 $(function(){
    $(document).bind("contextmenu",function(e){
        return false;
    });
});
 */   
});
  
  
  /****************************************************************************/
  function listar(x,y)
  {/*
	  var posi = new google.maps.LatLng(x, y);//bien
      //CARGAR LAS PROPIEDADES AL MARCADOR
      var cx=x;
      var cy=y;
      var marca = new google.maps.Marker({
          idMarcador:'item.IdPunto',
          position:posi,
          titulo: 'Ubicacion',
          cx:cx,
          cy:cy
      });
      //AGREGAR EVENTO CLICK AL MARCADOR
      google.maps.event.addListener(marca, "click", function(){
      
          //limpiar_marcadores(nuevos_marcadores);
      });
      //AGREGAR EL MARCADOR A LA VARIABLE MARCADORES_BD
      marcadores_bd.push(marca);
      //UBICAR EL MARCADOR EN EL MAPA
      marca.setMap(mapa);*/
  }
  /****************************************************************************/
  
  
  
  
  
  
  /*FUNCION ALTERNA PARA EL DESPLIEGUE DEL LA VISTA PREVIA DEL OFICIO*/
  function functionalter_modal(){
	  var clv =$('#dato').val();
	  var noofiic = $('#datos').val();	  
	  var tok = $('#token').val();
 
	  $('#part1').html('');
      $('#part2').html('');
      $('#part3').html('');
      $('#part4').html('');
      $('#part5').html('');
      $('#part6').html('');
      $('#part7').html('');
      $('#part8').html('');
      $('#part9').html('');
      $('#part10').html('');
      var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	   $.ajax({
           url:"/detailsof",
           headers: {'X-CSRF-TOKEN': tok},
           type: 'POST',
           dataType: 'json',
           data: {clvof:clv,numof:noofiic},           
           success:function(e){
              
        	   
        	   $('#detailsoffice').html('');
        		//$('#detailsoffice').html(e);
            
        	   //$('#jz').append("<ul>");
               $(e).each(function(key,valuee){
                  //$('#detailsoffice').html(valuee.oficio);
            	   
            	  var f1=new Date(valuee.feche);
            	  var f2=new Date(valuee.fechanex);
            	  var f3=new Date(valuee.fechalimit);
             	  var fechaestandar1 = f1.getDate() + " de " + meses[f1.getMonth()] + " de " + f1.getFullYear();
             	  var fechaestandar2 = f2.getDate() + " de " + meses[f2.getMonth()] + " de " + f2.getFullYear();
              	  var fechaestandar3 = f3.getDate() + " de " + meses[f3.getMonth()] + " de " + f3.getFullYear();
                     
                  $('#part1').html(valuee.oficio + '/' + valuee.oficiopartdos);
                  $('#part2').html(valuee.tipodocumento);
                  $('#part3').html(valuee.xhorto+ '/' + valuee.xhortopartdos);
                  $('#part4').html(valuee.asunto);
                  $('#part5').html('Toluca de Lerdo, México, '+fechaestandar1);
                  $('#part6').html(valuee.paradigido+'<br>'+valuee.cargo +'<br>'+'P  R  E  S  E  N  T E<br>');
                  $('#part7').html('Anexo copia del auto de '+ fechaestandar2 +', emitido por el '+valuee.emitidopor+' , por el cual se solicita a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, lo siguiente:');
                  $('#part8').html(valuee.motivossol);
                  $('#part9').html('Lo anterior, se hace de su conocimiento por ser un asunto de su competencia de conformidad con el artículo 16 fracción I del Reglamento Interior del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México y numerales '+ valuee.numerales +' del Manual General de Organización del Instituto; por lo que, se solicita gire sus apreciables órdenes a quien corresponda, para que se proporcione a la brevedad posible por escrito a esta Unidad Jurídica, la información solicitada, a fin de cumplimentar el requerimiento formulado a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México.');
                  $('#part10').html('No se omite manifestar, que el término para proporcionar la información solicitada por el Juzgado referido, fenece de manera fatal el '+ fechaestandar3 +' en caso contrario, se impondrá una multa a la autoridad requerida -Director General-.');
                                                    
                  });
               
           }
        });
  }
  
  
  
  
  
  
  
  
  function deslplgaiGcem(){	  
	  $('#capdetalle').css('display','block');
  }
  
  function detalles(rbk) {
		 
	  var tok = $('#token').val();
	  
	  $('#nomp').html('');
	  $('#carp').html('');
	  $('#gadp').html('');
	  $('#domp').html('');
	  $('#telp').html('');
	  $('#eamp').html('');
	  
	  $('#noms').html('');
	  $('#cars').html('');
	  $('#gads').html('');
	  $('#doms').html('');
	  $('#tels').html('');
	  $('#eams').html('');
	  
	  $('#nomt').html('');
	  $('#cart').html('');
	  $('#gadt').html('');
	  $('#domt').html('');
	  $('#telt').html('');
	  $('#eamt').html('');
	  
	  $('#nomc').html('');
	  $('#carc').html('');
	  $('#gadc').html('');
	  $('#domc').html('');
	  $('#telc').html('');
	  $('#eamc').html('');
	  
	  $('#nomu').html('');
	  $('#caru').html('');
	  $('#gadu').html('');
	  $('#domu').html('');
	  $('#telu').html('');
	  $('#eamu').html('');
	  
	  $.ajax({
          url:"/textfinish",
          headers: {'X-CSRF-TOKEN': tok},
          type: 'POST',
          dataType: 'json',
          data: {xxx:rbk},            
          success:function(w){
              $(w).each(function(key,valuee){                     
                 //alert("clave municipio: "+valuee.nombrep);                                                       
            	  $('#cabecera').html(valuee.nommun);
              });                   
          }            
       });
	  
	  $.ajax({
          url:"/renderigcmfree",
          headers: {'X-CSRF-TOKEN': tok},
          type: 'POST',
          dataType: 'json',
          data: {xx:rbk},            
          success:function(w){
        	
        	  /*validador de json de objetos*/
        	  //alert(jQuery.isEmptyObject(w));
        	  if(jQuery.isEmptyObject(w)==true){
        		//alert('verdadero esta vacio');  
        		  $('#nomp').html('AUN NO HAY REGISTRO');
        		  $('#carp').html('AUN NO HAY REGISTRO');
        		  $('#gadp').html('AUN NO HAY REGISTRO');
        		  $('#domp').html('AUN NO HAY REGISTRO');
        		  $('#telp').html('AUN NO HAY REGISTRO');
        		  $('#eamp').html('AUN NO HAY REGISTRO');
        	  }else{
        		  //alert('falsoesta lleno');
        		  $(w).each(function(key,v){                     
                      //alert("clave municipio: "+valuee.nombrep);            	              	            	  
                 	  
                 	  $('#nomp').html(v.nombrep);
                 	  $('#carp').html(v.cargop);
                 	  $('#gadp').html(v.gradoacdp);
                 	  $('#domp').html(v.domiciliop);
                 	  $('#telp').html(v.telefonop);
                 	  $('#eamp').html(v.emailp); 
                 		            		  
                   });
        	  }
        	  
                                
          }            
       });
       $.ajax({
          url:"/renderigcm2free",
          headers: {'X-CSRF-TOKEN': tok},
          type: 'POST',
          dataType: 'json',
          data: {xx:rbk},            
          success:function(w){
                                   
                 //alert("clave municipio: "+valuee.nombres);  
            	  
            	
            	  if(jQuery.isEmptyObject(w)==true){
            		  $('#noms').html('AUN NO HAY REGISTRO');
            		  $('#cars').html('AUN NO HAY REGISTRO');
            		  $('#gads').html('AUN NO HAY REGISTRO');
            		  $('#doms').html('AUN NO HAY REGISTRO');
            		  $('#tels').html('AUN NO HAY REGISTRO');
            		  $('#eams').html('AUN NO HAY REGISTRO');            	  
            	  }else{
            		  $(w).each(function(key,v){
            		  $('#noms').html(v.nombres);
                	  $('#cars').html(v.cargos);
                	  $('#gads').html(v.gradoacds);
                	  $('#doms').html(v.domicilios);
                	  $('#tels').html(v.telefonos);
                	  $('#eams').html(v.emails);
            	  });  
            	  }
                 
                               
          }            
       });
       $.ajax({
          url:"/renderigcm3free",
          headers: {'X-CSRF-TOKEN': tok},
          type: 'POST',
          dataType: 'json',
          data: {xx:rbk},            
          success:function(w){
                                   
//                 alert("clave municipio: "+valuee.nombret); 
            	  if(jQuery.isEmptyObject(w)==true){
            		  $('#nomt').html('AUN NO HAY REGISTRO');
            		  $('#cart').html('AUN NO HAY REGISTRO');
            		  $('#gadt').html('AUN NO HAY REGISTRO');
            		  $('#domt').html('AUN NO HAY REGISTRO');
            		  $('#telt').html('AUN NO HAY REGISTRO');
            		  $('#eamt').html('AUN NO HAY REGISTRO');
            	  }else{
            		  $(w).each(function(key,v){
            	  $('#nomt').html(v.nombret);
            	  $('#cart').html(v.cargot);
            	  $('#gadt').html(v.gradoacdt);
            	  $('#domt').html(v.domiciliot);
            	  $('#telt').html(v.telefonot);
            	  $('#eamt').html(v.emailt);
            	  });
            	  }
                                 
          }            
       });
       $.ajax({
          url:"/renderigcm4free",
          headers: {'X-CSRF-TOKEN': tok},
          type: 'POST',
          dataType: 'json',
          data: {xx:rbk},            
          success:function(w){
                                   
                 //alert("clave municipio: "+valuee.nombrec);   
            	  if(jQuery.isEmptyObject(w)==true){
            		  $('#nomc').html('AUN NO HAY REGISTRO');
            		  $('#carc').html('AUN NO HAY REGISTRO');
            		  $('#gadc').html('AUN NO HAY REGISTRO');
            		  $('#domc').html('AUN NO HAY REGISTRO');
            		  $('#telc').html('AUN NO HAY REGISTRO');
            		  $('#eamc').html('AUN NO HAY REGISTRO');
            	  }else{
            		  $(w).each(function(key,v){            	  
            	  $('#nomc').html(v.nombrec);
            	  $('#carc').html(v.cargoc);
            	  $('#gadc').html(v.gradoacdc);
            	  $('#domc').html(v.domicilioc);
            	  $('#telc').html(v.telefonoc);
            	  $('#eamc').html(v.emailc);
            	  }); 
            	  }
                                
          }            
       });
       $.ajax({
          url:"/renderigcm5free",
          headers: {'X-CSRF-TOKEN': tok},
          type: 'POST',
          dataType: 'json',
          data: {xx:rbk},            
          success:function(w){
                                  
                 //alert("clave municipio: "+valuee.nombreu); 
            	  
            	  if(jQuery.isEmptyObject(w)==true){
            		  $('#nomu').html('AUN NO HAY REGISTRO');
            		  $('#caru').html('AUN NO HAY REGISTRO');
            		  $('#gadu').html('AUN NO HAY REGISTRO');
            		  $('#domu').html('AUN NO HAY REGISTRO');
            		  $('#telu').html('AUN NO HAY REGISTRO');
            		  $('#eamu').html('AUN NO HAY REGISTRO');
            	  }else{
            		  $(w).each(function(key,v){ 
            	  $('#nomu').html(v.nombreu);
            	  $('#caru').html(v.cargou);
            	  $('#gadu').html(v.gradoacdu);
            	  $('#domu').html(v.domiciliou);
            	  $('#telu').html(v.telefonou);
            	  $('#eamu').html(v.emailu);
            	  });
            	  }
                                 
          }            
       });
	  
	  
	  
	  
	  
	  
	  
	  
	
  }
  
  
 
