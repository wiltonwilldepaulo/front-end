const atualiza = document.querySelector("#btnatualiza");
const nome = document.querySelector("#nome");

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
//MAPEAMOS O EVENTO DE CARREGAMENTO DO DOCUMENTO
document.addEventListener("DOMContentLoaded", function () {
    lista_cliente();
});

atualiza.addEventListener('click', lista_cliente());

function mudar() {
    alert('Teste de evento de mudança')
}
nome.addEventListener('keypress', function () { mudar() });
