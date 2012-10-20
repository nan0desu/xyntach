<?php
if (function_exists('smarty_block_t')===false)
	$this->getLoader()->loadPlugin('t');
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
ob_start(); /* template body */ ;
if (! (isset($this->scope["isread"]) ? $this->scope["isread"] : null)) {
?>
	<table class="userdelete">
	<tbody>
	<tr>
	<td>
	<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Удалить пост<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

	[<input type="checkbox" name="fileonly" id="fileonly" value="on" /><label for="fileonly"><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>только файл<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?></label>]<br /><?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Пароль<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

	<input type="password" name="postpassword" size="8" />&nbsp;<input name="deletepost" value="<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Удалить<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" type="submit" />

	<?php if ((isset($this->scope["board"]["enablereporting"]) ? $this->scope["board"]["enablereporting"]:null) == 1) {
?>
		</td>
		</tr>
		<tr>
		<td>
		<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Пожаловаться на пост<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?><br />
		<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Текст заявления<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

		<input type="text" name="reportreason" size="10" />&nbsp;<input name="reportpost" value="<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Подать<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" type="submit" />	
	<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);
 $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);

}?>


	</td>
	</tr>
	</tbody>
	</table>
	</form>

	<script type="text/javascript"><!--
		set_delpass("delform");
	//--></script>
<?php 
}?>

<?php if ((isset($this->scope["replythread"]) ? $this->scope["replythread"] : null) == 0) {
?>
	<table class="_subnav">
	<tbody>
		<tr>
	<!--		<td>
				<?php if ((isset($this->scope["thispage"]) ? $this->scope["thispage"] : null) == 0) {
?>
					<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();
 $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

				<?php 
}
else {
?>
					<form method="get" action="<?php echo KU_BOARDSFOLDER;
echo $this->scope["board"]["name"];?>/<?php if (( ((isset($this->scope["thispage"]) ? $this->scope["thispage"] : null) - 1) ) != 0) {

echo ($this->scope["thispage"] - 1);?>.html<?php 
}?>">
						<input value="<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Позднее<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" type="submit" /></form>
				<?php 
}?>

			</td> //-->
			<td>
				&#91;<?php if ((isset($this->scope["thispage"]) ? $this->scope["thispage"] : null) != 0) {
?><a href="<?php echo KU_BOARDSPATH;?>/<?php echo $this->scope["board"]["name"];?>/"><?php 
}?>0<?php if ((isset($this->scope["thispage"]) ? $this->scope["thispage"] : null) != 0) {
?></a><?php 
}?>&#93;
				<?php $this->globals['section']['pages'] = array();
$_section0 =& $this->globals['section']['pages'];
$_section0['loop'] = is_array($tmp = (isset($this->scope["numpages"]) ? $this->scope["numpages"] : null)) ? count($tmp) : max(0, (int) $tmp);
$_section0['show'] = true;
$_section0['name'] = 'pages';
$_section0['max'] = $_section0['loop'];
$_section0['step'] = 1;
$_section0['start'] = $_section0['step'] > 0 ? 0 : $_section0['loop'] - 1;
if ($_section0['start'] < 0) { $_section0['start'] = max($_section0['step'] > 0 ? 0 : -1, $_section0['loop'] + $_section0['start']); } 
else { $_section0['start'] = min($_section0['start'], $_section0['step'] > 0 ? $_section0['loop'] : $_section0['loop'] -1); }
if ($_section0['show']) {
	$_section0['total'] = $_section0['loop'];
	if ($_section0['total'] == 0) {
		$_section0['show'] = false;
	}
} else {
	$_section0['total'] = 0;
}
if ($_section0['show']) {
	for ($this->scope['pages'] = $_section0['start'], $_section0['iteration'] = 1; $_section0['iteration'] <= $_section0['total']; $this->scope['pages'] += $_section0['step'], $_section0['iteration']++) {
		$_section0['rownum'] = $_section0['iteration'];
		$_section0['index_prev'] = $this->scope['pages'] - $_section0['step'];
		$_section0['index_next'] = $this->scope['pages'] + $_section0['step'];
		$_section0['first']	= ($_section0['iteration'] == 1);
		$_section0['last']	= ($_section0['iteration'] == $_section0['total']);
?>
				&#91;<?php if ((isset($this->globals["section"]["pages"]["iteration"]) ? $this->globals["section"]["pages"]["iteration"]:null) != (isset($this->scope["thispage"]) ? $this->scope["thispage"] : null)) {?><a href="<?php echo KU_BOARDSFOLDER;
echo $this->scope["board"]["name"];?>/<?php echo $this->globals["section"]["pages"]["iteration"];?>.html"><?php }
echo $this->globals["section"]["pages"]["iteration"];
if ((isset($this->globals["section"]["pages"]["iteration"]) ? $this->globals["section"]["pages"]["iteration"]:null) != (isset($this->scope["thispage"]) ? $this->scope["thispage"] : null)) {?></a><?php }?>&#93;
				<?php 
	}
} ?>	
			</td>
