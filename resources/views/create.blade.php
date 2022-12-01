
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

      input[type=submit] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        color:blue
      }

      select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        color:blue
      }

      textarea {
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

      <li class="active"><a href={{ url("/") }}>Go to Search</a></li>

    </ul>
  </div>
</div>
<div id="body_wrapper">
  <div id="body">
    <div id="split">
      <div class="top"></div>
      <div id="left">

        <div class="content">

            @if (session('success'))

               <h1 style="color: green; font-size: 40px" > {{ session('success') }}  </h1>

            @endif



          <form  action={{ route('post') }} method="POST" class="form-wrapper">
            @csrf
            <h3> Add Tithe </h3>
            <input name="data_tithe" type="text" id="search" placeholder="input Title" required>
            <br>
            <h3> Add Link </h3>
            <input name="link" type="text" id="link" placeholder="Reference link" required>
            <br>
            <h3> What Category </h3>
           <select name="category" id="">
                  <option value="">Select -- </option>
                @foreach (App\Models\Category::all() as $cart)
                      <option value={{ $cart->id }}> {{ $cart->name }} </option>
                @endforeach
           </select>

           <h3> Type or Paste Articles </h3>
            <textarea name="content" id="" cols="30" rows="10">
            </textarea>
            {{--  <input name="image" type="text" id="image" value="webannotation.jpg" readonly>  --}}
            <br>
            <input name="submit" type="submit" value="SUBMIT" id="submit">

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

