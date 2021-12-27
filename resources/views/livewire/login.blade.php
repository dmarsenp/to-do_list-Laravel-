<div>
    <div>

        @include('layouts.navbar2')
        <div class="bg-white border-b border-gray-100 py-12 min-h-screen">

        <div class="flex items-center pt-4">
            <div class="mx-auto pt-5">
                <img src="{{asset('image/home.png')}}" class="w-11/12">
            </div>

            <div class="mx-auto pt-3">

                <div class="py-2 text-lg">
                    Username
                </div>

                <input type="text" class="p-2 bg-hijau w-32" style="width: 300px">

                <div class="py-2 text-lg pt-4">
                    Password
                </div>

                <input type="password" class="p-2 bg-hijau" style="width: 300px">

                <div class="flex items-center py-14 gap-10 pt-2 ">
                    <div class=""><input type="checkbox" class="appearance-none checked:bg-blue-500 ..." /> Remember me</div>
                    <div class="px-5">Forgot password?</div>
                </div>

                <div class="flex h-screen pt-4 px-5 mx-5">
                        <button class="mx-7 h-12 my-11 bg-hijau text-white" style="width: 100px">
                            Login
                        </button>
                </div>



            </div>



        </div>

    </div>

 </div>

