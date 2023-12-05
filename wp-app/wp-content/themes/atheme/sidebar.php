<div class="container custom-sidebarcontainer">
<div class="widget">
    <h3>Pages</h3>
    <ul>
        <?php
        wp_list_pages("title_li=")?>
    </ul>
</div>
<div class="widget">
    <h3>Archive</h3>
    <ul>
    <?php
     wp_get_archives("type=monthly");

     ?>
     </ul>

</div>

<div class="widget">
    <h3>Chategories</h3>
    <ul>
        <?php wp_list_categories('title_li='); ?>
    </ul>
</div>
</div>
