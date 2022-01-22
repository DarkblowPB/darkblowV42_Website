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

$lang['db_invalid_connection_str'] = 'ไม่สามารถกำหนดการตั้งค่าฐานข้อมูลตามสตริงการเชื่อมต่อที่คุณส่งมา';
$lang['db_unable_to_connect'] = 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ฐานข้อมูลของคุณโดยใช้การตั้งค่าที่ให้มา';
$lang['db_unable_to_select'] = 'ไม่สามารถเลือกฐานข้อมูลที่ระบุ: %s';
$lang['db_unable_to_create'] = 'ไม่สามารถสร้างฐานข้อมูลที่ระบุ: %s';
$lang['db_invalid_query'] = 'แบบสอบถามที่คุณส่งมาไม่ถูกต้อง';
$lang['db_must_set_table'] = 'คุณต้องตั้งค่าตารางฐานข้อมูลเพื่อใช้กับข้อความค้นหาของคุณ';
$lang['db_must_use_set'] = 'คุณต้องใช้เมธอด "set" เพื่ออัพเดตรายการ';
$lang['db_must_use_index'] = 'คุณต้องระบุดัชนีที่จะจับคู่สำหรับการอัพเดตแบบกลุ่ม';
$lang['db_batch_missing_index'] = 'อย่างน้อยหนึ่งแถวที่ส่งสำหรับการอัพเดตแบบกลุ่มไม่มีดัชนีที่ระบุ';
$lang['db_must_use_where'] = 'ไม่อนุญาตให้อัปเดตเว้นแต่จะมีส่วนคำสั่ง "where"';
$lang['db_del_must_use_where'] = 'ไม่อนุญาตให้ลบ เว้นแต่จะมีคำสั่ง "where" หรือ "like"';
$lang['db_field_param_missing'] = 'การดึงข้อมูลฟิลด์ต้องใช้ชื่อของตารางเป็นพารามิเตอร์';
$lang['db_unsupported_function'] = 'คุณสมบัตินี้ไม่พร้อมใช้งานสำหรับฐานข้อมูลที่คุณกำลังใช้';
$lang['db_transaction_failure'] = 'ธุรกรรมล้มเหลว: ดำเนินการย้อนกลับ';
$lang['db_unable_to_drop'] = 'ไม่สามารถลบฐานข้อมูลที่ระบุได้';
$lang['db_unsupported_feature'] = 'คุณลักษณะที่ไม่สนับสนุนของแพลตฟอร์มฐานข้อมูลที่คุณใช้อยู่';
$lang['db_unsupported_compression'] = 'เซิร์ฟเวอร์ของคุณไม่รองรับรูปแบบการบีบอัดไฟล์ที่คุณเลือก';
$lang['db_filepath_error'] = 'ไม่สามารถเขียนข้อมูลไปยังเส้นทางของไฟล์ที่คุณส่ง';
$lang['db_invalid_cache_path'] = 'เส้นทางของแคชที่คุณส่งไม่ถูกต้องหรือไม่สามารถเขียนได้';
$lang['db_table_name_required'] = 'จำเป็นต้องมีชื่อตารางสำหรับการดำเนินการนั้น';
$lang['db_column_name_required'] = 'จำเป็นต้องมีชื่อคอลัมน์สำหรับการดำเนินการนั้น';
$lang['db_column_definition_required'] = 'จำเป็นต้องมีการกำหนดคอลัมน์สำหรับการดำเนินการนั้น';
$lang['db_unable_to_set_charset'] = 'ไม่สามารถตั้งค่าชุดอักขระการเชื่อมต่อไคลเอ็นต์: %s';
$lang['db_error_heading'] = 'เกิดข้อผิดพลาดของฐานข้อมูล';
