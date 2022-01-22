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

$lang['imglib_source_image_required'] = 'คุณต้องระบุรูปภาพต้นฉบับในการตั้งค่าของคุณ';
$lang['imglib_gd_required'] = 'จำเป็นต้องใช้ไลบรารีรูปภาพ GD สำหรับคุณลักษณะนี้';
$lang['imglib_gd_required_for_props'] = 'เซิร์ฟเวอร์ของคุณต้องสนับสนุนไลบรารีรูปภาพ GD เพื่อกำหนดคุณสมบัติของรูปภาพ';
$lang['imglib_unsupported_imagecreate'] = 'เซิร์ฟเวอร์ของคุณไม่สนับสนุนฟังก์ชัน GD ที่จำเป็นสำหรับการประมวลผลภาพประเภทนี้';
$lang['imglib_gif_not_supported'] = 'ภาพ GIF มักไม่ได้รับการสนับสนุนเนื่องจากข้อจำกัดด้านลิขสิทธิ์ คุณอาจต้องใช้ภาพ JPG หรือ PNG แทน';
$lang['imglib_jpg_not_supported'] = 'ไม่รองรับภาพ JPG';
$lang['imglib_png_not_supported'] = 'ไม่สนับสนุนรูปภาพ PNG';
$lang['imglib_jpg_or_png_required'] = 'โปรโตคอลการปรับขนาดรูปภาพที่ระบุในการตั้งค่าของคุณใช้งานได้กับประเภทรูปภาพ JPEG หรือ PNG เท่านั้น';
$lang['imglib_copy_error'] = 'พบข้อผิดพลาดขณะพยายามเปลี่ยนไฟล์ โปรดตรวจสอบให้แน่ใจว่าไดเร็กทอรีไฟล์ของคุณสามารถเขียนได้';
$lang['imglib_rotate_unsupported'] = 'เซิร์ฟเวอร์ของคุณไม่สนับสนุนการหมุนภาพ';
$lang['imglib_libpath_invalid'] = 'เส้นทางไปยังไลบรารีรูปภาพของคุณไม่ถูกต้อง โปรดกำหนดเส้นทางที่ถูกต้องในการตั้งค่าภาพของคุณ';
$lang['imglib_image_process_failed'] = 'การประมวลผลภาพล้มเหลว โปรดตรวจสอบว่าเซิร์ฟเวอร์ของคุณสนับสนุนโปรโตคอลที่เลือก และเส้นทางไปยังไลบรารีรูปภาพของคุณถูกต้อง';
$lang['imglib_rotation_angle_required'] = 'ต้องใช้มุมการหมุนเพื่อหมุนภาพ';
$lang['imglib_invalid_path'] = 'เส้นทางไปยังรูปภาพไม่ถูกต้อง';
$lang['imglib_invalid_image'] = 'รูปภาพที่ระบุไม่ถูกต้อง';
$lang['imglib_copy_failed'] = 'ขั้นตอนการคัดลอกรูปภาพล้มเหลว';
$lang['imglib_missing_font'] = 'ไม่พบแบบอักษรที่จะใช้';
$lang['imglib_save_failed'] = 'ไม่สามารถบันทึกภาพได้ โปรดตรวจสอบให้แน่ใจว่าไดเร็กทอรีรูปภาพและไฟล์สามารถเขียนได้';
