<div class="comment-replace">
    <div class="comment-text js_readmore" dir="auto">{$comment['text']}</div>
    <div class="comment-text-plain hidden">{$comment['text_plain']}</div>
    {if $comment['image'] != ""}
        <span class="text-link js_lightbox-nodata" data-image="{$system['system_uploads']}/{$comment['image']}">
            <img alt="" class="img-responsive" src="{$system['system_uploads']}/{$comment['image']}">
        </span>
    {/if}
</div>
