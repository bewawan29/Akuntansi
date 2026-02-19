<?php
// Masukkan detail database InfinityFree Anda
//$host = 'sqlXXX.infinityfree.com'; 
$host = 'sql110.infinityfree.com'; 
$user = 'if0_38876748';
$pass = 'mLcQjM65lcrA';
$name = 'if0_38876748_cashflow_2026';

// Nama file backup
$backup_file = 'db_backup_2026.sql';

// Perintah ekspor (menggunakan PHP karena exec() dilarang di InfinityFree)
$conn = new mysqli($host, $user, $pass, $name);
$tables = array();
$result = $conn->query("SHOW TABLES");
while($row = $result->fetch_row()) { $tables[] = $row[0]; }

$return = "";
foreach($tables as $table) {
    $result = $conn->query("SELECT * FROM $table");
    $num_fields = $result->field_count;
    $return .= "DROP TABLE IF EXISTS $table;";
    $row2 = $conn->query("SHOW CREATE TABLE $table")->fetch_row();
    $return .= "\n\n".$row2[1].";\n\n";
    for ($i = 0; $i < $num_fields; $i++) {
        while($row = $result->fetch_row()) {
            $return .= "INSERT INTO $table VALUES(";
            for($j=0; $j<$num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) { $return .= '"'.$row[$j].'"' ; } else { $return .= '""'; }
                if ($j<($num_fields-1)) { $return .= ','; }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";
}

// Simpan file ke server hosting
file_put_contents($backup_file, $return);
echo "Berhasil dibuat!";
?>