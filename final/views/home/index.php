<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">

     <h1>Welcome to MVC Pro Final Part 1!</h1>
        <p>This site is a demonstration of all of my hard work this semester.</br>
            While most of this site is basically a tech demo, this homepage doubles as a portal to technology news through Reddit's r/Technology subreddit.</p></br>






        <h1>Hot Posts from Reddit r/<?php echo $subreddit_title;?>  <img src="views/images/reddit_logo.png" alt="Reddit Snoo" height="50" width="50"></h1><br/>

        <?php
        $rss = simplexml_load_file("https://www.reddit.com/r/technology/.rss");

        foreach ($rss->entry as $entry) {
            //echo $entry->title."<br/>".$entry->author->name."<br/>".$entry->author->uri."<br/>".$entry->updated."<br/><a href=\"https://www.reddit.com/r/technology/\" class=\"btn btn-secondary btn-lg active\" role=\"button\" aria-pressed=\"true\">See Post</a><hr/>";

            echo "<b>".$entry->title."</b><br/><a href='".$entry->author->uri."'>".$entry->author->name."</a><br/>".$entry->updated."<br/><a href=\"https://www.reddit.com/r/technology/\" class=\"btn btn-secondary btn-lg active\" role=\"button\" aria-pressed=\"true\">See Post</a><hr/>";


        }

        ?>
    </div>
</div>

<?php include('views/elements/footer.php');?>
