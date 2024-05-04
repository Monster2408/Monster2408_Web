<header>
    <div class="web-title-area">
        <a href="<?php echo $func->getUrl(); ?>/">Monster2408 Developer</a>
    </div>
    <div class="menu-area">
        <?php include($func->getAssetsPath()."/assets/include/menu.php"); ?>
    </div>
    <div class="language_label">
        <input type="radio" name="land" id="langJa">
        <input type="radio" name="land" id="langEn" checked>
        
        <label for="langJa">
            <span lang="ja">日本語</span>
            <span lang="en">Japanese</span>
        </label>
        <label for="langEn">
            <span lang="ja">英語</span>
            <span lang="en">English</span>
        </label>
    </div>
</header>