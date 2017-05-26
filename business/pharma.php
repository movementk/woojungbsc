<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/business.css" rel="stylesheet">
</head>
<body class="sub">
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
                    시설구축
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/business/vivarium.php">시설구축</a></li>
                    <li><a href="/business/infection.php">환경감염관리</a></li>
                    <li><a href="/business/maintenance.php">전문유지보수서비스</a></li>
                    <li><a href="/business/call_center.php">우정콜센터</a></li>
                    <li><a href="#">정밀의학 CRO</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="pharma">
            <header>
                <h3>시설구축</h3>
            </header>
            <div class="section-content">
                <!-- Nav tabs -->
                <div class="container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <a href="/business/vivarium.php">RESEARCH FACILITY<br class="visible-xs"> SOLUTION</a>
                        </li>
                        <li class="active">
                            <a href="/business/pharma.php">PHARMA SOLUTION</a>
                        </li>
                    </ul>
                </div>
                <article class="Perfect">
                    <div class="article-header">
                        <h4>
                            Perfect Solutions for<br class="visible-xs">
                            Pharmaceutical Facility
                        </h4>
                        <p class="summary">
                            우정비에스씨는 cGMP 가이드라인을 완벽하게<br class="visible-xs">
                            충족하는 장비,소모품 및 Bio Clean Room구축에<br class="visible-xs">
                            이르기까지<br class="visible-sm"> 신약 개발을 위한<br class="visible-xs">
                            <i>Total Solution</i> 입니다
                        </p>
                    </div>
                    <div class="article-content">
                        <div class="container">
                            <figure>
                                <img src="/assets/images/business/pharma_img_xs.png" class="img-responsive visible-xs" alt="innopharma">
                                <img src="/assets/images/business/pharma_img_sm.png" class="img-responsive visible-sm" alt="innopharma">
                                <img src="/assets/images/business/pharma_img_md.png" class="img-responsive visible-md visible-lg" alt="innopharma">
                                <figcaption class="sr-only">
                                    <h1>INNOVIVA &amp; innoConstruction</h1>
                                    <h2>Construction</h2>
                                    <h2>Innovative</h2>
                                    <h2>Pharmaceutical</h2>
                                    <ul>
                                        <li>cGMP 충족</li>
                                        <li>철저한 유지관리</li>
                                        <li>국제 가이드라인에 부합하는 시설</li>
                                        <li>요청에 따른 모듈형 제작</li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </article>
                <article class="viva-solution">
                    <div class="container">
                        <hr>
                        <h5>Vivarium Solution</h5>
                        <ul class="row">
                            <li class="col-xs-12 col-sm-4">
                                <div class="solution">
                                    <p class="figure">
                                        <img src="/assets/images/business/pharma_solution_img01.gif" class="img-responsive" alt="장비">
                                    </p>
                                    <div class="details">
                                        <hr>
                                        <h6>장비</h6>
                                        <p class="summary">
                                            제약용 세척기, HPV, 아이솔레이터 등<br>
                                            Bio Clean Room을 위한 장비
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-4">
                                <div class="solution">
                                    <p class="figure">
                                        <img src="/assets/images/business/pharma_solution_img02.gif" class="img-responsive" alt="소모품">
                                    </p>
                                    <div class="details">
                                        <hr>
                                        <h6>소모품</h6>
                                        <p class="summary">
                                            Biological Indicator 및<br class="hidden-xs hidden-lg"> Chemical Indicator,<br class="visigle-lg"> 엔도톡신,<br class="hidden-lg">
                                            유전독성(Ames Test) 등 의약품<br class="hidden-xs"> 및 의료기기<br class="visible-xs">
                                            생산에 필수적인<br class="hidden-xs hidden-lg"> 소모품
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-4">
                                <div class="solution">
                                    <p class="figure">
                                        <img src="/assets/images/business/pharma_solution_img03.gif" class="img-responsive" alt="E&C">
                                    </p>
                                    <div class="details">
                                        <hr>
                                        <h6>E&amp;C</h6>
                                        <p class="summary">
                                            일반 또는 특수목적의 실험실 컨설팅,<br class="visible-xs visible-lg">
                                            설계, 시공 및 유지보수관리
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
