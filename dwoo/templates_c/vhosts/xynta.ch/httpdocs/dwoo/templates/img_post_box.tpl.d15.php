<?php
if (function_exists('smarty_block_t')===false)
	$this->getLoader()->loadPlugin('t');
if (function_exists('Dwoo_Plugin_date_format')===false)
	$this->getLoader()->loadPlugin('date_format');
ob_start(); /* template body */ ?><div class="postarea">
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
$_fh0_data = (isset($this->scope["board"]["filetypes_allowed"]) ? $this->scope["board"]["filetypes_allowed"]:null);
$this->globals["foreach"]['files'] = array
(
	"iteration"		=> 1,
	"last"		=> null,
	"total"		=> $this->isArray($_fh0_data) ? count($_fh0_data) : 0,
);
$_fh0_glob =& $this->globals["foreach"]['files'];
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['filetype'])
	{
		$_fh0_glob["last"] = (string) ($_fh0_glob["iteration"] === $_fh0_glob["total"]);
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
		$_fh0_glob["iteration"]+=1;
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
<?php if ((defined("KU_QUICKREPLY") ? KU_QUICKREPLY : null) && (isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) == 0) {
?>
<!--><a href="#" onclick='var postform = document.getElementById("postform"); if (postform.style.display == "block") { postform.style.display = "none"; this.innerHTML = "Создать тред"; } else { postform.style.display = "block"; this.innerHTML = "Отмена"; };'>Создать тред</a></!-->

<script type="text/javascript">
    function toggle_postform() {
        var postform = document.getElementById("postform");
        var link = document.getElementById("postformlink");
        if (postform.style.display == "block") {
            postform.style.display = "none";
            quickreply(0)
            link.innerHTML = "Создать тред";
        } else {
            postform.style.display = "block";
            link.innerHTML = "Отмена";
        };
    }
    function qrtoggle() {
        var postform = document.getElementById("postform");
        var link = document.getElementById("postformlink");
        postform.style.display = "block";
        link.innerHTML = "Отмена";
    }
</script>
<a href="#" id="postformlink" onclick="toggle_postform()">Создать тред</a>
<?php 
}?>

<a id="postbox"></a>
<form name="postform" id="postform" action="<?php echo KU_CGIPATH;?>/board.php" method="post" enctype="multipart/form-data"
<?php if ((isset($this->scope["board"]["enablecaptcha"]) ? $this->scope["board"]["enablecaptcha"]:null) == 1) {
?>
onsubmit="return checkcaptcha('postform');"
<?php 
}?>

<?php if ((defined("KU_QUICKREPLY") ? KU_QUICKREPLY : null) && (isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) == 0) {
?>style="display:none"<?php 
}?>

>
<input type="hidden" name="board" value="<?php echo $this->scope["board"]["name"];?>" />
<input type="hidden" name="replythread" value="<!sm_threadid>" />
<?php if ((isset($this->scope["board"]["maximagesize"]) ? $this->scope["board"]["maximagesize"]:null) > 0) {
?>
	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->scope["board"]["maximagesize"];?>" />
<?php 
}?>

<!--><input type="text" name="email" size="28" maxlength="75" value="" style="display: none;" /></-->
<table class="postform">
	<tbody>
	<?php if ((isset($this->scope["board"]["forcedanon"]) ? $this->scope["board"]["forcedanon"]:null) != 1) {
?>
		<tr>
			<td tabindex="1" class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Имя<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
			<td>
				<input type="text" name="name" size="28" maxlength="75" accesskey="n" />
			</td>
		</tr>
	<?php 
}?>

<!-->
	<tr>
		<td class="postblock">
			<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Эл. почта<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
		<td>
			<input tabindex="2" type="text" name="em" size="28" maxlength="75" accesskey="e" />
		</td>
	</tr>
</-->
	<tr>
		<td class="postblock">
			<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Тема<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
		<td>
			<input tabindex="3" type="text" name="subject" size="35" maxlength="75" accesskey="s" />&nbsp;<input type="submit" value="<?php if ((defined("KU_QUICKREPLY") ? KU_QUICKREPLY : null) && (isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) == 0) {
if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Создать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" accesskey="z" />&nbsp;(<span id="posttypeindicator"><?php if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>новый тред<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></span>)<?php }
elseif ((defined("KU_QUICKREPLY") ? KU_QUICKREPLY : null) && (isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) != 0) {
if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Ответ<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" accesskey="z" />&nbsp;(<span id="posttypeindicator"><?php if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>ответ в тред<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?> №<!sm_threadid></span>)<?php }
else {
if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Запостить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" accesskey="z" /><?php }?>

		</td>
	</tr>
<tr>
<td class="postblock">
<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Текст<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

</td>
<td>
<textarea tabindex="4" name="message" id="messagebox" cols="50" rows="6" accesskey="m"></textarea>
</td>
<td valign="top" align="left">
 <input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.rows -= 3' value="⇡" ><br />
 <input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.rows += 3' value="⇣" >
</td>
</tr>
<tr>
<td class="postblock">			
</td>
<td>
<div align="center"><input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.cols -= 6' value="⇠" ><input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.cols += 6' value="⇢" ></div>
</td>
</tr>
	<?php if ((isset($this->scope["board"]["uploadtype"]) ? $this->scope["board"]["uploadtype"]:null) == 0 || (isset($this->scope["board"]["uploadtype"]) ? $this->scope["board"]["uploadtype"]:null) == 1) {
?>
		<tr>
			<td class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Файл<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td>
			<input type="file" name="imagefile" size="35" accesskey="f" />
			<?php if ((isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) == 0 && (isset($this->scope["board"]["enablenofile"]) ? $this->scope["board"]["enablenofile"]:null) == 1) {
?>
				[<input type="checkbox" name="nofile" id="nofile" accesskey="q" /><label for="nofile"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>без файла<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></label>]
			<?php 
}?>

			</td>
		</tr>
	<?php 
}?>

	<?php if (( (isset($this->scope["board"]["uploadtype"]) ? $this->scope["board"]["uploadtype"]:null) == 1 || (isset($this->scope["board"]["uploadtype"]) ? $this->scope["board"]["uploadtype"]:null) == 2 ) && (isset($this->scope["board"]["embeds_allowed"]) ? $this->scope["board"]["embeds_allowed"]:null) != '') {
?>
		<tr>
			<td class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Видео<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td>
				<input tabindex="6" type="text" name="embed" size="28" maxlength="75" accesskey="e" />&nbsp;<select name="embedtype">
				<?php 
$_fh1_data = (isset($this->scope["embeds"]) ? $this->scope["embeds"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['embed'])
	{
/* -- foreach start output */
?>
					<?php if (in_array((isset($this->scope["embed"]["filetype"]) ? $this->scope["embed"]["filetype"]:null), explode(',', (isset($this->scope["board"]["embeds_allowed"]) ? $this->scope["board"]["embeds_allowed"]:null)))) {
?>
						<option value="<?php echo mb_strtolower((string) (isset($this->scope["embed"]["name"]) ? $this->scope["embed"]["name"]:null), $this->charset);?>"><?php echo $this->scope["embed"]["name"];?></option>
					<?php 
}?>

				<?php 
/* -- foreach end output */
	}
}?>

				</select>
				<a class="rules" href="#postbox" onclick="window.open('<?php echo KU_WEBPATH;?>/embedhelp.php','embedhelp','toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=0,width=300,height=210');return false;">Я ёбаный дурак</a>
			</td>
		</tr>
	<?php 
}?>

	<?php if ((isset($this->scope["board"]["enablecaptcha"]) ? $this->scope["board"]["enablecaptcha"]:null) == 1) {
?>
		<tr>
			<td class="postblock'">
				<a href="#" onclick="javascript:document.getElementById('captchaimage').src = '<?php echo KU_CGIPATH;?>/captcha.php?' + Math.random();return false;"><img id="captchaimage" src="<?php echo KU_CGIPATH;?>/captcha.php" border="0" width="117" height="40" alt="Ололо двачую капчу"></a>
			</td>
			<td>
				<input tabindex="7" type="text" name="captcha" size="28" maxlength="10" accesskey="c" />
			</td>
		</tr>
	<?php 
}?>

		<tr>
			<td class="postblock">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Пароль<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td>
				<input tabindex="8" type="password" name="postpassword" size="8" accesskey="p" />&nbsp;<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>(для удаления постов и файлов)<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
		</tr>
		<tr id="passwordbox"><td></td><td></td></tr>
		<tr>
			<td class="postblock"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Вернуться к<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></td>
			<td>
				<label><input name="ret" value="board" type="radio" /> доске</label>
				<label><input name="ret" value="thread" type="radio" checked="checked" /> треду</label>
			</td>
		</tr>
	</tbody>

</table>
</form>





<hr />
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
<script type="text/javascript">
<!--
	set_inputs("postform");
//-->
</script>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>