<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>/* typography */
/*@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:wght@300;400;500;700;900&display=swap');*/
@import url('/assets/css/roboto/roboto.css');

h1.extra-title,.main-screen div.extra-title{
	/*font-family: 'Montserrat', sans-serif;*/
	font-family: 'Roboto Black', sans-serif;
	font-size: 127.26px;
	font-weight: 900;
	color: #cf2127;
	line-height: 1.5;
	margin: 0;
	text-align: left;
}
.extra-title-subtitle{
	font-size: 27.6px;
	font-weight: 500;
	color: #cf2127;
	line-height: 1;
}

h3,.h3,.how-to-repair h2,.repair-glass h2,.testimonials h2,.buy-glass h2,.buy-glass h1,.partners h2,.services h2,.features h2,.examples h2,.masters h2,.blog .title-block div,.news .title-block div,.features .title-block div{
	font-size: 48px;
	font-weight: 500;
	color: #191c21;
	line-height: 1;
	margin: 0;
}
.buy-glass h1{
	text-align: left;
}
.h3-subtitle{
	font-size: 24px;
	font-weight: 400;
	color: #000000;
	line-height: 1;
	margin-top: 26px;
	display: block;
}
h4,.h4,.reg-to-replace h2,.reg-to-replace .h2,.cta .cta-text div,.guarantee .guarantee-description-wrapper div,.news .big-news div,.callback .callback-text div,.form-callback .info .title-block {
	font-size: 36px;
	font-weight: 500;
	color: #191c21;
	margin: 0;
	line-height: 1.2;
}
.red-hightlight{
	font-weight: 700;
	color: #cf2127;
}
h5,.h5,.services h3{
	font-size: 24px;
	font-weight: 500;
	color: #191c21;
	line-height: 1.2;
	margin: 0;
}
/* typography END */

/* layout */
body.new-layout{
	background: #f2f5f7;
}
.new-layout section,.new-layout .section{
	margin-top: 90px;
	margin-bottom: 90px;
}
.main-screen .row{
	align-items: center;
}
.title-block{
	margin-bottom: 45px;
}
.title-block-h1{
	font-size: 48px;
    font-weight: 500;
    color: #191c21;
    line-height: 1;
    margin: 0;
}

/* layout END */

/* elements */
.btn-red {
    background: #cf2127;
    border-radius: 200px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 15px;
}
.btn-red svg {
    width: 15px;
    height: 15px;
    margin: 0 7px 0 0;
    fill: #fff;
}
.btn-red span {
    font-size: 16px;
    line-height: 20px;
    color: #ffffff !important;
}
.btn{
	border-radius: 200px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.btn-default{
	background: #cf2127;
    justify-content: center;
    padding: 10px 35px;
    color: #ffffff !important;
    font-weight: 400;
}
.btn-transparent{
	background: transparent;
	color: #cf2127 !important;
	border: 1px solid #cf2127;
	padding: 10px 55px;
	font-weight: 400;
}
.read-more{
	display: block;
	color: #cf2127;
	font-size: 16px;
	position: relative;
	font-weight: 400;
}
.read-more:after{
	content: '\27F6';
	position: relative;
	right: 0;
	margin-left: 12px;
}
.btn-white{
	background: #ffffff !important;
	color: #cf2127;
	font-size: 16px;
	font-weight: 500;
	padding: 10px 55px;
}
.btn-black{
	background: #000000;
	color: #ffffff !important;
	font-size: 16px;
	font-weight: 500;
	padding: 10px 55px;
}
/*[data-title]:hover::before {
  	content: attr(data-title);
    position: absolute;
    top: 100%;
    display: inline-block;
    padding: 20px;
    border-radius: 10px 10px 30px 10px;
    background: #000;
    color: #fff;
    font-size: 15px;
    font-weight: 300;
    width: 300px;
}
[data-title]:hover::after {
  content: '';
  position: absolute;
  bottom: -1px;
  left: 16px;
  display: inline-block;
  color: #fff;
  border: 8px solid transparent;	
  border-bottom: 8px solid #000;
}
[data-title]{
	position: relative;
	cursor: help;
}*/
/* elements END */

/* car list */
.car-list{
	background: #ffffff;
	border-radius: 10px;
	padding: 35px 35px 40px;
}
.car-list-wrapper{
	display: flex;
}
.car-list-column-count{
	column-count: 5;
	width: 100%;
}
.car-list-category{
	min-width: 224px;
	display: flex;
    align-items: flex-start;
    break-inside: avoid;
}
.car-list-letter{
	font-weight: 700;
	font-size: 24px;
	color: #cf2127;
	display: block;
	line-height: 1;
	width: 40px;
	text-align: center;
}
.car-list-category ul{
    margin: 0;
    padding-left: 20px;
    list-style: none;
}
.car-list-category ul li{
	display: block;
	padding-bottom: 25px;
}
.car-list-category ul li a{
	font-size: 16px;
	color: #191c21;
	font-weight: 400;
	position: relative;
	padding-left: 40px;
	display: block;
}
.cars-logo{
	vertical-align: middle;
	opacity: 0.4;
	padding-right: 10px;
	width: 40px;
    position: absolute;
    left: 0px;
    top: 0px;
}
.car-list .btn{
	margin: 0 auto;
	display: block;
}
.car-list-btn {
	display: flex;
	justify-content: center;
	align-items: flex-start;
}
/* car list END */

/* old elements */
.partners .item{
    padding: 35px 30px;
    background: #fff;
    border-radius: 10px;
    margin: 14px 0;
}
.partners .item .data {
    margin: 0 0 16px;
}
.partners .item .city {
	position: relative;
    font-size: 14px;
    line-height: 14px;
    color: #a8b1b7;
    letter-spacing: -0.01em;
    max-width: 130px;
    padding-left: 18px;
    padding-top: 18px !important;
}
.partners .item .address {
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    color: #cf2127;
    min-height: 52px;
    margin-bottom: 10px;
}
.partners .item .phone {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-size: 18px;
    line-height: 22px;
    color: #000;
    margin: 15px 0 3px;
}
.partners .item .clock {
    font-size: 18px;
    line-height: 22px;
    color: #000;
    display: flex;
    align-items: flex-start;
}
.partners .item .city svg {
	position: absolute;
	left: 0;
	top: 16px;
    width: 12px;
    height: 15px;
    fill: #a8b1b7;
    margin: 0 6px 0 0;
}
.partners .item .phone svg {
    width: 15px;
    height: 15px;
    fill: #a8b1b7;
    margin: 0 10px 0 0;
    position: relative;
    top: -2px;
}
.partners .item .clock svg {
    width: 15px;
    height: 15px;
    min-width: 15px;
    fill: #a8b1b7;
    margin: 3px 10px 0 0;
}
.partners .item .clock .cal {
    white-space: nowrap;
    margin: 0 10px;
    line-height: 22px;
}
.partners .item .clock .day {
    font-weight: 600;
	color: #969696;
    margin: 0 2px 0 0;
}
.partners .item .clock .time--sm {
	white-space: normal;
	font-size: 14px;
	line-height: 18px;
	display: block;
	margin-top: 4px;
}
.partners .item .clock .days {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    margin: 0 -10px;
    min-height: 44px;
}
.partners .item .controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: auto 0 0;
}
.partners .item .controls .rate {
	display: flex;
	justify-content: flex-start;
	align-items: stretch;
	flex-wrap: wrap;
}
.partners .item .controls .btn-red {
    margin: 0 0 0 10px;
    width: 140px;
}
.partners .item .controls .rate a {
	padding-top: 0 !important;
	padding-bottom: 0 !important;
	line-height: 30px;
	font-size: 14px;
}
.partners .item .controls .rate a:first-child {
	margin-right: 6px;
}
.partners .item .controls .rate a img {
	display: inline-block;
	vertical-align: middle;
	width: auto;
}
.partners span.h2-like{
	font-size: 24px;
	line-height: 24px;
	margin: 10px 0;
	font-weight: 500;
	border-bottom: 1px dashed;
}
.partners .dropdown.dropdown--middle-page .btn svg{
	margin: 0px 12px 0 5px;
}
.partners .dropdown .btn svg.arr{
	width: 13px;
    height: 8px;
    margin-top: 5px;
}
	/* wtf? */
.stations{
	margin: unset !important;
}
.partners .item .controls .btn-red{
	width: unset;
	padding: 10px 0;
	background: transparent;
	transition: none;
}
.partners .item .controls .btn-red:hover,
.partners .item .controls .btn-red:active{
	background: #cf2127;
	padding: 7px 10px;
	margin: 8px 0;
	width: auto;
	font-size: 14px;
} 
.partners .btn-red span{
	font-size: 0;
}
.partners .item .controls .btn-red:hover span,
.partners .item .controls .btn-red:active span{
	font-size: 14px;
}
.partners .btn-red svg{
	fill: #cf2127;
}
.partners .item .controls .btn-red:hover svg,
.partners .item .controls .btn-red:active svg{
	fill: #ffffff;
}
.partners .item .controls .btn-red:hover img, 
.partners .item .controls .btn-red:active img {
	width: 24px;
	height: 24px;
	margin-right: 6px;
	filter: brightness(0);
}

/* old elements END */

/* services */
.services-item{
	height: 100%;
	background: #ffffff;
	border-radius: 10px;
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
}
.services-item img{
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	display: block;
	flex: 0 0 auto;
}
.services-item-description{
	padding: 30px 30px 30px 30px;
	flex: 0 1 100%;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	align-items: flex-start;
}
.services-item-title {
	font-weight: 600;
	font-size: 24px;
}
.services-item-price {
	display: block;
	margin: 10px 0 0;
	font-weight: 700;
	font-size: 18px;
	line-height: 28px;
	color: #CF2127;
}
.services-item-description span{
	display: block;
	margin: 18px 0 42px;
}
.services .btn{
	display: block;
	max-width: 385px;
	margin: 50px auto 0;
	text-align: center;
	font-size: 24px;
	font-weight: 700;
}
/* services END */

/* features */
.features-item{
	display: flex;
	align-items: center;
	margin: 25px 0;
	padding-right: 40px;
}
.features-item img{
	display: block;
	width: 40px;
	margin-right: 15px;
}
.features-item span{
	font-size: 16px;
	font-weight: 400;
	line-height: 1.5;
}
/* features END */

/* guarantee */
.guarantee-description{
	background: #ffffff;
	border-radius: 100px 10px 10px 10px;
	position: relative;
}
.guarantee-description-wrapper{
	overflow: hidden;
	position: relative;
	padding: 70px 75px 70px 165px;
	min-height: 390px;
}
.guarantee-description:before{
	content: '';
	width: 514px;
	height: 286px;
	background: url(../../assets/img/glass.png) no-repeat center center;
	background-size: contain;
	position: absolute;
	left: -51%;
	top: 53%;
    margin-top: -143px;
}
.guarantee-description-wrapper:after{
	content: '';
	width: 325px;
	height: 325px;
	background: url(../../assets/img/car-insurance.png) no-repeat center center;
	background-size: contain;
	position: absolute;
	right: -50px;
	top: 50%;
	margin-top: -162px;
}
.guarantee-description h4,
.guarantee .guarantee-description-wrapper>div{
	margin-bottom: 18px;
}
.guarantee-subtitle{
	font-size: 18px;
	font-weight: 400;
	color: #191c21;
	line-height: 1.5;
	display: block;
	margin-bottom: 45px;
}
.guarantee-btn{
	display: inline-block;
	vertical-align: top;
	margin: 0;
	font-size: 18px;
	padding: 0 56px;
	line-height: 50px;
}
@media (max-width: 1199px){
	.guarantee-description-wrapper {
		padding-right: 30px;
	}
	.guarantee-description:before {
		width: 450px;
	}
}
/* guarantee END */

/* testimonials */
.testimonials-wrapper{
	background: #ffffff;
	border-radius: 10px;
	padding: 35px 30px;
}
.testimonial-big {
	display: flex;
	margin-bottom: 40px;
}
.tb-description{
	flex: 0 0 calc(50% - 20px);
	margin-left: 40px;
}
.tb-description_top {
	width: 100%;
}
.testimonial-big img{
	max-width: calc(50% - 20px);
	width: 100%;
	display: block;
	border-radius: 5px;
	height: fit-content;
}
.tb-top-row {
	margin-bottom: 25px;
}
.tb-top-row:before,
.tb-top-row:after{
	content: '';
	clear: both;
	display: table;
}
.tb-tags{
	font-size: 16px;
	font-weight: 500;
	color: #cf2127;
	background: #f2f5f7;
	display: block;
	height: 40px;
	line-height: 40px;
	border-radius: 40px 10px 40px 40px;
	padding-left: 55px;
	padding-right: 15px;
	float: left;
	position: relative;
}
.tb-tags:before{
	content: '';
	width: 22px;
	height: 22px;
	background-image: url(../../assets/img/thumbs-up.svg);
	background-repeat: no-repeat;
	background-size: contain;
	position: absolute;
	left: 18px;
	top: 8px;
}
.tb-stars{
	font-size: 18px;
	font-weight: 500;
	color: #cf2127;
	display: block;
	float: right;
	line-height: 40px;
	position: relative;
	display: block;
}
.tb-stars:before{
	content: '\2605';
	position: relative;
	left: 0;
	margin-right: 5px;
}
.tb-username{
	display: flex;
	justify-content: space-between;
	margin-top: 5px;
}
.tb-username .tb-stars {
	margin-left: 20px;
	line-height: 36px;
}
.tb-username .name{
	font-size: 36px;
	font-weight: 500;
	color: #191c21;
	line-height: 1;
}
.tb-userinfo a{
	color: #d12c32;
	font-size: 14px;
	font-weight: 400;
	padding-right: 11px;
}
.tb-userinfo-nick{
	display: inline;
	margin: 0;
	color: #d12c32;
	font-size: 14px;
	font-weight: 400;
	padding-right: 11px;
}
.tb-userinfo span{
	font-size: 14px;
	font-weight: 400;
	padding-left: 11px;
}
.tb-usertext{
	max-width: 580px;
	margin-top: 25px;
}
.tb-usertext p {
	margin-bottom: 8px;
}
.tb-usertext-title{
	margin-bottom: 8px;
	font-size: 18px;
	font-weight: 500;
	color: #191c21;
	display: block;
}
.tb-location{
	color: #a8b1b7;
	font-size: 14px;
	font-weight: 400;
	margin-top: 20px;
}
.tb-location svg{
	width: 14px;
	height: 14px;
	fill: #cf2127;
}
.tb-description .btn{
	margin-top: 25px;
}
.tb-description {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	align-items: flex-start;
	padding-bottom: 70px;
}
.testimonials-group{
	display: flex;
}
.testimonials-group-count {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-wrap: wrap;
    margin-left: -40px;
    height: 375px;
    overflow: hidden;
}
.testimonial-small-item{
	flex: 0 0 25%;
	padding: 0 0 20px 40px;
	font-size: 14px;
	line-height: 18px;
}
.testimonial-small-item img{
	display: block;
	border-radius: 5px;
	margin-bottom: 22px;
	width: 100%;
}
.ts-row:before,
.ts-row:after{
	content: '';
	clear: both;
	display: table;
}
.ts-model-auto{
	display: block;
	font-size: 14px;
	font-weight: 400;
	color: #a8b1b7;
	line-height: 14px;
	float: left;
}
.ts-stars{
	color: #cf2127;
	display: block;
	font-size: 18px;
	font-weight: 500;
	line-height: 14px;
	float: right;
	display: block;
}
.ts-stars:before{
	content: '\2605';
	position: relative;
	left: 0;
	margin-right: 5px;
}
.ts-title{
	font-size: 18px;
	font-weight: 500;
	color: #191c21;
	line-height: 1.4;
	margin: 12px 0 8px;
}
.testimonials-more:before,
.testimonials-more:after{
	content: '';
	clear: both;
	display: table;
}
.testimonials-more{
	margin-top: 30px;
}
.testimonials-more .read-more{
	float: right;
}
.testimonial-big-slider.owl-carousel .owl-nav {
	position: absolute;
	right: 0;
	bottom: 0;
}
.testimonial-big-slider.owl-carousel .owl-nav button.owl-next span,
.testimonial-big-slider.owl-carousel .owl-nav button.owl-prev span{
	display: none;
}
.testimonial-big-slider.owl-carousel .owl-nav button.owl-next{
	position: absolute;
	width: 55px;
	height: 55px;
	margin: 0;
	right: 0;
	background: #a8b1b7;
	border-radius: 50%;
	bottom: 40px;
	font-size: 18px;
	font-weight: 700;
	color: #ffffff;
	opacity: 0.4;
} 
.testimonial-big-slider.owl-carousel .owl-nav button.owl-next:before{
	content: '';
	position: absolute;
	z-index: 2;
	width: 9px;
	height: 15px;
	-webkit-mask-image: url(../../assets/img/arrow_right.svg);
    mask-image: url(../../assets/img/arrow_right.svg);
    background-color: #ffffff;
    margin-top: -8px;
    margin-left: -2px;
}
.testimonial-big-slider.owl-carousel .owl-nav button.owl-prev{
	position: absolute;
	width: 55px;
	height: 55px;
	margin: 0;
	right: 66px;
	background: #a8b1b7;
	border-radius: 50%;
	bottom: 40px;
	font-size: 18px;
	font-weight: 700;
	color: #ffffff;
	opacity: 0.4;
}
.testimonial-big-slider.owl-carousel .owl-nav button.owl-prev:before{
	content: '';
	position: absolute;
	z-index: 2;
	width: 9px;
	height: 15px;
	-webkit-mask-image: url(../../assets/img/arrow_left.svg);
    mask-image: url(../../assets/img/arrow_left.svg);
    background-color: #ffffff;
    margin-top: -8px;
    margin-left: -7px;
}
/* testimonials END */

