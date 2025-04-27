<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
// توليد القيم العشوائية
$temperature = rand(20, 40); // درجة الحرارة بين 20 و40
$heartRate = rand(100, 900) + (rand(0, 9) / 10); // معدل القلب مع جزء عشري
$muscleActivity = rand(10, 50); // نشاط العضلات بين 10 و50
?>

<html>

<body>
  <h2>BIOMED14 Monitoring</h2>
  <p>Temperature: <?php echo $temperature; ?> C</p>
  <p>Heart Rate: <?php echo $heartRate; ?></p>
  <p>Muscle Activity: <?php echo $muscleActivity; ?></p>
   
</body>

</html>