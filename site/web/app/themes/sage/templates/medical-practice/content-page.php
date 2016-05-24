<div class="container">
    <div class="col-sm-9">
        <div class="entry-content">
            <h4>Specialities</h4>
            <p>Content</p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="entry-content">
            <h4>Hours of Operation</h4>
            <ul>
                <li>Mon: <?= types_render_field("monday", array('raw' => 'true')); ?></li>
                <li>Tues: <?= types_render_field("tuesday", array('raw' => 'true')); ?></li>
                <li>Wed: <?= types_render_field("wednesday", array('raw' => 'true')); ?></li>
                <li>Thurs: <?= types_render_field("thursday", array('raw' => 'true')); ?></li>
                <li>Fri: <?= types_render_field("friday", array('raw' => 'true')); ?></li>
                <li>Sat: <?= types_render_field("saturday", array('raw' => 'true')); ?></li>
                <li>Sun: <?= types_render_field("sunday", array('raw' => 'true')); ?></li>
            </ul>
        </div>
    </div>
</div>