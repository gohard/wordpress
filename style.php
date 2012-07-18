<?php
header('Content-type: text/css');
header("Cache-Control: must-revalidate");

$wpcx_pattern    =   '/^[^a-z0-9]{6}$/';
if (preg_replace('/[^a-z0-9]/i', '', $_GET['color']) && isset($_GET['color'])) {
$wpcx_color = $_GET["color"];
} else {
$wpcx_color = "9d60c1";
}
?>
/*  
Theme Name: Satyanarayan Verma
Theme URI: http://matictechnology.com
Description: Elegant, clean and modern Business & Portfolio Theme which offers a mighty Options Set to customize WP-Creativix to your own needs. It has custom Blog, Portfolio and No-Sidebar Templates blowing your customers mind. Furthermore WP-Creativix lets you choose a Highlight and Background-Color. Upload your own Logo and Socialize WP-Creativix with Facebook, Twitter and LinkedIn. A Multi-Level-Dropdown Menu and a flexible Slider featuring Posts and Pages will turn your WP Installation into an eye-catching Business & Portfolio Website. Please see the DEMO for further Details.
Version: 1.0
Author: Satyanarayan Verma
Author URI:  http://matictechnology.com
Tags: white, silver, purple, light, three-columns, two-columns, fixed-width, right-sidebar, left-sidebar, theme-options, purple, front-page-post-form, photoblogging, custom-colors, custom-header, sticky-post, microformats, threaded-comments, editor-style, custom-menu
License: GNU General Public License
*/

/* General Styles */


html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
margin: 0;
padding: 0;
border: 0;
outline: 0;
font-size: 100%;
vertical-align: baseline;
background: transparent;
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

blockquote:before, blockquote:after,
q:before, q:after {
content: '';
content: none;
}

:focus {
outline: 0;
}

ins {
text-decoration: none;
}

del {
text-decoration: line-through;
}

table {
border-collapse: collapse;
border-spacing: 0;
}

a {
color: #DC0012;
text-decoration: none;
}

a:hover {
color: #FFFFFF;
text-decoration: underline;
}

a:visited {
color: #FFFFFF;
text-decoration: none;
}

body {
font-size: 12px;
font-family: Tahoma, Geneva, sans-serif;
line-height:18px;
color: #6e6e6e;
}

blockquote {
border-left: 5px solid #CCC;
margin:10px 0 10px 0px;
font-size: 11px;
float: left;
clear: left;
}

blockquote p {
font-size: 11px;
line-height: 24px;
display: block;
margin: 10px 0px;
padding:11px 25px;
}

blockquote blockquote {
margin-left: 10px;
}

h1, h2, h3, h4, h5, h6 {
display: block;
clear: left;
}

address, caption, cite, code, dfn, em, strong, th, var {
font-style: normal;
font-weight: normal;
}

table {
border-collapse: collapse;
border-spacing: 0;
}

fieldset, img {
border: 0;
}

caption, th {
text-align: left;
}

q:before, q:after {
content: '';
}

abbr {
border:0;
}

p {
padding-bottom: 10px;
line-height: 20px;
}

#wrapper {
width:925px;
margin:0 auto;
}
		
#topmenu {
margin-top: 5px;
float: right;
clear: both;
}

#header {
float: left;
width: 960px;
vertical-align: bottom;
position: relative;
margin-top: -17px;
}

#logoname {
float: left;
width: 240px;
}

#logoname a {
font-family: Arial;
font-size: 26px;
text-transform: uppercase;
}

#logoname a:hover {
text-decoration: none;
}

#logoname a, img {
border: none;
}

#logoname img {
max-width: 230px !important;
}

#logoname .logo_text {
position: relative;
bottom: 7px;
left: 10px;
}

/* Navigation Styles */

.navigation {
background: url(images/navbar.png) no-repeat;
padding-right:18px;
font-size:12px;
position: absolute;
right: 8px;
bottom: 0px;
z-index: 6;
width: 691px;
vertical-align: baseline !important;
height: 48px;
float: left;
}

#search {
width: 180px;
float: right;
margin-right: 5px;
height: 28px;
}

#search form {
width: 180px;
height: 28px;
margin-top: 8px;
float: left;
}

#searchbox {
background: url(images/search.gif) no-repeat top;
width: 127px;
height: 28px;
border: none;
float: left;
padding: 2px 10px;
color: #6e6e6e;
}

#searchbutton {
background: url(images/search_btn.gif) no-repeat;
width: 27px;
height: 28px;
border: none;
float: left;
position: relative;
cursor: pointer;
}

#header #navbar {
float:left;
height:50px;
line-height:50px;
padding-left:13px;
}

#navbar, #navbar ul {
margin:0;
padding:0;
list-style-type:none;
position:relative;
line-height:50px; 
z-index:5;
}

#header #navbar a {
height:48px;
display:block;
padding:0 15px;
text-decoration:none;
text-align:center;
line-height:25px; 
outline:none;
float: left;
z-index:35;
position:relative;
color: #6e6e6e;
}

#header #navbar a:hover {
color: #DC0012;
}

#header #navbar ul a {
line-height: 35px; 
}

#header #navbar li {
float:left;
position:relative;
z-index:20;
margin-top:10px;
}

#header #navbar li li {
border-left:none;
margin-top:0;
}

#header #navbar ul {
position:absolute;
display:none;
width:172px;
top:36px;
left:-1px;
background: #f5f5f5;
}

#header #navbar li ul a {
width:130px;
height:auto;
float:left;
text-align:left;
padding:0 21px;
}

#header #navbar ul ul {
top:auto;
}	

#header #navbar li ul ul {
left:172px;
top: 0px;
}

#header #navbar li ul ul a {
border-left:none;
}

#header #navbar a{
color:#888;
}

#header #navbar ul {
border:1px solid #c0c0c0;
border-top:none;
}

#header #navbar li ul a {
border-bottom:1px solid #fff;
border-top:1px solid #c0c0c0;
}

#header #navbar ul a, #header #navbar ul li {
background-color:#f5f5f5;
}

#header #navbar ul a:hover, #header #navbar ul a:focus {
color: #DC0012;
}

#header #navbar .current_page_item a {
}

#header #navbar li:hover ul ul, #header #navbar li:hover ul ul ul,#header  #navbar li:hover ul ul ul ul {
display:none;	
}
#header #navbar li:hover ul, #header #navbar li li:hover ul, #header #navbar li li li:hover ul, #header #navbar li li li li:hover ul {
display:block;
}

