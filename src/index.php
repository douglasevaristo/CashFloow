<?php include("doc-lang.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><? echo $home_titulo_001; ?></title>

	<meta name="author" content="Douglas Evaristo">
	<meta name="description" content="CashFloow - Organize suas finanças pessoais, da sua empresa, gastos de uma festa ou viagem em um simples caixa de entrada e saída">
	<meta name="keywords" content="timeline, livro caixa, controle financeiro">

	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://www.cashfloow.com">
	<meta property="og:site_name" content="CashFloow">
	<meta property="og:description" content="Organize suas finanças pessoais, da sua empresa, gastos de uma festa ou viagem em um simples caixa de entrada e saída">
	 
	<meta property="og:image" content="http://cashfloow.com/img/ph001.png"> 	 
	<meta property="og:type" content="website">



	<!-- Setups para virar app  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="mobile-web-app-capable" content="yes">

	<!-- icon ios -->
	<link rel="apple-touch-icon" href="img/icon/ios/AppIcon.appiconset/Icon-60@2x.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="img/icon/ios/AppIcon.appiconset/Icon-60@3x.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/icon/ios/AppIcon.appiconset/Icon-76.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="img/icon/ios/AppIcon.appiconset/Icon-76@2x.png" />
	<link rel="apple-touch-icon" sizes="58x58" href="img/icon/ios/AppIcon.appiconset/Icon-Small@2x.png" />






	<link rel="icon" type="image/png" href="img/favicon.png" />

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic' rel='stylesheet' type='text/css'>
  	
  	<link rel="stylesheet" href="css/style.min.css" media="all" type="text/css" />

<!--   	<link rel="stylesheet" href="css/hint.min.css"> -->

	<link rel="stylesheet" href="css/tipsy.min.css" type="text/css" />

	<link rel="stylesheet" href="css/modal.min.css" type="text/css" />
	
	<script src="js/modernizr.min.js"></script>

</head>
<body>


	<!-- header -->
	<div class="container headerr">

		<div class="container_header">

				<img src="img/logo.png" class="logo" alt="">
	
			<div class="menu">

				<a id="goboards" href="#"><!-- 3 •  --><? echo $home_boards_002; ?></a>
				<a id="logout" href="#"><? echo $home_logout_003; ?></a>



				<nav class="main-nav index">
					<a id="" class="saibamais" href="#"><? echo $home_saibamais_004; ?></a>
					<a class="voltarboard" href=""><? echo $home_backboard_005; ?></a>
					
					<a id="login" class="cd-signin" href="#"><? echo $home_login_006; ?></a>
					<a id="cadastrar" class="cd-signup" href="#"><? echo $home_cadastrar_007; ?></a>
				</nav>
				
				
			</div>
			

		</div>
		
	</div>
	<!-- header -->



	<!-- modal -->
	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#"><? echo $home_login_006; ?></a></li>
				<li><a href="#"><? echo $home_cadastrar_007; ?></a></li>
				
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form" id="formlogin" name="formlogin" accept-charset="UTF-8">
					<p class="textolognemail"></p>
					<p class="fieldset">
						<label class="image-replace cd-email" for="email"><? echo $home_email_008; ?></label>
						<input class="full-width has-padding has-border modal" id="signin-email" type="text" name="email" placeholder="E-mail" >
						<span class="cd-error-message" id="erro-signin-email"><? echo $home_labelemail_009; ?></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password"><? echo $home_senha_010; ?></label>
						<input class="full-width has-padding has-border" id="signin-password" name="senha" type="text"  placeholder="<? echo $home_senha_010;?>" autocomplete="off" autocorrect="off" autocapitalize="off">
						<a href="#" name="<? echo $home_hidesenha_012; ?>" rel="<? echo $home_hidesenha_012aa; ?>" class="hide-password"><? echo $home_hidesenha_012; ?></a>
						<span class="cd-error-message" id="erro-signin-senha"><? echo $home_labelsenha_011; ?></span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="rememberme" checked>
						<label for="remember-me"><? echo $home_permanecerlogado_014; ?></label>
					</p>

					<p class="fieldset">
						<input id="logingobt" class="full-width" type="submit" value="Login">
						<span class="cd-error-message" id="erro-signin-login"><? echo $home_hidesenha_012b; ?></span>
					</p>
				</form>
				
				<!-- <p class="cd-form-bottom-message"><a href="#"><? echo $home_esquecisenha_013; ?></a></p> -->
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form" id="formcadastro" name="formcadastro" accept-charset="UTF-8">
					<p class="textolognemailcadastro"></p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username"><? echo $home_nome_015; ?></label>
						<input class="full-width has-padding has-border modal" id="signup-username" name="nome" type="text" placeholder="<? echo $home_nome_015a; ?>">
						<span id="erro-signup-name" class="cd-error-message"><? echo $home_erronome_016; ?></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email"><? echo $home_email_008; ?></label>
						<input class="full-width has-padding has-border modal" id="signup-email" name="email" type="text" placeholder="E-mail">
						<span id="erro-signup-email" class="cd-error-message"><? echo $home_labelemail_009b; ?></span>
						<span id="erro-signup-email2" class="cd-error-message"><? echo $home_labelemail_009c; ?></span>
					</p>
<!-- to do - continuar traducao daqui -->
					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password"><? echo $home_senha_010;?></label>
						<input class="full-width has-padding has-border modal" id="signup-password" name="senha" type="text"  placeholder="<? echo $home_senha_010;?>" autocomplete="off" autocorrect="off" autocapitalize="off">
						<a href="#" name="<? echo $home_hidesenha_012; ?>" rel="<? echo $home_hidesenha_012aa; ?>" class="hide-password"><? echo $home_hidesenha_012; ?></a>
						<span id="erro-signup-password" class="cd-error-message"><? echo $home_hidesenha_011b; ?></span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="acceptterms">
						<label for="accept-terms"><? echo $termos_001;?> <a id="vermaistermos" href="#" style="text-decoration: underline;"><? echo $termos_002;?></a></label>
						<span id="erro-signup-termos" class="cd-error-message"><? echo $termos_003;?></span>
						<span class="termosresumidos"><? echo $termos_004;?></span>
					</p>

					<p class="fieldset">
						<input id="btsubmitformcadastro" class="full-width has-padding" type="submit" value="<? echo $home_cadastrar_007b;?>">
					</p>
				</form>

				<!-- <a href="#" class="cd-close-form">Fechar</a> -->
			</div> <!-- cd-signup -->
<!-- 
			<div id="cd-reset-password"> <!-- reset password form --
				<p class="cd-form-message">Esquecer a senha é normal :) Digite o e-mail utilizado durante seu cadastrar para te ajudar a redefinir sua senha.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border modal" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding modal" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#">Voltar para login</a></p>
			</div> <!-- cd-reset-password -- -->
			<!-- <a href="#" class="cd-close-form">Fechar</a> -->
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	<!-- modal fim -->




	<!-- botao plus mobile -->


	<span id="button" class="bt_plus">+</span>
			
	<!-- botao plus mobile -->





