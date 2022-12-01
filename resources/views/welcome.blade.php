
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tasued Web Annotation Search </title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
<link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }} />
</head>
<style>
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        color:blue
      }
</style>
<body>
<div id="head">
  <div id="title"> TASUED | CSC | Web Annotation Search ENGINE </div>
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
          <h1> Search Our Database </h1>
          <form  action="{{ route('search') }}" method="GET" class="form-wrapper">
            <input name="search" type="text" id="search" placeholder="Search for..." required>
            <input name="submit" type="submit" value="Search" id="submit">
        </form>
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

