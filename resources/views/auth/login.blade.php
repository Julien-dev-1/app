    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div role="main">
        <div class="SVG-hight-ligth">
            <svg id="rocket-smoke" alt="Rocket Ship Smoke" xmlns="http://www.w3.org/2000/svg" width="256.119" height="403.632" viewBox="0 0 516.119 1083.632">
                <path id="Path_40" data-name="Path 40" d="M644.6,141S143.02,215.537,147.049,870.207s342.774,201.755,342.774,201.755S404.659,847.213,388.815,762.2c-27.116-145.51-11.551-384.124,271.9-609.1C671.15,139.365,644.6,141,644.6,141Z" transform="translate(-147.025 -140.939)" fill="#f5f5f5"/>
            </svg>
        </div>
        <div class = 'svg-higth-ligth'>
            <svg id="clouds" alt="Gray Clouds Background" xmlns="http://www.w3.org/2000/svg" width="1211.084" height="485.677" viewBox="0 0 2611.084 485.677">
                <path id="Path_39" data-name="Path 39" d="M2379.709,863.793c10-93-77-171-168-149-52-114-225-105-264,15-75,3-140,59-152,133-30,2.83-66.725,9.829-93.5,26.25-26.771-16.421-63.5-23.42-93.5-26.25-12-74-77-130-152-133-39-120-212-129-264-15-54.084-13.075-106.753,9.173-138.488,48.9-31.734-39.726-84.4-61.974-138.487-48.9-52-114-225-105-264,15a162.027,162.027,0,0,0-103.147,43.044c-30.633-45.365-87.1-72.091-145.206-58.044-52-114-225-105-264,15-75,3-140,59-152,133-53,5-127,23-130,83-2,42,35,72,70,86,49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33,61.112,8.015,113.854-5.72,150.492-29.764a165.62,165.62,0,0,0,110.861-3.236c47,94,178,113,251,33,31.385,4.116,60.563,2.495,86.487-3.311,25.924,5.806,55.1,7.427,86.488,3.311,73,80,204,61,251-33a165.625,165.625,0,0,0,120,0c51,13,108,15,157-5a147.188,147.188,0,0,0,33.5-18.694,147.217,147.217,0,0,0,33.5,18.694c49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33C2446.709,1093.793,2554.709,922.793,2379.709,863.793Z" transform="translate(142.69 -634.312)" fill="#eee"/>
            </svg>
        </div>
    </div>
    <div class="container">
    <div class="login-content">
            <div class="_from-less">
            <div class="container form-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class = "login-form">
                    <h3 class="login-form">Se connecter</h3>
                    <div class="bold bottom color-black">
                        Pas encore de compte sur valintanana?
                            <a class="dropdown-item nav-link" href="{{ route('register') }}" >
                                <strong class="color-green">S' inscrire</strong>
                            </a>
                    </div>
                    <br>

                    <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder = "Votre email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required placeholder="Mot de passe" autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                <div class="align-text-rigth">
                        @if (Route::has('password.request'))
                            <a class =" link-over" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié?') }}
                            </a>
                        @endif
                </div>
                <div >
                    <div>
                        <button type="submit" class="btn submit-login">
                            {{ __('Se connecter') }}
                        </button>
                    </div>
                </div>
                </form>
                <div class="at-share-btn-elements">
                    <a role="button" tabindex="0" (click) = 'facebookLogin()' class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 6px;">
                    <span class="at4-visually-hidden">Share to Facebook</span>
                    <span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
                        <title id="at-svg-facebook-1">Facebook</title>
                        <g>
                            <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                        </g>
                        </svg>
                    </span>
                    <span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">
                        Facebook
                    </span>
                    </a>
                    <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 6px;">
                    <span class="at4-visually-hidden">
                        Share to Twitter
                    </span>
                    <span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
                        <title id="at-svg-twitter-2">Google</title>
                        <g>
                            <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                        </g>
                        </svg>
                    </span>
                    <span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">Twitter</span>
                    </a>
                    <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-whatsapp" style="background-color: rgb(77, 194, 71); border-radius: 6px;">
                    <span class="at4-visually-hidden">
                        Share to WhatsApp
                    </span>
                    <span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-whatsapp-3" class="at-icon at-icon-whatsapp" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
                        <title id="at-svg-whatsapp-3">WhatsApp</title>
                        <g>
                            <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                        </g>
                        </svg>
                    </span>
                    <span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">WhatsApp</span>
                    </a>
                </div>
            </div>
            </div>
        </div>

