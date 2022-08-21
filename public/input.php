<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
</head>

<body>
    <label for="">Nome (input text)</label><br>
    <input type="text" placeholder="Digite seu nome" name="nome" class="nome" id="nome" /><br>
    <label for="">E-mail (email)</label><br>
    <input type="email" placeholder="Digite seu e-mail" name="nome" class="nome" id="nome" /><br>
    <label for="">Telefone (tel)</label><br>
    <input type="tel" placeholder="Digite seu telefone" name="nome" class="nome" id="nome" /><br>
    <label for="">Digite um numero (number)</label><br>
    <input type="number" placeholder="Digite um numero" name="nome" class="nome" id="nome" /><br>

    <h1>Escolha suas habilidade</h1><br>
    <label for="postgres">
        PostgreSQL
    </label>
    <input type="checkbox" name="habilidade" class="habilidade" id="postgres" />
    <label for="javascript">Javascript</label>
    <input type="checkbox" name="habilidade" class="habilidade" id="javascript" />
    <label for="php">PHP</label>
    <input type="checkbox" name="habilidade" class="habilidade" id="php" />

    <hr>
    <h2>Radio button</h2>
    <br>
    <h4>Selecione seu time</h4>
    <br>
    <input type="radio" name="times" id="corintian">
    <label for="corintian">Corintians FC</label><br>

    <input type="radio" name="times" id="saopaulo">
    <label for="saopaulo">São Paulo FC</label><br>

    <input type="radio" name="times" id="gremio">
    <label for="gremio">Gremio FC</label><br>
    <hr>
    <h2>Date</h2>
    <br>
    <h4>Selecione uma ou hora ou semana</h4>
    <br>
    <label for="data">Data</label><br>
    <input id="data" name="data" type="date" placeholder="Digite sua data de nascimento">
    <br>
    <label for="home">Escolha a hora</label><br>
    <input type="time" name="hora" id="hora">
    <br>
    <label for="semana">Semana</label><br>
    <input type="week" name="semana" id="semana">
    <br>
    <label for="comentario">Digite seu comentário</label><br>
    <textarea name="comentario" id="comentario" cols="30" rows="10">
    </textarea>

    <br>
    <label for="estados-brasil">Unidade federativa</label><br>
    <select id="estados-brasil" name="estados-brasil">
        <optgroup label="Norte">
            <option value="AC">Acre</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="PA">Pará</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="TO">Tocantins</option>
        </optgroup>
        <optgroup label="Nordeste">
            <option value="AL">Alagoas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="MA">Maranhão</option>
            <option value="PB">Paraíba</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="SE">Sergipe</option>
        </optgroup>
        <optgroup label="Centro-Oeste">
            <option value="DF">Distrito Federal</option>
            <option value="GO">Goiás</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
        </optgroup>
        <optgroup label="Sudeste">
            <option value="ES">Espírito Santo</option>
            <option value="MG">Minas Gerais</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="SP">São Paulo</option>
        </optgroup>
        <optgroup label="Sul">
            <option value="PR">Paraná</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SC">Santa Catarina</option>
        </optgroup>
    </select>

</body>

</html>