<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $contacts = [];

    $data = $_POST;

    //Modificação do banco
    if(!empty($data)){  
        print_r($data);

        //criar contato
        if($data["type"] === "create"){
            
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso";
        
            }
            catch(PDOException $e){
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }

    //Redirect home
    header("Location:" . $BASE_URL . "../index.php");
    }
    //Seleção de dados
    else{
        $id;
    if(!empty($_GET)){
        $id = $_GET['id'];
    }
    //Retorna um contato
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    }
    else{
        //Retona todos os contatos
    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();
    $contacts = $stmt->fetchAll();
    }
    }

    

    //fechar conexão
    $conn = null;