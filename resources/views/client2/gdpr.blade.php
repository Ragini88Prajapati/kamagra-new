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

  <h1>General Data Protection Regulation (GDPR)</h1>

  <h2 style="color: #075BAF;">What is the General Data Protection Regulation (GDPR)?</h2>

   <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    The General Data Protection Regulation (GDPR) applies from May 25, 2018. 
    With the entry into force of the GDPR, the protection of personal data is 
    uniformly regulated in all EU member states; the same rules apply in every member state.
  </p>

  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    Personal data is any information that can be used to identify an individual, directly or indirectly. 
    This can include a name, an address, or even an IP address. The term encompasses both automated 
    and pseudonymized personal data. Personal data can be divided into three categories: 
    simple personal data, special categories of personal data, and personal data relating to criminal convictions and offenses.
  </p>

   <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    Read more about the General Data Protection Regulation (GDPR) at 
    <a href="https://gdpr.eu/" rel="noopener noreferrer" target="_blank">gdpr.eu</a> 
    and about 
    <a href="https://www.gov.uk/government/publications/gdpr-customer-toolkit-guidance" rel="noopener noreferrer" target="_blank">
      the differences
    </a> 
    between the categories of personal data.
  </p>

  <h2 style="color: #075BAF;">What exactly is changing?</h2>

   <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">The GDPR brings, among other things:</p>

  <ul style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    <li>strengthened and expanded data protection rights;</li>
    <li>greater responsibility for organizations;</li>
    <li>the same (solid) powers for all European data protection supervisory authorities.</li>
  </ul>

 <h2 style="color: #075BAF;">What does that mean for you?</h2>

   <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
    The GDPR provides stricter and better protection for the personal data of citizens. 
    This also applies to customers of Kamagra Original. For example, you have more options 
    to assert your rights when your personal data is processed. For you as a data subject, the GDPR applies:
  </p>

  <ul>
    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to data portability</strong> – 
      This is a new right to transfer personal data. It means that you are entitled to receive 
      certain personal data that we, as an organization, hold about you.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to be forgotten</strong> – 
      This new right means that we as an organization must delete personal data or your account 
      under certain circumstances if you request it.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>Right to information</strong> – 
      You are entitled to view your personal data that we process. You have the right to request 
      information from us about what data we hold about you. You also have the right to inspect this data. 
      This option will always be available within your Kamagra Original account.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to rectification and completion</strong> – 
      This gives you the right to have certain personal data of yours amended or supplemented. 
      We, as an organization, are responsible for the accuracy of the personal data we process. 
      We are also responsible for updating this data when necessary or when you request us to do so.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to restriction of processing</strong> – 
      This gives you the right in certain cases to restrict the use of your data – 
      in this case by or on behalf of Kamagra Original.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to human review of decisions regarding automated decision-making and profiling</strong> – 
      in other words, the right to human evaluation of decisions. Some organizations make decisions 
      based on automatically processed data. This is the case, for example, with profiling. 
      According to the GDPR, you have the right to have decisions affecting you also evaluated by humans.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to object</strong> – 
      You have the right to object to the processing of your data at any time. 
      In such a case, Kamagra Original is obliged to cease or restrict the processing of your personal data.
      <br>&nbsp;
    </li>

    <li style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35;">
      <strong>The right to be clearly informed about what we do with your personal data</strong> – 
      As an organization, we are obligated to clearly inform new and existing customers 
      about what we do with their personal data. This point will be included in the privacy policy provided on the website.
    </li>
  </ul>

  <p style="font-size: 13px; color: #071D35; font-family: Arial, Helvetica, sans-serif; line-height: 1.35; margin-top:15px">
    We are currently working diligently to implement the GDPR internally, 
    so that by May 25, 2018, we will meet all data protection requirements. 
    The guiding principles are: transparency, accountability, accuracy, purpose limitation, 
    data minimization, retention limitation, integrity, and confidentiality. 
    This is the next step in data protection, one of Kamagra Original's core values.
  </p>
</div>
</div>
</div>

</div>
@endsection