/* cta */
.cta-wrapper{
	background: #cf2127;
	color: #ffffff;
	border-radius: 10px;
	padding: 35px 30px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.cta-wrapper h4,.cta .cta-text div,.callback .callback-text div{
	color: #ffffff;
}
.cta-wrapper .btn{
	height: 50px;
	line-height: 50px;
}
/* cta END */


/* blog */
.blog-item{
	position: relative;
}
.blog-item:before,
.blog-item:after{
	content: '';
	clear: both;
	display: table;
}
.blog-item img{
	display: block;
	border-radius: 5px;
}
.blog-item-link{
}
.blog-item-title{
	font-size: 18px;
	font-weight: 500;
	color: #191c21;
	line-height: 1.4;
	margin-top: 30px;
	display: block;
	min-height: 50px;
}
.blog-more{
	margin-top: 20px;
}
.blog-more .read-more{
	float: right;
}
/* blog END */

/* news */
.news-wrapper{
	background: #ffffff;
	border-radius: 10px;
	padding: 35px 30px;
	display: flex;
	column-gap: 40px;
}
.news-data,
.news-data-extra{
	color: #a8b1b7;
	font-size: 14px;
	font-weight: 400;	
	display: block;
}
.big-news{
	max-width: 50%;
}
.big-news-description{
	display: block;
	margin: 35px 0 25px;
}
.news-group{
	display: flex;
	width: 50%;
    flex-wrap: wrap;
    column-gap: 40px;
}
.news-item{
	flex: 1 1 255px;
	margin-top: 21px;
}
.news-item-title{
	font-size: 18px;
	line-height: 1.4;
	color: #191c21;
	display: block;
	margin-bottom: 20px;
	font-weight: 500;
}
.news-more:before,
.news-more:after{
	content: '';
	clear: both;
	display: table;
}
.news-more{
	margin-top: 30px;
}
.news-more .read-more{
	float: right;
}
/* news END */

/* callback */
.callback-wrapper{
	color: #ffffff;
	background: #cf2127;
	border-radius: 10px;
	padding: 35px 30px;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.callback-wrapper h4{
	color: #ffffff;
	margin-bottom: 5px;
}
.callback-text{
	padding-left: 210px;
	max-width: 45%;
	position: relative;
	flex: 0 0 auto;
	margin: 0 40px 0 0;
}
.callback-text:before{
	content: '';
	width: 163px;
	height: 215px;
	background: url(../../assets/img/callback-man.png) no-repeat;
	background-size: contain;
	position: absolute;
	left: 0;
	bottom: -35px;
}
.callback-text:after{
	content: '';
	width: 187px;
	height: 165px;
	background: url(../../assets/img/callback-phone.png) no-repeat;
	background-size: contain;
	position: absolute;
	right: -60px;
	bottom: -55px;
	z-index: 0;
}
.callback-wrapper form {
	position: relative;
	flex: 0 1 100%;
	display: flex;
	justify-content: flex-end;
	align-items: stretch;
	z-index: 1;
}
.callback-wrapper form input.phone-numb{
	/*width: 380px;*/
	flex: 0 1 100%;
	height: 50px;
	line-height: 50px;
	border-radius: 50px;
	border: none;
	padding: 0 25px;
	font-size: 16px;
	color: #565656;
	margin-right: 20px;
}
.callback-wrapper form input.phone-numb::-webkit-input-placeholder,
.callback-wrapper form input.phone-numb::-moz-placeholder  {
    color: #a8b1b7;
} 
.callback-wrapper form .btn {
	flex: 1 0 auto;
}
form .btn{
	border: none;
	height: 50px;
	line-height: 50px;
	padding: 0 55px;
}
@media(max-width:1199px){
	.callback-wrapper {
		display: block;
	}
	.callback-text {
		max-width: 100%;
	}
	.callback-wrapper form {
		margin: 30px 0 0;
	}
}
@media(max-width:767px){
	.callback-wrapper {
	    padding: 30px 20px;
	}
	.callback-text span {
	    font-size: 15px;
	    line-height: 20px;
	}
	.callback-text:after{
		top: -20px;
		right: 0;
	}
	.callback-text {
		margin: 0;
	}
	.callback-wrapper form {
		margin-top: 20px;
		display: block;
	}
	.callback-wrapper form input.phone-numb {
		width: 100%;
	    height: 44px;
	    margin: 0 0 10px;
	}
	.callback-wrapper form .btn {
		width: 100%;
	    height: 44px;
	    line-height: 42px;
	}
}
/* callback END */

/* examples */
.examples-wrapper{
	padding: 0 30px;
}
.example-item-images{
	max-width: 895px;
	overflow: hidden;
}
.example-item-images-left{
	float: left;
	width: 50%;
	position: relative;
}
.example-item-description{
	display: none;
	margin-top: 20px;
	padding-left: 60px;
	position: relative;
}
.example-item-description:before{
	content: '';
	width: 43px;
	height: 43px;
	background-image: url(../../assets/img/i_nfo.svg);
	background-repeat: no-repeat;
	background-size: contain;
	position: absolute;
	left: 0px;
}
.example-item-images-left span{
	position: absolute;
	color: #ffffff;
	background: #000000;
	border-radius: 35px;
	height: 35px;
	line-height: 35px;
	display: none;
	padding: 0 20px;
	left: 25px;
	top: 25px;
}
.example-item-images-right{
	float: right;
	width: 50%;
	position: relative;
}
.example-item-images-right span{
	position: absolute;
	color: #ffffff;
	background: #000000;
	border-radius: 35px;
	height: 35px;
	line-height: 35px;
	display: none;
	padding: 0 20px;
	right: 25px;
	top: 25px;
}
.example-item-images {
	display: flex !important;
	justify-content: center;
	align-items: center;
}
.example-item-images img{
	display: block;
	max-height: 640px;
	/*max-height: 635px;*/
}
.example-item-description span{
	display: block;
	color: #191c21;
	font-size: 16px;
	font-weight: 400;
	line-height: 1.4;
}
.example-item-description span b{
	font-weight: 700;
}
.owl-item.active.center .example-item-images{
	/*max-width: 895px;*/
	margin-top: 0;
}
.owl-item.active.center .example-item .example-item-images{
	/*border-radius: 20px;*/
}
.owl-item.active.center .example-item-city{
	display: none;
}
.owl-item.active.center + .owl-item > .example-item-city{
	/*font-size: 56px;
	line-height: 1;
	font-weight: 900;
	color: #ffffff;
	opacity: 0.4;
	transform: rotate(-90deg);
	position: absolute;
	left: -60px;
	bottom: 130px;*/
}
.owl-item .example-item-city{
	font-size: 56px;
	line-height: 1;
	font-weight: 900;
	color: #ffffff;
	opacity: 0.4;
	transform: rotate(-90deg);
	transform-origin: 0px 0px;
	position: absolute;
    left: 88%;
    bottom: 0;
    width: 100%;
}
/*.owl-item.active.center ~ .owl-item .example-item-city{
	font-size: 56px;
	line-height: 1;
	font-weight: 900;
	color: #ffffff;
	opacity: 0.4;
	transform: rotate(-90deg);
	position: absolute;
	left: -60px;
	bottom: 130px;
}*/
.owl-item.active.center .example-item-description{
	display: block;
}
.owl-item.active.center .example-item-images-right span{
	display: block;
}
.owl-item.active.center .example-item-images-left span{
	display: block;
}
.owl-item .example-item-images{
	/*max-width: 730px;*/
	/*margin-top: 55px;*/
}
/*.owl-carousel .owl-stage-outer:before{
	content: '';
	width: 40px;
	height: 40px;
	background-color: #f2f5f7;
	position: absolute;
	top: 40px;
	left: 0;
	z-index: 1;
	width: 0;
	height: 0;
	border-top: 100px solid red; 
	border-right: 100px solid transparent;	
}*/

.examples-wrapper.owl-carousel .owl-nav button.owl-next span,
.examples-wrapper.owl-carousel .owl-nav button.owl-prev span,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-next span,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-prev span{
	display: none;
}
.examples-wrapper.owl-carousel .owl-nav button.owl-next,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-next{
	position: absolute;
	width: 55px;
	height: 55px;
	right: 0;
	background: #a8b1b7;
	border-radius: 50%;
	top: 50%;
	margin-top: -27px;
	font-size: 18px;
	font-weight: 700;
	color: #ffffff;
} 
.examples-wrapper.owl-carousel .owl-nav button.owl-next:before,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-next:before{
	content: '';
	position: absolute;
	z-index: 2;
	width: 13px;
	height: 22px;
	-webkit-mask-image: url(../../assets/img/arrow_right.svg);
    mask-image: url(../../assets/img/arrow_right.svg);
    background-color: #ffffff;
    margin-top: -11px;
    margin-left: -5px;
}
.examples-wrapper.owl-carousel .owl-nav button.owl-prev,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-prev{
	position: absolute;
	width: 55px;
	height: 55px;
	left: 0;
	background: #a8b1b7;
	border-radius: 50%;
	top: 50%;
	margin-top: -27px;
	font-size: 18px;
	font-weight: 700;
	color: #ffffff;
}
.examples-wrapper.owl-carousel .owl-nav button.owl-prev:before,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-prev:before{
	content: '';
	position: absolute;
	z-index: 2;
	width: 13px;
	height: 22px;
	-webkit-mask-image: url(../../assets/img/arrow_left.svg);
    mask-image: url(../../assets/img/arrow_left.svg);
    background-color: #ffffff;
    margin-top: -11px;
    margin-left: -8px;
}
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-next,
.examples-wrapper-vip.owl-carousel .owl-nav button.owl-prev {
    top: calc((100% - 63px) / 2);
}
.examples-wrapper.owl-carousel .owl-stage-outer{
	overflow: unset;
	overflow-x: clip;
}
.examples-wrapper-vip {
	padding: 0 32px;
}
.examples-wrapper-vip .owl-stage {
	display: flex;
	flex-wrap: nowrap;
}
.examples-vip-item-images img {
	width: auto !important;
	border-radius: 10px;
}
.examples-vip-item {
	position: relative;
	max-width: 920px;
	padding-bottom: 63px;
    transition: all 0.4s ease;
    margin: 0 -20px;
    z-index: 5;
}
.examples-vip-item-images {
	min-width: 320px;
}
.owl-item:not(.center) .examples-vip-item {
    transform: scale(0.9);
	opacity: 0.8;
	z-index: 3;
}
.examples-vip-item-description {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    margin-top: 20px;
    padding-left: 60px;
    display: flex;
    min-height: 43px;
    justify-content: flex-start;
    align-items: center;
}
.examples-vip-item-description:before {
    content: '';
    width: 43px;
    height: 43px;
    background-image: url(../../assets/img/i_nfo.svg);
    background-repeat: no-repeat;
    background-size: contain;
    position: absolute;
    left: 0px;
    bottom: auto;
    top: 50%;
    margin-top: -22px;
}
.examples-vip-item-description span {
    display: block;
    color: #191c21;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.4;
}

/* examples END */

/* test slider */
.example-item{
  opacity:0.8;
  transition:.4s ease all;
  margin:0 -20px;
  transform:scale(0.85);
  border-radius: 0;
}
@media(max-width:1000px){
  .example-item{margin:0; transform:scale(.9)}
}
.active .example-item{
  opacity:1;
  transform:scale(1.055);
  z-index: 1000;
} 
.owl-item {
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0) scale(1.0, 1.0);
}

/*.example-item-description{position:absolute; bottom:30px; left:0; right:0; text-align:center;}*/
/*.example-item-description a{color:#fff; text-decoration:none; border-bottom:2px solid rgba(255,255,255,0.5); transition:.3s ease border-color}
.example-item-description a:hover{border-color:#fff;}*/
/*.black .example-item-description a{color:#000; border-color:rgba(0,0,0,0.4)}
.black .example-item-description a:hover{border-color:#000;}*/


.owl-controls{position:absolute; margin-top:300px;}
/* test slider */

/* count */
.bl {
  float: left;
  padding: 50px 50px 65px 0;
}

.mid {
  width: 1000px;
  margin: 0 auto;
}

.number {
  font-size: 72px;
  line-height: 0.7;
  padding: 0 0 14px;
  font-weight: 900;
  color: #a8b1b7;
}
#counter .text{
	color: #a8b1b7;
	font-size: 18px;
	line-height: 1;
	font-weight: 500;
}
.viz {
  opacity: 1;
  transition: 1s;
}

