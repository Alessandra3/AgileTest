<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/main.css" />

		<style>
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

.previous {
    background-color: #df7366;
    color: white;
}

.next {
    background-color: #df7366;
    color: white;
}

.round {
    border-radius: 50%;
}

@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,600");
@import url("font-awesome.min.css");

/*
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

/* Reset */

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}

	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

	table {
		border: 1px solid black;
		border-collapse: collapse;
		border-spacing: 0;
		width: 50%;
		margin-left: auto;
		margin-right: auto;
	}

	body {
		-webkit-text-size-adjust: none;
	}

/* Box Model */

	*, *:before, *:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

/* Containers */

	.container {
		margin-left: auto;
		margin-right: auto;
	}

	.container.\31 25\25 {
		width: 100%;
		max-width: 1750px;
		min-width: 1400px;
	}

	.container.\37 5\25 {
		width: 1050px;
	}

	.container.\35 0\25 {
		width: 700px;
	}

	.container.\32 5\25 {
		width: 350px;
	}

	.container {
		width: 1400px;
	}

	@media screen and (max-width: 1680px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 1500px;
			min-width: 1200px;
		}

		.container.\37 5\25 {
			width: 900px;
		}

		.container.\35 0\25 {
			width: 600px;
		}

		.container.\32 5\25 {
			width: 300px;
		}

		.container {
			width: 1200px;
		}

	}

	@media screen and (max-width: 1280px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 125%;
			min-width: 100%;
		}

		.container.\37 5\25 {
			width: 75%;
		}

		.container.\35 0\25 {
			width: 50%;
		}

		.container.\32 5\25 {
			width: 25%;
		}

		.container {
			width: 100%;
		}

	}

	@media screen and (max-width: 960px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 125%;
			min-width: 100%;
		}

		.container.\37 5\25 {
			width: 75%;
		}

		.container.\35 0\25 {
			width: 50%;
		}

		.container.\32 5\25 {
			width: 25%;
		}

		.container {
			width: 100%;
		}

	}

	@media screen and (max-width: 840px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 125%;
			min-width: 100%;
		}

		.container.\37 5\25 {
			width: 75%;
		}

		.container.\35 0\25 {
			width: 50%;
		}

		.container.\32 5\25 {
			width: 25%;
		}

		.container {
			width: 100% !important;
		}

	}

	@media screen and (max-width: 736px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 125%;
			min-width: 100%;
		}

		.container.\37 5\25 {
			width: 75%;
		}

		.container.\35 0\25 {
			width: 50%;
		}

		.container.\32 5\25 {
			width: 25%;
		}

		.container {
			width: 100% !important;
		}

	}

