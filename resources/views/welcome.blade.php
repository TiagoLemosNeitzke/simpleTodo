<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Montserrat:ital,wght@0,700;1,600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-full h-screen">

<header class="bg-[#06604e]">
    <nav class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4 flex justify-between">
        <!-- For large and Medium-sized Screen -->
        <div class="flex justify-between w-full">
            <div class="flex space-x-3 items-center">
                <x-application-logo class="w-8 h-8 fill-white text-gray-500" />
                <h1 class=" font-normal text-2xl leading-6 text-white " >To do</h1>
            </div>
            <div class="hidden sm:flex flex-row space-x-4">
                <a href="{{ route('login') }}" class="rounded-md flex space-x-2 w-24 h-10 font-semibold text-sm leading-3 text-white border border-white focus:outline-none focus:ring-2 focus:ring-offset-2 hover:bg-white hover:text-[#06604e] duration-150 justify-center items-center" >Entrar</a>
                <a href="{{ route('register') }}" class="rounded-md flex space-x-2 w-24 h-10 font-semibold text-sm leading-3 text-white bg-[#de8609] hover:bg-[#cf7d08] focus:outline-none duration-150 justify-center items-center" >Registre-se</a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <!-- Burger Icon -->
            <div id="bgIcon"  class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800  flex justify-center items-center sm:hidden cursor-pointer">
                <svg @click="open =! open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </div>
            <!-- Mobile and small-screen devices (toggle Menu) -->
            <div x-show="open" id="MobileNavigation" class=" mt-4">
                <div class="flex flex-col gap-4 mt-4">
                    <a href="{{ route('login') }}" class="rounded-md flex space-x-2 w-16 h-8 font-normal text-xs leading-3 text-white border border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-indigo-600 duration-150 justify-center items-center px-2" >Entrar</a>
                    <a href="{{ route('register') }}" class="rounded-md flex space-x-2 w-20 h-8 font-semibold text-xs leading-3 text-emerald-700 bg-white focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Registre-se</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-[#06604e] h-80 w-full flex flex-col justify-center items-center">
        <div class="container flex flex-col mx-auto text-center">
            <h1 class="text-white font-black text-3xl mt-16">Crie Suas listas de tarefas</h1>
            <p class="text-white font-thin text-xs md:text-sm  justify-center flex mt-6">Seja avisado quando haver tarefas para realizar</p>
        </div>
        <div class="mt-4 md:mt-8 flex flex-col md:flex-row md:justify-around md:w-80">
            <a href="#readMore" class="bg-white text-[#06604e] font-medium px-4 py-1 hover:bg-slate-200">Saiba mais</a>
            <a href="{{ route('register') }}" class="mt-4 md:mt-0 text-white font-medium px-4 py-1  bg-[#de8609] hover:bg-[#cf7d08] duration-150" >Teste Grátis</a>
        </div>
    </div>
</header>

