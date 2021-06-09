# PHP SOLID SUPER SKELETON
The idea of this repository is give a quick skeleton for a modern PHP application using Symfony and DDD.

## How to build the application
```
make init && make schema-update
```
## Folder Structure
    .
    ├── bin
    ├── config
    ├── public
    ├── src
        ├── App
            ├── Controller
        ├── SuperSkeleton
            ├── Advertiser
                ├── Application
                ├── Domain
                ├── Infrastructure
    ├── tests
        ├── SuperSkeleton                # Unit tests
            ├── Advertiser
    ├── .env
    ├── .gitignore
    ├── composer.json           
    ├── composer.lock
    ├── docker-compose.yml
    ├── Dockerfile
    ├── Makefile
    ├── phpunit.xml
    └── README.md