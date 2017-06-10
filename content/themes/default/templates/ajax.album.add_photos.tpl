<div class="modal-body plr0 ptb0">
    <div class="x-form publisher mini" data-id="{$album['album_id']}">

        <!-- publisher tabs -->
        <ul class="publisher-tabs clearfix">
            <button type="button" class="close pull-right flip" data-dismiss="modal" aria-hidden="true">×</button>
            <li>
                <span class="active">
                    <i class="fa fa-picture-o fa-fw"></i> {__("Add Photos")}
                </span>
            </li>
        </ul>
        <!-- publisher tabs -->

        <!-- post message -->
        <div class="relative">
            <textarea class="js_autosize js_mention" placeholder='{__("What is on your mind? #Hashtag.. @Mention.. Link..")}'></textarea>
        </div>
        <!-- post message -->

        <!-- post attachments -->
        <div class="publisher-attachments attachments clearfix x-hidden">
            <ul></ul>
        </div>
        <!-- post attachments -->

        <!-- post location -->
        <div class="publisher-meta" data-meta="location">
            <i class="fa fa-map-marker fa-fw"></i>
            <input type="text" id="google_geolocation" placeholder='{__("Where are you?")}'>
        </div>
        <!-- post location -->

        <!-- publisher-footer -->
        <div class="publisher-footer clearfix">
            <!-- publisher-tools -->
            <ul class="publisher-tools">
                {if $system['photos_enabled']}
                    <li>
                        <span class="publisher-tools-attach">
                            <i class="fa fa-camera fa-fw js_x-uploader" data-handle="publisher" data-multiple="true"></i>
                        </span>
                    </li>
                {/if}
                {if $system['geolocation_enabled']}
                    <li>
                        <span class="js_publisher_location">
                            <i class="fa fa-map-marker fa-fw"></i>
                        </span>
                    </li>
                {/if}
                <li class="relative">
                    <span class="js_emoji-menu-toggle">
                        <i class="fa fa-smile-o fa-fw"></i>
                    </span>
                    {include file='_emoji-menu.tpl'}
                </li>
            </ul>
            <!-- publisher-tools -->

            <!-- publisher-buttons -->
            <div class="pull-right flip mt5">
                {if $album['user_type'] == 'user' && !$album['in_group']}
                    <!-- privacy -->
                    <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title='{__("Shared with: Friends")}'>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs">{__("Friends")}</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#" data-title='{__("Shared with: Public")}' data-value="public">
                                    <i class="fa fa-globe"></i> {__("Public")}
                                </a>
                            </li>
                            <li>
                                <a href="#" data-title='{__("Shared with: Friends")}' data-value="friends">
                                    <i class="fa fa-users"></i> {__("Friends")}
                                </a>
                            </li>
                            <li>
                                <a href="#" data-title='{__("Shared with: Only Me")}' data-value="me">
                                    <i class="fa fa-lock"></i> {__("Only Me")}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- privacy -->
                {else}
                    <!-- privacy -->
                    <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='{__("Shared with: Public")}'>
                        <button type="button" class="btn btn-default">
                            <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs">{__("Public")}</span>
                        </button>
                    </div>
                    <!-- privacy -->
                {/if}
                <button type="button" class="btn btn-primary js_publisher-album">{__("Post")}</button>
            </div>
            <!-- publisher-buttons -->
        </div>
        <!-- publisher-footer -->
    </div>
</div>