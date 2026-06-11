<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// WING
if($is_wing)
	@include_once (G5_THEME_PATH.'/_wing.php');
?>

<div class="nt-container px-0 px-sm-4 px-xl-0 pt-0 pt-sm-4">
	<div class="row na-row">
		<!-- 메인 영역 -->
		<div class="col-md-9 na-col">

			<h3 class="h3 f-lg en" style="font-size: 28px !important;">
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=youtube">
							<span class="float-right more-plus"></span>
							우파튜브
						</a>
			</h3>
			<hr class="hr"/>
			<div class="px-3 px-sm-0 mt-3 mb-4">
				<?php echo na_widget('wr-news-big', 'wr-news-big-1'); ?>
			</div>

			<div class="row na-row">
				<div class="col-md-4 na-col">

					<!-- 위젯 시작 { -->
					<h3 class="h3 f-lg en">
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa">
							<span class="float-right more-plus"></span>
							주요 집회 일정
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<?php echo na_widget('wr-list', 'tlist-1', 'bo_list=board rank=red'); ?>
					</div>
					<!-- } 위젯 끝-->

				</div>
				<div class="col-md-4 na-col">

					<!-- 위젯 시작 { -->
					<h3 class="h3 f-lg en">
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free">
							<span class="float-right more-plus"></span>	
							시사/정치 뉴스
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<?php echo na_widget('wr-list', 'tlist-2', 'bo_list=board rank=green'); ?>
					</div>
					<!-- } 위젯 끝-->

				</div>
				<div class="col-md-4 na-col">

					<!-- 위젯 시작 { -->
					<h3 class="h3 f-lg en">
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=global">
							<span class="float-right more-plus"></span>
							글로벌 우파 근황
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<?php echo na_widget('wr-list', 'tlist-3', 'bo_list=board rank=blue'); ?>
					</div>
					<!-- } 위젯 끝-->

				</div>
			</div>

			<!-- 위젯 시작 { -->
			<h3 class="h3 f-lg en">
				<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=gallery">
					<span class="float-right more-plus"></span>
					갤러리
				</a>
			</h3>
			<hr class="hr"/>
			<div class="px-3 px-sm-0 mt-3 mb-4">
				<?php echo na_widget('wr-gallery-slider', 'gallery-1', 'bo_table=gallery rows=8'); ?>
			</div>
			<!-- } 위젯 끝-->

		</div>

		<!-- 사이드 영역 -->
		<div class="col-md-3 na-col">
			<?php @include_once(G5_THEME_PATH.'/side/side-index.php') ?>
		</div>
	</div>
</div>
