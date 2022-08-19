//RETORNA UMA PROMESSA
function send(url, options) {
    return fetch(url, options);
}
async function save() {
    const form = document.getElementById("cliente");
    const data = new FormData(form);
    const opt = {
        method: 'POST',
        mode: 'cors',
        body: data,
        cache: 'default'
    }
    //RECEBEMOS A REPOSTA DA EXCLUSÃO DO ENDEREÇO
    const resulta = await send(`save.php`, opt);
    //CONVERTEMOS O ENDEREÇO PARA JSON
    const json = await resulta.json();
    console.log(json);
}
//declamos a constante imutavel, que recerá os valores do
//botão.
const salvar = document.querySelector("#btnsalvar");
//MAPEAMOS O CLIENTE DO BOTÃO
salvar.addEventListener('click', () => {
    save();
});