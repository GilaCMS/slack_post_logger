<?php

gila::contentInit( 'post', function(&$table) {
  $table['events'][] = ['change', function(&$row) {
    if($row['publish']==1) {
      $text = $row['title'].' -> '.gila::base_url('blog/'.$row['slug']);
      new gpost(gila::option('slack_post_logger.webhook'), ['text'=>$text]);
    }
  }];
});
