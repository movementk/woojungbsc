<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/center.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
    <main id="content" class="center">
        <!-- Page Header -->
        <div class="page-header">
            <div class="visual-header">
                <div class="header-intro">
                    <h2>CS CENTER</h2>
                    <p class="hidden-xs">
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        지금까지 걸어온 30년... 이제부터가 시작입니다.
                    </p>
                </div>
            </div>
<!--
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    뉴스레터
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/center/notice_list.php">공지사항</a></li>
                    <li class="active"><a href="/center/news_letter.php">뉴스레터</a></li>
                    <li><a href="#">E-카달로그</a></li>
                    <li><a href="#">고객문의</a></li>
                </ul>
            </div>
-->
        </div>
        <!-- Sub Page 공통 -->
        <section class="e-catalog">
            <header>
                <h3>E-카달로그</h3>
                <p class="summary">
                    국내 생명과학 연구 발전과 함께하는<br class="bisible-xs"> 우정비에스씨의 카달로그입니다.
                </p>
            </header>
            <div class="section-content">
                <div class="container">
                    <article class="catalog-list">
                        <ul class="row">
                            <li class="col-xs-12 col-sm-6 col-md-4">
                                <div class="info">
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/center/catalog_img01.gif" class="img-responsive" alt="이노비바 뉴스레터 17년 04월호">
                                            <figcaption>이노비바 뉴스레터 17년 04월호</figcaption>
                                        </figure>
                                        <div class="hover-more" style="display:none;">
                                            <i class="icon-"></i>
                                            뉴스레터보기
                                        </div>
                                    </a>
                                </div>
                            </li>
<!--
                            <li class="col-xs-12 col-sm-6 col-md-4">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/center/catalog_img02.gif" class="img-responsive" alt="이노비바 뉴스레터 17년 04월호">
                                        <figcaption>이노비바 뉴스레터 17년 04월호</figcaption>
                                    </figure>
                                    <div class="hover-more" style="display:none;">
                                        <i class="icon-"></i>
                                        뉴스레터보기
                                    </div>
                                </a>
                            </li>
-->
                        </ul>
                    </article>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="stp">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="stp stm-right">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="hidden-xs"><a href="#">6</a></li>
                            <li class="hidden-xs"><a href="#">7</a></li>
                            <li class="hidden-xs"><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="stp stm-left">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li class="stp">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
