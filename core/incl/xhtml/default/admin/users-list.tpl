{extends "master_full.tpl"}
{block "content"}
<div id="pad-wrapper" class="users-list">
            <div class="row header">
                <h3>Users</h3>
                <div class="col-md-10 col-sm-12 col-xs-12 pull-right">
                    <input type="text" class="col-md-5 search" placeholder="Type a user's name...">
                    
                    <!-- custom popup filter -->
                    <!-- styles are located in css/elements.css -->
                    <!-- script that enables this dropdown is located in js/theme.js -->
                    <div class="ui-dropdown">
                        <div class="head" data-toggle="tooltip" title="Click me!">
                            Filter users
                            <i class="arrow-down"></i>
                        </div>  
                        <div class="dialog">
                            <div class="pointer">
                                <div class="arrow"></div>
                                <div class="arrow_border"></div>
                            </div>
                            <div class="body">
                                <p class="title">
                                    Show users where:
                                </p>
                                <div class="form">
                                    <select>
                                        <option>Name</option>
                                        <option>Email</option>
                                        <option>Number of orders</option>
                                        <option>Signed up</option>
                                        <option>Last seen</option>
                                    </select>
                                    <select>
                                        <option>is equal to</option>
                                        <option>is not equal to</option>
                                        <option>is greater than</option>
                                        <option>starts with</option>
                                        <option>contains</option>
                                    </select>
                                    <input type="text" class="form-control" />
                                    <a class="btn-flat small">Add filter</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/users/new" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        NEW USER
                    </a>
                </div>
            </div>

            <!-- Users table -->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-4 sortable">
                                    Name
                                </th>
                                <th class="col-md-2 sortable">
                                    Status
                                </th>
                                <th class="col-md-2 sortable">
                                    Signed up
                                </th>
                                <th class="col-md-1 sortable">
                                    Total spent
                                </th>
                                <th class="col-md-3 sortable align-right">
									Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        {foreach from=$page.users item=user}<!-- row -->
                        <tr>
                            <td>
                                <img src="{$user.email|get_gravatar:45}&d=mm" class="img-circle avatar hidden-phone" />
                                <a href="/users/view/{$user.id}" class="name">{$user.display_name|capitalize}</a>
                                <span class="subtext">{$user.user_name}</span>
                            </td>
							<td>
								{if $user.banned == 1}<span class="label label-danger">Suspended</span>{elseif $user.active == 1}<span class="label label-success">Active</span>{else}<span class="label label-default">Inactive</span>{/if}
							</td>
                            <td>
                                {$user.sign_up_stamp|date_format:'%b %e,%Y'}
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td class="align-right">
                                <a href="#">{$user.email}</a>
                            </td>
                        </tr>
						{foreachelse}
							<tr>
								<td><p class="alert alert-danger">Wut dabuq? No users to display? 0.o)</p></td>
							</tr>
						{/foreach}
                        </tbody>
                    </table>
                </div>                
            </div>
            <ul class="pagination pull-right">
                {if $page.page_count > 1 && $page.current_page != 1}<li><a href="?p={$page.current_page-1}">&#8249;</a></li>{/if}
				{foreach from=$page.pages item=pg}{if $pg <= $page.page_count}
				{if $pg == $page.current_page}
				<li class="active"><a href="#">{$pg}</a></li>
				{else}
				<li><a href="?p={$pg}">{$pg}</a></li>
				{/if}
				{/if}{/foreach}
                {if $page.page_count < $page.page_count && $page.current_page != $page.page_count}<li><a href="?p={$page.current_page+1}">&#8250;</a></li>{/if}
            </ul>
            <!-- end users table -->
        </div>
{/block}