/* Grid */

	.row {
		border-bottom: solid 1px transparent;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after, .row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform > * > :first-child {
		margin-top: 0;
	}

	.row.uniform > * > :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25 > * {
		padding: 0px 0 0 0px;
	}

	.row.\30 \25 {
		margin: 0px 0 -1px 0px;
	}

	.row.uniform.\30 \25 > * {
		padding: 0px 0 0 0px;
	}

	.row.uniform.\30 \25 {
		margin: 0px 0 -1px 0px;
	}

	.row > * {
		padding: 48px 0 0 48px;
	}

	.row {
		margin: -48px 0 -1px -48px;
	}

	.row.uniform > * {
		padding: 48px 0 0 48px;
	}

	.row.uniform {
		margin: -48px 0 -1px -48px;
	}

	.row.\32 00\25 > * {
		padding: 96px 0 0 96px;
	}

	.row.\32 00\25 {
		margin: -96px 0 -1px -96px;
	}

	.row.uniform.\32 00\25 > * {
		padding: 96px 0 0 96px;
	}

	.row.uniform.\32 00\25 {
		margin: -96px 0 -1px -96px;
	}

	.row.\31 50\25 > * {
		padding: 72px 0 0 72px;
	}

	.row.\31 50\25 {
		margin: -72px 0 -1px -72px;
	}

	.row.uniform.\31 50\25 > * {
		padding: 72px 0 0 72px;
	}

	.row.uniform.\31 50\25 {
		margin: -72px 0 -1px -72px;
	}

	.row.\35 0\25 > * {
		padding: 24px 0 0 24px;
	}

	.row.\35 0\25 {
		margin: -24px 0 -1px -24px;
	}

	.row.uniform.\35 0\25 > * {
		padding: 24px 0 0 24px;
	}

	.row.uniform.\35 0\25 {
		margin: -24px 0 -1px -24px;
	}

	.row.\32 5\25 > * {
		padding: 12px 0 0 12px;
	}

	.row.\32 5\25 {
		margin: -12px 0 -1px -12px;
	}

	.row.uniform.\32 5\25 > * {
		padding: 12px 0 0 12px;
	}

	.row.uniform.\32 5\25 {
		margin: -12px 0 -1px -12px;
	}

	.\31 2u, .\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u, .\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u, .\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u, .\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u, .\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u, .\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u, .\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u, .\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u, .\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u, .\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u, .\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24 + *,
	.\31 1u\24 + *,
	.\31 0u\24 + *,
	.\39 u\24 + *,
	.\38 u\24 + *,
	.\37 u\24 + *,
	.\36 u\24 + *,
	.\35 u\24 + *,
	.\34 u\24 + *,
	.\33 u\24 + *,
	.\32 u\24 + *,
	.\31 u\24 + * {
		clear: left;
	}

	.\-11u {
		margin-left: 91.66667%;
	}

	.\-10u {
		margin-left: 83.33333%;
	}

	.\-9u {
		margin-left: 75%;
	}

	.\-8u {
		margin-left: 66.66667%;
	}

	.\-7u {
		margin-left: 58.33333%;
	}

	.\-6u {
		margin-left: 50%;
	}

	.\-5u {
		margin-left: 41.66667%;
	}

	.\-4u {
		margin-left: 33.33333%;
	}

	.\-3u {
		margin-left: 25%;
	}

	.\-2u {
		margin-left: 16.66667%;
	}

	.\-1u {
		margin-left: 8.33333%;
	}

	@media screen and (max-width: 1680px) {

		.row > * {
			padding: 48px 0 0 48px;
		}

		.row {
			margin: -48px 0 -1px -48px;
		}

		.row.uniform > * {
			padding: 48px 0 0 48px;
		}

		.row.uniform {
			margin: -48px 0 -1px -48px;
		}

		.row.\32 00\25 > * {
			padding: 96px 0 0 96px;
		}

		.row.\32 00\25 {
			margin: -96px 0 -1px -96px;
		}

		.row.uniform.\32 00\25 > * {
			padding: 96px 0 0 96px;
		}

		.row.uniform.\32 00\25 {
			margin: -96px 0 -1px -96px;
		}

		.row.\31 50\25 > * {
			padding: 72px 0 0 72px;
		}

		.row.\31 50\25 {
			margin: -72px 0 -1px -72px;
		}

		.row.uniform.\31 50\25 > * {
			padding: 72px 0 0 72px;
		}

		.row.uniform.\31 50\25 {
			margin: -72px 0 -1px -72px;
		}

		.row.\35 0\25 > * {
			padding: 24px 0 0 24px;
		}

		.row.\35 0\25 {
			margin: -24px 0 -1px -24px;
		}

		.row.uniform.\35 0\25 > * {
			padding: 24px 0 0 24px;
		}

		.row.uniform.\35 0\25 {
			margin: -24px 0 -1px -24px;
		}

		.row.\32 5\25 > * {
			padding: 12px 0 0 12px;
		}

		.row.\32 5\25 {
			margin: -12px 0 -1px -12px;
		}

		.row.uniform.\32 5\25 > * {
			padding: 12px 0 0 12px;
		}

		.row.uniform.\32 5\25 {
			margin: -12px 0 -1px -12px;
		}

		.\31 2u\28wide\29, .\31 2u\24\28wide\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28wide\29, .\31 1u\24\28wide\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28wide\29, .\31 0u\24\28wide\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28wide\29, .\39 u\24\28wide\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28wide\29, .\38 u\24\28wide\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28wide\29, .\37 u\24\28wide\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28wide\29, .\36 u\24\28wide\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28wide\29, .\35 u\24\28wide\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28wide\29, .\34 u\24\28wide\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28wide\29, .\33 u\24\28wide\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28wide\29, .\32 u\24\28wide\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28wide\29, .\31 u\24\28wide\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28wide\29 + *,
		.\31 1u\24\28wide\29 + *,
		.\31 0u\24\28wide\29 + *,
		.\39 u\24\28wide\29 + *,
		.\38 u\24\28wide\29 + *,
		.\37 u\24\28wide\29 + *,
		.\36 u\24\28wide\29 + *,
		.\35 u\24\28wide\29 + *,
		.\34 u\24\28wide\29 + *,
		.\33 u\24\28wide\29 + *,
		.\32 u\24\28wide\29 + *,
		.\31 u\24\28wide\29 + * {
			clear: left;
		}

		.\-11u\28wide\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28wide\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28wide\29 {
			margin-left: 75%;
		}

		.\-8u\28wide\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28wide\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28wide\29 {
			margin-left: 50%;
		}

		.\-5u\28wide\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28wide\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28wide\29 {
			margin-left: 25%;
		}

		.\-2u\28wide\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28wide\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 1280px) {

		.row > * {
			padding: 36px 0 0 36px;
		}

		.row {
			margin: -36px 0 -1px -36px;
		}

		.row.uniform > * {
			padding: 36px 0 0 36px;
		}

		.row.uniform {
			margin: -36px 0 -1px -36px;
		}

		.row.\32 00\25 > * {
			padding: 72px 0 0 72px;
		}

		.row.\32 00\25 {
			margin: -72px 0 -1px -72px;
		}

		.row.uniform.\32 00\25 > * {
			padding: 72px 0 0 72px;
		}

		.row.uniform.\32 00\25 {
			margin: -72px 0 -1px -72px;
		}

		.row.\31 50\25 > * {
			padding: 54px 0 0 54px;
		}

		.row.\31 50\25 {
			margin: -54px 0 -1px -54px;
		}

		.row.uniform.\31 50\25 > * {
			padding: 54px 0 0 54px;
		}

		.row.uniform.\31 50\25 {
			margin: -54px 0 -1px -54px;
		}

		.row.\35 0\25 > * {
			padding: 18px 0 0 18px;
		}

		.row.\35 0\25 {
			margin: -18px 0 -1px -18px;
		}

		.row.uniform.\35 0\25 > * {
			padding: 18px 0 0 18px;
		}

		.row.uniform.\35 0\25 {
			margin: -18px 0 -1px -18px;
		}

		.row.\32 5\25 > * {
			padding: 9px 0 0 9px;
		}

		.row.\32 5\25 {
			margin: -9px 0 -1px -9px;
		}

		.row.uniform.\32 5\25 > * {
			padding: 9px 0 0 9px;
		}

		.row.uniform.\32 5\25 {
			margin: -9px 0 -1px -9px;
		}

		.\31 2u\28normal\29, .\31 2u\24\28normal\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28normal\29, .\31 1u\24\28normal\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28normal\29, .\31 0u\24\28normal\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28normal\29, .\39 u\24\28normal\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28normal\29, .\38 u\24\28normal\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28normal\29, .\37 u\24\28normal\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28normal\29, .\36 u\24\28normal\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28normal\29, .\35 u\24\28normal\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28normal\29, .\34 u\24\28normal\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28normal\29, .\33 u\24\28normal\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28normal\29, .\32 u\24\28normal\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28normal\29, .\31 u\24\28normal\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28normal\29 + *,
		.\31 1u\24\28normal\29 + *,
		.\31 0u\24\28normal\29 + *,
		.\39 u\24\28normal\29 + *,
		.\38 u\24\28normal\29 + *,
		.\37 u\24\28normal\29 + *,
		.\36 u\24\28normal\29 + *,
		.\35 u\24\28normal\29 + *,
		.\34 u\24\28normal\29 + *,
		.\33 u\24\28normal\29 + *,
		.\32 u\24\28normal\29 + *,
		.\31 u\24\28normal\29 + * {
			clear: left;
		}

		.\-11u\28normal\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28normal\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28normal\29 {
			margin-left: 75%;
		}

		.\-8u\28normal\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28normal\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28normal\29 {
			margin-left: 50%;
		}

		.\-5u\28normal\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28normal\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28normal\29 {
			margin-left: 25%;
		}

		.\-2u\28normal\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28normal\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 960px) {

		.row > * {
			padding: 32px 0 0 32px;
		}

		.row {
			margin: -32px 0 -1px -32px;
		}

		.row.uniform > * {
			padding: 32px 0 0 32px;
		}

		.row.uniform {
			margin: -32px 0 -1px -32px;
		}

		.row.\32 00\25 > * {
			padding: 64px 0 0 64px;
		}

		.row.\32 00\25 {
			margin: -64px 0 -1px -64px;
		}

		.row.uniform.\32 00\25 > * {
			padding: 64px 0 0 64px;
		}

		.row.uniform.\32 00\25 {
			margin: -64px 0 -1px -64px;
		}

		.row.\31 50\25 > * {
			padding: 48px 0 0 48px;
		}

		.row.\31 50\25 {
			margin: -48px 0 -1px -48px;
		}

		.row.uniform.\31 50\25 > * {
			padding: 48px 0 0 48px;
		}

		.row.uniform.\31 50\25 {
			margin: -48px 0 -1px -48px;
		}

		.row.\35 0\25 > * {
			padding: 16px 0 0 16px;
		}

		.row.\35 0\25 {
			margin: -16px 0 -1px -16px;
		}

		.row.uniform.\35 0\25 > * {
			padding: 16px 0 0 16px;
		}

		.row.uniform.\35 0\25 {
			margin: -16px 0 -1px -16px;
		}

		.row.\32 5\25 > * {
			padding: 8px 0 0 8px;
		}

		.row.\32 5\25 {
			margin: -8px 0 -1px -8px;
		}

		.row.uniform.\32 5\25 > * {
			padding: 8px 0 0 8px;
		}

		.row.uniform.\32 5\25 {
			margin: -8px 0 -1px -8px;
		}

		.\31 2u\28narrow\29, .\31 2u\24\28narrow\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28narrow\29, .\31 1u\24\28narrow\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28narrow\29, .\31 0u\24\28narrow\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28narrow\29, .\39 u\24\28narrow\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28narrow\29, .\38 u\24\28narrow\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28narrow\29, .\37 u\24\28narrow\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28narrow\29, .\36 u\24\28narrow\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28narrow\29, .\35 u\24\28narrow\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28narrow\29, .\34 u\24\28narrow\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28narrow\29, .\33 u\24\28narrow\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28narrow\29, .\32 u\24\28narrow\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28narrow\29, .\31 u\24\28narrow\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28narrow\29 + *,
		.\31 1u\24\28narrow\29 + *,
		.\31 0u\24\28narrow\29 + *,
		.\39 u\24\28narrow\29 + *,
		.\38 u\24\28narrow\29 + *,
		.\37 u\24\28narrow\29 + *,
		.\36 u\24\28narrow\29 + *,
		.\35 u\24\28narrow\29 + *,
		.\34 u\24\28narrow\29 + *,
		.\33 u\24\28narrow\29 + *,
		.\32 u\24\28narrow\29 + *,
		.\31 u\24\28narrow\29 + * {
			clear: left;
		}

		.\-11u\28narrow\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28narrow\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28narrow\29 {
			margin-left: 75%;
		}

		.\-8u\28narrow\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28narrow\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28narrow\29 {
			margin-left: 50%;
		}

		.\-5u\28narrow\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28narrow\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28narrow\29 {
			margin-left: 25%;
		}

		.\-2u\28narrow\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28narrow\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 840px) {

		.row > * {
			padding: 32px 0 0 32px;
		}

		.row {
			margin: -32px 0 -1px -32px;
		}

		.row.uniform > * {
			padding: 32px 0 0 32px;
		}

		.row.uniform {
			margin: -32px 0 -1px -32px;
		}

		.row.\32 00\25 > * {
			padding: 64px 0 0 64px;
		}

		.row.\32 00\25 {
			margin: -64px 0 -1px -64px;
		}

		.row.uniform.\32 00\25 > * {
			padding: 64px 0 0 64px;
		}

		.row.uniform.\32 00\25 {
			margin: -64px 0 -1px -64px;
		}

		.row.\31 50\25 > * {
			padding: 48px 0 0 48px;
		}

		.row.\31 50\25 {
			margin: -48px 0 -1px -48px;
		}

		.row.uniform.\31 50\25 > * {
			padding: 48px 0 0 48px;
		}

		.row.uniform.\31 50\25 {
			margin: -48px 0 -1px -48px;
		}

		.row.\35 0\25 > * {
			padding: 16px 0 0 16px;
		}

		.row.\35 0\25 {
			margin: -16px 0 -1px -16px;
		}

		.row.uniform.\35 0\25 > * {
			padding: 16px 0 0 16px;
		}

		.row.uniform.\35 0\25 {
			margin: -16px 0 -1px -16px;
		}

		.row.\32 5\25 > * {
			padding: 8px 0 0 8px;
		}

		.row.\32 5\25 {
			margin: -8px 0 -1px -8px;
		}

		.row.uniform.\32 5\25 > * {
			padding: 8px 0 0 8px;
		}

		.row.uniform.\32 5\25 {
			margin: -8px 0 -1px -8px;
		}

		.\31 2u\28narrower\29, .\31 2u\24\28narrower\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28narrower\29, .\31 1u\24\28narrower\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28narrower\29, .\31 0u\24\28narrower\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28narrower\29, .\39 u\24\28narrower\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28narrower\29, .\38 u\24\28narrower\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28narrower\29, .\37 u\24\28narrower\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28narrower\29, .\36 u\24\28narrower\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28narrower\29, .\35 u\24\28narrower\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28narrower\29, .\34 u\24\28narrower\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28narrower\29, .\33 u\24\28narrower\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28narrower\29, .\32 u\24\28narrower\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28narrower\29, .\31 u\24\28narrower\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28narrower\29 + *,
		.\31 1u\24\28narrower\29 + *,
		.\31 0u\24\28narrower\29 + *,
		.\39 u\24\28narrower\29 + *,
		.\38 u\24\28narrower\29 + *,
		.\37 u\24\28narrower\29 + *,
		.\36 u\24\28narrower\29 + *,
		.\35 u\24\28narrower\29 + *,
		.\34 u\24\28narrower\29 + *,
		.\33 u\24\28narrower\29 + *,
		.\32 u\24\28narrower\29 + *,
		.\31 u\24\28narrower\29 + * {
			clear: left;
		}

		.\-11u\28narrower\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28narrower\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28narrower\29 {
			margin-left: 75%;
		}

		.\-8u\28narrower\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28narrower\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28narrower\29 {
			margin-left: 50%;
		}

		.\-5u\28narrower\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28narrower\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28narrower\29 {
			margin-left: 25%;
		}

		.\-2u\28narrower\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28narrower\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 736px) {

		.row > * {
			padding: 20px 0 0 20px;
		}

		.row {
			margin: -20px 0 -1px -20px;
		}

		.row.uniform > * {
			padding: 20px 0 0 20px;
		}

		.row.uniform {
			margin: -20px 0 -1px -20px;
		}

		.row.\32 00\25 > * {
			padding: 40px 0 0 40px;
		}

		.row.\32 00\25 {
			margin: -40px 0 -1px -40px;
		}

		.row.uniform.\32 00\25 > * {
			padding: 40px 0 0 40px;
		}

		.row.uniform.\32 00\25 {
			margin: -40px 0 -1px -40px;
		}

		.row.\31 50\25 > * {
			padding: 30px 0 0 30px;
		}

		.row.\31 50\25 {
			margin: -30px 0 -1px -30px;
		}

		.row.uniform.\31 50\25 > * {
			padding: 30px 0 0 30px;
		}

		.row.uniform.\31 50\25 {
			margin: -30px 0 -1px -30px;
		}

		.row.\35 0\25 > * {
			padding: 10px 0 0 10px;
		}

		.row.\35 0\25 {
			margin: -10px 0 -1px -10px;
		}

		.row.uniform.\35 0\25 > * {
			padding: 10px 0 0 10px;
		}

		.row.uniform.\35 0\25 {
			margin: -10px 0 -1px -10px;
		}

		.row.\32 5\25 > * {
			padding: 5px 0 0 5px;
		}

		.row.\32 5\25 {
			margin: -5px 0 -1px -5px;
		}

		.row.uniform.\32 5\25 > * {
			padding: 5px 0 0 5px;
		}

		.row.uniform.\32 5\25 {
			margin: -5px 0 -1px -5px;
		}

		.\31 2u\28mobile\29, .\31 2u\24\28mobile\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28mobile\29, .\31 1u\24\28mobile\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28mobile\29, .\31 0u\24\28mobile\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28mobile\29, .\39 u\24\28mobile\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28mobile\29, .\38 u\24\28mobile\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28mobile\29, .\37 u\24\28mobile\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28mobile\29, .\36 u\24\28mobile\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28mobile\29, .\35 u\24\28mobile\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28mobile\29, .\34 u\24\28mobile\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28mobile\29, .\33 u\24\28mobile\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28mobile\29, .\32 u\24\28mobile\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28mobile\29, .\31 u\24\28mobile\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28mobile\29 + *,
		.\31 1u\24\28mobile\29 + *,
		.\31 0u\24\28mobile\29 + *,
		.\39 u\24\28mobile\29 + *,
		.\38 u\24\28mobile\29 + *,
		.\37 u\24\28mobile\29 + *,
		.\36 u\24\28mobile\29 + *,
		.\35 u\24\28mobile\29 + *,
		.\34 u\24\28mobile\29 + *,
		.\33 u\24\28mobile\29 + *,
		.\32 u\24\28mobile\29 + *,
		.\31 u\24\28mobile\29 + * {
			clear: left;
		}

		.\-11u\28mobile\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28mobile\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28mobile\29 {
			margin-left: 75%;
		}

		.\-8u\28mobile\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28mobile\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28mobile\29 {
			margin-left: 50%;
		}

		.\-5u\28mobile\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28mobile\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28mobile\29 {
			margin-left: 25%;
		}

		.\-2u\28mobile\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28mobile\29 {
			margin-left: 8.33333%;
		}

	}

/* Basic */

	body {
		background: #f0f4f4;
		color: #5b5b5b;
		font-size: 15pt;
		line-height: 1.85em;
		font-family: 'Source Sans Pro', sans-serif;
		font-weight: 300;
	}

		body.is-loading *, body.is-loading *:after, body.is-loading *:before {
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
		}

	input, textarea, select {
		font-size: 15pt;
		line-height: 1.85em;
		font-family: 'Source Sans Pro', sans-serif;
		font-weight: 300;
	}

	h1, h2, h3, h4, h5, h6 {
		font-weight: 400;
		color: #483949;
		line-height: 1.25em;
	}

	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
		color: inherit;
		text-decoration: none;
		border-bottom-color: transparent;
	}

	h1 strong, h2 strong, h3 strong, h4 strong, h5 strong, h6 strong {
		font-weight: 600;
	}

	h2 {
		font-size: 2.85em;
	}

	h3 {
		font-size: 1.25em;
	}

	h4 {
		font-size: 1em;
		margin: 0 0 0.25em 0;
	}

	strong, b {
		font-weight: 400;
		color: #483949;
	}

	em, i {
		font-style: italic;
	}

	a {
		color: inherit;
		border-bottom: solid 1px rgba(128, 128, 128, 0.15);
		text-decoration: none;
		-moz-transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
		-webkit-transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
		-ms-transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
		transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
	}

		a:hover {
			color: #ef8376;
			border-bottom-color: transparent;
		}

	sub {
		position: relative;
		top: 0.5em;
		font-size: 0.8em;
	}

	sup {
		position: relative;
		top: -0.5em;
		font-size: 0.8em;
	}

	blockquote {
		border-left: solid 0.5em #ddd;
		padding: 1em 0 1em 2em;
		font-style: italic;
	}

	p, ul, ol, dl, table {
		margin-bottom: 1em;
	}

	p {
		text-align: justify;
	}

	br.clear {
		clear: both;
	}

	hr {
		position: relative;
		display: block;
		border: 0;
		top: 4.5em;
		margin-bottom: 9em;
		height: 6px;
		border-top: solid 1px rgba(128, 128, 128, 0.2);
		border-bottom: solid 1px rgba(128, 128, 128, 0.2);
	}

		hr:before, hr:after {
			content: '';
			position: absolute;
			top: -8px;
			display: block;
			width: 1px;
			height: 21px;
			background: rgba(128, 128, 128, 0.2);
		}

		hr:before {
			left: -1px;
		}

		hr:after {
			right: -1px;
		}

	.timestamp {
		color: rgba(128, 128, 128, 0.75);
		font-size: 0.8em;
	}

