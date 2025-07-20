<?php
// Combines RSS feeds from multiple sources
// header('Content-Type: application/json; charset=UTF-8');
// header('Access-Control-Allow-Origin: *');

$sources = [
  // HIMTI Greater Jakarta
  [
    'feed_url' => 'https://student-activity.binus.ac.id/himti/category/articles/feed/atom',
    'source_type' => 'atom',
    'content_type' => 'articles',
    'regional' => ['als', 'kmg', 'bdg', 'sny', 'mlg'],
  ],
  [
    'feed_url' => 'https://student-activity.binus.ac.id/himti/category/news/feed/atom',
    'source_type' => 'atom',
    'content_type' => 'news',
    'regional' => ['als', 'kmg', 'bdg', 'sny', 'mlg'],
  ],
  [
    'feed_url' => 'https://student-activity.binus.ac.id/himti/gallery/feed/atom',
    'source_type' => 'atom',
    'content_type' => 'gallery',
    'regional' => ['als', 'kmg', 'bdg', 'sny', 'mlg'],
  ],
  [
    'feed_url' => 'https://www.youtube.com/feeds/videos.xml?channel_id=UCnxjFlgW3YpKVkSshFHP_SQ',
    'source_type' => 'atom',
    'content_type' => 'video',
    'regional' => ['als', 'kmg'],
  ],
  // HIMTI Senayan (BINARY)
  [
    'feed_url' => 'https://student-activity.binus.ac.id/binary/category/articles/feed/atom',
    'source_type' => 'atom',
    'content_type' => 'articles',
    'regional' => ['sny'],
  ],
  [
    'feed_url' => 'https://student-activity.binus.ac.id/binary/category/news/feed/atom',
    'source_type' => 'atom',
    'content_type' => 'news',
    'regional' => ['sny'],
  ],
  [
    'feed_url' => 'https://student-activity.binus.ac.id/binary/gallery/feed/atom',
    'source_type' => 'atom',
    'content_type' => 'gallery',
    'regional' => ['sny'],
  ],
  // HIMTI Bandung
  [
    'feed_url' => 'https://www.youtube.com/feeds/videos.xml?channel_id=UC_bIW8-akHLWn9Mj7PAV8zQ',
    'source_type' => 'atom',
    'content_type' => 'video',
    'regional' => ['bdg'],
  ],
  // HIMTI Malang (HIMFO)
  [
    'feed_url' => 'https://www.youtube.com/feeds/videos.xml?channel_id=UCv5_20gYnK6uv4bp3ESSO9w',
    'source_type' => 'atom',
    'content_type' => 'video',
    'regional' => ['mlg'],
  ],
];

$articles = [];

foreach ($sources as $source) {
  // Fetch data
  if ($source['source_type'] == 'atom' || $source['source_type'] == 'rss') {
    $feed = simplexml_load_file($source['feed_url']);
    $entries = ($source['source_type'] == 'atom') ? $feed->entry : $feed->channel->item;

    foreach ($entries as $entry) {
      // Title
      $item = [
        'title' => (string) $entry->title,
        'content_type' => $source['content_type'],
        'regional' => $source['regional'],
        'categories' => [],
      ];

      // URL
      if ($source['source_type'] == 'atom') {
        $item['url'] = (string) $entry->link->attributes()->{'href'};
      } else {
        $item['url'] = (string) $entry->link;
      }

      // Timestamp
      if (isset($entry->pubDate)) $item['timestamp'] = (int) strtotime($entry->pubDate . " UTC");
      else if (isset($entry->published)) $item['timestamp'] = (int) strtotime($entry->published . " UTC");
      else $item['timestamp'] = (int) $entry->timestamp;

      // Cover Image
      if (isset($entry->enclosure)) $item['cover_image'] = (string) $entry->enclosure->attributes()->{'url'};
      else if (isset($entry->children('media', TRUE)->content)) $item['cover_image'] = (string) $entry->children('media', TRUE)->content->attributes()->url;
      else if (isset($entry->children('media', TRUE)->group)) $item['cover_image'] = (string) $entry->children('media', TRUE)->group->children('media', TRUE)->thumbnail->attributes()->url;

      // Categories and Tags
      if (isset($entry->category)) {
        // if (!is_array($entry->category)) $entry->category = array($entry->category);
        foreach ($entry->category as $category) {
          array_push($item['categories'], (string) $category->attributes()->term);
        }
      }

      // Push into article list
      $articles[$item['timestamp']] = $item;
    }
  }
}

ksort($articles, SORT_NUMERIC);
$json = json_encode($articles);

// Write into a file
$file = fopen('feed.json', 'w');
fwrite($file, $json);
fclose($file);

echo $json;