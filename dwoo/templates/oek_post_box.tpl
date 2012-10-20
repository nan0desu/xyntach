<div class="postarea">
<a id="postbox"></a>
{if $.get.postoek eq ''}
	<form action="{%KU_CGIPATH}/paint.php" method="post">
	<input type="hidden" name="board" value="{$board.name}" />
	<input type="hidden" name="replyto" value="{$replythread}" />
	<label for="applet">{t}Paint with{/t}:&nbsp;</label>
	<select name="applet" id="applet">
		<option value="shipainter">Shi-Painter</option>
		<option value="shipainterpro">Shi-Painter Pro</option>
		<option value="shipainter_selfy">Shi-Painter+Selfy</option>
		<option value="shipainterpro_selfy">Shi-Painter Pro+Selfy</option>
	</select>&nbsp;
	<label for="width">{t}Width{/t}:&nbsp;</label><input type="text" name="width" id="width" size="3" value="300" />&nbsp;
	<label for="height">{t}Height{/t}:&nbsp;</label><input type="text" name="height" id="height" size="3" value="300" />&nbsp;
	<label for="useanim">{t}Use animation?{/t}&nbsp;</label><input type="checkbox" name="useanim" id="useanim" checked="checked" />&nbsp;
	{if $replythread neq 0}
		<label for="replyimage">{t}Source{/t}:&nbsp;</label><select name="replyimage" id="replyimage">
		<option value="0">{t}New image{/t}</option>
		{foreach name=oekpost item=post from=$oekposts}
			<option value="{$post.id}">{t}Modify{/t} {t}No.{/t}{$post.id}</option>
		{/foreach}
		</select>&nbsp;
	{/if}
	<input type="submit" value="{t}Paint!{/t}" /></form>
	<hr />
{/if}
{if $replythread neq 0 || $.get.postoek neq ''}

	<form name="postform" id="postform" action="{%KU_CGIPATH}/board.php" method="post" enctype="multipart/form-data"
	{if $board.enablecaptcha eq 1}
		onsubmit="return checkcaptcha('postform');"
	{/if}
	>
	<input type="hidden" name="board" value="{$board.name}" />
	<input type="hidden" name="replythread" value="{$replythread}" />
	{if $board.maximagesize > 0}
		<input type="hidden" name="MAX_FILE_SIZE" value="{$board.maximagesize}" />
	{/if}
	
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







	
	
	
	
	
	<!--><input type="text" name="email" size="28" maxlength="75" value="" style="display: none;" /></-->
	<table class="postform">
		<tbody>
<!--
		{if $board.forcedanon neq 1}
			<tr>
				<td class="postblock">
					{t}Name{/t}</td>
				<td>
					<input type="text" name="name" size="28" maxlength="75" accesskey="n" />
				</td>
			</tr>
		{/if}
-->
<!-->

</-->
		
        
        
        
		<tr>
			<td class="postblock">
				{t}Subject{/t}</td>
			<td>
				{strip}<input type="text" name="subject" size="35" maxlength="75" accesskey="s" />&nbsp;<input type="submit" value="
				{if %KU_QUICKREPLY && $replythread eq 0}
					{t}Submit{/t}" accesskey="z" />&nbsp;(<span id="posttypeindicator">{t}new thread{/t}</span>)
				{elseif %KU_QUICKREPLY && $replythread neq 0}
					{t}Reply{/t}" accesskey="z" />&nbsp;(<span id="posttypeindicator">{t}reply to{/t} №{$replythread}</span>)
				{else}
					{t}Submit{/t}" accesskey="z" />
				{/if}{/strip}
			</td>
		</tr>
		<tr>
			<td class="postblock">
				{t}Message{/t}
			</td>
			<td>
				<textarea name="message" cols="48" rows="4" accesskey="m"></textarea>
			</td>
			</tr>
		
		{if $board.uploadtype eq 0 || $board.uploadtype eq 1}
			<tr>
				<td class="postblock">
					{t}File{/t}
				</td>
				<td>
				{if $.get.postoek eq ''}
					<input type="file" name="imagefile" size="35" accesskey="f" />
				{else}
					{t}Shown Below{/t}<input type="hidden" name="oekaki" value="{$.get.postoek}" />
				{/if}
				</td>
			</tr>
		{/if}
			<tr>
				<td class="postblock">
					{t}Password{/t}
				</td>
				<td>
					<input type="password" name="postpassword" size="8" accesskey="p" />&nbsp;{t}(for post and file deletion){/t}
				</td>
			</tr>
			<tr id="passwordbox"><td></td><td></td></tr>
            
            
            
            

	{if $board.enablecaptcha eq 1}
		<tr>
			<td class="postblock'">
				<a href="#" onclick="javascript:document.getElementById('captchaimage').src = '{%KU_CGIPATH}/captcha.php?' + Math.random();return false;"><img id="captchaimage" src="{%KU_CGIPATH}/captcha.php" border="0" width="117" height="40" alt="Ололо двачую капчу"></a>
			</td>
			<td>
				<input tabindex="7" type="text" name="captcha" size="28" maxlength="10" accesskey="c" />
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











		</tbody>
	</table>
	</form>
<hr />
{/if}
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
{if $.get.postoek}
	<div style="text-align: center;">
		{t}Your image{/t}:<br />
		<img src="{%KU_CGIFOLDER}kusabaoek/{$.get.postoek}.png" />
	</div>
{/if}
