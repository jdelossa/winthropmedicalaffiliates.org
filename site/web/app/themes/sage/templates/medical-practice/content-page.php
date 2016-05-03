<div class="container">
    <div class="col-sm-8">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="entry-content">
            <h4>Hours of Operation</h4>
            <ul>
                <li>Mon</li>
                <li>Tues</li>
                <li>Wed</li>
                <li>Thurs</li>
                <li>Fri</li>
                <li>Sat</li>
                <li>Sun</li>
            </ul>
        </div>
    </div>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>