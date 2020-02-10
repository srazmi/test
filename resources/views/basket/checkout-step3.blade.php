@extends('master')

@section('content')

<!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">صفحه اصلی</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="/checkout-step1">بازبینی سبد خرید</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="/checkout-step2">آدرس ارسال</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="/checkout-step3">شیوه پرداخت</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12">
                
                <div class="checkout-container">
                    <div class="row">
                    	<div class="span10 offset1">
                    	    
                    	    <!--  ==========  -->
							<!--  = Header =  -->
							<!--  ==========  -->
                    		<header>
                    		    <div class="row">
                    		    	<div class="span2">
                    		    		<a href="index.html"><img src="webmarket/images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" /></a>
                    		    	</div>
                    		    	<div class="span6">
                    		    	    <div class="center-align">
                    		    	        <h1><span class="light">انتخاب</span> شيوه پرداخت</h1>
                    		    	    </div>
                    		    	</div>
                    		    	<div class="span2">
                    		    	    <div class="right-align">
                    		    	    	<img src="webmarket/images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />
                    		    	    </div>
                    		    	</div>
                    		    </div>
                    		</header>
                    		
                    		<!--  ==========  -->
							<!--  = Steps =  -->
							<!--  ==========  -->
                    		<div class="checkout-steps">
                    		    <div class="clearfix">
                    		    	<div class="step done">
                    		    	    <div class="step-badge"><i class="icon-ok"></i></div>
                    		    	    <a href="checkout-step-1.html">سبد خريد</a>
                    		    	</div>
                    		    	<div class="step done">
                    		    	    <div class="step-badge"><i class="icon-ok"></i></div>
                    		    	    <a href="checkout-step-2.html">آدرس ارسال</a>
                    		    	</div>
                    		    	<div class="step active">
                                        <div class="step-badge">3</div>
                                        شيوه پرداخت
                                    </div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">4</div>
                    		    	    تاييد و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
						    <!--  ==========  -->
							<!--  = Payment =  -->
							<!--  ==========  -->
							<span class="btn btn-danger circle pull-left"><i class="icon-chevron-down"></i></span>
							<div class="shifted-left-45 clearfix">
							    <h3 class="no-margin"><span class="light">کارت</span> اعتباري</h3>
							    <p class="push-down-30">مسترکارت، ويزا و امريکن اکسپرس قابل قبول هستند.</p>
							    
							    <form action="#" method="post" class="form-horizontal form-checkout">
                                    <div class="control-group">
                                        <label class="control-label" for="firstName">نام<span class="red-clr bold">*</span></label>
                                        <div class="controls">
                                            <input type="text" id="firstName" class="span4" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="lastName">نام خانوادگي<span class="red-clr bold">*</span></label>
                                        <div class="controls">
                                            <input type="text" id="lastName" class="span4" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="cardNum">شماره کارت اعتباري<span class="red-clr bold">*</span></label>
                                        <div class="controls">
                                            <input type="text" id="cardNum" class="span1 card-num-input center-align" maxlength="4">
                                            <input type="text" class="span1 card-num-input center-align" maxlength="4">
                                            <input type="text" class="span1 card-num-input center-align" maxlength="4">
                                            <input type="text" class="span1 card-num-input center-align add-tooltip" maxlength="4" data-title="عدد 16 رقمی جلوی کارت">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="cvc">CVC or CVS<span class="red-clr bold">*</span></label>
                                        <div class="controls">
                                            <input id="cvc" type="text" class="span1 center-align add-tooltip" maxlength="3" data-title="سه رقم آخر نوشته شده بر پشت کارت" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="exp">تاريخ انقضا<span class="red-clr bold">*</span></label>
                                        <div class="controls">
                                            <select id="exp" class="input-small month-push-right">
                                                <option value="-1">ماه</option>
                                                                                                <option value="1">01</option>     
                                                                                                <option value="2">02</option>     
                                                                                                <option value="3">03</option>     
                                                                                                <option value="4">04</option>     
                                                                                                <option value="5">05</option>     
                                                                                                <option value="6">06</option>     
                                                                                                <option value="7">07</option>     
                                                                                                <option value="8">08</option>     
                                                                                                <option value="9">09</option>     
                                                                                                <option value="10">10</option>     
                                                                                                <option value="11">11</option>     
                                                                                                <option value="12">12</option>     
                                                 
                                            </select>
                                            <select id="exp" class="input-small">
                                                <option value="-1">سال</option>
                                                                                                <option value="2013">2013</option>     
                                                                                                <option value="2014">2014</option>     
                                                                                                <option value="2015">2015</option>     
                                                                                                <option value="2016">2016</option>     
                                                                                                <option value="2017">2017</option>     
                                                                                                <option value="2018">2018</option>     
                                                                                                <option value="2019">2019</option>     
                                                 
                                            </select>
                                        </div>
                                    </div>
                                </form>
							</div>
							
							<hr />
							
							<span class="btn btn-danger circle pull-left"><i class="icon-chevron-right"></i></span>
							<div class="shifted-left-45 clearfix">
                                <h3 class="no-margin">
                                    <span class="light">پي پل</span> &nbsp; &nbsp; &nbsp; 
                                    <a href="#"><img src="webmarket/images/buttons/paypal.gif" alt="PayPal" width="145" height="42" /></a>
                                </h3>
                            </div>
                            
                            <hr />
						    
						    <p class="right-align">
						        در مرحله بعدي شما قادر هستيد سفارشتان را بازبيني کرده و آن را تاييد کنيد &nbsp; &nbsp;
						        <a href="/checkout-step4" class="btn btn-primary higher bold">ادامه</a>
						    </p>
							    
							    
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    
     
    
     
    </div> <!-- end of master-wrapper -->

@endsection