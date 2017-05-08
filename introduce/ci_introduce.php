<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
    <main id="content" class="introduce">
        <!-- Page Header -->
        <div class="page-header">
            <div class="visual-header">
                <div class="header-intro">
                    <h2>COMPANY</h2>
                    <p class="hidden-xs">
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        지금까지 걸어온 30년... 이제부터가 시작입니다.
                    </p>
                </div>
            </div>
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    CI 소개
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/introduce/greeting.php">CEO인사말</a></li>
                    <li><a href="/introduce/vision.php">비전</a></li>
                    <li><a href="/introduce/history.php">연혁</a></li>
                    <li class="active"><a href="/introduce/ci_introduce.php">CI 소개</a></li>
                    <li><a href="/introduce/group.php">조직도</a></li>
                    <li><a href="#">협력사</a></li>
                    <li><a href="#">오시는길</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="ci-introduce">
            <header>
                <h3>CI 소개</h3>
                <h4>WOOJUNGBSC<br class="visible-xs"> CI Information</h4>
                <p class="summary">
                   우정BSC의 무궁한 발전과 높은 꿈이<br class="visible-xs">
                   담긴 CI를 소개합니다.
               </p>
            </header>
            <div class="section-content">
                <article class="concept">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <p class="ci-logo">
                                    <img src="/assets/images/introduce/ci_logo_img.png" class="img-responsive" alt="">
                                </p>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="details">
                                    <hr class="visible-lg">
                                    <h5>CI 컨셉</h5>
                                    <p class="ci-summary">
                                        심볼디자인은 타원의 리본형태로 역동적이고 글로벌 한 형태로, 무한성장을 추구하는 우정의 의지를 담았다. 안전성과 활력을 나타내는 Orenge와 Red 컬러로 긍정적 생명력을 상징한다. 로고타이프는 컬러를 검정에서 회색으로, 서체는 모서리가 없게 교체하여 부드럽고 안정적인 이미지를 표현하였다.
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-white" role="button">
                                                <i class="icon-download"><span class="sr-only">다운로드 아이콘</span></i>JPG 다운로드
                                            </a>
                                            <a href="#" class="btn btn-white" role="button">
                                                <i class="icon-download"><span class="sr-only">다운로드 아이콘</span></i>AI 다운로드
                                            </a>
                                            <a href="#" class="btn btn-orange" role="button">
                                                <i class="icon-download"><span class="sr-only">다운로드 아이콘</span></i>EPS 다운로드
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="container">
                    <div class="logo-color">
                        <hr class="visible-lg">
                        <h5>컬러시스템</h5>
                        <ul class="row">
                            <li class="col-xs-12 col-sm-4">
                                <div class="colors red-color">
                                    <h6>WOOJUNG BSC</h6>
                                    <ul class="details-color">
                                        <li>PANTONE 1797C</li>
                                        <li>CMYK 0 / 100 / 99 / 4</li>
                                        <li>RGB 225 / 0 / 18</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-4">
                                <div class="colors orange-color">
                                    <h6>WOOJUNG BSC</h6>
                                    <ul class="details-color">
                                        <li>PANTONE 165C</li>
                                        <li>CMYK 0 / 59 / 96 / 0</li>
                                        <li>RGB 240 / 133 / 0</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-4">
                                <div class="colors gray-color">
                                    <h6>WOOJUNG BSC</h6>
                                    <ul class="details-color">
                                        <li>BLACK 80%</li>
                                        <li>CMYK 0 / 0 / 0 / 80</li>
                                        <li>RGB 89 / 87 / 87</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <p class="summary">
                            Color System은 WOOJUNGBSC의 시각적 이미지를 전달하는 기본적인 요소이며 일관성있는 이미지 구축 을 위하여 지정된 색상을 통일성 있게 지속적으로 사용 하는 것이 중요하다. Color의 사용은 지정된 별색사용 을 원칙으로 하며, Process Color 사용 시 정확한 사용 및 관리가 요구된다.
                        </p>
                    </div>
                </div>
            </div>
        </section>
	</main>
    <!-- //Sub Content Start -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/foot-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
