<!DOCTYPE html>
<html>

<head>
  @include('users.includes.pdf_style')
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding-left: 5px;
      padding-top: 0px;
      padding-bottom: 0px;
    }
  </style>
</head>

<body>
  <p style="font-size : 22px;font-weight: bold;text-align: right;"><span
      style="font-family: 'DejaVu Sans Mono', monospace; font-size : 24px;">&#x2610;</span> กลางภาค <span
      style="font-family: 'DejaVu Sans Mono', monospace; font-size : 24px;">&#x2611;</span> ปลายภาค ภาคเรียนที่
    ......./.............</p>
  <p><img src="{{ asset('assets/images/tsu_logo.jpg') }}" height="150" style="margin-top:-70px;"></p>
  <p style="text-align: center; font-size: 28px; font-weight: bold; margin-top: -120px;">แบบฟอร์มส่ง-รับงานสำเนาข้อสอบ
  </p>
  <p style="text-align: center; font-size: 24px; font-weight: bold; margin-top: -40px;">งานบริการการศึกษาและพัฒนานิสิต
    คณะวิทยาศาสตร์ มหาวิทยาลัยทักษิณ</p>
  <hr style="margin-top: -20px;">
  <p style="font-size : 20px;">1. รหัสวิชา ....................................... ชื่อวิชา
    ...............................................................................................................................................
  </p>
  <p style="text-indent:0.2in;margin-top:-25px;font-size : 20px;">กลุ่มที่ ............... จำนวนผู้เข้าสอบ
    ............... คน ห้องสอบ ......................... วันที่สอบ ................................... เวลา
    ........................ น.</p>
  <p style="text-indent:0.2in;margin-top:-25px;font-size : 20px;">กลุ่มที่ ............... จำนวนผู้เข้าสอบ
    ............... คน ห้องสอบ ......................... วันที่สอบ ................................... เวลา
    ........................ น.</p>
  <p style="text-indent:0.2in;margin-top:-25px;font-size : 20px;">กลุ่มที่ ............... จำนวนผู้เข้าสอบ
    ............... คน ห้องสอบ ......................... วันที่สอบ ................................... เวลา
    ........................ น.</p>
  <p style="text-indent:0.2in;margin-top:-25px;font-size : 20px;">กลุ่มที่ ............... จำนวนผู้เข้าสอบ
    ............... คน ห้องสอบ ......................... วันที่สอบ ................................... เวลา
    ........................ น.</p>
  <p style="text-indent:0.2in;margin-top:-25px;font-size : 20px;">ชื่ออาจารย์ผู้สอน/ผู้ประสานงานรายวิชา
    ......................................................................... เบอร์(มือถือ)
    ...............................................</p>
  <table width="100%" style="margin-top:-20px;">
    <tr>
      <td style="font-size : 20px;">2. ข้อมูลต้นฉบับข้อสอบ(รวมปก) จำนวน .......................... หน้า
        &nbsp;&nbsp;&nbsp;<span style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span>
        หน้าเดียว <span style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> สองหน้า
      </td>
    </tr>
    <tr>
      <td style="font-size : 20px;">3. การจัดทำข้อสอบ จำนวน ................... ชุด สำรอง ................... ชุด รวม
        ................... ชุด &nbsp;&nbsp;&nbsp;<span
          style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> หน้าเดียว <span
          style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> สองหน้า</td>
    </tr>
    <tr>
      <td style="font-size : 20px;">4. การใช้กระดาษคำตอบ </td>
    </tr>
    <tr>
      <td style="font-size : 20px;">&nbsp;&nbsp;&nbsp;<span style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> ไม่ต้องการกระดาษคำตอบ </td>
    </tr>
    <tr>
      <td style="font-size : 20px;">&nbsp;&nbsp;&nbsp;<span style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> กระดาษคำตอบแบบกากบาท จำนวน ............ ข้อ </td>
    </tr>
    <tr>
      <td style="font-size : 20px;">&nbsp;&nbsp;&nbsp;<span style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> กระดาษคำตอบแบบเขียนตอบ </td>
    </tr>
    <tr>
      <td style="font-size : 20px;">&nbsp;&nbsp;&nbsp;<span style="font-family: 'DejaVu Sans Mono', monospace; font-size : 20px;">&#x2610;</span> แบบฟอร์มอื่น ๆ ระบุ   </td>
    </tr>
    
  </table>
</body>

</html>