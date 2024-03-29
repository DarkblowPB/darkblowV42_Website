<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

$lang = array(
    'STR_WARNING_1' => 'Имя пользователя не может быть пустым.',
    'STR_WARNING_2' => 'Выберите вопрос-подсказку.',
    'STR_WARNING_3' => 'Ответ на подсказку не может быть пустым.',
    'STR_WARNING_4' => 'Пароль не может быть пустым.',
    'STR_WARNING_5' => 'Новое электронное письмо не может совпадать со старым.',
    'STR_WARNING_6' => 'Подтвердите, что адрес электронной почты не совпадает с новым адресом электронной почты.',
    'STR_WARNING_7' => 'Старый пароль не может быть пустым.',
    'STR_WARNING_8' => 'Новый пароль не может быть пустым',
    'STR_WARNING_9' => 'Пароль подтверждения не может быть пустым.',
    'STR_WARNING_10' => 'Вопрос-подсказка не может быть пустым.',
    'STR_WARNING_11' => 'Код не может быть пустым.',
    'STR_WARNING_12' => 'Код ваучера не может быть пустым.',
    'STR_WARNING_13' => 'Электронная почта не может быть пустой.',
    'STR_WARNING_14' => 'Пароль подтверждения не совпадает',
    'STR_WARNING_15' => 'Чтобы купить этот товар, вам нужно войти в систему.',
    'STR_WARNING_16' => 'Неверные данные загрузки.',
    'STR_WARNING_17' => 'Недопустимое событие посещаемости.',
    'STR_WARNING_18' => 'Недопустимый пакет.',
    'STR_WARNING_19' => 'Неверные данные.',
    'STR_WARNING_20' => 'Сначала проверьте свое имя пользователя.',
    'STR_WARNING_21' => 'Сначала выберите товар.',
    'STR_WARNING_22' => 'Пожалуйста, введите цену товара.',
    'STR_WARNING_23' => 'Ваш браузер не поддерживает Javascript.',
    'STR_WARNING_24' => 'Сначала подтвердите адрес электронной почты.',
    'STR_INFO_1' => 'Создать новый токен запроса...',
    'STR_INFO_2' => 'Эта функция сейчас недоступна.',
    'STR_INFO_3' => 'Обмен не найден.',
    'STR_INFO_4' => 'Данные не найдены.',
    'STR_INFO_5' => 'Данные клиента не найдены.',
    'STR_INFO_6' => 'Данные программы запуска не найдены.',
    'STR_INFO_7' => 'Данные приложения поддержки не найдены.',
    'STR_INFO_8' => 'В обработке...',
    'STR_INFO_9' => 'Невозможно удалить постоянный элемент.',
    'STR_INFO_10' => 'Перенаправление на страницу загрузки...',
    'STR_INFO_11' => 'Доступно имя пользователя.',
    'STR_INFO_12' => 'Регистрация отключена сервером.',
    'STR_INFO_13' => 'Регистрация отключена сервером.',
    'STR_INFO_14' => 'Успешно зарегистрирован. Но не удалось отправить электронное письмо с активацией.',
    'STR_INFO_15' => 'Вы можете купить этот предмет только с постоянным сроком действия.',
    'STR_ERROR_1' => 'Не удалось отправить запрос.',
    'STR_ERROR_2' => 'Не удалось войти в систему.',
    'STR_ERROR_3' => 'Не удалось отправить письмо с подтверждением.',
    'STR_ERROR_4' => 'Не удалось обновить электронную почту.',
    'STR_ERROR_5' => 'Не удалось изменить пароль.',
    'STR_ERROR_6' => 'Не удалось создать новую подсказку.',
    'STR_ERROR_7' => 'Не удалось обменять билеты.',
    'STR_ERROR_8' => 'Не удалось удалить этот элемент.',
    'STR_ERROR_9' => 'Не удалось получить подсказку.',
    'STR_ERROR_10' => 'Не удалось отправить код.',
    'STR_ERROR_11' => 'Не удалось отправить ваучер',
    'STR_ERROR_12' => 'Не удалось зарегистрировать вашу учетную запись.',
    'STR_ERROR_13' => 'Не удалось проверить имя пользователя.',
    'STR_ERROR_14' => 'Не удалось отправить ваш товар.',
    'STR_ERROR_15' => 'Не удалось купить этот товар.',
    'STR_ERROR_16' => 'Не удалось купить этот товар.',
    'STR_ERROR_17' => 'Не удалось сгенерировать ссылку для скачивания.',
    'STR_ERROR_18' => 'Не удалось войти в систему.',
    'STR_ERROR_19' => 'Не удалось повторно отправить подтверждение по электронной почте.',
    'STR_ERROR_20' => 'Не удалось изменить адрес электронной почты.',
    'STR_ERROR_21' => 'Не удалось отправить новую подсказку',
    'STR_ERROR_22' => 'Не удалось активировать код.',
    'STR_ERROR_23' => 'Не удалось отправить ваучер.',
    'STR_ERROR_24' => 'Не удалось проверить псевдоним.',
    'STR_ERROR_25' => 'Не удалось зарегистрироваться.',
    'STR_ERROR_26' => 'Не удалось связаться с сервером.',
    'STR_ERROR_27' => 'Не удалось отправить ваш товар.',
    'STR_ERROR_28' => 'Не удалось выйти из системы.',
    'STR_ERROR_29' => 'Не удалось изменить адрес электронной почты.',
    'STR_ERROR_30' => 'Новый пароль не может совпадать со старым паролем.',
    'STR_ERROR_31' => 'Не удалось изменить пароль.',
    'STR_ERROR_32' => 'Неверный старый пароль.',
    'STR_ERROR_33' => 'Не удалось создать подсказку.',
    'STR_ERROR_34' => 'Неверный пароль.',
    'STR_ERROR_35' => 'Неверные данные загрузки.',
    'STR_ERROR_36' => 'Не удалось удалить этот элемент.',
    'STR_ERROR_37' => 'Ваш аккаунт заблокирован. Ошибка входа.',
    'STR_ERROR_38' => 'Неверное имя пользователя или пароль.',
    'STR_ERROR_39' => 'Не удалось получить подсказку.',
    'STR_ERROR_40' => 'Этот код уже используется.',
    'STR_ERROR_41' => 'К сожалению, это вознаграждение наличными, и мы в разработке.',
    'STR_ERROR_42' => 'Код не существует.',
    'STR_ERROR_43' => 'Имя пользователя уже зарегистрировано.',
    'STR_ERROR_44' => 'Не удалось получить события регистрации.',
    'STR_ERROR_45' => 'Не удалось подтвердить вашу учетную запись.',
    'STR_ERROR_46' => 'Вы не можете обменять этот предмет.',
    'STR_ERROR_47' => 'Вы уже торгуете этим предметом.',
    'STR_ERROR_48' => 'Не удалось опубликовать новый элемент.',
    'STR_ERROR_49' => 'У вас нет этого элемента.',
    'STR_ERROR_50' => 'Вы не можете купить свой собственный предмет.',
    'STR_ERROR_51' => 'Вашей монеты недостаточно для покупки этого предмета.',
    'STR_ERROR_52' => 'Не удалось купить этот товар. Вы уже использовали этот предмет.',
    'STR_ERROR_53' => 'Не удалось получить доступ к вашей учетной записи.',
    'STR_ERROR_54' => 'Этот элемент недоступен.',
    'STR_ERROR_55' => 'Неверный код ваучера.',
    'STR_ERROR_56' => 'Не удается найти этот товар в интернет-магазине.',
    'STR_ERROR_57' => 'Ваших монет недостаточно для покупки этого предмета.',
    'STR_ERROR_58' => 'Недопустимая продолжительность элемента. Вы меняете его из Inspect Element?',
    'STR_ERROR_59' => 'У вас уже есть этот элемент с постоянной продолжительностью.',
    'STR_ERROR_60' => 'Неверный аккаунт. Вы выполняете это из другого метода? Как Почтальон? Или что-нибудь еще?',
    'STR_ERROR_61' => 'Не удается найти этот товар в интернет-магазине.',
    'STR_FATAL_ERROR_1' => 'Не удалось купить этот товар. Пожалуйста, свяжитесь с DEV / GM для получения подробной информации.',
    'STR_SUCCESS_1' => 'Успешно обновлен адрес электронной почты.',
    'STR_SUCCESS_2' => 'Успешно изменен адрес электронной почты.',
    'STR_SUCCESS_3' => 'Успешно изменен пароль.',
    'STR_SUCCESS_4' => 'Подсказка создана успешно.',
    'STR_SUCCESS_5' => 'Успешно удалить этот элемент.',
    'STR_SUCCESS_6' => 'Успешно зарегистрирован. Добро пожаловать ',
    'STR_SUCCESS_7' => 'Ваш совет: ',
    'STR_SUCCESS_8' => 'Поздравляем',
    'STR_SUCCESS_9' => 'Вы получили',
    'STR_SUCCESS_10' => 'Успешно зарегистрирована.',
    'STR_SUCCESS_11' => 'Успешно зарегистрирован. Пожалуйста, проверьте свою электронную почту для активации вашей учетной записи.',
    'STR_SUCCESS_12' => 'Успешно подтверждена ваша учетная запись. Вы можете играть в игру прямо сейчас.',
    'STR_SUCCESS_13' => 'Успешно опубликовать новый элемент.',
    'STR_SUCCESS_14' => 'Купить этот товар успешно. Пожалуйста, проверьте свой инвентарь.',
    'STR_SUCCESS_15' => ' Новые элементы, ',
    'STR_SUCCESS_16' => ' Наличные, ',
    'STR_SUCCESS_17' => ' Вебкойн. Неуспешный ',
    'STR_SUCCESS_18' => 'Этот товар успешно куплен.',
);

// This Code Generated Automatically By EyeTracker Snippets. //
