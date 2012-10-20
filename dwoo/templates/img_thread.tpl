{if not $isexpand and not $isread}
	<form id="delform" action="{%KU_CGIPATH}/board.php" method="post">
	<input type="hidden" name="board" value="{$board.name}" />
{/if}
<div class="thread">
	{foreach key=postkey item=post from=$posts name=postsloop}
	
		{if $post.parentid eq 0}
			<a name="s{$.foreach.thread.iteration}"></a>			
			{if ($post.file neq '' || $post.file_type neq '' ) && (($post.videobox eq '' && $post.file neq '') && $post.file neq 'removed')}
			  <div class="filesize">{if $post.file_type eq 'mp3'}{t}Аудио: {/t}{else}{t}Файл: {/t}{/if}{if $post.file_type neq 'jpg' && $post.file_type neq 'gif' && $post.file_type neq 'png' && $post.videobox eq ''}<a href="{$file_path}/src/{$post.file}.{$post.file_type}">{else}<a href="{$file_path}/src/{$post.file}.{$post.file_type}" onclick="javascript:expandimg('{$post.id}', '{$file_path}/src/{$post.file}.{$post.file_type}', '{$file_path}/thumb/{$post.file}s.{$post.file_type}', '{$post.image_w}', '{$post.image_h}', '{$post.thumb_w}', '{$post.thumb_h}');return false;">{/if}{if isset($post.id3.comments_html)}{if $post.id3.comments_html.artist.0 neq ''}{$post.id3.comments_html.artist.0} - {if $post.id3.comments_html.title.0 neq ''}{/if}{/if}{if $post.id3.comments_html.title.0 neq ''}{$post.id3.comments_html.title.0}{/if}</a> {else}{$post.file}.{$post.file_type}</a> {/if}({$post.file_size_formatted}{if  $post.file_type neq 'jpg' && $post.file_type neq 'gif' && $post.file_type neq 'png' && $post.file_type neq 'mp3'}{else}, {/if}{if $post.id3.comments_html.bitrate neq 0 || $post.id3.audio.sample_rate neq 0}{if $post.id3.audio.bitrate neq 0}{round($post.id3.audio.bitrate / 1000)}кб/с, {if $post.id3.audio.sample_rate neq 0}{/if}{/if}{if $post.id3.audio.sample_rate neq 0}{$post.id3.audio.sample_rate / 1000}кГц{/if}{/if}{if $post.image_w > 0 && $post.image_h > 0}{$post.image_w}x{$post.image_h}{/if}{if $post.file_original neq '' && $post.file_original neq $post.file}{$post.file_original}.{$post.file_type}{/if}{if $post.id3.playtime_string neq ''}, {$post.id3.playtime_string}{/if})</div>
			  {if $post.file_type eq 'mp3'}
			    <p class="_player">
			      <!--[if !IE]> -->
			      <object type="application/x-shockwave-flash" data="{%KU_WEBPATH}/inc/player/player.swf?playerID={$post.id}&amp;soundFile={$file_path}/src/{$post.file|utf8_encode|urlencode}.mp3{if $post.id3.comments_html.artist.0 neq ''}&amp;artists={$post.id3.comments_html.artist.0}{/if}{if $post.id3.comments_html.title.0 neq ''}&amp;titles={$post.id3.comments_html.title.0|html_entity_decode|utf8_encode|urlencode}{/if}&amp;wmode=transparent" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,22,87" width="290" height="24">
			      <param name="wmode" value="transparent" />
			      <!-- <![endif]-->
			      <!--[if IE]>
			      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,22,87" width="290" height="24">
			      <param name="movie" value="{%KU_WEBPATH}/inc/player/player.swf?playerID={$post.id}&amp;soundFile={$file_path}/src/{$post.file|utf8_encode|urlencode}.mp3{if $post.id3.comments_html.artist.0 neq ''}&amp;artists={$post.id3.comments_html.artist.0}{/if}{if $post.id3.comments_html.title.0 neq ''}&amp;titles={$post.id3.comments_html.title.0|html_entity_decode|utf8_encode|urlencode}{/if}&amp;wmode=transparent" />
			      <param name="wmode" value="transparent" />
			      <!-->
			      </object>
			      <!-- <![endif]-->
			      </p>
			  {/if}
				{if %KU_THUMBMSG}
					<span class="thumbnailmsg"> 
					{if $post.file_type neq 'jpg' && $post.file_type neq 'gif' && $post.file_type neq 'png' && $post.videobox eq ''}
						{t}Extension icon displayed, click image to open file.{/t}
					{else}
						{t}Thumbnail displayed, click image for full size.{/t}
					{/if}
					</span>
				{/if}
			{/if}
			{if $post.videobox eq '' && $post.file neq '' && ( $post.file_type eq 'jpg' || $post.file_type eq 'gif' || $post.file_type eq 'png')}
				{if $post.file eq 'removed'}
					<div class="nothumb">
						{t}File<br />Removed{/t}
					</div>
				{else}
