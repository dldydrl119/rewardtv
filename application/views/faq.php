<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

	<title>CALLGET</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/faq.css" rel="stylesheet" type="text/css">


	<!-- Navigation -->
	<header>
		<nav class="navbar navbar-global navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="logo">
					<a href="/">
						<img src="/assets/images/logo.png" />
						<!-- <p>상담완료만 해도 리워드가 내집으로</p> -->
					</a>
				</div>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/">메인</a>
						</li>
						<!-- <li>
							<a href="/main/about">콜겟TV란?</a>
						</li> -->
						<li>
							<a href="/main/faq">이용방법</a>
						</li>
						<!-- <li>
							<a href="/main/news/1">소식</a>
						</li> -->
						<li>
							<a href="/main/contactus">문의하기</a>
						</li>
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- FAQ_1  -->
	<section id="faq_1">
		<div class="cover"></div>
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>이용방법</h3>
					<p>콜겟TV의 리워드플랫폼 이용방법입니다.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ_1 _END -->

	<!-- FAQ_2 -->
	<section id="faq_2" class="faq">
		<div class="video-container">
			<iframe width="100%" src="https://www.youtube.com/embed/h3iT9WJhVUw?ps=blogger&controls=0&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
		</div>
	</section>
	<!-- FAQ_2_END -->

	<!-- FAQ_3 -->
	<section id="faq_3" class="faq mt50">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>콜겟TV 이용방법</h3>
					<div class="explain">
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_1.png">
							<p>1. 리워드 선택</p>
							<p>콜겟TV 메인페이지에서 원하는 리워드를 선택.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_2.png">
							<p>2. 리워드 확인</p>
							<p>리워드에 대한 사용법 영상과 상세 설명을 확인.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_3.png">
							<p>3. 리워드 담기</p>
							<p>리워드가 마음에 들면 "GET" 버튼을 누르기.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_4.png">
							<p>4. 라이프서비스 확인</p>
							<p>해당 리워드의 라이프서비스 영상을 시청하기.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_5.png">
							<p>5. 전화상담 예약</p>
							<p>라이프서비스가 마음에 들면 "CALL" 버튼을 누르기.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_6.png">
							<p>6. 사은품 수령</p>
							<p>상담완료 후 원하시는 장소로 리워드를 수령.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ_3_END -->

	<!-- FAQ_4 -->
	<section id="faq_4" class="faq">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>FAQ</h3>
				</div>
			</div>
			<div class="row">
				<div class="panel-group" id="accordion">
					<? for($i=0; $i < count($list); $i++) {?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title panel-title-adjust">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>">
									Q) <?= $list[$i]->faq_question ?>
								</a>
							</h4>
						</div>
						<div id="collapse<?= $i ?>" class="panel-collapse collapse">
							<div class="panel-body">
								A) <?= nl2br($list[$i]->faq_answer) ?>
							</div>
						</div>
					</div>

					<?}?>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- FAQ_4_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
</body>

</html>