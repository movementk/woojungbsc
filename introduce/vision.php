<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
</head>
<body class="sub vision-main">
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
                    비전
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/introduce/greeting.php">CEO인사말</a></li>
                    <li class="active"><a href="/introduce/vision.php">비전</a></li>
                    <li><a href="/introduce/history.php">연혁</a></li>
                    <li><a href="/introduce/ci_introduce.php">CI 소개</a></li>
                    <li><a href="/introduce/group.php">조직도</a></li>
                    <li><a href="/introduce/partner.php">협력사</a></li>
                    <li><a href="/introduce/location.php">오시는길</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="vision">
            <header>
                <h3>비전</h3>
                <h4>
                    국민의 풍요롭고 안전한<br class="visible-xs">
                    삶을 위해 노력하는 기업
                </h4>
            </header>
            <div class="section-content">
                <div class="container">
                    <h5>
                        <img src="/assets/images/introduce/logo_img.png" class="img-responsive visible-xs" alt="logo">
                        <img src="/assets/images/introduce/logo_img_v.png" class="img-responsive hidden-xs" alt="logo">
                    </h5>
                    <ul class="vision-list">
                        <li class="present">
                            <p class="figure">
                                <img src="/assets/images/introduce/present_icon.png" class="img-responsive" alt="present">
                            </p>
                            <div class="details">
                                <h6>우정비에스씨</h6>
                                <ul>
                                    <li>연구시설구축</li>
                                    <li>감염관리</li>
                                    <li>정밀의학 CRO</li>
                                </ul>
                            </div>
                        </li>
                        <li class="tomorrow">
                            <p class="figure">
                                <img src="/assets/images/introduce/tomorrow_icon.png" class="img-responsive" alt="tomorrow">
                            </p>
                            <div class="details">
                                <h6>감염방지 토탈 솔루션</h6>
                                <ul>
                                    <li>MERS사태 시 중추적<br class="hidden-lg"> 역할 경험</li>
                                    <li>HPV멸균기 국산화 성공</li>
                                </ul>
                            </div>
                        </li>
                        <li class="next">
                            <p class="figure">
                                <img src="/assets/images/introduce/next_icon.png" class="img-responsive" alt="next">
                            </p>
                            <div class="details">
                                <h6>新 물질개발</h6>
                                <ul>
                                    <li>천연물 유래 감염병 예방용<br> 살충제 개발</li>
                                    <li>유전자 재조합세포배양기술<br> 기반 항체치료제 개발</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
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
