<?php
$clientes = array(
    [
        "id"         => '1',
        "nome"       => 'WILTON',
        "sobre_nome" => 'WILL DE PAULO',
        "cpf"        => '000.000.000-00'
    ],
    [
        "id"         => '2',
        "nome"       => 'JOAQUIM',
        "sobre_nome" => 'DAS DORES',
        "cpf"        => '222.222.222-22'
    ],
    [
        "id"         => '3',
        "nome"       => 'MARIINHAS',
        "sobre_nome" => 'RAIMUNDA',
        "cpf"        => '333.333.333-33'
    ]
);
$dados = "";
foreach ($clientes as $key => $value) {
    $dados = $dados . "<tr>" .
        "<td>" . $value['id'] . "</td>" .
        "<td>" . $value['nome'] . "</td>" .
        "<td>" . $value['sobre_nome'] . "</td>" .
        "<td>" . $value['cpf'] . "</td>" .
        "</tr>";
}
echo $dados;
