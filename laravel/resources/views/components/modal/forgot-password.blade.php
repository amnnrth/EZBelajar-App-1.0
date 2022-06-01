<div class="hidden modal overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="forgot-password" >
    <div class="relative w-128 my-6 mx-auto max-w-md">
        <!--content-->
        <div class="border-0 rounded-xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!--header-->
            <div class="p-5 rounded-t-xl text-center mt-5 mx-10">
                <h3 class="text-2xl font-semibold">
                    LUPA PASSWORD EZBELAJAR
                </h3>
                <p class="text-gray-400 mt-1 text-sm">
                    Masukan Email
                </p>
            </div>

            <form method="POST" action="{{ route('password.email') }}">

            @csrf

            <!--body-->
                <div class="relative p-6 flex-auto mx-10">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm mb-2" for="{{ __('Email') }}">
                            Email
                        </label>

                        <input class="appearance-none border border-gray-300 rounded-lg w-80 py-3 px-4 placeholder-ezb-text text-xs" type="email" name="email" :value="old('email')"  autofocus id="email" placeholder="name@domain.com" required>

                        @if ($errors->has('email'))
                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    
                </div>

                <!--footer-->
                <div class="px-6 pb-6 rounded-b-xl mx-10">
                    <input type="hidden" name="auth" value="true">

                    <button class="block text-center lg:bg-ezb-services-bg text-white text-lg py-3 px-12 my-2 ml-23 rounded-lg w-36 ml-21">
                        Lupa
                    </button {{ __('Email Password Reset Link') }}>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="hidden opacity-75 fixed inset-0 z-40 bg-black" id="forgot-password-backdrop"></div>