<a href="{$file_path}/src/{$post.file}.{$post.file_type}" onclick="javascript:expandimg('{$post.id}', '{$file_path}/src/{$post.file}.{$post.file_type}', '{$file_path}/thumb/{$post.file}s.{$post.file_type}', '{$post.image_w}', '{$post.image_h}', '{$post.thumb_w}', '{$post.thumb_h}');return false;"><span id="thumb{$post.id}"><img src="{$file_path}/thumb/{$post.file}s.{$post.file_type}" alt="{$post.id}" class="thumb" height="{$post.thumb_h}" width="{$post.thumb_w}" /></span></a>{/if}{elseif $post.nonstandard_file neq ''}{if $post.file eq 'removed'}<div class="nothumb">{t}Файл<br />удалён{/t}</div>{else}<a href="{$file_path}/src/{$post.file}.{$post.file_type}"><span id="thumb{$post.id}"><img src="{$post.nonstandard_file}" alt="{$post.id}" class="thumb" height="{$post.thumb_h}" width="{$post.thumb_w}" /></span></a>{/if}{/if}<a name="{$post.id}"></a>
			<label>
			<input type="checkbox" name="post[]" value="{$post.id}" />
			{if $post.subject neq ''}
				<span class="filetitle">
					{$post.subject}
				</span>
			{/if}
			{strip}
				<span class="postername">
				{if $post.email && $board.anonymous}
					<a href="mailto:{$post.email}">
				{/if}
				{if $post.name eq '' && $post.tripcode eq ''}
					{$board.anonymous}
				{elseif $post.name eq '' && $post.tripcode neq ''}
				{else}
					{$post.name}
				{/if}
				{if $post.email neq '' && $board.anonymous neq ''}
					</a>
				{/if}

				</span>

				{if $post.tripcode neq ''}
					<span class="postertrip">!{$post.tripcode}</span>
				{/if}
			{/strip}
			{if $post.posterauthority eq 1}
				<span class="admin">
					&#35;&#35;&nbsp;{t}$локалзой{/t}&nbsp;&#35;&#35;
				</span>
			{elseif $post.posterauthority eq 4}
				<span class="mod">
					&#35;&#35;&nbsp;{t}$cупер мод{/t}&nbsp;&#35;&#35;
				</span>
			{elseif $post.posterauthority eq 2}
				<span class="mod">
					&#35;&#35;&nbsp;{t}$мод{/t}&nbsp;&#35;&#35;
				</span>
			{/if}
			{$post.timestamp_formatted}
			</label>
			<span class="reflink">
				{$post.reflink}
			</span>
			{if $board.showid}
				ID: {$post.ipmd5|substr:0:6}
			{/if}
			<span id="dnb-{$board.name}-{$post.id}-y"></span>
			<br />
		{else}
		{if $numimages > 0 && $isexpand && $.foreach.postsloop.first}
				<a href="#top" onclick="javascript:
				{foreach key=postkey2 item=post2 from=$posts}
					{if $post2.parentid neq 0}
						{if $post2.file_type eq 'jpg' || $post2.file_type eq 'gif' || $post2.file_type eq 'png'}
							expandimg('{$post2.id}', '{$file_path}/src/{$post2.file}.{$post2.file_type}', '{$file_path}/thumb/{$post2.file}s.{$post2.file_type}', '{$post2.image_w}', '{$post2.image_h}', '{$post2.thumb_w}', '{$post2.thumb_h}');
						{/if}
					{/if}
				{/foreach}
				return false;">{t}Развернуть все изображения{/t}</a>
			{/if}

			<table>
				<tbody>
				<tr>
					<!--<td class="doubledash">
						&gt;&gt;
					</td>-->
					<td class="reply" id="reply{$post.id}">
						<a name="{$post.id}"></a>
						<label>
						<input type="checkbox" name="post[]" value="{$post.id}" />
						
						
						{if $post.subject neq ''}
							<span class="filetitle">
								{$post.subject}
							</span>
						{/if}
						{strip}
							<span class="postername">
							
							{if $post.email && $board.anonymous}
								<a href="mailto:{$post.email}">
							{/if}
							{if $post.name eq '' && $post.tripcode eq ''}
								{$board.anonymous}
							{elseif $post.name eq '' && $post.tripcode neq ''}
							{else}
								{$post.name}
							{/if}
							{if $post.email neq '' && $board.anonymous neq ''}
								</a>
							{/if}

							</span>

							{if $post.tripcode neq ''}
								<span class="postertrip">!{$post.tripcode}</span>
							{/if}
						{/strip}
						{if $post.posterauthority eq 1}
							<span class="admin">
								&#35;&#35;&nbsp;{t}$локалзой{/t}&nbsp;&#35;&#35;
							</span>
						{elseif $post.posterauthority eq 4}
							<span class="mod">
								&#35;&#35;&nbsp;{t}$супер мод{/t}&nbsp;&#35;&#35;
							</span>
						{elseif $post.posterauthority eq 2}
							<span class="mod">
								&#35;&#35;&nbsp;{t}$мод{/t}&nbsp;&#35;&#35;
							</span>
						{/if}
						{$post.timestamp_formatted}
						</label>

						<span class="reflink">
							{$post.reflink}
						</span>
						{if $board.showid}
							ID: {$post.ipmd5|substr:0:6}
						{/if}
						<span class="extrabtns">
						{if $post.locked eq 1}
							<img style="border: 0;" src="{$boardpath}css/locked.gif" alt="{t}Закрыт{/t}" />
						{/if}
						{if $post.stickied eq 1}
							<img style="border: 0;" src="{$boardpath}css/sticky.gif" alt="{t}Закреплён{/t}" />
						{/if}
						</span>
						<span id="dnb-{$board.name}-{$post.id}-n"></span>
						{if ($post.file neq '' || $post.file_type neq '' ) && (( $post.videobox eq '' && $post.file neq '') && $post.file neq 'removed')}
							<br />
			    <span class="filesize">{if $post.file_type eq 'mp3'}{t}Аудио: {/t}{else}{t}Файл: {/t}{/if}{if $post.file_type neq 'jpg' && $post.file_type neq 'gif' && $post.file_type neq 'png' && $post.videobox eq ''}<a href="{$file_path}/src/{$post.file}.{$post.file_type}">{else}<a href="{$file_path}/src/{$post.file}.{$post.file_type}" onclick="javascript:expandimg('{$post.id}', '{$file_path}/src/{$post.file}.{$post.file_type}', '{$file_path}/thumb/{$post.file}s.{$post.file_type}', '{$post.image_w}', '{$post.image_h}', '{$post.thumb_w}', '{$post.thumb_h}');return false;">{/if}{if isset($post.id3.comments_html)}{if $post.id3.comments_html.artist.0 neq ''}{$post.id3.comments_html.artist.0} - {if $post.id3.comments_html.title.0 neq ''}{/if}{/if}{if $post.id3.comments_html.title.0 neq ''}{$post.id3.comments_html.title.0}{/if}</a> {else}{$post.file}.{$post.file_type}</a> {/if}({$post.file_size_formatted}{if  $post.file_type neq 'jpg' && $post.file_type neq 'gif' && $post.file_type neq 'png' && $post.file_type neq 'mp3'}{else}, {/if}{if $post.id3.comments_html.bitrate neq 0 || $post.id3.audio.sample_rate neq 0}{if $post.id3.audio.bitrate neq 0}{round($post.id3.audio.bitrate / 1000)}кб/с, {if $post.id3.audio.sample_rate neq 0}{/if}{/if}{if $post.id3.audio.sample_rate neq 0}{$post.id3.audio.sample_rate / 1000}кГц{/if}{/if}{if $post.image_w > 0 && $post.image_h > 0}{$post.image_w}x{$post.image_h}{/if}{if $post.id3.playtime_string neq ''}, {$post.id3.playtime_string}{/if})</span>
			    {if $post.file_type eq 'mp3'}
			      <p class="_player">
				<!--[if !IE]> -->
				<object type="application/x-shockwave-flash" data="{%KU_WEBPATH}/inc/player/player.swf?playerID={$post.id}&amp;soundFile={$file_path}/src/{$post.file|utf8_encode|urlencode}.mp3{if $post.id3.comments_html.artist.0 neq ''}&amp;artists={$post.id3.comments_html.artist.0}{/if}{if $post.id3.comments_html.title.0 neq ''}&amp;titles={$post.id3.comments_html.title.0|html_entity_decode|utf8_encode|urlencode}{/if}&amp;wmode=transparent" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,22,87" width="290" height="24">
				<param name="wmode" value="transparent" />
				<!-- <![endif]-->
				<!--[if IE]>
				<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,22,87" width="290" height="24">
				<param name="movie" value="{%KU_WEBPATH}/inc/player/player.swf?playerID={$post.id}&amp;soundFile={$file_path}/src/{$post.file|utf8_encode|urlencode}.mp3{if $post.id3.comments_html.artist.0 neq ''}&amp;artists={$post.id3.comments_html.artist.0}{/if}{if $post.id3.comments_html.title.0 neq ''}&amp;titles={$post.id3.comments_html.title.0|html_entity_decode|utf8_encode|urlencode}{/if}&amp;wmode=transparent" />
				<param name="wmode" value="transparent" />
				<!-->
				</object>
				<!-- <![endif]-->
			      </p>
			    {/if}
			    {if %KU_THUMBMSG}
				    <span class="thumbnailmsg"> 
				    {if $post.file_type neq 'jpg' && $post.file_type neq 'gif' && $post.file_type neq 'png' && $post.videobox eq ''}
					    {t}Extension icon displayed, click image to open file.{/t}
				    {else}
					    {t}Thumbnail displayed, click image for full size.{/t}
				    {/if}
				    </span>
			    {/if}

			{/if}
                <table>
                    <tr>
                        <td>
						{if $post.videobox eq '' && $post.file neq '' && ( $post.file_type eq 'jpg' || $post.file_type eq 'gif' || $post.file_type eq 'png')}
							{if $post.file eq 'removed'}
								<div class="nothumb">
									{t}File<br />Removed{/t}
								</div>
							{else}
								<a href="{$file_path}/src/{$post.file}.{$post.file_type}" onclick="javascript:expandimg('{$post.id}', '{$file_path}/src/{$post.file}.{$post.file_type}', '{$file_path}/thumb/{$post.file}s.{$post.file_type}', '{$post.image_w}', '{$post.image_h}', '{$post.thumb_w}', '{$post.thumb_h}');return false;">
								<span id="thumb{$post.id}"><img src="{$file_path}/thumb/{$post.file}s.{$post.file_type}" alt="{$post.id}" class="thumb" height="{$post.thumb_h}" width="{$post.thumb_w}" /></span>
								</a>
							{/if}
						{elseif $post.nonstandard_file neq ''}
