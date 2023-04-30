<div 
    class="flex border-black w-96 h-64 flex justify-between flex-col items-center rounded bg-gradient-to-r from-bg-red-600 p-6"
>
    <x-input id='email' name="email-login" placeholder="Email"></x-input>
    <x-input id='password' name="password-login" placeholder="Password" type='password'></x-input> 
    <div class="
        w-full flex justify-around items-center h-12
    ">
        <x-button id="login-button" titulo='Login'/>
        <x-link id='register-link' titulo='Sign-up' link='/register' white='true'/>
    </div>
</div>