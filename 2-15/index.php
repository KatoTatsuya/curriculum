<?php
echo strtotime("2017/12/29 23:59:59");
echo '<br>';
echo date("Y-m-d H:i:s", 1514588399);
echo '<br>';
echo '<br>';
echo "1. ログ(意味、確認の仕方)"."<br>";
echo "コンピュータの利用状況やデータ通信など履歴や情報の記録を取る事、またその記録を指す。操作やデータの送受信が行われた日時と、行われた操作の内容や送受信されたデータの中身などが記録される。コマンドプロンプトを開き「eventvwr.msc」と入力する。 別ウィンドウが立ち上がり、左メニューの「Windowsログ」→「システム」を選択する。 画面に中央部分にシステムログが表示され、こちらで起動・シャットダウンのログを確認する事が可能。"."<br>";
echo "2. クラウドサーバー、レンタルサーバー、VPSの違い"."<br>";
echo "レンタルサーバーは、OS・データベース・HTTPサーバーをインストールした物理サーバーを、利用者で共有するもの。VPSは、サーバーに複数の仮想サーバーを構築し、その１つひとつをユーザーに貸し出す形式。クラウドサーバーとは、クラウド上にあるサーバーを利用する形式。インターネットを経由して、クラウド上に存在するサーバーにアクセスする。"."<br>";
echo "3. PHPのFWの種類と特徴"."<br>";
echo "CakePHPは機能が豊富で開発がしやすいことと、日本語ドキュメントやコミュニティが非常に充実している特徴がある。"."<br>".
"Zend Frameworkは豊富なライブラリを含んでおり、そのライブラリを単体で使用することもできる特徴がある。"."<br>".
"Symfonyは高速に動作することとプラグインシステムが優秀なため機能追加がしやすい特徴がある."."<br>".
"Code Igniterは軽量で高速に動作すること、構成が単純でわかりやすいという特徴がある。"."<br>".
"Fuel PHPはCode Igniterを改良して開発されたもので、同じ特徴をもったまま問題点だけを改善した特徴がある。"."<br>".
"Ethnaは細かい処理をフレームワーク側がサポートしてくれる特徴がある。"."<br>".
"Laravelは最近開発されたフレームワークでわかりやすさ、書きやすさだけでなく、コード自体も非常にきれいに書かれている特徴がある。"."<br>";