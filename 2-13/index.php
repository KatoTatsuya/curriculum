<?php
$x = 3.78;
echo ceil($x);
echo'<br>';
echo floor($x);
echo '<br>';    
echo round($x);
echo'<br>';
echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(32);
echo '<br>';
echo mt_rand(1,1000);
echo '<br>';
$str = "freeks";
echo strlen($str);
echo '<br>';
$str ="freeks";
echo strpos($str, "k");
echo '<br>';
$str = "freeks";
echo substr($str, 0, 4);
echo '<br>';
$str = "freeks";
echo str_replace("f", "F", $str);
echo '<br>';
$str = "ながたちょう";
echo mb_strlen($str);
echo '<br>';
$str = "ながたちょう";
echo mb_strpos($str, "ち");
echo '<br>';
$str = "ながたちょう";
echo mb_substr($str, 1, 2);
echo '<br>';
$name = "freeks";
$work_hour = 9;
$work_minute = 0;
printf("%sの営業時間は%02d時間%02d分です。", $name, $work_hour,$work_minute);
echo '<br>';
$work_hour = 9;
$work_minute = 0;
$work_time = sprintf("本日の営業時間はあと%02d時間%02d分です。", $work_hour, $work_minute);
echo $work_time;
echo '<br>';
echo '<br>';
echo "1. PostgreSQL・Oracle SQL"."<br>";
echo "PostgreSQLはオープンソースのリレーショナルデータベース管理システム。Oracle SQLはOracle Databaseにおいて様々な手続き処理を行うために用いられるプログラミング言語。"."<br>";
echo "2. TortoiseGit・TortoiseSVN"."<br>";
echo "TortoiseGitとはGitをより扱いやすくするために開発されたWindows用ソフトウェア。TortoiseSVNは、バージョン管理システムであるSubversionのクライアントフロントエンド。"."<br>";
echo "3. 外部設計・内部設計"."<br>";
echo "外部設計とは、ソフトウェアや情報システムの開発工程の一つで、外部から見たシステムの仕様を定義する工程。内部設計とは、ソフトウェアや情報システムの開発工程の一つで、全体の構成や行うべき処理の詳細など実装に必要な仕様を定義する工程。"."<br>";