/* Sections/Article */

	section, article {
		margin-bottom: 3em;
	}

		section > :last-child, section:last-child, article > :last-child, article:last-child {
			margin-bottom: 0;
		}

		section.special > header, section.special > footer, article.special > header, article.special > footer {
			text-align: center;
		}

	.row > section, .row > article {
		margin-bottom: 0;
	}

	header {
		margin: 0 0 1em 0;
	}

		header > p {
			display: block;
			font-size: 1.5em;
			margin: 1em 0 2em 0;
			line-height: 1.5em;
			text-align: inherit;
		}

	footer {
		margin: 2.5em 0 0 0;
	}

/* Image */

	.image {
		position: relative;
		display: inline-block;
		border: 0;
		outline: 0;
	}

		.image img {
			display: block;
			width: 100%;
		}

		.image.fit {
			display: block;
			width: 100%;
		}

		.image.featured {
			display: block;
			width: 100%;
			margin: 0 0 4em 0;
		}

		.image.left {
			float: left;
			margin: 0 2em 2em 0;
		}

		.image.centered {
			display: block;
			margin: 0 0 2em 0;
		}

			.image.centered img {
				margin: 0 auto;
				width: auto;
			}

/* List */

	ul.default {
		list-style: disc;
		padding-left: 1em;
	}

		ul.default li {
			padding-left: 0.5em;
		}

	ul.actions {
		margin: 3em 0 0 0;
	}

		form ul.actions {
			margin-top: 0;
		}

		ul.actions li {
			display: inline-block;
			margin: 0 0.75em 0 0.75em;
		}

			ul.actions li:first-child {
				margin-left: 0;
			}

			ul.actions li:last-child {
				margin-right: 0;
			}

	ul.divided li {
		border-top: solid 1px rgba(128, 128, 128, 0.2);
		padding-top: 1.5em;
		margin-top: 1.5em;
	}

		ul.divided li:first-child {
			border-top: 0;
			padding-top: 0;
			margin-top: 0;
		}

	ul.menu {
		height: 1em;
		line-height: 1em;
	}

		ul.menu li {
			display: inline-block;
			border-left: solid 1px rgba(128, 128, 128, 0.2);
			padding-left: 1.25em;
			margin-left: 1.25em;
		}

			ul.menu li:first-child {
				border-left: 0;
				padding-left: 0;
				margin-left: 0;
			}

	ul.icons {
		position: relative;
		background: rgba(128, 128, 128, 0.05);
		border-radius: 4em;
		display: inline-block;
		padding: 0.35em 0.75em 0.35em 0.75em;
		font-size: 1.25em;
		cursor: default;
	}

		ul.icons li {
			display: inline-block;
		}

			ul.icons li a {
				display: inline-block;
				background: none;
				width: 2.5em;
				height: 2.5em;
				line-height: 2.5em;
				text-align: center;
				border-radius: 100%;
				border: 0;
				color: inherit;
			}

				ul.icons li a:hover {
					color: #ef8376;
				}

	ol.default {
		list-style: decimal;
		padding-left: 1.25em;
	}

		ol.default li {
			padding-left: 0.25em;
		}

