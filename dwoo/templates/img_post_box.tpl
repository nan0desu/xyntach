<div class="postarea">
<div class="rules">
	<table>
		<tr>
			<td>
	<ul style="margin-left: 0; margin-top: 0; margin-bottom: 0; padding-left: 0;">
                            <li>Разметка <a href="http://xynta.ch/wakabamark.html">WakabaMark</a>.</li>
		<li>{t}Разрешённые типы файлов{/t}:
		{if $board.filetypes_allowed neq ''}
			{foreach name=files item=filetype from=$board.filetypes_allowed}
				{$filetype.0|upper}{if $.foreach.files.last}.{else}, {/if}
			{/foreach}
		{else}
			{t}никакие{/t}.
		{/if}
		</li>
		<li>{t}Максимальный размер файла:{/t} {math "round(x/1024)" x=$board.maximagesize} KB.</li>
		<li>{t 1=%KU_THUMBWIDTH 2=%KU_THUMBHEIGHT}Изображения больше %1x%2 пикселей будут уменьшены.{/t}</li>
		<li>Модераторов нет. Модерации нет.</li>
        <li>Индексация поисковыми системами <a href="/robots.txt">запрещена</a>.</li>
        <li>Текущее местонахождение сервера: <a href="http://www.viralblender.com/2011/08/11/dutch-prison-justice-for-the-criminals">Нидерланды</a>.</li>
		<li>Альтернативные адреса: <a href="http://nahuya.ch/{$board.name}">nahuya.ch</a>, <a href="http://xyntach.tilaa.nl/{$board.name}">xyntach.tilaa.nl</a>, <a href="http://46.19.36.86/{$board.name}">46.19.36.86</a>.</li>
        <li>{t 1=$board.uniqueposts}%1 уникальных постов.{/t}
		{if $board.enablecatalog eq 1} 
			<a href="{%KU_BOARDSFOLDER}{$board.name}/catalog.html">{t}Каталог тредов{/t}</a>.
		{/if}
		</li>
        <li>Nothing is true, everything is permitted. <a href="/cp/">Almost</a>.</li>

	</ul>
{if %KU_BLOTTER && $blotter}
	<br />
	<ul style="margin-left: 0; margin-top: 0; margin-bottom: 0; padding-left: 0;">
	<li style="position: relative;">
		<span style="color: red;">
	{t}Блоттер обновлён{/t}: {$blotter_updated|date_format:"%Y-%m-%d"}
	</span>
		<span style="color: red;text-align: right;position: absolute;right: 0px;">
			<a href="#" onclick="javascript:toggleblotter(true);return false;">{t}Показать/Спрятать{/t}</a> <a href="{%KU_WEBPATH}/blotter.php">{t}Показать все{/t}</a>
		</span>
	</li>
	{$blotter}
	</ul>
	<script type="text/javascript"><!--
	if (getCookie('ku_showblotter') == '1') {
		toggleblotter(false);
	}
	--></script>
{/if}
			</td>
		</tr>
	</table>
</div>
{if %KU_QUICKREPLY && $replythread eq 0}
<!--<a href="#" onclick='var postform = document.getElementById("postform"); if (postform.style.display == "block") { postform.style.display = "none"; this.innerHTML = "Создать тред"; } else { postform.style.display = "block"; this.innerHTML = "Отмена"; };'>Создать тред</a>-->

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
{/if}
<a id="postbox"></a>
<form name="postform" id="postform" action="{%KU_CGIPATH}/board.php" method="post" enctype="multipart/form-data"
{if $board.enablecaptcha eq 1}
onsubmit="return checkcaptcha('postform');"
{/if}
{if %KU_QUICKREPLY && $replythread eq 0}style="display:none"{/if}
>
<input type="hidden" name="board" value="{$board.name}" />
<input type="hidden" name="replythread" value="<!sm_threadid>" />
{if $board.maximagesize > 0}
	<input type="hidden" name="MAX_FILE_SIZE" value="{$board.maximagesize}" />
{/if}
<!-- <input type="text" name="email" size="28" maxlength="75" value="" style="display: none;" /> -->
<table class="postform">
	<tbody>
<!--
	{if $board.forcedanon neq 1}
		<tr>
			<td tabindex="1" class="postblock">
				{t}Имя{/t}</td>
			<td>
				<input type="text" name="name" size="28" maxlength="75" accesskey="n" />
			</td>
		</tr>
	{/if}