/* Slideshow Styles */

#slide_wrapper {
width: 1000px;
height: 250px;
margin-top: 10px;
padding-top:5px;
z-index:1;
margin-left: 10px;
clear: both;
float: left;
margin-bottom: 5px;
position: relative;
}

ul#slideshow {
float: left;
width: 1000px;
height: 250px;
margin: 15px 15px;
background: transparent !important;
list-style: none !important;
}

ul#slideshow li {
float: left;
width: 1000px;
overflow: hidden;
background: transparent !important;
}

ul#slideshow li img {
float: left;
width: 480px;
height: 210px;
border: 1px solid #CCC;
}

ul#slideshow li .slide_text {
float: left;
width: 380px;
margin-left: 20px;
background: transparent !important;
}

ul#slideshow li .slide_text h1 a {
font-size: 17px;
display: block;
margin-bottom: 5px;
}

ul#slideshow li .slide_text .date {
font-size: 11px;
display: block;
color: #8F8F8F;
font-style: italic;
}

ul#slideshow li .slide_text p {
margin-top: 15px;
line-height: 23px;
}

.slide_nav {
float: left;
width: 1000px;
margin-top: 20px;
padding-left: 80px;
}

ul#slide_navigation {
float: left;
width: 921px;
list-style: none;
}

#slide_navigation li {
float: left;
width: 110px;
margin-right: 20px;
padding: 0px;
height: 80px;
position: relative;
display: block;
}

#slide_navigation a {
float: left;
display: block;
border: 2px solid #CCC;
}

#arrowleft {
float:left;
width:26px;
height:49px;
background:url(images/left.png) top center no-repeat;
z-index:12;
position: absolute;
bottom: 35px;
left: 20px;
}

#arrowright {
float:right;
width:26px;
height:49px;
background:url(images/right.png) top center no-repeat;
position: absolute;
z-index:7;
right: 20px;
bottom: 35px;
}

#frontarea {
float:left;
position:relative;
width:785px;
margin-left:3px;
height:100px;
overflow:hidden;
}

html* #frontarea {margin-left:0;}

#fronter {
position:absolute;
left:0;
height:100px;
top: 10px;
}

#fronter img {
cursor:pointer;
border:2px solid #DC0012;
}

/* Frontpage Column Styles */

#big-column {
width: 1000px;
margin: 0px auto;
margin-left: 3px;
}

#column-top {
background: url(images/top-column.png) no-repeat;
width: 1000px;
height: 8px;
float: left;
margin-left: 7px;
margin-top: 3px;
}

#column-content {
width: 1000px;
float: left;
padding-bottom: 20px;
margin-left: 7px;
}

/* Featured Posts & Articles on Frontpage */

.feat-post {
width: 300px;
padding: 10px 10px 10px 15px;
float: left;
}

.feat-post h2 {
font-size: 18px;
text-decoration: none;
color: #6e6e6e;
}

.feat-post h2 a {
text-decoration: none;
color: #6e6e6e;
}

.feat-post h2 a:hover {
text-decoration: none;
color: #DC0012;
}

.feat-post h3, .latest-posts h3 {
font-size: 10px;
font-style: italic;
color: #DC0012;
font-weight: normal;
clear:both;
border-bottom: 1px solid #b1b1b1;
}

.feat-post p {
text-align: justify;
color: #6e6e6e;
margin-top: 15px;
}

.feat-post img {
margin-top: 20px;
border: 1px solid #DC0012;
width: 295px;
height: 150px;
}

.latest-posts {
width: 220px;
padding: 10px 10px 10px 20px;
float: left;
}

.latest-posts h2 {
font-size: 18px;
text-decoration: none;
color: #6e6e6e;
}

.latest-posts h2 a {
text-decoration: none;
color: #6e6e6e;
}

.latest-posts ul {
color: #DC0012;
margin-top: 10px;
list-style-type: disc;
}

.latest-posts ul li {
color: #DC0012;
padding-left: 10px;
margin-bottom: 5px;
}

.latest-posts ul li a {
text-decoration: none;
display: block;
line-height: 15px;
color: #DC0012;
}

.latest-posts ul li .date {
font-size: 11px;
color: #9D9D9D;
font-style: italic;
display: block;
}

.latest-posts ul li a:hover {
text-decoration: underline;
color: #DC0012;
}

.latest-posts p {
text-align: justify;
color: #6e6e6e;
margin-top: 10px;
}


/* Subpage Column Styles */

#sub-column {
width: 1000px;
height: auto;
margin: 1px auto;
}

#sub-top {
width: 1000px;
height: 41px;
margin-top: 10px;
}

#sub-top h1 {
width: 1000px;
height: 41px;
margin-top: 10px;
margin-left: 15px;
}

#sub-content {
width: 1000px;
float: left;
background-color: #FFFFFF;
}

.no-sidebar #sub-content {
}

/* Subpage Content Styles */

.content {
width: 638px;
float: left;
padding: 10px 10px 10px 15px;
overflow: hidden !important;
background-color: #FFFFFF;
}

.no-sidebar .content {
width: 950px;
}

.content h1 {
font-size: 24px;
color: #8a8a8a;
margin: 20px 0px 10px 0px;
font-weight: normal;
display: block;
line-height: 32px;
}

.content h1.first {
margin-top: 0px;
}

.post ul {
list-style-type: disc;
list-style-position:inside;
color: #6e6e6e;
margin: 20px 40px 10px 10px;
}

/* Breadcrumb Navigation Styles */

.breadcrumb {
float: left;
padding: 10px 15px 10px 10px;
color: #8a8a8a;
font-size: 12px;
}

.breadcrumb a {
color: #DC0012;
font-weight: normal;
text-decoration: none;
}

.breadcrumb a:hover {
text-decoration: underline;
}

/* Sidebar Styles */

.sidebar {
width: 306px;
float: left;
margin-left: 30px;
margin-top: 0px;
padding-bottom: 50px;
background-color: #FFFFFF;
}

.widgettitle {
color: #8a8a8a;
font-size: 18px;
font-weight: normal;
padding: 20px 0px 10px 0px; 
list-style-type: none;
display: block;
}

#sidebar ul li {
list-style-type: none;
}

#sidebar ul ul li a {
padding-left: 30px;
}

#sidebar ul ul ul li a {
padding-left: 40px;
}

.textwidget {
margin: 10px 8px 20px 0px;
color: #6e6e6e;
}

