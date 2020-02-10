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
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" >
        <div class="row" >
            
            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12">
                
                <div class="checkout-container">
                    <div class="row"  >
                    	<div class="span10 offset1">
                    	    
                    	    <!--  ==========  -->
							<!--  = Header =  -->
							<!--  ==========  -->
                    		<header>
                    		    <div class="row" style=" margin-top: 25px;">
                    		    	<div class="span2">
                    		    		<a href="index.html"><img src="webmarket/images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" /></a>
                    		    	</div>
                    		    	<div class="span6">
                    		    	    <div class="center-align">
                    		    	        <h1><span class="light">بازبینی</span> سبد خرید</h1>
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
                    		    	<div class="step active">
                    		    	    <div class="step-badge">1</div>
                    		    	    سبد خرید
                    		    	</div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">2</div>
                    		    	    آدرس ارسال
                    		    	</div>
                    		    	<div class="step">
                                        <div class="step-badge">3</div>
                                        شیوه پرداخت
                                    </div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">4</div>
                    		    	    تایید و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
                    		<!--  ==========  -->
							<!--  = Selected Items =  -->
							<!--  ==========  -->
							<table class="table table-items">
							    <thead>
							    	<tr>
							    		<th colspan="2">آیتم</th>
							    		<th><div class="align-center">تعداد</div></th>
							    		<th><div class="align-right">قیمت</div></th>
							    	</tr>
							    </thead>
							    <tbody>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-1.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشی آدیداس &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
							        	<td class="qty">
							        	    <input type="text" class="tiny-size" value="4" />
					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-2.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشی آدیداس &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
							        	<td class="qty">
							        	    <input type="text" class="tiny-size" value="1" />
					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-3.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشی آدیداس &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
							        	<td class="qty">
							        	    <input type="text" class="tiny-size" value="2" />
					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-4.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشی آدیداس &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
							        	<td class="qty">
							        	    <input type="text" class="tiny-size" value="4" />
					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-5.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشی آدیداس &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
							        	<td class="qty">
							        	    <input type="text" class="tiny-size" value="4" />
					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							        							        <tr>
							        	<td colspan="2" rowspan="2">
							        	    <div class="alert alert-info">
                                                <button data-dismiss="alert" class="close" type="button">×</button>
                                                هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a>
                                            </div>
							        	</td>
							        	<td class="stronger">هزینه ارسال :</td>
							        	<td class="stronger"><div class="align-right">$4.99</div></td>
							        </tr>
							        <tr>
							        	<td class="stronger">جمع کل :</td>
							        	<td class="stronger"><div class="size-16 align-right">$357.81</div></td>
							        </tr>
							    </tbody>
							</table>
							
							<hr />
							
							<p class="right-align">
							    در مرحله بعدی شما آدرس ارسال را انتخاب خواهید کرد. &nbsp; &nbsp;
							    <a href="/checkout-step2" class="btn btn-primary higher bold">ادامه</a>
							</p>
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->

    @endsection
    