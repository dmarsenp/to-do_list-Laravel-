<div>
    <div>

        @include('layouts.navbar2')
        <div class="bg-white border-b border-gray-100 py-12 min-h-screen">

        <div class="flex items-center">
            <div class="mx-auto">
                <img src="{{asset('image/home.png')}}" class="w-11/12">
            </div>

            <div class="mx-auto">

                <div class="py-2 text-lg">
                    Username
                </div>

                <input type="text" class="p-2 bg-hijau">

                <div class="py-2 text-lg">
                    Password
                </div>

                <input type="password" class="p-2 bg-hijau">

                <div class="text-sm text-right py-14">
                    Forgot password?
                </div>

                <button class="bg-hijau w-full h-12 my-12">
                    Login
                </button>
            </div>



        </div>

    </div>

 </div>

