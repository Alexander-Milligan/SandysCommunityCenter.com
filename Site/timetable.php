<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'Locker/Config.php';

    // Ensure the connection exists
    if (!isset($_PageCon)) {
        die('Database connection is NULL! Check Locker/Config.php');
    }

    // Fetch events for the current week
    $stmt = $_PageCon->prepare("
        SELECT id, event_name, day, start_time, end_time, location, color_code 
        FROM timetable_events 
        ORDER BY FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'), start_time
    ");
    if (!$stmt->execute()) {
        die("SQL Error: " . print_r($stmt->errorInfo(), true));
    }

    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Days of the week
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $weeklyEvents = array_fill_keys($daysOfWeek, array_fill(0, 8, null));

    foreach ($events as $event) {
        if (!isset($event['day'])) {
            continue;
        }

        $dayName = $event['day'];

        for ($i = 0; $i < 8; $i++) {
            if ($weeklyEvents[$dayName][$i] === null) {
                $weeklyEvents[$dayName][$i] = $event;
                break;
            }
        }
    }

    // Function to determine text color based on background color
    function getTextColor($hexColor) {
        $hexColor = str_replace('#', '', $hexColor);
        if (strlen($hexColor) == 6) {
            list($r, $g, $b) = sscanf($hexColor, "%02x%02x%02x");
        } else {
            return '#000000'; // Default to black if format is invalid
        }
        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
        return ($luminance > 0.5) ? '#000000' : '#FFFFFF';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandy's Community Centre</title>
    <link href="assets/css/HeaderLogo.css" rel="stylesheet">
    <link href="assets/css/Fuildstyles.css" rel="stylesheet">
    <link href="assets/css/MainStyles.css" rel="stylesheet">
    <link href="assets/css/FormsStyles.css" rel="stylesheet">
    <link href="assets/css/ClubListStyles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            border-spacing: 5px;
            margin-left: 5%;
        }

        th, td {
            padding: 15px;
            text-align: center;
            vertical-align: top;
        }

        th {
            background-color: #007bff;
            color: white;
            font-size: 18px;
        }

        .event-cell {
            text-align: center;
            width: 12.5%;
            vertical-align: top;
            padding: 10px;
            min-width: 100px;
            min-height: 100px;
        }

        .event {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 95%;
            max-width: 95%;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
            word-wrap: break-word;
            white-space: normal;
            overflow: hidden;
        }

        .event small {
            display: block;
            font-size: 12px;
            font-weight: normal;
            opacity: 0.9;
        }

        .event a {
            text-decoration: none !important;
            color: inherit !important;
            font-weight: bold;
            border: none !important;
            outline: none !important;
        }
        a:-webkit-any-link {
            text-decoration: none !important;
        }
        .key-item {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }
        .key-item .badge {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .key-item .fa {
            font-size: 20px;
        }
        .key-item span {
            font-size: 1.1rem;
        }
        .color-box {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 4px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<?php include 'Locker/Views/header.php'; ?>
            <div class="container mt-5">
                <h2 class="mb-4">Color Key</h2>
                <div class="row">
                    <div class="col-md-6">
                    <div class="key-item d-flex align-items-center">
                            <span class="badge" style="background-color: #ff3300;"></span> <!-- Red -->
                            <i class="fas fa-users me-3"></i> <!-- Icon for Sandy's run group -->
                            <span>Sandy's run group - open to public</span>
                            <span class="color-box" style="background-color: #ff3300;"></span>
                        </div>
                        <div class="key-item d-flex align-items-center">
                            <span class="badge" style="background-color: #0066cc;"></span> <!-- Blue -->
                            <i class="fas fa-lock me-3"></i>
                            <span>Sandy's run - closed group</span>
                            <span class="color-box" style="background-color: #0066cc;"></span>
                        </div>
                        <div class="key-item d-flex align-items-center">
                            <span class="badge" style="background-color: #28a745;"></span> <!-- Green -->
                            <i class="fas fa-building me-3"></i>
                            <span>City of Edinburgh Council</span>
                            <span class="color-box" style="background-color: #28a745;"></span>
                        </div>
                        <div class="key-item d-flex align-items-center">
                            <span class="badge" style="background-color: #ffffff; border: 1px solid #ccc;"></span> <!-- White -->
                            <i class="fas fa-users me-3"></i>
                            <span>External lets</span>
                            <span class="color-box" style="background-color: #ffffff; border: 1px solid #ccc;"></span>
                        </div>
                    </div>
                </div>
            </div>
    <div class="timetable-container">
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th colspan="8">Sandy's Community Centre Time Table</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($daysOfWeek as $day): ?>
                    <tr>
                        <td><?php echo $day; ?></td>
                        <?php for ($i = 0; $i < 8; $i++): ?>
                            <td class="event-cell">
                                <?php if (!empty($weeklyEvents[$day][$i])): ?>
                                    <?php 
                                        $event = $weeklyEvents[$day][$i]; 
                                        $bgColor = htmlspecialchars($event['color_code']);
                                        $textColor = getTextColor($bgColor);
                                        $eventName = htmlspecialchars($event['event_name'], ENT_QUOTES, 'UTF-8');
                                        $eventID = strtolower(str_replace(' ', '-', $eventName)); // Generate unique ID
                                    ?>
                                    <form id="clubForm" action="index.php" method="post">
                                        <input type="hidden" name="NavDir" value="Clubs">
                                        <input type="hidden" name="club" id="clubInput" value="">

                                        <a href="javascript:void(0);" onclick="submitClubForm('<?php echo urlencode(str_replace(' ', '-', strtolower($eventName))); ?>')">
                                            <div class="event" style="background-color: <?php echo $bgColor; ?>; color: <?php echo $textColor; ?>;">
                                                <?php echo html_entity_decode($eventName, ENT_QUOTES, 'UTF-8'); ?>
                                                <small>
                                                    <?php echo htmlspecialchars($event['start_time']) . ' - ' . htmlspecialchars($event['end_time']); ?><br>
                                                    <?php echo htmlspecialchars($event['location']); ?>
                                                </small>
                                            </div>
                                        </a>
                                    </form>

                                <script>
                                function submitClubForm(clubName) {
                                    document.getElementById("clubInput").value = clubName;
                                    document.getElementById("clubForm").submit();
                                }
                                </script>

                                <?php else: ?>
                                    <div class="event" style="background-color: #f1f1f1; color: #000;">
                                        <small></small>
                                    </div>
                                <?php endif; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
function generateClubID(clubName) {
    return clubName
        .toLowerCase()
        .replace(/&/g, "and")    // Replace '&' with 'and'
        .replace(/[^a-z0-9 ]/g, "") // Remove special characters except spaces
        .replace(/\s+/g, "-");   // Replace spaces with hyphens
}
</script>

</body>
</html>
