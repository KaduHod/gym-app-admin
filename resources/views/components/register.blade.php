<form method="post" name="register-form"
    class="flex border-black w-96 h-64 flex justify-between flex-col items-center rounded bg-gradient-to-r from-bg-red-600 p-6"
>
    @csrf
        <x-input id='name-register' name="name-register" placeholder="name" type='text'></x-input>
        <x-input id='username-register' name="username-register" placeholder="username" type='text'></x-input>
        <x-input id='email-register' name="email-register" placeholder="email"></x-input>
        <x-input id='password-register' name="password-register" placeholder="password" type='password'></x-input>
        <x-input id='password-confirm' name="password-confirmation-register" placeholder="password confirmation" type='password'></x-input>
        <x-input id='birthdate-register' name="birthdate-register" type='date'></x-input>
        <div class="flex w-full items-center text-white justify-around">
            <x-radio name="gender" id='male-register' value='male' title='Male'/>
            <x-radio name="gender" id='female-register' value='female' title='Female'/>
        </div>
        <div class="w-full flex justify-around items-center h-12  mt-1 mb-1">
            <x-button id="register-button" titulo='Register'/>
            <x-link id='register-link'  titulo='Login' link='/' white='true'/>
        </div>
</form>