/* count END */


/* masters */
.masters-wrapper{
	padding: 0 30px;
	position: relative;
}
.video-item__play {
    position: absolute;
    z-index: 2;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 64px;
    height: 64px;
    -webkit-mask-image: url(../../assets/img/play.svg);
    mask-image: url(../../assets/img/play.svg);
    background-color: #000000;
    opacity: 0.4;
    transition: all .3s;
}
.popup-video:hover .video-item__play {
	opacity: 0.5;
}
.masters-wrapper.owl-carousel .owl-nav button.owl-next span,
.masters-wrapper.owl-carousel .owl-nav button.owl-prev span{
	display: none;
}
.masters-wrapper.owl-carousel .owl-nav button.owl-next{
	position: absolute;
	width: 55px;
	height: 55px;
	right: 0;
	background: #a8b1b7;
	border-radius: 50%;
	top: 50%;
	margin-top: -27px;
	font-size: 18px;
	font-weight: 700;
	color: #ffffff;
} 
.masters-wrapper.owl-carousel .owl-nav button.owl-next:before{
	content: '';
	position: absolute;
	z-index: 2;
	width: 9px;
	height: 15px;
	-webkit-mask-image: url(../../assets/img/arrow_right.svg);
    mask-image: url(../../assets/img/arrow_right.svg);
    background-color: #ffffff;
    margin-top: -8px;
    margin-left: -2px;
}
.masters-wrapper.owl-carousel .owl-nav button.owl-prev{
	position: absolute;
	width: 55px;
	height: 55px;
	left: 0;
	background: #a8b1b7;
	border-radius: 50%;
	top: 50%;
	margin-top: -27px;
	font-size: 18px;
	font-weight: 700;
	color: #ffffff;
}
.masters-wrapper.owl-carousel .owl-nav button.owl-prev:before{
	content: '';
	position: absolute;
	z-index: 2;
	width: 9px;
	height: 15px;
	-webkit-mask-image: url(../../assets/img/arrow_left.svg);
    mask-image: url(../../assets/img/arrow_left.svg);
    background-color: #ffffff;
    margin-top: -8px;
    margin-left: -7px;
}
.masters-item img{
	border-radius: 10px;
}
/* masters END */

/* partners-main */
.partners-main .title-block{
	position: relative;
	margin-bottom: 25px;
}
.ip-name .name{
	font-size: 24px;
	line-height: 1;
	color: #191c21;
	font-weight: 500;
	display: block;
}
.ip-name .inn{
	margin: 5px 0 0;
	font-size: 14px;
	font-weight: 300;
	line-height: 1.5;
	color: #191c21;
	display: block;
}
.ip-description{
	font-size: 16px;
	font-weight: 300;
	line-height: 1.5;
	color: #191c21;
	display: block;
	margin: 30px 0 45px;
	padding-right: 20px;
	/*padding-right: 200px;*/
}
.partners-main,
.partner-vip_page section.partners-main,
.partner-vip_page .section.partners-main {
	margin-top: 50px;
}
.partners-main-feature-wrapper{
	background: #ffffff;
	padding: 25px;
	border-radius: 10px;
	margin: 25px 0;
}
.partners-main_feature-row .partners-main-feature {
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
	align-items: stretch;
	height: 100%;
}
.partners-main_feature-row h5 {
	flex: 1 0 auto;
}
.partners-main_feature-row .partners-main-feature-wrapper {
	flex: 0 1 100%;
}
.partners-main_social {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 150px;
	margin: 5px 0 0;
}
.partners-main_social-item {
	display: block;
	padding: 5px 5px;
	margin: 0 6px;
}
.partners-main_social-item img {
	display: block;
	vertical-align: top;
}
.partners-main_crown {
	width: 200px;
	height: 32px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	gap: 8px;
	align-items: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
}
.partners-main_crown i {
	display: block;
	width: 32px;
	height: 32px;
	background: #CF2127;
	border-radius: 50%;
}
.partners-main_crown i:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: url(/assets/img/icons/crown-icon-22.png) center no-repeat;
}
.partners-main_crown span {
	width: -webkit-fit-content;
	width: -moz-fit-content;
	width: fit-content;
	font-weight: 400;
	font-size: 13px;
	line-height: 14px;
	color: #343434;
	transition: all 0.2s ease-in-out;
}
.partners-main_feature-row {
	align-items: stretch;
}
.main-service{
	position: relative;
	margin-bottom: 27px;
}
.main-service:last-child{
	margin-bottom: 0;
}
.main-service span{
	font-size: 16px;
	font-weight: 500;
	color: #191c21;
	display: inline-block;
	padding-left: 50px;
	line-height: 34px;
}
.change-glass:before{
	content: '';
	width: 32px;
	height: 32px;
	background-image: url(../../assets/img/partners/002-settings.png);
	background-size: contain;
	position: absolute;
	left: 0;
	top: 0;
}
.replace-glass:before{
	content: '';
	width: 32px;
	height: 32px;
	background-image: url(../../assets/img/partners/003-screwdriver.png);
	background-size: contain;
	position: absolute;
	left: 0;
	top: 0;
}
.ton-glass:before{
	content: '';
	width: 32px;
	height: 32px;
	background-image: url(../../assets/img/partners/001-summer.png);
	background-size: contain;
	position: absolute;
	left: 0;
	top: 0;
}
.change-glass-no:before{
	content: '';
	width: 32px;
	height: 32px;
	background-image: url(../../assets/img/partners/002-settings-no.png);
	background-size: contain;
	position: absolute;
	left: 0;
	top: 0;
}
.replace-glass-no:before{
	content: '';
	width: 32px;
	height: 32px;
	background-image: url(../../assets/img/partners/003-screwdriver-no.png);
	background-size: contain;
	position: absolute;
	left: 0;
	top: 0;
}
.ton-glass-no:before{
	content: '';
	width: 32px;
	height: 32px;
	background-image: url(../../assets/img/partners/001-summer-no.png);
	background-size: contain;
	position: absolute;
	left: 0;
	top: 0;
}
.main-service .btn{
	padding: 4px 35px;
	float: right;
	font-weight: 400;
}
.partners-main-feature-wrapper{
	position: relative;
}
.partner-contacts .how-to{
	color: #cf2127;
	border-bottom: 1px dashed #cf2127;
	position: relative;
}
.partner-contacts{
	position: relative;
	margin-bottom: 13px;
	padding-left: 30px;
}
.partner-contacts svg{
	position: absolute;
	left: 0;
	top: 4px;
	width: 15px;
	height: 15px;
}
.partner-contacts .tel{
	color: #191c21;
	font-size: 16px;
	font-weight: 700;
}
.partner-contacts .location{
	font-size: 16px;
	font-weight: 400;
	color: #191c21;
}
.icon-info:before{
	content: '?';
	position: absolute;
	left: 0px;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background-color: #a8b1b7;
	color: #ffffff;
	font-weight: 700;
	font-size: 10px;
	text-align: center;
	top: 4px;
}
.partners-time .day{
	font-size: 16px;
	font-weight: 700;
	color: #191c21;
	display: inline-block;
	width: 70px;
}
.partners-time{
	margin-bottom: 10px;
}
.partners-time .time{
	font-size: 16px;
	font-weight: 300;
	color: #191c21;
	font-weight: 400;
}
.partners-time .time-weekend{
	font-size: 16px;
	font-weight: 300;
	color: #cf2127;
	font-weight: 400;
}
.partners-time-holiday{
	font-size: 15px;
	font-weight: 300;
	color: #191c21;
	line-height: 1.5;
	padding-right: 40px;
	display: block;
	margin-top: 20px;
}
.dop-services {
	margin: 20px 0 0;
}
.dop-services-wrapper{
	background: #ffffff;
	border-radius: 10px;
	padding: 35px 30px;
	display: flex;
	margin-top: 25px;
}
.dop-services-column-count{
	column-count: 3;
}
.dop-services-column-count ul{
	margin: 0;
	padding: 0;
	width: 380px;
}
.dop-services-column-count ul li{
	display: block;
	font-size: 16px;
	line-height: 1.9;
	color: #191c21;
	font-weight: 500;
}
.partners-main .map{
	margin: 20px 0;
}
/* partners-main END */

/* premium-partners */
.premium-partners-item img{
	display: block;
    box-shadow: 0px 22px 48px -13px #00000040;
    border-radius: 5px;
    margin-bottom: 60px;
}
.premium-partners-description{
	font-size: 16px;
	font-weight: 400;
	display: block;
	line-height: 1.5;
}
.premium-partners-more .read-more{
	float: right;
	margin-top: 30px;
}
/* premium-partners END */

/*footer */
.city-list-wrapper{
	display: flex;
	margin-bottom: 25px;
}
.city-list-column-count{
	column-count: 6;
}
.city-list-wrapper ul{
	margin: 0;
	padding: 0;
	width: 195px;
}
.city-list-wrapper ul li{
	display: block;
	font-size: 12px;
	line-height: 1.5;
	color: #191c21;
}
.city-list-wrapper ul li a{
	color: #191c21;
}

.new-layout footer .footer{
	padding-top: 90px;
    padding-bottom: 43px;
}
@media only screen and (max-width:1200px) {
    .new-layout footer .footer {
        padding-top: 90px;
        padding-bottom: 40px;
    }
}
.new-layout footer .col{
	flex: unset;
}
.new-layout footer .col-2{
	width: unset;
}
.new-layout footer .col-3{
	flex: unset;
	width: unset;
}
.new-layout footer .footer .row{
	    --bs-gutter-x: unset;
    --bs-gutter-y: unset;
    flex-wrap: unset;
    margin-right: unset;
    margin-left: unset;
}
.new-layout footer .footer .row > *{
	width: unset;
}
.new-layout footer .phone-red{
	display: unset;
}
.new-layout footer .footer .bdge{
	display: none;
}
.new-layout footer .dropdown .btn svg.arr{
	fill: #000000;
}
.phone-red small{
	display: block;
}
/*footer END*/
@media (max-width: 991px) {
.blog-item-title{
	margin-top: 5px;
}
}
.heder-phone-mob{
	display: none;
	}
@media (max-width: 560px){
	.row > * {
	    padding-right: calc(var(--bs-gutter-x) * .3);
	    padding-left: calc(var(--bs-gutter-x) * .3);
	}
	.car-list-column-count {
	    column-gap: 5px;
	    padding-right: 12px;
	}
	.ps--active-x .car-list-column-count {
		padding-bottom: 20px;
	}
	.car-list-wrapper {
		position: relative;
		height: 360px;
		overflow: hidden;
	}
	.car-list-wrapper .ps__rail-y {
		width: 6px;
		border-radius: 6px;
		opacity: 1;
	    background-color: #dadada !important;
	}
	.car-list-wrapper .ps__rail-x {
		height: 6px;
		border-radius: 6px;
		opacity: 1;
	    background-color: #dadada !important;
	}
	.car-list-wrapper .ps__thumb-y {
		right: 0;
		width: 100%;
		border-radius: 6px;
		background-color: #cf2127;	
		opacity: 1;
	}
	.car-list-wrapper .ps__thumb-x {
		height: 6px;
		bottom: 0;
		width: 100%;
		border-radius: 6px;
		background-color: #cf2127;	
		opacity: 1;
	}
	.car-list-wrapper.ps:hover > .ps__rail-x, 
	.car-list-wrapper.ps:hover > .ps__rail-y, 
	.car-list-wrapper.ps--focus > .ps__rail-y, 
	.car-list-wrapper.ps--scrolling-x > .ps__rail-x, 
	.car-list-wrapper.ps--scrolling-y > .ps__rail-y {
		opacity: 1;
	}
	.car-list-wrapper .ps__rail-y:hover > .ps__thumb-y, 
	.car-list-wrapper .ps__rail-y:focus > .ps__thumb-y, 
	.car-list-wrapper .ps__rail-y.ps--clicking .ps__thumb-y {
	    background-color: #cf2127;
	    width: 8px;
	}
	/*.car-list-wrapper::-webkit-scrollbar {
    	-webkit-appearance: none;
	}
	.car-list-wrapper::-webkit-scrollbar:vertical {
	    width: 6px;
	}
	.car-list-wrapper::-webkit-scrollbar:horizontal {
	    height: 6px;
	}
	.car-list-wrapper::-webkit-scrollbar-thumb {
	    background-color: #cf2127;
	    border-radius: 10px;
	}
	.car-list-wrapper::-webkit-scrollbar-track {
	    border-radius: 10px;
	    background-color: #dadada;
	}*/
	.car-list{
		background: #ffffff;
		border-radius: 10px;
		padding: 0 0 35px;
	}
	.car-list-category {
    	min-width: unset;
    }
    .car-list-category ul li {
		padding-top: 10px;
    	padding-bottom: 0;
    }
    .car-list-category ul li a {
		padding: 0;
		display: flex;
		justify-content: flex-start;
		align-items: center;
		min-height: 30px;
		line-height: 15px;
		font-size: 14px;
	    word-break: break-word;
    }
    .car-list-letter {
		line-height: 30px;
		flex: 0 0 34px;
		width: 34px;
		font-size: 22px;
		font-weight: 400;
		padding: 10px 0 0;
    }
    .cars-logo {
		position: relative;
		width: 30px;
		margin-right: 8px;
		padding: 0;
    }
    .car-list-category ul {
    	padding-left: 0px;
	}
	.car-list .btn {
		max-width: 320px;
		padding: 0 30px;
		line-height: 44px;
		margin: 35px auto 0;
	}
	.prices .item > img{
	    /*padding: 0 65px 0 25px;*/
	}

	.example-item-description:before {
	    left: 29px;
	}
}

 @media (max-width: 560px){
 	.red-hightlight{font-size: 22px;}
 	.guarantee-description h4,.guarantee .guarantee-description-wrapper div{font-size: 20px!important;}
 	.guarantee-description:before{background: url(../../assets/img/car-insurance.png) no-repeat center center;    background-size: 100%;}

 	.title-block {
 		margin-bottom: 30px;
 	}
	.bl{
	    padding: 25px 15px 35px 0 !important;
	}

	.partners span.h2-like {
		font-size: 20px;
    	line-height: 20px;
	}


 }
 @media only screen and (max-width:349px) {
    .heder-phone-mob {
        margin-left: 2px;
    }
}

