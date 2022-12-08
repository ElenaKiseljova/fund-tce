<div class="dropdown dropdown--lang header__lang">
    <div class="dropdown__head">
        <?= pll_current_language('flag'); ?>
        
        <p> <?= pll_current_language('name'); ?></p>
        <svg width="13" height="13">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
        </svg>
    </div>
    <div class="dropdown__body">
        <ul class="dropdown__list">
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
        </ul>
    </div>
</div>