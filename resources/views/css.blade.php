<style>
	@font-face {
		font-family: 'FontAwesome';
		font-display: swap;
		src: url(../fonts/fontawesome-webfont.eot?v=4.3.0);
		src: url(../fonts/fontawesome-webfont.eot?#iefix&v=4.3.0) format("embedded-opentype"), url(../fonts/fontawesome-webfont.woff2?v=4.3.0) format("woff2"), url(../fonts/fontawesome-webfont.woff?v=4.3.0) format("woff"), url(../fonts/fontawesome-webfont.ttf?v=4.3.0) format("truetype"), url(../fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular) format("svg");
		font-weight: 400;
		font-style: normal
	}

	.fa {
		display: inline-block;
		font: normal normal normal 14px/1 FontAwesome;
		font-size: inherit;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		transform: translate(0, 0)
	}

	.fa-lg {
		font-size: 1.33333333em;
		line-height: .75em;
		vertical-align: -15%
	}

	.fa-2x {
		font-size: 2em
	}

	.fa-3x {
		font-size: 3em
	}

	.fa-4x {
		font-size: 4em
	}

	.fa-5x {
		font-size: 5em
	}

	.fa-fw {
		width: 1.28571429em;
		text-align: center
	}

	.fa-ul {
		padding-left: 0;
		margin-left: 2.14285714em;
		list-style-type: none
	}

	.fa-ul>li {
		position: relative
	}

	.fa-li {
		position: absolute;
		left: -2.14285714em;
		width: 2.14285714em;
		top: .14285714em;
		text-align: center
	}

	.fa-li.fa-lg {
		left: -1.85714286em
	}

	.fa-border {
		padding: .2em .25em .15em;
		border: solid .08em #eee;
		border-radius: .1em
	}

	.pull-right {
		float: right
	}

	.pull-left {
		float: left
	}

	.fa.pull-left {
		margin-right: .3em
	}

	.fa.pull-right {
		margin-left: .3em
	}

	.fa-spin {
		-webkit-animation: fa-spin 2s infinite linear;
		animation: fa-spin 2s infinite linear
	}

	.fa-pulse {
		-webkit-animation: fa-spin 1s infinite steps(8);
		animation: fa-spin 1s infinite steps(8)
	}

	@-webkit-keyframes fa-spin {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		100% {
			-webkit-transform: rotate(359deg);
			transform: rotate(359deg)
		}
	}

	@keyframes fa-spin {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		100% {
			-webkit-transform: rotate(359deg);
			transform: rotate(359deg)
		}
	}

	.fa-rotate-90 {
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
		-webkit-transform: rotate(90deg);
		-ms-transform: rotate(90deg);
		transform: rotate(90deg)
	}

	.fa-rotate-180 {
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
		-webkit-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		transform: rotate(180deg)
	}

	.fa-rotate-270 {
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
		-webkit-transform: rotate(270deg);
		-ms-transform: rotate(270deg);
		transform: rotate(270deg)
	}

	.fa-flip-horizontal {
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
		-webkit-transform: scale(-1, 1);
		-ms-transform: scale(-1, 1);
		transform: scale(-1, 1)
	}

	.fa-flip-vertical {
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
		-webkit-transform: scale(1, -1);
		-ms-transform: scale(1, -1);
		transform: scale(1, -1)
	}

	:root .fa-rotate-90,
	:root .fa-rotate-180,
	:root .fa-rotate-270,
	:root .fa-flip-horizontal,
	:root .fa-flip-vertical {
		filter: none
	}

	.fa-stack {
		position: relative;
		display: inline-block;
		width: 2em;
		height: 2em;
		line-height: 2em;
		vertical-align: middle
	}

	.fa-stack-1x,
	.fa-stack-2x {
		position: absolute;
		left: 0;
		width: 100%;
		text-align: center
	}

	.fa-stack-1x {
		line-height: inherit
	}

	.fa-stack-2x {
		font-size: 2em
	}

	.fa-inverse {
		color: #fff
	}

	.fa-glass:before {
		content: "\f000"
	}

	.fa-music:before {
		content: "\f001"
	}

	.fa-search:before {
		content: "\f002"
	}

	.fa-envelope-o:before {
		content: "\f003"
	}

	.fa-heart:before {
		content: "\f004"
	}

	.fa-star:before {
		content: "\f005"
	}

	.fa-star-o:before {
		content: "\f006"
	}

	.fa-user:before {
		content: "\f007"
	}

	.fa-film:before {
		content: "\f008"
	}

	.fa-th-large:before {
		content: "\f009"
	}

	.fa-th:before {
		content: "\f00a"
	}

	.fa-th-list:before {
		content: "\f00b"
	}

	.fa-check:before {
		content: "\f00c"
	}

	.fa-remove:before,
	.fa-close:before,
	.fa-times:before {
		content: "\f00d"
	}

	.fa-search-plus:before {
		content: "\f00e"
	}

	.fa-search-minus:before {
		content: "\f010"
	}

	.fa-power-off:before {
		content: "\f011"
	}

	.fa-signal:before {
		content: "\f012"
	}

	.fa-gear:before,
	.fa-cog:before {
		content: "\f013"
	}

	.fa-trash-o:before {
		content: "\f014"
	}

	.fa-home:before {
		content: "\f015"
	}

	.fa-file-o:before {
		content: "\f016"
	}

	.fa-clock-o:before {
		content: "\f017"
	}

	.fa-road:before {
		content: "\f018"
	}

	.fa-download:before {
		content: "\f019"
	}

	.fa-arrow-circle-o-down:before {
		content: "\f01a"
	}

	.fa-arrow-circle-o-up:before {
		content: "\f01b"
	}

	.fa-inbox:before {
		content: "\f01c"
	}

	.fa-play-circle-o:before {
		content: "\f01d"
	}

	.fa-rotate-right:before,
	.fa-repeat:before {
		content: "\f01e"
	}

	.fa-refresh:before {
		content: "\f021"
	}

	.fa-list-alt:before {
		content: "\f022"
	}

	.fa-lock:before {
		content: "\f023"
	}

	.fa-flag:before {
		content: "\f024"
	}

	.fa-headphones:before {
		content: "\f025"
	}

	.fa-volume-off:before {
		content: "\f026"
	}

	.fa-volume-down:before {
		content: "\f027"
	}

	.fa-volume-up:before {
		content: "\f028"
	}

	.fa-qrcode:before {
		content: "\f029"
	}

	.fa-barcode:before {
		content: "\f02a"
	}

	.fa-tag:before {
		content: "\f02b"
	}

	.fa-tags:before {
		content: "\f02c"
	}

	.fa-book:before {
		content: "\f02d"
	}

	.fa-bookmark:before {
		content: "\f02e"
	}

	.fa-print:before {
		content: "\f02f"
	}

	.fa-camera:before {
		content: "\f030"
	}

	.fa-font:before {
		content: "\f031"
	}

	.fa-bold:before {
		content: "\f032"
	}

	.fa-italic:before {
		content: "\f033"
	}

	.fa-text-height:before {
		content: "\f034"
	}

	.fa-text-width:before {
		content: "\f035"
	}

	.fa-align-left:before {
		content: "\f036"
	}

	.fa-align-center:before {
		content: "\f037"
	}

	.fa-align-right:before {
		content: "\f038"
	}

	.fa-align-justify:before {
		content: "\f039"
	}

	.fa-list:before {
		content: "\f03a"
	}

	.fa-dedent:before,
	.fa-outdent:before {
		content: "\f03b"
	}

	.fa-indent:before {
		content: "\f03c"
	}

	.fa-video-camera:before {
		content: "\f03d"
	}

	.fa-photo:before,
	.fa-image:before,
	.fa-picture-o:before {
		content: "\f03e"
	}

	.fa-pencil:before {
		content: "\f040"
	}

	.fa-map-marker:before {
		content: "\f041"
	}

	.fa-adjust:before {
		content: "\f042"
	}

	.fa-tint:before {
		content: "\f043"
	}

	.fa-edit:before,
	.fa-pencil-square-o:before {
		content: "\f044"
	}

	.fa-share-square-o:before {
		content: "\f045"
	}

	.fa-check-square-o:before {
		content: "\f046"
	}

	.fa-arrows:before {
		content: "\f047"
	}

	.fa-step-backward:before {
		content: "\f048"
	}

	.fa-fast-backward:before {
		content: "\f049"
	}

	.fa-backward:before {
		content: "\f04a"
	}

	.fa-play:before {
		content: "\f04b"
	}

	.fa-pause:before {
		content: "\f04c"
	}

	.fa-stop:before {
		content: "\f04d"
	}

	.fa-forward:before {
		content: "\f04e"
	}

	.fa-fast-forward:before {
		content: "\f050"
	}

	.fa-step-forward:before {
		content: "\f051"
	}

	.fa-eject:before {
		content: "\f052"
	}

	.fa-chevron-left:before {
		content: "\f053"
	}

	.fa-chevron-right:before {
		content: "\f054"
	}

	.fa-plus-circle:before {
		content: "\f055"
	}

	.fa-minus-circle:before {
		content: "\f056"
	}

	.fa-times-circle:before {
		content: "\f057"
	}

	.fa-check-circle:before {
		content: "\f058"
	}

	.fa-question-circle:before {
		content: "\f059"
	}

	.fa-info-circle:before {
		content: "\f05a"
	}

	.fa-crosshairs:before {
		content: "\f05b"
	}

	.fa-times-circle-o:before {
		content: "\f05c"
	}

	.fa-check-circle-o:before {
		content: "\f05d"
	}

	.fa-ban:before {
		content: "\f05e"
	}

	.fa-arrow-left:before {
		content: "\f060"
	}

	.fa-arrow-right:before {
		content: "\f061"
	}

	.fa-arrow-up:before {
		content: "\f062"
	}

	.fa-arrow-down:before {
		content: "\f063"
	}

	.fa-mail-forward:before,
	.fa-share:before {
		content: "\f064"
	}

	.fa-expand:before {
		content: "\f065"
	}

	.fa-compress:before {
		content: "\f066"
	}

	.fa-plus:before {
		content: "\f067"
	}

	.fa-minus:before {
		content: "\f068"
	}

	.fa-asterisk:before {
		content: "\f069"
	}

	.fa-exclamation-circle:before {
		content: "\f06a"
	}

	.fa-gift:before {
		content: "\f06b"
	}

	.fa-leaf:before {
		content: "\f06c"
	}

	.fa-fire:before {
		content: "\f06d"
	}

	.fa-eye:before {
		content: "\f06e"
	}

	.fa-eye-slash:before {
		content: "\f070"
	}

	.fa-warning:before,
	.fa-exclamation-triangle:before {
		content: "\f071"
	}

	.fa-plane:before {
		content: "\f072"
	}

	.fa-calendar:before {
		content: "\f073"
	}

	.fa-random:before {
		content: "\f074"
	}

	.fa-comment:before {
		content: "\f075"
	}

	.fa-magnet:before {
		content: "\f076"
	}

	.fa-chevron-up:before {
		content: "\f077"
	}

	.fa-chevron-down:before {
		content: "\f078"
	}

	.fa-retweet:before {
		content: "\f079"
	}

	.fa-shopping-cart:before {
		content: "\f07a"
	}

	.fa-folder:before {
		content: "\f07b"
	}

	.fa-folder-open:before {
		content: "\f07c"
	}

	.fa-arrows-v:before {
		content: "\f07d"
	}

	.fa-arrows-h:before {
		content: "\f07e"
	}

	.fa-bar-chart-o:before,
	.fa-bar-chart:before {
		content: "\f080"
	}

	.fa-twitter-square:before {
		content: "\f081"
	}

	.fa-facebook-square:before {
		content: "\f082"
	}

	.fa-camera-retro:before {
		content: "\f083"
	}

	.fa-key:before {
		content: "\f084"
	}

	.fa-gears:before,
	.fa-cogs:before {
		content: "\f085"
	}

	.fa-comments:before {
		content: "\f086"
	}

	.fa-thumbs-o-up:before {
		content: "\f087"
	}

	.fa-thumbs-o-down:before {
		content: "\f088"
	}

	.fa-star-half:before {
		content: "\f089"
	}

	.fa-heart-o:before {
		content: "\f08a"
	}

	.fa-sign-out:before {
		content: "\f08b"
	}

	.fa-linkedin-square:before {
		content: "\f08c"
	}

	.fa-thumb-tack:before {
		content: "\f08d"
	}

	.fa-external-link:before {
		content: "\f08e"
	}

	.fa-sign-in:before {
		content: "\f090"
	}

	.fa-trophy:before {
		content: "\f091"
	}

	.fa-github-square:before {
		content: "\f092"
	}

	.fa-upload:before {
		content: "\f093"
	}

	.fa-lemon-o:before {
		content: "\f094"
	}

	.fa-phone:before {
		content: "\f095"
	}

	.fa-square-o:before {
		content: "\f096"
	}

	.fa-bookmark-o:before {
		content: "\f097"
	}

	.fa-phone-square:before {
		content: "\f098"
	}

	.fa-twitter:before {
		content: "\f099"
	}

	.fa-facebook-f:before,
	.fa-facebook:before {
		content: "\f09a"
	}

	.fa-github:before {
		content: "\f09b"
	}

	.fa-unlock:before {
		content: "\f09c"
	}

	.fa-credit-card:before {
		content: "\f09d"
	}

	.fa-rss:before {
		content: "\f09e"
	}

	.fa-hdd-o:before {
		content: "\f0a0"
	}

	.fa-bullhorn:before {
		content: "\f0a1"
	}

	.fa-bell:before {
		content: "\f0f3"
	}

	.fa-certificate:before {
		content: "\f0a3"
	}

	.fa-hand-o-right:before {
		content: "\f0a4"
	}

	.fa-hand-o-left:before {
		content: "\f0a5"
	}

	.fa-hand-o-up:before {
		content: "\f0a6"
	}

	.fa-hand-o-down:before {
		content: "\f0a7"
	}

	.fa-arrow-circle-left:before {
		content: "\f0a8"
	}

	.fa-arrow-circle-right:before {
		content: "\f0a9"
	}

	.fa-arrow-circle-up:before {
		content: "\f0aa"
	}

	.fa-arrow-circle-down:before {
		content: "\f0ab"
	}

	.fa-globe:before {
		content: "\f0ac"
	}

	.fa-wrench:before {
		content: "\f0ad"
	}

	.fa-tasks:before {
		content: "\f0ae"
	}

	.fa-filter:before {
		content: "\f0b0"
	}

	.fa-briefcase:before {
		content: "\f0b1"
	}

	.fa-arrows-alt:before {
		content: "\f0b2"
	}

	.fa-group:before,
	.fa-users:before {
		content: "\f0c0"
	}

	.fa-chain:before,
	.fa-link:before {
		content: "\f0c1"
	}

	.fa-cloud:before {
		content: "\f0c2"
	}

	.fa-flask:before {
		content: "\f0c3"
	}

	.fa-cut:before,
	.fa-scissors:before {
		content: "\f0c4"
	}

	.fa-copy:before,
	.fa-files-o:before {
		content: "\f0c5"
	}

	.fa-paperclip:before {
		content: "\f0c6"
	}

	.fa-save:before,
	.fa-floppy-o:before {
		content: "\f0c7"
	}

	.fa-square:before {
		content: "\f0c8"
	}

	.fa-navicon:before,
	.fa-reorder:before,
	.fa-bars:before {
		content: "\f0c9"
	}

	.fa-list-ul:before {
		content: "\f0ca"
	}

	.fa-list-ol:before {
		content: "\f0cb"
	}

	.fa-strikethrough:before {
		content: "\f0cc"
	}

	.fa-underline:before {
		content: "\f0cd"
	}

	.fa-table:before {
		content: "\f0ce"
	}

	.fa-magic:before {
		content: "\f0d0"
	}

	.fa-truck:before {
		content: "\f0d1"
	}

	.fa-pinterest:before {
		content: "\f0d2"
	}

	.fa-pinterest-square:before {
		content: "\f0d3"
	}

	.fa-google-plus-square:before {
		content: "\f0d4"
	}

	.fa-google-plus:before {
		content: "\f0d5"
	}

	.fa-money:before {
		content: "\f0d6"
	}

	.fa-caret-down:before {
		content: "\f0d7"
	}

	.fa-caret-up:before {
		content: "\f0d8"
	}

	.fa-caret-left:before {
		content: "\f0d9"
	}

	.fa-caret-right:before {
		content: "\f0da"
	}

	.fa-columns:before {
		content: "\f0db"
	}

	.fa-unsorted:before,
	.fa-sort:before {
		content: "\f0dc"
	}

	.fa-sort-down:before,
	.fa-sort-desc:before {
		content: "\f0dd"
	}

	.fa-sort-up:before,
	.fa-sort-asc:before {
		content: "\f0de"
	}

	.fa-envelope:before {
		content: "\f0e0"
	}

	.fa-linkedin:before {
		content: "\f0e1"
	}

	.fa-rotate-left:before,
	.fa-undo:before {
		content: "\f0e2"
	}

	.fa-legal:before,
	.fa-gavel:before {
		content: "\f0e3"
	}

	.fa-dashboard:before,
	.fa-tachometer:before {
		content: "\f0e4"
	}

	.fa-comment-o:before {
		content: "\f0e5"
	}

	.fa-comments-o:before {
		content: "\f0e6"
	}

	.fa-flash:before,
	.fa-bolt:before {
		content: "\f0e7"
	}

	.fa-sitemap:before {
		content: "\f0e8"
	}

	.fa-umbrella:before {
		content: "\f0e9"
	}

	.fa-paste:before,
	.fa-clipboard:before {
		content: "\f0ea"
	}

	.fa-lightbulb-o:before {
		content: "\f0eb"
	}

	.fa-exchange:before {
		content: "\f0ec"
	}

	.fa-cloud-download:before {
		content: "\f0ed"
	}

	.fa-cloud-upload:before {
		content: "\f0ee"
	}

	.fa-user-md:before {
		content: "\f0f0"
	}

	.fa-stethoscope:before {
		content: "\f0f1"
	}

	.fa-suitcase:before {
		content: "\f0f2"
	}

	.fa-bell-o:before {
		content: "\f0a2"
	}

	.fa-coffee:before {
		content: "\f0f4"
	}

	.fa-cutlery:before {
		content: "\f0f5"
	}

	.fa-file-text-o:before {
		content: "\f0f6"
	}

	.fa-building-o:before {
		content: "\f0f7"
	}

	.fa-hospital-o:before {
		content: "\f0f8"
	}

	.fa-ambulance:before {
		content: "\f0f9"
	}

	.fa-medkit:before {
		content: "\f0fa"
	}

	.fa-fighter-jet:before {
		content: "\f0fb"
	}

	.fa-beer:before {
		content: "\f0fc"
	}

	.fa-h-square:before {
		content: "\f0fd"
	}

	.fa-plus-square:before {
		content: "\f0fe"
	}

	.fa-angle-double-left:before {
		content: "\f100"
	}

	.fa-angle-double-right:before {
		content: "\f101"
	}

	.fa-angle-double-up:before {
		content: "\f102"
	}

	.fa-angle-double-down:before {
		content: "\f103"
	}

	.fa-angle-left:before {
		content: "\f104"
	}

	.fa-angle-right:before {
		content: "\f105"
	}

	.fa-angle-up:before {
		content: "\f106"
	}

	.fa-angle-down:before {
		content: "\f107"
	}

	.fa-desktop:before {
		content: "\f108"
	}

	.fa-laptop:before {
		content: "\f109"
	}

	.fa-tablet:before {
		content: "\f10a"
	}

	.fa-mobile-phone:before,
	.fa-mobile:before {
		content: "\f10b"
	}

	.fa-circle-o:before {
		content: "\f10c"
	}

	.fa-quote-left:before {
		content: "\f10d"
	}

	.fa-quote-right:before {
		content: "\f10e"
	}

	.fa-spinner:before {
		content: "\f110"
	}

	.fa-circle:before {
		content: "\f111"
	}

	.fa-mail-reply:before,
	.fa-reply:before {
		content: "\f112"
	}

	.fa-github-alt:before {
		content: "\f113"
	}

	.fa-folder-o:before {
		content: "\f114"
	}

	.fa-folder-open-o:before {
		content: "\f115"
	}

	.fa-smile-o:before {
		content: "\f118"
	}

	.fa-frown-o:before {
		content: "\f119"
	}

	.fa-meh-o:before {
		content: "\f11a"
	}

	.fa-gamepad:before {
		content: "\f11b"
	}

	.fa-keyboard-o:before {
		content: "\f11c"
	}

	.fa-flag-o:before {
		content: "\f11d"
	}

	.fa-flag-checkered:before {
		content: "\f11e"
	}

	.fa-terminal:before {
		content: "\f120"
	}

	.fa-code:before {
		content: "\f121"
	}

	.fa-mail-reply-all:before,
	.fa-reply-all:before {
		content: "\f122"
	}

	.fa-star-half-empty:before,
	.fa-star-half-full:before,
	.fa-star-half-o:before {
		content: "\f123"
	}

	.fa-location-arrow:before {
		content: "\f124"
	}

	.fa-crop:before {
		content: "\f125"
	}

	.fa-code-fork:before {
		content: "\f126"
	}

	.fa-unlink:before,
	.fa-chain-broken:before {
		content: "\f127"
	}

	.fa-question:before {
		content: "\f128"
	}

	.fa-info:before {
		content: "\f129"
	}

	.fa-exclamation:before {
		content: "\f12a"
	}

	.fa-superscript:before {
		content: "\f12b"
	}

	.fa-subscript:before {
		content: "\f12c"
	}

	.fa-eraser:before {
		content: "\f12d"
	}

	.fa-puzzle-piece:before {
		content: "\f12e"
	}

	.fa-microphone:before {
		content: "\f130"
	}

	.fa-microphone-slash:before {
		content: "\f131"
	}

	.fa-shield:before {
		content: "\f132"
	}

	.fa-calendar-o:before {
		content: "\f133"
	}

	.fa-fire-extinguisher:before {
		content: "\f134"
	}

	.fa-rocket:before {
		content: "\f135"
	}

	.fa-maxcdn:before {
		content: "\f136"
	}

	.fa-chevron-circle-left:before {
		content: "\f137"
	}

	.fa-chevron-circle-right:before {
		content: "\f138"
	}

	.fa-chevron-circle-up:before {
		content: "\f139"
	}

	.fa-chevron-circle-down:before {
		content: "\f13a"
	}

	.fa-html5:before {
		content: "\f13b"
	}

	.fa-css3:before {
		content: "\f13c"
	}

	.fa-anchor:before {
		content: "\f13d"
	}

	.fa-unlock-alt:before {
		content: "\f13e"
	}

	.fa-bullseye:before {
		content: "\f140"
	}

	.fa-ellipsis-h:before {
		content: "\f141"
	}

	.fa-ellipsis-v:before {
		content: "\f142"
	}

	.fa-rss-square:before {
		content: "\f143"
	}

	.fa-play-circle:before {
		content: "\f144"
	}

	.fa-ticket:before {
		content: "\f145"
	}

	.fa-minus-square:before {
		content: "\f146"
	}

	.fa-minus-square-o:before {
		content: "\f147"
	}

	.fa-level-up:before {
		content: "\f148"
	}

	.fa-level-down:before {
		content: "\f149"
	}

	.fa-check-square:before {
		content: "\f14a"
	}

	.fa-pencil-square:before {
		content: "\f14b"
	}

	.fa-external-link-square:before {
		content: "\f14c"
	}

	.fa-share-square:before {
		content: "\f14d"
	}

	.fa-compass:before {
		content: "\f14e"
	}

	.fa-toggle-down:before,
	.fa-caret-square-o-down:before {
		content: "\f150"
	}

	.fa-toggle-up:before,
	.fa-caret-square-o-up:before {
		content: "\f151"
	}

	.fa-toggle-right:before,
	.fa-caret-square-o-right:before {
		content: "\f152"
	}

	.fa-euro:before,
	.fa-eur:before {
		content: "\f153"
	}

	.fa-gbp:before {
		content: "\f154"
	}

	.fa-dollar:before,
	.fa-usd:before {
		content: "\f155"
	}

	.fa-rupee:before,
	.fa-inr:before {
		content: "\f156"
	}

	.fa-cny:before,
	.fa-rmb:before,
	.fa-yen:before,
	.fa-jpy:before {
		content: "\f157"
	}

	.fa-ruble:before,
	.fa-rouble:before,
	.fa-rub:before {
		content: "\f158"
	}

	.fa-won:before,
	.fa-krw:before {
		content: "\f159"
	}

	.fa-bitcoin:before,
	.fa-btc:before {
		content: "\f15a"
	}

	.fa-file:before {
		content: "\f15b"
	}

	.fa-file-text:before {
		content: "\f15c"
	}

	.fa-sort-alpha-asc:before {
		content: "\f15d"
	}

	.fa-sort-alpha-desc:before {
		content: "\f15e"
	}

	.fa-sort-amount-asc:before {
		content: "\f160"
	}

	.fa-sort-amount-desc:before {
		content: "\f161"
	}

	.fa-sort-numeric-asc:before {
		content: "\f162"
	}

	.fa-sort-numeric-desc:before {
		content: "\f163"
	}

	.fa-thumbs-up:before {
		content: "\f164"
	}

	.fa-thumbs-down:before {
		content: "\f165"
	}

	.fa-youtube-square:before {
		content: "\f166"
	}

	.fa-youtube:before {
		content: "\f167"
	}

	.fa-xing:before {
		content: "\f168"
	}

	.fa-xing-square:before {
		content: "\f169"
	}

	.fa-youtube-play:before {
		content: "\f16a"
	}

	.fa-dropbox:before {
		content: "\f16b"
	}

	.fa-stack-overflow:before {
		content: "\f16c"
	}

	.fa-instagram:before {
		content: "\f16d"
	}

	.fa-flickr:before {
		content: "\f16e"
	}

	.fa-adn:before {
		content: "\f170"
	}

	.fa-bitbucket:before {
		content: "\f171"
	}

	.fa-bitbucket-square:before {
		content: "\f172"
	}

	.fa-tumblr:before {
		content: "\f173"
	}

	.fa-tumblr-square:before {
		content: "\f174"
	}

	.fa-long-arrow-down:before {
		content: "\f175"
	}

	.fa-long-arrow-up:before {
		content: "\f176"
	}

	.fa-long-arrow-left:before {
		content: "\f177"
	}

	.fa-long-arrow-right:before {
		content: "\f178"
	}

	.fa-apple:before {
		content: "\f179"
	}

	.fa-windows:before {
		content: "\f17a"
	}

	.fa-android:before {
		content: "\f17b"
	}

	.fa-linux:before {
		content: "\f17c"
	}

	.fa-dribbble:before {
		content: "\f17d"
	}

	.fa-skype:before {
		content: "\f17e"
	}

	.fa-foursquare:before {
		content: "\f180"
	}

	.fa-trello:before {
		content: "\f181"
	}

	.fa-female:before {
		content: "\f182"
	}

	.fa-male:before {
		content: "\f183"
	}

	.fa-gittip:before,
	.fa-gratipay:before {
		content: "\f184"
	}

	.fa-sun-o:before {
		content: "\f185"
	}

	.fa-moon-o:before {
		content: "\f186"
	}

	.fa-archive:before {
		content: "\f187"
	}

	.fa-bug:before {
		content: "\f188"
	}

	.fa-vk:before {
		content: "\f189"
	}

	.fa-weibo:before {
		content: "\f18a"
	}

	.fa-renren:before {
		content: "\f18b"
	}

	.fa-pagelines:before {
		content: "\f18c"
	}

	.fa-stack-exchange:before {
		content: "\f18d"
	}

	.fa-arrow-circle-o-right:before {
		content: "\f18e"
	}

	.fa-arrow-circle-o-left:before {
		content: "\f190"
	}

	.fa-toggle-left:before,
	.fa-caret-square-o-left:before {
		content: "\f191"
	}

	.fa-dot-circle-o:before {
		content: "\f192"
	}

	.fa-wheelchair:before {
		content: "\f193"
	}

	.fa-vimeo-square:before {
		content: "\f194"
	}

	.fa-turkish-lira:before,
	.fa-try:before {
		content: "\f195"
	}

	.fa-plus-square-o:before {
		content: "\f196"
	}

	.fa-space-shuttle:before {
		content: "\f197"
	}

	.fa-slack:before {
		content: "\f198"
	}

	.fa-envelope-square:before {
		content: "\f199"
	}

	.fa-wordpress:before {
		content: "\f19a"
	}

	.fa-openid:before {
		content: "\f19b"
	}

	.fa-institution:before,
	.fa-bank:before,
	.fa-university:before {
		content: "\f19c"
	}

	.fa-mortar-board:before,
	.fa-graduation-cap:before {
		content: "\f19d"
	}

	.fa-yahoo:before {
		content: "\f19e"
	}

	.fa-google:before {
		content: "\f1a0"
	}

	.fa-reddit:before {
		content: "\f1a1"
	}

	.fa-reddit-square:before {
		content: "\f1a2"
	}

	.fa-stumbleupon-circle:before {
		content: "\f1a3"
	}

	.fa-stumbleupon:before {
		content: "\f1a4"
	}

	.fa-delicious:before {
		content: "\f1a5"
	}

	.fa-digg:before {
		content: "\f1a6"
	}

	.fa-pied-piper:before {
		content: "\f1a7"
	}

	.fa-pied-piper-alt:before {
		content: "\f1a8"
	}

	.fa-drupal:before {
		content: "\f1a9"
	}

	.fa-joomla:before {
		content: "\f1aa"
	}

	.fa-language:before {
		content: "\f1ab"
	}

	.fa-fax:before {
		content: "\f1ac"
	}

	.fa-building:before {
		content: "\f1ad"
	}

	.fa-child:before {
		content: "\f1ae"
	}

	.fa-paw:before {
		content: "\f1b0"
	}

	.fa-spoon:before {
		content: "\f1b1"
	}

	.fa-cube:before {
		content: "\f1b2"
	}

	.fa-cubes:before {
		content: "\f1b3"
	}

	.fa-behance:before {
		content: "\f1b4"
	}

	.fa-behance-square:before {
		content: "\f1b5"
	}

	.fa-steam:before {
		content: "\f1b6"
	}

	.fa-steam-square:before {
		content: "\f1b7"
	}

	.fa-recycle:before {
		content: "\f1b8"
	}

	.fa-automobile:before,
	.fa-car:before {
		content: "\f1b9"
	}

	.fa-cab:before,
	.fa-taxi:before {
		content: "\f1ba"
	}

	.fa-tree:before {
		content: "\f1bb"
	}

	.fa-spotify:before {
		content: "\f1bc"
	}

	.fa-deviantart:before {
		content: "\f1bd"
	}

	.fa-soundcloud:before {
		content: "\f1be"
	}

	.fa-database:before {
		content: "\f1c0"
	}

	.fa-file-pdf-o:before {
		content: "\f1c1"
	}

	.fa-file-word-o:before {
		content: "\f1c2"
	}

	.fa-file-excel-o:before {
		content: "\f1c3"
	}

	.fa-file-powerpoint-o:before {
		content: "\f1c4"
	}

	.fa-file-photo-o:before,
	.fa-file-picture-o:before,
	.fa-file-image-o:before {
		content: "\f1c5"
	}

	.fa-file-zip-o:before,
	.fa-file-archive-o:before {
		content: "\f1c6"
	}

	.fa-file-sound-o:before,
	.fa-file-audio-o:before {
		content: "\f1c7"
	}

	.fa-file-movie-o:before,
	.fa-file-video-o:before {
		content: "\f1c8"
	}

	.fa-file-code-o:before {
		content: "\f1c9"
	}

	.fa-vine:before {
		content: "\f1ca"
	}

	.fa-codepen:before {
		content: "\f1cb"
	}

	.fa-jsfiddle:before {
		content: "\f1cc"
	}

	.fa-life-bouy:before,
	.fa-life-buoy:before,
	.fa-life-saver:before,
	.fa-support:before,
	.fa-life-ring:before {
		content: "\f1cd"
	}

	.fa-circle-o-notch:before {
		content: "\f1ce"
	}

	.fa-ra:before,
	.fa-rebel:before {
		content: "\f1d0"
	}

	.fa-ge:before,
	.fa-empire:before {
		content: "\f1d1"
	}

	.fa-git-square:before {
		content: "\f1d2"
	}

	.fa-git:before {
		content: "\f1d3"
	}

	.fa-hacker-news:before {
		content: "\f1d4"
	}

	.fa-tencent-weibo:before {
		content: "\f1d5"
	}

	.fa-qq:before {
		content: "\f1d6"
	}

	.fa-wechat:before,
	.fa-weixin:before {
		content: "\f1d7"
	}

	.fa-send:before,
	.fa-paper-plane:before {
		content: "\f1d8"
	}

	.fa-send-o:before,
	.fa-paper-plane-o:before {
		content: "\f1d9"
	}

	.fa-history:before {
		content: "\f1da"
	}

	.fa-genderless:before,
	.fa-circle-thin:before {
		content: "\f1db"
	}

	.fa-header:before {
		content: "\f1dc"
	}

	.fa-paragraph:before {
		content: "\f1dd"
	}

	.fa-sliders:before {
		content: "\f1de"
	}

	.fa-share-alt:before {
		content: "\f1e0"
	}

	.fa-share-alt-square:before {
		content: "\f1e1"
	}

	.fa-bomb:before {
		content: "\f1e2"
	}

	.fa-soccer-ball-o:before,
	.fa-futbol-o:before {
		content: "\f1e3"
	}

	.fa-tty:before {
		content: "\f1e4"
	}

	.fa-binoculars:before {
		content: "\f1e5"
	}

	.fa-plug:before {
		content: "\f1e6"
	}

	.fa-slideshare:before {
		content: "\f1e7"
	}

	.fa-twitch:before {
		content: "\f1e8"
	}

	.fa-yelp:before {
		content: "\f1e9"
	}

	.fa-newspaper-o:before {
		content: "\f1ea"
	}

	.fa-wifi:before {
		content: "\f1eb"
	}

	.fa-calculator:before {
		content: "\f1ec"
	}

	.fa-paypal:before {
		content: "\f1ed"
	}

	.fa-google-wallet:before {
		content: "\f1ee"
	}

	.fa-cc-visa:before {
		content: "\f1f0"
	}

	.fa-cc-mastercard:before {
		content: "\f1f1"
	}

	.fa-cc-discover:before {
		content: "\f1f2"
	}

	.fa-cc-amex:before {
		content: "\f1f3"
	}

	.fa-cc-paypal:before {
		content: "\f1f4"
	}

	.fa-cc-stripe:before {
		content: "\f1f5"
	}

	.fa-bell-slash:before {
		content: "\f1f6"
	}

	.fa-bell-slash-o:before {
		content: "\f1f7"
	}

	.fa-trash:before {
		content: "\f1f8"
	}

	.fa-copyright:before {
		content: "\f1f9"
	}

	.fa-at:before {
		content: "\f1fa"
	}

	.fa-eyedropper:before {
		content: "\f1fb"
	}

	.fa-paint-brush:before {
		content: "\f1fc"
	}

	.fa-birthday-cake:before {
		content: "\f1fd"
	}

	.fa-area-chart:before {
		content: "\f1fe"
	}

	.fa-pie-chart:before {
		content: "\f200"
	}

	.fa-line-chart:before {
		content: "\f201"
	}

	.fa-lastfm:before {
		content: "\f202"
	}

	.fa-lastfm-square:before {
		content: "\f203"
	}

	.fa-toggle-off:before {
		content: "\f204"
	}

	.fa-toggle-on:before {
		content: "\f205"
	}

	.fa-bicycle:before {
		content: "\f206"
	}

	.fa-bus:before {
		content: "\f207"
	}

	.fa-ioxhost:before {
		content: "\f208"
	}

	.fa-angellist:before {
		content: "\f209"
	}

	.fa-cc:before {
		content: "\f20a"
	}

	.fa-shekel:before,
	.fa-sheqel:before,
	.fa-ils:before {
		content: "\f20b"
	}

	.fa-meanpath:before {
		content: "\f20c"
	}

	.fa-buysellads:before {
		content: "\f20d"
	}

	.fa-connectdevelop:before {
		content: "\f20e"
	}

	.fa-dashcube:before {
		content: "\f210"
	}

	.fa-forumbee:before {
		content: "\f211"
	}

	.fa-leanpub:before {
		content: "\f212"
	}

	.fa-sellsy:before {
		content: "\f213"
	}

	.fa-shirtsinbulk:before {
		content: "\f214"
	}

	.fa-simplybuilt:before {
		content: "\f215"
	}

	.fa-skyatlas:before {
		content: "\f216"
	}

	.fa-cart-plus:before {
		content: "\f217"
	}

	.fa-cart-arrow-down:before {
		content: "\f218"
	}

	.fa-diamond:before {
		content: "\f219"
	}

	.fa-ship:before {
		content: "\f21a"
	}

	.fa-user-secret:before {
		content: "\f21b"
	}

	.fa-motorcycle:before {
		content: "\f21c"
	}

	.fa-street-view:before {
		content: "\f21d"
	}

	.fa-heartbeat:before {
		content: "\f21e"
	}

	.fa-venus:before {
		content: "\f221"
	}

	.fa-mars:before {
		content: "\f222"
	}

	.fa-mercury:before {
		content: "\f223"
	}

	.fa-transgender:before {
		content: "\f224"
	}

	.fa-transgender-alt:before {
		content: "\f225"
	}

	.fa-venus-double:before {
		content: "\f226"
	}

	.fa-mars-double:before {
		content: "\f227"
	}

	.fa-venus-mars:before {
		content: "\f228"
	}

	.fa-mars-stroke:before {
		content: "\f229"
	}

	.fa-mars-stroke-v:before {
		content: "\f22a"
	}

	.fa-mars-stroke-h:before {
		content: "\f22b"
	}

	.fa-neuter:before {
		content: "\f22c"
	}

	.fa-facebook-official:before {
		content: "\f230"
	}

	.fa-pinterest-p:before {
		content: "\f231"
	}

	.fa-whatsapp:before {
		content: "\f232"
	}

	.fa-server:before {
		content: "\f233"
	}

	.fa-user-plus:before {
		content: "\f234"
	}

	.fa-user-times:before {
		content: "\f235"
	}

	.fa-hotel:before,
	.fa-bed:before {
		content: "\f236"
	}

	.fa-viacoin:before {
		content: "\f237"
	}

	.fa-train:before {
		content: "\f238"
	}

	.fa-subway:before {
		content: "\f239"
	}

	.fa-medium:before {
		content: "\f23a"
	}

	*/:root {
		--blue: #007bff;
		--indigo: #6610f2;
		--purple: #6f42c1;
		--pink: #e83e8c;
		--red: #dc3545;
		--orange: #fd7e14;
		--yellow: #ffc107;
		--green: #28a745;
		--teal: #20c997;
		--cyan: #17a2b8;
		--white: #fff;
		--gray: #6c757d;
		--gray-dark: #343a40;
		--primary: #007bff;
		--secondary: #6c757d;
		--success: #28a745;
		--info: #17a2b8;
		--warning: #ffc107;
		--danger: #dc3545;
		--light: #f8f9fa;
		--dark: #343a40;
		--breakpoint-xs: 0;
		--breakpoint-sm: 576px;
		--breakpoint-md: 768px;
		--breakpoint-lg: 992px;
		--breakpoint-xl: 1200px;
		--font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
	}

	*,
	::after,
	::before {
		box-sizing: border-box
	}

	html {
		font-family: sans-serif;
		line-height: 1.15;
		-webkit-text-size-adjust: 100%;
		-ms-text-size-adjust: 100%;
		-ms-overflow-style: scrollbar;
		-webkit-tap-highlight-color: transparent
	}

	@-ms-viewport {
		width: device-width
	}

	article,
	aside,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	main,
	nav,
	section {
		display: block
	}

	body {
		margin: 0;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #212529;
		text-align: left;
		background-color: #fff
	}

	[tabindex="-1"]:focus {
		outline: 0 !important
	}

	hr {
		box-sizing: content-box;
		height: 0;
		overflow: visible
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		margin-top: 0;
		margin-bottom: .5rem
	}

	p {
		margin-top: 0;
		margin-bottom: 1rem
	}

	abbr[data-original-title],
	abbr[title] {
		text-decoration: underline;
		-webkit-text-decoration: underline dotted;
		text-decoration: underline dotted;
		cursor: help;
		border-bottom: 0
	}

	address {
		margin-bottom: 1rem;
		font-style: normal;
		line-height: inherit
	}

	dl,
	ol,
	ul {
		margin-top: 0;
		margin-bottom: 1rem
	}

	ol ol,
	ol ul,
	ul ol,
	ul ul {
		margin-bottom: 0
	}

	dt {
		font-weight: 700
	}

	dd {
		margin-bottom: .5rem;
		margin-left: 0
	}

	blockquote {
		margin: 0 0 1rem
	}

	dfn {
		font-style: italic
	}

	b,
	strong {
		font-weight: bolder
	}

	small {
		font-size: 80%
	}

	sub,
	sup {
		position: relative;
		font-size: 75%;
		line-height: 0;
		vertical-align: baseline
	}

	sub {
		bottom: -.25em
	}

	sup {
		top: -.5em
	}

	a {
		color: #007bff;
		text-decoration: none;
		background-color: transparent;
		-webkit-text-decoration-skip: objects
	}

	a:hover {
		color: #0056b3;
		text-decoration: underline
	}

	a:not([href]):not([tabindex]) {
		color: inherit;
		text-decoration: none
	}

	a:not([href]):not([tabindex]):focus,
	a:not([href]):not([tabindex]):hover {
		color: inherit;
		text-decoration: none
	}

	a:not([href]):not([tabindex]):focus {
		outline: 0
	}

	code,
	kbd,
	pre,
	samp {
		font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
		font-size: 1em
	}

	pre {
		margin-top: 0;
		margin-bottom: 1rem;
		overflow: auto;
		-ms-overflow-style: scrollbar
	}

	figure {
		margin: 0 0 1rem
	}

	img {
		vertical-align: middle;
		border-style: none
	}

	svg:not(:root) {
		overflow: hidden
	}

	table {
		border-collapse: collapse
	}

	caption {
		padding-top: .75rem;
		padding-bottom: .75rem;
		color: #6c757d;
		text-align: left;
		caption-side: bottom
	}

	th {
		text-align: inherit
	}

	label {
		display: inline-block;
		margin-bottom: .5rem
	}

	button {
		border-radius: 0
	}

	button:focus {
		outline: 1px dotted;
		outline: 5px auto -webkit-focus-ring-color
	}

	button,
	input,
	optgroup,
	select,
	textarea {
		margin: 0;
		font-family: inherit;
		font-size: inherit;
		line-height: inherit
	}

	button,
	input {
		overflow: visible
	}

	button,
	select {
		text-transform: none
	}

	[type=reset],
	[type=submit],
	button,
	html [type=button] {
		-webkit-appearance: button
	}

	[type=button]::-moz-focus-inner,
	[type=reset]::-moz-focus-inner,
	[type=submit]::-moz-focus-inner,
	button::-moz-focus-inner {
		padding: 0;
		border-style: none
	}

	input[type=checkbox],
	input[type=radio] {
		box-sizing: border-box;
		padding: 0
	}

	input[type=date],
	input[type=datetime-local],
	input[type=month],
	input[type=time] {
		-webkit-appearance: listbox
	}

	textarea {
		overflow: auto;
		resize: vertical
	}

	fieldset {
		min-width: 0;
		padding: 0;
		margin: 0;
		border: 0
	}

	legend {
		display: block;
		width: 100%;
		max-width: 100%;
		padding: 0;
		margin-bottom: .5rem;
		font-size: 1.5rem;
		line-height: inherit;
		color: inherit;
		white-space: normal
	}

	progress {
		vertical-align: baseline
	}

	[type=number]::-webkit-inner-spin-button,
	[type=number]::-webkit-outer-spin-button {
		height: auto
	}

	[type=search] {
		outline-offset: -2px;
		-webkit-appearance: none
	}

	[type=search]::-webkit-search-cancel-button,
	[type=search]::-webkit-search-decoration {
		-webkit-appearance: none
	}

	::-webkit-file-upload-button {
		font: inherit;
		-webkit-appearance: button
	}

	output {
		display: inline-block
	}

	summary {
		display: list-item;
		cursor: pointer
	}

	template {
		display: none
	}

	[hidden] {
		display: none !important
	}

	.h1,
	.h2,
	.h3,
	.h4,
	.h5,
	.h6,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		margin-bottom: .5rem;
		font-family: inherit;
		font-weight: 500;
		line-height: 1.2;
		color: inherit
	}

	.h1,
	h1 {
		font-size: 2.5rem
	}

	.h2,
	h2 {
		font-size: 2rem
	}

	.h3,
	h3 {
		font-size: 1.75rem
	}

	.h4,
	h4 {
		font-size: 1.5rem
	}

	.h5,
	h5 {
		font-size: 1.25rem
	}

	.h6,
	h6 {
		font-size: 1rem
	}

	.lead {
		font-size: 1.25rem;
		font-weight: 300
	}

	.display-1 {
		font-size: 6rem;
		font-weight: 300;
		line-height: 1.2
	}

	.display-2 {
		font-size: 5.5rem;
		font-weight: 300;
		line-height: 1.2
	}

	.display-3 {
		font-size: 4.5rem;
		font-weight: 300;
		line-height: 1.2
	}

	.display-4 {
		font-size: 3.5rem;
		font-weight: 300;
		line-height: 1.2
	}

	hr {
		margin-top: 1rem;
		margin-bottom: 1rem;
		border: 0;
		border-top: 1px solid rgba(0, 0, 0, .1)
	}

	.small,
	small {
		font-size: 80%;
		font-weight: 400
	}

	.mark,
	mark {
		padding: .2em;
		background-color: #fcf8e3
	}

	.list-unstyled {
		padding-left: 0;
		list-style: none
	}

	.list-inline {
		padding-left: 0;
		list-style: none
	}

	.list-inline-item {
		display: inline-block
	}

	.list-inline-item:not(:last-child) {
		margin-right: .5rem
	}

	.initialism {
		font-size: 90%;
		text-transform: uppercase
	}

	.blockquote {
		margin-bottom: 1rem;
		font-size: 1.25rem
	}

	.blockquote-footer {
		display: block;
		font-size: 80%;
		color: #6c757d
	}

	.blockquote-footer::before {
		content: "\2014 \00A0"
	}

	.img-fluid {
		max-width: 100%;
		height: auto
	}

	.img-thumbnail {
		padding: .25rem;
		background-color: #fff;
		border: 1px solid #dee2e6;
		border-radius: .25rem;
		max-width: 100%;
		height: auto
	}

	.figure {
		display: inline-block
	}

	.figure-img {
		margin-bottom: .5rem;
		line-height: 1
	}

	.figure-caption {
		font-size: 90%;
		color: #6c757d
	}

	code {
		font-size: 87.5%;
		color: #e83e8c;
		word-break: break-word
	}

	a>code {
		color: inherit
	}

	kbd {
		padding: .2rem .4rem;
		font-size: 87.5%;
		color: #fff;
		background-color: #212529;
		border-radius: .2rem
	}

	kbd kbd {
		padding: 0;
		font-size: 100%;
		font-weight: 700
	}

	pre {
		display: block;
		font-size: 87.5%;
		color: #212529
	}

	pre code {
		font-size: inherit;
		color: inherit;
		word-break: normal
	}

	.pre-scrollable {
		max-height: 340px;
		overflow-y: scroll
	}

	.container {
		width: 100%;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto
	}

	@media (min-width:576px) {
		.container {
			max-width: 540px
		}
	}

	@media (min-width:768px) {
		.container {
			max-width: 720px
		}
	}

	@media (min-width:992px) {
		.container {
			max-width: 960px
		}
	}

	@media (min-width:1200px) {
		.container {
			max-width: 1140px
		}
	}

	.container-fluid {
		width: 100%;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto
	}

	.row {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		margin-right: -15px;
		margin-left: -15px
	}

	.no-gutters {
		margin-right: 0;
		margin-left: 0
	}

	.no-gutters>.col,
	.no-gutters>[class*=col-] {
		padding-right: 0;
		padding-left: 0
	}

	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		position: relative;
		width: 100%;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px
	}

	.col {
		-ms-flex-preferred-size: 0;
		flex-basis: 0;
		-ms-flex-positive: 1;
		flex-grow: 1;
		max-width: 100%
	}

	.col-auto {
		-ms-flex: 0 0 auto;
		flex: 0 0 auto;
		width: auto;
		max-width: none
	}

	.col-1 {
		-ms-flex: 0 0 8.333333%;
		flex: 0 0 8.333333%;
		max-width: 8.333333%
	}

	.col-2 {
		-ms-flex: 0 0 16.666667%;
		flex: 0 0 16.666667%;
		max-width: 16.666667%
	}

	.col-3 {
		-ms-flex: 0 0 25%;
		flex: 0 0 25%;
		max-width: 25%
	}

	.col-4 {
		-ms-flex: 0 0 33.333333%;
		flex: 0 0 33.333333%;
		max-width: 33.333333%
	}

	.col-5 {
		-ms-flex: 0 0 41.666667%;
		flex: 0 0 41.666667%;
		max-width: 41.666667%
	}

	.col-6 {
		-ms-flex: 0 0 50%;
		flex: 0 0 50%;
		max-width: 50%
	}

	.col-7 {
		-ms-flex: 0 0 58.333333%;
		flex: 0 0 58.333333%;
		max-width: 58.333333%
	}

	.col-8 {
		-ms-flex: 0 0 66.666667%;
		flex: 0 0 66.666667%;
		max-width: 66.666667%
	}

	.col-9 {
		-ms-flex: 0 0 75%;
		flex: 0 0 75%;
		max-width: 75%
	}

	.col-10 {
		-ms-flex: 0 0 83.333333%;
		flex: 0 0 83.333333%;
		max-width: 83.333333%
	}

	.col-11 {
		-ms-flex: 0 0 91.666667%;
		flex: 0 0 91.666667%;
		max-width: 91.666667%
	}

	.col-12 {
		-ms-flex: 0 0 100%;
		flex: 0 0 100%;
		max-width: 100%
	}

	.order-first {
		-ms-flex-order: -1;
		order: -1
	}

	.order-last {
		-ms-flex-order: 13;
		order: 13
	}

	.order-0 {
		-ms-flex-order: 0;
		order: 0
	}

	.order-1 {
		-ms-flex-order: 1;
		order: 1
	}

	.order-2 {
		-ms-flex-order: 2;
		order: 2
	}

	.order-3 {
		-ms-flex-order: 3;
		order: 3
	}

	.order-4 {
		-ms-flex-order: 4;
		order: 4
	}

	.order-5 {
		-ms-flex-order: 5;
		order: 5
	}

	.order-6 {
		-ms-flex-order: 6;
		order: 6
	}

	.order-7 {
		-ms-flex-order: 7;
		order: 7
	}

	.order-8 {
		-ms-flex-order: 8;
		order: 8
	}

	.order-9 {
		-ms-flex-order: 9;
		order: 9
	}

	.order-10 {
		-ms-flex-order: 10;
		order: 10
	}

	.order-11 {
		-ms-flex-order: 11;
		order: 11
	}

	.order-12 {
		-ms-flex-order: 12;
		order: 12
	}

	.offset-1 {
		margin-left: 8.333333%
	}

	.offset-2 {
		margin-left: 16.666667%
	}

	.offset-3 {
		margin-left: 25%
	}

	.offset-4 {
		margin-left: 33.333333%
	}

	.offset-5 {
		margin-left: 41.666667%
	}

	.offset-6 {
		margin-left: 50%
	}

	.offset-7 {
		margin-left: 58.333333%
	}

	.offset-8 {
		margin-left: 66.666667%
	}

	.offset-9 {
		margin-left: 75%
	}

	.offset-10 {
		margin-left: 83.333333%
	}

	.offset-11 {
		margin-left: 91.666667%
	}

	@media (min-width:576px) {
		.col-sm {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%
		}

		.col-sm-auto {
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: auto;
			max-width: none
		}

		.col-sm-1 {
			-ms-flex: 0 0 8.333333%;
			flex: 0 0 8.333333%;
			max-width: 8.333333%
		}

		.col-sm-2 {
			-ms-flex: 0 0 16.666667%;
			flex: 0 0 16.666667%;
			max-width: 16.666667%
		}

		.col-sm-3 {
			-ms-flex: 0 0 25%;
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-sm-4 {
			-ms-flex: 0 0 33.333333%;
			flex: 0 0 33.333333%;
			max-width: 33.333333%
		}

		.col-sm-5 {
			-ms-flex: 0 0 41.666667%;
			flex: 0 0 41.666667%;
			max-width: 41.666667%
		}

		.col-sm-6 {
			-ms-flex: 0 0 50%;
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-sm-7 {
			-ms-flex: 0 0 58.333333%;
			flex: 0 0 58.333333%;
			max-width: 58.333333%
		}

		.col-sm-8 {
			-ms-flex: 0 0 66.666667%;
			flex: 0 0 66.666667%;
			max-width: 66.666667%
		}

		.col-sm-9 {
			-ms-flex: 0 0 75%;
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-sm-10 {
			-ms-flex: 0 0 83.333333%;
			flex: 0 0 83.333333%;
			max-width: 83.333333%
		}

		.col-sm-11 {
			-ms-flex: 0 0 91.666667%;
			flex: 0 0 91.666667%;
			max-width: 91.666667%
		}

		.col-sm-12 {
			-ms-flex: 0 0 100%;
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-sm-first {
			-ms-flex-order: -1;
			order: -1
		}

		.order-sm-last {
			-ms-flex-order: 13;
			order: 13
		}

		.order-sm-0 {
			-ms-flex-order: 0;
			order: 0
		}

		.order-sm-1 {
			-ms-flex-order: 1;
			order: 1
		}

		.order-sm-2 {
			-ms-flex-order: 2;
			order: 2
		}

		.order-sm-3 {
			-ms-flex-order: 3;
			order: 3
		}

		.order-sm-4 {
			-ms-flex-order: 4;
			order: 4
		}

		.order-sm-5 {
			-ms-flex-order: 5;
			order: 5
		}

		.order-sm-6 {
			-ms-flex-order: 6;
			order: 6
		}

		.order-sm-7 {
			-ms-flex-order: 7;
			order: 7
		}

		.order-sm-8 {
			-ms-flex-order: 8;
			order: 8
		}

		.order-sm-9 {
			-ms-flex-order: 9;
			order: 9
		}

		.order-sm-10 {
			-ms-flex-order: 10;
			order: 10
		}

		.order-sm-11 {
			-ms-flex-order: 11;
			order: 11
		}

		.order-sm-12 {
			-ms-flex-order: 12;
			order: 12
		}

		.offset-sm-0 {
			margin-left: 0
		}

		.offset-sm-1 {
			margin-left: 8.333333%
		}

		.offset-sm-2 {
			margin-left: 16.666667%
		}

		.offset-sm-3 {
			margin-left: 25%
		}

		.offset-sm-4 {
			margin-left: 33.333333%
		}

		.offset-sm-5 {
			margin-left: 41.666667%
		}

		.offset-sm-6 {
			margin-left: 50%
		}

		.offset-sm-7 {
			margin-left: 58.333333%
		}

		.offset-sm-8 {
			margin-left: 66.666667%
		}

		.offset-sm-9 {
			margin-left: 75%
		}

		.offset-sm-10 {
			margin-left: 83.333333%
		}

		.offset-sm-11 {
			margin-left: 91.666667%
		}
	}

	@media (min-width:768px) {
		.col-md {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%
		}

		.col-md-auto {
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: auto;
			max-width: none
		}

		.col-md-1 {
			-ms-flex: 0 0 8.333333%;
			flex: 0 0 8.333333%;
			max-width: 8.333333%
		}

		.col-md-2 {
			-ms-flex: 0 0 16.666667%;
			flex: 0 0 16.666667%;
			max-width: 16.666667%
		}

		.col-md-3 {
			-ms-flex: 0 0 25%;
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-md-4 {
			-ms-flex: 0 0 33.333333%;
			flex: 0 0 33.333333%;
			max-width: 33.333333%
		}

		.col-md-5 {
			-ms-flex: 0 0 41.666667%;
			flex: 0 0 41.666667%;
			max-width: 41.666667%
		}

		.col-md-6 {
			-ms-flex: 0 0 50%;
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-md-7 {
			-ms-flex: 0 0 58.333333%;
			flex: 0 0 58.333333%;
			max-width: 58.333333%
		}

		.col-md-8 {
			-ms-flex: 0 0 66.666667%;
			flex: 0 0 66.666667%;
			max-width: 66.666667%
		}

		.col-md-9 {
			-ms-flex: 0 0 75%;
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-md-10 {
			-ms-flex: 0 0 83.333333%;
			flex: 0 0 83.333333%;
			max-width: 83.333333%
		}

		.col-md-11 {
			-ms-flex: 0 0 91.666667%;
			flex: 0 0 91.666667%;
			max-width: 91.666667%
		}

		.col-md-12 {
			-ms-flex: 0 0 100%;
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-md-first {
			-ms-flex-order: -1;
			order: -1
		}

		.order-md-last {
			-ms-flex-order: 13;
			order: 13
		}

		.order-md-0 {
			-ms-flex-order: 0;
			order: 0
		}

		.order-md-1 {
			-ms-flex-order: 1;
			order: 1
		}

		.order-md-2 {
			-ms-flex-order: 2;
			order: 2
		}

		.order-md-3 {
			-ms-flex-order: 3;
			order: 3
		}

		.order-md-4 {
			-ms-flex-order: 4;
			order: 4
		}

		.order-md-5 {
			-ms-flex-order: 5;
			order: 5
		}

		.order-md-6 {
			-ms-flex-order: 6;
			order: 6
		}

		.order-md-7 {
			-ms-flex-order: 7;
			order: 7
		}

		.order-md-8 {
			-ms-flex-order: 8;
			order: 8
		}

		.order-md-9 {
			-ms-flex-order: 9;
			order: 9
		}

		.order-md-10 {
			-ms-flex-order: 10;
			order: 10
		}

		.order-md-11 {
			-ms-flex-order: 11;
			order: 11
		}

		.order-md-12 {
			-ms-flex-order: 12;
			order: 12
		}

		.offset-md-0 {
			margin-left: 0
		}

		.offset-md-1 {
			margin-left: 8.333333%
		}

		.offset-md-2 {
			margin-left: 16.666667%
		}

		.offset-md-3 {
			margin-left: 25%
		}

		.offset-md-4 {
			margin-left: 33.333333%
		}

		.offset-md-5 {
			margin-left: 41.666667%
		}

		.offset-md-6 {
			margin-left: 50%
		}

		.offset-md-7 {
			margin-left: 58.333333%
		}

		.offset-md-8 {
			margin-left: 66.666667%
		}

		.offset-md-9 {
			margin-left: 75%
		}

		.offset-md-10 {
			margin-left: 83.333333%
		}

		.offset-md-11 {
			margin-left: 91.666667%
		}
	}

	@media (min-width:992px) {
		.col-lg {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%
		}

		.col-lg-auto {
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: auto;
			max-width: none
		}

		.col-lg-1 {
			-ms-flex: 0 0 8.333333%;
			flex: 0 0 8.333333%;
			max-width: 8.333333%
		}

		.col-lg-2 {
			-ms-flex: 0 0 16.666667%;
			flex: 0 0 16.666667%;
			max-width: 16.666667%
		}

		.col-lg-3 {
			-ms-flex: 0 0 25%;
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-lg-4 {
			-ms-flex: 0 0 33.333333%;
			flex: 0 0 33.333333%;
			max-width: 33.333333%
		}

		.col-lg-5 {
			-ms-flex: 0 0 41.666667%;
			flex: 0 0 41.666667%;
			max-width: 41.666667%
		}

		.col-lg-6 {
			-ms-flex: 0 0 50%;
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-lg-7 {
			-ms-flex: 0 0 58.333333%;
			flex: 0 0 58.333333%;
			max-width: 58.333333%
		}

		.col-lg-8 {
			-ms-flex: 0 0 66.666667%;
			flex: 0 0 66.666667%;
			max-width: 66.666667%
		}

		.col-lg-9 {
			-ms-flex: 0 0 75%;
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-lg-10 {
			-ms-flex: 0 0 83.333333%;
			flex: 0 0 83.333333%;
			max-width: 83.333333%
		}

		.col-lg-11 {
			-ms-flex: 0 0 91.666667%;
			flex: 0 0 91.666667%;
			max-width: 91.666667%
		}

		.col-lg-12 {
			-ms-flex: 0 0 100%;
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-lg-first {
			-ms-flex-order: -1;
			order: -1
		}

		.order-lg-last {
			-ms-flex-order: 13;
			order: 13
		}

		.order-lg-0 {
			-ms-flex-order: 0;
			order: 0
		}

		.order-lg-1 {
			-ms-flex-order: 1;
			order: 1
		}

		.order-lg-2 {
			-ms-flex-order: 2;
			order: 2
		}

		.order-lg-3 {
			-ms-flex-order: 3;
			order: 3
		}

		.order-lg-4 {
			-ms-flex-order: 4;
			order: 4
		}

		.order-lg-5 {
			-ms-flex-order: 5;
			order: 5
		}

		.order-lg-6 {
			-ms-flex-order: 6;
			order: 6
		}

		.order-lg-7 {
			-ms-flex-order: 7;
			order: 7
		}

		.order-lg-8 {
			-ms-flex-order: 8;
			order: 8
		}

		.order-lg-9 {
			-ms-flex-order: 9;
			order: 9
		}

		.order-lg-10 {
			-ms-flex-order: 10;
			order: 10
		}

		.order-lg-11 {
			-ms-flex-order: 11;
			order: 11
		}

		.order-lg-12 {
			-ms-flex-order: 12;
			order: 12
		}

		.offset-lg-0 {
			margin-left: 0
		}

		.offset-lg-1 {
			margin-left: 8.333333%
		}

		.offset-lg-2 {
			margin-left: 16.666667%
		}

		.offset-lg-3 {
			margin-left: 25%
		}

		.offset-lg-4 {
			margin-left: 33.333333%
		}

		.offset-lg-5 {
			margin-left: 41.666667%
		}

		.offset-lg-6 {
			margin-left: 50%
		}

		.offset-lg-7 {
			margin-left: 58.333333%
		}

		.offset-lg-8 {
			margin-left: 66.666667%
		}

		.offset-lg-9 {
			margin-left: 75%
		}

		.offset-lg-10 {
			margin-left: 83.333333%
		}

		.offset-lg-11 {
			margin-left: 91.666667%
		}
	}

	@media (min-width:1200px) {
		.col-xl {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%
		}

		.col-xl-auto {
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: auto;
			max-width: none
		}

		.col-xl-1 {
			-ms-flex: 0 0 8.333333%;
			flex: 0 0 8.333333%;
			max-width: 8.333333%
		}

		.col-xl-2 {
			-ms-flex: 0 0 16.666667%;
			flex: 0 0 16.666667%;
			max-width: 16.666667%
		}

		.col-xl-3 {
			-ms-flex: 0 0 25%;
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-xl-4 {
			-ms-flex: 0 0 33.333333%;
			flex: 0 0 33.333333%;
			max-width: 33.333333%
		}

		.col-xl-5 {
			-ms-flex: 0 0 41.666667%;
			flex: 0 0 41.666667%;
			max-width: 41.666667%
		}

		.col-xl-6 {
			-ms-flex: 0 0 50%;
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-xl-7 {
			-ms-flex: 0 0 58.333333%;
			flex: 0 0 58.333333%;
			max-width: 58.333333%
		}

		.col-xl-8 {
			-ms-flex: 0 0 66.666667%;
			flex: 0 0 66.666667%;
			max-width: 66.666667%
		}

		.col-xl-9 {
			-ms-flex: 0 0 75%;
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-xl-10 {
			-ms-flex: 0 0 83.333333%;
			flex: 0 0 83.333333%;
			max-width: 83.333333%
		}

		.col-xl-11 {
			-ms-flex: 0 0 91.666667%;
			flex: 0 0 91.666667%;
			max-width: 91.666667%
		}

		.col-xl-12 {
			-ms-flex: 0 0 100%;
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-xl-first {
			-ms-flex-order: -1;
			order: -1
		}

		.order-xl-last {
			-ms-flex-order: 13;
			order: 13
		}

		.order-xl-0 {
			-ms-flex-order: 0;
			order: 0
		}

		.order-xl-1 {
			-ms-flex-order: 1;
			order: 1
		}

		.order-xl-2 {
			-ms-flex-order: 2;
			order: 2
		}

		.order-xl-3 {
			-ms-flex-order: 3;
			order: 3
		}

		.order-xl-4 {
			-ms-flex-order: 4;
			order: 4
		}

		.order-xl-5 {
			-ms-flex-order: 5;
			order: 5
		}

		.order-xl-6 {
			-ms-flex-order: 6;
			order: 6
		}

		.order-xl-7 {
			-ms-flex-order: 7;
			order: 7
		}

		.order-xl-8 {
			-ms-flex-order: 8;
			order: 8
		}

		.order-xl-9 {
			-ms-flex-order: 9;
			order: 9
		}

		.order-xl-10 {
			-ms-flex-order: 10;
			order: 10
		}

		.order-xl-11 {
			-ms-flex-order: 11;
			order: 11
		}

		.order-xl-12 {
			-ms-flex-order: 12;
			order: 12
		}

		.offset-xl-0 {
			margin-left: 0
		}

		.offset-xl-1 {
			margin-left: 8.333333%
		}

		.offset-xl-2 {
			margin-left: 16.666667%
		}

		.offset-xl-3 {
			margin-left: 25%
		}

		.offset-xl-4 {
			margin-left: 33.333333%
		}

		.offset-xl-5 {
			margin-left: 41.666667%
		}

		.offset-xl-6 {
			margin-left: 50%
		}

		.offset-xl-7 {
			margin-left: 58.333333%
		}

		.offset-xl-8 {
			margin-left: 66.666667%
		}

		.offset-xl-9 {
			margin-left: 75%
		}

		.offset-xl-10 {
			margin-left: 83.333333%
		}

		.offset-xl-11 {
			margin-left: 91.666667%
		}
	}

	.table {
		width: 100%;
		max-width: 100%;
		background-color: transparent
	}

	.table thead th {
		vertical-align: bottom;
		border-bottom: 2px solid #dee2e6
	}

	.table tbody+tbody {
		border-top: 2px solid #dee2e6
	}

	.table .table {
		background-color: #fff
	}

	.table-sm td,
	.table-sm th {
		padding: .3rem
	}

	.table-bordered {
		border: 1px solid #dee2e6
	}

	.table-bordered td,
	.table-bordered th {
		border: 1px solid #dee2e6
	}

	.table-bordered thead td,
	.table-bordered thead th {
		border-bottom-width: 2px
	}

	.table-borderless tbody+tbody,
	.table-borderless td,
	.table-borderless th,
	.table-borderless thead th {
		border: 0
	}

	.table-striped tbody tr:nth-of-type(odd) {
		background-color: rgba(0, 0, 0, .05)
	}

	.table-hover tbody tr:hover {
		background-color: rgba(0, 0, 0, .075)
	}

	.table-primary,
	.table-primary>td,
	.table-primary>th {
		background-color: #b8daff
	}

	.table-hover .table-primary:hover {
		background-color: #9fcdff
	}

	.table-hover .table-primary:hover>td,
	.table-hover .table-primary:hover>th {
		background-color: #9fcdff
	}

	.table-secondary,
	.table-secondary>td,
	.table-secondary>th {
		background-color: #d6d8db
	}

	.table-hover .table-secondary:hover {
		background-color: #c8cbcf
	}

	.table-hover .table-secondary:hover>td,
	.table-hover .table-secondary:hover>th {
		background-color: #c8cbcf
	}

	.table-success,
	.table-success>td,
	.table-success>th {
		background-color: #c3e6cb
	}

	.table-hover .table-success:hover {
		background-color: #b1dfbb
	}

	.table-hover .table-success:hover>td,
	.table-hover .table-success:hover>th {
		background-color: #b1dfbb
	}

	.table-info,
	.table-info>td,
	.table-info>th {
		background-color: #bee5eb
	}

	.table-hover .table-info:hover {
		background-color: #abdde5
	}

	.table-hover .table-info:hover>td,
	.table-hover .table-info:hover>th {
		background-color: #abdde5
	}

	.table-warning,
	.table-warning>td,
	.table-warning>th {
		background-color: #ffeeba
	}

	.table-hover .table-warning:hover {
		background-color: #ffe8a1
	}

	.table-hover .table-warning:hover>td,
	.table-hover .table-warning:hover>th {
		background-color: #ffe8a1
	}

	.table-danger,
	.table-danger>td,
	.table-danger>th {
		background-color: #f5c6cb
	}

	.table-hover .table-danger:hover {
		background-color: #f1b0b7
	}

	.table-hover .table-danger:hover>td,
	.table-hover .table-danger:hover>th {
		background-color: #f1b0b7
	}

	.table-light,
	.table-light>td,
	.table-light>th {
		background-color: #fdfdfe
	}

	.table-hover .table-light:hover {
		background-color: #ececf6
	}

	.table-hover .table-light:hover>td,
	.table-hover .table-light:hover>th {
		background-color: #ececf6
	}

	.table-dark,
	.table-dark>td,
	.table-dark>th {
		background-color: #c6c8ca
	}

	.table-hover .table-dark:hover {
		background-color: #b9bbbe
	}

	.table-hover .table-dark:hover>td,
	.table-hover .table-dark:hover>th {
		background-color: #b9bbbe
	}

	.table-active,
	.table-active>td,
	.table-active>th {
		background-color: rgba(0, 0, 0, .075)
	}

	.table-hover .table-active:hover {
		background-color: rgba(0, 0, 0, .075)
	}

	.table-hover .table-active:hover>td,
	.table-hover .table-active:hover>th {
		background-color: rgba(0, 0, 0, .075)
	}

	.table .thead-dark th {
		color: #fff;
		background-color: #212529;
		border-color: #32383e
	}

	.table .thead-light th {
		color: #495057;
		background-color: #e9ecef;
		border-color: #dee2e6
	}

	.table-dark {
		color: #fff;
		background-color: #212529
	}

	.table-dark td,
	.table-dark th,
	.table-dark thead th {
		border-color: #32383e
	}

	.table-dark.table-bordered {
		border: 0
	}

	.table-dark.table-striped tbody tr:nth-of-type(odd) {
		background-color: rgba(255, 255, 255, .05)
	}

	.table-dark.table-hover tbody tr:hover {
		background-color: rgba(255, 255, 255, .075)
	}

	@media (max-width:575.98px) {
		.table-responsive-sm {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
			-ms-overflow-style: -ms-autohiding-scrollbar
		}

		.table-responsive-sm>.table-bordered {
			border: 0
		}
	}

	@media (max-width:767.98px) {
		.nav {
			height: unset !important;
		}

		.table-responsive-md {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
			-ms-overflow-style: -ms-autohiding-scrollbar
		}

		.table-responsive-md>.table-bordered {
			border: 0
		}
	}

	@media (max-width:991.98px) {
		.table-responsive-lg {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
			-ms-overflow-style: -ms-autohiding-scrollbar
		}

		.table-responsive-lg>.table-bordered {
			border: 0
		}
	}

	@media (max-width:1199.98px) {
		.table-responsive-xl {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
			-ms-overflow-style: -ms-autohiding-scrollbar
		}

		.table-responsive-xl>.table-bordered {
			border: 0
		}
	}

	.table-responsive {
		display: block;
		width: 100%;
		overflow-x: auto;
		-webkit-overflow-scrolling: touch;
		-ms-overflow-style: -ms-autohiding-scrollbar
	}

	.table-responsive>.table-bordered {
		border: 0
	}

	.form-control {
		display: block;
		width: 100%;
		padding: .375rem .75rem;
		font-size: 1rem;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ced4da;
		border-radius: .25rem;
		transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.form-control {
			transition: none
		}
	}

	.form-control::-ms-expand {
		background-color: transparent;
		border: 0
	}

	.form-control:focus {
		color: #495057;
		background-color: #fff;
		border-color: #80bdff;
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.form-control::-webkit-input-placeholder {
		color: #6c757d;
		opacity: 1
	}

	.form-control::-moz-placeholder {
		color: #6c757d;
		opacity: 1
	}

	.form-control:-ms-input-placeholder {
		color: #6c757d;
		opacity: 1
	}

	.form-control::-ms-input-placeholder {
		color: #6c757d;
		opacity: 1
	}

	.form-control::placeholder {
		color: #6c757d;
		opacity: 1
	}

	.form-control:disabled,
	.form-control[readonly] {
		background-color: #e9ecef;
		opacity: 1
	}

	select.form-control:not([size]):not([multiple]) {
		height: calc(2.25rem + 2px)
	}

	select.form-control:focus::-ms-value {
		color: #495057;
		background-color: #fff
	}

	.form-control-file,
	.form-control-range {
		display: block;
		width: 100%
	}

	.col-form-label {
		padding-top: calc(.375rem + 1px);
		padding-bottom: calc(.375rem + 1px);
		margin-bottom: 0;
		font-size: inherit;
		line-height: 1.5
	}

	.col-form-label-lg {
		padding-top: calc(.5rem + 1px);
		padding-bottom: calc(.5rem + 1px);
		font-size: 1.25rem;
		line-height: 1.5
	}

	.col-form-label-sm {
		padding-top: calc(.25rem + 1px);
		padding-bottom: calc(.25rem + 1px);
		font-size: .875rem;
		line-height: 1.5
	}

	.form-control-plaintext {
		display: block;
		width: 100%;
		padding-top: .375rem;
		padding-bottom: .375rem;
		margin-bottom: 0;
		line-height: 1.5;
		color: #212529;
		background-color: transparent;
		border: solid transparent;
		border-width: 1px 0
	}

	.form-control-plaintext.form-control-lg,
	.form-control-plaintext.form-control-sm,
	.input-group-lg>.form-control-plaintext.form-control,
	.input-group-lg>.input-group-append>.form-control-plaintext.btn,
	.input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,
	.input-group-lg>.input-group-prepend>.form-control-plaintext.btn,
	.input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,
	.input-group-sm>.form-control-plaintext.form-control,
	.input-group-sm>.input-group-append>.form-control-plaintext.btn,
	.input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,
	.input-group-sm>.input-group-prepend>.form-control-plaintext.btn,
	.input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text {
		padding-right: 0;
		padding-left: 0
	}

	.form-control-sm,
	.input-group-sm>.form-control,
	.input-group-sm>.input-group-append>.btn,
	.input-group-sm>.input-group-append>.input-group-text,
	.input-group-sm>.input-group-prepend>.btn,
	.input-group-sm>.input-group-prepend>.input-group-text {
		padding: .25rem .5rem;
		font-size: .875rem;
		line-height: 1.5;
		border-radius: .2rem
	}

	.input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]),
	.input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),
	.input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
	.input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
	.input-group-sm>select.form-control:not([size]):not([multiple]),
	select.form-control-sm:not([size]):not([multiple]) {
		height: calc(1.8125rem + 2px)
	}

	.form-control-lg,
	.input-group-lg>.form-control,
	.input-group-lg>.input-group-append>.btn,
	.input-group-lg>.input-group-append>.input-group-text,
	.input-group-lg>.input-group-prepend>.btn,
	.input-group-lg>.input-group-prepend>.input-group-text {
		padding: .5rem 1rem;
		font-size: 1.25rem;
		line-height: 1.5;
		border-radius: .3rem
	}

	.input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]),
	.input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),
	.input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
	.input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
	.input-group-lg>select.form-control:not([size]):not([multiple]),
	select.form-control-lg:not([size]):not([multiple]) {
		height: calc(2.875rem + 2px)
	}

	.form-group {
		margin-bottom: 1rem
	}

	.form-text {
		display: block;
		margin-top: .25rem
	}

	.form-row {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		margin-right: -5px;
		margin-left: -5px
	}

	.form-row>.col,
	.form-row>[class*=col-] {
		padding-right: 5px;
		padding-left: 5px
	}

	.form-check {
		position: relative;
		display: block;
		padding-left: 1.25rem
	}

	.form-check-input {
		position: absolute;
		margin-top: .3rem;
		margin-left: -1.25rem
	}

	.form-check-input:disabled~.form-check-label {
		color: #6c757d
	}

	.form-check-label {
		margin-bottom: 0
	}

	.form-check-inline {
		display: -ms-inline-flexbox;
		display: inline-flex;
		-ms-flex-align: center;
		align-items: center;
		padding-left: 0;
		margin-right: .75rem
	}

	.form-check-inline .form-check-input {
		position: static;
		margin-top: 0;
		margin-right: .3125rem;
		margin-left: 0
	}

	.valid-feedback {
		display: none;
		width: 100%;
		margin-top: .25rem;
		font-size: 80%;
		color: #28a745
	}

	.valid-tooltip {
		position: absolute;
		top: 100%;
		z-index: 5;
		display: none;
		max-width: 100%;
		padding: .5rem;
		margin-top: .1rem;
		font-size: .875rem;
		line-height: 1;
		color: #fff;
		background-color: rgba(40, 167, 69, .8);
		border-radius: .2rem
	}

	.custom-select.is-valid,
	.form-control.is-valid,
	.was-validated .custom-select:valid,
	.was-validated .form-control:valid {
		border-color: #28a745
	}

	.custom-select.is-valid:focus,
	.form-control.is-valid:focus,
	.was-validated .custom-select:valid:focus,
	.was-validated .form-control:valid:focus {
		border-color: #28a745;
		box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
	}

	.custom-select.is-valid~.valid-feedback,
	.custom-select.is-valid~.valid-tooltip,
	.form-control.is-valid~.valid-feedback,
	.form-control.is-valid~.valid-tooltip,
	.was-validated .custom-select:valid~.valid-feedback,
	.was-validated .custom-select:valid~.valid-tooltip,
	.was-validated .form-control:valid~.valid-feedback,
	.was-validated .form-control:valid~.valid-tooltip {
		display: block
	}

	.form-control-file.is-valid~.valid-feedback,
	.form-control-file.is-valid~.valid-tooltip,
	.was-validated .form-control-file:valid~.valid-feedback,
	.was-validated .form-control-file:valid~.valid-tooltip {
		display: block
	}

	.form-check-input.is-valid~.form-check-label,
	.was-validated .form-check-input:valid~.form-check-label {
		color: #28a745
	}

	.form-check-input.is-valid~.valid-feedback,
	.form-check-input.is-valid~.valid-tooltip,
	.was-validated .form-check-input:valid~.valid-feedback,
	.was-validated .form-check-input:valid~.valid-tooltip {
		display: block
	}

	.custom-control-input.is-valid~.custom-control-label,
	.was-validated .custom-control-input:valid~.custom-control-label {
		color: #28a745
	}

	.custom-control-input.is-valid~.custom-control-label::before,
	.was-validated .custom-control-input:valid~.custom-control-label::before {
		background-color: #71dd8a
	}

	.custom-control-input.is-valid~.valid-feedback,
	.custom-control-input.is-valid~.valid-tooltip,
	.was-validated .custom-control-input:valid~.valid-feedback,
	.was-validated .custom-control-input:valid~.valid-tooltip {
		display: block
	}

	.custom-control-input.is-valid:checked~.custom-control-label::before,
	.was-validated .custom-control-input:valid:checked~.custom-control-label::before {
		background-color: #34ce57
	}

	.custom-control-input.is-valid:focus~.custom-control-label::before,
	.was-validated .custom-control-input:valid:focus~.custom-control-label::before {
		box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(40, 167, 69, .25)
	}

	.custom-file-input.is-valid~.custom-file-label,
	.was-validated .custom-file-input:valid~.custom-file-label {
		border-color: #28a745
	}

	.custom-file-input.is-valid~.custom-file-label::before,
	.was-validated .custom-file-input:valid~.custom-file-label::before {
		border-color: inherit
	}

	.custom-file-input.is-valid~.valid-feedback,
	.custom-file-input.is-valid~.valid-tooltip,
	.was-validated .custom-file-input:valid~.valid-feedback,
	.was-validated .custom-file-input:valid~.valid-tooltip {
		display: block
	}

	.custom-file-input.is-valid:focus~.custom-file-label,
	.was-validated .custom-file-input:valid:focus~.custom-file-label {
		box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
	}

	.invalid-feedback {
		display: none;
		width: 100%;
		margin-top: .25rem;
		font-size: 80%;
		color: #dc3545
	}

	.invalid-tooltip {
		position: absolute;
		top: 100%;
		z-index: 5;
		display: none;
		max-width: 100%;
		padding: .5rem;
		margin-top: .1rem;
		font-size: .875rem;
		line-height: 1;
		color: #fff;
		background-color: rgba(220, 53, 69, .8);
		border-radius: .2rem
	}

	.custom-select.is-invalid,
	.form-control.is-invalid,
	.was-validated .custom-select:invalid,
	.was-validated .form-control:invalid {
		border-color: #dc3545
	}

	.custom-select.is-invalid:focus,
	.form-control.is-invalid:focus,
	.was-validated .custom-select:invalid:focus,
	.was-validated .form-control:invalid:focus {
		border-color: #dc3545;
		box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
	}

	.custom-select.is-invalid~.invalid-feedback,
	.custom-select.is-invalid~.invalid-tooltip,
	.form-control.is-invalid~.invalid-feedback,
	.form-control.is-invalid~.invalid-tooltip,
	.was-validated .custom-select:invalid~.invalid-feedback,
	.was-validated .custom-select:invalid~.invalid-tooltip,
	.was-validated .form-control:invalid~.invalid-feedback,
	.was-validated .form-control:invalid~.invalid-tooltip {
		display: block
	}

	.form-control-file.is-invalid~.invalid-feedback,
	.form-control-file.is-invalid~.invalid-tooltip,
	.was-validated .form-control-file:invalid~.invalid-feedback,
	.was-validated .form-control-file:invalid~.invalid-tooltip {
		display: block
	}

	.form-check-input.is-invalid~.form-check-label,
	.was-validated .form-check-input:invalid~.form-check-label {
		color: #dc3545
	}

	.form-check-input.is-invalid~.invalid-feedback,
	.form-check-input.is-invalid~.invalid-tooltip,
	.was-validated .form-check-input:invalid~.invalid-feedback,
	.was-validated .form-check-input:invalid~.invalid-tooltip {
		display: block
	}

	.custom-control-input.is-invalid~.custom-control-label,
	.was-validated .custom-control-input:invalid~.custom-control-label {
		color: #dc3545
	}

	.custom-control-input.is-invalid~.custom-control-label::before,
	.was-validated .custom-control-input:invalid~.custom-control-label::before {
		background-color: #efa2a9
	}

	.custom-control-input.is-invalid~.invalid-feedback,
	.custom-control-input.is-invalid~.invalid-tooltip,
	.was-validated .custom-control-input:invalid~.invalid-feedback,
	.was-validated .custom-control-input:invalid~.invalid-tooltip {
		display: block
	}

	.custom-control-input.is-invalid:checked~.custom-control-label::before,
	.was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
		background-color: #e4606d
	}

	.custom-control-input.is-invalid:focus~.custom-control-label::before,
	.was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
		box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(220, 53, 69, .25)
	}

	.custom-file-input.is-invalid~.custom-file-label,
	.was-validated .custom-file-input:invalid~.custom-file-label {
		border-color: #dc3545
	}

	.custom-file-input.is-invalid~.custom-file-label::before,
	.was-validated .custom-file-input:invalid~.custom-file-label::before {
		border-color: inherit
	}

	.custom-file-input.is-invalid~.invalid-feedback,
	.custom-file-input.is-invalid~.invalid-tooltip,
	.was-validated .custom-file-input:invalid~.invalid-feedback,
	.was-validated .custom-file-input:invalid~.invalid-tooltip {
		display: block
	}

	.custom-file-input.is-invalid:focus~.custom-file-label,
	.was-validated .custom-file-input:invalid:focus~.custom-file-label {
		box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
	}

	.form-inline {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-flow: row wrap;
		flex-flow: row wrap;
		-ms-flex-align: center;
		align-items: center
	}

	.form-inline .form-check {
		width: 100%
	}

	@media (min-width:576px) {
		.form-inline label {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			-ms-flex-pack: center;
			justify-content: center;
			margin-bottom: 0
		}

		.form-inline .form-group {
			display: -ms-flexbox;
			display: flex;
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			-ms-flex-flow: row wrap;
			flex-flow: row wrap;
			-ms-flex-align: center;
			align-items: center;
			margin-bottom: 0
		}

		.form-inline .form-control {
			display: inline-block;
			width: auto;
			vertical-align: middle
		}

		.form-inline .form-control-plaintext {
			display: inline-block
		}

		.form-inline .custom-select,
		.form-inline .input-group {
			width: auto
		}

		.form-inline .form-check {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			-ms-flex-pack: center;
			justify-content: center;
			width: auto;
			padding-left: 0
		}

		.form-inline .form-check-input {
			position: relative;
			margin-top: 0;
			margin-right: .25rem;
			margin-left: 0
		}

		.form-inline .custom-control {
			-ms-flex-align: center;
			align-items: center;
			-ms-flex-pack: center;
			justify-content: center
		}

		.form-inline .custom-control-label {
			margin-bottom: 0
		}
	}

	.btn {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		border: 1px solid transparent;
		padding: .375rem .75rem;
		font-size: 1rem;
		line-height: 1.5;
		border-radius: .25rem;
		transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.btn {
			transition: none
		}
	}

	.btn.focus,
	.btn:focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.btn.disabled,
	.btn:disabled {
		opacity: .65
	}

	.btn:not(:disabled):not(.disabled) {
		cursor: pointer
	}

	.btn:not(:disabled):not(.disabled).active,
	.btn:not(:disabled):not(.disabled):active {
		background-image: none
	}

	a.btn.disabled,
	fieldset:disabled a.btn {
		pointer-events: none
	}

	.btn-primary {
		color: #fff;
		background-color: #007bff;
		border-color: #007bff
	}

	.btn-primary:hover {
		color: #fff;
		background-color: #0069d9;
		border-color: #0062cc
	}

	.btn-primary.focus,
	.btn-primary:focus {
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
	}

	.btn-primary.disabled,
	.btn-primary:disabled {
		color: #fff;
		background-color: #007bff;
		border-color: #007bff
	}

	.btn-primary:not(:disabled):not(.disabled).active,
	.btn-primary:not(:disabled):not(.disabled):active,
	.show>.btn-primary.dropdown-toggle {
		color: #fff;
		background-color: #0062cc;
		border-color: #005cbf
	}

	.btn-primary:not(:disabled):not(.disabled).active:focus,
	.btn-primary:not(:disabled):not(.disabled):active:focus,
	.show>.btn-primary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
	}

	.btn-secondary {
		color: #fff;
		background-color: #6c757d;
		border-color: #6c757d
	}

	.btn-secondary:hover {
		color: #fff;
		background-color: #5a6268;
		border-color: #545b62
	}

	.btn-secondary.focus,
	.btn-secondary:focus {
		box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
	}

	.btn-secondary.disabled,
	.btn-secondary:disabled {
		color: #fff;
		background-color: #6c757d;
		border-color: #6c757d
	}

	.btn-secondary:not(:disabled):not(.disabled).active,
	.btn-secondary:not(:disabled):not(.disabled):active,
	.show>.btn-secondary.dropdown-toggle {
		color: #fff;
		background-color: #545b62;
		border-color: #4e555b
	}

	.btn-secondary:not(:disabled):not(.disabled).active:focus,
	.btn-secondary:not(:disabled):not(.disabled):active:focus,
	.show>.btn-secondary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
	}

	.btn-success {
		color: #fff;
		background-color: #28a745;
		border-color: #28a745
	}

	.btn-success:hover {
		color: #fff;
		background-color: #218838;
		border-color: #1e7e34
	}

	.btn-success.focus,
	.btn-success:focus {
		box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
	}

	.btn-success.disabled,
	.btn-success:disabled {
		color: #fff;
		background-color: #28a745;
		border-color: #28a745
	}

	.btn-success:not(:disabled):not(.disabled).active,
	.btn-success:not(:disabled):not(.disabled):active,
	.show>.btn-success.dropdown-toggle {
		color: #fff;
		background-color: #1e7e34;
		border-color: #1c7430
	}

	.btn-success:not(:disabled):not(.disabled).active:focus,
	.btn-success:not(:disabled):not(.disabled):active:focus,
	.show>.btn-success.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
	}

	.btn-info {
		color: #fff;
		background-color: #17a2b8;
		border-color: #17a2b8
	}

	.btn-info:hover {
		color: #fff;
		background-color: #138496;
		border-color: #117a8b
	}

	.btn-info.focus,
	.btn-info:focus {
		box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
	}

	.btn-info.disabled,
	.btn-info:disabled {
		color: #fff;
		background-color: #17a2b8;
		border-color: #17a2b8
	}

	.btn-info:not(:disabled):not(.disabled).active,
	.btn-info:not(:disabled):not(.disabled):active,
	.show>.btn-info.dropdown-toggle {
		color: #fff;
		background-color: #117a8b;
		border-color: #10707f
	}

	.btn-info:not(:disabled):not(.disabled).active:focus,
	.btn-info:not(:disabled):not(.disabled):active:focus,
	.show>.btn-info.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
	}

	.btn-warning {
		color: #212529;
		background-color: #ffc107;
		border-color: #ffc107
	}

	.btn-warning:hover {
		color: #212529;
		background-color: #e0a800;
		border-color: #d39e00
	}

	.btn-warning.focus,
	.btn-warning:focus {
		box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
	}

	.btn-warning.disabled,
	.btn-warning:disabled {
		color: #212529;
		background-color: #ffc107;
		border-color: #ffc107
	}

	.btn-warning:not(:disabled):not(.disabled).active,
	.btn-warning:not(:disabled):not(.disabled):active,
	.show>.btn-warning.dropdown-toggle {
		color: #212529;
		background-color: #d39e00;
		border-color: #c69500
	}

	.btn-warning:not(:disabled):not(.disabled).active:focus,
	.btn-warning:not(:disabled):not(.disabled):active:focus,
	.show>.btn-warning.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
	}

	.btn-danger {
		color: #fff;
		background-color: #dc3545;
		border-color: #dc3545
	}

	.btn-danger:hover {
		color: #fff;
		background-color: #c82333;
		border-color: #bd2130
	}

	.btn-danger.focus,
	.btn-danger:focus {
		box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
	}

	.btn-danger.disabled,
	.btn-danger:disabled {
		color: #fff;
		background-color: #dc3545;
		border-color: #dc3545
	}

	.btn-danger:not(:disabled):not(.disabled).active,
	.btn-danger:not(:disabled):not(.disabled):active,
	.show>.btn-danger.dropdown-toggle {
		color: #fff;
		background-color: #bd2130;
		border-color: #b21f2d
	}

	.btn-danger:not(:disabled):not(.disabled).active:focus,
	.btn-danger:not(:disabled):not(.disabled):active:focus,
	.show>.btn-danger.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
	}

	.btn-light {
		color: #212529;
		background-color: #f8f9fa;
		border-color: #f8f9fa
	}

	.btn-light:hover {
		color: #212529;
		background-color: #e2e6ea;
		border-color: #dae0e5
	}

	.btn-light.focus,
	.btn-light:focus {
		box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
	}

	.btn-light.disabled,
	.btn-light:disabled {
		color: #212529;
		background-color: #f8f9fa;
		border-color: #f8f9fa
	}

	.btn-light:not(:disabled):not(.disabled).active,
	.btn-light:not(:disabled):not(.disabled):active,
	.show>.btn-light.dropdown-toggle {
		color: #212529;
		background-color: #dae0e5;
		border-color: #d3d9df
	}

	.btn-light:not(:disabled):not(.disabled).active:focus,
	.btn-light:not(:disabled):not(.disabled):active:focus,
	.show>.btn-light.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
	}

	.btn-dark {
		color: #fff;
		background-color: #343a40;
		border-color: #343a40
	}

	.btn-dark:hover {
		color: #fff;
		background-color: #23272b;
		border-color: #1d2124
	}

	.btn-dark.focus,
	.btn-dark:focus {
		box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
	}

	.btn-dark.disabled,
	.btn-dark:disabled {
		color: #fff;
		background-color: #343a40;
		border-color: #343a40
	}

	.btn-dark:not(:disabled):not(.disabled).active,
	.btn-dark:not(:disabled):not(.disabled):active,
	.show>.btn-dark.dropdown-toggle {
		color: #fff;
		background-color: #1d2124;
		border-color: #171a1d
	}

	.btn-dark:not(:disabled):not(.disabled).active:focus,
	.btn-dark:not(:disabled):not(.disabled):active:focus,
	.show>.btn-dark.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
	}

	.btn-outline-primary {
		color: #007bff;
		background-color: transparent;
		background-image: none;
		border-color: #007bff
	}

	.btn-outline-primary:hover {
		color: #fff;
		background-color: #007bff;
		border-color: #007bff
	}

	.btn-outline-primary.focus,
	.btn-outline-primary:focus {
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
	}

	.btn-outline-primary.disabled,
	.btn-outline-primary:disabled {
		color: #007bff;
		background-color: transparent
	}

	.btn-outline-primary:not(:disabled):not(.disabled).active,
	.btn-outline-primary:not(:disabled):not(.disabled):active,
	.show>.btn-outline-primary.dropdown-toggle {
		color: #fff;
		background-color: #007bff;
		border-color: #007bff
	}

	.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
	.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-primary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
	}

	.btn-outline-secondary {
		color: #6c757d;
		background-color: transparent;
		background-image: none;
		border-color: #6c757d
	}

	.btn-outline-secondary:hover {
		color: #fff;
		background-color: #6c757d;
		border-color: #6c757d
	}

	.btn-outline-secondary.focus,
	.btn-outline-secondary:focus {
		box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
	}

	.btn-outline-secondary.disabled,
	.btn-outline-secondary:disabled {
		color: #6c757d;
		background-color: transparent
	}

	.btn-outline-secondary:not(:disabled):not(.disabled).active,
	.btn-outline-secondary:not(:disabled):not(.disabled):active,
	.show>.btn-outline-secondary.dropdown-toggle {
		color: #fff;
		background-color: #6c757d;
		border-color: #6c757d
	}

	.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
	.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-secondary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
	}

	.btn-outline-success {
		color: #28a745;
		background-color: transparent;
		background-image: none;
		border-color: #28a745
	}

	.btn-outline-success:hover {
		color: #fff;
		background-color: #28a745;
		border-color: #28a745
	}

	.btn-outline-success.focus,
	.btn-outline-success:focus {
		box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
	}

	.btn-outline-success.disabled,
	.btn-outline-success:disabled {
		color: #28a745;
		background-color: transparent
	}

	.btn-outline-success:not(:disabled):not(.disabled).active,
	.btn-outline-success:not(:disabled):not(.disabled):active,
	.show>.btn-outline-success.dropdown-toggle {
		color: #fff;
		background-color: #28a745;
		border-color: #28a745
	}

	.btn-outline-success:not(:disabled):not(.disabled).active:focus,
	.btn-outline-success:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-success.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
	}

	.btn-outline-info {
		color: #17a2b8;
		background-color: transparent;
		background-image: none;
		border-color: #17a2b8
	}

	.btn-outline-info:hover {
		color: #fff;
		background-color: #17a2b8;
		border-color: #17a2b8
	}

	.btn-outline-info.focus,
	.btn-outline-info:focus {
		box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
	}

	.btn-outline-info.disabled,
	.btn-outline-info:disabled {
		color: #17a2b8;
		background-color: transparent
	}

	.btn-outline-info:not(:disabled):not(.disabled).active,
	.btn-outline-info:not(:disabled):not(.disabled):active,
	.show>.btn-outline-info.dropdown-toggle {
		color: #fff;
		background-color: #17a2b8;
		border-color: #17a2b8
	}

	.btn-outline-info:not(:disabled):not(.disabled).active:focus,
	.btn-outline-info:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-info.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
	}

	.btn-outline-warning {
		color: #ffc107;
		background-color: transparent;
		background-image: none;
		border-color: #ffc107
	}

	.btn-outline-warning:hover {
		color: #212529;
		background-color: #ffc107;
		border-color: #ffc107
	}

	.btn-outline-warning.focus,
	.btn-outline-warning:focus {
		box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
	}

	.btn-outline-warning.disabled,
	.btn-outline-warning:disabled {
		color: #ffc107;
		background-color: transparent
	}

	.btn-outline-warning:not(:disabled):not(.disabled).active,
	.btn-outline-warning:not(:disabled):not(.disabled):active,
	.show>.btn-outline-warning.dropdown-toggle {
		color: #212529;
		background-color: #ffc107;
		border-color: #ffc107
	}

	.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
	.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-warning.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
	}

	.btn-outline-danger {
		color: #dc3545;
		background-color: transparent;
		background-image: none;
		border-color: #dc3545
	}

	.btn-outline-danger:hover {
		color: #fff;
		background-color: #dc3545;
		border-color: #dc3545
	}

	.btn-outline-danger.focus,
	.btn-outline-danger:focus {
		box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
	}

	.btn-outline-danger.disabled,
	.btn-outline-danger:disabled {
		color: #dc3545;
		background-color: transparent
	}

	.btn-outline-danger:not(:disabled):not(.disabled).active,
	.btn-outline-danger:not(:disabled):not(.disabled):active,
	.show>.btn-outline-danger.dropdown-toggle {
		color: #fff;
		background-color: #dc3545;
		border-color: #dc3545
	}

	.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
	.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-danger.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
	}

	.btn-outline-light {
		color: #f8f9fa;
		background-color: transparent;
		background-image: none;
		border-color: #f8f9fa
	}

	.btn-outline-light:hover {
		color: #212529;
		background-color: #f8f9fa;
		border-color: #f8f9fa
	}

	.btn-outline-light.focus,
	.btn-outline-light:focus {
		box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
	}

	.btn-outline-light.disabled,
	.btn-outline-light:disabled {
		color: #f8f9fa;
		background-color: transparent
	}

	.btn-outline-light:not(:disabled):not(.disabled).active,
	.btn-outline-light:not(:disabled):not(.disabled):active,
	.show>.btn-outline-light.dropdown-toggle {
		color: #212529;
		background-color: #f8f9fa;
		border-color: #f8f9fa
	}

	.btn-outline-light:not(:disabled):not(.disabled).active:focus,
	.btn-outline-light:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-light.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
	}

	.btn-outline-dark {
		color: #343a40;
		background-color: transparent;
		background-image: none;
		border-color: #343a40
	}

	.btn-outline-dark:hover {
		color: #fff;
		background-color: #343a40;
		border-color: #343a40
	}

	.btn-outline-dark.focus,
	.btn-outline-dark:focus {
		box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
	}

	.btn-outline-dark.disabled,
	.btn-outline-dark:disabled {
		color: #343a40;
		background-color: transparent
	}

	.btn-outline-dark:not(:disabled):not(.disabled).active,
	.btn-outline-dark:not(:disabled):not(.disabled):active,
	.show>.btn-outline-dark.dropdown-toggle {
		color: #fff;
		background-color: #343a40;
		border-color: #343a40
	}

	.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
	.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
	.show>.btn-outline-dark.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
	}

	.btn-link {
		font-weight: 400;
		color: #007bff;
		background-color: transparent
	}

	.btn-link:hover {
		color: #0056b3;
		text-decoration: underline;
		background-color: transparent;
		border-color: transparent
	}

	.btn-link.focus,
	.btn-link:focus {
		text-decoration: underline;
		border-color: transparent;
		box-shadow: none
	}

	.btn-link.disabled,
	.btn-link:disabled {
		color: #6c757d;
		pointer-events: none
	}

	.btn-group-lg>.btn,
	.btn-lg {
		padding: .5rem 1rem;
		font-size: 1.25rem;
		line-height: 1.5;
		border-radius: .3rem
	}

	.btn-group-sm>.btn,
	.btn-sm {
		padding: .25rem .5rem;
		font-size: .875rem;
		line-height: 1.5;
		border-radius: .2rem
	}

	.btn-block {
		display: block;
		width: 100%
	}

	.btn-block+.btn-block {
		margin-top: .5rem
	}

	input[type=button].btn-block,
	input[type=reset].btn-block,
	input[type=submit].btn-block {
		width: 100%
	}

	.fade {
		transition: opacity .15s linear
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.fade {
			transition: none
		}
	}

	.fade:not(.show) {
		opacity: 0
	}

	.collapse:not(.show) {
		display: none
	}

	.collapsing {
		position: relative;
		height: 0;
		overflow: hidden;
		transition: height .35s ease
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.collapsing {
			transition: none
		}
	}

	.dropdown,
	.dropleft,
	.dropright,
	.dropup {
		position: relative
	}

	.dropdown-toggle::after {
		display: inline-block;
		width: 0;
		height: 0;
		margin-left: .255em;
		vertical-align: .255em;
		content: "";
		border-top: .3em solid;
		border-right: .3em solid transparent;
		border-bottom: 0;
		border-left: .3em solid transparent
	}

	.dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropdown-menu {
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 1000;
		display: none;
		float: left;
		min-width: 10rem;
		padding: .5rem 0;
		margin: .125rem 0 0;
		font-size: 1rem;
		color: #212529;
		text-align: left;
		list-style: none;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0, 0, 0, .15);
		border-radius: .25rem
	}

	.dropdown-menu-right {
		right: 0;
		left: auto
	}

	.dropup .dropdown-menu {
		top: auto;
		bottom: 100%;
		margin-top: 0;
		margin-bottom: .125rem
	}

	.dropup .dropdown-toggle::after {
		display: inline-block;
		width: 0;
		height: 0;
		margin-left: .255em;
		vertical-align: .255em;
		content: "";
		border-top: 0;
		border-right: .3em solid transparent;
		border-bottom: .3em solid;
		border-left: .3em solid transparent
	}

	.dropup .dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropright .dropdown-menu {
		top: 0;
		right: auto;
		left: 100%;
		margin-top: 0;
		margin-left: .125rem
	}

	.dropright .dropdown-toggle::after {
		display: inline-block;
		width: 0;
		height: 0;
		margin-left: .255em;
		vertical-align: .255em;
		content: "";
		border-top: .3em solid transparent;
		border-right: 0;
		border-bottom: .3em solid transparent;
		border-left: .3em solid
	}

	.dropright .dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropright .dropdown-toggle::after {
		vertical-align: 0
	}

	.dropleft .dropdown-menu {
		top: 0;
		right: 100%;
		left: auto;
		margin-top: 0;
		margin-right: .125rem
	}

	.dropleft .dropdown-toggle::after {
		display: inline-block;
		width: 0;
		height: 0;
		margin-left: .255em;
		vertical-align: .255em;
		content: ""
	}

	.dropleft .dropdown-toggle::after {
		display: none
	}

	.dropleft .dropdown-toggle::before {
		display: inline-block;
		width: 0;
		height: 0;
		margin-right: .255em;
		vertical-align: .255em;
		content: "";
		border-top: .3em solid transparent;
		border-right: .3em solid;
		border-bottom: .3em solid transparent
	}

	.dropleft .dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropleft .dropdown-toggle::before {
		vertical-align: 0
	}

	.dropdown-menu[x-placement^=bottom],
	.dropdown-menu[x-placement^=left],
	.dropdown-menu[x-placement^=right],
	.dropdown-menu[x-placement^=top] {
		right: auto;
		bottom: auto
	}

	.dropdown-divider {
		height: 0;
		margin: .5rem 0;
		overflow: hidden;
		border-top: 1px solid #e9ecef
	}

	.dropdown-item {
		display: block;
		width: 100%;
		padding: .25rem 1.5rem;
		clear: both;
		font-weight: 400;
		color: #212529;
		text-align: inherit;
		white-space: nowrap;
		background-color: transparent;
		border: 0
	}

	.dropdown-item:focus,
	.dropdown-item:hover {
		color: #16181b;
		text-decoration: none;
		background-color: #f8f9fa
	}

	.dropdown-item.active,
	.dropdown-item:active {
		color: #fff;
		text-decoration: none;
		background-color: #007bff
	}

	.dropdown-item.disabled,
	.dropdown-item:disabled {
		color: #6c757d;
		background-color: transparent
	}

	.dropdown-menu.show {
		display: block
	}

	.dropdown-header {
		display: block;
		padding: .5rem 1.5rem;
		margin-bottom: 0;
		font-size: .875rem;
		color: #6c757d;
		white-space: nowrap
	}

	.dropdown-item-text {
		display: block;
		padding: .25rem 1.5rem;
		color: #212529
	}

	.btn-group,
	.btn-group-vertical {
		position: relative;
		display: -ms-inline-flexbox;
		display: inline-flex;
		vertical-align: middle
	}

	.btn-group-vertical>.btn,
	.btn-group>.btn {
		position: relative;
		-ms-flex: 0 1 auto;
		flex: 0 1 auto
	}

	.btn-group-vertical>.btn:hover,
	.btn-group>.btn:hover {
		z-index: 1
	}

	.btn-group-vertical>.btn.active,
	.btn-group-vertical>.btn:active,
	.btn-group-vertical>.btn:focus,
	.btn-group>.btn.active,
	.btn-group>.btn:active,
	.btn-group>.btn:focus {
		z-index: 1
	}

	.btn-group .btn+.btn,
	.btn-group .btn+.btn-group,
	.btn-group .btn-group+.btn,
	.btn-group .btn-group+.btn-group,
	.btn-group-vertical .btn+.btn,
	.btn-group-vertical .btn+.btn-group,
	.btn-group-vertical .btn-group+.btn,
	.btn-group-vertical .btn-group+.btn-group {
		margin-left: -1px
	}

	.btn-toolbar {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-pack: start;
		justify-content: flex-start
	}

	.btn-toolbar .input-group {
		width: auto
	}

	.btn-group>.btn:first-child {
		margin-left: 0
	}

	.btn-group>.btn-group:not(:last-child)>.btn,
	.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.btn-group>.btn-group:not(:first-child)>.btn,
	.btn-group>.btn:not(:first-child) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.dropdown-toggle-split {
		padding-right: .5625rem;
		padding-left: .5625rem
	}

	.dropdown-toggle-split::after,
	.dropright .dropdown-toggle-split::after,
	.dropup .dropdown-toggle-split::after {
		margin-left: 0
	}

	.dropleft .dropdown-toggle-split::before {
		margin-right: 0
	}

	.btn-group-sm>.btn+.dropdown-toggle-split,
	.btn-sm+.dropdown-toggle-split {
		padding-right: .375rem;
		padding-left: .375rem
	}

	.btn-group-lg>.btn+.dropdown-toggle-split,
	.btn-lg+.dropdown-toggle-split {
		padding-right: .75rem;
		padding-left: .75rem
	}

	.btn-group-vertical {
		-ms-flex-direction: column;
		flex-direction: column;
		-ms-flex-align: start;
		align-items: flex-start;
		-ms-flex-pack: center;
		justify-content: center
	}

	.btn-group-vertical .btn,
	.btn-group-vertical .btn-group {
		width: 100%
	}

	.btn-group-vertical>.btn+.btn,
	.btn-group-vertical>.btn+.btn-group,
	.btn-group-vertical>.btn-group+.btn,
	.btn-group-vertical>.btn-group+.btn-group {
		margin-top: -1px;
		margin-left: 0
	}

	.btn-group-vertical>.btn-group:not(:last-child)>.btn,
	.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0
	}

	.btn-group-vertical>.btn-group:not(:first-child)>.btn,
	.btn-group-vertical>.btn:not(:first-child) {
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.btn-group-toggle>.btn,
	.btn-group-toggle>.btn-group>.btn {
		margin-bottom: 0
	}

	.btn-group-toggle>.btn input[type=checkbox],
	.btn-group-toggle>.btn input[type=radio],
	.btn-group-toggle>.btn-group>.btn input[type=checkbox],
	.btn-group-toggle>.btn-group>.btn input[type=radio] {
		position: absolute;
		clip: rect(0, 0, 0, 0);
		pointer-events: none
	}

	.input-group {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-align: stretch;
		align-items: stretch;
		width: 100%
	}

	.input-group>.custom-file,
	.input-group>.custom-select,
	.input-group>.form-control {
		position: relative;
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
		width: 1%;
		margin-bottom: 0
	}

	.input-group>.custom-file:focus,
	.input-group>.custom-select:focus,
	.input-group>.form-control:focus {
		z-index: 3
	}

	.input-group>.custom-file+.custom-file,
	.input-group>.custom-file+.custom-select,
	.input-group>.custom-file+.form-control,
	.input-group>.custom-select+.custom-file,
	.input-group>.custom-select+.custom-select,
	.input-group>.custom-select+.form-control,
	.input-group>.form-control+.custom-file,
	.input-group>.form-control+.custom-select,
	.input-group>.form-control+.form-control {
		margin-left: -1px
	}

	.input-group>.custom-select:not(:last-child),
	.input-group>.form-control:not(:last-child) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group>.custom-select:not(:first-child),
	.input-group>.form-control:not(:first-child) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.input-group>.custom-file {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center
	}

	.input-group>.custom-file:not(:last-child) .custom-file-label,
	.input-group>.custom-file:not(:last-child) .custom-file-label::after {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group>.custom-file:not(:first-child) .custom-file-label {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.input-group-append,
	.input-group-prepend {
		display: -ms-flexbox;
		display: flex
	}

	.input-group-append .btn,
	.input-group-prepend .btn {
		position: relative;
		z-index: 2
	}

	.input-group-append .btn+.btn,
	.input-group-append .btn+.input-group-text,
	.input-group-append .input-group-text+.btn,
	.input-group-append .input-group-text+.input-group-text,
	.input-group-prepend .btn+.btn,
	.input-group-prepend .btn+.input-group-text,
	.input-group-prepend .input-group-text+.btn,
	.input-group-prepend .input-group-text+.input-group-text {
		margin-left: -1px
	}

	.input-group-prepend {
		margin-right: -1px
	}

	.input-group-append {
		margin-left: -1px
	}

	.input-group-text {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		padding: .375rem .75rem;
		margin-bottom: 0;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #495057;
		text-align: center;
		white-space: nowrap;
		background-color: #e9ecef;
		border: 1px solid #ced4da;
		border-radius: .25rem
	}

	.input-group-text input[type=checkbox],
	.input-group-text input[type=radio] {
		margin-top: 0
	}

	.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
	.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
	.input-group>.input-group-append:not(:last-child)>.btn,
	.input-group>.input-group-append:not(:last-child)>.input-group-text,
	.input-group>.input-group-prepend>.btn,
	.input-group>.input-group-prepend>.input-group-text {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group>.input-group-append>.btn,
	.input-group>.input-group-append>.input-group-text,
	.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
	.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
	.input-group>.input-group-prepend:not(:first-child)>.btn,
	.input-group>.input-group-prepend:not(:first-child)>.input-group-text {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.custom-control {
		position: relative;
		display: block;
		min-height: 1.5rem;
		padding-left: 1.5rem
	}

	.custom-control-inline {
		display: -ms-inline-flexbox;
		display: inline-flex;
		margin-right: 1rem
	}

	.custom-control-input {
		position: absolute;
		z-index: -1;
		opacity: 0
	}

	.custom-control-input:checked~.custom-control-label::before {
		color: #fff;
		background-color: #007bff
	}

	.custom-control-input:focus~.custom-control-label::before {
		box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.custom-control-input:active~.custom-control-label::before {
		color: #fff;
		background-color: #b3d7ff
	}

	.custom-control-input:disabled~.custom-control-label {
		color: #6c757d
	}

	.custom-control-input:disabled~.custom-control-label::before {
		background-color: #e9ecef
	}

	.custom-control-label {
		position: relative;
		margin-bottom: 0
	}

	.custom-control-label::before {
		position: absolute;
		top: .25rem;
		left: -1.5rem;
		display: block;
		width: 1rem;
		height: 1rem;
		pointer-events: none;
		content: "";
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-color: #dee2e6
	}

	.custom-control-label::after {
		position: absolute;
		top: .25rem;
		left: -1.5rem;
		display: block;
		width: 1rem;
		height: 1rem;
		content: "";
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 50% 50%
	}

	.custom-checkbox .custom-control-label::before {
		border-radius: .25rem
	}

	.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
		background-color: #007bff
	}

	.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E")
	}

	.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
		background-color: #007bff
	}

	.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")
	}

	.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
		background-color: rgba(0, 123, 255, .5)
	}

	.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
		background-color: rgba(0, 123, 255, .5)
	}

	.custom-radio .custom-control-label::before {
		border-radius: 50%
	}

	.custom-radio .custom-control-input:checked~.custom-control-label::before {
		background-color: #007bff
	}

	.custom-radio .custom-control-input:checked~.custom-control-label::after {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
	}

	.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
		background-color: rgba(0, 123, 255, .5)
	}

	.custom-select {
		display: inline-block;
		width: 100%;
		height: calc(2.25rem + 2px);
		padding: .375rem 1.75rem .375rem .75rem;
		line-height: 1.5;
		color: #495057;
		vertical-align: middle;
		background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
		background-size: 8px 10px;
		border: 1px solid #ced4da;
		border-radius: .25rem;
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none
	}

	.custom-select:focus {
		border-color: #80bdff;
		outline: 0;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075), 0 0 5px rgba(128, 189, 255, .5)
	}

	.custom-select:focus::-ms-value {
		color: #495057;
		background-color: #fff
	}

	.custom-select[multiple],
	.custom-select[size]:not([size="1"]) {
		height: auto;
		padding-right: .75rem;
		background-image: none
	}

	.custom-select:disabled {
		color: #6c757d;
		background-color: #e9ecef
	}

	.custom-select::-ms-expand {
		opacity: 0
	}

	.custom-select-sm {
		height: calc(1.8125rem + 2px);
		padding-top: .375rem;
		padding-bottom: .375rem;
		font-size: 75%
	}

	.custom-select-lg {
		height: calc(2.875rem + 2px);
		padding-top: .375rem;
		padding-bottom: .375rem;
		font-size: 125%
	}

	.custom-file {
		position: relative;
		display: inline-block;
		width: 100%;
		height: calc(2.25rem + 2px);
		margin-bottom: 0
	}

	.custom-file-input {
		position: relative;
		z-index: 2;
		width: 100%;
		height: calc(2.25rem + 2px);
		margin: 0;
		opacity: 0
	}

	.custom-file-input:focus~.custom-file-label {
		border-color: #80bdff;
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.custom-file-input:focus~.custom-file-label::after {
		border-color: #80bdff
	}

	.custom-file-input:lang(en)~.custom-file-label::after {
		content: "Browse"
	}

	.custom-file-label {
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1;
		height: calc(2.25rem + 2px);
		padding: .375rem .75rem;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		border: 1px solid #ced4da;
		border-radius: .25rem
	}

	.custom-file-label::after {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		z-index: 3;
		display: block;
		height: 2.25rem;
		padding: .375rem .75rem;
		line-height: 1.5;
		color: #495057;
		content: "Browse";
		background-color: #e9ecef;
		border-left: 1px solid #ced4da;
		border-radius: 0 .25rem .25rem 0
	}

	.custom-range {
		width: 100%;
		padding-left: 0;
		background-color: transparent;
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none
	}

	.custom-range:focus {
		outline: 0
	}

	.custom-range::-moz-focus-outer {
		border: 0
	}

	.custom-range::-webkit-slider-thumb {
		width: 1rem;
		height: 1rem;
		margin-top: -.25rem;
		background-color: #007bff;
		border: 0;
		border-radius: 1rem;
		-webkit-appearance: none;
		appearance: none
	}

	.custom-range::-webkit-slider-thumb:focus {
		outline: 0;
		box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.custom-range::-webkit-slider-thumb:active {
		background-color: #b3d7ff
	}

	.custom-range::-webkit-slider-runnable-track {
		width: 100%;
		height: .5rem;
		color: transparent;
		cursor: pointer;
		background-color: #dee2e6;
		border-color: transparent;
		border-radius: 1rem
	}

	.custom-range::-moz-range-thumb {
		width: 1rem;
		height: 1rem;
		background-color: #007bff;
		border: 0;
		border-radius: 1rem;
		-moz-appearance: none;
		appearance: none
	}

	.custom-range::-moz-range-thumb:focus {
		outline: 0;
		box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.custom-range::-moz-range-thumb:active {
		background-color: #b3d7ff
	}

	.custom-range::-moz-range-track {
		width: 100%;
		height: .5rem;
		color: transparent;
		cursor: pointer;
		background-color: #dee2e6;
		border-color: transparent;
		border-radius: 1rem
	}

	.custom-range::-ms-thumb {
		width: 1rem;
		height: 1rem;
		background-color: #007bff;
		border: 0;
		border-radius: 1rem;
		appearance: none
	}

	.custom-range::-ms-thumb:focus {
		outline: 0;
		box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.custom-range::-ms-thumb:active {
		background-color: #b3d7ff
	}

	.custom-range::-ms-track {
		width: 100%;
		height: .5rem;
		color: transparent;
		cursor: pointer;
		background-color: transparent;
		border-color: transparent;
		border-width: .5rem
	}

	.custom-range::-ms-fill-lower {
		background-color: #dee2e6;
		border-radius: 1rem
	}

	.custom-range::-ms-fill-upper {
		margin-right: 15px;
		background-color: #dee2e6;
		border-radius: 1rem
	}

	.nav {
		height: 100%;
		align-items: center;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		padding-left: 0;
		margin-bottom: 0;
		list-style: none
	}

	.nav-link:focus,
	.nav-link:hover {
		text-decoration: none
	}

	.nav-link.disabled {
		color: #6c757d
	}

	.nav-tabs .nav-link.disabled {
		color: #6c757d;
		background-color: transparent;
		border-color: transparent
	}

	.nav-tabs .dropdown-menu {
		margin-top: -1px;
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.nav-pills .nav-link {
		border-radius: .25rem
	}

	.nav-pills .nav-link.active,
	.nav-pills .show>.nav-link {
		color: #fff;
		background-color: #007bff
	}

	.nav-fill .nav-item {
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
		text-align: center
	}

	.nav-justified .nav-item {
		-ms-flex-preferred-size: 0;
		flex-basis: 0;
		-ms-flex-positive: 1;
		flex-grow: 1;
		text-align: center
	}

	.tab-content>.tab-pane {
		display: none
	}

	.tab-content>.active {
		display: block
	}

	.navbar {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-align: center;
		align-items: center;
		-ms-flex-pack: justify;
		justify-content: space-between;
		padding: .5rem 1rem
	}

	.navbar>.container,
	.navbar>.container-fluid {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-align: center;
		align-items: center;
		-ms-flex-pack: justify;
		justify-content: space-between
	}

	.navbar-brand {
		display: inline-block;
		padding-top: .3125rem;
		padding-bottom: .3125rem;
		margin-right: 1rem;
		font-size: 1.25rem;
		line-height: inherit;
		white-space: nowrap
	}

	.navbar-brand:focus,
	.navbar-brand:hover {
		text-decoration: none
	}

	.navbar-nav {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		padding-left: 0;
		margin-bottom: 0;
		list-style: none
	}

	.navbar-nav .nav-link {
		padding-right: 0;
		padding-left: 0
	}

	.navbar-nav .dropdown-menu {
		position: static;
		float: none
	}

	.navbar-text {
		display: inline-block;
		padding-top: .5rem;
		padding-bottom: .5rem
	}

	.navbar-collapse {
		-ms-flex-preferred-size: 100%;
		flex-basis: 100%;
		-ms-flex-positive: 1;
		flex-grow: 1;
		-ms-flex-align: center;
		align-items: center
	}

	.navbar-toggler {
		padding: .25rem .75rem;
		font-size: 1.25rem;
		line-height: 1;
		background-color: transparent;
		border: 1px solid transparent;
		border-radius: .25rem
	}

	.navbar-toggler:focus,
	.navbar-toggler:hover {
		text-decoration: none
	}

	.navbar-toggler:not(:disabled):not(.disabled) {
		cursor: pointer
	}

	.navbar-toggler-icon {
		display: inline-block;
		width: 1.5em;
		height: 1.5em;
		vertical-align: middle;
		content: "";
		background: no-repeat center center;
		background-size: 100% 100%;
		color: #fff;
	}

	@media (max-width:575.98px) {
		.nav-item a {
			font-size: 14px !important;
		}

		.nav-link.text-capitalize {
			padding-left: 15px !important;
			padding-right: 15px !important;
		}

		.header-left {
			padding: 0 !important;
		}

		.navbar-expand-sm>.container,
		.navbar-expand-sm>.container-fluid {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width:576px) {
		.navbar-expand-sm {
			-ms-flex-flow: row nowrap;
			flex-flow: row nowrap;
			-ms-flex-pack: start;
			justify-content: flex-start
		}

		.navbar-expand-sm .navbar-nav {
			-ms-flex-direction: row;
			flex-direction: row
		}

		.navbar-expand-sm .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-sm .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-sm>.container,
		.navbar-expand-sm>.container-fluid {
			-ms-flex-wrap: nowrap;
			flex-wrap: nowrap
		}

		.navbar-expand-sm .navbar-collapse {
			display: -ms-flexbox !important;
			display: flex !important;
			-ms-flex-preferred-size: auto;
			flex-basis: auto
		}

		.navbar-expand-sm .navbar-toggler {
			display: none
		}
	}

	@media (max-width:767.98px) {

		.navbar-expand-md>.container,
		.navbar-expand-md>.container-fluid {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width:768px) {
		.navbar-expand-md {
			-ms-flex-flow: row nowrap;
			flex-flow: row nowrap;
			-ms-flex-pack: start;
			justify-content: flex-start
		}

		.navbar-expand-md .navbar-nav {
			-ms-flex-direction: row;
			flex-direction: row
		}

		.navbar-expand-md .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-md .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-md>.container,
		.navbar-expand-md>.container-fluid {
			-ms-flex-wrap: nowrap;
			flex-wrap: nowrap
		}

		.navbar-expand-md .navbar-collapse {
			display: -ms-flexbox !important;
			display: flex !important;
			-ms-flex-preferred-size: auto;
			flex-basis: auto
		}

		.navbar-expand-md .navbar-toggler {
			display: none
		}
	}

	@media (min-width:992px) {
		.navbar-expand-lg {
			-ms-flex-flow: row nowrap;
			flex-flow: row nowrap;
			-ms-flex-pack: start;
			justify-content: flex-start
		}

		.navbar-expand-lg .navbar-nav {
			-ms-flex-direction: row;
			flex-direction: row
		}

		.navbar-expand-lg .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-lg .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-lg>.container,
		.navbar-expand-lg>.container-fluid {
			-ms-flex-wrap: nowrap;
			flex-wrap: nowrap
		}

		.navbar-expand-lg .navbar-collapse {
			display: -ms-flexbox !important;
			display: flex !important;
			-ms-flex-preferred-size: auto;
			flex-basis: auto
		}

		.navbar-expand-lg .navbar-toggler {
			display: none
		}
	}

	@media (max-width:1199.98px) {

		.navbar-expand-xl>.container,
		.navbar-expand-xl>.container-fluid {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width:1200px) {
		.navbar-expand-xl {
			-ms-flex-flow: row nowrap;
			flex-flow: row nowrap;
			-ms-flex-pack: start;
			justify-content: flex-start
		}

		.navbar-expand-xl .navbar-nav {
			-ms-flex-direction: row;
			flex-direction: row
		}

		.navbar-expand-xl .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-xl .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-xl>.container,
		.navbar-expand-xl>.container-fluid {
			-ms-flex-wrap: nowrap;
			flex-wrap: nowrap
		}

		.navbar-expand-xl .navbar-collapse {
			display: -ms-flexbox !important;
			display: flex !important;
			-ms-flex-preferred-size: auto;
			flex-basis: auto
		}

		.navbar-expand-xl .navbar-toggler {
			display: none
		}
	}

	.navbar-expand {
		-ms-flex-flow: row nowrap;
		flex-flow: row nowrap;
		-ms-flex-pack: start;
		justify-content: flex-start
	}

	.navbar-expand>.container,
	.navbar-expand>.container-fluid {
		padding-right: 0;
		padding-left: 0
	}

	.navbar-expand .navbar-nav {
		-ms-flex-direction: row;
		flex-direction: row
	}

	.navbar-expand .navbar-nav .dropdown-menu {
		position: absolute
	}

	.navbar-expand .navbar-nav .nav-link {
		padding-right: .5rem;
		padding-left: .5rem
	}

	.navbar-expand>.container,
	.navbar-expand>.container-fluid {
		-ms-flex-wrap: nowrap;
		flex-wrap: nowrap
	}

	.navbar-expand .navbar-collapse {
		display: -ms-flexbox !important;
		display: flex !important;
		-ms-flex-preferred-size: auto;
		flex-basis: auto
	}

	.navbar-expand .navbar-toggler {
		display: none
	}

	.navbar-light .navbar-brand {
		color: rgba(0, 0, 0, .9)
	}

	.navbar-light .navbar-brand:focus,
	.navbar-light .navbar-brand:hover {
		color: rgba(0, 0, 0, .9)
	}

	.navbar-light .navbar-nav .nav-link {
		color: rgba(0, 0, 0, .5)
	}

	.navbar-light .navbar-nav .nav-link:focus,
	.navbar-light .navbar-nav .nav-link:hover {
		color: rgba(0, 0, 0, .7)
	}

	.navbar-light .navbar-nav .nav-link.disabled {
		color: rgba(0, 0, 0, .3)
	}

	.navbar-light .navbar-nav .active>.nav-link,
	.navbar-light .navbar-nav .nav-link.active,
	.navbar-light .navbar-nav .nav-link.show,
	.navbar-light .navbar-nav .show>.nav-link {
		color: rgba(0, 0, 0, .9)
	}

	.navbar-light .navbar-toggler {
		color: rgba(0, 0, 0, .5);
		border-color: rgba(0, 0, 0, .1)
	}

	.navbar-light .navbar-toggler-icon {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
	}

	.navbar-light .navbar-text {
		color: rgba(0, 0, 0, .5)
	}

	.navbar-light .navbar-text a {
		color: rgba(0, 0, 0, .9)
	}

	.navbar-light .navbar-text a:focus,
	.navbar-light .navbar-text a:hover {
		color: rgba(0, 0, 0, .9)
	}

	.navbar-dark .navbar-brand {
		color: #fff
	}

	.navbar-dark .navbar-brand:focus,
	.navbar-dark .navbar-brand:hover {
		color: #fff
	}

	.navbar-dark .navbar-nav .nav-link:focus,
	.navbar-dark .navbar-nav .nav-link:hover {
		color: #fc794b
	}

	.navbar-dark .navbar-nav .nav-link.disabled {
		color: rgba(255, 255, 255, .25)
	}

	.navbar-dark .navbar-nav .active>.nav-link,
	.navbar-dark .navbar-nav .nav-link.active,
	.navbar-dark .navbar-nav .nav-link.show,
	.navbar-dark .navbar-nav .show>.nav-link {
		color: #fc794b;
		/* font-size: 16px; */
	}

	.navbar-dark .navbar-toggler {
		color: rgba(255, 255, 255, .5);
		border-color: #fff;
	}

	.navbar-dark .navbar-toggler-icon {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
	}

	.navbar-dark .navbar-text {
		color: rgba(255, 255, 255, .5)
	}

	.navbar-dark .navbar-text a {
		color: #fff
	}

	.navbar-dark .navbar-text a:focus,
	.navbar-dark .navbar-text a:hover {
		color: #fff
	}

	.card {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 1px solid rgba(0, 0, 0, .125);
		border-radius: .25rem
	}

	.card>hr {
		margin-right: 0;
		margin-left: 0
	}

	.card>.list-group:first-child .list-group-item:first-child {
		border-top-left-radius: .25rem;
		border-top-right-radius: .25rem
	}

	.card>.list-group:last-child .list-group-item:last-child {
		border-bottom-right-radius: .25rem;
		border-bottom-left-radius: .25rem
	}

	.card-body {
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
		padding: 1.25rem
	}

	.card-title {
		margin-bottom: .75rem
	}

	.card-subtitle {
		margin-top: -.375rem;
		margin-bottom: 0
	}

	.card-text:last-child {
		margin-bottom: 0
	}

	.card-link:hover {
		text-decoration: none
	}

	.card-link+.card-link {
		margin-left: 1.25rem
	}

	.card-header {
		padding: .75rem 1.25rem;
		margin-bottom: 0;
		background-color: rgba(0, 0, 0, .03);
		border-bottom: 1px solid rgba(0, 0, 0, .125)
	}

	.card-header:first-child {
		border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
	}

	.card-header+.list-group .list-group-item:first-child {
		border-top: 0
	}

	.card-footer {
		padding: .75rem 1.25rem;
		background-color: rgba(0, 0, 0, .03);
		border-top: 1px solid rgba(0, 0, 0, .125)
	}

	.card-footer:last-child {
		border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
	}

	.card-header-tabs {
		margin-right: -.625rem;
		margin-bottom: -.75rem;
		margin-left: -.625rem;
		border-bottom: 0
	}

	.card-header-pills {
		margin-right: -.625rem;
		margin-left: -.625rem
	}

	.card-img-overlay {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		padding: 1.25rem
	}

	.card-img {
		width: 100%;
		border-radius: calc(.25rem - 1px)
	}

	.card-img-top {
		width: 100%;
		border-top-left-radius: calc(.25rem - 1px);
		border-top-right-radius: calc(.25rem - 1px)
	}

	.card-img-bottom {
		width: 100%;
		border-bottom-right-radius: calc(.25rem - 1px);
		border-bottom-left-radius: calc(.25rem - 1px)
	}

	.card-deck {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column
	}

	.card-deck .card {
		margin-bottom: 15px
	}

	@media (min-width:576px) {
		.card-deck {
			-ms-flex-flow: row wrap;
			flex-flow: row wrap;
			margin-right: -15px;
			margin-left: -15px
		}

		.card-deck .card {
			display: -ms-flexbox;
			display: flex;
			-ms-flex: 1 0 0%;
			flex: 1 0 0%;
			-ms-flex-direction: column;
			flex-direction: column;
			margin-right: 15px;
			margin-bottom: 0;
			margin-left: 15px
		}
	}

	.card-group {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column
	}

	.card-group>.card {
		margin-bottom: 15px
	}

	@media (min-width:576px) {
		.card-group {
			-ms-flex-flow: row wrap;
			flex-flow: row wrap
		}

		.card-group>.card {
			-ms-flex: 1 0 0%;
			flex: 1 0 0%;
			margin-bottom: 0
		}

		.card-group>.card+.card {
			margin-left: 0;
			border-left: 0
		}

		.card-group>.card:first-child {
			border-top-right-radius: 0;
			border-bottom-right-radius: 0
		}

		.card-group>.card:first-child .card-header,
		.card-group>.card:first-child .card-img-top {
			border-top-right-radius: 0
		}

		.card-group>.card:first-child .card-footer,
		.card-group>.card:first-child .card-img-bottom {
			border-bottom-right-radius: 0
		}

		.card-group>.card:last-child {
			border-top-left-radius: 0;
			border-bottom-left-radius: 0
		}

		.card-group>.card:last-child .card-header,
		.card-group>.card:last-child .card-img-top {
			border-top-left-radius: 0
		}

		.card-group>.card:last-child .card-footer,
		.card-group>.card:last-child .card-img-bottom {
			border-bottom-left-radius: 0
		}

		.card-group>.card:only-child {
			border-radius: .25rem
		}

		.card-group>.card:only-child .card-header,
		.card-group>.card:only-child .card-img-top {
			border-top-left-radius: .25rem;
			border-top-right-radius: .25rem
		}

		.card-group>.card:only-child .card-footer,
		.card-group>.card:only-child .card-img-bottom {
			border-bottom-right-radius: .25rem;
			border-bottom-left-radius: .25rem
		}

		.card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
			border-radius: 0
		}

		.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,
		.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
		.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
		.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
			border-radius: 0
		}
	}

	.card-columns .card {
		margin-bottom: .75rem
	}

	@media (min-width:576px) {
		.card-columns {
			-webkit-column-count: 3;
			-moz-column-count: 3;
			column-count: 3;
			-webkit-column-gap: 1.25rem;
			-moz-column-gap: 1.25rem;
			column-gap: 1.25rem;
			orphans: 1;
			widows: 1
		}

		.card-columns .card {
			display: inline-block;
			width: 100%
		}
	}

	.accordion .card:not(:first-of-type):not(:last-of-type) {
		border-bottom: 0;
		border-radius: 0
	}

	.accordion .card:not(:first-of-type) .card-header:first-child {
		border-radius: 0
	}

	.accordion .card:first-of-type {
		border-bottom: 0;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0
	}

	.accordion .card:last-of-type {
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.breadcrumb {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		padding: .75rem 1rem;
		margin-bottom: 1rem;
		list-style: none;
		background-color: #e9ecef;
		border-radius: .25rem
	}

	.breadcrumb-item+.breadcrumb-item {
		padding-left: .5rem
	}

	.breadcrumb-item+.breadcrumb-item::before {
		display: inline-block;
		padding-right: .5rem;
		color: #6c757d;
		content: "/"
	}

	.breadcrumb-item+.breadcrumb-item:hover::before {
		text-decoration: underline
	}

	.breadcrumb-item+.breadcrumb-item:hover::before {
		text-decoration: none
	}

	.breadcrumb-item.active {
		color: #6c757d
	}

	.pagination {
		display: -ms-flexbox;
		display: flex;
		padding-left: 0;
		list-style: none;
		border-radius: .25rem
	}

	.page-link {
		position: relative;
		display: flex;
		color: rgba(0, 0, 0, 0.6);
		width: 36px;
		height: 36px;
		align-items: center;
		justify-content: center;
		margin: 0 5px;
		background: #eaeaea;
		border-radius: 8px;
		border: 1px solid;
		box-shadow: 1.5px 1.5px rgba(0, 0, 0, 0.5);
	}

	.page-link:hover {
		z-index: 2;
		color: #0056b3;
		text-decoration: none;
		background-color: #e9ecef;
		border-color: #dee2e6
	}

	.page-link:focus {
		z-index: 2;
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
	}

	.page-link:not(:disabled):not(.disabled) {
		cursor: pointer
	}

	.page-item:first-child .page-link {
		font-size: 30px;
		padding-top: 3px !important;
		padding-bottom: 11px !important;
	}

	.page-item:last-child .page-link {
		font-size: 30px;
		padding-top: 3px !important;
		padding-bottom: 11px !important;
	}

	.page-item.active .page-link {
		z-index: 1;
		color: #fff;
		background-color: #007bff;
		border-color: #007bff
	}

	.page-item.disabled .page-link {
		color: rgba(0, 0, 0, 0.4);
		pointer-events: none;
		cursor: auto;
		background-color: #ecf1ef;
		border-color: #dee2e6
	}

	.pagination-lg .page-link {
		padding: .75rem 1.5rem;
		font-size: 1.25rem;
		line-height: 1.5
	}

	.pagination-lg .page-item:first-child .page-link {
		border-top-left-radius: .3rem;
		border-bottom-left-radius: .3rem
	}

	.pagination-lg .page-item:last-child .page-link {
		border-top-right-radius: .3rem;
		border-bottom-right-radius: .3rem
	}

	.pagination-sm .page-link {
		padding: .25rem .5rem;
		font-size: .875rem;
		line-height: 1.5
	}

	.pagination-sm .page-item:first-child .page-link {
		border-top-left-radius: .2rem;
		border-bottom-left-radius: .2rem
	}

	.pagination-sm .page-item:last-child .page-link {
		border-top-right-radius: .2rem;
		border-bottom-right-radius: .2rem
	}

	.badge {
		display: inline-block;
		padding: .25em .4em;
		font-size: 75%;
		font-weight: 700;
		line-height: 1;
		text-align: center;
		white-space: nowrap;
		vertical-align: baseline;
		border-radius: .25rem
	}

	.badge:empty {
		display: none
	}

	.btn .badge {
		position: relative;
		top: -1px
	}

	.badge-pill {
		padding-right: .6em;
		padding-left: .6em;
		border-radius: 10rem
	}

	.badge-primary {
		color: #fff;
		background-color: #007bff
	}

	.badge-primary[href]:focus,
	.badge-primary[href]:hover {
		color: #fff;
		text-decoration: none;
		background-color: #0062cc
	}

	.badge-secondary {
		color: #fff;
		background-color: #6c757d
	}

	.badge-secondary[href]:focus,
	.badge-secondary[href]:hover {
		color: #fff;
		text-decoration: none;
		background-color: #545b62
	}

	.badge-success {
		color: #fff;
		background-color: #28a745
	}

	.badge-success[href]:focus,
	.badge-success[href]:hover {
		color: #fff;
		text-decoration: none;
		background-color: #1e7e34
	}

	.badge-info {
		color: #fff;
		background-color: #17a2b8
	}

	.badge-info[href]:focus,
	.badge-info[href]:hover {
		color: #fff;
		text-decoration: none;
		background-color: #117a8b
	}

	.badge-warning {
		color: #212529;
		background-color: #ffc107
	}

	.badge-warning[href]:focus,
	.badge-warning[href]:hover {
		color: #212529;
		text-decoration: none;
		background-color: #d39e00
	}

	.badge-danger {
		color: #fff;
		background-color: #dc3545
	}

	.badge-danger[href]:focus,
	.badge-danger[href]:hover {
		color: #fff;
		text-decoration: none;
		background-color: #bd2130
	}

	.badge-light {
		color: #212529;
		background-color: #f8f9fa
	}

	.badge-light[href]:focus,
	.badge-light[href]:hover {
		color: #212529;
		text-decoration: none;
		background-color: #dae0e5
	}

	.badge-dark {
		color: #fff;
		background-color: #343a40
	}

	.badge-dark[href]:focus,
	.badge-dark[href]:hover {
		color: #fff;
		text-decoration: none;
		background-color: #1d2124
	}

	.jumbotron {
		padding: 2rem 1rem;
		margin-bottom: 2rem;
		background-color: #e9ecef;
		border-radius: .3rem
	}

	@media (min-width:576px) {
		.jumbotron {
			padding: 4rem 2rem
		}
	}

	.jumbotron-fluid {
		padding-right: 0;
		padding-left: 0;
		border-radius: 0
	}

	.alert {
		position: relative;
		padding: .75rem 1.25rem;
		margin-bottom: 1rem;
		border: 1px solid transparent;
		border-radius: .25rem
	}

	.alert-heading {
		color: inherit
	}

	.alert-link {
		font-weight: 700
	}

	.alert-dismissible {
		padding-right: 4rem
	}

	.alert-dismissible .close {
		position: absolute;
		top: 0;
		right: 0;
		padding: .75rem 1.25rem;
		color: inherit
	}

	.alert-primary {
		color: #004085;
		background-color: #cce5ff;
		border-color: #b8daff
	}

	.alert-primary hr {
		border-top-color: #9fcdff
	}

	.alert-primary .alert-link {
		color: #002752
	}

	.alert-secondary {
		color: #383d41;
		background-color: #e2e3e5;
		border-color: #d6d8db
	}

	.alert-secondary hr {
		border-top-color: #c8cbcf
	}

	.alert-secondary .alert-link {
		color: #202326
	}

	.alert-success {
		color: #155724;
		background-color: #d4edda;
		border-color: #c3e6cb
	}

	.alert-success hr {
		border-top-color: #b1dfbb
	}

	.alert-success .alert-link {
		color: #0b2e13
	}

	.alert-info {
		color: #0c5460;
		background-color: #d1ecf1;
		border-color: #bee5eb
	}

	.alert-info hr {
		border-top-color: #abdde5
	}

	.alert-info .alert-link {
		color: #062c33
	}

	.alert-warning {
		color: #856404;
		background-color: #fff3cd;
		border-color: #ffeeba
	}

	.alert-warning hr {
		border-top-color: #ffe8a1
	}

	.alert-warning .alert-link {
		color: #533f03
	}

	.alert-danger {
		color: #721c24;
		background-color: #f8d7da;
		border-color: #f5c6cb
	}

	.alert-danger hr {
		border-top-color: #f1b0b7
	}

	.alert-danger .alert-link {
		color: #491217
	}

	.alert-light {
		color: #818182;
		background-color: #fefefe;
		border-color: #fdfdfe
	}

	.alert-light hr {
		border-top-color: #ececf6
	}

	.alert-light .alert-link {
		color: #686868
	}

	.alert-dark {
		color: #1b1e21;
		background-color: #d6d8d9;
		border-color: #c6c8ca
	}

	.alert-dark hr {
		border-top-color: #b9bbbe
	}

	.alert-dark .alert-link {
		color: #040505
	}

	@-webkit-keyframes progress-bar-stripes {
		from {
			background-position: 1rem 0
		}

		to {
			background-position: 0 0
		}
	}

	@keyframes progress-bar-stripes {
		from {
			background-position: 1rem 0
		}

		to {
			background-position: 0 0
		}
	}

	.progress {
		display: -ms-flexbox;
		display: flex;
		height: 1rem;
		overflow: hidden;
		font-size: .75rem;
		background-color: #e9ecef;
		border-radius: .25rem
	}

	.progress-bar {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		-ms-flex-pack: center;
		justify-content: center;
		color: #fff;
		text-align: center;
		white-space: nowrap;
		background-color: #007bff;
		transition: width .6s ease
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.progress-bar {
			transition: none
		}
	}

	.progress-bar-striped {
		background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
		background-size: 1rem 1rem
	}

	.progress-bar-animated {
		-webkit-animation: progress-bar-stripes 1s linear infinite;
		animation: progress-bar-stripes 1s linear infinite
	}

	.media {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: start;
		align-items: flex-start
	}

	.media-body {
		-ms-flex: 1;
		flex: 1
	}

	.list-group {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		padding-left: 0;
		margin-bottom: 0
	}

	.list-group-item-action {
		width: 100%;
		color: #495057;
		text-align: inherit
	}

	.list-group-item-action:focus,
	.list-group-item-action:hover {
		color: #495057;
		text-decoration: none;
		background-color: #f8f9fa
	}

	.list-group-item-action:active {
		color: #212529;
		background-color: #e9ecef
	}

	.list-group-item {
		position: relative;
		display: block;
		padding: .75rem 1.25rem;
		margin-bottom: -1px;
		background-color: #fff;
		border: 1px solid rgba(0, 0, 0, .125)
	}

	.list-group-item:first-child {
		border-top-left-radius: .25rem;
		border-top-right-radius: .25rem
	}

	.list-group-item:last-child {
		margin-bottom: 0;
		border-bottom-right-radius: .25rem;
		border-bottom-left-radius: .25rem
	}

	.list-group-item:focus,
	.list-group-item:hover {
		z-index: 1;
		text-decoration: none
	}

	.list-group-item.disabled,
	.list-group-item:disabled {
		color: #6c757d;
		background-color: #fff
	}

	.list-group-item.active {
		z-index: 2;
		color: #fff;
		background-color: #007bff;
		border-color: #007bff
	}

	.list-group-flush .list-group-item {
		border-right: 0;
		border-left: 0;
		border-radius: 0
	}

	.list-group-flush:first-child .list-group-item:first-child {
		border-top: 0
	}

	.list-group-flush:last-child .list-group-item:last-child {
		border-bottom: 0
	}

	.list-group-item-primary {
		color: #004085;
		background-color: #b8daff
	}

	.list-group-item-primary.list-group-item-action:focus,
	.list-group-item-primary.list-group-item-action:hover {
		color: #004085;
		background-color: #9fcdff
	}

	.list-group-item-primary.list-group-item-action.active {
		color: #fff;
		background-color: #004085;
		border-color: #004085
	}

	.list-group-item-secondary {
		color: #383d41;
		background-color: #d6d8db
	}

	.list-group-item-secondary.list-group-item-action:focus,
	.list-group-item-secondary.list-group-item-action:hover {
		color: #383d41;
		background-color: #c8cbcf
	}

	.list-group-item-secondary.list-group-item-action.active {
		color: #fff;
		background-color: #383d41;
		border-color: #383d41
	}

	.list-group-item-success {
		color: #155724;
		background-color: #c3e6cb
	}

	.list-group-item-success.list-group-item-action:focus,
	.list-group-item-success.list-group-item-action:hover {
		color: #155724;
		background-color: #b1dfbb
	}

	.list-group-item-success.list-group-item-action.active {
		color: #fff;
		background-color: #155724;
		border-color: #155724
	}

	.list-group-item-info {
		color: #0c5460;
		background-color: #bee5eb
	}

	.list-group-item-info.list-group-item-action:focus,
	.list-group-item-info.list-group-item-action:hover {
		color: #0c5460;
		background-color: #abdde5
	}

	.list-group-item-info.list-group-item-action.active {
		color: #fff;
		background-color: #0c5460;
		border-color: #0c5460
	}

	.list-group-item-warning {
		color: #856404;
		background-color: #ffeeba
	}

	.list-group-item-warning.list-group-item-action:focus,
	.list-group-item-warning.list-group-item-action:hover {
		color: #856404;
		background-color: #ffe8a1
	}

	.list-group-item-warning.list-group-item-action.active {
		color: #fff;
		background-color: #856404;
		border-color: #856404
	}

	.list-group-item-danger {
		color: #721c24;
		background-color: #f5c6cb
	}

	.list-group-item-danger.list-group-item-action:focus,
	.list-group-item-danger.list-group-item-action:hover {
		color: #721c24;
		background-color: #f1b0b7
	}

	.list-group-item-danger.list-group-item-action.active {
		color: #fff;
		background-color: #721c24;
		border-color: #721c24
	}

	.list-group-item-light {
		color: #818182;
		background-color: #fdfdfe
	}

	.list-group-item-light.list-group-item-action:focus,
	.list-group-item-light.list-group-item-action:hover {
		color: #818182;
		background-color: #ececf6
	}

	.list-group-item-light.list-group-item-action.active {
		color: #fff;
		background-color: #818182;
		border-color: #818182
	}

	.list-group-item-dark {
		color: #1b1e21;
		background-color: #c6c8ca
	}

	.list-group-item-dark.list-group-item-action:focus,
	.list-group-item-dark.list-group-item-action:hover {
		color: #1b1e21;
		background-color: #b9bbbe
	}

	.list-group-item-dark.list-group-item-action.active {
		color: #fff;
		background-color: #1b1e21;
		border-color: #1b1e21
	}

	.close {
		float: right;
		font-size: 1.5rem;
		font-weight: 700;
		line-height: 1;
		color: #000;
		text-shadow: 0 1px 0 #fff;
		opacity: .5
	}

	.close:focus,
	.close:hover {
		color: #000;
		text-decoration: none;
		opacity: .75
	}

	.close:not(:disabled):not(.disabled) {
		cursor: pointer
	}

	button.close {
		padding: 0;
		background-color: transparent;
		border: 0;
		-webkit-appearance: none
	}

	.modal-open {
		overflow: hidden
	}

	.modal {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1050;
		display: none;
		overflow: hidden;
		outline: 0
	}

	.modal-open .modal {
		overflow-x: hidden;
		overflow-y: auto
	}

	.modal-dialog {
		position: relative;
		width: auto;
		margin: .5rem;
		pointer-events: none
	}

	.modal.fade .modal-dialog {
		transition: -webkit-transform .3s ease-out;
		transition: transform .3s ease-out;
		transition: transform .3s ease-out, -webkit-transform .3s ease-out;
		-webkit-transform: translate(0, -25%);
		transform: translate(0, -25%)
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.modal.fade .modal-dialog {
			transition: none
		}
	}

	.modal.show .modal-dialog {
		-webkit-transform: translate(0, 0);
		transform: translate(0, 0)
	}

	.modal-dialog-centered {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		min-height: calc(100% - (.5rem * 2))
	}

	.modal-content {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		width: 100%;
		pointer-events: auto;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0, 0, 0, .2);
		border-radius: .3rem;
		outline: 0
	}

	.modal-backdrop {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1040;
		background-color: #000
	}

	.modal-backdrop.fade {
		opacity: 0
	}

	.modal-backdrop.show {
		opacity: .5
	}

	.modal-header {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: start;
		align-items: flex-start;
		-ms-flex-pack: justify;
		justify-content: space-between;
		padding: 1rem;
		border-bottom: 1px solid #e9ecef;
		border-top-left-radius: .3rem;
		border-top-right-radius: .3rem
	}

	.modal-header .close {
		padding: 1rem;
		margin: -1rem -1rem -1rem auto
	}

	.modal-title {
		margin-bottom: 0;
		line-height: 1.5
	}

	.modal-body {
		position: relative;
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
		padding: 1rem
	}

	.modal-footer {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		-ms-flex-pack: end;
		justify-content: flex-end;
		padding: 1rem;
		border-top: 1px solid #e9ecef
	}

	.modal-footer>:not(:first-child) {
		margin-left: .25rem
	}

	.modal-footer>:not(:last-child) {
		margin-right: .25rem
	}

	.modal-scrollbar-measure {
		position: absolute;
		top: -9999px;
		width: 50px;
		height: 50px;
		overflow: scroll
	}

	@media (min-width:576px) {
		.modal-dialog {
			max-width: 500px;
			margin: 1.75rem auto
		}

		.modal-dialog-centered {
			min-height: calc(100% - (1.75rem * 2))
		}

		.modal-sm {
			max-width: 300px
		}
	}

	@media (min-width:992px) {
		.modal-lg {
			max-width: 800px
		}
	}

	.tooltip {
		position: absolute;
		z-index: 1070;
		display: block;
		margin: 0;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		font-style: normal;
		font-weight: 400;
		line-height: 1.5;
		text-align: left;
		text-align: start;
		text-decoration: none;
		text-shadow: none;
		text-transform: none;
		letter-spacing: normal;
		word-break: normal;
		word-spacing: normal;
		white-space: normal;
		line-break: auto;
		font-size: .875rem;
		word-wrap: break-word;
		opacity: 0
	}

	.tooltip.show {
		opacity: .9
	}

	.tooltip .arrow {
		position: absolute;
		display: block;
		width: .8rem;
		height: .4rem
	}

	.tooltip .arrow::before {
		position: absolute;
		content: "";
		border-color: transparent;
		border-style: solid
	}

	.bs-tooltip-auto[x-placement^=top],
	.bs-tooltip-top {
		padding: .4rem 0
	}

	.bs-tooltip-auto[x-placement^=top] .arrow,
	.bs-tooltip-top .arrow {
		bottom: 0
	}

	.bs-tooltip-auto[x-placement^=top] .arrow::before,
	.bs-tooltip-top .arrow::before {
		top: 0;
		border-width: .4rem .4rem 0;
		border-top-color: #000
	}

	.bs-tooltip-auto[x-placement^=right],
	.bs-tooltip-right {
		padding: 0 .4rem
	}

	.bs-tooltip-auto[x-placement^=right] .arrow,
	.bs-tooltip-right .arrow {
		left: 0;
		width: .4rem;
		height: .8rem
	}

	.bs-tooltip-auto[x-placement^=right] .arrow::before,
	.bs-tooltip-right .arrow::before {
		right: 0;
		border-width: .4rem .4rem .4rem 0;
		border-right-color: #000
	}

	.bs-tooltip-auto[x-placement^=bottom],
	.bs-tooltip-bottom {
		padding: .4rem 0
	}

	.bs-tooltip-auto[x-placement^=bottom] .arrow,
	.bs-tooltip-bottom .arrow {
		top: 0
	}

	.bs-tooltip-auto[x-placement^=bottom] .arrow::before,
	.bs-tooltip-bottom .arrow::before {
		bottom: 0;
		border-width: 0 .4rem .4rem;
		border-bottom-color: #000
	}

	.bs-tooltip-auto[x-placement^=left],
	.bs-tooltip-left {
		padding: 0 .4rem
	}

	.bs-tooltip-auto[x-placement^=left] .arrow,
	.bs-tooltip-left .arrow {
		right: 0;
		width: .4rem;
		height: .8rem
	}

	.bs-tooltip-auto[x-placement^=left] .arrow::before,
	.bs-tooltip-left .arrow::before {
		left: 0;
		border-width: .4rem 0 .4rem .4rem;
		border-left-color: #000
	}

	.tooltip-inner {
		max-width: 200px;
		padding: .25rem .5rem;
		color: #fff;
		text-align: center;
		background-color: #000;
		border-radius: .25rem
	}

	.popover {
		position: absolute;
		top: 0;
		left: 0;
		z-index: 1060;
		display: block;
		max-width: 276px;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		font-style: normal;
		font-weight: 400;
		line-height: 1.5;
		text-align: left;
		text-align: start;
		text-decoration: none;
		text-shadow: none;
		text-transform: none;
		letter-spacing: normal;
		word-break: normal;
		word-spacing: normal;
		white-space: normal;
		line-break: auto;
		font-size: .875rem;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0, 0, 0, .2);
		border-radius: .3rem
	}

	.popover .arrow {
		position: absolute;
		display: block;
		width: 1rem;
		height: .5rem;
		margin: 0 .3rem
	}

	.popover .arrow::after,
	.popover .arrow::before {
		position: absolute;
		display: block;
		content: "";
		border-color: transparent;
		border-style: solid
	}

	.bs-popover-auto[x-placement^=top],
	.bs-popover-top {
		margin-bottom: .5rem
	}

	.bs-popover-auto[x-placement^=top] .arrow,
	.bs-popover-top .arrow {
		bottom: calc((.5rem + 1px) * -1)
	}

	.bs-popover-auto[x-placement^=top] .arrow::after,
	.bs-popover-auto[x-placement^=top] .arrow::before,
	.bs-popover-top .arrow::after,
	.bs-popover-top .arrow::before {
		border-width: .5rem .5rem 0
	}

	.bs-popover-auto[x-placement^=top] .arrow::before,
	.bs-popover-top .arrow::before {
		bottom: 0;
		border-top-color: rgba(0, 0, 0, .25)
	}

	.bs-popover-auto[x-placement^=top] .arrow::after,
	.bs-popover-top .arrow::after {
		bottom: 1px;
		border-top-color: #fff
	}

	.bs-popover-auto[x-placement^=right],
	.bs-popover-right {
		margin-left: .5rem
	}

	.bs-popover-auto[x-placement^=right] .arrow,
	.bs-popover-right .arrow {
		left: calc((.5rem + 1px) * -1);
		width: .5rem;
		height: 1rem;
		margin: .3rem 0
	}

	.bs-popover-auto[x-placement^=right] .arrow::after,
	.bs-popover-auto[x-placement^=right] .arrow::before,
	.bs-popover-right .arrow::after,
	.bs-popover-right .arrow::before {
		border-width: .5rem .5rem .5rem 0
	}

	.bs-popover-auto[x-placement^=right] .arrow::before,
	.bs-popover-right .arrow::before {
		left: 0;
		border-right-color: rgba(0, 0, 0, .25)
	}

	.bs-popover-auto[x-placement^=right] .arrow::after,
	.bs-popover-right .arrow::after {
		left: 1px;
		border-right-color: #fff
	}

	.bs-popover-auto[x-placement^=bottom],
	.bs-popover-bottom {
		margin-top: .5rem
	}

	.bs-popover-auto[x-placement^=bottom] .arrow,
	.bs-popover-bottom .arrow {
		top: calc((.5rem + 1px) * -1)
	}

	.bs-popover-auto[x-placement^=bottom] .arrow::after,
	.bs-popover-auto[x-placement^=bottom] .arrow::before,
	.bs-popover-bottom .arrow::after,
	.bs-popover-bottom .arrow::before {
		border-width: 0 .5rem .5rem .5rem
	}

	.bs-popover-auto[x-placement^=bottom] .arrow::before,
	.bs-popover-bottom .arrow::before {
		top: 0;
		border-bottom-color: rgba(0, 0, 0, .25)
	}

	.bs-popover-auto[x-placement^=bottom] .arrow::after,
	.bs-popover-bottom .arrow::after {
		top: 1px;
		border-bottom-color: #fff
	}

	.bs-popover-auto[x-placement^=bottom] .popover-header::before,
	.bs-popover-bottom .popover-header::before {
		position: absolute;
		top: 0;
		left: 50%;
		display: block;
		width: 1rem;
		margin-left: -.5rem;
		content: "";
		border-bottom: 1px solid #f7f7f7
	}

	.bs-popover-auto[x-placement^=left],
	.bs-popover-left {
		margin-right: .5rem
	}

	.bs-popover-auto[x-placement^=left] .arrow,
	.bs-popover-left .arrow {
		right: calc((.5rem + 1px) * -1);
		width: .5rem;
		height: 1rem;
		margin: .3rem 0
	}

	.bs-popover-auto[x-placement^=left] .arrow::after,
	.bs-popover-auto[x-placement^=left] .arrow::before,
	.bs-popover-left .arrow::after,
	.bs-popover-left .arrow::before {
		border-width: .5rem 0 .5rem .5rem
	}

	.bs-popover-auto[x-placement^=left] .arrow::before,
	.bs-popover-left .arrow::before {
		right: 0;
		border-left-color: rgba(0, 0, 0, .25)
	}

	.bs-popover-auto[x-placement^=left] .arrow::after,
	.bs-popover-left .arrow::after {
		right: 1px;
		border-left-color: #fff
	}

	.popover-header {
		padding: .5rem .75rem;
		margin-bottom: 0;
		font-size: 1rem;
		color: inherit;
		background-color: #f7f7f7;
		border-bottom: 1px solid #ebebeb;
		border-top-left-radius: calc(.3rem - 1px);
		border-top-right-radius: calc(.3rem - 1px)
	}

	.popover-header:empty {
		display: none
	}

	.popover-body {
		padding: .5rem .75rem;
		color: #212529
	}

	.carousel {
		position: relative
	}

	.carousel-inner {
		position: relative;
		width: 100%;
		overflow: hidden
	}

	.carousel-item {
		position: relative;
		display: none;
		-ms-flex-align: center;
		align-items: center;
		width: 100%;
		transition: -webkit-transform .6s ease;
		transition: transform .6s ease;
		transition: transform .6s ease, -webkit-transform .6s ease;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		-webkit-perspective: 1000px;
		perspective: 1000px
	}

	@media screen and (prefers-reduced-motion:reduce) {
		.carousel-item {
			transition: none
		}
	}

	.carousel-item-next,
	.carousel-item-prev,
	.carousel-item.active {
		display: block
	}

	.carousel-item-next,
	.carousel-item-prev {
		position: absolute;
		top: 0
	}

	.carousel-item-next.carousel-item-left,
	.carousel-item-prev.carousel-item-right {
		-webkit-transform: translateX(0);
		transform: translateX(0)
	}

	@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

		.carousel-item-next.carousel-item-left,
		.carousel-item-prev.carousel-item-right {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.active.carousel-item-right,
	.carousel-item-next {
		-webkit-transform: translateX(100%);
		transform: translateX(100%)
	}

	@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

		.active.carousel-item-right,
		.carousel-item-next {
			-webkit-transform: translate3d(100%, 0, 0);
			transform: translate3d(100%, 0, 0)
		}
	}

	.active.carousel-item-left,
	.carousel-item-prev {
		-webkit-transform: translateX(-100%);
		transform: translateX(-100%)
	}

	@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

		.active.carousel-item-left,
		.carousel-item-prev {
			-webkit-transform: translate3d(-100%, 0, 0);
			transform: translate3d(-100%, 0, 0)
		}
	}

	.carousel-fade .carousel-item {
		opacity: 0;
		transition-duration: .6s;
		transition-property: opacity
	}

	.carousel-fade .carousel-item-next.carousel-item-left,
	.carousel-fade .carousel-item-prev.carousel-item-right,
	.carousel-fade .carousel-item.active {
		opacity: 1
	}

	.carousel-fade .active.carousel-item-left,
	.carousel-fade .active.carousel-item-right {
		opacity: 0
	}

	.carousel-fade .active.carousel-item-left,
	.carousel-fade .active.carousel-item-prev,
	.carousel-fade .carousel-item-next,
	.carousel-fade .carousel-item-prev,
	.carousel-fade .carousel-item.active {
		-webkit-transform: translateX(0);
		transform: translateX(0)
	}

	@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

		.carousel-fade .active.carousel-item-left,
		.carousel-fade .active.carousel-item-prev,
		.carousel-fade .carousel-item-next,
		.carousel-fade .carousel-item-prev,
		.carousel-fade .carousel-item.active {
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}
	}

	.carousel-control-next,
	.carousel-control-prev {
		position: absolute;
		top: 0;
		bottom: 0;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		-ms-flex-pack: center;
		justify-content: center;
		width: 15%;
		color: #fff;
		text-align: center;
		opacity: .5
	}

	.carousel-control-next:focus,
	.carousel-control-next:hover,
	.carousel-control-prev:focus,
	.carousel-control-prev:hover {
		color: #fff;
		text-decoration: none;
		outline: 0;
		opacity: .9
	}

	.carousel-control-prev {
		left: 0
	}

	.carousel-control-next {
		right: 0
	}

	.carousel-control-next-icon,
	.carousel-control-prev-icon {
		display: inline-block;
		width: 20px;
		height: 20px;
		background: transparent no-repeat center center;
		background-size: 100% 100%
	}

	.carousel-control-prev-icon {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
	}

	.carousel-control-next-icon {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
	}

	.carousel-indicators {
		position: absolute;
		right: 0;
		bottom: 10px;
		left: 0;
		z-index: 15;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-pack: center;
		justify-content: center;
		padding-left: 0;
		margin-right: 15%;
		margin-left: 15%;
		list-style: none
	}

	.carousel-indicators li {
		position: relative;
		-ms-flex: 0 1 auto;
		flex: 0 1 auto;
		width: 30px;
		height: 3px;
		margin-right: 3px;
		margin-left: 3px;
		text-indent: -999px;
		cursor: pointer;
		background-color: rgba(255, 255, 255, .5)
	}

	.carousel-indicators li::before {
		position: absolute;
		top: -10px;
		left: 0;
		display: inline-block;
		width: 100%;
		height: 10px;
		content: ""
	}

	.carousel-indicators li::after {
		position: absolute;
		bottom: -10px;
		left: 0;
		display: inline-block;
		width: 100%;
		height: 10px;
		content: ""
	}

	.carousel-indicators .active {
		background-color: #fff
	}

	.carousel-caption {
		position: absolute;
		right: 15%;
		bottom: 20px;
		left: 15%;
		z-index: 10;
		padding-top: 20px;
		padding-bottom: 20px;
		color: #fff;
		text-align: center
	}

	.align-baseline {
		vertical-align: baseline !important
	}

	.align-top {
		vertical-align: top !important
	}

	.align-middle {
		vertical-align: middle !important
	}

	.align-bottom {
		vertical-align: bottom !important
	}

	.align-text-bottom {
		vertical-align: text-bottom !important
	}

	.align-text-top {
		vertical-align: text-top !important
	}

	.bg-primary {
		background-color: #007bff !important
	}

	a.bg-primary:focus,
	a.bg-primary:hover,
	button.bg-primary:focus,
	button.bg-primary:hover {
		background-color: #0062cc !important
	}

	.bg-secondary {
		background-color: #6c757d !important
	}

	a.bg-secondary:focus,
	a.bg-secondary:hover,
	button.bg-secondary:focus,
	button.bg-secondary:hover {
		background-color: #545b62 !important
	}

	.bg-success {
		background-color: #28a745 !important
	}

	a.bg-success:focus,
	a.bg-success:hover,
	button.bg-success:focus,
	button.bg-success:hover {
		background-color: #1e7e34 !important
	}

	.bg-info {
		background-color: #17a2b8 !important
	}

	a.bg-info:focus,
	a.bg-info:hover,
	button.bg-info:focus,
	button.bg-info:hover {
		background-color: #117a8b !important
	}

	.bg-warning {
		background-color: #ffc107 !important
	}

	a.bg-warning:focus,
	a.bg-warning:hover,
	button.bg-warning:focus,
	button.bg-warning:hover {
		background-color: #d39e00 !important
	}

	.bg-danger {
		background-color: #dc3545 !important
	}

	a.bg-danger:focus,
	a.bg-danger:hover,
	button.bg-danger:focus,
	button.bg-danger:hover {
		background-color: #bd2130 !important
	}

	.bg-light {
		background-color: #f8f9fa !important
	}

	a.bg-light:focus,
	a.bg-light:hover,
	button.bg-light:focus,
	button.bg-light:hover {
		background-color: #dae0e5 !important
	}

	.bg-dark {
		background-color: #343a40 !important
	}

	a.bg-dark:focus,
	a.bg-dark:hover,
	button.bg-dark:focus,
	button.bg-dark:hover {
		background-color: #1d2124 !important
	}

	.bg-white {
		background-color: #fff !important
	}

	.bg-transparent {
		background-color: transparent !important
	}

	.border {
		border: 1px solid #dee2e6 !important
	}

	.border-top {
		border-top: 1px solid #dee2e6 !important
	}

	.border-right {
		border-right: 1px solid #dee2e6 !important
	}

	.border-bottom {
		border-bottom: 1px solid #dee2e6 !important
	}

	.border-left {
		border-left: 1px solid #dee2e6 !important
	}

	.border-0 {
		border: 0 !important
	}

	.border-top-0 {
		border-top: 0 !important
	}

	.border-right-0 {
		border-right: 0 !important
	}

	.border-bottom-0 {
		border-bottom: 0 !important
	}

	.border-left-0 {
		border-left: 0 !important
	}

	.border-primary {
		border-color: #007bff !important
	}

	.border-secondary {
		border-color: #6c757d !important
	}

	.border-success {
		border-color: #28a745 !important
	}

	.border-info {
		border-color: #17a2b8 !important
	}

	.border-warning {
		border-color: #ffc107 !important
	}

	.border-danger {
		border-color: #dc3545 !important
	}

	.border-light {
		border-color: #f8f9fa !important
	}

	.border-dark {
		border-color: #343a40 !important
	}

	.border-white {
		border-color: #fff !important
	}

	.rounded {
		border-radius: .25rem !important
	}

	.rounded-top {
		border-top-left-radius: .25rem !important;
		border-top-right-radius: .25rem !important
	}

	.rounded-right {
		border-top-right-radius: .25rem !important;
		border-bottom-right-radius: .25rem !important
	}

	.rounded-bottom {
		border-bottom-right-radius: .25rem !important;
		border-bottom-left-radius: .25rem !important
	}

	.rounded-left {
		border-top-left-radius: .25rem !important;
		border-bottom-left-radius: .25rem !important
	}

	.rounded-circle {
		border-radius: 50% !important
	}

	.rounded-0 {
		border-radius: 0 !important
	}

	.clearfix::after {
		display: block;
		clear: both;
		content: ""
	}

	.d-none {
		display: none !important
	}

	.d-inline {
		display: inline !important
	}

	.d-inline-block {
		display: inline-block !important
	}

	.d-block {
		display: block !important
	}

	.d-table {
		display: table !important
	}

	.d-table-row {
		display: table-row !important
	}

	.d-table-cell {
		display: table-cell !important
	}

	.d-flex {
		display: -ms-flexbox !important;
		display: flex !important
	}

	.d-inline-flex {
		display: -ms-inline-flexbox !important;
		display: inline-flex !important
	}

	@media (min-width:576px) {
		.d-sm-none {
			display: none !important
		}

		.d-sm-inline {
			display: inline !important
		}

		.d-sm-inline-block {
			display: inline-block !important
		}

		.d-sm-block {
			display: block !important
		}

		.d-sm-table {
			display: table !important
		}

		.d-sm-table-row {
			display: table-row !important
		}

		.d-sm-table-cell {
			display: table-cell !important
		}

		.d-sm-flex {
			display: -ms-flexbox !important;
			display: flex !important
		}

		.d-sm-inline-flex {
			display: -ms-inline-flexbox !important;
			display: inline-flex !important
		}
	}

	@media (min-width:768px) {
		.d-md-none {
			display: none !important
		}

		.d-md-inline {
			display: inline !important
		}

		.d-md-inline-block {
			display: inline-block !important
		}

		.d-md-block {
			display: block !important
		}

		.d-md-table {
			display: table !important
		}

		.d-md-table-row {
			display: table-row !important
		}

		.d-md-table-cell {
			display: table-cell !important
		}

		.d-md-flex {
			display: -ms-flexbox !important;
			display: flex !important
		}

		.d-md-inline-flex {
			display: -ms-inline-flexbox !important;
			display: inline-flex !important
		}
	}

	@media (min-width:992px) {
		.d-lg-none {
			display: none !important
		}

		.d-lg-inline {
			display: inline !important
		}

		.d-lg-inline-block {
			display: inline-block !important
		}

		.d-lg-block {
			display: block !important
		}

		.d-lg-table {
			display: table !important
		}

		.d-lg-table-row {
			display: table-row !important
		}

		.d-lg-table-cell {
			display: table-cell !important
		}

		.d-lg-flex {
			display: -ms-flexbox !important;
			display: flex !important
		}

		.d-lg-inline-flex {
			display: -ms-inline-flexbox !important;
			display: inline-flex !important
		}
	}

	@media (min-width:1200px) {
		.d-xl-none {
			display: none !important
		}

		.d-xl-inline {
			display: inline !important
		}

		.d-xl-inline-block {
			display: inline-block !important
		}

		.d-xl-block {
			display: block !important
		}

		.d-xl-table {
			display: table !important
		}

		.d-xl-table-row {
			display: table-row !important
		}

		.d-xl-table-cell {
			display: table-cell !important
		}

		.d-xl-flex {
			display: -ms-flexbox !important;
			display: flex !important
		}

		.d-xl-inline-flex {
			display: -ms-inline-flexbox !important;
			display: inline-flex !important
		}
	}

	@media print {
		.d-print-none {
			display: none !important
		}

		.d-print-inline {
			display: inline !important
		}

		.d-print-inline-block {
			display: inline-block !important
		}

		.d-print-block {
			display: block !important
		}

		.d-print-table {
			display: table !important
		}

		.d-print-table-row {
			display: table-row !important
		}

		.d-print-table-cell {
			display: table-cell !important
		}

		.d-print-flex {
			display: -ms-flexbox !important;
			display: flex !important
		}

		.d-print-inline-flex {
			display: -ms-inline-flexbox !important;
			display: inline-flex !important
		}
	}

	.embed-responsive {
		position: relative;
		display: block;
		width: 100%;
		padding: 0;
		overflow: hidden
	}

	.embed-responsive::before {
		display: block;
		content: ""
	}

	.embed-responsive .embed-responsive-item,
	.embed-responsive embed,
	.embed-responsive iframe,
	.embed-responsive object,
	.embed-responsive video {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: 0
	}

	.embed-responsive-21by9::before {
		padding-top: 42.857143%
	}

	.embed-responsive-16by9::before {
		padding-top: 56.25%
	}

	.embed-responsive-4by3::before {
		padding-top: 75%
	}

	.embed-responsive-1by1::before {
		padding-top: 100%
	}

	.flex-row {
		-ms-flex-direction: row !important;
		flex-direction: row !important
	}

	.flex-column {
		-ms-flex-direction: column !important;
		flex-direction: column !important
	}

	.flex-row-reverse {
		-ms-flex-direction: row-reverse !important;
		flex-direction: row-reverse !important
	}

	.flex-column-reverse {
		-ms-flex-direction: column-reverse !important;
		flex-direction: column-reverse !important
	}

	.flex-wrap {
		-ms-flex-wrap: wrap !important;
		flex-wrap: wrap !important
	}

	.flex-nowrap {
		-ms-flex-wrap: nowrap !important;
		flex-wrap: nowrap !important
	}

	.flex-wrap-reverse {
		-ms-flex-wrap: wrap-reverse !important;
		flex-wrap: wrap-reverse !important
	}

	.flex-fill {
		-ms-flex: 1 1 auto !important;
		flex: 1 1 auto !important
	}

	.flex-grow-0 {
		-ms-flex-positive: 0 !important;
		flex-grow: 0 !important
	}

	.flex-grow-1 {
		-ms-flex-positive: 1 !important;
		flex-grow: 1 !important
	}

	.flex-shrink-0 {
		-ms-flex-negative: 0 !important;
		flex-shrink: 0 !important
	}

	.flex-shrink-1 {
		-ms-flex-negative: 1 !important;
		flex-shrink: 1 !important
	}

	.justify-content-start {
		-ms-flex-pack: start !important;
		justify-content: flex-start !important
	}

	.justify-content-end {
		-ms-flex-pack: end !important;
		justify-content: flex-end !important
	}

	.justify-content-center {
		-ms-flex-pack: center !important;
		justify-content: center !important
	}

	.justify-content-between {
		-ms-flex-pack: justify !important;
		justify-content: space-between !important
	}

	.justify-content-around {
		-ms-flex-pack: distribute !important;
		justify-content: space-around !important
	}

	.align-items-start {
		-ms-flex-align: start !important;
		align-items: flex-start !important
	}

	.align-items-end {
		-ms-flex-align: end !important;
		align-items: flex-end !important
	}

	.align-items-center {
		-ms-flex-align: center !important;
		align-items: center !important
	}

	.align-items-baseline {
		-ms-flex-align: baseline !important;
		align-items: baseline !important
	}

	.align-items-stretch {
		-ms-flex-align: stretch !important;
		align-items: stretch !important
	}

	.align-content-start {
		-ms-flex-line-pack: start !important;
		align-content: flex-start !important
	}

	.align-content-end {
		-ms-flex-line-pack: end !important;
		align-content: flex-end !important
	}

	.align-content-center {
		-ms-flex-line-pack: center !important;
		align-content: center !important
	}

	.align-content-between {
		-ms-flex-line-pack: justify !important;
		align-content: space-between !important
	}

	.align-content-around {
		-ms-flex-line-pack: distribute !important;
		align-content: space-around !important
	}

	.align-content-stretch {
		-ms-flex-line-pack: stretch !important;
		align-content: stretch !important
	}

	.align-self-auto {
		-ms-flex-item-align: auto !important;
		align-self: auto !important
	}

	.align-self-start {
		-ms-flex-item-align: start !important;
		align-self: flex-start !important
	}

	.align-self-end {
		-ms-flex-item-align: end !important;
		align-self: flex-end !important
	}

	.align-self-center {
		-ms-flex-item-align: center !important;
		align-self: center !important
	}

	.align-self-baseline {
		-ms-flex-item-align: baseline !important;
		align-self: baseline !important
	}

	.align-self-stretch {
		-ms-flex-item-align: stretch !important;
		align-self: stretch !important
	}

	@media (min-width:576px) {
		.flex-sm-row {
			-ms-flex-direction: row !important;
			flex-direction: row !important
		}

		.flex-sm-column {
			-ms-flex-direction: column !important;
			flex-direction: column !important
		}

		.flex-sm-row-reverse {
			-ms-flex-direction: row-reverse !important;
			flex-direction: row-reverse !important
		}

		.flex-sm-column-reverse {
			-ms-flex-direction: column-reverse !important;
			flex-direction: column-reverse !important
		}

		.flex-sm-wrap {
			-ms-flex-wrap: wrap !important;
			flex-wrap: wrap !important
		}

		.flex-sm-nowrap {
			-ms-flex-wrap: nowrap !important;
			flex-wrap: nowrap !important
		}

		.flex-sm-wrap-reverse {
			-ms-flex-wrap: wrap-reverse !important;
			flex-wrap: wrap-reverse !important
		}

		.flex-sm-fill {
			-ms-flex: 1 1 auto !important;
			flex: 1 1 auto !important
		}

		.flex-sm-grow-0 {
			-ms-flex-positive: 0 !important;
			flex-grow: 0 !important
		}

		.flex-sm-grow-1 {
			-ms-flex-positive: 1 !important;
			flex-grow: 1 !important
		}

		.flex-sm-shrink-0 {
			-ms-flex-negative: 0 !important;
			flex-shrink: 0 !important
		}

		.flex-sm-shrink-1 {
			-ms-flex-negative: 1 !important;
			flex-shrink: 1 !important
		}

		.justify-content-sm-start {
			-ms-flex-pack: start !important;
			justify-content: flex-start !important
		}

		.justify-content-sm-end {
			-ms-flex-pack: end !important;
			justify-content: flex-end !important
		}

		.justify-content-sm-center {
			-ms-flex-pack: center !important;
			justify-content: center !important
		}

		.justify-content-sm-between {
			-ms-flex-pack: justify !important;
			justify-content: space-between !important
		}

		.justify-content-sm-around {
			-ms-flex-pack: distribute !important;
			justify-content: space-around !important
		}

		.align-items-sm-start {
			-ms-flex-align: start !important;
			align-items: flex-start !important
		}

		.align-items-sm-end {
			-ms-flex-align: end !important;
			align-items: flex-end !important
		}

		.align-items-sm-center {
			-ms-flex-align: center !important;
			align-items: center !important
		}

		.align-items-sm-baseline {
			-ms-flex-align: baseline !important;
			align-items: baseline !important
		}

		.align-items-sm-stretch {
			-ms-flex-align: stretch !important;
			align-items: stretch !important
		}

		.align-content-sm-start {
			-ms-flex-line-pack: start !important;
			align-content: flex-start !important
		}

		.align-content-sm-end {
			-ms-flex-line-pack: end !important;
			align-content: flex-end !important
		}

		.align-content-sm-center {
			-ms-flex-line-pack: center !important;
			align-content: center !important
		}

		.align-content-sm-between {
			-ms-flex-line-pack: justify !important;
			align-content: space-between !important
		}

		.align-content-sm-around {
			-ms-flex-line-pack: distribute !important;
			align-content: space-around !important
		}

		.align-content-sm-stretch {
			-ms-flex-line-pack: stretch !important;
			align-content: stretch !important
		}

		.align-self-sm-auto {
			-ms-flex-item-align: auto !important;
			align-self: auto !important
		}

		.align-self-sm-start {
			-ms-flex-item-align: start !important;
			align-self: flex-start !important
		}

		.align-self-sm-end {
			-ms-flex-item-align: end !important;
			align-self: flex-end !important
		}

		.align-self-sm-center {
			-ms-flex-item-align: center !important;
			align-self: center !important
		}

		.align-self-sm-baseline {
			-ms-flex-item-align: baseline !important;
			align-self: baseline !important
		}

		.align-self-sm-stretch {
			-ms-flex-item-align: stretch !important;
			align-self: stretch !important
		}
	}

	@media (min-width:768px) {
		.flex-md-row {
			-ms-flex-direction: row !important;
			flex-direction: row !important
		}

		.flex-md-column {
			-ms-flex-direction: column !important;
			flex-direction: column !important
		}

		.flex-md-row-reverse {
			-ms-flex-direction: row-reverse !important;
			flex-direction: row-reverse !important
		}

		.flex-md-column-reverse {
			-ms-flex-direction: column-reverse !important;
			flex-direction: column-reverse !important
		}

		.flex-md-wrap {
			-ms-flex-wrap: wrap !important;
			flex-wrap: wrap !important
		}

		.flex-md-nowrap {
			-ms-flex-wrap: nowrap !important;
			flex-wrap: nowrap !important
		}

		.flex-md-wrap-reverse {
			-ms-flex-wrap: wrap-reverse !important;
			flex-wrap: wrap-reverse !important
		}

		.flex-md-fill {
			-ms-flex: 1 1 auto !important;
			flex: 1 1 auto !important
		}

		.flex-md-grow-0 {
			-ms-flex-positive: 0 !important;
			flex-grow: 0 !important
		}

		.flex-md-grow-1 {
			-ms-flex-positive: 1 !important;
			flex-grow: 1 !important
		}

		.flex-md-shrink-0 {
			-ms-flex-negative: 0 !important;
			flex-shrink: 0 !important
		}

		.flex-md-shrink-1 {
			-ms-flex-negative: 1 !important;
			flex-shrink: 1 !important
		}

		.justify-content-md-start {
			-ms-flex-pack: start !important;
			justify-content: flex-start !important
		}

		.justify-content-md-end {
			-ms-flex-pack: end !important;
			justify-content: flex-end !important
		}

		.justify-content-md-center {
			-ms-flex-pack: center !important;
			justify-content: center !important
		}

		.justify-content-md-between {
			-ms-flex-pack: justify !important;
			justify-content: space-between !important
		}

		.justify-content-md-around {
			-ms-flex-pack: distribute !important;
			justify-content: space-around !important
		}

		.align-items-md-start {
			-ms-flex-align: start !important;
			align-items: flex-start !important
		}

		.align-items-md-end {
			-ms-flex-align: end !important;
			align-items: flex-end !important
		}

		.align-items-md-center {
			-ms-flex-align: center !important;
			align-items: center !important
		}

		.align-items-md-baseline {
			-ms-flex-align: baseline !important;
			align-items: baseline !important
		}

		.align-items-md-stretch {
			-ms-flex-align: stretch !important;
			align-items: stretch !important
		}

		.align-content-md-start {
			-ms-flex-line-pack: start !important;
			align-content: flex-start !important
		}

		.align-content-md-end {
			-ms-flex-line-pack: end !important;
			align-content: flex-end !important
		}

		.align-content-md-center {
			-ms-flex-line-pack: center !important;
			align-content: center !important
		}

		.align-content-md-between {
			-ms-flex-line-pack: justify !important;
			align-content: space-between !important
		}

		.align-content-md-around {
			-ms-flex-line-pack: distribute !important;
			align-content: space-around !important
		}

		.align-content-md-stretch {
			-ms-flex-line-pack: stretch !important;
			align-content: stretch !important
		}

		.align-self-md-auto {
			-ms-flex-item-align: auto !important;
			align-self: auto !important
		}

		.align-self-md-start {
			-ms-flex-item-align: start !important;
			align-self: flex-start !important
		}

		.align-self-md-end {
			-ms-flex-item-align: end !important;
			align-self: flex-end !important
		}

		.align-self-md-center {
			-ms-flex-item-align: center !important;
			align-self: center !important
		}

		.align-self-md-baseline {
			-ms-flex-item-align: baseline !important;
			align-self: baseline !important
		}

		.align-self-md-stretch {
			-ms-flex-item-align: stretch !important;
			align-self: stretch !important
		}
	}

	@media (min-width:992px) {
		.flex-lg-row {
			-ms-flex-direction: row !important;
			flex-direction: row !important
		}

		.flex-lg-column {
			-ms-flex-direction: column !important;
			flex-direction: column !important
		}

		.flex-lg-row-reverse {
			-ms-flex-direction: row-reverse !important;
			flex-direction: row-reverse !important
		}

		.flex-lg-column-reverse {
			-ms-flex-direction: column-reverse !important;
			flex-direction: column-reverse !important
		}

		.flex-lg-wrap {
			-ms-flex-wrap: wrap !important;
			flex-wrap: wrap !important
		}

		.flex-lg-nowrap {
			-ms-flex-wrap: nowrap !important;
			flex-wrap: nowrap !important
		}

		.flex-lg-wrap-reverse {
			-ms-flex-wrap: wrap-reverse !important;
			flex-wrap: wrap-reverse !important
		}

		.flex-lg-fill {
			-ms-flex: 1 1 auto !important;
			flex: 1 1 auto !important
		}

		.flex-lg-grow-0 {
			-ms-flex-positive: 0 !important;
			flex-grow: 0 !important
		}

		.flex-lg-grow-1 {
			-ms-flex-positive: 1 !important;
			flex-grow: 1 !important
		}

		.flex-lg-shrink-0 {
			-ms-flex-negative: 0 !important;
			flex-shrink: 0 !important
		}

		.flex-lg-shrink-1 {
			-ms-flex-negative: 1 !important;
			flex-shrink: 1 !important
		}

		.justify-content-lg-start {
			-ms-flex-pack: start !important;
			justify-content: flex-start !important
		}

		.justify-content-lg-end {
			-ms-flex-pack: end !important;
			justify-content: flex-end !important
		}

		.justify-content-lg-center {
			-ms-flex-pack: center !important;
			justify-content: center !important
		}

		.justify-content-lg-between {
			-ms-flex-pack: justify !important;
			justify-content: space-between !important
		}

		.justify-content-lg-around {
			-ms-flex-pack: distribute !important;
			justify-content: space-around !important
		}

		.align-items-lg-start {
			-ms-flex-align: start !important;
			align-items: flex-start !important
		}

		.align-items-lg-end {
			-ms-flex-align: end !important;
			align-items: flex-end !important
		}

		.align-items-lg-center {
			-ms-flex-align: center !important;
			align-items: center !important
		}

		.align-items-lg-baseline {
			-ms-flex-align: baseline !important;
			align-items: baseline !important
		}

		.align-items-lg-stretch {
			-ms-flex-align: stretch !important;
			align-items: stretch !important
		}

		.align-content-lg-start {
			-ms-flex-line-pack: start !important;
			align-content: flex-start !important
		}

		.align-content-lg-end {
			-ms-flex-line-pack: end !important;
			align-content: flex-end !important
		}

		.align-content-lg-center {
			-ms-flex-line-pack: center !important;
			align-content: center !important
		}

		.align-content-lg-between {
			-ms-flex-line-pack: justify !important;
			align-content: space-between !important
		}

		.align-content-lg-around {
			-ms-flex-line-pack: distribute !important;
			align-content: space-around !important
		}

		.align-content-lg-stretch {
			-ms-flex-line-pack: stretch !important;
			align-content: stretch !important
		}

		.align-self-lg-auto {
			-ms-flex-item-align: auto !important;
			align-self: auto !important
		}

		.align-self-lg-start {
			-ms-flex-item-align: start !important;
			align-self: flex-start !important
		}

		.align-self-lg-end {
			-ms-flex-item-align: end !important;
			align-self: flex-end !important
		}

		.align-self-lg-center {
			-ms-flex-item-align: center !important;
			align-self: center !important
		}

		.align-self-lg-baseline {
			-ms-flex-item-align: baseline !important;
			align-self: baseline !important
		}

		.align-self-lg-stretch {
			-ms-flex-item-align: stretch !important;
			align-self: stretch !important
		}
	}

	@media (min-width:1200px) {
		.flex-xl-row {
			-ms-flex-direction: row !important;
			flex-direction: row !important
		}

		.flex-xl-column {
			-ms-flex-direction: column !important;
			flex-direction: column !important
		}

		.flex-xl-row-reverse {
			-ms-flex-direction: row-reverse !important;
			flex-direction: row-reverse !important
		}

		.flex-xl-column-reverse {
			-ms-flex-direction: column-reverse !important;
			flex-direction: column-reverse !important
		}

		.flex-xl-wrap {
			-ms-flex-wrap: wrap !important;
			flex-wrap: wrap !important
		}

		.flex-xl-nowrap {
			-ms-flex-wrap: nowrap !important;
			flex-wrap: nowrap !important
		}

		.flex-xl-wrap-reverse {
			-ms-flex-wrap: wrap-reverse !important;
			flex-wrap: wrap-reverse !important
		}

		.flex-xl-fill {
			-ms-flex: 1 1 auto !important;
			flex: 1 1 auto !important
		}

		.flex-xl-grow-0 {
			-ms-flex-positive: 0 !important;
			flex-grow: 0 !important
		}

		.flex-xl-grow-1 {
			-ms-flex-positive: 1 !important;
			flex-grow: 1 !important
		}

		.flex-xl-shrink-0 {
			-ms-flex-negative: 0 !important;
			flex-shrink: 0 !important
		}

		.flex-xl-shrink-1 {
			-ms-flex-negative: 1 !important;
			flex-shrink: 1 !important
		}

		.justify-content-xl-start {
			-ms-flex-pack: start !important;
			justify-content: flex-start !important
		}

		.justify-content-xl-end {
			-ms-flex-pack: end !important;
			justify-content: flex-end !important
		}

		.justify-content-xl-center {
			-ms-flex-pack: center !important;
			justify-content: center !important
		}

		.justify-content-xl-between {
			-ms-flex-pack: justify !important;
			justify-content: space-between !important
		}

		.justify-content-xl-around {
			-ms-flex-pack: distribute !important;
			justify-content: space-around !important
		}

		.align-items-xl-start {
			-ms-flex-align: start !important;
			align-items: flex-start !important
		}

		.align-items-xl-end {
			-ms-flex-align: end !important;
			align-items: flex-end !important
		}

		.align-items-xl-center {
			-ms-flex-align: center !important;
			align-items: center !important
		}

		.align-items-xl-baseline {
			-ms-flex-align: baseline !important;
			align-items: baseline !important
		}

		.align-items-xl-stretch {
			-ms-flex-align: stretch !important;
			align-items: stretch !important
		}

		.align-content-xl-start {
			-ms-flex-line-pack: start !important;
			align-content: flex-start !important
		}

		.align-content-xl-end {
			-ms-flex-line-pack: end !important;
			align-content: flex-end !important
		}

		.align-content-xl-center {
			-ms-flex-line-pack: center !important;
			align-content: center !important
		}

		.align-content-xl-between {
			-ms-flex-line-pack: justify !important;
			align-content: space-between !important
		}

		.align-content-xl-around {
			-ms-flex-line-pack: distribute !important;
			align-content: space-around !important
		}

		.align-content-xl-stretch {
			-ms-flex-line-pack: stretch !important;
			align-content: stretch !important
		}

		.align-self-xl-auto {
			-ms-flex-item-align: auto !important;
			align-self: auto !important
		}

		.align-self-xl-start {
			-ms-flex-item-align: start !important;
			align-self: flex-start !important
		}

		.align-self-xl-end {
			-ms-flex-item-align: end !important;
			align-self: flex-end !important
		}

		.align-self-xl-center {
			-ms-flex-item-align: center !important;
			align-self: center !important
		}

		.align-self-xl-baseline {
			-ms-flex-item-align: baseline !important;
			align-self: baseline !important
		}

		.align-self-xl-stretch {
			-ms-flex-item-align: stretch !important;
			align-self: stretch !important
		}
	}

	.float-left {
		float: left !important
	}

	.float-right {
		float: right !important
	}

	.float-none {
		float: none !important
	}

	@media (min-width:576px) {
		.float-sm-left {
			float: left !important
		}

		.float-sm-right {
			float: right !important
		}

		.float-sm-none {
			float: none !important
		}
	}

	@media (min-width:768px) {
		.float-md-left {
			float: left !important
		}

		.float-md-right {
			float: right !important
		}

		.float-md-none {
			float: none !important
		}
	}

	@media (min-width:992px) {
		.float-lg-left {
			float: left !important
		}

		.float-lg-right {
			float: right !important
		}

		.float-lg-none {
			float: none !important
		}
	}

	@media (min-width:1200px) {
		.float-xl-left {
			float: left !important
		}

		.float-xl-right {
			float: right !important
		}

		.float-xl-none {
			float: none !important
		}
	}

	.position-static {
		position: static !important
	}

	.position-relative {
		position: relative !important
	}

	.position-absolute {
		position: absolute !important
	}

	.position-fixed {
		position: fixed !important
	}

	.position-sticky {
		position: -webkit-sticky !important;
		position: sticky !important
	}

	.fixed-top {
		position: fixed;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1030
	}

	.fixed-bottom {
		position: fixed;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1030
	}

	@supports ((position:-webkit-sticky) or (position:sticky)) {
		.sticky-top {
			position: -webkit-sticky;
			position: sticky;
			top: 0;
			z-index: 1020
		}
	}

	.sr-only {
		position: absolute;
		width: 1px;
		height: 1px;
		padding: 0;
		overflow: hidden;
		clip: rect(0, 0, 0, 0);
		white-space: nowrap;
		border: 0
	}

	.sr-only-focusable:active,
	.sr-only-focusable:focus {
		position: static;
		width: auto;
		height: auto;
		overflow: visible;
		clip: auto;
		white-space: normal
	}

	.shadow-sm {
		box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
	}

	.shadow {
		box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
	}

	.shadow-lg {
		box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
	}

	.shadow-none {
		box-shadow: none !important
	}

	.w-25 {
		width: 25% !important
	}

	.w-50 {
		width: 50% !important
	}

	.w-75 {
		width: 75% !important
	}

	.w-100 {
		width: 100% !important
	}

	.w-auto {
		width: auto !important
	}

	.h-25 {
		height: 25% !important
	}

	.h-50 {
		height: 50% !important
	}

	.h-75 {
		height: 75% !important
	}

	.h-100 {
		height: 100% !important
	}

	.h-auto {
		height: auto !important
	}

	.mw-100 {
		max-width: 100% !important
	}

	.mh-100 {
		max-height: 100% !important
	}

	.m-0 {
		margin: 0 !important
	}

	.mt-0,
	.my-0 {
		margin-top: 0 !important
	}

	.mr-0,
	.mx-0 {
		margin-right: 0 !important
	}

	.mb-0,
	.my-0 {
		margin-bottom: 0 !important
	}

	.ml-0,
	.mx-0 {
		margin-left: 0 !important
	}

	.m-1 {
		margin: .25rem !important
	}

	.mt-1,
	.my-1 {
		margin-top: .25rem !important
	}

	.mr-1,
	.mx-1 {
		margin-right: .25rem !important
	}

	.mb-1,
	.my-1 {
		margin-bottom: .25rem !important
	}

	.ml-1,
	.mx-1 {
		margin-left: .25rem !important
	}

	.m-2 {
		margin: .5rem !important
	}

	.mt-2,
	.my-2 {
		margin-top: .5rem !important
	}

	.mr-2,
	.mx-2 {
		margin-right: .5rem !important
	}

	.mb-2,
	.my-2 {
		margin-bottom: .5rem !important
	}

	.ml-2,
	.mx-2 {
		margin-left: .5rem !important
	}

	.m-3 {
		margin: 1rem !important
	}

	.mt-3,
	.my-3 {
		margin-top: 1rem !important
	}

	.mr-3,
	.mx-3 {
		margin-right: 1rem !important
	}

	.mb-3,
	.my-3 {
		margin-bottom: 1rem !important
	}

	.ml-3,
	.mx-3 {
		margin-left: 1rem !important
	}

	.m-4 {
		margin: 1.5rem !important
	}

	.mt-4,
	.my-4 {
		margin-top: 1.5rem !important
	}

	.mr-4,
	.mx-4 {
		margin-right: 1.5rem !important
	}

	.mb-4,
	.my-4 {
		margin-bottom: 1.5rem !important
	}

	.ml-4,
	.mx-4 {
		margin-left: 1.5rem !important
	}

	.m-5 {
		margin: 3rem !important
	}

	.mt-5,
	.my-5 {
		margin-top: 3rem !important
	}

	.mr-5,
	.mx-5 {
		margin-right: 3rem !important
	}

	.mb-5,
	.my-5 {
		margin-bottom: 3rem !important
	}

	.ml-5,
	.mx-5 {
		margin-left: 3rem !important
	}

	.p-0 {
		padding: 0 !important
	}

	.pt-0,
	.py-0 {
		padding-top: 0 !important
	}

	.pr-0,
	.px-0 {
		padding-right: 0 !important
	}

	.pb-0,
	.py-0 {
		padding-bottom: 0 !important
	}

	.pl-0,
	.px-0 {
		padding-left: 0 !important
	}

	.p-1 {
		padding: .25rem !important
	}

	.pt-1,
	.py-1 {
		padding-top: .25rem !important
	}

	.pr-1,
	.px-1 {
		padding-right: .25rem !important
	}

	.pb-1,
	.py-1 {
		padding-bottom: .25rem !important
	}

	.pl-1,
	.px-1 {
		padding-left: .25rem !important
	}

	.p-2 {
		padding: .5rem !important
	}

	.pt-2,
	.py-2 {
		padding-top: .5rem !important
	}

	.pr-2,
	.px-2 {
		padding-right: .5rem !important
	}

	.pb-2,
	.py-2 {
		padding-bottom: .5rem !important
	}

	.pl-2,
	.px-2 {
		padding-left: .5rem !important
	}

	.p-3 {
		padding: 1rem !important
	}

	.pt-3,
	.py-3 {
		padding-top: 1rem !important
	}

	.pr-3,
	.px-3 {
		padding-right: 1rem !important
	}

	.pb-3,
	.py-3 {
		padding-bottom: 1rem !important
	}

	.pl-3,
	.px-3 {
		padding-left: 1rem !important
	}

	.p-4 {
		padding: 1.5rem !important
	}

	.pt-4,
	.py-4 {
		padding-top: 1.5rem !important
	}

	.pr-4,
	.px-4 {
		padding-right: 1.5rem !important
	}

	.pb-4,
	.py-4 {
		padding-bottom: 1.5rem !important
	}

	.pl-4,
	.px-4 {
		padding-left: 1.5rem !important
	}

	.p-5 {
		padding: 3rem !important
	}

	.pt-5,
	.py-5 {
		padding-top: 3rem !important
	}

	.pr-5,
	.px-5 {
		padding-right: 3rem !important
	}

	.pb-5,
	.py-5 {
		padding-bottom: 3rem !important
	}

	.pl-5,
	.px-5 {
		padding-left: 3rem !important
	}

	.m-auto {
		margin: auto !important
	}

	.mt-auto,
	.my-auto {
		margin-top: auto !important
	}

	.mr-auto,
	.mx-auto {
		margin-right: auto !important
	}

	.mb-auto,
	.my-auto {
		margin-bottom: auto !important
	}

	.ml-auto,
	.mx-auto {
		margin-left: auto !important
	}

	@media (min-width:576px) {
		.m-sm-0 {
			margin: 0 !important
		}

		.mt-sm-0,
		.my-sm-0 {
			margin-top: 0 !important
		}

		.mr-sm-0,
		.mx-sm-0 {
			margin-right: 0 !important
		}

		.mb-sm-0,
		.my-sm-0 {
			margin-bottom: 0 !important
		}

		.ml-sm-0,
		.mx-sm-0 {
			margin-left: 0 !important
		}

		.m-sm-1 {
			margin: .25rem !important
		}

		.mt-sm-1,
		.my-sm-1 {
			margin-top: .25rem !important
		}

		.mr-sm-1,
		.mx-sm-1 {
			margin-right: .25rem !important
		}

		.mb-sm-1,
		.my-sm-1 {
			margin-bottom: .25rem !important
		}

		.ml-sm-1,
		.mx-sm-1 {
			margin-left: .25rem !important
		}

		.m-sm-2 {
			margin: .5rem !important
		}

		.mt-sm-2,
		.my-sm-2 {
			margin-top: .5rem !important
		}

		.mr-sm-2,
		.mx-sm-2 {
			margin-right: .5rem !important
		}

		.mb-sm-2,
		.my-sm-2 {
			margin-bottom: .5rem !important
		}

		.ml-sm-2,
		.mx-sm-2 {
			margin-left: .5rem !important
		}

		.m-sm-3 {
			margin: 1rem !important
		}

		.mt-sm-3,
		.my-sm-3 {
			margin-top: 1rem !important
		}

		.mr-sm-3,
		.mx-sm-3 {
			margin-right: 1rem !important
		}

		.mb-sm-3,
		.my-sm-3 {
			margin-bottom: 1rem !important
		}

		.ml-sm-3,
		.mx-sm-3 {
			margin-left: 1rem !important
		}

		.m-sm-4 {
			margin: 1.5rem !important
		}

		.mt-sm-4,
		.my-sm-4 {
			margin-top: 1.5rem !important
		}

		.mr-sm-4,
		.mx-sm-4 {
			margin-right: 1.5rem !important
		}

		.mb-sm-4,
		.my-sm-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-sm-4,
		.mx-sm-4 {
			margin-left: 1.5rem !important
		}

		.m-sm-5 {
			margin: 3rem !important
		}

		.mt-sm-5,
		.my-sm-5 {
			margin-top: 3rem !important
		}

		.mr-sm-5,
		.mx-sm-5 {
			margin-right: 3rem !important
		}

		.mb-sm-5,
		.my-sm-5 {
			margin-bottom: 3rem !important
		}

		.ml-sm-5,
		.mx-sm-5 {
			margin-left: 3rem !important
		}

		.p-sm-0 {
			padding: 0 !important
		}

		.pt-sm-0,
		.py-sm-0 {
			padding-top: 0 !important
		}

		.pr-sm-0,
		.px-sm-0 {
			padding-right: 0 !important
		}

		.pb-sm-0,
		.py-sm-0 {
			padding-bottom: 0 !important
		}

		.pl-sm-0,
		.px-sm-0 {
			padding-left: 0 !important
		}

		.p-sm-1 {
			padding: .25rem !important
		}

		.pt-sm-1,
		.py-sm-1 {
			padding-top: .25rem !important
		}

		.pr-sm-1,
		.px-sm-1 {
			padding-right: .25rem !important
		}

		.pb-sm-1,
		.py-sm-1 {
			padding-bottom: .25rem !important
		}

		.pl-sm-1,
		.px-sm-1 {
			padding-left: .25rem !important
		}

		.p-sm-2 {
			padding: .5rem !important
		}

		.pt-sm-2,
		.py-sm-2 {
			padding-top: .5rem !important
		}

		.pr-sm-2,
		.px-sm-2 {
			padding-right: .5rem !important
		}

		.pb-sm-2,
		.py-sm-2 {
			padding-bottom: .5rem !important
		}

		.pl-sm-2,
		.px-sm-2 {
			padding-left: .5rem !important
		}

		.p-sm-3 {
			padding: 1rem !important
		}

		.pt-sm-3,
		.py-sm-3 {
			padding-top: 1rem !important
		}

		.pr-sm-3,
		.px-sm-3 {
			padding-right: 1rem !important
		}

		.pb-sm-3,
		.py-sm-3 {
			padding-bottom: 1rem !important
		}

		.pl-sm-3,
		.px-sm-3 {
			padding-left: 1rem !important
		}

		.p-sm-4 {
			padding: 1.5rem !important
		}

		.pt-sm-4,
		.py-sm-4 {
			padding-top: 1.5rem !important
		}

		.pr-sm-4,
		.px-sm-4 {
			padding-right: 1.5rem !important
		}

		.pb-sm-4,
		.py-sm-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-sm-4,
		.px-sm-4 {
			padding-left: 1.5rem !important
		}

		.p-sm-5 {
			padding: 3rem !important
		}

		.pt-sm-5,
		.py-sm-5 {
			padding-top: 3rem !important
		}

		.pr-sm-5,
		.px-sm-5 {
			padding-right: 3rem !important
		}

		.pb-sm-5,
		.py-sm-5 {
			padding-bottom: 3rem !important
		}

		.pl-sm-5,
		.px-sm-5 {
			padding-left: 3rem !important
		}

		.m-sm-auto {
			margin: auto !important
		}

		.mt-sm-auto,
		.my-sm-auto {
			margin-top: auto !important
		}

		.mr-sm-auto,
		.mx-sm-auto {
			margin-right: auto !important
		}

		.mb-sm-auto,
		.my-sm-auto {
			margin-bottom: auto !important
		}

		.ml-sm-auto,
		.mx-sm-auto {
			margin-left: auto !important
		}
	}

	@media (min-width:768px) {
		.m-md-0 {
			margin: 0 !important
		}

		.mt-md-0,
		.my-md-0 {
			margin-top: 0 !important
		}

		.mr-md-0,
		.mx-md-0 {
			margin-right: 0 !important
		}

		.mb-md-0,
		.my-md-0 {
			margin-bottom: 0 !important
		}

		.ml-md-0,
		.mx-md-0 {
			margin-left: 0 !important
		}

		.m-md-1 {
			margin: .25rem !important
		}

		.mt-md-1,
		.my-md-1 {
			margin-top: .25rem !important
		}

		.mr-md-1,
		.mx-md-1 {
			margin-right: .25rem !important
		}

		.mb-md-1,
		.my-md-1 {
			margin-bottom: .25rem !important
		}

		.ml-md-1,
		.mx-md-1 {
			margin-left: .25rem !important
		}

		.m-md-2 {
			margin: .5rem !important
		}

		.mt-md-2,
		.my-md-2 {
			margin-top: .5rem !important
		}

		.mr-md-2,
		.mx-md-2 {
			margin-right: .5rem !important
		}

		.mb-md-2,
		.my-md-2 {
			margin-bottom: .5rem !important
		}

		.ml-md-2,
		.mx-md-2 {
			margin-left: .5rem !important
		}

		.m-md-3 {
			margin: 1rem !important
		}

		.mt-md-3,
		.my-md-3 {
			margin-top: 1rem !important
		}

		.mr-md-3,
		.mx-md-3 {
			margin-right: 1rem !important
		}

		.mb-md-3,
		.my-md-3 {
			margin-bottom: 1rem !important
		}

		.ml-md-3,
		.mx-md-3 {
			margin-left: 1rem !important
		}

		.m-md-4 {
			margin: 1.5rem !important
		}

		.mt-md-4,
		.my-md-4 {
			margin-top: 1.5rem !important
		}

		.mr-md-4,
		.mx-md-4 {
			margin-right: 1.5rem !important
		}

		.mb-md-4,
		.my-md-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-md-4,
		.mx-md-4 {
			margin-left: 1.5rem !important
		}

		.m-md-5 {
			margin: 3rem !important
		}

		.mt-md-5,
		.my-md-5 {
			margin-top: 3rem !important
		}

		.mr-md-5,
		.mx-md-5 {
			margin-right: 3rem !important
		}

		.mb-md-5,
		.my-md-5 {
			margin-bottom: 3rem !important
		}

		.ml-md-5,
		.mx-md-5 {
			margin-left: 3rem !important
		}

		.p-md-0 {
			padding: 0 !important
		}

		.pt-md-0,
		.py-md-0 {
			padding-top: 0 !important
		}

		.pr-md-0,
		.px-md-0 {
			padding-right: 0 !important
		}

		.pb-md-0,
		.py-md-0 {
			padding-bottom: 0 !important
		}

		.pl-md-0,
		.px-md-0 {
			padding-left: 0 !important
		}

		.p-md-1 {
			padding: .25rem !important
		}

		.pt-md-1,
		.py-md-1 {
			padding-top: .25rem !important
		}

		.pr-md-1,
		.px-md-1 {
			padding-right: .25rem !important
		}

		.pb-md-1,
		.py-md-1 {
			padding-bottom: .25rem !important
		}

		.pl-md-1,
		.px-md-1 {
			padding-left: .25rem !important
		}

		.p-md-2 {
			padding: .5rem !important
		}

		.pt-md-2,
		.py-md-2 {
			padding-top: .5rem !important
		}

		.pr-md-2,
		.px-md-2 {
			padding-right: .5rem !important
		}

		.pb-md-2,
		.py-md-2 {
			padding-bottom: .5rem !important
		}

		.pl-md-2,
		.px-md-2 {
			padding-left: .5rem !important
		}

		.p-md-3 {
			padding: 1rem !important
		}

		.pt-md-3,
		.py-md-3 {
			padding-top: 1rem !important
		}

		.pr-md-3,
		.px-md-3 {
			padding-right: 1rem !important
		}

		.pb-md-3,
		.py-md-3 {
			padding-bottom: 1rem !important
		}

		.pl-md-3,
		.px-md-3 {
			padding-left: 1rem !important
		}

		.p-md-4 {
			padding: 1.5rem !important
		}

		.pt-md-4,
		.py-md-4 {
			padding-top: 1.5rem !important
		}

		.pr-md-4,
		.px-md-4 {
			padding-right: 1.5rem !important
		}

		.pb-md-4,
		.py-md-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-md-4,
		.px-md-4 {
			padding-left: 1.5rem !important
		}

		.p-md-5 {
			padding: 3rem !important
		}

		.pt-md-5,
		.py-md-5 {
			padding-top: 3rem !important
		}

		.pr-md-5,
		.px-md-5 {
			padding-right: 3rem !important
		}

		.pb-md-5,
		.py-md-5 {
			padding-bottom: 3rem !important
		}

		.pl-md-5,
		.px-md-5 {
			padding-left: 3rem !important
		}

		.m-md-auto {
			margin: auto !important
		}

		.mt-md-auto,
		.my-md-auto {
			margin-top: auto !important
		}

		.mr-md-auto,
		.mx-md-auto {
			margin-right: auto !important
		}

		.mb-md-auto,
		.my-md-auto {
			margin-bottom: auto !important
		}

		.ml-md-auto,
		.mx-md-auto {
			margin-left: auto !important
		}
	}

	@media (min-width:992px) {
		.m-lg-0 {
			margin: 0 !important
		}

		.mt-lg-0,
		.my-lg-0 {
			margin-top: 0 !important
		}

		.mr-lg-0,
		.mx-lg-0 {
			margin-right: 0 !important
		}

		.mb-lg-0,
		.my-lg-0 {
			margin-bottom: 0 !important
		}

		.ml-lg-0,
		.mx-lg-0 {
			margin-left: 0 !important
		}

		.m-lg-1 {
			margin: .25rem !important
		}

		.mt-lg-1,
		.my-lg-1 {
			margin-top: .25rem !important
		}

		.mr-lg-1,
		.mx-lg-1 {
			margin-right: .25rem !important
		}

		.mb-lg-1,
		.my-lg-1 {
			margin-bottom: .25rem !important
		}

		.ml-lg-1,
		.mx-lg-1 {
			margin-left: .25rem !important
		}

		.m-lg-2 {
			margin: .5rem !important
		}

		.mt-lg-2,
		.my-lg-2 {
			margin-top: .5rem !important
		}

		.mr-lg-2,
		.mx-lg-2 {
			margin-right: .5rem !important
		}

		.mb-lg-2,
		.my-lg-2 {
			margin-bottom: .5rem !important
		}

		.ml-lg-2,
		.mx-lg-2 {
			margin-left: .5rem !important
		}

		.m-lg-3 {
			margin: 1rem !important
		}

		.mt-lg-3,
		.my-lg-3 {
			margin-top: 1rem !important
		}

		.mr-lg-3,
		.mx-lg-3 {
			margin-right: 1rem !important
		}

		.mb-lg-3,
		.my-lg-3 {
			margin-bottom: 1rem !important
		}

		.ml-lg-3,
		.mx-lg-3 {
			margin-left: 1rem !important
		}

		.m-lg-4 {
			margin: 1.5rem !important
		}

		.mt-lg-4,
		.my-lg-4 {
			margin-top: 1.5rem !important
		}

		.mr-lg-4,
		.mx-lg-4 {
			margin-right: 1.5rem !important
		}

		.mb-lg-4,
		.my-lg-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-lg-4,
		.mx-lg-4 {
			margin-left: 1.5rem !important
		}

		.m-lg-5 {
			margin: 3rem !important
		}

		.mt-lg-5,
		.my-lg-5 {
			margin-top: 3rem !important
		}

		.mr-lg-5,
		.mx-lg-5 {
			margin-right: 3rem !important
		}

		.mb-lg-5,
		.my-lg-5 {
			margin-bottom: 3rem !important
		}

		.ml-lg-5,
		.mx-lg-5 {
			margin-left: 3rem !important
		}

		.p-lg-0 {
			padding: 0 !important
		}

		.pt-lg-0,
		.py-lg-0 {
			padding-top: 0 !important
		}

		.pr-lg-0,
		.px-lg-0 {
			padding-right: 0 !important
		}

		.pb-lg-0,
		.py-lg-0 {
			padding-bottom: 0 !important
		}

		.pl-lg-0,
		.px-lg-0 {
			padding-left: 0 !important
		}

		.p-lg-1 {
			padding: .25rem !important
		}

		.pt-lg-1,
		.py-lg-1 {
			padding-top: .25rem !important
		}

		.pr-lg-1,
		.px-lg-1 {
			padding-right: .25rem !important
		}

		.pb-lg-1,
		.py-lg-1 {
			padding-bottom: .25rem !important
		}

		.pl-lg-1,
		.px-lg-1 {
			padding-left: .25rem !important
		}

		.p-lg-2 {
			padding: .5rem !important
		}

		.pt-lg-2,
		.py-lg-2 {
			padding-top: .5rem !important
		}

		.pr-lg-2,
		.px-lg-2 {
			padding-right: .5rem !important
		}

		.pb-lg-2,
		.py-lg-2 {
			padding-bottom: .5rem !important
		}

		.pl-lg-2,
		.px-lg-2 {
			padding-left: .5rem !important
		}

		.p-lg-3 {
			padding: 1rem !important
		}

		.pt-lg-3,
		.py-lg-3 {
			padding-top: 1rem !important
		}

		.pr-lg-3,
		.px-lg-3 {
			padding-right: 1rem !important
		}

		.pb-lg-3,
		.py-lg-3 {
			padding-bottom: 1rem !important
		}

		.pl-lg-3,
		.px-lg-3 {
			padding-left: 1rem !important
		}

		.p-lg-4 {
			padding: 1.5rem !important
		}

		.pt-lg-4,
		.py-lg-4 {
			padding-top: 1.5rem !important
		}

		.pr-lg-4,
		.px-lg-4 {
			padding-right: 1.5rem !important
		}

		.pb-lg-4,
		.py-lg-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-lg-4,
		.px-lg-4 {
			padding-left: 1.5rem !important
		}

		.p-lg-5 {
			padding: 3rem !important
		}

		.pt-lg-5,
		.py-lg-5 {
			padding-top: 3rem !important
		}

		.pr-lg-5,
		.px-lg-5 {
			padding-right: 3rem !important
		}

		.pb-lg-5,
		.py-lg-5 {
			padding-bottom: 3rem !important
		}

		.pl-lg-5,
		.px-lg-5 {
			padding-left: 3rem !important
		}

		.m-lg-auto {
			margin: auto !important
		}

		.mt-lg-auto,
		.my-lg-auto {
			margin-top: auto !important
		}

		.mr-lg-auto,
		.mx-lg-auto {
			margin-right: auto !important
		}

		.mb-lg-auto,
		.my-lg-auto {
			margin-bottom: auto !important
		}

		.ml-lg-auto,
		.mx-lg-auto {
			margin-left: auto !important
		}
	}

	@media (min-width:1200px) {
		.m-xl-0 {
			margin: 0 !important
		}

		.mt-xl-0,
		.my-xl-0 {
			margin-top: 0 !important
		}

		.mr-xl-0,
		.mx-xl-0 {
			margin-right: 0 !important
		}

		.mb-xl-0,
		.my-xl-0 {
			margin-bottom: 0 !important
		}

		.ml-xl-0,
		.mx-xl-0 {
			margin-left: 0 !important
		}

		.m-xl-1 {
			margin: .25rem !important
		}

		.mt-xl-1,
		.my-xl-1 {
			margin-top: .25rem !important
		}

		.mr-xl-1,
		.mx-xl-1 {
			margin-right: .25rem !important
		}

		.mb-xl-1,
		.my-xl-1 {
			margin-bottom: .25rem !important
		}

		.ml-xl-1,
		.mx-xl-1 {
			margin-left: .25rem !important
		}

		.m-xl-2 {
			margin: .5rem !important
		}

		.mt-xl-2,
		.my-xl-2 {
			margin-top: .5rem !important
		}

		.mr-xl-2,
		.mx-xl-2 {
			margin-right: .5rem !important
		}

		.mb-xl-2,
		.my-xl-2 {
			margin-bottom: .5rem !important
		}

		.ml-xl-2,
		.mx-xl-2 {
			margin-left: .5rem !important
		}

		.m-xl-3 {
			margin: 1rem !important
		}

		.mt-xl-3,
		.my-xl-3 {
			margin-top: 1rem !important
		}

		.mr-xl-3,
		.mx-xl-3 {
			margin-right: 1rem !important
		}

		.mb-xl-3,
		.my-xl-3 {
			margin-bottom: 1rem !important
		}

		.ml-xl-3,
		.mx-xl-3 {
			margin-left: 1rem !important
		}

		.m-xl-4 {
			margin: 1.5rem !important
		}

		.mt-xl-4,
		.my-xl-4 {
			margin-top: 1.5rem !important
		}

		.mr-xl-4,
		.mx-xl-4 {
			margin-right: 1.5rem !important
		}

		.mb-xl-4,
		.my-xl-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-xl-4,
		.mx-xl-4 {
			margin-left: 1.5rem !important
		}

		.m-xl-5 {
			margin: 3rem !important
		}

		.mt-xl-5,
		.my-xl-5 {
			margin-top: 3rem !important
		}

		.mr-xl-5,
		.mx-xl-5 {
			margin-right: 3rem !important
		}

		.mb-xl-5,
		.my-xl-5 {
			margin-bottom: 3rem !important
		}

		.ml-xl-5,
		.mx-xl-5 {
			margin-left: 3rem !important
		}

		.p-xl-0 {
			padding: 0 !important
		}

		.pt-xl-0,
		.py-xl-0 {
			padding-top: 0 !important
		}

		.pr-xl-0,
		.px-xl-0 {
			padding-right: 0 !important
		}

		.pb-xl-0,
		.py-xl-0 {
			padding-bottom: 0 !important
		}

		.pl-xl-0,
		.px-xl-0 {
			padding-left: 0 !important
		}

		.p-xl-1 {
			padding: .25rem !important
		}

		.pt-xl-1,
		.py-xl-1 {
			padding-top: .25rem !important
		}

		.pr-xl-1,
		.px-xl-1 {
			padding-right: .25rem !important
		}

		.pb-xl-1,
		.py-xl-1 {
			padding-bottom: .25rem !important
		}

		.pl-xl-1,
		.px-xl-1 {
			padding-left: .25rem !important
		}

		.p-xl-2 {
			padding: .5rem !important
		}

		.pt-xl-2,
		.py-xl-2 {
			padding-top: .5rem !important
		}

		.pr-xl-2,
		.px-xl-2 {
			padding-right: .5rem !important
		}

		.pb-xl-2,
		.py-xl-2 {
			padding-bottom: .5rem !important
		}

		.pl-xl-2,
		.px-xl-2 {
			padding-left: .5rem !important
		}

		.p-xl-3 {
			padding: 1rem !important
		}

		.pt-xl-3,
		.py-xl-3 {
			padding-top: 1rem !important
		}

		.pr-xl-3,
		.px-xl-3 {
			padding-right: 1rem !important
		}

		.pb-xl-3,
		.py-xl-3 {
			padding-bottom: 1rem !important
		}

		.pl-xl-3,
		.px-xl-3 {
			padding-left: 1rem !important
		}

		.p-xl-4 {
			padding: 1.5rem !important
		}

		.pt-xl-4,
		.py-xl-4 {
			padding-top: 1.5rem !important
		}

		.pr-xl-4,
		.px-xl-4 {
			padding-right: 1.5rem !important
		}

		.pb-xl-4,
		.py-xl-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-xl-4,
		.px-xl-4 {
			padding-left: 1.5rem !important
		}

		.p-xl-5 {
			padding: 3rem !important
		}

		.pt-xl-5,
		.py-xl-5 {
			padding-top: 3rem !important
		}

		.pr-xl-5,
		.px-xl-5 {
			padding-right: 3rem !important
		}

		.pb-xl-5,
		.py-xl-5 {
			padding-bottom: 3rem !important
		}

		.pl-xl-5,
		.px-xl-5 {
			padding-left: 3rem !important
		}

		.m-xl-auto {
			margin: auto !important
		}

		.mt-xl-auto,
		.my-xl-auto {
			margin-top: auto !important
		}

		.mr-xl-auto,
		.mx-xl-auto {
			margin-right: auto !important
		}

		.mb-xl-auto,
		.my-xl-auto {
			margin-bottom: auto !important
		}

		.ml-xl-auto,
		.mx-xl-auto {
			margin-left: auto !important
		}
	}

	.text-monospace {
		font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
	}

	.text-justify {
		text-align: justify !important
	}

	.text-nowrap {
		white-space: nowrap !important
	}

	.text-truncate {
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap
	}

	.text-left {
		text-align: left !important
	}

	.text-right {
		text-align: right !important
	}

	.text-center {
		text-align: center !important
	}

	@media (min-width:576px) {
		.text-sm-left {
			text-align: left !important
		}

		.text-sm-right {
			text-align: right !important
		}

		.text-sm-center {
			text-align: center !important
		}
	}

	@media (min-width:768px) {
		.text-md-left {
			text-align: left !important
		}

		.text-md-right {
			text-align: right !important
		}

		.text-md-center {
			text-align: center !important
		}
	}

	@media (min-width:992px) {
		.text-lg-left {
			text-align: left !important
		}

		.text-lg-right {
			text-align: right !important
		}

		.text-lg-center {
			text-align: center !important
		}
	}

	@media (min-width:1200px) {
		.text-xl-left {
			text-align: left !important
		}

		.text-xl-right {
			text-align: right !important
		}

		.text-xl-center {
			text-align: center !important
		}
	}

	.owl-carousel,
	.owl-carousel .owl-item {
		-webkit-tap-highlight-color: transparent;
		position: relative
	}

	.owl-carousel {
		display: none;
		width: 100%;
		z-index: 1
	}

	.owl-carousel .owl-stage {
		position: relative;
		-ms-touch-action: pan-Y;
		touch-action: manipulation;
		-moz-backface-visibility: hidden
	}

	.owl-carousel .owl-stage:after {
		content: ".";
		display: block;
		clear: both;
		visibility: hidden;
		line-height: 0;
		height: 0
	}

	.owl-carousel .owl-stage-outer {
		position: relative;
		overflow: hidden;
		-webkit-transform: translate3d(0, 0, 0)
	}

	.owl-carousel .owl-item,
	.owl-carousel .owl-wrapper {
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		-ms-transform: translate3d(0, 0, 0)
	}

	.owl-carousel .owl-item {
		min-height: 1px;
		float: left;
		-webkit-backface-visibility: hidden;
		-webkit-touch-callout: none
	}

	.owl-carousel .owl-item img {
		display: block;
		width: 100%
	}

	.owl-carousel .owl-dots.disabled,
	.owl-carousel .owl-nav.disabled {
		display: none
	}

	.no-js .owl-carousel,
	.owl-carousel.owl-loaded {
		display: block
	}

	.owl-carousel .owl-dot,
	.owl-carousel .owl-nav .owl-next,
	.owl-carousel .owl-nav .owl-prev {
		cursor: pointer;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none
	}

	.owl-carousel .owl-nav button.owl-next,
	.owl-carousel .owl-nav button.owl-prev,
	.owl-carousel button.owl-dot {
		background: 0 0;
		color: inherit;
		border: none;
		padding: 0 !important;
		font: inherit
	}

	.owl-carousel.owl-loading {
		opacity: 0;
		display: block
	}

	.owl-carousel.owl-hidden {
		opacity: 0
	}

	.owl-carousel.owl-refresh .owl-item {
		visibility: hidden
	}

	.owl-carousel.owl-drag .owl-item {
		-ms-touch-action: pan-y;
		touch-action: pan-y;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none
	}

	.owl-carousel.owl-grab {
		cursor: move;
		cursor: grab
	}

	.owl-carousel.owl-rtl {
		direction: rtl
	}

	.owl-carousel.owl-rtl .owl-item {
		float: right
	}

	.owl-carousel .animated {
		animation-duration: 1s;
		animation-fill-mode: both
	}

	.owl-carousel .owl-animated-in {
		z-index: 0
	}

	.owl-carousel .owl-animated-out {
		z-index: 1
	}

	.owl-carousel .fadeOut {
		animation-name: fadeOut
	}

	@keyframes fadeOut {
		0% {
			opacity: 1
		}

		100% {
			opacity: 0
		}
	}

	.owl-height {
		transition: height .5s ease-in-out
	}

	.owl-carousel .owl-item .owl-lazy {
		opacity: 0;
		transition: opacity .4s ease
	}

	.owl-carousel .owl-item .owl-lazy:not([src]),
	.owl-carousel .owl-item .owl-lazy[src^=""] {
		max-height: 0
	}

	.owl-carousel .owl-item img.owl-lazy {
		transform-style: preserve-3d
	}

	.owl-carousel .owl-video-wrapper {
		position: relative;
		height: 100%;
		background: #000
	}

	.owl-carousel .owl-video-play-icon {
		position: absolute;
		height: 80px;
		width: 80px;
		left: 50%;
		top: 50%;
		margin-left: -40px;
		margin-top: -40px;
		background: url(../images/owl.video.play.png) no-repeat;
		cursor: pointer;
		z-index: 1;
		-webkit-backface-visibility: hidden;
		transition: transform .1s ease
	}

	.owl-carousel .owl-video-play-icon:hover {
		-ms-transform: scale(1.3, 1.3);
		transform: scale(1.3, 1.3)
	}

	.owl-carousel .owl-video-playing .owl-video-play-icon,
	.owl-carousel .owl-video-playing .owl-video-tn {
		display: none
	}

	.owl-carousel .owl-video-tn {
		opacity: 0;
		height: 100%;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: contain;
		transition: opacity .4s ease
	}

	.owl-carousel .owl-video-frame {
		position: relative;
		z-index: 1;
		height: 100%;
		width: 100%
	}

	.owl-theme .owl-dots,
	.owl-theme .owl-nav {
		text-align: center;
		-webkit-tap-highlight-color: transparent
	}

	.owl-theme .owl-nav {
		margin-top: 10px
	}

	.owl-theme .owl-nav [class*=owl-] {
		color: #fff;
		font-size: 14px;
		margin: 5px;
		padding: 4px 7px;
		background: #d6d6d6;
		display: inline-block;
		cursor: pointer;
		border-radius: 3px
	}

	.owl-theme .owl-nav [class*=owl-]:hover {
		background: #869791;
		color: #fff;
		text-decoration: none
	}

	.owl-theme .owl-nav .disabled {
		opacity: .5;
		cursor: default
	}

	.owl-theme .owl-nav.disabled+.owl-dots {
		margin-top: 10px
	}

	.owl-theme .owl-dots .owl-dot {
		display: inline-block;
		zoom: 1
	}

	.owl-theme .owl-dots .owl-dot span {
		width: 10px;
		height: 10px;
		margin: 5px 7px;
		background: #d6d6d6;
		display: block;
		-webkit-backface-visibility: visible;
		transition: opacity .2s ease;
		border-radius: 30px
	}

	.owl-theme .owl-dots .owl-dot.active span,
	.owl-theme .owl-dots .owl-dot:hover span {
		background: #429cd6
	}

	.text-lowercase {
		text-transform: lowercase !important
	}

	.text-uppercase {
		text-transform: uppercase !important
	}

	.text-capitalize {
		text-transform: capitalize !important
	}

	.font-weight-light {
		font-weight: 300 !important
	}

	.font-weight-normal {
		font-weight: 400 !important
	}

	.font-weight-bold {
		font-weight: 700 !important
	}

	.font-italic {
		font-style: italic !important
	}

	.text-white {
		color: #fff !important
	}

	.text-primary {
		color: #007bff !important
	}

	a.text-primary:focus,
	a.text-primary:hover {
		color: #0062cc !important
	}

	.text-secondary {
		color: #6c757d !important
	}

	a.text-secondary:focus,
	a.text-secondary:hover {
		color: #545b62 !important
	}

	.text-success {
		color: #28a745 !important
	}

	a.text-success:focus,
	a.text-success:hover {
		color: #1e7e34 !important
	}

	.text-info {
		color: #17a2b8 !important
	}

	a.text-info:focus,
	a.text-info:hover {
		color: #117a8b !important
	}

	.text-warning {
		color: #ffc107 !important
	}

	a.text-warning:focus,
	a.text-warning:hover {
		color: #d39e00 !important
	}

	.text-danger {
		color: #dc3545 !important
	}

	a.text-danger:focus,
	a.text-danger:hover {
		color: #bd2130 !important
	}

	.text-light {
		color: #f8f9fa !important
	}

	a.text-light:focus,
	a.text-light:hover {
		color: #dae0e5 !important
	}

	.text-dark {
		color: #343a40 !important
	}

	a.text-dark:focus,
	a.text-dark:hover {
		color: #1d2124 !important
	}

	.text-body {
		color: #212529 !important
	}

	.text-muted {
		color: #6c757d !important
	}

	.text-black-50 {
		color: rgba(0, 0, 0, .5) !important
	}

	.text-white-50 {
		color: rgba(255, 255, 255, .5) !important
	}

	.text-hide {
		font: 0/0 a;
		color: transparent;
		text-shadow: none;
		background-color: transparent;
		border: 0
	}

	.visible {
		visibility: visible !important
	}

	.invisible {
		visibility: hidden !important
	}

	@media print {

		*,
		::after,
		::before {
			text-shadow: none !important;
			box-shadow: none !important
		}

		a:not(.btn) {
			text-decoration: underline
		}

		abbr[title]::after {
			content: " ("attr(title) ")"
		}

		pre {
			white-space: pre-wrap !important
		}

		blockquote,
		pre {
			border: 1px solid #adb5bd;
			page-break-inside: avoid
		}

		thead {
			display: table-header-group
		}

		img,
		tr {
			page-break-inside: avoid
		}

		h2,
		h3,
		p {
			orphans: 3;
			widows: 3
		}

		h2,
		h3 {
			page-break-after: avoid
		}

		@page {
			size: a3
		}

		body {
			min-width: 992px !important
		}

		.container {
			min-width: 992px !important
		}

		.navbar {
			display: none
		}

		.badge {
			border: 1px solid #000
		}

		.table {
			border-collapse: collapse !important
		}

		.table td,
		.table th {
			background-color: #fff !important
		}

		.table-bordered td,
		.table-bordered th {
			border: 1px solid #dee2e6 !important
		}

		.table-dark {
			color: inherit
		}

		.table-dark tbody+tbody,
		.table-dark td,
		.table-dark th,
		.table-dark thead th {
			border-color: #dee2e6
		}

		.table .thead-dark th {
			color: inherit;
			border-color: #dee2e6
		}
	}

	/* #region header*/
	.logo img {
		max-height: 60px;
	}

	.flex-direction {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.side-left-inner {
		position: relative;

	}

	.box-side {
		/* display: grid;
		grid-template-columns: 70% 30%; */
	}

	#pac-input {
		height: 100%;
		color: #000;
		border: 1px solid #bdc4cf;
		border-radius: 0px;
		padding-left: 20px;
	}

	.nav-link.text-capitalize {
		padding-left: 0;
		padding-right: 0;
		height: 100%;
		display: flex;
		align-items: center;
		color: rgba(0, 0, 0, 0.7);
	}

	.group-search {
		position: relative;
		height: 40px;
		width: 100%;
	}

	.search-holder {
		height: 100%;
	}

	#get-current-location {
		position: absolute;
		z-index: 9999;
		right: 0px;
		top: 0;
		color: #fff;
		background-size: 100%;
		background: url(../images/bg_orange.svg);
		height: 100%;
		width: 46px;
		display: flex;
		align-items: center;
		justify-content: center;
		overflow: hidden;
	}

	#get-current-location img {
		width: unset;
		height: unset;
		max-width: 100% !important;
		max-height: 100% !important;
	}

	.delete-btn {
		position: absolute;
		right: 50px;
		top: 50%;
		transform: translateY(-50%);
	}

	#header {
		/* border-bottom: 1px solid #e9e9e9; */

	}

	/* #endregion header*/

	.table-weather p {
		font-weight: 600;
		color: #fff;
	}

	.show-detail {
		display: none;
	}

	.btn-orange:hover {
		color: #fff;
	}

	.box-address img {
		max-width: 100%;
		width: 100%;
		border-radius: 20px;
	}

	.box-address {
		position: relative;
		margin-top: 40px;
	}

	.background-city {
		color: #fff;
		height: 100%;
	}

	.background-city .top-city {
		padding: .2rem 2rem;
		color: #fff;
		border: 2px solid #fff;
		border-radius: unset !important;
	}

	.background-city .top-city:hover {
		color: #042148;
		background: #fff !important;
	}

	.box_3_new #news h3 {
		overflow: hidden;
		line-height: 28px;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
	}

	.box_3_new #news h3 a {
		color: #01132c;
		font-size: 17px;
		line-height: 1.0;
	}

	.detail-new {
		margin-top: 10px;
	}

	.box_3_new #news h3 a:hover {
		color: #070076;
	}

	.box_3_new #news img {
		object-fit: cover;
	}

	.box_3_new #news .new-item-1 img {
		height: 210px;
		width: 100%;
		object-fit: cover;
	}

	.box_3_new #news .calendar {
		color: #a5a5a5;
	}

	#moon .table-moon {
		width: 100%;
		max-width: 100%;
		margin-bottom: 1rem;
		background-color: transparent;
		margin: 30px 0;
	}

	#moon .big-moon-status {
		color: #000;
	}

	#moon .table-moon th {
		padding: 10px;
	}

	#moon .table-moon td,
	#moon .table-moon th {
		border: 1px solid #fff;
		padding: 8px;
	}

	.nav-tabs .nav-item a {
		color: rgba(0, 0, 0, 0.6)
	}

	.table-weather .nav-tabs .nav-item a {
		color: #fff;
	}

	.table-weather .nav-tabs .nav-item a:hover {
		color: #000;
		background-color: #fff;
	} 

	.table-weather ul.nav-tabs li.nav-item {
		padding: 0;
		text-align: center;
		margin: 0;
		position: relative;
		border: 1px solid #fff;
	}

	#graph .tab-detail {
		margin: 30px 0;
	}

	#graph .content-chart {
		background: #a5a5a540;
		padding-top: 10px;
		color: #fff;
	}

	#next-24h .item {
		color: #000;
		text-align: center;
		padding: 20px 10px;
		background: #fff;
		border-radius: 20px;
	}

	#next-24h .item p {
		margin-bottom: 5px;
	}

	#next-24h .item img {
		width: 80% !important;
		margin: 5px auto !important;
		border-radius: 100%;
	}

	.nav.nav-tabs.desc-temp {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		border-left: 1px solid rgba(0, 0, 0, 0.3);
	}

	.tabs-2 ul.nav-tabs li.nav-item {
		padding: 0;
		text-align: center;
		margin: 0;
		position: relative;
		border-bottom: 1px solid rgba(0, 0, 0, 0.3);
		border-top: 1px solid rgba(0, 0, 0, 0.3);
		border-right: 1px solid rgba(0, 0, 0, 0.3);
	}

	.tabs-2 .nav-tabs .nav-link.active {
		color: #fff;
		background-color: #F05822;
		position: relative;
		border: none;
	}

	.tabs-2 .nav-tabs .nav-link.active+li.nav-item {
		border: 1px solid #F05822 !important;
	}

	/* .tabs-2 .nav-tabs .nav-link.active::after,
	.table-weather .nav-tabs .nav-link.active::after {
		content: "";
		width: 100%;
		height: 1px;
		background: #F05822;
		position: absolute;
		bottom: 0;
		left: 0;
	} */

	#next-7days .item {
		color: #000;
		text-align: center;
		padding: 10px 0;
		background: #fff;
		border-radius: 20px;
	}

	#next-7days .item img {
		width: 70% !important;
		margin: 10px auto !important;
		border-radius: 100%;

	}

	#moon,
	#graph {
		background: #9b9b9b;
		border-radius: 20px;
	}

	#address-info {
		display: flex;
		font-size: 18px;
		align-items: center;
		margin: 0;
		justify-content: center;
		color: #fff;
		margin-top: 12px;
	}

	#address-info img {
		width: 16px;
		margin: 0 8px;
	}

	#address-info-more1,
	#address-info-more2 {
		display: flex;
		font-size: 18px;
		align-items: center;
		margin: 0;
		justify-content: center;
		color: #fff;
		margin-top: 12px;
	}

	#address-info-more1 img,
	#address-info-more2 img {
		width: 16px;
		margin: 0 8px;
	}

	.address-info-left {
		display: flex;
		font-size: 18px;
		align-items: center;
		margin: 0;
		justify-content: flex-start;
		color: #fff;
		margin-top: 12px;
	}

	.address-info-left img {
		width: 16px;
		margin: 0 8px;
	}

	#currentDate {
		font-size: 22px;
		color: #fff;
		margin-bottom: 0;
		border-bottom: 1px solid #e9e9e9;
		padding-bottom: 30px;
		margin-bottom: 50px;
	}

	#currentTemperature {
		font-size: 80px;
		font-weight: 600;
		color: #fff;
	}

	.side-left-inner .custom-display-weather {
		align-items: center;
		color: #fff;
	}

	.side-left-inner .custom-display-weather:first-child {

		align-items: center;
		margin-bottom: 16px;
		color: #fff;
	}

	.side-left-inner .custom-display-weather img {
		max-width: 100%;
		width: 100%;
		height: unset;
	}

	.main-content {
		/* background: #f6f6f8; */
	}

	.desc-temp .nav-item::after {
		display: none;
	}

	.div-icon {
		width: 80%;
		margin: auto;
	}

	.div-icon img {
		max-width: 100%;
	}

	.grid-item img {
		max-width: 100%;
		width: 100%;
		transition: 0.5s;
	}

	.grid-item {
		cursor: pointer;
	}

	.temp-regions-grid5 {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
		grid-gap: 20px;
		margin-bottom: 20px;
	}

	.temp-regions-grid5 .grid-item:hover img {
		transform: scale(1.1);
		transition: transform .5s;
	}

	.temp-regions-grid5 .grid-item:hover p {
		transform: scale(1.03);
		transition: transform .5s;
	}

	.grid-item p {
		text-align: center;
		margin-top: 15px;
	}

	button:focus {
		outline: none;
	}

	.read-more {
		margin-top: 10px;
		text-decoration: underline;
		text-decoration-color: blue;
	}

	.read-more a {
		color: blue;
	}

	.box-news .new-item {
		display: grid;
		grid-template-columns: 2fr 3fr;
		grid-gap: 20px;
		margin-bottom: 20px;
	}

	.title-box h2 {
		font-size: 24px !important;
	}

	.read-all a {
		margin: 0;
		width: 100%;
		text-transform: uppercase;
	}

	.title-box h2 {
		margin: 0;
	}

	.title-box img {
		margin-right: 10px;
		max-width: 40px;
	}

	.background-city .box-image {
		width: 60%;
		margin: 0 auto 0px;
	}

	.col-6.image {
		margin-top: 20px;
	}

	.col-6.image p {
		margin: 0px;
	}

	.wrapper2>.row.no-gutters {
		transform: translateY(-64px);
	}

	.box-2 {
		background: #fff;
	}

	.tabs-2 {
		padding-top: 15px;
	}

	.box-news {
		padding-top: 20px;
	}

	#today {
		padding: 20px 40px;
	}

	#today table tr {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-gap: 38px;
	}

	#today table tr td {
		display: grid;
		grid-template-columns: 40px auto;
		grid-gap: 15px;
		align-items: center;
	}

	#today table tr td .icon {
		max-width: 75px;
		height: 48px;
	}

	#today table tr td .icon img {
		max-width: 100%;
		max-height: 100%;
		height: unset;
	}

	.read-all {
		margin-bottom: 30px;
	}

	.new-item.new-item-1 {
		margin-bottom: 30px;
	}

	#currentHour {
		color: #fff;
		font-size: 30px;
		margin-bottom: 0;
	}

	.side-left {
		position: relative;
	}

	.background-news {
		background: url(/images/img_header_news.png);
		background-size: cover;
		height: 250px;
	}

	.title-news {
		line-height: 250px;
		color: #fff;
		text-transform: uppercase;
		line-height: 250px;
		font-size: 40px;
	}

	.detail-news a {
		color: #070076;
		font-size: 17px;
		display: block;
	}

	.detail-news a:hover {
		color: #070076;
	}

	.detail-news .meta li {
		color: #a5a5a5;
		margin-bottom: 20px;
	}

	.detail-news h3 {
		overflow: hidden;
		line-height: 28px;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
	}

	.title-most-popular {
		text-transform: uppercase;
		color: #f05822;
		font-size: 22px;
	}

	.single-list h3 {
		overflow: hidden;
		line-height: 22px;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		font-size: 1rem;
		margin-top: 15px;
	}

	.single-list h3 a {
		color: #070076;
	}

	.single-list h3 a:hover {
		color: #070076;
	}

	.template-news .content .single-list img {
		height: auto;
		width: 100%;
	}

	.page-link {
		border: none;
		color: rgba(0, 0, 0, 0.7);
		padding: 7px 14px;
		font-weight: 600;
	}

	.page-item.active .page-link {
		z-index: 3;
		color: #fff;
		background-color: #F05822;
		padding: 7px 14px;
		font-weight: 600;
	}

	.page-link:hover {
		z-index: 2;
		color: #fff;
		text-decoration: none;
		background-color: #F05822;
	}

	.page-link:focus {
		z-index: 2;
		outline: 0;
		box-shadow: 0 0 0 0 #fff;
	}

	.template-news .content .detail-news img {
		height: 240px;
		width: 100%;
		object-fit: cover;
	}

	.template-news .content .detail-news {
		margin-bottom: 40px;
	}

	.title-most-popular img {
		width: 48px;
		margin-right: 10px;
	}

	.background-news {
		background: url(/images/img_header_news.png);
		background-size: cover;
		height: 250px;
		position: relative;
	}

	.text-title {
		color: #fff;
		margin-top: 85px;
	}

	.text-time {
		color: #fff;
	}

	.cat-title {
		text-transform: uppercase;
		color: #f05822;
	}

	.title-most-popular {
		text-transform: uppercase;
		color: #f05822;
	}

	.single-list h3 {
		overflow: hidden;
		line-height: 22px;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		font-size: 1rem;
		margin-top: 15px;
	}

	.img-fluid-most-popular {
		border-radius: 6px;
	}

	.title-detail h1 {
		color: #000;
		margin: 0;
		font-size: 25px;
	}

	.title-detail span {
		color: #000;
		margin-top: 10px;
		display: block;
	}

	.title-articles {
		margin-top: 40px;
	}

	.latest-post-wrap.pt-3 {
		border-bottom: 1px solid #000;
		padding-bottom: 60px;
	}

	.latest-post-area h5 {
		margin-bottom: 15px;
		font-size: 18px;
	}

	.title-most-popular img {
		width: 48px;
		margin-right: 10px;
	}

	.box-tags {
		color: #fff;
	}

	.box-tags label {
		color: #333;
	}

	.box-tags a {
		line-height: 25px;
		margin-left: 20px;
		position: relative;
		padding-left: 10px;
	}

	.list-unstyled {
		padding-left: 0;
		list-style: none
	}

	.list-unstyled li {
		margin-right: 4px;
	}

	.list-unstyled li a i:hover {
		transform: scale(1.1);
	}

	.list-inline li {
		display: inline-block;
		margin-bottom: 10px
	}

	.box_1 .group-search .search-holder .delete-btn img {
		width: 30px
	}

	.social-icons .fa {
		font-size: 16px;
		width: 30px;
		height: 30px;
		line-height: 30px;
		text-align: center;
		color: #FFF;
		color: rgba(255, 255, 255, 0.8);
		-webkit-transition: all .3s ease-in-out;
		-moz-transition: all .3s ease-in-out;
		-ms-transition: all .3s ease-in-out;
		-o-transition: all .3s ease-in-out;
		transition: all .3s ease-in-out
	}

	.social-icons.icon-circle .fa {
		border-radius: 50%
	}

	.social-icons.icon-rounded .fa {
		border-radius: 5px
	}

	.social-icons.icon-flat .fa {
		border-radius: 0
	}

	.social-icons .fa:hover,
	.social-icons .fa:active {
		color: #FFF;
		-webkit-box-shadow: 1px 1px 3px #333;
		-moz-box-shadow: 1px 1px 3px #333;
		box-shadow: 1px 1px 3px #333
	}

	.social-icons.icon-zoom .fa:hover,
	.social-icons.icon-zoom .fa:active {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform: scale(1.1)
	}

	.social-icons.icon-rotate .fa:hover,
	.social-icons.icon-rotate .fa:active {
		-webkit-transform: scale(1.1) rotate(360deg);
		-moz-transform: scale(1.1) rotate(360deg);
		-ms-transform: scale(1.1) rotate(360deg);
		-o-transform: scale(1.1) rotate(360deg);
		transform: scale(1.1) rotate(360deg)
	}

	.social-icons .fa-facebook,
	.social-icons .fa-facebook-square {
		background-color: #3C599F
	}

	.social-icons .fa-flickr {
		background-color: #FF0084
	}

	.social-icons .fa-instagram {
		background-color: #A1755C
	}

	.social-icons .fa-linkedin,
	.social-icons .fa-linkedin-square {
		background-color: #0085AE
	}

	.social-icons .fa-pinterest,
	.social-icons .fa-pinterest-square {
		background-color: #CC2127
	}

	.social-icons .fa-trello {
		background-color: #265A7F
	}

	.social-icons .fa-tumblr,
	.social-icons .fa-tumblr-square {
		background-color: #314E6C
	}

	.social-icons .fa-twitter,
	.social-icons .fa-twitter-square {
		background-color: #32CCFE
	}

	.social-icons .fa-vimeo-square {
		background-color: #229ACC
	}

	.social-icons .fa-xing,
	.social-icons .fa-xing-square {
		background-color: #00555C
	}

	.social-icons .fa-youtube,
	.social-icons .fa-youtube-play,
	.social-icons .fa-youtube-square {
		background-color: #C52F30
	}

	#detail-post .latest-post-wrap ul {
		padding-inline-start: 40px;
		list-style: initial
	}

	#header h1,
	#header h2 {
		font-size: 1rem;
		font-weight: 400;
		line-height: unset;
		margin: 0
	}

	.owl-nav {
		display: none
	}

	.owl-dots {
		padding-bottom: 25px
	}

	.banner-1,
	.banner-2 {
		width: 100%;
		max-height: 150px;
		min-height: 100px
	}

	.image-background {
		width: 100%;
		position: absolute;
		left: 0;
		height: 100%;
		top: 0;
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}

	.tab-detailtab-detail-graph {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-gap: 20px;
		padding: 10px 0;
	}

	.day-in-week {
		text-decoration: underline !important;
	}

	.adsbygoogle {
		margin-bottom: 15px;
		text-align: center
	}

	#detail-articles p {
		margin-bottom: 1rem
	}

	.modal {
		z-index: 9999999
	}

	.word-break {
		word-break: break-word
	}

	.unit_setting {
		font-size: 1.5rem;
		font-weight: 600
	}

	.clearfix::after {
		content: "";
		display: block;
		clear: both;
		height: 0;
		visibility: hidden;
		overflow: hidden
	}

	.banner-ads-fixed {
		background-color: #007bff;
		position: fixed;
		bottom: 0;
		width: 100%;
		padding: 8px;
		color: #fff !important;
		z-index: 9999999
	}

	.banner-ads-fixed .col-left {
		width: 10%;
		float: left
	}

	.banner-ads-fixed .col-center {
		width: 72%;
		float: left;
		padding: 0 2%
	}

	.banner-ads-fixed .col-center .title-app {
		line-height: 1.1;
		font-size: 20px;
		font-weight: 600
	}

	.banner-ads-fixed .col-right {
		width: 18%;
		float: left
	}

	.banner-ads-fixed .col-center i.fa-star {
		color: #ff0
	}

	.banner-ads-fixed .col-right button.btn-light {
		font-weight: 600;
		font-size: 12.5px !important
	}

	.banner-ads-fixed #close {
		position: absolute;
		top: -10px;
		right: 1px;
		cursor: pointer
	}

	.banner-ads-fixed a {
		color: #fff
	}

	ul {
		padding: 0;
		margin: 0;
		list-style: none
	}

	a {
		text-decoration: none !important
	}

	.social img:hover,
	.link-app img:hover,
	.group-search img:hover,
	.img-search img:hover,
	.box_6 img:hover {
		transform: scale(1.05);
		transition: transform .5s;
		cursor: pointer
	}

	#pac-input {
		padding-right: 6rem
	}

	video {
		/* border-radius:24px; */
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.font-weight-500 {
		font-weight: 500
	}

	.alert-error {
		color: red;
		font-size: 14.5px;
		margin-top: 3px
	}

	select {
		outline: none
	}

	.radar-page .detail-radar .height {
		height: 500px
	}

	.radar-page .detail-radar .height iframe {
		height: 500px;
		width: 100%;
		background: #4487A8
	}

	.font-weight-normal {
		font-weight: 400
	}

	.vertical-align-inherit {
		vertical-align: inherit
	}

	.template-faq .title {
		height: 247px
	}

	.template-faq .title-faq {
		font-size: 16px
	}

	.template-faq .image-background {
		position: absolute
	}

	.template-faq .delete-btn {
		position: absolute;
		top: 74px;
		right: 12%
	}

	.template-faq .search-holder {
		width: 90%;
		float: left;
		padding: 95px 0;
		color: #fff;
		text-transform: uppercase;
		margin-right: 4px
	}

	.template-faq .delete-btn {
		cursor: pointer
	}

	.template-faq .delete-btn img {
		position: relative;
		top: -6px
	}

	.template-faq .img-search {
		padding-top: 95px;
		cursor: pointer
	}

	.template-faq .content {
		margin: 30px 0
	}

	.template-detail-hourly-weather .image-background,
	.template-detail-weekly-weather .image-background {
		position: fixed;
	}


	.template-app .image-background,
	.template-about-us .image-background,
	.template-faqs .image-background,
	.template-news .image-background {
		position: absolute;
		z-index: 0
	}

	.image-background img {
		width: 100%;
		height: 227px;
	}

	.btn-detail {
		margin-bottom: 18px
	}

	.btn-done {
		background: #2b2b2b;
		color: #fff;
		font-size: 18px
	}

	.btn-done:hover {
		background: #1d2124
	}

	.btn-primary.toh {
		color: #fff;
		background-color: #f05822;
		border-color: #f05822;
		padding: 8px 35px
	}

	.btn-primary.toh:hover {
		background-color: #f05822;
		border-color: #f05822
	}

	#myLanguageSettings .modal-content,
	#myModalSettings .modal-content {
		color: #fff;
		border: 2px solid #fff
	}

	#myLanguageSettings .modal-body,
	#myModalSettings .modal-body {
		background: #454545;
		padding: 0
	}

	#myLanguageSettings .modal-body .toggle-switch,
	#myModalSettings .modal-body .toggle-switch {
		background: #383838;
		width: 70px;
		float: right;
		border-radius: 6px;
		padding: 4px
	}

	#myLanguageSettings .modal-body .toggle-switch span,
	#myModalSettings .modal-body .toggle-switch span {
		cursor: pointer
	}

	#myLanguageSettings .modal-body .toggle-switch span.active,
	#myModalSettings .modal-body .toggle-switch span.active {
		background: #F05822;
		width: 27px;
		text-align: center;
		border-radius: 6px
	}

	#myLanguageSettings .modal-header,
	#myModalSettings .modal-header {
		background: #2b2b2b;
		border: none
	}

	#myLanguageSettings .modal-header .close,
	#myModalSettings .modal-header .close {
		color: #fff
	}

	#myLanguageSettings .modal-body select,
	#myModalSettings .modal-body select {
		border: none;
		color: #fff;
		padding-right: 25px;
		position: absolute;
		right: 29px;
		background: #454545 url(../images/arrow_dropdown.png) no-repeat;
		background-size: 20px;
		background-position: right 5px;
		-webkit-appearance: none;
		-moz-appearance: none;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px
	}

	#myLanguageSettings .modal-body table,
	#myModalSettings .modal-body table {
		margin-bottom: 0
	}

	#myModalSettings .modal-body table tr td {
		padding: 15px 28px
	}

	#myModalSettings .modal-body table tr td:first-child {
		width: 65%
	}

	#myLanguageSettings .modal-body table tr td {
		padding: 10px 28px
	}

	#myLanguageSettings .modal-body table tr td img,
	#myModalSettings .modal-body table tr td img {
		height: 32px;
		padding-right: 15px
	}

	#myLanguageSettings .modal-body table tr:first-child td,
	#myModalSettings .modal-body table tr:first-child td {
		border-top: none
	}

	#myLanguageSettings .modal-body .toggle-switch span:first-child.active,
	#myModalSettings .modal-body .toggle-switch span:first-child.active {
		float: left
	}

	#myLanguageSettings .modal-body .toggle-switch span:last-child.active,
	#myModalSettings .modal-body .toggle-switch span:last-child.active {
		float: right
	}

	.table-weather table {
		color: #FFF;
		background: unset;
	}

	.table-weather table thead tr p {
		font-weight: 700
	}

	.table-weather table thead tr th {
		width: 33.33%;
		border-bottom: 2px solid #6c757d
	}

	.table-weather table thead tr th .time-hour {
		font-size: 55px
	}

	.table-weather table thead tr th .temperature {
		font-size: 96px;
		line-height: 96px
	}

	.table-weather table thead th {
		border-top: none
	}

	.table-weather .temperature {
		font-size: 150px;
		line-height: 150px;
		font-weight: 700;
	}

	.table-weather .text-summary {
		font-size: 30px;
	}

	.table-weather .time {
		font-size: 30px;
		text-align: center;
	}

	#time-icon-time-info .div-icon {
		height: 165px;
	}

	.table-weather .nav-tabs .nav-link.active {
		color: #000;
		background: #fff;

	}

	.btn-orange {
		background: #f05822;
		margin: 20px 0;
		color: #fff;
	}

	.box_2_new .image img {
		max-width: 100%;
	}

	.template-detail-hourly-weather .temperature-hour {
		margin-top: 16px;
		font-size: 65px;
	}

	.template-detail-hourly-weather .table-weather,
	.template-detail-weekly-weather .detail.table-weather {
		background: #19231a;
	}

	.navbar {
		padding: 20px 0 0;
	}

	.nav-item {
		height: 100%;
		display: flex;
		align-items: center;
		position: relative;
		margin: 0 15px;
	}

	.nav-item.active a,
	.nav-item.active h2 {
		color: #000;
		width: 100%;
	}

	.nav-item.active h2 a {
		color: #fc794b;
	}

	.nav-item a,
	.nav-item h2 {
		width: 100%;
	}

	.nav-item a {
		color: #fff;
		font-weight: 600;
		font-size: 18px;
		padding: 10px 0;
	}

	.nav-item a:hover {
		color: #000;
	}

	.custom-button,
	.custom-dropbox {
		color: #eee;
		border-radius: 8px;
		border: 1px solid #aeaeae;
		margin-left: 5px;
		outline: none;
	}

	.custom-button:visited,
	.custom-button:focus,
	.custom-button:active {
		background-color: #343a40 !important;
		color: #eee
	}

	.custom-dropbox:visited,
	.custom-dropbox:focus,
	.custom-dropbox:active {
		background-color: #343a40 !important;
		color: #eee
	}

	.custom-dropbox option {
		color: #eee
	}

	.box_why_choose_us {
		color: #fff
	}

	.box_4 {
		color: #fff;
		margin-bottom: 50px
	}

	.banner-3 {
		margin-bottom: 15px
	}

	.box_2 {
		color: #fff;
		margin-bottom: 15px
	}

	.box_1.home-page .table-weather .table {
		color: #fff;
		margin-bottom: 15px !important
	}

	.box_1 .group-search .img-search {
		width: 18%;
		float: left
	}

	.box_1 .group-search .img-location {
		text-align: right;
		width: 18%;
		float: left
	}

	.box_1 .group-search .search-holder {
		position: relative;
		width: 64%;
		float: left;
		padding: 0 1%
	}

	.box_1 .group-search img {
		vertical-align: inherit
	}

	.box_1 .group-search {
		width: 100%;
		margin: 10px auto
	}

	.box_1 .group-search .search-holder input[name="search_location"] {
		width: 100%;
		display: inline-block;
		padding: .375rem 2.5rem .375rem .75rem
	}

	.box_1 .group-search .search-holder .delete-btn {
		position: absolute;
		right: 15px;
		top: 5px
	}

	.template-detail-hourly-weather .detail.table-weather.special {
		margin-top: 50px
	}

	.box_2 ul.nav-tabs {
		background: #141729
	}

	.box_2 ul.nav-tabs li.nav-item {
		width: 25%;
		padding: 0;
		border: 2px solid #4b4952;
		border-top: none;
		text-align: center
	}

	.box_2 ul.nav-tabs .nav-link {
		color: #fff;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
		border: none
	}

	.box_2 ul.nav-tabs .nav-link.active {
		background-color: rgba(255, 255, 255, 0.5)
	}

	.box_2 .tab-content {
		background: #141729;
		border: 2px solid #4b4952;
		border-top: none
	}

	.box_2 .tab-content .tab-detail {
		padding-top: 15px
	}

	.box_2 .tab-content #moon .tab-detail img {
		max-width: 100%
	}

	#moon .table-moon img {
		max-width: 100%
	}

	.box_2 .tab-content #moon .tab-detail table {
		margin: 16px 0
	}

	.box_2 .tab-content #moon .tab-detail table tr th:first-child {
		border-left: none
	}

	.box_2 .tab-content #moon .tab-detail table tr th:last-child {
		border-right: none
	}

	.box_2 .tab-content #moon .tab-detail table tr th {
		border-right: 1px solid #fff;
		border-top: none
	}

	.box_2 .tab-content #moon .tab-detail table tr td {
		border-right: 1px solid #fff
	}

	.box_2 .tab-content #moon .tab-detail table tr td:last-child {
		border-right: none
	}

	.box_2 .tab-content .tab-detail .item {
		text-align: center;
		border: 1px solid #4b4952;
		margin-bottom: 20px;
		padding: 10px;
		min-height: 240px
	}

	.box_2 .tab-content .tab-detail .item span {
		display: block
	}

	.box_2 .tab-content .tab-detail .item img {
		width: 60%
	}

	.box_2 ul.nav-tabs li.nav-item:nth-child(2) {
		border-right: none;
		border-left: none
	}

	.box_2 ul.nav-tabs li.nav-item:nth-child(3) {
		border-right: none
	}

	.box_5 {
		color: #fff
	}

	.box_5 .fa-check {
		font-size: 20px;
		padding-right: 5px
	}

	.box_5,
	.box_6 {
		background-color: rgba(18, 7, 9, 1)
	}

	.box_6 .title h3 {
		line-height: .9;
		font-weight: 400
	}

	.box_6 a {
		font-size: 17px
	}

	.box_6,
	.box_6 a {
		color: #fff
	}

	.box_6 .calendar {
		font-style: italic;
		font-size: 14px
	}

	.box_6 .title.first {
		padding-top: 10px
	}

	.box_3,
	.box_5,
	.box_6 {
		padding-bottom: 15px
	}

	.box_3 {
		background: #120709;
		color: #fff
	}

	.box_3 .title-box {
		max-width: 100%;
		text-align: center;
		font-weight: 600;
		font-size: 26px;
		padding: 20px 0 25px
	}

	.box_3 .item img {
		max-width: 100%
	}

	.box_3 .item {
		padding-bottom: 10px;
		cursor: pointer;
		text-align: center
	}

	.box_3 .item:hover img {
		transform: scale(1.1);
		transition: transform .5s
	}

	.box_3 .item:hover div {
		transform: scale(1.03);
		transition: transform .5s
	}

	.box_3 .item .title {
		font-size: 14px;
		padding: 15px 0;
		color: #fff
	}

	.box_4 {
		padding: 70px 0 0;
		margin-bottom: 70px
	}

	#left-radar {
		padding-bottom: 30px
	}

	.box_4 .title-box {
		max-width: 100%;
		text-align: center;
		font-weight: 600;
		font-size: 26px;
		padding: 20px 0 25px
	}

	.box_4 h3 {
		font-size: 18px
	}

	.box_4 img {
		max-width: 100%
	}

	.box_4 a {
		color: #fff
	}

	.box_4 p.desc {
		text-align: justify;
		margin: 0;
		padding: 0
	}

	.box_4 iframe {
		width: 100%
	}

	#next-7days .summary {
		min-height: 48px
	}

	#chart1 .highcharts-data-labels {
		display: none
	}

	#chart1 .highcharts-stack-labels text {
		font-weight: 400 !important;
		font-size: 11px !important
	}

	#chart1 .highcharts-xaxis-labels {
		font-size: 11px !important
	}

	#chart1 .highcharts-yaxis-labels {
		display: none
	}

	#chart1 .highcharts-exporting-group {
		display: none
	}

	#chart1 .highcharts-legend {
		display: none
	}

	#chart2 .highcharts-legend,
	#chart3 .highcharts-legend,
	#chart4 .highcharts-legend,
	#chart5 .highcharts-legend,
	#chart6 .highcharts-legend {
		display: none
	}

	#chart2 .highcharts-label,
	#chart3 .highcharts-label,
	#chart4 .highcharts-label,
	#chart5 .highcharts-label,
	#chart6 .highcharts-label {
		display: none
	}

	#chart2 .highcharts-data-labels,
	#chart3 .highcharts-data-labels,
	#chart4 .highcharts-data-labels,
	#chart5 .highcharts-data-labels,
	#chart6 .highcharts-data-labels {
		display: none
	}

	#chart2 .highcharts-xaxis-labels,
	#chart3 .highcharts-xaxis-labels,
	#chart4 .highcharts-xaxis-labels,
	#chart5 .highcharts-xaxis-labels,
	#chart6 .highcharts-xaxis-labels {
		transform: translate(13px, 0px) scale(0.95, 1)
	}

	.chart-hold {
		padding: 0 !important;
		margin: 0 !important
	}

	#chart2 .highcharts-exporting-group,
	#chart3 .highcharts-exporting-group,
	#chart4 .highcharts-exporting-group,
	#chart5 .highcharts-exporting-group,
	#chart6 .highcharts-exporting-group {
		display: none
	}

	#chart2 .highcharts-tracker,
	#chart3 .highcharts-tracker,
	#chart4 .highcharts-tracker,
	#chart5 .highcharts-tracker,
	#chart6 .highcharts-tracker {
		display: none
	}

	#graph .label {
		font-weight: 700;
		margin-bottom: 5px;
		font-size: 12px;
		text-align: center
	}

	.moonphase-img {
		height: 196px;
		margin-top: 30%;
		margin-bottom: 12px
	}

	#moon .current-day {
		background-color: #555
	}

	.box_6 .row.pb-4 {
		padding-bottom: 12px !important
	}

	footer h3 {
		padding-bottom: 12px;
		padding-top: 18px;
		font-size: 22px;
		font-weight: 400
	}

	footer a {
		color: #fff;
		padding: 0 2px
	}

	footer ul {
		list-style: none;
		padding: 0
	}

	footer ul li {
		padding-bottom: 5px
	}

	footer .footer {
		background: #192438;
		color: #fff;
		z-index: 999;
		position: relative;
		padding: 25px 0
	}

	footer .footer ul.social li a i {
		font-size: 25px;
		padding: 0 5px
	}

	footer .footer ul.link-app img {
		max-width: 80%
	}

	footer .copyright {
		background: #fff;
		color: #192438;
		z-index: 999;
		position: relative;
		font-weight: 500;
	}

	footer .copyright .text-final {
		padding: 10px
	}

	.template-app .description-general {
		color: #fff
	}

	.template-app .description-general .content img {
		max-width: 49%
	}

	.template-app .description-general .content {
		padding: 100px 0
	}

	.template-app .description-general .content p.desc {
		padding: 45px 0;
		text-align: center
	}

	.template-app .description-detail {
		padding: 90px 0 50px
	}

	.template-app .description-detail .content h2 {
		padding-bottom: 20px
	}

	.template-app .description-detail img {
		max-width: 100%
	}

	.template-app .description-detail h3 {
		padding: 20px 0
	}

	.template-news .content p.desc {
		text-align: justify
	}

	.template-news .content img {
		max-width: 100%
	}

	.template-about-us .content form .btn-detail {
		padding-top: 30px
	}

	#anywhere .lists {
		padding: 50px 0;
		width: 100%;
		display: grid;
		grid-template-columns: repeat(5, 1fr);
		grid-gap: 20px;
	}

	#anywhere .lists img {
		max-width: 100%
	}

	#anywhere .lists .item .title {
		font-size: 14.5px;
		margin-top: 20px;
		font-weight: 500;
		color: #192438;
	}

	.template-news .title h1,
	.template-about-us .title h1 {
		padding: 83px 0;
		color: #fff;
		text-transform: uppercase;
		font-size: 50px
	}

	.template-about-us .content {
		padding: 15px 0
	}

	.template-about-us .content p.desc {
		padding: 50px 0;
		text-align: justify;
	}

	.template-about-us .content img {
		width: 100%;
		height: 100%;
	}

	.template-about-us .content form .btn-detail {
		padding-top: 30px
	}

	.template-detail-hourly-weather .detail.table-weather {
		padding: 0 50px;
		border: 1px solid #6c757d;
	}

	.template-detail-weekly-weather .detail.table-weather .chance_of_rain img,
	.template-detail-hourly-weather .detail.table-weather .chance_of_rain img {
		height: 25px;
		margin-bottom: 12px
	}

	.table-weather table thead tr th {
		padding: 0
	}

	.template-detail-hourly-weather .detail.table-weather table thead tr th {
		border: none
	}

	.template-detail-hourly-weather .detail.table-weather table thead tr th:first-child {
		width: 50%
	}

	.template-detail-hourly-weather .detail.table-weather table thead tr th:ntn-child(2),
	.template-detail-hourly-weather .detail.table-weather table thead tr th:ntn-child(3) {
		width: 25%
	}

	.template-detail-hourly-weather .detail.table-weather hr {
		border: 1px solid #6c757d
	}

	.template-detail-hourly-weather .detail.table-weather div.percent {
		display: inline-block;
		padding-left: 20px;
		font-size: 30px
	}

	.template-detail-hourly-weather .detail.table-weather .temperature {
		font-size: 80px
	}

	.template-detail-hourly-weather .detail.table-weather thead th {
		vertical-align: inherit
	}

	.template-detail-hourly-weather .content {
		color: #fff;
		padding: 0 0 15px
	}

	.template-detail-hourly-weather .content .time {
		margin-top: 19px
	}

	.template-detail-hourly-weather .content .title {
		border: 1px solid #4b4952;
		background: #19231a
	}

	.template-detail-hourly-weather .content .title .city {
		padding: 20px 0
	}

	.template-detail-hourly-weather .content .title .city span {
		font-size: 20px;
		font-weight: 500;
		display: block;
		margin-bottom: 10px
	}

	.template-detail-hourly-weather .content .title-time .time {
		background: #fff;
		color: #333;
		width: 360px;
		margin: 0 auto;
		position: relative;
		top: -20px;
		padding: 3px 0;
		font-weight: 600;
		font-size: 20px
	}

	.template-detail-hourly-weather .content .title-time .time.final {
		top: -18px
	}

	.template-detail-hourly-weather .detail.table-weather .title-time .time {
		display: inline-block;
		width: 223px
	}

	.template-detail-hourly-weather .summary-text {
		font-size: 18px
	}

	.template-detail-hourly-weather .image-day {
		float: left
	}

	.template-detail-weekly-weather .detail.table-weather {
		padding: 0 50px;
		border: 1px solid #6c757d
	}

	.template-detail-weekly-weather .detail.table-weather table thead tr th {
		border: none
	}

	.template-detail-weekly-weather .detail.table-weather table thead tr th:first-child {
		width: 50%
	}

	.template-detail-weekly-weather .detail.table-weather table thead tr th:ntn-child(2),
	.template-detail-weekly-weather .detail.table-weather table thead tr th:ntn-child(3) {
		width: 25%
	}

	.template-detail-weekly-weather .detail.table-weather hr {
		border: 1px solid #6c757d
	}

	#detail-post img {
		max-width: 100%
	}

	.template-detail-weekly-weather .detail.table-weather div.time {
		display: inline-block;
		width: 223px;
		margin-top: 20px
	}

	.template-detail-weekly-weather .detail.table-weather div.percent {
		display: inline-block;
		padding-left: 20px;
		font-size: 30px
	}

	.template-detail-weekly-weather .detail.table-weather .temperature {
		font-size: 80px
	}

	.template-detail-weekly-weather .detail.table-weather thead th {
		vertical-align: inherit
	}

	.template-detail-weekly-weather .content {
		color: #fff;
		padding: 0 0 15px
	}

	.template-detail-weekly-weather .content .title {
		border: 1px solid #4b4952;
		background: #19231a
	}

	.template-detail-weekly-weather .content .title .city {
		padding: 15px 0
	}

	.template-detail-weekly-weather .content .title .city span {
		font-size: 20px;
		font-weight: 500;
		display: block
	}

	.template-detail-weekly-weather .content .title .time {
		background: #fff;
		color: #333;
		width: 250px;
		margin: 0 auto;
		position: relative;
		top: 14px;
		padding: 3px 0
	}

	.template-detail-weekly-weather .summary-text {
		font-size: 18px
	}

	.template-detail-weekly-weather .image-day {
		float: left
	}

	.language-item {
		width: 200px;
		margin: 0 auto;
		cursor: pointer
	}

	.language-item input {
		width: 15%
	}

	#data-format-setting {
		width: 46%
	}

	.main-menu {
		width: 100%;
		padding: 0;
		z-index: 1000
	}

	.chance_of_rain {
		margin-top: 40px;
		line-height: 55px;
		position: relative
	}

	.chance_of_rain:before {
		content: "";
		position: absolute;
		left: -60px;
		top: 14px;
		height: 50%;
		width: 1px;
		border-left: 1px solid #fff
	}

	.chance_of_rain:after {
		content: "";
		position: absolute;
		right: -40px;
		top: 14px;
		height: 50%;
		width: 1px;
		border-right: 1px solid #fff
	}

	.temperature-day {
		font-size: 36px;
		line-height: 40px
	}

	.temperature-low {
		margin-top: 28px
	}

	.temperature-hour {
		font-size: 30px;
		color: #fff
	}

	.template-detail-weekly-weather .day-in-week {
		font-size: 26px;
		text-decoration: underline;
		cursor: pointer
	}

	.template-detail-hourly-weather .hour-in-day {
		font-size: 28px
	}

	.radar-page .detail-radar .box_1 {
		position: absolute;
		width: 68%;
		z-index: 999
	}

	.radar-page .detail-radar .box_1 #searchbutton {
		cursor: pointer
	}

	.home-page #get-current-location,
	.home-page #searchbutton {
		cursor: pointer
	}

	.box_2 .day-in-week {
		font-size: 16px;
		text-decoration: underline;
		cursor: pointer
	}

	.title-box img {
		margin-right: 10px
	}

	.moon-phase {
		cursor: pointer
	}

	.box_others h2 {
		padding-bottom: 20px;
		text-transform: uppercase
	}

	.box_others img {
		width: 100%
	}

	.box_others .trendding .item {
		position: relative;
		z-index: 0
	}

	.box_others .trendding {
		padding: 0 0 70px
	}

	.box_others .trendding .item .title {
		width: 100%;
		position: absolute;
		bottom: 0;
		left: 0;
		text-align: center
	}

	.box_others .trendding .item .title a {
		display: block;
		background-color: rgba(255, 255, 255, 0.7);
		margin: 0 10px;
		height: 35px;
		line-height: 35px;
		color: #2978a3;
		font-size: 15px
	}

	.box_others .trendding .item .title a:HOVER {
		background-color: #FFF
	}

	.box_others .news .item {
		position: relative;
		z-index: 0
	}

	.box_others .news {
		padding-bottom: 15px
	}

	.box_others .news .item .title {
		width: 100%;
		position: absolute;
		bottom: 0;
		left: 0;
		text-align: center
	}

	.box_others .news .item .title a {
		display: block;
		background-color: rgba(255, 255, 255, 0.7);
		margin: 0 10px;
		height: 35px;
		line-height: 35px;
		overflow: hidden;
		font-size: 15px
	}

	.box_others .news .item .title a:HOVER {
		background-color: #FFF
	}

	.box_others .news .child {
		padding-top: 20px
	}

	.box_others .news .child-detail {
		width: 100%;
		display: block;
		background-color: rgba(255, 255, 255, 0.7);
		padding: 20px 10px;
		overflow: hidden
	}

	.box_others .news .child-detail .left {
		float: left;
		width: 30%;
		padding-right: 2%
	}

	.box_others .news .child-detail .right {
		float: left;
		width: 68%
	}

	.box_others .news .item .title-special {
		width: 100%;
		position: absolute;
		bottom: 0;
		left: 0;
		display: block;
		background-color: rgba(255, 255, 255, 0.7);
		padding: 10px;
		overflow: hidden;
		font-size: 15px
	}

	.box_others .news .item .title-special:HOVER {
		background-color: #FFF
	}

	.template-news .title .head-cate {
		padding: 20px 0 3px;
		font-size: 25px !important;
		text-decoration: underline
	}

	.template-news h2 {
		line-height: 20px
	}

	.template-news .desc {
		font-size: 15px
	}

	.text-title {
		font-size: 20px
	}

	.hourly-summary {
		min-height: 48px
	}

	.address-search-toh {
		position: relative
	}

	.slider-control {
		position: absolute;
		top: 0;
		font-size: 22px;
		cursor: pointer
	}

	#slider-left {
		left: 0;
		background-color: rgba(0, 0, 0, 1);
		padding: 13px;
		z-index: 99
	}

	#slider-right {
		right: 0;
		background-color: rgba(0, 0, 0, 1);
		padding: 13px;
		z-index: 99
	}

	.address-search-toh ul.link {
		background: #192438
	}

	.address-search-toh ul.link li {
		float: left;
		border-right: 1px solid #4b4952;
		border-bottom: 1px solid #4b4952;
		padding: 10px 4px;
		width: calc(20%);
		text-align: center;
		position: relative
	}

	.address-search-toh ul.link li a,
	.address-search-toh ul.link li span.ellipsis {
		color: #fff
	}

	.address-search-toh ul.link li span.ellipsis {
		float: right;
		position: relative;
		top: 3px;
		right: 0;
		width: 15px
	}

	.address-search-toh .ellipsis {
		cursor: pointer
	}

	.address-search-toh .action {
		position: absolute;
		z-index: 99999999999;
		top: 0;
		background: #eee;
		right: 0;
		display: none
	}

	.address-search-toh .theme__menuItem__lyzBJ:hover,
	.address-search-toh .menu__menuItem__2LBTF:hover {
		background: #fff !important
	}

	.address-search-toh .theme__menuItem__lyzBJ {
		cursor: pointer;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		color: #212121;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		font-size: 14px;
		overflow: hidden;
		padding: 12.5px 16px;
		position: relative
	}

	.address-search-toh .icon-summary {
		font-size: 13px
	}

	.address-search-toh .currentTemperature {
		margin-right: 6px;
		font-size: 12px
	}

	.address-search-toh .address {
		margin-right: 0;
		font-size: 12px
	}

	.group-submenu ul.link li a:first-letter {
		text-transform: uppercase
	}

	.group-submenu ul.link li:last-child a {
		border-right: none
	}

	.group-submenu ul.link li.active {
		background-color: rgba(204, 204, 204, .5) !important
	}

	.group-submenu ul.link li.active a {
		border-radius: 8px;
		color: #fff;
		background: #f05822;
	}

	.group-submenu ul.link li a {
		color: #7c7c7c;
		font-weight: 500;
		display: flex;
		align-items: center;
		justify-content: center
	}

	#summary-info {
		position: relative
	}

	#summary-info p {
		font-size: 15px;
		font-weight: 700;
		position: relative;
		top: 5px
	}

	.icon-control {
		width: 50px;
		float: left
	}

	.template-news-detail {
		margin: 0 0 35px
	}

	.template-news-detail h1 {
		font-size: 2em
	}

	.template-news .content p,
	.template-news-detail .content p {
		margin-bottom: 0
	}

	.google-visualization-tooltip {
		background-color: #fff !important;
		border-radius: 4px !important;
		border: 1px solid #fff !important;
		padding: 3px !important;
		margin: 0 !important
	}

	.google-visualization-tooltip-item-list {
		margin: 0 !important;
		padding: 10px !important;
		width: 110% !important
	}

	.google-visualization-tooltip-item {
		margin: 0 !important;
		padding: 0 !important
	}

	.google-visualization-tooltip-item span {
		color: #333 !important;
		width: 100% !important;
		text-align: center !important
	}

	.loading {
		position: fixed;
		z-index: 999;
		height: 2em;
		width: 2em;
		overflow: show;
		margin: auto;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		z-index: 9999999999999
	}

	.loading:before {
		content: '';
		display: block;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.3)
	}

	.loading:not(:required) {
		font: 0/0 a;
		color: transparent;
		text-shadow: none;
		background-color: transparent;
		border: 0
	}

	.loading:not(:required):after {
		content: '';
		display: block;
		font-size: 10px;
		width: 1em;
		height: 1em;
		margin-top: -.5em;
		-webkit-animation: spinner 1500ms infinite linear;
		-moz-animation: spinner 1500ms infinite linear;
		-ms-animation: spinner 1500ms infinite linear;
		-o-animation: spinner 1500ms infinite linear;
		animation: spinner 1500ms infinite linear;
		border-radius: .5em;
		-webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
		box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0
	}

	@-webkit-keyframes spinner {
		0% {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			-ms-transform: rotate(0deg);
			-o-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		100% {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			-o-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@-moz-keyframes spinner {
		0% {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			-ms-transform: rotate(0deg);
			-o-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		100% {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			-o-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@-o-keyframes spinner {
		0% {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			-ms-transform: rotate(0deg);
			-o-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		100% {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			-o-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@keyframes spinner {
		0% {
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			-ms-transform: rotate(0deg);
			-o-transform: rotate(0deg);
			transform: rotate(0deg)
		}

		100% {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			-o-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	.moon-selected {
		background-color: #ff4242
	}

	.template-faq #seach-txt {
		padding: .375rem 2.5rem .375rem .75rem
	}

	#anywhere .lists .item:hover img {
		transform: scale(1.1);
		transition: transform .5s
	}

	#anywhere .lists .item:hover div {
		transform: scale(1.03);
		transition: transform .5s
	}

	#myImage {
		display: none
	}

	.dropdown-result-search {
		background: #fff;
		border-radius: 4px;
		display: none;
		font-weight: 500;
		left: 0;
		list-style: none;
		position: absolute;
		right: 0;
		top: 110%;
		z-index: 1;
		margin: 0 11px
	}

	.dropdown-result-search ul.list-item {
		height: 240px;
		overflow: auto
	}

	.dropdown-result-search li a {
		background: #fff;
		border: inherit;
		color: #333;
		display: inline-block;
		text-decoration: none;
		width: 100%
	}

	.dropdown-result-search li {
		padding: 5px 20px
	}

	.dropdown-result-search li:hover,
	.dropdown-result-search li:hover a {
		background-color: #ccc;
		cursor: pointer
	}

	.link>li:first-child>.ellipsis {
		display: none
	}

	#currentAddress {
		font-size: 18px;
		text-align: center;
		margin: -5px 0
	}

	.too-small {
		width: 100%;
		color: #fff;
		text-align: center;
		padding: 10px 0 0;
		font-size: 20px;
		font-weight: 500
	}

	.pagination {
		justify-content: center
	}

	.overlay {
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0
	}

	.post-left .overlay,
	.top-post-left .overlay {
		margin: 0 10px
	}

	.top-post-area .top-post-left .feature-image-thumb {
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0;
		overflow: hidden
	}

	.top-post-area .top-post-left .feature-image-thumb .overlay-bg {
		background: rgba(0, 0, 0, 0.4)
	}

	.top-post-area .top-post-left .feature-image-thumb img {
		width: 100%;
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0
	}

	.top-post-area .top-post-left:hover .feature-image-thumb img {
		transform: scale(1.045)
	}

	.top-post-area .top-post-left .top-post-details {
		position: absolute;
		bottom: 30px;
		left: 40px
	}

	.top-post-area .top-post-left .top-post-details .tags li {
		display: inline-block;
		background: #f05822c7;
		color: #fff;
		padding: 4px 30px;
		font-weight: 300
	}

	.top-post-area .top-post-left .top-post-details .tags li a {
		color: #fff
	}

	.top-post-area .top-post-left .top-post-details h3 {
		color: #fff;
		margin: 20px 0;
		font-size: 24px
	}

	.top-post-area .top-post-left .top-post-details .meta li {
		display: inline-block;
		color: #fff;
		margin-right: 10px;
		font-weight: 300;
		font-size: 12px
	}

	.top-post-area .top-post-left .top-post-details .meta li .lnr {
		margin-right: 10px;
		font-weight: 700
	}

	.top-post-area .top-post-left .top-post-details .meta li a,
	.top-post-area .top-post-left .top-post-details .meta li .lnr {
		color: #fff
	}

	.top-post-area .top-post-right .single-top-post {
		position: relative
	}

	.top-post-area .top-post-right .single-top-post .feature-image-thumb {
		overflow: hidden
	}

	.top-post-area .top-post-right .single-top-post .feature-image-thumb img {
		width: 100%;
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0
	}

	.top-post-area .top-post-right .single-top-post .feature-image-thumb .overlay-bg {
		background: rgba(0, 0, 0, 0.4)
	}

	.top-post-area .top-post-right .single-top-post:hover .feature-image-thumb img {
		transform: scale(1.045)
	}

	.top-post-area .top-post-right .single-top-post .top-post-details {
		position: absolute;
		bottom: 12px;
		left: 12px
	}

	.top-post-area .top-post-right .single-top-post .top-post-details .tags li {
		display: inline-block;
		background: #f05822c7;
		color: #fff;
		padding: 4px 30px;
		font-weight: 300
	}

	.top-post-area .top-post-right .single-top-post .top-post-details .tags li a {
		color: #fff
	}

	.top-post-area .top-post-right .single-top-post .top-post-details h3 {
		color: #fff;
		margin-top: 20px;
		margin-bottom: 10px
	}

	.latest-post-area .latest-post-wrap .single-latest-post .post-right h4,
	.top-post-area .top-post-right .single-top-post .top-post-details h3 {
		font-size: 20px
	}

	.top-post-area .top-post-right .single-top-post .top-post-details .meta li {
		display: inline-block;
		color: #fff;
		margin-right: 10px;
		font-weight: 300;
		font-size: 12px
	}

	.top-post-area .top-post-right .single-top-post .top-post-details .meta li .lnr {
		margin-right: 10px;
		font-weight: 700
	}

	.top-post-area .top-post-right .single-top-post .top-post-details .meta li a,
	.top-post-area .top-post-right .single-top-post .top-post-details .meta li .lnr {
		color: #fff
	}

	.top-post-area .news-tracker-wrap {
		margin-top: 10px;
		padding: 12px 15px;
		background: #fff
	}

	.top-post-area .news-tracker-wrap h6 {
		font-weight: 500
	}

	.top-post-area .news-tracker-wrap h6 span {
		color: #f05822c7
	}

	.top-post-area .news-tracker-wrap a {
		color: #222
	}

	.latest-post-area {
		margin-top: 40px
	}

	.single-post-wrap blockquote {
		border-left: 2px solid #f6214b;
		padding-left: 20px;
		font-style: italic
	}

	.single-post-wrap .navigation-wrap {
		margin-top: 20px
	}

	.single-post-wrap .navigation-wrap a {
		font-weight: 300;
		background: #222;
		color: #fff;
		padding: 12px 24px;
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0
	}

	.single-post-wrap .navigation-wrap a:hover {
		background: #F05822
	}

	.single-post-wrap .navigation-wrap .lnr {
		font-weight: 700
	}

	.single-post-wrap .navigation-wrap .prev .lnr {
		margin-right: 10px
	}

	.single-post-wrap .navigation-wrap .next .lnr {
		margin-left: 10px
	}

	.latest-post-area .latest-post-wrap .single-latest-post {
		margin-top: 20px
	}

	.latest-post-area .latest-post-wrap .single-latest-post .feature-img {
		overflow: hidden
	}

	.latest-post-area .latest-post-wrap .single-latest-post .feature-img img {
		width: 100%;
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0
	}

	.latest-post-area .latest-post-wrap .single-latest-post .feature-img .overlay-bg {
		background: rgba(0, 0, 0, 0.4);
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0
	}

	.latest-post-area .latest-post-wrap .single-latest-post:hover .feature-img img {
		transform: scale(1.1)
	}

	.latest-post-area .latest-post-wrap .single-latest-post .tags {
		position: absolute;
		bottom: 10px;
		left: 30px
	}

	.latest-post-area .latest-post-wrap .single-latest-post .tags li {
		display: inline-block;
		background: #f05822c7;
		color: #fff;
		padding: 4px 30px;
		font-weight: 300
	}

	.latest-post-area .latest-post-wrap .single-latest-post .tags li a {
		color: #fff
	}

	.latest-post-area .latest-post-wrap .single-latest-post .meta {
		margin: 10px 0
	}

	.latest-post-area .latest-post-wrap .single-latest-post .meta li {
		display: inline-block;
		color: #777;
		margin-right: 10px;
		font-weight: 300;
		font-size: 12px
	}

	.latest-post-area .latest-post-wrap .single-latest-post .meta li .lnr {
		margin-right: 10px;
		font-weight: 700
	}

	.latest-post-area .latest-post-wrap .single-latest-post .meta li a,
	.latest-post-area .latest-post-wrap .single-latest-post .meta li .lnr {
		color: #777
	}

	.latest-post-area .latest-post-wrap .single-latest-post .excert {
		margin-bottom: 0
	}

	.latest-post-area .latest-post-wrap .single-latest-post .post-right h4 {
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0
	}

	.single-sidebar-widget {
		margin-bottom: 30px
	}

	.single-sidebar-widget .title,
	.latest-post-wrap h3.cat-title {
		background: #04091e;
		color: #fff;
		padding: 8px 20px;
		margin-bottom: 20px;
		font-size: 20px
	}

	.single-sidebar-widget:last-child {
		margin-bottom: 0
	}

	.most-popular-widget .single-list {
		margin-bottom: 10px;
		padding-bottom: 10px
	}

	.most-popular-widget .single-list:last-child {
		border-bottom: none
	}

	.most-popular-widget .meta {
		margin: 10px 0
	}

	.most-popular-widget .meta li {
		display: inline-block;
		color: #777;
		margin-right: 10px;
		font-weight: 300;
		font-size: 12px
	}

	.most-popular-widget .meta li .lnr {
		margin-right: 10px;
		font-weight: 700
	}

	.most-popular-widget .meta li a,
	.most-popular-widget .meta li .lnr {
		color: #777
	}

	.most-popular-widget .details h3 {
		line-height: 1.4em !important;
		-webkit-transition: all .3s ease 0;
		-moz-transition: all .3s ease 0;
		-o-transition: all .3s ease 0;
		transition: all .3s ease 0;
		font-size: 1rem
	}

	@media all and (min-width: 1400px) and (max-width: 2000px) {
		.image-background.special img {
			width: 100%;
			height: 624px
		}
	}

	@media (min-width: 1200px) {
		

		#regions_div {
			min-height: 627px
		}
	}

	@media all and (min-width: 1100px) and (max-width: 1200px) {
		#regions_div {
			min-height: 627px
		}

		.table-weather table thead tr th .time-hour {
			font-size: 40px
		}

		.table-weather table thead tr th .temperature {
			font-size: 80px;
			line-height: 80px
		}

		#summary-info p {
			font-size: 15px;
			font-weight: 700;
			position: relative;
			top: 8px
		}
	}

	@media all and (max-width: 1099px) {
		.dropdown-result-search {
			margin: 0 3px
		}

		#header .nav-item {
			padding: 0;
			margin: 0;
		}

		#regions_div {
			min-height: 300px
		}

		.group-submenu ul.link li a {
			padding: 10px 0
		}

		.template-detail-weekly-weather .detail.table-weather div.time {
			display: inline;
			width: auto;
			margin-top: 20px
		}

		.template-detail-weekly-weather .detail.table-weather div.percent {
			padding-left: 10px
		}

		.template-detail-weekly-weather .chance_of_rain:before {
			left: -25px
		}

		.template-detail-hourly-weather .detail.table-weather div.percent {
			padding-left: 17px
		}

		.template-detail-hourly-weather .chance_of_rain:before {
			left: -48px
		}

		.template-news .title h1,
		.template-about-us .title h1 {
			padding: 70px 0
		}

		.template-faq .title {
			height: auto
		}

		.template-app .description-general .content {
			padding: 20px 0
		}

		.template-app .description-general .content img {
			max-width: 40%
		}

		.template-app .description-general .content img:last-child {
			max-width: 33%
		}

		.template-faq .search-holder {
			padding: 77px 0
		}

		.template-faq .delete-btn img {
			top: -23px
		}

		.template-faq .img-search {
			padding-top: 77px
		}

		.address-search ul.link li {
			width: 100%
		}

		.address-search .theme__menuItem__lyzBJ {
			padding: 11.5px 15px
		}

		#slider-right {
			right: 2px
		}

		#slider-left {
			left: 2px;
			z-index: 99
		}

		.address-search ul.link li {
			border-right: none
		}

		.address-search ul.link li span.ellipsis {
			right: 30px
		}

		.slider-control {
			top: 0;
			font-size: 20px
		}

		.address-search-toh ul.link li span.ellipsis {
			right: 40px
		}

		#currentHour {
			margin: 0;
			font-size: 30px
		}

		#currentAddress {
			font-size: 15px;
			text-align: center;
			margin: 10px 0 0
		}

		.table-weather table thead tr th .temperature {
			font-size: 80px;
			line-height: 80px
		}

		#summary-info p {
			font-size: 15px;
			font-weight: 700;
			position: relative;
			top: 8px
		}

		.table-weather table thead tr th .temperature {
			font-size: 70px;
			line-height: 70px
		}

		#currentDate {
			margin: 0;
			font-size: 22px !important;
			border: unset;
			padding: 0;
		}
	}

	@media all and (max-width: 992px) {
		.top-post-area .top-post-left {
			margin-bottom: 10px
		}

		.latest-post-area .latest-post-wrap .single-latest-post .post-right {
			margin: 20px 0
		}

		.latest-post-area .latest-post-wrap .single-latest-post .post-right h4 {
			max-width: 100% !important
		}

		#regions_div {
			min-height: 250px
		}

		.radar-page .detail-radar .height,
		.radar-page .detail-radar .height iframe {
			height: 320px
		}

		.radar-page {
			padding: 0 0 30px
		}

		#myVideo {
			/* display: none */
		}

		#myImage {
			display: block
		}

		.box_1 .group-search {
			margin-top: 70px
		}

		#summary-info p {
			font-size: 15px;
			font-weight: 700;
			position: relative;
			top: 10px;
			display: none
		}

		.table-weather table thead tr th .temperature {
			font-size: 60px;
			line-height: 60px
		}

		.too-small {
			font-size: 16px;
			padding: 10px 0 0
		}
	}

	@media all and (max-width: 767px) {
		.tab-detailtab-detail-graph {
			grid-template-columns: 100%;
		}

		

		.navbar-dark .navbar-brand {
			width: 50px;
			padding: 0;
		}

		.navbar-dark .navbar-brand img {
			max-width: 100%;
		}

		.side-left-inner {
			padding: 0 15px 15px;
		}

		.box-side {
			grid-template-columns: 100%;
		}

		.nav.nav-tabs.desc-temp {
			grid-gap: 20px;
		}

		.box-summany {
			/* display: grid;
			grid-template-columns: auto max-content;
			grid-gap: 30px;
			align-items: end; */
		}

		.box-summany .custom-display-weather:last-child {
			margin-bottom: 0;
		}

		.nav-item {
			margin: 0;
		}

		#detail-post h1 {
			padding-top: 10px
		}

		.top-post-area .top-post-left .top-post-details {
			bottom: 10px;
			left: 15px
		}

		.table-weather .div-icon {
			width: 55%;
			margin: auto;
		}

		.table-weather table tbody tr .custom-display-weather-2 .info {
			width: 70%;
		}

		.table-weather table tbody tr .custom-display-weather-2 .icon {
			margin-left: unset;
		}

		#currentTemperature {
			font-size: 60px !important;
		}

		.template-detail-hourly-weather table tr,
		.template-detail-weekly-weather table tr {
			grid-gap: 20px !important;
		}

		.template-detail-hourly-weather table tr td,
		.template-detail-weekly-weather table tr td {
			grid-template-columns: 30px auto !important;
			grid-gap: 10px !important;
		}

		.box-right-temperature img {
			width: 65%;
		}

		.top-post-area .top-post-left .top-post-details h3 {
			font-size: 14px;
			margin-bottom: 5px;
			margin-top: 5px
		}

		.top-post-area .top-post-right .single-top-post .top-post-details h3 {
			font-size: 14px;
			margin-bottom: 5px;
			margin-top: 5px
		}

		.temp-regions-grid5 {
			grid-template-columns: 1fr 1fr !important;
			grid-gap: 0 20px !important;
		}

		.grid-item p {
			font-size: 16px;
		}

		.box-info-right {
			margin-top: -6px !important;
		}

		.w-item-news {
			margin-top: 80px !important
		}

		.banner-1,
		.banner-2 {
			width: 100% !important;
			height: auto !important;
			min-height: 50px !important;
			max-height: 120px !important
		}

		.box_others .news {
			padding-bottom: 5px
		}

		.box_others .news .child-detail {
			padding: 15px 10px 0
		}

		.template-faq .search-holder {
			padding: 50px 0
		}

		.template-faq .delete-btn img {
			position: relative;
			top: -50px
		}

		.template-faq .img-search {
			padding-top: 50px
		}

		.template-news .title h1,
		.template-about-us .title h1 {
			padding: 38px 0;
			font-size: 40px
		}

		.table-weather .temperature {
			font-size: 75px;
			line-height: 75px;
		}

		.table-weather .text-summary {
			font-size: 20px;
		}

		.table-weather .time {
			font-size: 20px;
		}

		#time-icon-time-info .div-icon {
			height: 83px;
		}

		#time-icon-time-info .div-icon img {
			width: 100px;
			top: 40px;
			left: 25%;
		}

		.box_3_new #news .new-1 {
			margin: 0px;
		}

		.box_3_new #news .new-2 {
			margin: 0px;
		}

		.box_3_new #news .new-3 {
			margin: 0px;
		}

		.template-app .description-general .content {
			padding: 70px 0
		}

		.template-app .description-general .content p.desc {
			padding: 20px 0
		}

		.template-app .description-detail .item {
			padding-bottom: 30px
		}

		.template-app .description-detail .item .content div {
			height: auto !important
		}

		.template-app .description-detail .item .content h2 {
			padding-bottom: 10px
		}

		footer .footer .item {
			margin-bottom: 10px
		}

		footer .footer .item ul.link-app img {
			width: 100%
		}

		footer .footer .item h3 {
			font-size: 21px
		}

		#header .navbar-nav {
			line-height: 20px;
			width: 100%;
		}

		#header .navbar-nav .nav-link {
			padding-left: 20px
		}

		.box_2 .tab-content .tab-detail .item {
			min-height: 175px
		}

		#anywhere .title-box h2 {
			font-size: 25px
		}

		footer .footer .item ul.link-app li {
			width: 100%
		}

		.template-detail-hourly-weather .detail.table-weather,
		.template-detail-weekly-weather .detail.table-weather {
			padding: 0 6px
		}

		.template-detail-hourly-weather .temperature-hour {
			font-size: 46px;
			line-height: 100px
		}

		.template-detail-hourly-weather .hour-in-day,
		.template-detail-weekly-weather .hour-in-day {
			font-size: 19px
		}

		.template-detail-hourly-weather .summary-text,
		.template-detail-weekly-weather .summary-text {
			font-size: 15px
		}

		.template-detail-hourly-weather .chance_of_rain:before {
			left: -20px
		}

		.template-detail-hourly-weather .chance_of_rain:after,
		.template-detail-weekly-weather .chance_of_rain:after {
			right: 0
		}

		.template-detail-weekly-weather .chance_of_rain:before {
			left: -12px
		}

		.table-weather {
			margin-bottom: 0
		}

		.box_2 {
			padding-bottom: 20px
		}

		.box_others .trendding .item {
			margin-bottom: 20px
		}

		.desktop {
			display: none
		}

		#myVideo {
			/* display: none */
		}

		#myImage {
			display: block
		}

		.image-background img {
			max-width: 100%;
			height: 100%
		}

		.template-news .title {
			display: none
		}

		.template-news-detail .title-articles h1 {
			margin-top: 60px
		}

		.box_1 .group-search {
			margin-top: 80px
		}

		.template-news-detail #detail-articles img {
			width: 100% !important;
			height: 100% !important
		}

		.template-faq .title #seach-form {
			margin-top: 55px
		}

		.template-about-us .image-background,
		.template-faq .image-background,
		.template-news .image-background {
			display: none
		}

		#currentHour {
			margin: 0;
			font-size: 22px;
		}

		.too-small {
			font-size: 16px;
			padding: 10px 0 0
		}

		#today {
			padding: 10px !important;
		}

		#today table tr {
			grid-template-columns: 1fr 1fr 1fr !important;
			grid-gap: 10px !important;
		}

		#today table tr td {
			grid-template-columns: 25px auto !important;
			grid-gap: 10px !important;
		}

		.summary-text {
			font-size: 20px !important;
		}

		#next-24h .owl-nav .owl-prev,
		#next-7days .owl-nav .owl-prev {
			left: -17px !important;
		}

		#next-24h .owl-nav .owl-next,
		#next-7days .owl-nav .owl-next {
			right: -17px !important;
		}

		#anywhere .lists {
			grid-template-columns: 1fr 1fr;
		}

		

		.day-in-week {
			text-decoration: underline;
		}

		.title-box img {
			width: 20%;
		}

		.background-news {
			display: none;
		}

		.box-right-text {
			display: block !important;
			text-align: right;
		}

		.box-right-text p {
			margin-right: 0 !important;
		}

		.box-right-temperature {
			display: flex !important;
			grid-gap: 20px !important;
			justify-content: end;
		}

		.template-news .row.reverse,
		.template-news-detail .row.reverse {
			flex-direction: column-reverse;
		}

		.summary-weather {
			margin-top: 0 !important;
		}

		.box_6 .row.pb-4 {
			padding-bottom: 1.5rem !important
		}

		body {
			padding-top: 0
		}

		.box_6 .title,
		.most-popular-widget .details {
			padding-top: 10px
		}

		.google-auto-placed {
			display: none !important
		}

		.w-item-news {
			margin-top: 5px !important
		}

		.template-faq .search-holder {
			width: 86%
		}

		.box_6 .calendar,
		.box_6 a,
		body,
		.address-search .theme__menuItem__lyzBJ,
		.box_others .news .item .title-special,
		#anywhere .lists .item .title,
		.btn-detail button,
		.template-news .desc,
		.template-faq .content .title-faq,
		.template-about-us .form-control,
		.template-about-us .btn-detail button,
		#setting-config,
		#setting-language-ok,
		#setting-config-ok,
		#setting-language,
		#summary-info p,
		#anywhere .item .title,
		.template-detail-hourly-weather .summary-text,
		.template-detail-weekly-weather .summary-text {
			font-size: 12px !important
		}

		#detail-post {
			font-size: 16px !important
		}

		.template-faq .content .title-faq {
			font-weight: 400
		}

		.box_others .news .item .title-special {
			position: inherit
		}

		.box_others .news .child-detail {
			padding: 0
		}

		.box_others .news .child-detail .left {
			padding-right: 0
		}

		.unit_setting,
		h1,
		h2,
		h3,
		.template-news-detail h1,
		.template-news h2 .text-title,
		.template-faq .content .title-category,
		#myLanguageSettings h4.modal-title,
		#myModalSettings h4.modal-title,
		footer .footer .item h3,
		#anywhere .title-box h2,
		.template-detail-weekly-weather .content .title .city span,
		.template-detail-weekly-weather .day-in-week {
			font-size: 16px !important;
			margin-bottom: 0;
		}

		.template-app .description-detail .item {
			padding-bottom: 25px
		}

		.template-app .description-detail .item .content h2 {
			font-size: 22px;
			text-align: center;
			padding: 5px 0
		}

		.template-app .description-detail {
			padding: 50px 0 25px
		}

		.template-app .description-general .content {
			padding: 70px 0
		}

		.template-faq .search-holder {
			padding: 25px 0
		}

		.template-faq .delete-btn img {
			top: -75px
		}

		.template-faq .img-search {
			padding-top: 24px
		}

		.template-faq .content {
			margin: 10px 0
		}

		.template-about-us .content p.desc {
			padding: 20px 0
		}

		.template-about-us .content form .btn-detail {
			padding-top: 10px
		}

		.template-news .title h1,
		.template-about-us .title h1 {
			font-size: 28px;
			padding: 30px 0
		}

		#header .custom-button {
			padding: 4px 12px
		}

		#myModalSettings .modal-header,
		#myModalSettings .modal-body table tr td {
			padding: 10px
		}

		.template-news-detail {
			margin: 0 0 20px
		}

		.template-news .content .mb-5 {
			margin-bottom: 35px !important
		}

		.template-news h2 {
			padding-top: 5px;
			line-height: 16px
		}

		.box_others h3,
		.template-detail-hourly-weather .content .title .city span,
		.template-detail-hourly-weather .content .title-time .time {
			font-size: 16px
		}

		.box_3 .title-box {
			padding: 12px 0 15px
		}

		.template-detail-hourly-weather .hour-in-day,
		.template-detail-weekly-weather .hour-in-day {
			font-size: 15px
		}

		.template-detail-weekly-weather .chance_of_rain {
			margin-top: 0px
		}

		.template-detail-weekly-weather .temperature-low {
			margin-top: 5px
		}

		.template-detail-weekly-weather .temperature-day {
			font-size: 25px
		}

		.template-detail-hourly-weather .detail.table-weather div.percent,
		.template-detail-weekly-weather .detail.table-weather div.percent {
			font-size: 15px
		}

		.template-detail-weekly-weather .content .title .city {
			padding: 10px 0
		}

		#header .logo-img {
			/* height: 80%; */
		}

		footer ul.social li a img {
			padding-bottom: 0
		}

		.template-app .description-general .content img {
			max-width: 35%
		}

		.template-app .description-general .content .image-right img,
		.template-app .description-general .content .name {
			display: none
		}

		.box_others .trendding {
			padding: 20px 0
		}

		.box_others h2 {
			font-size: 20px;
			padding-bottom: 10px
		}

		.box_others .news .child-detail .left {
			width: 100%;
			padding-bottom: 0
		}

		.box_others .news .child-detail .right {
			width: 100%;
			padding: 10px 10px 0
		}

		footer .copyright .text-final {
			margin: 6px 0
		}

		.table-weather table thead tr th .temperature {
			font-size: 45px
		}

		.table-weather table thead tr th .time-hour {
			font-size: 27px
		}

		.table-weather table thead tr th .temperature {
			line-height: 40px
		}

		.table-weather table tbody tr td img.ic_detail_cloud {
			height: 15px
		}

		.table-weather table tbody tr td img.ic_detail_ozone {
			height: 19px
		}

		footer .footer .item ul.link-app li:first-child {
			width: 50%;
			float: left
		}

		footer .footer .item ul.link-app li:last-child {
			width: 50%;
			float: left
		}

		.box_2 .tab-content .tab-detail .item img {
			width: 50%
		}

		#moon .moonphase-img {
			height: auto;
			margin-top: 0
		}

		#moon .moonphase-img img {
			width: 60%
		}

		#moon .mt-5 {
			margin-top: 0 !important
		}

		#anywhere .title-box img {
			width: 8%
		}

		.box_3 .item {
			padding-bottom: 5px
		}

		footer h3 {
			padding-bottom: 5px
		}

		footer .footer {
			padding: 15px 0 5px
		}

		.template-detail-hourly-weather .image-day img,
		.template-detail-weekly-weather .image-day img {
			height: 70px
		}

		.template-detail-hourly-weather .content .time {
			margin-top: 0
		}

		.template-detail-hourly-weather .temperature-hour {
			font-size: 30px;
			line-height: 20px
		}

		.template-detail-hourly-weather .content .title .city {
			padding: 10px 0
		}

		.template-detail-hourly-weather .chance_of_rain {
			margin-top: 0
		}

		#myLanguageSettings .modal-body table tr td img,
		#myModalSettings .modal-body table tr td img {
			height: 25px
		}

		#myModalSettings .modal-header,
		#myModalSettings .modal-body table tr td {
			padding: 6px 20px
		}

		#myLanguageSettings .modal-header {
			padding: 6px 20px
		}

		#myLanguageSettings .modal-body table tr td {
			padding: 6px 28px
		}

		.template-app .description-detail img {
			max-width: 60%
		}

		#myVideo {
			/* display: none */
		}

		.box_1.home-page .table-weather .table,
		.box_2,
		.box_4 {
			margin-bottom: 0
		}

		.box_3 {
			padding-bottom: 20px
		}

		.box_1.home-page .table-weather .table {
			margin-bottom: 20px
		}

		#anywhere .lists {
			padding: 80px 0 30px
		}

		.box_1 .group-search .search-holder .delete-btn {
			right: 5px
		}

		#myVideo {
			/* display: none */
		}

		#myImage {
			display: block
		}

		.image-background img {
			max-width: 100%;
			height: 100%
		}

		.template-news .title {
			display: none
		}

		.template-news .content .container {
			margin-top: 70px !important
		}

		.template-news-detail .title-articles h1 {
			margin-top: 60px
		}

		.box_1 .group-search {
			margin-top: 70px
		}

		.template-news-detail #detail-articles img {
			width: 100% !important;
			height: 100% !important
		}

		.template-faq .title #seach-form {
			margin-top: 55px
		}

		.template-about-us .image-background,
		.template-faq .image-background,
		.template-news .image-background {
			display: none
		}

		.template-news-detail .title-articles h1,
		.template-news-detail.trendding h1 {
			margin-top: 40px
		}

		#currentAddress {
			font-size: 13px;
			text-align: center;
			margin: 10px 0 0
		}

		.too-small {
			font-size: 16px;
			padding: 10px 0 0
		}
	}

	@media (max-width: 480px) {
		.template-app .description-general .content p.desc {
			padding: 0;
			font-size: 12px
		}

		#header .form-inline {
			width: 100%
		}

		#header .form-inline .custom-dropbox {
			margin-bottom: 10px;
			width: 46%
		}

		.box_2 ul li.nav-item a {
			padding: 8px 5px
		}

		.box_2 .tab-content #moon .table td,
		.box_2 .tab-content #moon .table th {
			padding: 3px 5px !important
		}

		.table-weather table thead tr th .temperature {
			font-size: 30px
		}

		.table-weather table thead tr th .time-hour {
			font-size: 15px
		}

		.table-weather table tbody tr td img.ic_detail_cloud,
		.table-weather table tbody tr td img.ic_detail_ozone {
			height: 15px
		}

		.box_2 .tab-content .tab-detail .item {
			min-height: 138px
		}

		.hourly-summary {
			min-height: 32px
		}

		#anywhere .item {
			min-height: 120px
		}

		#myVideo {
			/* display: none */
		}

		#myImage {
			display: block
		}

		.image-background img {
			max-width: 100%;
			height: 100%
		}

		.template-news .title {
			display: none
		}

		.template-news .content .container {
			margin-top: 70px !important
		}

		.box_1 .group-search {
			margin-top: 70px
		}

		.template-news-detail #detail-articles img {
			width: 100% !important;
			height: 100% !important
		}

		.template-faq .title #seach-form {
			margin-top: 55px
		}

		.template-news {
			margin-top: 75px;
		}


		.template-news .background-news,
		.template-about-us .image-background,
		.template-faq .image-background,
		.template-news .image-background {
			display: none
		}

		#currentAddress {
			font-size: 13px;
			text-align: center;
			margin: 10px 0 0
		}

		.too-small {
			font-size: 16px;
			padding: 10px 0 0
		}
	}

	@media all and (max-width: 380px) {
		.banner-ads-fixed .col-right button.btn-light {
			font-size: 10.5px !important
		}

		.banner-ads-fixed .col-center .title-app {
			font-size: 17px
		}

		#anywhere .lists .item {
			min-height: 120px
		}

		.template-news .title h1,
		.template-about-us .title h1 {
			font-size: 18px
		}

		.template-app .description-general .content {
			padding: 70px 0
		}

		.template-faq .search-holder {
			padding: 12px 0
		}

		.template-faq .delete-btn {
			top: 58px;
			right: 15%
		}

		.template-faq .img-search {
			padding-top: 11px
		}

		.table-weather table tbody tr td .info {
			padding-left: 3px
		}

		.box_2 ul li.nav-item a {
			padding: 8px 0
		}

		.remove-le {
			margin: 0;
			padding: 0
		}

		.table-weather table tbody tr td img.ic_detail_cloud,
		.table-weather table tbody tr td img.ic_detail_ozone {
			height: 12px
		}

		.template-detail-weekly-weather .temperature-day {
			font-size: 18px;
			line-height: inherit
		}

		.template-detail-hourly-weather .detail.table-weather div.percent,
		.template-detail-weekly-weather .detail.table-weather div.percent {
			padding-left: 2px
		}

		.template-detail-hourly-weather .detail.table-weather .chance_of_rain img,
		.template-detail-weekly-weather .detail.table-weather .chance_of_rain img {
			height: 19px
		}

		.template-detail-hourly-weather .temperature-hour {
			font-size: 24px
		}

		.chance_of_rain:before {
			left: -12px
		}

		.template-detail-hourly-weather .image-day img,
		.template-detail-weekly-weather .image-day img {
			height: 40px
		}

		.template-detail-weekly-weather .chance_of_rain,
		.template-detail-hourly-weather .chance_of_rain {
			margin-top: 5px
		}

		.template-detail-hourly-weather .chance_of_rain:after,
		.template-detail-weekly-weather .chance_of_rain:after {
			right: -8px
		}

		.group-submenu ul.link li a {
			font-size: 12px
		}

		.template-news .title h1,
		.template-about-us .title h1 {
			padding: 15px 0
		}

		.template-faq .search-holder {
			width: 85%
		}

		.template-detail-hourly-weather .temperature-hour {
			line-height: 26px;
			font-size: 23px
		}

		.image-background img {
			max-width: 100%;
			height: 100%
		}

		.template-about-us .title h1 {
			padding: 30px 0 2px
		}

		.template-news .content {
			padding: 13px 0
		}

		#myVideo {
			/* display: none */
		}

		#myImage {
			display: block
		}


		.template-news .title {
			display: none
		}

		.template-news .content .container {
			margin-top: 70px
		}

		.box_1 .group-search {
			margin-top: 70px
		}

		.template-news-detail .title-articles h1 {
			margin-top: 60px
		}

		.template-app .image-background {
			height: 230px
		}

		.template-news-detail #detail-articles img {
			width: 100% !important;
			height: 100% !important
		}

		.template-faq .title #seach-form {
			margin-top: 55px
		}

		.template-about-us .image-background,
		.template-faq .image-background,
		.template-news .image-background {
			display: none
		}

		#summary-info p {
			font-weight: 700;
			position: relative;
			top: 0
		}

		#currentHour {
			margin: 0;
			font-size: 20px
		}

		.box_1 .image-background {
			height: 827px;
		}
	}

	/* my css */
	.side-left {
		/* grid-column: 2;
        grid-row: 1; */
	}

	.box-summany,
	.box-summany-inner,
	.box-addres {
		border-radius: 24px;
	}

	.box-summany {
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
	}

	.col-4 .icon img {
		width: 80%;
	}

	.col-4 .icon {
		padding: 0 8px;
	}

	.custom-display-weather .icon-fade img {
		opacity: 1;
	}

	.info-fade div {
		opacity: 1;
	}

	#currentDate {
		border: none;
		margin-bottom: 12px;
	}

	.temp-info #currentTemperature {
		font-size: 50px;
	}

	.main-content-hao {
		z-index: 1;
	}

	#header {
		display: block;
		width: 100%;
	}

	.wrapper {}

	.text-white {
		color: #fff;
	}

	.mr-auto {
		margin: auto;
	}

	.mr-auto-right {
		margin: auto 0 auto auto;
	}

	.w-100 {
		width: 100%;
	}

	.ds-none {
		display: none !important;
	}

	.side-left-inner {
		padding: 0;
		padding-bottom: 26px;
	}

	.temp-info {
		text-align: center;
	}

	.text-white {
		color: #fff
	}

	.col-12 .text-summary {
		font-size: 24px;
		position: absolute;
		top: 85%;
		left: 50%;
		transform: translateX(-50%);
		width: 100%;
	}

	.col-12 .address-info-left {
		display: flex !important;
		font-size: 24px;
		align-items: center;
		margin: 0;
		justify-content: center !important;
		color: #fff;
	}


	.col-12 .address-info-left img {
		width: 16px;
		margin: 0 8px;
	}

	.main-content-hao {
		background-color: #f6f6f8;
	}

	/* reponsive */
	

	@media (max-width:767px) and (min-width:577px) {

		.side-left-inner .container,
		.main-content .container {
			width: 90% !important;
			max-width: none !important;
		}

		.tabs-2 .container,
		.table-weather .container,
		.box_2_new .container ,.box_3_new .container{
			width: 100% !important;
			max-width: none !important;
		}

		.div-icon {
			display: flex;
		}

		.div-icon img {
			margin: auto;
		}

		.col-4 .icon img {
			width: 60%;
			margin: auto;
		}

		.col-4 .icon {
			display: flex;
		}

		.info div {
			font-size: 16px;
		}


	}

	@media (width:768px) {

		.side-left-inner .container,
		.main-content .container {
			width: 100% !important;
			max-width: none !important;
		}

		.tabs-2 .container,
		.table-weather .container,
		.box_2_new .container,.box_3_new .container {
			width: 100% !important;
			max-width: none !important;
		}

		.col-4 .icon img {
			width: 100%;
			margin: auto;
		}

		#today {
			padding: 20px 8px;
		}

		/* .moonphase-img {
			margin-top: 0!important;
			height: 196px;
			margin-bottom: 12px;
		} */
		

		#today table tr td {
			display: grid;
			grid-template-columns: 30px auto;
			grid-gap: 8px;
			align-items: center;
		}

		#today table tr {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr !important;
			grid-gap: 16px;
		}

		.word-break {
			line-height: 1.3;
		}

		.temp-info #temp2,
		.temp-info #temp1 {
			font-size: 40px;
			color: #fff;
			font-weight: 600;
		}

		#addres-info {
			font-size: 16px;
		}

		#address-info-more1,
		#address-info-more2 {
			font-size: 16px;
		}
		.box-summany-inner {
			margin-top: 32px;
		}
	}

	

	@media (max-width:768px) {
		.col-xl-4 {
			order: 1;
		}

		.row-all {
			flex-direction: column-reverse;
		}

		.hide-md {
			display: none;
		}

		.desktop {
			display: none;
		}
		.template-news .content .detail-news img {
			height: 150px;
		}


		#header .nav-item.active a {
			color: #fff !important;
		}

		.max_temperature,
		.min_temperature {
			height: 60% !important;
		}
		.group-mobile {
			display: flex;
			align-items: center;
			padding: 0 10px;
		}
		.navbar-expand-lg .navbar-collapse {
			background: #fff;
			padding: 0px 0px 10px 0px;
			position: absolute;
			width: 100%;
			top: 100%;
			z-index: 9;
			right: 0;
		}
		.nav-link.text-capitalize {
			padding-left: 15px !important;
			padding-right: 15px !important;
		}
		.mobile {
			display: block;
		}
		#header .custom-button {
			padding: 8px 12px;
			padding-bottom: 11px;
		}
		.box_3_new #news .new-item-1 img {
			height:140px;
		}
		.btn-spe {
			padding-left: 0!important
		}

		.my-container {
			padding: 0 20px;
		}
	}


	@media (max-width:575px) {
		

		.nav.nav-tabs.desc-temp {
			grid-gap: 0px;
		}

		.nav-no-p {
			padding: 0 !important;
			height: 100%;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.p2-m {
			padding: 0 12px;
		}

		.description {
			height: 160px !important;
		}

		.sidebars-area {
			padding-top: 22px !important;
		}

		.template-detail-hourly-weather table tr,
		.template-detail-weekly-weather table tr {
			grid-gap: 10px !important;
		}

		.template-news {
			margin-top: 0px !important;
		}

		.template-news .content .container {
			margin-top: 0px !important;
		}

		.mb-setting {
			display: block !important;
			;
		}

		.mobile {
			display: block !important;
		}

		#header .custom-button {
			padding: 8px 12px;
		}

		.box-news {
			padding-left: 0 !important;
		}

		.image-background {
			background-size: auto 100% !important;
		}

		

		.template-about-us .content p.desc {
			text-align: left;
		}

		.p-0 {
			padding: 6px 0 !important
		}
		.title-box h2 {
			font-size: 20px !important;
		}
		.box_3_new #news h3 a {
			font-size: 15px ;
		}
		.detail-news a {
			font-size: 15px;
		}
		.btn-my-new {
			font-size:14px!important;
		}

		.my-container {
			padding: 0 12px;
		}
	}

	

	@media (max-width:1200px) {
		#header .container {
			max-width: 100% !important
		}

	}

	.navbar-dark .navbar-toggler-icon {
		color: #fff !important;
	}

	.temp-info #temp2,
	.temp-info #temp1 {
		font-size: 50px;
		color: #fff;
		font-weight: 600;
	}

	@media (min-width: 1201px) {

		.box_2_new .container,
		.box_3_new .container {
			padding: 0 !important;
		}

		#today table tr {
			column-gap: 110px;
		}
	}

	@media (min-width:992px) {
		.title-bg>h1 {
			font-size: 32px;
			margin: 0;
		}

		.title-bg>span {
			font-size: 20px;
		}

		.template-detail-hourly-weather table tr,
		.template-detail-weekly-weather table tr {
			column-gap: 80px !important;
		}

		.template-about-us .content img {
			width: 60%;
			height: 100%;
		}
		.title-bg { 
			padding:0 15px
		}

		.my-container {
			padding: 0 32px;
		}

	}

	@media (min-width: 1201px) {

		.template-detail-hourly-weather table tr,
		.template-detail-weekly-weather table tr {
			column-gap: 180px !important;
		}

		.my-container {
			padding: 0 50px;
		}
	}

	.nav-link {
		color: #fff;
	}

	.temperature {
		font-size: 40px;
		font-weight: 600;
		margin-bottom: 6px;
	}

	.btn-my-new {
		background-color: #fff !important;
		color: rgba(0, 0, 0, 0.7) !important;
		font-weight: 550;
		padding-top: 0!important;
		padding-bottom: 0!important;
	}

	.btn-my-new:hover {
		color: #f05822 !important;
	}

	.btn-spe {
		margin-bottom: 20px;
		margin-top: 0 !important;
	}

	.box-table {
		box-shadow: 0px 0px 5px 1px #ccc;
	}

	.description {
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		height: 240px;
	}

	.description-text {
		color: #fff;
	}

	.wrapper3 {
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		padding-bottom: 80px;
	}

	.title-bg>h1 {
		margin: 0;
	}
	
	

	.excert,
	.detail-new {
		overflow: hidden;
		line-height: 22px;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		margin-top: 15px;
	}

	.mb-setting {
		display: none;
	}


	.wrapper3 {
		position: relative;
	}

	.nav-tabs .nav-item .nav-no-p:hover {
		color: #fff;
		background:#f05822;
	}
	.nav-link:not(.active):hover {
		color: #f05822;
	}

	/* new css */

	.bg {
		background-size:cover;
		background-repeat: no-repeat;
	}

	.navbar-brand span {
		font-size: 30px;
		font-weight: bold;
	}

	.nav-header.active {
		background-image : url(/images/bg_active_menu_110px.svg);
		background-size:cover;
		background-repeat: no-repeat;
		background-position: center;
	}

	.nav-header .nav-link {
		color: #fff
	}

	.nav-header.active .nav-link {
		color: #750d1c!important;
	}

	#header {
		position:fixed;
		top: 0;
		left: 0;
		right:0;
		z-index:99999999999;
	}

	.box1 {
		padding-top: 80px;
	}

	.text-white {
		color: #fff
	}

	.img-name h4 {
		font-size:32px;
		margin: 0 10px;
		letter-spacing:6px;
	}

	.box1-left h3 {
		font-size:70px;
		letter-spacing:3px;
		font-family :PlayfairDisplay;
		flex-direction:column;
		justify-content: center;
		align-content:flex-start;
	}

	.selectize-control {
		margin-top: 6px;
		margin-bottom: 18px;
	}

	.box1-right {
		padding: 30px 40px;
		border: 1px solid #fff;
		border-radius:8px;
	}

	.box1-left {
		display:flex;
		flex-direction:column;
		justify-content: flex-start;
		align-content:center;
	}

	.card-text {
		display:flex;
		color: rgba(0, 0, 0, 0.6)
	}

	.card-text .sale-price {
		color:#d9b463;
		text-decoration-line:line-through;
	}

	.card-text span {
		margin-left: 5px;
	}

	.card-content {
		padding: 20px;
		border-bottom-left-radius:8px;
		border-bottom-right-radius:8px;
		border: 1px solid rgba(0, 0, 0, .2)
	}

	.card>img {
		border-top-left-radius:8px;
		border-top-right-radius:8px;
	}

	.card {
		border-radius:8px;
		border-color:#fff;
		position: relative;
	}

	.number-sale {
		background-image: url(/images/ic_bookmark_discount.svg);
		position: absolute;
		top: 0;
		right: 20px;
		color: #fff;
		font-size: 18px;
		height:74px;
		width: 54px;
		text-align:center;
		line-height:60px;
	}

	.price-2 {
		background-image: url(images/bg_price.svg);
		position: absolute;
		top: 20px;
		right: 0px;
		color: #fff;
		font-size: 18px;
		z-index: 999;
		padding:10px 0;
		width: 208px;
		text-align: center;
		overflow:hidden;
	}

	.text-2-down {
		display:flex;
		justify-content:space-between;
	}

	.text-2 {
		width:80%;
		padding: 12px 30px;
		border-radius:10px;
		border:1px solid #fff;
		box-shadow: 0 2.8px 2.2px rgb(0 0 0 / 3%), 0 6.7px 5.3px rgb(0 0 0 / 4%), 0 12.5px 10px rgb(0 0 0 / 5%);
		position: relative;
		color:#000;
		margin:auto;
		transform:translateY(-50%);
		background-color:#fff;
	}

	.main-img-2 img {
		border-radius:10px;
	}

	.btn-see-all {
		background-color: #955c2a;
		color: #fff;
	}

	.btn-see-more {
		color:#6b1018;
		background-color:#fff;
		font-weight:550;
	}

	.box4-right h4 {
		letter-spacing:3px;
	}

	.box4-right h3, .box5 h3{
		font-size:40px;
		font-weight:bold;
		font-family:initial;
	}

	.box4-right ul li {
		margin-top: 10px;
	}

	.box4-right {
		padding: 40px 60px;
	}

	.box5 img {
		max-width:100%;
		border-radius:12px;
	}

	.box5-right p {
		color:rgba(0, 0, 0, 0.5)
	}

	.box5 p.box5-number {
		font-size:60px;
		font-weight:bold;
		font-family:initial;
		text-align:center;
		line-height:70px;
		margin-top: 15px;
	}

	.box5 p.box5-name {
		font-size:24px;
		font-weight:bold;
		text-align:center;
		font-family:initial;
	}

	.cover-infor img{
		margin-right: auto;
		margin-left: auto;
	}

	.flex-col {
		display: flex;
		flex-direction: column;
	}

	.partner {
		display:grid;
		grid-template-columns:auto auto auto auto auto;
		grid-gap:80px;
	}

	.title-box3 {
		font-size:40px;
		font-weight:bold;
		font-family:initial;
	}
	
	.text-2-down {
		margin-top: 10px;
	}

	.pick-number {
		border:1px solid #ccc;
		border-radius:4px;
		min-height:38px;
		margin-top: 6px;
		display:grid;
		grid-template-columns:1fr 1fr 1fr;
	}

	.btn-subtract, .btn-plus {
		background:#fff;
		padding: 0;
		height:100%;
		outline:none;
		border:none;
	}

	.btn-subtract:focus, .btn-plus:focus {
		outline:none;
		box-shadow:none;
	}

	#numberPeople {
		height:100%;
		border:none;
		outline:none;
	}

	.hide-btn {
		color:#fff;
		cursor:auto!important;
	}

	.selectize-input {
		min-height:38px;
	}

	.nav-small .nav-header {
		color:white;
	}

	/* service */ 

	#service {
		padding-top: 80px;
	}

	#service .banner {
		background-image: url(images/img_services.jpg);
		height:300px;
	}

	#service .banner h3 {
		color: #fff;
		font-size: 70px;
		line-height: 300px;
		font-family: initial;
		letter-spacing: 2px;
	}

	#service .box-1 .name-web{
		color:#c78f16;
	}

	#service .box-1 h3 {
		font-size: 50px;
		font-family: initial;
		font-weight: bold;
		letter-spacing: 3px;
		margin-bottom: 20px;
	}

	.service-card {
		padding:30px;
		box-shadow: 0px 8px 18px #aeafb1;
		border-radius:14px;
		height:100%;
	}

	.service-card img {
		max-width:100%;
		height:170px;
	}

	.service-card-title {
		font-weight:500;
		font-family:initial;
	}

	.service-card-text {
		color: rgba(0,0,0,0.5);
	}

	#service .multi-card h5 {
		font-family: initial;
    	font-weight: 600;
	}

	#service .multi-card {
		padding: 0.25rem;
	}

	#service .box-2 h3 {
		font-size: 50px;
		font-family: initial;
		font-weight: bold;
		letter-spacing: 3px;
		margin-bottom: 20px
	}

	#service .box-3 img{
		width: 100%;
	}

	.box-3-item .box-3-item-img {
		background-size:cover;
		background-position:center;
		height:380px;
		background-repeat: no-repeat;
	}

	.box-3-item3 .box-3-item-img {
		background-image: url(images/img_service_event_space_3.jpg);
	}

	.box-3-item4 .box-3-item-img {
		background-image: url(images/img_service_event_space_4.jpg);
	}
	.box-3-item5 .box-3-item-img {
		background-image: url(images/img_service_event_space_5.jpg)
	}
	.box-3-item6 .box-3-item-img {
		background-image: url(images/img_service_event_space_6.jpg)
	}
	.box-3-item7 .box-3-item-img {
		background-image: url(images/img_service_event_space_7.jpg);
	}

	#service .box-3 .row {
		margin-left: 0;
		margin-right: 0;
	}

	.box-3-item1, .box-3-item4 {
		padding-left: 0;
	}

	.box-3-item3, .box-3-item7 {
		padding-right: 0;
	}
	
	.box-3-item2 .more-infomation h3 {
		font-size: 30px;
		font-weight: bold;
		font-family: initial;
		letter-spacing: 3px;
	}

	.box-3-item2 .more-infomation {
		padding: 30px;
		border:20px solid #955c2a;
		height:100%;
	}

	/* sale */

	#sale {
		padding-top: 80px;
	}

	#sale .banner {
		height:380px;
		background-image:url(/images/img_discount.jpg);
	}

	#sale .banner h3 {
		color: #fff;
		font-size: 70px;
		line-height: 300px;
		font-family: initial;
		letter-spacing: 2px;
	}

	#sale .sale-card {
		border-radius: 10px;
    	box-shadow: 0 2.8px 2.2px rgb(0 0 0 / 3%), 0 6.7px 5.3px rgb(0 0 0 / 4%), 0 12.5px 10px rgb(0 0 0 / 5%);
		margin-top: 36px;
	}

	#sale .sale-card .card-content {
		border:none;
	}

	/* new */

	#new {
		padding-top: 80px;
	}

	#new .banner {
		background-image:url(images/img_news.jpg);
	}

	#new .banner h3 {
		color: #fff;
		font-size: 70px;
		line-height: 300px;
		font-family: initial;
		letter-spacing: 2px;
	}

	#new .new-post img {
		width: 100%;
		border-radius:10px;
	}

	#new .new-post {
		margin-bottom: 16px;
	}

	#new .new-post .new-post-time {
		margin-top: 20px;
		margin-bottom: 0;
		color: #c78f16;
	}

	#new .new-post .new-post-title {
		font-family: initial;
		font-weight:500;
	}

	#new .new-post .new-post-text {
		color:rgba(0, 0, 0,0.5);
	}

	/* history */
	#history {
		background-image:url(images/img_home_hero.jpg);
		height:600px;
		display:flex;
	}

	#history .content-history {
		padding:40px 60px;
		background: #fff;
		border-radius:12px;
		margin:auto;
	}

	#history .content-history h4 {
		font-family:initial;
		font-weight:550;
	}

	#history .content-history .form-search-input {
		padding:6px 10px;
		border-radius:4px;
		outline:none;
	}

	/* bookroom */
	#bookRoom {
		padding-top: 80px;
	}

	.slide-date .day {
		font-size:26px;
		border-radius:6px;
		font-family:initial;
		text-align:center;
		padding: 35px 0;
	}

	.slide-date .day.active {
		background: #955c2a;
		color: #fff;
	}

	.slide-time .hours {
		display:inline-block;
		color:#750d1c;
		text-align:center;
		border:1px solid ;
		padding:12px 0;
	}

	.slide-time .hours.active {
		background: #955c2a;
		color:#fff;
		border:1px solid #955c2a;
	}

	.information .information-service {
		display:grid;
		grid-template-columns:1fr 1fr 1fr 1fr ;
		grid-gap:20px;
	}

	.information .information-service span {
		font-size:22px;
		margin-left: 8px;
		margin-top: 4px;
	}

	.information .title {
		font-family: initial;
		font-size:36px;
		font-weight:600;
	}

	.allready-service .item img, .more-service .item img {
		height:73px;
		width: 73px;
		margin-bottom: 10px;
	}

	.allready-service .item p, .more-service .item p {
		font-size:18px;
		margin-bottom: 0px;
	}

	.allready-service .item, .more-service .item {
		background-color: #eaeaea;
		border-radius:6px;
		text-align: center;
		padding:26px 0;
		position: relative;
	}

	.more-service .item img.checked, .more-service .item img.not-checked {
		height:24px;
		width:24px;
		position:absolute;
		top:8px;
		right:8px;
	}

	.more-service .item input {
		height:100%;
		width:100%;
		position:absolute;
		left:0;
		top:0;
		opacity: 0;
		z-index: 999;
	}

	.more-service-title, .allready-service-title {
		font-size:30px;
		font-family:initial;
		font-weight:600;
		text-align:left;
	}

	#bookRoom .check-out {
		background-image:url(images/bg_scroll_detail_booking.svg);
		padding:20px 0;
		color:#fff;
		position:fixed;
		bottom:0;
		left: 0;
		right: 0;
		z-index: 9999;
	}

	#bookRoom .check-out img {
		height:30px;
		width:30px;
	}

	#bookRoom .check-out h4 {
		margin-bottom: 0;
		margin-top: 8px;
	}
	
	#bookRoom .check-out .btn-book {
		color:#955c2a;
		background:#fff;
		font-weight:500;
		margin:auto;
	}
	

	.select2-container {
		display:block;
		width: 100%!important;
		
	}

	.select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__rendered {
		min-height:38px;
		line-height:34px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow {
		height:36px!important;
	}

	.select2-container--default .select2-results__option--highlighted[aria-selected] {
		background-color: #955c2a;
	}
</style>