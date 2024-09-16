<?php
include "view-header.php";
?>
<h1>Post result</h1>
<?php
echo getGameResult();
include "view-footer.php";

function getGameResult() {
    if (isset($_POST['team-name']) && $_POST['team-name'] == 'oklahoma') {
        return $_POST['team-name'] . "<p>defeated Tulane 34-19 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'alabama') {
        return $_POST['team-name'] . "<p>defeated Wisconsin 42-10 on the road.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'lsu') {
        return $_POST['team-name'] . "<p>defeated South Carolina 36-33 on the road.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'south carolina') {
        return $_POST['team-name'] . "<p>lost to LSU 36-33 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'missouri') {
        return $_POST['team-name'] . "<p>defeated Boston College 27-21 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'texas a&m') {
        return $_POST['team-name'] . "<p>defeated Florida 33-20 on the road.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'florida') {
        return $_POST['team-name'] . "<p>lost to Texas A&M 33-20 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'arkansas') {
        return $_POST['team-name'] . "<p>defeated Auburn 37-27 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'ole miss') {
        return $_POST['team-name'] . "<p>defeated Wake Forest 40-6 on the road.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'texas') {
        return $_POST['team-name'] . "<p>defeated UTSA 56-7 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'vanderbilt') {
        return $_POST['team-name'] . "<p>lost to Georgia State 36-32 on the road.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'georgia') {
        return $_POST['team-name'] . "<p>defeated Kentucky 13-12 on the road.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'kentucky') {
        return $_POST['team-name'] . "<p>lost to Georgia 13-12 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'auburn') {
        return $_POST['team-name'] . "<p>defeated New Mexico 45-19 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'mississippi state') {
        return $_POST['team-name'] . "<p>lost to Toledo 41-17 at home.</p>";
    } else if (isset($_POST['team-name']) && $_POST['team-name'] == 'tennessee') {
        return $_POST['team-name'] . "<p>defeated Kent State 71-0 at home.</p>";
    } else {
        return "<p>No team name inputted.</p>";
    }
}
?>
