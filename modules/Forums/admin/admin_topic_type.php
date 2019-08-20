<?php

/***************************************************************************
 *                     admin_topic_type.php [ Advanced Topic Type MOD ]
 *                            -------------------
 *   Début                : 21-08-2004 
 *   Auteur               : Poupoune < poupoune@phpbb-fr.com >
 *   Contact              : http://php-tools.org/poupoune/
 *
 ***************************************************************************/

define('IN_PHPBB', true);

if( !empty($setmodules) )
{
        $file = basename(__FILE__);
        $module['admin_topic_type']['Configuration'] = "$file";
        return;
}

//
// Let's set the root dir for phpBB
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX, $nukeuser);
init_userprefs($userdata);

// 
// On récupère les données de la base
$sql = "SELECT * FROM ". TOPIC_ADD_TYPE_TABLE ." 
  WHERE topic_type_name <> 'announce'
  AND topic_type_name <> 'sticky'
  AND topic_type_name <> 'global'
  ORDER BY topic_type_order DESC";
if ( !($result = $db->sql_query($sql)) )
{
  message_die(GENERAL_ERROR, 'Could not get topic type info', '', __LINE__, __FILE__, $sql);
}

//
// On affiche les types de topics s'ils existent
while( $row = $db->sql_fetchrow($result) )
{ 
  switch( $row['topic_type_auth'] )
  {
    case ANONYMOUS : $auth = $lang['Forum_ALL'];
      break;
    case USER : $auth = $lang['Forum_REG'];
      break;
    case MOD : $auth = $lang['Forum_MOD'];
      break;
    case ADMIN : $auth = $lang['Forum_ADMIN']; 
  }
  
  if( $row['topic_type_image'] != '' )
  {
    $tt_image = $phpbb_root_path . $row['topic_type_image'] ;
  }
  else
  {
    $tt_image = $phpbb_root_path . 'templates/subSilver/images/folder.gif';
  }
  
  if( $row['topic_type_active'] )
  {
    $s_order = '<a href="'. append_sid('admin_topic_type.php?mode=up&id='. intval($row['topic_type_id'])) .'">'. $lang['Move_up'] .'</a><br /><a href="'. append_sid('admin_topic_type.php?mode=down&id='. intval($row['topic_type_id'])) .'">'. $lang['Move_down'] .'</a>';
  }
  else
  {
    $s_order = $lang['Not_active'];
  }
    
  $template->assign_block_vars('topic_loop',array(
    'TOPIC_TYPE' => stripslashes(trim($row['topic_type_name'])),
    'TOPIC_TYPE_AUTH' => $auth,
    'TOPIC_ORDER' => $s_order,
    'TOPIC_COLOR' => '#'.(trim($row['topic_type_color'])),
    'TOPIC_TYPE_FOLDER' => '<img src="'. $tt_image .'" border="0" />',
    'U_TYPE_EDIT' => append_sid('admin_topic_type.php?mode=edit&id='. intval($row['topic_type_id'])),        
    'U_TYPE_DEL' => append_sid('admin_topic_type.php?mode=delete&id='. intval($row['topic_type_id']))        
  ));
}
  
$sql = "SELECT t1.topic_type_color AS announce_color, t2.topic_type_color AS sticky_color, t3.topic_type_color as global_color
  FROM ". TOPIC_ADD_TYPE_TABLE ." t1, ". TOPIC_ADD_TYPE_TABLE ." t2, ". TOPIC_ADD_TYPE_TABLE ." t3
  WHERE t1.topic_type_name = 'announce'
  AND t2.topic_type_name = 'sticky'
  AND t3.topic_type_name = 'global'";
  
$result = $db->sql_query($sql);

while( $row = $db->sql_fetchrow($result) )
{
  $announce_color = '#'.$row['announce_color'];
  $sticky_color = '#'.$row['sticky_color'];
  $global_color = '#'.$row['global_color'];
}  

$template->set_filenames(array(
  "body" => "admin/topic_type_body.tpl")
);

