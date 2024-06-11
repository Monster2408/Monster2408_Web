<?php

include_once($func->getAssetsPath().'/assets/view_counter.php');
$viewCounter = new ViewCounter($func->getAssetsPath().'/assets/data/db/');

$viewCounterData = $viewCounter->getCounterData();
$viewCountAll = $viewCounterData["all_count"];
$viewCountToday = $viewCounterData["today_count"];
$viewCountYesterday = $viewCounterData["yesterday_count"];

?>
<ul class="nav">
    <li><a href="<?php echo $func->getUrl(); ?>/about">About</a></li>
    <li lang="en"><a href="<?php echo $func->getUrl(); ?>/featured-products/">Blog</a></li>
    <li lang="ja"><a href="<?php echo $func->getUrl(); ?>/featured-products/">ブログ</a></li>
    <li lang="en"><a href="<?php echo $func->getUrl(); ?>/projects">Projects</a></li>
    <li lang="ja"><a href="<?php echo $func->getUrl(); ?>/projects">プロジェクト</a></li>
    <li lang="en"><a href="<?php echo $func->getUrl(); ?>/oss"><span class="oss-long-name">Open Source</span><span class="oss-short-name">OSS</span></a></li>
    <li lang="ja"><a href="<?php echo $func->getUrl(); ?>/oss"><span class="oss-long-name">オープンソース</span><span class="oss-short-name">OSS</span></a></li>
    <li lang="en"><a href="<?php echo $func->getUrl(); ?>/privacy-policy">Privacy Policy</a></li>
    <li lang="ja"><a href="<?php echo $func->getUrl(); ?>/privacy-policy">プライバシーポリシー</a></li>
</ul>