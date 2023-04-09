<?php
// Bắt đầu bộ đệm đầu ra
ob_start();

// Xuất chuỗi đến bộ đệm đầu ra
echo "Hello World!";

// Lấy nội dung bộ đệm đầu ra và gán cho biến $output
//$output = ob_get_clean();

// In ra nội dung bộ đệm đầu ra đã được gán cho biến $output
//echo $output;
ob_end_flush();
?>