<?php

  global $game, $phone_id;

  $fetch_user = '_' . arg(0) . '_fetch_user';
  $fetch_header = '_' . arg(0) . '_header';

  $game_user = $fetch_user();
  $fetch_header($game_user);
  include_once(drupal_get_path('module', $game) . '/game_defs.inc');
  $arg2 = check_plain(arg(2));

  echo <<< EOF
<div class="news">
  <a href="/$game/help/$arg2" class="button">Help</a>
  <a href="/$game/changelog/$arg2" class="button active">Changelog</a>
</div>

<div class="help">
  <div class="title">
  Celestial Glory Changelog
  </div>

  <div class="subtitle">
    v1.90.2, 10 Aug 2015
  </div>
  <ul>
    <li>
      Made the home page news roll filter fancier
    </li>
  </ul>

  <div class="subtitle">
    v1.90.1, 10 Aug 2015
  </div>
  <ul>
    <li>
      Added a few more items to the banned words list
    </li>
    <li>
      Removed the 'Forum' link
    </li>
    <li>
      Added a version string on the home page
    </li>
    <li>
      Centered the &quot;News&quot; buttons on the home page
    </li>
  </ul>

  <div class="subtitle">
    v1.90.0, 08 Aug 2015
  </div>
  <ul>
    <li>
      Added this changelog
    </li>
    <li>
      Added <strong>Merchant Comprehension</strong> as a second-round bonus
      for Quest Group 3, <strong>Retrieving the Records, Pt. 2</strong>
    </li>
  </ul>



</div>
EOF;

  db_set_active('default');
