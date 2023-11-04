<?php


$users = ['Ivan', 'Viktor', 'Elena', null];

$users = array_filter($users, fn ($user) => $user !== 'Elena');
$users = array_map(fn ($user) => strtoupper($user), $users);
$users = array_merge($users, ['Havana', 'Isabelle']);
asort($users); // sorts the values ascending, keeps the indexing order the same
sort($users); // sorts values and keys ascending

if (isset($users[0])){
    echo 'Users found!';
    echo "<br>";
}

if (array_key_exists(3, $users)){
    echo 'User null found';
    echo "<br>";
}
echo "<br>";
print_r(array_values($users));

