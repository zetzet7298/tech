<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
body{
    background:#eee;
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}
</style>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="{{display_image($item->photo)}}" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-1">
                    {{-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> --}}
                    <h5 class="mt-2 mb-0">{{$item->first_name}}</h5>
                    <p class="mb-0">{{$item->email}}</p>
                    <ul class="social-list mt-1">
                        @foreach ($item->specialties as $specialty)
                            <li class="list-group-item">{{ $specialty->name }}</li>
                        @endforeach
                    </ul>
                    
                    <div class="px-4 mt-1">
                        <p class="fs-6">{{$item->introduction}}</p>
                    
                    </div>
                    
                     {{-- <ul class="social-list">
                        <li><i class="fa fa-facebook"></i>asd</li>
                        <li><i class="fa fa-dribbble"></i>asd</li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul> --}}

                    
                    <div class="buttons">
                        
                        <a class="btn btn-outline-primary px-4" href="tel:+{{$item->phone}}">Liên hệ</a>
                        {{-- <button class="btn btn-primary px-4 ms-3">Liên hệ</button> --}}
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>