<?php

  global $game, $phone_id;

  $fetch_user = '_' . arg(0) . '_fetch_user';
  $fetch_header = '_' . arg(0) . '_header';

  $game_user = $fetch_user();
  $fetch_header($game_user);
  include_once(drupal_get_path('module', $game) . '/game_defs.inc');
  $arg2 = check_plain(arg(2));

  echo <<< EOF
<div class="help">
  <div class="title">
    Event Prize List
  </div>

  <div class="subtitle">
    1st Place
  </div>
  <ul>
    <li>
      20 Perfect Amethyst (110 attack, defense, and courage)
    </li>
    <li>
      20 Luck
    </li>
  </ul>

</div>
EOF;

  db_set_active('default');
