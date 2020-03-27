<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Formulaire PDF</title>
    <style>
        h1, h2 { color: #FF5A00; }
        h1 { text-align: center; }
        h2, p { margin: .75em .5em; }
        hr {
            border: 0;
            margin-top: 1.5em;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 90, 0, 0.75), rgba(0, 0, 0, 0));
        }
        form {
            width: 100%;
            padding: 5px 0;
            border: 1px solid #FF5A00;
            border-radius: 5px;
        }
        .c100 {
            width: 100%;
            margin: 10px 20px;
        }
        label {
            display: inline-block;
            min-width: 25%;
        }
        small { color: #FF5A00; }
        #provider input, #client input { width: 250px; }
        #details input { width: 300px; }
        #numbers input { width: 80px; }
        input[type="submit"] {
            color: RGB(200,100,0);
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 14px;
            border: 2px solid #FF5A00;
            transition: 250ms;
        }
        input[type="submit"]:hover {
            background-color: #FF5A00;
            color: white;
            cursor: pointer;
            box-shadow: 0 0 5px 0 #777;
            transition: 250ms;
        }
    </style>
</head>
<body>
  <h1>Formulaire de création de facture</h1>
    <form action="<?php echo action('PDFMaker@gen'); ?>" method="post">
    @csrf
    <h2>Prestataire</h2>
    <div id="provider">
      <div class="c100">
        <label for="providerName">Nom : </label>
        <input type="text" id="providerName" name="providerName" placeholder="EPHEC ASBL" required>
      </div>
      <div class="c100">
        <label for="providerRoad">Rue : </label>
        <input type="text" id="providerRoad" name="providerRoad" placeholder="Avenue Konrad Adenauer 3" required>
      </div>
      <div class="c100">
        <label for="providerLocality">Localité (code postal + nom de ville) : </label>
        <input type="text" id="providerLocality" name="providerLocality" placeholder="1200 Woluwe-Saint-Lambert" required>
      </div>
      <div class="c100">
        <label for="providerCountry">Pays : </label>
        <select id="providerCountry" name="providerCountry" required>
          <optgroup label="Europe">
              <option value="belgium" default>Belgique</option>
              <option value="france">France</option>
              <option value="luxembourg">Luxembourg</option>
              <option value="netherlands">Pays-Bas</option>
              <option value="swiss">Suisse</option>
          </optgroup>
        </select>
      </div>
    </div>
    <h2>Client</h2>
    <div id="client">
      <div class="c100">
        <label for="clientName">Nom : </label>
        <input type="text" id="clientName" name="clientName" required>
      </div>
      <div class="c100">
        <label for="clientRoad">Rue : </label>
        <input type="text" id="clientRoad" name="clientRoad" required>
      </div>
      <div class="c100">
        <label for="clientLocality">Localité (code postal + nom de ville) : </label>
        <input type="text" id="clientLocality" name="clientLocality" required>
      </div>
      <div class="c100">
        <label for="clientCountry">Pays : </label>
        <select id="clientCountry" name="clientCountry" required>
          <optgroup label="Europe">
              <option value="belgium" default>Belgique</option>
              <option value="france">France</option>
              <option value="luxembourg">Luxembourg</option>
              <option value="netherlands">Pays-Bas</option>
              <option value="swiss">Suisse</option>
          </optgroup>
        </select>
      </div>
    </div>
    <hr>
    <h2>Informations complémentaires sur la facture</h2>
    <div class="c100" id="numbers">
      <label for="title">Type de document : </label>
      <input type="text" id="title" name="title" placeholder="Facture" required>
      <small>Facture, note de crédit, etc.</small>
    </div>
    <div class="c100" id="numbers">
      <label for="invoiceNumber">Numéro de facture : </label>
      <input type="number" min=1 step=1 id="invoiceNumber" name="invoiceNumber" placeholder=1 required>
    </div>
    <div class="c100">
      <label for="date">Date d'émission : </label>
      <input type="date" id="date" name="date" placeholder="DD-MM-YYYY" title="Veuillez entre une date en respectant le format suivant : 30-09-1969" required>
    </div>
    <div class="c100">
      <label for="dateLimitPayment">Date limite de paiement : </label>
      <input type="date" id="dateLimitPayment" name="dateLimitPayment" placeholder="DD-MM-YYYY" title="Veuillez entre une date en respectant le format suivant : 30-09-1969">
    </div>
    <hr>
    <h2>Elément à facturer</h2>
    <p>Il est sous-entendu que la <strong>TVA</strong> est de <strong>21%</strong> et que <strong>le montant final est toutes taxes comprises.</strong>
      <br><em>A l'heure actuelle, ce formulaire ne peut générer qu'une facture d'un seul service.</em></p>
    <div id="details">
      <div class="c100">
        <label for="detailDesc">Description : </label>
        <input type="text" id="detailDesc" name="detailDesc">
      </div>
      <div class="c100" id="numbers">
        <label for="detailQty">Quantité (valeur unitaire) : </label>
        <input type="number" min=0 step=0.25 id="detailQty" name="detailQty" placeholder=1>    
      </div>
      <div class="c100" id="numbers">
        <label for="detailPriceHtva">Prix unitaire (HTVA) : </label>
        <input type="number" min=0 step=0.01 id="detailPriceHtva" name="detailPriceHtva">
      </div>
      <div class="c100" id="numbers">
        <label for="detailPrice">Prix unitaire (TTC) : </label>
        <input type="number" min=0 step=0.01 id="detailPrice" name="detailPrice">
      </div>
      <div class="c100" id="numbers">
        <label for="detailFinalPrice">Prix final (TTC) : </label>
        <input type="number" min=0 step=0.01 id="detailFinalPrice" name="detailFinalPrice">
      </div>
      <div class="c100" id="numbers">
        <label for="totalInvoice">Coût total de la facture : </label>
        <input type="number" min=0 step=0.01 id="totalInvoice" name="totalInvoice" required>
      </div>
    </div>
    <hr>
    <div class="c100" id="submit">
      <input type="submit" value="Générer la facture">
    </div>
  </form>
</body>
</html>