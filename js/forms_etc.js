$(document).ready(function() {
    $(".fone").mask("(99)9999-9999?9");
    $(".uf").mask("aa");
    $(".cep").mask("99999-999");
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    $(".data").mask("99/99/9999");
    $(".hora").mask("99:99");
    $(".valor").maskMoney({
        decimal: ",",
        thousands: "."
    });

    /*LIMPAR CAMPOS EDIT*/
    $("#limpa").click(function(event) {
        event.preventDefault();
        document.formEdit.reset();
    });

    /*SALVAR CAMPOS*/
    $("#salvarContato").click(function(event) {
        event.preventDefault();
        $("#formContato").submit();
    });
    
    $("#salvarFranqueado").click(function(event) {
        event.preventDefault();
        $("#formFranqueado").submit();
    });

    $("#formEdit").validar({
        "marcar": false
    });


    $("#formContato").validar({
        "after": function() {
            $('#details-contact').hide();
            $("#contato-loading").show();
            $.post(URLBASE + 'index/contatos', this.serialize(), function(data) {
                if (data.ok) {
                    $('#details-contact').html('Obrigado por entrar em contato! <br/>Retornaremos em breve...');
                } else {
                    $('#details-contact').html('Ops! N&atilde;o conseguimos receber seu contato... <br/>Tente novamente mais tarde!');
                    $("#contato-loading").hide();
                }
                $('#details-contact').show(200);
                setTimeout(function(){ location.href = URLBASE; }, 4000);
                
            }, 'json');
            return false;
        },
        "marcar": false
    });

    $("#formFranqueado").validar({
        "after": function() {
            $('#details-contact').hide();
            $("#franqueado-loading").show();
            $.post(URLBASE + 'index/franqueado', this.serialize(), function(data) {
                if (data.ok) {
                    $('#details-contact').html('Obrigado por entrar em contato! <br/>Retornaremos em breve...');
                    setTimeout(function(){ location.href = URLBASE; }, 4000);
                } else {
                    $('#details-contact').html('Ops! N&atilde;o conseguimos receber seu contato... <br/>Tente novamente mais tarde!');
                }
                $('#details-contact').show(200);
                
            }, 'json');
            return false;
        },
        "marcar": false
    });

    /*LIMPAR CAMPOS LOGIN*/
    $("#limpaLog").click(function(event) {
        event.preventDefault();
        document.formLogin.reset();
    });

});

//VERIFICA O 9 DIGITO DO TELEFONE
function verificaTelefone(puti){
    valor = $(puti).val();
    valor = valor.replace('_', '');
    //console.log(valor);
    if(valor.length > 13){
        //console.log(14);
        $(puti).mask('(99)99999-9999');
    }else{
        //console.log(13);
        $(puti).mask('(99)9999-9999?9');
    }
}