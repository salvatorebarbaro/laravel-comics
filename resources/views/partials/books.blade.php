<section id="Fumetti">
    <div class="container">
        <h2 class="fs-2">Current series</h2>
        <div class="contenitore ">
            @foreach($fumetti as $fumetto)
            <div id="card">
             <img src="{{$fumetto['thumb']}}" alt="" class="">   
            <!-- abbiamo inserirot il nome della rotta per la pagina seguente -->
            <a href="fumetto" class=" text-white ">{{$fumetto['title']}}</a>
                
            </div>
            @endforeach    

            
        </div>
        <div id="button">
            <button>Load more</button>
        </div>
            
        
        
        
    </div>
</section>

