<?php

$handle = @fopen("states.txt", "r"); // Open file form read.

if ($handle) {
while (!feof($handle)) // Loop til end of file.
{
$buffer = fgets($handle, 4096); // Read a line.
print $sql = "insert into tbl_states set state_name='".$buffer."', state_uri='".strtolower(str_replace(' ', '_', $buffer))."', add_date=now(), update_date=now();<br>";
}
fclose($handle); // Close the file.
}

?>