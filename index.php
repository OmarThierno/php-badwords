<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords </title>
</head>

<body>
  <form action="print.php">
    <div>
      <label for="paragraph">Inserisci il paragrafo</label>
      <textarea name="paragraph" id="paragraph" cols="30" rows="5"></textarea>
    </div>
    <div>
      <label for="word">Inserisci la paraola da censurare</label>
      <input type="text" id="word" name="word">
    </div>
    <button type="submit">INVIA</button>
  </form>
</body>

</html>