.partner-vip_page section, .partner-vip_page .section {
	margin-top: 100px;
	margin-bottom: 100px;
}

.partner-vip_page .top-banner,
.partner-vip_page section.top-banner,
.partner-vip_page .section.top-banner {
	position: relative;
	margin-bottom: 35px;
	margin-top: -25px;
	z-index: 1;
}
.partner-vip_page .example-item-images img {
	width: auto;
    height: auto;
    border-radius: 10px;
    margin: 0 auto;
}
.partner-vip_page .examples-wrapper .owl-stage {
	display: flex;
	justify-content: flex-start;
	align-items: center;
}
/*vip banner text - 28.02.23*/
.partner-vip_page .top-banner h1 {
	position: absolute;
	left: 0;bottom: 40px;
	width: 100%;
	text-align:center;
	color: #ffffff;
}
/*vip banner text*/

@media (min-width: 992px) and (max-width: 1399px) {
	.partner-vip_page section,.partner-vip_page .section {
		margin-top: 80px !important;  
		margin-bottom: 80px !important;  
	}
	.partner-vip_page .top-banner, .partner-vip_page section.top-banner, .partner-vip_page .section.top-banner {
		margin-top: -20px !important;
	}
}
@media (min-width: 768px) and (max-width: 1399px) {
	.partners-main .title-block {
		padding-left: 60px;
	}
	.partners-main_crown {
		left: 0;
	}
	.partners-main_crown span {
		left: 0;
		margin-left: 0;
		text-align: left;
	}
}

@media (max-width: 767px) {
	.partner-vip_page section, .partner-vip_page .section {
		margin-top: 35px !important;  
		margin-bottom: 35px !important;  
	}
	.partner-vip_page .top-banner, .partner-vip_page section.top-banner, .partner-vip_page .section.top-banner {
		margin-top: -16px !important;
		margin-bottom: 25px !important;
	}
	.partners-main_side {
		display: flex;
		justify-content: space-between;
		align-items: center;	
		margin-bottom: 20px;
	} 
	.partners-main_social {
		justify-content: flex-end;
		margin: 0;
	}
	.partners-main .partners-main_side .rate{
		margin-bottom: 0px;
	}
	.partners-main .title-block {
		margin-left: 0;
		margin-right: 75px;
	}
	.partners-main_crown {
		left: auto;
		right: 0;
		margin-left: 0;
		margin-right: -60px;
		top: -5px;
	}
	.partners-main_crown span {
		bottom: auto;
		top: 100%;
		margin-top: 5px;
		margin-bottom: 0;
	}
	.partners-main .ip-name {
		margin-right: 70px;
	}
	.partner-vip_page .examples-wrapper .owl-item .example-item-images {
		max-width: 85vw;
	}

	.examples-wrapper-vip {
		padding: 0;
		margin: 0 -7px;
		width: calc(100% + 14px) !important;
	}
	.examples-wrapper-vip.owl-carousel .owl-stage {
		display: flex;
		justify-content: flex-start;
		align-items: stretch;
	}
	.examples-wrapper-vip.owl-carousel .owl-stage-outer {
	    padding: 0 15px;
	}
	.examples-vip-item {
		margin: 0;
		padding-bottom: 42px;
		max-width: 80vw;
	}
	.examples-vip-item-images {
		min-width: 50vw;	
	}
	.examples-vip-item-description {
	    margin-top: 12px;
	    padding-left: 45px;
	    min-height: 30px;
	}
	.examples-vip-item-description:before {
		left: 0;
		width: 30px;
		height: 30px;
		margin-top: -15px;
	}
	.examples-vip-item-description span {
	    font-size: 12px;
	}
	.owl-item:not(.center) .examples-vip-item {
		opacity: 1;
		transform: none;
	}
}

.how-to-repair .btn{
    max-width: 280px;
    margin: 60px auto 0;
    padding: 0 30px;
    line-height: 48px;
    font-size: 18px
}
#sync1 .item {
    background: #ffffff;
    padding: 35px;
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    display: flex;
    align-items: center;
}
#sync1 .item img{
    width: 50%;
    display: block;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
#sync1 .item span{
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    color: #000000;
    padding-left: 40px;
    padding-right: 140px;
}
#sync2 .item {
    padding: 10px 0px;
    margin: 5px 5px 40px;
    cursor: pointer;
}
#sync2 .item .number-step {
    font-size: 48px;
    font-weight: 900;
    font-family: 'Montserrat', sans-serif;
    line-height: 1;
    color: #D6DBDE;
    position: relative;
}
#sync2 .item .number-step:before{
    content: '';
    width: 190px;
    height: 4px;
    background: url(/assets/img/step-line.png);
    background-size: contain;
    position: absolute;
    left: 50px;
    bottom: 11px;
}
#sync2 .current .item .number-step {
    color: #CF2127;
}

#sync2 .item .number-step-descr{
    font-size: 18px;
    font-weight: 500;
    color: #191C21;
    display: block;
    padding-left: 50px;
}
#sync2 .current .item .number-step-descr{
    color: #CF2127;
}
#sync2 .owl-item:last-of-type .item .number-step:before {
    display: none;
}

.how-to-repair .owl-theme .owl-nav {
  /*default owl-theme theme reset .disabled:hover links */
}
.how-to-repair .owl-theme .owl-nav [class*='owl-'] {
    transition: all .3s ease;
}
.how-to-repair .owl-theme .owl-nav [class*='owl-'].disabled:hover {
    background-color: #D6D6D6;
}

#sync1.owl-theme {
    position: relative;
}
#sync1.owl-theme .owl-next, 
#sync1.owl-theme .owl-prev {
    position: absolute;
    width: 55px;
    height: 55px;
    background: #a8b1b7;
    border-radius: 50%;
    top: 50%;
    margin-top: -27px;
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
}
#sync1.owl-theme .owl-next span, 
#sync1.owl-theme .owl-prev span{
    display: none;
}
#sync1.owl-theme .owl-next:before{
    content: '';
    position: absolute;
    z-index: 2;
    width: 9px;
    height: 15px;
    -webkit-mask-image: url(/assets/img/arrow_right.svg);
    mask-image: url(/assets/img/arrow_right.svg);
    background-color: #ffffff;
    margin-top: -8px;
    margin-left: -2px;
}
#sync1.owl-theme .owl-prev:after{
    content: '';
    position: absolute;
    z-index: 2;
    width: 9px;
    height: 15px;
    -webkit-mask-image: url(/assets/img/arrow_left.svg);
    mask-image: url(/assets/img/arrow_left.svg);
    background-color: #ffffff;
    margin-top: -8px;
    margin-left: -7px;
}
#sync1.owl-theme .owl-prev {
    right: 80px;
}
#sync1.owl-theme .owl-next {
    right: 10px;
}
@media (max-width: 1200px){
    #sync2 .item .number-step:before{
        width: 130px;
    }
    #sync2 .item .number-step-descr{
        font-size: 13px;
    }
}
@media (min-width: 1200px){
    #sync1 .item span {
        font-size: 18px !important;
        line-height: 1.4 !important;
    }
}
@media (max-width: 1000px){
    #sync2 .item .number-step{
        font-size: 38px;
    }
    #sync2 .item {
	    margin: 5px 5px 30px;
	}
    #sync2 .item .number-step-descr{
		padding-left: 0;
		font-size: 13px;
		line-height: 1.2;
    }
    #sync2 .item .number-step:before{
        left: 35px;
        width: 90px;
    }
    #sync1 .item span{
        font-size: 16px;
        padding-right: 0;
        padding-left: 30px;
    }
    #sync1 .item{
        align-items: flex-start;
        padding: 24px;
    }
    #sync1.owl-theme .owl-next, #sync1.owl-theme .owl-prev{
        top: unset;
	    bottom: -20px;
	    width: 40px;
	    height: 40px;
    }
    #sync1.owl-theme .owl-prev {
	    right: 60px;
	}
}
@media (max-width: 767px){
    #sync2 .item{
        margin: 5px 5px 15px;
    }
    #sync2 .item .number-step {
        font-size: 25px;
    }
    #sync2 .item .number-step-descr {
        padding-left: 20px;
    }
    #sync1 .item span{
        padding-right: 35px;
        padding-bottom: 50px;
    }
    #sync1 .item img{
        width: 48%;
    }
    #sync2 .item .number-step:before{
        left: 27px;
        bottom: 6px;
        width: 75px;
    }
}
@media (max-width: 560px){
    #sync1 .item img{
        width: 100%;
    }
    #sync1 .item span{
        padding: 10px 0 50px;
        display: block;
    }
    #sync1 .item{
        display: block;
    }
    #sync1.owl-theme .owl-next, #sync1.owl-theme .owl-prev{
        width: 45px;
        height: 45px;
    }
    #sync2 .item .number-step-descr{
        padding-left: 0;
        opacity: 0;
        font-size: 14px;
    }
    #sync2 .item .number-step-descr br{
        display: none;
    }
    #sync2 .current .item .number-step-descr{
        opacity: 1;
    }
}



/* GLASS CHANGE */
.change-section,
section.change-section ,
.section.change-section{
	margin: 140px 0;
}
.page-section_title {
	display: block;
	margin: 0 0 48px;
	font-weight: 700;
	font-size: 48px;
	line-height: 56px;
	letter-spacing: 0;
	color: #191C21;
}
.page-section_text {
	display: block;
	max-width: 1140px;
	margin: 40px 0;
	font-weight: 400;
	font-size: 20px;
	line-height: 28px;
	color: #000000;
}
.page-section_text p {
	display: block;
	font-size: 20px;
	line-height: 28px;
	margin: 0 0 10px;
}
.breadcrumb-block {
	margin: 50px 0 100px;
}
	.breadcrumb-block_list {
		display: flex;
		justify-content: flex-start;
		align-items: flex-start;
		flex-wrap: wrap;
		padding: 0;
		margin: 0;
	}
	.breadcrumb-block_item {
		display: block;
		font-weight: 300;
		font-size: 14px;
		line-height: 20px;
	}
		.breadcrumb-block_item a {
			color: #8D8D8D;		
		}
		.breadcrumb-block_item:after {
			content: "-";
			display: inline-block;
			vertical-align: top;
			width: 12px;
			text-align: center;
			color: #8D8D8D;		
		}
		.breadcrumb-block_item--active a {
			color: #000000;
		}
		.breadcrumb-block_item--active:after {
			display: none;
		}

.change-head-block {
	display: flex;
	justify-content: space-between;
	align-items: stretch;
}
	.change-head-block_info {
		flex: 0 0 44%;
	}
	.change-head-block_inner {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		align-items: flex-start;
		width: 500px;
		max-width: 100%;
		height: 100%;
		padding-right: 40px;
	}
	.change-head-block_title {
		display: block;
		margin: 0;
		font-weight: 600;
		font-size: 56px;
		line-height: 66px;
		color: #000000;
		text-align: left;
		letter-spacing: 0;
	}
	.change-head-block_city {
		border-bottom: 1px dashed #CF2127;
		cursor: pointer;
	}
	.change-head-block_list {
		margin: 6px 0 0;
	}
		.change-head-block_list-item {
			position: relative;
			display: block;
			margin: 24px 0 0;
			padding: 0 0 0 30px;
			font-weight: 400;
			font-size: 20px;
			line-height: 24px;
			color: #000000;
		}
			.change-head-block_list-item:before {
				content: "";
				position: absolute;
				left: 3px;
				top: 4px;
				width: 16px;
				height: 16px;
				background-image: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_421_795)'%3E%3Cpath d='M14.9278 3.99996L13.0714 2.92808L11.9998 1.07188H9.85631L7.99984 0L6.14336 1.07188H3.99992L2.92804 2.92836L1.07188 3.99996V6.14341L0 7.99988L1.07188 9.85636V11.9998L2.92836 13.0717L4.00024 14.9282H6.14368L7.99988 15.9998L9.85636 14.9279H11.9998L13.0717 13.0714L14.9282 11.9995V9.85608L16 7.99961L14.9282 6.14313V3.99996H14.9278ZM7.27781 11.2742C7.12865 11.4233 6.93213 11.4958 6.73649 11.4931C6.54081 11.4959 6.34433 11.4233 6.19517 11.2742L3.85549 8.93448C3.5624 8.64139 3.5624 8.16593 3.85549 7.87284L4.47487 7.25346C4.76795 6.96038 5.24341 6.96038 5.5365 7.25346L6.73649 8.45345L10.463 4.72668C10.7561 4.43359 11.2315 4.43359 11.5246 4.72668L12.144 5.34606C12.4371 5.63914 12.4371 6.1146 12.144 6.40769L7.27781 11.2742Z' fill='%23CF2127'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_421_795'%3E%3Crect width='16' height='16' fill='white'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A");
				background-position: center;
				background-repeat: no-repeat;
			}
	.change-head-block_btn {
		margin: 30px 0 0;
		padding: 0 24px;
		line-height: 48px;
		font-size: 20px;
	}
	.change-head-block_img {
		flex: 0 1 56%;
	}
		.change-head-block_img img	{
			display: block;
			max-width: 100%;
			border-radius: 4px;
		}


.catalog-search {
	margin: 64px 0 0;
	padding: 52px 14px;
	background: #FFFFFF;
	box-shadow: 0px 1.70484px 8.52419px 1.70484px rgba(33, 33, 33, 0.08);
	border-radius: 20px;
}
.catalog-search_inner {
	display: flex;
	justify-content: space-between;
	align-items: stretch;
}
.catalog-search_select {
	margin: 0 24px;
	flex: 0 1 33%;
}
	.catalog-search_select .btn {
		width: 100%;
	}
	.catalog-search_select .dropdown .btn {
		line-height: 38px;
		font-weight: 400;
		font-size: 20px;
		background: #FFFFFF;
		border: 1px solid #A8B1B7;
		white-space: nowrap;
	}
	.catalog-search_select .dropdown .btn svg.arr {
		fill: #000000;
		width: 11px;
    	height: 13px;
	}
	.catalog-search_select .dropdown.show .btn {
		border-radius: 24px;
	}
	.catalog-search_select .dropdown .dropdown-menu {
	    background: #fff;
	    border: 1px solid #d3dbe0;
        margin: -1px 24px -1px;
	}
.catalog-search_btn {
	margin: 0 24px;
	flex: 0 0 200px;
}
	.catalog-search_btn .filter-btn {
		display: block; 
		width: 100%;
		padding: 0 20px;
		font-weight: 400;
		font-size: 20px;
		line-height: 48px;
		text-align: center;
		color: #fff;
	}
	.catalog-search_btn .filter-btn svg {
		width: 20px;
		height: 20px;
	    display: inline-block;
	    vertical-align: top;
	    margin-top: 14px;
	}

