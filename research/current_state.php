<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/research.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
    <main id="content" class="research">
        <!-- Page Header -->
        <div class="page-header">
            <div class="visual-header">
                <div class="header-intro">
                    <h2>R&amp;D</h2>
                    <p class="hidden-xs">
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        지금까지 걸어온 30년... 이제부터가 시작입니다.
                    </p>
                </div>
            </div>
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    바이오연구소
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/research/current_state.php">바이오연구소</a></li>
                    <li><a href="/research/equipment.php">장비연구소</a></li>
                    <li><a href="/research/patent.php">특허</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="current-state">
            <header>
                <h3>바이오연구소</h3>
                <p class="summary">
                    바이오 전문가 양성교육과 외부 전문기관 특별 교육을<br class="visible-xs"> 
                    실시하고 있으며,<br class="hidden-xs"> 온라인 교육 점수 이수제를<br class="visible-xs">
                    통해 전문성을 갖추도록 하고 있습니다.
                </p>
            </header>
            <div class="section-content">
                <nav class="tab-list">
                <!-- Nav tabs -->
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab-1">연구소현황</a>
                            </li>
                            <li>
                                <a href="#tab-2">연구분야</a>
                            </li>
                            <li>
                                <a href="#tab-3">성과</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <!-- Tab panes -->
                <article id="tab-1" class="current-state-info">
                    <div class="container">
                        <hr>
                        <h4>연구소현황</h4>
                        <p>
                            우정생명과학연구소는  ㈜우정비에스씨의 기업부설연구소로 2010년 “우정생명과학연구소(WJ Institute for Life  Science)”를 설립하였으며, 국내의 실험동물기반의 생명과학연구 수행을 위해 우정유전체연구센터(Woojung center for phenogenomics)를 설립했습니다.
                        </p>
                        <p>
                            우정생명과학연구소와 유전체연구센터는 바이오업계의 환경변화에 능동적으로 대처하고 , 당사 사업의 핵심 기반 기술을 연구개발, 발전시키는 역할을 하고 있습니다.
                        </p>
                        <p>
                            고객 여러분들의 연구 업무에 무궁한 성과가 있으시길 바랍니다.
                        </p>
                    </div>
                </article>
                <article id="tab-2" class="study-field">
                    <div class="container">
                        <div class="article-header">
                            <hr>
                            <h4>연구분야</h4>
                        </div>
                        <figure>
                            <img src="/assets/images/research/field_xs_img.png" class="img-responsive visible-xs" alt="">
                            <img src="/assets/images/research/field_sm_img.png" class="img-responsive visible-sm visible-md" alt="">
                            <img src="/assets/images/research/field_lg_img.png" class="img-responsive visible-lg" alt="">
                            <figcaption class="sr-only">
                                <h1>우정 BSC 연구분야</h1>
                                <ul>
                                    <li>High throughput Screening</li>
                                    <li>Lentivirus system &amp; Cell derived xenograft </li>
                                    <li>정밀의학</li>
                                    <li>新 물질 개발</li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </article>
                <article id="tab-3" class="result">
                    <div class="container">
                        <div class="article-header">
                            <hr>
                            <h4>성과</h4>
                        </div>
                        <div class="table-wrap table-responsive">
                            <table class="table">
                                <colgroup>
                                    <col style="width: 4%;">
                                    <col style="width: 8%;">
                                    <col style="width: 11%;">
                                    <col style="width: 26%;">
                                    <col style="width: 15%;">
                                    <col style="width: 7%;">
                                    <col style="width: 7%;">
                                    <col style="width: 11%;">
                                    <col style="width: 6%;">
                                    <col style="width: 5%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>시행부처</th>
                                        <th>사업명</th>
                                        <th>과제명</th>
                                        <th>개발기간(개월)</th>
                                        <th>총 사업비<br>(천원)</th>
                                        <th>정부출연금<br>(천원)</th>
                                        <th>주관기관</th>
                                        <th>참여형태</th>
                                        <th>상태</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>중소기업청</td>
                                        <td>도약기술개발사업</td>
                                        <td class="content">
                                            제브라피쉬 질환모델을 이용한 비만치료제 후보 물질 시험평가 운영체계 구축 및 기술개발지원
                                        </td>
                                        <td>
                                            20141001-20150931<br>(12개월)
                                        </td>
                                        <td>106,667</td>
                                        <td>80,000</td>
                                        <td>안전성평가연구소</td>
                                        <td>참여</td>
                                        <td>완료</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>중소기업청</td>
                                        <td>도약기술개발사업</td>
                                        <td class="content">
                                            패혈증 고속 진단을 위한 엔도톡신 광학센싱 기술 개발
                                        </td>
                                        <td>
                                            20150601-20160531<br>(12개월)
                                        </td>
                                        <td>98,436</td>
                                        <td>73,827</td>
                                        <td>성균관대학교</td>
                                        <td>참여</td>
                                        <td>완료</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>중소기업청</td>
                                        <td>R&amp;D 기획지원사업</td>
                                        <td class="content">
                                            대체시험동물 기반의 생체 효능 및 안전성을 예측 평가하는 스크리닝 시스템 개발
                                        </td>
                                        <td>
                                            20150501-20150931<br>(5개월)
                                        </td>
                                        <td>28,000</td>
                                        <td>21,000</td>
                                        <td>㈜우정비에스씨</td>
                                        <td>주관</td>
                                        <td>완료</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>질병관리본부</td>
                                        <td>정책연구용역사업</td>
                                        <td class="content">
                                            생물안전 3등급 연구시설의 폐기 및 재활용을 위한 제독방안연구
                                        </td>
                                        <td>
                                            20151001-20160131<br>(4개월)
                                        </td>
                                        <td>60,000</td>
                                        <td>60,000</td>
                                        <td>건국대</td>
                                        <td>참여</td>
                                        <td>완료</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>미래부</td>
                                        <td>
                                            바이오 의료기술<br>개발사업
                                        </td>
                                        <td class="content">
                                            뇌전증(간질) 신규타겟 및 KO모델동물을 활용한 치료제 개발 기반구축
                                        </td>
                                        <td>
                                            20150601-20170531<br>(24개월)
                                        </td>
                                        <td>613,332</td>
                                        <td>460,000</td>
                                        <td>충남대학교</td>
                                        <td>참여</td>
                                        <td>진행중</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>중소기업청</td>
                                        <td>기술혁신개발사업</td>
                                        <td class="content">
                                            대체시험동물 기반의 생체 효능 및 안전성을 예측 평가하는 스크리닝 시스템 개발
                                        </td>
                                        <td>
                                            20160128-20180127<br>(24개월)
                                        </td>
                                        <td>676,924</td>
                                        <td>440,000</td>
                                        <td>㈜우정비에스씨</td>
                                        <td>주관</td>
                                        <td>진행중</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>산업자원부</td>
                                        <td>기술혁신개발사업</td>
                                        <td class="content">
                                            안면홍조, 골밀도 감소, 관절통증, 수면장애, 우울증, 피로 등 폐경기 증상의 개선을 위한 천연물 소재 개발

                                        </td>
                                        <td>
                                            20160701-20191231<br>(42개월)
                                        </td>
                                        <td>2,536,900</td>
                                        <td>1,750,000</td>
                                        <td>㈜내츄럴엔도텍</td>
                                        <td>참여</td>
                                        <td>진행중</td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script>
        $(".nav-tabs li").click(function() {
            $(".nav-tabs li").removeClass("active");
            $(this).addClass("active");
        });
    </script>
</body>
</html>