.sidebar ul li a {
color: #DC0012;
text-decoration: none;
border-bottom: 1px solid #CCC;
display: block;
padding: 5px;
padding-left: 20px;
background: url(images/listenpunkt.gif) no-repeat left center;
}

.sidebar ul li a:hover {
color: #DC0012;
text-decoration: underline;
}

li.widget.widget_tag_cloud {
width: 250px;
}

li.widget.widget_tag_cloud a {
background: none;
text-decoration: none;
border-bottom: none;
display: inline;
padding: 0px;
padding-right: 5px;
font-size: 9px;
}

li.widget.widget_tag_cloud a:hover {
text-decoration: underline;
}

li.widget.widget_search {
clear: left;
}

li.widget.widget_search label.screen-reader-text {
display: none;
}

li.widget.widget_search form input[type=text] {
border: 1px solid #CCC;
padding: 5px;
}

li.widget.widget_search form input[type=submit] {
}

li.widget.widget_recent_comments ul li {
border-bottom: 1px solid #CCC;
display: block;
padding: 5px;
padding-left: 20px;
background: url(images/listenpunkt.gif) no-repeat left center;
}

li.widget.widget_recent_comments ul li a {
text-decoration: none;
background: none;
}

.posted {
color:#9d9c9c;
font-size: 10px;
font-style: italic;
display: block;
padding-left: 10px;
}

#wp-calendar {
border:1px solid #cccccc;
color:#6e6e6e;
width: 220px;
}

#wp-calendar caption {
color: #8a8a8a;
font-size: 18px;
font-weight: normal;
padding: 0px 0px 10px 0px; 
list-style-type: none;
}

tbody .pad {
background-color:#dddddd;
}

#wp-calendar a {
font-weight:bold;
font-size:12px;
background: none;
padding: 0px;
margin: 0px;
border: none;
}

thead tr th {
width:20px;
height:20px;
text-align:center;
background-color: #DC0012;
color: #FFF;
border:1px solid #cccccc;
padding: 3px; 
}

tbody tr td {
width:20px;
height:20px;
text-align:center;
border:1px solid #cccccc;
}

tfoot #prev {
width:58px;
height:20px;
text-align:left;
background-color:#ffffff;
background: none;
padding-left: 10px;
}

tfoot #next {
width:58px;
height:20px;
text-align:right;
background-color:#ffffff;
background: none;
padding-right: 10px;
}

/* Portfolio Styles */

#portfolio {
float: left;
margin: 0px 15px;
}

#portfolio .content {
width: 950px !important;
}

.port-pic {
width: 250px;
height: 340px;
background-color: #FFF;
border: 1px solid #CCC;
float: left !important;
margin-bottom: 20px;
margin-right: 10px;
padding: 15px;
clear: none !important;
}

.port-pic h3 {
font-size: 16px;
font-weight: normal;
margin: 0px !important;
color: #DC0012;
}

.port-pic h3 a {
text-decoration: none;
color: #DC0012;
}

.port-pic h3 a:hover {
text-decoration: underline;
color: #DC0012;
}

.port-pic a.noshow {
display: none;
}

.port-pic .info {
padding-top: 3px;
margin: 0px;
font-size: 11px;
display: block;
font-style: italic;
}

.port-pic p {
text-align: justify;
color: #8a8a8a;
font-size: 11px;
margin-top: 10px;
}

.port-pic img {
border: 1px solid #CCC;
text-align: center;
margin-top: 10px;
padding: 0px !important;
}

/* Blog Styles */

.post {
padding-bottom: 10px;
margin-bottom: 10px;
border-bottom: 1px solid #CCC;
display: block;
width: 100%;
overflow: hidden;
}

.content h1 a {
color: #DC0012;
text-decoration: none;
}

.content h1 a:hover {
color: #FFFFFF;
}

.content h2 {
font-size: 15px;
margin: 10px 0px;
}

.content h3 {
font-size: 13px;
margin: 10px 0px;
font-weight: bold;
font-style: italic;
}

.post p {
display: block !important;
padding-bottom: 10px !important;
line-height: 24px !important;
}

.content img {
padding: 5px;
border: 1px solid #CCC;
}

.content img.size-full {
max-width: 590px;
}

.content .gallery-caption {
text-align: center;
font-size: 11px;
}

.post ol {
list-style: decimal;
margin: 15px 5px;
border-top: 1px solid #CCC;
border-bottom: 1px solid #CCC;
padding: 10px 0px;
}

.post ol li ol {
border: none;
margin: 5px 0px;
padding: 0px;
}

.post ol li ol li ol {
border: none;
margin: 5px 0px;
padding: 0px;
}

.post ol li {
margin: 0px 0px 5px 20px;
}

.post ul {
list-style: disc;
margin: 15px 5px;
padding: 10px 0px;
border-top: 1px solid #CCC;
border-bottom: 1px solid #CCC;
}

.post ul li ul {
border: none;
margin: 5px 0px;
padding: 0px;
list-style: circle;
}

.post ul li ul li ul {
border: none;
margin: 5px 0px;
padding: 0px;
}

.post ul ul li {
border: none;
margin: 0px 0px 0px 30px;
}

.post ul li {
margin: 5px 0px 0px 20px;
}

.post dl {
margin: 10px 0px;
float: left;
}

.post_nav {
margin-top: 15px;
display: block;
}

.post_nav .left a {
float: left;
}

.post_nav .right a {
float: right;
position: relative;
top: -15px;
}

.content dt {
margin-bottom: 5px;
float: left;
font-weight: bold;
clear: both;
}

.content dd {
margin-bottom: 5px;
float: left;
font-style: italic;
clear: both;
}

.content table {
float: left;
margin: 10px 0px;
}

.content table tr th {
background-color: #DC0012;
padding: 5px 15px;
border: 1px solid #DC0012;
color: #FFF;
text-align: center;
}

.content table tr td {
padding: 5px 15px;
width: auto;
text-align: center;
border: 1px solid #CCC;
}

.content address, .content pre {
float: left;
clear: left;
margin: 10px 0px;
font-style: italic;
margin-top: 0px;
}

.content div {
display: block;
clear: left;
}

.content big {
font-size: 15px;
}

.content cite, .content em {
font-style: italic;
}

.content s {
text-decoration: line-through;
}



.content strong {
font-weight: bold;
}

.content .with_image {
display: block;
}

.content .with_image img {
float: left;
width: 250px;
}

.content .with_image p {
float: left;
width: 340px;
clear: none;
margin-left: 15px;
}

.post_meta {
margin-bottom: 15px;
border-bottom: 1px solid #CCC;
padding-bottom: 15px;
display: block;
width: 100%;
overflow: auto;
}

