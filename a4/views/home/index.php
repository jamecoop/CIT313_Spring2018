<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Hot Posts from Reddit r/<?php echo $subreddit_title;?></h1><br/>

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
