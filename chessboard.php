<?php
// Start generating the HTML document using only PHP

// Output the document type and the opening HTML tags
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "  <meta charset='UTF-8'>";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "  <title>Chess Board</title>";

// Inline CSS styles for the chessboard (using HTML <style> tag)
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

// Begin the body of the document
echo "<body>";
echo "  <h1 style='text-align: center;'>Chess Board</h1>";

// Start the table for the chessboard
echo "  <table>";

// Use a nested for loop to create an 8x8 grid
for ($row = 0; $row < 8; $row++) {
    echo "    <tr>";
    for ($col = 0; $col < 8; $col++) {
        // Determine the cell color:
        // If the sum of the row and column indices is even, use white; if odd, use black.
        $cellClass = (($row + $col) % 2 == 0) ? "white" : "black";
        echo "      <td class='$cellClass'></td>";
    }
    echo "    </tr>";
}

// Close the table and body tags
echo "  </table>";
echo "</body>";
echo "</html>";
?>
