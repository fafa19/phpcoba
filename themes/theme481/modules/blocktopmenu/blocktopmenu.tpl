{if $MENU != ''}
	
<div class="clear"></div>
<div class="main-mobile-menu">
<div class="wrap-title">
  <h4>Categories </h4>
  <span class="open-mobile"></span>
</div>
  <ul class="menu-mobile">
{$MENU}
  </ul>
</div>
	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			{$MENU}
			{if $MENU_SEARCH}
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="{$link->getPageLink('search')}" method="get">
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'htmlall':'UTF-8'}{/if}" />
					</form>
				</li>
			{/if}
		</ul>
		<div class="sf-right">&nbsp;</div>
</div>
	<!--/ Menu -->
{/if}