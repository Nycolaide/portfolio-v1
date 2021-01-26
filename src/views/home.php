<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Portfolio de présentation du CV de Laurent Grimaldi">
    <meta name="author" content="Laurent Grimaldi">


    <title><?php echo $headTitle;?> | Portfolio</title>
    <link rel="favicon" type="image/svg" href="src/resources/laurent/favicon.svg"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="src/assets/style.css" />

    <?php include_once "dist/server/loading.php"; ?>
</head>
<body>
	<div id="alert" style="padding: 20px">
	<p>Bonjour ceci est l'ancienne version de mon portfolio, vous pouvez retrouver la nouvelle version sur <a href="https://laurentgrimaldi.dev/">https://laurentgrimaldi.dev</a></p>
	</div>
    <div id="main">
        <div id="holder">

            <div id="hero">
                <div class="hero-holder">
                    <div class="fig">
                        <figure></figure>
                    </div>
                    <div class="hero-footer">
                        <h6>Développeur Web Junior</h6>
                        <h1>Laurent Grimaldi</h1>
                    </div>
                </div>
            </div>

            

            <div id="header">
                <div class="content">
                    <div class="action-bar">

                        <a href="https://drive.google.com/file/d/1XgoMbOsx5p4AEPCGuvRurUZqzcEA0Di3/view?usp=sharing" target="_blank" rel="noopener noreferrer"><span class="icon-file"></span>Mon CV</a>

                        <a href="mailto:l.grimaldi@outlook.com" target="_blank" rel="noopener noreferrer"><span class="icon-envelop"></span>Engager moi</a>

                    </div>
                </div>
            </div>

            <div id="welcome">
                <div class="content">
                    <p>Bonjour, bienvenue sur mon portfolio. <br>Celui-ci me permet de vous présenter l'ensemble des projets sur lesquels j'ai travaillé.</p>
                    <p>Je m'appelle Laurent Grimaldi, j'ai 23 ans et je suis développeur web junior en Front End et Back End.
                    Je vous invite à visiter mon portfolio afin de découvrir mes compétences techniques et le travail réalisé lors de mes nombreux stages.</p>
                    <p>Je suis disponible dès aujourd'hui et impatient de vous rencontrer afin de me joindre à votre équipe.</p>
                    <h2>En savoir plus sur moi</h2>
                    <div id="hero-profil">
                        <div class="my-profil">
                            <div class="face">
                                <a id="btn-qrcode" class="btn-modify icon-qrcode" href="javascript:afficher()"></a>
                                <a id="btn-profil" class="btn-modify icon-user disable" href="javascript:effacer()"></a>

                                <img id="image" src="src/resources/laurent/hero.jpg" alt="">
                            </div>
                        </div>

                        <div class="social">
                            <?php
                                foreach ($socials as $social) {
                                    echo "<a href='". $social['url'] ."'  target='_blank'>
                                        <span class='". $social['icon'] ."'></span><p>". $social['name'] ."</p>
                                    </a>";
                                }
                            ?>
                        </div>
                    </div>
                    <p class="bio">J'ai découvert l'informatique avec l'univers des jeux vidéo, plus particulièrement Minecraft.
                    La création de serveur Minecraft m'a permis de découvrir les principes de la programmation web, la configuration de serveur et de plugins. J'ai fais BTS SIO afin de pouvoir transformer cette passion en un véritable projet professionnel.</p>
                </div>
            </div>

            <div id="generated">
                <div class="content">
                    <span class="icon-quotes-left"></span>
                        <div class="msg-intro">
                            <p>Je suis un développeur web junior,</p>
                            <p>qui</p>
                            <p><span class="generated-text"></span></p>
                        </div>
                    <span class="icon-quotes-right"></span>
                </div>
            </div>

            <div id="about">
                <div class="content">
                    <div id="tabs">
                        <ul class="tabs-menu">
                            <li><a href="#school">Education</a></li>
                            <li><a href="#exp">Expériences</a></li>
                            <li><a href="#skills">Compétences</a></li>
                        </ul>
                        <div id="school">
                            <?php
                                foreach ($education as $school) {
                                    echo "<div class='school'>";
                                    echo "<h2><strong>". $school['name'] ."</strong></h2>";
                                    echo "<h3>". $school['location'] .", ". $school['country'] ."</h3>";
                                    echo "<p>". $school['section'] ."</p>";
                                    echo "<p><strong>". $school['date'] ."</strong></p>";
                                    echo "</div>";
                                }
                            ?>
                        </div>
                        <div id="exp">
                            <?php
                                foreach ($experiences as $i => $experience) {
                                    echo "<div class='exp'>";
                                    echo "<h2><strong>". $experience['name'] ."</strong></h2>";
                                    echo "<h3><strong>". $experience['grade'] ."</strong></h3>";
                                    echo "<p>". $experience['date'] ."</p>";
                                    echo "<ul>";

                                    $content = $experience['content'];

                                    foreach($content as $y => $work) {
                                        echo "<li>". $work ."</li>";
                                    }

                                    echo "</ul>";
                                    echo "</div>";
                                }
                            ?>
                        </div>
                        <div id="skills">
                            <div class="skills">
                                <h2>Front End</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_frontend as $frontend) {
                                            echo "<li>";
                                            echo "<i class='". $frontend['icon'] ."'></i>";
                                            echo "<p>". $frontend['name'] ."</p>";
                                            echo "</li>";
                                        }
                                    ?>
                                </ul>
                                <h2>Back End</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_backend as $backend) {
                                            echo "<li>";
                                            echo "<i class='". $backend['icon'] ."'></i>";
                                            echo "<p>". $backend['name'] ."</p>";
                                            echo "</li>";
                                        }
                                    ?>
                                </ul>
                                <h2>Les outils</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_tools as $tools) {
                                            echo "<li>";
                                            echo "<i class='". $tools['icon'] ."'></i>";
                                            echo "<p>". $tools['name'] ."</p>";
                                            echo "</li>";
                                        }
                                    ?>
                                </ul>
                                <h2>Les méthodologies</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_metho as $metho) {
                                            echo "<li>";
                                            echo "<i class='". $metho['icon'] ."'></i>";
                                            echo "<p>". $metho['name'] ."</p>";
                                            echo "</li>";
                                        }
                                    ?>
                                </ul>
                                <h2>Les systèmes d'exploitation</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_os as $os) {
                                            echo "<li>";
                                            echo "<i class='". $os['icon'] ."'></i>";
                                            echo "<p>". $os['name'] ."</p>";
                                            echo "</li>";
                                        }
                                    ?>
                                </ul>
                                <h2>PAO / DAO</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_architectural as $archi) {
                                            echo "<li>";
                                            echo "<i class='". $archi['icon'] ."'></i>";
                                            echo "<p>". $archi['name'] ."</p>";
                                            echo "</li>";
                                        }
                                    ?>
                                </ul>
                                <h2>Mes autres compétences</h2>
                                <ul>
                                    <?php
                                        foreach ($skills_soft as $soft) {
                                                echo "<li>";
                                                echo "<i class='". $soft['icon'] ."'></i>";
                                                echo "<p>". $soft['name'] ."</p>";
                                                echo "</li>";
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="portfolio">
                <div class="content">
                <h2>Portfolio</h2>
                <p>Voici l'ensemble des projets effectués lors de mes formations, mes stages ou de mes travaux personnels.</p>
                <p>Certains projets ne disposent pas de répertoire Git ou d'Url , car les sources sont privées ou n'existent plus.</p>
                    <div class="grid">
                        <?php
                            foreach ($portfolios as $portfolio) {
                                echo "<div class='gallery-container'>";
                                echo "<img onClick='openPopup(". $portfolio['id'] .")' src='". $portfolio['img'] ."'/>";
                                echo "<div onClick='openPopup(". $portfolio['id'] .")' class='project_info icon-add-plus-button'>";
                                echo "<p>". $portfolio['company'] ."</p>";
                                echo "</div>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div id="resume">
                <div class="content">
                    <h2>Mes activités</h2>
                    <?php
                        foreach ($other_activity as $activity) {
                            echo "<div class='activity'>";
                            echo "<span class='". $activity['icon'] ."'></span>";
                            echo "<h4>". $activity['name'] ."</h4>";
                            echo "<p>". $activity['desc'] ."</p>";
                            echo "<a href='". $activity['url'] ."' target='_blank'>En savoir plus <span class='icon-circle-right'></span></a>";
                            echo "</div>";
                        }
                    ?>
                    <div class="block-activity">
                        <iframe  src="https://www.youtube.com/embed/videoseries?list=PLuHNzYOGnTrWi7fnaLuJfzRwkemmgK1z5&amp;ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div id="footer">
                <div class="bg-skew"></div>
                <div class="footer">
                    <div class="content">
                        <h2>Contact</h2>

                        <div class="btn">
                            <a href="tel:+33624351392" target="_blank" rel="noopener noreferrer"><span class='icon-phone'></span>06 24 35 13 92</a>
                            <a href="mailto:l.grimaldi@outlook.com" target="_blank" rel="noopener noreferrer"><span class='icon-envelop'></span>l.grimaldi@outlook.com</a>
                        </div>
                        <div class="social">
                            <?php
                                foreach ($socials as $social) {
                                    echo "<a href='". $social['url'] ."'  target='_blank'>
                                        <span class='". $social['icon'] ."'></span><p>". $social['name'] ."</p>
                                    </a>";
                                }
                            ?>
                        </div>
                        <div class="btn">
                        <a href="mailto:l.grimaldi@outlook.com" target="_blank" rel="noopener noreferrer">Adopter moi !</a>
                        </div>
                        <p>© copyright 2018 Laurent Grimaldi</p>
                    </div>
                </div>
            </div>
        </div><!-- #holder -->
    </div><!-- #main -->

    <?php
        foreach ($portfolios as $portfolio) {

            echo "<div id='". $portfolio['id'] ."' class='popup' style='display:none;'>";
            echo "<div class='cancel' onclick='closePopup();'></div>";
            echo "<div class='content'>";
            echo "<div class='close icon-cancel-circle' onclick='closePopup();'></div>";
            echo "<h3><strong>". $portfolio['name'] ."</strong></h3>";
            echo "<h4>". $portfolio['date'] ."</h4>";
            echo "<ul>";
            echo "<li><strong>Tech :</strong></li>";

            $techno = $portfolio['techno'];

            foreach ($techno as $x => $tools) {
                echo "<li>". $tools ."</li>";
            }
            echo "</ul>";
            echo "<p><strong>". $portfolio['company'] ."</strong></p>";
            echo "<p>". $portfolio['content'] ."</p>";
            echo "<div class='btn'>";
            echo "<a href='". $portfolio['github'] ."' style='display:". $portfolio['ifgithub'] .";' target='_blank'><span class='icon-github'></span>Voir le GitHub</a>";
            echo "<a href='". $portfolio['website'] ."' style='display:". $portfolio['ifwebsite'] .";' target='_blank'><span class='icon-sphere'></span>Voir le site web</a>";
            echo "<p class='msg'>". $portfolio['msg'] ."</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }    
    ?>
</body>
</html>
<script src="dist/libs/jquery-1.12.4.js"></script>
<script src="dist/libs/jquery-ui.js"></script>
    
<script src="src/assets/scripts/pop-up.js"></script>
<script src="src/assets/scripts/multi-profil.js"></script>
<script src="src/assets/scripts/tabs.js"></script>
<script src="src/assets/scripts/scroll-bottom.js"></script>
<script src="src/assets/scripts/text-introduction.js"></script>