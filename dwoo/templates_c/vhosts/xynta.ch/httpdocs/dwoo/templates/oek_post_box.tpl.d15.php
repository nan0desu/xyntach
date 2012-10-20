<?php
if (function_exists('smarty_block_t')===false)
	$this->getLoader()->loadPlugin('t');
if (function_exists('Dwoo_Plugin_date_format')===false)
	$this->getLoader()->loadPlugin('date_format');
ob_start(); /* template body */ ?><div class="postarea">
<a id="postbox"></a>
<?php if ((isset($_GET['postoek'])?$_GET['postoek']:null) == '') {
?>
	<form action="<?php echo KU_CGIPATH;?>/paint.php" method="post">
	<input type="hidden" name="board" value="<?php echo $this->scope["board"]["name"];?>" />
	<input type="hidden" name="replyto" value="<?php echo $this->scope["replythread"];?>" />
	<label for="applet"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Paint with<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;</label>
	<select name="applet" id="applet">
		<option value="shipainter">Shi-Painter</option>
		<option value="shipainterpro">Shi-Painter Pro</option>
		<option value="shipainter_selfy">Shi-Painter+Selfy</option>
		<option value="shipainterpro_selfy">Shi-Painter Pro+Selfy</option>
	</select>&nbsp;&nbsp;
	<label for="width"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Width<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;</label><input type="text" name="width" id="width" size="3" value="300" />&nbsp;&nbsp;
	<label for="height"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Height<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;</label><input type="text" name="height" id="height" size="3" value="300" />&nbsp;&nbsp;
	<label for="useanim"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Use animation?<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;</label><input type="checkbox" name="useanim" id="useanim" checked="checked" />&nbsp;
	<?php if ((isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) != 0) {
?>
		<label for="replyimage"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Source<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;</label><select name="replyimage" id="replyimage">
		<option value="0"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>New image<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></option>
		<?php 
$_fh0_data = (isset($this->scope["oekposts"]) ? $this->scope["oekposts"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['post'])
	{
/* -- foreach start output */
?>
			<option value="<?php echo $this->scope["post"]["id"];?>"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Modify<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?> рисунок поста <?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>No.<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);
echo $this->scope["post"]["id"];?></option>










		<?php 
/* -- foreach end output */
	}
}?>

		</select>&nbsp;


	<?php 
}?>

	<input type="submit" value="<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Paint!<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" /></form>
	<hr />






<?php 
}?>



























