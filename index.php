<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur Morse</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <?php
            $alphabetMorse = [
                'A (a)' => '.-',
                'B (b)' => '-...',
                'C (c)' => '-.-.',
                'D (d)' => '-..',
                'E (e)' => '.',
                'F (f)' => '..-.',
                'G (g)' => '--.',
                'H (h)' => '....',
                'I (i)' => '..',
                'J (j)' => '.---',
                'K (k)' => '-.-',
                'L (l)' => '.-..',
                'M (m)' => '--',
                'N (n)' => '-.',
                'O (o)' => '---',
                'P (p)' => '.--.',
                'Q (q)' => '--.-',
                'R (r)' => '.-.',
                'S (s)' => '...',
                'T (t)' => '-',
                'U (u)' => '..-',
                'V (v)' => '...-',
                'W (w)' => '.--',
                'X (x)' => '-..-',
                'Y (y)' => '-.--',
                'Z (z)' => '--..',

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

            ];
            var_dump($alphabetMorse);
            echo "<br>";

            echo "<pre>";
            print_r($alphabetMorse);
            echo "</pre>";
        ?>
        <form action="">
            <div>
                <label for="message">Votre code Morse à traduire en texte</label>
                <textarea 
                    id="messageMorse" 
                    name="messageMorse" 
                    rows="10" 
                    cols="200" 
                    placeholder="votre message ici"
                    maxlength="500"
                ></textarea>
                <input type="button" name="buttonMorse" value="Traduire en texte">    
            </div>
            <div>
                <label for="message">Votre message à traduire en Morse</label>
                <textarea 
                    id="message" 
                    name="message" 
                    rows="10" 
                    cols="200" 
                    placeholder="votre message ici"
                    maxlength="500"
                ></textarea>
                <input type="button" name="button" value="Traduire en Morse">
            </div>
        </form>
    </main>    
</body>
</html>