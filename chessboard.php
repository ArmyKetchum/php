<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "  <title>Chess Board</title>";
echo "  <style>
          table {
              border-collapse: collapse;
              margin: 20px auto;
          }
          td {
              width: 60px;
              height: 60px;
              border: 1px solid #000;
          }
          .black {
              background-color: #333;
          }
          .white {
              background-color: #fff;
          }
      </style>";
echo "</head>";
echo "<body>";
echo "  <h1 style='text-align: center;'>Chess Board</h1>";
echo "  <table>";
for ($row = 0; $row < 8; $row++) {
    echo "    <tr>";
    for ($col = 0; $col < 8; $col++) {
        $cellClass = (($row + $col) % 2 == 0) ? "white" : "black";
        echo "      <td class='$cellClass'></td>";
    }
    echo "    </tr>";
}
echo "  </table>";
echo "</body>";
echo "</html>";
?>
