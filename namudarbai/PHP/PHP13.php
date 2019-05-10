<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP13</title>
</head>

<body>
    <?php
        class Zmogus {
            public $vardas;
            public $pavarde;
            public $pasisveikinimas;

            public function labas() {
                return $this -> vardas . ' ' . $this -> pavarde . ' sako: ' . $this -> pasisveikinimas . '<br>';
            }
        }
    $zmogus1 = new Zmogus();
    $zmogus2 = new Zmogus();

    $zmogus1 -> vardas = "Jonas";
    $zmogus1 -> pavarde = "Jonaitis";
    $zmogus1 -> pasisveikinimas = "laba diena";

    $zmogus2 -> vardas = "Petras";
    $zmogus2 -> pavarde = "Petraitis";
    $zmogus2 -> pasisveikinimas = "nei laba nei diena";

    echo $zmogus1 -> labas();
    echo $zmogus2 -> labas();
    ?>
</body>
</html>
