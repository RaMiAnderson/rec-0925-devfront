<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réservation</title>

	<!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F2F3F5]">
	<header class="w-full h-[242px] bg-[#FFFFFF]" >
		<div class="w-full h-[50%] sm:relative ">
			<img src="/images/logo-2.png" alt="logo-2" class="w-[312px] h-[78px] sm:absolute top-[24px] left-[131px]">
		</div>
		<div class="w-full h-[50%] bg-no-repeat bg-left-top shadow-[0px_3px_14px_#00000029] sm:relative">
			<p class="absolute left-[139px] top-[42px] text-[#36578A] text-left tracking-[0px] font-bold text-[33px] leading-[40px] font-lato ">Test psychotechnique pour permis de conduire à Montgeron</p>
		</div>
	</header>
	<main class="pl-[139px] pr-[138px] pb-[291px]">
		<p class="mt-[65px] text-left font-bold text-[31px] leading-[38px] tracking-[0px] text-[#383838] font-lato">Complétez votre réservation</p>
		<div class="w-full mt-[58px] flex sm:justify-between">
			<div class="w-[499px] h-[716px] bg-[#FFFFFF] bg-no-repeat shadow-[0px_3px_6px_#00000029] rounded-[37px] 
						hover:bg-[#F2F3F5]">
				<div class="relative w-full h-[95px] bg-[#F2F3F5] bg-no-repeat shadow-[0px_3px_6px_#00000029] rounded-tl-[37px] rounded-tr-[37px] rounded-br-[0px] rounded-bl-[0px]">
					<p class="absolute left-[218px] top-[19px] text-left font-bold text-[28px] leading-[34px] font-lato tracking-[0px] text-[#2C2C2C]">Basic</p>
					<p class="absolute top-[59px] left-[99px] right-[98px] bottom-[12px] text-left font-normal text-[19.1px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Votre test psychotechnique simple</p>				
				</div>
				<div class="bg-[#FFFFFF] ml-[4px] mr-[4px] h-[617px] rounded-bl-[37px] rounded-br-[37px]">
					<div class="flex">
						<p class="mt-[63px] text-left font-bold text-[43px] leading-[51px] font-lato text-[#2C2C2C] ml-[172px]">+</p>
						<p class="ml-[18px] mt-[52px] text-left font-bold text-[61px] leading-[73px] font-lato text-[#2C2C2C]">0€</p>
					</div>
					<button class="h-[61px] w-[244px] bg-[#F2F3F5] bg-no-repeat bg-origin-padding bg-left-top shadow-[0px_3px_6px_#00000029] rounded-[12px] ml-[128px] mt-[41px] flex
									hover:bg-[#e6e6e7] hover:cursor-pointer">
						<div class="w-[19px] h-[19px] rounded-[50%] bg-[#FFFFFF] bg-no-repeat bg-left-top bg-origin-padding ml-[23px] mt-[22px] flex sm:justify-center sm:items-center">

						</div>
						<p class="ml-[28px] mt-[15px] text-left font-lato font-bold text-[26px] leading-[32px] text-[#353535] tracking-[0px]">Sélectionner</p>
					</button>
					<hr class="mt-[32.5px] border-[1px] border-[rgba(112,112,112,0.17)] h-[0px]">
					<div class="ml-[60.05px] mt-[32.5px] ">
						<div class="flex">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#2C2C2C]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Entraînement illimité et gratuit</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#2C2C2C]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Annulation jusqu'à 48 heures</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#2C2C2C]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
							</svg>

							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Recevez votre test le jour j</p>
						</div>
					</div>
				</div>
			</div>

			<div class="w-[499px] h-[716px] bg-[#0DBC0D] bg-no-repeat shadow-[0px_3px_6px_#00000029] rounded-[37px] 
						hover:bg-[#5eb85e]">
				<div class="relative w-full h-[95px] bg-[#0DBC0D] bg-no-repeat shadow-[0px_3px_6px_#00000029] rounded-tl-[37px] rounded-tr-[37px] rounded-br-[0px] rounded-bl-[0px]">
					<p class="absolute left-[185px] top-[19px] text-left font-bold text-[28px] leading-[34px] font-lato tracking-[0px] text-[#FFFFFF]">Assurance</p>
					<p class="absolute top-[59px] left-[79px] right-[80px] bottom-[12px] text-left font-normal text-[19.1px] leading-[24px] font-lato tracking-[0px] text-[#FFFFFF]">Votre test psychotechnique sans stress</p>				
				</div>
				<div class="bg-[#FFFFFF] ml-[4px] mr-[4px] h-[617px] rounded-bl-[37px] rounded-br-[37px]">
					<div class="flex">
						<p class="mt-[63px] text-left font-bold text-[43px] leading-[51px] font-lato text-[#2C2C2C] ml-[160px]">+</p>
						<p class="ml-[18px] mt-[52px] text-left font-bold text-[61px] leading-[73px] font-lato text-[#2C2C2C]">40€</p>
					</div>
					<p class="mt-[4px]  text-center text-[#2C2C2C] font-normal text-[16px] leading-[19px] font-lato">A peine le prix d'un resto</p>
					<button class="h-[61px] w-[244px] bg-[#0DBC0D] bg-no-repeat bg-origin-padding bg-left-top shadow-[0px_3px_6px_#00000029] rounded-[12px] ml-[128px] mt-[20px] flex
									hover:bg-[#56ac56] hover:cursor-pointer">
						<div class="w-[19px] h-[19px] rounded-[50%] bg-[#FFFFFF] bg-no-repeat bg-left-top bg-origin-padding ml-[23px] mt-[22px] flex sm:justify-center sm:items-center">
							<svg xmlns="http://www.w3.org/2000/svg" 
									viewBox="0 0 24 24" 
									fill="currentColor" 
									class="w-[20px] h-[20px] text-[#0DBC0D]">
								<path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
							</svg>
						</div>
						<p class="ml-[28px] mt-[15px] text-left font-lato font-bold text-[26px] leading-[32px] text-[#FFFFFF] tracking-[0px]">Sélectionner</p>
					</button>
					<hr class="mt-[32.5px] border-[1px] border-[rgba(112,112,112,0.17)] h-[0px]">
					<div class="ml-[26px] mt-[32.5px] ">
						<div class="flex">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#008400]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Entraînement illimité et gratuit</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#008400]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Annulation jusqu'à 48 heures</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     viewBox="0 0 24 24" 
							     fill="currentColor" 
							     class="w-[26px] h-[26px] text-[#008400]">
							  <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" clip-rule="evenodd" />
							</svg>

							<p class="ml-[16.73px] text-left font-bold text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Repassez votre test pour 0€ (si test échoué)</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#008400]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
							</svg>

							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Recevez votre test le jour j</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#008400]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Livret de préparation au test psychotechnique</p>
						</div>
					</div>
				</div>
			</div>

			<div class="w-[499px] h-[716px] bg-[#FFFFFF] bg-no-repeat shadow-[0px_3px_6px_#00000029] rounded-[37px] 
						hover:bg-[#36578A]">
				<div class="relative w-full h-[95px] bg-[#36578A] bg-no-repeat shadow-[0px_3px_6px_#00000029] rounded-tl-[37px] rounded-tr-[37px] rounded-br-[0px] rounded-bl-[0px]">
					<p class="absolute left-[185px] top-[19px] text-left font-bold text-[28px] leading-[34px] font-lato tracking-[0px] text-[#FFFFFF]">Complet</p>
					<p class="absolute top-[59px] left-[79px] right-[80px] bottom-[12px] text-left font-normal text-[19.1px] leading-[24px] font-lato tracking-[0px] text-[#FFFFFF]">Votre test psychotechnique sans stress</p>				
				</div>
				<div class="bg-[#FFFFFF] ml-[4px] mr-[4px] h-[617px] rounded-bl-[37px] rounded-br-[37px]">
					<div class="flex">
						<p class="mt-[63px] text-left font-bold text-[43px] leading-[51px] font-lato text-[#2C2C2C] ml-[161px]">+</p>
						<p class="ml-[8px] mt-[52px] text-left font-bold text-[61px] leading-[73px] font-lato text-[#2C2C2C]">60€</p>
					</div>
					<p class="mt-[1px]  text-center text-[#2C2C2C] font-normal text-[16px] leading-[19px] font-lato">A peine le prix de 4 pizzas</p>
					<button class="h-[61px] w-[244px] bg-[#36578A] bg-no-repeat bg-origin-padding bg-left-top shadow-[0px_3px_6px_#00000029] rounded-[12px] ml-[128px] mt-[20px] flex
									hover:bg-[#3c5883] hover:cursor-pointer">
						<div class="w-[19px] h-[19px] rounded-[50%] bg-[#FFFFFF] bg-no-repeat bg-left-top bg-origin-padding ml-[23px] mt-[22px] flex sm:justify-center sm:items-center">

						</div>
						<p class="ml-[28px] mt-[15px] text-left font-lato font-bold text-[26px] leading-[32px] text-[#FFFFFF] tracking-[0px]">Sélectionner</p>
					</button>
					<hr class="mt-[32.5px] border-[1px] border-[rgba(112,112,112,0.17)] h-[0px]">
					<div class="ml-[37px] mt-[30.16px] ">
						<div class="flex">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#36578A]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Entraînement illimité et gratuit</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#36578A]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
							</svg>
							<p class="ml-[16.73px] text-left font-bold text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Annulation jusqu'à 24 heures</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     viewBox="0 0 24 24" 
							     fill="currentColor" 
							     class="w-[26px] h-[26px] text-[#36578A]">
							  <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" clip-rule="evenodd" />
							</svg>

							<p class="ml-[16.73px] text-left font-bold text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Repassez votre test pour 0€ (si test échoué)</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#36578A]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
							</svg>

							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Recevez votre test le jour j</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#36578A]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Livret de préparation au test psychotechnique</p>
						</div>
						<div class="flex mt-[24px]">
							<svg xmlns="http://www.w3.org/2000/svg" 
							     fill="none" 
							     viewBox="0 0 24 24" 
							     stroke-width="1.5" 
							     stroke="currentColor" 
							     class="w-[26px] h-[26px] text-[#36578A]">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
							</svg>
							<p class="ml-[16.73px] text-left font-normal text-[20px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Téléchargez vos résultats en illimité</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="w-full h-[186px] flex sm:justify-between fixed bottom-0 bg-[#353535] bg-no-repeat shadow-[-1px_4px_26px_#00000029] border border-[#70707061]">
		<div class="w-[605px] h-[109px] ml-[139px] mt-[45px] bg-[#F2F3F5] bg-no-repeat bg-left-top border border-[#70707040] rounded-[20px] flex">
			<div class="w-[29px] h-full ml-[31px]">
				<svg xmlns="http://www.w3.org/2000/svg" 
				     viewBox="0 0 24 24" 
				     fill="currentColor" 
				     width="29" 
				     height="29"
				     class="mt-[40.61px] text-[#BF2A6B] bg-no-repeat">
				  <path fill-rule="evenodd" 
				        d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" 
				        clip-rule="evenodd" />
				</svg>

			</div>
			<div class=" h-full ml-[23.22px]">
				<p class="mt-[26px] text-left font-bold text-[25px] leading-[30px] font-lato tracking-[0px] text-[#36578A]">Test psychotechnique le 28 mars à 14:00</p>
				<p class="text-left  text-[#36578A] font-normal text-[20px] leading-[30px] tracking-[0.5px] font-lato">15 rue de la république Montgeron 91230</p>
			</div>
		</div>
		<div class="w-[286px] h-full mr-[178px]">
			<div class="flex sm:justify-between">
				<p class="mt-[39px] text-left text-[25px] leading-[30px] font-normal tracking-[0px] text-[#FFFFFF] font-lato">Total</p>
				<p class="mt-[21px] text-left text-[49px] leading-[58px] font-bold tracking-[0px] text-[#FFFFFF] font-lato">135€</p>
			</div>
			<button class="w-[286px] h-[61px] mt-[14px] bg-[#BF2A6B] shadow-[0px_3px_6px_#00000029] rounded-[12px] flex ">
				<p class="font-bold text-[26px] ml-[100px] mt-[11px] leading-[32px] text-[#FFFFFF] font-Lato">Suivant</p>
				<svg class="w-[22px] h-[20px] ml-[19.6px] mt-[20px] bg-no-repeat font-bold text-[#FFFFFF] font-lato" className="w-6 h-6 text-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
				  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
				</svg>


			</button>
		</div>
	</footer>
</body>
</html>