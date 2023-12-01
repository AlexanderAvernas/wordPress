<div class="widget">
    <h2>Pages</h2>
    <ul>
        <?php
        wp_list_pages("title_li=")?>
    </ul>
</div>
<div class="widget">
    <h2>Archive</h2>
    <ul>
    <?php
     wp_get_archives("type=monthly");

     ?>
     </ul>

</div>

<div class="widget">
    <h2>Chategories</h2>
    <ul>
        <?php wp_list_categories('title_li='); ?>
    </ul>
</div>
