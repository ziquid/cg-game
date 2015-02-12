<?php

  global $game, $phone_id;
// we won't have gone through fetch_user() yet, so set these here
   $game = check_plain(arg(0));
  $get_phoneid = '_' . $game . '_get_phoneid';
  $phone_id = $get_phoneid();
  $arg2 = check_plain(arg(2));

  db_set_active('game_' . $game);

  echo <<< EOF
  And it came to pass that

  Error E-{$error_code}

  happened for user

  {$phone_id}.

  Please report this to <strong>support@cheek.com</strong>.
 
EOF;

  db_set_active('default');
