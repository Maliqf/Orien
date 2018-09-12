<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 8:11 AM
 */?>

<div class="page-content-wrapper ">
    <div class="content-wrapper">
        <div class="movies-landing">
            <div class="mv-type-selection">
                <div class="tab-content-wrapper _active" id="now-showing" name="now-showing">
                    <section class="now-showing filter-now-showing">
                        <div class="row">
                            <div class="listing-section">
                                <div class="listing-sidebar">
                                    <?php include "profile_sidebar.php"?>

                                    <!--Language Selection start-->
                                    <div id="ns-lang" class="filetr-widget slideUp">
                                        <div class="widget-title ns-title-wid">
                                            <h3>Select Language</h3>
                                        </div>
                                        <div class="filter-list">
                                            <ul class="language __filter-list">

                                                <li class="__filter">
<span class="__checkbox">
<input type="checkbox" value="Tamil" id="tamil" class="tick"> <span class="checkbox-label"><a class="_anchor-filter" href="">Tamil</a></span>
</span>
                                                </li> <li class="__filter">
<span class="__checkbox">
<input type="checkbox" value="English" id="english"  class="tick"> <span class="checkbox-label"><a class="_anchor-filter" href="">English</a></span>
</span>
                                                </li> <li class="__filter">
<span class="__checkbox">
<input type="checkbox" value="Telugu" id="telungu" class="tick"> <span class="checkbox-label"><a class="_anchor-filter" href="">Telugu</a></span>
</span>
                                                </li> <li class="__filter">
<span class="__checkbox">
<input type="checkbox" value="Hindi"> <span class="checkbox-label"><a class="_anchor-filter" href="">Hindi</a></span>
</span>
                                                </li> <li class="__filter">
<span class="__checkbox">
<input type="checkbox" value="Kannada"> <span class="checkbox-label"><a class="_anchor-filter" href="">Kannada</a></span>
</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Language Selection End-->

                                    <!--Genre Selection start slideUp/slideDown-->
                                    <div id="ns-gen" class="filetr-widget slideUp">
                                        <div class="widget-title ns-genre-title">
                                            <h3>Genre</h3>
                                        </div>
                                        <div class="filter-list">
                                            <ul class="genre __filter-list ">
                                                <li class="__filter">
<span data-filter="action" class="__checkbox">
<input type="checkbox" value="Action"> <span class="checkbox-label"><a class="_anchor-filter" href="">Action</a></span>
</span>
                                                </li><li class="__filter">
<span data-filter="adventure" class="__checkbox">
<input type="checkbox" value="Adventure"> <span class="checkbox-label"><a class="_anchor-filter" href="">Adventure</a></span>
</span>
                                                </li><li class="__filter">
<span data-filter="animation" class="__checkbox">
<input type="checkbox" value="Animation"> <span class="checkbox-label"><a class="_anchor-filter" href="">Animation</a></span>
</span>
                                                </li><li class="__filter">
<span data-filter="biography" class="__checkbox">
<input type="checkbox" value="Biography"> <span class="checkbox-label"><a class="_anchor-filter" href="">Biography</a></span>
</span>
                                                </li>															<!-- <span class="__more-filters"> + More</span> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Genre Selection End-->
                                </div>

                                <!--Tile View Start-->
                                <div class="card-listing-section">
                                    <div class="cards-list">
                                        <div class="__col-now-showing">
                                            <div class="mv-row">
                                                <div class="card-container wow fadeIn movie-card-container movie-tamil" data-selector="movies" data-search-filter="movies-Imaikkaa-Nodigal" data-filter="|Tamil|Romance|Thriller|2D" data-language-filter="|Tamil" data-genre-filter="|Romance|Thriller" data-dimension-filter="|2D" style="visibility: visible; animation-name: fadeIn;">
                                                    <div class="cards">
                                                        <div class="card-img">
                                                            <img class="__poster __animated" src="images/thumb/01.jpg" alt="Imaikkaa Nodigal"/>
                                                        </div>
                                                        <div class="card-details lang-eng">
                                                            <div class="card-left">
                                                                <div class="popularity sa-data-plugin" data-event-group="EG00029395" data-event-code="ET00047631" data-coming-soon="false">
                                                                    <div class="__likes">
                                                                        <div class="__icon __heart">
                                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/movies-icons.svg#icon-heart"></use>
