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