<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
<?
	$a = "Integer non sagittis nulla, et pretium quam. Ut mattis commodo erat nec finibus. Phasellus est diam, convallis id nulla id, feugiat luctus ante. Nunc mi quam, mattis id faucibus sit amet, consequat in enim. Aenean vitae tempus lacus. Nunc bibendum felis non lectus tempor rutrum. Pellentesque molestie tincidunt scelerisque. Nulla ut porta metus, in fermentum lectus. In urna nisi, finibus at vulputate vel, mattis in metus. Fusce ex quam, cursus in tristique vel, cursus ac sem. Curabitur pharetra iaculis tortor. Vivamus pharetra dolor eget ipsum rutrum pharetra dapibus a dui.";

	$link = "http://lipsum.com/feed/html";
	
	$limit = 180;

	$b = $a;
	
	$b = strip_tags($b);
	$b = trim($b, " ");
	
	if (mb_strlen($b) > $limit) {
		$b = mb_substr($b, 0, $limit);
		$b = trim($b, "!,.- ");
		$b .= "...";
	}
	
	$words = explode(" ", $b);
	
	$word_count = count($words);
	

	if (($word_count == 1 && $words[0] != "") || $word_count == 2) {
		$b = "<a href=$link target=_blank>$b</a>";
	}
	else if($word_count > 2) {
		$last_two_words_length = mb_strlen($words[$word_count - 1]) + mb_strlen($words[$word_count - 2]);
		
		$pos = mb_strrpos($b, " ", -$last_two_words_length);
		
		$b = mb_substr($b, 0, $pos + 1) . "<a href=$link target=_blank>" . mb_substr($b, $pos + 1) . "</a>";
	}
	
	echo $b;
	
	// Задача:
	// "1. PHP и HTML. Напишите код на PHP.
	// В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
	// Нужно в переменную $b записать сокращенный текст новости по правилам:
	// - обрезать до 180 символов
	// - приписать многоточие
	// - последние 2 слова и многоточие сделать ссылкой на полный текст новости.
	// Какие проблемы вы видите в решении этой задачи? Что может пойти не так?"

	
	// Возможные проблемы:
	// 1. Это текст новости, и за 180 символов будет больше, чем 2 слова. Но текст внезапно может быть коротким.
	// 2. Текст может содержать теги или markdown разметку.
	// 3. Текст может быть предназначен для чтения справа налево.
	// 4. Кодировка может быть не unicode или не многобайтной.
	// 5. Может обрезаться на запятой или на пробеле.
?>
</body>
</html>


