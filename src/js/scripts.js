
  // google analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74347197-1', 'auto');
  ga('send', 'pageview');


// pega o cookie caso exista
var cookieValue = $.cookie("coduser");


// efeito gradiente para header
$(window).scroll(function() {    

    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".headerr").addClass("headerrr");
    }
    if (scroll < 50) {
        $(".headerr").removeClass("headerrr");
    }
});

// Esconde header e aparece ao puxar para cima
$(function(){
	var didScroll;
	var lastScrollTop = 0;
	var delta = 20;
	var navbarHeight = $('header').outerHeight();

	$(window).scroll(function(event){
	    didScroll = true;
	});

	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 50);

	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    if (st > lastScrollTop && st > navbarHeight){
	        $('.headerr').removeClass('nav-down').addClass('nav-up');
	    } else {
	        if(st + $(window).height() < $(document).height()) {
	            $('.headerr').removeClass('nav-up').addClass('nav-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}
});


// tooltip
if (Modernizr.mq('(max-width: 767px)')) {

} else {
    $('.tooltips').tipsy({gravity: 's', html: true });
    $('input.tooltips').tipsy({trigger: 'focus', gravity: 's', html: true});
}
// if ($(window).width() <= 800){	
// 		// do something here
// }

$("body").on("mouseover", ".deletarregistro", function () {
	$('.deletarregistro').tipsy({gravity: 's', html: true });
});



// trocar entre privado e public
$('.privateboard').click(function (){

	textoalerta = $(this).attr('name');

	if (confirm(textoalerta)) {
	
		board = $(this).attr('ref');

		$.ajax({
		    type: 'post',
		    url: 'a.php?a=shared&status=1&board='+board,
		    success: function () {
		  	$(".privateboard").hide(); 
		    $(".publicboard").show(); 
			}
		});

	}

});

$('.publicboardclick').click(function (){

	board = $('.publicboard').attr('ref');

	$.ajax({
	    type: 'post',
	    url: 'a.php?a=shared&status=0&board='+board,
	    success: function () {
	  	$(".publicboard").hide(); 
       	$(".privateboard").show(); 		
		}
	});
       
});


// Criar @NOVO BOARD   
$(function () {

	$("#addboard").unbind('submit').bind('submit', function (e) {

    // $('#addboard').on('submit', function (e) {

    	$('.bt_lancar').attr('disabled', 'disabled');

      	e.preventDefault();

      $.ajax({
        type: 'post',
        url: 'a.php?a=addboard',
        contentType: "application/x-www-form-urlencoded;charset=UTF-8",
        data: $('#addboard').serialize(),
        success: function (data) {

        	var nome = $("#nomenovoboard").val();

        	var d = new Date();
			var time = d.getDate() + "/" + ("0" + (d.getMonth() + 1)).slice(-2) + "/" + parseInt(d.getFullYear().toString().substr(2,2));


            $("#primeiroboard").prepend($('<div class="container primeiroboard"><a class="more" id="'+ data +'" href="#'+ data +'" rel="'+ nome +'"><div class="container_box box_normal"><div class="box box1"><h2>'+time+'</h2></div><div class="box box2"><img src="img/dot_null.png" class="dot_lancamento" alt=""></div><div class="box box3"><h1 class="lancamento">'+ nome +'</h1></div></div></a></div>').fadeIn('fast'));
            // <h2><i>por</i> <span class="buget">você</span></h2>

            // caso ainda esteja sem board tira a mensagem de sem
            $(".semboardtotal").hide();

            $("#addboard")[0].reset();

            $('.bt_lancar').removeAttr('disabled');


            //redireciona para ele

			$("#button").show();

			$("#headboardpublico").hide();
			$("#headboardprivado").show();

			$("#publicboard").hide();

			$('#addregistro').show();
			$('.deletarboard').show();
			
			// pega ID DO BOARD
			var id = data;

			var nomeboard = nome;
			// deu nome ao titulo
			$(".tituloboard").text(nomeboard);

			$('.deletarboard').attr('ref',id);
			$('.shared').attr('ref',id);
			$('.urlboard').text(id);

			window.location.hash = '#'+ id;

			// estagio mais importante: vamos criar a lista com os dados do board
			// ao selecionar carrega lista com o conteudo
		    $("#listaderegistros").load("json.php?a=941&board="+id);

		    // vmaos mudar o codigo do form para adicionar novos registros a ele
		    $('#codboardaddregistro').attr('value',id);
		    $(".tituloboard").attr('id',id);

		    // adiciona no valor geral do mes
			valordomesiniciaob = $("#valordomes").text();
			valordomesiniciaoq = Number(valordomesiniciaob.replace(/[^0-9\.]+/g,""));
			// $("#valordomes").text("R$ " + valordomesiniciaoq);

			$('#boardtotal').show();
			$("#goboards").show();
			$("#logout").hide();
			alturatotal = $("#hi").height() + $("#todosboards").height();
			$('body').animate({marginTop: "-"+ alturatotal+"px"}, 500, function() {
				// quica para voltar pra cima
				$('html,body').animate ({scrollTop:$('#boardtotal').offset().top}, 500);
			});

			$("#valor").focus();
			// retirar foco do input do nome do novo board
			$('#nomenovoboard').blur();

        }

      });

    	e.stopImmediatePropagation();
		return false;

    });


});


//@NOVO REGISTRO  
$(function () {

    $('#addregistro').on('submit', function (e) {

    $('.bt_lancar').attr('disabled', 'disabled');

      $.ajax({
        type: 'post',
        url: 'a.php?a=addregistro',
        contentType: "application/x-www-form-urlencoded;charset=UTF-8",
        data: $('#addregistro').serialize(),
        success: function (idddd) {
			
			var valorr = $("#valor").val();

        	var descricao = $("#descricao").val(); 
			var valor = Number(valorr.replace(/[^0-9\.]+/g,"")); 
        	var tipo = $("#tipo").val(); 

        	var idd = $("#codboardaddregistro").val();

		    
		    if(valor == ''){
		    	// anotação

		         var doot = "dot_null";

		    } else {

		    	if (document.getElementById('tipo').checked) {
		    	 
		    	 // positivo
			     var doot = "dot_plus";

			     // adiciona no valor geral do mes
			     valordomesiniciaox = $("#valordomes").text();
			     valordomesiniciaoxff = valordomesiniciaox.slice(2);
			     caixa = Number(valordomesiniciaoxff);

				    if (caixa > 0) {
					    valordomesiniciaoz = caixa + valor;
					} else {
						valordomesiniciaoz = (caixa - (valor * -1));
					}

					var moedatipo = $("#moedatipo").val();

			     // valordomesiniciaozvv = valordomesiniciaoz + valor;
			     	valordomesiniciaoed = valordomesiniciaoz.toFixed(2);
        			$("#valordomes").text(moedatipo +" "+valordomesiniciaoed);

        			valor = ""+ valor.toFixed(2);
		    	
			    } else {

			     // negativo 
		         var doot = "dot_neg";

		         

		         // adiciona no valor geral do mes
			     valordomesiniciaox = $("#valordomes").text();
			     valordomesiniciaoxff = valordomesiniciaox.slice(2);
			     valordomesiniciao = Number(valordomesiniciaox.replace(/^-?\d*\.?\d+$/,""));
			     caixa = Number(valordomesiniciaoxff);


			    if (caixa > 0) {
					    valordomesiniciaoz = caixa + (valor * -1);
				} else {
					valordomesiniciaoz = (caixa - (valor));
				}

				var moedatipo = $("#moedatipo").val();

	     
			     valordomesiniciaoed = valordomesiniciaoz.toFixed(2);
        			$("#valordomes").text(moedatipo+ " " + valordomesiniciaoed);

        			valor = "-"+ valor.toFixed(2);

			    }

		    }		

		    var d = new Date();
			var time = d.getDate() + "/" + ("0" + (d.getMonth() + 1)).slice(-2) + "/" + parseInt(d.getFullYear().toString().substr(2,2));	


		    if (valor) {

		    	$("#primeiropost").prepend($('<div class="container ultimopost"><div class="container_box box_normal"><div class="box box1"><h1>'+ moedatipo +' '+ valor +'</h1><h2>'+time+'</h2></div><div class="box box2"><img src="img/'+ doot +'.png" class="dot_lancamento" alt=""></div><div class="box box3"><h1 class="lancamento">'+ descricao +'</h1> <h2><span class="buget deletarregistro" original-title="Deseja mesmo apagar esse registro?" id="'+idddd+'" rel="'+idd+'" val="'+valor+'">Apagar?</span></h2></div></div></div>').fadeIn('fast'));
		    } else {
		    	$("#primeiropost").prepend($('<div class="container ultimopost"><div class="container_box box_normal"><div class="box box1"><h2>'+time+'</h2></div><div class="box box2"><img src="img/'+ doot +'.png" class="dot_lancamento" alt=""></div><div class="box box3"><h1 class="post_separador">'+ descricao +'</h1> <h2><span class="buget deletarregistro" original-title="Deseja mesmo apagar esse registro?" id="'+idddd+'" rel="'+idd+'">Apagar?</span></h2></div></div></div>').fadeIn('fast'));
		    }   
		    // <i>por</i> <span class="buget">você</span>

            


            // $("#addregistro")[0].reset();
            $("#valor").val('');
            $("#descricao").val('');


            $('.bt_lancar').removeAttr('disabled');

        }

      });

		e.stopImmediatePropagation();
		return false;


    });

});




// @APAGAR REGISTRO
$(document).on("click",".deletarregistro",function() {

	var id = $(this).attr('id');
	var board = $(this).attr('rel');
	var valorrr = $(this).attr('val');
	var valor = Number(valorrr);

	textoalertaa = $(this).attr('name');

	if (confirm(textoalertaa)) {

		

      	$.ajax({
        type: 'get',
        url: 'a.php?a=apagarregistro&board='+board+'&id='+id,
        success: function () {

        	if (valor) {


	        	if (valor > 0) {
	        	// na verdade deveria ser maior ou igual

	        		// positivo
					// adiciona no valor geral do mes
					valordomesiniciaox = $("#valordomes").text();
					valordomesiniciaoxff = valordomesiniciaox.slice(2);
					caixa = Number(valordomesiniciaoxff);


					if (caixa > 0) {
					    valordomesiniciaoz = caixa + (valor * -1);
					} else {
						valordomesiniciaoz = (caixa - (valor));
					}



					var moedatipo = $("#moedatipo").val();
		     
				    valordomesiniciaoed = valordomesiniciaoz.toFixed(2);
            		$("#valordomes").text(moedatipo +" " + valordomesiniciaoed);
        		
        			
			    	
				} else {

					// negativo
				     // adiciona no valor geral do mes
				     valordomesiniciaox = $("#valordomes").text();
				     valordomesiniciaoxff = valordomesiniciaox.slice(2);
				     caixa = Number(valordomesiniciaoxff);

				    
					if (caixa > 0) {
					    valordomesiniciaoz = caixa + (valor * -1);
					} else {
						valordomesiniciaoz = (caixa - (valor));
					}

					var moedatipo = $("#moedatipo").val();

				     // valordomesiniciaozvv = valordomesiniciaoz + valor;
				     	valordomesiniciaoed = valordomesiniciaoz.toFixed(2);
            			$("#valordomes").text(moedatipo +" " + valordomesiniciaoed);

				}

			}


        }

    	});

		$(this).closest('.container').fadeOut();

      	
	}
	return false;

});

// @APAGAR BORD
$(document).on("click",".deletarboard",function() {

	var board = $(this).attr('ref');

	textoalertaaa = $(this).attr('name');

	if (confirm(textoalertaaa)) {

		$('.deletarboard').text(":(").attr('disabled', 'disabled');

      	$.ajax({
        type: 'get',
        url: 'a.php?a=apagarboard&board='+board,
        success: function () {


        	// carrega lista de board
			$("#listadeboards").load("json.php?a=942");

        	setTimeout(function () { 

				window.location.hash = '#';

				$("#button").hide();
				$("#goboards").hide();
				$("#logout").show();



				$('body').animate({marginTop: "-"+ $("#hi").height()+"px"}, 500, function() {
				// $('body').animate({marginTop: "-0px"}, 500, function() {
					$('#boardtotal').hide();
					$('.deletarboard').text("Apagar?").removeAttr('disabled');	
				});


        	},100);
        	

        }	
    	});
  	

	}
	return false;

});




// editando nome de board
$(function() {
        
	$(".editable").editable("a.php?a=editregistro", { 
		
		indicator : '...',
		select : false,
		submit : 'Save',
		height: 25,
		maxlength: 20,
		cancel : 'Cancel',
		cssclass : "editable",
		style   : 'display: inline-block;clear:both',
		callback: function(value, settings){   

			// $("#listadeboards").load("json.php?a=942"); 

    	}

	});  

});




	
//@HASH

var hashValue = location.hash;  
hashValue = hashValue.replace(/^#/, '');  

if (hashValue) {


	// vamos pegar os dados do board
	$.ajax({
	url:"a.php?a=isshared&url="+hashValue,
	contentType: "application/json; charset=utf-8",
	dataType: 'json',  
		success:function(dataq) {


			if(dataq[3] == "0") {
				// board não existe ou não encontrado
				$("#button").hide();
			  	$("#goboards").hide();
			  	$(".index").show();

			

			  	$('#boardtotal').hide();
			  	$('#todosboards').hide();

			  	$("body").css( { "margin-top" : "0px" } );
			  	$(".boardnaoencontrado").fadeIn(1000);
			}

			// board existe vamos pegar o nome
			$.ajax({url:"a.php?a=nomedoboard&url="+hashValue,
				success:function(datanome) {
					$(".tituloboard").text(datanome);
				}
			});

			if(dataq[0] == "1") {
			// @BOARD PUBLICO

				$(".publicboard").fadeIn();
				$(".privateboard").hide();
			
				$('.urlboard').text(hashValue);


				if(dataq[1] == "1") {
					// carrega REGISTROS
					$("#listaderegistros").load("json.php?a=941&board="+hashValue);
					// é dono
					$('.deletarboard').fadeIn().attr('ref',hashValue);
					$(".tituloboard").attr('id',hashValue);
					$("#goboards").show();
					$("#headboardpublico").hide();
					$("#headboardprivado").show();
					// vmaos mudar o codigo do form para adicionar novos registros a ele
				    $('#codboardaddregistro').attr('value',hashValue);

				    $('.shared').attr('ref',hashValue);

				} else {
					// carrega REGISTROS
					$("#listaderegistros").load("json.php?a=940&board="+hashValue);
					// já q nao é dono desabilita mudar tipo
					$('.publicboard').click(function () {return false;});
					$('.deletarboard').hide();
					$('#addregistro').hide();


					$(".index").show();
					$(".saibamais").show();	
					$(".saibamais").attr('id',hashValue);	
					$("#goboards").hide();
					$("#headboardpublico").show();
					$("#headboardprivado").hide();

				}


				    

			    alturatotal = $("#hi").height() + $("#todosboards").height();

				$("body").css( { "margin-top" : "-"+alturatotal+"px" } );

				$(window).scrollTop($('#boardtotal').offset().top);
			
					

			} else {
			// @BOARD PRIVADO

				if(dataq[1] == "1") {
					// é dono
					// $(".tituloboard").text(dataq[2]);
					$(".privateboard").fadeIn(); 
					$(".publicboard").hide();

					$('.deletarboard').fadeIn().attr('ref',hashValue);

					$("#goboards").show();
					$("#headboardpublico").hide();
					$("#headboardprivado").show();


					// carrega REGISTROS
					$("#listaderegistros").load("json.php?a=941&board="+hashValue);
				    // vmaos mudar o codigo do form para adicionar novos registros a ele
				    $('#codboardaddregistro').attr('value',hashValue);

				  	
				  	// já tem o dado na url > manda direto pro board

				  	$("#button").show();

			    	$(".tituloboard").attr('id',hashValue);

			    	$('.shared').attr('ref',hashValue);
			    	$('.urlboard').text(hashValue);
			 
				  	// $(".tituloboard").text(hashValue);
				  	// se tiver logado vai pro board

				  	alturatotal = $("#hi").height() + $("#todosboards").height();

					$("body").css( { "margin-top" : "-"+alturatotal+"px" } );

					$(window).scrollTop($('#boardtotal').offset().top);


				}else {
					// // um anonimo da internet
					
					$("#button").hide();
				  	$("#goboards").hide();
				  	$(".index").show();

				

				  	$('#boardtotal').hide();
				  	$('#todosboards').hide();

				  	$("body").css( { "margin-top" : "0px" } );
				  	$(".boardnaoencontrado").fadeIn(1000);
				
				}



					// board privado (temos que ver se é o dono) 2 SITUACOES
					// if (cookie = dono) { mostra tudo } else { vai para home com mensagem de erro}
					// busca userboars cookie & board
					// if (achou algo)  { if (cookie = dono) { dono} else { afiliado} } else { deslogado }
					

				// if (cookieValue) {
				// está logado

					// if (cookieValue=dono) {
					// é o dono
					// } else {
					// 	redireciona para index
					// }

				


			}
		}
	});




} else {
// @SEM HASH sem board na url, bora pra todos os boards 

	
	if (cookieValue) {
	// logado > board
		// $("#logout").text(cookieValue+" Sair");
		$("#listadeboards").load("json.php?a=942");

	  	$("#button").hide();
	  	$("#goboards").hide();
	  	$("#logout").show();

		$("body").css( { "margin-top" : "-"+$("#hi").height()+"px" } );

	  	$('#boardtotal').hide();


	} else {
	// não logado > index

	  	$("#button").hide();
	  	$("#goboards").hide();
	  	$(".index").show();

		$("body").css( { "margin-top" : "0px" } );

	  	$('#boardtotal').hide();
	  	$('#todosboards').hide();

	}


}



// crack pra fazer funciona no mobile quando focar no input
$(document).on('blur', 'input, textarea', function () {
    setTimeout(function () {
        window.scrollTo(document.body.scrollLeft, document.body.scrollTop);
    }, 0);
});


$(function() {$('#valor').maskMoney({prefix:'', allowNegative: false, thousands:'', decimal:'.', affixesStay: false});});



// botao de adiciao rapida no mobile
$("#button").click(function() {

	$(window).scrollTop($('#boardtotal').offset().top);
	$('#valor').focus();
});


// ao clicar ajuda dá foco no campo novo board
$(document).on("click",".sem_board_legenda a",function() {
    $('#nomenovoboard').focus();
});


// vai para todos os boards
$("#goboards").click(function() {

	if ($('body').find('.aindanaocarregoulista')) {
	    $("#listadeboards").load("json.php?a=942");
	}

	$("#button").hide();
	$("#goboards").hide();
	$("#logout").show();

	$('body').animate({marginTop: "-"+ $("#hi").height()+"px"}, 500, function() {
		$('#boardtotal').hide();	
	});

});




// HI
// vai para todos os boards
$("#logout").click(function() {

	$.removeCookie("coduser");

	$("#hi").show();

	$(".boardnaoencontrado").hide();

	$('body').animate({marginTop: "-0px"}, 500, function() {
		$('#boardtotal').hide();	
		$("#goboards").hide();
		$('#todosboards').hide();
		$('#boardtotal').hide();
		$("#logout").hide();
		$(".index").show();	

	});



});


// Saiba mais (apenas boards publicos deslogados)
// vai para todos os boards
$(".saibamais").click(function() {

	voltarurl = $(".saibamais").attr('id');

	$("#hi").show();

	$(".boardnaoencontrado").hide();
	$(".saibamais").hide();
	$(".voltarboard").show();
	$(".voltarboard").attr('href','#'+voltarurl);


	$('body').animate({marginTop: "-0px"}, 500, function() {
		$('#boardtotal').hide();

		$("#goboards").hide();
		$('#todosboards').hide();
		$('#boardtotal').hide();
		$("#logout").hide();
		$(".index").show();	

	});

});

// Voltar para board
// vai para todos os boards
$(".voltarboard").click(function() {

	$(".saibamais").show();
	$(".voltarboard").hide();
	$('#boardtotal').show();

	alturatotal = $("#hi").height();

	$('body').animate({marginTop: "-"+alturatotal+"px"}, 500, function() {

		$(window).scrollTop($('#boardtotal').offset().top);


	});


});



// @LOGIN 
$(function () {




	//$("#formlogin").unbind('submit').bind('submit', function (e) {


    $('#formlogin').on('submit', function (e) {

    	e.preventDefault();

    	// VALIDAR FORMULARIO
        if($("#signin-email").val()=="")
        {
            $("#erro-signin-email").fadeIn().delay(3000).fadeOut();
            $("#signin-email").focus();
            return false;
        } else {

        	if (!isValidEmailAddress($("#signin-email").val())) {
		        $("#erro-signin-email").fadeIn().delay(3000).fadeOut();
		        $("#signin-email").focus();
		        return false;  
		    } 

        }



        if($("#signin-password").val()=="")
        {
            $("#erro-signin-senha").fadeIn().delay(3000).fadeOut();
            return false;
        }
 
		$('#logingobt').attr('disabled', 'disabled');


		$.ajax({
		type: 'post',
		url: 'entrar.php?a=in',
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		data: $('#formlogin').serialize(),
			success: function (datab) {

				if(datab == 0) {
					$("#erro-signin-login").fadeIn().delay(4000).fadeOut();
            		return false;						
		    		// $(".textolognemail").fadeIn().delay(5000).fadeOut();
		    		// $(".textolognemail").text("Ops! Preencha corretamente com seu e-mail e senha cadastrados");		    		
		  		} else {
		  			
		  			$('.cd-user-modal').removeClass('is-visible');	

		        	// criar cookie
		        	// com o resultado
					// $.cookie("coduser", datab , { expires : 10 });
					if (document.getElementById('rememberme').checked) {
		        		$.cookie("coduser", datab , { expires : 30 });
			        } else {
			            $.cookie("coduser", datab , { expires : 1 });
			        }

					$(".saibamais").hide();
					$(".voltarboard").hide();

					$("#listadeboards").load("json.php?a=942");

					$("#button").hide();
					$("#goboards").hide();
					$("#logout").show();

					// apenas para ver o codigo do usuairo $("#logout").text(datab);

					$('#todosboards').show();
					$(".index").hide();	


					$('body').animate({marginTop: "-"+ $("#hi").height()+"px"}, 1500, function() {
						// quica para voltar pra cima
						$('html,body').animate ({scrollTop:$('#hi').offset().top}, 500);
						// $("#hi").hide();
						$('#boardtotal').hide();
					});


				    $("#formlogin")[0].reset();
			    

		  		}				


			}

		});

		$('#logingobt').removeAttr('disabled'); 

    	e.stopImmediatePropagation();
		return false;


    });

});




// @CADASTRO 
// termos
$('#vermaistermos').on('click', function(){
	$(".termosresumidos").fadeIn();
});

$(function () {

    // $('#formcadastro').on('submit', function (e) {
    $("#formcadastro").unbind('submit').bind('submit', function (e) {

    	e.preventDefault();

    	// VALIDAR FORMULARIO
    	if($("#signup-username").val()=="")
        {
            $("#erro-signup-name").fadeIn().delay(3000).fadeOut();
            $("#signup-username").focus();
            return false;
        }
        if($("#signup-email").val()=="")
        {
            $("#erro-signup-email").fadeIn().delay(3000).fadeOut();
            $("#signup-email").focus();
            return false;
        } else {

        	if (!isValidEmailAddress($("#signup-email").val())) {
		        $("#erro-signup-email2").fadeIn().delay(3000).fadeOut();
		        $("#signup-email").focus();
		        return false;  
		    } 

        }

        if (document.getElementById('acceptterms').checked) {
        } else {
            $("#erro-signup-termos").fadeIn().delay(3000).fadeOut();
            return false;
        }



        if($("#signup-password").val()=="")
        {
            $("#erro-signup-password").fadeIn().delay(3000).fadeOut();
            return false;
        }

 
		$('#btsubmitformcadastro').attr('disabled', 'disabled');


		$.ajax({
		type: 'post',
		url: 'entrar.php?a=newin',
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		data: $('#formcadastro').serialize(),
			success: function (dataqq) {

				if(dataqq == 0) {
		    		$(".textolognemailcadastro").fadeIn().delay(9000).fadeOut();
		    		$(".textolognemailcadastro").text("Ops! Parece que este e-mail já foi cadastrado!");		    		
		  		} else {
		  			$('.cd-user-modal').removeClass('is-visible');	

		        	// criar cookie
		        	// com o resultado	        	
			        $.cookie("coduser", dataqq , { expires : 1 });
			        					

					$(".saibamais").hide();
					$(".voltarboard").hide();

					$("#listadeboards").load("json.php?a=942");

					$("#button").hide();
					$("#goboards").hide();
					$("#logout").show();


					// $("#logout").text(dataqq);

					$('#todosboards').show();
					$(".index").hide();	


					$('body').animate({marginTop: "-"+ $("#hi").height()+"px"}, 1500, function() {
						// quica para voltar pra cima
						$('html,body').animate ({scrollTop:$('#hi').offset().top}, 500);
					});


				    $("#formcadastro")[0].reset();

				    $("#nomenovoboard").focus();
			    

		  		}				


			}

		});

		$('#btsubmitformcadastro').removeAttr('disabled'); 

    	e.stopImmediatePropagation();
		return false;


    });

});



// BOARDS TO BOARD
$(document).on("click",".more",function() {



	$("#headboardpublico").hide();
	$("#headboardprivado").show();

	$('#addregistro').show();
	$('.deletarboard').show();
	
	// pega ID DO BOARD
	var id = $(this).attr('rel');
	var nomeboard = $(this).attr('name');

	// deu nome ao titulo
	$(".tituloboard").text(nomeboard);

	$('.deletarboard').attr('ref',id);
	$('.shared').attr('ref',id);
	$('.urlboard').text(id);


	// vamos ver se o board é public ou privado
	$.ajax({
	    url:"a.php?a=isshared&url="+id, 
	    contentType: "application/json; charset=utf-8",
		dataType: 'json', 
	    success:function(dataz) {

	    	// esconde mensagem de sem internet
	    	$("#seminternet").hide();
	    	
	    	if(dataz[0] == "1") {
	    		$(".privateboard").hide();
	    		$(".publicboard").fadeIn(); 
	    		
	  		} else {
	  			$(".publicboard").hide();
	  			$(".privateboard").fadeIn(); 

	  		}

	  		$("#button").show();


	  		// estagio mais importante: vamos criar a lista com os dados do board
			// ao selecionar carrega lista com o conteudo
		    $("#listaderegistros").load("json.php?a=941&board="+id);

		    // vmaos mudar o codigo do form para adicionar novos registros a ele
		    $('#codboardaddregistro').attr('value',id);
		    $(".tituloboard").attr('id',id);


		    // adiciona no valor geral do mes
			valordomesiniciaob = $("#valordomes").text();
			valordomesiniciaoq = Number(valordomesiniciaob.replace(/[^0-9\.]+/g,""));

			var moedatipo = $("#moedatipo").val();

			$("#valordomes").text(moedatipo+" " + valordomesiniciaoq);

			$("#valor").focus();

			$('#boardtotal').show();
			$("#goboards").show();
			$("#logout").hide();
			alturatotal = $("#hi").height() + $("#todosboards").height();
			$('body').animate({marginTop: "-"+ alturatotal+"px"}, 500, function() {
				// quica para voltar pra cima
				$('html,body').animate ({scrollTop:$('#boardtotal').offset().top}, 500);
			});

			



	    },
	    error: function() { 
	        $("#seminternet").fadeIn(); 
	    } 


	});

			


	
});
// fim do abrir board






// menu login
jQuery(document).ready(function($){
	var formModal = $('.cd-user-modal'),
		formLogin = formModal.find('#cd-login'),
		formSignup = formModal.find('#cd-signup'),
		formForgotPassword = formModal.find('#cd-reset-password'),
		formModalTab = $('.cd-switcher'),
		tabLogin = formModalTab.children('li').eq(0).children('a'),
		tabSignup = formModalTab.children('li').eq(1).children('a'),
		forgotPasswordLink = formLogin.find('.cd-form-bottom-message a'),
		backToLoginLink = formForgotPassword.find('.cd-form-bottom-message a'),
		mainNav = $('.main-nav');

	//open modal
	mainNav.on('click', function(event){
		$(event.target).is(mainNav) && mainNav.children('ul').toggleClass('is-visible');
	});

	//open sign-up form
	mainNav.on('click', '.cd-signup', signup_selected);
	mainNav.on('click', '.cd-signin', login_selected);

	//close modal
	formModal.on('click', function(event){
		if( $(event.target).is(formModal) || $(event.target).is('.cd-close-form') ) {
			formModal.removeClass('is-visible');
		}	
	});
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		formModal.removeClass('is-visible');
	    }
    });

	//switch from a tab to another
	formModalTab.on('click', function(event) {
		event.preventDefault();
		( $(event.target).is( tabLogin ) ) ? login_selected() : signup_selected();
	});

	//hide or show password
	$('.hide-password').on('click', function(){
		var togglePass = $(this),
		exibir = $('.hide-password').attr('rel'),
		ocultar = $('.hide-password').attr('name'),

		passwordField = togglePass.prev('input');
		
		( 'password' == passwordField.attr('type') ) ? passwordField.attr('type', 'text') : passwordField.attr('type', 'password');
		( ocultar == togglePass.text() ) ? togglePass.text(exibir) : togglePass.text(ocultar);
		//focus and move cursor to the end of input field
		passwordField.putCursorAtEnd();
	});

	//show forgot-password form 
	forgotPasswordLink.on('click', function(event){
		event.preventDefault();
		forgot_password_selected();
	});

	//back to login from the forgot-password form
	backToLoginLink.on('click', function(event){
		event.preventDefault();
		login_selected();
	});

	function login_selected(){
		mainNav.children('ul').removeClass('is-visible');
		formModal.addClass('is-visible');
		formLogin.addClass('is-selected');
		formSignup.removeClass('is-selected');
		formForgotPassword.removeClass('is-selected');
		tabLogin.addClass('selected');
		tabSignup.removeClass('selected');
	}

	function signup_selected(){
		mainNav.children('ul').removeClass('is-visible');
		formModal.addClass('is-visible');
		formLogin.removeClass('is-selected');
		formSignup.addClass('is-selected');
		formForgotPassword.removeClass('is-selected');
		tabLogin.removeClass('selected');
		tabSignup.addClass('selected');
	}

	function forgot_password_selected(){
		formLogin.removeClass('is-selected');
		formSignup.removeClass('is-selected');
		formForgotPassword.addClass('is-selected');
	}

	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
		  	}
		}).blur(function() {
		 	var input = $(this);
		  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
		  	}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  	$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
			 		input.val('');
				}
		  	})
		});
	}

});


// forma para solucionar foco input hide botao rapido adição
$('input').focus(function() {
	$("#button").hide();
    $('input').bind('focusin click',function(e) {
    	$("#button").show();
    });
});


//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
	return this.each(function() {
    	if (this.setSelectionRange) {
      		var len = $(this).val().length * 2;
      		this.focus();
      		this.setSelectionRange(len, len);
    	} else {
      		$(this).val($(this).val());
    	}
	});
};

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}