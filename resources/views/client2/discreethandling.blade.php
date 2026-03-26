@php
use App\Models\Client\Product;

@endphp
@extends('layouts.client2')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        
        <!-- Left Sidebar -->
        <div id="column-left" class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
            
              <div id="module_559" class="module-wrapper module-wrapper-559">
          <img src="https://www.kamagraoriginal.to/images/SIDE-bitcoin-DE.png" alt="Bitcoin payment" style="width: 275px;">
        </div>
         <!-- Login Block -->
            <div class="login-block" style="background-color: #FFF; border: 1px solid #A0D9F7; margin: 0 0 20px; ">
                @auth
                <h3 style="margin: 0 0 10px 0; font-size: 14px; border-bottom: 2px solid #9EC8FA; background-color: #A0D9F7; line-height: 25px; padding: 5px 15px;font-weight: 700; color: #000;">{{ Auth::user()->name }}</h3>
                <div style="margin-bottom: 10px; font-size: 12px;">
                    <p style="color: #333; margin-bottom: 5px;">Welcome, {{ Auth::user()->name }}!</p>
                    <a href="{{route('home.user-profile')}}" style="color: #006eb7; text-decoration: none;">My Account</a><br>
                    <a href="{{route('logout')}}" style="color: #006eb7; text-decoration: none;">Logout</a>
                </div>
                @else
                <h3 style="margin: 0 0 10px 0; font-size: 14px; border-bottom: 2px solid #9EC8FA; background-color: #A0D9F7; line-height: 25px; padding: 5px 15px;font-weight: 700; color: #000;">Login</h3>
                <form action="{{ route('client.authenticate') }}" method="post" style="padding: 10px;">
                    @csrf
                    <div style="margin-bottom: 5px; display: flex">
                        <label style="font-weight: normal; font-size: 12px; color: #333; width: 35%;">E-mail:</label>
                        <input type="text" name="email" required style="width: 100%; border: 1px solid #ccc; border: 1px solid #9EC8FA; width: 60%;">
                    </div>
                    <div style="margin-bottom: 10px;  display: flex">
                        <label style="font-weight: normal; font-size: 12px; color: #333; width: 35%;">Password:</label>
                        <input type="password" name="password" required style="idth: 100%; border: 1px solid #ccc;  border: 1px solid #9EC8FA;  width: 60%;">
                    </div>
                    <button type="submit" style="background: #e96e00; color: white; border: 1px solid #d45500; padding: 2px 10px; font-weight: bold; font-size: 12px; border-radius: 2px; margin-left: 75px;">Log in</button>
                    <div style="margin-top: 10px; font-size: 15px; font-weight: bold;">
                        <a href="{{route('home.signup')}}" style="color: #006eb7;">Register</a><br>
                        <a href="{{route('home.forgetPassPage')}}" style="color: #006eb7;">Forgot your password?</a>
                    </div>
                </form>
                @endauth
            </div>
            <!-- Categories Menu -->
            <div class="header_category  nofloat " style="margin-bottom: 20px;">
                <div id="boss-menu-category" class="box">
                    <div class="box-content">
                        <ul class="box-category boss-menu-cate new-iconarrow sidemenu-medicine" style="list-style: none; padding: 0; border: 1px solid #ddd; border-top: 3px solid #0088cc;">
                            @forelse($categories ?? [] as $category)
                                <li style="background: #aeddf5; padding: 10px 15px; font-weight: bold; color: #003e6d; font-size: 16px; border-bottom: 1px solid #fff;">
                                    {{ $category->name }}
                                </li>
                                @php
                                    $products = \App\Models\Client\Product::where('category_id', $category->id)
                                        ->where('status', 1)
                                        ->select('name', 'slug')
                                        ->get();
                                @endphp
                                @forelse($products as $product)
                                    <li>
                                        <a href="{{ route('client.product.product-preview', [$product->slug]) }}" style="display: block; padding: 8px 15px; border-bottom: 1px solid #eee; text-decoration: none; color: #003e6d; font-weight: bold; font-size: 13px;">
                                            <i class="fa fa-angle-right" style="margin-right: 5px;"></i> {{ $product->name }}
                                        </a>
                                    </li>
                                @empty
                                    <li style="padding: 8px 15px; color: #666; font-style: italic; border-bottom: 1px solid #eee;">
                                        No products available
                                    </li>
                                @endforelse
                            @empty
                                <li style="padding: 15px; text-align: center; color: #666;">
                                    No categories available
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

        </div><!-- /#column-left -->
        
        <!-- Main Content -->
        <div id="content" class="col-sm-9 col-md-9 col-lg-9">

