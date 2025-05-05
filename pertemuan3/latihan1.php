<!-- <?php 
// pengulangan
// for 
// while
// do... while
// foreach : prengulangan array

// for ($i=0; $i < 5; $i++) { 
//     echo 'hello world! <br>';
// }

// $i = 0;
// while ($i < 5) {
//     echo 'hello world! <br>';
//     $i++;
// }

// $i = 10;
// do {                                                                         
//     echo 'hello world!! <br>';
//     $i++;
// } while ($i < 5);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border='1' cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i <=5 ; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                    <?php for ($j=0; $j < 5; $j++) { ?>
                        <td>
                            <?= "$i,$j"; ?>
                        </td>
                    <?php } ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
