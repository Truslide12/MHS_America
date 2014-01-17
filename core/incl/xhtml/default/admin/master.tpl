<!DOCTYPE html>
<html{if !$isUserLoggedIn} class="login-bg"{/if}>
<head>
	<title>{if ('title'|p)}{'title'|p} :: {/if}{$admintitle}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="/detail/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/detail/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->{foreach from=$page.libraries item=lib}
	<link rel="stylesheet" type="text/css" href="/detail/css/lib/{$lib}.css">{/foreach}

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/layout.css">
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/elements.css">
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/icons.css">
	{if $page.stylesheet}
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/detail/css/compiled/{$page.stylesheet}.css" type="text/css" media="screen">
	{/if}
	{if $isUserLoggedIn}<link rel="stylesheet" type="text/css" href="/detail/css/compiled/skins/dark.css">
	<link rel="stylesheet" type="text/css" href="/_/css/global.css">{/if}
{block "headerinclude"}{/block}
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
{block "pagebody"}{/block}
</body>
</html>