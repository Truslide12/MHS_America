{extends 'master_full.tpl'}
{block "content"}
<div id="pad-wrapper" class="user-profile">
            <!-- header -->
            <div class="row header">
                <div class="col-md-8">
                    <h3 class="name">Order #{$order.id}</h3>
                    <span class="area">{$order.date|date_format:'%b %e, %Y'}</span>
                </div>
                <a class="btn-flat icon pull-right delete-user" data-toggle="tooltip" title="Delete user" data-placement="top">
                    <i class="icon-trash"></i>
                </a>
            </div>

            <div class="row profile">
                <!-- bio, new note & orders column -->
                <div class="col-md-9 bio">
                    <div class="profile-box">
                        <!-- biography -->
                        <div class="col-md-12 section">
                            <h6>Biography</h6>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority have humour suffered alteration in believable some formhumour , by injected humour, or randomised words which don't look even slightly believable. </p>
                        </div>

                        <h6>Recent orders</h6>
                        <br>
                        <!-- recent orders table -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        Order ID
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Date
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Items
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Total amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        $ 3,500.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#510</a>
                                    </td>
                                    <td>
                                        Feb 22, 2013
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        $ 800.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#618</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        8
                                    </td>
                                    <td>
                                        $ 3,499.99
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- new comment form -->
                        <div class="col-md-12 section comment">
                            <h6>Add a quick note</h6>
                            <p>Add a note about this user to keep a history of your interactions.</p>
                            <textarea></textarea>
                            <a href="#">Attach files</a>
                            <div class="col-md-12 submit-box pull-right">
                                <input type="submit" class="btn-glow primary" value="Add Note">
                                <span>OR</span>
                                <input type="reset" value="Cancel" class="reset">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- side address column -->
                <div class="col-md-3 col-xs-12 address pull-right">
                    <h6>Address</h6>
                    <iframe width="300" height="133" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/?ie=UTF8&amp;t=m&amp;ll=19.715081,-155.071421&amp;spn=0.010746,0.025749&amp;z=14&amp;output=embed"></iframe>
                    <ul>
                        <li>{$profile.address}</li>
                        <li>{$profile.city_info.title}, {$profile.state_info.abbr|upper} {$profile.zipcode}</li>
                        <li class="ico-li">
                            <i class="ico-phone"></i>
                            {$profile.phone}
                        </li>
                         <li class="ico-li">
                            <i class="ico-mail"></i>
                            <a href="#">{$profile.email}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
{/block}