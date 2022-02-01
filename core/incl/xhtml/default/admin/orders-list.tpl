{extends "master_full.tpl"}
{block "content"}
		<div id="pad-wrapper" class="orders-list">
			<div class="row header">
                <h3>Orders</h3>
                <div class="col-md-10 col-sm-12 col-xs-12 pull-right">
					<div class="btn-group pull-right">
                            <button class="glow left small">All</button>
                            <button class="glow middle small">Pending</button>
                            <button class="glow right small">Completed</button>
                        </div>
                        <input type="text" class="search order-search" placeholder="Search for an order.." />
                </div>
            </div>
			
			<!-- orders table -->
            <div class="table-wrapper orders-table section">

                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-2">
                                    Order ID
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                    Date
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                    Payor
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                    Status
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                    Plan
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                    Total amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$page.orders item=order}<!-- row -->
                            <tr class="first">
                                <td>
                                    <a href="/orders/view/{$order.id}">#{$order.id}</a>
                                </td>
                                <td>
                                    {$order.date|date_format:'%b %e, %Y'}
                                </td>
                                <td>
                                    <img src="{$order.user.email|get_gravatar:32}&d=mm" class="img-circle avatar hidden-phone">
									<a href="/users/view/{$order.user.id}" class="name">{$order.user.display_name}</a>
                                </td>
                                <td>
                                    <span class="label label-{$order.status_class}">{$order.status_message}</span>
                                </td>
                                <td>
                                    {$order.plan_info.title}
                                </td>
                                <td>
                                    {$order.amount|showprice:true}
                                </td>
                            </tr>
							{/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end orders table -->
		</div>
{/block}