<?php
Include "view-header.php";
?>
<h1>Post result</h1>
<?php
echo getGameResult();
Include "view-footer.php";

function getGameResult() {
 if (isset($_POST['team-name']) && $_POST['team-name'=='oklahoma') {
  return $_POST['team-name'} . "<p>defeated tulane 34-19 at home.</p>";
} else if (isset($_POST['team-name']) && $_POST['team-name'=='alabama') {
  return $_POST['team-name'} . "<p>defeated wisconsin 42-10 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='lsu') {
  return $_POST['team-name'} . "<p>defeated south carolina 36-33 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='south carolina') {
  return $_POST['team-name'} . "<p>lost to lsu 36-33 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='missouri') {
  return $_POST['team-name'} . "<p>defeated boston college 27-21 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='texas a&m') {
  return $_POST['team-name'} . "<p>defeated florida 33-20 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='florida') {
  return $_POST['team-name'} . "<p>lost to texas a&m 33-20 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='arkansas') {
  return $_POST['team-name'} . "<p>defeated aub 37-27 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='ole miss') {
  return $_POST['team-name'} . "<p>defeated wake forest 40-6 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='texas') {
  return $_POST['team-name'} . "<p>deafeated utsa 56-7 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='vanderbilt') {
  return $_POST['team-name'} . "<p>lost to goergia state 36-32 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='georgia') {
  return $_POST['team-name'} . "<p>deafeated kentucky 13-12 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='kentucky') {
  return $_POST['team-name'} . "<p>lost to georgia 13-12 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='auburn') {
  return $_POST['team-name'} . "<p>deafeated new mexico 45-19 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='mississippi state') {
  return $_POST['team-name'} . "<p>lost to toledo 41-17 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='tennessee') {
  return $_POST['team-name'} . "<p>deafeated kent state 71-0 at home.</p>";
 } else {
  return "<p>No team name inputed.</p>";
}
}
?>
