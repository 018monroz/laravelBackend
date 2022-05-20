<link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/component.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/log.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

<!--header-->
<header>
		<div class="header">

			<div class="header-top">
				<div class="container">
					<div class="head-top">
						<div class="logo">
                            
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

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1>
                REGISTRESE
</h1>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<div class="footer">


<p class="footer-class">&copy; 2022 Chur Games. Diseñado por <a href="mailto:juanpamoro18@gmail.com" target="_blank">Juan Pablo Montoya</a>
</p>

</div>