/* Form */

	form label {
		display: block;
		font-weight: 400;
		color: #483949;
		margin: 0 0 1em 0;
	}

	form input[type="text"],
	form input[type="email"],
	form input[type="password"],
	form select,
	form textarea {
		-webkit-appearance: none;
		display: block;
		border: 0;
		background: #fafafa;
		width: 100%;
		border-radius: 0.5em;
		border: solid 1px #E5E5E5;
		padding: 1em;
		-moz-transition: background-color 0.35s ease-in-out, border-color 0.35s ease-in-out;
		-webkit-transition: background-color 0.35s ease-in-out, border-color 0.35s ease-in-out;
		-ms-transition: background-color 0.35s ease-in-out, border-color 0.35s ease-in-out;
		transition: background-color 0.35s ease-in-out, border-color 0.35s ease-in-out;
	}

		form input[type="text"]:focus,
		form input[type="email"]:focus,
		form input[type="password"]:focus,
		form select:focus,
		form textarea:focus {
			background: #fff;
			border-color: #df7366;
		}

	form input[type="text"],
	form input[type="email"],
	form input[type="password"],
	form select {
		line-height: 1em;
	}

	form textarea {
		min-height: 9em;
	}

	form .formerize-placeholder {
		color: #555 !important;
	}

	form ::-webkit-input-placeholder {
		color: #555 !important;
	}

	form :-moz-placeholder {
		color: #555 !important;
	}

	form ::-moz-placeholder {
		color: #555 !important;
	}

	form :-ms-input-placeholder {
		color: #555 !important;
	}

	form ::-moz-focus-inner {
		border: 0;
	}

