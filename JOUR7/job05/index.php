<?php
session_start();

// Initialisation de la grille et du tour de jeu
if (!isset($_SESSION['grille'])) 
{
    $_SESSION['grille'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
    $_SESSION['tour'] = 'X'; 
}


if (isset($_POST['case']))
 {
    $case = $_POST['case'];
    list($row, $col) = explode(',', $case);

    if ($_SESSION['grille'][$row][$col] === '-') {
        $_SESSION['grille'][$row][$col] = $_SESSION['tour'];
        $_SESSION['tour'] = ($_SESSION['tour'] === 'X') ? 'O' : 'X';
    }
}


function verifierVictoire($grille) {
    // Vérification des lignes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $grille[$i][1] && $grille[$i][1] === $grille[$i][2] && $grille[$i][0] !== '-') {
            return $grille[$i][0];
        }
    }
    // Vérification des colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[0][$i] === $grille[1][$i] && $grille[1][$i] === $grille[2][$i] && $grille[0][$i] !== '-') {
            return $grille[0][$i];
        }
    }
    // Vérification des diagonales
    if ($grille[0][0] === $grille[1][1] && $grille[1][1] === $grille[2][2] && $grille[0][0] !== '-') {
        return $grille[0][0];
    }
    if ($grille[0][2] === $grille[1][1] && $grille[1][1] === $grille[2][0] && $grille[0][2] !== '-') {
        return $grille[0][2];
    }
    return null;
}


$victoire = verifierVictoire($_SESSION['grille']);
if ($victoire) {
    $_SESSION['victoire'] = $victoire; 
    $_SESSION['grille'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']]; 
}

    if (isset($_SESSION['victoire'])) {
      
        echo " ". $_SESSION['victoire'] . " a gagné !<br>";
    }


if (isset($_POST['reset'])) {
    $_SESSION['grille'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']]; 
    unset($_SESSION['victoire']); 
    echo "<b>Le jeu a été réinitialisé !</b>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><b>Jeu du Morpion</b></h1>

   

    <table>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <td>
                        <form method="POST">
                            <button type="submit" name="case" value="<?php echo $i . ',' . $j; ?>">
                                <?php echo $_SESSION['grille'][$i][$j]; ?>
                            </button>
                        </form>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
    
   
</body>
</html>


