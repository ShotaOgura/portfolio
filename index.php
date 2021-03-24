<!-- HTML5を使いますという宣言 -->
<!DOCTYPE html>
<html>
	<!-- headはWebページの設定を書く場所-->
	<head>
		<!-- 使用する文字コードの指定 -->
		<meta charset="utf-8">

		<!-- タイトルの指定 -->
		<title>練習用サイト</title>

		<!-- CSSの読み込み -->
		<!-- link rel="stylesheet"で「このファイルはスタイルシートです」 -->
		<!-- href="stylesheet.css"で「読み込むファイルはこれです」という意味 -->
		<link rel="stylesheet" href="stylesheet.css">
	</head>

	<!-- bodyは実際に表示させたい内容を書く場所-->
	<body>
		<!-- divでレイアウトを構成(divは要素をグループ化するのに使う) -->
		<!-- 要素にはclass="(任意のclass名)"でclass名を指定可能-->
		<!-- 同じclassを付けた要素には同じCSSが反映される-->
		<!-- ここではheader,main,footerの3つのclassに分ける -->
		<div class="header">
			<!-- headerの中で更にdivを用いて要素をグループ化 -->
			<div class="header-logo">
				練習用サイト
			</div>
			<div class="header-list">
					<!-- 表を作るときは<ul></ul> <li></li>で要素を箇条書き-->
					<ul>
						<li>HTML/CSS</li>
						<li>PHP</li>
						<li>SQL</li>
						<li>DB</li>
					</ul>
			</div>
		</div>
		<div class="main">
			<!-- mainの中で更にdivを用いて要素をグループ化 -->
			<div class="copy-container">
				<!-- <span></span>で囲むと一部分だけCSSを反映できる -->
				<!-- <h1><div><p>などは前後で改行され、親要素の幅いっぱいに広がる -->
				<!-- このような要素を「ブロック要素」と呼ぶ -->
				<!-- 反対に<span><a>などは改行されない。これを「インライン要素」と呼ぶ -->
				<h1>テスト<span>！</span></h1>
				<h2>練習するよ</h2>
			</div>
			<div class="contents">
				<!-- <h3>要素に"section-title"のclass付け -->
				<h3 class="section-title">やること</h3>
				<!-- contentsの中で更にdivを用いて要素をグループ化 -->
				<div class="contents-item">
					<!-- <img src="(画像リンク先)">で画像を表示 -->
					<a href="https://prog-8.com/lessons/html/study/1"><img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg"></a>

					<!-- <p>は段落を指定 -->
					<p>HTML/CSS</p>
				</div>
				<div class="contents-item">
					<img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
					<p>PHP</p>
				</div>
				<div class="contents-item">
					<img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
					<p>SQL</p>
				</div>
				<div class="contents-item">
					<img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
					<p>DB</p>
				</div>
			</div>
			<div class="contact-form">
				<!-- 同じCSSを適用したいので同じclassを指定 -->
				<h3 class="section-title">お問い合わせ</h3>
					<!-- actionには送り先のurlを指定-->
					<!-- methodにはget OR postを指定。　-->
					<form action="sent.php" method="post">
						<p>メールアドレス（必須）</p>
						<!-- 1行入力用の入力欄は<input>で指定 -->
						<!-- typeの指定,nameで名前を指定 -->
						<input type="text" name="email">

						<!-- 選択ボックスは<select>で作る -->
						<!-- <option>で選択肢を作成。実際に送信されるのはvalueの値-->
						<p>性別</p>
						<select name="sex">
							<option value="未選択">未選択</option>
							<option value="男">男</option>
							<option value="女">女</option>
						</select>

						<p>誕生日</p>
						<select name="month">
							<option value="-">-</option>
							<?php
							 	for($i=1 ;$i<=12 ; $i++){
									echo "<option value='{$i}'>{$i}</option>";
								}
						 	?>
						</select>
						月
						<select name="date">
							<option value="-">-</option>
							<?php
							 	for($i=1 ;$i<=31 ; $i++){
									echo "<option value='{$i}'>{$i}</option>";
								}
						 	?>
						</select>
						日
						<!-- 複数行の入力欄は<textarea></textarea>で指定 -->
						<p>お問い合わせ内容（必須）</p>
						<textarea name="body"></textarea>
						<p>※必須項目は必ずご入力ください</p>
						<!-- 送信ボタンにも<input>を用いる -->
						<!-- <input type="submit">でボタンになる -->
						<!-- デフォルトテキストは「送信」 value="(任意の文字列)"で変更可能 -->
						<input class="contact-submit" type="submit" value="送信する">
					</form>
			</div>
		</div>

		<div class="footer">
			<!-- footerの中で更にdivを用いて要素をグループ化 -->
			<div class="footer-logo">
				練習用サイト
			</div>
			<div class="footer-list">
				<ul>
					<li>要素１</li>
					<li>テキストフォーム</li>
			</div>
		</div>
	</body>
</html>
