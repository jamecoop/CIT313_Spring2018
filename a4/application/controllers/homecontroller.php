<?php

class HomeController extends Controller{

	public function index(){
        $feed = "https://www.reddit.com/r/technology/.rss";
        $rss = new RssDisplay($feed);

        $feed_data = $rss->getFeedItems();

        $subreddit_title = $feed_data->title;
        $post_title = $feed_data->entry->title;
        $author = $feed_data->entry->author->name;
        $post = $feed_data->entry->content;
        $user_profile = $feed_data->entry->author->url;


        $this->set('subreddit_title',$subreddit_title);
        $this->set('post_title',$post_title);
        $this->set('author',$author);
        $this->set('post',$post);
        $this->set('user_profile',$user_profile);
	}
	
}

?>