<?php if ((isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) != 0 || (isset($_GET['postoek'])?$_GET['postoek']:null) != '') {
?>

























	<form name="postform" id="postform" action="<?php echo KU_CGIPATH;?>/board.php" method="post" enctype="multipart/form-data"
	<?php if ((isset($this->scope["board"]["enablecaptcha"]) ? $this->scope["board"]["enablecaptcha"]:null) == 1) {
?>
		onsubmit="return checkcaptcha('postform');"
	<?php 
}?>


	>
	<input type="hidden" name="board" value="<?php echo $this->scope["board"]["name"];?>" />
	<input type="hidden" name="replythread" value="<?php echo $this->scope["replythread"];?>" />
	<?php if ((isset($this->scope["board"]["maximagesize"]) ? $this->scope["board"]["maximagesize"]:null) > 0) {
?>
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->scope["board"]["maximagesize"];?>" />
	<?php 
}?>

	
	<div class="rules">
	<table>
		<tr>
			<td>
	<ul style="margin-left: 0; margin-top: 0; margin-bottom: 0; padding-left: 0;">
                            <li>Разметка <a href="http://xynta.ch/wakabamark.html">WakabaMark</a>.</li>
		<li><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Разрешённые типы файлов<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>:
		<?php if ((isset($this->scope["board"]["filetypes_allowed"]) ? $this->scope["board"]["filetypes_allowed"]:null) != '') {
?>
			<?php 
$_fh1_data = (isset($this->scope["board"]["filetypes_allowed"]) ? $this->scope["board"]["filetypes_allowed"]:null);
$this->globals["foreach"]['files'] = array
(
	"iteration"		=> 1,
	"last"		=> null,
	"total"		=> $this->isArray($_fh1_data) ? count($_fh1_data) : 0,
);
$_fh1_glob =& $this->globals["foreach"]['files'];
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['filetype'])
	{
		$_fh1_glob["last"] = (string) ($_fh1_glob["iteration"] === $_fh1_glob["total"]);
/* -- foreach start output */
?>
				<?php echo mb_strtoupper((string) (isset($this->scope["filetype"]["0"]) ? $this->scope["filetype"]["0"]:null), $this->charset);
if ((isset($this->globals["foreach"]["files"]["last"]) ? $this->globals["foreach"]["files"]["last"]:null)) {
?>.<?php 
}
else {
?>, <?php 
}?>

			<?php 
/* -- foreach end output */
		$_fh1_glob["iteration"]+=1;
	}
}?>


		<?php 
}
else {
?>
			<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>никакие<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>.
		<?php 
}?>



		</li>
		<li><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Максимальный размер файла:<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?> <?php echo (round((isset($this->scope["board"]["maximagesize"]) ? $this->scope["board"]["maximagesize"]:null)/1024));?> KB.</li>
		<li><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(1 => (defined("KU_THUMBWIDTH") ? KU_THUMBWIDTH : null),2 => (defined("KU_THUMBHEIGHT") ? KU_THUMBHEIGHT : null),); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Изображения, больше чем %1x%2 пикселей, будут уменьшены.<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></li>
		<li><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(1 => (isset($this->scope["board"]["uniqueposts"]) ? $this->scope["board"]["uniqueposts"]:null),); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>%1 уникальных постов.<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

		<?php if ((isset($this->scope["board"]["enablecatalog"]) ? $this->scope["board"]["enablecatalog"]:null) == 1) {
?> 
			<a href="<?php echo KU_BOARDSFOLDER;
echo $this->scope["board"]["name"];?>/catalog.html"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Просмотреть каталог<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></a>.
		<?php 
}?>

		</li>
                <li>Nothing is true, everything is permitted. <a href="/cp/">Almost</a>.</li>
	</ul>
<?php if ((defined("KU_BLOTTER") ? KU_BLOTTER : null) && (isset($this->scope["blotter"]) ? $this->scope["blotter"] : null)) {
?>
	<br />
	<ul style="margin-left: 0; margin-top: 0; margin-bottom: 0; padding-left: 0;">
	<li style="position: relative;">
		<span style="color: red;">
	<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Блоттер обновлён<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>: <?php echo Dwoo_Plugin_date_format($this, (isset($this->scope["blotter_updated"]) ? $this->scope["blotter_updated"] : null), "%Y-%m-%d", null);?>

	</span>
		<span style="color: red;text-align: right;position: absolute;right: 0px;">
			<a href="#" onclick="javascript:toggleblotter(true);return false;"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Показать/Спрятать<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></a> <a href="<?php echo KU_WEBPATH;?>/blotter.php"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Показать все<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></a>
		</span>
	</li>
	<?php echo $this->scope["blotter"];?>

	</ul>
	<script type="text/javascript"><!--
	if (getCookie('ku_showblotter') == '1') {
		toggleblotter(false);
	}
	--></script>
<?php 
}?>

			</td>
		</tr>
	</table>
	</div>







	
	
	
	
	
	<!--><input type="text" name="email" size="28" maxlength="75" value="" style="display: none;" /></-->
	<table class="postform">
			
		<tbody>
		<?php if ((isset($this->scope["board"]["forcedanon"]) ? $this->scope["board"]["forcedanon"]:null) != 1) {
?>
			<tr>
				<td class="postblock">
					<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Name<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
				<td>
					<input type="text" name="name" size="28" maxlength="75" accesskey="n" />
				</td>
			</tr>
		<?php 
}?>

