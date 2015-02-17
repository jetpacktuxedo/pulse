<?php
//I'm so sorry

// Create connection
$dbconn = pg_connect("host=localhost dbname=pulse user=pulsemaster password=pulse") or die('could not connect: ' . pg_last_error());

//Build Query
$query = 'SELECT visit.id, visit.badgeid, owner.first || \' \' || owner.last, patient.name, visit.date FROM visit INNER JOIN patient ON visit.patientid=patient.id INNER JOIN owner ON patient.ownerid=owner.id';

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<tbody>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
  echo "\t<tr>\n";
  foreach ($line as $col_value) {
    echo "\t\t<td>$col_value</td>\n";
  }
  echo "\t</tr>\n";
}
echo "</tbody>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

?> 
