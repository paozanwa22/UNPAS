<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        // $i : adalah baris
        // $j : adalah kolom
            // for( $i = 1; $i <= 3; $i++ ){
            //     echo "<tr>";
            //     for( $j = 1; $j <= 5; $j++ ){
            //         echo "<td>$i, $j</td>";
            //     }
            //     echo "</tr>";
            // }
        ?>
        
        <!-- 
            // penulisan gaya templeting
            // memisahkan HTML dan PHP
        -->
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                </tr>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 3; $j++ ) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        
        <!--  -->
    </table>
</body>
</html>