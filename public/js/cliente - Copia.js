async function lista_cliente() {
    //monstamos a configuração da requição
    //ao servidor http
    const opt = {
        method: 'POST',
        mode: 'cors',
        cache: 'default'
    }
    //tentamos executar um requisição
    fetch('listacliente.php', opt)
    //se der certo pegamos o retorno
    .then(response => {
        response.text
        .then(data => show(data))
    })
    //se der erro capturamos o erro
    .catch(e => {
        console.log(e.message());
    });
}
//MAPEAMOS O EVENTO DE CARREGAMENTO DO DOCUMENTO
document.addEventListener("DOMContentLoaded", function () {
    lista_cliente();
});
