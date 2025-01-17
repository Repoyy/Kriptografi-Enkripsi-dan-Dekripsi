<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Enkripsi dan Deskripsi By Revi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        form {
            max-width: 400px;
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
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            font-size: 16px;
            background-color: #c0392b;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #a93226;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Program Enkripsi dan Deskripsi By Revi</h1>

    <form action="process.php" method="post">
        <label for="inputText">Masukkan Teks:</label>
        <textarea id="inputText" name="inputText" required></textarea>

        <label for="key">Masukkan Key (Kunci):</label>
        <input type="number" id="key" name="key" value="1">

        <button type="submit" name="encrypt">Enkripsi</button>
        <button type="submit" name="decrypt">Deskripsi</button>
    </form>
</body>
</html>