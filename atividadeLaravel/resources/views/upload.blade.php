<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Arquivos </title>
</head>

<body>
    <h1>Upload</h1>
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <label for="fname">Descrição:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <input type="file" name="file">
        <input type="submit" name="Upload">
    </form>
    </form>
</body>

</html>