<?php

require 'setup.php';

// Define your data structure
class Offer extends \atk4\data\Model {

    public $table = 'offer';

    function init() {
        parent::init();

        // Persistence may not have structure, so we define here
        $this->addField('domain_name');
        $this->addFields(['contact_email', 'contact_phone']);
        $this->addField('date', ['type' => 'date']);
        $this->addField('offer', ['type' => 'money']);
        $this->addField('is_accepted', ['type' => 'boolean']);
    }

}

// Create Application object and initialize Admin Layout
$app = new \atk4\ui\App('Offer tracking system');
$app->initLayout('Admin');

// Connect to database and place a fully-interractive CRUD
$db = new \atk4\data\Persistence_SQL($dsn1, $dsn1_user, $dsn1_pass);
$app->layout->add(new \atk4\ui\CRUD())
        ->setModel(new Offer($db));
