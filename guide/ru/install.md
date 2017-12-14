Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-offline
```

Создаем полномочие:

```
oOfflineManage
```

Объявляем common модуль:

```php
return [
	'modules' => [
		// ...
		'offline' => [
			'class' => 'yii2module\offline\web\Module',
		],
		// ...
	],
];
```

Объявляем backend модуль:

```php
return [
	'modules' => [
		// ...
		'offline' => [
			'class' => 'yii2module\offline\admin\Module',
			'as access' => Config::genAccess(PermissionEnum::OFFLINE_MANAGE),
		],
		// ...
	],
];
```

Объявляем console модуль:

```php
return [
	'modules' => [
		// ...
		'offline' => 'yii2module\offline\console\Module',
		// ...
	],
];
```