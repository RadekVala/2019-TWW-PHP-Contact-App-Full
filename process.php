<?php
    require('classes/Database.class.php');
    require('classes/ContactModel.class.php');

    // insert into DB
    if(isset($_POST['action'])){
        // process actions
        switch($_POST['action']){
            case 'insert':
                // insert new record to DB

                // create new empty Contact object
                $Contact = new Contact();
                // fullfill properties from Form Data
                $Contact->Name = $_POST['name'];
                $Contact->Surname = $_POST['surname'];
                // save to DB
                $Contact->Save();
                break;

            case 'delete':
                // load Contact by ID
                $toDelete = Contact::Load($_POST['id']);
                // delete this Contact
                $toDelete->Delete();
                break;
        }
    }
    // redir to home page
    header('location: index.php');

?>