<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
<?
	// Задача:
	// "3. БД.
	// Чем отличаются эти запросы:
	// 1. SELECT * FROM a, b WHERE a.id=b.a_id;
	// 2. SELECT * FROM a JOIN b ON a.id=b.a_id;"
	
	
	// Ответ:
	// В случае WHERE, сначала извлекутся все записи из каждой таблицы, а потом отберутся по условию.
	// В случае JOIN, извлекутся только записи, удовлетворяющие условию, это быстрее.
?>
	<img src="<?=$image_cropped_file_name?>" title="image" />
</body>
</html>

