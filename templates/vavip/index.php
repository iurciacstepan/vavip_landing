<?php
/**
 * Vavip Joomla template
 */

defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <jdoc:include type="head" />

    <!-- Bootstrap 5.3 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9n3mYpGk0WZ0p6YfPlrZlZ0lz0aq+sB7S9b35+5I1Bx18"
        crossorigin="anonymous"
    >

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/css/style.css">
</head>
<body>
    <jdoc:include type="message" />

    <!-- Герой секция -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <!-- Логотип -->
                    <div class="logo">
                        <img src="https://taplink.st/a/c/4/1/c/538f28.jpg?7" alt="Vavip - Сантехнические узлы ввода" class="logo-img">
                    </div>

                    <h1 class="display-5 fw-bold mb-4">Сантехнические узлы ввода <span class="text-black">с бесплатным монтажом</span></h1>
                    <p class="lead mb-5 text-muted">Готовые решения для строительных компаний и прорабов. Первый узел монтируем бесплатно.</p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contact" class="btn btn-black">Рассчитать мой узел</a>
                        <a href="#benefits" class="btn btn-outline-black">Узнать выгоду</a>
                    </div>

                    <div class="mt-5">
                        <div class="d-flex align-items-center mb-2">
                            <span class="material-icons text-black me-2">check_circle</span>
                            <span>Заводская сборка вместо самоделок</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="material-icons text-black me-2">check_circle</span>
                            <span>Экономия времени прораба на 15-20%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons text-black me-2">check_circle</span>
                            <span>Гарантия качества и эстетичный вид</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <div class="badge-offer">Акция</div>
                        <div class="highlight-box mt-5 mt-lg-0">
                            <h3 class="fw-bold mb-3">Первый объект — монтаж бесплатно!</h3>
                            <p class="mb-4">Для новых клиентов предлагаем бесплатный монтаж и подключение первого узла ввода при заказе производства у нас.</p>
                            <div class="d-flex align-items-center">
                                <span class="material-icons me-2">date_range</span>
                                <span>Действует до 30.11.2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Что мы производим -->
    <section class="py-5" id="products">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">Что производит Vavip</h2>
                    <p class="lead text-muted">Готовые сантехнические узлы ввода под ваш проект или типовую схему. Все собрано на производстве.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-custom p-4">
                        <div class="icon-circle">
                            <span class="material-icons">compress</span>
                        </div>
                        <h4 class="text-center mb-3">Компактные узлы</h4>
                        <p class="text-center text-muted">Для ограниченного пространства с сохранением всех необходимых функций и удобства обслуживания.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-custom p-4">
                        <div class="icon-circle">
                            <span class="material-icons">expand</span>
                        </div>
                        <h4 class="text-center mb-3">Расширенные узлы</h4>
                        <p class="text-center text-muted">С увеличенным количеством контуров и дополнительной регулировочной арматурой для сложных проектов.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-custom p-4">
                        <div class="icon-circle">
                            <span class="material-icons">inventory_2</span>
                        </div>
                        <h4 class="text-center mb-3">Узлы в коробах</h4>
                        <p class="text-center text-muted">Эстетичное решение с защитным коробом для жилых и коммерческих помещений с высокими требованиями к дизайну.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12" data-aos="fade-up">
                    <div class="card-custom p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4>Хотите увидеть реальные примеры?</h4>
                                <p class="mb-0 text-muted">Запросите фото готовых узлов для объектов, похожих на ваш.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="#contact" class="btn btn-black">Запросить примеры</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Выгоды -->
    <section class="py-5 bg-light-section" id="benefits">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Ваша выгода</h2>
                    <p class="lead text-muted">Почему строительные компании выбирают готовые узлы ввода</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card-custom p-4 h-100">
                        <h4 class="mb-4">Для прораба:</h4>
                        <ul class="feature-list">
                            <li><span class="material-icons">check</span> Меньше согласований и контролей</li>
                            <li><span class="material-icons">check</span> Готовый стандарт вместо самоделок</li>
                            <li><span class="material-icons">check</span> Снижение ошибок и переделок</li>
                            <li><span class="material-icons">check</span> Понятный и быстрый монтаж (на 30% быстрее)</li>
                            <li><span class="material-icons">check</span> Освобождение времени для других задач</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card-custom p-4 h-100">
                        <h4 class="mb-4">Для компании:</h4>
                        <ul class="feature-list">
                            <li><span class="material-icons">check</span> Единый стандарт на всех объектах</li>
                            <li><span class="material-icons">check</span> Презентабельный вид для заказчика</li>
                            <li><span class="material-icons">check</span> Прогнозируемые сроки сдачи</li>
                            <li><span class="material-icons">check</span> Контроль себестоимости сантехники</li>
                            <li><span class="material-icons">check</span> Снижение гарантийных случаев</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="card-custom p-4">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center mb-3 mb-md-0">
                                <span class="material-icons display-4 text-black">savings</span>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-2">Стоимость готового узла: от 25 000 ₽</h5>
                                <p class="text-muted mb-0">Включая доставку и гарантию 2 года. Цена самостоятельной сборки + работа прораба часто оказывается выше.</p>
                            </div>
                            <div class="col-md-3 text-md-end">
                                <a href="#contact" class="btn btn-black">Уточнить стоимость</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Как мы работаем -->
    <section class="py-5" id="process">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">Как мы работаем</h2>
                    <p class="lead text-muted">Простая схема от заявки до установки узла на вашем объекте</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-custom p-4 text-center h-100">
                        <div class="icon-circle mb-4">
                            <span class="material-icons">description</span>
                        </div>
                        <h5>1. Получаем проект</h5>
                        <p class="text-muted">Вы отправляете план или мы выезжаем на замеры</p>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-custom p-4 text-center h-100">
                        <div class="icon-circle mb-4">
                            <span class="material-icons">calculate</span>
                        </div>
                        <h5>2. Рассчитываем смету</h5>
                        <p class="text-muted">В течение 24 часов присылаем решение и стоимость</p>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-custom p-4 text-center h-100">
                        <div class="icon-circle mb-4">
                            <span class="material-icons">factory</span>
                        </div>
                        <h5>3. Производим узел</h5>
                        <p class="text-muted">Собираем на производстве за 5-7 рабочих дней</p>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-custom p-4 text-center h-100">
                        <div class="icon-circle mb-4">
                            <span class="material-icons">build</span>
                        </div>
                        <h5>4. Монтируем на объекте</h5>
                        <p class="text-muted">Привозим, устанавливаем и подключаем. Первый узел - бесплатно!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section class="py-5 bg-light-section" id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Свяжитесь с нами</h2>
                    <p class="lead text-muted">Обсудим ваш объект и предложим оптимальное решение</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-card h-100">
                        <h4 class="mb-4">Контакты Vavip</h4>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <span class="material-icons">person</span>
                            </div>
                            <div>
                                <h6 class="mb-1">Карен</h6>
                                <p class="text-muted mb-0">Руководитель проектов</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <span class="material-icons">phone</span>
                            </div>
                            <div>
                                <h6 class="mb-1">Телефон</h6>
                                <p class="mb-0"><a href="tel:+79991234567" class="text-decoration-none text-black">+7 (999) 123-45-67</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <span class="material-icons">whatsapp</span>
                            </div>
                            <div>
                                <h6 class="mb-1">WhatsApp</h6>
                                <p class="mb-0"><a href="https://wa.me/79991234567" class="text-decoration-none text-black">Написать в WhatsApp</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <span class="material-icons">telegram</span>
                            </div>
                            <div>
                                <h6 class="mb-1">Telegram</h6>
                                <p class="mb-0"><a href="https://t.me/karen_vavip" class="text-decoration-none text-black">@karen_vavip</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <span class="material-icons">email</span>
                            </div>
                            <div>
                                <h6 class="mb-1">Email</h6>
                                <p class="mb-0"><a href="mailto:info@vavip.ru" class="text-decoration-none text-black">info@vavip.ru</a></p>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top border-black">
                            <p class="text-muted"><small>Работаем по Москве и Московской области. Выезд на замер в пределах МКАД — бесплатно.</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-card h-100">
                        <h4 class="mb-4">Быстрый расчет</h4>
                        <p class="text-muted mb-4">Оставьте заявку, и мы рассчитаем стоимость узла для вашего объекта в течение 2 часов</p>

                        <form id="contact-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">Ваше имя</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Телефон</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="object" class="form-label">Тип объекта</label>
                                <select class="form-select" id="object">
                                    <option value="apartment">Квартира</option>
                                    <option value="house">Частный дом</option>
                                    <option value="commercial">Коммерческое помещение</option>
                                    <option value="other">Другое</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label">Комментарий</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Количество санузлов, этажность, особые требования..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-black w-100 mb-3">Получить расчет</button>

                            <div class="text-center">
                                <p class="text-muted small mb-0">Или напишите нам напрямую:</p>
                                <div class="d-flex justify-content-center gap-2 mt-2">
                                    <a href="https://wa.me/79991234567" class="btn btn-black">
                                        <span class="material-icons align-middle">whatsapp</span>
                                    </a>
                                    <a href="https://t.me/karen_vavip" class="btn btn-gray">
                                        <span class="material-icons align-middle">telegram</span>
                                    </a>
                                    <a href="tel:+79991234567" class="btn btn-outline-black">
                                        <span class="material-icons align-middle">call</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="logo">
                        <img src="https://taplink.st/a/c/4/1/c/538f28.jpg?7" alt="Vavip" class="logo-img" style="filter: brightness(0) invert(1);">
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0 text-center">
                    <p class="mb-0">Производство и монтаж сантехнических узлов ввода</p>
                </div>

                <div class="col-md-4 text-md-end">
                    <p class="mb-0">© 2023 Vavip. Все права защищены.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/js/main.js"></script>
</body>
</html>
