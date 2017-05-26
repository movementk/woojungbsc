<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/business.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
    <main id="content" class="business maintenance-info">
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
                    전문유지보수서비스
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/business/vivarium.php">시설구축</a></li>
                    <li><a href="/business/infection.php">환경감염관리</a></li>
                    <li class="active"><a href="/business/maintenance.php">전문유지보수서비스</a></li>
                    <li><a href="/business/call_center.php">우정콜센터</a></li>
                    <li><a href="#">정밀의학 CRO</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="maintenance">
            <header>
                <h3>전문유지보수서비스</h3>
                <h4>
                    Innovation + Serivce<br class="visible-xs"> = INNOSERVICE
                </h4>
                <p class="summary">
                    장비 유지보수 분야에서 혁신적인 서비스를 제공할<br class="visible-xs">
                    수 있드록 전문 유지보수 팀을 구성하여<br class="hidden-xs"> 실험동물<br class="visible-xs">
                    센터 내 모든 장비 대상, 제조사 무관 수리부터 보수,<br class="visible-xs">
                    관리까지<br class="hidden-xs"> 모두 가능한 <i>TOTAL SOLUTION</i>을<br class="visible-xs">
                    제공하고 있습니다.
                </p>
            </header>
            <div class="section-content">
                <div class="container">
                    <ul class="row">
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <figure>
                                <img src="/assets/images/business/maintenance_list_img01.jpg" class="img-responsive" alt="">
                                <figcaption>
                                    <hr>
                                    <h5>모든장비가능</h5>
                                    <p>모든 제조사의 전 제품에 동일한<br>서비스 제공</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <figure>
                                <img src="/assets/images/business/maintenance_list_img02.jpg" class="img-responsive" alt="">
                                <figcaption>
                                    <hr>
                                    <h5>고객 맞춤형 서비스</h5>
                                    <p>방문횟수, 장비 수량, 예산 등을 고려한<br>고객 맞춤형 서비스 제공</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <figure>
                                <img src="/assets/images/business/maintenance_list_img03.jpg" class="img-responsive" alt="">
                                <figcaption>
                                    <hr>
                                    <h5>폭 넓은 수행 범위</h5>
                                    <p>검교정, 유지보수, 점검 등 장비 종류<br>와 무관하게 다양한 서비스 제공</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <figure>
                                <img src="/assets/images/business/maintenance_list_img04.jpg" class="img-responsive" alt="">
                                <figcaption>
                                    <hr>
                                    <h5>전문 유지보수팀</h5>
                                    <p>전문가들로 이루어진 유지보수 전문<br>팀이 서비스 제공</p>
                                </figcaption>
                            </figure>
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
