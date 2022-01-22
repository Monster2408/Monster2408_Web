<?php

include("./assets/config.php");
include("./function.php");

printCommonHead();

$token = $conf['github_token'];
$query = '{
    user(login: "Monster2408") {
        repositories(first: 46) {
            nodes {
                name
                url
            }
        }
    }
}';

$options = [
    'http' => [
        'method' => 'POST',
        'header' => [
            'User-Agent: My User Agent',
            'Authorization: bearer '.$token,
            'Content-type: application/json; charset=UTF-8',
        ],
        'content' => json_encode(['query' => $query]),
    ],
];
$context = stream_context_create($options);
$contents = file_get_contents('https://api.github.com/graphql', false, $context);

var_dump(json_decode($contents));

printCommonFoot(); 
?>