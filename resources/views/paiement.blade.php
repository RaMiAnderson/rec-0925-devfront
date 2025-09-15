<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Paiement</title>

	<!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFFFFF] ">
	<header class="w-full h-[242px] bg-[#FFFFFF]" >
		<div class="w-full h-[50%] sm:relative ">
			<img src="/images/logo-2.png" alt="logo-2" class="w-[312px] h-[78px] sm:absolute top-[24px] left-[131px]">
		</div>
		<div class="w-full h-[50%] bg-no-repeat bg-left-top shadow-[0px_3px_14px_#00000029] sm:relative">
			<p class="absolute left-[139px] top-[42px] text-[#36578A] text-left tracking-[0px] font-bold text-[33px] leading-[40px] font-lato ">Test psychotechnique pour permis de conduire à Montgeron</p>
		</div>
	</header>
	<main class="pl-[139px] pr-[138px] relative mt-[65px] flex sm:justify-between">
		<div class="w-[60%] h-[1500px] ">
			<p class="text-left font-bold text-[31px] leading-[38px] tracking-[0px] text-[#383838] font-lato">Confirmer</p>
		</div>
		<div class="w-[650px] right-[138px] h-[650px] fixed bg-amber-800">

		</div>
	</main>

</body>
</html>