<!-- INDEX APRESENTAÇÃO DESLOGADO -->
<div id="hi">
	
	<!-- margem -->
	<div class="container" id="boards">
		<div id="topdivhome" class="container_box">			
			<div class="box box1">			
			</div>
			<div class="box">
			</div>
			<div class="box box3">	
			</div>
		</div>	
	</div>
	<!-- margemtop -->


	<div class="container boardnaoencontrado">

	    <div class="container_box" style="height:200px">
	      
	      <div class="box box1">

	        <h1 style="margin-top: -2px;" class="post_separador"><? echo $home_agora_001; ?></h1>
	        
	      </div>
	      <div class="box box2_ops">

	        <img src="img/dot_null_first.png" class="dot_null_first" style="margin-top: -7px;" alt="">
	        
	      </div>
	      <div class="box box3">

	        <h1 style="margin-top: -2px;"><? echo $home_ops_002; ?></h1> 
	        <h2><? echo $home_ops_003; ?></h2>
	      </div>

	    </div>
	    
	</div>


	<div class="container">

	    <div class="container_box box_normal">
	      
	      <div class="box box1">

	        <h1 style="margin-top: -2px;" class="post_separador"><? echo $home_agora_001; ?></h1>
	        
	      </div>
	      <div class="box box2">

	        <img src="img/dot_null_first.png" class="dot_null_first" style="margin-top: -7px;" alt="">
	        
	      </div>
	      <div class="box box3">

	        <h1 style="margin-top: -2px;"><? echo $home_index_004; ?></h1> 
	        <h2 style="margin-top: 10px;"><? echo $home_index_005; ?></h2>
	      </div>

	    </div>
	    
	</div>


	<div class="container">

	    <div class="container_box">
	      
	      <div class="box box1"></div>
	      <div class="box box2"></div>
	      <div class="box box3">
	            
	      </div>

	    </div>
	    
	</div>




	<div>

		<!-- board criado -->
		<div class="container">

			<div class="container_box">
        
		        <div class="box box1">


		          
		        </div>
		        <div class="box box2">


		          
		        </div>
		        <div class="box box3">
  

		        </div>
		      	
		    </div>

	    </div>
		
	</div>

	





	<!-- container 2 -->

