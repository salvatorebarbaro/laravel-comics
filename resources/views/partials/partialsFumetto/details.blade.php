<div id="container">
    <div id="container_details">
        <div id="container_elements">
            <h2>{{$signleFumetto['title']}}</h2>
            <div id="section_green">
                <div id="section_price">
                    <div id="section_price_inside">
                        <span>u.s. price:</span>
                        <div id="price">{{$signleFumetto['price']}}</div>
                    </div>
                    
                    <div id="disponibility">available</div>
                </div >
                <div id="check_aviability">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Check availablity
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">available</a></li>
                            <li><a class="dropdown-item" href="#">not available</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
            <p>{{$signleFumetto['description']}}</p>

        </div>
        <div id="section_adv">
            <span>advertisement</span>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
        
        
    </div>
</div>