.post_meta .date, .post_meta .comment_meta {
font-style: italic;
font-size: 11px;
padding-left: 10px;
}

.post_meta .social iframe {
position: relative;
top: 7px;
margin-left: 15px;
}

.post_meta .social .google {
position: relative;
top: 5px;
}

p.meta {
display: block;
margin-top: 10px;
clear: left;
}

.post_meta .category a {
background-color: #B3B3B3;
border: 1px solid #8E8E8E;
color: #FFF;
padding: 3px 5px 3px 5px;
text-decoration: none;
font-size: 11px;
margin-right: 5px;
line-height: 25px;
}

.post_meta .category a:hover {
background-color: #BCBCBC;
border: 1px solid #8E8E8E;
color: #FFF;
padding: 3px 5px 3px 5px;
text-decoration: none;
}

.content .gallery {
display: block;
margin-top: 10px;
}

.content .gallery h2 {
margin-bottom: 10px;
font-size: 15px;
}

.content .gallery img {
float: left;
padding: 3px;
border: 1px solid #CCC;
margin-right: 15px;
margin-bottom: 15px;
}

/* Footer Styles */

#footer {
background: url(images/footer-column.png) no-repeat;
width: 1000px;
height: 41px;
margin-bottom: 5px;
clear: both;
padding: 10px 30px 0px 15px;
margin-left: 7px;
}

#footer .copyright {
color: #8a8a8a;
text-transform: uppercase;
}

#footer a {
color: #DC0012;
text-decoration: none;
padding: 0px 2px;
}

#footer p {
color: #6e6e6e;
text-transform: uppercase;
float: left;
}

#footer a img  {
margin: 0px;
padding: 0px;
display: inline;
}

#footer .footer_right {
float: right;
margin-right: 25px;
}

#footer .footer_right ul {
float: left;
}

#footer .footer_right ul li {
float: left;
margin-left: 8px;
}

p.tagline {
text-align: left;
clear: both;
display: block;
}
p.taglinenew {
text-align: right;
clear: both;
display: block;
}

.wordpress-icon {
float: left;
margin-right: 10px;
margin-bottom: 12px;
}

.supported {
color: #CCC;
font-size: 10px;
text-align: center;
width: 925px;
}

.supported a {
color: #CCC;
font-size: 10px;
text-decoration: none;
}

/* Lightbox Images */

#grow {
background:#000 url(images/ajax-loader.gif) no-repeat center center;
border: none;
}

#nycloser {
background: url(images/closed.png) no-repeat center center;
border: none;
}

#next {
background: url(images/next.png) no-repeat center center;
border: none;
}

#next {
background: url(images/next.png) no-repeat center center;
border: none;
}

#prev {
background: url(images/prev.png) no-repeat center center;
border: none;
}

/* Pagenavi */

.wp-pagenavi {
display: block;
margin: 10px 0px;
margin-top: 20px;
}

.wp-pagenavi a, .wp-pagenavi a:link {
padding: 4px 5px;
font-size: 11px;
margin: 2px;
text-decoration: none;
background-color: #B3B3B3;
border: 1px solid #8E8E8E;
color: #FFF;	
}

.wp-pagenavi a:visited {
padding: 4px 5px;
margin: 2px;
text-decoration: none;
background-color: #B3B3B3;
border: 1px solid #8E8E8E;
color: #FFF;
}

.wp-pagenavi a:hover {	
background-color: #DC0012;
border: 1px solid #DC0012;
color: #FFF;	
}

.wp-pagenavi span.pages {
padding: 4px 5px; 
margin: 2px 2px 2px 2px;
background-color: #B3B3B3;
border: 1px solid #8E8E8E;
color: #FFF;
}

.wp-pagenavi span.current {
padding: 4px 5px; 
margin: 2px;
background-color: #DC0012;
border: 1px solid #DC0012;
color: #FFF;	
}

/* Comment Styles */

#comment-wrap {
clear: both;
margin-top: 15px;
}

#comments {
float: left;
width: 680px;
}

#comments h3 {
margin-bottom: 20px;
font-size: 18px;
margin-top: 0px;
}

.commentlist {
padding-top: 10px;
list-style: none !important;
display: block;
}

li.comment {
background: none;
margin: 0px !important;
padding-left: 0px !important;
list-style: none !important;
display: block;
}

.comment-reply-link {
font-size: 8px;
text-transform: uppercase;
font-family: Tahoma;
padding: 0px 8px 1px 8px;
position: absolute;
left: 0px;
bottom: 0px;
background: #f9f9f9;
border-top: 1px solid #e8e8e8;
border-right: 1px solid #e8e8e8;
text-decoration: none !important;
}

.commentlist .children > li {
border-left: 1px solid #cacaca;
padding-left: 30px !important;
padding-bottom: 10px;
width: auto;
margin: 0;
list-style: none;
display: block;
background: transparent url(images/comment_left.png) no-repeat 0 20px;
}

.commentlist .comment-body {
background: #fff;
border: 1px solid #dfdfdf;
padding: 30px !important;
position: relative;
margin-bottom: 10px;
padding-right: 150px;
overflow: hidden;
min-height: 80px;
display: block;
}

.commentlist .comment-body ol {
list-style: decimal;
margin: 15px 5px;
border-top: 1px solid #CCC;
border-bottom: 1px solid #CCC;
padding: 10px 0px;
}

.commentlist .comment-body ol li ol {
border: none;
margin: 5px 0px;
padding: 0px;
}

.commentlist .comment-body ol li ol li ol {
border: none;
margin: 5px 0px;
padding: 0px;
}

.commentlist .comment-body ol li {
margin: 0px 0px 5px 20px;
}

.commentlist .comment-body ul {
list-style: disc;
margin: 15px 5px;
padding: 10px 0px;
border-top: 1px solid #CCC;
border-bottom: 1px solid #CCC;
}

.commentlist .comment-body ul li ul {
border: none;
margin: 5px 0px;
padding: 0px;
list-style: circle;
}

.commentlist .comment-body ul li ul li ul {
border: none;
margin: 5px 0px;
padding: 0px;
}

.commentlist .comment-body ul ul li {
border: none;
margin: 0px 0px 0px 30px;
}

.commentlist .comment-body ul li {
margin: 5px 0px 0px 20px;
}

.commentlist .highlighted > .comment-body {
background: #ccc;
border: none;
padding: 1px !important;
}

