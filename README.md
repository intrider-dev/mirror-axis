# Mirror Axis - WordPress Website

### Все права на реализацию принадлежат заказчику: Михаил Афанасьев (<a href="https://t.me/nelerado" target="_blank">ссылка</a>)
#### All rights to implement belong to the customer: Mikhail Afanasev (<a href="https://t.me/nelerado" target="_blank">link</a>)
### Дизайн: Никита Рублев (<a href="https://sun-golf-ba5.notion.site/86635581f7724d9db60dc9c256d7ee4d" target="_blank">ссылка</a>)
##### Design: Nikita Rublev (<a href="https://sun-golf-ba5.notion.site/86635581f7724d9db60dc9c256d7ee4d" target="_blank">link</a>)
### Проект - **<a href="http://mirror-axis.intrider-dev.ru" target="_blank">ссылка</a>**
#### На этапе разработки и подбора контента клиентом
<img src="http://mirror-axis.intrider-dev.ru/ma-screen.png">

## Описание проекта

Сайт Mirror Axis посвящён компании, занимающейся производством высококачественного контента для видеоигр. Веб-сайт демонстрирует достижения студии, её историю и услуги, а также предлагает пользователям возможность связаться с командой.

Сайт создан на базе **WordPress** и использует **Advanced Custom Fields (ACF)** для гибкого управления контентом на страницах.

## Основные функциональные возможности

- **История студии**: Разделы, описывающие путь и достижения компании, с изображениями и текстом, управляемыми через ACF.
- **Наши достижения**: Раздел с изображениями и текстом для демонстрации достижений студии.
- **Наши клиенты**: Логотипы известных клиентов, таких как Sony, Square Enix, Blizzard и другие, добавлены с помощью ACF и гибко редактируются через панель администратора.
- **Контактная форма**: Простая форма для связи с командой через сайт, которая может быть настроена через админку.
- **Анимации и эффекты**: Элементы дизайна и анимации для интерактивности и улучшенного пользовательского опыта.

## Используемые технологии

- **WordPress**: Платформа для создания и управления контентом сайта.
- **Advanced Custom Fields (ACF)**: Плагин для создания и управления настраиваемыми полями, используемыми на страницах.
- **HTML, CSS, JS, JQuery3**: Основные технологии для создания пользовательского интерфейса и анимации.
- **AJAX**: Используется для передачи заявок в реализованного телеграмм-бота (бот прикрепляется к чату через указание токена в ACF).

## Как работать с контентом

Для редактирования контента используется **Advanced Custom Fields (ACF)**. Это позволяет легко обновлять текстовые блоки, изображения и другую информацию через административную панель WordPress, без необходимости изменять код.

### Основные блоки, управляемые через ACF:

1. **История студии (Our History)**:
   - Описание компании, её цели и достижения.
   - Изображения и текст можно редактировать через настраиваемые поля ACF в админке.

2. **Наши достижения (Our Achievements)**:
   - В этом блоке можно редактировать изображения и текстовые блоки, описывающие ключевые моменты работы компании.

3. **Наши клиенты (Our Clients)**:
   - Логотипы клиентов добавляются через ACF в виде изображений.
   - Каждое изображение можно загрузить и редактировать через интерфейс WordPress.

4. **Контактная форма (Contact Form)**:
   - Форма для связи с командой также редактируется через админку. ACF позволяет добавить или изменить поля формы, а также управлять сообщениями об успехе отправки.

## Установка и настройка

### 1. Установка WordPress

1. Скачайте и установите WordPress на вашем сервере.
2. Настройте базу данных и подключите WordPress к базе.

### 2. Установка и настройка ACF

1. Установите плагин **Advanced Custom Fields** через панель администратора WordPress.
2. Настройте поля через ACF для следующих разделов:
   - **История студии**: Текстовые поля для описания и изображения.
   - **Достижения**: Поля для изображений и текстовых описаний.
   - **Клиенты**: Галерея или изображения с логотипами клиентов.

### 3. Управление контентом

1. Войдите в админ-панель WordPress.
2. Перейдите в раздел, где находятся ваши кастомные поля ACF (например, страницы или записи).
3. Отредактируйте текст и изображения через ACF.

## Как настроить сайт на сервере

1. Убедитесь, что ваш сервер поддерживает WordPress и PHP.
2. Загрузите все файлы WordPress и темы на сервер в папку с вашим сайтом.
3. Импортируйте базу данных и настройте подключение к ней через файл `wp-config.php`.
4. Убедитесь, что плагин ACF активирован, и поля настроены правильно.
5. Настройте все страницы и контент через административную панель.

## Технические требования

- **WordPress** 5.0 или выше.
- **PHP** 7.4 или выше.
- **MySQL** 5.7 или выше.
- Плагин **Advanced Custom Fields (ACF)**.

## Лицензия

Этот проект распространяется под лицензией MIT. Подробности см. в файле LICENSE.

