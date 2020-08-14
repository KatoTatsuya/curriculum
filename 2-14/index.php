<?php
$language = ["HTML","CSS","PHP","JavaScript","Python"];
echo count($language);
echo '<br>';
sort($language);
var_dump($language);
echo '<br>';
if (in_array("PHP",$language)) {
    echo "PHPは存在します。";
}else {
    echo "PHPは存在しません。";
}
echo '<br>';
$atstr = implode(";",$language);
var_dump($atstr);
echo '<br>';
$re_language = explode(";",$atstr);
var_dump($re_language);
echo '<br>';
echo '<br>';
echo "1. 要件定義(要求仕様書)"."<br>";
echo "システムやソフトウェアの開発において、実装すべき機能や満たすべき性能などのを明確にしていく作業のこと。"."<br>";
echo "2. 単体テスト・結合テスト"."<br>";
echo "単体テストとは、ソフトウェアやシステムのテスト手法の一つで、単一の部品（モジュール）を対象に行うテスト。結合テストとは、開発中のソフトウェアのテスト手法の一つで、複数のモジュール（部品）を組み合わせて行うテスト。個々のモジュールの単体テスト後に行う。"."<br>";
echo "3. テスト仕様書(どのようなもの、項目)"."<br>";
echo "結合テストや総合テストの校庭でどの機能をどのテスト技法でテストするのか記されているもの。
必要な項目としては
①テストを実施した環境
②実施するテストの内容
③テストを実施するためのシステムの操作手順
④テストの実行結果
⑤個々のテスト項目を識別するための番号や記号（通し番号など）
⑥テストを実施した年月日
⑦テストを実行した担当者
⑧障害報告票番号（発生した障害の詳細を開発グループに報告する帳票の識別番号）
が挙げられる。"."<br>";