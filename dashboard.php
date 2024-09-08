<?php
// dashboard.php for the admin dashboard
include('config.php');

// Fetch data
$members_count = $db->query("SELECT COUNT(*) FROM members")->fetchColumn();
$events_count = $db->query("SELECT COUNT(*) FROM events")->fetchColumn();
$donations_total = $db->query("SELECT SUM(amount) FROM donations")->fetchColumn();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Church Management Dashboard</title>
    <!-- Include CSS files here -->
</head>
<body>
    <h1>Church Management Dashboard</h1>
    <div>
        <h2>Members: <?php echo $members_count; ?></h2>
        <h2>Events: <?php echo $events_count; ?></h2>
        <h2>Total Donations: $<?php echo $donations_total; ?></h2>
    </div>
    <!-- Include other dashboard components here -->
</body>
</html>