<!-- 							<br /> -->
							{if $post.file eq 'removed'}
								<div class="nothumb">
									{t}File<br />Removed{/t}
								</div>
							{else}
								<a href="{$file_path}/src/{$post.file}.{$post.file_type}">
								<span id="thumb{$post.id}"><img src="{$post.nonstandard_file}" alt="{$post.id}" class="thumb" height="{$post.thumb_h}" width="{$post.thumb_w}" /></span>
								</a>
							{/if}
						{/if}
                        </td>
		{/if}
		<td>
			<blockquote>
			{if $post.videobox}
				{$post.videobox}
			{/if}
			{$post.message}
			</blockquote>
		</td>
        </tr>
        </table>
		{if not $post.stickied && $post.parentid eq 0 && (($board.maxage > 0 && ($post.timestamp + ($board.maxage * 3600)) < (time() + 7200 ) ) || ($post.deleted_timestamp > 0 && $post.deleted_timestamp <= (time() + 7200)))}
			<span class="oldpost">
				{t}Marked for deletion (old){/t}
			</span>
			<br />
		{/if}
		{if $post.parentid eq 0}
			{if $modifier eq 'last50'}
					<span class="omittedposts">
							{$replycount-50}
							{if $replycount-50 eq 1}
									{t lower="yes"}Post{/t} 
							{else}
									{t lower="yes"}Posts{/t} 
							{/if}
					{t}omitted{/t}. {t}Last 50 shown{/t}.
					</span>
			{/if}
			{if $numimages > 0}
				<a href="#top" onclick="javascript:
				{foreach key=postkey2 item=post2 from=$posts}
					{if $post2.parentid neq 0}
						{if $post2.file_type eq 'jpg' || $post2.file_type eq 'gif' || $post2.file_type eq 'png'}
							expandimg('{$post2.id}', '{$file_path}/src/{$post2.file}.{$post2.file_type}', '{$file_path}/thumb/{$post2.file}s.{$post2.file_type}', '{$post2.image_w}', '{$post2.image_h}', '{$post2.thumb_w}', '{$post2.thumb_h}');
						{/if}
					{/if}
				{/foreach}
				return false;">{t}Развернуть все изображения{/t}</a>
			{/if}
		{else}
				</td>
			</tr>
		</tbody>
		</table>
		{/if}
	{/foreach}
	</div>
	{if $modifier eq 'first100'}
		<span class="omittedposts" style="float: left">
			{$replycount-100}
			{if $replycount-100 eq 1}
				{t lower="yes"}Post{/t} 
			{else}
				{t lower="yes"}Posts{/t} 
			{/if}
			{t}omitted{/t}. {t}Last 50 shown{/t}.
		</span>
	{/if}
	{if not $isread}
		{if $replycount > 2}
			<span style="float:right">
				&#91;<a href="/{$board.name}/">{t}Вернуться{/t}</a>&#93;
				{if %KU_FIRSTLAST && ( count($posts) > 50 || $replycount > 50)}
					&#91;<a href="/{$board.name}/res/{$posts.0.id}.html">{t}Весь тред{/t}</a>&#93; 
					&#91;<a href="/{$board.name}/res/{$posts.0.id}+50.html">{t}Последние 50 постов{/t}</a>&#93;
					{if ( count($posts) > 100 || $replycount > 100) }
						&#91;<a href="/{$board.name}/res/{$posts.0.id}-100.html">{t}Первые 100 постов{/t}</a>&#93;
					{/if}
				{/if}
			</span>
		{/if}
	</div>
	{if not $isexpand}
	<hr />
	{/if}
{/if}