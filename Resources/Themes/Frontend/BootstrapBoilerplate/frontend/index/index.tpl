{extends file="parent:frontend/index/index.tpl"}

{* move main navigation out of container *}
{block name='frontend_index_navigation_categories_top'}{/block}

{block name='frontend_index_header_container'}
	{$smarty.block.parent}

	{include file='frontend/index/main-navigation.tpl'}
{/block}                                     