<!--			<td>
				<?php if ((isset($this->scope["thispage"]) ? $this->scope["thispage"] : null) == (isset($this->scope["numpages"]) ? $this->scope["numpages"] : null)) {
?>
					<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();
 $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

				<?php 
}
else {
?>
					<form method="get" action="<?php echo KU_BOARDSPATH;?>/<?php echo $this->scope["board"]["name"];?>/<?php echo ($this->scope["thispage"] + 1);?>.html"><input value="<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Ранее<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>" type="submit" /></form>
				<?php 
}?>

	
			</td> //-->
		</tr>
	</tbody>
	</table>
<?php 
}?>

<br />
<?php if ((isset($this->scope["boardlist"]) ? $this->scope["boardlist"] : null)) {
?>
	<div class="navbar">
<?php if ((defined("KU_GENERATEBOARDLIST") ? KU_GENERATEBOARDLIST : null)) {
?>
<?php if ((defined("KU_NAME") ? KU_NAME : null) == "Depressarium") {
?>[ <a href="/b" title="Xynta.ch"> x </a> ]<?php 
}?>

	<?php 
$_fh3_data = (isset($this->scope["boardlist"]) ? $this->scope["boardlist"] : null);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['sect'])
	{
/* -- foreach start output */
?>
	  [
	  <?php 
$_fh2_data = (isset($this->scope["sect"]) ? $this->scope["sect"] : null);
$this->globals["foreach"]['brds'] = array
(
	"iteration"		=> 1,
	"last"		=> null,
	"total"		=> $this->isArray($_fh2_data) ? count($_fh2_data) : 0,
);
$_fh2_glob =& $this->globals["foreach"]['brds'];
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['brd'])
	{
		$_fh2_glob["last"] = (string) ($_fh2_glob["iteration"] === $_fh2_glob["total"]);
/* -- foreach start output */
?>
	    <?php if ((isset($this->scope["brd"]["name"]) ? $this->scope["brd"]["name"]:null) == (isset($this->scope["board"]["name"]) ? $this->scope["board"]["name"]:null)) {
?><span><?php echo $this->scope["brd"]["name"];?></span><?php 
}
else {
?><a title="<?php echo $this->scope["brd"]["desc"];?>" href="<?php echo KU_BOARDSFOLDER;
echo $this->scope["brd"]["name"];?>/"><?php echo $this->scope["brd"]["name"];?></a><?php 
}
if ((isset($this->globals["foreach"]["brds"]["last"]) ? $this->globals["foreach"]["brds"]["last"]:null)) {


}
else {
?> / <?php 
}?>


 <?php if ((isset($this->scope["brd"]["name"]) ? $this->scope["brd"]["name"]:null) == 'c') {
?><a href="/d/a" title="Dепрессариум">d</a> / 
    <?php 
}?>



	  <?php 
/* -- foreach end output */
		$_fh2_glob["iteration"]+=1;
	}
}?>

	  ]
	<?php 
/* -- foreach end output */
	}
}?>


<?php 
}
else {
?>
	<?php if (is_file((isset($this->scope["boardlist"]) ? $this->scope["boardlist"] : null))) {
?>
		<?php echo Dwoo_Plugin_include($this, (isset($this->scope["boardlist"]) ? $this->scope["boardlist"] : null), null, null, null, '_root', null);?>

	<?php 
}?>


<?php 
}?>

</div>
<?php 
}?>

<br />
<div class="footer" style="clear: both;">
	<a href="http://kusabax.cultnet.net/" target="_top">Kusaba X</a> <?php echo KU_VERSION;?>

	<?php if ((isset($this->scope["executiontime"]) ? $this->scope["executiontime"] : null) != '') {
?> (<?php echo $this->scope["executiontime"];?> s in MS Paint)<?php 
}?>

	<?php if ((isset($this->scope["botads"]) ? $this->scope["botads"] : null) != '') {
?>
		<div class="content ads">
			<center> 
				<?php echo $this->scope["botads"];?>

			</center>
		</div>
	<?php 
}?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>