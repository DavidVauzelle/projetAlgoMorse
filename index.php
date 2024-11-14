<?php
// Tableau morse --> Français
$morseAlphabet = [
    '.-' => 'A',
    '-...' => 'B',
    '-.-.' => 'C',
    '-..' => 'D',
    '.' => 'E',
    '..-.' => 'F',
    '--.' => 'G',
    '....' => 'H',
    '..' => 'I',
    '.---' => 'J',
    '-.-' => 'K',
    '.-..' => 'L',
    '--' => 'M',
    '-.' => 'N',
    '---' => 'O',
    '.--.' => 'P',
    '--.-' => 'Q',
    '.-.' => 'R',
    '...' => 'S',
    '-' => 'T',
    '..-' => 'U',
    '...-' => 'V',
    '.--' => 'W',
    '-..-' => 'X',
    '-.--' => 'Y',
    '--..' => 'Z',
    '-----' => 0,
    '.----' => 1,
    '..---' => 2,
    '...--' => 3,
    '....-' => 4,
    '.....' => 5,
    '-....' => 6,
    '--...' => 7,
    '---..' => 8,
    '----.' => 9,
    '.-.-.-' => '.',
    '--..--' => ',',
    '..--..' => '?',
    '.----.' => '\'',
    '-.-.-----.' => '!',
    '-..-.' => '/',
    '-.--.' => '(',
    '-.--.-' => ')',
    '.-...' => '&',
    '---...' => ':',
    '-.-.-.' => ';',
    '-...-' => '=',
    '.-.-.' => '+',
    '-....-' => '-',
    '..--.-' => '_',
    '.-..-.' => '"',
    '...-..-' => '$',
    '.--.-.' => '@',
    "/" => ' ',
];

// Tableau Français --> morse
$alphabetMorse = [
    'A' => '.-',
    'B' => '-...',
    'C' => '-.-.',
    'D' => '-..',
    'E' => '.',
    'F' => '..-.',
    'G' => '--.',
    'H' => '....',
    'I' => '..',
    'J' => '.---',
    'K' => '-.-',
    'L' => '.-..',
    'M' => '--',
    'N' => '-.',
    'O' => '---',
    'P' => '.--.',
    'Q' => '--.-',
    'R' => '.-.',
    'S' => '...',
    'T' => '-',
    'U' => '..-',
    'V' => '...-',
    'W' => '.--',
    'X' => '-..-',
    'Y' => '-.--',
    'Z' => '--..',
    0 => '-----',
    1 => '.----',
    2 => '..---',
    3 => '...--',
    4 => '....-',
    5 => '.....',
    6 => '-....',
    7 => '--...',
    8 => '---..',
    9 => '----.',
    '.' => '.-.-.-',
    ',' => '--..--',
    '?' => '..--..',
    '\'' => '.----.',
    '!' => '-.-.-----.',
    '/' => '-..-.',
    '(' => '-.--.',
    ')' => '-.--.-',
    '&' => '.-...',
    ':' => '---...',
    ';' => '-.-.-.',
    '=' => '-...-',
    '+' => '.-.-.',
    '-' => '-....-',
    '_' => '..--.-',
    '"' => '.-..-.',
    '$' => '...-..-',
    '@' => '.--.-.',
    ' ' => "/",
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur Morse</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>
    <main>
        <?php
        // Code morse à traduire pour le test : -... --- -. .--- --- ..- .-. -.. .- ...- .. -.. -.-.-----.

        // Traduction d'un code morse en texte Français
        // Vérification qu'un message à traduire à bien été renseigné
        if (isset($_POST["messageMorse"]) && !empty($_POST["messageMorse"])) {
            $code = $_POST['messageMorse'];
            $codeDecoupeMot = explode(' ', $code);

            // print_r($codeDecoupeMot);

            // On boucle sur chaque caractère de la chaîne découpée
            foreach ($codeDecoupeMot as $value) {
                $caracteres[] = $morseAlphabet[strtoupper($value)];
            }
            
            echo implode( '', $caracteres);
            
            // Traduction texte Français en morse
            // Vérification qu'un message à traduire à bien été renseigné
            } elseif (isset($_POST["message"]) && !empty($_POST["message"])) {
            $chaine = $_POST['message'];
            $chaineDecoupee = str_split($chaine);

            // On boucle sur chaque caractère de la chaîne découpée
            foreach ($chaineDecoupee as $value) {
                $caracteres[] = $alphabetMorse[strtoupper($value)];
            }

            echo implode('', $caracteres);
            
        } else {
            echo "Veuillez renseigner un texte à traduire";
        }

        ?>
        <form action="" method="POST">
            <div>
                <label for="message">Votre code Morse à traduire en texte</label>
                <textarea 
                    id="messageMorse" 
                    name="messageMorse" 
                    rows="10" 
                    cols="200" 
                    placeholder="votre code morse à traduire en texte"
                    maxlength="500"
                ></textarea>
                <input type="submit" name="buttonMorse" value="Traduire en texte">    
            </div>
            <div>
                <label for="message">Votre message à traduire en Morse</label>
                <textarea 
                    id="message" 
                    name="message" 
                    rows="10" 
                    cols="200" 
                    placeholder="votre message à traduire en morse"
                    maxlength="500"
                ></textarea>
                <input type="submit" name="button" value="Traduire en Morse">
            </div>
        </form>
    </main>    
</body>
</html>