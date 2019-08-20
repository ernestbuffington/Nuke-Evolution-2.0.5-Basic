
<h1>{L_TITLE}</h1>

<p>{L_EXPLAIN}</p>

<form action="" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_EDIT_TOPIC_TYPE}</th>
	</tr>
  <tr>
		<td class="row1"><span class="gen">{L_TOPIC_TYPE_NAME}</span></td>
    <td class="row2" width="60%">&nbsp;&nbsp;<input class="post" type="text" size="25" maxlength="50" name="tt_name" value="{TOPIC_TYPE_NAME}" /></td>
	</tr>
  <tr>
		<td class="row1"><span class="gen">{L_TOPIC_TYPE_COLOR}</span></td>
    <td class="row2">#<input class="post" type="text" size="6" maxlength="6" name="tt_color" value="{TOPIC_TYPE_COLOR}" /></td>
	</tr>
  <tr>
		<td class="row1"><span class="gen">{L_TOPIC_TYPE_AUTH}</span></td>
    <td class="row2">&nbsp;&nbsp;{TOPIC_TYPE_AUTH}</td>
	</tr>
  <tr>
		<td class="row1"><span class="gen">{L_TOPIC_TYPE_ACTIVE}</span><br /><span class="gensmall">{L_ACTIVE_EXPLAIN}</span></td>
    <td class="row2">&nbsp;&nbsp;<input type="radio" name="tt_active" value="1" {S_ACTIVE_YES} />{L_YES}&nbsp;&nbsp;<input type="radio" name="tt_active" value="0" {S_ACTIVE_NO} /> {L_NO}</td>
	</tr>
  <tr>
		<td class="row1"><span class="gen">{L_TOPIC_TYPE_FOLDER}</span><br /><span class="gensmall">{L_FOLDER_EXPLAIN}</span></td>
    <td class="row2">&nbsp;&nbsp;<input class="post" type="text" size="50" maxlength="255" name="tt_folder" value="{TOPIC_TYPE_FOLDER}" /></td>
	</tr>
  <tr>
		<td class="row1"><span class="gen">{L_TOPIC_TYPE_FOLDER_NEW}</span><br /><span class="gensmall">{L_FOLDER_NEW_EXPLAIN}</span></td>
    <td class="row2">&nbsp;&nbsp;<input class="post" type="text" size="50" maxlength="255" name="tt_folder_new" value="{TOPIC_TYPE_FOLDER_NEW}" /></td>
	</tr>
  <tr>
		<td class="catBottom" colspan="2" align="center">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>
</table>
</form>