<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];

// $prova = ['ciao', 'hello', 'bay'];
// var_dump($prova);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Printing</title>
</head>

<body>
  <h2>Il testo scritto precedentemente</h2>
  <div>
    <?php echo $paragraph ?>
  </div>
  <div>
    la lunghezza è:
    <?php echo strlen($paragraph) ?>
  </div>

  <h2>Il paragrafo con la parola censurata</h2>

  <div>
    <?php echo str_replace($word, '***', $paragraph) ?>
  </div>

</body>

</html>