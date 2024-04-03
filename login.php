

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/login.css">
	<title>Sign up Form</title>
</head>
<body>
	<div class="container card box mt-5 p1 px-5 py-2 box-color">
		<div class="row">
			<div class="col">
				<div class="row mt-2">
					<div class="col font-widht font">
						<label>Step 1: Your details </label>
					</div>
				</div>
				<div class="row  boxcolor p-1 ">
					<div class="col-4" >
						<label class="font1"><b> Name</b></label>
					</div>
					<div class="col-7" >
						<input type="text" name="" class="width border_none px-2 " placeholder="First and last name">
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Email</b></label>
					</div>
					<div class="col-7" >
						<input type="text" name="" class="width border_none px-2 " placeholder="example@domain.com">
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Phone</b></label>
					</div>
					<div class="col-7" >
						<input type="number" name="" class="width border_none px-2 " placeholder="Eg. +1234567890">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col font-widht font">
						<label>STEP 2: Delivery address </label>
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Address</b></label>
					</div>
					<div class="col-7" >
						<textarea name="" class="width border_none px-2 " rows="3" ></textarea>
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Post code</b></label>
					</div>
					<div class="col-7" >
						<input type="text" name="" class="width border_none px-2">
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Country</b></label>
					</div>
					<div class="col-7" >
						<input type="text" name="" class="width border_none px-2">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col font-widht font">
						<label>STEP 3: Card details </label>
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-12">
						<label class="font1"><b> Card type</b></label>
					</div>
					<div class="col-3 visa offset-1" >
						<input type="radio" name="cardtype">
                    <img src="img/visa.jpg" class="font1 " alt="...">VISA
						
					</div>
					<div class="col-3 visa" >
						<input type="radio" name="cardtype">
                        <img src="img/amex.png" class="font1 "alt="...">Amex
					</div>
					<div class="col-4 visa" >
						<input type="radio" name="cardtype">
                        <img src="img/mastercard.png" class="font1 " alt="...">Mastercard
						
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Card number</b></label>
					</div>
					<div class="col-7" >
						<input type="number" name="" class="width border_none px-2">
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b> Security code</b></label>
					</div>
					<div class="col-7" >
						<input type="number" name="" class="width border_none px-2">
					</div>
				</div>
				<div class="row boxcolor p-1 mt-1">
					<div class="col-4">
						<label class="font1"><b>Name on card</b></label>
					</div>
					<div class="col-7" >
						<input type="text" name="" class="width border_none px-2">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-12 sub-btn" >
						<input type="submit" name="" class="px-4 py-1" value="Buy it">
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>