</svg>
                                                                        </div>
                                                                        <div class="__icon __thumbs _none">
                                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/movies-icons.svg#icon-like"></use>
</svg>
                                                                        </div>
                                                                        <div class="__percentage">84%</div>
                                                                    </div>
                                                                    <div class="__votes">
                                                                        <div class="__count">9,539 votes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-right">
                                                                <div class="card-title">
                                                                    <h4>Imaikkaa Nodigal</h4>
                                                                </div>
                                                                <div class="card-tag">
                                                                    <span><span class="censor">UA |</span> <li class="__language">Tamil</li></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-container wow fadeIn movie-card-container  movie-tamil" data-selector="movies" data-search-filter="movies-Kolamaavu-Kokila" data-filter="|Tamil|Action|Black-/-Dark-Comedy|Thriller|2D" data-language-filter="|Tamil" data-genre-filter="|Action|Black-/-Dark-Comedy|Thriller" data-dimension-filter="|2D" style="visibility: visible; animation-name: fadeIn;">
                                                    <a href="/chennai/movies/kolamaavu-kokila/ET00071635" title="Kolamaavu Kokila">
                                                        <div class="cards">
                                                            <div class="card-img">
                                                                <img class="__poster __animated" src="images/thumb/KolamaavuKokila.jpg" alt="Kolamaavu Kokila"/>
                                                            </div>
                                                            <div class="card-details lang-eng">
                                                                <div class="card-left">
                                                                    <div class="popularity sa-data-plugin">
                                                                        <div class="__likes">
                                                                            <div class="__icon __heart">
                                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/movies-icons.svg#icon-heart"></use>
</svg>
                                                                            </div>
                                                                            <div class="__icon __thumbs _none">
                                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/movies-icons.svg#icon-like"></use>
</svg>
                                                                            </div>
                                                                            <div class="__percentage">83%</div>
                                                                        </div>
                                                                        <div class="__votes">
                                                                            <div class="__count">25,791 votes</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-right">
                                                                    <div class="card-title">
                                                                        <h4>Kolamaavu Kokila</h4>
                                                                    </div>
                                                                    <div class="card-tag">
                                                                        <span><span class="censor">UA |</span> <li class="__language">Tamil</li></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card-container wow fadeIn movie-card-container  movie-english" data-selector="movies" data-search-filter="movies-Geetha-Govindam" data-filter="|Telugu|Comedy|Romance|2D" data-language-filter="|Telugu" data-genre-filter="|Comedy|Romance" data-dimension-filter="|2D" style="visibility: visible; animation-name: fadeIn;">
                                                    <a href="/chennai/movies/geetha-govindam/ET00078428" title="Geetha Govindam">
                                                        <div class="cards">
                                                            <div class="card-img">
                                                                <img class="__poster __animated" src="images/thumb/03.jpg" alt="Geetha Govindam"/>
                                                                <img class="__poster __animate" src="//in.bmscdn.com/events/mobile/vertical-noimg.png">
                                                                <div class="__flag __exclusive ">
                                                                    <span class="badge">Exclusive</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-details lang-eng">
                                                                <div class="card-left">
                                                                    <div class="popularity sa-data-plugin" data-event-group="EG00058088" data-event-code="ET00078428" data-coming-soon="false">
                                                                        <div class="__likes">
                                                                            <div class="__icon __heart">
                                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/movies-icons.svg#icon-heart"></use>
</svg>
                                                                            </div>
                                                                            <div class="__icon __thumbs _none">
                                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/movies-icons.svg#icon-like"></use>
</svg>
                                                                            </div>
                                                                            <div class="__percentage">86%</div>
                                                                        </div>
                                                                        <div class="__votes">
                                                                            <div class="__count">162,957 votes</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-right">
                                                                    <div class="card-title">
                                                                        <h4>Geetha Govindam</h4>
                                                                    </div>
                                                                    <div class="card-tag">
                                                                        <span><span class="censor">UA |</span> <li class="__language">Telugu</li></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!--Tile View End-->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
