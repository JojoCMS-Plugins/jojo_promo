{if $promo}<div class="promo">{if $promotitles=='before'}
<h2>{$promo.title}</h2>{/if}{if $promo.image} 
<figure>{if $promo.link}<a href="{$promo.link}" title="{$promo.title}">{/if}<img src="{$SITEURL}/images/{$promoimages}/{$promo.image}" alt="">{if $promo.link}</a>{/if}</figure>{/if}{if $promotitles=='after'}
<h2>{$promo.title}</h2>{/if}
{$promo.description}{if $promo.link && $promolinktext}
<a class="more" href="{$promo.link}">{$promolinktext}</a>{/if}
</div>
{/if}
