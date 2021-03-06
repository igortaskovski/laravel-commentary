<?php

return array(

    /**
     * Form
     */

    'allowed_tags' => '',

    'validation_rules' => array(
        'name'  => 'required|max:200',
        'email' => 'required|email|max:200',
        'text'  => 'required',
    ),

    /**
     * Management
     */

    'management' => array(
        'paginate'             => 20,
        'row_approved_class'   => 'approved',
        'row_unapproved_class' => 'unapproved',
    ),
);
