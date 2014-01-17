{extends "master.tpl"}
{block "headerinclude"}
	<!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	{literal}<style type="text/css"> .login-bg  .alert-danger {width:400px;margin:-2em auto 2em;} </style>{/literal}
{/block}
{block "pagebody"}
    <div class="login-wrapper">
        <img class="logo" src="/_/images/elias/mhs-header-logo-solid-2.png">
		{foreach from=$page.errors item=err}<div class="alert alert-danger">
			<i class="icon-remove-sign"></i>
			{$err}
		</div>{/foreach}
        <div class="box">
            <div class="content-wrap">
                <h6>Log in</h6><form action="/account/login" method="POST">
				<input type="hidden" name="rqst" value="global">
                <input class="form-control" type="text" name="username" placeholder="Username">
                <input class="form-control" type="password" name="password" placeholder="Your password">
                {if 1==2}<a href="#" class="forgot">Forgot password?</a>{/if}
                <div class="remember">
                    <input id="remember-me" type="checkbox">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit" class="btn-glow primary login">Log in</button>
				</form>
            </div>
        </div>

        <div class="no-account" style="display:none;">
            <p>Don't have an account?</p>
            <a href="signup.html">Sign up</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/detail/js/bootstrap.min.js"></script>
    <script src="/detail/js/theme.js"></script>
{/block}