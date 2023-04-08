<?php
                $num = $_POST['num'];
                echo "<h1>Multiplication Table up to $num</h1>";
                echo "<table border='1'>";
                echo "<tr><th>&times;</th>";
                for ($i = 1; $i <= $num; $i++) {
                        echo "<th>$i</th>";
                }
                echo "</tr>";
                for ($i = 1; $i <= $num; $i++) {
                        echo "<tr><th>$i</th>";
                        for ($j = 1; $j <= $num; $j++) {
                                echo "<td>" . ($i * $j) . "</td>";
                        }
                        echo "</tr>";
                }
                echo "</table>";
        ?> 
