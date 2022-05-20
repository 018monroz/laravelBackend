<!--header-->
<header>
		<div class="header">

			<div class="header-top">
				<div class="container">
					<div class="head-top">
						<div class="logo">

							<h1><a href="index.html"><span> C</span>hur <span>G</span>ames</a></h1>

						</div>
						<div class="top-nav">
							<span class="menu"><img src="images/menu.png" alt=""> </span>

							<ul>
								<li class="active"><a class="color1" href="index.html">Inicio</a></li>
								<li><a class="color2" href="games.html">Juegos</a></li>
								<li><a class="color3" href="registro"  >API</a></li>
								<li><a class="color5" href="blog.html">Blog</a></li>
								<li><a class="color6" href="contact.html">Contacto</a></li>
								<div class="clearfix"> </div>
							</ul>

							<!--script-->
							<script>
								$("span.menu").click(function () {
									$(".top-nav ul").slideToggle(500, function () {
									});
								});
							</script>

						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--banner-->

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
