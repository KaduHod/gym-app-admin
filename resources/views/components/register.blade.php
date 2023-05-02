<form method="post" name="register-form" action="/register"
    class="flex border-black w-96 h-64 flex justify-between flex-col items-center rounded bg-gradient-to-r from-bg-red-600 p-6"
>
    @csrf
        <x-input 
            id='name-register' 
            name="name" 
            placeholder="name" 
            type='text'
            required="required">
        </x-input>
        <x-input 
            id='nickname-register' 
            name="nickname" 
            placeholder="nickname" 
            type='text'
            required="required">
        </x-input>
        <x-input 
            id='email-register' 
            name="email" 
            placeholder="email"
            type='email'
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            required="required">
        </x-input>
        <x-input 
            id='password-register' 
            name="password" 
            placeholder="password" 
            type='password'
            required="required"
            pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^\w\s])(?=\S+$).{6,}$/">
        </x-input>
        <x-input 
            id='password-confirm' 
            name="password-confirmation" 
            placeholder="password confirmation" 
            type='password'
            required="required"
            pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^\w\s])(?=\S+$).{6,}$/">
        </x-input>
        <x-input 
            id='birthdate-register' 
            name="birthdate" 
            type='date'
            required="required"
            pattern='/^(?!\s*$)[0-9]{4}-[0-9]{2}-[0-9]{2}$/'>
        </x-input>
        <x-input 
            id='cellphone-register' 
            name="cellphone" 
            type='tel'
            required="required"
            pattern='/^\d{3}\s\d{5}-\d{4}$/'>
        </x-input>

        <!-- <div class="flex w-full items-center text-white justify-around"> -->
            <!-- <x-radio     -->
                <!-- name="gender"  -->
                <!-- id='male-register'  -->
                <!-- value='male'  -->
                <!-- title='Male born' -->
            <!-- /> -->
            <!-- <x-radio  -->
                <!-- name="gender"  -->
                <!-- id='female-register'  -->
                <!-- value='female'  -->
                <!-- title='Female born' -->
            <!-- /> -->
        <!-- </div> -->
        <div class="w-full flex justify-around items-center h-12  mt-1 mb-1">
            <x-button id="register-button" titulo='Register'/>
            <x-link id='register-link'  titulo='Login' link='/' white='true'/>
        </div>
</form>