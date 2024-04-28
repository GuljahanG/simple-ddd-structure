<h2>Simple DDD Structure</h2>


```

├── src
│   ├── App
│   │    ├── Console
│   │    ├── Exceptions
│   │    ├── Http
│   │    ├── BootProviders
│   └────├── BaseApplication.php  // added
│   ├──  Domain
│   │     ├── Models
└── └── Services
          ├── SomeServices

```


```

 "autoload": {
        "psr-4": {
            "App\\": "src/App/",
            "Domain\\": "src/Domain/",
            "Services\\": "src/Services/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },

```

bootstrap/app.php
```

$app = new App\BaseApplication(
    realpath(__DIR__ . '/../')
);


```
