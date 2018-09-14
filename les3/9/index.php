<?php
$translitArray = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'e',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => '"',
    'ы' => 'y',
    'ь' => "'",
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
    ' ' => '_'
];

function translitWord($word, $translitArray) {
    $word = mb_strtolower($word);
    $arrayWord = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
    $arrayResultWord = [];
    
    foreach($arrayWord as $value) {
        $element = $translitArray[$value];
        if (is_null($element)) {
            $arrayResultWord[] = $value;
        } else {
            $arrayResultWord[] = $translitArray[$value];
        }
    }

    $resultWord = implode('', $arrayResultWord);
    return $resultWord;
}

$myWord = 'Привет, Галина!!!!';
echo "{$myWord} <br>";
echo 'Результат работы функции, написанной мной: ' . translitWord($myWord, $translitArray) . '<br>';

echo 'Результат работы strtr: ' . strtr(mb_strtolower($myWord), $translitArray);
?>