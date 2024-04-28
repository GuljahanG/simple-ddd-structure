<h2>Simple DDD Structure</h2>

```
...
├── Domain
│   ├── User
│   └── Post
├── Application
│   ├── UserRepository
│   ├── PostRepository
│   └── ...
├── Presentation
│   ├── UserController
│   ├── PostController
│   └── ...
├── Infrastructure
│   ├── UserEloquent
│   ├── PostEloquent
│   └── ...
```





```
...
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
...
```
