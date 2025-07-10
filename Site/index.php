<?php session_start();
include 'SandysCpanel/https/Config.php';

// Fetch SEO data for index page
$seoPage = 'index';
$seoQuery = $_Con->prepare("SELECT title, description, keywords, author FROM seo_settings WHERE page = :page LIMIT 1");
$seoQuery->bindParam(':page', $seoPage);
$seoQuery->execute();
$seo = $seoQuery->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= htmlspecialchars($seo['description'] ?? '') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seo['keywords'] ?? '') ?>">
    <meta name="author" content="<?= htmlspecialchars($seo['author'] ?? '') ?>">
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="Global">
    <meta name="rating" content="general">
    <meta name="language" content="english">
    <meta name="robots" content="index, follow">
    <title><?= htmlspecialchars($seo['title'] ?? "Sandy's Community Centre") ?></title>
    <link href="assets/css/HeaderLogo.css" rel="stylesheet">
    <link href="assets/css/Fuildstyles.css" rel="stylesheet">
    <link href="assets/css/MainStyles.css" rel="stylesheet">
    <link href="assets/css/FormsStyles.css" rel="stylesheet">
    <link href="assets/css/ClubListStyles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
    .p {
        font-size: 13pt;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (max-width: 768px) {

        .fb-like,
        .fb-share-button {
            width: 100% !important;
            min-width: 250px;
            max-width: 100%;
        }
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    header img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        header img {
            max-width: 90%;
            /* Increase logo size on mobile devices */
        }
    }

    @media (min-width: 992px) {
        header img {
            max-width: 300px;
            /* Larger logo size on desktop */
        }
    }

    .navbar .btn {
        min-width: 120px;
        /* Ensures buttons have a uniform size */
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    .card {
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        max-width: 1200px;
        padding: 20px;
        z-index: 1000;
        border-radius: 10px;
    }

    .popup .scroll-container {
        max-height: 40vh;
        overflow-y: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .popup img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .popup .content {
        text-align: left;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .btn-custom {
        border-radius: 50px;
        padding: 10px 20px;
    }

    .btn-danger {
        background-color: #ff4d4d;
    }

    .btn-primary {
        background-color: #4d79ff;
    }
    </style>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-49Y25LLFGR');
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0"
        nonce="J990jOQ4">
    </script>
    <div id="fb-root"></div>
</head>

<body>
    <div class="container" style="max-width: 100%; padding-left: 15px; padding-right: 15px;">
        <div class="overlay" id="overlay"></div>
    </div>

    <div class="container">
        <?php include 'Locker/Views/header.php'; ?>

        <?php if (isset($_SESSION['message'])): ?>
        <p class="message"><?= $_SESSION['message'];
                                unset($_SESSION['message']); ?></p>
        <?php endif; ?>

        <?php include 'Locker/Conductor.php'; ?>
        <?php include 'Locker/Views/footer.php'; ?>
    </div>

    <div class="popup" id="Popup" style="display: none;">
        <div class="card-group flex-column flex-md-row gap-3">

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <img src="assets/img/thebcm-4.png" class="card-img-top" alt="Bouncy Castle">
                <div class="card-body text-center">
                    <p class="card-text fw-semibold">Amazing Bouncy Castle Assault Course!</p>
                </div>
            </div>

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden flex-grow-1">
                <div class="scroll-container p-4">
                    <h3 class="fw-bold text-primary">Sandy's Mini Festival</h3>
                    <h5 class="text-muted mb-3">Saturday 26th July 11:00am – 2:00pm</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>76 Craigmillar Castle Avenue</p>
                    <p><i class="fas fa-phone me-2"></i>07504627853</p>
                    <p>Hire a table @ £10 each & as always we will try not to duplicate tables, to give everyone a fair
                        chance of profit. <br>(180cm x 76cm)</p>
                    <p>Access 30mins prior to the event for set up. Please call, book and pay before event date!</p>
                    <img src="assets/img/MiniFestival-26-july.png" class="img-fluid rounded mt-3" alt="Festival Poster">
                </div>
            </div>

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <img src="assets/img/thebcm-3.png" class="card-img-top" alt="Obstacle Course">
                <div class="card-body text-center">
                    <p class="card-text fw-semibold">Test yourself dads — Bouncy Castle Assault Course!</p>
                </div>
            </div>

        </div>

        <div class="text-center mt-4">
            <form action="index.php" method="post" class="d-inline">
                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4" name="NavDir" value="Events">
                    Find Out More
                </button>
            </form>
            <button type="button" class="btn btn-danger btn-lg rounded-pill px-4 ms-2"
                onclick="document.getElementById('Popup').style.display='none';document.getElementById('overlay').style.display='none';">
                Close
            </button>
        </div>
    </div>



    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    window.onload = function() {
        // Check if the popup has been shown before
        if (!localStorage.getItem("popupShown")) {
            document.getElementById("Popup").style.display = "block";
            document.getElementById("overlay").style.display = "block";
            // Set flag so it won't show next time
            localStorage.setItem("popupShown", "true");
        }
    };
    </script>
</body>

</html>