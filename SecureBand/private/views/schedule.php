<body>
    <?php $this->layout('standard_layout')?>
<h1 class="hoofd5">Tyler1 will stream in roughly:</h1>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="tijd" id='time'></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
  <h1 class="hoofd5">Tyler his stream Schedule</h1>
 <table class="table">

<tr>
  <th>Day</th>
  <th>Title</th>
  <th>Game</th>
  <th>Date</th>
  <th>Time</th>
</tr>

<?php foreach ($agenda as $event) {

  echo "<tr>";
  echo "<td>" . $event['day'] . "</td>";
  echo "<td>" . $event['title'] . "</td>";
  echo "<td>" . $event['game'] . "</td>";
  echo "<td>" . $event['Date'] . "</td>";
  echo "<td>" . $event['Time'] . "</td>";
  echo "</tr>";
}; ?>
</table>
</body>