<div style="background-color: #F9F9F9;">
	<div class="container">
	    <div class="container_box" style="height: 100px;">	      
	      <div class="box box1"></div>
	      <div class="box box2"></div>
	      <div class="box box3"></div>
	    </div>	    
	</div>
	

	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1"></div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1 class="post_separador"><? echo $home_index_006; ?></h1> 	        
	        
	      </div>

	    </div>
	    
	</div>


	<div class="container">

	    <div class="container_box">
	      
	      <div class="box box1">

	        <h1><? echo $home_index_007; ?> 150,00</h1>
	        <h2>13/01/16</h2>
	        
	      </div>
	      <div class="box box2">

	        <img src="img/dot_plus.png" class="dot_lancamento" alt="">
	        
	      </div>
	      <div class="box box3">

	        <h1><? echo $home_index_008; ?></h1> 
	        <!-- <h2 style="margin-top: 5px;"><i>por</i> <span class="buget">você</span></h2> -->
	        
	      </div>

	    </div>
	    
	</div>

	<div class="container">

	    <div class="container_box">
	      
	      <div class="box box1">

	        <h1><? echo $home_index_007; ?> -50,00</h1>
	        <h2>10/01/16</h2>
	        
	      </div>
	      <div class="box box2">

	        <img src="img/dot_neg.png" class="dot_lancamento" alt="">
	        
	      </div>
	      <div class="box box3">

	        <h1><? echo $home_index_009; ?> 💸</h1> 
	        <!-- <h2 style="margin-top: 5px;"><i>por</i> <span class="buget">você</span></h2> -->
	        
	      </div>

	    </div>
	    
	</div>

	<div class="container">
	    <div class="container_box" style="height: 100px;">	    
	      <div class="box box1">
	      	<h1 class="post_separador" style="margin-top: 2px;"><? echo $home_index_007; ?> 100,00</h1> 
	      	
	      </div>
	      <div class="box box2">
	      	<img src="img/dot_new.png" class="dot_null" alt="">
	      </div>
	      <div class="box box3">
	      	<h1><? echo $home_index_010; ?></h1>
	      </div>
	    </div>	    
	</div>


</div>

<div style="background-color: #fff;">

	<div class="container">
	    <div class="container_box">	     
	      <div class="box box1"></div>
	      <div class="box box2"></div>
	      <div class="box box3"></div>
	    </div>	    
	</div>


	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1"></div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1 class="post_separador"><? echo $home_index_011; ?></h1> 	        
	        
	      </div>

	    </div>
	    
	</div>



	<div class="container">

	    <div class="container_box">
	      
	      <div class="box box1">
	      	<h2>13/01/16</h2>
	      </div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1><? echo $home_index_012; ?></h1>
	        <!-- <h2 style="margin-top: 5px;"><i>por</i> <span class="buget">você</span></h2>  -->	        
	        
	      </div>

	    </div>
	    
	</div>
	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1">
	      	<h2>14/01/16</h2>
	      </div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1><? echo $home_index_013; ?> 🏆</h1>
	        <!-- <h2 style="margin-top: 5px;"><i>por</i> <span class="buget">você</span></h2>  -->	        
	        
	      </div>

	    </div>
	    
	</div>
	



</div>
<div style="background-color: #F9F9F9;">
	<div class="container">
	    <div class="container_box">	     
	      <div class="box box1"></div>
	      <div class="box box2"></div>
	      <div class="box box3"></div>
	    </div>	    
	</div>


	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1"></div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1 class="post_separador"><? echo $home_index_014; ?></h1> 	        
	        
	      </div>

	    </div>
	    
	</div>


	<div class="container">

	    <div class="container_box">
	      
	      <div class="box box1">
	      	<span class="buget privateboarddemonst"><b><? echo $privado_001; ?></b><i></i></span>
	      </div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1><? echo $home_index_015; ?></h1> 	        
	      </div>

	    </div>
	    
	</div>
	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1">
	      	<span class=" buget publicboarddemonst"><b><? echo $publico_002; ?> </b></span> 
	      </div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1><? echo $home_index_016; ?></h1> 	        
	      </div>

	    </div>
	    
	</div>


