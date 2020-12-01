/* Arquivo javaScript */

function validacao(){
	if (document.form.login.value== ""){
		alert("Por favor preencha o campo nome.");
		document.form.login.focus();
		return false;
	}
	if (document.form.senha.value== ""){
		alert("Por favor preencha o campo senha.");
		document.form.senha.focus();
		return false;
	}