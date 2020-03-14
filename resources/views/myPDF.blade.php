<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<style>
	body {
		margin-top: 1em 0;
	}
	.entreprise, .total { text-align: right; }
	</style>
</head>
<body>
	<h1>EPHEC Entreprendre</h1>
	<div class="entreprise">
		<p><em><strong>Prestataire :</strong></em>
		<br>{{ $providerName }}
		<br>{{ $providerRoad }}
		<br>{{ $providerLocality }}
		<br>{{ $providerCountry }}</p>
	</div>
	<div class="client">
		<p><em><strong>Client :</strong></em>
		<br>{{ $clientName }}
		<br>{{ $clientRoad }}
		<br>{{ $clientLocality }}
		<br>{{ $clientCountry }}</p>
	</div>
	<p><strong>{{ $title }}</strong></p>
	<p>Date de la facture : {{ $date }}</p>
	<hr>
	<div class="details">
		<h2>Détails de la facture :</h2>
		<table style="width:100%">
		<tr>
			<th>Description</th>
			<th>Quantité</th>
			<th>Prix unitaire HTVA</th>
			<th>Taux TVA</th>
			<th>Prix unitaire TTC</th>
			<th>Total TTC</th>
		</tr>
		<!-- <tr>
			<td></td>
		</tr> -->
		</table>
	</div>
	<div class="total">
		<p><strong>Total facturé :</strong> {{ $totalInvoice }} €</p>
	</div>
</body>
</html>