.services-list {
	display: flex;
	justify-content: flex-start;
	align-items: stretch;
	flex-wrap: wrap;
	margin: -24px -20px 0;
}
.services-list_item {
	flex: 0 0 33.3333%;
	margin: 40px 0 0; 
	padding: 0 20px;
}
	.services-list_item-inner {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		align-items: stretch;
		height: 100%;
		padding: 20px 16px 22px;
		background: #fff;
		border-radius: 32px;
		box-shadow: 0 0 6px rgba(0,0,0,0.1);
	}
	.services-list_item-img {
		position: relative;
		height: 266px;
		flex: 0 0 266px;
	}
	.services-list_item-img img {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		object-position: center;
		object-fit: cover;
		border-radius: 10px;
	}
	.services-list_item-info {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		align-items: stretch;
		flex: 0 1 100%;
		padding: 24px 0 0;
	}
	.services-list_item-top {
		padding: 0 8px;
	}
	.services-list_item-title {
		display: block;
		margin: 0;
		font-weight: 500;
		font-size: 28px;
		line-height: 33px;
		letter-spacing: 0;
		color: #000000;
	}
	.services-list_item-price {
		display: block;
		margin: 6px 0 0;
		font-weight: 800;
		font-size: 28px;
		line-height: 33px;
		letter-spacing: 0;
		color: #CF2127;
	}
	.services-list_item-btn {
		display: flex;
		justify-content: flex-start;
		margin: 24px 0 0;
	}
	.services-list_item-btn .btn {
		display: block;
		padding: 0 24px;
		line-height: 40px;
		font-size: 20px;
	}

.partners-s {

}
	.partners-s_title {
		display: flex;
		justify-content: flex-start;
		align-items: flex-end;
	}
		.partners-s_title .dropdown {
			margin: 0 0 0 24px;
			padding: 0 24px;
		}
		.partners-s_title .dropdown.dropdown--middle-page.show {
			margin: 0 0 0 24px;
			padding: 0 24px;
		}
		.partners-s_title .dropdown.dropdown--middle-page .dropdown-menu {
			margin: 0 -24px;
		}
		.partners-s_title .dropdown.dropdown--middle-page .dropdown-header {
			padding: 0px 24px 0;
		}
		.partners-s_title .dropdown.dropdown--middle-page .scroll-content {
			padding: 0;
		}
		.partners-s_title .dropdown.dropdown--middle-page .dropdown-menu .dropdown-item {
			padding: 6px 24px;
		}
		.partners-s_title .dropdown.dropdown--middle-page .scroll-wrap {
			overflow: auto;
			max-height: none;
		}
		.partners-s_title .custom-scrollbar {
		    max-height: 400px;
		    overflow: hidden;
		}
		.partners-s .partners-s_title span.h2-like {
			font-size: 28px;
			font-weight: 400;
			padding: 5px 0;
			margin: 5px 0;
		}
		.partners-s .partners-s_title .dropdown .btn svg.arr {
			margin-left: 14px;
		}
	.partners-s_map {
		margin: 56px 0 0;
		width: 100%;
	}
		.partners-s_map .map-inner {
			display: block;
			width: 100%;
			height: 600px;
		}
	.partners-s_slider-wrap {
		margin: 64px 0 0;
	}
	.partners-s_slider {
		position: relative;
		padding: 0 66px;
	}
	.partners-s_slider .item.special:after {
		width: 42px;
		height: 42px;
		bottom: -20px;
		margin-left: -21px;
		background-size: 22px;
	}
	.partners-s_slider .item {
		padding-top: 24px;
		padding-left: 24px;
		padding-right: 24px;
		padding-bottom: 30px;
		border: 1px solid #fff;
		margin: 8px 13px 20px;
		box-shadow: 0px 1.70484px 8.52419px 1.70484px rgba(33, 33, 33, 0.12);
	}
	.partners-s_slider .item.special {
		border-color: #CF2121;
	}
	.partners-s_slider .item.special:before {
		display: none;
	}
	.partners-s_slider .item .address {
		font-size: 16px;
		line-height: 17px;
		min-height: 51px !important;
	}
	.partners-s_slider .item .phone {
		font-size: 16px;
		line-height: 16px;
	}
	.partners-s_slider .item .clock {
		font-size: 16px;
		line-height: 16px;
	}
	.partners-s_slider .owl-nav {
		margin: 0;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-prev span,
	.partners-s_slider.owl-carousel .owl-nav button.owl-next span {
		display: none;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-prev,
	.partners-s_slider.owl-carousel .owl-nav button.owl-next {
		position: absolute;
		width: 48px;
		height: 48px;
		top: 50%;
		margin-top: -34px;
		padding: 0;
		border: none;
		outline: none;
		background: #A8B1B7;
		border-radius: 50%;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-prev.disabled,
	.partners-s_slider.owl-carousel .owl-nav button.owl-next.disabled {
		opacity: 0.5;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-prev {
		left: 0;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-next {
		right: 0;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-prev:before {
		content: '';
	    position: absolute;
	    z-index: 2;
	    width: 13px;
	    height: 22px;
	    -webkit-mask-image: url(../../assets/img/arrow_left.svg);
	    mask-image: url(../../assets/img/arrow_left.svg);
	    background-color: #ffffff;
	    margin-top: -11px;
	    margin-left: -8px;
	}
	.partners-s_slider.owl-carousel .owl-nav button.owl-next:before {
	    content: '';
	    position: absolute;
	    z-index: 2;
	    width: 13px;
	    height: 22px;
	    -webkit-mask-image: url(../../assets/img/arrow_right.svg);
	    mask-image: url(../../assets/img/arrow_right.svg);
	    background-color: #ffffff;
	    margin-top: -11px;
	    margin-left: -5px;
	}

.change-request,
section.change-request, .section.change-request {
	position: relative;
	margin: 0;
	min-height: 415px;
	background: #FFFFFF;
	box-shadow: 0px 1.70484px 8.52419px 1.70484px rgba(33, 33, 33, 0.12);
}
	.change-request .container {
		position: relative;
		z-index: 1;
		justify-content: flex-end;
		align-items: center;
		display: flex;
	}
	.change-request_inner {
		flex: 0 0 565px;
	}
	.change-request_form {
		padding: 50px 0 46px;
	}
	.change-request_title {
		display: block;
		margin: 0;
		font-weight: 600;
		font-size: 48px;
		line-height: 56px;
		letter-spacing: 0;
		color: #000000;
	}
	.change-request_text {
		display: block;
		margin: 12px 0 0;
		font-weight: 400;
		font-size: 28px;
		line-height: 33px;
		letter-spacing: 0;
		color: #000000;
	}
	.change-request form {
		display: block;
	}
	.change-request_fields {
		margin: 34px 0 0;
		display: flex;
		justify-content: space-between;
		align-items: flex-start;
		max-width: 510px;
	}
	.change-request_fields input {
		display: block;
		flex: 0 0 44%;
		width: 44%;
		height: 48px;
		padding: 0;
		border: none;
		border-bottom: 1px solid rgba(0,0,0,0.6);
		font-weight: 400;
		font-size: 20px;
		color: #000;
		background: transparent;
	}
	.change-request_fields input::placeholder {
		color: rgba(0,0,0,0.6);
		font-size: 20px;
	}
	.change-request_btn {
		margin: 54px 0 0;
		display: flex;
		justify-content: flex-start;
	}
	.change-request_btn .btn {
		display: block;
		padding: 0 24px;
		font-size: 20px;
		height: 48px;
		line-height: 48px;
	}
	.change-request_img {
		position: absolute;
		z-index: 0;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
	.change-request_img img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
	}

.examples-tiles {
	margin: -28px 0 0;
	padding: 0 0 30px;
}
.examples-tiles_inner {
	display: flex;
	justify-content: flex-start;
	align-items: stretch;
	flex-wrap: wrap;
}
.examples-tiles_item {
	margin: 20px 0 0;
	display: flex;
}
	.examples-tiles_item img {
		display: block;
		max-width: 100%;
	}
	.examples-tiles_item.examples-tiles_item--1 {
		flex: 0 0 calc(20.5% + 20px);
		margin-right: 0;
		justify-content: flex-end;
		align-items: flex-end;
		margin-left: calc(5% - 20px);
		padding-right: 20px;
	}
	.examples-tiles_item.examples-tiles_item--2 {
		flex: 0 0 34%;
		margin-right: 0;
		justify-content: center;
		align-items: flex-end;
	}
	.examples-tiles_item.examples-tiles_item--3 {
		flex: 0 0 calc(35.5% + 20px);
		justify-content: flex-start;
		align-items: flex-end;
		margin-right: calc(5% - 20px);
		padding-left: 20px;
	}
	.examples-tiles_item.examples-tiles_item--4 {
		flex: 0 0 calc(25.2% + 20px);
		margin-right: 0;
		justify-content: flex-end;
		align-items: flex-start;
		margin-left: calc(7.8% - 20px);
		padding-right: 20px;
	}
	.examples-tiles_item.examples-tiles_item--5 {
		flex: 0 0 34.3%;
		margin-right: 0;
		justify-content: center;
		align-items: flex-start;
	}
	.examples-tiles_item.examples-tiles_item--6 {
		flex: 0 0 calc(24.9% + 20px);
		justify-content: flex-start;
		align-items: flex-start;
		margin-right: calc(7.8% - 20px);
		padding-left: 20px;
	}
.examples-tiles_text {
	display: block;
	margin: 30px 0 0 33%;
	font-weight: 400;
	font-size: 20px;
	line-height: 28px;
	color: #000000;
}
	.examples-tiles_text p {
		margin: 0 0 10px;
	}

@media (max-width: 1199px) {
	.examples-tiles_text {
		font-size: 18px;
		line-height: 26px;
	}
}
@media (max-width: 767px) {
	#sync2 .current .item .number-step {
		display: block;
		width: 100%;
	}
	#sync2 .item .number-step:before {
		width: auto;
		right: 0;
	}
	#sync2 .current .item .number-step-descr {
		margin-top: 10px;
		font-size: 16px;
	}
	#sync1 .item span {
	    padding: 20px 0 10px;
	    display: block;
	    font-size: 14px;
	    line-height: 1.3;
	}
	#sync1 .owl-theme .owl-nav {
		margin-top: 0;
	}
	#sync1.owl-theme .owl-next, #sync1.owl-theme .owl-prev {
	    bottom: -20px;
	    width: 40px;
	    height: 40px;
	    margin: 0 10px;
	}

	.how-to-repair .btn {
		margin: 30px auto 0 !important;
	}

	.examples-tiles {
		margin: -15px 0 0;
		padding: 0;
	}
	.examples-tiles_item {
		margin: 18px 0 0;
	}
		.examples-tiles_item img {
			display: block;
			max-width: 100%;
		}
		.examples-tiles_item.examples-tiles_item--1 {
			flex: 0 0 45%;
			margin: 18px 5% 0 0;
			padding: 0;
		}
		.examples-tiles_item.examples-tiles_item--2 {
			flex: 0 0 50%;
			margin: 18px 0 0;
			padding: 0;
		}
		.examples-tiles_item.examples-tiles_item--3 {
			flex: 0 0 52%;
			margin: 18px 5% 0 0;
			padding: 0;
		}
		.examples-tiles_item.examples-tiles_item--4 {
			flex: 0 0 43%;
			margin: 18px 0 0;
			padding: 0;
			align-items: center;
		}
		.examples-tiles_item.examples-tiles_item--5 {
			flex: 0 0 48%;
			margin: 18px 5% 0 0;
			padding: 0;
		}
		.examples-tiles_item.examples-tiles_item--6 {
			flex: 0 0 47%;
			margin: 18px 0 0;
			padding: 0;
		}
	.examples-tiles_text {
		margin: 20px 0 0;
		font-size: 14px;
		line-height: 20px;
	}
		.examples-tiles_text p {
			margin: 0 0 10px;
		}
}

@media (max-width: 560px) {
	.zamena-page .row > * {
	    padding-right: calc(var(--bs-gutter-x) * .5);
	    padding-left: calc(var(--bs-gutter-x) * .5);
	}

}

header .header {
	position: relative;
}
.header-search {
	margin-top: -4px;
}
.header-search_btn {
	display: none;
	width: 44px;
	height: 44px;
	justify-content: center;
	align-items: center;
	background: #A8B1B7;
	border-radius: 50%;
    transition: 0.2s;
}
	.header-search_btn i {
		display: block;
		margin: auto;
		color: #fff;
		font-size: 18px;
	}
.header-search_form {
	display: block;
}
	.header-search_form form {
		position: relative;
		display: block;
	}
	.header-search_form input {
		position: relative;
		display: block;
		width: 100%;
		height: 45px;
		border: 1px solid #dbdbdb;
		border-radius: 24px;
		padding: 0 70px 0 20px;
		font-size: 16px;
		font-style: italic;
		color: #000;
		background: #fff;
		z-index: 1;
	}
	.header-search_form input::placeholder {
		opacity: 0.4;
		color: #000;
	}
	.header-search_form button {
		position: absolute;
		top: 0;
		right: 10px;
		height: 100%;
		width: 62px;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0;
		background: transparent;
		z-index: 2;
	}
	.header-search_form button i {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background-image: url("data:image/svg+xml,%3Csvg width='21' height='21' viewBox='0 0 21 21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M19.262 20.7658C19.7684 20.3369 20.2506 19.8743 20.6965 19.3839C21.1145 18.9236 21.1011 18.432 20.6541 17.9815C19.3214 16.637 17.9669 15.3131 16.6112 13.9904C16.4574 13.8406 16.2526 13.7235 16.0515 13.6425C15.7886 13.5374 15.6759 13.413 15.6929 13.2391C16.5906 11.8898 17.1128 10.2724 17.1128 8.53171C17.1128 3.82073 13.2819 0 8.557 0C3.83084 0 0 3.82073 0 8.53171C0 13.2439 3.83084 17.0634 8.557 17.0634C10.1671 17.0634 11.6743 16.6201 12.9597 15.8482H12.9609C12.9863 15.8458 13.0118 15.8398 13.0384 15.8301C13.1874 15.7745 13.4697 15.8035 13.557 15.9062C13.7048 16.0809 13.8321 16.2741 13.9592 16.4672C14.1142 16.7027 14.269 16.9378 14.4608 17.1383C15.5754 18.3016 16.7203 19.437 17.87 20.5665C18.3788 21.0665 18.8235 21.1354 19.262 20.7658ZM13.6013 8.53171C13.6013 11.3096 11.3427 13.5616 8.55651 13.5616C5.77035 13.5616 3.51172 11.3096 3.51172 8.53171C3.51172 5.75378 5.77035 3.50183 8.55651 3.50183C11.3427 3.50183 13.6013 5.75378 13.6013 8.53171Z' fill='%23A8B1B7'/%3E%3C/svg%3E%0A");
		background-position: center;
		background-repeat: no-repeat;
	}
	.header-search.open .header-search_btn {
		background: #cf2127;
	}
	.header-search.open .header-search_form {
		display: block;
	}
