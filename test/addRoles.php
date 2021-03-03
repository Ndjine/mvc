<?php
    require_once'../bootstrap.php';

    $roles = new Roles();
    $roles->setId(1);
    $roles ->setNom("ROLE_SUSER");
    $entityManager->persist($roles);
    $entityManager->flush();

    echo $roles->getId();
?>

