<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа по PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: block;
            align-self: center;
        }
        .head {
            text-align: center;
        }
        .text-container {
            max-width: 600px;
            width: 100%;
            margin: auto;
        }
        .result-true {
            color: green;
            font-weight: bold;
        }
        .result-false {
            color: red;
            font-weight: bold;
        }
        .table, .item_name {
            width: auto;
            padding: 5px;
            border: 2px black solid;
            border-radius: 1.5%;
            margin: auto;
            margin-bottom: 20px;
        }
        .table thead th, .item_name {
            font-weight: bold;
            text-align: center;
            border: none;
            padding: 10px 15px;
            background: #d8d8d8;
            font-size: 14px;
        }
        .table thead tr th:first-child {
            border-radius: 8px 0 0 8px;
        }
        .table thead tr th:last-child {
            border-radius: 0 8px 8px 0;
        }
        .table tbody td {
            text-align: center;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            vertical-align: top;
        }
        .table tbody tr:nth-child(even) {
            background: #f3f3f3;
        }
        .table tbody tr td:first-child {
            border-radius: 8px 0 0 8px;
        }
        .table tbody tr td:last-child {
            border-radius: 0 8px 8px 0;
        }
    </style>
</head>
<body>
    <h2 class="head">Задание 1. Таблица истинности PHP</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $truthTable = [
                    [0, 0],
                    [0, 1],
                    [1, 0],
                    [1, 1]
                ];

                foreach ($truthTable as [$A, $B]) {
                    $notA = !$A;
                    $orResult = $A || $B;
                    $andResult = $A && $B;
                    $xorResult = $A xor $B;

                    echo "<tr>";
                    echo "<td>" . (int)$A . "</td>";
                    echo "<td>" . (int)$B . "</td>";
                    echo "<td>" . (int)$notA . "</td>";
                    echo "<td>" . (int)$orResult . "</td>";
                    echo "<td>" . (int)$andResult . "</td>";
                    echo "<td>" . (int)$xorResult . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
    <h2 class="head">Задание 2. Гибкое сравнение в PHP <span>('==')</span></h2>
    
    <?php
        function renderComparisonTable($operator) {
            $values = [true, false, 1, 0, -1, "1", null, "php"];
            $headers = ['true', 'false', '1', '0', '-1', '"1"', 'null', '"php"'];

            echo '<table class="table"><thead><tr><th></th>';
            foreach ($headers as $header) {
                echo "<th>$header</th>";
            }
            echo '</tr></thead><tbody>';

            foreach ($values as $i => $row) {
                echo '<tr><td class="item_name">';
                var_export($row);
                echo '</td>';

                foreach ($values as $col) {
                    $result = ($operator === '==') ? ($row == $col) : ($row === $col);
                    $class = $result ? 'result-true' : 'result-false';
                    echo '<td><span class="' . $class . '">';
                    var_export($result);
                    echo '</span></td>';
                }
                echo '</tr>';
            }
            echo '</tbody></table>';
        }

        renderComparisonTable('==');
    ?>
    
    <h2 class="head">Задание 3. Строгое сравнение в PHP <span>('===')</span></h2>
    
    <?php
        renderComparisonTable('===');
    ?>
    
    <h2 class="head">Вывод:</h2>
    
    <div class="text-container">
        <ul>
            <li><strong>Нестрогое сравнение</strong> <mark>(==)</mark> считает объекты равными, если они принадлежат одному и тому же классу и имеют одинаковые значения атрибутов (по умолчанию).</li>
            <li><strong>Строгое сравнение</strong> в PHP выполняется с помощью оператора <mark>(===)</mark>, который проверяет равенство как по значению, так и по типу данных, без какого-либо преобразования.</li>
            <li><strong>Когда использовать строгое сравнение?</strong> Когда необходимо убедиться, что сравниваемые значения имеют не только одинаковое значение, но и одинаковый тип.</li>
        </ul>
    </div>
</body>
</html>