
  
        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="La Molisana">
        <nav>
            <ul>
                <li><a class="{{(url()->current() == route('home')) ? 'active' : ''}} " href="{{route('home')}}">Home</a></li>
                <li><a class="{{(url()->current() == route('prodotti')) ? 'active' : ''}} " href="{{route('prodotti')}}">Prodotti</a></li>
                <li><a class="{{(url()->current() == route('contatti')) ? 'active' : ''}} " href="{{route('contatti')}}">Contatti</a></li>
            </ul>
        </nav>


  
   