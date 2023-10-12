                    <header id="tg-header" class="tg-header tg-haslayout">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="tg-topbar">
                                            <nav class="tg-infonav">
                                                <ul>
                                                    <li>
                                                        <i><img src="images/icons/icon-01.png" alt="image destinations"></i>
                                                        <span>+625955262090</span>
                                                    </li>
                                                    <li>
                                                        <i><img src="images/icons/icon-02.png" alt="image destinations"></i>
                                                        <span>CHOOSE YOUR EXPERIENCE <a href="javascript:void(0);">Discover more</a></span>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="tg-addnavcartsearch" style="margin-right: 20px;">
                                                <nav class="tg-addnav">
                                                    <ul>
                                                        <li><a href="aboutus.php">about</a></li>
                                                        <li><a href="contactus.php">contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="tg-navigationarea tg-headerfixed">
                                            <strong class="tg-logo"><a href="index.php"><img src="images/logofix.png" alt="company logo here"></a></strong>
                                            <div class="tg-socialsignin">
                                                <ul class="tg-socialicons">
                                                    <li><a href="https://web.facebook.com/profile.php?id=61550855225122" target="_blank"><i class="icon-facebook-logo-outline"></i></a></li>
                                                    <li><a href="https://www.instagram.com/desa_wisatasembalun/" target="_blank"><i class="icon-instagram-social-outlined-logo"></i></a></li>
                                                    <li><a href="https://twitter.com/WisataSembalun1" target="_blank"><i class="icon-twitter-social-outlined-logo"></i></a></li>
                                                </ul>
                                                <div class="tg-userbox">
                                                    <?php

                                                    if (isset($_SESSION['username'])) {
                                                        echo '
                                                            <div class="collapse navbar-collapse" id="navbarNav" style="padding-right:0 !important">
                                                                <button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
                                                                    <span>' . $_SESSION["username"] . '</span>
                                                                    <i class="fa fa-caret-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
                                                                    <li><a href="logout.php">Sign Out</a></li>
                                                                </ul>
                                                            </div>';
                                                    } else {
                                                        echo '<a id="tg-btnsignin" class="tg-btn" href="signup.php"><span>sign in</span></a>';
                                                    }
                                                    ?>
                                                    <div class="dropdown tg-dropdown">
                                                        <button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
                                                            <img src="images/author/img-01.jpg" alt="image description">
                                                            <span>john smith</span>
                                                            <i class="fa fa-caret-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
                                                            <li><a href="javascript:void(0);">Dashboard</a></li>
                                                            <li><a href="javascript:void(0);">Edit Profile</a></li>
                                                            <li><a href="javascript:void(0);">Sign Out</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <nav id="tg-nav" class="tg-nav">
                                                <div class="navbar-header">
                                                    <a href="#menu" class="navbar-toggle collapsed">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </a>
                                                </div>
                                                <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                                    <ul>
                                                        <li <?php if ($currentPage === 'home') echo 'class="current-menu-item"'; ?>><a href="index.php">Beranda</a></li>
                                                        <li <?php if ($currentPage === 'destinations') echo 'class="current-menu-item"'; ?>><a href="destinations.php">Wisata</a></li>
                                                        <li <?php if ($currentPage === 'village') echo 'class="current-menu-item"'; ?>><a href="village.php">Desa</a></li>
                                                        <li <?php if ($currentPage === 'booking') echo 'class="current-menu-item"'; ?>><a href="booking.php">Penginapan</a></li>
                                                        <li <?php if ($currentPage === 'aboutus') echo 'class="current-menu-item"'; ?>><a href="aboutus.php">Tentang Kami</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </header>