<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "もんすたぁへの依頼");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('../assets/include/header.php'); ?>
        <div class="contents">
            <h1>もんすたぁへの依頼</h1>
                <h2>有償依頼について</h2>
            <p>有償依頼は規模が小さい場合無償依頼として対応可能です。</p>
            <p>詳細は<a href="#about-free-request">無料依頼を希望の方</a>をご確認ください。</p>
            <p>有償依頼は<a href="https://discord.monster2408.com/" target="_blank">コチラのリンク</a>より専用Discordグループにご参加の上、チケットを作成し依頼してください。</p>
            <p>その際に「プロフィールを見た」と言っていただけるとありがたいです。</p>
            <h2 id="about-free-request">無料依頼を希望の方</h2>
            <p>無償依頼の成果物は<a href="https://github.com/Monster2408/" target="_blank">もんすたぁのGitHub</a>にて公開されます。</p>
            <p>仕様が詳細に書かれておらず内容が不明なものは場合は却下されます。</p>
            <p>仕様が詳細に書かれていない場合は依頼者の希望した内容のものになっていない可能性があります。GitHubのIssueより要望を送ることは可能です。</p>
            <p>無償依頼は<a href="./free-form">専用フォーム</a>からご応募ください。</p>
        </div>
        <?php include('../assets/include/footer.php'); ?>
    </body>
</html>