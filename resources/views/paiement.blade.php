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
		<div class="w-[60%]">
			<p class="text-left font-bold text-[35px] leading-[38px] tracking-[0px] text-[#383838] font-lato">Confirmer et Payer</p>
			<div class= "h-[115px] w-[87%] mt-[35px] border-solid border border-[#70707040] rounded-[17px] flex sm:items-center">
				<svg xmlns="http://www.w3.org/2000/svg" 
				     fill="none" 
				     viewBox="0 0 24 24" 
				     stroke-width="1.5" 
				     stroke="currentColor" 
				     class="w-[55px] h-[55px] text-[#da0f0f] ml-[25px]">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
				</svg>
				<div class="ml-[25px]">
					<p class="text-left font-medium text-[25px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C]">Date de réservation en forte demande</p>
					<p class="text-left font-medium text-[25px] leading-[24px] font-lato tracking-[0px] text-[#2C2C2C] mt-[10px]">Les réservations sont fréquentes pour ce centre</p>
				</div>
			</div>
			<p class="text-left font-bold text-[35px] leading-[38px] tracking-[0px] text-[#383838] font-lato mt-[45px]">Vos informations personnelles</p>
			<form action="#" class="mt-[22px] w-[87%] pb-[150px]">
				<input class="bg-[#a0a0a029] w-full pl-[25px] pt-[17px] pb-[17px] rounded-[12px] text-[20px] border border-solid border-[#70707040]" type="text" name="nom_prenom" id="user_nom" placeholder="Nom Prénom" >
				<input class="bg-[#a0a0a029] w-full pl-[25px] pt-[17px] pb-[17px] rounded-[12px] text-[20px] border border-solid border-[#70707040] mt-[15px]" type="email" name="email" id="user_email" placeholder="Email" >
				<input class="bg-[#a0a0a029] w-full pl-[25px] pt-[17px] pb-[17px] rounded-[12px] text-[20px] border border-solid border-[#70707040] mt-[15px]" type="text" name="phone_number" id="user_phone_number" placeholder="Numéro de téléphone" >

				<hr class="mt-[40px] border border-[#6b6a6a98] h-[0px]">

				<p class="text-left font-bold text-[35px] leading-[38px] tracking-[0px] text-[#383838] font-lato mt-[55px]">Votre test psychotechnique</p>

				<div class="mt-[25px] flex sm:items-center">
					<svg xmlns="http://www.w3.org/2000/svg" 
					     fill="none" 
					     viewBox="0 0 24 24" 
					     stroke-width="1.5" 
					     stroke="currentColor" 
					     class="w-[42px] h-[42px] text-[#2C2C2C] ">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
					</svg>
					<div class="ml-[30px]">
						<p class="text-[23px] font-bold font-lato text-[#2C2C2C]">Date</p>
						<p class="text-[24px] font-lato mt-[-5px] text-[#2C2C2C]">12 mai 2025</p>
					</div>
				</div>
				<div class="mt-[25px] flex sm:items-center">
					<svg xmlns="http://www.w3.org/2000/svg" 
					     fill="none" 
					     viewBox="0 0 24 24" 
					     stroke-width="1.5" 
					     stroke="currentColor" 
					     class="w-[42px] h-[42px] text-[#2C2C2C]">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
					</svg>
					<div class="ml-[30px]">
						<p class="text-[23px] font-bold font-lato text-[#2C2C2C]">Horaire</p>
						<p class="text-[24px] font-lato mt-[-5px] text-[#2C2C2C]">12:30</p>
					</div>
				</div>
				<div class="mt-[25px] flex sm:items-center">
					<svg xmlns="http://www.w3.org/2000/svg" 
					     fill="none" 
					     viewBox="0 0 24 24" 
					     stroke-width="1.5" 
					     stroke="currentColor" 
					     class="w-[42px] h-[42px] text-[#2C2C2C]">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
					  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
					</svg>
					<div class="ml-[30px]">
						<p class="text-[23px] font-bold font-lato text-[#2C2C2C]">Adresse</p>
						<p class="text-[24px] font-lato mt-[-5px] text-[#2C2C2C]">39 Rue Emile Steiner, 27200 Vernon</p>
					</div>
				</div>

				<hr class="mt-[55px] border border-[#6b6a6a98] h-[0px]">

				<p class="text-left font-bold text-[35px] leading-[38px] tracking-[0px] text-[#383838] font-lato mt-[55px]">Choisissez votre moyen de paiement</p>

				<div class="flex items-end">
					<svg xmlns="http://www.w3.org/2000/svg" 
					     viewBox="0 0 24 24" 
					     fill="currentColor" 
					     class="w-[35px] h-[35px] text-[#2C2C2C] ml-[-5px]">
					  <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
					</svg>
					<p class="ml-[10px] text-[#2C2C2C] font-lato text-[18px] tracking-[0px]">100% SÉCURISÉ</p>
				</div>

				<div class="w-full mt-[60px] ml-[10px]">
    				<label class="flex items-center space-x-8 border-b border-solid border-[#cacaca88] pb-7 pt-7]">
    				  <input type="radio" name="paiement" class="form-radio text-[#BF2A6B]  w-[20px] h-[20px] border opacity-[0.6] " />
    				  <img class="w-[90px]" src="https://www.reussir-mon-ecommerce.fr/wp-content/uploads/2016/03/Logo_CB-1-768x377.png" alt="Carte Bancaire" >
    				  <span class="text-[#2C2C2C] font-bold font-lato tracking-[0px] text-[22px]">Carte bancaire</span>
    				</label>

    				<label class="flex items-center space-x-8 border-b border-solid border-[#cacaca88] pb-7 pt-7">
    				  <input type="radio" name="paiement" class="form-radio text-[#BF2A6B]  w-[20px] h-[20px] border opacity-[0.6] " />
    				  <img class="w-[90px]" src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Apple_Pay_logo.svg" alt="ApplePay" >
    				  <span class="text-[#2C2C2C] font-bold font-lato tracking-[0px] text-[22px]">Apple Pay</span>
    				</label>

					<label class="flex items-center space-x-8 border-b border-solid border-[#cacaca88] pb-7 pt-7">
    				  <input type="radio" name="paiement" class="form-radio text-[#BF2A6B]  w-[20px] h-[20px] border opacity-[0.6] " />
    				  <img class="w-[90px] " src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" >
    				  <span class="text-[#2C2C2C] font-bold font-lato tracking-[0px] text-[22px]">PayPal</span>
    				</label>

					<label class="flex items-center space-x-8 border-b border-solid border-[#cacaca88] pb-7 pt-7">
    				  <input type="radio" name="paiement" class="form-radio text-[#BF2A6B]  w-[20px] h-[20px] border opacity-[0.6] " />
    				  <img class="w-[90px] " src="https://www.operlesduparadis.com/img/cms/badge%20logo%20-%20%20X3X4%20-%20White%20Color%20-%20146X40.png" alt="Alma" >
    				  <span class="text-[#2C2C2C] font-bold font-lato tracking-[0px] text-[22px]">Alma</span>
    				</label>
				</div>

				<button type="submit" class="w-full h-[61px] mt-[70px] bg-[#BF2A6B] shadow-[0px_3px_6px_#00000029] rounded-[12px] flex sm:justify-center">
					<p class="font-bold text-[22px] mt-[15px] ml-[25px] leading-[32px] text-[#FFFFFF] font-Lato">Je réserve mon test psychotechnique</p>
					<svg class="w-[22px] h-[22px] ml-[19.6px] mt-[21px] bg-no-repeat font-bold text-[#FFFFFF] font-lato" className="w-6 h-6 text-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
					  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
					</svg>
				</button>
			</form>
		</div>
		<div class="w-[650px] right-[138px] h-[650px] fixed ">
			<div class= "h-[300px] w-full  border-solid border border-[#70707040] rounded-[17px] pt-[30px] pb-[30px] pl-[45px] pr-[50px] flex flex-col sm:items-center">
				<p class="text-left font-bold text-[25px] leading-[24px] font-lato tracking-[0px] text-[#BF2A6B] mt-[10px]">Récapitulatif de votre test psychotechnique</p>
				<div class="w-full flex mt-[10px]">
					<p class="text-left font-normal text-[22px] leading-[20px] font-lato tracking-[0px] text-[#525252] mt-[50px] ml-[25px]">Total à payer : </p>
					<p class="font-bold font-lato mt-[44px] ml-[10px] text-[22px] text-[#2C2C2C]"> 130.00€</p>
				</div>
				<p class="mt-[25px] ml-[25px] font-lato text-[#525252] text-[17px]">En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP. Veuillez consulter notre politique de protection des données.</p>
			</div>
			<div class="mt-[30px] w-full h-[180px] flex justify-between pl-[80px] pr-[80px]">
				<div class="flex flex-col items-center">
					<div class="w-[70px] h-[70px] rounded-[50%] shadow-[0px_3px_6px_#00000029] flex justify-center items-center overflow-hidden">
						<img class=" w-[40px] h-[40px]" src="/images/touch.png" alt="Touch" srcset="">
					</div>
					<p class="mt-[30px] font-lato font-bold text-[17px]">Entraînement</p>
					<p class=" font-lato text-[17px]">Gratuit Illimité</p>
				</div>

				<div class="flex flex-col items-center ml-[10px]">
					<div class="w-[70px] h-[70px] rounded-[50%] shadow-[0px_3px_6px_#00000029] flex justify-center items-center overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" 
						     fill="none" 
						     viewBox="0 0 24 24" 
						     stroke-width="1.5" 
						     stroke="currentColor" 
						     class="w-[40px] h-[40px] text-[#0DBC0D]">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
						</svg>
					</div>
					<p class="mt-[30px] font-lato font-bold text-[17px]">Résultats</p>
					<p class=" font-lato text-[17px]">le Jour Même</p>
				</div>

				<div class="flex flex-col items-center">
					<div class="w-[70px] h-[70px] rounded-[50%] shadow-[0px_3px_6px_#00000029] flex justify-center items-center overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" 
						     fill="none" 
						     viewBox="0 0 24 24" 
						     stroke-width="1.5" 
						     stroke="currentColor" 
						     class="w-[40px] h-[40px] text-[#0DBC0D]">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
						</svg>

					</div>
					<p class="mt-[30px] font-lato font-bold text-[17px]">Annulations</p>
					<p class=" font-lato text-[17px]">Gratuit jusqu'à 48h</p>
				</div>
			</div>
		</div>
	</main>

</body>
</html>