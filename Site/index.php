
<!DOCTYPE HTML>
<html lang="en" data-bs-theme="light">

<head>
<script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Sandy's Community Centre provide high quality essential services, particularly to the most variable and at risk members of our Craigmillar community">
    <meta name="keywords"
        content="Sandy's community centre, Sandy's Edinburgh, Sandy's Craigmilar, Edinburgh community centres, Craigmillar community centre">
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="Global">
    <meta name="rating" content="general">
    <meta name="author" content="Saltirewebsites.com">
    <meta name="language" content="english">
    <meta name="robots" content="index, follow">
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
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    
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
            .fb-like, .fb-share-button {
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
                max-width: 90%; /* Increase logo size on mobile devices */
            }
        }

        @media (min-width: 992px) {
            header img {
                max-width: 300px; /* Larger logo size on desktop */
            }
        }

        .navbar .btn {
            min-width: 120px; /* Ensures buttons have a uniform size */
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
            max-width: 600px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-49Y25LLFGR');
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0"
        nonce="J990jOQ4">
    </script>
    <div id="fb-root"></div>
</head>

<body data-bs-theme="">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
            </path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
            </path>
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
            </path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
            </path>
        </symbol>
    </svg>

    <div class="dropdown position-fixed top-0 end-0 mb-3 me-3 bd-mode-toggle" style="z-index:999">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#sun-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div> 
    
    <div class="container" style="width: 60%; margin: auto;">
        <div class="overlay" id="overlay"></div>

        <!-- <div class="popup" id="popup"> 
            <div class="scroll-container">
                <img src="../assets/img/900px.png" alt="Festival Poster" class="img-fluid">
            </div>
            <div class="content">
                <p>Community Campfire Event</p>
                <p>Tuesday 5th November</p>
                <p>Time: Gates Open at 5pm</p>
                <p>We invite you to be part of this positive change and enjoy this event.</p>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-danger btn-custom" id="closeBtn">Close</button>
                    <a href="https://sandyscommunitycentre.com/QuestionnaireApp/" class="btn btn-primary btn-custom" id="readMoreBtn">Read Survey</a>
                </div>
            </div>
        </div> -->
    </div>
    
    <div class="container">
        <?php include 'Locker/Views/header.php'; ?>
        <!-- Success/Error Message Display -->
        <?php if(isset($_SESSION['message'])): ?>
            <p class="message"><?= $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <?php include 'Locker/Conductor.php'; ?>
        <?php include 'Locker/Views/footer.php'; ?>
    </div>

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        window.onload = function () {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        };

        document.getElementById('closeBtn').addEventListener('click', function () {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        });

        document.getElementById('readMoreBtn').addEventListener('click', function () {
            window.location.href = 'https://example.com';
        });

        document.getElementById('overlay').addEventListener('click', function () {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        });
    </script>
    
</body>

</html>