</div>
<div>
	<div class="container">
	    <div class="container_box">	     
	      <div class="box box1"></div>
	      <div class="box box2"></div>
	      <div class="box box3"></div>
	    </div>	    
	</div>

	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1"></div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1 class="post_separador"><? echo $home_index_017; ?></h1> 	        
	        
	      </div>

	    </div>
	    
	</div>


	<div class="container">

	    <div class="container_box">
	      
	      <div class="box box1">
	      </div>
	      <div class="box box2">

	        <img src="img/dot_null.png" class="dot_null" alt="">
	        
	      </div>
	      <div class="box box3">
	        <h1><? echo $home_index_018; ?> 🙌</h1> 	        
	      </div>

	    </div>
	    
	</div>


	<div class="container">

	    <div class="container_box" style="height: 100px;">
	      
	      <div class="box box1"></div>
	      <div class="box box2"></div>
	      <div class="box box3"></div>

	    </div>
	    
	</div>


	<div class="container">
	    <div class="container_box" style="height: 100px;">	    
	      <div class="box box1">
	      	<h1 class="post_separador" style="margin-top: 2px;"></h1> 
	      	
	      </div>
	      <div class="box box2">
	      	<img src="img/dot_new.png" class="dot_null" alt="">
	      </div>
	      <div class="box box3">
	      	<h1><? echo $home_index_019; ?></h1>

	      	

			
		      	<p style="margin-top: 30px;">
		      		<nav class="main-nav">
		      			<a href="#" class="bt_cadastre_footer cd-signup"><? echo $home_index_020; ?></a>
		      		</nav>
	      		</p>
	      </div>
	    </div>	    
	</div>


</div>
	<!-- container 2 -->



	




	<!-- margem bootn -->
	<div class="container">

		<div class="container_box"  style="height:250px">
			
			<div class="box box1">					
			</div>
			<div class="box box2" style="padding-bottom: 25px;">			
			</div>
			<div class="box box3">			
			</div>

		</div>
		
	</div>
	<!-- margem bootom -->


</div>












	<!-- @dashboard -->
<div id="todosboards">
	
	<!-- margem -->
	<div class="container" id="boards">
		<div class="container_box" style="height:90px">			
			<div class="box box1">			
			</div>
			<div class="box box2">
			</div>
			<div class="box box3">	
			</div>
		</div>	
	</div>
	<!-- margemtop -->




	<form method="post" id="addboard" name="addboard" accept-charset="UTF-8">
		<div class="container">

			<div class="container_box">
				
				<div class="box box1">
				</div>

				<div class="box box2">
					<img src="img/dot_new.png" class="dot_new" alt="">
				</div>
				
				<div class="box box3 boxinput">
					<input id="nomenovoboard" class="cashflow descricao tooltips" type="text" name="nomenovoboard" placeholder="<? echo $boards_novoboardplacehold_002;?>" original-title="<? echo $boards_novoboardplacehold_001;?>" autocomplete="off" maxlength="40" required>
					<input type="submit" class="bt_lancar" value="<?echo $criar_001;?>">

					
				</div>

			</div>
			
		</div>
	</form>

	<div class="container oculto" id="seminternet">

		<div class="container_box">
    
	        <div class="box box1">
	          <h2></h2>	          
	        </div>
	        <div class="box box2">

	          <img src="img/load_dott.gif" style="width:60%" alt="">
	          
	        </div>
	        <div class="box box3">

	          <h1 class="post_separador aindanaocarregoulista"><? echo $ops_boards_001;?></h1>
	          <h2><? echo $ops_boards_002;?></h2>   

	        </div>
	      	
	      	</div>

    </div>


	<div id="listadeboards">

		<!-- board criado -->
		<div class="container" id="primeiroboard">

			<div class="container_box">
        
		        <div class="box box1">

		          <h2><? echo $aguarde_001;?></h2>
		          
		        </div>
		        <div class="box box2">

		          <img src="img/load_dott.gif" style="width:60%" alt="">
		          
		        </div>
		        <div class="box box3">

		          <h1 class="post_separador aindanaocarregoulista"><? echo $carregandolista_001;?></h1>   

		        </div>
		      	
		      	</div>

	    </div>
	   


		
	</div>


	<!-- margem bootn -->
	<div class="container">

		<div class="container_box"  style="height:550px">
			
			<div class="box box1">					
			</div>
			<div class="box box2" style="padding-bottom: 25px;">			
			</div>
			<div class="box box3">			
			</div>

		</div>
		
	</div>
	<!-- margem bootom -->


</div>









<!-- @board aberto -->