@media (max-width: 1199px) { 
	.header-search_btn {
		position: absolute;
	    width: 36px;
	    height: 36px;
	}
	.header-search_btn i {
		font-size: 15px;
	}
	.header-search_form {
		top: 58px;
		left: 60px;
	}
		.header-search_form input {
			height: 36px;
			padding: 0 60px 0 20px;
			font-size: 15px;
		}
		.header-search_form input::placeholder {
			font-size: 15px;
		}
		.header-search_form button {
			width: 60px;
			right: 0;
		}
		.header-search_form button i {
			font-size: 20px;
		}
}
@media (max-width: 991px) { 
	.header-search {
		display: none;
	}
    .header-search_form input {
        padding-left: 17px;
        height: 45px;
        font-size: 14px;
    }
}
 .h2_title   {font-size: 48px;
    font-weight: 500;
    color: #191c21;
    line-height: 1;
    margin: 0;}

.brands-page .change-section, section.change-section, .section.change-section{    margin: 60px 0;}
.brands-page .breadcrumb-block {
	margin-bottom: 35px;
	margin-top: 25px;
}
.brands-page_title {
	display: block;
	margin: 0;
	font-weight: 600;
	font-size: 56px;
	line-height: 66px;
	text-align: left;
	color: #000000;
}
.brands-page_list {
	margin: 12px -10px 0;
	display: flex;
	justify-content: flex-start;
	align-items: flex-start;
	flex-wrap: wrap;
}
.brands-page_list-item {
	margin: 44px 10px 0;
	flex: 0 1 calc(20% - 20px);
}
	.brands-page_list-item_img {
		display: flex;
		justify-content: center;
		align-items: center;
		margin: 0 0 22px;
		height: 100px;
	}
	.brands-page_list-item_img img {
		display: block;
		margin: auto;
		max-width: 100%;
		max-height: 100%;
	}
	.brands-page_list-item_title {
		display: block;
		margin: 0;
		font-weight: 400;
		font-size: 20px;
		line-height: 23px;
		text-align: center;
		color: #CD1518;
	}

