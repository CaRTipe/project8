<?php
$data = [
    ['Apple', 'Banana', 'Cherry'],
    ['Dog', 'Elephant', 'Fox'],
    ['Green', 'House', 'Island']
];

echo "<table border='1'>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $index => $cell) {
        if ($index === 2) {
            // Targeting the 3rd column (index 2)
            echo "<td style='background-color: yellow;'>$cell</td>";
        } else {
            echo "<td>$cell</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>