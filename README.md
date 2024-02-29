-   for compile all files for tinker

```bash
    composer dump-autoload
```

-   Insert dummy data as per seeders in database dir

```bash
    php artisan db:seed
```

-   Forst drop all tables in database then insert dummy data as per seeders in database dir

```bash
    php artisan migrate:fresh --seed
```
