{extends file='parent:frontend/listing/index.tpl'}

{block name="gridconfig"}
	{$smarty.block.parent}

    {assign "grid" "g010" scope="global"}
{/block}

{block name='frontend_index_content_left'}{/block}