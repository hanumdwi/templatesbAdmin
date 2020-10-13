<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
	.Row {
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 2mm;
    margin-top:2mm /*Optional*/
}
.Column {
    display: table-cell;
}
	</style>
</head>
<body>

@php
for ($x = 1; $x <= 8; $x++) { @endphp
      <div class="Row">
      <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top: 1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:2px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top:1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:2px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top:1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:2px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top:1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:2px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;">
         
         <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
          
          <div class="coba1" style="margin-top:1px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
          </div>
  
          <div class="coba2" style="margin-top:2px; margin-left:45.354331px;">
              @foreach($barang as $b)
              <font size="2"> {{$b->NAMA_BARANG}} </font>
              @endforeach
          </div>
         </div>
         </div>
    </div> 
    @php } @endphp
</body>
</html>