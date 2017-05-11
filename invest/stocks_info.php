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
<!--
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    공지사항
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/center/notice_list.php">공지사항</a></li>
                    <li><a href="/center/news_letter.php">뉴스레터</a></li>
                    <li><a href="#">E-카달로그</a></li>
                    <li><a href="#">고객문의</a></li>
                </ul>
            </div>
-->
        </div>
        <!-- Sub Page 공통 -->
        <section class="stocks-info">
            <header>
                <h3>주식정보</h3>
            </header>
            <div class="section-content">
                <div class="container">
                    <article class="information">
                        <p class="attention">체결시간 <b>2017-04-24 14:40</b> 기준</p>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="price">
                                    <div class="high-price">
                                        <p class="up-price">19,750</p>
                                    </div>
                                    <div class="low-price">
                                        <div>
                                            <dl>
                                                <dt>전일대비</dt>
                                                <dd class="down-price">250</dd>
                                                <dt>등락률</dt>
                                                <dd class="percent">1.25</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>시가(원)</th>
                                                <th>고가(원)</th>
                                                <th>저가(원)</th>
                                                <th>거래량</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>19,500</td>
                                                <td class="red-txt">19,900</td>
                                                <td class="blue-txt">9,400</td>
                                                <td>43,197</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <!-- 그래프 영역 기능 개발 가능여부 확인 후 작업 진행 보류 -->
                    <article class="graph-area">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p class="figure">
                                    <img src="/assets/images/invest/graph_no_img.jpg" class="img-responsive" alt="">
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <p class="figure">
                                    <img src="/assets/images/invest/graph_no_img.jpg" class="img-responsive" alt="">
                                </p>
                            </div>
                        </div>
                    </article>
                    
                    <article class="stocks-info-all">
                        <div class="table-wrap table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>날짜</th>
                                        <th>종가(원)</th>
                                        <th>전일대비</th>
                                        <th>등락률</th>
                                        <th>시가</th>
                                        <th>고가</th>
                                        <th>저가</th>
                                        <th>거래량 (주)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="up-arrow red-txt">250</td>
                                        <td class="percent plus red-txt">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="up-arrow red-txt">350</td>
                                        <td class="percent plus red-txt">1.83</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>0</td>
                                        <td class="percent">0</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="down-arrow blue-txt">200</td>
                                        <td class="percent minus blue-txt">1.54</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>350</td>
                                        <td class="percent plus">1.83</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>550</td>
                                        <td class="percent plus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>123</td>
                                        <td class="percent minus">0.83</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>876</td>
                                        <td class="percent plus">1.89</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>248</td>
                                        <td class="percent plus">1.54</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>548</td>
                                        <td class="percent minus">0.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