.brands-page_detail {
	display: flex;
	justify-content: space-between;
	align-items: flex-start;
}
	.brands-page_detail-inner {
		flex: 0 1 100%;
		margin-right: 40px;
	}
	.brands-page_detail-title {
		display: block;
		margin: 0;
		font-weight: 600;
		font-size: 56px;
		line-height: 66px;
		color: #000000;
		text-align: left;
	}
	.brands-page_detail-text {
		margin: 46px 0 0;
		font-weight: 400;
		font-size: 20px;
		line-height: 28px;
		color: #000000;
	}
	.brands-page_detail-text p {
		margin: 24px 0 0;
	}
	.brands-page_detail-image {
		flex: 0 0 566px;
		min-height: 245px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.brands-page_detail-image img {
		display: block;
		margin: auto;
		max-width: 100%;
		max-height: 100%;
	}

.page-text-block {
	margin: 50px 100px 0 0;
	max-width: 860px;
}
.brands-page .page-section_title {
	display: block;
	margin: 0 0 54px;
	font-weight: 700;
	font-size: 48px;
	line-height: 56px;
	color: #191C21;
}
.page-text-block_inner {
	font-weight: 400;
	font-size: 20px;
	line-height: 28px;
	color: #000000;
}
	.page-text-block_inner p {
		margin: 28px 0 0;
	}
	.page-text-block_inner ul {
		padding: 0;
		margin: 0;
	}
	.page-text-block_inner li {
		position: relative;
		display: block;
		list-style: none;
		padding-left: 30px;
	}
	.page-text-block_inner li:before {
		content: "";
		position: absolute;
		left: 12px;
		top: 13px;
		width: 5px;
		height: 5px;
		background: #000;
		border-radius: 50%;
	}

.select-request,
section.select-request,
.section.select-request {
	position: relative;
	margin: 0;
	min-height: 565px;
	padding-top: 25px;
	padding-bottom: 25px;
	background: linear-gradient(152.55deg, #E3E8ED 12.87%, #F2F5F7 70.56%);
	box-shadow: 0px 3px 15px 3px rgba(168, 177, 183, 0.25);
	box-sizing: border-box;
}
	.select-request .container {
		position: relative;
		justify-content: space-between;
		align-items: stretch;
		display: flex;
		z-index: 1;
	}
	.select-request_inner {
		flex: 0 0 600px;
	}
	.select-request_form {
		padding: 42px 0 32px;
	}
	.select-request_title {
		display: block;
		margin: 0;
		font-weight: 600;
		font-size: 56px;
		line-height: 66px;
		letter-spacing: 0;
		color: #000000;
	}
	.select-request_text {
		display: block;
		margin: 24px 0 0;
		font-weight: 400;
		font-size: 24px;
		line-height: 30px;
		letter-spacing: 0;
		color: #000000;
	}
	.select-request_text p {
		margin: 17px 0 0;
	}
	.select-request form {
		display: block;
	}
	.select-request_fields {
		margin: 30px 0 0;
		display: block;
		max-width: 300px;
	}
	.select-request_fields input {
		display: block;
		width: 100%;
		height: 48px;
		padding: 0;
		border: none;
		border-bottom: 1px solid rgba(0,0,0,0.6);
		font-weight: 400;
		font-size: 20px;
		color: #000;
		background: transparent;
	}
	.select-request_fields input::placeholder {
		color: rgba(0,0,0,0.6);
		font-size: 20px;
	}
	.select-request_btn {
		margin: 42px 0 0;
		display: flex;
		justify-content: flex-start;
	}
	.select-request_btn .btn {
		display: block;
		padding: 0 32px;
		font-size: 20px;
		height: 50px;
		line-height: 50px;
	}
	.select-request_img {
		flex: 0 1 100%;
		margin-right: 60px;
		display: flex;
		justify-content: flex-start;
		align-items: flex-end;
	}
	.select-request_img img {
		display: block;
		margin: auto auto 0 0;
		max-width: 100%;
		max-height: 100%;
	}

@media (max-width: 1199px) { 
	.brands-page .breadcrumb-block {
		margin-bottom: 50px;
	}
	.brands-page_title {
		font-size: 44px;
		line-height: 52px;
	}
	.brands-page_list {
		margin: 6px -10px 0;
	}
	.brands-page_list-item {
		margin: 36px 10px 0;
		flex: 0 1 calc(33.3333% - 20px);
	}
		.brands-page_list-item_img {
			margin: 0 0 18px;
		}
		.brands-page_list-item_title {
			font-size: 18px;
			line-height: 21px;
		}

		.brands-page_detail-title {
			font-size: 44px;
			line-height: 52px;
		}
		.brands-page_detail-text {
			margin: 36px 0 0;
			font-size: 18px;
			line-height: 25px;
		}
		.brands-page_detail-text p {
			margin: 20px 0 0;
		}
		.brands-page_detail-image {
			flex: 0 0 460px;
			min-height: 220px;
		}

	.page-text-block {
		margin: 100px 0 80px;
		max-width: 760px;
	}
	.brands-page .page-section_title {
		margin: 0 0 36px;
		font-size: 36px;
		line-height: 42px;
	}
	.page-text-block_inner {
		font-size: 18px;
		line-height: 25px;
	}
		.page-text-block_inner p {
			margin: 25px 0 0;
		}
	.select-request,
	section.select-request,
	.section.select-request {
		min-height: 470px;
	}
		.select-request_inner {
			flex: 0 0 460px;
		}
		.select-request_form {
			padding: 32px 0 26px;
		}
		.select-request_title {
			font-size: 44px;
			line-height: 52px;
		}
		.select-request_text {
			margin: 18px 0 0;
			font-size: 20px;
			line-height: 26px;
		}
		.select-request_text p {
			margin: 14px 0 0;
		}
		.select-request_fields {
			margin: 24px 0 0;
		}
		.select-request_btn {
			margin: 36px 0 0;
		}
		.select-request_img {
			margin-right: 40px;
		}
}

@media (max-width: 992px) { 
	.brands-page .breadcrumb-block {
		margin-bottom: 40px;
	}
	.brands-page_title {
		font-size: 40px;
		line-height: 48px;
	}
	.brands-page_list {
		margin: 4px -10px 0;
	}
	.brands-page_list-item {
		margin: 34px 10px 0;
	}
		.brands-page_list-item_img {
			margin: 0 0 15px;
		}
		.brands-page_list-item_title {
			font-size: 17px;
			line-height: 20px;
		}

		.brands-page_detail-title {
			font-size: 40px;
			line-height: 48px;
		}
		.brands-page_detail-text {
			margin: 32px 0 0;
			font-size: 17px;
			line-height: 24px;
		}
		.brands-page_detail-text p {
			margin: 20px 0 0;
		}
		.brands-page_detail-inner {
		    margin-right: 30px;
		}
		.brands-page_detail-image {
			flex: 0 0 360px;
			min-height: 220px;
		}

	.page-text-block {
		margin: 90px 0 70px;
	}
	.brands-page .page-section_title {
		margin: 0 0 32px;
		font-size: 36px;
		line-height: 42px;
	}
	.page-text-block_inner {
		font-size: 17px;
		line-height: 24px;
	}
		.page-text-block_inner p {
			margin: 24px 0 0;
		}
	.select-request,
	section.select-request,
	.section.select-request {
		min-height: 400px;
	}
		.select-request_inner {
			flex: 0 0 380px;
		}
		.select-request_form {
			padding: 18px 0 14px;
		}
		.select-request_title {
			font-size: 36px;
			line-height: 42px;
		}
		.select-request_text {
			margin: 18px 0 0;
			font-size: 18px;
			line-height: 22px;
		}
		.select-request_text p {
			margin: 12px 0 0;
		}
		.select-request_fields {
			margin: 20px 0 0;
		}
		.select-request_btn {
			margin: 32px 0 0;
		}
		.select-request_img {
			margin-right: 20px;
		}
		.select-request_btn .btn {
		    padding: 0 28px;
		    font-size: 18px;
		    height: 44px;
		    line-height: 44px;
		}
}

@media (max-width: 767px) { 
	.brands-page .breadcrumb-block {
		margin-bottom: 20px;
	}
	.brands-page_title {
		font-size: 30px;
		line-height: 34px;
	}
	.brands-page_list {
		margin: 0px -12px 0;
	}
	.brands-page_list-item {
		margin: 25px 12px 0;
		flex: 0 1 calc(50% - 24px);
	}
		.brands-page_list-item_img {
			margin: 0 0 12px;
			padding: 0 5px;
			/*height: 90px;*/
		}
		.brands-page_list-item_title {
			font-size: 16px;
			line-height: 20px;
		}

	.brands-page_detail {
		display: block;
	}
		.brands-page_detail-inner {
			margin-right: 0px;
		}
		.brands-page_detail-title {
			font-size: 30px;
			line-height: 34px;
		}
		.brands-page_detail-text {
			margin: 28px 0 0;
			font-size: 17px;
			line-height: 24px;
		}
		.brands-page_detail-text p {
			margin: 18px 0 0;
		}
		.brands-page_detail-image {
			margin: 32px 0 0;
			min-height: 0;
		}

	.page-text-block {
		margin: 64px 0 24px;
	}
	.brands-page .page-section_title {
		margin: 0 0 24px;
	    font-size: 26px;
	    line-height: 30px;
	}
	.page-text-block_inner {
		font-size: 16px;
		line-height: 22px;
	}
		.page-text-block_inner p {
			margin: 22px 0 0;
		}
		.page-text-block_inner li {
			position: relative;
			display: block;
			list-style: none;
			padding-left: 26px;
		}
		.page-text-block_inner li:before {
			left: 10px;
			top: 9px;
		}

	.select-request,
	section.select-request,
	.section.select-request {
		margin: 60px 0 !important;
		min-height: 0;
		padding-top: 32px;
		padding-bottom: 40px;
	}
		.select-request .container {
			display: block;
		}
		.select-request_inner {
		    margin: 0 auto;
		    max-width: 280px;
		}
		.select-request_form {
			padding: 0px 0 0;
		}
		.select-request_title {
			font-size: 26px;
			line-height: 30px;
		}
		.select-request_text {
			display: block;
			margin: 16px 0 0;
			font-size: 16px;
			line-height: 24px;
		}
		.select-request_text p {
			margin: 10px 0 0;
		}
		.select-request form {
			display: block;
		}
		.select-request_fields {
			margin: 18px 0 0;
			max-width: 100%;
			width: 100%;
		}
		.select-request_fields input {
			font-size: 18px;
		}
		.select-request_fields input::placeholder {
			font-size: 18px;
		}
		.select-request_btn {
			margin: 36px 0 0;
		}
		.select-request_btn .btn {
			padding: 0 26px;
			font-size: 18px;
			height: 42px;
			line-height: 42px;
		}
		.select-request_img {
			/*display: none;*/
		}
}

.reviews-slier {

}
	.reviews-slier_item {
		height: 100%;
	}
	.reviews-slier .owl-stage {
		display: flex;
		align-items: stretch;
	}
	.reviews-slier .owl-item {
		height: auto;
	}
	.reviews-slier_item-inner {
		position: relative;
		height: 100%;
		padding: 30px 20px 60px 28px;
		background: #FFFFFF;
		border-radius: 11px;
	}
	.reviews-slier_item-head {
		display: flex;
		justify-content: space-between;
		align-items: flex-start;
	}
	.reviews-slier_item-info {
		flex: 0 1 100%;
		padding: 10px 0 0;
	}
	.reviews-slier_item-rating {
		position: relative;
		margin: 0 0 7px;
		width: 105px;
		height: 19px;
		background-image: url("data:image/svg+xml,%3Csvg width='105' height='19' viewBox='0 0 105 19' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.14516 1.61804L10.7228 6.47366L10.8351 6.81915H11.1984H16.3039L12.1734 9.82009L11.8796 10.0336L11.9918 10.3791L13.5695 15.2347L9.43905 12.2338L9.14516 12.0203L8.85127 12.2338L4.72083 15.2347L6.29852 10.3791L6.41077 10.0336L6.11688 9.82009L1.98644 6.81915H7.09194H7.45522L7.56747 6.47366L9.14516 1.61804Z' stroke='%23CF2127'/%3E%3Cpath d='M30.8229 1.61804L32.4006 6.47366L32.5128 6.81915H32.8761H37.9816L33.8512 9.82009L33.5573 10.0336L33.6695 10.3791L35.2472 15.2347L31.1168 12.2338L30.8229 12.0203L30.529 12.2338L26.3986 15.2347L27.9762 10.3791L28.0885 10.0336L27.7946 9.82009L23.6642 6.81915H28.7697H29.133L29.2452 6.47366L30.8229 1.61804Z' stroke='%23CF2127'/%3E%3Cpath d='M52.5006 1.61804L54.0783 6.47366L54.1906 6.81915H54.5538H59.6594L55.5289 9.82009L55.235 10.0336L55.3473 10.3791L56.925 15.2347L52.7945 12.2338L52.5006 12.0203L52.2067 12.2338L48.0763 15.2347L49.654 10.3791L49.7662 10.0336L49.4723 9.82009L45.3419 6.81915H50.4474H50.8107L50.9229 6.47366L52.5006 1.61804Z' stroke='%23CF2127'/%3E%3Cpath d='M74.1784 1.61804L75.7561 6.47366L75.8683 6.81915H76.2316H81.3371L77.2066 9.82009L76.9128 10.0336L77.025 10.3791L78.6027 15.2347L74.4723 12.2338L74.1784 12.0203L73.8845 12.2338L69.754 15.2347L71.3317 10.3791L71.444 10.0336L71.1501 9.82009L67.0196 6.81915H72.1251H72.4884L72.6007 6.47366L74.1784 1.61804Z' stroke='%23CF2127'/%3E%3Cpath d='M95.8541 1.61804L97.4318 6.47366L97.5441 6.81915H97.9074H103.013L98.8824 9.82009L98.5885 10.0336L98.7008 10.3791L100.278 15.2347L96.148 12.2338L95.8541 12.0203L95.5603 12.2338L91.4298 15.2347L93.0075 10.3791L93.1198 10.0336L92.8259 9.82009L88.6954 6.81915H93.8009H94.1642L94.2765 6.47366L95.8541 1.61804Z' stroke='%23CF2127'/%3E%3C/svg%3E");
		background-position: top left;
		background-repeat: no-repeat;
	}
	.reviews-slier_item-rating-value {
		position: absolute;
		top: 0;
		left: 0;
		height: 19px;
		width: 0;
		z-index: 1;
		background-image: url("data:image/svg+xml,%3Csvg width='105' height='19' viewBox='0 0 105 19' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.14516 0L11.1984 6.31915H17.8427L12.4673 10.2246L14.5206 16.5438L9.14516 12.6383L3.76977 16.5438L5.82299 10.2246L0.447596 6.31915H7.09194L9.14516 0Z' fill='%23CF2127'/%3E%3Cpath d='M30.8229 0L32.8761 6.31915H39.5205L34.1451 10.2246L36.1983 16.5438L30.8229 12.6383L25.4475 16.5438L27.5007 10.2246L22.1253 6.31915H28.7697L30.8229 0Z' fill='%23CF2127'/%3E%3Cpath d='M52.5006 0L54.5538 6.31915H61.1982L55.8228 10.2246L57.876 16.5438L52.5006 12.6383L47.1252 16.5438L49.1785 10.2246L43.8031 6.31915H50.4474L52.5006 0Z' fill='%23CF2127'/%3E%3Cpath d='M74.1784 0L76.2316 6.31915H82.8759L77.5005 10.2246L79.5538 16.5438L74.1784 12.6383L68.803 16.5438L70.8562 10.2246L65.4808 6.31915H72.1251L74.1784 0Z' fill='%23CF2127'/%3E%3Cpath d='M95.8541 0L97.9074 6.31915H104.552L99.1763 10.2246L101.23 16.5438L95.8541 12.6383L90.4788 16.5438L92.532 10.2246L87.1566 6.31915H93.8009L95.8541 0Z' fill='%23CF2127'/%3E%3C/svg%3E");
		background-position: top left;
		background-repeat: no-repeat;
	}
	.reviews-slier_item-name {
		display: block;
		margin: 0;
		font-weight: 600;
		font-size: 20px;
		line-height: 23px;
		color: #000000;
		word-break: break-word;
	}
	.reviews-slier_item-location {
		position: relative;
		margin: 30px 0 0;
		padding: 0 0 0 18px;
		font-weight: 400;
		font-size: 16px;
		line-height: 19px;
		color: #000000;
		background-image: url("data:image/svg+xml,%3Csvg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_866_450)'%3E%3Cpath d='M11.847 2.17419C10.7018 0.818856 9.28575 -0.0135381 7.50628 -8.34638e-05C4.76932 0.01965 2.49096 2.00914 2.05616 4.74851C1.82183 6.22583 2.35549 7.55066 3.01364 8.81898C3.3688 9.50248 3.83564 10.1456 4.33452 10.7394C5.21236 11.7862 6.15061 12.7836 7.07148 13.7954C7.31588 14.0627 7.60056 14.0618 7.88066 13.8295C8.0198 13.7138 8.16992 13.607 8.29166 13.4752C9.90912 11.7162 11.6328 10.0263 12.4584 7.72109C13.4772 5.52439 12.9372 3.30348 11.847 2.17419ZM7.54838 7.50133C6.42888 7.50133 5.52084 6.61153 5.52084 5.51363C5.52084 4.41573 6.42888 3.52683 7.54838 3.52683C8.6688 3.52683 9.57684 4.41573 9.57684 5.51363C9.57684 6.61153 8.6688 7.50133 7.54838 7.50133Z' fill='%23A8B1B7'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_866_450'%3E%3Crect width='14' height='14' fill='white'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A");
		background-position: top 2px left;
		background-repeat: no-repeat;
	}
	.reviews-slier_item-address {
		display: block;
		margin: 3px 0 0;
		font-weight: 400;
		font-size: 14px;
		line-height: 16px;
		color: #8D8D8D;
	}
	.reviews-slier_item-img {
		flex: 0 0 128px;
		margin: 0 0 0 15px;
	}
		.reviews-slier_item-img img,
		.owl-carousel .owl-item .reviews-slier_item-img img	{
			width: auto;
			display: block;
			max-width: 100%;
		}
	.reviews-slier_item-main {
		margin: 24px 0 0;
	}
	.reviews-slier_item-text {
		display: block;
		margin: 0;
		max-width: 320px;
		font-weight: 400;
		font-size: 16px;
		line-height: 22px;
		color: #000000;
		max-height: 132px;
		overflow: hidden;
	}
	.opened .reviews-slier_item-text {
		max-height: none;
	}
		.reviews-slier_item-text p {
			margin: 0;
		}
	.reviews-slier_item-more {
		display: block;
		margin: 8px 0 0;
		font-weight: 400;
		font-size: 16px;
		line-height: 22px;
		color: #CF2127;
	}
	.opened .reviews-slier_item-more {
		display: none;
	}
	.reviews-slier_item-date {
		position: absolute;
		bottom: 20px;
		right: 20px;
		margin: 0;
		font-weight: 400;
		font-size: 16px;
		line-height: 20px;
		color: #8D8D8D;
	}
	.reviews-slier.owl-carousel .owl-nav {
		margin: 0;
		height: 0;
		padding: 0;
		position: static;
	}
	.reviews-slier.owl-carousel .owl-nav button.owl-next,
	.reviews-slier.owl-carousel .owl-nav button.owl-prev {
		position: absolute;
		height: 100px;
		width: 30px;
		top: 50%;
		padding: 0;
		margin: -50px 0 0;
		background-position: center;
		background-repeat: no-repeat;
		background-color: transparent;
		cursor: pointer;
	}
	.reviews-slier.owl-carousel .owl-nav button.owl-next {
		left: 100%;
		margin-left: 24px;
		background-image: url("data:image/svg+xml,%3Csvg width='28' height='28' viewBox='0 0 28 28' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10.0619 2.50873C9.72143 2.17822 9.26424 1.99543 8.78972 2.00009C8.3152 2.00474 7.86169 2.19645 7.52772 2.53357C7.2 2.86397 7.01611 3.31048 7.01611 3.77584C7.01611 4.24121 7.2 4.68772 7.52772 5.01811L16.3168 13.801L7.52772 22.559C7.36057 22.7237 7.22785 22.92 7.13725 23.1364C7.04665 23.3529 7 23.5852 7 23.8199C7 24.0545 7.04665 24.2868 7.13725 24.5033C7.22785 24.7198 7.36057 24.9161 7.52772 25.0808C7.86497 25.4146 8.32032 25.6018 8.79483 25.6018C9.26934 25.6018 9.72469 25.4146 10.0619 25.0808L20.1368 15.0432C20.3031 14.8781 20.4352 14.6817 20.5253 14.4653C20.6154 14.2489 20.6618 14.0167 20.6618 13.7823C20.6618 13.5479 20.6154 13.3158 20.5253 13.0994C20.4352 12.883 20.3031 12.6866 20.1368 12.5214L10.0619 2.50873Z' fill='%23A8B1B7'/%3E%3C/svg%3E%0A");
	}
	.reviews-slier.owl-carousel .owl-nav button.owl-prev {
		right: 100%;
		margin-right: 24px;
		background-image: url("data:image/svg+xml,%3Csvg width='28' height='28' viewBox='0 0 28 28' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.9381 25.4913C18.2786 25.8218 18.7358 26.0046 19.2103 25.9999C19.6848 25.9953 20.1383 25.8035 20.4723 25.4664C20.8 25.136 20.9839 24.6895 20.9839 24.2242C20.9839 23.7588 20.8 23.3123 20.4723 22.9819L11.6832 14.199L20.4723 5.44104C20.6394 5.27634 20.7722 5.08004 20.8628 4.86358C20.9533 4.64711 21 4.4148 21 4.18014C21 3.94548 20.9533 3.71316 20.8628 3.4967C20.7722 3.28023 20.6394 3.08394 20.4723 2.91923C20.135 2.58544 19.6797 2.3982 19.2052 2.3982C18.7307 2.3982 18.2753 2.58544 17.9381 2.91923L7.86325 12.9568C7.69686 13.1219 7.5648 13.3183 7.47467 13.5347C7.38455 13.7511 7.33816 13.9833 7.33816 14.2177C7.33816 14.4521 7.38455 14.6842 7.47467 14.9006C7.5648 15.117 7.69686 15.3134 7.86325 15.4786V15.4786L17.9381 25.4913Z' fill='%23A8B1B7'/%3E%3C/svg%3E%0A");
	}
	.reviews-slier.owl-carousel .owl-nav button.owl-next span,
	.reviews-slier.owl-carousel .owl-nav button.owl-prev span {
		display: none;
	}
@media (max-width: 1399px) { 
	.reviews-slier.owl-carousel .owl-nav button.owl-next, .reviews-slier.owl-carousel .owl-nav button.owl-prev {
		width: 28px;
	}
	.reviews-slier.owl-carousel .owl-nav button.owl-next {
		margin-left: 12px;
	}
	.reviews-slier.owl-carousel .owl-nav button.owl-prev {
		margin-right: 12px;
	}
}
@media (max-width: 1279px) { 
	.reviews-slier_block {
		margin-right: 36px;
		margin-left: 36px;
	}
}
@media (max-width: 992px) { 
	.reviews-slier_item-inner {
	    padding: 24px 18px 60px 20px;
	}
	.reviews-slier_item-img {
	    flex: 0 0 108px;
	    margin: 0 0 0 14px;
	}
	.reviews-slier_item-info {
	    padding: 0px 0 0;
	}
	.reviews-slier_item-name {
	    font-size: 17px;
	    line-height: 20px;
	}
	.reviews-slier_item-location {
	    margin: 18px 0 0;
	    font-size: 15px;
	    line-height: 18px;
	}
	.reviews-slier_item-address {
	    font-size: 12px;
	    line-height: 14px;
	}
	.reviews-slier_item-main {
	    margin: 18px 0 0;
	}
	.reviews-slier_item-text {
		font-size: 14px;
		line-height: 20px;
		max-height: 120px;
	}
	.reviews-slier_item-more {
		margin: 6px 0 0;
		font-size: 14px;
		line-height: 20px;
	}
	.reviews-slier_item-date {
		font-size: 14px;
		line-height: 20px;
	}
}
@media (max-width: 767px) { 
	.reviews-slier_block {
		margin-left: -12px;
		margin-right: -12px;
	}
	.reviews-slier .owl-stage-outer {
		padding: 0 12px;
	}
	.reviews-slier_item {
		width: 300px;
	}
	.reviews-slier_item-inner {
		height: auto;
		padding: 18px 24px 122px 24px;
	}
	.reviews-slier_item-head {
		display: block;
	}
	.reviews-slier_item-info {
		padding: 0;
	}
	.reviews-slier_item-rating {
		margin: 0 0 12px;
	}
	.reviews-slier_item-name {
		font-size: 16px;
		line-height: 20px;
	}
	.reviews-slier_item-location {
		margin: 13px 0 0;
		font-size: 14px;
		line-height: 17px;
		background-position: top 1px left;
	}
	.reviews-slier_item-address {
		margin: 6px 0 0;
		font-size: 12px;
		line-height: 13px;
	}
	.reviews-slier_item-img {
		position: absolute;
		left: 28px;
		right: 28px;
		bottom: 18px;
		height: 90px;
		margin: 0;
		display: flex;
		justify-content: flex-start;
		align-items: center;
	}
		.reviews-slier_item-img img,
		.owl-carousel .owl-item .reviews-slier_item-img img	{
			width: auto;
			max-height: 100%;
			margin: auto auto auto 0;
		}
	.reviews-slier_item-main {
		margin: 16px 0 0;
	}
	.reviews-slier_item-text {
		font-size: 13px;
		line-height: 16px;
		max-height: none;
	}
	.reviews-slier_item-more {
		display: none;
		margin: 10px 0 0;
		font-size: 13px;
		line-height: 16px;
	}
	.reviews-slier_item-date {
		position: absolute;
		bottom: auto;
		top: 18px;
		right: 24px;
		margin: 0;
		font-size: 13px;
		line-height: 18px;
	}
}

.catalog-glass .wrap-grid h2{    margin: 0px 0 40px;}
/*catalog*/
.new-layout .catalog-brand .controls .row{
    flex-wrap: unset;
}
.new-layout .catalog-brand .controls .dropdown{
    flex-shrink: unset;
}
.banner-top {
	margin: 64px 0 72px;
}
    .banner-top-wrapper{
        position: relative;
    }
    /*.banner-top-wrapper a{
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }*/
    .banner-top-wrapper img{
        display: block;
        width: 100%;
    }
@media (max-width: 991px) {
	.banner-top {
		margin: 26px 0 32px;
	}
}



.catalog-list-slider {
	padding: 0;
	width: auto;
	margin: 0 -10px;
	padding: 0 10px;
	width: calc(100% + 20px) !important;
	overflow: hidden !important;
}
.catalog-list-slider .owl-stage-outer {
	overflow: visible !important;
}
.catalog-list-slider .owl-stage {
	display: flex;
}
.catalog-list-slider .owl-item {
	height: auto;
}
.catalog-list-slider_item {
	height: 100%;
}
.catalog-list-slider_item-block {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	height: 100%;
}
.catalog-list-slider_item-inner {

}
.catalog-list-slider_item-img {
	position: relative;
	padding-top: 75%;
	background: #fff;
}
.catalog-list-slider_item-img a {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px;
}
.catalog-list-slider_item-img svg {
	display: block;
	margin: auto;
	max-width: 100%;
	max-height: 100%;
}
.catalog-list-slider_item-title {
	display: block;
	margin: 8px 0 0;
    font-size: 15px;
	line-height: 20px;
	color: #cf2127;
}
.catalog-list-slider_item-title a {
	display: block;
	color: #cf2127;
}
.catalog-list-slider_item-price {
	display: block;
	margin: 16px 0 0;
	color: #191c21;
}
.catalog-list-slider_item-price-value {
	display: block;
	font-size: 22px;
	line-height: 24px;
	font-weight: 600;
}
.catalog-list-slider_item-price-add {
	margin:	3px 0 0;
    font-size: 12px;
    line-height: 1.3;
	color: #a8b1b7;
}
.catalog-list-slider_item-btns {
	margin: 6px 0 0;
}
.catalog-list-slider_item-btn {
	margin: 10px 0 0;
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 32px;
    font-size: 14px;
    line-height: 30px;
	border: 1px solid #cf2127;
    text-align: center;
    color: #cf2127;
	box-sizing: border-box;
	padding: 0;
	border-radius: 0;
}
.catalog-list-slider_item-btn span {
	font-size: 14px;
}
.catalog-list-slider_item-btn.btn-red {
	font-size: 14px;
}
.catalog-list-slider .owl-dots {
	margin: 30px 0 0 !important;
	display: flex;
	justify-content: center;
}
.catalog-list-slider .owl-dots .owl-dot {
	flex: 0 1 100%;
	height: 5px;
	background: #fff;
}
.catalog-list-slider .owl-dots .owl-dot.active {
	background: #a8b1b7;
}
.catalog-list-slider .owl-dots .owl-dot span {
	display: none !important;
}
.catalog-list-slider.owl-carousel .owl-nav {
	margin: 30px 0 0 !important;
	display: flex;
	justify-content: center !important;
}
.catalog-list-slider .owl-nav .owl-prev,
.catalog-list-slider .owl-nav .owl-next {
	position: relative;
	display: block;
	margin: 0 10px !important;
    pointer-events: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #a8b1b7 !important;
    color: #fff !important;
    width: 44px;
    height: 44px;
	border-radius: 0 !important;
}
.catalog-list-slider .owl-nav .owl-prev:before,
.catalog-list-slider .owl-nav .owl-next:before {
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-size: 9px 15px !important;
	background-repeat: no-repeat !important;
	background-position: center !important;
	filter: invert(1);
}
.catalog-list-slider .owl-nav .owl-next:before {
    background-image: url(/assets/img/arrow_right.svg) !important;
}
.catalog-list-slider .owl-nav .owl-prev:before {
    background-image: url(/assets/img/arrow_left.svg) !important;
}
.catalog-list-slider .owl-nav .owl-prev span,
.catalog-list-slider .owl-nav .owl-next span {
	display: none !important;
}

@media (max-width: 599px) { 
	.catalog-list-slider {
		margin: 0 -20px;
		padding: 0 20px;
		width: calc(100% + 40px) !important;
		overflow: hidden !important;
	}
	.catalog-list-slider .owl-stage-outer {
		overflow: visible !important;
	}
	.catalog-list-slider_item {
		width: 220px;
	}
	.catalog-list-slider_item-title {
		margin: 7px 0 0;
		font-size: 14px;
		line-height: 18px;
	}
	.catalog-list-slider_item-price {
		margin: 14px 0 0;
	}
	.catalog-list-slider_item-price-value {
		font-size: 20px;
		line-height: 22px;
	}
	.catalog-list-slider_item-price-add {
		margin:	2px 0 0;
	}
	.catalog-list-slider_item-btns {
		margin: 5px 0 0;
	}
	.catalog-list-slider_item-btn {
		margin: 8px 0 0;
		height: 30px;
		line-height: 28px;
	}
	.catalog-list-slider .owl-dots {
		margin: 20px 0 0 !important;
	}
	.catalog-list-slider .owl-dots .owl-dot {
		height: 4px;
	}
	.catalog-list-slider .owl-nav {
		display: none !important;
	}
}

.content .callback .container {
	padding: 0;
	max-width: none;
}
.content section.callback {
	margin: 90px 0 70px;
}

@media (max-width: 767px) { 
	.content section.callback, .content .section.callback {
		margin: 40px 0 50px;
	}
}

.title-product{    font-weight: bold;
    font-size: 16px;
    margin-right: 10px;
    line-height: 30px;
    color: #191C21;}

    .catalog-search.catalog-brand div.disabled {opacity: .6; pointer-events: none;}


.articles-page .articles_v2 .items .item {
    margin: 0 13px 40px !important;
    width: 31% !important;
}

.page-404 {
	padding: 64px 0 72px;
}
.page-404_title {
	display: block;
	margin: 0;
	padding: 0;
	text-align: center;
	font-size: 34px;
    line-height: 42px;
    color: #000; 
}
.page-404_text {
	display: block;
	margin: 18px 0 0;
	padding: 0;
	text-align: center;
	font-size: 16px;
    line-height: 22px;
    color: #000;
}
.page-404_img {
	position: relative;
    max-width: 1920px;
    height: 413px;
    margin: 5px auto;
}
.page-404_img img {
	display: block;
	width: 100%;
	height: 100%;
	object-position: center;
	object-fit: cover;
}
.page-404_btn {
	display: flex;
	justify-content: center;
	margin: 8px 0 0;
}
.page-404_btn .btn {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 48px;
	padding: 0 24px;
	line-height: 24px;
	font-size: 20px;
	color: #fff;
}
@media (max-width: 767px) { 
	.page-404 {
		padding: 32px 0 40px;
	}
	.page-404_title {
		font-size: 26px;
	    line-height: 32px;
	}
	.page-404_text {
		margin: 14px 0 0;
		font-size: 14px;
	    line-height: 18px;
	}
	.page-404_img {
	    height: 220px;
	    margin: 5px auto;
	}
	.page-404_btn {
		display: flex;
		justify-content: center;
		margin: 18px 0 0;
	}
	.page-404_btn .btn {
		height: 40px;
		padding: 0 24px;
		line-height: 24px;
		font-size: 18px;
	}
}

@media (max-width: 991px) {
    .heder-phone-mob{
        position: absolute;
        display: block !important;
        top: 12px;
        right: 10px;
        margin: 0;
        padding: 10px;
        background: #fff;
        color: #cf2127;
    }
    .heder-phone-mob svg{
        display: block;
        width: 20px;
        height: 20px;
        margin: 0;
        fill: #cf2127;
    }
}

.modal-promo {
	max-width: 1340px;
	padding: 30px 20px 0px;
    pointer-events: all;
}
	.modal-promo_close {
		position: absolute;
		right: -45px;
		top: -60px;
		width: 60px;
		height: 60px;
		background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M29.0169 0.549338C28.2306 -0.245943 26.8793 -0.16861 25.9986 0.722124L14.9498 11.8975L4.00135 0.823771C3.1207 -0.0669634 1.76943 -0.144297 0.983149 0.650985C0.196868 1.44627 0.273326 2.813 1.15398 3.70374L12.1024 14.7775L0.713944 26.2963C-0.166685 27.187 -0.243168 28.5537 0.543112 29.349C1.32939 30.1443 2.68069 30.0669 3.56132 29.1762L14.9498 17.6574L26.4387 29.2779C27.3193 30.1686 28.6706 30.246 29.4569 29.4507C30.2432 28.6554 30.1667 27.2886 29.2861 26.3979L17.7971 14.7775L28.846 3.60209C29.7267 2.71136 29.8031 1.34462 29.0169 0.549338Z' fill='white'/%3E%3C/svg%3E%0A");
		background-position: center;
		background-repeat: no-repeat;
		cursor: pointer;
	}
	.modal-promo_inner {
		position: relative;
		border: 2px solid #BBBBBB;
		padding: 48px 56px 48px;
		background: #FFFFFF;
		border-radius: 16px;
		letter-spacing: 0.02em;
	}
	.modal-promo_title {
		display: block;
		margin: 0 0 48px;
		padding-bottom: 42px;
		border-bottom: 1px solid rgba(0,0,0,0.4);
		font-weight: 500;
		font-size: 54px;
		line-height: 120%;
		text-align: center;
		color: #000000;
	}
	.modal-promo_title b {
		font-weight: 500;
		color: #CF2127;
	}
	.modal-promo_content {
		display: flex;
		justify-content: space-between;
		align-items: stretch;
	}
	.modal-promo_form {
		flex: 0 1 100%;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		align-items: stretch;
	}
	.modal-promo_form-text {
		flex: 0 0 auto;
		display: block;
		margin: 0 0 23px;
		font-style: normal;
		font-weight: 400;
		font-size: 20px;
		line-height: 130%;
		color: #000000;
	}
	.modal-promo_form-inner {
		flex: 0 1 100%;
		padding: 26px 24px;
		background: #F2F5F7;
		border-radius: 16px;
	} 
	.modal-promo_form-field {
		display: block;
		margin: 0 0 20px;
	}
	.modal-promo_form-field-label {
		display: block;
		margin: 0;
		font-weight: 500;
		font-size: 22px;
		line-height: 150%;
		letter-spacing: -0.011em;
		color: #000000;
	}
	.modal-promo_form-field-label span {
		color: #CF1A1A;
	}
	.modal-promo_form-field-control {
		display: block;
		width: 100%;
		height: 62px;
		padding: 0 24px;
		border: 2px solid #CCCCCC;
		font-size: 22px;
		background: #FFFFFF;
		border-radius: 8px;
	}
	.modal-promo_form-btn {
		margin: 32px 0 0;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.modal-promo_form-btn .btn {
		display: block;
		font-size: 22px;
		padding-left: 40px;
		padding-right: 40px;
		height: 54px;
		line-height: 54px;
		color: #fff;
	}
	.modal-promo_form-agreement {
		margin: 24px 0 0;
		font-weight: 500;
		font-size: 16px;
		line-height: 150%;
		letter-spacing: -0.011em;
		color: #000000;
	}
	.modal-promo_form-agreement a {
		color: #CF2127;
		text-decoration: none;
	}
	.modal-promo_form-agreement a:hover {
		text-decoration: underline;
	}
	.modal-promo_img {
		flex: 0 0 49.5%;
		margin-left: 56px;
		display: flex;
		justify-content: flex-end;
		align-items: center;
	}
	.modal-promo_img-block {
	}
	.modal-promo_img-block img {
		display: block;
		max-width: 100%;
		border: 3px solid #F2F2F2;
		border-radius: 18px;
	}

	@media (max-height: 950px) {
		.modal-promo_close {
			right: -15px;
		}
		.modal-promo_inner {
			padding: 36px 42px 36px;
			letter-spacing: 0em;
		}
		.modal-promo_title {
		    margin: 0 0 44px;
		    padding-bottom: 36px;
		    font-size: 48px;
		    line-height: 120%;
		}
		.modal-promo_img {
			margin-left: 36px;
		}
	}
	@media (max-height: 900px) {
		.modal-promo {
			padding: 0 48px 0;
		}
		.modal-promo_close {
		    right: -55px;
		    top: -30px;
		}
		.modal-promo_inner {
			padding: 36px 42px 36px;
			letter-spacing: 0em;
		}
		.modal-promo_form-field {
			margin-bottom: 18px;
		}
		.modal-promo_form-text {
			font-size: 18px;
		}
		.modal-promo_form-field-label {
			font-size: 20px;
		}
		.modal-promo_title {
			margin: 0 0 36px;
			padding-bottom: 0;
		    font-size: 40px;
		    line-height: 110%;
			border-bottom: none;
		}
		.modal-promo_form-field-control {
			height: 56px;
		}
		.modal-promo_img {
			flex: 0 0 42%;
			margin-left: 48px;
		}
	}
	@media (max-width: 1599px) {
		.modal-promo {
			padding: 0 48px 0;
		}
		.modal-promo_close {
		    right: -55px;
		    top: -30px;
		}
		.modal-promo_inner {
			padding: 36px 42px 36px;
			letter-spacing: 0em;
		}
		.modal-promo_form-field {
			margin-bottom: 18px;
		}
		.modal-promo_form-text {
			font-size: 18px;
		}
		.modal-promo_form-field-label {
			font-size: 20px;
		}
		.modal-promo_title {
			margin: 0 0 36px;
			padding-bottom: 0;
		    font-size: 40px;
		    line-height: 110%;
			border-bottom: none;
		}
		.modal-promo_form-field-control {
			height: 56px;
		}
		.modal-promo_img {
			flex: 0 0 42%;
			margin-left: 48px;
		}
	}

	@media (max-width: 991px) {
		.modal-promo {
			padding: 25px 15px 20px;
			max-width: 400px;
			margin-left: auto;
			margin-right: auto;
		}
			.modal-promo_close {
				right: -10px;
				top: -53px;
				width: 50px;
				height: 50px;
				background-size: 24px auto;
			}
			.modal-promo_inner {
				position: relative;
				padding: 24px 20px 0;
				border-radius: 8px;
				letter-spacing: 0em;
			}
			.modal-promo_title {
				margin: 0 0 20px;
				padding-bottom: 0;
				font-size: 24px;
				line-height: 120%;
				border: none;
			}
			.modal-promo_content {
				flex-direction: column;
			}
			.modal-promo_form {
				flex: 0 0 auto;
				order: 2;
			}
			.modal-promo_form-text {
				margin: 0 0 20px;
				font-size: 14px;
				line-height: 20px;
			}
			.modal-promo_form-inner {
				margin: 0 -20px;
				padding: 24px 20px;
				border-radius: 0 0 8px 8px;
			} 
			.modal-promo_form-field {
				margin: 0 0 16px;
			}
			.modal-promo_form-field-label {
				font-size: 16px;
				line-height: 150%;
				letter-spacing: 0;
			}
			.modal-promo_form-field-control {
				height: 48px;
				padding: 0 16px;
				border: 2px solid #CCCCCC;
				font-size: 16px;
			}
			.modal-promo_form-btn {
				margin: 24px 0 0;
			}
			.modal-promo_form-btn .btn {
				width: 100%;
				font-size: 18px;
				padding-left: 15px;
				padding-right: 15px;
				height: 48px;
				line-height: 48px;
			}
			.modal-promo_form-agreement {
				margin: 20px 0 0;
				font-size: 13px;
				line-height: 18px;
				letter-spacing: -0.005em;
			}
			.modal-promo_img {
				flex: 0 0 auto;
				margin: 0 0 20px;
				display: block;
				order: 1;
				display: none;
			}
			.modal-promo_img-block img {
				display: block;
				margin: 0 auto
				border: 2px solid #F2F2F2;
				border-radius: 8px;
			}
	}
	@media (max-width: 575px) {
		.modal-promo {
			padding: 45px 15px 20px;
		}
	}<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>