$template->assign_vars( array(
  'L_TOPIC_TYPE_GESTION' => $lang['Topic_type_gestion'],
  'L_TOPIC_TYPE_NAME' => $lang['Topic_type_name'],
  'L_TOPIC_TYPE_AUTH' => $lang['Permissions'],
  'L_TOPIC_TYPE_COLOR' => $lang['Color'],
  'L_TOPIC_TYPE_ORDER' => $lang['Topic_type_order'],
  'L_TYPE_DEL' => $lang['Delete'],
  'L_TYPE_EDIT' => $lang['Edit'],
  'L_TITLE' => $lang['Topic_type_gestion'],
  'L_EXPLAIN' => $lang['Topic_type_gestion_explain'],
  'L_ADD_TOPIC_TYPE' => $lang['Add_topic_type'],
  'L_ANNOUNCE' => $lang['tt_Announce'],
  'L_STICKY' => $lang['Sticky'],
  'L_GLOBAL' => $lang['Global'],
  'L_ACTUAL_COLOR' => $lang['Actual_color'],
  'ANNOUNCE_COLOR' => '<font color="'. $announce_color .'"><b>'. $announce_color .'</b></font>',
  'STICKY_COLOR' => '<font color="'. $sticky_color .'"><b>'. $sticky_color .'</b></font>',
  'GLOBAL_COLOR' => '<font color="'. $global_color .'"><b>'. $global_color .'</b></font>',
  'L_CHANGE_COLOR' => $lang['Change_color']
));  
$mode='add';

