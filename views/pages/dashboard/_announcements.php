<div class="col-12 text-black">
    <?php foreach ($announcements as $item) { ?>
        <h3><?php echo $item->announcementHeader ?></h3>
        <p><?php echo $item->announcementBody ?></p>
        <p><?php echo $item->announcementFooter ?></p>
    <?php } ?>
</div>