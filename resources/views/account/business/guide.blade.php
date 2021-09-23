@extends('layouts.boilerplate')
@fix-navbar


@section('incls-head')
<link href="/css/business-guide.css" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
@stop

@section('attrs-body')
 data-spy="scroll" data-offset="0" data-target="#theMenu"
@stop

@section('body')
	@include('account.layouts.partial.guideheader')

	<section id="home" name="home"></section>
	<div id="headerwrap" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1><img src="/img/logo-2014-rooftop.png" style="width:100%"></h1>
					<h2>Beginner's Guide for Business Owners</h2>
				</div>
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/headerwrap -->
	
	<section id="start" name="start"></section>
	<div id="startwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 name-desc">
					<h2>
						Getting Started
					</h2>
					<div class="name-zig"></div>
					
					<div class="col-md-6">
						<p>First off, welcome to MHS! To get started with our business services, you'll want to open up your Business Center. From there, click the button labeled <mark>Create Company</mark>.</p>
						<p>Once you've filled in the information for your company, you'll be able to create individual profiles for that company. These profiles will be the individual office locations, parks your company operates, etc.</p>
					</div>
					<div class="col-md-6">
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
						<p> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
					</div>
					
				</div><!--/col-lg-8-->
		
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /startwrap -->
	
	<!-- ABOUT SEPARATOR -->
	<div class="sep start" data-stellar-background-ratio="0.6"></div>
		
	<!-- SERVICE SECTION -->
	<section id="profiles" name="profiles"></section>
	<div id="profileswrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 name-desc">
					<h2>
						Profiles
					</h2>
					<div class="name-zig"></div>

					<div class="col-md-6">
						<h3>Creating a profile</h3>
						<p>If you haven't created a company in the Business Center, please go back and read <a href="#"></a></p>
						<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="col-md-6">
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
						<p> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
					</div>
					
				</div><!--/col-lg-8-->
		
			</div><!-- /row -->
			
		</div><!--/container -->
	</div><!--/profileswrap -->

	<!-- PORTFOLIO SEPARATOR -->
	<div class="sep profiles" data-stellar-background-ratio="0.5"></div>

	<!-- PORTFOLIO SECTION -->
	<section id="portfolio" name="portfolio"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row">
				<h1>How It Works</h1>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="/img/portfolio/port04.jpg"><img class="img-responsive" src="/img/portfolio/port04.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="/img/portfolio/port05.jpg"><img class="img-responsive" src="/img/portfolio/port05.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="/img/portfolio/port06.jpg"><img class="img-responsive" src="/img/portfolio/port06.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
			</div><!-- /row -->
	
			<div class="row mt">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="/img/portfolio/port01.jpg"><img class="img-responsive" src="/img/portfolio/port01.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="/img/portfolio/port02.jpg"><img class="img-responsive" src="/img/portfolio/port02.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="/img/portfolio/port03.jpg"><img class="img-responsive" src="/img/portfolio/port03.jpg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
			</div><!-- /row -->
		</div><!--/container -->
		<div class="container hidden">
			<div class="row mt centered">
				<h1>MY DESIGN PROCESS</h1>
				<div class="col-lg-4 proc">
					<i class="fa fa-coffee"></i>
					<h3>The Meeting</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-4 proc">
					<i class="fa fa-cogs"></i>
					<h3>The Ideas</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-4 proc">
					<i class="fa fa-heart"></i>
					<h3>The Product</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/Portfoliowrap -->
	
	<!-- CONTACT SEPARATOR -->
	<div class="sep contact" data-stellar-background-ratio="0.5"></div>
	<section id="contact" name="contact"></section>
	
	<div id="contactwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p>CONTACT ME RIGHT NOW!</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<p>
						<small>5th Avenue, 987<br/>
						38399, New York,<br/>
						USA.</small>
					</p>
					<p>
						<small>Tel. 9888-4394<br/>
						Mail. Hello@coolfolks.com<br/>
						Skype. NYCDesign
					</p>
			
				</div>
				
				<div class="col-lg-6">
					<form role="form">
					  <div class="form-group">
					    <label for="exampleInputName1">Your Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    <label for="exampleInputText1">Message</label>
					    <textarea class="form-control" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			
			</div><!--/row -->
		</div><!-- /container -->
	</div>
@stop

@section('incls-body')
	<script src="/js/classie.js"></script>
    <script src="/js/smoothscroll.js"></script>
	<script src="/js/jquery.stellar.min.js"></script>
	<script src="/js/fancybox/jquery.fancybox.js"></script>
		<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>
		
		<script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
	   </script>
@stop