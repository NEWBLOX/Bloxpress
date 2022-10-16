<?php 
// shitty blog system i made based on 2012 roblox blog
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
include("$baseurl/api/site/header.php");
?>
            <div id="primary">
                <div id="content" role="main">
                    <nav id="nav-above">
                        <h3 class="assistive-text">Post navigation</h3>
                        <div class="nav-previous"><a href="page/2/"><span class="meta-nav">&larr;</span> Older posts</a></div>
                        <div class="nav-next"></div>
                    </nav>
                    <!-- #nav-above -->
                    <div id="fb-root"></div>
                    <script type="text/javascript">
                        window.fbAsyncInit = function()
                        						{
                        							FB.init({appId: 138850326224710, status: true, cookie: true, xfbml: true});
                        						};
                        						(function()
                        						{
                        							var e = document.createElement('script'); e.async = true;
                        							e.src = document.location.protocol + 'http://connect.facebook.net/en_US/all.js';
                        							document.getElementById('fb-root').appendChild(e);
                        						}());
                    </script>
                    <article id="post-6523" class="post-6523 post type-post status-publish format-standard sticky hentry category-announcements">
                        <header class="entry-header">
                            <hgroup>
                                <h2 class="entry-title">
                                    <a href="archives/6523/" title="Permalink to " rel="bookmark"></a>
                                </h2>
                                <h3 class="entry-format">Featured</h3>
                            </hgroup>
                            <div class="entry-meta">
                                <span class="by-author"><span class="sep"> By </span> <span class="author vcard"><a class="url fn n" href="archives/author/reesemcblox/" title="View all posts by ReeseMcBlox" rel="author">POWDERED</a></span></span> - <time class="entry-date" datetime="2011-12-21T01:26:59+00:00" pubdate>December 21, 2011</time> </div>
                            <!-- .entry-meta -->
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <p>Welcome to NEWBLOX Blog!</p>
                            <p>Here you can find; Gift codes, devlogs and more!
                                <!-- PHP 5.x -->
                            </p>
                            <div class="wpfblike">
                                <fb:like href="http://community.roblox.com/archives/6523" layout="default" show_faces="false" width="400" action="like" colorscheme="light" send="false" />
                            </div>
                        </div>
                        <!-- .entry-content -->
                        <footer class="entry-meta">
                            <span class="cat-links">
				<span class="entry-utility-prep entry-utility-prep-cat-links">Posted in</span> <a href="archives/category/announcements/" title="View all posts in Announcements" rel="category tag">Announcements</a> </span>
                        </footer>
                        <!-- #entry-meta -->
                    </article>
			<?php
				$sql = "SELECT * FROM blog";
				if ($result = mysqli_query($db, $sql)) {
				// Fetch one and one row
				while ($row = mysqli_fetch_row($result)) { ?>
				<article id="post-<?php echo $row[2]?>" class="post-<?php echo $row[2]?> post type-post status-publish format-standard hentry category-announcements category-news category-release-notes">
				<header class="entry-header">
				<h1 class="entry-title"><a href="post?id=<?php echo $row[4]?>" title="Permalink to " rel="bookmark"><?php echo $row[0]?></a></h1>
				<div class="entry-meta">
				<span class="by-author"><span class="sep"> By </span> <span class="author vcard"><a class="url fn n" href="archives/author/Telamon/" title="View all posts by <?php echo $row[2]?>" rel="author"><?php echo $row[2]?></a></span></span> - <time class="entry-date" datetime="2012-01-06T16:12:04+00:00" pubdate=""><?php echo date("F d, Y", strtotime($row[3]))?></time> </div>
				<!-- .entry-meta -->
				<div class="comments-link">
					<a href="post?id=<?php echo $row[2]?>#comments" title="Comment on <?php echo $row[0]?>">1</a> </div>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
					<p>
					<?php echo $row[1]?>
					<!-- PHP 5.x -->
					</p>
				<div class="wpfblike">
					<fb:like href="http://blog.newblox.ga/post?id=<?php echo $row[2]?>" layout="default" show_faces="false" width="400" action="like" colorscheme="light" send="false"></fb:like>
				</div>
				</div>
				<!-- .entry-content -->
				<footer class="entry-meta">
				<span class="cat-links">
					<span class="entry-utility-prep entry-utility-prep-cat-links">Posted in</span> <a href="archives/category/announcements/" title="View all posts in Announcements" rel="category tag">Announcements</a>, <a href="archives/category/news/" title="View all posts in News" rel="category tag">News</a>, <a href="archives/category/news/release-notes/" title="View all posts in Release Notes" rel="category tag">Release Notes</a> </span>
				<span class="sep"> | </span>
				<span class="comments-link"><a href="archives/6717/#comments" title="Comment on ROBLOX Studio for MAC–The BETA is Live!"><b>1</b> Reply</a></span>
				</footer>
				<!-- #entry-meta -->
				</article>
				<?php 			
				}
					mysqli_free_result($result);
				}
				?>
                    <nav id="nav-below">
                        <h3 class="assistive-text">Post navigation</h3>
                        <div class="nav-previous"><a href="page/2/"><span class="meta-nav">&larr;</span> Older posts</a></div>
                        <div class="nav-next"></div>
                    </nav>
                    <!-- #nav-above -->
                </div>
                <!-- #content -->
            </div>
 <?php include("$baseurl/api/site/footer.php"); ?>