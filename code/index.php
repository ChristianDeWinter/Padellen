<?php
include 'database.php';
include "trainer_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Points</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="header_container">
            <a class="header_brand" href="#">
                <img class="brand__img" src="https://padelpoints.nl/wp-content/uploads/2021/07/logo.svg"
                    alt="Padelpoints Logo">
            </a>

            <div class="header_feature">
                <a href="#" class="header_reserveren_button" rel="nofollow">Reserveer</a>
                <button class="navbar-toggler" type="button" aria-label="Toggle navigation" aria-expanded="false">
                    &#9776;
                </button>
            </div>
        </div>

        <nav class="mobile-nav">
            <button class="close-menu" aria-label="Close menu">&times;</button>
            <a href="#" class="menu_reserveren_button" rel="nofollow">Reserveer</a>
            <ul>
                <li><a href="#" class="menu-item">Home</a></li>
                <li><a href="#" class="menu-item">About</a></li>
                <li><a href="#" class="menu-item">Services</a></li>
                <li><a href="#" class="menu-item">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main id="content" class="website-content">

        <div class="hero-ba-img">
            <div class="hero__content">
                <div class="hero__title">
                    <h1><strong>Sport, spel, fun<br> en fitness inéén</strong></h1>
                </div>
                <a href="#" class="header_reserveren_button" rel="nofollow">Reserveer</a>
            </div>
        </div>
        <hr>

        <div class="wp-block-group has-white-color has-text-color has-background centered-content"
            style="background-color:#292929">
            <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                <div style="height:34px" aria-hidden="true" class="wp-block-spacer"></div>
                <p class="has-text-align-center extra-small-align-left centered-text"><strong>Padel heeft het allemaal!
                        Zin in een potje padel? Boeken gaat simpel en snel via de website of Playtomic app.
                        <br>Reserveer met 1 druk op de knop een padelbaan wanneer het jou uitkomt.</strong></p>
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
            </div>
        </div>

        <section id="padel-banen-section" class="padel-banen-section bg-figures-section"
            style="background-color: #1a1a1a">
            <div class="on-bg">
                <div class="container container--header">
                    <h2 class="padel-banen-section__title">Onze padelbanen</h2>
                </div>
                <div class="container">
                    <div class="row location__row">

                        <div class="col-12 col-sm-6">
                            <article class="location">
                                <div class="location__img">
                                    <img decoding="async"
                                        src="https://padelpoints.nl/wp-content/uploads/2021/07/PadelPoints-6-800x600.jpg"
                                        alt="Padelpoints Badhoevedorp">
                                </div>
                                <hr>
                                <div class="location__content">
                                    <h3 class="location__title">
                                        <span>Padelpoints </span>Badhoevedorp
                                    </h3>
                                    <p class="location__text">Padelpoints Badhoevedorp is de grootste indoor
                                        padellocatie van Nederland: 14 padelbanen.</p>
                                    <div class="location__btns">
                                        <a href="#" class="location__details-btn btn btn--transparent">details</a>
                                        <a href="#" class="location__external-btn btn" target="_blank"
                                            rel="nofollow">reserveer</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6">
                            <article class="location">
                                <div class="location__img">
                                    <img decoding="async"
                                        src="https://padelpoints.nl/wp-content/uploads/2022/07/E6EF17D6-97E2-42F9-8415-5657F8BE82B7-801x600.jpeg"
                                        alt="Padelpoints Amstelveen">
                                </div>
                                <hr>
                                <div class="location__content">
                                    <h3 class="location__title">
                                        <span>Padelpoints</span>Amstelveen
                                    </h3>
                                    <p class="location__text">Padelpoints Amstelveen biedt de unieke beleving van spelen
                                        op drie indoor padelbanen van topkwaliteit.</p>
                                    <div class="location__btns">
                                        <a href="#" class="location__details-btn btn btn--transparent">details</a>
                                        <a href="#" class="location__external-btn btn" target="_blank"
                                            rel="nofollow">reserveer</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="trainers-section" class="trainers-section" style="background-color: #f5f5f5; padding: 40px 0;">
            <div class="container">
                <h2 class="trainers-section__title">Ontmoet Onze Trainers</h2>
                <div class="trainer-slider">
                    <div class="slider-wrapper">
                        <?php
                        if ($result) {
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="trainer">';
                                    echo '<img class="trainer__img" src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                                    echo '<div class="trainer__name">' . htmlspecialchars($row['name']) . '</div>';
                                    echo '<div class="trainer__bio">' . htmlspecialchars($row['bio']) . '</div>';
                                    echo '<div class="trainer__btns">';
                                    echo '<a href="#" class="trainer__btn all-trainers">All Trainers</a>';
                                    echo '<a href="#" class="trainer__btn book-training">Boek een training</a>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo '<div class="trainer">Geen trainers gevonden.</div>';
                            }
                        } else {
                            echo '<div class="trainer">Fout bij het ophalen van trainers: ' . htmlspecialchars($conn->error) . '</div>';
                        }

                        $conn->close();
                        ?>
                    </div>

                    <div class="slider-controls">
                        <button class="slider-button prev">❮</button>
                        <button class="slider-button next">❯</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="footer_container">
            <p>&copy; 2024 Padel Points. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