<!-->
		<tr>
			<td class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Email<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
			<td>
				<input type="text" name="em" size="28" maxlength="75" accesskey="e" />
			</td>
		</tr>
</-->
		
        
        
        
		<tr>
			<td class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Subject<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
			<td>
				<input type="text" name="subject" size="35" maxlength="75" accesskey="s" />&nbsp;<input type="submit" value="<?php if ((defined("KU_QUICKREPLY") ? KU_QUICKREPLY : null) && (isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) == 0) {
if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Submit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" accesskey="z" />&nbsp;(<span id="posttypeindicator"><?php if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>new thread<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></span>)<?php }
elseif ((defined("KU_QUICKREPLY") ? KU_QUICKREPLY : null) && (isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) != 0) {
if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Reply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" accesskey="z" />&nbsp;(<span id="posttypeindicator"><?php if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>reply to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?> №<?php echo $this->scope["replythread"];?></span>)<?php }
else {
if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Submit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" accesskey="z" /><?php }?>

			</td>
		</tr>
		<tr>
			<td class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Message<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>


			</td>
			<td>
				<textarea name="message" cols="48" rows="4" accesskey="m"></textarea>











			</td>
			</tr>
		
		<?php if ((isset($this->scope["board"]["uploadtype"]) ? $this->scope["board"]["uploadtype"]:null) == 0 || (isset($this->scope["board"]["uploadtype"]) ? $this->scope["board"]["uploadtype"]:null) == 1) {
?>
			<tr>
				<td class="postblock">
					<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Файл<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>


				</td>
				<td>
				<?php if ((isset($_GET['postoek'])?$_GET['postoek']:null) == '') {
?>
					<input type="file" name="imagefile" size="35" accesskey="f" />
				<?php 
}
else {
?>
					<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Shown Below<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?><input type="hidden" name="oekaki" value="<?php echo $_GET['postoek'];?>" />


				<?php 
}?>

				</td>
			</tr>
		<?php 
}?>


	
				<tr>
				<td class="postblock">
					<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Password<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>


				</td>
				<td>
					<input type="password" name="postpassword" size="8" accesskey="p" />&nbsp;<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>(for post and file deletion)<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>








				</td>
			</tr>
			<tr id="passwordbox"><td></td><td></td></tr>
            
            
            
            

	<?php if ((isset($this->scope["board"]["enablecaptcha"]) ? $this->scope["board"]["enablecaptcha"]:null) == 1) {
?>
		<tr>
			<td class="postblock'">
				<a href="#" onclick="javascript:document.getElementById('captchaimage').src = '<?php echo KU_CGIPATH;?>/captcha.php?' + Math.random();return false;"><img id="captchaimage" src="<?php echo KU_CGIPATH;?>/captcha.php" border="0" width="117" height="40" alt="????? ?????? ?????"></a>
			</td>
			<td>
				<input tabindex="7" type="text" name="captcha" size="28" maxlength="10" accesskey="c" />
			</td>
		</tr>
	<?php 
}?>

          












		</tbody>

	</table>
	</form>





<hr />
<?php 
}?>

<?php if ((isset($this->scope["topads"]) ? $this->scope["topads"] : null) != '') {
?>
	<div class="content ads">
		<center> 
			<?php echo $this->scope["topads"];?>

		</center>
	</div>
	<hr />
<?php 
}?>

</div>
<script type="text/javascript"><!--

				set_inputs("postform");
				//--></script>
<?php if ((isset($_GET['postoek'])?$_GET['postoek']:null)) {
?>
	<div style="text-align: center;">
		<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Your image<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>:<br />
		<img src="<?php echo KU_CGIFOLDER;?>kusabaoek/<?php echo $_GET['postoek'];?>.png" />
	</div>
<?php 
}?>



<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>