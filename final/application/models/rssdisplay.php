<?php

class RssDisplay extends Model
{

    protected $feed_url;
    protected $num_items;

    public function __construct($url)
    {
        parent::__construct();

        $this->feed_url = $url;

    }

    public function getFeedItems($num_feed_items = 0)
    {

        $items = simplexml_load_file($this->feed_url);

        $this->num_feed = $num_feed_items;

        $x = 0;
        $rss_work = array();

        if ($this->num_items > 0) {
            foreach ($items->entry->item as $data) {
                $rss_work[] = $data;
                if ($x >= ($this->num_items - 1)) {
                    break;
                }
                $x++;
            }
            return $rss_work;
        } else {

            return $items;
        }

    }
}
