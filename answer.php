<?php

$contents = file_get_contents('alice.txt');
$lines = explode("\n", $contents);
$list = [];

$bannedCharacters = [
'', '*', '"', '`', ',', '.', '\'', '!', '?', ')', ':'
];

foreach($lines as $line)
{
    $words = explode(' ', $line);

    foreach($words as $word)
    {
        $word = strtolower(trim($word));

        $word = str_replace($bannedCharacters, '', $word);

        if ($word == '')
        {
            continue;
        }

        if (array_key_exists($word, $list))
        {
            $list[$word]++;
        }
        else
        {
            $list[$word] = 1;
        }
    }
}

//sort the list
arsort($list);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Word</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $word => $entry): ?>
            <tr>
                <td><?php echo $word; ?></td>
                <td><?php echo $entry; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

var_dump($list);