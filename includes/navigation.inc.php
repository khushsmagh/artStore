<?php 
$URL = explode('/', $_SERVER["PHP_SELF"]);
$page = $URL[count($URL)-1];

?>
			<div id="mainNavigationRow" >
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbar-2">
                                <ul class="nav navbar-nav">
                                    <li class="<?php if($page == 'index.php') echo 'active'; ?>"><a href="iwppa2-index.php">Home</a></li>
                                    <li class="<?php if($page == 'iwppa2-about.php') echo 'active'; ?>"><a href="iwppa2-about.php">About Us</a></li>
                                    <li class="<?php if($page == 'search.php') echo 'active'; ?>"> <a href="search.php">Advanced Search</a></li>
                                    <li class="dropdown <?php if(in_array($page, array('iwppa2-works.php', 'iwppa2-artists.php', 'single-artist.php', 
																						'genres.php', 'single-genre.php', 'subjects.php', 'single-subject.php', 
																						'galleries.php', 'gallery.php'))) echo 'active'; ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Browse <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="<?php if($page == 'iwppa2-works.php' || $page == 'iwppa2-works.php') echo 'active'; ?>"> <a href="iwppa2-works.php">Art Works</a></li>
                                            <li class="<?php if($page == 'iwppa2-artists.php' || $page == 'single-artist.php') echo 'active'; ?>"><a href="iwppa2-artists.php">Artists</a></li>
                                            <li class="<?php if($page == 'genres.php' || $page == 'single-genre.php') echo 'active'; ?>"><a href = "genres.php">Genres</a></li>
                                            <li class="<?php if($page == 'subjects.php' || $page == 'single-subject.php') echo 'active'; ?>"><a href = "subjects.php">Subjects</a></li>
                                            <li class="<?php if($page == 'galleries.php' || $page == 'gallery.php') echo 'active'; ?>"><a href = "galleries.php">Galleries</a></li>
                                        </ul>
                                </ul> 
                            </div>             
                        </div>
                    </nav>
                </div>
            </div>  <!-- end mainNavigationRow -->