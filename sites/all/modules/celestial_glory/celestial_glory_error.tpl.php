<?php

  $game = check_plain(arg(0));
  $get_phoneid = '_' . $game . '_get_phoneid';
  $phone_id = $get_phoneid();
  $arg2 = check_plain(arg(2));

  db_set_active('game_' . $game);


echo <<< EOF
    <div class="title">
      <img src="/sites/default/files/images/{$game}_title.png"/>
    </div>
    <p>&nbsp;</p>
    <div class="welcome">
     <div class="wise_old_man_large">

    </div>
    <p>And it came to pass that</p>
    <p>Error {$error_code}</p>
    <p>happened for user</p>
    <p><strong>{$phone_id}</strong>.</p>
    <p>Please report this to <strong>support@cheek.com</strong>.</p>
   </div>
EOF;

    db_set_active('default');
