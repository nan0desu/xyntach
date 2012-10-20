<?php
if (function_exists('smarty_block_t')===false)
	$this->getLoader()->loadPlugin('t');
if (function_exists('Dwoo_Plugin_date_format')===false)
	$this->getLoader()->loadPlugin('date_format');
ob_start(); /* template body */ ;
if (count((isset($this->scope["posts"]) ? $this->scope["posts"] : null)) > 0) {
?>
	<center>
		<table width="98%">
		<tr>
			<td class="postblock" align="center" width="1%">
				No.
			</td>
			<td class="postblock" style="text-align:center;width:25%;">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Name<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td class="postblock" align="center" width="1%">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>File<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td class="postblock" align="center" width="1%">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Tag<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td class="postblock" style="text-align:center;width:40%;">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Subject<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td class="postblock" align="center" width="1%">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Size<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td class="postblock" align="center" width="1%">
				<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Date<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>

			</td>
			<td class="postblock" style="text-align:center;width:1px;">
				Rep.
			</td>
			<td class="postblock" style="width:1px;">
				&nbsp;
			</td>
		</tr>
	<?php 
$_fh4_data = (isset($this->scope["posts"]) ? $this->scope["posts"] : null);
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['postkey']=>$this->scope['post'])
	{
/* -- foreach start output */
?>
		<tr>
		<td align="center">
			<?php echo $this->scope["post"]["id"];?>

		</td>
		<td>
			<span class="postername">
			<?php if ((isset($this->scope["post"]["email"]) ? $this->scope["post"]["email"]:null) != '' && (isset($this->scope["board"]["anonymous"]) ? $this->scope["board"]["anonymous"]:null) != '') {
?>
				<a href="mailto:<?php echo $this->scope["post"]["email"];?>">
			<?php 
}?>

			<?php if ((isset($this->scope["post"]["name"]) ? $this->scope["post"]["name"]:null) == '' && (isset($this->scope["post"]["tripcode"]) ? $this->scope["post"]["tripcode"]:null) == '') {
?>
				<?php echo $this->scope["board"]["anonymous"];?>

			<?php 
}
elseif ((isset($this->scope["post"]["name"]) ? $this->scope["post"]["name"]:null) == '' && (isset($this->scope["post"]["tripcode"]) ? $this->scope["post"]["tripcode"]:null) != '') {
?>
			<?php 
}
else {
?>
				<?php echo $this->scope["post"]["name"];?>

			<?php 
}?>

			<?php if ((isset($this->scope["post"]["email"]) ? $this->scope["post"]["email"]:null) != '' && (isset($this->scope["board"]["anonymous"]) ? $this->scope["board"]["anonymous"]:null) != '') {
?>
				</a>
			<?php 
}?>


			</span>

			<?php if ((isset($this->scope["post"]["tripcode"]) ? $this->scope["post"]["tripcode"]:null) != '') {
?>
				<span class="postertrip">!<?php echo $this->scope["post"]["tripcode"];?></span>
			<?php 
}?>

			<?php if ((isset($this->scope["post"]["posterauthority"]) ? $this->scope["post"]["posterauthority"]:null) == 1) {
?>
				<span class="admin">
					&#35;&#35;&nbsp;<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Admin<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;&#35;&#35;
				</span>
			<?php 
}
elseif ((isset($this->scope["post"]["posterauthority"]) ? $this->scope["post"]["posterauthority"]:null) == 4) {
?>
				<span class="mod">
					&#35;&#35;&nbsp;<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Super Mod<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;&#35;&#35;
				</span>
			<?php 
}
elseif ((isset($this->scope["post"]["posterauthority"]) ? $this->scope["post"]["posterauthority"]:null) == 2) {
?>
				<span class="mod">
					&#35;&#35;&nbsp;<?php  if (!isset($_tag_stack)){ $_tag_stack = array(); } $_tag_stack[] = array(); $_block_repeat=true; smarty_block_t($_tag_stack[count($_tag_stack)-1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>Mod<?php  $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t($_tag_stack[count($_tag_stack)-1], $_block_content, $this, $_block_repeat); } array_pop($_tag_stack);?>&nbsp;&#35;&#35;
				</span>
			<?php 
}?>


		</td>
		<td align="center">
			[<a href="<?php echo KU_BOARDSFOLDER;
echo $this->scope["board"]["name"];?>/src/<?php echo $this->scope["post"]["file"];?>.<?php echo $this->scope["post"]["file_type"];?>" target="_blank"><?php echo $this->scope["post"]["file"];?>.<?php echo $this->scope["post"]["file_type"];?></a>]
		</td>
		<td align="center">
			[<?php echo $this->scope["post"]["tag"];?>]
		</td>
		<td>
			<?php echo $this->scope["post"]["subject"];?>

		</td>
		<td align="center">
			<?php echo $this->scope["post"]["file_size_formatted"];?>

		</td>
		<td>
			<span style="white-space: nowrap;"><?php echo Dwoo_Plugin_date_format($this, (isset($this->scope["post"]["timestamp"]) ? $this->scope["post"]["timestamp"]:null), "%y/%m/%d(%a)%H:%M", null);?></span>
		</td>
		<td align="center">
			<?php echo $this->scope["post"]["replies"];?>

		</td>
		<td align="center">
			[<a href="<?php echo KU_BOARDSFOLDER;
echo $this->scope["board"]["name"];?>/res/<?php echo $this->scope["post"]["id"];?>.html">Reply</a>]
		</td>
	</tr>
	<?php 
/* -- foreach end output */
	}
}?>

	</table></center><br /><hr />
<?php 
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>