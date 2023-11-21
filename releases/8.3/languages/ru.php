<?php

return [
    'common_header' => 'PHP 8.3 — большое обновление языка PHP. Оно содержит множество новых возможностей, таких как явная типизация констант классов, глубокое клонирование readonly-свойств, а также улучшения класса Randomizer. Как всегда, в нём также улучшена производительность, исправлены ошибки и многое другое.',
    'documentation' => 'Документация',
    'main_title' => 'выпущен!',
    'main_subtitle' => 'PHP 8.3 — большое обновление языка PHP.<br class="display-none-md">Оно содержит множество новых возможностей, таких как явная типизация констант классов, глубокое клонирование readonly-свойств, а также улучшения класса Randomizer. Как всегда, в нём также улучшена производительность, исправлены ошибки и многое другое.',
    'upgrade_now' => 'Переходите на PHP 8.3!',

    'readonly_title' => 'Глубокое клонирование readonly-свойств',
    'readonly_description' => 'Свойства, доступные только для чтения (<code>readonly</code>) теперь могут быть изменены один раз с помощью магического метода <code>__clone</code> для обеспечения возможности глубокого клонирования readonly-свойств.',
    'json_validate_title' => 'Новая функция <code>json_validate()</code>',
    'json_validate_description' => 'Функция <code>json_validate()</code> позволяет проверить, является ли строка синтаксически корректным JSON, при этом она более эффективна, чем функция <code>json_decode()</code>.',
    'typed_class_constants_title' => 'Типизированные константы классов',
    'override_title' => 'Новый атрибут <code>#[\Override]</code>',
    'override_description' => 'Добавив методу атрибут <code>#[\Override]</code>, PHP убедится, что метод с таким же именем существует в родительском классе или в реализованном интерфейсе. Добавление атрибута даёт понять, что переопределение родительского метода является намеренным, а также упрощает рефакторинг, поскольку удаление переопределённого родительского метода будет обнаружено.',
    'randomizer_getbytesfromstring_title' => 'Новый метод <code>Randomizer<span style="word-break: break-all;">::</span>getBytesFromString()</code>',
    'randomizer_getbytesfromstring_description' => '<a href="/releases/8.2/ru.php#random_extension">Модуль Random</a>, добавленный в PHP 8.2, был дополнен новым методом генерации случайных строк, состоящих только из определённых байтов. Этот метод позволяет легко генерировать случайные идентификаторы, например, имена доменов и числовые строки произвольной длины.',
    'randomizer_getfloat_nextfloat_title' => 'Новые методы <code>Randomizer::getFloat()</code> и <code>Randomizer::nextFloat()</code>',
    'randomizer_getfloat_nextfloat_description' => '<p>Из-за ограниченной точности и неявного округления чисел с плавающей точкой генерация несмещённого числа, лежащего в определённом интервале, является нетривиальной задачей, а пользовательские решения могут давать смещённые результаты или числа, выходящие за пределы требуемого диапазона.</p><p>Класс Randomizer был расширен двумя методами, позволяющими генерировать случайные числа с плавающей точкой несмещённым образом. Метод <code>Randomizer::getFloat()</code> использует алгоритм γ-секции, который был опубликован в <a href="https://doi.org/10.1145/3503512" target="_blank" rel="noopener noreferrer">Drawing Random Floating-Point Numbers from an Interval. Frédéric Goualard, ACM Trans. Model. Comput. Simul., 32:3, 2022.</a></p>',
    'dynamic_class_constant_fetch_title' => 'Динамическое получение констант класса',

    'new_classes_title' => 'Новые классы, интерфейсы и функции',
    'new_dom' => 'Новые методы <a href="/manual/ru/domelement.getattributenames.php"><code>DOMElement::getAttributeNames()</code></a>, <a href="/manual/ru/domelement.insertadjacentelement.php"><code>DOMElement::insertAdjacentElement()</code></a>, <a href="/manual/ru/domelement.insertadjacenttext.php"><code>DOMElement::insertAdjacentText()</code></a>, <a href="/manual/ru/domelement.toggleattribute.php"><code>DOMElement::toggleAttribute()</code></a>, <a href="/manual/ru/domnode.contains.php"><code>DOMNode::contains()</code></a>, <a href="/manual/ru/domnode.getrootnode.php"><code>DOMNode::getRootNode()</code></a>, <a href="/manual/ru/domnode.isequalnode.php"><code>DOMNode::isEqualNode()</code></a>, <code>DOMNameSpaceNode::contains()</code> и <a href="/manual/ru/domparentnode.replacechildren.php"><code>DOMParentNode::replaceChildren()</code></a>.',
    'new_intl' => 'Новые методы <a href="/manual/ru/intlcalendar.setdate.php"><code>IntlCalendar::setDate()</code></a>, <a href="/manual/ru/intlcalendar.setdatetime.php"><code>IntlCalendar::setDateTime()</code></a>, <a href="/manual/ru/intlgregoriancalendar.createfromdate.php"><code>IntlGregorianCalendar::createFromDate()</code></a> и <a href="/manual/ru/intlgregoriancalendar.createfromdatetime.php"><code>IntlGregorianCalendar::createFromDateTime()</code></a>.',
    'new_ldap' => 'Новые функции <code>ldap_connect_wallet()</code> и <code>ldap_exop_sync()</code>.',
    'new_mb_str_pad' => 'Новая функция <a href="/manual/ru/function.mb-str-pad.php"><code>mb_str_pad()</code></a>.',
    'new_posix' => 'Новые функции <a href="/manual/ru/function.posix-sysconf.php"><code>posix_sysconf()</code></a>, <a href="/manual/ru/function.posix-pathconf.php"><code>posix_pathconf()</code></a>, <a href="/manual/ru/function.posix-fpathconf.php"><code>posix_fpathconf()</code></a> и <a href="/manual/ru/function.posix-eaccess.php"><code>posix_eaccess()</code></a>.',
    'new_reflection' => 'Новый метод <a href="/manual/ru/reflectionmethod.createfrommethodname.php"><code>ReflectionMethod::createFromMethodName()</code></a>.',
    'new_socket' => 'Новая функция <a href="/manual/ru/function.socket-atmark.php"><code>socket_atmark()</code></a>.',
    'new_str' => 'Новые функции <a href="/manual/ru/function.str-increment.php"><code>str_increment()</code></a>, <a href="/manual/ru/function.str-decrement.php"><code>str_decrement()</code></a> и <a href="/manual/ru/function.stream-context-set-option.php"><code>stream_context_set_options()</code></a>.',
    'new_ziparchive' => 'Новый метод <a href="/manual/ru/ziparchive.getarchiveflag.php"><code>ZipArchive::getArchiveFlag()</code></a>.',
    'new_openssl_ec' => 'Поддержка генерации EC-ключей с пользовательскими EC-параметрами в модуле OpenSSL.',
    'new_ini' => 'Новый параметр INI <a href="/manual/ru/migration83.other-changes.php#migration83.other-changes.ini"><code>zend.max_allowed_stack_size</code></a> для установки максимально допустимого размера стека.',

    'bc_title' => 'Устаревшая функциональность и изменения в обратной совместимости',
    'bc_datetime' => 'Более подходящие исключения в модуле Date/Time.',
    'bc_arrays' => 'Присвоение отрицательного индекса <code>n</code> пустому массиву теперь гарантирует, что следующим индексом будет <code>n + 1</code>, а не <code>0</code>.',
    'bc_range' => 'Изменения в функции <code>range()</code>.',
    'bc_traits' => 'Изменения в повторном объявлении статических свойств в трейтах.',
    'bc_umultipledecimalseparators' => 'Константа <code>U_MULTIPLE_DECIMAL_SEPERATORS</code> объявлена устаревшей, вместо неё рекомендуется использовать константу <code>U_MULTIPLE_DECIMAL_SEPARATORS</code>.',
    'bc_mtrand' => 'Вариант Mt19937 <a href="/manual/ru/random.constants.php#constant.mt-rand-php"><code>MT_RAND_PHP</code></a> объявлен устаревшим.',
    'bc_reflection' => '<a href="/manual/ru/reflectionclass.getstaticproperties.php"><code>ReflectionClass::getStaticProperties()</code></a> теперь не возвращает значение <code>null</code>.',
    'bc_ini' => 'Параметры INI <a href="/manual/ru/info.configuration.php#ini.assert.active"><code>assert.active</code></a>, <a href="/manual/ru/info.configuration.php#ini.assert.bail"><code>assert.bail</code></a>, <a href="/manual/ru/info.configuration.php#ini.assert.callback"><code>assert.callback</code></a>, <a href="/manual/ru/info.configuration.php#ini.assert.exception"><code>assert.exception</code></a> и <a href="/manual/ru/info.configuration.php#ini.assert.warning"><code>assert.warning</code></a> объявлены устаревшими.',

    'footer_title' => 'Выше производительность, лучше синтаксис, надёжнее система типов.',
    'footer_description' => '<p>Для загрузки исходного кода PHP 8.3 посетите страницу <a href="/downloads">Downloads</a>. Бинарные файлы Windows находятся на сайте <a href="https://windows.php.net/download">PHP for Windows</a>. Список изменений перечислен на странице <a href="/ChangeLog-8.php#PHP_8_3">ChangeLog</a>.</p>
        <p><a href="/manual/ru/migration83.php">Руководство по миграции</a> доступно в разделе документации. Ознакомьтесь с ним, чтобы узнать обо всех новых возможностях и изменениях, затрагивающих обратную совместимость.</p>',
];