if(isset( $HTTP_POST_VARS['submit_announce_color'] )||isset( $HTTP_POST_VARS['submit_sticky_color'] ) || isset( $HTTP_POST_VARS['submit_global_color']) )
{
  if(isset( $HTTP_POST_VARS['submit_announce_color'] ))
  {
    $update = "SET topic_type_color = '". $HTTP_POST_VARS['announce_color'] ."'
    WHERE topic_type_name = 'announce'";
  }
  
  if(isset( $HTTP_POST_VARS['submit_sticky_color'] ))
  {
    $update = "SET topic_type_color = '". $HTTP_POST_VARS['sticky_color'] ."'
    WHERE topic_type_name = 'sticky'";
  }
  if(isset( $HTTP_POST_VARS['submit_global_color'] ))
  {
    $update = "SET topic_type_color = '". $HTTP_POST_VARS['global_color'] ."'
    WHERE topic_type_name = 'global'";
  }
  
  $sql = "UPDATE ". TOPIC_ADD_TYPE_TABLE ." $update ";
    
  $db->sql_query($sql); 
  $mess = $lang['tt_updated'] . "<br /><br />" . sprintf($lang['Click_return_admintopictype'], "<a href=\"" . append_sid("admin_topic_type.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

  message_die(GENERAL_MESSAGE, $mess);
}   


else if( isset( $HTTP_POST_VARS['add_topic_type'] ))
{
  $auth_toggle = '<select name="topic_type_auth">';
  
  for( $i = ANONYMOUS ; $i < MOD+1 ; $i++ )
  {
    $auth_toggle .= '<option value="'. $i .'">';
      
    switch( $i )
    {
      case ANONYMOUS : $auth_name = $lang['Forum_ALL'];
         break;
      case USER : $auth_name = $lang['Forum_REG'];
         break;
      case MOD : $auth_name = $lang['Forum_MOD'];
         break;
      case ADMIN : $auth_name = $lang['Forum_ADMIN'];
         break;   
    }
     
    $auth_toggle .= $auth_name .'</option>';
  }
  $auth_toggle .= '</select>';
  
  $template->set_filenames(array(
    "body" => "admin/admin_edit_topic_type.tpl")
  );  
      
  $template->assign_vars( array(
    'L_EDIT_TOPIC_TYPE' => $lang['configuration'],
    'L_TITLE' => $lang['edit_topic_type'],
    'L_EXPLAIN' => $lang['edit_topic_type_explain'],
    'TOPIC_TYPE_NAME' => trim(htmlspecialchars($HTTP_POST_VARS['add_topic_type'])),
    'L_TOPIC_TYPE_AUTH' => $lang['Permissions'],
    'TOPIC_TYPE_AUTH' => $auth_toggle,
    'TOPIC_TYPE_COLOR' => '',
    'L_TOPIC_TYPE_NAME' => $lang['Topic_type_name'],
    'L_TOPIC_TYPE_COLOR' => $lang['Color'],
    'L_TOPIC_TYPE_ACTIVE' => $lang['topic_type_active'],
    'L_ACTIVE_EXPLAIN' => $lang['active_explain'],
    'S_ACTIVE_YES' => 'checked="checked"',
    'S_ACTIVE_NO' => '',
    'L_YES' => $lang['Yes'],
    'L_NO' => $lang['No'],
    'L_TOPIC_TYPE_FOLDER' => $lang['topic_type_folder'],
    'TOPIC_TYPE_FOLDER' => '',
    'L_FOLDER_EXPLAIN' => $lang['folder_explain'],
    'L_TOPIC_TYPE_FOLDER_NEW' => $lang['topic_type_folder_new'],
    'TOPIC_TYPE_FOLDER_NEW' => '',
    'L_FOLDER_NEW_EXPLAIN' => $lang['folder_new_explain'],
    'L_SUBMIT' => $lang['Submit'],
    'L_RESET' => $lang['Reset']
  )); 
}

//
// Changement d'ordre
$tt_id = intval($HTTP_GET_VARS['id']);

if( isset($HTTP_GET_VARS['mode']) )
{
  $sql = "SELECT * FROM ". TOPIC_ADD_TYPE_TABLE ."
    WHERE topic_type_id = $tt_id";
  
  if ( !($result = $db->sql_query($sql)) )
  {
    message_die(GENERAL_ERROR, 'Could not get topic type info', '', __LINE__, __FILE__, $sql);
  }
  
  while( $first = $db->sql_fetchrow($result) )
  {   
    if( $HTTP_GET_VARS['mode'] == 'delete' )
    {
      $sql_del = "DELETE FROM ". TOPIC_ADD_TYPE_TABLE ."
        WHERE topic_type_id = $tt_id";

      if ( !($result_del = $db->sql_query($sql_del)) )
      {
        message_die(GENERAL_ERROR, 'Error in deleting topic type', '', __LINE__, __FILE__, $sql_del);
      }
    
      $sql_updates = "UPDATE ". TOPIC_ADD_TYPE_TABLE ."
        SET topic_type_order = topic_type_order-1
        WHERE topic_type_order > ". $first['topic_type_order'] ;
      $db->sql_query($sql_updates);  
      
      $update_topics1 = "UPDATE ". TOPICS_TABLE ."
        SET topic_type = '". POST_NORMAL ."' 
        WHERE topic_type = '". intval($first['topic_type_order']+POST_ADD_TYPE) ."'";
        
      if( !$db->sql_query($update_topics1) )
      {
        message_die(GENERAL_ERROR, 'Could not update topics', '' , __LINE__, __FILE__, $update_topics1);
      }
        
      if( count($row) == 1 )
      {
        $update_topics2 = "UPDATE ". TOPICS_TABLE ." 
          SET topic_type = topic_type-1
          WHERE topic_type > '". intval($first['topic_type_order']+POST_ADD_TYPE) ."'";
          
        if( !$db->sql_query($update_topics2) )
        {
          message_die(GENERAL_ERROR, 'Could not update topics', '' , __LINE__, __FILE__, $update_topics2);
        }
      }    
      
      $message = $lang['tt_Deleted'] . "<br /><br />" . sprintf($lang['Click_return_admintopictype'], "<a href=\"" . append_sid("admin_topic_type.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
    
      message_die(GENERAL_MESSAGE, $message);
    }
    elseif( $HTTP_GET_VARS['mode'] == 'edit')
    {
      $mode = 'edit';
      
      $auth_toggle = '<select name="topic_type_auth">';
  
      for( $i = ANONYMOUS ; $i < MOD+1 ; $i++ )
      {
        $selected = ( $first['topic_type_auth'] == $i ) ? ' selected' : '';
        
        $auth_toggle .= '<option value="'. $i .'"'. $selected .'>';
      
        switch( $i )
        {
          case ANONYMOUS : $auth_name = $lang['Forum_ALL'];
            break;
          case USER : $auth_name = $lang['Forum_REG'];
            break;
          case MOD : $auth_name = $lang['Forum_MOD'];
            break;
          case ADMIN : $auth_name = $lang['Forum_ADMIN'];
            break;   
        }
     
        $auth_toggle .= $auth_name .'</option>';
      }
      $auth_toggle .= '</select>';
      
      $s_active_yes = ( $first['topic_type_active'] ) ? 'checked="checked"' : '' ;
      $s_active_no = ( !$first['topic_type_active'] ) ? 'checked="checked"' : '' ;
      
      $template->set_filenames(array(
        "body" => "admin/admin_edit_topic_type.tpl")
      );  
      
      $template->assign_vars( array(
        'L_EDIT_TOPIC_TYPE' => $lang['configuration'],
        'L_TITLE' => $lang['edit_topic_type'],
        'L_EXPLAIN' => $lang['edit_topic_type_explain'],
        'TOPIC_TYPE_NAME' => stripslashes($first['topic_type_name']),
        'L_TOPIC_TYPE_AUTH' => $lang['Permissions'],
        'TOPIC_TYPE_AUTH' => $auth_toggle,
        'TOPIC_TYPE_COLOR' => $first['topic_type_color'],
        'L_TOPIC_TYPE_NAME' => $lang['Topic_type_name'],
        'L_TOPIC_TYPE_COLOR' => $lang['Color'],
        'L_TOPIC_TYPE_ACTIVE' => $lang['topic_type_active'],
        'L_ACTIVE_EXPLAIN' => $lang['active_explain'],
        'S_ACTIVE_YES' => $s_active_yes,
        'S_ACTIVE_NO' => $s_active_no,
        'L_YES' => $lang['Yes'],
        'L_NO' => $lang['No'],
        'L_TOPIC_TYPE_FOLDER' => $lang['topic_type_folder'],
        'L_FOLDER_EXPLAIN' => $lang['folder_explain'],
        'TOPIC_TYPE_FOLDER' => stripslashes($first['topic_type_image']),
        'L_TOPIC_TYPE_FOLDER_NEW' => $lang['topic_type_folder_new'],
        'TOPIC_TYPE_FOLDER_NEW' => stripslashes($first['topic_type_image_new']),
        'L_FOLDER_NEW_EXPLAIN' => $lang['folder_new_explain'],
        'L_SUBMIT' => $lang['Submit'],
        'L_RESET' => $lang['Reset']
      ));
      
    }
    else
    {
      switch( $HTTP_GET_VARS['mode'] )
      {
        case 'up' : $order = 1;      
          $sql_order = "MAX(topic_type_order) AS max_order";
          $mess = $lang['already_first'];
          break;
        case 'down' :  $order = -1;
          $sql_order = "MIN(topic_type_order) AS min_order ";
          $mess = $lang['already_last'];
      }    
    
      $sql_max = "SELECT $sql_order
        FROM ". TOPIC_ADD_TYPE_TABLE ."
        WHERE topic_type_order <> -1";
      
      if( !$result_max = $db->sql_query($sql_max) )
		  {
		    message_die(GENERAL_ERROR, "Couldn't get order number from topic type table", "", __LINE__, __FILE__, $sql_max);
		  }
			
      $row_max = $db->sql_fetchrow($result_max);  
    
      if( $first['topic_type_order'] == $row_max['max_order'] || $first['topic_type_order'] == $row_max['min_order'] )
      {
        message_die(GENERAL_MESSAGE, $mess);
      }
      else
      {  
        $id = $first['topic_type_id'];
    
        $sql2 = "SELECT * 
          FROM ". TOPIC_ADD_TYPE_TABLE ."
          WHERE topic_type_order = ". intval($first['topic_type_order']+($order)) ;
    
        if ( !($result2 = $db->sql_query($sql2)) )
        {
          message_die(GENERAL_ERROR, 'Could not get topic type info', '', __LINE__, __FILE__, $sql2);
        }
    
        while( $second = $db->sql_fetchrow($result2) )
        {
          $sql_update1 = "UPDATE ". TOPIC_ADD_TYPE_TABLE ."
            SET topic_type_order = ". $second['topic_type_order'] ."
            WHERE topic_type_id = $id";
            
          if( !$db->sql_query($sql_update1) )
          {
            message_die(GENERAL_ERROR, 'Could not update topic type order', '', __LINE__, __FILE__, $sql_update1);
          } 
          
          $sql_update2 = "UPDATE ". TOPIC_ADD_TYPE_TABLE ."
            SET topic_type_order = ". intval($second['topic_type_order']-($order)) ."
            WHERE topic_type_id = ". $second['topic_type_id'];
            
          if( !$db->sql_query($sql_update2) )
          {
            message_die(GENERAL_ERROR, 'Could not update topic type order', '', __LINE__, __FILE__, $sql_update2);
          }
          
          $update_posts1 = "SELECT topic_id 
            FROM ". TOPICS_TABLE ."
            WHERE topic_type = ". intval($second['topic_type_order']-($order)+POST_ADD_TYPE);
          
          if( !$req_up1 = $db->sql_query($update_posts1) )
          {
            message_die(GENERAL_ERROR, 'Could not get topic info', '', __LINE__, __FILE__, $update_posts1);
          }
          
          $update_posts2 = "UPDATE ". TOPICS_TABLE ."
            SET topic_type = ". intval($second['topic_type_order']-($order)+POST_ADD_TYPE) ."
            WHERE topic_type = " . intval($second['topic_type_order']+POST_ADD_TYPE);  
            
          if( !$db->sql_query($update_posts2) )
          {
            message_die(GENERAL_ERROR, 'Could not get topic info', '', __LINE__, __FILE__, $update_posts2);
          }  
            
          while( $postrow = $db->sql_fetchrow($req_up1) )
          {
            $update_posts3 = "UPDATE ". TOPICS_TABLE ."
              SET topic_type = ". intval($second['topic_type_order']+POST_ADD_TYPE) ."
              WHERE topic_id = ". $postrow['topic_id'] ;
              
            if( !$db->sql_query($update_posts3) )
            {
              message_die(GENERAL_ERROR, 'Could not get topic info', '', __LINE__, __FILE__, $update_posts3);
            }    
          }          
        }
      
        $mess = $lang['tt_updated'] . "<br /><br />" . sprintf($lang['Click_return_admintopictype'], "<a href=\"" . append_sid("admin_topic_type.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

        message_die(GENERAL_MESSAGE, $mess);
      }        
    }  
  }
}

if( isset( $HTTP_POST_VARS['submit'] ) )
{
  switch( $mode )
  {
    case 'edit' : $id = intval( $HTTP_GET_VARS['id'] );
      
      $sql = "SELECT topic_type_order FROM ". TOPIC_ADD_TYPE_TABLE ."
        WHERE topic_type_id = $id";
        
      if( !$result = $db->sql_query($sql) )
      {
        message_die(GENERAL_ERROR, 'Could not get topic type info', '', __LINE__, __FILE__, $sql); 
      }   
      
      $tt_row = $db->sql_fetchrow($result) ;
      
      $sql_update = "UPDATE ". TOPIC_ADD_TYPE_TABLE ."
        SET topic_type_name = '". htmlspecialchars(addslashes(trim($HTTP_POST_VARS['tt_name']))) ."', topic_type_color = '". ((!empty($HTTP_POST_VARS['tt_color'])) ? (trim($HTTP_POST_VARS['tt_color'])) : '000000') ."', topic_type_auth = '". intval( $HTTP_POST_VARS['topic_type_auth'] ) ."', topic_type_active = '". $HTTP_POST_VARS['tt_active'] ."', topic_type_image = '". trim(addslashes( $HTTP_POST_VARS['tt_folder'] )) ."', topic_type_image_new = '". trim(addslashes( $HTTP_POST_VARS['tt_folder_new'] )) ."'
        WHERE topic_type_id = $id";
      if( !$db->sql_query($sql_update) )
      {
        message_die(GENERAL_ERROR, 'Could not update topic type', '', __LINE__, __FILE__, $sql_update); 
      }  
      
      $update_posts = "UPDATE ". TOPICS_TABLE ."
        SET topic_type_active = '". $HTTP_POST_VARS['tt_active'] ."'
        WHERE topic_type = ". intval($tt_row['topic_type_order']+POST_ADD_TYPE) ; 
        
      if( !$db->sql_query($update_posts) )
      {
        message_die(GENERAL_ERROR, 'Could not update topic', '', __LINE__, __FILE__, $update_posts); 
      }   
        
      $message = $lang['tt_updated'] . "<br /><br />" . sprintf($lang['Click_return_admintopictype'], "<a href=\"" . append_sid("admin_topic_type.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
      break;
      
    case 'add' :
      $sql_max = "SELECT MAX(topic_type_order) AS max_order, MAX(topic_type_id) AS max_id
        FROM ". TOPIC_ADD_TYPE_TABLE ;
          
        if( !$result_max = $db->sql_query($sql_max) )
		    {
		      message_die(GENERAL_ERROR, "Couldn't get order number from topic_type table", "", __LINE__, __FILE__, $sql);
		    }
			
        $row_max = $db->sql_fetchrow($result_max);    
          
        $sql_update = "INSERT INTO ". TOPIC_ADD_TYPE_TABLE ." (topic_type_name, topic_type_id, topic_type_auth, topic_type_active, topic_type_order, topic_type_color, topic_type_image, topic_type_image_new)
          VALUES ( '". htmlspecialchars(addslashes(trim($HTTP_POST_VARS['tt_name']))) ."', '". intval($row_max['max_id']+1) ."', '". intval( $HTTP_POST_VARS['topic_type_auth'] ) ."', '". $HTTP_POST_VARS['tt_active'] ."', '". intval($row_max['max_order']+1) ."', '". ((!empty($HTTP_POST_VARS['tt_color'])) ? (trim($HTTP_POST_VARS['tt_color'])) : '000000') ."', '". trim(addslashes($HTTP_POST_VARS['tt_folder'])) ."', '". trim(addslashes($HTTP_POST_VARS['tt_folder_new'])) ."')";

        if( !$db->sql_query($sql_update) )
        {
          message_die(GENERAL_ERROR, 'Error in adding new topic type', '', __LINE__, __FILE__, $sql_update); 
        }  
        
        $message = $lang['tt_added'] . "<br /><br />" . sprintf($lang['Click_return_admintopictype'], "<a href=\"" . append_sid("admin_topic_type.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
        break;
  }
  
  message_die(GENERAL_MESSAGE, $message);
}  


$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>