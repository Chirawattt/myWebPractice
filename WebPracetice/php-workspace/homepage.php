<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage php</title>
</head>
<body>
    <?php
        $name = "จีรวัฒน์ ญานะ";
        $nickName = "บัส";
        $studentCode = 6506021611017;
        $university = "มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ วิทยาเขต ปราจีนบุรี";
        $faculty = "คณะเทคโนโลยีและการจัดการอุตสาหกรรม";
        $major = "เทคโนโลยีสารสนเทศ (IT)";
        
        echo "<h1>My Profile</h1>";
        echo "<br>ชื่อ: $name | ชื่อเล่น: $nickName";
        echo "<br>รหัสนักศึกษา : $studentCode";
        echo "<br>เรียนอยู่ที่ : $university";
        echo "<br>คณะ: $faculty | สาขา: $major";
    ?>
</body>
</html>