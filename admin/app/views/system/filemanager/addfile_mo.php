<form action="<?php echo base_url('sys_filemanager.html');?>" method="get" id="fileForm">
<table class="table_add">
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td class="width right">文件:</td>
		<td>
			<input type="text" name="file" class="input" value="test.txt" style="width: 90%" maxlength="19" />
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" id="fileSub" value="创建" />
			<input type="hidden" id="file_path" name="path">
			<input type="hidden" name="action" value="addfile">
			<input type="hidden" id="file_editor" name="editor">
		</td>
	</tr>
</table>
</form>