.commentlist .highlighted > .comment-body .wrap-comment {
border: solid 3px #efefef;
background: #fff;
margin-bottom: 0px;
overflow: visible;
padding: 30px;
padding-right: 150px;
}
.commentlist .children .highlighted > .comment-body .wrap-comment {
padding: 20px !important;
padding-left: 90px !important;
}
	    
.commentlist .children {
margin-bottom: 10px;
display: block;
}

.commentlist .comment-body .avatar {
position: absolute;
right: 30px;
top: 30px;
float: left;
}

.commentlist .comment-body .commentmetadata {
font-size: 11px;
font-style: italic;
padding-top: 2px;
display: block;
margin-bottom: 15px;
}

.commentlist .comment-body p {
float: left;
padding-right: 90px;
width: 80%;
display: block;
}

.commentlist .comment-body .commentmetadata a {
color: #989898;
}

.commentlist .comment-body .comment-meta .comment-edit-link {

}

.commentlist .comment-body .fn {
font-size: 16px;
font-weight: bold;
display: block;
margin: 0px;
font-style: normal;
padding-right: 5px;
padding-bottom: 0px;
}

li.pingback .comment-body .fn {
font-size: 13px !important;
}

.commentlist .children .comment-body {
padding: 20px;
padding-left: 90px;
min-height: 90px;
margin-bottom: 0px;
}

.commentlist .children li > .comment-body {
margin-bottom: 10px;
}

.commentlist .children .comment-body .avatar {
width: 50px;
height: 50px;
position: absolute;
right: auto;
left: 20px;
top: 20px;
}

.commentlist .children .comment-body {
padding-left: 90px !important;
}

.commentlist .children .comment-body p {
padding-right: 20px !important;
}

.commentlist .children .comment-body .commentmetadata {
padding-top: 3px;
}

.commentlist .children .comment-body .fn {
font-size: 14px;
}

.commentlist .comment-body .says {
display: none;
}

.comments-navigation {

}

.comments-navigation .alignleft {
float: left;
}

.comments-navigation .alignright {
float: right;
}

#respond {
overflow: hidden;
position: relative;
display: block;
clear: left;
}

#respond h3 {
padding-top: 20px;
padding-bottom: 20px;
word-spacing: 2px;
font-size: 18px;
margin: 0;
}

h1.comments-header span {
color: #5f5f5f;
font-size: 30px;
}

#respond form {
padding: 10px 15px 0px 15px;
background: #fff;
border: 1px solid #dfdfdf;
overflow: hidden;
position: relative;
margin-bottom: 15px;
display: block;
}

.commentlist #respond {
margin-bottom: 10px;
}

.commentlist .children #respond {
margin: 10px 0;
}

.commentlist #respond h1 {
display: none;
}

#respond p.input_block {
margin: 15px;
float: left;
width: 209px;
padding-bottom: 0px;
}

#respond p.input_block input {
background: #fdfdfd;
border: 1px solid #d6d6d6;
padding: 8px 5px;
font-size: 12px;
width: 199px;
}

.children #respond p.input_block {
width: 199px;
}

.children #respond p.input_block input {
width: 188px;
}

.children .children #respond p.input_block {
width: 189px;
}

.children .children #respond p.input_block input {
width: 178px;
}

.children .children .children #respond p.input_block {
width: 179px;
}

.children .children .children #respond p.input_block input {
width: 168px;
}

#respond p.textarea_block {
margin: 15px;
float: left;
width: 690px;
padding-bottom: 0;
}

#respond p.textarea_block textarea {
background: #fdfdfd;
border: 1px solid #d6d6d6;
padding: 8px 5px;
font-size: 12px;
width: 678px;
font-family: Arial, Helvetica, sans-serif;
}

.children #respond p.textarea_block {
width: 660px;
}

.children #respond p.textarea_block textarea {
width: 647px;
}

.children .children #respond p.textarea_block {
width: 630px;
}

.children .children #respond p.textarea_block textarea {
width: 616px;
}

.children .children .children #respond p.textarea_block {
width: 600px;
}

.children .children .children #respond p.textarea_block textarea {
width: 585px;
}

#respond label {
display: block;
color: #5d5d5d;
font-size: 13px;
padding-bottom: 10px;
padding-top: 3px;
float: left;
width: 100px;
}

#respond .required {
float: left;
}

#respond input[type=text] {
border: 1px solid #CCC;
padding: 5px;
width: 200px;
}

#respond textarea {
display: block;
border: 1px solid #CCC;
padding: 5px;
}

input#add_comment {
float: right;
padding: 6px 9px 6px 9px;
margin-right: 15px;
text-shadow: 0 1px 0 #333;
color: #fff;
cursor: pointer;
font-size: 12px;
margin-top: 10px;
}

input:hover#add_comment {
background: #e6e6e6;
text-shadow: 0 1px 0 #fff;
border: 1px solid #b3b3b3;
color: #000 !important;
}

.cancel-comment-reply a {
font-size: 8px;
text-transform: uppercase;
font-family: Tahoma;
padding: 0px 8px 1px 8px;
position: absolute;
left: 0px;
bottom: 0px;
background: #f9f9f9;
border-top: 1px solid #e8e8e8;
border-right: 1px solid #e8e8e8;
text-decoration: none !important;
}

#respond input.button {
background-color: #B3B3B3;
border: 1px solid #8E8E8E;
color: #FFF;
padding: 3px 5px 3px 5px;
text-decoration: none;
font-size: 11px;
margin-right: 5px;
cursor: pointer;
line-height: 25px;
}

#respond input.button:hover {
background-color: #BCBCBC;
border: 1px solid #8E8E8E;
color: #FFF;
padding: 3px 5px 3px 5px;
text-decoration: none;
}

#footer a.copyright {
color: #888888;
font-size: 10px !important;
}

#fancybox-loading {
position: fixed;
top: 50%;
left: 50%;
width: 40px;
height: 40px;
margin-top: -20px;
margin-left: -20px;
cursor: pointer;
overflow: hidden;
z-index: 1104;
display: none;
}

#fancybox-loading div {
position: absolute;
top: 0;
left: 0;
width: 40px;
height: 480px;
background-image: url('images/fancybox/fancybox.png');
}

#fancybox-overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
z-index: 1100;
display: none;
}

#fancybox-tmp {
padding: 0;
margin: 0;
border: 0;
overflow: auto;
display: none;
}

#fancybox-wrap {
position: absolute;
top: 0;
left: 0;
padding: 20px;
z-index: 1101;
outline: none;
display: none;
}

