@extends('layouts.admin')

@section('content')
<div class="content-wrapper" style="">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Banner</a></li>
                        <li class="breadcrumb-item active">Add Banner</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-body">
                    <form
                        action="{{ isset($action) && $action  == 'update'? route('admin.banner.update') : route('admin.banner.insert') }}"
                        enctype="multipart/form-data" method="POST" id="product-form">
                        @csrf
                        <?php
                        if(isset($product_data->id) && !empty($product_data->id)){
                            ?>
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product_data->id }}">
                        <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <?php
                                            if(old('title') != null){
                                                $title_value = old('title');
                                            }else{
                                                $title_value = isset($product_data->title) && !empty($product_data->title) ? $product_data->title : "";;
                                            }
                                            ?>
                                    <input type="text" name="title" id="title" value="{{ $title_value }}"
                                        class="form-control">
                                    @error('title')
                                    <label id="title-error" class="error" for="title">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="short_title">Short Title</label>
                                    <?php
                                            if(old('short_title') != null){
                                                $short_title_value = old('short_title');
                                            }else{
                                                $short_title_value = isset($product_data->short_title) && !empty($product_data->short_title) ? $product_data->short_title : "";;
                                            }
                                            ?>
                                    <input type="text" name="short_title" id="short_title" value="{{ $short_title_value }}"
                                        class="form-control">
                                    @error('short_title')
                                    <label id="short_title-error" class="error" for="short_title">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desktop_image">Desktop Image</label>
                                    <input type="file" name="desktop_image" id="desktop_image" class="form-control" accept="image/*" oninput="desktopImagePreview.src=window.URL.createObjectURL(this.files[0])">
                                    @error('desktop_image')
                                    <label id="desktop_image-error" class="error" for="desktop_image">{{ $message }}</label>
                                    @enderror
                                    <?php
                                        if(isset($action)&&$action  == 'update' && !empty($product_data->desktop_image)){
                                    ?>
                                    <img src="{{$product_data->desktop_image!=''? asset('/assets/images/banner/').'/'.$product_data->desktop_image:''}}" style="width:100px;">
                                    <?php  } ?>
                                    <img src="" id="desktopImagePreview" style="width:100px;">
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_image">Mobile Image</label>
                                    <input type="file" name="mobile_image" id="mobile_image" class="form-control" accept="image/*" oninput="mobileImagePreview.src=window.URL.createObjectURL(this.files[0])">
                                    @error('mobile_image')
                                    <label id="mobile_image-error" class="error" for="mobile_image">{{ $message }}</label>
                                    @enderror
                                    <?php
                                        if(isset($action)&&$action  == 'update' && !empty($product_data->mobile_image)){
                                    ?>
                                    <img src="{{$product_data->mobile_image!=''? asset('/assets/images/banner/').'/'.$product_data->mobile_image:''}}" style="width:100px;">
                                    <?php  } ?>
                                    <img src="" id="mobileImagePreview" style="width:100px;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <?php
                                            if(old('url') != null){
                                                $url_value = old('url');
                                            }else{
                                                $url_value = isset($product_data->url) && !empty($product_data->url) ? $product_data->url : "";;
                                            }
                                            ?>
                                    <input type="text" name="url" id="url" value="{{ $url_value }}"
                                        class="form-control">
                                    @error('url')
                                    <label id="name-error" class="error" for="url">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'highlights');
    CKEDITOR.replace( 'description');
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script>
    $('#product-form').validate({
        rules:{
            title:{
                required:true,
                maxlength:255
            },
            short_title:{
                required:true,
                maxlength:255
            },
            url:{
                required:true,
            },
            desktop_image: {
                accept: "jpg,png,jpeg,gif"
            },
            mobile_image: {
                accept: "jpg,png,jpeg,gif"
            }
        },
        submitHandler:function(form){
            // alert('submited');
            return true;
        }
    });
</script>