<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Метод проверки электронной почты должен передаваться в виде массива.';
$lang['email_invalid_address'] = 'Неверный адрес электронной почты: %s';
$lang['email_attachment_missing'] = 'Не удалось найти следующее вложение электронной почты: %s';
$lang['email_attachment_unreadable'] = 'Невозможно открыть это вложение: %s';
$lang['email_no_from'] = 'Невозможно отправить письмо без заголовка "От".';
$lang['email_no_recipients'] = 'Вы должны указать получателей: Кому, Копия или СК';
$lang['email_send_failure_phpmail'] = 'Невозможно отправить электронное письмо с помощью PHP mail(). Возможно, ваш сервер не настроен для отправки почты этим методом.';
$lang['email_send_failure_sendmail'] = 'Невозможно отправить электронное письмо с помощью PHP Sendmail. Возможно, ваш сервер не настроен для отправки почты этим методом.';
$lang['email_send_failure_smtp'] = 'Невозможно отправить электронную почту с помощью PHP SMTP. Возможно, ваш сервер не настроен для отправки почты этим методом.';
$lang['email_sent'] = 'Ваше сообщение было успешно отправлено по следующему протоколу: %s';
$lang['email_no_socket'] = 'Невозможно открыть сокет для Sendmail. Пожалуйста, проверьте настройки.';
$lang['email_no_hostname'] = 'Вы не указали имя хоста SMTP.';
$lang['email_smtp_error'] = 'Обнаружена следующая ошибка SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Ошибка: необходимо назначить имя пользователя и пароль SMTP.';
$lang['email_failed_smtp_login'] = 'Не удалось отправить команду AUTH LOGIN. Ошибка: %s';
$lang['email_smtp_auth_un'] = 'Не удалось аутентифицировать имя пользователя. Ошибка: %s';
$lang['email_smtp_auth_pw'] = 'Не удалось подтвердить пароль. Ошибка: %s';
$lang['email_smtp_data_failure'] = 'Невозможно отправить данные: %s';
$lang['email_exit_status'] = 'Код выхода: %s';