#fancybox-outer {
position: relative;
width: 100%;
height: 100%;
background: #fff;
}

#fancybox-content {
width: 0;
height: 0;
padding: 0;
outline: none;
position: relative;
overflow: hidden;
z-index: 1102;
border: 0px solid #fff;
}

#fancybox-hide-sel-frame {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: transparent;
z-index: 1101;
}

#fancybox-close {
position: absolute;
top: -15px;
right: -15px;
width: 30px;
height: 30px;
background: transparent url('images/fancybox/fancybox.png') -40px 0px;
cursor: pointer;
z-index: 1103;
display: none;
}

#fancybox-error {
color: #444;
font: normal 12px/20px Arial;
padding: 14px;
margin: 0;
}

#fancybox-img {
width: 100%;
height: 100%;
padding: 0;
margin: 0;
border: none;
outline: none;
line-height: 0;
vertical-align: top;
}

#fancybox-frame {
width: 100%;
height: 100%;
border: none;
display: block;
}

#fancybox-left, #fancybox-right {
position: absolute;
bottom: 0px;
height: 100%;
width: 35%;
cursor: pointer;
outline: none;
background: transparent url('images/fancybox/blank.gif');
z-index: 1102;
display: none;
}

#fancybox-left {
left: 0px;
}

#fancybox-right {
right: 0px;
}

#fancybox-left-ico, #fancybox-right-ico {
position: absolute;
top: 50%;
left: -9999px;
width: 30px;
height: 30px;
margin-top: -15px;
cursor: pointer;
z-index: 1102;
display: block;
}

#fancybox-left-ico {
background-image: url('images/fancybox/fancybox.png');
background-position: -40px -30px;
}

#fancybox-right-ico {
background-image: url('images/fancybox/fancybox.png');
background-position: -40px -60px;
}

#fancybox-left:hover, #fancybox-right:hover {
visibility: visible; /* IE6 */
}

#fancybox-left:hover span {
left: 20px;
}

#fancybox-right:hover span {
left: auto;
right: 20px;
}

.fancybox-bg {
position: absolute;
padding: 0;
margin: 0;
border: 0;
width: 20px;
height: 20px;
z-index: 1001;
}

#fancybox-bg-n {
top: -20px;
left: 0;
width: 100%;
background-image: url('images/fancybox/fancybox-x.png');
}

#fancybox-bg-ne {
top: -20px;
right: -20px;
background-image: url('images/fancybox/fancybox.png');
background-position: -40px -162px;
}

#fancybox-bg-e {
top: 0;
right: -20px;
height: 100%;
background-image: url('images/fancybox/fancybox-y.png');
background-position: -20px 0px;
}

#fancybox-bg-se {
bottom: -20px;
right: -20px;
background-image: url('images/fancybox/fancybox.png');
background-position: -40px -182px; 
}

#fancybox-bg-s {
bottom: -20px;
left: 0;
width: 100%;
background-image: url('images/fancybox/fancybox-x.png');
background-position: 0px -20px;
}

#fancybox-bg-sw {
bottom: -20px;
left: -20px;
background-image: url('images/fancybox/fancybox.png');
background-position: -40px -142px;
}

#fancybox-bg-w {
top: 0;
left: -20px;
height: 100%;
background-image: url('images/fancybox/fancybox-y.png');
}

#fancybox-bg-nw {
top: -20px;
left: -20px;
background-image: url('images/fancybox/fancybox.png');
background-position: -40px -122px;
}

#fancybox-title {
font-family: Helvetica;
font-size: 12px;
z-index: 1102;
}

.fancybox-title-inside {
padding-bottom: 10px;
text-align: center;
color: #333;
background: #fff;
position: relative;
}

.fancybox-title-outside {
padding-top: 10px;
color: #fff;
}

.fancybox-title-over {
position: absolute;
bottom: 0;
left: 0;
color: #FFF;
text-align: left;
}

#fancybox-title-over {
padding: 10px;
background-image: url('images/fancybox/fancy_title_over.png');
display: block;
}

.fancybox-title-float {
position: absolute;
left: 0;
bottom: -20px;
height: 32px;
}

#fancybox-title-float-wrap {
border: none;
border-collapse: collapse;
width: auto;
}

#fancybox-title-float-wrap td {
border: none;
white-space: nowrap;
}

#fancybox-title-float-left {
padding: 0 0 0 15px;
background: url('images/fancybox/fancybox.png') -40px -90px no-repeat;
}

#fancybox-title-float-main {
color: #FFF;
line-height: 29px;
font-weight: bold;
padding: 0 0 3px 0;
background: url('images/fancybox/fancybox-x.png') 0px -40px;
}

#fancybox-title-float-right {
padding: 0 0 0 15px;
background: url('images/fancybox/fancybox.png') -55px -90px no-repeat;
}

/* IE6 */

.fancybox-ie6 #fancybox-close { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_close.png', sizingMethod='scale'); }

.fancybox-ie6 #fancybox-left-ico { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_nav_left.png', sizingMethod='scale'); }
.fancybox-ie6 #fancybox-right-ico { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_nav_right.png', sizingMethod='scale'); }

.fancybox-ie6 #fancybox-title-over { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_title_over.png', sizingMethod='scale'); zoom: 1; }
.fancybox-ie6 #fancybox-title-float-left { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_title_left.png', sizingMethod='scale'); }
.fancybox-ie6 #fancybox-title-float-main { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_title_main.png', sizingMethod='scale'); }
.fancybox-ie6 #fancybox-title-float-right { background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_title_right.png', sizingMethod='scale'); }

.fancybox-ie6 #fancybox-bg-w, .fancybox-ie6 #fancybox-bg-e, .fancybox-ie6 #fancybox-left, .fancybox-ie6 #fancybox-right, #fancybox-hide-sel-frame {
height: expression(this.parentNode.clientHeight + "px");
}

#fancybox-loading.fancybox-ie6 {
position: absolute; margin-top: 0;
top: expression( (-20 + (document.documentElement.clientHeight ? document.documentElement.clientHeight/2 : document.body.clientHeight/2 ) + ( ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop )) + 'px');
}

#fancybox-loading.fancybox-ie6 div	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_loading.png', sizingMethod='scale'); }

/* IE6, IE7, IE8 */

.fancybox-ie .fancybox-bg { background: transparent !important; }