/* Table */

	table {
		width: 100%;
	}

		table.default {
			width: 100%;
		}

			table.default tbody tr {
				border-top: solid 1px #e5e5e5;
			}

				table.default tbody tr:first-child {
					border-top: 0;
				}

				table.default tbody tr:nth-child(2n+1) {
					background: #fafafa;
				}

			table.default td {
				padding: 0.5em 1em 0.5em 1em;
			}

			table.default th {
				text-align: left;
				font-weight: 400;
				padding: 0.5em 1em 0.5em 1em;
			}

			table.default thead {
				border-bottom: solid 2px #e5e5e5;
			}

			table.default tfoot {
				border-top: solid 2px #e5e5e5;
			}

/* Button */

	input[type="button"],
	input[type="submit"],
	input[type="reset"],
	button,
	.button {
		position: relative;
		display: inline-block;
		background: #df7366;
		color: #fff;
		text-align: center;
		border-radius: 0.5em;
		text-decoration: none;
		padding: 0.65em 3em 0.65em 3em;
		border: 0;
		cursor: pointer;
		outline: 0;
		font-weight: 300;
		-moz-transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
		-webkit-transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
		-ms-transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
		transition: background-color 0.35s ease-in-out, color 0.35s ease-in-out, border-bottom-color 0.35s ease-in-out;
	}

		input[type="button"]:hover,
		input[type="submit"]:hover,
		input[type="reset"]:hover,
		button:hover,
		.button:hover {
			color: #fff;
			background: #ef8376;
		}

		input[type="button"].alt,
		input[type="submit"].alt,
		input[type="reset"].alt,
		button.alt,
		.button.alt {
			background: #2B252C;
		}

			input[type="button"].alt:hover,
			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			button.alt:hover,
			.button.alt:hover {
				background: #3B353C;
			}

/* Post */

	.post.stub {
		text-align: center;
	}

		.post.stub header {
			margin: 0;
		}

