<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/f4bd9d981a.js" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        .body-bg {
            background-color: #2a8fee;
        }
    </style>
</head>

<body>
    <section>
        <div class="absolute inset-0 z-0 bg-cover bg-top bg-fixed sm:bg-top sm:bg-fixed md:bg-top md:bg-fixed">
            <img src="/Assets/Image/Profile-login.jpg" alt=""
                class="md:bg-top xl:bg-top w-full h-full object-cover filter blur-md" />
        </div>
        <div class="absolute inset-0 bg-black opacity-30 top-0 left-0"></div>
        <div class="h-screen flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="bg-white rounded-lg shadow-md w-full md:w-1/2 lg:w-1/3 md:mt-0 sm:max-w-md xl:p-0 z-10 md:mx-auto lg:mx-0 sm:mx-auto"
                style="box-shadow: 1px 1px #c7c7c7">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-600 md:text-2xl text-center font-body"
                        style="font-family: 'Poppins', sans-serif">
                        Login Admin
                    </h1>
                    <form class="space-y-4 md:space-y-4" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-600 font-body">Your
                                email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300
                                text-gray-900 sm:text-sm rounded-lg
                                focus:ring-gray-600 focus:border-gray-500 block
                                font-body w-full p-2.5 outline-none
                                placeholder=" name@company.com" required="" style="font-family: 'Poppins',sans-serif;">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 font-body"
                                style="font-family: 'Poppins', sans-serif">Password</label>
                            <div class="relative">
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm font-body rounded-lg focus:ring-gray-600 focus:border-gray-500 block w-full p-2.5 outline-none"
                                    required style="
                                            font-family: 'Poppins', sans-serif;
                                        " />
                                <span onclick="togglePasswordVisibility()"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 focus:outline-none">
                                    <i id="toggle-password-icon" class="fas fa-eye text-gray-500 cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 dark:focus:ring-primary-600"
                                        required="" style="
                                                font-family: 'Poppins',
                                                    sans-serif;
                                            " />
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 font-body" style="
                                                font-family: 'Poppins',
                                                    sans-serif;
                                            ">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-400 hover:bg-blue-700 focus:ring-4 font-body focus:outline-none font-medium rounded-lg text-base px-5 py-2.5 text-center duration-300"
                            style="font-family: 'Poppins', sans-serif">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePasswordVisibility() {
            let passwordInput = document.getElementById("password");
            let togglePasswordIcon = document.getElementById(
                "toggle-password-icon"
            );

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePasswordIcon.classList.remove("fa-eye");
                togglePasswordIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                togglePasswordIcon.classList.remove("fa-eye-slash");
                togglePasswordIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

<!-- class="bg-cover bg-top bg-fixed : sm:bg-top sm:bg-fixed md:bg-top md:bg-fixed" style="
            background-image: url('/Assets/Image/Profile-login.jpg');
            opacity: 0.9; -->

</html>