<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réservation</title>

	<!-- Styles -->
    @vite('resources/css/app.css')
	<style>
		
	</style>
</head>
<body class="bg-[#F2F3F5] w-[1920px]">
	<header class="w-full h-[242px] bg-[#FFFFFF]" >
		<div class="w-full h-[50%] sm:relative ">
			<img src="/images/logo-2.png" alt="logo-2" class="w-[312px] h-[78px] sm:absolute top-[24px] left-[131px]">
		</div>
		<div class="w-full h-[50%] bg-no-repeat bg-left-top shadow-[0px_3px_14px_#00000029] sm:relative">
			<p class="absolute left-[139px] top-[42px] text-[#36578A] text-left tracking-[0px] font-bold text-[33px] leading-[40px] font-lato ">Test psychotechnique pour permis de conduire à Montgeron</p>
		</div>
	</header>
	<main class="pl-[139px] pr-[138px]">
		<p class="mt-[65px] text-left font-bold text-[31px] leading-[38px] tracking-[0px] text-[#383838] font-lato">Complétez votre réservation</p>
		<div class="w-full mt-[58px] ">

		</div>
	</main>
	<footer class="w-full h-[186px] flex sm:justify-between fixed bottom-0 bg-[#353535] bg-no-repeat shadow-[-1px_4px_26px_#00000029] border border-[#70707061]">
		<div class="w-[605px] h-[109px] ml-[139px] mt-[45px] bg-[#F2F3F5] bg-no-repeat bg-left-top border border-[#70707040] rounded-[20px]">

		</div>
		<div class="w-[286px] h-full mr-[178px]">
			<div class="flex sm:justify-between">
				<p class="mt-[39px] text-left text-[25px] leading-[30px] font-normal tracking-[0px] text-[#FFFFFF] font-lato">Total</p>
				<p class="mt-[21px] text-left text-[49px] leading-[58px] font-bold tracking-[0px] text-[#FFFFFF] font-lato">135€</p>
			</div>
			<button class="w-[286px] h-[61px] mt-[14px] bg-[#BF2A6B] shadow-[0px_3px_6px_#00000029] rounded-[12px] flex ">
				<p class="font-bold text-[26px] ml-[100px] mt-[11px] leading-[32px] text-[#FFFFFF] font-Lato">Suivant</p>
				<svg class="w-[22px] h-[20px] ml-[19.6px] mt-[20px] bg-no-repeat font-bold text-[#FFFFFF] font-lato" xmlns="http://www.w3.org/2000/svg" 
				     fill="currentColor" 
				     viewBox="0 0 24 24" 
				     strokeWidth={2} 
				     stroke="currentColor" 
				     className="w-6 h-6 text-[#FFFFFF]">
				  <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
				</svg>

			</button>
		</div>
	</footer>
</body>
</html>