<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 06.03.2018
 * Time: 19:18
 */

echo '<?xml version="1.0" encoding="windows-1251"?>
          <rss version="2.0">
          <channel>
          <title>Новости с сайта Site.ru</title>
          <link>http://site.ru/rss.php</link>
          <description>Новостная лента с сайта Site.ru</description>';
    $result=MYSQL_QUERY("SELECT id, title, text, date,  FROM article ORDER BY date DESC LIMIT 10");
    while ($row=MYSQL_FETCH_ARRAY($result))
    {
	    $id=$row['id'];
	    $title=$row['title'];
	    $text=$row['text'];
	    $date=$row['date'];
	    echo '<item>
            <title>$title</title>
            <link>ссылка на статью с указанием id</link>
            <description>$text</description>
            <pubDate>$date</pubDate>
         </item>';
    }
   echo '</channel>
   </rss>';
   ?>