/* Icons */

	.icon {
		text-decoration: none;
	}

		.icon:before {
			display: inline-block;
			font-family: FontAwesome;
			font-size: 1.25em;
			text-decoration: none;
			font-style: normal;
			font-weight: normal;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.icon > .label {
			display: none;
		}

		.icon.circled {
			position: relative;
			display: inline-block;
			background: #2b252c;
			color: #fff;
			border-radius: 100%;
			width: 3em;
			height: 3em;
			line-height: 3.25em;
			text-align: center;
			font-size: 1.25em;
		}

			header .icon.circled {
				margin: 0 0 2em 0;
			}

/* Wrapper */

	.wrapper {
		background: #fff;
		margin: 0 0 2em 0;
		padding: 6em 0 6em 0;
	}

		.wrapper.style2 {
			padding-top: 0;
		}

/* Header */

	#header {
		position: relative;
		background-image: url("../../images/header.jpg");
		background-size: cover;
		background-position: center center;
		background-attachment: fixed;
		color: #fff;
		text-align: center;
		padding: 7.5em 0 2em 0;
		cursor: default;
	}

		#header:before {
			content: '';
			display: inline-block;
			vertical-align: middle;
			height: 100%;
		}

		#header .inner {
			position: relative;
			z-index: 1;
			margin: 0;
			display: inline-block;
			vertical-align: middle;
		}

		#header header {
			display: inline-block;
		}

			#header header > p {
				font-size: 1.25em;
				margin: 0;
			}

		#header h1 {
			color: #fff;
			font-size: 3em;
			line-height: 1em;
		}

			#header h1 a {
				color: inherit;
			}

		#header .button {
			display: inline-block;
			border-radius: 100%;
			width: 4.5em;
			height: 4.5em;
			line-height: 4.5em;
			text-align: center;
			font-size: 1.25em;
			padding: 0;
		}

		#header hr {
			top: 1.5em;
			margin-bottom: 3em;
			border-bottom-color: rgba(192, 192, 192, 0.35);
			box-shadow: inset 0 1px 0 0 rgba(192, 192, 192, 0.35);
		}

			#header hr:before, #header hr:after {
				background: rgba(192, 192, 192, 0.35);
			}

		#header footer {
			margin: 1em 0 0 0;
		}

	body.homepage #header {
		height: 100vh;
		min-height: 40em;
	}

		body.homepage #header h1 {
			font-size: 4em;
		}

		body.homepage #header:after {
			content: '';
			background: #1C0920;
			display: block;
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			opacity: 0;
			-moz-transition: opacity 2.5s ease-in-out;
			-webkit-transition: opacity 2.5s ease-in-out;
			-ms-transition: opacity 2.5s ease-in-out;
			transition: opacity 2.5s ease-in-out;
			-moz-transition-delay: 0.5s;
			-webkit-transition-delay: 0.5s;
			-ms-transition-delay: 0.5s;
			transition-delay: 0.5s;
		}

	body.homepage.is-loading #header:after {
		opacity: 1;
	}

/* Nav */

	#nav {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		text-align: center;
		padding: 1.5em 0 1.5em 0;
		z-index: 1;
		overflow: hidden;
	}

		#nav > ul {
			line-height: 0px;
			position: relative;
			display: inline-block;
			margin: 0;
			height: 21px;
			border-left: solid 1px rgba(192, 192, 192, 0.35);
			border-right: solid 1px rgba(192, 192, 192, 0.35);
		}

			#nav > ul:before, #nav > ul:after {
				content: '';
				display: block;
				width: 300%;
				position: absolute;
				top: 50%;
				margin-top: -2px;
				height: 5px;
				border-top: solid 1px rgba(192, 192, 192, 0.35);
				border-bottom: solid 1px rgba(192, 192, 192, 0.35);
			}

			#nav > ul:before {
				left: 100%;
				margin-left: 1px;
			}

			#nav > ul:after {
				right: 100%;
				margin-right: 1px;
			}

			#nav > ul > li {
				display: inline-block;
				margin: -9px 0.5em 0 0.5em;
				border-radius: 0.5em;
				padding: 0.85em;
				border: solid 1px transparent;
				-moz-transition: color 0.35s ease-in-out, border-color 0.35s ease-in-out;
				-webkit-transition: color 0.35s ease-in-out, border-color 0.35s ease-in-out;
				-ms-transition: color 0.35s ease-in-out, border-color 0.35s ease-in-out;
				transition: color 0.35s ease-in-out, border-color 0.35s ease-in-out;
			}

				#nav > ul > li.active {
					border-color: rgba(192, 192, 192, 0.35);
				}

				#nav > ul > li > a, #nav > ul > li > span {
					display: block;
					color: inherit;
					text-decoration: none;
					border: 0;
					outline: 0;
				}

				#nav > ul > li > ul {
					display: none;
				}

	.dropotron {
		background: rgba(255, 255, 255, 0.975);
		padding: 1em 1.25em 1em 1.25em;
		line-height: 1em;
		height: auto;
		text-align: left;
		border-radius: 0.5em;
		box-shadow: 0 0.15em 0.25em 0 rgba(0, 0, 0, 0.25);
		min-width: 12em;
		margin-top: -1em;
	}

		.dropotron li {
			border-top: solid 1px rgba(128, 128, 128, 0.2);
			color: #5b5b5b;
		}

			.dropotron li:first-child {
				border-top: 0;
			}

			.dropotron li:hover {
				color: #ef8376;
			}

			.dropotron li a, .dropotron li span {
				display: block;
				border: 0;
				padding: 0.5em 0 0.5em 0;
				-moz-transition: color 0.35s ease-in-out;
				-webkit-transition: color 0.35s ease-in-out;
				-ms-transition: color 0.35s ease-in-out;
				transition: color 0.35s ease-in-out;
			}

		.dropotron.level-0 {
			margin-top: 2em;
			font-size: 0.9em;
		}

			.dropotron.level-0:before {
				content: '';
				position: absolute;
				left: 50%;
				top: -0.7em;
				margin-left: -0.75em;
				border-bottom: solid 0.75em rgba(255, 255, 255, 0.975);
				border-left: solid 0.75em rgba(64, 64, 64, 0);
				border-right: solid 0.75em rgba(64, 64, 64, 0);
			}

/* Banner */

	#banner {
		background: #fff;
		text-align: center;
		padding: 4.5em 0 4.5em 0;
		margin-bottom: 0;
	}

		#banner header > p {
			margin-bottom: 0;
		}

/* Content */

	#content > hr {
		top: 3em;
		margin-bottom: 6em;
	}

	#content > section {
		margin-bottom: 0;
	}

