<caption>Bets</caption>
<thead>
<tr>
    <th scope="col">nano address</th>
    <th scope="col">tickets</th>
</tr>
</thead>
<tfoot>
<tr>
    <td colspan="2">
        <a href="../pages/current_weeks_bets.php" target="_blank" rel="noopener">Show all bets from this week</a>
    </td>
</tr>
</tfoot>

<tbody>

<?php

$hostname = "";
$username = "";
$password = "";
$db = "";

$dbconnect = mysqli_connect($hostname, $username, $password, $db);

if ($dbconnect->connect_error) die("Database connection failed: $dbconnect->connect_error");

$query = mysqli_query($dbconnect, "SELECT * FROM rai_bets_daily LIMIT 5") or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
    if ($row["rai_amount"] != "0") {
        echo
        "<tr>
             <td><a target='_blank' href='https://www.nanode.co/account/{$row['rai_address']}'>{$row['rai_address']}</a></td>
             <td>{$row['rai_amount']}</td>
         </tr>";
    }
}

    ?>

</tbody>