<div id="boardtotal">
	<!-- margem top -->
	<div class="container" id="board">

		<div class="container_box" style="height:90px">
			
			<div class="box box1">	
					
			</div>
			<div class="box box2">

				
			</div>
			<div class="box box3" id="boardx">
				
			</div>

		</div>
		
	</div>
	<!-- margem top -->





		<!-- title -->
	<div class="container">

		<div class="container_box box_title">
			
			<div class="box box1">	

			</div>
			<div class="box box2">

				<img src="img/dot_null.png" class="dot_null" alt="">
				
			</div>
			<div class="box box3" id="headboardprivado">

				<!-- <img src="img/icon_edit.png" style="display:inline" class="icon_title" alt=""> --><div style="display:inline" class="editable tituloboard tooltips" original-title="<?echo $editarnome_001;?>" id="" ><!-- CashFloow Board --></div> 
				<br>

				<!-- <h2>Descrição do board caso tenhaa interesse</h2> -->
				<span id="privateboard" name="<? echo $confirma_001;?>" class="shared buget privateboard hover tooltips" original-title="<? echo $tornar_publico_002;?>" ref=""><b><? echo $privado_001; ?></b><i></i></span> 
				<!-- <h2 id="addlancamento"><img src="img/users_TEMP.png" style="max-height:20px;margin-top:10px" alt=""></h2> -->
				<span id="publicboard" class="shared buget publicboard" ref=""><b class="publicboardclick hover tooltips" original-title="<? echo $tornar_publico_001;?>"><? echo $publico_002;?> </b> <i class="tooltips" original-title="<? echo $tornar_publico_002a;?>">cashfloow.com/#<span class="urlboard"></span></i></span> <span name="<? echo $apagar_003a;?>"  class="buget deletarboard tooltips" original-title="<? echo $apagar_003;?>" ref="" style="display:inline"><? echo $apagar_001;?></span>
		


			</div>

			<div class="box box3" id="headboardpublico">

				<!-- <img src="img/icon_edit.png" style="display:inline" class="icon_title" alt=""> --><div style="display:inline" class="tituloboard"></div> 
				<br>
				<span class="shared buget publicboarddemonst" ref=""><i class="tooltips" original-title="Compartilhe este board" >cashfloow.com/#<span class="urlboard"></span></i></span>
		


			</div>

		</div>
		
	</div>
	<!-- title -->


	<form method="post" id="addregistro" name="addregistro" accept-charset="UTF-8">
		<input id="moedatipo" type="hidden" name="moedatipo" value="<? echo $home_index_007;?>">
		<input id="codboardaddregistro" class="cashflow" type="hidden" name="board" value="">
		<div class="container">

			<div class="container_box box_normal">
				
				<div class="box box1 boxinput">
				
					<div class="divvalor">
						<span class="valormoeda"><? echo $home_index_007; ?></span><input class="valor cashflowvalor" id="valor" name="valor" type="text" maxlength="10">
					</div>
					

				</div>

				<div class="box box2 tooltips" original-title="<? echo $hit_001; ?>">

					<div class="botao">
						<input type="checkbox" id="tipo" name="tipo" class="switch" value="1"/>
						<label for="tipo"  class="switch" width="40px">o</label>
					</div>
					
				</div>
				<div class="box box3 boxinput">

					<div style="display:block">

					<input id="descricao" class="descricao cashflow" type="text" name="descricao" placeholder="<? echo $hit_002; ?>" autocomplete="off" maxlength="40" required>
					<input type="submit" class="bt_lancar" value="<?echo $salvar_001;?>">

					</div>
					
				</div>

			</div>
			
		</div>
	</form>



	<div id="listaderegistros">

		<!-- board criado -->
		<div class="container">
			<div class="container_box">	

				<div class="box box1">

		          <h2><? echo $aguarde_001;?></h2>
		          
		        </div>
		        <div class="box box2_ultimo">

		          <img src="img/load_dott.gif" style="width:60%" alt="">
		          
		        </div>
		        <div class="box box3">

		          <h1 class="post_separador aindanaocarregoulista">Carregando registros do board</h1>   

		        </div>
		      	

			</div>
		</div>
		
	</div>

	<!-- espaco para finalizar time line -->
	<div class="footer"></div>

</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	<script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>

  	<script src="js/jquery.cookie.min.js" type="text/javascript"></script>

  	<script src="js/jquery.jeditable.min.js" type="text/javascript"></script>
  	<script src="js/jquery.tipsy.min.js" type="text/javascript"></script>

  	<script src="js/scripts.min.js"></script>

	</body>

	</html>