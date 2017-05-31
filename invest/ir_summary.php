<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/invest.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
    <main id="content" class="invest">
        <!-- Page Header -->
        <div class="page-header">
            <div class="visual-header">
                <div class="header-intro">
                    <h2>INVESTMENT INFO</h2>
                    <p class="hidden-xs">
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        지금까지 걸어온 30년... 이제부터가 시작입니다.
                    </p>
                </div>
            </div>
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    IR요약
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/invest/finance.php">재무정보</a></li>
                    <li class="active"><a href="/invest/ir_summary.php">IR요약</a></li>
                    <li><a href="/invest/stocks_info.php">주식정보</a></li>
                    <li><a href="/invest/disclosure_list.php">공시정보</a></li>
                    <li><a href="/invest/news_list.php">회사소식</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="ir-summary">
            <header>
                <h3>IR요약</h3>
            </header>
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="graph">
                                <hr>
                                <h4>매출액 및 영업 이익</h4>
                                <figure>
                                    <img src="/assets/images/invest/graph_table_img01.jpg" class="img-responsive" alt="매출액 및 영업 이익에 따른 그래프 표">
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="graph">
                                <hr>
                                <h4>영업이익률</h4>
                                <figure>
                                    <img src="/assets/images/invest/graph_table_img02.jpg" class="img-responsive" alt="매출액 및 영업 이익에 따른 그래프 표">
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="graph">
                                <hr>
                                <h4>자산현황</h4>
                                <div class="progress-graph">
                                    <dl>
                                        <dt>단위</dt>
                                        <dd>억원</dd>
                                    </dl>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-red" style="width: 64%">
                                            <span>자본 600</span>
                                        </div>
                                        <div class="progress-bar progress-bar-gray" style="width: 36%">
                                            <span>부채 341</span>
                                        </div>
                                    </div>
                                    <div class="total">
                                        <p class="bar"></p>
                                        <span class="sum">941</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="graph">
                                <hr>
                                <h4>임직원수</h4>
                                <div class="progress-graph">
                                    <dl>
                                        <dt>단위</dt>
                                        <dd>명</dd>
                                    </dl>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-red" style="width: 25%">
                                            <span>관리 사무직 44</span>
                                        </div>
                                        <div class="progress-bar progress-bar-orange" style="width: 30%">
                                            <span>생산 기술직 59</span>
                                        </div>
                                        <div class="progress-bar progress-bar-gray" style="width: 45%">
                                            <span>연구 개발직 119</span>
                                        </div>
                                    </div>
                                    <div class="total">
                                        <p class="bar"></p>
                                        <span class="sum">222</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