<main class="text-center w-full mt-4 flex flex-col justify-center items-center">
    <div class="">
        <h2 class="text-[#06604e] font-black md:text-3xl md:mt-12">Organize seu dia</h2>
        <p class="mx-auto text-xs px-4 pt-2 font-thin md:mt-4 md:font-normal md:text-base md:w-2/3">Nós podemos te ajudar a organizar seu dia. Deixe sua mente ocupada somente com o que interessa.</p>
    </div>

    <div class="w-full px-8">
        <div class="flex flex-col md:flex-row justify-around items-center md:mt-12">
            <div class="flex flex-col text-start">
                <h2 class="text-[#06604e] font-bold mt-6 md:text-lg">Teste grátis</h2>
                <p class="font-thin text-[14px] md:mt-4 md:font-normal md:text-sm md:w-80">Teste por 30 dias gratuitamente, não será feito nenhuma cobrança em seu cartão de crédito durante o período de teste. Cancele quando quiser.</p>
            </div>
            <div class="w-48 md:w-1/3 mt-6 h-48 border-[#06604e] border-[0.625px]">
                <h4 class="text-[#06604e] font-bold mt-6 md:text-lg">Plano único *</h4>
                <div class="flex flex-row justify-around items-center border border-[#de8609] mx-8 mt-4 shadow-md shadow-[#de8609]">
                    <h4 class="font-bold text-xl font-serif">R$ 19,90</h4>
                    <div class="flex flex-col items-center py-4">
                        <p class="font-thin text-[14px] text-xs md:text-sm">Cobrado mensalmente</p>
                        <p class="font-thin text-[14px] text-xs md:text-sm">Tenha total acesso</p>
                    </div>
                </div>
                <span class="text-[14px]">* Cancele quando quiser</span>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-around items-center w-full md:mt-12">
            <div class="flex flex-col justify-center items-center w-48 md:w-1/3 mt-6 h-48 border-[#06604e] border-[0.625px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#06604e]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                </svg>
                <p class="font-thin text-[14px] md:mt-4 md:font-normal md:text-sm">Olá! Você tem tarefas agendadas para hoje.</p>
            </div>
            <div class="flex flex-col text-start">
                <h2 class="text-[#06604e] font-bold mt-6 md:text-lg">Receba notificações</h2>
                <p class="font-thin text-[14px] md:mt-4 md:font-normal md:text-sm md:w-80">Você pode criar listas do que quiser, nós enviaremos uma mensagem SMS no seu celular e um email sempre que houver tarefas a serem realizadas.</p>
            </div>
        </div>
    </div>

    <div id="readMore" class="bg-slate-200 w-full mt-20 flex flex-col items-center space-y-12">
        <h4 class="text-[#06604e] font-black md:text-3xl md:mt-12">Porque Todo?</h4>

        <div class="flex flex-col md:flex-row md:space-x-20">
            <div class="flex flex-col justify-center items-center mt-12 w-48 space-x-4">
                <div class="p-4 bg-[#de8609] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <h5 class="text-[#06604e] text-lg">Independência</h5>
                <p class="text-xs mt-2">Defina suas tarefas, faça sua própria programação. Assuma o controle do seu equilíbrio entre vida profissional e pessoal e concentre-se no essencial.</p>
            </div>
            <div class="flex flex-col justify-center items-center mt-12 w-48 space-x-4">
                <div class="p-4 bg-[#de8609] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <h5 class="text-[#06604e] text-lg">Tranquilidade</h5>
                <p class="text-xs mt-2">Cuidamos para que você não se esqueça de nenhuma tarefa. Nós lembraremos você para que você se ocupe com as coisas que realmente interessam.</p>
            </div>
            <div class="flex flex-col justify-center items-center mt-12 w-48 space-x-4">
                <div class="p-4 bg-[#de8609] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                    </svg>

                </div>
                <h5 class="text-[#06604e] text-lg">Transparência</h5>
                <p class="text-xs mt-2">Temos orgulho do que fazemos e não temos nada a esconder. Fazemos o nosso melhor para compartilhar de forma justa o valor que nossa comunidade ajuda a criar.</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:space-x-20">
            <div class="flex flex-col justify-center items-center mt-12 w-48 space-x-4">
                <div class="p-4 bg-[#de8609] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                    </svg>

                </div>
                <h5 class="text-[#06604e] text-lg">Clientes satisfeitos</h5>
                <p class="text-xs mt-2">Temos orgulho de dizer que nossos clientes são muito satisfeito com nosso app. Buscamos sempre adicionar novas funcionalidades sempre que recebemos um feedback.</p>
            </div>
            <div class="flex flex-col justify-center items-center mt-12 w-48 space-x-4">
                <div class="p-4 bg-[#de8609] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                    </svg>

                </div>
                <h5 class="text-[#06604e] text-lg">Confiabilidade</h5>
                <p class="text-xs mt-2">Seus dados estarão protegidos. Não compartilhamos nenhum dado de cliente com outras aplicações. Fique tranquilo.</p>
            </div>
            <div class="flex flex-col justify-center items-center mt-12 w-48 space-x-4">
                <div class="p-4 bg-[#de8609] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>

                </div>
                <h5 class="text-[#06604e] text-lg">Tarefa realizada</h5>
                <p class="text-xs mt-2">Marque suas tarefas como realizadas. Mantenha um histórico de tudo o que você realizou.</p>
            </div>
        </div>
        <div class="text-center flex flex-col pb-24">
            <p class="text-slate-400 text-lg">Pronto para começar?</p>
            <a href="{{ route('register') }}" class="mt-4 text-white font-medium px-4 py-1  bg-[#de8609] hover:bg-[#cf7d08] duration-150" >Registre-se</a>
        </div>
    </div>
</main>

<footer class="w-full bg-[#06604e] h-80 absolute flex flex-col items-center justify-center pb-4">
    <div class="bg-[#de8609] relative mt-[-100px] w-8/12 h-40 text-start items-center flex flex-col md:flex-row md:justify-around justify-center">
        <div>
            <h4 class="text-[#06604e] font-bold md:text-2xl">Organize seu dia.</h4>
            <p class="text-xs mt-1">Teste Grátis por 30 dias.</p>
        </div>
        <a href="{{ route('register') }}" class="bg-white text-[#06604e] text-xs md:text-base px-4 py-1 mt-4 font-semibold hover:bg-slate-200">Comece agora!</a>
    </div>
    <div class="flex flex-col md:flex-row justify-between w-8/12 mt-12">
        <div>
            <x-application-logo class="w-8 h-8 fill-white text-gray-500" />
            <p class="text-white text-xs font-light"> Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            <p class="text-white text-xs font-light">&copy; {{ date_format(now(), 'Y') }} Todo Company</p>
            <a href="mailto:tiago.neitzke@yahoo.com"  class="text-white text-xs font-light hover:underline">tiago.neitzke@yahoo.com</a>
        </div>
        <div class="mt-2 md:mt-0">
            <p class="text-white text-xs font-light mb-2">Não encontrou o que procurava?</p>
            <a href="mailto:tiago.neitzke@yahoo.com"  class="text-white text-xs font-normal hover:bg-[#cf7d08] bg-[#de8609] py-1 px-2">Envie um e-mail</a>
        </div>

    </div>
    <div class="flex flex-row justify-between w-8/12 mt-6">
        <div>
            <p class="flex text-white text-[12px] font-light">
                Feito com
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 w-3 h-3 text-pink-700">
                    <path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
                </svg>
            </p>
        </div>

        <div class="flex justify-between w-1/12">
            <a href="https://www.linkedin.com/in/tiago-lemos-neitzke/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin text-sky-600 hover:text-white" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
            </a>

            <a href="https://twitter.com/LemosNeitzke" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter text-sky-600 hover:text-white" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
            </a>

            <a href="https://wa.me/5567999082296" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp  text-emerald-600 hover:text-white" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

</body>
</html>
