<form class="loginForm" action="{{path('login')}}" method="POST">
    <div class="row row-flex justify-content-center align-self-end">
        <div class="col-md-auto mb-3">
            <input type="text" class="form-control" name="_username" id="username" value="{{last_username}}" placeholder="Email" required>
        </div>    
        <div class="col-md-auto mb-3">       
            <input type="password" class="form-control mb-3" name="_password" id="password" placeholder="Mot de Passe" required>
        </div>
        <div class="col-md-auto formSubmit mb-3">         
            <button type="submit" class="btn btn-primary">Me connecter</button>
        </div>            
    </div>
</form>
</div>