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
                    공지사항
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/center/notice_list.php">공지사항</a></li>
                    <li><a href="#">뉴스레터</a></li>
                    <li><a href="#">E-카달로그</a></li>
                    <li><a href="#">고객문의</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Page 공통 -->
        <section class="notice-list">
            <header>
                <h3>공지사항</h3>
                <p class="summary">
                    우정BSC의 새로운 소식 및 공지사항을<br class="visible-xs">
                    알려드립니다.
                </p>
            </header>
            <div class="section-content">
                <div class="container">
                    <div class="search-form">
                        <form action="#">
                            <select>
                                <option>전체</option>
                                <option>선택1</option>
                                <option>선택2</option>
                                <option>선택3</option>
                            </select>
                            <div class="form-group">
                                <input type="text" id="search" class="form-control">
                                <label for="search" class="sr-only">검색하기</label>
                            </div>
                            <button type="submit" class="btn btn-search">SEARCH</button>
                        </form>
                    </div>
                    <ul class="list">
                        <li class="visible-lg">
                            <ul class="list-header">
                                <li>번호</li>
                                <li>제목</li>
                                <li>작성일</li>
                                <li>조회수</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        공고합방 및 주권제출공고
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        합병승인 임시주주총회 소집통지 공고
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        주주명부폐쇄 기준일 공고
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        결과분석에서 논문데이터까지 단 한번의 실험으로 해결하세요!
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 효능/안전성 평가
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 유전독성시험서비스(Genetic Toxicology)
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 위탁사육관리 
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 비만효력시험
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 병리평가
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 당뇨 효력시험
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                    </ul>
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
