<aside id="nav-aside" class="hidden-lg">
	<div class="nav-content">
		<div class="nav-header">
			<button type="button" id="btn-nav-close" class="btn btn-link">
				<span class="sr-only">메뉴 닫기</span>
				<i class="icon-cancel"></i>
			</button>
			<ul class="sns">
				<li><a class="fb" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="bl" href="#"><i>b</i></a></li>
			</ul>
		</div>
		<div class="nav-body">
			<ul>
				<li>
					<a href="#">회사소개</a>
					<ul>
						<li><a href="/introduce/greeting.php">CEO인사말</a></li>
                        <li><a href="/introduce/vision.php">비전</a></li>
                        <li><a href="/introduce/history.php">연혁</a></li>
                        <li><a href="/introduce/ci_introduce.php">CI소개</a></li>
                        <li><a href="/introduce/group.php">조직도</a></li>
                        <li><a href="/introduce/partner.php">협력사</a></li>
                        <li><a href="/introduce/location.php">오시는 길</a></li>
					</ul>
				</li>
				<li>
					<a href="#">사업영역</a>
					<ul>
						<li><a href="/business/vivarium.php">시설구축</a></li>
						<li><a href="/business/infection.php">환경감염관리</a></li>
						<li><a href="/business/maintenance.php">전문유지보수서비스</a></li>
						<li><a href="/business/call_center.php">우정콜센터</a></li>
						<li><a href="#">정밀의학 CRO</a></li>
					</ul>
				</li>
				<li>
					<a href="#">연구개발</a>
					<ul>
						<li><a href="/research/current_state.php">바이오연구소</a></li>
						<!-- 메뉴 임시 삭제 05-29
                        <li><a href="/research/equipment.php">장비연구소</a></li>
                        <li><a href="/research/patent.php">특허</a></li>
						-->
					</ul>
				</li>
				<li>
					<a href="#">투자정보</a>
					<ul>
						<li><a href="/invest/finance.php">재무정보</a></li>
                        <li><a href="javascript:alert('준비중입니다.');">IR요약</a></li>
                        <li><a href="/invest/stocks_info.php">주식정보</a></li>
                        <li><a href="/invest/disclosure_list.php">공시정보</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">회사소식</a></li>
					</ul>
				</li>
				<li>
					<a href="#">고객센터</a>
					<ul>
						<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=newsletter">뉴스레터</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=catalog">E-카탈로그</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=inquiry">고객문의</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="nav-footer">
			<?php include($_SERVER['DOCUMENT_ROOT']."/inc/family-sites.php"); ?>
		</div>
	</div>
</aside>