<?php
    require_once 'Companycustomer.php';

    $utenteGenerico = new User('genUs3r', '3ht5ufih34t');

    $cliente = new Customer('genCust0m', '3875tbvg34r', 'Mario', 'Rossi', 'Via Arciboldi, 9', 'Via Arciboldi, 9', '5645623854');

    $aziendaCliente = new Companycustomer('genC0mpany', 'behtruy4b', 'Luca', 'Bianchi', 'Via Rimembranze, 7', 'Via Ostrogoti, 17', '5464584942', 'Via Ostrogoti, 17');
    $aziendaCliente->setPhone(5648213542);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2><?php echo $utenteGenerico->getAnagraphUser();?></h2>
    <p></p>

    <h2><?php echo $cliente->getAnagraphCustomer();?></h2>
    <p></p>

    <h2><?php echo $aziendaCliente->getAnagraphCompany();?></h2>
    <p></p>
    
</body>
</html>