<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
<?
	$array = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51];
	$pair_count = 0;
	
	for($i = 1; $i < count($array); ++$i) { // O(n) complexity.
		if ($array[$i - 1] == $array[$i]) {
			++$pair_count;
		}
	}
	
	echo $pair_count;

	// Задача:
	// "4. Массивы.
	// Дан массив из 100 элементов. Требуется вывести количество последовательных пар одинаковых элементов
	// Например: 1, 1, 2, 3, 4 -51, 12, 12, 12, -51"
	
	
	// Возможные проблемы:
	// Исхожу из предположения, что 12 12 12 - это 2 последовательные пары.
?>
</body>
</html>

