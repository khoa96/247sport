<?php include "templates/head.php"; ?>

<body>
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
    <div class="home-page-wrapper">
        <div class="container">
            <div class="match-schedule-wrapper">
                <h2 class="schedule-title">LIVE FOOTBALL GAMES, SCORES & RESULTS</h2>
                <div class="list-schedule">
                    <div class="schedule-item">
                        <h3 class="day">12</h3>
                        <span class="label">Mon</span>
                    </div>
                    <div class="schedule-item">
                        <h3 class="day">13</h3>
                        <span class="label">Tue</span>
                    </div>
                    <div class="schedule-item">
                        <h3 class="day">14</h3>
                        <span class="label">Web</span>
                    </div>
                    <div class="schedule-item active">
                        <h3 class="day">15</h3>
                        <span class="label">Thu</span>
                    </div>
                    <div class="schedule-item">
                        <h3 class="day">16</h3>
                        <span class="label">Fri</span>
                    </div>
                    <div class="schedule-item">
                        <h3 class="day">17</h3>
                        <span class="label">Sat</span>
                    </div>
                    <div class="schedule-item">
                        <h3 class="day">18</h3>
                        <span class="label">Sun</span>
                    </div>
                </div>
            </div>

            <div class="common-main-layout">
                <div class="common-left-layout">
                    <h3 class="title">Football</h3>
                    <div class="box-common box-list-league">
                        <div class="league-item">
                            <img src="./images/play-icon.png" alt="" class="league-image">
                            <span class="league-name">Live</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-1.png" alt="" class="league-image">
                            <span class="league-name ">Result</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-2.png" alt="" class="league-image">
                            <span class="league-name ">Premier League</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-3.png" alt="" class="league-image">
                            <span class="league-name ">Bundesliga</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-4.png" alt="" class="league-image">
                            <span class="league-name ">Ligue 1</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-5.png" alt="" class="league-image">
                            <span class="league-name ">La Liga</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-6.png" alt="" class="league-image">
                            <span class="league-name ">Serie A</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-7.png" alt="" class="league-image">
                            <span class="league-name ">V-League</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-8.png" alt="" class="league-image">
                            <span class="league-name ">Champions League</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-9.png" alt="" class="league-image">
                            <span class="league-name ">Europa League Champions League World
                                Cup</span>
                        </div>
                        <div class="league-item">
                            <img src="./images/league-10.png" alt="" class="league-image">
                            <span class="league-name ">World Cup Europa League Champions
                                League</span>
                        </div>
                    </div>
                </div>
                <div class="common-right-layout">
                    <?php include "templates/liveTable.php"; ?>
                    <?php include "templates/hotMatch.php"; ?>
                    <?php include "templates/upcommingTable.php"; ?>
                </div>
            </div>


        </div>
    </div>
    <?php include "templates/subFooter.php"; ?>
    <?php include "templates/footer.php"; ?>

    <script src="https://unpkg.com/vue@next"></script>
    <!-- import CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-plus/dist/index.css">
    <!-- import JavaScript -->
    <script src="https://unpkg.com/element-plus@2.2.17/dist/index.full.min.js"></script>
    <script src="https://unpkg.com/element-plus@2.2.17/dist/locale/en.min.js"></script>
    <script>
    $("#upcomming-tabs").tabs({
        active: 0
    })

    const App = {
        data() {
            return {
                mydate: new Date(),
            };
        },
    };

    ElementPlus.dayjs().$locale().weekStart = 1;

    const app = Vue.createApp(App);

    app.use(ElementPlus, {
        locale: ElementPlusLocaleEn,
    })

    app.mount("#date-picker");
    </script>
</body>


</html>