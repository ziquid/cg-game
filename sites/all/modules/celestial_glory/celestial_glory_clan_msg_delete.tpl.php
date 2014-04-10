<?php

  global $game, $phone_id;

  $fetch_user = '_' . arg(0) . '_fetch_user';
  $fetch_header = '_' . arg(0) . '_header';

  $game_user = $fetch_user();
  include_once(drupal_get_path('module', $game) . '/game_defs.inc');
  $arg2 = check_plain(arg(2));

// check permissions
  $sql = 'select fkey_clans_id, is_clan_leader from clan_members
    where fkey_users_id = %d;';
  $result = db_query($sql, $game_user->id);
  $clan = db_fetch_object($result);

  $sql = 'select fkey_neighborhoods_id as fkey_clans_id
    from clan_messages
    where id = %d;';
  $result = db_query($sql, $msg_id);
  $msg = db_fetch_object($result);

  if ($clan->fkey_clans_id != $msg->fkey_clans_id) { // not same clan?  uhoh!
// FIXME jwc 10Apr2014 -- deduct karma
    drupal_goto($game . '/home/' . $arg2);
  }

  if (!$clan->is_clan_leader) { // not clan leader?  uhoh!
// FIXME jwc 10Apr2014 -- deduct karma
    drupal_goto($game . '/home/' . $arg2);
  }

  $sql = 'delete from clan_messages where id = %d;';
  $result = db_query($sql, $msg_id);
  drupal_goto($game . '/clan_msg/' . $arg2 . '/' . $clan->fkey_clans_id);
