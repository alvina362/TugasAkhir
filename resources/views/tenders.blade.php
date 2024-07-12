@extends ('main')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; ">
                <h6 class="section-title bg-white text-center px-3" style="color: #8C0C14;" >Tender</h6>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="card px-5 py-5 shadow-lg ">
            <div class="row">
                <table id="example" class="table" style="width:100%">
                    <thead class="table">
                        <tr>
                            <th>No</th>
                            <th>Kode Tender</th>
                            <th>Satuan Kerja</th>
                            <th>HPS</th>
                            <th>Nilai Tender</th>
                            <th>Efisiensi</th>
                            <th>Rekanan</th>
                        </tr>
                    </thead>
                    <tbody class="table">

                    @php
                        $no = 1;
                    @endphp
    
                    @foreach ($tenderss as $tender)
                        <tr >
                            <td>{{  $no++ }}</td>
                            <td>{{  $tender->kd_tender }}</td>
                            <td>{{  $tender->nama_satker }}</td>
                            <td>{{  $tender->hps }}</td>
                            <td>Nilai Tender</td>
                            <td>Efisiensi</td>
                            <td>Rekanan</td>
                        </tr>

                    @endforeach
  
                        <!-- <tr>
                            <td>2</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                         <tr>
                            <td>9</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>20079072</td>
                            <td>DINAS LINGKUNGAN HIDUP</td>
                            <td>446.970.055</td>
                            <td>405.915.900</td>
                            <td>41.054.155</td>
                            <td>CV. CIPTA PRIMA ENGINEERING</td>
                        </tr> -->

                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</body>
</html>

@endsection