/* Sidebar */

	#sidebar > hr {
		top: 3em;
		margin-bottom: 6em;
	}

		#sidebar > hr.first {
			display: none;
		}

	#sidebar > section {
		margin-bottom: 0;
	}

/* Main */

	#main {
		margin-bottom: 0;
	}

		#main section:first-of-type {
			padding-top: 2em;
		}

/* Footer */

	#footer {
		position: relative;
		overflow: hidden;
		padding: 6em 0 6em 0;
		background: #2b252c;
		color: #fff;
	}

		#footer .icon.circled {
			background: #fff;
			color: #2b252c;
		}

		#footer header {
			text-align: center;
			cursor: default;
		}

		#footer h2, #footer h3, #footer h4, #footer h5, #footer h6 {
			color: #fff;
		}

		#footer .contact {
			text-align: center;
		}

			#footer .contact p {
				text-align: center;
				margin: 0 0 3em 0;
			}

		#footer .copyright {
			text-align: center;
			color: rgba(128, 128, 128, 0.75);
			font-size: 0.8em;
			cursor: default;
		}

			#footer .copyright a {
				color: rgba(128, 128, 128, 0.75);
			}

				#footer .copyright a:hover {
					color: rgba(212, 212, 212, 0.85);
				}

/* Carousel */

	.carousel {
		position: relative;
		overflow: hidden;
		padding: 2em 0 2em 0;
		margin-bottom: 0;
	}

		.carousel .forward, .carousel .backward {
			position: absolute;
			top: 50%;
			width: 6em;
			height: 12em;
			margin-top: -6em;
			cursor: pointer;
		}

			.carousel .forward:before, .carousel .backward:before {
				content: '';
				display: block;
				width: 6em;
				height: 6em;
				border-radius: 100%;
				background-color: rgba(72, 57, 73, 0.5);
				position: absolute;
				top: 50%;
				margin-top: -3em;
				-moz-transition: background-color 0.35s ease-in-out;
				-webkit-transition: background-color 0.35s ease-in-out;
				-o-transition: background-color 0.35s ease-in-out;
				-ms-transition: background-color 0.35s ease-in-out;
				transition: background-color 0.35s ease-in-out;
				-webkit-backface-visibility: hidden;
			}

			.carousel .forward:after, .carousel .backward:after {
				content: '';
				width: 3em;
				height: 3em;
				position: absolute;
				top: 50%;
				margin: -1.5em 0 0 0;
				background: url("images/arrow.svg") no-repeat center center;
			}

			.carousel .forward:hover:before, .carousel .backward:hover:before {
				background-color: rgba(239, 131, 118, 0.75);
			}

		.carousel .forward {
			right: 0;
		}

			.carousel .forward:before {
				right: -3em;
			}

			.carousel .forward:after {
				right: -0.25em;
			}

		.carousel .backward {
			left: 0;
		}

			.carousel .backward:before {
				left: -3em;
			}

			.carousel .backward:after {
				left: -0.25em;
				-moz-transform: scaleX(-1);
				-webkit-transform: scaleX(-1);
				-ms-transform: scaleX(-1);
				transform: scaleX(-1);
			}

		.carousel .reel {
			white-space: nowrap;
			position: relative;
			-webkit-overflow-scrolling: touch;
			padding: 0 2em 0 2em;
		}

		.carousel article {
			display: inline-block;
			width: 18em;
			background: #fff;
			text-align: center;
			padding: 0 1em 3em 1em;
			margin: 0 2em 0 0;
			white-space: normal;
			opacity: 1.0;
			-moz-transition: opacity 0.75s ease-in-out;
			-webkit-transition: opacity 0.75s ease-in-out;
			-ms-transition: opacity 0.75s ease-in-out;
			transition: opacity 0.75s ease-in-out;
		}

			.carousel article.loading {
				opacity: 0;
			}

			.carousel article .image {
				position: relative;
				left: -1em;
				top: 0;
				width: auto;
				margin-right: -2em;
				margin-bottom: 3em;
			}

			.carousel article p {
				text-align: center;
			}

/* Wide */

	@media screen and (max-width: 1680px) {

		/* Basic */

			body, input, textarea, select {
				font-size: 14pt;
				line-height: 1.75em;
			}

		/* Carousel */

			.carousel {
				padding: 1.5em 0 1.5em 0;
			}

				.carousel .reel {
					padding: 0 1.5em 0 1.5em;
				}

				.carousel article {
					width: 18em;
					margin: 0 1.25em 0 0;
				}

	}

/* Normal */

	@media screen and (max-width: 1280px) {

		/* Basic */

			body, input, textarea, select {
				font-size: 12pt;
				line-height: 1.5em;
			}

		/* Wrapper */

			.wrapper {
				padding-left: 2em;
				padding-right: 2em;
			}

		/* Header */

			#header {
				background-attachment: scroll;
			}

				#header .inner {
					padding-left: 2em;
					padding-right: 2em;
				}

		/* Banner */

			#banner {
				padding-left: 2em;
				padding-right: 2em;
			}

		/* Footer */

			#footer {
				padding-left: 2em;
				padding-right: 2em;
			}

	}

/* Narrow */

/* Narrower */

	@media screen and (max-width: 840px) {

		/* Basic */

			body, input, textarea, select {
				font-size: 13pt;
				line-height: 1.65em;
			}

			.tweet {
				text-align: center;
			}

			.timestamp {
				display: block;
				text-align: center;
			}

		/* Footer */

			#footer {
				padding: 4em 2em 4em 2em;
			}

		/* Carousel */

			.carousel {
				padding: 1.25em 0 1.25em 0;
			}

				.carousel article {
					width: 18em;
					margin: 0 1em 0 0;
				}

	}

