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
    v1.91.2, 7 Dec 2015
  </div>
  <ul>
    <li>
      Added loot for the &quot;Go Hunting&quot; quest
    </li>
    <li>
      Added a question completion bonus for finishing the &quot;Food and Faith,
      Pt.1&quot; quest group
    </li>
    <li>
      Formatted the equipment cost amounts so that they are easier to read
    </li>
  </ul>

  <div class="subtitle">
    v1.91.1, 7 Dec 2015
  </div>
  <ul>
    <li>
      Gave Merchants an extra 1% Daily Bonus
    </li>
    <li>
      Formatted Daily Bonus amount so that it is easier to read
    </li>
  </ul>

  <div class="subtitle">
    v1.91, 27 Nov 2015
  </div>
  <ul>
    <li>
      Support for Android 6
    </li>
  </ul>

  <div class="subtitle">
    v1.90.3, 29 Aug 2015
  </div>
  <ul>
    <li>
      Added message box to 'All' tab on home page
    </li>
  </ul>

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
