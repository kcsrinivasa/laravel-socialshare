<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <title>Implement Social Share Button in Laravel </title>
          
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}" />
    
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"  /> -->

        <style>
            .social-btn-sp #social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            .social-btn-sp  ul li {
                display: inline-block;
            }          
            .social-btn-sp ul li a {
                padding: 15px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 30px;
            }

            .card-body  ul li {
                display: inline-block;
            }          
            .card-body ul li a {
                padding: 15px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 30px;
            }
        </style>
  
    </head>
    <body>
        <div class="container mt-4">
            <h2 class="text-center p-3">Laravel Social Share Buttons</h2>
  
            <div class="social-btn-sp text-center p-3">
                {!! $shareButtons !!}
            </div>
            <hr>

            <h3 class="text-center">List Of Blog</h3>
            @foreach($blogs as $blog)
                <div class="card text-center">
                    <div class="card-header">
                        <a href="{{route('socialShare.blog',$blog->slug)}}"><img class="w-50 m-auto" src="{{asset('public/'.$blog->image)}}" alt="blog"></a>
                        <h3>{{$blog->title}}</h3>
                    </div>
                    <div class="card-body">
                        <!-- <p>{!! Share::page(route('socialShare.blog',$blog->slug),$blog->title)->facebook()->twitter()->whatsapp() !!}</p> -->
                        <p>{!! $blog->description !!}</p>
                    </div>
                </div>

            @endforeach
  
        </div>
    </body>
</html>