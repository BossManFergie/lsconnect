{include file='_head.tpl'}
{include file='_header.tpl'}

{if !$user->_logged_in}
    <!-- page content -->
    <div class="index-wrapper" {if !$system['system_wallpaper_default'] && $system['system_wallpaper']} style="background-image: url('{$system['system_uploads']}/{$system['system_wallpaper']}')" {/if}>
        <div class="container">
            <div class="index-intro">
                <h1>
                    {__("Welcome to")} {$system['system_title']}
                </h1>
                <p>
                    {__("Share your memories, connect with others, make new friends")}
                </p>
            </div>

            <div class="row relative">
                
                {if $random_users}
                    <!-- random 4 users -->
                    {foreach $random_users as $random_user}
                        <a href="{$system['system_url']}/{$random_user['user_name']}" class="fly-head" 
                            {if $random_user@index == 0} style="top: 140px;left: 50px;" {/if}
                            {if $random_user@index == 1} style="bottom: 60px;left: 210px;" {/if}
                            {if $random_user@index == 2} style="top: 140px;right: 50px;" {/if}
                            {if $random_user@index == 3} style="bottom: 60px;right: 210px;" {/if}
                            data-toggle="tooltip" data-placement="top" title="{$random_user['user_fullname']}">
                            <img src="{$random_user['user_picture']}">
                        </a>
                    {/foreach}
                    <!-- random 4 users -->
                {/if}

                <!-- sign in/up form -->
                {include file='_sign_form.tpl'}
                <!-- sign in/up form -->
            </div>
        </div>
    </div>

    {if $system['directory_enabled']}
        {include file='_directory.tpl'}
    {/if}
    <!-- page content -->
{else}
    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                {include file='_sidebar.tpl'}
            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-7">
                        <!-- announcments -->
                        {include file='_announcements.tpl'}
                        <!-- announcments -->

                        {if $view == ""}
                            <!-- publisher -->
                            {include file='_publisher.tpl' _handle="me" _privacy=true}
                            <!-- publisher -->

                            <!-- boosted post -->
                            {if $boosted_post}
                                {include file='_boosted_post.tpl' post=$boosted_post}
                            {/if}
                            <!-- boosted post -->

                            <!-- posts stream -->
                            {include file='_posts.tpl' _get="newsfeed"}
                            <!-- posts stream -->

                        {elseif $view == "saved"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="saved" _title=__("Saved Posts")}
                            <!-- saved posts stream -->

                        {elseif $view == "products"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="product" _title=__("My Products")}
                            <!-- saved posts stream -->

                        {elseif $view == "pages"}
                            <div class="panel panel-default">
                                <div class="panel-heading light clearfix">
                                    <div class="pull-right flip">
                                        <a href="{$system['system_url']}/create/page" class="btn btn-default btn-sm">
                                            <i class="fa fa-flag fa-fw pr10"></i> {__("Create Page")}
                                        </a>
                                    </div>
                                    <div class="mt5">
                                        <strong>{__("Your Pages")}</strong>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    {if count($user->_data['pages']) > 0}
                                        <ul>
                                            {foreach $user->_data['pages'] as $_page}
                                            {include file='__feeds_page.tpl'}
                                            {/foreach}
                                        </ul>
                                    {else}
                                        <p class="text-center text-muted">
                                            {__("No pages available")}
                                        </p>
                                    {/if}

                                    <!-- see-more -->
                                    {if count($user->_data['pages']) >= $system['max_results']}
                                        <div class="alert alert-info see-more js_see-more" data-get="pages">
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    {/if}
                                    <!-- see-more -->

                                </div>
                            </div>

                        {elseif $view == "groups"}
                            <div class="panel panel-default">
                                <div class="panel-heading light clearfix">
                                    <div class="pull-right flip">
                                        <a href="{$system['system_url']}/create/group" class="btn btn-default btn-sm">
                                            <i class="fa fa-flag fa-fw pr10"></i> {__("Create Group")}
                                        </a>
                                    </div>
                                    <div class="mt5">
                                        <strong>{__("Your Groups")}</strong>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    {if count($user->_data['groups']) > 0}
                                        <ul>
                                            {foreach $user->_data['groups'] as $_group}
                                            {include file='__feeds_group.tpl'}
                                            {/foreach}
                                        </ul>
                                    {else}
                                        <p class="text-center text-muted">
                                            {__("No groups available")}
                                        </p>
                                    {/if}

                                    <!-- see-more -->
                                    {if count($user->_data['groups']) >= $system['max_results']}
                                        <div class="alert alert-info see-more js_see-more" data-get="groups">
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    {/if}
                                    <!-- see-more -->

                                </div>
                            </div>

                        {elseif $view == "create_page"}
                            <!-- create page -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="mt5">
                                        <strong>{__("Create Page")}</strong>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms" data-url="pages_groups/create.php?type=page&do=create">
                                        <div class="form-group">
                                            <label for="category">{__("Category")}:</label>
                                            <select class="form-control" name="category" id="category">
                                                {foreach $categories as $category}
                                                <option value="{$category['category_id']}">{$category['category_name']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">{__("Title")}:</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder='{__("Title of your page")}'>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">{__("Username")}:</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder='{__("Username, e.g. YouTubeOfficial")}'>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">{__("Description")}:</label>
                                            <textarea class="form-control" name="description" name="description"  placeholder='{__("Write about your page...")}'></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">{__("Create")}</button>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                            <!-- create page -->

                        {elseif $view == "create_group"}
                            <!-- create group -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="mt5">
                                        <strong>{__("Create Group")}</strong>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms" data-url="pages_groups/create.php?type=group&do=create">
                                        <div class="form-group">
                                            <label for="title">{__("Title")}:</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder='{__("Title of your group")}'>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">{__("Username")}:</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder='{__("Username, e.g. DevelopersGroup")}'>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">{__("Description")}:</label>
                                            <textarea class="form-control" name="description" placeholder='{__("Write about your group...")}'></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">{__("Create")}</button>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                            <!-- create group -->

                        {elseif $view == "games"}
                            <div class="panel panel-default">
                                <div class="panel-heading light clearfix">
                                    <div class="mt5">
                                        <strong>{__("Games")}</strong>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    {if count($games) > 0}
                                        <ul>
                                            {foreach $games as $_game}
                                            {include file='__feeds_game.tpl'}
                                            {/foreach}
                                        </ul>
                                    {else}
                                        <p class="text-center text-muted">
                                            {__("No games available")}
                                        </p>
                                    {/if}

                                    <!-- see-more -->
                                    {if count($games) >= $system['max_results']}
                                        <div class="alert alert-info see-more js_see-more" data-get="games">
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    {/if}
                                    <!-- see-more -->

                                </div>
                            </div>

                        {/if}
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-sm-12 col-md-5">
                        <!-- pro members -->
                        {if count($pro_members) > 0}
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                                        <div class="pull-right flip">
                                            <small><a href="{$system['system_url']}/packages">{__("Upgrade to Pro")}</a></small>
                                        </div>
                                    {/if}
                                    <strong class="text-primary"><i class="fa fa-bolt fa-fw"></i> {__("Pro Members")}</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        {foreach $pro_members as $_member}
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="{$system['system_url']}/{$_member['user_name']}" style="background-image:url({$_member['user_picture']});" >
                                                    <span class="friend-name">{$_member['user_fullname']}</span>
                                                </a>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}
                        <!-- pro members -->


                        <!-- boosted pages -->
                        {if count($promoted_pages) > 0}
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                                        <div class="pull-right flip">
                                            <small><a href="{$system['system_url']}/packages">{__("Upgrade to Pro")}</a></small>
                                        </div>
                                    {/if}
                                    <strong class="text-primary"><i class="fa fa-bullhorn fa-fw"></i> {__("Promoted Pages")}</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        {foreach $promoted_pages as $_page}
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="{$system['system_url']}/pages/{$_page['page_name']}" style="background-image:url({$_page['page_picture']});" >
                                                    <span class="friend-name">{$_page['page_title']}</span>
                                                </a>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}
                         <!-- boosted pages -->

                        {include file='_ads.tpl'}
                        {include file='_widget.tpl'}

                        <!-- people you may know -->
                        {if count($new_people) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="{$system['system_url']}/friends/requests">{__("See All")}</a></small>
                                    </div>
                                    <strong>{__("People you may know")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $new_people as $_user}
                                        {include file='__feeds_user.tpl' _connection="add" _small=true}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                         <!-- people you may know -->

                        <!-- suggested pages -->
                        {if count($new_pages) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <strong>{__("Suggested Pages")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $new_pages as $_page}
                                        {include file='__feeds_page.tpl'}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        {if count($new_groups) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <strong>{__("Suggested Groups")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $new_groups as $_group}
                                        {include file='__feeds_group.tpl'}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- suggested groups -->

                        <!-- mini footer -->
                        {if ($view == "" || $view == "saved") && (count($new_people) > 0 || count($new_pages) > 0 || count($new_groups) > 0)}
                            <div class="row plr10 hidden-xs">
                                <div class="col-xs-12 mb5">
                                    {if count($static_pages) > 0}
                                        {foreach $static_pages as $static_page}
                                            <a href="{$system['system_url']}/static/{$static_page['page_url']}">
                                                {$static_page['page_title']}
                                            </a>{if !$static_page@last} · {/if}
                                        {/foreach}
                                    {/if}
                                    {if $system['contact_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/contacts">
                                            {__("Contacts")}
                                        </a>
                                    {/if}
                                    {if $system['directory_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/directory">
                                            {__("Directory")}
                                        </a>
                                    {/if}
                                    {if $system['market_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/market">
                                            {__("Market")}
                                        </a>
                                    {/if}
                                    {if $system['system_public']}
                                         · 
                                        <a href="{$system['system_url']}/search">
                                            {__("Search")}
                                        </a>
                                    {/if}
                                </div>
                                <div class="col-xs-12">
                                    &copy; {'Y'|date} {$system['system_title']} · <span class="text-link" data-toggle="modal" data-url="#translator">{$system['language']['title']}</span>
                                </div>
                            </div>
                        {/if}
                        <!-- mini footer -->
                    </div>
                    <!-- right panel -->
                </div>
            </div>

        </div>
    </div>
    <!-- page content -->
{/if}

{include file='_footer.tpl'}