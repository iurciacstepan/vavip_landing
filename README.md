# Vavip Joomla Landing Template

Готовый шаблон Joomla с лендингом Vavip. Структура файлов:

```
templates/
  vavip/
    index.php           # Шаблон с разметкой лендинга
    templateDetails.xml # Манифест для установки шаблона
    css/style.css       # Все стили страницы
    js/main.js          # Логика формы, плавный скролл и инициализация AOS
```

## Быстрая установка в Joomla
1. Создайте ZIP-архив из папки `templates/vavip` (например `vavip.zip`).
2. В админке Joomla откройте **Расширения → Установить**, загрузите получившийся ZIP и дождитесь установки.
3. В **Шаблоны сайта** выберите шаблон **vavip** и назначьте его по умолчанию.

Шаблон использует CDN для Bootstrap 5.3, Google Fonts, Material Icons и AOS. Все кастомные стили и скрипты лежат в `css/style.css` и `js/main.js`.
