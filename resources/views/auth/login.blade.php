<section id="logForm">
    <form id="form-login" method="POST" action="/auth/login">
        <label for="email">e-mail</label>
        <input type="email" name="email"/><br>
        <label for="password">password</label>
        <input type="password" name="password"/><br>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/><br>
        <div id="lower">
            <input type="submit" value="Enter" name="autorization"/>
        </div>
    </form>
</section>
