<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "pt":
        $home_titulo_001 = "CashFloow";
        $home_boards_002 = "Boards";
        $home_logout_003 = "Sair"; //desconectar
        $home_saibamais_004 = "Saiba mais";
        $home_backboard_005 = "Voltar para board";
        $home_login_006 = "Entrar";
        $home_cadastrar_007 = "Cadastrar";
        $home_cadastrar_007b = "Criar conta";
        $home_email_008 = "E-mail";
        $home_labelemail_009 = "Preencha com seu e-mail de cadastro";
        $home_labelemail_009a = "Preencha com um e-mail válido";
        $home_labelemail_009b = "Preencha com seu e-mail";
        $home_labelemail_009c = "E-mail digitado não é válido";
        $home_senha_010 = "Senha";
        $home_labelsenha_011 = "Preencha com sua senha";
        $home_labelsenha_011b = "Preencha com uma senha válida";
        $home_hidesenha_012 = "Ocultar";
        $home_hidesenha_012aa = "Exibir";
        $home_hidesenha_012a = "Ops! Parece que o e-mail já foi cadastrado";
        $home_hidesenha_012b = "Ops! Login ou senha incorreta. Tente novamente";
        $home_esquecisenha_013 = "Esqueci minha senha";
        $home_permanecerlogado_014 = "Permanecer logado";
        $home_nome_015 = "Nome";
        $home_nome_015a = "Seu nome";
        $home_erronome_016 = "Preencha com seu nome";

        // termos
        $termos_001 = "Eu aceito";
        $termos_002 = "os termos.";
        $termos_003 = "É necessário aceitar os termos";
        $termos_004 = "Basicamente: Usamos cookies, esperamos que você use nossa ferramenta de forma correta;Nós não nos responsabilizamos por conteudo gerado dentro da nossa plataforma, podendo inclusive ser deletado caso denunciado, sem aviso previo. Iremos tratar todos os dados da forma mais segura possível.";


        // bt criar e salvar
        $criar_001 = "Criar";
        $salvar_001 = "Salvar";

        $hit_001 = "Saída <i>ou</i> Entrada";
        $hit_002 = "Descrição do lançamento";
        

        // index ops
        $home_agora_001 = "Agora";
        $home_ops_002 = "Ops! O board não foi encontrado :(";
        $home_ops_003 = "Realize login para ver seus boards ou cadastre-se agora";
        // ops sem internet
        $boards_ops_001 = "Ops! Você parece estar sem internet";
        $ops_boards_002 = "Verifique sua coneção e tente novamente";
        // index geral
        $home_index_004 = "Organize suas finanças pessoais, da sua empresa, gastos de uma festa ou viagem em um simples caixa de entrada e saída";
        $home_index_005 = "Cadastre-se em segundos e crie seu cashfloow gratuitamente.";
        $home_index_006 = "Crie simples boards com registros de";
           
        // moeda e outros reutilizaveis
        $home_index_007 = "R$";
        $privado_001 = "Privado";
        $publico_002 = "Público";

        $apagar_001 = "Apagar";
        $apagar_002 = "Apagar esse registro";
        $apagar_003 = "Apagar o board e seus registros";
        $apagar_002a = "Deseja mesmo apagar esse registro?";
        $apagar_003a = "Deseja mesmo apagar o board e seus registros?";

        // publico privado
        $tornar_publico_001 = "Clique para tornar esse bord <b>privado</b>";
        $tornar_publico_002a = "Compartilhe o endereço do seu board";
        $tornar_publico_002 = "Clique para tornar esse bord <b>público</b>";


        $editarnome_001 = "Clique para editar o nome";

        // confirmacoes
        $confirma_001 = "Deseja realmente tornar esse board público e acessível por qualquer um na internet?";

        $aguarde_001 = "Aguarde";
        $carregandolista_001 = "Carregando lista de boards";
        $home_index_008 = "entradas";
        $home_index_009 = "e saídas";
        $home_index_010 = "mantendo assim um caixa sempre atualizado.";
        $home_index_011 = "Adicione também,";
        $home_index_012 = "anotações";
        $home_index_013 = "ou conquistas";
        $home_index_014 = "O board pode ser";
        $home_index_015 = "privado, ou";
        $home_index_016 = "público, e podendo ser compartilhado.";
        $home_index_017 = "E claro, tudo isso";
        $home_index_018 = "totalmente gratuito";
        $home_index_019 = "Pronto para criar seu CashFloow?";
        $home_index_020 = "Cadastre agora!";
        
        // boards
        $boards_novoboardplacehold_001 = "Dê um nome para seu novo board";
        $boards_novoboardplacehold_002 = "Nome para novo board";


        
        break;  
    case "en":
       

        $home_titulo_001 = "CashFloow";
        $home_boards_002 = "Boards";
        $home_logout_003 = "Logout"; 
        $home_saibamais_004 = "More info";
        $home_backboard_005 = "Back to board";
        $home_login_006 = "Login";
        $home_cadastrar_007 = "Sign up";
        $home_cadastrar_007b = "Create an account";
        $home_email_008 = "Email";
        $home_labelemail_009 = "Fill with your registration email";
        $home_labelemail_009a = "Fill with your email";
        $home_labelemail_009b = "Fill with your email";
        $home_labelemail_009c = "E-mail entered is not valid";
        $home_senha_010 = "Password";
        $home_labelsenha_011 = "Fill with your password";
        $home_labelsenha_011b = "Fill with a valid password";
        $home_hidesenha_012 = "Hide";
        $home_hidesenha_012aa = "Show";
        $home_hidesenha_012a = "Ops! It seems that the email has been registered";
        $home_hidesenha_012b = "Ops! E-mail or password incorrect! Try again";
        $home_esquecisenha_013 = "I forgot my password";
        $home_permanecerlogado_014 = "Stay logged";
        $home_nome_015 = "Name";
        $home_nome_015a = "Your name";
        $home_erronome_016 = "Fill with your name";

        // termos
        $termos_001 = "I accept";
        $termos_002 = "the terms.";
        $termos_003 = "Is necessary to accept the terms";
        $termos_004 = "Basically: We use cookies, we hope you use our tool correctly; We are not responsible for content generated within our platform, and may also be deleted if reported without notice. We will handle all data in the safest possible way.";

         // bt criar e salvar
        $criar_001 = "Create";
        $salvar_001 = "Save";

        $hit_001 = "Exit <i>or</i> entries";
        $hit_002 = "Description of the register.";
        
        // index ops
        $home_agora_001 = "Now";
        $home_ops_002 = "Ops! The board was not found :(";
        $home_ops_003 = "Register now or login to see your boards";
        // ops sem internet
        $boards_ops_001 = "Ops! Your internet is not working?";
        $ops_boards_002 = "Check your connection and try again";
        // index geral
        $home_index_004 = "Organize your personal finances, your company, expenses of a party or trip on a simple input and output box";
        $home_index_005 = "Sign up in seconds and create your free cashflow.";
        $home_index_006 = "Create simple boards with records";
        
        // moeda e outros reutilizaveis
        $home_index_007 = "$";
        $privado_001 = "Private";
        $publico_002 = "Public";
        $aguarde_001 = "Wait";

        $apagar_001 = "Delete";
        $apagar_002 = "Delete this record";
        $apagar_002a = "Are you sure you want to delete this record?";
        $apagar_003 = "Delete this board and all records";
        $apagar_003a = "Are you sure you want to delete this board and all records?";

        // publico privado
        $tornar_publico_001 = "Click to make this bord <b>private</b>";
        $tornar_publico_002a = "Share your board link";
        $tornar_publico_002 = "Click to make this bord <b>public</b>";

        $editarnome_001 = "Click to edit the name";

        // confirmacoes
        $confirma_001 = "Do you really want to make this board public and accessible by anyone on the Internet?";


        $carregandolista_001 = "Loading boards list";
        $home_index_008 = "entries";
        $home_index_009 = "and exits";
        $home_index_010 = "maintaining your board always updated.";
        $home_index_011 = "also add,";
        $home_index_012 = "notes";
        $home_index_013 = "or conquests";
        $home_index_014 = "The board can be";
        $home_index_015 = "private, or";
        $home_index_016 = "public, and may be shared.";
        $home_index_017 = "Of course, all this";
        $home_index_018 = "totally free";
        $home_index_019 = "Ready to create your CashFlow?";
        $home_index_020 = "Register now!";
        
        // boards
        $boards_novoboardplacehold_001 = "Give a name for your new board";
        $boards_novoboardplacehold_002 = "Name of the new board";


        
        break;        
    default:
        $home_titulo_001 = "CashFloow";
        $home_boards_002 = "Boards";
        $home_logout_003 = "Logout"; 
        $home_saibamais_004 = "More info";
        $home_backboard_005 = "Back to board";
        $home_login_006 = "Login";
        $home_cadastrar_007 = "Sign up";
        $home_cadastrar_007b = "Create an account";
        $home_email_008 = "Email";
        $home_labelemail_009 = "Fill with your registration email";
        $home_labelemail_009a = "Fill with your email";
        $home_labelemail_009b = "Fill with your email";
        $home_labelemail_009c = "E-mail entered is not valid";
        $home_senha_010 = "Password";
        $home_labelsenha_011 = "Fill with your password";
        $home_labelsenha_011b = "Fill with a valid password";
        $home_hidesenha_012 = "Hide";
        $home_hidesenha_012aa = "Show";
        $home_hidesenha_012a = "Ops! It seems that the email has been registered";
        $home_hidesenha_012b = "Ops! E-mail or password incorrect! Try again";
        $home_esquecisenha_013 = "I forgot my password";
        $home_permanecerlogado_014 = "Stay logged";
        $home_nome_015 = "Name";
        $home_nome_015a = "Your name";
        $home_erronome_016 = "Fill with your name";

        // termos
        $termos_001 = "I accept";
        $termos_002 = "the terms.";
        $termos_003 = "Is necessary to accept the terms";
        $termos_004 = "Basically: We use cookies, we hope you use our tool correctly; We are not responsible for content generated within our platform, and may also be deleted if reported without notice. We will handle all data in the safest possible way.";

         // bt criar e salvar
        $criar_001 = "Create";
        $salvar_001 = "Save";

        $hit_001 = "Exit <i>or</i> entries";
        $hit_002 = "Description of the register.";
        
        // index ops
        $home_agora_001 = "Now";
        $home_ops_002 = "Ops! The board was not found :(";
        $home_ops_003 = "Register now or login to see your boards";
        // ops sem internet
        $boards_ops_001 = "Ops! Your internet is not working?";
        $ops_boards_002 = "Check your connection and try again";
        // index geral
        $home_index_004 = "Organize your personal finances, your company, expenses of a party or trip on a simple input and output box";
        $home_index_005 = "Sign up in seconds and create your free cashflow.";
        $home_index_006 = "Create simple boards with records";
        
        // moeda e outros reutilizaveis
        $home_index_007 = "$";
        $privado_001 = "Private";
        $publico_002 = "Public";
        $aguarde_001 = "Wait";

        $apagar_001 = "Delete";
        $apagar_002 = "Delete this record";
        $apagar_002a = "Are you sure you want to delete this record?";
        $apagar_003 = "Delete this board and all records";
        $apagar_003a = "Are you sure you want to delete this board and all records?";

        // publico privado
        $tornar_publico_001 = "Click to make this bord <b>private</b>";
        $tornar_publico_002a = "Share your board link";
        $tornar_publico_002 = "Click to make this bord <b>public</b>";

        $editarnome_001 = "Click to edit the name";

        // confirmacoes
        $confirma_001 = "Do you really want to make this board public and accessible by anyone on the Internet?";


        $carregandolista_001 = "Loading boards list";
        $home_index_008 = "entries";
        $home_index_009 = "and exits";
        $home_index_010 = "maintaining your board always updated.";
        $home_index_011 = "also add,";
        $home_index_012 = "notes";
        $home_index_013 = "or conquests";
        $home_index_014 = "The board can be";
        $home_index_015 = "private, or";
        $home_index_016 = "public, and may be shared.";
        $home_index_017 = "Of course, all this";
        $home_index_018 = "totally free";
        $home_index_019 = "Ready to create your CashFlow?";
        $home_index_020 = "Register now!";
        
        // boards
        $boards_novoboardplacehold_001 = "Give a name for your new board";
        $boards_novoboardplacehold_002 = "Name of the new board";



        break;
}

?>