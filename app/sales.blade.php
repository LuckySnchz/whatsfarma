<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALES!!!</title>

   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https:fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    
    .grid-container {

  border: 0.1px solid;
  display: grid;
  grid-template-columns: auto auto ;

}
.grid-item { 
 
  border: 0.1px solid;
  font-size: 10px;
  text-align: right;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
</style>
</head>
<body>
    <!--FARMAONLINE
https://devhints.io/xpath
https://stackoverrun.com/es/q/4034565-->

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 1500px;text-align: center;width: 100%" > 

 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 150px;text-align: center;width: 100%" >
    <h1>OFERTAS HOY!!!</h1>
     <div class="grid-container" style="">   

  <div class="search-container">
    <form action="ofertashoy" method="get">
      <input type="text" placeholder="Bucar Por Marcas" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</div>
    </section> 

           
 
 <div class="grid-container" style="">   



<div class="grid-item"style="background-color:#4bbfdd

;width: 100%;color:white;font-size: 1.2em;text-align: center;height: 50px;line-height: 3em"><b><label for="Rp1" >Codigo</label></b></div>

<div class="grid-item"style="background-color:#4bbfdd

;width: 100%;color:white;font-size: 1.2em;text-align: center;height: 50px;line-height: 3em"><b><label for="Rp1"  >Precio</label></b></div>






 <!--CODIGO-->
<div class="flex-container" style="line-height: 3.8em;"> 
@foreach($allsales as $allsale)  
{{$allsale->Codigo}}
@endforeach

  </div>
<!--PRECIO-->

<div class="flex-container" style="line-height: 3.7em;text-decoration: line-through;">
</div>

 @foreach($allsales as $allsale)  
{{$allsale->Precio}}
@endforeach

</div>
</section>
</body>
</html>
 