/* Mobile */

	#navPanel, #titleBar {
		display: none;
	}

	@media screen and (max-width: 736px) {

		/* Basic */

			html, body {
				overflow-x: hidden;
			}

			body, input, textarea, select {
				font-size: 12.5pt;
				line-height: 1.5em;
			}

			h2 {
				font-size: 1.75em;
			}

			h3 {
				font-size: 1.25em;
			}

			hr {
				top: 3em;
				margin-bottom: 6em;
			}

		/* Section/Article */

			section, article {
				margin-bottom: 2em;
			}

				section:last-child, article:last-child {
					margin-bottom: 0;
				}

			.row > section, .row > article {
				margin-bottom: 2em;
			}

			header > p {
				font-size: 1.25em;
			}

		/* Image */

			.image.featured {
				margin: 0 0 2em 0;
			}

			.image.left {
				margin: 0 1em 1em 0;
			}

			.image.centered {
				margin: 0 0 1em 0;
			}

		/* List */

			form ul.actions {
				margin-top: 0;
			}

			ul.actions li {
				display: block;
				margin: 0.75em 0 0 0;
			}

				ul.actions li:first-child {
					margin-top: 0;
				}

			ul.menu {
				height: auto;
				text-align: center;
			}

				ul.menu li {
					display: block;
					border: 0;
					padding: 0.75em 0 0 0;
					margin: 0;
				}

					ul.menu li:first-child {
						padding-top: 0;
					}

			ul.icons {
				font-size: 1em;
				padding: 0.35em 0.5em 0.35em 0.5em;
			}

				ul.icons li a {
					width: 2.25em;
				}

		/* Button */

			input[type="button"],
			input[type="submit"],
			input[type="reset"],
			button,
			.button {
				display: block;
				padding: 0;
				line-height: 3em;
				width: 100%;
			}

		/* Off-Canvas Navigation */

			#page-wrapper {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				padding-bottom: 1px;
			}

			#navButton {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 44px;
				left: 0;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 10001;
			}

				#navButton .toggle {
					position: absolute;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
					border: 0;
					outline: 0;
				}

					#navButton .toggle:before {
						font-family: FontAwesome;
						text-decoration: none;
						font-style: normal;
						font-weight: normal;
						-webkit-font-smoothing: antialiased;
						-moz-osx-font-smoothing: grayscale;
						content: '\f0c9';
						color: #fff;
						color: rgba(255, 255, 255, 0.75);
						text-align: center;
						display: block;
						font-size: 14px;
						width: 80px;
						height: 30px;
						line-height: 30px;
						position: absolute;
						left: 50%;
						margin-left: -40px;
						background: rgba(132, 128, 136, 0.75);
						border-top: 0;
						border-radius: 0 0 0.35em 0.35em;
					}

			#navPanel {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transform: translateY(-50vh);
				-webkit-transform: translateY(-50vh);
				-ms-transform: translateY(-50vh);
				transform: translateY(-50vh);
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 50vh;
				left: 0;
				overflow-y: auto;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 10002;
				background: #1f1920;
				box-shadow: inset 0px -2px 5px 0px rgba(0, 0, 0, 0.25);
				font-size: 1em;
			}

				#navPanel:before {
					content: '';
					display: block;
					position: absolute;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
					background: url("images/overlay.png");
					background-size: 128px 128px;
				}

				#navPanel .link {
					position: relative;
					z-index: 1;
					display: block;
					text-decoration: none;
					padding: 0.5em;
					color: #ddd;
					border: 0;
					border-top: dotted 1px rgba(255, 255, 255, 0.05);
				}

					#navPanel .link:first-child {
						border-top: 0;
					}

					#navPanel .link.depth-0 {
						color: #fff;
						font-weight: 600;
					}

				#navPanel .indent-1 {
					display: inline-block;
					width: 1em;
				}

				#navPanel .indent-2 {
					display: inline-block;
					width: 2em;
				}

				#navPanel .indent-3 {
					display: inline-block;
					width: 3em;
				}

				#navPanel .indent-4 {
					display: inline-block;
					width: 4em;
				}

				#navPanel .indent-5 {
					display: inline-block;
					width: 5em;
				}

				#navPanel .depth-0 {
					color: #fff;
				}

			body.navPanel-visible #page-wrapper {
				-moz-transform: translateY(50vh);
				-webkit-transform: translateY(50vh);
				-ms-transform: translateY(50vh);
				transform: translateY(50vh);
			}

			body.navPanel-visible #navButton {
				-moz-transform: translateY(50vh);
				-webkit-transform: translateY(50vh);
				-ms-transform: translateY(50vh);
				transform: translateY(50vh);
			}

			body.navPanel-visible #navPanel {
				-moz-transform: translateY(0);
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

		/* Wrapper */

			.wrapper {
				padding: 3em 1em 3em 1em;
			}

		/* Header */

			#header {
				background-attachment: scroll;
				padding: 2.5em 0 0 0;
			}

				#header .inner {
					padding-top: 1.5em;
					padding-left: 1em;
					padding-right: 1em;
				}

				#header header > p {
					font-size: 1em;
				}

				#header h1 {
					font-size: 1.75em;
				}

				#header hr {
					top: 1em;
					margin-bottom: 2.5em;
				}

			body.homepage #header {
				min-height: 0;
				padding: 5.5em 0 5em 0;
				height: auto;
			}

				body.homepage #header:before {
					display: none;
				}

				body.homepage #header h1 {
					font-size: 2.5em;
				}

		/* Nav */

			#nav {
				display: none;
			}

		/* Banner */

			#banner {
				padding: 3em 2em 3em 2em;
			}

		/* Sidebar */

			#sidebar > hr:first-of-type {
				display: block;
			}

		/* Main */

			#main > header {
				text-align: center;
			}

		/* Footer */

			#footer {
				padding-left: 1em;
				padding-right: 1em;
			}

		/* Carousel */

			.carousel {
				padding: 0.5em 0 0.5em 0;
			}

				.carousel .reel {
					padding: 0 0.5em 0 0.5em;
				}

				.carousel article {
					width: 14em;
					padding-bottom: 2em;
					margin: 0 0.5em 0 0;
				}

					.carousel article .image {
						margin-bottom: 2em;
					}

	}
</style>
	</head>
	<body class="homepage">
			<!-- Header -->
				<div id="header">
						<div class="inner"> 
								<P>
								<?php echo $question_item[0]['text']; ?><BR>
								<?php foreach ($question_item as $answer): ?>
									<input type="radio" name="<?php echo $answer['text'] ?>"><?php echo $answer['definition'] ?><BR>
								<?php endforeach; ?>
								</p>

								<br>
								<br>
								<br>
								<br>
								<!-- <input type="submit" value="Send Form">
								<input type="reset" value="Clear Form">
							</form> -->
							<a href="<?php echo $answer['id_question']-1 ?>" class="previous round">&#8249;</a> 
							<a href="<?php echo $answer['id_question']+1 ?>" class="next round">&#8250;</a> 
						</div>

						<nav id="nav">
							<ul>
								<li><a href="index.html">Small Releases</a></li>
							</ul>
							<br>
						</nav>
				</div>
	</body>
</html>