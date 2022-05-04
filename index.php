<!DOCTYPE html>
<?php 
    session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="Keywords" content="" />
		<title>Cake</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
		<link href="css/z.css" rel="stylesheet">
	</head>
	<body>
		<div class="main-top" id="首页">
			<div class="headder-top">
				<!-- nav -->
				<nav>
					<div id="logo">
						<h1>
							<a href="index.php">Cake</a>
						</h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop">
					<ul class="menu mt-2">
						<li>
							<?php if(isset($_SESSION['username'])) : ?>
							<a href="#">欢迎您,
								<?php echo $_SESSION['username']; ?></a>
							<a href="log.html" unset($_SESSION['username']); setcookie("username","",time()-1); 
							 setcookie("password","",time()-1); );>退出登陆</a>
							<?php else: ?>
							<?php endif ?>
						</li>
						<li class="active">
							<a href="index.php">首页</a>
						</li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1">
							<a href="recommend.html">
								今日份糕点
							</a>
						</li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1">
							<a href="log.html" class="drop-text">登录</a>
						</li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1">
							<a href="reg.html" class="drop-text">注册</a>
						</li>
						<li>
							<a href="contact.html">联系我们</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="container">
				<div class="row main-banner">
					<div class="col-lg-4 col-md-5 style-banner ">
						<div class="banner-rotated">
							<h4>
								<span> F</span>
							</h4>
							<h4>
								<span> r</span>
							</h4>
							<h4>
								<span> e</span>
							</h4>
							<h4>
								<span> s</span>
							</h4>
							<h4>
								<span> h</span>
							</h4>
						</div>
						<div class="banner-rotated">
							<h4>
								<span> C</span>
							</h4>
							<h4>
								<span> a</span>
							</h4>
							<h4>
								<span> k</span>
							</h4>
							<h4>
								<span> e</span>
							</h4>
							<h4>
								<span> s</span>
							</h4>
						</div>
						<h5 class="mt-lg-4 mt-3">为您的特别活动准备美味的蛋糕！！！
						</h5>
					</div>
					<div class="col-lg-8 col-md-7 banner-imgs text-center">
						<div class="row no-gutters">
							<div class="col-sm-4 banner-right-images">
								<img src="images/bb2.jpg" alt="news image" class="img-fluid">
							</div>
							<div class="col-sm-4 banner-right-images">
								<img src="images/bb1.jpg" alt="news image" class="img-fluid ">
							</div>
							<div class="col-sm-4 banner-right-images">
								<img src="images/bb3.jpg" alt="news image" class="img-fluid">
							</div>
							<div class="col-sm-4 banner-right-images">
								<img src="images/bb5.jpg" alt="news image" class="img-fluid ">
							</div>
							<div class="col-sm-4 banner-right-images">
								<img src="images/bb4.jpg" alt="news image" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
		<!-- about -->
		<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
						<span class="fa fa-bars mb-3" aria-hidden="true"></span>
						<h4>我们的食谱</h4>
						<div class="about-para-txt mt-2">
							<p>
								尝在口中 甜在心里
								<br>
								专注健康 我们秉承无添加
								<br>
								原生态的健康烘焙理念
								<br>
								采用传统结合现代的烘焙工艺
								<br>
								坚持用最天然、最原始、最简单的 
								原材料来制作高品质的新一代健康烘焙食品
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
						<span class="fa fa-diamond mb-3" aria-hidden="true"></span>
						<h4>我们的产品</h4>
						<div class="about-para-txt mt-2">
							<p>
								用心烘焙
								<br>
								用“心”制作每一份甜蜜   品味甜蜜生活，感受幸福味道
								<br>
								希望能带给您不一样的烘焙食品，真诚期待您的品尝！
								<br>
								<br>
								<br>
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
						<span class="fa fa-birthday-cake mb-3" aria-hidden="true"></span>
						<h4>我们的蛋糕</h4>
						<div class="about-para-txt mt-2">
							<p>
								水果的芬芳先侵袭你的鼻腔，纯滑扎实的奶油与浓郁稠密的巧克力前后夹击你的味蕾，
								<br>
								酥皮与蛋糕揉碎了最后一道防线，夹层中媚红的果酱俘虏了你的感官，接踵而至的回味激荡着灵魂，至死方休。
								<br>
								<br>
							</p>
						</div>

					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 title-right-side my-3">
						<div class="rotated-title">
							<h3 class="title mb-lg-4 mb-md-3 mb-2"> 关于</h3>
							<h6 class="title-sub">我们是谁</h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //about -->
		<!-- service -->
		<section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
				<div class="row">
					<div class="col-lg-3 col-md-4 my-3">
						<div class="rotated-title">
							<h3 class="title mb-lg-4 mb-md-3 mb-2">商品展示</h3>
							<h6 class="title-sub">我们所做的</h6>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 service-grid-top position-relative my-3">
						<img src="images/bb4.jpg" alt="news image" class="img-fluid">
						<div class="ser-fashion-grid ser-fashion-wthree">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-snowflake-o" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">我们的制作</h4>
								<p>
									我们将完全按照您的定制要求做出您心中最满意的蛋糕美食，用最新鲜的食材与最传统的手工技艺来制造美味的蛋糕艺术品！
									<br>
									希望能带给您不一样的烘焙食品，真诚期待您的品尝！
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mid-row-grids">
					<div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
						<div class="ser-fashion-wthree">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">最佳商品展示</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
						<div class="ser-fashion-wthree">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-laptop" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">在线订购</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
						<div class="ser-fashion-wthree">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-smile-o" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">送货上门</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
						<div class="ser-fashion-wthree">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-users" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">活动餐饮</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //service -->
		<!-- Online Order -->
		<section class="advertise-count">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
				<div class="row">
					<div class="col-lg-6 col-md-6 fashion-collet-txt text-center">
						<h5>在线订购</h5>
						<h6 class="mt-lg-4 mt-3"> 25%/折扣</h6>
						<p class="mt-2">
							在线订购将享受25%的折扣优惠 享受折扣与美味的双重快感！
						</p>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
						<div class="order-show-w3ls">
							<h5> 立即订购</h5>

							<ul class="mt-lg-4 mt-3">
								<li>
									<p>
										<span>Call</span> +123 4567 890</p>
								</li>
								<li class="mt-lg-3 mt-2">
									<p>
										<span> Email</span> +123 4567 890</p>
								</li>
							</ul>
							<div class="order-buttn mt-lg-4 mt-3">
								<a href="contact.php" class="btn">立即订购 </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--//Online Order -->
		<!-- menu -->
		<section class="collection py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
				<!--row -->
				<div class="row">
					<div class="col-lg-5 col-md-5 collection-w3layouts my-3">
						<h4>水果蛋糕</h4>
						<p class="mt-2">
							浓浓的奶香味与清新甜蜜的水果相搭配出来的浓郁甜美气息，蕴藏着甜蜜浪漫的温馨情怀，
							奶油的浓郁奶相结合水果的酸甜，恰到好处的口味与口感的结合，让您的感官与知觉完全得到满足。
						</p>

					</div>
					<div class="col-lg-4 col-md-4 collective-images position-relative">
						<img src="images/a3.png" alt="news image" class="img-fluid">
					</div>
					<div class="col-lg-3 col-md-3 title-right-side my-3">
						<div class="rotated-title">
							<h3 class="title mb-lg-4 mb-md-3 mb-2">Today's cake</h3>
							<h6 class="title-sub">会有你想要的那一款嘛！</h6>
						</div>
					</div>
				</div>
				<!--// row -->
				<!-- row -->
				<div class="row mid-row-grids">
					<div class="col-lg-5 col-md-6 collective-images my-3">
						<img src="images/a2.png" height="280px" width="450px">
					</div>
					<div class="col-lg-7 col-md-6 collection-w3layouts my-3">
						<h4>萌宠蛋糕</h4>
						<p class="mt-2">
							浓浓的奶香味与苦涩的黑巧克力相搭制作出专属于你的萌宠，蕴藏着可爱与俏皮，
							奶油的浓郁奶相结合黑巧克力的苦涩，恰到好处的口味，口感与视觉的结合，让您的感官与知觉完全得到满足。
						</p>

					</div>

				</div>
				<!--// row -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-6 col-md-5 collection-w3layouts my-3">
						<h4> 蜂蜜蛋糕</h4>
						<p class="mt-2">
							蛋黄的新鲜相结合蜂蜜的甜蜜，恰到好处的口味与口感的结合，让蛋黄与蜂蜜的曼妙组合！。
						</p>
					</div>
					<div class="col-lg-3 col-md-4 collective-images my-3">
						<img src="images/a1.png" height="300px" width="500px">
					</div>
				</div>
				<!--// row -->
			</div>
		</section>





		<section class="py-lg-4 py-md-3 py-sm-3 py-3 bottom-footers">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 bottom-footer-left">
						<div class="social-icons mb-lg-4 mb-3">
							<ul>
								<li class="facebook">
									<a href="#">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li class="twitter">
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li class="rss">
									<a href="#">
										<span class="fa fa-rss"></span>
									</a>
								</li>
							</ul>
						</div>
						<p>有任何问题请联系我们！
							<br>
							我们将帮助您解决问题！
							<br>
						</p>
						<div class="footer-w3layouts-head mt-2">
							<h2>
								<a href="index.php">Cake</a>
							</h2>
						</div>
					</div>
					<div class="footer-info-bottom col-lg-3 col-md-6 col-sm-6 text-center">
						<h4 class="pb-lg-4 pb-md-3 pb-3">导航</h4>
						<ul class="bottom-menu">
							<li class="py-sm-2 py-1">
								<a href="index.php">首页</a>
							</li>
							<li class="py-sm-2 py-1">
								<a href="recommend.html">
									今日份糕点
								</a>
							</li>
							<li>
								<a href="contact.html">联系</a>
							</li>
						</ul>
					</div>
					<div class="footer-info-bottom col-lg-3 col-md-6 col-sm-6 col-sm-6 text-center">
						<h4 class="pb-lg-4 pb-md-3 pb-3">Twitter Us</h4>
						<div class="footer-office-hour">
							<ul>
								<li>
									<p>好吃的蛋糕在于用心的制作</p>
								</li>
								<li class="my-1">
									<p>
										<a href="mailto:info@example.com">info@example.com</a>
									</p>
								</li>
								<li class=" mb-sm-3 mb-2">
									<span>发表于3天前.</span>
								</li>
								<li>
									<p>好吃的蛋糕在于用心的制作</p>
								</li>
								<li class="my-1">
									<p>
										<a href="mailto:info@example.com">info@example.com</a>
									</p>
								</li>
								<li>
									<span>发表于3天前.</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer-info-bottom col-lg-3 col-md-6 col-sm-6 text-center">
						<h4 class="pb-lg-4 pb-md-3 pb-3">通讯</h4>
						<div class="newsletter-footers">
							<form action="#" method="post">
								<input type="email" name="Your Email" class="form-control" placeholder="您的邮箱" required="">
								<button type="submit" class="btn1 mt-3">订阅</button>
							</form>
						</div>
					</div>
				</div>

				<div class="text-center">
					<a href="#首页" class="move-top text-center mt-3">
						<i class="fa fa-arrow-up" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</section>
	</body>
</html>
