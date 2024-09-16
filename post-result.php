<?php
Include "view-header.php";
?>
<h1>Post result</h1>
<?php
echo getGameResult();
Include "view-footer.php";

function getGameResult() {
 if (isset($_POST['team-name']) && $_POST['team-name'=='oklahoma') {
  return "<p>Oklahoma defeated Tulane 34-19 at home.</p>";
} else if (isset($_POST['team-name']) && $_POST['team-name'=='alabama') {
  return "<p>Alabama defeated Wisconsin 42-10 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='lsu') {
  return "<p>LSU defeated South Carolina 36-33 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='south carolina') {
  return "<p>South Carolina lost to LSU 36-33 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='missouri') {
  return "<p>Missouri defeated Boston College 27-21 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='texas a&m') {
  return "<p>Texas A&M defeated Florida 33-20 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='florida') {
  return "<p>Florida lost to Texas A&M 33-20 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='arkansas') {
  return "<p>Arkansas defeated UAB 37-27 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='ole miss') {
  return "<p>Ole Miss defeated Wake Forest 40-6 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='texas') {
  return "<p>Texas deafeated UTSA 56-7 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='vanderbilt') {
  return "<p>Vanderbilt lost to Georgia State 36-32 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='georgia') {
  return "<p>Georgia deafeated Kentucky 13-12 on the road.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='kentucky') {
  return "<p>Kentucky lost to Georgia 13-12 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='auburn') {
  return "<p>Auburn deafeated New Mexico 45-19 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='mississippi state') {
  return "<p>Mississippi State lost to Toledo 41-17 at home.</p>";
 } else if (isset($_POST['team-name']) && $_POST['team-name'=='tennessee') {
  return "<p>Tennessee deafeated Kent State 71-0 at home.</p>";
 } else {
  return "<p>No team name inputed.</p>";
}
}
?>
