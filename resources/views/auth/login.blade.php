<x-guest-layout title="login" bodyClass="page-login">

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password"/>
        </div>
        <div class="text-right mb-medium">
            <a href="#" class="auth-page-password-reset">Reset Password</a>
        </div>

        <button class="btn btn-primary btn-login w-full">Login</button>
    </form>

    <x-slot:footerLink>
        <div class="login-text-dont-have-account">
            <a href="{{ route('register') }}"> Click here to create one</a>
        </div>
    </x-slot>
</x-guest-layout>