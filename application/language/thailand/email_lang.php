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

$lang['email_must_be_array'] = 'วิธีตรวจสอบอีเมลต้องถูกส่งผ่านอาร์เรย์';
$lang['email_invalid_address'] = 'ที่อยู่อีเมลไม่ถูกต้อง: %s';
$lang['email_attachment_missing'] = 'ไม่พบไฟล์แนบอีเมลต่อไปนี้: %s';
$lang['email_attachment_unreadable'] = 'ไม่สามารถเปิดไฟล์แนบนี้ได้: %s';
$lang['email_no_from'] = 'ไม่สามารถส่งอีเมลโดยไม่มีส่วนหัวเป็น "จาก"';
$lang['email_no_recipients'] = 'คุณต้องรวมผู้รับ: To, Cc หรือ Bcc';
$lang['email_send_failure_phpmail'] = 'ไม่สามารถส่งอีเมลโดยใช้เมล PHP () เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการกำหนดค่าให้ส่งจดหมายโดยใช้วิธีนี้';
$lang['email_send_failure_sendmail'] = 'ไม่สามารถส่งอีเมลโดยใช้ PHP Sendmail เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการกำหนดค่าให้ส่งจดหมายโดยใช้วิธีนี้';
$lang['email_send_failure_smtp'] = 'ไม่สามารถส่งอีเมลโดยใช้ PHP SMTP เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการกำหนดค่าให้ส่งจดหมายโดยใช้วิธีนี้';
$lang['email_sent'] = 'ข้อความของคุณถูกส่งเรียบร้อยแล้วโดยใช้โปรโตคอลต่อไปนี้: %s';
$lang['email_no_socket'] = 'ไม่สามารถเปิดซ็อกเก็ตไปยัง Sendmail โปรดตรวจสอบการตั้งค่า';
$lang['email_no_hostname'] = 'คุณไม่ได้ระบุชื่อโฮสต์ SMTP';
$lang['email_smtp_error'] = 'พบข้อผิดพลาด SMTP ต่อไปนี้: %s';
$lang['email_no_smtp_unpw'] = 'ข้อผิดพลาด: คุณต้องกำหนดชื่อผู้ใช้และรหัสผ่าน SMTP';
$lang['email_failed_smtp_login'] = 'ไม่สามารถส่งคำสั่ง AUTH LOGIN ข้อผิดพลาด: %s';
$lang['email_smtp_auth_un'] = 'ไม่สามารถยืนยันชื่อผู้ใช้ได้ ข้อผิดพลาด: %s';
$lang['email_smtp_auth_pw'] = 'ไม่สามารถตรวจสอบรหัสผ่านได้ ข้อผิดพลาด: %s';
$lang['email_smtp_data_failure'] = 'ไม่สามารถส่งข้อมูล: %s';
$lang['email_exit_status'] = 'รหัสสถานะการออก: %s';
