<head>
    <style>
        * { /*dobrą praktyką jest*/
            margin: 0;
            padding: 0;
        }

        table td {
            background-color: lightgray;
            text-align: center;
        }
        
        table td:first-child, table th {
            background-color: darkgray;
            text-align: center;
        }

        #container {
            width: 100%;
            min-height: 100vh;
            display: grid;
        }

        #container table {
            margin: auto;
        }
    </style>
</head>
<body>
    <div id="container">
    <?php
        function tab_mnoz($szer, $wys) {
            echo "<table width=$szer height=$wys>";
            echo "<tr><th>*</th>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . $i*$j . "</td>";
                }
                echo "</tr>";
            }
        }

        tab_mnoz(300, 300);
    ?>
    </div>
</body>