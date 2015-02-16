<?php
//I'm so sorry

// Create connection
$dbconn = pg_connect("host=localhost dbname=pulse user=pulsemaster password=pulse") or die('could not connect: ' . pg_last_error());

//Build Query
$query = 'SELECT owner.id, owner.first || \' \' || owner.last, owner.email FROM owner';
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
