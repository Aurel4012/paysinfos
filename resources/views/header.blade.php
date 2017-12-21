<nav>
          <h2>Une autre recherche ?</h2>

          <form method="POST" action="{{url('/result')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            

            <select name="tag" class="mdb-select mx-auto mt-3">
                <option value="name">Pays</option>
                <option value="capital">Capitale</option>
                <option value="region">Région</option>
            </select>
                

            <input placeholder="Recherche en Anglais" name="search" type="text" class="mx-auto">

            <button class="btn btn-success mt-5" type="submit">Recherchez</button>
          </form>
</nav>