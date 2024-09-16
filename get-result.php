<?php
include "view-header.php";
?>
<h1>Get result</h1>
<?php
echo getGameResult();
include "view-footer.php";

function getGameResult() {
    if (isset($_GET['team-name']) && $_GET['team-name'] == 'oklahoma state') {
        return $_GET['team-name'] . "<p>defeated Tulsa 45-10 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'cincinnati') {
        return $_GET['team-name'] . "<p>defeated Miami (OH) 27-16 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'texas tech') {
        return $_GET['team-name'] . "<p>defeated North Texas 66-21 at home.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'west virginia') {
        return $_GET['team-name'] . "<p>lost to Pitt 38-34 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'utah') {
        return $_GET['team-name'] . "<p>defeated Utah State 38-21 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'baylor') {
        return $_GET['team-name'] . "<p>defeated Air Force 31-3 at home.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'colorado') {
        return $_GET['team-name'] . "<p>defeated Colorado State 28-9 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'ucf') {
        return $_GET['team-name'] . "<p>defeated TCU 35-34 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'tcu') {
        return $_GET['team-name'] . "<p>lost to UCF 35-34 at home..</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'houston') {
        return $_GET['team-name'] . "<p>defeated Rice 33-7 at home.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'byu') {
        return $_GET['team-name'] . "<p>defeated Wyoming 34-14 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'kansas') {
        return $_GET['team-name'] . "<p>lost to UNLV 23-20 at home.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'kansas state') {
        return $_GET['team-name'] . "<p>defeated Arizona 31-7 at home.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'arizona') {
        return $_GET['team-name'] . "<p>lost to Kansas State 31-7 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'arizona state') {
        return $_GET['team-name'] . "<p>defeated Texas State 31-28 on the road.</p>";
    } else if (isset($_GET['team-name']) && $_GET['team-name'] == 'iowa state') {
        return $_GET['team-name'] . "<p>did not play this week.</p>";
    } else {
        return "<p>No team name inputted.</p>";
    }
}
?>
