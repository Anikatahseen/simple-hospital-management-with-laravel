<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadein animated" style="visibility: visible; font-size:2.5rem; font-weight:700;">Our Doctors</h1>

        <div class="owl-carousel wow fadein animated" id="doctorSlideshow">


            @foreach($doctors as $doctor)

            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img height="300px !important" src="doctorimage/{{$doctor->image}}" alt="">
                    <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                    </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$doctor->name}}</p>
                        <span class="text-sm text-grey">{{$doctor->specality}}</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
