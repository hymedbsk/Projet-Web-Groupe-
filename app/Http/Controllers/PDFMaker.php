<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PDFMaker extends Controller {
    //
    function gen() {
        $pdf = App::make('dompdf.wrapper');
        
        $page = "<!DOCTYPE html>
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
            <div class='entreprise'>
                <p><em><strong>Prestataire :</strong></em>
                <br>EPHEC ASBL
                <br>Avenue Konrad Adenauer 3
                <br>1200 Woluwe-Saint-Lambert
                <br>Belgique</p>
            </div>
            <div class='client'>
                <p><em><strong>Client :</strong></em>
                <br>Toto
                <br>Avenue du Ciseau 15
                <br>1348 Louvain-la-Neuve
                <br>Belgique</p>
            </div>
            <p><strong>Facture</strong></p>
            <p>Date de la facture : " . date("d/m/Y") . "</p>
            <hr>
            <div class='details'>
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
                    <td>Service en heure forfaitaire</td>
                    <td>2</td>
                    <td>" . number_format(40, 2, ',', '.') . " €</td>
                    <td>21 %</td>
                    <td>" . number_format((40 * 1.21), 2, ',', '.') . " €</td>
                    <td>" . number_format(((40 * 1.21) * 2), 2, ',', '.') . " €</td>
                </tr>
                <tr>
                    <td>Service en heure forfaitaire</td>
                    <td>2</td>
                    <td>" . number_format(40, 2, ',', '.') . " €</td>
                    <td>21 %</td>
                    <td>" . number_format((40 * 1.21), 2, ',', '.') . " €</td>
                    <td>" . number_format(((40 * 1.21) * 2), 2, ',', '.') . " €</td>
                </tr>
                <tr>
                    <td>Service en heure forfaitaire</td>
                    <td>2</td>
                    <td>" . number_format(40, 2, ',', '.') . " €</td>
                    <td>21 %</td>
                    <td>" . number_format((40 * 1.21), 2, ',', '.') . " €</td>
                    <td>" . number_format(((40 * 1.21) * 2), 2, ',', '.') . " €</td>
                </tr>
                </table>
            </div>
            <div class='total'>
                <p><strong>Total facturé TTC :</strong> ". number_format(290.4, 2, ',', '.') . " €
                <br><strong>Echéance :</strong> " . date("d/m/Y",strtotime('+30 days')) . "</p>
            </div>
            <footer>
            <p><em>Conditions de vente disponible sur demande.</em></p>
            </footer>
        </body>
        </html>";
        
        $pdf -> loadHTML($page);
        return $pdf -> stream();
    }
}