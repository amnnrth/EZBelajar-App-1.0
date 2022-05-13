<div class="hidden modal overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="registerModal" >
    <div class="relative w-128 my-6 mx-auto max-w-md">
        <!--content-->
        <div class="border-0 rounded-xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">

            <!--header-->
            <div class="p-5 rounded-t-xl text-center mt-5 mx-10">
                <h3 class="text-2xl font-semibold">
                    Daftar EZBelajar
                </h3>
                <p class="text-gray-400 mt-1 text-sm">
                    Bergabung menjadi member
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}">

            @csrf

            <!--body-->
                <div class="relative p-6 flex-auto mx-10">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm mb-2" for="name">
                            Nama Lengkap
                        </label>

                        <input name="name" class="appearance-none border border-gray-300 rounded-lg w-80 py-3 px-4 placeholder-serv-text text-xs" id="name" type="text" placeholder="Your name" required>

                        @if ($errors->has('name'))
                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm mb-2" for="email">
                            Email
                        </label>

                        <input name="email" class="appearance-none border border-gray-300 rounded-lg w-80 py-3 px-4 placeholder-serv-text text-xs" id="email" type="email" placeholder="name@domain.com" required>

                        @if ($errors->has('email'))
                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div>
                        <label class="block text-grey-darker text-sm mb-2" for="password">
                            Kata Sandi
                        </label>

                        <input name="password" class="appearance-none border border-gray-300 rounded-lg w-80 py-3 px-4 placeholder-serv-text text-xs mb-3" id="password" type="password" placeholder="At least 8 characters" required>

                        @if ($errors->has('password'))
                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div>
                        <label class="block text-grey-darker text-sm mb-2" for="password_confirmation">
                            Konfirmasi Kata Sandi
                        </label>

                        <input name="password_confirmation" class="appearance-none border border-gray-300 rounded-lg w-80 py-3 px-4 placeholder-serv-text text-xs mb-3" id="password_confirmation" type="password" placeholder="At least 8 characters" required>

                        @if ($errors->has('password_confirmation'))
                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="inline-block text-xs text-gray-400">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-serv-button rounded border-serv-text"><span class="ml-2 text-gray-400">Saya Setuju dengan  <a href="#" class="text-blue-button">Syarat dan ketentan</a></span>
                            </label>
                        </div>
                    </div>
                </div>

                <!--footer-->
                <div class="px-6 pb-6 rounded-b-xl mx-10">
                    <input type="hidden" name="auth" value="true">

                    <button class="block text-center lg:bg-serv-services-bg text-white text-lg py-3 px-12 my-2 ml-23 rounded-lg w-36">
                        Daftar
                    </button>

                    <p href="#" class="ml-23 py-5">
                        Sudah Punya Akun? </br><a href="#" class="text-blue-button ml-22" onclick="toggleModal('loginModal');toggleModal('registerModal') ">Masuk</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="hidden opacity-75 fixed inset-0 z-40 bg-black" id="registerModal-backdrop"></div>
