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
                    재무정보
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/invest/finance.php">재무정보</a></li>
                    <li><a href="#">IR요약</a></li>
                    <li><a href="/invest/stocks_info.php">주식정보</a></li>
                    <li><a href="/invest/disclosure_list.php">공시정보</a></li>
                    <li><a href="/invest/news_list.php">회사소식</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="finance">
            <header>
                <h3>재무정보</h3>
                <p class="summary">
                    우정비에스씨는 30년 역사를 바탕으로<br>
                    가치창출을 통한 지속성장을 추구하고 있습니다.
                </p>
            </header>
            <div class="section-content">
                <div class="container">
                    <article class="stockholder">
                        <div class="article-header">
                            <hr>
                            <h4>주주현황</h4>
                        </div>
                        <div class="article-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 col-lg-6">
                                    <div class="cicle-graph">
                                        <dl>
                                            <dt>상장주식총수</dt>
                                            <dd>123,456,789주</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-lg-6">
                                    <div class="table-wrap">
                                        <table class="table table-bordered">
                                            <colgroup>
                                                <col style="width: 33.33%">
                                                <col style="width: 33.33%">
                                                <col style="width: 33.33%">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>구분</th>
                                                    <th>발행주식</th>
                                                    <th>비중</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><p class="square-red">최대주주 등</p></td>
                                                    <td>5,678</td>
                                                    <td>50,60%</td>
                                                </tr>
                                                <tr>
                                                    <td><p class="square-orange">기타</p></td>
                                                    <td>5,000</td>
                                                    <td>49,40%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <dl class="unit">
                                            <dt>단위</dt>
                                            <dd>백만원</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="summarize">
                        <div class="article-header">
                            <hr>
                            <h4>요약 재무제표</h4>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <dl class="unit">
                                    <dt>단위</dt>
                                    <dd>백만원</dd>
                                </dl>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>항목</th>
                                            <th>2013년</th>
                                            <th>2014년</th>
                                            <th>2015년</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>[유동자산]</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>당좌자산</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>재고자산</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>[비유동자산]</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>투자자산</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>유형자산</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>무형자산</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>기타비유동자산</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td class="total">자산통계</td>
                                            <td class="total">1,234</td>
                                            <td class="total">1,234</td>
                                            <td class="total">1,234</td>
                                        </tr>
                                        <tr>
                                            <td>[유동부채]</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>[비유동부채]</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td class="total">부채총계</td>
                                            <td class="total">5,678</td>
                                            <td class="total">5,678</td>
                                            <td class="total">5,678</td>
                                        </tr>
                                        <tr>
                                            <td>자본잉여금</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>기타자본</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>기타포괄손인누계액</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>이익잉여금</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td class="total">자본총계</td>
                                            <td class="total">1,234</td>
                                            <td class="total">1,234</td>
                                            <td class="total">1,234</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="summarize">
                        <div class="article-header">
                            <hr>
                            <h4>요약 손익계산서</h4>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <dl class="unit">
                                    <dt>단위</dt>
                                    <dd>백만원</dd>
                                </dl>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>항목</th>
                                            <th>2013년</th>
                                            <th>2014년</th>
                                            <th>2015년</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>매출액</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>매출원가</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>매출 총이익</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>영업이익</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                        <tr>
                                            <td>당기순이익</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                            <td>1,234</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                기본 및 희석<br class="visible-xs"> 주당순이익<br>
                                                (단위 : 원)
                                            </td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                            <td>5,678</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
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
