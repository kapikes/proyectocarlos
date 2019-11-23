<style type="text/css">
@import "compass";
@import "breakpoint";

//Center Content
.container {
	max-width: 1100px;
	margin: 0 auto;
}
//Todo clean up some crappy code
.cards {
	display: -webkit-flex;
	display: flex;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;
	margin-top: 15px;
	padding: 1.5%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.card {
	@media (max-width: 700px) {
		width: 100%;
	}
	position: relative;
	margin-bottom: 20px; 
	padding-bottom: 30px; 
	background: #fefff9;
	color: #363636; //the whole content of the card becomes linked, so this will give the text a "norma;" appearance
	text-decoration: none;
	@include box-shadow(rgba(black, 0.19) 0 0 8px 0);
	@include border-radius(4px);
	@include breakpoint(700px, $no-query: true) {
	//switch to 2 columns
		max-width: 320px;
		margin-right: 20px;
		margin-bottom: 20px;
		&:nth-child(even) {
			margin-right: 0;
		}
	}
	@include breakpoint(980px, $no-query: true) {
	//switch to 3 columns
		&:nth-child(even) {
			margin-right: 20px;
		}
		&:nth-child(3n) {
			margin-right: 0;
		}
	}
	span {
		display: block;
	}
	.card-summary {
		padding: 5% 5% 3% 5%;
	}
	.card-header {
		position: relative;
		height: 175px;
		overflow: hidden;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		background-color: rgba(white,.15);
 		background-blend-mode: overlay;
		@include border-radius(4px 4px 0 0);
		&:hover, &:focus {
			background-color: rgba(white, 0);
		}
	}
	.card-title {
		background: rgba(157, 187, 63, .85);
		padding: 3.5% 0 2.5% 0;
		color: white;
		font-family: 'Roboto Condensed', sans-serif;
		text-transform: uppercase;
		position: absolute;
		bottom: 0;
		width: 100%;
		h3 {
			font-size: 1.2em;
			line-height: 1.2;
			padding: 0 3.5%;
			margin: 0;
		}
	}
	.card-meta {
		max-height: 0;
		overflow: hidden;
		color: #666;
		font-size: .78em;
		text-transform: uppercase;
		position: absolute;
		bottom: 5%;
		padding: 0 5%;
		@include transition-property(max-height);
		@include transition-duration(.4s);
		@include transition-timing-function(ease-in-out);
	}
	&:hover, &:focus {
		background: white;
	  @include box-shadow(rgba(black, 0.45) 0px 0px 20px 0px);
		.card-title {
			background: rgba(157, 187, 63, .95);
		}
		.card-meta {
			max-height: 1em;
		}
	}
}

img {
	max-width: 100%; // stop images from breaking out of their bounding boxes.
}

//General styles for page to make it prettier ;P
body {
	background :#f0f0f0;
	font-size: 17px; 
	line-height: 1.4;
	font-family: 'Jaldi', sans-serif;
}

* {
  @include transition-property(
    background-color,
    border-color,
    box-shadow,
    color,
    opacity,
    text-shadow,
    transform
  );
  @include transition-duration(0.2s);
  @include transition-timing-function(linear);
}
	
</style>
<br><br><br>
<h1>QUE HACEMOS</h1>
<div class="container">
	<div class="cards">
		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				A summary will also be present. Usually two to three brief sentences about the content on the detail page.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>

		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/640/480/nature);">
				<span class="card-title">
					<h3>This is a title for a card that is a bit longer in length</h3>
				</span>
			</span>
			<span class="card-summary">
				Each card is created from an &lt;a&gt; tag so the whole card is linked.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>
		
		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/400/people)">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				Using Flexbox is such a an easy, well supported way for grid-style content, such as cards. The cards height will expand to match the longest item.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>

		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/tech);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				A summary will also be present. Usually two to three brief sentences about the content on the detail page.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>
		
		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/people);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				Each card is created from an &lt;a&gt; tag so the whole card is linked.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>
		
		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/250/nature);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				Using Flexbox is such a an easy, well supported way for grid-style content, such as cards. The cards height will expand to match the longest item.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>

		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/250/animals);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				A summary will also be present. Usually two to three brief sentences about the content on the detail page.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>

		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/600/600/people);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				Each card is created from an &lt;a&gt; tag so the whole card is linked.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>

		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/400/tech);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				Using Flexbox is such a an easy, well supported way for grid-style content, such as cards. The cards height will expand to match the longest item.
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>
	</div>
</div>