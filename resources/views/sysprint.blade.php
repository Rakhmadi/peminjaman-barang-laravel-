
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <script type="text/javascript" src="{{ asset('jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('qrcode.js') }}"></script>
   <!-- Styles -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style type="text/css">
*{
    background-color: #ffffff;
}
body{
    
    background-color: #ffffff;

}
html{
    background-color: #ffffff;
}
  .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
  .tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 3px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:rgb(247, 247, 247);color:#333;background-color:#fff;}
  .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:14px 7px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
  .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
  .tg .tg-zv4m{border-color:#ffffff;text-align:left;vertical-align:top}
  .tg .tg-v0hj{font-weight:bold;background-color:#efefef;border-color:inherit;text-align:center;vertical-align:top}
  .tg .tg-mfxt{background-color:#ffffff;border-color:inherit;text-align:left;vertical-align:middle}
  .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
  .tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
  .tg .tg-k{border-color:#ffffff;text-align:left;vertical-align:top}
  .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
  .column {
    float: left;
    width: 33.33%;
  }
  .n{
    padding: 0px;
    margin: 0px;
  }
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .right{
    text-align: right;
  }
  .bold{
    font-weight: bold;
  }
  .f{
    font-size: 12px;
  }
  #qrcode{
    
  }
  table{
    margin: 30px;
  }
  @media print {
  #i {
    display: none;
  }
}
@page { size: auto;  margin: 0mm; }
  </style>
</head>

<body>
        <div style="margin:12px;"> <buttonn id="i" onclick="printDiv()" class="btn btn-primary">Print</button></div>
    <center><div id="mamang"><table class="tg" style="">
            <colgroup>
            <col style="width: 58px">
            <col style="width: 122px">
            <col style="width: 120px">
            <col style="width: 275px">
            <col style="width: 148px">
            <col style="width: 136px">
            </colgroup>
              <tr>
                <th class="tg-mfxt" style="border-top-color: #fff;border-left:#fff;border-right:#fff;" colspan="6">
                  <h1 style="margin: 0%;">Teknik Komputer dan jaringan</h1>
                  <p style="margin: 5px">BUKTI PEMINJAMAN</p>
                </th>
              </tr>
              <tr>
                <td class="tg-v0hj">NO</td>
                <td class="tg-v0hj">Nama Asset</td>
                <td class="tg-v0hj">No Asset</td>
                <td class="tg-v0hj">Spesifikasi</td>
                <td class="tg-v0hj">Lembaga</td>
                <td class="tg-v0hj">Ket</td>
              </tr>
              @php
                  $s=1;
              @endphp
              @foreach ($gs as $key=>$g)
              <tr>
              <td class="tg-lboi"><center>{{$s++}}</center></td>
              <td class="tg-lboi">&nbsp;{{$g->namaaset}}</td>
              <td class="tg-lboi">&nbsp;{{$g->noaset}}</td>
              <td class="tg-0pky">&nbsp;{{$g->spc}}</td>
              <td class="tg-0pky">&nbsp;{{$g->lem}}</td>
              <td class="tg-0pky">&nbsp;{{$g->ket}}</td>
                  </tr>
              @endforeach
              
              
              <tr>
                
              </tr>
              <tr>
                <td class="tg-zv4m n" style="padding: 0px; margin: 0px;" colspan="6"> <p class="right">Jakarta,  </p></td>
              </tr>
              <tr>
                <td class="tg-zv4m" colspan="6">
            <div class="row">
              <div class="column f"><center>
                <p class="bold">Approved</p>
                <p>Kepala SMK Dinamika Pembangunan 1 Jakarta</p>
            
                <p class="bold">MULYANA, SH,.M.M.</p>
              </center></div>
              <div class="column f"><center>
                  <p class="bold">Verified</p>
                  <p>Kabeng</p>
                  <P></P>
              
                  <p class="bold">Nanda</p>
            
              </center></div>
              <div class="column f"><center>
                <p class="bold">Prepared</p>
                <p>Unit Yang Meminta</p>
                <p class="bold">. . . . . . . . . . . . . . . .</p>
              </center></div>
            </div>
            </td>
              </tr>
              <tr>
                  <td class="tg-zv4m" style="border-bottom-color: #333" colspan="6">
                      <div id="qrcode"  >
                            <div id="jk" hidden='true' style="float:right;bottom:0px;">{{$f->codesur}}</id> </div>
                  
              </td>
                </tr>
              
            </table></div></center>
           
  
    
   
    
    <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 55,
	height : 55
});

function makeCode () {		
	var elText = document.getElementById("jk").textContent;
	
	qrcode.makeCode(elText);
}

makeCode();
function printDiv() {
     window.print();
}
    </script>
</body>
</html>