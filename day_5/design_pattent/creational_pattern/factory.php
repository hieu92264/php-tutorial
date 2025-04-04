<?php


$users = [
    [
        'id' => 1,
        'name' => 'Nguyen Van A',
        'email' => 'vana@example.com',
        'age' => 25
    ],
    [
        'id' => 2,
        'name' => 'Tran Thi B',
        'email' => 'thib@example.com',
        'age' => 22
    ],
    [
        'id' => 3,
        'name' => 'Le Van C',
        'email' => 'vanc@example.com',
        'age' => 30
    ]
];

$newUser = array_filter($users, function($item) {
	return $item['age'] < 26 && substr($item['name'], 0, 1) == 'N';
});

$newUser1 = array_filter($users, fn($item) => $item['age'] < 26);

var_dump($newUser);
