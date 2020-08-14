<?php
// index.php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testFile, "a");
    // 対象のファイルに書き込む
    fwrite($fp, $contents);
    // ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}
echo '<br>';
$test_file = "test2.txt";

if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line.'<br>';
    }
    // ファイルを閉じる
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}
echo '<br>';
echo '<br>';
echo "1. CakePHPの2系・3系の違い"."<br>";
echo "モデルの変更・Composerと名前空間の利用可能に・パフォーマンスの向上・セッション管理の改善・ビューセルの追加・TestShellの廃止が変更点として挙げられた。"."<br>";
echo "2. LAMP"."<br>";
echo "OSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Pythonを指す。"."<br>";
echo "3. AWS"."<br>";
echo "AWSとはAmazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称。"."<br>";