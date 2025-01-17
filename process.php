<?php
function caesarCipher($text, $key) {
    return preg_replace_callback('/[a-zA-Z]/', function ($char) use ($key) {
        $base = $char[0] === strtolower($char[0]) ? 'a' : 'A';
        return chr((ord($char[0]) - ord($base) + $key + 26) % 26 + ord($base));
    }, $text);
}

$action = '';
$inputText = '';
$key = '';
$outputText = '';

if (isset($_POST['encrypt']) || isset($_POST['decrypt'])) {
    $inputText = $_POST['inputText'];
    $key = isset($_POST['key']) ? (int)$_POST['key'] : 1;

    if (isset($_POST['encrypt'])) {
        $outputText = caesarCipher($inputText, $key);
        $action = 'Enkripsi';
    } else {
        $outputText = caesarCipher($inputText, -$key);
        $action = 'Deskripsi';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Enkripsi dan Deskripsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        div.result-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        a {
        text-decoration: none;
         }
        button {
        padding: 10px;
        font-size: 16px;
        background-color: #c0392b;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        }
        button:hover {
        background-color: #a93226;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1><?= $action ?> nya adalah</h1>

        <label for="inputText">Teks Asli:</label>
        <textarea id="inputText" readonly><?= $inputText ?></textarea>

        <label for="outputText"><?= $action ?>:</label>
        <textarea id="outputText" readonly><?= $outputText ?></textarea>

        <a href="index.php"><button type="button">Kembali</button></a>
    </div>
</body>
</html>