
<h1>{L_TITLE}</h1>

<p>{L_EXPLAIN}</p>

<form action="" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
	<tr>
		<th class="thHead" colspan="7">{L_TOPIC_TYPE_GESTION}</th>
	</tr>
  <tr>
    <td class="catLeft" width="30%" align="center" colspan="2"><span class="cattitle">{L_TOPIC_TYPE_NAME}</span></td>
    <td class="catRight" width="70%" align="center" colspan="5"><span class="cattitle">{L_TOPIC_TYPE_COLOR}</span></td>
  </tr>
  <tr height="50">
    <td class="row1" width="30%" align="center" colspan="2"><span class="gen"><b>{L_ANNOUNCE}</b></span></td>
    <td class="row1" width="70%" align="center" colspan="5">{L_ACTUAL_COLOR}{ANNOUNCE_COLOR}<br /><br />#<input class="post" type="text" size="6" maxlength="6" name="announce_color" /> <input type="submit" class="liteoption"  name="submit_announce_color" value="{L_CHANGE_COLOR}" /></td>
  </tr>
  <tr height="50">
    <td class="row1" width="30%" align="center" colspan="2"><span class="gen"><b>{L_STICKY}</b></span></td>
    <td class="row1" width="70%" align="center" colspan="5">{L_ACTUAL_COLOR}{STICKY_COLOR}<br /><br />#<input class="post" type="text" size="6" maxlength="6" name="sticky_color" /> <input type="submit" class="liteoption"  name="submit_sticky_color" value="{L_CHANGE_COLOR}" /></td>
  </tr>
  <tr height="50">
    <td class="row1" width="30%" align="center" colspan="2"><span class="gen"><b>{L_GLOBAL}</b></span></td>
    <td class="row1" width="70%" align="center" colspan="5">{L_ACTUAL_COLOR}{GLOBAL_COLOR}<br /><br />#<input class="post" type="text" size="6" maxlength="6" name="global_color" /> <input type="submit" class="liteoption"  name="submit_global_color" value="{L_CHANGE_COLOR}" /></td>
  </tr>
  <tr>
    <td class="catLeft" width="30%" align="center" colspan="2"><span class="cattitle">{L_TOPIC_TYPE_NAME}</span></td>
    <td class="cat" width="15%" align="center"><span class="cattitle">{L_TOPIC_TYPE_AUTH}</span></td>
    <td class="cat" width="20%" align="center"><span class="cattitle">{L_TOPIC_TYPE_COLOR}</span></td>
    <td class="catRight" width="35%" colspan="3" align="center"><span class="cattitle">{L_TOPIC_TYPE_ORDER}</span></td>
  </tr>
  <!-- BEGIN topic_loop -->
  <tr height="40">
    <td class="row1" width="20" align="center"><b>{topic_loop.TOPIC_TYPE_FOLDER}</b></td>
		<td class="row1" align="center" width="25%"><b>{topic_loop.TOPIC_TYPE}</b></td>
    <td class="row1" width="15%" align="center">{topic_loop.TOPIC_TYPE_AUTH}</td>
		<td class="row1" width="20%" align="center"><font color="{topic_loop.TOPIC_COLOR}">{topic_loop.TOPIC_COLOR}</font></td>
    <td class="row1" width="15%" align="center">{topic_loop.TOPIC_ORDER}</td>
    <td class="row1" width="10%" align="center"><a href="{topic_loop.U_TYPE_EDIT}">{L_TYPE_EDIT}</a></td>
    <td class="row1" width="10%" align="center"><a href="{topic_loop.U_TYPE_DEL}">{L_TYPE_DEL}</a></td>
	</tr>
	<!-- END topic_loop -->
  <tr>
		<td colspan="7" class="row2"><input class="post" type="text" name="add_topic_type" /> <input type="submit" class="liteoption"  name="add_topic_type_submit" value="{L_ADD_TOPIC_TYPE}" /></td>
	</tr>
</table>
</form>