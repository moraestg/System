// JAVASCRIPT AGENDA PARTE PAINEL ADMINISTRADOR
function validaform_agenda(){
	d=document.form_agenda;
	if (d.id_cidade.value == "" || d.id_cidade.value == "Selecione")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}
	if (d.id_local.value == "" || d.id_local.value == "Selecione")	{
		alert ("Preencha o campo com o local!");
		d.id_local.value="";
		d.id_local.focus();
		return false;	
	}
	if (d.evento.value == "")	{
		alert ("Preencha o campo com o nome do evento!");
		d.evento.value="";
		d.evento.focus();
		return false;	
	}
	if (d.data.value == "")	{
		alert ("Preencha o campo data!");
		d.data.value="";
		d.data.focus();
		return false;	
	}
	if (d.horario.value == "")	{
		alert ("Preencha o campo horário!");
		d.horario.value="";
		d.horario.focus();
		return false;	
	}else{
		return true;
	}
}
// FIM PARTE AGENDA PAINEL ADMINISTRADOR

// JAVASCRIPT BLOG PARTE PAINEL ADMINISTRADOR
function validaform_blog(){
	d=document.form_blog;	
	if (d.id_cidade.value == "" || d.id_cidade.value == "Cidade")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}	
	if (d.data.value == "")	{
		alert ("Preencha o campo data!");
		d.data.value="";
		d.data.focus();
		return false;	
	}
	if (d.horario.value == "")	{
		alert ("Preencha o campo horário!");
		d.horario.value="";
		d.horario.focus();
		return false;	
	}
	if (d.titulo.value == "")	{
		alert ("Preencha o campo titulo!");
		d.titulo.value="";
		d.titulo.focus();
		return false;	
	}
	if (d.descricao.value == "")	{
		alert ("Preencha o campo descrição!");
		d.descricao.value="";
		d.descricao.focus();
		return false;	
	}
	if (d.foto.value == "senha")	{
		alert ("Coloque uma foto!");
		d.foto.value="";
		d.foto.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE BLOG PAINEL ADMINISTRADOR

// JAVASCRIPT BANDA_DJ PARTE PAINEL ADMINISTRADOR
function validaform_banda(){
	d=document.form_banda;	
	if (d.id_cidade.value == "" || d.id_cidade.value == "Cidade")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}	
	if (d.estilo.value == "")	{
		alert ("Preencha o campo estilo!");
		d.estilo.value="";
		d.estilo.focus();
		return false;
	}	
	if (d.nome.value == "")	{
		alert ("Preencha o campo nome!");
		d.nome.value="";
		d.nome.focus();
		return false;
	}
	if (d.cidadeba.value == "")	{
		alert ("Informe sua cidade!");
		d.cidadeba.value="";
		d.cidadeba.focus();
		return false;
	}	
	if (d.endereco.value == "")	{
		alert ("Informe sua data de nascinento!");
		d.endereco.value="";
		d.endereco.focus();
		return false;
	}	
	if (d.telefone.value == "")	{
		alert ("Preencha o campo telefone!");
		d.telefone.value="";
		d.telefone.focus();
		return false;
	}
	if (d.email.value.match(/(\w+)@(.+)\.(\w+)$/) == null){
		d.email.focus();
		d.email.select();
		d.email.focus();
		alert('Endereço de email inválido');
		return false;
	}	
	if (d.site.value == "")	{
		alert ("Preencha o campo site!");
		d.site.value="";
		d.site.focus();
		return false;
	}
	if (d.descricao.value == "")	{
		alert ("Preencha o campo descricao!");
		d.descricao.value="";
		d.descricao.focus();
		return false;
	}
	if (d.foto1.value == "")	{
		alert ("Coloque uma foto!");
		d.foto1.value="";
		d.foto1.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE BANDA_DJ PAINEL ADMINISTRADOR

// JAVASCRIPT CASAS PARTE PAINEL ADMINISTRADOR
function validaform_casa(){
	d=document.form_casa;
	if (d.id_cidade.value == "" || d.id_cidade.value == "Cidade")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}
	if (d.nome.value == "")	{
		alert ("Preencha o campo nome!");
		d.nome.value="";
		d.nome.focus();
		return false;
	}
	if (d.email.value.match(/(\w+)@(.+)\.(\w+)$/) == null){
		d.email.focus();
		d.email.select();
		d.email.focus();
		alert('Endereço de email inválido');
		return false;
	}	
	if (d.telefone.value == "")	{
		alert ("Preencha o campo telefone!");
		d.telefone.value="";
		d.telefone.focus();
		return false;
	}
	if (d.site.value == "")	{
		alert ("Preencha o campo site!");
		d.site.value="";
		d.site.focus();
		return false;
	}
	if (d.foto.value == "")	{
		alert ("Coloque uma foto!");
		d.foto.value="";
		d.foto.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE CASAS PAINEL ADMINISTRADOR

// JAVASCRIPT EVENTOS PARTE PAINEL ADMINISTRADOR
function validaform_evento(){
	d=document.form_evento;
	if (d.id_cidade.value == "" || d.id_cidade.value == "Selecione")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}
	if (d.id_local.value == "" || d.id_local.value == "Selecione")	{
		alert ("Preencha o campo com o local!");
		d.id_local.value="";
		d.id_local.focus();
		return false;	
	}
	if (d.id_banda_dj.value == "" || d.id_banda_dj.value == "Selecione")	{
		alert ("Preencha o campo banda/dj!");
		d.id_banda_dj.value="";
		d.id_banda_dj.focus();
		return false;
	}
	if (d.id_usuario.value == "" || d.id_usuario.value == "Selecione")	{
		alert ("Preencha o campo usuário!");
		d.id_usuario.value="";
		d.id_usuario.focus();
		return false;
	}
	if (d.evento.value == "")	{
		alert ("Preencha o campo com o nome do evento!");
		d.evento.value="";
		d.evento.focus();
		return false;	
	}
	if (d.data.value == "")	{
		alert ("Preencha o campo data!");
		d.data.value="";
		d.data.focus();
		return false;
	}
	if (d.descricao.value == "")	{
		alert ("Preencha o campo descrição!");
		d.descricao.value="";
		d.descricao.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE EVENTOS PAINEL ADMINISTRADOR

// JAVASCRIPT MEMBROS PARTE PAINEL ADMINISTRADOR
function validaform_membro(){
	d=document.form_membro;
	if (d.nome.value == "")	{
		alert ("Preencha o campo nome!");
		d.nome.value="";
		d.nome.focus();
		return false;
	}
	if (d.telefone.value == "")	{
		alert ("Preencha o campo telefone!");
		d.telefone.value="";
		d.telefone.focus();
		return false;
	}
	if (d.cidadem.value == "" || d.cidadem.value == "Selecione")	{
		alert ("Preencha o campo cidade!");
		d.cidadem.value="";
		d.cidadem.focus();
		return false;
	}
	if (d.id_sexo.value == "" || d.id_sexo.value == "Selecione")	{
		alert ("Preencha o campo sexo!");
		d.id_sexo.value="";
		d.id_sexo.focus();
		return false;	
	}
	if (d.data_nasc.value == ""){
		alert ("Preencha o campo data de nascimento!");
		d.data_nasc.value="";
		d.data_nasc.focus();
		return false;
	}
	if (d.email.value == ""){
		alert ("Preencha o campo email!");
		d.email.value="";
		d.email.focus();
		return false;
	}
	if (d.email.value.match(/(\w+)@(.+)\.(\w+)$/) == null){
		d.email.focus();
		d.email.select();
		d.email.focus();
		alert('Endereço de email inválido');
		return false;
	}	
	if (d.email.value != d.email2.value)	{
		alert ("Os campos email devem ser iguais!");
		d.email.value="";
		d.email.focus();
		return false;
	}
	if (d.senha.value == "" || d.senha.value == "Selecione")	{
		alert ("Preencha o campo senha!");
		d.senha.value="";
		d.senha.focus();
		return false;
	}
	if (d.senha.value != d.senha2.value)	{
		alert ("Os campos senha devem ser iguais!");
		d.senha.value="";
		d.senha.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE MEMBROS PAINEL ADMINISTRADOR

// JAVASCRIPT PUBLICIDADE PARTE PAINEL ADMINISTRADOR
function validaform_publi(){
	d=document.form_publi;
	if (d.id_cidade.value == "" || d.id_cidade.value == "Selecione")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}
	if (d.empresa.value == "")	{
		alert ("Preencha o campo empresa!");
		d.empresa.value="";
		d.empresa.focus();
		return false;
	}
	if (d.responsavel.value == "" || d.responsavel.value == "Selecione")	{
		alert ("Preencha o campo responsável!");
		d.responsavel.value="";
		d.responsavel.focus();
		return false;
	}
	if (d.telefone.value == "" || d.telefone.value == "Selecione")	{
		alert ("Preencha o campo telefone!");
		d.telefone.value="";
		d.telefone.focus();
		return false;	
	}
	if (d.email.value == ""){
		alert ("Preencha o campo email!");
		d.email.value="";
		d.email.focus();
		return false;
	}
	if (d.email.value.match(/(\w+)@(.+)\.(\w+)$/) == null){
		d.email.focus();
		d.email.select();
		d.email.focus();
		alert('Endereço de email inválido');
		return false;
	}
	if (d.site.value == "" || d.site.value == "Selecione")	{
		alert ("Preencha o campo site!");
		d.site.value="";
		d.site.focus();
		return false;
	}
	if (d.linha.value == "" || d.linha.value == "Selecione")	{
		alert ("Preencha o campo linha!");
		d.linha.value="";
		d.linha.focus();
		return false;
	}
	if (d.foto.value == "" || d.foto.value == "Selecione")	{
		alert ("Coloque uma foto!");
		d.foto.value="";
		d.foto.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE PUBLICIDADE PAINEL ADMINISTRADOR

// JAVASCRIPT PROMOCAO PARTE PAINEL ADMINISTRADOR
function validaform_promo(){
	d=document.form_promo;
	if (d.id_cidade.value == "" || d.id_cidade.value == "Selecione")	{
		alert ("Preencha o campo cidade!");
		d.id_cidade.value="";
		d.id_cidade.focus();
		return false;
	}
	if (d.data_inicio.value == "")	{
		alert ("Preencha o campo data de ínicio!");
		d.data_inicio.value="";
		d.data_inicio.focus();
		return false;
	}
	if (d.data_fim.value == "" || d.data_fim.value == "Selecione")	{
		alert ("Preencha o campo data fim!");
		d.data_fim.value="";
		d.data_fim.focus();
		return false;
	}
	if (d.empresa.value == "" || d.empresa.value == "Selecione")	{
		alert ("Preencha o campo empresa!");
		d.empresa.value="";
		d.empresa.focus();
		return false;	
	}
	if (d.nome.value == ""){
		alert ("Preencha o campo nome!");
		d.nome.value="";
		d.nome.focus();
		return false;
	}
	if (d.descricao.value == ""){
		alert ("Preencha o campo descrição!");
		d.descricao.value="";
		d.descricao.focus();
		return false;
	}
	if (d.pergunta.value == "" || d.pergunta.value == "Selecione")	{
		alert ("Preencha o campo pergunta!");
		d.pergunta.value="";
		d.pergunta.focus();
		return false;
	}	
	if (d.foto1.value == "" || d.foto1.value == "Selecione")	{
		alert ("Coloque uma foto!");
		d.foto1.value="";
		d.foto1.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE PROMOCAO PAINEL ADMINISTRADOR

// JAVASCRIPT PROMOCAO PARTE PAINEL ADMINISTRADOR
function validaform_cidade(){
	d=document.form_cidade;
	if (d.cidade.value == "" || d.cidade.value == "Selecione")	{
		alert ("Preencha o campo cidade!");
		d.cidade.value="";
		d.cidade.focus();
		return false;
	}else{
		return true;
	}
}
// FIM PARTE PROMOCAO PAINEL ADMINISTRADOR


function Mascara (formato, keypress, objeto){
	campo = eval (objeto);
	var ValidChar = "#48;#49;#50;#51;#52;#53;#54;#55;#56;#57;#27;#13;#8;#0;";
	var isNS4 = (navigator.appName=='Netscape')?1:0;
	if(!isNS4){
		if(ValidChar.indexOf("#" + String(event.keyCode + ";")) == -1) {event.returnValue = false;}
	}else{
		if (ValidChar.indexOf("#" + String(keypress + ";")) == -1){return false;}
	}
	// DATA
	if (formato=='DATA'){
		if (campo.value.length>=10){event.returnValue = false;}
		separador = '/'; 
		conjunto1 = 2;
		conjunto2 = 5;
		if (campo.value.length == conjunto1){
			campo.value = campo.value + separador;
		}
		if (campo.value.length == conjunto2){
			campo.value = campo.value + separador;
		}
	}
}
//FIM FUNÇÃO MASCARA

// MASCARA PARA TELEFONE
function Telefone(objeto){ 
   if(objeto.value.length == 0)
     objeto.value = '(' + objeto.value;

   if(objeto.value.length == 3)
      objeto.value = objeto.value + ')';

 if(objeto.value.length == 8)
     objeto.value = objeto.value + '-';
}
//FIM MASCARA PARA TELEFONE

// MASCARA PARA HORARIO
function Horario(edit){
	if(event.keyCode<48 || event.keyCode>57){
		event.returnValue=false;
	}
	if(edit.value.length==2 || edit.value.length==5){
		edit.value+=":";
	}
}
// FIM MASCARA PARA HORARIO


function salvarFoto(){
 	if (confirm("Salvar foto em seu álbum?"))
  	alert("A foto foi salva.");
}
function votarFoto(){
	decisao = confirm("Deseja votar nesta voto para o Top10 lovatel.com.br?");
	if (decisao){
		alert ("Seu voto foi confirmado com sucesso!");
	}else{
		return true;
	}
}

