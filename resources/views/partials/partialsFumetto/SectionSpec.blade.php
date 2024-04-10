<?php
$autori=[
    "José Luis García-López",
  "Clay Mann",
  "Rafael Albuquerque",
  "Patrick Gleason",
  "Dan Jurgens",
  "Joe Shuster",
  "Neal Adams",
  "Curt Swan",
  "John Cassaday",
  "Olivier Coipel",
  "Jim Lee",

];
$disegnatori=[  
"Scott Williams",
"George Pérez",
"Jerry Ordway",
"Mike Wieringo",
"Phil Jimenez",
"Ivan Reis",
"Gary Frank",
"Andy Kubert",
"Adam Hughes",
"Frank Quitely",
"Matt Wagner",
"Dave Gibbons",
"Alan Moore",
"Grant Morrison",
"Marv Wolfman",
"Len Wein",
"Denny O'Neil",
"Elliot S! Maggin",
"Julius Schwartz",
"Mort Weisinger",
"Whitney Ellsworth",
"Jerry Siegel",
"Joe Shuster"
]

 ?>

<div class="contenitore_specifiche">
    <div id="contenitore_elementi" >
        <div id="element_head">
            <div id="Container_talent">
                <h3>Talent</h3>
                <div class="Series contenitore" id="container_art">
                    <span class="identity " style="white-space: nowrap;">Art by:</span>
                    <span class="disastro" style="text-transform: uppercase; color:#00A9D9;">
                        <!-- ciclo usato per inserire comodamente i nomi all'interno della variabile autori e abbiamo usato una condizione particolare ovvero il ciclo continuava finche non eravamo all'ultima tutto cio grazie a (!$loop->last) -->
                        @foreach($autori as $autore)
                        {{ $autore }}@if (!$loop->last), @endif
                        @endforeach
                     </span>
                </div>
                <div class="bordo contenitore" id="container_art">
                    <span class="identity ">Written by:</span>
                    <span class="disastro" style="text-transform: uppercase; color:#00A9D9;">
                    <!-- ciclo usato per inserire comodamente i nomi all'interno della variabile autori e abbiamo usato una condizione particolare ovvero il ciclo continuava finche non eravamo all'ultima tutto cio grazie a (!$loop->last) -->
                    @foreach($disegnatori as $disegnatore)
                        {{ $disegnatore }}@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

            </div>
            
                
                <div id="Container_Specs">
                    <h3>Specs</h3>
                    <div class="contenitore Series">
                        <span class="identity">Series:</span>
                        <span id="tipo" style="text-transform: uppercase; color:#00A9D9;">{{$signleFumetto['type']}}</span>
                    </div>
                    <div class="contenitore Price bordo">
                        <span class="identity ">U.S. Price:</span>
                        <span id="tipo">{{$signleFumetto['price']}}</span>
                                        
                    </div>
                    <div class="contenitore date bordo">
                        <span class="identity ">On Sale Date:</span> 
                        <span id="tipo">{{$signleFumetto['sale_date']}}</span>
                    </div>
                </div>
                

            

        </div>
        
    </div>
    

</div>