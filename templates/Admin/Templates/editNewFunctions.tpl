<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       editNewFunctions.tpl                                        ##
##  Developed by:  velhbxtyrj                                                  ##
##  License:       Travianz Project                                            ##
##  Copyright:     Travianz (c) 2010-2014. All rights reserved.                ##
##                                                                             ##
#################################################################################
if (!isset($_SESSION)) {
 session_start();
}
if($_SESSION['access'] < 9) die(ACCESS_DENIED_ADMIN);
?>
<h2><center><?php echo SERV_CONFIG ?></center></h2>
	<form action="../GameEngine/Admin/Mods/editNewFunctions.php" method="POST">
		<input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
		<br />
		<table id="profile" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th colspan="2">Edit New Mechanics and Functions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="80%">Display oasis in profile <em class="tooltip">?<span class="classic">Enable (Disable) the display of oases of each village in the player profile</span></em></td>
					<td width="20%">
						<select name="new_functions_oasis">
							<option value="True" <?php if(NEW_FUNCTIONS_OASIS == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_OASIS == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alliance invitation message <em class="tooltip">?<span class="classic">Enable (Disable) sending an in-game message to the player, if he was invited to the alliance</span></em></td>
					<td>
						<select name="new_functions_alliance_invitation">
							<option value="True" <?php if(NEW_FUNCTIONS_ALLIANCE_INVITATION == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_ALLIANCE_INVITATION == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>New Alliance & Embassy Mechanics <em class="tooltip">?<span class="classic">For this setting, you can find more information on the link: <a href="https://github.com/iopietro/Travianz/wiki/New-Alliance-&-Embassy-Mechanics" target="_blank">https://github.com</a></span></em></td>
					<td>
						<select name="new_functions_embassy_mechanics">
							<option value="True" <?php if(NEW_FUNCTIONS_EMBASSY_MECHANICS == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_EMBASSY_MECHANICS == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>New forum post message <em class="tooltip">?<span class="classic">Enable (Disable) if a player leaves at least one message in the thread on the forum, he will receive in-game messages about the fact that new messages have appeared in the same thread (i.e. is technically "subscribed to")</span></em></td>
					<td>
						<select name="new_functions_forum_post_message">
							<option value="True" <?php if(NEW_FUNCTIONS_FORUM_POST_MESSAGE == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_FORUM_POST_MESSAGE == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tribes images in profile <em class="tooltip">?<span class="classic">Enable (Disable) displaying images of tribes with a description in the players profile</span></em></td>
					<td>
						<select name="new_functions_tribe_images">
							<option value="True" <?php if(NEW_FUNCTIONS_TRIBE_IMAGES == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_TRIBE_IMAGES == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>MHs images in profile <em class="tooltip">?<span class="classic">Enable (Disable) displaying images of Multihunters with a description in the MHs profile</span></em></td>
					<td>
						<select name="new_functions_mhs_images">
							<option value="True" <?php if(NEW_FUNCTIONS_MHS_IMAGES == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_MHS_IMAGES == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Display artifact in profile <em class="tooltip">?<span class="classic">Enable (Disable) the display of the artifact in the player profile, opposite the corresponding village in which it is located</span></em></td>
					<td>
						<select name="new_functions_display_artifact">
							<option value="True" <?php if(NEW_FUNCTIONS_DISPLAY_ARTIFACT == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_DISPLAY_ARTIFACT == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Vacation Mode <em class="tooltip">?<span class="classic">Enable (Disable) vacation mode, will be displayed or hidden in the player profile menu</span></em></td>
					<td>
						<select name="new_functions_vacation">
							<option value="True" <?php if(NEW_FUNCTIONS_VACATION == true) echo "selected";?>>True</option>
							<option value="False" <?php if(NEW_FUNCTIONS_VACATION == false) echo "selected";?>>False</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		<br />
		<table width="100%">
			<tr><td align="left"><a href="../Admin/admin.php?p=config"><< <?php echo EDIT_BACK ?></a></td>
				<td align="right"><input type="image" border="0" src="../img/admin/b/ok1.gif"></td>
			</tr>
		</table>
	</form>
