<?php
function getRectangularArea($vertical, $side, $height) {
    $area = $vertical * $side * $height;
    print "立方体の面積は".$area."です。";
}

getRectangularArea(5,10,8);
echo '<br>';
echo '<br>';
echo "1.ハッシュ化"."<br>";
echo "元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。"."<br>";
echo "2.総合テスト"."<br>";
echo "構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること。"."<br>";
echo "3.デバッグ"."<br>";
echo "テストなどによって発見された誤作動・不具合について、その原因やプログラム上での位置を探索・特定し、意図したとおり動作するように修正する作業のこと。"."<br>";
?>