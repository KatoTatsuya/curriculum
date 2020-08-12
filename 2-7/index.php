<?php
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colors);
echo '<br>';
$colors["yellow"] = "黄色";
var_dump($colors);
echo '<br>';
echo '<br>';
echo "1. プルリクエスト（マージリクエスト）"."<br>";
echo "コードの変更をレビュワーに通知し、マージを依頼する機能。 コードのレビューを受けることで、1人で作ると気がつかないコードの指摘やバグや記述ミスの発見ができ、コードの品質を高める。"."<br>";
echo "2. Git Flow"."<br>";
echo "Vincent Driessen氏がブログに書いた A successful Git branching model というブランチモデルの導入を簡単にする git プラグインである。"."<br>";
echo "3. CRON"."<br>";
echo "多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。"."<br>";
?>