<ul class="nav nav-pills nav-stacked nav-home">
    <!-- basic -->
    <li>
        <a href="{$system['system_url']}/{$user->_data['user_name']}">
            <img src="{$user->_data.user_picture}" alt="{$user->_data['user_fullname']}">
            <span>{$user->_data['user_fullname']}</span>
        </a>
    </li>
    <li>
        <a href="{$system['system_url']}/settings/profile">
            <i class="fa fa-pencil-square fa-fw pr10"></i>
            {__("Edit Profile")}
        </a>
    </li>
    {if $user->_data['user_group'] == 1}
        <li>
            <a href="{$system['system_url']}/admincp">
                <i class="fa fa-tachometer fa-fw pr10"></i> 
                {__("Admin Panel")}
            </a>
        </li>
    {/if}
    <!-- basic -->

    <!-- favorites -->
    <li class="ptb5">
        <small class="text-muted">{__("favorites")|upper}</small>
    </li>

    <li {if $page== "index" && $view == ""}class="active"{/if}>
        <a href="{$system['system_url']}"><i class="fa fa-newspaper-o fa-fw pr10"></i> {__("News Feed")}</a>
    </li>
    <li>
        <a href="{$system['system_url']}/messages"><i class="fa fa-comments-o fa-fw pr10"></i> {__("Messages")}</a>
    </li>
    <li>
        <a href="{$system['system_url']}/{$user->_data['user_name']}/photos"><i class="fa fa-picture-o fa-fw pr10"></i> {__("Photos")}</a>
    </li>
    <li>
        <a href="{$system['system_url']}/{$user->_data['user_name']}/friends"><i class="fa fa-users fa-fw pr10"></i> {__("Friends")}</a>
    </li>
    <li {if $page== "index" && $view == "saved"}class="active"{/if}>
        <a href="{$system['system_url']}/saved"><i class="fa fa-bookmark fa-fw pr10"></i> {__("Saved")}</a>
    </li>
    {if $system['games_enabled']}
        <li {if $page== "index" && $view == "games"}class="active"{/if}>
            <a href="{$system['system_url']}/games"><i class="fa fa-gamepad fa-fw pr10"></i> {__("Games")}</a>
        </li>
    {/if}
    {if $system['market_enabled']}
        <li {if $page== "index" && $view == "products"}class="active"{/if}>
            <a href="{$system['system_url']}/products"><i class="fa fa-shopping-cart fa-fw pr10"></i> {__("My Products")}</a>
        </li>
        <li>
            <a href="{$system['system_url']}/market"><i class="fa fa-shopping-bag fa-fw pr10"></i> {__("Market")}</a>
        </li>
    {/if}
    <!-- favorites -->

     <!-- pages -->
    {if $user->_data['user_group'] < 3 || $system['pages_enabled']}
       
        <li class="ptb5">
            <small class="text-muted">{__("pages")|upper}</small>
        </li>
        {if $user->_data['pages']}
            {foreach $user->_data['pages'] as $page}
                <li>
                    <a href="{$system['system_url']}/pages/{$page['page_name']}">
                        <img src="{$page['page_picture']}" alt="">
                        <span>{$page['page_title']}</span>
                    </a>
                </li>
            {/foreach}
        {/if}
        <li {if $page== "index" && $view == "pages"}class="active"{/if}>
            <a href="{$system['system_url']}/pages"><i class="fa fa-cubes fa-fw pr10"></i> {__("Manage Pages")}</a>
        </li>
        <li {if $page== "index" && $view == "create_page"}class="active"{/if}>
            <a href="{$system['system_url']}/create/page"><i class="fa fa-plus-circle fa-fw pr10"></i> {__("Create Page")}</a>
        </li>
    {/if}
    <!-- pages -->

    {if $user->_data['user_group'] < 3 || $system['groups_enabled']}
        <!-- groups -->
        <li class="ptb5">
            <small class="text-muted">{__("groups")|upper}</small>
        </li>

        {if $user->_data['groups'] > 0}
            {foreach $user->_data['groups'] as $group}
                <li>
                    <a href="{$system['system_url']}/groups/{$group['group_name']}">
                        <img src="{$group['group_picture']}" alt="">
                        <span>{$group['group_title']}</span>
                    </a>
                </li>
            {/foreach}
        {/if}

        <li {if $page== "index" && $view == "create_group"}class="active"{/if}>
            <a href="{$system['system_url']}/create/group"><i class="fa fa-users fa-fw pr10"></i> {__("Create Group")}</a>
        </li>
        <li {if $page== "index" && $view == "groups"}class="active"{/if}>
            <a href="{$system['system_url']}/groups"><i class="fa fa-cubes fa-fw pr10"></i> {__("Manage Groups")}</a>
        </li>
        <!-- groups -->
    {/if}
</ul>