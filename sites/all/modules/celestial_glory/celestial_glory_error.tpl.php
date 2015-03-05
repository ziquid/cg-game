<?php

  global $game, $phone_id;
// we won't have gone through fetch_user() yet, so set these here
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
  <p>Error E-{$error_code}</p>
  <p>happened for user</p>
  <p> {$phone_id}.</p>
  <p> Please report this to <strong>support@cheek.com</strong>.</p>
</div>
<div class="subtitle">
  <a href="/$game/quests/$arg2">
    <img src="/sites/default/files/images/{$game}_continue.png"/>
  </a>
</div>
EOF;
  db_set_active('default');
