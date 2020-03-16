@extends('master')

@section('extra-styles')
    <style>
.header-section{
    background-color:#353649;
}

.text-area{
   margin-top:80px;
   margin-bottom:80px;
}

.intro-section{
    margin-top:50px;
}

    </style>
@endsection

@section('content')
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section";>
		<!-- logo -->
		<a href="{{route('landing-page')}}" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
				<li><a href="{{route('property')}}">Properties</a></li>
				<li><a href="{{route('selling')}}">Selling</a></li>
				<li><a href="{{route('about')}}">About Us</a></li>				
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</div>
	</header>
    <!-- Header section end -->

    <!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="section-title">
				<h2>Have a property you want off your hands?</h2>
			</div>
		
		</div>
    </section>
    <!-- Intro section end-->

    <div class="container">
        <div class="row text-area" >
            <div class="col-md-8 mx-auto">
         <textarea name="content" class="form-control my-editor"></textarea>
         <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>
</div>
</div>

@include('partials.footer')
@endsection

@section('extra-js')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>

@endsection