.fancybox-ie #fancybox-bg-n { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_n.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-ne { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_ne.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-e { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_e.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-se { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_se.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-s { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_s.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-sw { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_sw.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-w { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_w.png', sizingMethod='scale'); }
.fancybox-ie #fancybox-bg-nw { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/fancybox/fancy_shadow_nw.png', sizingMethod='scale'); }

@charset "utf-8";
/* CSS Document @import url(http://fonts.googleapis.com/css?family=RobotoBold); */

body {
	background:#efefef url(images/main_bg.jpg) repeat top center;
	font:19px 'Open Sans',Arial,sans-serif;
	font-size:1em;
	margin:0px auto;
}
a {
	 text-decoration:none;
	 color:#000000;
}
#wrapper {
	width:100%;
	height:100%;
	margin:0px auto;
	background:url(images/body.png) no-repeat top center;
}
#wrap-containor {
	width:1000px;
	height:auto;
	margin:0px auto;
	background:#ffffff;

}
/* top header css start here */
.header {
	width:auto;
	height:104px;
}
.logo {
	float:left;
	width:315px;
	padding-top:20px;
	padding-left:24px;
	height:auto;
}
.add_banner {
	float: right;
    height: auto;
    padding-top: 10px;
    width: 539px;
}
.right-panel {
	width:auto;
	height:auto;
	float:right;
	padding-right:15px;
	padding-top:20px;
}
.clear {
	clear:both;
	padding:0px;
	margin:0px;
	line-height:0px;
}
/* nav css start here */

.corner {
	z-index:9999;
	position:absolute;
	width:19px;
	height:97px;
	background:url(images/corner.png) no-repeat left;
	margin:-15px 0px 0px -18px;
}
.nav {
	width:1000px;
	height:60px;
	background:#dc0012;
}

@charset "utf-8";
/* CSS Document */

/*====TOP====*/

#top-row{
	position:relative;
	z-index:50;
	}

#top{}

#top-menu{
position:relative;
	width:1000px;
	height:60px;
	background:#dc0012;
	font-size:18px;
	color:#fff;

}

#top-menu ul.menu{
	margin:0;}

#top-menu ul.menu li{
	float:left;
	padding:0;
	display:block;
	}
	
#top-menu ul.menu > li > a{
	display:block;
	height:40px;
	font-size:18px;
	color:#fff;
	padding:20px 30px 0px 30px;}
	
#top-menu ul.menu > li > a:hover,
#top-menu ul.menu > li.current > a,
#top-menu ul.menu > li.active > a,
#top-menu ul.menu > li.actives > a{
	background:#c10f16 !important;
	}
	
#top-menu ul.menu > li.even > a{
	background:#dc0012;}
	
	
#top-menu ul.menu > li.odd > a{
	background:#dc0012;
}
	
#top-menu ul.menu > li.first{
	padding-left:0;
	}
#top-menu ul.menu > li.last{
	padding-right:0;
	}
	
#top-menu  ul.menu ul{
	display:none; 
	/*top:60px; */
	position:absolute;  
	padding:0; 
	background:#dc0012;
	width:240px;
}

#top-menu ul.menu li ul li{
	width:240px;}

#top-menu ul.menu li ul li > a:hover,
#top-menu ul.menu li ul li.active > a,
#top-menu ul.menu li ul li.actives > a,
#top-menu ul.menu li ul li.current > a{
	background:#c10f16;
	}

#top-menu ul.menu li ul li a{
	display:block;
	float:none;
	line-height:38px;
	height:38px;
	padding: 0 15px;
	color:#fff;
	font-weight:normal;
	}
	
#top-menu ul.menu li ul li ul{
		margin-left:240px;
	margin-top:-38px;}
	

/*.nav ul {
	padding:0px;
	margin:0px;
	list-style-type:none;
}
.nav li {
	padding:0px;
	margin:0px;
	list-style-type:none;
	height:40px;
	float:left;
	font-family: 'RobotoBold';
	font-size:18px;
	color:#fff;
	padding:20px 30px 0px 30px;
}
.nav li:hover {
	background:#c10f16;
	text-decoration:none;
	cursor:pointer;
	color:#000;
}
.nav li a {
	width:auto;
	height:40px;
	font-size:18px;
	color:#fff;
	text-decoration:none;
}
.nav li a:hover {
	width:auto;
	height:40px;
	font-size:18px;
	color:#000;
}
.nav li.active {
	background:#c10f16;
	text-decoration:none;
	cursor:pointer;
	color:#000;
}
.color {
	color:#000;
}*/
/* slider */

.slider {
	width:1000px;
	/*height:302px;*/
	height:372px;
	margin:0px auto 20px auto;
	padding-top:0px;
}
.sliderBg {
	width:984px;
	height:309px;
	margin:0px auto;
	background:url(images/slider.png) no-repeat;
}
/* technolgy panel start here */

.technology {
	width:986px;
	height:auto;
	padding:5px 7px 5px 7px;
}
.mobile_technology {
	float:left;
	width:295px;
	height:280px;
	padding:8px 8px 13px 8px;
	margin-right:16px;
	background:url(images/technologybox.png) no-repeat;
	margin-bottom:10px;
}
.marginminus {
	margin-right:0px;
}
.headingbox {
	width:auto;
	height:96px;
}
/* rounded images */
.tech_icon {
	float: left;
	width:100px;
	height:85px;
	padding:10px 0px 0px 10px;
}
.roundedimagbox {
	margin-top:5px;
}
.roundedimagbox img {
	-moz-transition: all 500ms ease 0s;
	max-width: 56%;
	-webkit-transition: all 500ms ease;
}
.roundedimagbox img:hover {
	-moz-transform: rotate(359deg);
	max-width: 78%;
	-webkit-transform: rotate(359deg);
	cursor:pointer;
}
.headingTech {
	font-size:30px;
	color:#fff;
	font-weight:800;
	float:left;
	line-height:32px;
	text-align:center;
	padding:12px 10px 0px 0px;
}
p {
	margin:0px;
	padding:0px;
}
.techpragraph {
	font-size:14px;
	line-height:20px;
	color:#111;
	text-align:justify;
	padding-top:12px;
}
.Readmore {
	text-align:right;
	font-size:12px;
	font-weight:800;
	color:#dc0012;
}
.Readmore1 {
	text-align:left;
	font-size:15px;
	font-weight:800;
	color:#dc0012;
}
.Readmore a {
	color:#dc0012;
	text-decoration:none;
}
.Readmore a:hover {
	color:#dc0012;
	text-decoration:underline;
	cursor:pointer;
}
/* matic services box start here */
.maticServises {
	width:986px;
	height:auto;
	padding:5px 7px 5px 7px;
}
.technology {
	width:986px;
	height:auto;
	padding:5px 7px 5px 7px;
}
.maticServiceBox {
	float:left;
	width:301px;
	height:264px;
	padding:0px 8px 0px 8px;
	margin-right:16px;
	background:url(images/matic-servicesbox.png) no-repeat;
	margin-bottom:10px;
}
.marginminus {
	margin-right:0px;
}
.Service_headingbox {
	width:auto;
	height:83px;
}
.Services_icon {
	float: left;
	width:auto;
	height:60px;
	padding:20px 0px 0px 10px;
}
.heading_title {
	font-size:30px;
	color:#2f2f2f;
	font-weight:800;
	float:left;
	padding:30px 10px 0px 10px;
}
.bottom {
	margin-bottom:10px;
}
.Services_pragraph {
	font-size:14px;
	line-height:20px;
	color:#2f2f2f;
	text-align:justify;
	padding-top:5px;
}
.fontsize26 {
	font-size:25px;
}
/* footer panel */

