<div class="text-white bg-secondary mb-3 text-center h-100">
    <form action="{{path('search')}}" method="post" class="loginForm">

        <div class="card-header">Rechercher un(e) utilisateur(rice)</div>
        <div class="card-body row justify-content-center">
            <div class="col-md-8">
                <label for="search">Nom et/ou Prénom :</label>
                <input type="search" name="search" id="search" class="form-control mb-3">
                <button type="submit" class="btn btn-light mb-3">Rechercher</button>
            </div>   
        </div> 

</form>
    
</div>
        
