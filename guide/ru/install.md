Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-offline
```

Объявляем модуль:

```php
return [
	'modules' => [
		// ...
		'fixtures' => 'yii2module\offline\Module',
		// ...
	],
];
```