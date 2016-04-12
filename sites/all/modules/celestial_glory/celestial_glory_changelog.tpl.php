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
    v2.0.6, 12 Apr 2016
  </div>
  <ul>
    <li>
      Raised the money limit for each piece of luck spent.
    </li>
  </ul>

  <div class="subtitle">
    v2.0.5, 12 Apr 2016
  </div>
  <ul>
    <li>
      Altered &quot;Run someone out of the region&quot; to use only 1/3 of
      the level of the user for actions, with a max of 25 actions.
    </li>
  </ul>

  <div class="subtitle">
    v2.0.4, 11 Apr 2016
  </div>
  <ul>
    <li>
      Fixed luck purchases on Apple devices, re-added game to Apple Store.
    </li>
    <li>
      Added a &quot;Continue&quot; button to the top of the debates result
      screen,
      as I was tired of having to scroll down the entire page each time
      I debated someone.
    </li>
  </ul>

  <div class="subtitle">
    v2.0.3, 09 Apr 2016
  </div>
  <ul>
    <li>
      Support for 411dip-width screens, such as the Galaxy Note 5.
    </li>
  </ul>

  <div class="subtitle">
    v2.0.2, 09 Apr 2016
  </div>
  <ul>
    <li>
      Added &quot;Get challenge results&quot; action (shows detailed results of
      the last five office challenges against you)
    </li>
    <li>
      Minor formatting changes &mdash; added commas on some numbers on the
      Profile page.
    </li>
  </ul>

  <div class="subtitle">
    v2.0.1, 07 Apr 2016
  </div>
  <ul>
    <li>
      Fix minor display bug &mdash; menus were shown in the center of the
      screen on some devices
    </li>
  </ul>

  <div class="subtitle">
    v2.0.0, 06 Apr 2016
  </div>
  <ul>
    <li>
      Merchant Quests!!!
    </li>
  </ul>

  <div class="subtitle">
    v1.94.3, 30 Mar 2016
  </div>
  <ul>
    <li>
      Added support for 100-energy Quests
    </li>
  </ul>

  <div class="subtitle">
    v1.94.2, 19 Feb 2016
  </div>
  <ul>
    <li>
      Completed Love in the Desert quest group
    </li>
    <li>
      Added two and three-heart items
    </li>
  </ul>

  <div class="subtitle">
    v1.94.1, 18 Feb 2016
  </div>
  <ul>
    <li>
      Changed support email address to <strong>zipport@ziquid.com</strong>
    </li>
    <li>
      Added more words to profanity filter
    </li>
  </ul>

  <div class="subtitle">
    v1.94, 06 Feb 2016
  </div>
  <ul>
    <li>
      New side quests group: Love in the Desert
    </li>
  </ul>

  <div class="subtitle">
    v1.93, 17 Dec 2015
  </div>
  <ul>
    <li>
      New quests: Added the &quot;Your father asks the Lord&quot;, &quot;The
      Lord tells your father&quot;, and &quot;Inspecting the Liahona&quot;
      quests as the third, fourth, and fifth quests in the &quot;Food and Faith,
      Pt. 2&quot; quest group, with their associated loot.
    </li>
    <li>
      New supplies: Faith, Diligence, and Heed.
    </li>
  </ul>

  <div class="subtitle">
    v1.92, 12 Dec 2015
  </div>
  <ul>
    <li>
      New quest: Added the &quot;And ask your father&quot; quest as the second
      quest in the &quot;Food and Faith, Pt. 2&quot; quest group
    </li>
    <li>
      Bugfix: Fixed an issue where previously purchased/looted supplies would
      not show in your inventory if they could not be purchased/looted
      currently.
    </li>
    <li>
      Bugfix: Fixed an issue where you could try to sell items even if you had
      none.
    </li>
  </ul>

  <div class="subtitle">
    v1.91.3, 10 Dec 2015
  </div>
  <ul>
    <li>
      New quest: Added the &quot;You make a bow&quot; quest, with its associated
      supplies and loot, as the first quest in the &quot;Food and Faith,
      Pt. 2&quot; quest group
    </li>
    <li>
      New supplies: Fine Steel Bow, Nephi's Fine Steel Bow, Sling, and
      Wooden Bow
    </li>
  </ul>

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
      Formatted the supplies cost amounts so that they are easier to read
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
