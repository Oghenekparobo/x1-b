<?php
header('Content-Type: application/json'); 
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$currentUtcTime = new \DateTime('now', new \DateTimeZone('UTC'));
$currentUtcTimeStamp = $currentUtcTime->format('Y-m-d\TH:i:s\Z');

$currentDayOfWeek = date("l");

$name = $_GET['slack_name'];
$track = $_GET['track'];

$data = array(
    "slack_name" => $name,
    "current_day" => $currentDayOfWeek,
    "utc_time" => $currentUtcTimeStamp,
    "track" => $track,
    "github_file_url" => "https://github.com/Oghenekparobo/x1-b/blob/main/index.php",
    "github_repo_url" => "https://github.com/Oghenekparobo/x1-b",
    "status_code" => 200
);

if (isset($_GET['slack_name']) && isset($_GET['track'])) {
    echo json_encode($data);
}
?>
