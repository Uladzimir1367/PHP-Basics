### DockerRun

```sh
# Сборка проекта
sh build.sh lesson8 && exit
```

```bash
# Запуск проекта (тестовый, при выходе остановит)
sh start.sh lesson8 application && exit
```

[go to site](http://mysite.local:81)

[database.sql](docker/database.sql)

### Д/З

**[Работает корректно]** В уже созданных маршрутах попробуйте вызывать их с некорректными данными. Что будет
происходить? Будут ли появляться ошибки?

- При появлении ошибок, произведите их анализ. Обязательно зафиксируйте шаги своих размышлений.
- На основании анализа произведите устранение.


Результат:

- При помощи `xdebug` выявил ошибку валидации при авторизации пользователя (при некорректно заполненных полях, прим.:
  пустое поле `email`)
- С учетом того, что некоторые пользователи могут заводиться вручную через БД (прим: админ. уч.) была добавлена
  возможность отключения валидации при обновлении данных, для того, чтобы при обновлении поля `auth_hash` авторизация
  происходила корректно, тк. валидация полей производится при заведении уч. записи
- Так же была добавлена временная обвязка в `index.php` для вывода логов необработанных ошибок