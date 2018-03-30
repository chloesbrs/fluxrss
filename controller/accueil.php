<?php
    require "model/accueil_model.php";

//    $title = "Accueil";
//
//    $articles = get_last_articles(0,5);
//    
//    foreach($articles as $k => $v)
//    {
//        $articles[$k]['contenu'] = str_sub($articles[$k]['contenu']);
//    }

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-10 col-md-offset-2">
                <h1>Pour plus de contenu, veuillez sélectionner "Flux" dans le menu.<br>
                    Les derniers articles :<br>
                    </h1>
            </div>
        </div>
    </div>


    <?php 

    
$reponse = getLien();
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$reponse['lien']);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$contenu = curl_exec($curl);
$xml = new simpleXMLElement($contenu);
foreach($xml->channel->item as $v){
    
    require "view/accueil_view.php";
    
     } 

 
    
?>