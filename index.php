<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="_/css/master.css">
    <script src="_/js/angular.min.js"></script>
    <script src="_/js/master.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="/_/img/favicon.png">
    <title>Tyler Buth</title>
</head>
<body ng-app="TylerButh" ng-controller="iController">

<header>
    <div class="location-time-container">
        <div id="location-time">
            <span class="current-location"><span class="name">My Location: </span><b>Bangkok, Thailand</b></span>
            <span class="current-time"><span class="name">My Time: </span><b><time current-time></time></b></span>
        </div>
    </div>
    <h1><img src="_/img/tyler_buth.png" /></h1>

    <video autoplay loaded-data loop poster="_/img/bg.jpg" id="bgvid">
        <source src="_/vid/bg.webm" type="video/webm" />
        <source src="_/vid/bg.mp4" type="video/mp4" />
        <img src="_/img/bg.jpg" />
    </video>
    <div id="fade"></div>
</header>
<main id="content">
    <section class="info">
        <div class="container">
            <h2><img src="_/img/info.png" /></h2>
            <div class="click-resume">
                <a href="_/doc/TylerButh-Resume.docx"><span class="hidden-xs">Click here to download full </span><b>Resume</b> / <b>CV</b></a>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <dl>
                        <dt>Age:</dt><dd>30 years old</dd>
                        <dt>Nationality:</dt><dd>American</dd>
                        <dt>Languages:</dt><dd>English <i>(Native)</i>, Thai <i>(Intermediate)</i>, German <i>(Basic)</i></dd>
                        <dt>Degree:</dt><dd>BS in Religion <i>(GPA 3.7)</i> from Liberty University</dd>
                        <dt>Military:</dt><dd>United States Air Force - Intelligence <i>(4 years)</i></dd>
                    </dl>
                </div>
                <div class="col-sm-6">
                    <dl>
                        <dt>Email:</dt><dd>me@tylerbuth.com</dd>
                        <dt>Thai Phone #:</dt><dd>087 095 0737</dd>
                        <dt>US Phone #:</dt><dd>502-416-1772</dd>
                        <dt>Skype:</dt><dd>MrButh</dd>
                        <dt>Line:</dt><dd>SirTyler</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <section class="experience">
        <div class="container">
            <h2 class="experience-title"><img src="_/img/experience.png" /></h2>
            <div class="click-skill" ng-if="curSkillKey == 0">Click a skill to filter the portfolio.</div>
            <div class="click-skill" ng-if="curSkillKey > 0">Click the skill again to unselect it.</div>
            <div class="row skills">
                <div class="col-md-3 skill-4">
                    <h3>A LOT</h3>
                    <ul>
                        <li ng-repeat="(key, skill) in skills" ng-if="skill.level == 1">
                            <a href ng-click="selectSkill(key)" ng-class="{true: 'deselected'}[curSkillKey != key && curSkillKey != 0]">{{ skill.name | uppercase }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 skill-3">
                    <h3>QUITE A BIT</h3>
                    <ul>
                        <li ng-repeat="(key, skill) in skills" ng-if="skill.level == 2">
                            <a href ng-click="selectSkill(key)" ng-class="{true: 'deselected'}[curSkillKey != key && curSkillKey != 0]">{{ skill.name | uppercase }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 skill-2">
                    <h3>SOME</h3>
                    <ul>
                        <li ng-repeat="(key, skill) in skills" ng-if="skill.level == 3">
                            <a href ng-click="selectSkill(key)" ng-class="{true: 'deselected'}[curSkillKey != key && curSkillKey != 0]">{{ skill.name | uppercase }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 skill-1">
                    <h3>DABBLED</h3>
                    <ul>
                        <li ng-repeat="(key, skill) in skills" ng-if="skill.level == 4">
                            <a href ng-click="selectSkill(key)" ng-class="{true: 'deselected'}[curSkillKey != key && curSkillKey != 0]">{{ skill.name | uppercase }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio">
        <div class="container">
            <div class="title" ng-if="curSkill || curSkillDesc">
                <h3 ng-if="curSkill">{{ curSkill | uppercase }}</h3>
                <p>{{ curSkillDesc }}</p>
            </div>
            <div class="item clearfix" ng-repeat="(key, project) in portfolio" ng-if="curSkillKey == 0 || project.skills[curSkill]">
                <h4 class="visible-xs">{{ project.name }}</h4>
                <figure><img ng-src="/portfolio/{{ project.folder }}/figure.jpg" /></figure>
                <div class="details">
                    <h4 class="hidden-xs">{{ project.name }}</h4>
                    <nav class="item-skills">
                        <span ng-repeat="(skill, desc) in project.skills">
                            <a href ng-class="{true: 'selected'}[(curSkill == skill && !project.selectedSkill) || project.selectedSkill == skill]" ng-click="changeProjectSkill(key, skill)">{{ skill | uppercase }}</a>
                            <span ng-show="! $last">|</span>
                        </span>
                    </nav>
                    <p ng-if="curSkillKey == 0 && !project.selectedSkill">{{ project.description }}</p>
                    <p ng-if="curSkillKey > 0 && !project.selectedSkill">{{ project.skills[curSkill] }}</p>
                    <p ng-if="project.selectedSkill">{{ project.skills[project.selectedSkill] }}</p>
                    <a href="{{ project.link }}" ng-if="project.link" target="_blank">Click here to visit website</a>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="main-footer">
    &copy; <?=date('Y')?>. Background video by <a href="http://www.videezy.com/members/churchmediavideos" target="_blank">churchmediavideos</a> on <a href="http://www.videezy.com/" target="_blank">Videezy.com</a>
</footer>
</body>
</html>
