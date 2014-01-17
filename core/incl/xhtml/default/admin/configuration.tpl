{extends "master_full.tpl"}
{block "content"}
		<form method="POST" action="/configuration">
		<div id="pad-wrapper" class="form-page">
			<div class="row header">
				<h3>Site Configuration</h3>
				<button type="submit" class="btn-flat success pull-right">
					<span class="icon-ok"></span>
					SAVE CHANGES
                </button>
			</div>
			<div class="row form-wrapper">
				<div class="col-md-8 column">
							<input type="hidden" name="submitted" value="true">
							{foreach from=$page.settings item=setting}
							{if $setting.name == "shutdown"}{* Kept separate from the other settings *}
							{elseif $setting.name == "domain"}
							<div class="field-box">
								<label>{$setting.title}</label>
								<div class="col-md-7">
									<div class="predefined">
										<span class="value">http://</span>
										<input class="form-control inline-input" type="text" name="{$setting.name}" value="{$setting.value}">
									</div>
								</div>
							</div>
							{elseif $setting.type == 0}
							<div class="field-box">
								<label>{$setting.title}</label>
								<div class="col-md-7">
									<input class="form-control inline-input" type="text" name="{$setting.name}" value="{$setting.value}"{if $setting.readonly == 1} readonly="readonly"{/if}>
								</div>                            
							</div>
							{elseif $setting.type == 1}
							<div class="field-box">
								<label>{$setting.title}</label>
								<div class="col-md-8">
									<label class="radio">
										<input type="radio" name="{$setting.name}" id="{$setting.name}1" value="1"{if $setting.value == 1} checked{/if}>
										On
									</label>
									<label class="radio">
										<input type="radio" name="{$setting.name}" id="{$setting.name}2" value="0"{if $setting.value == 0} checked{/if}>
										Off
									</label>
								</div>
							</div>
							{/if}
							{/foreach}
					</div>
				</div>
		</div>
		</form>
{/block}
{block "endscripts"}
<script src="/detail/js/wysihtml5-0.3.0.js"></script>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="/detail/js/bootstrap.min.js"></script>
    <script src="/detail/js/bootstrap.datepicker.js"></script>
    <script src="/detail/js/jquery.uniform.min.js"></script>
    <script src="/detail/js/select2.min.js"></script>
	<script src="/detail/js/theme.js"></script>
	<script type="text/javascript">
        $(function () {
            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();
            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });
            // 	datepicker plugin
            $('.input-datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        });
    </script>
{/block}