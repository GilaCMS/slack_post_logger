<?php

gila::contentInit( 'post', function(&$table) {
  // unlist a column from content administration
  $table['events'][] = ['change', function(&$row) {
    $text = $row['title'].' -> '.gila::base_url('blog/'.$row['slug']);
    new gpost(gila::option('slack_post_logger.webhook'),['text'=>$text]);
  }];
});
