<img src="{$image_url}" class="{$var.class}" alt="{$img_alt_text}" title="{$img_title}"
     width="{if $is_mobile_device}100%{else}{$width}%{/if}"
     style="{if $is_mobile_device}clear: both;{elseif $align eq 'center'}display: block; margin-left: auto; margin-right: auto;{elseif $align eq 'right'}float: right;{/if}"/>