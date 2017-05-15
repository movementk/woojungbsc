<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
    <!-- Sub Content Start -->
	<main id="content">
        <!-- Page Header -->
	    <div class="page-header">
            <div class="visual-header">
                <div class="header-intro">
                    <h2>COMPANY</h2>
                    <p class="hidden-xs">
                        국내 최고의 바이오 인프라 솔루션 기업 우정비에스씨<br>
                        지금까지 걸어온 30년... 이제부터가 시작입니다.
                    </p>
                </div>
            </div>
            <div class="sub-lnb dropdown">
                <button class="btn btn-default dropdown-toggle hidden-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    CEO 인사말
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="#">CEO인사말</a></li>
                    <li><a href="#">비전</a></li>
                    <li><a href="#">연혁</a></li>
                    <li><a href="#">CI소개</a></li>
                    <li><a href="#">조직도</a></li>
                    <li><a href="#">협력사</a></li>
                    <li><a href="#">오시는길</a></li>
                </ul>
            </div>
        </div>

        <!-- Sub Page 공통 -->
        <section>
           <header>
               <h3>CEO 인사말</h3>
               <h4>Protect Your<br class="visible-xs">Research Investment</h4>
               <p class="summary">
                   Since 1989, 생명과학연구 솔루션 전문기업으로 도약해온<br class="hidden-xs">
                   우정BSC를 찾아주신 여러분 반갑습니다.
               </p>
           </header>
        </section>

        <div class="container">
            <!-- 검색폼 -->
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
            
            <div style="margin: 30px 0;"></div>
            
            <!-- 페이징 -->
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
	</main>
	<!-- //Sub Content Start -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/foot-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
