<?php
$members = ['Bob', 'Tom', 'Ken', 'John'];

$members[1] = 'Michael';

$members[] = 'Daniel';

print_r($members);

echo '<br>';
echo '<hr>';

$members[50] = 'SKIP';
$members[] = 'TAIL';
print_r($members);