<div class="cart-container" style="font-family: Arial, Helvetica, sans-serif;">
	<h1>Discreet handling</h1>

	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		Discretion is our top priority. You can rest assured that discretion is guaranteed in all processing and communication. You can communicate with the doctors discreetly and in a secure environment. The package sent by the pharmacy will only bear the pharmacy's name.
	</p>

	<h2 style="color: #075BAF;">Trusted doctors and pharmacies</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		KamagraOriginal.net has access to recognized, registered doctors and pharmacies that exclusively supply original medicines from renowned manufacturers.
	</p>

	<h2 style="color: #075BAF;">Doctors</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		KamagraOriginal.to has access to 11 qualified doctors whose professional competence, qualifications, diplomas, registrations, etc., we have thoroughly vetted. We also monitor these doctors' prescribing practices.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		Doctors are authorized to prescribe medication based on an online consultation. An existing doctor-patient relationship is not required, neither in Germany nor in the other EU member states where the doctors in question are practicing. Please note that during an online consultation, you will be required to provide information about your entire medical history. You are solely responsible for this information at all times, just as you are required to provide truthful information about your symptoms and medical history to your family doctor.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		The name of the treating physician can be found in the confirmation email you will receive after your order has been processed. This email will also contain the physician's official registration number and a link to the relevant regulatory authority in the EU member state where the physician practices. Clicking this link will allow you to quickly and easily verify the physician's registration online.
	</p>

	<h2 style="color: #075BAF;">Pharmacies</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		All pharmacies to which KamagraOriginal.to has access are located in Europe and fully comply with all regulations applicable in their respective countries of establishment. They hold the official EU seal for online pharmacies. We have also vetted them for quality, professionalism, the presence of all necessary permits, and their professional qualifications. Each pharmacy is inspected by the relevant regulatory authority in its country of origin.
	</p>

	<h2 style="color: #075BAF;">Control</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		The doctors and pharmacies we have access to are not only supervised by KamagraOriginal.to, but also by the relevant regulatory authorities in their respective countries. Their licenses and professional qualifications have been verified. We also visit the doctors and pharmacies in person and request references. Furthermore, an independent medical advisory board oversees the (medical) processes surrounding our website.
	</p>

	<h2 style="color: #075BAF;">Original medications and prescriptions</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		The medications sold and delivered by registered, independent pharmacies are sourced from one of the original manufacturers of the respective product. Occasionally, a pharmacy may only have the medication in stock in bulk packaging and deliver the ordered quantity in different packaging. The pharmacies take strict precautions to ensure that no counterfeit products are sold, guaranteeing the highest quality at all times. If you have any doubts about the authenticity of a product, please contact customer service or the manufacturer. The manufacturer can verify the authenticity of the product using the barcode. Please note that medications may be delivered in foreign packaging. This does not necessarily mean that there is anything wrong with the product.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		The Directive on Patients' Rights in Cross-Border Healthcare regulates the conditions under which patients can receive medical treatment in another EU country with reimbursement of costs. Since 2013, prescriptions have been recognized across Europe. This means that every prescription – including online prescriptions – must be accepted by pharmacies in every EU member state, provided it was issued by a doctor established in the EU and in accordance with the regulations of their country of establishment.
	</p>

	<h2 style="color: #075BAF;">The legal aspects of KamagraOriginal.to</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		KamagraOriginal.to is an informative website and online service for consumers. The website provides information on various health problems and their possible treatments.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		KamagraOriginal.to does not offer any products itself, but ensures that you receive genuine products safely, quickly, and discreetly from regulated and independent pharmacies. The products mentioned are not offered by us directly. Instead, we provide you with the opportunity to order products from pharmacies and/or request a doctor's consultation (possibly combined with your preferred treatment). The prices quoted are the costs for the products supplied by independent, registered pharmacies located within the EU, as well as any doctor's consultation fees.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		When you commission KamagraOriginal.to to order a product from a pharmacy on your behalf, at your expense, and at your risk (and possibly based on a consultation), KamagraOriginal.to will search for a suitable pharmacy. We consider factors such as product availability, delivery distance, and price. We do not collaborate with pharmacies and are not bound to any specific pharmacy. KamagraOriginal.to is free to choose any pharmacy for each customer order. We do not receive any commission from pharmacies. Conversely, pharmacies are free to accept or decline KamagraOriginal.to customers, and they do not receive any commission from KamagraOriginal.to. Accordingly, we do not offer products, but rather a communication service. This service involves requesting pharmacies, on behalf of, at the expense and risk of, our customers, to sell and deliver specific products to them.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		Should you request that KamagraOriginal.to arrange a consultation for you, KamagraOriginal.to will search for a suitable doctor – for example, based on availability. We do not collaborate with doctors and are not bound to any specific doctors. For each client's request, KamagraOriginal.to is free to choose the doctor. The treating physician is completely independent and is in no way influenced by KamagraOriginal.to to prescribe specific medications.
	</p>

	<h2 style="color: #075BAF;">Savings</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		The total cost of an order includes the cost of the treatment delivered to you by the pharmacy, the consultation fee passed on by the doctor, a processing fee, and – if applicable – shipping costs and VAT. If you select multiple packs of your preferred treatment, a portion of the processing fee charged by KamagraOriginal.to will be waived. This is expressly not a discount on the selected product, but rather a saving on the processing fee.
	</p>

	<h2 style="color: #075BAF;">Aftercare</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		You will find the name of your treating physician in the confirmation email you receive after a doctor has reviewed your medical questionnaire. This confirmation also includes the treating physician's official registration number and a link to the relevant regulatory authority in the EU member state where the physician practices. You will also receive a follow-up link via email to contact the doctor directly if needed.
	</p>

	<h2 style="color: #075BAF;">Protection of personal data</h2>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		KamagraOriginal.to is committed to ensuring the optimal security of your data. To protect your personal information, KamagraOriginal.to has a <u>privacy policy</u>.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		Data protection, security, discretion, and maximum customer satisfaction are the key principles that justify KamagraOriginal.to's existence. The information you provide is treated with strict confidentiality and is subject to the General <u>Data Protection Regulation</u> (GDPR). Customer data is transmitted using proven SSL encryption.
	</p>
	<p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
		We use the information you provide solely to inform you optimally and to offer targeted assistance. We will not share your personal data with third parties without your consent, except pharmacies and doctors involved in fulfilling your order.
	</p>
</div>
</div>
</div>
</div>
@endsection