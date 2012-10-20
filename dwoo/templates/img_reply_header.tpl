&#91;<a href="{%KU_WEBFOLDER}{$board.name}/">{t}Return{/t}</a>&#93;
{if %KU_FIRSTLAST && ( count($posts) > 50 || $replycount > 50)}
	&#91;<a href="{%KU_WEBFOLDER}{$board.name}/res/{$posts.0.id}.html">{t}Весь тред{/t}</a>&#93; 
	&#91;<a href="{%KU_WEBFOLDER}{$board.name}/res/{$posts.0.id}+50.html">{t}Последние 50 постов{/t}</a>&#93;
	{if ( count($posts) > 100 || $replycount > 100) }
		&#91;<a href="{%KU_WEBFOLDER}{$board.name}/res/{$posts.0.id}-100.html">{t}Первые 100 постов{/t}</a>&#93;
	{/if}
{/if}
{if not $isread}
	<div class="replymode">{t}Ответ в тред{/t}
	{if $modifier eq 'first100'}
		[{t}Первые 100 постов{/t}]
	{elseif $modifier eq 'last50'}
		[{t}Последние 50 постов{/t}]
	{/if}
{else}
	&#91;<a href="{%KU_WEBFOLDER}{$board.name}/res/{$posts.0.id}.html">{t}Весь тред{/t}</a>&#93; 
{/if}
</div>
