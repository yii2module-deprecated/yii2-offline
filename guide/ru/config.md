Конфигурация
===

В конфиге params можно указать какие приложения необходимо исключить.

```
    'offline' => [
        'exclude' => [
            CONSOLE,
            BACKEND,
        ],
    ],
```

Это означает, что при включенном оффлайн режиме, 
приложения консоли и админки продолжат работать в штатном режиме.
Остальные приложения будут выдавать сообщение о недоступности сайта.