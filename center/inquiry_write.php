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
                    <div class="select-list">
                        <ul class="row">
                            <li class="col-xs-6 col-sm-4 col-lg-2">
                                <a href="#" class="active">1</a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-lg-2">
                                <a href="#">2</a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-lg-2">
                                <a href="#">3</a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-lg-2">
                                <a href="#">4</a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-lg-2">
                                <a href="#">5</a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-lg-2">
                                <a href="#">6</a>
                            </li>
                        </ul>
                        <div class="write">
                            <form action="#">
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th><label for="u-name">이름</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-name" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-phone">연락처</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-phone" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="e-mail">이메일</label></th>
                                                <td class="e-mail">
                                                    <div class="form-group">
                                                        <input type="email" id="e-mail" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>문의부서</th>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>부서선택</option>
                                                        </select>
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
            </div>
        </section>
	</main>
    <!-- //Sub Content Start -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/foot-nav.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
