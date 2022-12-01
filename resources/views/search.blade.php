
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tasued Web Annotation Search </title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
<link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }} />
<link rel="stylesheet" href={{ asset('css/annotations.css') }} />
<script src={{ asset('js/annotations.js') }} defer></script>
</head>

<script>
    const annotationTexts = {
        text1: "Text Annotation Here.",
        text2: "HTML Content </br>Is Supported As Well",
        text3: "Text To Annotate",
        text4: "Text Annotate OCR"
    }
</script>

<style>
    .button
     {
        color: blue,
        background-color: white
     }
</style>
<body>
<div id="head">
  <div id="title"> Web Annotation Search </div>
  <div id="menu">
    <ul>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="create">Create Article</a></li>
    </ul>
  </div>
</div>
<div id="body_wrapper">
  <div id="body">
    <div id="split">
      <div class="top"></div>
      <div id="left">

        <div class="content">



            @if($result->isNotEmpty())
            @foreach ($result as $post)
            <b> Annotate Keyword by Category:</b> <button type="button"
            class="annotation-btn"
            id="annotation-btn-1"
            data-text={{ App\Models\Category::where("id" , $post->category)->first()->annotate }}
            aria-describedby="">
            {{ $keyword }}
            </button>
                <div class="post-list">
                    <h1> {!! $post->data_tithe  !!} </h1>
                    <br>
                    <i> created by Stephen</i>

                    <p> {!! $post->content !!} </p>



         <div class="annotation-wrapper" data-opener="none">
            <button type="button" class="annotation-close-btn" aria-label="close annotation"></button>
            <p class="annotation-text" id="annotation-text"></p>
          </div>

                </div>
            @endforeach
        @else
            <div>
                <h2 style="color:red"> No Data found</h2>
                <p> Search For data Related to Our Category </p>

            </div>
        @endif

           </div>
      </div>
      <div id="right">
        <div class="content">
          <h4>Categories</h4>
          <ul>
             @foreach(App\Models\Category::all() as $cart)
              <li><a href={{ App\Models\DataCenter::where("category" , $cart->id)->first()->link }}>{{  $cart->name }}</a></li>
             @endforeach
          </ul>
          <hr />
          <h4> </h4>

          <hr />
          <h4>Search Again</h4>
          <a href={{ url('/') }} > <p> <button> SEARCH </button> </p></a>
        </div>
      </div>
      <div class="clearer"></div>
      <div class="bottom"></div>
    </div>
    <div class="clearer"></div>
  </div>
  <div class="clearer"></div>
</div>
<div id="end_body"></div>
<div id="footer"> Designed by <a href="#">Stephen</a> <br />
  &copy; Copyright tasued final year student 2022 </div>
</body>

</html>

