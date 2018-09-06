<!DOCTYPE html>
<html>
@extends('layouts.header')
@section('title', 'EWC[Admin] - Login')

<body>
<div class="log-w3">
<div class="w3layouts-main">
    <h2>ADMIN</h2>
        <form action="login_verify.php" method="post">
            <input type="username" class="ggg" name="username" id="username" placeholder="USERNAME" required="">
            <input type="password" class="ggg" name="password" id="password" placeholder="PASSWORD" required="">

                <input type="submit" value="Sign In" name="login">
        </form>
</div>
</div>
</body>
@extends('layouts.footer')
</html>
