<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/business.css" rel="stylesheet">
</head>
<body class="sub call-center-info">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
    <main id="content" class="business">
        <!-- Page Header -->
        <div class="page-header">
            <div class="visual-header">
                <div class="header-intro">
                    <h2>BUSINESS</h2>
                    <p class="hidden-xs">
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        지금까지 걸어온 30년... 이제부터가 시작입니다.
                    </p>
                </div>
            </div>
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    CRO
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/business/vivarium.php">시설구축</a></li>
                    <li><a href="/business/infection.php">환경감염관리</a></li>
                    <li><a href="/business/maintenance.php">전문유지보수서비스</a></li>
                    <li><a href="/business/call_center.php">우정콜센터</a></li>
                    <li class="active"><a href="/business/cro.php">CRO</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="cro">
            <header>
                <h3>정밀의학/글로벌 CRO</h3>
            </header>
            <div class="section-content">
                <div class="container">
                    <ul class="cro-tab">
                        <li class="active"><a href="#">정밀의학 CRO</a></li>
                        <li><a href="#">글로벌 CRO</a></li>
                    </ul>
                </div>
                <article class="medicine">
                    <div class="article-header">
                        <h4>정밀의학 CRO</h4>
                        <p class="summary">
                            우정비에스씨는 최첨단 동물실을 기반으로, <br class="visible-xs">
                            4차 산업 중심의 정밀의학 분야를 선도하는 기업입니다.
                        </p>
                    </div>
                    <div class="article-content">
                        <div class="medicine-cro">
                            <p class="figure">
                                <img src="/assets/images/business/medicine_xs_img.png" class="img-responsive visible-xs" alt="">
                                <img src="/assets/images/business/medicine_sm_img.png" class="img-responsive visible-sm visible-md" alt="">
                                <img src="/assets/images/business/medicine_lg_img.png" class="img-responsive visible-lg" alt="">
                            </p>
                            <div class="figcaption sr-only">
                                <ul>
                                    <li>Clinical trial</li>
                                    <li>A/S Support</li>
                                    <li>Medicine</li>
                                    <li>Genetic engineering</li>
                                    <li>Animal experiment</li>
                                    <li>biotechnology</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cro-details">
                            <p class="figure">
                                <img src="/assets/images/business/cro_details_xs.png" class="img-responsive visible-xs" alt="">
                                <img src="/assets/images/business/cro_details_sm.png" class="img-responsive visible-sm visible-md" alt="">
                                <img src="/assets/images/business/cro_details_lg.png" class="img-responsive visible-lg" alt="">
                            </p>
                            <div class="figcaption sr-only">
                                <ul>
                                    <li>
                                        <h6>항암 스크리닝</h6>
                                        Immuno-Oncology 
                                        Platform Service
                                    </li>
                                    <li>
                                        <h6>유전자 조작</h6>
                                        Gene Development
                                        Stable cell line Lentvirus
                                        Konck-out mouse
                                    </li>
                                    <li>
                                        <h6>스크리닝 모델</h6>
                                        Humanized Mice model
                                        CDX model Syngenenic model
                                    </li>
                                    <li>
                                        <h6>맞춤의학</h6>
                                        Humanized Mice model
                                        CDX model Syngenenic model
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
	</main>
    <!-- //Sub Content Start -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/foot-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
