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
            <span lang="ja">Japanese</span>
            <span lang="en">日本語</span>
        </label>
        <label for="langEn">
            <span lang="ja">English</span>
            <span lang="en">英語</span>
        </label>
    </div>
</header>