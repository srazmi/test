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
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="/checkout-step4">تایید و پرداخت</a>
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
                    		    	        <h1><span class="light">تاييد</span> و پرداخت</h1>
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
                    		    	<div class="step done">
                    		    	    <div class="step-badge"><i class="icon-ok"></i></div>
                    		    	    <a href="checkout-step-3.html">شيوه پرداخت</a>
                    		    	</div>
                    		    	<div class="step active">
                    		    	    <div class="step-badge">4</div>
                    		    	    تاييد و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
                    		<!--  ==========  -->
							<!--  = Selected Items =  -->
							<!--  ==========  -->
							<table class="table table-items">
							    <thead>
							    	<tr>
							    		<th colspan="2">آيتم</th>
							    		<th><div class="align-center">تعداد</div></th>
							    		<th><div class="align-right">قيمت</div></th>
							    	</tr>
							    </thead>
							    <tbody>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-1.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشي آديداس</td>
							        	<td class="qty">
							        	    3					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-2.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشي آديداس</td>
							        	<td class="qty">
							        	    4					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-3.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشي آديداس</td>
							        	<td class="qty">
							        	    2					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-4.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشي آديداس</td>
							        	<td class="qty">
							        	    4					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							         
							        <tr>
							        	<td class="image"><img src="webmarket/images/dummy/cart-items/cart-item-5.jpg" alt="" width="124" height="124" /></td>
							        	<td class="desc">لباس ورزشي آديداس</td>
							        	<td class="qty">
							        	    2					            	    </td>
							        	<td class="price">
							        	    $59
							        	</td>
							        </tr>
							        							        <tr>
							        	<td colspan="2" rowspan="2">
							        	    &nbsp;
							        	</td>
							        	<td class="stronger">هزينه ارسال :</td>
							        	<td class="stronger"><div class="align-right">$4.99</div></td>
							        </tr>
							        <tr>
							        	<td class="stronger">جمع کل :</td>
							        	<td class="stronger"><div class="size-16 align-right">$357.81</div></td>
							        </tr>
							    </tbody>
							</table>
							
							<p class="right-align">
							    <a href="/" class="btn btn-primary higher bold">تاييد و پرداخت</a>
							</p>
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    
     
    
     
    </div> <!-- end of master-wrapper -->
   
@endsection