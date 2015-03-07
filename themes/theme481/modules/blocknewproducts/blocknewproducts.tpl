<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4><a href="{$link->getPageLink('new-products')}" title="{l s='New products' mod='blocknewproducts'}">{l s='New products' mod='blocknewproducts'}</a></h4>
	<div class="block_content">
	{if $new_products !== false}
	<ul>
		{foreach from=$new_products item='product' name='newProducts'}
			{if $smarty.foreach.newProducts.index <= 2}
		<li class="bordercolor">
			{if $smarty.foreach.newProducts.iteration <= 3}
			<a class="products_block_img bordercolor" href="{$product.link}" title="{$product.legend|escape:html:'UTF-8'}"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small')}" alt="{$product.legend|escape:html:'UTF-8'}" /></a>
			<div>
			{/if}
				<h5><a class="product_link" href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}">{$product.name|strip_tags|escape:html:'UTF-8'|truncate:25:'...'}</a></h5>
				<p class="des-main"><a class="product_descr" href="{$product.link}" title="{$product.description_short|escape:html:'UTF-8'|truncate:30:'...'}">{$product.description_short|strip_tags|escape:html:'UTF-8'|truncate:50:'...'}</a></p>
                				<p class="des-mob"><a class="product_descr" href="{$product.link}" title="{$product.description_short|escape:html:'UTF-8'|truncate:30:'...'}">{$product.description_short|strip_tags|escape:html:'UTF-8'|truncate:150:'...'}</a></p>
			{if $smarty.foreach.newProducts.iteration <= 2}</div>{/if}
		</li>
		{/if}
		{/foreach}
	</ul>
	<a href="{$link->getPageLink('new-products.php')}" title="{l s='All new products' mod='blocknewproducts'}" class="button_large">{l s='All new products' mod='blocknewproducts'}</a>	
	{else}
		<p>{l s='No new products at this time' mod='blocknewproducts'}</p>
	{/if}
	</div>
</div>
<!-- /MODULE Block new products -->