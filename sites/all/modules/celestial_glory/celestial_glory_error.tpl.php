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
  echo <<< EOF
echo <<< EOF
<div class="title">
<img src="/sites/default/files/images/{$game}_lehi_large.png"/>
</div>
<p>&nbsp;</p>
<div class="welcome">
  <div class="wise_old_man_large">
  </div>
  <p>A wizened old man comes up to you.&nbsp; You recognize him as one of the
    elders of the city.</p>
  <p class="second">I've been watching you for some time,
    and I like what I see.&nbsp; I think you have the potential for
    greatness.&nbsp; Maybe you could even lead this city.</p>
  <p class="second">Could you?</p>
  <div class="subtitle">
    How to play
  </div>
  <ul>
    <li>Finish missions to earn skills and influence</li>
    <li>Cooperate and compete with other players to achieve your goals</li>
    <li>Purchase equipment and businesses to win votes</li>
    <li>Become a city elder, political party leader, and then mayor</li>
  </ul>
</div>
<div class="subtitle">
  <a href="/$game/quests/$arg2">
    <img src="/sites/default/files/images/{$game}_continue.png"/>
  </a>
</div>
EOF;
  db_set_active('default');