-->
	<tr>
		<td class="postblock">
			{t}Тема{/t}</td>
		<td>
			{strip}<input tabindex="3" type="text" name="subject" size="35" maxlength="75" accesskey="s" />&nbsp;<input type="submit" value="
			{if %KU_QUICKREPLY && $replythread eq 0}
				{t}Создать{/t}" accesskey="z" />&nbsp;(<span id="posttypeindicator">{t}новый тред{/t}</span>)
			{elseif %KU_QUICKREPLY && $replythread neq 0}
				{t}Ответ{/t}" accesskey="z" />&nbsp;(<span id="posttypeindicator">{t}ответ в тред{/t} №<!sm_threadid></span>)
			{else}
				{t}Запостить{/t}" accesskey="z" />
			{/if}{/strip}
		</td>
	</tr>
<tr>
<td class="postblock">
{t}Текст{/t}
</td>
<td>
<textarea tabindex="4" name="message" id="messagebox" cols="50" rows="6" accesskey="m"></textarea>
</td>
<!-- <td valign="top" align="left">
 <input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.rows -= 3' value="⇡" ><br />
 <input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.rows += 3' value="⇣" >
</td> -->
</tr>
<tr>
<td class="postblock">			
</td>
<!-- <td>
<div align="center"><input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.cols -= 6' value="⇠" ><input type="button" onclick='var messagebox = document.getElementById("messagebox"); messagebox.cols += 6' value="⇢" ></div>
</td> -->
</tr>
	{if $board.uploadtype eq 0 || $board.uploadtype eq 1}
		<tr>
			<td class="postblock">
				{t}File{/t}
			</td>
			<td>
			<input type="file" name="imagefile" size="35" accesskey="f" />
<!--			{if $replythread eq 0 && $board.enablenofile eq 1 }
				[<input type="checkbox" name="nofile" id="nofile" accesskey="q" /><label for="nofile"> {t}No File{/t}</label>]
			{/if}
-->
			</td>
		</tr>
	{/if}
	{if ($board.uploadtype eq 1 || $board.uploadtype eq 2) && $board.embeds_allowed neq ''}
		<tr>
			<td class="postblock">
				{t}Embed{/t}
			</td>
			<td>
				<input tabindex="6" type="text" name="embed" size="28" maxlength="75" accesskey="e" />&nbsp;<select name="embedtype">
				{foreach name=embed from=$embeds item=embed}
					{if in_array($embed.filetype,explode(',' $board.embeds_allowed))}
						<option value="{$embed.name|lower}">{$embed.name}</option>
					{/if}
				{/foreach}
				</select>
				<!-- <a class="rules" href="#postbox" onclick="window.open('{%KU_WEBPATH}/embedhelp.php','embedhelp','toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=0,width=300,height=210');return false;">Я ёбаный дурак</a> -->
			</td>
		</tr>
	{/if}
		<tr>
			<td class="postblock">
				{t}Password{/t}
			</td>
			<td>
				<input tabindex="7" type="password" name="postpassword" size="8" accesskey="p" />&nbsp;{t}(для удаления постов и файлов){/t}
			</td>
		</tr>
		<tr id="passwordbox"><td></td><td></td></tr>
	{if $board.enablecaptcha eq 1}
		<tr>
			<td class="postblock'">
				<a href="#" onclick="javascript:document.getElementById('captchaimage').src = '{%KU_CGIPATH}/captcha.php?' + Math.random();return false;"><img id="captchaimage" src="{%KU_CGIPATH}/captcha.php" border="0" width="117" height="40" alt="Ололо двачую капчу"></a>
			</td>
			<td>
				<input tabindex="8" type="text" name="captcha" size="28" maxlength="10" accesskey="c" />
			</td>
		</tr>
	{/if}
		
		<tr id="trgetback">
			<td class="postblock">
			</td>
			<td>
				<label><input name="redirecttothread" value="0" type="radio" />{t}Return to the board{/t}</label>
				<label><input name="redirecttothread" value="1" checked="checked" type="radio" />{t}Stay in the thread{/t}</label>
			</td>
		</tr>
		
	</tbody>

</table>
</form>
<hr />
{if $topads neq ''}
	<div class="content ads">
		<center> 
			{$topads}
		</center>
	</div>
	<hr />
{/if}
</div>
<script type="text/javascript"><!--
				set_inputs("postform");
				//--></script>