footer {
	width:1000px;
	height:auto;
	margin:0px auto;
	background:none;
}
.footerStrip {
	width:980px;
	height:275px;
	background:url(images/footerstrip.png) repeat-y;
	font-size:12px;
	padding-left:10px;
	padding-right:10px;
}
.footerroundedcron {
	width:1000px;
	height:14px;
	background:url(images/footer.png) no-repeat;
}
.footertitle {
	font-size:24px;
	color:#fff;
	margin-bottom:15px;
	margin-top:15px;
}
.footerTechBox {
	float:left;
	width:240px;
	height:265px;
	background:url(images/border.png) no-repeat right;
	padding-top:2px;
	margin-right:15px;
}
.bordernone {
	background:none;
	margin-right:0px;
	width:214px;
}
.footerListView {
	width:auto;
	height:auto;
	padding-left:-5px;
}
.footerListView ul {
	padding:0px;
	margin:0px;
	list-style-type:none;
}
.footerListView li {
	padding:0px;
	margin:0px;
	list-style-type:none;
	background:url(images/left-arrow.png) no-repeat left;
	padding-left:14px;
	line-height:26px;
	font-size:12px;
	color:#fff;
}
.footerListView li a {
	color:#fff;
	text-decoration:none;
}
.footerListView li a:hover {
	color:#fff;
	text-decoration:none;
}
.address {
	font-size:12px;
	color:#fff;
	line-height:20px;
	float:left;
}



/* about us */
/* iiner about */

#aboutUs {
	color:#000000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	height:auto;
	line-height:22px;
	margin-left:10px;
	margin-right:10px;
	text-align:justify;
	width:940px;
	height:auto;
}

#tablewrapper{
	width:940px;
	height:auto;
	}

#tablewrapper img{
	border:none;
}
#tablewrapper table tr td{
	border-collapse:collapse;
	height:auto;
	border: solid 1px #a8a8a8;
	padding:15px;
	}


#abtus ul li {
	list-style-type:none;
	padding-bottom:5px;
	vertical-align:super;
}
h2 {
	color:#535353;
	font-size:20px;
	font-weight:bold;
	margin:0;
	padding-top:5px;
}
h3 {
	color:#535353;
	font-size:18px;
	font-weight:bold;
	margin:0;
	padding-bottom:5px;
}
#mission {
	height:auto;
	width:940px;
}
#mission .vision {
	background:none repeat scroll 0 0 #FFFFFF;
	border:1px solid #a8a8a8;
	float:left;
	height:131px;
	line-height:22px;
	margin-right:15px;
	padding:10px;
	text-align:justify;
	width:440px;
}

#mission .mission {
	background:none repeat scroll 0 0 #FFFFFF;
	border:1px solid #a8a8a8;
	float:left;
	height:131px;
	line-height:22px;
	padding:10px;
	text-align:justify;
	width:440px;
}
.abttext {
	color:#000000;
	font-size:12px;
	line-height:22px;
	padding-right:5px;
	text-align:justify;
}
.space {
	height:20px;
}
.space2 {
	height:10px;
}
.headingB {
	color:#535353;
	font-size:18px;
	font-weight:bold;
	padding-left:10px;
	padding-top:15px;
	margin:0px;
}
.headingc {
	color:#535353;
	font-size:16px;
	font-weight:bold;
	padding-left:6px;
	padding-top:0px;
	margin-bottom:10px;
}

.headingD{
	color:#115986;
	font-size:16px;
	font-weight:bold;
	padding-top:0px;
	margin-bottom:10px;
}
.headingE{
	color:#000;
	font-size:16px;
	font-weight:bold;
	padding-top:0px;
	margin-bottom:10px;
}
.headingF {
	color:#5c5c5c;
	font-size:11px;
	padding-left:5px;
	padding-top:0px;
	margin-bottom:10px;
}
#new ul li {
	list-style-type:none;
	padding-bottom:5px;
	vertical-align:super;
	
}

.smallH {
	color:#535353;
	font-size:16px;
	font-weight:bold;
	padding-top:0px;
	margin-bottom:10px;
}

.about_title {
	color: #cc0000;
   font-size: 13px;
    font-weight: 800;
}

.androidImg {
	width:285px;
	height:150px;
}
.iphoneImg {
	width:285px;
	height:150px;
}
.blackbaryImg {
		width:285px;
	height:150px;
}
h1 {
	font-size:22px;
	font-weight:bold;
	color:#cc0000;
	padding:0px;
	margin:0px;
}
.ulpadign{
	padding-left:10px;
}
#new ul li {
	list-style-type:none;
	padding-bottom:5px;
	vertical-align:super;	
}



/*contact us*/

#contact {
	height:auto;
	width:940px;
}
#contact .leftSupport {
	background:none repeat scroll 0 0 #FFFFFF;
	border:1px solid #B7B7B7;
	float:left;
	height:300px;
	line-height:22px;
	margin-left:5px;
	padding:10px;
	text-align:left;
	width:450px;
}
#contact .rightSypport {
	background:none repeat scroll 0 0 #FFFFFF;
	border:1px solid #B7B7B7;
	float:left;
	height:300px;
	line-height:22px;
	padding:10px;
	text-align:justify;
	width:440px;
}
#contact .rightSypport input {
	height:22px;
}
.star {
		color:#FF0000;
}
.linespace {
	margin-top:7px;
	margin-bottom:10px;
	width:940px;
	height:3px;
	background:url(images/spacer.gif) repeat-x;
}
