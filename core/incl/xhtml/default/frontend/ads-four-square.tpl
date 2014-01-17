<section id="business-tiles">{if $page.pragpage == "state"}{if ('usemetros'|s) == 1 && $page.metrocount != 0}<a name="area" id="area_a"></a>{else}<a name="counties" id="counties_a"></a>{/if}{/if}
<header{if $page.canvas.blacknotices == 1} class="black"{/if}>Sponsored Advertisements</header>
{if $page.ads[0].id == 0}<div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-a"><img src="{$page.ads[0].image}" width="0" height="0"><img src="{$page.ads[0].hover}" width="0" height="0"><a href="{$page.ads[0].url}" target="_blank">{if $page.ads[0].title != ''}{$page.ads[0].title}{else}&nbsp;{/if}</a></div>
{/if}{if $page.ads[1].id == 0}<div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-b"><img src="{$page.ads[1].image}" width="0" height="0"><img src="{$page.ads[1].hover}" width="0" height="0"><a href="{$page.ads[1].url}" target="_blank">{if $page.ads[1].title != ''}{$page.ads[1].title}{else}&nbsp;{/if}</a></div>
{/if}{if $page.ads[2].id == 0}<div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-c"><img src="{$page.ads[2].image}" width="0" height="0"><img src="{$page.ads[2].hover}" width="0" height="0"><a href="{$page.ads[2].url}" target="_blank">{if $page.ads[2].title != ''}{$page.ads[2].title}{else}&nbsp;{/if}</a></div>
{/if}{if $page.ads[3].id == 0}<div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
{else}<div id="advert-d"><img src="{$page.ads[3].image}" width="0" height="0"><img src="{$page.ads[3].hover}" width="0" height="0"><a href="{$page.ads[3].url}" target="_blank">{if $page.ads[3].title != ''}{$page.ads[3].title}{else}&nbsp;{/if}</a></div>
{/if}
</section>
<style type="text/css">
{if $page.ads[0].id != 0}{literal}
#advert-a a {
  background: url({/literal}{$page.ads[0].image}{literal}) center center no-repeat;
}
#advert-a a:hover {
  background: url({/literal}{$page.ads[0].hover}{literal}) center center no-repeat;
}{/literal}{/if}
{if $page.ads[1].id != 0}{literal}
#advert-b a {
  background: url({/literal}{$page.ads[1].image}{literal}) center center no-repeat;
}
#advert-b a:hover {
  background: url({/literal}{$page.ads[1].hover}{literal}) center center no-repeat;
}{/literal}{/if}
{if $page.ads[2].id != 0}{literal}
#advert-c a {
  background: url({/literal}{$page.ads[2].image}{literal}) center center no-repeat;
}
#advert-c a:hover {
  background: url({/literal}{$page.ads[2].hover}{literal}) center center no-repeat;
}{/literal}{/if}
{if $page.ads[3].id != 0}{literal}
#advert-d a {
  background: url({/literal}{$page.ads[3].image}{literal}) center center no-repeat;
}
#advert-d a:hover {
  background: url({/literal}{$page.ads[3].hover}{literal}) center center no-repeat;
}{/literal}{/if}
</style>