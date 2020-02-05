<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Times Tables</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    print '<table>';
//outter loop
    for ($row = 0; $row <= 9; $row++) {
        print "<tr>";
        //inner loop
        for ($col = 0; $col <= 9; $col++) {
            $multTable = $col * $row;
            // change 0 to regular numbers
            if ($col == 0 && $row == 0) {
                print '<td>X</td>';
            } else if ($row == 0 && $col != 0) {
                print "<td>" . $col . "</td>";
            } else if ($row != 0 && $col == 0) {
                print "<td>" . $row . "</td>";
            } else {
                //even and odd classes
                if ($multTable % 2 == 0) {
                    print'<td class="even">' . $multTable . '</td>';
                } else {
                    print'<td class="odd">' . $multTable . '</td>';
                }
            }
        }

        print '</tr>';
    }

    print '</table>';

    ?>
</body>
</html>