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
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    고객문의
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/center/notice_list.php">공지사항</a></li>
                    <li><a href="/center/news_letter.php">뉴스레터</a></li>
                    <li><a href="/center/e_catalog.php">E-카달로그</a></li>
                    <li class="active"><a href="/center/inquiry_write.php">고객문의</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="inquiry-write">
            <header>
                <h3>고객문의</h3>
                <p class="summary">
                    우정비에스씨는 연구자분들의 곁에 항상 함께합니다.<br>
                    각 부서별 대표번호로 연락주시면 보다 빠른<br class="visible-xs">
                    답변을 받으실 수 있습니다.
                </p>
            </header>
            <div class="section-content">
                <div class="container">
                    <ul class="inquiry-type">
                        <li>
                            <p class="figure">
                                <img src="/assets/images/center/inquiry_img01.png" class="basic-img" alt="Vivarium E&C">
                                <img src="/assets/images/center/inquiry_img01_on.png" class="over-img" alt="Vivarium E&C">
                            </p>
                            <div class="figcaption">
                                <h4>VIVARIEM E&amp;C</h4>
                                <a href="tel:0318889352" class="call">031-888-9352</a>
                            </div>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/assets/images/center/inquiry_img02.png" class="basic-img" alt="DIO decontamination">
                                <img src="/assets/images/center/inquiry_img02_on.png" class="over-img" alt="DIO decontamination">
                            </p>
                            <div class="figcaption">
                                <h4>DIO DECONTAMINATION</h4>
                                <a href="tel:0318889347" class="call">031-888-9347</a>
                            </div>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/assets/images/center/inquiry_img03.png" class="basic-img" alt="Aquatic solution">
                                <img src="/assets/images/center/inquiry_img03_on.png" class="over-img" alt="Aquatic solution">
                            </p>
                            <div class="figcaption">
                                <h4>AQUATIC SOLUTION</h4>
                                <a href="tel:0318889358" class="call">031-888-9358</a>
                            </div>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/assets/images/center/inquiry_img04.png" class="basic-img" alt="생명과학분석서비스">
                                <img src="/assets/images/center/inquiry_img04_on.png" class="over-img" alt="생명과학분석서비스">
                            </p>
                            <div class="figcaption">
                                <h4>생명과학분석서비스</h4>
                                <dl>
                                    <dt>CRO</dt>
                                    <dd><a href="tel:0318889888" class="call">031-888-9888</a></dd>
                                </dl>
                                <dl>
                                    <dt>PRODUCT</dt>
                                    <dd><a href="tel:0318889269" class="call">031-888-9269</a></dd>
                                </dl>
                            </div>
                        </li>
                        <li>
                            <p class="figure">
                                <img src="/assets/images/center/inquiry_img05.png" class="basic-img" alt="A/S 접수">
                                <img src="/assets/images/center/inquiry_img05_on.png" class="over-img" alt="A/S 접수">
                            </p>
                            <div class="figcaption">
                                <h4>A/S 접수</h4>
                                <a href="tel:15221277" class="call">1522-1277</a>
                            </div>
                        </li>
                    </ul>
                    <div class="write">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="needs"><label for="u-name">이름</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="needs"><label for="u-phone">연락처</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="needs"><label for="e-mail">이메일</label></th>
                                            <td class="e-mail">
                                                <div class="form-group">
                                                    <input type="email" id="e-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="needs"><label for="affiliation">소속</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="affiliation" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="department">부서</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="department" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="subject">문의제목</label></th>
                                            <td class="subject">
                                                <div class="form-group">
                                                    <input type="text" id="subject" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="subject"><label for="u-content">문의내용</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea id="u-content" class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>파일첨부</th>
                                            <td class="file">
                                                <div class="form-group">
                                                    <input type="file" id="file" class="form-control">
                                                    <label for="file">찾아보기</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-orange">등록하기</button>
                                    <a href="#" class="btn btn-gray" role="button">취소하기</a>
                                </p>
                            </div>
                        </form>
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
