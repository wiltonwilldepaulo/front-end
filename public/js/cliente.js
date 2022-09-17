const atualiza = document.querySelector("#btnatualiza");
const salvar = document.querySelector("#btnsalvar");

//CONFIGURAÇÕES DOS PARAMENTRO DE VALIDAÇÃO DO FORMULÁRIO
$('#frmcliente').validate({
    rules: {
        edtimagems: {
            required: true,
            file: true
        },
        agree: "required"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    }
});

async function lista_cliente() {
    //monstamos a configuração da requição
    //ao servidor http
    const opt = {
        method: 'POST',
        mode: 'cors',
        cache: 'default'
    }
    //A VARIAVEL response RECEBERÁ UMA PROMISSE
    //DE UMA TENTATIVA DE REQUISIÇÃO.
    const response = await send('listacliente.php', opt);
    //CONVERTEMOS O A RESPOSTA  PARA TEXTO
    //QUE TERÁ UMA ESTRUTURA HTML
    const html = await response.text();
    //PRINTAMOS NO CONSOLE O RESULTADO
    //console.log(html);
    document.getElementById('dados').innerHTML = html;
}

async function inserir() {
    const form = document.querySelector("#frmcliente");
    const formData = new FormData(form);
    const opt = {
        method: "POST",
        mode: 'cors',
        body: formData,
        cache: 'default'
    }
    const response = await send('cadastro.php', opt);
    const dados = await response.text();
    console.log(dados);
}
//MAPEAMOS O EVENTO DE CARREGAMENTO DO DOCUMENTO
document.addEventListener("DOMContentLoaded", function () {
    lista_cliente();
});

atualiza.addEventListener('click', lista_cliente());

salvar.addEventListener('click', function () {
    //RECEBEMOS O RESULTADO DA VALIDAÇÃO DO FORMULARIO
    const valida = $('#frmcliente').valid();
    // let acao = document.getElementById("edtacao");
    if (valida == true) {
        inserir();
    }
});

$("#cpf").inputmask({
    mask: '999.999.999-99'
});

//const cpf = document.querySelector("#cpf");
