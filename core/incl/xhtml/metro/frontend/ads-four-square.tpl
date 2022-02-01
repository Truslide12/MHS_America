<section id="business-tiles" class="hidden-xs">{if $page.pragpage == "state"}{if ('usemetros'|s) == 1 && $page.metrocount != 0}<a name="area" id="area_a"></a>{else}<a name="counties" id="counties_a"></a>{/if}{/if}
<header{if $page.canvas.blacknotices == 1} class="black"{/if}>Sponsored Advertisements</header>
{if $page.ads[0].id == 0}<div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-a"><a href="{$page.ads[0].url}" target="_blank"><img src="{$page.ads[0].image}" class="static"><img src="{$page.ads[0].hover}" class="hover">{if $page.ads[0].title != ''}{$page.ads[0].title}{else}&nbsp;{/if}</a></div>
{/if}{if $page.ads[1].id == 0}<div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-b"><a href="{$page.ads[1].url}" target="_blank"><img src="{$page.ads[1].image}" class="static"><img src="{$page.ads[1].hover}" class="hover">{if $page.ads[1].title != ''}{$page.ads[1].title}{else}&nbsp;{/if}</a></div>
{/if}{if $page.ads[2].id == 0}<div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-c"><a href="{$page.ads[2].url}" target="_blank"><img src="{$page.ads[2].image}" class="static"><img src="{$page.ads[2].hover}" class="hover">{if $page.ads[2].title != ''}{$page.ads[2].title}{else}&nbsp;{/if}</a></div>
{/if}{if $page.ads[3].id == 0}<div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-d"><a href="{$page.ads[3].url}" target="_blank"><img src="{$page.ads[3].image}" class="static"><img src="{$page.ads[3].hover}" class="hover">{if $page.ads[3].title != ''}{$page.ads[3].title}{else}&nbsp;{/if}</a></div>
{/if}
</section>