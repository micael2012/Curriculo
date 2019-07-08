

$(document).ready(function(){
	alert("jquery funcionando");
 	$('#nome').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
 	$('#idade').mask('00000');


}); 















	function validar(){
		
		var nome = cadastro.nome.value;
		var idade = cadastro.idade.value;
		

		if(nome =="" || cadastro.nome.value.length <= 10){
			alert("Digite seu nome, obs: mais de 10 caracteres");
			cadastro.nome.focus();
			return false;

		}if (idade == "" ){

		
			alert("Digite sua Idade, Apenas números");
			cadastro.idade.focus();
			return false;

		}if(estado==""){
			alert("Escolha seu estado");
			cadastro.estado.focus();
			return false;

		

		}

 }






























	
	function isValidenumero(str){
		var num = "/^\d{3}$/";

		if(regex.test(str)){
			return alert("acertou mizerave");
		}else{
			return alert("Apenas números");
		}
		//return regex.test(str);
		/* Lembrete
		g -global
		i - case 
		*/

}