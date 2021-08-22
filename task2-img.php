<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
<?
	$file_name = 'image.png';
	$image_cropped_file_name = 'image_cropped.png';
	
	if (!file_exists($image_cropped_file_name) && file_exists($file_name)) {
		list($width, $height) = getimagesize($file_name);
		$ratio = 2;
		$width_cropped = 200;
		$height_cropped = 100;
		
		$src = imagecreatefrompng($file_name);
		$dst = imagecreatetruecolor($width_cropped, $height_cropped);
		
		$src_x = 0;
		$src_y = 5000;
		imagecopyresampled($dst, $src, 0, 0, $src_x, $src_y, $width_cropped, $height_cropped, $width, $height / 2);

		imagepng($dst, $image_cropped_file_name);
	}
	
	// Задача:
	// "2. Веб-разработка.
	// На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.
	// Обратите внимание на размер и пропорции, и подумайте о времени загрузки.
	// Пришлите ссылку на репозиторий с решением
	// Важно: решение требует использования PHP, сжатие картинки средствами HTML/CSS является некорректным решением."
	
	
	// Возможные проблемы:
	// 1. Может не хватить памяти на сервере для загрузки изображения целиком. Процесс обработки долгий.
	// 2. Так как не указано, растягивать картинку или нет, обрезал верхнюю и нижнюю часть.
?>
	<img src="<?=$image_cropped_file_name?>" title="image" />
</body>
</html>

