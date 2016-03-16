
$(document).ready(function(){

	//formTextToNumber();
	radioBtnOptionPF(); 

});


function formTextToNumber () 
{

	$("input[name=cpf_cliente]").keyup(function() {
    	$("input[name=cpf_cliente]").val(this.value.match(/[0-9]*/));
	});

	$("input[name=rg_cliente]").keyup(function() {
    	$("input[name=rg_cliente]").val(this.value.match(/[0-9]*/));
	});


	$("input[name=rg_cliente]").keyup(function() {
    	$("input[name=rg_cliente]").val(this.value.match(/[0-9]*/));
	});

	$("input[name=cep]").keyup(function() {
    	$("input[name=cep]").val(this.value.match(/[0-9]*/));
	});

	$("input[name=num]").keyup(function() {
    	$("input[name=num]").val(this.value.match(/[0-9]*/));
	});

	$("input[name=ddd_principal]").keyup(function() {
    	$("input[name=ddd_principal]").val(this.value.match(/[0-9]*/));
	});

	$("input[name=telefone_principal]").keyup(function() {
    	$("input[name=telefone_principal]").val(this.value.match(/[0-9]*/));
	});

	$("input[name=telefone_principal]").keyup(function() {
    	$("input[name=telefone_principal]").val(this.value.match(/[0-9]*/));
	});
	
	$("input[name=ddd_referencia]").keyup(function() {
    	$("input[name=ddd_referencia]").val(this.value.match(/[0-9]*/));
	});
	
}

function radioBtnOptionPF () 
{

	$("#optradioPF").prop( "checked",true );

	$("#optradioPJ").click( function(){
		$("#optradioPJ").prop( "checked",true );
		$("#optradioPF").prop( "checked",false );
		$("#PJ").css("display","block");
		$("#PF").css("display","none");
	});
	
		$("#optradioPF").click( function(){
		$("#optradioPF").prop( "checked",true );
		$("#optradioPJ").prop( "checked",false );
		$("#PF").css("display","block");
		$("#PJ").css("display","none");
	});
}
