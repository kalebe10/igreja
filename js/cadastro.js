/**
 * Created by kaleb on 02/01/2018.
 */
function cadastraPessoa() {
    var nome = $("input[name='nome']").val();
    var endereco = $("input[name='endereco']").val();
    var bairro = $("input[name='bairro']").val();
    var nascimento = $("input[name='nascimento']").val();
    var cargo = $("#inputCargo").val();
    var tipoPessoa = $("input[name='tipoPessoa']:checked").val();
    var cpf = $("input[name='cpf']").val();
    var cnpj = $("input[name='cnpj']").val();

    $.ajax({
        async: true,
        url: 'php/ajax/ajaxCadastro.php',
        data: {
            nome: nome,
            endereco: endereco,
            bairro: bairro,
            nascimento: nascimento,
            cargo: cargo,
            tipoPessoa: tipoPessoa,
            cpf: cpf,
            cnpj: cnpj
        },
        type: 'post',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            document.getElementById('aviso').innerHTML = data;
        }
    });
}
function buscaPessoa(nome, id) {
    $.ajax({
        async: true,
        url: 'php/ajax/ajaxBusca.php',
        data: {
            nome: nome,
            id:id
        },
        type: 'post',
        dataType: 'json',
        success: function (data) {
            console.log(data[1]);
           // $("input [name = 'endereco']").val(data.endereco)
        }
    });
}
$(function () {
    var ids = new Array();
    // Initialize
    $("#inputName").autocomplete({
        source: function (request, response) {
            // Fetch data
            $.ajax({
                url: "php/ajax/ajaxBusca.php",
                type: 'post',
                dataType: "json",
                data: {
                    nome: request.term
                },
                success: function (data) {

                    response(data);
                }
            });
        },
        select: function (event, ui) {
            console.log(ui.item.value);
            $('#inputName').val(ui.item.label); // display the selected text
            $("input[name = 'endereco']").val(ui.item.endereco);
            $("input[name = 'bairro']").val(ui.item.bairro);
            $("input[name = 'nascimento']").val(ui.item.nascimento);
            $("input[name = 'cargo']").val(ui.item.cargo);
            if(ui.item.tipoPessoa == 1){
                $("#inputFisica").attr("checked", true);
            }else{
                $("#inputJuridica").attr("checked", true);
            }
            // $("input[name = 'tipoPessoa']").val(ui.item.tipoPessoa);
            $("input[name = 'cpf']").val(ui.item.cpf);
            $("input[name = 'cnpj']").val(ui.item.cnpj);
            return false;
        }
    });
});
function tipo(valor) {
    if (valor == 1 ){
        $('#cpf').show('slow');
        $('#cnpj').hide('slow');
    }

    if (valor == 2 ){
        $('#cpf').hide('slow');
        $('#cnpj').show('slow');
    }
}
