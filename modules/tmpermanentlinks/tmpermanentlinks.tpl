<!-- Block permanent links module -->
<div id="permanent_links">
	<!-- Sitemap -->
	<div class="sitemap">
		<a href="{$link->getPageLink('sitemap')}"><img src="{$img_dir}icon/sitemap.gif" alt="{l s='sitemap' mod='tmpermanentlinks'}" title="{l s='sitemap' mod='tmpermanentlinks'}" /></a>&nbsp;
		<a href="{$link->getPageLink('sitemap')}">{l s='sitemap' mod='tmpermanentlinks'}</a>
	</div>
	<!-- Contact -->
	<div class="contact">
		<a href="{$link->getPageLink('contact', true)}"><img src="{$img_dir}icon/contact.gif" alt="{l s='contact' mod='tmpermanentlinks'}" title="{l s='contact' mod='tmpermanentlinks'}" /></a>&nbsp;
		<a href="{$link->getPageLink('contact', true)}">{l s='contact' mod='tmpermanentlinks'}</a>
	</div>
	<!-- Bookmark -->
	<div class="add_bookmark">
		<script type="text/javascript">
		writeBookmarkLink('{$come_from}', '{$shop_name|addslashes|addslashes}', '{l s='bookmark this page' mod='tmpermanentlinks'}', '{$img_dir}icon/star.gif');</script>&nbsp;
	</div>
</div>
<!-- /Block permanent links module -->