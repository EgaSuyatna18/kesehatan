@extends('lp.layout.master')
@section('content')
<style>
    .form-contact {
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 40px;
            background-color: #ffffff;
    }
</style>
<main>
    <!--? Slider Area Start-->
    <div class="slider-area slider-area2">
        <div class="slider-active dot-style">
            <!-- Slider Single -->
            <div class="single-slider  d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                         <div class="hero-wrapper">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Cek Jantung</h1>
                                <p data-animation="fadeInUp" data-delay=".6s">Sesaat setelah terjadi, <br> penyesalan baru datang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- Slider Area End -->
<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Silahkan Isi Form Dibawah.</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenisKelamin" required>
                            <option value="1">Pria</option>
                            <option value="0">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="usia" class="form-label">Usia</label>
                        <input type="number" class="form-control" id="usia" required>
                    </div>
                    <div class="mb-3">
                        <label for="usia" class="form-label">Berat Badan (k)</label>
                        <input type="number" class="form-control" id="beratBadan" required>
                    </div>
                    <div class="mb-3">
                        <label for="usia" class="form-label">Tinggi Badan (cm)</label>
                        <input type="number" class="form-control" id="tinggiBadan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tekananDarah" class="form-label">Tekanan Darah Sistolik (mmHg)</label>
                        <select class="form-select" id="tekananDarah" required>
                            <option value="0">< 120 mmHg</option>
                            <option value="0">120-129 mmHg</option>
                            <option value="1">130-139 mmHg</option>
                            <option value="2">140-159 mmHg</option>
                            <option value="3">160-179 mmHg</option>
                            <option value="4">≥180 mmHg</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kolesterol" class="form-label">Kolesterol Total (mg/dL)</label>
                        <select class="form-select" id="kolesterol" required>
                            <option value="0">< 160 mg/dL</option>
                            <option value="1">160-199 mg/dL</option>
                            <option value="2">200-239 mg/dL</option>
                            <option value="3">240-279 mg/dL</option>
                            <option value="4">≥ 280 mg/dL</option>
                        </select>
                    </div>
                    <label>Perokok</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <input type="checkbox" id="merokok" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <input type="text" class="form-control" value="Merokok" aria-label="Text input with checkbox" readonly>
                    </div>
                    <div class="form-group mt-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Hitung Risiko</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-venus-mars"></i></span>
                    <div class="media-body">
                        <h3>Jenis Kelamin</h3>
                        <p id="jkR">-</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-child"></i></span>
                    <div class="media-body">
                        <h3>Usia</h3>
                        <p id="usiaR">-</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-balance-scale"></i></span>
                    <div class="media-body">
                        <h3>BMI</h3>
                        <p id="bmiR">-</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-tint"></i></span>
                    <div class="media-body">
                        <h3>Tekanan Darah</h3>
                        <p id="darahR">-</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-plus"></i></span>
                    <div class="media-body">
                        <h3>Kolesterol</h3>
                        <p id="kolesterolR">-</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa fa-fire"></i></span>
                    <div class="media-body">
                        <h3>Merokok</h3>
                        <p id="merokokR">-</p>
                    </div>
                </div>
                <div class="media contact-info p-4 text-center d-none border border-1 rounded" id="total">
                    <div class="media-body">
                        <h3>Total</h3>
                        <p id="totalR" class="text-dark"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->
</main>

<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        
        var skor = 0;
        
        if(jenisKelamin.value == 1) {
            jkR.innerHTML = 'Pria Skor +3';
            skor += 3;
        }else {
            jkR.innerHTML = 'Wanita Skor +2';
            skor += 2;
        }

        if(parseInt(usia.value) < 30) {
            usiaR.innerHTML = 'USIA < 30 skor +0';
        }else if(parseInt(usia.value) < 35) {
            usiaR.innerHTML = 'USIA < 35 skor +1';
            skor += 1;
        }else if(parseInt(usia.value) < 40) {
            usiaR.innerHTML = 'USIA < 40 skor +2';
            skor += 2;
        }else if(parseInt(usia.value) < 45) {
            usiaR.innerHTML = 'USIA < 45 skor +3';
            skor += 3;
        }else if(parseInt(usia.value) < 50) {
            usiaR.innerHTML = 'USIA < 50 skor +4';
            skor += 4;
        }else if(parseInt(usia.value) < 55) {
            usiaR.innerHTML = 'USIA < 55 skor +5';
            skor += 5;
        }else if(parseInt(usia.value) < 60) {
            usiaR.innerHTML = 'USIA < 60 skor +6';
            skor += 6;
        }else if(parseInt(usia.value) < 65) {
            usiaR.innerHTML = 'USIA < 65 skor +7';
            skor += 7;
        }else if(parseInt(usia.value) < 70) {
            usiaR.innerHTML = 'USIA < 70 skor +8';
            skor += 8;
        }else if(parseInt(usia.value) < 75) {
            usiaR.innerHTML = 'USIA < 75 skor +9';
            skor += 9;
        }else {
            usiaR.innerHTML = 'USIA >= 75x skor +10';
            skor += 10;
        }

        var tb = (parseInt(tinggiBadan.value) /100) * (parseInt(tinggiBadan.value) /100);

        var bmi = parseInt(beratBadan.value) / tb;

        if (bmi < 18.5) {
            bmiR.innerHTML = 'Kurus skor +1';
            skor += 1; // Kurus
        } else if (bmi < 30) {
            bmiR.innerHTML = 'Normal skor +2';
            skor += 2; // Gemuk
        } else if (bmi >= 30) {
            bmiR.innerHTML = 'Obesitas skor +3';
            skor += 3; // Obesitas
        }else {
            bmiR.innerHTML = 'error';
        }

        darahR.innerHTML = tekananDarah.options[tekananDarah.selectedIndex].text + ' skor +' + tekananDarah.value
        kolesterolR.innerHTML = kolesterol.options[kolesterol.selectedIndex].text + ' skor +' + kolesterol.value
        skor += parseInt(tekananDarah.value) + parseInt(kolesterol.value);

        if(merokok.checked) {
            skor += 2;
            merokokR.innerHTML = 'Perokok skor +2';
        }else {
            merokokR.innerHTML = 'Non-Perokok skor +0';
        }

        total.classList.remove('d-none');
        if(skor < 5) {
            // total.classList.add('bg-success');
            totalR.innerHTML = 'SKOR = ' + skor + '<br> <p class="text-white btn btn-success bg-success">Aman</p>';
        }else if(skor < 10) {
            // total.classList.add('bg-warning');
            totalR.innerHTML = 'SKOR = ' + skor + '<br> <p class="text-white btn btn-warning bg-warning">Hati-Hati</p>';
        }else {
            // total.classList.add('bg-danger');
            totalR.innerHTML = 'SKOR = ' + skor + '<br> <p class="text-white btn btn-danger bg-danger">Berbahaya</p>';
        }
        
        
        console.log(tekananDarah.options[tekananDarah.selectedIndex].text);
    });
</script>
@endsection