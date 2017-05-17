<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
</head>
<body class="sub group-main">
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
<!--
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    조직도
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/introduce/greeting.php">CEO인사말</a></li>
                    <li><a href="/introduce/vision.php">비전</a></li>
                    <li><a href="/introduce/history.php">연혁</a></li>
                    <li><a href="/introduce/ci_introduce.php">CI 소개</a></li>
                    <li class="active"><a href="/introduce/group.php">조직도</a></li>
                    <li><a href="#">협력사</a></li>
                    <li><a href="#">오시는길</a></li>
                </ul>
            </div>
-->
        </div>
        <!-- Sub Page 공통 -->
        <section class="group">
            <header>
                <h3>조직도</h3>
                <h4>WOOJUNGBSC<br class="visible-xs"> Organization<br class="visible-sm"> Guidance</h4>
                <p class="summary">
                   기업의 투명성과 책임경영의 기반아래 합리적이고<br>
                   진취적인 조직운영을 하고 있습니다.
               </p>
            </header>
            <div class="section-content">
                <div class="group-table">
                    <p class="figure">
                        <img src="/assets/images/introduce/group_table_xs.png" class="img-responsive visible-xs" alt="조직도">
                        <img src="/assets/images/introduce/group_table_sm.png" class="img-responsive visible-sm" alt="조직도">
                        <img src="/assets/images/introduce/group_table_lg.png" class="img-responsive visible-md visible-lg" alt="조직도">
                    </p>
                </div>
                <ul class="sr-only">
                    <li>
                        <h1>CEO</h1>
                        <h2>기획조정실</h2>
                        <ul>
                            <li>
                                <h3>사업개발본부</h3>
                                <ul>
                                    <li>사업관리팀</li>
                                    <li>기술팀</li>
                                    <li>신규사업팀</li>
                                </ul>
                            </li>
                            <li>
                                <h3>영업본부</h3>
                                <ul>
                                    <li>영업관리팀</li>
                                    <li>영업팀</li>
                                    <li>공장</li>
                                </ul>
                            </li>
                            <li>
                                <h3>바이오 사업본부</h3>
                                <ul>
                                    <li>정밀의학팀</li>
                                    <li>GLP</li>
                                    <li>영업팀</li>
                                    <li>실험동물팀</li>
                                </ul>
                            </li>
                            <li>
                                <h3>경영관리본부</h3>
                                <ul>
                                    <li>경영운영팀</li>
                                    <li>경영지원팀</li>
                                </ul>
                            </li>
                            <li>
                                <h3>연구개발</h3>
                                <ul>
                                    <li>바이오연구소</li>
                                    <li>장비연구소</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
	</main>
    <!-- //Sub Content Start -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/foot-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
