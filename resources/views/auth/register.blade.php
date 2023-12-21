<x-layout>
    <div class="container">
        <form action="{{route('register')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Conferma Password</label>
          <input type="password" class="form-control" id="password" name="password_confirmation">
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Inserisci immagine per il profilo</label>
            <input type="file" name="img" class="form-control" id="img" name="img" >
        </div>
        <button type="submit" class="btn btn-primary">Iscriviti</button>
      </form>
    </div>
</x-layout>