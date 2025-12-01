<!DOCTYPE html>
<html lang="en">
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
        .table tbody tr:nth-child(even){
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
			<tr>
				<?php
				$A = 0;
				$B = 0;

				$notA = !$A;
				$orResult = $A || $B;
				$andResult = $A && $B;
				$xorResult = $A xor $B;
				?>
					<td><?php echo (int)$A; ?></td>
					<td><?php echo (int)$B; ?></td>
					<td><?php echo (int)$notA; ?></td>
					<td><?php echo (int)$orResult; ?></td>
					<td><?php echo (int)$andResult; ?></td>
					<td><?php echo (int)$xorResult; ?></td>
			</tr>
			<tr>
				<?php
				$A = 0;
				$B = 1;

				$notA = !$A;
				$orResult = $A || $B;
				$andResult = $A && $B;
				$xorResult = $A xor $B;
				?>
					<td><?php echo (int)$A; ?></td>
					<td><?php echo (int)$B; ?></td>
					<td><?php echo (int)$notA; ?></td>
					<td><?php echo (int)$orResult; ?></td>
					<td><?php echo (int)$andResult; ?></td>
					<td><?php echo (int)$xorResult; ?></td>
			</tr>
			<tr>
				<?php
				$A = 1;
				$B = 0;

				$notA = !$A;
				$orResult = $A || $B;
				$andResult = $A && $B;
				$xorResult = $A xor $B;
				?>
					<td><?php echo (int)$A; ?></td>
					<td><?php echo (int)$B; ?></td>
					<td><?php echo (int)$notA; ?></td>
					<td><?php echo (int)$orResult; ?></td>
					<td><?php echo (int)$andResult; ?></td>
					<td><?php echo (int)$xorResult; ?></td>
			</tr>
			<tr>
				<?php
				$A = 1;
				$B = 1;

				$notA = !$A;
				$orResult = $A || $B;
				$andResult = $A && $B;
				$xorResult = $A xor $B;
				?>
					<td><?php echo (int)$A; ?></td>
					<td><?php echo (int)$B; ?></td>
					<td><?php echo (int)$notA; ?></td>
					<td><?php echo (int)$orResult; ?></td>
					<td><?php echo (int)$andResult; ?></td>
					<td><?php echo (int)$xorResult; ?></td>
			</tr>
		</tbody>
	</table>
	
    <h2 class="head">Задание 2. Гибкое сравнение в PHP <span>('==')</span></h2>

    <table class="table">
		<thead>
			<?php
				$column1 = true;
				$column2 = false;
				$column3 = 1;
				$column4 = 0;
				$column5 = -1;
				$column6 = "1";
				$column7 = null;
				$column8 = "php";
			?>

			<?php
				$row1 = true;
				$row2 = false;
				$row3 = 1;
				$row4 = 0;
				$row5 = -1;
				$row6 = "1";
				$row7 = null;
				$row8 = "php";
			?>

			<tr>
				<th></th>
				<th>true</th>
				<th>false</th>
				<th>1</th>
				<th>0</th>
				<th>-1</th>
				<th>"1"</th>
				<th>null</th>
				<th>"php"</th>
			</tr>
		</thead>
		<tbody>

		<!-- 1 строка -->

			<tr>
				<td class="item_name"><?php var_export($row1) ?></td>

				<!-- 1 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row1 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 1 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 2 строка -->

			<tr>
				<td class="item_name"><?php var_export($row2) ?></td>

				<!-- 2 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row2 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 2 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>
		
		<!-- 3 строка -->

			<tr>
				<td class="item_name"><?php var_export($row3) ?></td>

				<!-- 3 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row3 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 3 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 4 строка -->

			<tr>
				<td class="item_name"><?php var_export($row4) ?></td>

				<!-- 4 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row4 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 4 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>
		
		<!-- 5 строка -->

			<tr>
				<td class="item_name"><?php var_export($row5) ?></td>

				<!-- 5 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row5 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 5 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 6 строка -->

			<tr>
				<td class="item_name"><?php var_export($row6) ?></td>

				<!-- 6 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row6 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 6 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 7 строка -->

			<tr>
				<td class="item_name"><?php var_export($row7) ?></td>

				<!-- 7 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row7 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 7 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 8 строка -->

			<tr>
				<td class="item_name"><?php var_export($row8) ?></td>

				<!-- 8 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row8 == $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 8 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 == $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>
		</tbody>
	</table>

	<h2 class="head">Задание 3. Строгое сравнение в PHP <span>('===')</span></h2>

    <table class="table">
		<thead>
			<?php
				$column1 = true;
				$column2 = false;
				$column3 = 1;
				$column4 = 0;
				$column5 = -1;
				$column6 = "1";
				$column7 = null;
				$column8 = "php";
			?>

			<?php
				$row1 = true;
				$row2 = false;
				$row3 = 1;
				$row4 = 0;
				$row5 = -1;
				$row6 = "1";
				$row7 = null;
				$row8 = "php";
			?>

			<tr>
				<th></th>
				<th>true</th>
				<th>false</th>
				<th>1</th>
				<th>0</th>
				<th>-1</th>
				<th>"1"</th>
				<th>null</th>
				<th>"php"</th>
			</tr>
		</thead>
		<tbody>

		<!-- 1 строка -->

			<tr>
				<td class="item_name"><?php var_export($row1) ?></td>

				<!-- 1 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row1 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 1 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 1 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row1 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 2 строка -->

			<tr>
				<td class="item_name"><?php var_export($row2) ?></td>

				<!-- 2 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row2 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 2 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 2 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row2 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>
		
		<!-- 3 строка -->

			<tr>
				<td class="item_name"><?php var_export($row3) ?></td>

				<!-- 3 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row3 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 3 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 3 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row3 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 4 строка -->

			<tr>
				<td class="item_name"><?php var_export($row4) ?></td>

				<!-- 4 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row4 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 4 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 4 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row4 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>
		
		<!-- 5 строка -->

			<tr>
				<td class="item_name"><?php var_export($row5) ?></td>

				<!-- 5 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row5 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 5 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 5 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row5 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 6 строка -->

			<tr>
				<td class="item_name"><?php var_export($row6) ?></td>

				<!-- 6 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row6 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 6 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 6 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row6 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 7 строка -->

			<tr>
				<td class="item_name"><?php var_export($row7) ?></td>

				<!-- 7 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row7 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 7 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 7 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row7 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>

		<!-- 8 строка -->

			<tr>
				<td class="item_name"><?php var_export($row8) ?></td>

				<!-- 8 строка / 1 столбец -->
				<td>
    				<?php
    					$result = $row8 === $column1;
    					$class = $result ? 'result-true' : 'result-false';
    				?>
    				<span class="<?php echo $class; ?>">
    				    <?php var_export($result); ?>
    				</span>
				</td>

				<!-- 8 строка / 2 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column2;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 3 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column3;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 4 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column4;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 5 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column5;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 6 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column6;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 7 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column7;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>

				<!-- 8 строка / 8 столбец -->
				<td class="color_boolean">
					<?php
						$result = $row8 === $column8;
						$class = $result ? 'result-true' : 'result-false';
				 	?>
					<span class="<?php echo $class; ?>">
						<?php var_export($result); ?>
					</span>
				</td>
			</tr>
		</tbody>
	</table>
	
	<h2 class="head">Вывод:</h2>

	<div class="text-container">
		<ul>
			<li><strong>Нестрогое сравнение</strong> <mark>(==)</mark> считает объекты равными, если они принадлежат одному и тому же классу и имеют одинаковые значения атрибутов (по умолчанию). </li>
			<li><strong>Строгое сравнение</strong> в PHP выполняется с помощью оператора <mark>(===)</mark>, которые проверяет равенство как по значению, так и по типу данных, без какого-либо преобразования.</li>
			<li><strong>Когда использовать строгое сравнение?</strong> Когда необходимо убедиться, что сравниваемые значения имеют не только одинаковое значение, но и одинаковый тип.</li>
		</ul>
	</div>
</body>
</html>