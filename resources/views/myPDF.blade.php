<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
	<style>
	body { margin: .5em 0; }
	.entreprise, .total { text-align: right; }
	hr { color: #ddd; }
	table {
		width: 100%;
		text-align: center;
	}
	th {
		background-color: #FF5A00;
		color: white;
	}
	th td { border-bottom: 1px solid #ddd; }
	tr:nth-child(even) { background-color: #f2f2f2; }
	footer {
		position: fixed;
		left: 0;
		bottom: 1em;
		width: 100%;
	}
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
	<p><strong>{{ $title }} n° {{ $invoiceNumber }}</strong></p>
	<p>Date de la facture : {{ $date }}</p>
	<hr>
	<div class="details">
		<h2>Détails de la facture :</h2>
		<table>
		<tr>
			<th>Description</th>
			<th>Quantité</th>
			<th>Prix unitaire HTVA</th>
			<th>Taux TVA</th>
			<th>Prix unitaire TTC</th>
			<th>Total TTC</th>
		</tr>
		<tr>
			<td>{{ $detailDesc }}</td>
			<td>{{ $detailQty }}</td>
			<td>{{ $detailPriceHtva }} €</td>
			<td>{{ $TVA }}</td>
			<td>{{ $detailPrice }} €</td>
			<td>{{ $detailFinalPrice }} €</td>
		</tr>
		<tr>
			<td>{{ $detailDesc }}</td>
			<td>{{ $detailQty }}</td>
			<td>{{ $detailPriceHtva }} €</td>
			<td>{{ $TVA }}</td>
			<td>{{ $detailPrice }} €</td>
			<td>{{ $detailFinalPrice }} €</td>
		</tr>
		<tr>
			<td>{{ $detailDesc }}</td>
			<td>{{ $detailQty }}</td>
			<td>{{ $detailPriceHtva }} €</td>
			<td>{{ $TVA }}</td>
			<td>{{ $detailPrice }} €</td>
			<td>{{ $detailFinalPrice }} €</td>
		</tr>
		</table>
	</div>
	<div class="total">
		<p><strong>Total facturé TTC :</strong> {{ $totalInvoice }} €
		<br><strong>Echéance :</strong> {{ $dateLimitPayment }}</p>
	</div>
	<footer>
	<p><em>Conditions de vente disponible sur demande.</em></p>
	</footer>
</body>
</html>