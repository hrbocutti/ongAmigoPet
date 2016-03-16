function limpaCep(){
	
	$("input[name=cep]").val("");
	$("input[name=end]").val("");
	$("input[name=num]").val("");
	$("input[name=bairro]").val("");
	$("input[name=cidade]").val("");
	$("input[name=estado]").val("");
	$("input[name=comp]").val("");
}

function callback(conteudo){
	if (!("erro" in conteudo)) {
		//atualiza campos com valores
		$("input[name=cep]").val(conteudo.cep); 
		$("input[name=end]").val(conteudo.logradouro);
		$("input[name=bairro]").val(conteudo.bairro);
		$("input[name=estado]").val(conteudo.uf);
		$("input[name=cidade]").val(conteudo.localidade);		
	} else{
		limpaCep();
	};
}

function pesquisacep(valor) {

		var cep = valor;
        //Verifica se campo cep possui valor informado.
        if (cep != "") {

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep +'/json/?callback=callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.

        else {
            //cep sem valor, limpa formulário.
            limpaCep();
        }
    };